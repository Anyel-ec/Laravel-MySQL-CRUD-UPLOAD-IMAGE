@extends('layout.base')

@section('tituloPagina', 'Actualizar un nuevo registro')

@section('contenido')
    <h2>Actualizar registro</h2>
    <form action="{{ route('alumno.update', $alumnos->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Nombre: </label>
        <input type="text" name="nombre" class="form-control m-2"
               value="{{ $alumnos->nombre }}" placeholder="Nombre" required>
        <label for="">Apellido: </label>
        <input type="text" name="apellido" class="form-control m-2"
               value="{{ $alumnos->apellido }}" placeholder="Apellido" required>
        <label for="">Telefono: </label>
        <input type="text" name="telefono" class="form-control m-2"
               value="{{ $alumnos->telefono }}" placeholder="Telefono" required>
        <label for="">Direccion: </label>
        <input type="text" name="direccion" class="form-control m-2"
               value="{{ $alumnos->direccion }}" placeholder="Direccion" required>
        <label for="">Fecha de Nacimiento: </label>
        <input type="date" name="fecha_nac" class="form-control m-2"
               value="{{ $alumnos->fecha_nac }}" placeholder="Fecha de Nacimiento">
        
        @if ($alumnos->imagen)
            <img src="{{ asset('storage/' . $alumnos->imagen) }}" alt="Imagen Actual" class="img-thumbnail m-2" style="max-width: 200px;">
        @endif
        <br>
        <label for="imagen">Cambiar Foto:</label>
        <input type="file" name="imagen" id="imagen" class="form-control m-2" accept="image/*">

        <a href="{{ route('alumno.index') }}" class="btn btn-warning">Regresar</a>
        <button class="btn btn-primary" type="submit">Actualizar</button>
    </form>
@endsection



