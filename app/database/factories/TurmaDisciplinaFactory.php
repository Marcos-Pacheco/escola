<?php

namespace Database\Factories;

use App\Models\Disciplina;
use App\Models\Turma;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TurmaDisciplina>
 */
class TurmaDisciplinaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'turma_id' => Turma::all()->random()->id,
            'disciplina_id' => Disciplina::all()->random()->id,
        ];
    }
}
