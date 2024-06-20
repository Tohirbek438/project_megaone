<?php

namespace App;

use Illuminate\Support\Facades\Storage;

trait ImageTrait
{
    public function image_save($data, $folder)
    {
        if ($data === null) {
            return null; // Handle case where $data is null
        }
        $path = $data->store($folder, 'public');
        return $path;
    }


    public function checkImage($model, $folder)
    {
        // Modeldan barcha rasmlarni olish
        $modelImages = $model::withTrashed()->pluck('image')->toArray();
        // Papkadagi barcha fayllarni olish
        $folderImages = Storage::files($folder . '/');
        // Fayl nomlari va extensionlarni ajratish uchun bo'sh array
        $imageNames = [];
        // Fayl nomlari va extensionlarni ajratish
        foreach ($folderImages as $folderImage) {
            $imageInfo = pathinfo($folderImage);
            $imageName = $imageInfo['filename'];
            $extension = $imageInfo['extension'];
            $imageNames[] = $imageName . '.' . $extension;
        }
        // Agar modelda rasmlar bo'lmasa
        if (empty($modelImages)) {
            // Papkadagi barcha rasmlarni o'chirish
            foreach ($imageNames as $missingImage) {
                Storage::delete($folder . '/' . $missingImage);
            }
        } else {
            // Fayllar to'liq solishtirildi va o'chirish uchun
            foreach ($imageNames as $imageName) {
                // Faylni o'chirish
                if (!in_array($imageName, $modelImages)) {
                    Storage::delete($folder . '/' . $imageName);
                }
            }
        }
    }


    public function delete_image($path)
    {
        if ($path !== null) {
            Storage::disk('public')->delete($path); // Fayl o'chiriladi
            return true; // Fayl o'chirilganda true qaytariladi
        }
        return false; // $path null bo'lsa, false qaytariladi
    }

}



