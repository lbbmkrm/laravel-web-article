<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();


        // Jalankan migrate:fresh sebelum setiap test
        $this->artisan('migrate:fresh');
        $this->artisan('db:seed --class=PostSeeder');

        //menghapus isi file laravel.log
        file_put_contents(storage_path('logs/laravel.log'), '');
    }
}
