<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AccessorTest extends TestCase
{
    /**
     * Test accessor method.
     *
     * @return void
     */
    public function testAccessorTest()
    {
        $dbPost =  DB::table('posts')->where('id', 21)->get();
        $dbPostTitle = ucfirst($dbPost[0]->name);

        $modelPost = Post::query()->find(21);
        $modelPostTitle = $modelPost->name;

        $this->assertEquals($dbPostTitle, $modelPostTitle);
    }
}
