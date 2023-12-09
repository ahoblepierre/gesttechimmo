<?php

namespace App\Http\Controllers\Admin;

use App\Models\c;
use App\Models\Formation;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Utils\Utils;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class FormationController extends Controller
{

    use Utils;

    public function __construct()
    {
        $this->middleware(['auth']);
    }



    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $formations = Formation::latest()->paginate(5);
        return view("admin.formation.index", [
            'formations' => $formations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view("admin.formation.create");
    }

    /**
     * store formation
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // return($request);
        $this->validate($request, [
            "titre" => "required",
            "content" => "required",
            "file" => "required|mimes:png,jpg,jpeg"
        ]);

        $imagePath = $this->storeFile($request->file('file'), $heigth = 346);


        Formation::create(
            array(
                "title" => $request->titre,
                "description" => $request->content,
                "image_url" => $imagePath,
            )
        );

        Session::flash("success", "formation ajouté avec succes");


        return redirect()->route("index.formation");
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View | RedirectResponse
    {
        $formation = Formation::where('id', $id)->first();

        if (empty($formation)) {
            Session::flash("error", "formation introuvable ...");
            return redirect()->back();
        }

        return view("admin.formation.edit", [
            'formation' => $formation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $formation = Formation::where('id', $id)->first();
        if (empty($formation)) {
            Session::flash("error", "formation introuvable ...");
            return redirect()->back();
        }

        $imagePath = $request->hasFile('file') ? $this->storeFile($request->file, $heigth = 346) : $formation->image_url;

        $formation->title = $request->titre;
        $formation->description = $request->content;
        $formation->image_url = $imagePath;
        $formation->save();

        Session::flash("success", "formation mise à jour avec succès...");
        return redirect()->route("index.formation");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $formation = Formation::where("id", $id)->first();
        if (!empty($formation)) {
            $formation->delete();
            Session::flash("success", "Formation statut supprimé avec succes");
            return redirect()->route("index.formation");
        }
        Session::flash("error", "Formation introuvable");
        return redirect()->back();
    }

    /**
     * Changer statut d'une formation
     * @by Peter
     * @param [int] $id
     * @return RedirectResponse
     */
    function changerStatut($id): RedirectResponse
    {
        $formation = Formation::where("id", $id)->first();
        // dd($formation->statut, 'ici');
        if (!empty($formation)) {
            $statut = $formation->statut === 0 ? 1 : 0;
            $formation = Formation::where("id", $id)->update([
                'statut' => $statut
            ]);

            // dd($formation);
            Session::flash("success", "Formation statut modifié avec succes");
            return redirect()->back();
        }
        Session::flash("error", "Formation introuvable");
        return redirect()->back();
    }

    /**
     * Recherche une foemation
     *
     * @param Request $request
     * @return View
     */
    public function search(Request $request): View
    {
        $formations = Formation::when($request->titre_or_description, function ($query) use ($request) {
            $query->where('title', 'like', '%' . $request->titre_or_description . '%')
                ->orWhere('description', 'like', '%' . $request->titre_or_description . '%');
        })->when($request->date, function ($query) use ($request) {
            $query->whereDate('created_at', $request->date);
        })
            ->when($request->fin, function ($query) use ($request) {
                $query->whereDate('created_at', $request->fin);
            })
            ->paginate(10);
        return view("admin.formation.index", [
            "formations" => $formations,
        ]);
    }
}
