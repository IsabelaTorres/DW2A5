@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="container">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST">
        @csrf
        <form-group>
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </form-group>

        <form-group>
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Nome da Cidade">
        </form-group>

        <form-group>
            <label for="private">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Nao</option>
                <option value="1">Sim</option>
            </select>
        </form-group>

        <form-group>
            <label for="description">Descricao:</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="O que vai acontecer no evento"></textarea>
        </form-group>

        <input type="submit" class="btn btn-primary" value="Criar evento">
        
    </form>
</div>

@endsection