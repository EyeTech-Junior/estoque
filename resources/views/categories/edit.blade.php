@extends('layouts.admin')

@section('title', 'Cadastrar Categoria')
@section('content-header', 'Cadastrar Categoria')

@section('content')

    <div class="card">
        <div class="card-body">

            <form action="{{ route('categories.update', $category) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col form-group">
                        <label for="name">Nome da Categoria</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                               id="name"
                               placeholder="Nome" value="{{ old('name',$category->name) }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col form-group">
                        <label for="description">Descrição</label>
                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                               id="description"
                               placeholder="Descrição" value="{{ old('description',$category->description) }}">
                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Cadastrar</button>  <input class="btn btn-primary" type="reset">
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection
