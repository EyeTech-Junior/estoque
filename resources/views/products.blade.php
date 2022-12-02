@extends('layouts.main')
@section('title','Cadastro de produtos')
@section('content')
<h1>Cadastro de Produtos</h1>
<form action="{{ route('produto')}}" method="POST">
    @csrf
    <label for="">Nome do produto</label><br>
    <input type="text" name="nome"><br>
    
    <label for="">preço de custo</label><br>
    <input type="text" name="pcusto"><br>

    <label for="">Preço de venda</label><br>
    <input type="text" name="pvenda"><br>

    <label for="">Sistema de unidade</label><br>
    <select name="unidade">
        <option value="quantidade">Tamanho</option>
        <option value="unidade">Unidade</option>
        <option value="caixa">Caixa</option>
        <option value="peso">Peso</option>
      </select><br>

    <label for="">quantidade</label><br>
    <input type="text" name="quantidade"><br>



    <label for="">quantidade máxima</label><br>
    <input type="text" name="quant_max"><br>

    <label for="">quantidade mínima</label><br>
    <input type="text" name="quant_min"><br>

    <label for="">referência</label><br>
    <input type="text" name="referencia"><br>

    <label for="">marca</label><br>
    <input type="text" name="marca"><br>
    
    <label for="">grupo</label><br>
    <input type="text" name="grupo"><br>

    <label for="">fornecedor</label><br>
    <input type="text" name="fornecedor"><br>

    <label for="">porcentagem</label><br>
    <input type="text" name="porcentagem"><br>

    <label for="">imp_federal</label><br>
    <input type="text" name="imp_federal"><br>

    <label for="">icms</label><br>
    <input type="text" name="icms"><br>

    <label for="">lucro</label><br>
    <input type="text" name="lucro"><br>


    <label for="">Código de barra</label><br>
    <input type="text" name="codigo"><br>

    <label for="">Código NSC - pesquisar produto</label><br>
    <p><a href="https://www.freenfe.com.br/consulta-ncm/">consultar codigo NSC</a></p>
    <input type="text" name="nsc"><br>

    <label for="">categorias</label><br>
    <select name="categoria">
        <option value="seco">seco</option>
        <option value="molhado">molhado</option>
        <option value="quente">quente</option>
        <option value="frio">frio</option>
    </select><br><br>

    <button type="submit">entrar</button><br>
    <br><a href="/menu">voltar para o menu</a>
</form>
@endsection