<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Customer;
use App\Models\Sale;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_productos = Article::count();
        $total_clientes = Customer::count();
        $total_proveedores = Supplier::count();
        $total_ventas = Sale::count();
        return view('home', compact('total_productos','total_clientes','total_proveedores','total_ventas'));
    }
}
