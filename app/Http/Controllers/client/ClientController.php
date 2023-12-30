<?php

namespace App\Http\Controllers\client;

use App\Models\Contact;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCategorie;
use App\Models\Commentaire;
use App\Models\Formation;
use App\Models\Service;
use App\Models\Temoignage;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{


    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(): View
    {
        $articles = Article::inRandomOrder()->latest()->active()->take(6)->get();
        $services = Service::inRandomOrder()->latest()->active()->limit(3)->get();
        $temoignages = Temoignage::active()->latest()->get();
        return view("client.home", [
            'articles' => $articles,
            'services' => $services,
            'temoignages' => $temoignages
        ]);
    }

    public function aPropos()
    {
        return view("client.a_propos");
    }

    public function nosService()
    {
        $services = Service::where('statut', 1)->latest()->paginate(6);
        return view("client.nos_service", compact('services'));
    }

    public function blog()
    {
        $articles = Article::latest()->active()->paginate(6);
        return view("client.blog", [
            'articles' => $articles,
        ]);
    }

    public function blogDetail($id, $slug)
    {
        $article = Article::with('commentaire')->where('id', $id)->first();
        //  return $article->tags();
        $derniersPostes = Article::latest()->active()->take(3)->get();
        $categories = ArticleCategorie::latest()->get();
        return view("client.details_blog", [
            'article' => $article,
            'derniersPostes' => $derniersPostes,
            'categories' => $categories,
        ]);
    }

    public function rechercheArticleBlog(Request $request)
    {
        $articles = Article::where('title', 'LIKE', '%' . $request->search . '%')
            ->orWhere('description', 'LIKE', '%' . $request->search.'%')
            ->latest()->active()->paginate(6);
            return view("client.blog", [
                'articles' => $articles,
            ]);
    }




    public function contact()
    {
        return view("client.contact");
    }


    function nosFormations(): View
    {

        $formations = Formation::where('statut', 1)->latest()->paginate(6);
        $temoignages = Temoignage::active()->latest()->get();
        return view('client.nos_formations', compact(["formations", 'temoignages']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate =  $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required|string',
            'message' => 'required|string',
        ], [
            'required' => "Champ obligatoire"
        ]);

        Contact::create($validate);

        Session::flash("success", "Votre demande a été prise en compte, nous vous contacterons");
        return response()->json(['message'=>'Votre demande a été prise en compte, nous vous contacterons'],200);
    }


    function detailFormation($slug, $id)
    {
        $formation = Formation::where('id', $id)->first();
        return view("client.detail_formation", [
            'formation' => $formation
        ]);
    }

    public function addCommentaire(Request $request)
    {
        $commentaire =  Commentaire::create([
            'article_id' => $request->article_id,
            'name' => $request->name,
            'email' => $request->email,
            'commentaire' => $request->message,
        ]);

        if ($commentaire) {
            return response()->json(['message'=>' Commentaire ajoutée avec succès ...'], 200);
        }
        return response()->json(['message'=>'Rééssayer plus tard'], 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
