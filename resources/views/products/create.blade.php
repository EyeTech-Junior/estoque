@extends('layouts.admin')
@section('title', 'Cadastro de produtos')
@section('content-header', 'Cadastro de produtos')
@section('content')

<div class="col py-3 card">
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="container row">

        

            <div class="col-md-4 form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                    placeholder="Nome" value="{{ old('name') }}">
                @error('name')
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

            

            <div class="col-md-4 form-group">
                <label for="barcode">Código de barra</label>
                <input type="text" name="barcode" class="form-control @error('barcode') is-invalid @enderror"
                    id="barcode" placeholder="Código de barra" value="{{ old('barcode') }}">
                @error('barcode')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            
    </div>
    <div class="container row">
    <div class="col-md-4 form-group">
        <label for="cost">Custo</label>
        <input type="text" name="cost" class="form-control @error('cost') is-invalid @enderror"
            id="cost" placeholder="Custo" value="{{ old('cost') }}">
        @error('cost')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    
    <div class="col-md-4 form-group">
        <label for="price">Preço <input type="range" id="profit-range" min="0" max="100" value="0"> <span id="range-value">0</span>%</label>
        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price"
          placeholder="Preço" value="{{ old('price') }}">
                      
        <script>
          const costInput = document.getElementById('cost');
          const profitRange = document.getElementById('profit-range');
          const profitInput = document.getElementById('price');
          const rangeValue = document.getElementById('range-value');
                        
          function updateProfit() {
            const cost = Number(costInput.value);
            const profitPercentage = Number(profitRange.value);
            const profitAmount = cost * (profitPercentage / 100 + 1);
            profitInput.value = profitAmount.toFixed(2);
            rangeValue.textContent = profitPercentage;
          }
                      
          costInput.addEventListener('input', updateProfit);
          profitRange.addEventListener('input', updateProfit);
        </script>
      

            @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="col-md-4 form-group">
            <label for="category">Categoria</label>
            <select name="category" class="form-control @error('category') is-invalid @enderror" id="category">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" >{{$category->name}}</option>
                @endforeach
            </select>
            @error('category')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="container row">
        <div class="col-md-4 form-group">
            <label for="quantity">Quantidade</label>
            <input type="text" name="quantity" class="form-control @error('quantity') is-invalid @enderror"
                id="quantity" placeholder="Quantidade" value="{{ old('quantity', 1) }}">
            @error('quantity')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <label for="validity">Validade</label>
            <input type="date" name="validity" class="form-control @error('validity') is-invalid @enderror"
                id="validity" placeholder="Validade" value="{{ old('validity') }}">
            @error('validity')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <label for="company">Marca</label>
            <input type="text" name="company" class="form-control @error('company') is-invalid @enderror"
                id="company" placeholder="Marca" value="{{ old('company') }}">
            @error('company')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="container row">
        <div class="col-md-4 form-group">
            <label for="provider">Fornecedor</label>
            <input type="text" name="provider" class="form-control @error('provider') is-invalid @enderror"
                id="provider" placeholder="Fornecedor" value="{{ old('provider') }}">
            @error('provider')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <label for="quantify">Unidade</label>
            <select name="quantify" class="form-control @error('quantify') is-invalid @enderror" id="quantify">
                <option value="4" {{ old('quantify') === 4 ? 'selected' : ''}}>Outros</option>
                <option value="3" {{ old('quantify') === 3 ? 'selected' : ''}}>Caixa</option>
                <option value="2" {{ old('quantify') === 2 ? 'selected' : ''}}>Unidade</option>
                <option value="1" {{ old('quantify') === 1 ? 'selected' : ''}}>Peso</option>
                <option value="0" {{ old('quantify') === 0 ? 'selected' : ''}}>Fardo</option>
            </select>
            @error('quantify')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control @error('status') is-invalid @enderror" id="status">
                <option value="1" {{ old('status') === 1 ? 'selected' : ''}}>Ativo</option>
                <option value="0" {{ old('status') === 0 ? 'selected' : ''}}>Inativo</option>
            </select>
            @error('status')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        
        <div class="col-md-4 form-group">
            <label for="image">Imagem</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="image">
                <label class="custom-file-label" for="image">Escolha arquivo</label>
            </div>
            @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-md-4 button-alt  m-auto">
            <button class="btn btn-primary" type="submit">Cadastrar</button>
        </div>
        
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