@extends('layout')
@section('content')

<div class="container mt-5">
    <h2>Alterar Registros da Winx</h2>
    <form method="post" action="{{ route('altera-winx', $registrosWinx->idWinx) }}">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="nomeWinx">Nome da Winx:</label>
            <input type="text" class="form-control" id="nomeWinx" name="nomeWinx" placeholder="Digite o nome da winx" required value="{{ $registrosWinx->nomeWinx }}">
        </div>
        <div class="form-group">
            <label for="elementoWinx">Elemento da Winx:</label>
            <input type="text" class="form-control" id="elementoWinx" name="elementoWinx" placeholder="Digite o nome do elemento" required value="{{ $registrosWinx->elementoWinx }}">
        </div>
        <div class="form-group">
            <label for="namoradoWinx">Namorado da Winx:</label>
            <input type="text" class="form-control" id="namoradoWinx" name="namoradoWinx" placeholder="Digite o local da winx" required value="{{ $registrosWinx->namoradoWinx }}">
        </div>
        <div class="form-group">
            <label for="planetaWinx">Planeta da Winx:</label>
            <input type="text" class="form-control" id="planetaWinx" name="planetaWinx" placeholder="URL da imagem da winx" required value="{{ $registrosWinx->planetaWinx }}">
        </div>
        <button type="submit" class="btn btn-primary">Alterar Evento</button>
    </form>
</div>

@endsection