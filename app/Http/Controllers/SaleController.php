<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use App\Models\WayToPay;
use App\Models\Sale;
use App\Models\Article;
use App\Models\SaleDetail;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;

/**
 * Class SaleController
 * @package App\Http\Controllers
 */
class SaleController extends Controller
{
    public function __construct(){
        $this->middleware('can:sales.index')->only('index');
        $this->middleware('can:sales.create')->only('create','store');
        $this->middleware('can:sales.show')->only('show');
    }

    public function index()
    {
        $sales = Sale::paginate();

        return view('sale.index', compact('sales'))
            ->with('i', (request()->input('page', 1) - 1) * $sales->perPage());
    }

    public function create()
    {
        $sale = new Sale();
        $customers = Customer::pluck('document_number','id');
        $articles = Article::get();
        //$users = User::pluck('name','id');
        $way_to_pays = WayToPay::pluck('way_to_pay_description','id');
        return view('sale.create', compact('sale','customers','articles','way_to_pays'));
    }

    public function store(Request $request)
    {
        request()->validate(Sale::$rules);

        $sale = Sale::create($request->all()+['user_id'=>Auth::user()->id]);

        $saleDetails = [];
        foreach ($request->article_id as $key => $product) {
            $saleDetails[] = new SaleDetail([
                "article_id" => $request->article_id[$key],
                "quantity" => $request->quantity[$key],
                "price" => $request->price[$key]
            ]);

             // Obtener el producto por su ID para actualizar stock
            $article = Article::find($request->article_id[$key]);
            // Verificar si el producto existe y restar la cantidad vendida del stock
            if ($article) {
                $newStock = $article->stock - $request->quantity[$key];
                $article->update(['stock' => $newStock]);
            }
        }
        $sale->saleDetails()->saveMany($saleDetails);

        return redirect()->route('sales.index')
            ->with('success', 'Venta creada satisfactoriamente.');
    }


    public function show(Sale $sale)
    {
        $subtotal=0;
        $saleDetails = $sale->saleDetails;
        foreach ($saleDetails as $saleDetail){
            $subtotal += $saleDetail->quantity * $saleDetail->price;
        }

        return view('sale.show', compact('sale','saleDetails','subtotal'));
    }

    public function pdf(Sale $sale)
    {
        $subtotal=0;
        $saleDetails = $sale->saleDetails;
        foreach ($saleDetails as $saleDetail){
            $subtotal += $saleDetail->quantity * $saleDetail->price;
        }

        $view = View::make('sale/pdf',compact('sale', 'subtotal', 'saleDetails'))->render();
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream('informe'.'.pdf');
    }

}
