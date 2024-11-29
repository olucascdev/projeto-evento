<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

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
});
Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/produtos/{id}', function () {
    return view('produto', ['id => $id ']);
});


Route::get('/Contatos', function () {
    return view('Contatos');
});
