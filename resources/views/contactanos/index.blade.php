@extends('app')
@section('title', 'Contactanos')
@section('content')
    <h1>
        Dejanos un mensaje</h1>

    <form action="{{ route('contactanos.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label for="name">Nombre: </label><input  class="form-control" type="text" name="name">
                @error('name')
                    <p><strong>{{ $message }}</strong></p>
                @enderror
            </div>
            <div class="col">
                <label for="correo">Correo: </label><input  class="form-control" type="text"" type="email" name="correo">
                @error('correo')
                    <p><strong>{{ $message }}</strong></p>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col"> <label for="mensaje">Mensaje: </label>
                <textarea class="form-control" name="mensaje" rows="4"></textarea>
                @error('mensaje')
                    <p><strong>{{ $message }}</strong></p>
                @enderror
            </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-primary"type="submit">Enviar mensaje</button>
            </div>
        </div> 
    </form>


    @if (session('info'))
        <script>
            alert('{{ session('info') }}');
        </script>
    @endif
@endsection
