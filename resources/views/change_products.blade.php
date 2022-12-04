@extends('layouts.main')
@section('title','alterar produto')
@section('content')
<h1>Alterar Cadastro</h1>
<form action="{{ route('mudar', ['id' => $products->id])}}" method="POST">
    @csrf

    <label for="">Nome do produto</label><br>
    <input type="text" name="nome" value="{{$products->nome}}"><br>
    
    <label for="">preço de custo</label><br>
    <input type="text" name="pcusto" value="{{$products->preco_custo}}"><br>

    <label for="">Preço de venda</label><br>
    <input type="text" name="pvenda" value="{{$products->preco_venda}}"><br>

    <label for="">Sistema de unidade</label><br>
    <select name="unidade">
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
      </select><br>

    <label for="">quantidade</label><br>
    <input type="text" name="quantidade" value="{{$products->quantidade}}"><br>



    <label for="">quantidade máxima</label><br>
    <input type="text" name="quant_max" value="{{$products->quant_max}}"><br>

    <label for="">quantidade mínima</label><br>
    <input type="text" name="quant_min" value="{{$products->quant_min}}"><br>

    <label for="">referência</label><br>
    <input type="text" name="referencia" value="{{$products->referencia}}"><br>

    <label for="">marca</label><br>
    <input type="text" name="marca" value="{{$products->marca}}"><br>
    
    <label for="">grupo</label><br>
    <input type="text" name="grupo" value="{{$products->grupo}}"><br>

    <label for="">fornecedor</label><br>
    <input type="text" name="fornecedor" value="{{$products->fornecedor}}"><br>

    <label for="">porcentagem</label><br>
    <input type="text" name="porcentagem" value="{{$products->porcentagem}}"><br>

    <label for="">imp_federal</label><br>
    <input type="text" name="imp_federal" value="{{$products->imp_federal}}"><br>

    <label for="">icms</label><br>
    <input type="text" name="icms" value="{{$products->icms}}"><br>

    <label for="">lucro</label><br>
    <input type="text" name="lucro" value="{{$products->lucro}}"><br>


    <label for="">Código de barra</label><br>
    <input type="text" name="codigo" value="{{$products->codigo}}"><br>

    <label for="">Código NSC - pesquisar produto</label><br>
    <p><a href="https://www.freenfe.com.br/consulta-ncm/">consultar codigo NSC</a></p>
    <input type="text" name="nsc" value="{{$products->nsc}}"><br>

    <label for="">categorias</label><br>
    <select name="categoria">
        @if ($products->categoria == "seco")
        <option value="seco" selected>seco</option>
        <option value="molhado">molhado</option>
        <option value="quente">quente</option>
        <option value="frio">frio</option>
        @endif
        @if ($products->categoria == "molhado")
        <option value="seco">seco</option>
        <option value="molhado"selected>molhado</option>
        <option value="quente">quente</option>
        <option value="frio">frio</option>
        @endif
        @if ($products->categoria == "quente")
        <option value="seco">seco</option>
        <option value="molhado">molhado</option>
        <option value="quente"selected>quente</option>
        <option value="frio">frio</option>
        @endif
        @if ($products->categoria == "frio")
        <option value="seco">seco</option>
        <option value="molhado">molhado</option>
        <option value="quente">quente</option>
        <option value="frio"selected>frio</option>
        @endif
        
    </select><br><br>
        
        
    <button type="submit">entrar</button><br>
</form>
@endsection