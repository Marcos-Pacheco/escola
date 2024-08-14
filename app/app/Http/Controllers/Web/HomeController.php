<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'user' => Auth::user()
        ]);
    }

    public function direcao()
    {
        //
    }

    public function docente()
    {
        //
    }

    public function turma()
    {
        //
    }
}
