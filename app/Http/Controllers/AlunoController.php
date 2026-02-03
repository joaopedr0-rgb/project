<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::orderByDesc('id')->get();

        return view('alunos.index', compact('alunos'));

    }
    public function create(Aluno $validated)
    {
        return view('alunos.create');

    }


    public function edit($id)
    {

        $aluno = Aluno::find($id);


        if (!$aluno) {
            return redirect()->route('alunos.index');
        }

        return view('alunos.edit', compact('aluno'));
    }
    public function store(Request $request, )
    {

        $validated = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            
            'data_nascimento' => 'nullable|date',
        ]);
        Aluno::create($validated);
        return redirect()->route('alunos.index');
    }

    public function update(Request $request, Aluno $alunos)
    {
        $aluno = Aluno::findOrFail($alunos->id);
        $aluno->update($request->all());

        return redirect()->route('alunos.index');

    }


    public function destroy($id)
    {

        $aluno = Aluno::find($id);


        if ($aluno) {
            $aluno->delete();
        }

        return redirect()->route('alunos.index');
    }
}
