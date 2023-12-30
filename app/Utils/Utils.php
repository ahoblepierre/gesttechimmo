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
    public function storeFile($file, $width = 370, $heigth = 253): string
    {
        if (!empty($file)) {
            // Générez un nom de fichier unique pour éviter les collisions.
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();

            $image = Image::make($file);

            $image->resize($width, $heigth);
            // , function ($constraint) {
            //     $constraint->aspectRatio();
            // }

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


    /**
     * Save file
     * @by Peter
     * @param [type] $file
     * @return string
     */


    function saveFile($file): String
    {
        // Vérifier si le fichier est valide
        if ($file->isValid()) {
            // Générer un nom de fichier unique
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();

            // Déterminer le dossier de destination en fonction du type de fichier
            $fileType = explode('/', $file->getMimeType())[0];
            $destinationFolder = '';

            switch ($fileType) {
                case 'image':
                    $destinationFolder = 'images';
                    break;
                case 'video':
                    $destinationFolder = 'videos';
                    break;
                    // Ajouter d'autres types de fichiers au besoin

                default:
                    $destinationFolder = 'other';
                    break;
            }

            // Déplacer le fichier vers le dossier de destination
            $file->move(public_path($destinationFolder), $fileName);

            // Construire l'URL du fichier stocké
            $url = url("$destinationFolder/$fileName");

            return $url;
        }

        return ''; // Le fichier n'est pas valide
    }


    public function transformJsonArrayToString($value){

        if (!empty($value)) {
          // Convertir la chaîne JSON en tableau associatif
        $arrayData = json_decode($value, true);
        // Utiliser array_map pour extraire les valeurs
        $resultArray = array_map(function($item) {
            return $item['value'];
        }, $arrayData);

        return implode('|', $resultArray);
        }
        return '';
    }

    private function transformArrayToString($array){
        if (count($array) == 0) return '';

        $string = json_encode($array);

        return implode('|', json_decode($string));
    }
}
