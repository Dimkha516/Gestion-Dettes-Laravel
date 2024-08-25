<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['libelle', 'prix', 'qteStock'];

    public function articleDette(){
        return $this->hasMany(ArticleDette::class);
    }
}
