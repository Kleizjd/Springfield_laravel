@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="card shadow-lg mt-2">
            <div class="badge bg-dark card-header">
                <div class="row">
                    <h4>
                        <b>Configuracion</b>
                    </h4>
                </div>
            </div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Perfil</a>
                </li>
            </ul>
            <div class="card-body">
                <div class="card-block">
                    <div class="tab-content">
                        <div class="tab-pane active">
                            <div class="tab-pane active">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>
                                                    {{ $error }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (session()->get('message'))
                                    <div class="alert alert-success" role="alert">
                                        <strong>Success: </strong>{{ session()->get('message') }}
                                    </div>
                                @endif

                                <div class="row">

                                    <div class="col-6">
                                        <form action="{{ route('home') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-header text-center">
                                                <div class="font-weight-bold">{{ Auth::user()->name }}'s Profile
                                                </div>
                                                <div
                                                    class="img__wrap border btn btn-outline-white d-flex justify-content-center">
                                                    <label for="photo">
                                                        <?php if (!empty(Auth::user()->photo)) : ?>
                                                        <i class="far fa-edit img__description">Cambiar</i>
                                                        <div
                                                            class="img__wrap border border-dark btn btn-outline-white d-flex justify-content-center">
                                                            <img class="img-responsive" id="img_preview"
                                                                src="{{ asset(Auth::user()->photo) }}" height="190"
                                                                width="190">
                                                        </div>
                                                        <?php else : ?>
                                                        <i class="far fa-edit img__description">Cambiar</i>
                                                        <div
                                                            class="img__wrap border border-dark btn btn-outline-white d-flex justify-content-center">
                                                            <img class="img-responsive" id="img_preview"
                                                                src="http://127.0.0.1:8000/storage/svg/upload-user.svg"
                                                                height="190" width="190">
                                                        </div>
                                                        <?php endif; ?>

                                                    </label>
                                                    <input type="file" name="photo" id="photo" accept="image/*"
                                                        style="display: none;">
                                                    @error('photo')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label for="name"><strong>Name:</strong></label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="{{ Auth::user()->name }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="email"><strong>Email:</strong></label>
                                                <input type="text" class="form-control" id="email"
                                                    value="{{ Auth::user()->email }}" name="email">
                                            </div>
                                            <button class="btn btn-primary" type="submit">Update Profile</button>
                                        </form>
                                    </div>
                                    <div class="col">
                                        <form action="{{ route('password-update') }}" method="POST"
                                            enctype="multipart/form-data">

                                            <div class="form-group">
                                                <label for="email"><strong>Password:</strong></label>
                                                <input type="password" class="form-control" id="old_password"
                                                    name="old_password">
                                            </div>
                                            <div class="form-group">
                                                <label for="new_password"><strong>New password:</strong></label>
                                                <input type="password" class="form-control" id="new_password"
                                                    name="new_password">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="password_confirm"><strong>Password Confirm:</strong></label>
                                                <input type="password" class="form-control" id="password_confirm"
                                                    name="password_confirm">
                                            </div>
                                            <button class="btn btn-primary" type="submit">Update Password</button>
                                        </form>

                                    </div>
                                </div>






                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
<script>
    // Obtener referencia al input y a la imagen
    window.onload = function() {
        const $seleccionArchivos = document.querySelector("#photo"),
            $imagenPrevisualizacion = document.querySelector("#img_preview");

        // Escuchar cuando cambie
        $seleccionArchivos.addEventListener("change", () => {
            // Los archivos seleccionados, pueden ser muchos o uno
            const archivos = $seleccionArchivos.files;
            // Si no hay archivos salimos de la función y quitamos la imagen
            if (!archivos || !archivos.length) {
                $imagenPrevisualizacion.src = "";
                return;
            }
            // Ahora tomamos el primer archivo, el cual vamos a previsualizar
            const primerArchivo = archivos[0];
            // Lo convertimos a un objeto de tipo objectURL
            const objectURL = URL.createObjectURL(primerArchivo);
            // Y a la fuente de la imagen le ponemos el objectURL
            $imagenPrevisualizacion.src = objectURL;
            document.getElementById("perfil").src = objectURL;
            document.getElementById("perfil2").src = objectURL;

        });
    }
</script>
