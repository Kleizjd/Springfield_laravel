<!-- Modal BUSCAR -->

<div class="modal fade" id="modalVerNoticia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document" style="max-width: 80%;">
		<div class="modal-content">
			<div class="text-center modal-header">
				<h3 class="w-100 modal-title">Noticia</h3>
				<button type="button" class="close" data-dismiss="modal" title="Cerrar">
					<i class="fa fa-window-close fa-2x text-danger"></i>
				</button>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-6 border">
						<div class="row">
							<div class="col-5">
								<img class="img__img" id="img_notice" src="../../public/img/svg/upload-user.svg" width="178" height="178" />
								<h4 id="titulo_notice">Titulo</h4>
								<p class="text-muted" id="categoria_notice">categoria_noticia</p>
								<p><input type="checkbox" name="option" id="me_gusta">
									<label for="check1">
										<span class="fa-stack">
											<!-- <i class="far fa-thumbs-up fa-stack-1x"></i> -->
											<i class="fa fa-thumbs-up fa-stack-1x"></i>
										</span>
									</label>
									<b id="n_likes"> 0</b> Me gusta
								</p>
							</div>
							<div class="col-7">
								<div class="row" style="height: 80%;">
									<div class="col">
										<p class="" id="descripcion">descripcion</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="rating" id="rating_number">
											<input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
											<input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
											<input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
											<input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
											<input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
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
										<input type="text" class="form-control" name="comentario" id="comentario" placeholder="Realice un comentario" aria-label="Input group example" aria-describedby="btnGroupAddon">
										<div class="input-group-prepend ">
											<button class="btn btn-primary" id="btnGroupAddon" type="submit">
												<i class="far fa-paper-plane"></i>
											</button>
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