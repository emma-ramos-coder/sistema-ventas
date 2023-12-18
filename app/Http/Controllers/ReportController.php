<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use \Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\Article;
use App\Models\ItemType;



class ReportController extends Controller
{
    public function __construct(){
         $this->middleware('auth');
    }

    public function generar1(){
        $productos = DB::table('articles')
            ->join('sale_details', 'articles.id', '=', 'sale_details.article_id')
            ->select([
                'articles.description',
                DB::raw('SUM(sale_details.quantity) as cantidad'),
                DB::raw('FORMAT(SUM(sale_details.quantity*sale_details.price), 2) as ventas')
            ])
            ->groupBy('articles.description')
            ->orderByDesc(DB::raw('SUM(sale_details.quantity)'))
            ->orderByDesc(DB::raw('SUM(sale_details.quantity*sale_details.price)'))
            ->orderBy('articles.description')
            ->get();
            //dd($productos);
            $view = View::make('reportes/r1',compact('productos'))->render();
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream('informe'.'.pdf');
    }
    public function generar2(){
        //return view('reporte');
        $productos = DB::table('articles')
            ->select(['id','description','sale_price','stock'])
            ->get();
            //dd($productos);
            $view = View::make('reportes/r2',compact('productos'))->render();
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream('informe'.'.pdf');
    }

    public function generar3(){
        //return view('reporte');
        $productos = DB::table('articles')
            ->select(['id','description','cost_price','stock'])
            ->where('stock','=','0')
            ->get();
            //dd($productos);
            $view = View::make('reportes/r3',compact('productos'))->render();
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream('informe'.'.pdf');
    }

    public function generar4(){
        $ventas = DB::table('sales')
            ->select(['invoice_date',DB::raw('SUM(total_invoice) as total')])
            ->groupBy('invoice_date')
            ->orderBy('invoice_date')
            ->get();
            //dd($productos);
            $view = View::make('reportes/r4',compact('ventas'))->render();
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream('informe'.'.pdf');
    }

    public function generar5(){
        $ventas = DB::table('customers')
            ->join('sales', 'customers.id', '=', 'sales.customer_id')
            ->select(['customers.document_number', 'customers.surnames','customers.names',DB::raw('SUM(sales.total_invoice) as total')])
            ->groupBy('customers.document_number')
            ->groupBy('customers.surnames')
            ->groupBy('customers.names')
            ->orderByDesc('total')
            ->orderBy('customers.surnames')
            ->orderBy('customers.names')
            ->get();
            //dd($productos);
            $view = View::make('reportes/r5',compact('ventas'))->render();
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream('informe'.'.pdf');
    }


    public function generar6(){
        $ventas = DB::table('suppliers')
            ->join('articles', 'suppliers.id', '=', 'articles.supplier_id')
            ->join('sale_details', 'articles.id', '=', 'sale_details.article_id')
            ->select(['suppliers.document_number', 'suppliers.tradename',DB::raw('FORMAT(SUM(sale_details.quantity*sale_details.price), 2) as total')])
            ->groupBy('suppliers.document_number')
            ->groupBy('suppliers.tradename')
            ->orderByDesc(DB::raw('SUM(sale_details.quantity*sale_details.price)'))
            ->orderBy('suppliers.tradename')
            ->get();
            //dd($productos);
            $view = View::make('reportes/r6',compact('ventas'))->render();
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream('informe'.'.pdf');
    }

    public function generar7(){
        $clientes = DB::table('customers')
            ->join('cities','customers.city_id','=','cities.id')
            ->select(['customers.id','surnames','names','document_number','city_name'])
            ->orderBy('city_name','asc')
            ->orderBy('surnames','asc')
            ->get();
            //dd($productos);
            $view = View::make('reportes/r7',compact('clientes'))->render();
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream('informe'.'.pdf');
    }

    public function generar8(){
        $ventas = DB::table('way_to_pays')
            ->join('sales', 'way_to_pays.id', '=', 'sales.way_to_pay_id')
            ->select(['way_to_pays.way_to_pay_description', DB::raw('SUM(sales.total_invoice) as total')])
            ->groupBy('way_to_pays.way_to_pay_description')
            ->orderByDesc('total')
            ->orderBy('way_to_pays.way_to_pay_description')
            ->get();
            //dd($productos);
            $view = View::make('reportes/r8',compact('ventas'))->render();
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream('informe'.'.pdf');
    }


    public function generar9(){
        //return view('reporte');
        $productos = DB::table('articles')
            ->join('item_types','articles.item_type_id','=','item_types.id')
            ->select(['articles.id','description','sale_price','stock','item_type_description'])
            ->orderBy('item_type_description','asc')
            ->orderBy('description','asc')
            ->get();
            //dd($productos);
            $view = View::make('reportes/r9',compact('productos'))->render();
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream('informe'.'.pdf');
    }

    public function generar10(){
        $ventas = DB::table('users')
            ->join('sales', 'users.id', '=', 'sales.user_id')
            ->select(['users.name', DB::raw('SUM(sales.total_invoice) as total')])
            ->groupBy('users.name')
            ->orderByDesc('total')
            ->orderBy('users.name')
            ->get();
            //dd($productos);
            $view = View::make('reportes/r10',compact('ventas'))->render();
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream('informe'.'.pdf');
    }
}
