<?php

namespace Database\Factories;

use App\Models\TurmaDisciplina;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TurmaDisciplinaDocente>
 */
class TurmaDisciplinaDocenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'turma_disciplina_id' => TurmaDisciplina::all()->random()->id,
            'docente_id' => User::where('user_role',2)->get()->random()->id,
        ];
    }
}
