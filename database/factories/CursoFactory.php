<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->sentence();//para tener el mismo nombre en name y slug
        return [
            'name' => $name,
            //'slug' => Str::slug('Hola mundo', '-'),
            'slug' => Str::slug($name, '-'),
            'email' => $this->faker->unique()->safeEmail(),
            'categoria' => $this->faker->randomElement(['Desarrollo web','Diseño web'])
        ];
    }
}
