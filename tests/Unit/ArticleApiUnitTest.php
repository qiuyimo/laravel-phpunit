<?php
/**
 * Created by PhpStorm.
 * User: qiuyu
 * Date: 2018/9/10
 * Time: 10:28 AM
 */

namespace Tests\Unit;

use Tests\TestCase;

class ArticleApiUnitTest extends TestCase
{
    /**
     * @test
     */
    public function itCanCreateAnArticle()
    {
        $data = [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph
        ];

        $this->post(route('articles.store'), $data)
            // ->dump()
            ->assertStatus(201)
            ->assertJson($data);
    }
}
