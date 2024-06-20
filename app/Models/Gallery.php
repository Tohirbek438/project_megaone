<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function image()
    {
        return $this->belongsTo(Image::class,'image_id');
    }
    public function category()
    {
        return $this->belongsTo(CategoryForGallery::class,'category_id');
    }
}
