<?php

namespace App\Http\Controllers\client;

use App\Models\Contact;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(): View
    {
        return view("client.home");
    }

    public function aPropos()
    {
        return view("client.a_propos");
    }

    public function nosService()
    {
        return view("client.nos_service");
    }

    public function blog()
    {
        return view("client.blog");
    }

    public function blogDetail()
    {
        return view("client.details_blog");
    }

    public function contact()
    {
        return view("client.contact");
    }


    function nosFormations(): View
    {
        return view('client.nos_formations');
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
