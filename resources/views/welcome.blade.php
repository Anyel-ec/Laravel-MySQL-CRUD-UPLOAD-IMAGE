@extends('layout.base')
@section('titulo', 'Inicio')


@section('contenido')
<h1>
    Alumnos
</h1>
<a href="{{route('alumno.create')}}" class="btn btn-primary">Agregar</a>

<hr>
    <h1>Lista de Alumnos</h1>
    
    <hr>
    <div class="table-responsive">
        <table class="table table-sm">
            <thead>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Fecha Nacimiento</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach ($datos as $item)
                <tr>
                    <td>{{$item->nombre. " ". $item->apellido}}</td>
                    <td>{{$item->telefono}}</td>
                    <td>{{$item->direccion}}</td>
                    <td>{{$item->fecha_nac}}</td>
                    <td>
                        <form action="{{route('alumno.edit', $item->id)}}" method="POST">
                            @csrf
                            <button class="btn btn-warning btn-sm">
                                <span class="fas fa-user-edit"> </span>
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('alumno.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?')">
                                <span class="fas fa-user-times"> </span>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

