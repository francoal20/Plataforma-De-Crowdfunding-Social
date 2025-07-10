@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-primary">Proyectos Sociales</h1>
    
    @auth
    <a href="{{ route('projects.create') }}" class="btn btn-success mb-3">
        <i class="fas fa-plus"></i> Crear Proyecto
    </a>
    @endauth

    <div class="row">
       
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Educación Comunitaria
                </div>
                <div class="card-body">
                    <p>Talleres educativos para niños en zonas rurales.</p>
                    <p class="text-success">Meta: S/ 8,000</p>
                    <a href="{{ route('projects.show', 1) }}" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </div>

    
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Reforestación Urbana
                </div>
                <div class="card-body">
                    <p>Plantación de árboles en distritos de Lima.</p>
                    <p class="text-success">Meta: S/ 5,000</p>
                    <a href="{{ route('projects.show', 2) }}" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection