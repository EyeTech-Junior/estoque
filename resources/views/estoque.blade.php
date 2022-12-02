@extends('layouts.main')
@section('title','Lista Funcionário')
@section('content')
<h1>Estoque</h1>
<table class="table table-dark table-sm table-bordered">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">====</th>
          <th scope="col">Nome</th>
          <th scope="col">Preço custo</th>
          <th scope="col">Preço venda</th>
          <th scope="col">Unidade	</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Quantidade máxima</th>
          <th scope="col">Quantidade mínima</th>
          <th scope="col">Referencia	</th>
          <th scope="col">Marca	</th>
          <th scope="col">Grupo</th>
          <th scope="col">Fornecedor</th>
          <th scope="col">Porcentagem</th>
          <th scope="col">Imposto federal</th>
          <th scope="col">ICMS</th>
          <th scope="col">Lucro</th>
          <th scope="col">Codigo</th>
          <th scope="col">NCS</th>
          <th scope="col">Categoria</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($produtos as $produto)
        <tr>
            <th scope="row">{{$loop->index}}</th>
            <td><a href="">editar</a></td>
            <td>{{$produto->name}}</td>
            <td>{{$produto->preco_custo}}</td>
            <td>{{$produto->preco_venda}}</td>
            <td>{{$produto->unidade}}</td>
            <td>{{$produto->quantidade}}</td>
            <td>{{$produto->quant_max}}</td>
            <td>{{$produto->quant_min}}</td>
            <td>{{$produto->referencia}}</td>
            <td>{{$produto->marca}}</td>
            <td>{{$produto->grupo}}</td>
            <td>{{$produto->fornecedor}}</td>
            <td>{{$produto->porcentagem}}</td>
            <td>{{$produto->imp_federal}}</td>
            <td>{{$produto->icms}}</td>
            <td>{{$produto->lucro}}</td>
            <td>{{$produto->codigo}}</td>
            <td>{{$produto->nsc}}</td>
            <td>{{$produto->categoria}}</td>
        </tr>
        @endforeach
      </tbody>
  </table>


@endsection