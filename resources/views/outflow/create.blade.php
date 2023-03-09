@extends('layouts.admin')

@section('title', 'Saída de caixa')
@section('content-header', 'Informar saída de caixa')

@section('content')

<div class="col py-3 card">
    <form action="{{ route('outflow.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="value">valor</label>
                <input type="text" name="value" class="form-control @error('value') is-invalid @enderror" id="value"
                    placeholder="Valor" value="{{ old('value') }}">
                @error('value')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            

            <div class="col-md-4 form-group">
                <label for="description">Descrição</label>
                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                    id="description" placeholder="Descrição" value="{{ old('description') }}">
                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row ">
            <div class="col button-alt  m-auto">
                <button class="btn btn-success" type="submit">Enviar</button>
                <button class="btn btn-primary" type="reset">Resetar</button>
            </div>
        </div>
            
          
        </form>
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