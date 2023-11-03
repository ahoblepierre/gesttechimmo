<?php

namespace App\Http\Controllers\admin;

use App\Utils\Utils;
use App\Models\Service;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
// use Session;

/**
 * Service Controller
 * @by Peter AHOBLE
 */
class ServiceController extends Controller
{

    use Utils;


    public function __construct() {
        $this->middleware(['auth']);
    }



    /**
     * liste des service
     *
     * @return View
     */
    function index(): View
    {
        $services = Service::latest()->paginate(10);
        return view("admin.service.index", [
            "services" => $services,
        ]);
    }


    /**
     * @return View
     */
    function create(): View
    {
        return view("admin.service.create");
    }

    /**
     * Ajouter un nouveau service
     * @by Peter
     * @param Request $request
     * @return RedirectResponse
     */
    function store(Request $request): RedirectResponse
    {

        $this->validate($request, [
            "titre" => "required",
            "content" => "required",
            "file" => "required|mimes:png,jpg,jpeg"
        ]);

        $imagePath = $this->storeFile($request->file('file'), $width=230, $heigth=228);

        
        Service::create(
            array(
                "title" => $request->titre,
                "description" => $request->content,
                "image_url" => $imagePath,
            )
        );

        Session::flash("success", "Service ajoute avec succes");


        return redirect()->route("index.service");
    }


    /**
     * Rechercher un service
     * @by Peter
     * @param Request $request
     * @return View
     */
    public function search(Request $request): View
    {
        $services = Service::when($request->titre_or_description, function ($query) use ($request) {
            $query->where('title', 'like', '%' . $request->titre_or_description . '%')
                ->orWhere('description', 'like', '%' . $request->titre_or_description . '%');
        })->when($request->date, function($query) use($request) {
            $query->whereDate('created_at', $request->date);
        })
        ->when($request->fin, function($query) use($request) {
            $query->whereDate('created_at', $request->fin);
        })
        ->paginate(10);
        return view("admin.service.index", [
            "services" => $services,
        ]);
    }


    function changeStatut($id): RedirectResponse
    {
        $service = Service::where("id", $id)->first();
        if (!empty($service)) {
            $statut =  $service->staut === 0 ? 1 : 0;
           $service= Service::where("id", $id)->update([
                'statut' => $statut
            ]);

            Session::flash("success", "Service statut modifié avec succes");
            return redirect()->back();
        }
        Session::flash("error", "Service introuvable");
        return redirect()->back();
    }

    /**
     * Undocumented function
     *
     * @param [int] $id
     * @return View | RedirectResponse
     */
    public function show($id): View | RedirectResponse  {
        $service = Service::where("id",$id)->first();
        if (empty($service)) {
            Session::flash("error", "Service introuvable");
            return redirect()->back();
        }
        return view("admin.service.edit",[
            'service'=>$service,
        ]);
    }

    /**
     * Mettre a jour un service
     *
     * @param Request $request
     * @return RedirectResponse
     */
    function update(Request $request) : RedirectResponse {

        $service = Service::where("id",$request->id)->first();
        if (empty($service)) {
            Session::flash("error", "Service introuvable");
            return redirect()->back();
        }
        $imagePath = $request->hasFile('file')? $this->storeFile($request->file('file'), $width=230, $heigth=195): $service->image_url;
        $service->title = $request->titre;
        $service->description = $request->content;
        $service->image_url = $imagePath;

        $service->save();

        Session::flash("success", "Service mise à jour avec succès");
        return redirect()->route("index.service");
    }

    /**
     * delete service
     *
     * @param [int] $id
     * @return RedirectResponse
     */
    function destroy($id) : RedirectResponse {
        $service = Service::where("id",$id)->first();
        if (empty($service)) {
            Session::flash("error", "Service introuvable");
            return redirect()->back();
        }
        $service->delete();
        Session::flash("success", "Service mise à supprimé avec succès");
        return redirect()->route("index.service");
    }
}
