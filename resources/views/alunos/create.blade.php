<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="card mb-4">
        <div class="card-header">Novo Aluno</div>
        <div class="card-body">

            <body>
                <div class="container mt-5">
                    <h1>Novo Aluno</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('alunos.store') }}" method="POST">
                        @csrf
                    </form>
                </div>
            </body>
            <form action="{{ route('alunos.store') }}" method="POST">
                @csrf <div class="mb-3">
                    <label for="nome" class="form-label">Nome do Aluno</label>
                    <input type="text" name="nome" class="form-control" placeholder="Digite o nome" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Digite o email" required>
                </div>
                <div class="mb-3">
                    <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                    <input type="date" name="data_nascimento" class="form-control"
                        placeholder="Digite a data de nascimento" required>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Salvar Aluno</button>

            </form>
        </div>
    </div>