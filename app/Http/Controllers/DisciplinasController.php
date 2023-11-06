<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinasController extends Controller
{// app/Http/Controllers/DisciplinasController.php

public function index()
{
    return view('permissoes.ok');
}

public function edit($id)
{
    return view('permissoes.ok');
}

public function show($id)
{
    return view('permissoes.ok');
}

public function remove($id)
{
    // Lógica para remover uma disciplina
    return redirect()->route('permissoes.ok');
}

}
