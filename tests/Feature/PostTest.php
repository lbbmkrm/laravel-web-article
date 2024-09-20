<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class PostTest extends TestCase
{
    public function testDeletePost()
    {
        DB::delete("DELETE FROM posts");
        self::assertTrue(true);
    }

    public function testFactoryRecycle()
    {
        $post = Post::factory(100)->recycle(User::factory(5)->create())->create();
        self::assertNotNull($post);
    }

    public function testPostWeb()
    {
        $post = $this->get("/author/1")
            ->assertSee("Articles by");
    }

    public function testRelation()
    {
        $post = Post::find(8); // Misalkan Post dengan id 1
        $post->category; // Lihat apakah relasi ke category ada

        self::assertNotNull($post);
        Log::info(json_encode($post->category));
    }
}
