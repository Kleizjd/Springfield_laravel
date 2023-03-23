@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="card text-center">
            <div class="card-header">
                <h4>Noticia</h4>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row pb-3">
                        @foreach ($news as $new)
                            <div class="col-sm-2 mx-auto">
                                <div class="card" style="width: 10rem;">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group">
                                            <img style="height: 5rem;" src={{ asset($new->image_new) }} class="card-img-top"
                                                alt="...">
                                        </li>
                                        <li class="list-group-item">
                                            <h6 class="card-title">{{ $new->title }}</h6>
                                        </li>
                                        <li class="list-group-item">
                                            <button class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#modal-{{ $new->id }}">Ver Noticia</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Modal BUSCAR -->

                            <div class="modal fade" id="modal-{{ $new->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document" style="max-width: 80%;">

                                    <div class="modal-content">
                                        <div class="text-center modal-header">
                                            <h3 class="w-100 modal-title">Noticia</h3>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6 border">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <img src="{{ asset($new->image_new) }}" width="178" height="178" />
                                                            {{-- <img src="http://127.0.0.1:8000/storage/uploads/upload-user.svg" width="178" height="178" /> --}}
                                                            <h4 id="titulo_notice">{{ $new->title}}</h4>
                                                            <p class="text-muted" id="categoria_notice">{{ $new->name }}
                                                            </p>
                                                            <p><input type="checkbox" name="option" id="me_gusta">
                                                                <label for="check1">
                                                                    <span class="fa-stack">
                                                                        <i class="fa fa-thumbs-up fa-stack-1x"></i>
                                                                    </span>
                                                                </label>
                                                                <b id="n_likes"> 0</b> Me gusta
                                                            </p>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="row" style="height: 80%;">
                                                                <div class="col">
                                                                    <p class="">{{ $new->description }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="rating" id="rating_number">
                                                                        <input type="radio" name="rating" value="5"
                                                                            id="5"><label for="5">☆</label>
                                                                        <input type="radio" name="rating" value="4"
                                                                            id="4"><label for="4">☆</label>
                                                                        <input type="radio" name="rating" value="3"
                                                                            id="3"><label for="3">☆</label>
                                                                        <input type="radio" name="rating" value="2"
                                                                            id="2"><label for="2">☆</label>
                                                                        <input type="radio" name="rating" value="1"
                                                                            id="1"><label for="1">☆</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="row">
                                                        <div class="col">
                                                            <form id="form_comment">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control"
                                                                        name="comentario" id="comentario"
                                                                        placeholder="Realice un comentario">
                                                                    <div class="input-group-prepend ">
                                                                        <button class="btn btn-primary" type="submit"><i
                                                                                class="far fa-paper-plane"></i></button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="border rounded" id="comentar">
                                                                <!-- <p><b>${res.usuario} : </b>${res.comentarios}</b> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- </div> --}}
@endsection
