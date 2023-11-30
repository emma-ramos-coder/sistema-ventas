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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refundDetails = RefundDetail::paginate();

        return view('refund-detail.index', compact('refundDetails'))
            ->with('i', (request()->input('page', 1) - 1) * $refundDetails->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $refundDetail = new RefundDetail();
        return view('refund-detail.create', compact('refundDetail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(RefundDetail::$rules);

        $refundDetail = RefundDetail::create($request->all());

        return redirect()->route('refund-details.index')
            ->with('success', 'Detalle de devolución creada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $refundDetail = RefundDetail::find($id);

        return view('refund-detail.show', compact('refundDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $refundDetail = RefundDetail::find($id);

        return view('refund-detail.edit', compact('refundDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  RefundDetail $refundDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RefundDetail $refundDetail)
    {
        request()->validate(RefundDetail::$rules);

        $refundDetail->update($request->all());

        return redirect()->route('refund-details.index')
            ->with('success', 'Detalle de devolución actualizada satisfactoriamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $refundDetail = RefundDetail::find($id)->delete();

        return redirect()->route('refund-details.index')
            ->with('success', 'Detalle de devolución eliminada satisfactoriamente');
    }
}
