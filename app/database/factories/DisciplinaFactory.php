<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Disciplina>
 */
class DisciplinaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descricao' => fake()->unique()->randomElement(['Matemática','Física','Química','Biologia','História','Geografia','Português','Literatura','Inglês','Educação Física']),
            'data_criacao' => date('Y-m-d'),
        ];
    }
}
