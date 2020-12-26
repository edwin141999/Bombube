@extends('layouts.plantilla')

@section('title','Nails')

@section('content')
<section>
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-3 mt-3">
            @foreach ($nails as $nail)
                <div class="col mb-4">
                    <div class="card h-auto align-items-center">
                        <img src="images/{{$nail->url}}" class="card-img-top w-50" alt="imagen">
                        <div class="card-body">
                            <h5 class="card-title">{{$nail->tittle}}</h5>
                            <p class="card-text">{{$nail->description}}</p>
                            <a href="{{route('nails.show',$nail)}}" class="btn btn-primary w-100">Detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection