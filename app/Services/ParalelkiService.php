<?php

namespace App\Services;

use Intervention\Image\Facades\Image;

class ParalelkiService{
     public function storeImage($image){
        $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
        $imageName = $originalName . '_' . time() . '.webp';
        $optimizedImage = Image::make($image)->encode('webp', 50);
        $optimizedImage->save(public_path('images/paralelki') . '/' . $imageName);
        return '/images/paralelki/' . $imageName; // 
    }
}