<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ArticleCategorie;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{


    public function __construct() {
        $this->middleware(['auth']);
    }

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ArticleCategorie::latest()->paginate(10);
        return view("admin.category.index",[
            'categories'=>$categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'titre'=>"required",
            'content'=>"required"
        ]);
        ArticleCategorie::create([
            'title'=>$request->titre,
            'description'=>$request->content,
        ]);

        Session::flash("success", "Catégorie ajouté avec succes");
        return redirect()->route("index.category");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categorie = ArticleCategorie::where('id', $id)->first();

        if (empty($categorie)) {
            Session::flash("error", "categorie introuvable ...");
            return redirect()->back();
        }

        return view("admin.category.edit", [
            'categorie' => $categorie
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
        $categorie = ArticleCategorie::where('id', $id)->first();

        if (empty($categorie)) {
            Session::flash("error", "categorie introuvable ...");
            return redirect()->back();
        }
        $categorie->title = $request->titre;
        $categorie->description = $request->content;
        $categorie->save();

        Session::flash("success", "categorie mise  à jour avec succès...");
        return redirect()->route("index.category");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categorie = ArticleCategorie::where('id', $id)->first();

        if (empty($categorie)) {
            Session::flash("error", "categorie introuvable ...");
            return redirect()->back();
        }

        $categorie->delete();
        Session::flash("success", "categorie supprime avec succès...");
        return redirect()->route("index.category");
    }


   public function search(Request $request) {
    $categories = ArticleCategorie::when($request->titre_or_description, function ($query) use ($request) {
        $query->where('title', 'like', '%' . $request->titre_or_description . '%')
            ->orWhere('description', 'like', '%' . $request->titre_or_description . '%');
    })->when($request->date, function($query) use($request) {
        $query->whereDate('created_at', $request->date);
    })
    ->when($request->fin, function($query) use($request) {
        $query->whereDate('created_at', $request->fin);
    })
    ->paginate(10);
    return view("admin.category.index", [
        'categories'=>$categories,
    ]);
    }
}
