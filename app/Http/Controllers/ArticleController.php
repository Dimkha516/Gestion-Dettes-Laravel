<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articlesList() {
         
        return 'Voici la liste des articles';
    }

    public function showArticleDetails() {
        if(!auth()->check()){
            return response()->json([
                'message' => "connectez vous pour effectuer cette requête !"
            ], 404);
        }

        return "Voici les détails de l'article";
    }

    public function updateArticle($articleId) {
        return "Mise à jour article";
    }

    public function addArticle(){
        return "Article Ajouté";
    }


}
