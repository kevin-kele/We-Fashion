<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','price','size','image','availability','reference','category_id'];

    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }
}
