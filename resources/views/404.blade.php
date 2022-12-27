@extends('layouts.theme.app')

@section('content')

<!-- conteúdo aqui -->
<div class="container-fluid">

    <!-- 404 Error Text -->
    <div class="text-center">
        <div class="error mx-auto" data-text="404">404</div>
        <p class="lead text-gray-800 mb-5">Funcionalidade offline</p>
        <p class="text-gray-500 mb-0">Espere um pouco e tente novamente, caso o erro persista, contate ative a assistência...</p>
        <a href="/home">&larr; voltar</a>
    </div>

</div>
@endsection


