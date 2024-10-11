@extends('layout')
@section('content')

<div class="container mt-5">
    <h2>Cadastro de winx</h2>
    <form method="post" action="{{route('cadastra-winx')}}">
        @csrf
        <div class="form-group">
            <label for="nomeWinx">Nome da Winx:</label>
            <input type="text" class="form-control" id="nomeWinx" name="nomeWinx" placeholder="Digite o nome da winx" required>
        </div>
        <div class="form-group">
            <label for="elementoWinx">Elemento da Winx:</label>
            <input type="text" class="form-control" id="elementoWinx" name="elementoWinx" placeholder="Digite o nome do elemento" required>
        </div>
        <div class="form-group">
            <label for="namoradoWinx">Namorado da Winx:</label>
            <input type="text" class="form-control" id="namoradoWinx" name="namoradoWinx" placeholder="Digite o nome do namorado" required>
        </div>
        <div class="form-group">
            <label for="planetaWinx">Planeta da Winx:</label>
            <input type="text" class="form-control" id="planetaWinx" name="planetaWinx" placeholder="Digite o planeta da winx" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Winx</button>
    </form>
</div>

@endsection