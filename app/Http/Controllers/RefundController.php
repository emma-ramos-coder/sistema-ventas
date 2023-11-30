<?php

namespace App\Http\Controllers;

use App\Models\Refund;
use Illuminate\Http\Request;

/**
 * Class RefundController
 * @package App\Http\Controllers
 */
class RefundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refunds = Refund::paginate();

        return view('refund.index', compact('refunds'))
            ->with('i', (request()->input('page', 1) - 1) * $refunds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $refund = new Refund();
        return view('refund.create', compact('refund'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Refund::$rules);

        $refund = Refund::create($request->all());

        return redirect()->route('refunds.index')
            ->with('success', 'Devolución creada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $refund = Refund::find($id);

        return view('refund.show', compact('refund'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $refund = Refund::find($id);

        return view('refund.edit', compact('refund'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Refund $refund
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Refund $refund)
    {
        request()->validate(Refund::$rules);

        $refund->update($request->all());

        return redirect()->route('refunds.index')
            ->with('success', 'Devolución actualizada satisfactoriamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $refund = Refund::find($id)->delete();

        return redirect()->route('refunds.index')
            ->with('success', 'Devolución eliminada satisfactoriamente');
    }
}
