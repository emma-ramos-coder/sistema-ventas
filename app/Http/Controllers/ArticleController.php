<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ItemType;
use App\Models\Supplier;
use Illuminate\Http\Request;

/**
 * Class ArticleController
 * @package App\Http\Controllers
 */
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate();

        return view('article.index', compact('articles'))
            ->with('i', (request()->input('page', 1) - 1) * $articles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $article = new Article();
        $item_types = ItemType::pluck('item_type_description','id');
        $suppliers = Supplier::pluck('tradename','id');
        return view('article.create', compact('article','item_types','suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Article::$rules);

        $article = Article::create($request->all());

        return redirect()->route('articles.index')
            ->with('success', 'Articulo creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);

        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $item_types = ItemType::pluck('item_type_description','id');
        $suppliers = Supplier::pluck('tradename','id');
        return view('article.edit', compact('article','item_types','suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        request()->validate(Article::$rules);

        $article->update($request->all());

        return redirect()->route('articles.index')
            ->with('success', 'Articulo actualizado satisfactoriamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $article = Article::find($id)->delete();

        return redirect()->route('articles.index')
            ->with('success', 'Articulo eliminado satisfactoriamente');
    }
}
