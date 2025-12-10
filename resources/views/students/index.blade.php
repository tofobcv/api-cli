@extends('layouts.app')

@section('content')
<h2>Listado de Estudiantes</h2>

<a href="{{ route('students.create') }}">Crear estudiante</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Edad</th>
        <th>Acciones</th>
    </tr>

    @foreach($students as $st)
    <tr>
        <td>{{ $st['id'] }}</td>
        <td>{{ $st['nombre'] }}</td>
        <td>{{ $st['apellido'] }}</td>
        <td>{{ $st['email'] }}</td>
        <td>{{ $st['edad'] }}</td>
        <td>
            <a href="{{ route('students.edit', $st['id']) }}">Editar</a>

            <form action="{{ route('students.destroy', $st['id']) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
