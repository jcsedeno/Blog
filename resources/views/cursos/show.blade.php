@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso)

@section('content')
    <h1>Bienvenido al curso {{$curso}} </h1>
    {{-- <?php echo $curso;?> es igual a {{$curso}} --}}
@endsection
