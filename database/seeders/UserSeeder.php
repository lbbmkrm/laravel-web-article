<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(5)->create();
        User::insert([
            [
                'name' => 'Author 1',
                'username' => 'authorone',
                'email' => 'author1@email.com',
                'password' => bcrypt('author1'),
                'profession' => fake()->jobTitle()
            ],
            [
                'name' => 'Author 2',
                'username' => 'authortwo',
                'email' => 'author2@email.com',
                'password' => bcrypt('author2'),
                'profession' => fake()->jobTitle()
            ],
            [
                'name' => 'Author 3',
                'username' => 'authorthree',
                'email' => 'author3@email.com',
                'password' => bcrypt('author3'),
                'profession' => fake()->jobTitle()
            ],
            [
                'name' => 'Author 4',
                'username' => 'authorfour',
                'email' => 'author4@email.com',
                'password' => bcrypt('author4'),
                'profession' => fake()->jobTitle()
            ],
            [
                'name' => 'Author 5',
                'username' => 'authorfive',
                'email' => 'author5@email.com',
                'password' => bcrypt('author5'),
                'profession' => fake()->jobTitle()
            ]
        ]);
    }
}
