<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => Str::random(10),
            'lastname' => fake()->name(),
            'nama' => fake()->name(),
            'kelas' => fake()->randomNumber(4),
            'nis' => fake()->randomNumber(4),
            'jurusan' => fake()->name(), 
            'email' => fake()->name(),
            'alamat' => fake()->name(),
            'ttl' => fake()->name(),
            'mobile' => fake()->randomNumber(12), 
        ];
    }
}