<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ItemType;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

/**
 * Class ArticleController
 * @package App\Http\Controllers
 */
class ArticleController extends Controller
{
    public function __construct(){
        $this->middleware('can:articles.index')->only('index');
        $this->middleware('can:articles.create')->only('create','store');
        $this->middleware('can:articles.show')->only('show');
        $this->middleware('can:articles.edit')->only('edit','update');
        $this->middleware('can:articles.destroy')->only('destroy');
    }

    public function index()
    {
        $articles = Article::paginate();

        return view('article.index', compact('articles'))
            ->with('i', (request()->input('page', 1) - 1) * $articles->perPage());
    }


    public function create()
    {
        $article = new Article();
        $item_types = ItemType::pluck('item_type_description','id');
        $suppliers = Supplier::pluck('tradename','id');
        return view('article.create', compact('article','item_types','suppliers'));
    }


    public function store(Request $request)
    {
        request()->validate(Article::$rules);

        $article = Article::create($request->all());

        return redirect()->route('articles.index')
            ->with('success', 'Articulo creado satisfactoriamente.');
    }


    public function show($id)
    {
        $article = Article::find($id);

        return view('article.show', compact('article'));
    }


    public function edit($id)
    {
        $article = Article::find($id);
        $item_types = ItemType::pluck('item_type_description','id');
        $suppliers = Supplier::pluck('tradename','id');
        return view('article.edit', compact('article','item_types','suppliers'));
    }


    public function update(Request $request, Article $article)
    {
        request()->validate(Article::$rules);

        $article->update($request->all());

        return redirect()->route('articles.index')
            ->with('success', 'Articulo actualizado satisfactoriamente');
    }


    public function destroy($id)
    {
        $article = Article::find($id)->delete();

        return redirect()->route('articles.index')
            ->with('success', 'Articulo eliminado satisfactoriamente');
    }

    public function api_articulos():JsonResponse
    {
        $articles = DB::table('articles')
            ->join('item_types','articles.item_type_id','=','item_types.id')
            ->select(['articles.id','description','sale_price','stock','item_type_description'])
            ->where('stock','>','0')
            ->orderBy('item_type_description')
            ->orderBy('description')
            ->get();
        // devuelve una respuesta HTTP en formato JSON con un código de estado 200 (OK)
        return response()->json($articles,200);
    }
}
