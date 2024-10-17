<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BlogControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }
    public function testIndex()
    {
        $this->get('/')->assertStatus(200);
    }

    public function testShowArticle()
    {
        $post = Post::find('1');
        $this->get('/article/' . $post->slug)->assertStatus(200);
    }

    public function testCategory()
    {
        $category = Category::find(1);
        $this->get('category/' . $category->name)
            ->assertStatus(200);
    }

    public function testAuthor()
    {
        $author = User::find(1);
        $this->get('/author/' . $author->username)
            ->assertStatus(200);
    }
}
