<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\City;
use App\Models\Customer;
use App\Models\DocumentType;
use App\Models\ItemType;
use App\Models\Sale;
use App\Models\Supplier;
use App\Models\WayToPay;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $total_productos = Article::count();
        $total_clientes = Customer::count();
        $total_proveedores = Supplier::count();
        $total_ventas = Sale::count();
        $total_tipos_doc = DocumentType::count();
        $total_ciudades = City::count();
        $total_tipos_art = ItemType::count();
        $total_formas_pago= WayToPay::count();
        return view('home', compact('total_productos','total_clientes','total_proveedores','total_ventas','total_tipos_doc','total_ciudades','total_tipos_art','total_formas_pago'));
    }
}
