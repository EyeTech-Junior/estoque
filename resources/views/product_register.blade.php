@extends('layouts.theme.app')

@section('content')


<form role="form" method="POST" action="{{ route('produto')}}">
@csrf
<div class="col py-3">
	<div class="container">
		<div class="form-title">
			<h1> Cadastrar produtos</h1>
		</div>
		<div class="form-body row inputsRegistro">
			<div class="col-sm-4">
				<input class="form-control" type="text" name="name" value="" required required>
				<label class="form-label" for="">Nome do produto</label>
			</div>
			<div class="col-sm-4">
				<input class="form-control" type="text" name="cost" value="" required>
				<label class="form-label" for="">Preço de custo</label>
			</div>
			<div class="col-sm-4">
				<input class="form-control" type="text" name="price" value="" required>
				<label class="form-label" for="">Preço de venda</label>
			</div>
			<!-- novos dados de cadastro -->
			<div class="col-sm-4">
				<select class="form-select form-control" name="unidade" required>
                    <option value="" selected></option>
					<option value="tamanho">Tamanho</option>
					<option value="unidade">Unidade</option>
					<option value="caixa">Caixa</option>
					<option value="peso">Peso</option>
				</select>
				<label class="form-label" for="">Sistema de unidade</label>
			</div>
			<div class="col-sm-4">
				<input class="form-control" type="text" name="quantidade" value="" required>
				<label class="form-label" for="">Quantidade</label>
			</div>
			<div class="col-sm-4">
				<input class="form-control" type="text" name="marca" value="" required>
				<label class="form-label" for="">Marca</label>
			</div>
			<div class="col-sm-4">
				<input class="form-control" type="text" name="grupo" value="" required>
				<label class="form-label" for="">Grupo</label>
			</div>
			<div class="col-sm-4">
				<input class="form-control" type="text" name="fornecedor" value="" required>
				<label class="form-label" for="">Fornecedor</label>
			</div>
			<div class="col-sm-4">
				<input class="form-control" type="text" name="porcentagem" value="" required>
				<label class="form-label" for="">Porcentagem</label>
			</div>
			<div class="col-sm-4">
				<input class="form-control" type="text" name="imp_federal" value="" required>
				<label class="form-label" for="">Imp. Federal</label>
			</div>
			<div class="col-sm-4">
				<input class="form-control" type="text" name="icms" value="" required>
				<label class="form-label" for="">ICMS</label>
			</div>
			<div class="col-sm-4">
				<input class="form-control" type="text" name="codigo" value="" required>
				<label class="form-label" for="">Código de barra</label>
			</div>
			<div class="col-sm-4">
				<!-- <p><a href="https://www.freenfe.com.br/consulta-ncm/">consultar codigo NSC</a></p> -->
				<input class="form-control" type="text" name="nsc" value="" required>
				<label class="form-label" for="">Código NSC</label>
			</div>
			<div class="col-sm-4">
					<select name="categoria" class="form-select form-label form-control" required>
                        <option value="" selected></option>
						@foreach ($categorias as $categoria)
						<option value="{{$categoria->id}}">{{$categoria->name}}</option>
						@endforeach
					</select>
				<label class="form-label" for="">Categoria</label>
			</div>


			<div class="button-alt col-sm-4 text-center m-auto">

				<button type="submit" class="btn btn-success w-100"> Cadastrar </button>
			</div>

		</div>

	</div>


</form>
@endsection
