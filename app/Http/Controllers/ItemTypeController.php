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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemTypes = ItemType::paginate();

        return view('item-type.index', compact('itemTypes'))
            ->with('i', (request()->input('page', 1) - 1) * $itemTypes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $itemType = new ItemType();
        return view('item-type.create', compact('itemType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ItemType::$rules);

        $itemType = ItemType::create($request->all());

        return redirect()->route('item-types.index')
            ->with('success', 'Tipo de articulo creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $itemType = ItemType::find($id);

        return view('item-type.show', compact('itemType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itemType = ItemType::find($id);

        return view('item-type.edit', compact('itemType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ItemType $itemType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemType $itemType)
    {
        request()->validate(ItemType::$rules);

        $itemType->update($request->all());

        return redirect()->route('item-types.index')
            ->with('success', 'Tipo de articulo actualizado satisfactoriamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $itemType = ItemType::find($id)->delete();

        return redirect()->route('item-types.index')
            ->with('success', 'Tipo de articulo eliminado satisfactoriamente');
    }
}
