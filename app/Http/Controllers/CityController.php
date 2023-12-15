<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;


class CityController extends Controller
{
    public function __construct(){
        $this->middleware('can:cities.index')->only('index');
        $this->middleware('can:cities.create')->only('create','store');
        $this->middleware('can:cities.show')->only('show');
        $this->middleware('can:cities.edit')->only('edit','update');
        $this->middleware('can:cities.destroy')->only('destroy');

    }
    public function index()
    {
        $cities = City::paginate();

        return view('city.index', compact('cities'))
            ->with('i', (request()->input('page', 1) - 1) * $cities->perPage());
    }


    public function create()
    {
        $city = new City();
        return view('city.create', compact('city'));
    }


    public function store(Request $request)
    {
        request()->validate(City::$rules);

        $city = City::create($request->all());

        return redirect()->route('cities.index')
            ->with('success', 'Ciudad creada satisfactoriamente.');
    }


    public function show($id)
    {
        $city = City::find($id);

        return view('city.show', compact('city'));
    }


    public function edit($id)
    {
        $city = City::find($id);

        return view('city.edit', compact('city'));
    }


    public function update(Request $request, City $city)
    {
        request()->validate(City::$rules);

        $city->update($request->all());

        return redirect()->route('cities.index')
            ->with('success', 'Ciudad actualizada satisfactoriamente');
    }


    public function destroy($id)
    {
        $city = City::find($id)->delete();

        return redirect()->route('cities.index')
            ->with('success', 'Ciudad eliminada satisfactoriamente');
    }
}
