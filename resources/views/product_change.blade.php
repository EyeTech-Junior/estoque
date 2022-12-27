@extends('layouts.theme.app')

@section('content')

<h1>Cadastro de produtos</h1><br>
<form role="form" method="POST" action="{{ route('products.change', ['id' => $product->id])}}">
@csrf
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Nome
					</label>
					<input value="{{$product->name}}" type="text" name="nome" class="form-control" id="exampleInputEmail1" />
				</div>
				
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Código
					</label>
					<input value="{{$product->code}}" type="text" name="codigo" class="form-control" id="exampleInputPassword1" />
				</div>
				
			
		</div>
		<div class="col-md-4">
			
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Custo
					</label>
					<input value="{{$product->cost}}" type="text" name="custo" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Preço
					</label>
					<input value="{{$product->price}}" type="text" name="preco" class="form-control" id="exampleInputPassword1" />
				</div>
				
			
		</div>
		<div class="col-md-4">
			
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Quantidade
					</label>
					<input value="{{$product->stock}}" type="text" name="quantidade" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Categoria
					</label>
					<br>
					<!-- puxa as informações da tabela categories -->
					<select name="categoria" class="form-select form-label">
						@foreach ($categorias as $categoria)
						@if ($categoria->id == $product->category_id)
							<option value="{{$categoria->id}}" selected>{{$categoria->name}}</option>			
						@else
							<option value="{{$categoria->id}}">{{$categoria->name}}</option>
						@endif
						@endforeach
					  </select>
				</div>
				
			
		</div>
		<div class="col-12"><br>
			<button type="submit" class="btn btn-primary">Alterar</button>
		  </div>
	</div>
	
</div>
</form>
@endsection