@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header headerRegister">
                <h5 class="card-title" id="titleModal">Nueva Noticia</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('news') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @if (session('success'))
                        <h6 class="alert alert-success">{{ session('success') }}</h6>
                    @endif
                    {{-- @error('name')
                        <h6 class="alert alert-danger">{{ $message }}</h6>
                    @enderror --}}
                    <p class="text-primary">Los campos con asterisco (<span class="required">*</span>) son obligatorios.</p>
                    <div class="row pb-3">
                        <div class="col-sm-1">
                            <button type="button" class="btn btn-primary" data-toggle="modal" title="Buscar"
                                data-target="#modalNoticia"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="titulo">Notice<span class="required">*</span></label>
                                <input class="form-control" id="txtTitulo" name="txtTitulo" type="text"
                                    placeholder="Titulo" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Descripción <span class="required">*</span></label>
                                <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" rows="2"
                                    placeholder="Descripción de la Noticia" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Category<span class="required">*</span></label>
                                <select name="category_id" class="form-control selectpicker" id="categoria" name="categoria" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="photo">
                                <label for="foto">Foto (570x380)</label>
                                <div class="prevPhoto">
                                    <span class="delPhoto notBlock">X</span>
                                    <label for="foto"></label>
                                    <div>
                                        <img id="img" class="img-responsive"
                                            src="http://127.0.0.1:8000/storage/uploads/portada_noticia.png">
                                    </div>
                                </div>
                                <input id="" name="foto" type="file" accept="image/*" />
                                @error('foto')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="tile-footer">
                        <button id="btnActionForm" class="btn btn-primary" type="submit"><i
                                class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText"
                                title="Crear Noticia">Guardar</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
