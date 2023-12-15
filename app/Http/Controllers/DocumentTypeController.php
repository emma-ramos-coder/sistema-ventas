<?php

namespace App\Http\Controllers;

use App\Models\DocumentType;
use Illuminate\Http\Request;

/**
 * Class DocumentTypeController
 * @package App\Http\Controllers
 */
class DocumentTypeController extends Controller
{
    public function __construct(){
        $this->middleware('can:document-types.index')->only('index');
        $this->middleware('can:document-types.create')->only('create','store');
        $this->middleware('can:document-types.show')->only('show');
        $this->middleware('can:document-types.edit')->only('edit','update');
        $this->middleware('can:document-types.destroy')->only('destroy');
    }
    public function index()
    {
        $documentTypes = DocumentType::paginate();

        return view('document-type.index', compact('documentTypes'))
            ->with('i', (request()->input('page', 1) - 1) * $documentTypes->perPage());
    }


    public function create()
    {
        $documentType = new DocumentType();
        return view('document-type.create', compact('documentType'));
    }


    public function store(Request $request)
    {
        request()->validate(DocumentType::$rules);

        $documentType = DocumentType::create($request->all());

        return redirect()->route('document-types.index')
            ->with('success', 'Tipo de documento creado satisfactoriamente.');
    }


    public function show($id)
    {
        $documentType = DocumentType::find($id);

        return view('document-type.show', compact('documentType'));
    }


    public function edit($id)
    {
        $documentType = DocumentType::find($id);

        return view('document-type.edit', compact('documentType'));
    }


    public function update(Request $request, DocumentType $documentType)
    {
        request()->validate(DocumentType::$rules);

        $documentType->update($request->all());

        return redirect()->route('document-types.index')
            ->with('success', 'Tipo de documento actualizado satisfactoriamente');
    }


    public function destroy($id)
    {
        $documentType = DocumentType::find($id)->delete();

        return redirect()->route('document-types.index')
            ->with('success', 'Tipo de documento eliminado satisfactoriamente');
    }
}
