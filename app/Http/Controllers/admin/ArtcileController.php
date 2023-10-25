<?php

namespace App\Http\Controllers\Admin;

use App\Utils\Utils;
use App\Models\Article;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Mail\InscriptionMail;
use App\Models\ArticleCategorie;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class ArtcileController extends Controller
{
    use Utils;


    public function __construct() {
        $this->middleware(['auth']);
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $articles = Article::latest()->paginate();
        
        // mailer()->to('laravel@gmail.com')->send(new InscriptionMail());

        return view("admin.article.index", [
            'articles' => $articles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = ArticleCategorie::all();
        return view("admin.article.create", [
            "categories" => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return($request);
        $this->validate($request, [
            "titre" => "required",
            "content" => "required",
            "file" => "required|mimes:png,jpg,jpeg"
        ]);

        $imagePath = $this->storeFile($request->file('file'));


        Article::create(
            array(
                "title" => $request->titre,
                "description" => $request->content,
                "image_url" => $imagePath,
                "article_categorie_id" => $request->category
            )
        );

        Session::flash("success", "Article ajouté avec succes");
        return redirect()->route("index.article");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::where('id', $id)->first();
        if (empty($article)) {
            Session::flash("error", "Article introuvable");
            return redirect()->back();
        }

        $categories = ArticleCategorie::all();
        return view("admin.article.edit", [
            'article' => $article,
            'categories'=>$categories
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Article::where('id', $id)->first();
        if (empty($article)) {
            Session::flash("error", "Article introuvable");
            return redirect()->back();
        }
        $imagePath = $request->hasFile('file') ? $this->storeFile($request->file('file')) : $article->image_url;

        $article->title = $request->titre;
        $article->description = $request->content;
        $article->image_url = $imagePath;
        $article->article_categorie_id = $request->category;
        $article->save();

        Session::flash("success", "Article modifié avec succes");
        return redirect()->route("index.article");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::where("id", $id)->first();
        if (!empty($article)) {
            $article->delete() ;
            Session::flash("success", "Article statut supprimé avec succes");
            return redirect()->back();
        }
        Session::flash("error", "Article introuvable ...");
        return redirect()->back();
    }


        /**
     * Changer statut d'un article
     * @by Peter
     * @param [int] $id
     * @return RedirectResponse
     */
    function changerStatut($id): RedirectResponse
    {
        $article = Article::where("id", $id)->first();
        if (!empty($article)) {
            $statut =  $article->staut === 0 ? 1 : 0;
           $article= Article::where("id", $id)->update([
                'statut' => $statut
            ]);

            Session::flash("success", "Article statut modifié avec succes");
            return redirect()->back();
        }
        Session::flash("error", "Article introuvable ...");
        return redirect()->back();
    }

      /**
     * Recherche une artile
     *
     * @param Request $request
     * @return View
     */
    public function search(Request $request): View
    {
        $article = Article::when($request->titre_or_description, function ($query) use ($request) {
            $query->where('title', 'like', '%' . $request->titre_or_description . '%')
                ->orWhere('description', 'like', '%' . $request->titre_or_description . '%');
        })->when($request->date, function($query) use($request) {
            $query->whereDate('created_at', $request->date);
        })
        ->when($request->fin, function($query) use($request) {
            $query->whereDate('created_at', $request->fin);
        })
        ->paginate(10);
        return view("admin.article.index", [
            "articles" => $article,
        ]);
    }

}
