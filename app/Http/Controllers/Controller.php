<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
        $title = "Sistema de Gestão de Investimento";
        return view('welcome', [
            'title' => $title
        ]);
    }

    public function cadastrar()
    {
        echo "Tela de Cadastro";
    }

    public function login()
    {
        echo "Tela de Login";
    }

}