<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Facade;
use DB;
use View;
use App\Models\Article;
use App\Models\ItemType;



class ReportController extends Controller
{
    public function __construct(){
         $this->middleware('auth');
    }

    public function generar2(){
        //return view('reporte');
        $productos = \DB::table('articles')
            ->select(['id','description','sale_price','stock'])
            ->get();
            //dd($productos);
            $view = \View::make('reportes/r2',compact('productos'))->render();
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream('informe'.'.pdf');
    }

    public function generar3(){
        //return view('reporte');
        $productos = \DB::table('articles')
            ->select(['id','description','cost_price','stock'])
            ->where('stock','=','0')
            ->get();
            //dd($productos);
            $view = \View::make('reportes/r3',compact('productos'))->render();
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream('informe'.'.pdf');
    }

    public function generar7(){
        $clientes = \DB::table('customers')
            ->join('cities','customers.city_id','=','cities.id')
            ->select(['customers.id','surnames','names','document_number','city_name'])
            ->orderBy('city_name','asc')
            ->orderBy('surnames','asc')
            ->get();
            //dd($productos);
            $view = \View::make('reportes/r7',compact('clientes'))->render();
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream('informe'.'.pdf');
    }

    public function generar9(){
        //return view('reporte');
        $productos = \DB::table('articles')
            ->join('item_types','articles.item_type_id','=','item_types.id')
            ->select(['articles.id','description','sale_price','stock','item_type_description'])
            ->orderBy('item_type_description','asc')
            ->orderBy('description','asc')
            ->get();
            //dd($productos);
            $view = \View::make('reportes/r9',compact('productos'))->render();
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream('informe'.'.pdf');
    }
}
