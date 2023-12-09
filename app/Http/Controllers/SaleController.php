<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use App\Models\WayToPay;
use App\Models\Sale;
use App\Models\Article;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * Class SaleController
 * @package App\Http\Controllers
 */
class SaleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::paginate();

        return view('sale.index', compact('sales'))
            ->with('i', (request()->input('page', 1) - 1) * $sales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sale = new Sale();
        $customers = Customer::pluck('document_number','id');
        $articles = Article::pluck('description','id');
        //$users = User::pluck('name','id');
        $way_to_pays = WayToPay::pluck('way_to_pay_description','id');
        return view('sale.create', compact('sale','customers','articles','way_to_pays'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sale::$rules);

        $sale = Sale::create($request->all()+['user_id'=>Auth::user()->id,'invoice_date'=>Carbon::now('America/Lima'),]);
        foreach ($request->article_id as $key=>$product){
            $results[] = array("article_id"=>$request->article_id[$key], "quantity"=>$request->quantity[$key], "price"=>$request->price[$key]);
        }
        $sale->saleDetails()->createMany($results);

        return redirect()->route('sales.index')
            ->with('success', 'Venta creada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = Sale::find($id);

        return view('sale.show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sale = Sale::find($id);
        $customers = Customer::pluck('document_number','id');
        $users = User::pluck('name','id');
        $articles = Article::pluck('description','id');
        $way_to_pays = WayToPay::pluck('way_to_pay_description','id');
        return view('sale.edit', compact('sale','customers','users','articles','way_to_pays'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sale $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        /* request()->validate(Sale::$rules);

        $sale->update($request->all());

        return redirect()->route('sales.index')
            ->with('success', 'Venta actualizada satisfactoriamente'); */
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        /* $sale = Sale::find($id)->delete();

        return redirect()->route('sales.index')
            ->with('success', 'Venta eliminada satisfactoriamente'); */
    }
}
