<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{// app/Http/Controllers/CursosController.php

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
    // Lógica para remover um curso
    return redirect()->route('permissoes.ok');
}

}
