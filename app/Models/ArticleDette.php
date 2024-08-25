<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleDette extends Model
{
    use HasFactory;

    protected $fillable = ['id_article', 'id_dette', 'qteVente', 'prixVente'];

    public function article() {
        return $this->belongsTo(Article::class, 'id_article');
    }

    public function dette(){
        return $this->belongsTo(Dette::class, 'id_dette');
    }
}
