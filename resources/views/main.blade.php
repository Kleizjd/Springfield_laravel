@extends('app')
<style>
	.rating {
		display: flex;
		margin-top: -10px;
		flex-direction: row-reverse;
		margin-left: -4px;
		float: left;
	}

	.rating>input {
		display: none
	}

	.rating>label {
		position: relative;
		width: 19px;
		font-size: 25px;
		color: #ff0000;
		cursor: pointer;
	}

	.rating>label::before {
		content: "\2605";
		position: absolute;
		opacity: 0
	}

	.rating>label:hover:before,
	.rating>label:hover~label:before {
		opacity: 1 !important
	}

	.rating>input:checked~label:before {
		opacity: 1
	}

	.rating:hover>input:checked~label:before {
		opacity: 0.4
	}
</style>
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
                                            <img style="height: 7rem;" src={{ asset($new->image_new) }} class="card-img-top"
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
                            @include('news.modal.show')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
