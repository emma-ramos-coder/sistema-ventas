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
    public function __construct(){
        $this->middleware('can:way-to-pays.index')->only('index');
        $this->middleware('can:way-to-pays.create')->only('create','store');
        $this->middleware('can:way-to-pays.show')->only('show');
        $this->middleware('can:way-to-pays.edit')->only('edit','update');
        $this->middleware('can:way-to-pays.destroy')->only('destroy');
    }
    public function index()
    {
        $wayToPays = WayToPay::paginate();

        return view('way-to-pay.index', compact('wayToPays'))
            ->with('i', (request()->input('page', 1) - 1) * $wayToPays->perPage());
    }


    public function create()
    {
        $wayToPay = new WayToPay();
        return view('way-to-pay.create', compact('wayToPay'));
    }


    public function store(Request $request)
    {
        request()->validate(WayToPay::$rules);

        $wayToPay = WayToPay::create($request->all());

        return redirect()->route('way-to-pays.index')
            ->with('success', 'Forma de pago creada satisfactoriamente.');
    }

    public function show($id)
    {
        $wayToPay = WayToPay::find($id);

        return view('way-to-pay.show', compact('wayToPay'));
    }

    public function edit($id)
    {
        $wayToPay = WayToPay::find($id);

        return view('way-to-pay.edit', compact('wayToPay'));
    }

    public function update(Request $request, WayToPay $wayToPay)
    {
        request()->validate(WayToPay::$rules);

        $wayToPay->update($request->all());

        return redirect()->route('way-to-pays.index')
            ->with('success', 'Forma de pago actualizada satisfactoriamente');
    }

    public function destroy($id)
    {
        $wayToPay = WayToPay::find($id)->delete();

        return redirect()->route('way-to-pays.index')
            ->with('success', 'Forma de pago eliminada satisfactoriamente');
    }
}
