<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habito;

class HabitosController extends Controller
{
    public function index() {
      $habitos = Habito::all();
      return view('habitos.index', ['habitos' => $habitos]);
    }
    public function create() {
      return view('habitos.create');
    }

    public function store(Request $request) {
      $novo_habito = $request->all();
      Habito::create($novo_habito);

      return redirect('habitos');
    }
}
