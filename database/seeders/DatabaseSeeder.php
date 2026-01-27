<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
            ->count(10)
            ->has(
                Link::factory()->protectedLink()->count(1)
            )
            ->create()
            ->each(function ($user) {
                Link::factory()
                    ->count(rand(1, 10))
                    ->for($user)
                    ->create();
            });
    }
}
