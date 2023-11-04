<?php

namespace App\Http\Controllers\client;

use App\Models\Contact;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCategorie;
use App\Models\Formation;
use App\Models\Service;
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
        return view("client.home",[
            'articles'=>$articles,
            'services'=>$services,
        ]);
    }

    public function aPropos()
    {
        return view("client.a_propos");
    }

    public function nosService()
    {
        $services = Service::where('statut',1)->latest()->paginate(6);
        return view("client.nos_service", compact('services'));
    }

    public function blog()
    {
        $articles = Article::latest()->active()->paginate(6);
        return view("client.blog",[
            'articles'=>$articles,
        ]);
    }

    public function blogDetail($id, $slug)
    {
        $article = Article::where('id', $id)->first();
        $derniersPostes = Article::latest()->active()->take(3)->get();
        $categories = ArticleCategorie::latest()->get();
        return view("client.details_blog",[
            'article'=>$article,
            'derniersPostes'=>$derniersPostes,
            'categories'=>$categories,
        ]);
    }

    public function contact()
    {
        return view("client.contact");
    }


    function nosFormations(): View
    {
        $formations = Formation::where('statut',1)->latest()->paginate(6);
        return view('client.nos_formations', compact("formations"));
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
        ],[
            'required'=>"Champ obligatoire"
        ]);

        Contact::create($validate);

        Session::flash("success", "Votre demande a été prise en compte, nous vous contacterons");
        return redirect()->back();

    }


    function detailFormation($slug,$id)  {
        $formation = Formation::where('id', $id)->first();
        return view("client.detail_formation",[
            'formation'=>$formation
        ]);
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
