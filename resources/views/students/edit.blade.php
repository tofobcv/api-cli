@extends('layouts.app')

@section('content')
<h2>Editar Estudiante</h2>

<form action="{{ route('students.update', $student['id']) }}" method="POST">
    @csrf
    @method('PUT')

    Nombre: <input type="text" name="nombre" value="{{ $student['nombre'] }}"><br>
    Apellido: <input type="text" name="apellido" value="{{ $student['apellido'] }}"><br>
    Email: <input type="email" name="email" value="{{ $student['email'] }}"><br>
    Edad: <input type="number" name="edad" value="{{ $student['edad'] }}"><br><br>

    <button type="submit">Actualizar</button>
</form>

@endsection
            