<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {

        $nome = 'Lucas';
        $idade = 22;
        $arr = [1, 2, 3, 4, 5];
        $nomes = ['lucas', 'Juliano', 'Luiz', 'titico'];

        return view(
            'welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'arr' => $arr,
                'nomes' => $nomes

            ]
        );
    }

    public function create()
    {
        return view('events.create');
    }

    public function produtos()
    {
        $busca = request('search');

        return view('produtos', ['busca' => $busca]);
    }

    public function contatos()
    {

        return view('Contatos');
    }

    public function produto($id = null)
    {
        return view('produto', ['id' => $id]);
    }
}
