<?php
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

//Rotas Task 
Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');


//Rotas Alunos
Route::get('/', [AlunoController::class,'index'])->name('alunos.index');
Route::post('/alunos', [AlunoController::class,'store'])->name('alunos.store');
Route::put('/alunos{alunos}',[AlunoController::class,'update'])->name('alunos.update');
Route::delete('/alunos{alunos}',[AlunoController::class,'destroy'])->name('alunos.destroy');
Route::post('/alunos', [AlunoController::class,'create'])->name('alunos.create');
Route::put('/alunos{alunos}', [AlunoController::class,'edit'])->name('alunos.edit');