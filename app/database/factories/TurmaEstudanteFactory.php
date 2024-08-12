<?php

namespace Database\Factories;

use App\Models\Turma;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TurmaEstudante>
 */
class TurmaEstudanteFactory extends Factory
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
            'estudante_id' => User::where('user_role',3)->get()->random()->id,
        ];
    }
}
