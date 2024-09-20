<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class UserTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        DB::delete("DELETE FROM users");
    }
    public function testFactory()
    {
        $user = User::factory(10)->create();
        self::assertNotNull($user);

        Log::info(json_encode($user));
    }

    public function testUnverified()
    {
        $users = User::factory(3)->unverified()->create();
        self::assertNotNull($users);

        $usersCollection = collect($users);
        $usersCollection->each(function ($item) {
            Log::info(json_encode($item)) . PHP_EOL;
        });
    }
    public function testIsAdmin()
    {
        $users = User::factory(3)->isAdmin()->create();
        self::assertNotNull($users);

        $usersCollection = collect($users);
        $usersCollection->each(function ($item) {
            Log::info(json_encode($item)) . PHP_EOL;
        });
    }
}
