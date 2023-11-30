<?php

namespace App\Http\Controllers;

use App\Models\WayToPay;
use Illuminate\Http\Request;

/**
 * Class WayToPayController
 * @package App\Http\Controllers
 */
class WayToPayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wayToPays = WayToPay::paginate();

        return view('way-to-pay.index', compact('wayToPays'))
            ->with('i', (request()->input('page', 1) - 1) * $wayToPays->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wayToPay = new WayToPay();
        return view('way-to-pay.create', compact('wayToPay'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(WayToPay::$rules);

        $wayToPay = WayToPay::create($request->all());

        return redirect()->route('way-to-pays.index')
            ->with('success', 'Forma de pago creada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wayToPay = WayToPay::find($id);

        return view('way-to-pay.show', compact('wayToPay'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wayToPay = WayToPay::find($id);

        return view('way-to-pay.edit', compact('wayToPay'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  WayToPay $wayToPay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WayToPay $wayToPay)
    {
        request()->validate(WayToPay::$rules);

        $wayToPay->update($request->all());

        return redirect()->route('way-to-pays.index')
            ->with('success', 'Forma de pago actualizada satisfactoriamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $wayToPay = WayToPay::find($id)->delete();

        return redirect()->route('way-to-pays.index')
            ->with('success', 'Forma de pago eliminada satisfactoriamente');
    }
}
