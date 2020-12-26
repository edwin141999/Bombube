@extends('layouts.plantilla')

@section('title','Nails - '.$nail->tittle)
    
@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 ">
                    <h2 class="text-center">{{$nail->tittle}}</h2>
                    <div class="row">
                        <div class="col-12 col-xl-6 align-items-center">
                            <img src="/images/{{$nail->url}}" class="img img-fluid w-50 mx-auto d-block" alt="imagen">
                        </div>
                        <div class="col-12 col-xl-6">
                            <p>{{$nail->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection