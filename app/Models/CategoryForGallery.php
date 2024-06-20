<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryForGallery extends Model
{
    use HasFactory;
    protected $fillable = ['title_uz','title_ru','title_en','menu_id'];
    public function gallery()
    {
        return $this->hasMany(Gallery::class,'id');
    }
}
