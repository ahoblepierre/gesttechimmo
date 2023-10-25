<?php

namespace App\Utils;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;



trait Utils
{


    /**
     * Store file
     * @by Peter
     * @param [type] $file
     * @return string
     */
    public function storeFile($file): string
    {
        if (!empty($file)) {
            // Générez un nom de fichier unique pour éviter les collisions.
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();

            $image = Image::make($file);

            $image->resize(370, 253, function ($constraint) {
                $constraint->aspectRatio();
            });

            $relativePath = 'images/' . $fileName; // Chemin relatif où vous stockez le fichier

            $image->save($relativePath);
            // Obtenez l'URL absolue du fichier stocké
            return asset($relativePath);

            // Chemin de stockage temporaire
            // $tempPath = storage_path('app/temp/' . $fileName);

            // Enregistrez le fichier temporairement
            // $file->move('temp', $fileName);

            // Ouvrez l'image avec Intervention/Image
            // $image = Image::make($tempPath);

            // Appliquez des modifications d'image si nécessaire 370 × 253
            // Par exemple, redimensionnez l'image à une largeur maximale de 800 pixels
            // $image->resize(370, 253, function ($constraint) {
            //     $constraint->aspectRatio();
            // });

            // Enregistrez l'image modifiée dans le dossier de destination
            // $image->save(public_path('images/' . $fileName));

            // Supprimez le fichier temporaire
            // Storage::delete('temp/' . $fileName);

            // URL de l'image
            // return asset('images/' . $fileName);
        } else {
            return '';
        }
    }
}
