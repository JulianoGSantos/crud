@extends('site.layout')

<body>
    <div class="container-sm text-center mt-5">
        <div class="row justify-content-center">
            <div class="alert alert-info" role="alert">
                Cadastro realizado com sucesso!
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-2 g-2">
        <div class="col-1">
            <a href="{{route('index')}}" class="btn btn-primary" role="link">Home</a>
        </div>
    </div>
</body>