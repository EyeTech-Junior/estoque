@extends('layouts.admin')

@section('title', 'Atualizar')
@section('content-header', 'Atualizar informações de usuário')

@section('content')

    <div class="card">
        <div class="card-body">

            <form action="{{ route('customers.update', $customer) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="first_name">Nome</label>
                        <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror"
                               id="first_name"
                               placeholder="Nome" value="{{ old('first_name',$customer->first_name) }}">
                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="last_name">Sobrenome</label>
                        <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror"
                               id="last_name"
                               placeholder="Sobrenome" value="{{ old('last_name',$customer->last_name) }}">
                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="phone">Telefone</label>
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone"
                               placeholder="Telefone" value="{{ old('phone',$customer->phone) }}">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                

                

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                           placeholder="Email" value="{{ old('email',$customer->email) }}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-8 form-group">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" id="password"
                               placeholder="Senha" value="{{ old('password') }}">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    
                    <div class="col-md-4 form-group">
                        <label for="first_name">CPF</label>
                        <input type="text" name="cpf" class="form-control @error('cpf') is-invalid @enderror"
                               id="cpf"
                               placeholder="CPF" value="{{ old('cpf',$customer->cpf) }}">
                        @error('cpf')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="address">Endereço</label>
                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                           id="address"
                           placeholder="Endereço" value="{{ old('address',$customer->address) }}">
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                


                <button class="btn btn-success" type="submit">Atualizar</button>  <input class="btn btn-primary" type="reset">
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
