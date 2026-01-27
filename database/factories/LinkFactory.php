<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Link>
 */
class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'url' => $this->faker->url(),
            'shortener_url' => Str::lower(Str::random(6)),
            'visibility' => 'public',
            'expires_at' => $this->faker->optional(0.5)->dateTimeBetween('+1 day', '+30 days'),
            'user_id' => User::factory(),
            'password' => null,
        ];
    }

    public function protectedLink(): static
    {
        return $this->state(fn() => [
            'visibility' => 'private',
            'password' => Hash::make('secret')
        ]);
    }
}
