<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class ListArticlesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function shouldListArticles()
    {
        $response = $this->get('api/articles');

        $response->assertStatus(200);
        $response->assertJson([
            [
                'title' => 'Articolo di prova',
                'body' => 'Questo è il testo di un articolo di prova',
                'creationDate' => '2018-11-29 00:00:00',
            ],
        ]);
    }
}
