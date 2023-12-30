<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Temoignage;
use App\Utils\Utils;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;

class TemoignageController extends Controller
{
    use Utils;



    public function indexAction(): View
    {
        $temoignages = Temoignage::latest()->paginate(50);
        return view('admin.temoignage.index', [
            'temoignages' => $temoignages,
        ]);
    }


    public function createAction(): View
    {
        return view('admin.temoignage.create');
    }



    public function storeAction(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'profession' => 'required',
            'content' => 'required',
            'file' => 'required|mimes:png,jpg,jpeg',
        ], [
            'name.required' => 'Le nom et le prenoms sont obligatoires',
            'profession.required' => 'La profession est obligatoire',
            'content.required' => 'Une Description est obligatoire',
            'file.required' => "L'image est obligatoire",
            'file.mimes' => 'Votre image doit être de type png,jpg,jpeg'
        ]);


        Temoignage::create([
            'name' => $request->get('name'),
            'profession' => $request->get('profession'),
            'description' => $request->get('content'),
            'iamge_url' => $this->storeFile($request->file, 170, 170),
            'statut' => 0
        ]);

        Session::flash("success", "Temoignage ajoute avec succes");
        return redirect()->route('index.temoignage');
    }


    public function editAction($id)
    {
        $temoignage = Temoignage::where('id', $id)->first();
        if (!empty($temoignage)) {
            return view('admin.temoignage.edit', [
                'temoignage' => $temoignage
            ]);
        }

        Session::flash("error", "Temoignage introuvable");
        return redirect()->back();
    }

    //update temoignage
    public function updateAction(Request $request, $id)
    {
        $temoignage = Temoignage::where('id', $id)->first();
        if (!empty($temoignage)) {
            $this->validate($request, [
                'name' => 'required',
                'profession' => 'required',
                'content' => 'required',
                'file' => 'nullable|mimes:png,jpg,jpeg',
            ], [
                'name.required' => 'Le nom et le prenoms sont obligatoires',
                'profession.required' => 'La profession est obligatoire',
                'content.required' => 'Une Description est obligatoire',
                'file.mimes' => 'Votre image doit être de type png,jpg,jpeg'
            ]);

            Temoignage::where('id', $id)->update([
                'name' => $request->get('name'),
                'profession' => $request->get('profession'),
                'description' => $request->get('content'),
                'iamge_url' => !empty($request->file) ? $this->storeFile($request->file, 170, 170) : $temoignage->iamge_url,
            ]);
            Session::flash("success", "Temoignage ajoute avec succes");
            return redirect()->route('index.temoignage');
        }

        Session::flash("error", "Temoignage introuvable");
        return redirect()->back();
    }

    public function changeStatutAction($id)
    {
        $temoignage = Temoignage::where('id', $id)->first();
        if (!empty($temoignage)) {

            Temoignage::where('id', $id)->update([
                'statut' => $temoignage->statt == 1 ? 0 : 1,
            ]);
            Session::flash("success", "Statut temoignage change avec succe");
            return redirect()->route('index.temoignage');
        }

        Session::flash("error", "Temoignage introuvable");
        return redirect()->back();
    }
}
