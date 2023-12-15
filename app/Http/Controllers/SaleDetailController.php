<?php

namespace App\Http\Controllers;

use App\Models\SaleDetail;
use Illuminate\Http\Request;

/**
 * Class SaleDetailController
 * @package App\Http\Controllers
 */
class SaleDetailController extends Controller
{

    public function index()
    {
        $saleDetails = SaleDetail::paginate();

        return view('sale-detail.index', compact('saleDetails'))
            ->with('i', (request()->input('page', 1) - 1) * $saleDetails->perPage());
    }


    public function create()
    {
        $saleDetail = new SaleDetail();
        return view('sale-detail.create', compact('saleDetail'));
    }


    public function store(Request $request)
    {
        request()->validate(SaleDetail::$rules);

        $saleDetail = SaleDetail::create($request->all());

        return redirect()->route('sale-details.index')
            ->with('success', 'Detalle de venta creado satisfactoriamente.');
    }


    public function show($id)
    {
        $saleDetail = SaleDetail::find($id);

        return view('sale-detail.show', compact('saleDetail'));
    }


    public function edit($id)
    {
        $saleDetail = SaleDetail::find($id);

        return view('sale-detail.edit', compact('saleDetail'));
    }


    public function update(Request $request, SaleDetail $saleDetail)
    {
        request()->validate(SaleDetail::$rules);

        $saleDetail->update($request->all());

        return redirect()->route('sale-details.index')
            ->with('success', 'Detalle de venta actualizado satisfactoriamente');
    }


    public function destroy($id)
    {
        $saleDetail = SaleDetail::find($id)->delete();

        return redirect()->route('sale-details.index')
            ->with('success', 'Detalle de venta eliminado satisfactoriamente');
    }
}
