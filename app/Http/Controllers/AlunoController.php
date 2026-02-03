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
    public function create(Aluno $aluno) 
    {
        return view('alunos.index');
        
    }

    public function edit(Aluno $aluno) 
    {
        return view('');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nome' => ['required','string','max:255']
        ]);

        Aluno::create([ 
            'nome'=> $validate['nome']
        ]);

        return redirect()->route('alunos.index');
    }

    
    public function update(Request $request, Aluno $alunos)
    {
        $validated = $request->validate([

            'nome'=> ['required', 'string','max:255']

            ]);

            $alunos->update([

            'nome' => $validated['nome']
            ]);

            return redirect() -> route('alunos.index');

    }

    
    public function destroy(Aluno  $alunos)
    {
        $alunos->delete();
        return redirect()->route('alunos.index');
    }
}
