@extends('layout.base')

@section('tituloPagina', 'Crear un nuevo Alumno')
@section('contenido')
    <h2>Agregar nuevo</h2>
    <form action="{{ route('alumno.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Nombre: </label>
        <input type="text" name="nombre" class="form-control m-2" placeholder="Nombre" required>
        <label for="">Apellido: </label>
        <input type="text" name="apellido" class="form-control m-2" placeholder="Apellido" required>
        <label for="">Telefono: </label>
        <input type="text" name="telefono" class="form-control m-2" placeholder="Telefono" required>
        <label for="">Direccion: </label>
        <input type="text" name="direccion" class="form-control m-2" placeholder="Direccion" required>
        <label for="">Fecha de Nacimiento: </label>
        <input type="date" name="fecha_nac" class="form-control m-2" placeholder="Fecha de Nacimiento">
        <input type="file" name="foto" id="foto" class="form-control m-2" accept="image/*">
        <a href="{{ route('alumno.index') }}" class="btn btn-warning">Regresar</a>
        <button class="btn btn-primary" type="submit">Agregar</button>
    </form>
@endsection
