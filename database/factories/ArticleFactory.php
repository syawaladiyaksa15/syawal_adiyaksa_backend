<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {

        $judul = $this->faker->sentence();

        return [
            'user_id'    => User::where('role', 'author')->get()->random()->id,
            'judul'      => $judul,
            'slug_judul' => Str::slug($judul, '-'),
            'isi'        => $this->faker->paragraph(),
        ];
    }
}
