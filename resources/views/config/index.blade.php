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
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card-header">

                                            <form action="">

                                                <div class="font-weight-bold">Juan David Grijalba Osorio</div>
                                                {{-- <input type="hidden" name="userId" id="userId" value="1"> --}}
                                                <div
                                                    class="img__wrap border border-dark btn btn-outline-white d-flex justify-content-center">

                                                    <i class="shadow-hover-efect"></i>
                                                    <!-- <img class="img__img" src="../../public/img/svg/upload-user.svg" /> -->
                                                    <img class=""
                                                        src="http://localhost/WWW/Springfield_News/views/perfil/Files/juan_david-73.jpg"
                                                        alt="juan_david-73" height="190" width="190">
                                                    <i class="far fa-edit img__description">Cambiar</i>
                                                </div>


                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="row ">
                                            <div class="col-sm col-lg"><label for="email_user">Correo
                                                    Electronico</label></div>
                                            <div class="col-sm col-lg" id="email_user">
                                                <span>jose@gmail.com</span>
                                            </div>
                                            <div class="col-sm col-lg">
                                                <button class="btn btn-primary" data-toggle="modal"
                                                    data-target="#emailModal">cambiar</button>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-sm col-lg">
                                                <span>Nombre</span>
                                            </div>
                                            <div class="col-sm col-lg">
                                                <div id="complete_name_field">juan osorio</div>
                                            </div>
                                            <div class="col-sm col-lg">
                                                <button class="btn btn-primary" id="editName">cambiar</button>

                                            </div>
                                        </div>
                                        <form action="" id="form_editName" method="POST" style="display: none;"
                                            autocomplete="off">
                                            <div class="row ">
                                                <div class="col-sm-2 col-lg-2">
                                                    <label class="pt-2" for="names">Nombre</label>
                                                </div>
                                                <div class="col-sm-4 col-lg-4">
                                                    <input type="text" class="form-control" name="name_user"
                                                        id="name_user" value="juan">
                                                </div>
                                                <div class="col-sm-2 col-lg-2">
                                                    <label class="pt-2" for="lastName">Apellidos</label>
                                                </div>
                                                <div class="col-sm-4 col-lg-4">
                                                    <input type="text" class="form-control" name="lastName"
                                                        id="lastName" value="osorio">
                                                </div>

                                            </div>
                                            <div class="row pt-3 justify-content-end">
                                                <div class="col-m col-lg ">
                                                    <input type="button" class="btn btn-secondary" id="cancelEditName"
                                                        value="Cancelar">
                                                </div>

                                            </div>
                                        </form>
                                        <form action="" method="post" id="form_Edit_Password">

                                            <div class="row pt-3">
                                                <div class="col-sm col-lg"><label for="actual_password">Actual
                                                        Contraseña</label></div>
                                                <div class="col-sm col-lg"><input type="password" name="actual_password"
                                                        id="actual_password" class="form-control" required=""></div>

                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-sm col-lg"><label for="new_password"></label>Nueva
                                                    Contraseña</div>
                                                <div class="col-sm col-lg"><input type="password" name="new_password"
                                                        id="new_password" class="form-control" required=""></div>

                                            </div>
                                            <div class="row pt-3">

                                                <div class="col-sm col-lg"><label for="confirm_password"></label>Confirmar
                                                    Contraseña
                                                </div>
                                                <div class="col-sm col-lg"><input type="password" name="confirm_password"
                                                        id="confirm_password" class="form-control" required=""></div>

                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-sm col-lg d-flex justify-content-center">
                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                </div>
                                            </div>
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
