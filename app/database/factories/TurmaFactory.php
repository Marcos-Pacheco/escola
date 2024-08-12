<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Turma>
 */
class TurmaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descricao' => fake()->randomElement([
                'Médio - Manhã',
                'Médio - Tarde',
                'Médio - Noite',
            ]),
            'ano' => fake()->randomElement(['1','2','3']),
            'data_criacao' => date('Y-m-d'),
        ];
    }
}
