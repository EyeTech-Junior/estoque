@extends('layouts.theme.app')

@section('content')

<h1>Cadastro de produtos</h1><br>
<form role="form" method="POST" action="{{ route('products.change', ['id' => $product->id])}}">
@csrf
<form role="form" method="POST" action="{{ route('produto')}}">
	@csrf
	<div class="col py-3">
		<div class="container">
			<div class="form-title">
				<h1> Cadastrar produtos</h1>
			</div>
			<div class="form-body row">
				<div class="col-sm-4">
					<label class="form-label" for="">Nome do produto</label>
					<input class="form-control" type="text" name="name" value="{{$product->name}}">
				</div>
				<div class="col-sm-4">
					<label class="form-label" for="">Preço de custo</label>
					<input class="form-control" type="text" name="cost" value="{{$product->name}}">
				</div>
				<div class="col-sm-4">
					<label class="form-label" for="">Preço de venda</label>
					<input class="form-control" type="text" name="price" value="{{$product->name}}">
				</div>
				<!-- novos dados de cadastro -->
				<div class="col-sm-4">
					<label class="form-label" for="">Sistema de unidade</label>
					<select class="form-select" name="unidade">
						@if ($products->unidade == "tamanho")
						<option value="tamanho" selected>Tamanho</option>
						<option value="unidade">Unidade</option>
						<option value="caixa">Caixa</option>
						<option value="peso">Peso</option>
						@endif
						@if ($products->unidade == "unidade")
						<option value="tamanho">Tamanho</option>
						<option value="unidade" selected>Unidade</option>
						<option value="caixa">Caixa</option>
						<option value="peso">Peso</option>
						@endif
						@if ($products->unidade == "caixa")
						<option value="tamanho">Tamanho</option>
						<option value="unidade">Unidade</option>
						<option value="caixa" selected>Caixa</option>
						<option value="peso">Peso</option>
						@endif
						@if ($products->unidade == "peso")
						<option value="tamanho">Tamanho</option>
						<option value="unidade">Unidade</option>
						<option value="caixa">Caixa</option>
						<option value="peso" selected>Peso</option>
						@endif
					</select>
				</div>
				<div class="col-sm-4">
					<label class="form-label" for="">Quantidade</label>
					<input class="form-control" type="text" name="quantidade" value="{{$product->name}}">
				</div>
				<div class="col-sm-4">
					<label class="form-label" for="">Marca</label>
					<input class="form-control" type="text" name="marca" value="{{$product->name}}">
				</div>
				<div class="col-sm-4">
					<label class="form-label" for="">Grupo</label>
					<input class="form-control" type="text" name="grupo" value="{{$product->name}}">
				</div>
				<div class="col-sm-4">
					<label class="form-label" for="">Fornecedor</label>
					<input class="form-control" type="text" name="fornecedor" value="{{$product->name}}">
				</div>
				<div class="col-sm-4">
					<label class="form-label" for="">Porcentagem</label>
					<input class="form-control" type="text" name="porcentagem" value="{{$product->name}}">
				</div>
				<div class="col-sm-4">
					<label class="form-label" for="">Imp. Federal</label>
					<input class="form-control" type="text" name="imp_federal" value="{{$product->name}}">
				</div>
				<div class="col-sm-4">
					<label class="form-label" for="">ICMS</label>
					<input class="form-control" type="text" name="icms" value="{{$product->name}}">
				</div>
				<div class="col-sm-4">
					<label class="form-label" for="">Código de barra</label>
					<input class="form-control" type="text" name="codigo" value="{{$product->name}}">
				</div>
				<div class="col-sm-4">
					<label class="form-label" for="">Código NSC</label>
					<!-- <p><a href="https://www.freenfe.com.br/consulta-ncm/">consultar codigo NSC</a></p> -->
					<input class="form-control" type="text" name="nsc" value="{{$product->name}}">
				</div>
				<div class="col-sm-4">
					<!-- puxa as informações da tabela categories -->
					<label class="form-label" for="">categorias</label>
					<select name="categoria" class="form-select form-label">
						@foreach ($categorias as $categoria)
						@if ($categoria->id == $product->category_id)
							<option value="{{$categoria->id}}" selected>{{$categoria->name}}</option>			
						@else
							<option value="{{$categoria->id}}">{{$categoria->name}}</option>
						@endif
						@endforeach
					  </select>
						<br>
				</div>
				
				
				<div class="button-alt col-sm-4">
	
					<button type="submit" class="btn btn-success"> Cadastrar </button>
				</div>
	
			</div>
			
		</div>
		
	

					
					
				
				
			
		
		<div class="col-12"><br>
			<button type="submit" class="btn btn-primary">Alterar</button>
		  </div>
	</div>
	

</form>
@endsection