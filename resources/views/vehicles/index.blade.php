@extends('app')
@section('content')
<div class="container d-flex justify-content-center border p-4 mt-4">
    <div class="card">
        <img src="https://th.bing.com/th/id/OIF.mgqlW2IAdnL3qEj1mrPhxA?pid=ImgDet&rs=1"alt="">

        <div class="card-body">
            <div class="child">
                <form action="{{ route('vehicles') }}" method="POST">
                    @csrf
                    @if (session('success'))
                        <h6 class="alert alert-success">{{ session('success') }}</h6>
                    @endif
                    @error('nameVehicle')
                        <h6 class="alert alert-danger">{{ $message }}</h6>
                    @enderror

                    <div class="row">
                        <div class="col">
                            <label for="nameVehicle">Vehicle</label>
                            <input type="text" name="nameVehicle" id="nameVehicle" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="brand">Brand</label>
                            <input type="text" name="brand" id="brand" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="cost">Costo</label>
                            <input type="number" name="cost" id="cost" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
