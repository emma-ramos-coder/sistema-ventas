<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Customer;
use App\Models\DocumentType;
use Illuminate\Http\Request;

/**
 * Class CustomerController
 * @package App\Http\Controllers
 */
class CustomerController extends Controller
{
    public function __construct(){
        $this->middleware('can:customers.index')->only('index');
        $this->middleware('can:customers.create')->only('create','store');
        $this->middleware('can:customers.show')->only('show');
        $this->middleware('can:customers.edit')->only('edit','update');
        $this->middleware('can:customers.destroy')->only('destroy');
    }

    public function index()
    {
        $customers = Customer::paginate();

        return view('customer.index', compact('customers'))
            ->with('i', (request()->input('page', 1) - 1) * $customers->perPage());
    }


    public function create()
    {
        $customer = new Customer();
        $document_types = DocumentType::pluck('description','id');
        $cities = City::pluck('city_name','id');
        return view('customer.create', compact('customer','document_types','cities'));
    }


    public function store(Request $request)
    {
        request()->validate(Customer::$rules);

        $customer = Customer::create($request->all());

        return redirect()->route('customers.index')
            ->with('success', 'Cliente creado satisfactoriamente.');
    }


    public function show($id)
    {
        $customer = Customer::find($id);

        return view('customer.show', compact('customer'));
    }


    public function edit($id)
    {
        $customer = Customer::find($id);
        $document_types = DocumentType::pluck('description','id');
        $cities = City::pluck('city_name','id');
        return view('customer.edit', compact('customer','document_types','cities'));
    }


    public function update(Request $request, Customer $customer)
    {
        request()->validate(Customer::$rules);

        $customer->update($request->all());

        return redirect()->route('customers.index')
            ->with('success', 'Cliente actualizado satisfactoriamente');
    }


    public function destroy($id)
    {
        $customer = Customer::find($id)->delete();

        return redirect()->route('customers.index')
            ->with('success', 'Cliente eliminado satisfactoriamente');
    }
}
