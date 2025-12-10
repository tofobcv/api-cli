@extends('layouts.app')

@section('content')
<h2>Crear Estudiante</h2>

<form action="{{ route('students.store') }}" method="POST">
    @csrf

    Nombre: <input type="text" name="nombre"><br>
    Apellido: <input type="text" name="apellido"><br>
    Email: <input type="email" name="email"><br>
    Edad: <input type="number" name="edad"><br><br>

    <button type="submit">Guardar</button>
</form>

@endsection
