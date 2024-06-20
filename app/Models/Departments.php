<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function image(){
        return $this->belongsTo(Image::class,'image_id');
    }
}
