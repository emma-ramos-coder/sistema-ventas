<?php

namespace App\Http\Controllers;

use App\Models\DocumentType;
use App\Models\City;
use App\Models\Supplier;
use Illuminate\Http\Request;

/**
 * Class SupplierController
 * @package App\Http\Controllers
 */
class SupplierController extends Controller
{
    public function __construct(){
        $this->middleware('can:suppliers.index')->only('index');
        $this->middleware('can:suppliers.create')->only('create','store');
        $this->middleware('can:suppliers.show')->only('show');
        $this->middleware('can:suppliers.edit')->only('edit','update');
        $this->middleware('can:suppliers.destroy')->only('destroy');
    }
    public function index()
    {
        $suppliers = Supplier::paginate();

        return view('supplier.index', compact('suppliers'))
            ->with('i', (request()->input('page', 1) - 1) * $suppliers->perPage());
    }

    public function create()
    {
        $supplier = new Supplier();
        $document_types = DocumentType::pluck('description','id');
        $cities = City::pluck('city_name','id');
        return view('supplier.create', compact('supplier','document_types','cities'));
    }

    public function store(Request $request)
    {
        request()->validate(Supplier::$rules);

        $supplier = Supplier::create($request->all());

        return redirect()->route('suppliers.index')
            ->with('success', 'Proveedor creado satisfactoriamente.');
    }

    public function show($id)
    {
        $supplier = Supplier::find($id);

        return view('supplier.show', compact('supplier'));
    }

    public function edit($id)
    {
        $supplier = Supplier::find($id);
        $document_types = DocumentType::pluck('description','id');
        $cities = City::pluck('city_name','id');
        return view('supplier.edit', compact('supplier','document_types','cities'));
    }

    public function update(Request $request, Supplier $supplier)
    {
        request()->validate(Supplier::$rules);

        $supplier->update($request->all());

        return redirect()->route('suppliers.index')
            ->with('success', 'Proveedor actualizado satisfactoriamente');
    }

    public function destroy($id)
    {
        $supplier = Supplier::find($id)->delete();

        return redirect()->route('suppliers.index')
            ->with('success', 'Proveedor eliminado satisfactoriamente');
    }
}
