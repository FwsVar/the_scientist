<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use LaravelDay\Article\UseCase\ListArticles\ListArticles;

class ListArticlesController extends Controller
{
    public function __invoke()
    {
        $listArticles = new ListArticles(); //Use case abstraction
        $articles = $listArticles();

        return response()->json($articles);

        /*
        return response()->json([
            [
                'title' => 'Articolo di prova',
                'body' => 'Questo è il testo di un articolo di prova',
                'creationDate' => '2018-11-29 00:00:00',
            ]
        ]);
        */
    }
}
