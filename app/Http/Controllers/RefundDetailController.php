<?php

namespace App\Http\Controllers;

use App\Models\RefundDetail;
use Illuminate\Http\Request;

/**
 * Class RefundDetailController
 * @package App\Http\Controllers
 */
class RefundDetailController extends Controller
{

    public function index()
    {
        $refundDetails = RefundDetail::paginate();

        return view('refund-detail.index', compact('refundDetails'))
            ->with('i', (request()->input('page', 1) - 1) * $refundDetails->perPage());
    }


    public function create()
    {
        $refundDetail = new RefundDetail();
        return view('refund-detail.create', compact('refundDetail'));
    }


    public function store(Request $request)
    {
        request()->validate(RefundDetail::$rules);

        $refundDetail = RefundDetail::create($request->all());

        return redirect()->route('refund-details.index')
            ->with('success', 'Detalle de devolución creada satisfactoriamente.');
    }


    public function show($id)
    {
        $refundDetail = RefundDetail::find($id);

        return view('refund-detail.show', compact('refundDetail'));
    }


    public function edit($id)
    {
        $refundDetail = RefundDetail::find($id);

        return view('refund-detail.edit', compact('refundDetail'));
    }


    public function update(Request $request, RefundDetail $refundDetail)
    {
        request()->validate(RefundDetail::$rules);

        $refundDetail->update($request->all());

        return redirect()->route('refund-details.index')
            ->with('success', 'Detalle de devolución actualizada satisfactoriamente');
    }


    public function destroy($id)
    {
        $refundDetail = RefundDetail::find($id)->delete();

        return redirect()->route('refund-details.index')
            ->with('success', 'Detalle de devolución eliminada satisfactoriamente');
    }
}
