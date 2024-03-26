@extends('layout')
@section('content')
    <div class="jumbotron">
        <p class="h1 text-center py-4">Página Inicial</p>
    </div>
    <div class="container py-4">
        <div class="row">
            <div class="col-md-6">
                <p class="h1 text-center">Lado esquerdo da tela</p>
            </div>
            <div class="col-md-6">
                <a class="btn btn-primary" href="{{route('page2')}}">Link para página 2</a>
            </div>
        </div>
    </div>
@endsection