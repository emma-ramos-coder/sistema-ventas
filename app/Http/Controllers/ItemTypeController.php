<?php

namespace App\Http\Controllers;

use App\Models\ItemType;
use Illuminate\Http\Request;

/**
 * Class ItemTypeController
 * @package App\Http\Controllers
 */
class ItemTypeController extends Controller
{
    public function __construct(){
        $this->middleware('can:item-types.index')->only('index');
        $this->middleware('can:item-types.create')->only('create','store');
        $this->middleware('can:item-types.show')->only('show');
        $this->middleware('can:item-types.edit')->only('edit','update');
        $this->middleware('can:item-types.destroy')->only('destroy');
    }
    public function index()
    {
        $itemTypes = ItemType::paginate();

        return view('item-type.index', compact('itemTypes'))
            ->with('i', (request()->input('page', 1) - 1) * $itemTypes->perPage());
    }


    public function create()
    {
        $itemType = new ItemType();
        return view('item-type.create', compact('itemType'));
    }


    public function store(Request $request)
    {
        request()->validate(ItemType::$rules);

        $itemType = ItemType::create($request->all());

        return redirect()->route('item-types.index')
            ->with('success', 'Tipo de articulo creado satisfactoriamente.');
    }


    public function show($id)
    {
        $itemType = ItemType::find($id);

        return view('item-type.show', compact('itemType'));
    }


    public function edit($id)
    {
        $itemType = ItemType::find($id);

        return view('item-type.edit', compact('itemType'));
    }


    public function update(Request $request, ItemType $itemType)
    {
        request()->validate(ItemType::$rules);

        $itemType->update($request->all());

        return redirect()->route('item-types.index')
            ->with('success', 'Tipo de articulo actualizado satisfactoriamente');
    }


    public function destroy($id)
    {
        $itemType = ItemType::find($id)->delete();

        return redirect()->route('item-types.index')
            ->with('success', 'Tipo de articulo eliminado satisfactoriamente');
    }
}
