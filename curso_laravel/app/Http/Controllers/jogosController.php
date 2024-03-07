<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jogo;
use Illuminate\Http\Request;

class jogosController extends Controller
{
    public function index()
    {
        // dd('Ola mundo!');
        $jogos = Jogo::all();

        return view('jogos.index', ['jogos' => $jogos]);
    }
    public function create()
    {
        return view('jogos.create');
    }
    public function store(Request $request)
    {
        Jogo::create($request->all());
        return redirect()->route('jogos-index');
    }
    public function edit($id)
    {
        $jogos = Jogo::where('id', $id)->first();
        if (!empty($jogos)) {
            return view('jogos.edit', ['jogos' => $jogos]);
        } else {
            return redirect()->route('jogos-index');
        };
    }
    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'ano_criacao' => $request->ano_criacao,
            'valor' => $request->valor
        ];
        Jogo::where('id', $id)->update($data);
        return redirect()->route('jogos-index');
    }
    public function destroy($id)
    {
        Jogo::where('id', $id)->delete();
        return redirect()->route('jogos-index');
    }
}
