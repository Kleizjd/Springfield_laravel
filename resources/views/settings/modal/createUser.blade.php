<!-- Modal BUSCAR -->
<div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document" style="max-width: 80%;">
        <div class="modal-content">

            <div class="text-center modal-header">
                <h3 class="w-100 modal-title">Crear de Usuario</h3>
                <button type="button" class="close" data-dismiss="modal" title="Cerrar">
                    <i class="fa fa-window-close fa-2x text-danger"></i>
                </button>
            </div>

            <div class="card-body">
                <form method="POST" id="frm_crea_usuario" action="" autocomplete="off">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm col-lg">
                                 <div class="container-fluid">
                                    <div class="row pb-3">
                                        <div class="col-4">
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                                        </div>
                                        <div class="col-1">
                                            <label for="rol">Rol</label>
                                        </div>
                                        <div class="col-3">
                                            <div class="row">
                                                <select name="rol" name="rol" class="form-control">
                                                    <option value="">Seleccione...</option>
                                                    <!-- <option value="1">Administrador</option> -->
                                                    <option value="2">Lector</option>
                                                    <option value="3">Columnista</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <input class="form-control" type="email" name="email" id="email" placeholder="Correo Electronico">
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group form-group">
                                            <input type="password" class="form-control" placeholder="Contrase&ntilde;a" name="password_user" id="password_user" required />
                                            <button type="button" class="btn btn-outline-primary showPassword">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group form-group">
                                            <input type="password" class="form-control" placeholder="Validar Contrase&ntilde;a" required name="password_verify" id="password_verify" />
                                            <button type="button" class="btn btn-outline-primary showPassword">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--  -->