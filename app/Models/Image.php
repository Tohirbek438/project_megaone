<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function galleries()
    {
        return $this->hasMany(Departments::class,'id','image_id');
    }
    public function blogs()
    {
        return $this->hasMany(Blog::class,'image_id');
    }
    public function pages()
    {
        return $this->hasMany(Page::class,'id');
    }
}
