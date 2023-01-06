@extends('layouts.theme.app')

@section('content')


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
				<input class="form-control" type="text" name="name" value="">
			</div>
			<div class="col-sm-4">
				<label class="form-label" for="">Preço de custo</label>
				<input class="form-control" type="text" name="cost" value="">
			</div>
			<div class="col-sm-4">
				<label class="form-label" for="">Preço de venda</label>
				<input class="form-control" type="text" name="price" value="">
			</div>
			<!-- novos dados de cadastro -->
			<div class="col-sm-4">
				<label class="form-label" for="">Sistema de unidade</label>
				<select class="form-select form-control" name="unidade">
					<option value="tamanho" selected>Tamanho</option>
					<option value="unidade">Unidade</option>
					<option value="caixa">Caixa</option>
					<option value="peso">Peso</option>
				</select>
			</div>
			<div class="col-sm-4">
				<label class="form-label" for="">Quantidade</label>
				<input class="form-control" type="text" name="quantidade" value="">
			</div>
			<div class="col-sm-4">
				<label class="form-label" for="">Marca</label>
				<input class="form-control" type="text" name="marca" value="">
			</div>
			<div class="col-sm-4">
				<label class="form-label" for="">Grupo</label>
				<input class="form-control" type="text" name="grupo" value="">
			</div>
			<div class="col-sm-4">
				<label class="form-label" for="">Fornecedor</label>
				<input class="form-control" type="text" name="fornecedor" value="">
			</div>
			<div class="col-sm-4">
				<label class="form-label" for="">Porcentagem</label>
				<input class="form-control" type="text" name="porcentagem" value="">
			</div>
			<div class="col-sm-4">
				<label class="form-label" for="">Imp. Federal</label>
				<input class="form-control" type="text" name="imp_federal" value="">
			</div>
			<div class="col-sm-4">
				<label class="form-label" for="">ICMS</label>
				<input class="form-control" type="text" name="icms" value="">
			</div>
			<div class="col-sm-4">
				<label class="form-label" for="">Código de barra</label>
				<input class="form-control" type="text" name="codigo" value="">
			</div>
			<div class="col-sm-4">
				<label class="form-label" for="">Código NSC</label>
				<!-- <p><a href="https://www.freenfe.com.br/consulta-ncm/">consultar codigo NSC</a></p> -->
				<input class="form-control" type="text" name="nsc" value="">
			</div>
			<div class="col-sm-4">
				<label class="form-label" for="">categorias</label>
					<select name="categoria" class="form-select form-label form-control">
						@foreach ($categorias as $categoria)
						<option value="{{$categoria->id}}">{{$categoria->name}}</option>
						@endforeach
					</select>
					<br>
			</div>
			
			
			<div class="button-alt col-sm-4">

				<button type="submit" class="btn btn-success"> Cadastrar </button>
			</div>

		</div>
		
	</div>
	

</form>
@endsection