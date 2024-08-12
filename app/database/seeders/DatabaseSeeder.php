<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Disciplina;
use App\Models\Turma;
use App\Models\TurmaDisciplina;
use App\Models\TurmaDisciplinaDocente;
use App\Models\TurmaEstudante;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(19)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'cpf' => '000.000.000-00',
            'data_nascimento' => '01/01/1990',
            'user_role' => 0,
        ]);

        Disciplina::factory(10)->create();
        Turma::factory(6)->create();
        TurmaDisciplina::factory(20)->create();
        TurmaDisciplinaDocente::factory(10)->create();
        TurmaEstudante::factory(20)->create();
    }
}
