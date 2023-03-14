@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header headerRegister">
                <h5 class="card-title" id="titleModal">Nueva Noticia</h5>
            </div>
            <div class="card-body">
                <form id="frm_Noticia" name="frm_Noticia" class="form-horizontal">

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
                                <label class="control-label" for="titulo">Noticia<span class="required">*</span></label>
                                <input class="form-control" id="txtTitulo" name="txtTitulo" type="text"
                                    placeholder="Titulo" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Descripción <span class="required">*</span></label>
                                <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" rows="2"
                                    placeholder="Descripción de la Noticia" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="categoria">Categoria<span class="required">*</span></label>
                                <select class="form-control selectpicker" id="categoria" name="categoria" required>
                                    <option value="">Seleccione...</option>
                                    <option value="1">Moda y Farandula</option>
                                    <option value="2">Politica</option>
                                    <option value="3">Tecnologia</option>
                                    <option value="4">Deportes</option>
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
                                        <img id="img" class="img-responsive" src="http://localhost//www/Springfield_News/public/img/uploads/portada_noticia.png">
                                    </div>
                                </div>
                                <div class="upimg">
                                    <input type="file" name="foto" id="foto">
                                </div>
                                <div id="form_alert"></div>
                            </div>
                        </div>
                    </div>

                    <div class="tile-footer">
                        <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText" title="Crear Noticia">Guardar</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
