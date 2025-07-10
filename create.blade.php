@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-primary">Crear Nuevo Proyecto</h1>
    
    <form>
        <div class="form-group">
            <label for="title">Título del Proyecto</label>
            <input type="text" class="form-control" id="title">
        </div>
        
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea class="form-control" id="description" rows="3"></textarea>
        </div>
        
        <div class="form-group">
            <label for="goal">Meta de recaudación (S/)</label>
            <input type="number" class="form-control" id="goal">
        </div>
        
        <button type="submit" class="btn btn-primary">Publicar Proyecto</button>
    </form>
</div>
@endsection