<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    use HasFactory;

    protected $guarded = ['id'];

    public function image()
    {
      return $this->belongsTo(Image::class,'image_id');
    }
    public function menu()
    {
        return $this->belongsTo(Menus::class, 'menu_category'); // Assuming Menu is your Menu model
    }
}
