@extends('layout.app')

@section('title','Add Jogo')

@section('content')

    <div class="container mt-5">
        <h1>Edite o jogo</h1>
        <hr>
        <form action="{{ route('jogos-update',['id'=>$jogos->id]) }}" method="post">    
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" value="{{ $jogos->nome }}" valueplaceholder="Digite um nome...">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" value="{{ $jogos->categoria }}" placeholder="Digite a categoria do jogo...">
                </div>
                <br>
                <div class="form-group">
                    <label for="ano_criacao">Ano de criação:</label>
                    <input type="number" class="form-control" name="ano_criacao" value="{{ $jogos->ano_criacao }}" placeholder="Digite o ano da criação do jogo...">
                </div>
                <br>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="number" class="form-control" name="valor" value="{{ $jogos->valor }}" placeholder="Digite o valor do jogo...">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="atualizar" class="btn btn-success" value="atualizar">
                </div>
            </div>
        </form>

    </div>
@endsection