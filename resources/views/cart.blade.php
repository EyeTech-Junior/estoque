@extends('layouts.theme.app')

@section('content')

<link href="{{asset ('css/cart.css')}}" rel="stylesheet">


<!-- conteúdo aqui -->
<div class="d-flex flex-row bd-highlight">
    <div class="card col-4">
        <div class="card-body">
            <form role="form" method="POST" action="{{ route('cart.troco',['troco' => $troco]) }}">
                @csrf
            <div class="input-group rounded">
                <input type="search" name="troco" class="form-control rounded"
                placeholder="Informe valor recebido"
                aria-label="Search" aria-describedby="search-addon" />
                <button type="submit" class="input-group-text border-0">
                <span class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                </span>
                </button>
              </div>

            <label for="">Valor total da compra: R$ {{Cart::getTotal()}}</label><br>
            <label for="">Valor Recebido: R$ $
            @if ($troco == null)
                {{ "0" }}
            @else
            @if ($troco < 0)
                {{"0"}}
            @else
                {{ $troco + Cart::getTotal()}}
            @endif

            @endif
            </label><br>
            <label for="">Troco: R$

            @if ($troco == null)
                {{ "0" }}
            @else
            @if ($troco < 0)
                {{"0"}}
            @else
                {{ $troco }}
            @endif

            @endif
            </label>
        </form>
            <div class="">
                <form action="{{ route('cart.clear') }}" method="POST">
                  @csrf
                  <button class="border-0 btn btn-danger text-whiter">Remover tudo</button>

                </form>
                <br>
                <form action="{{ route('sale.register') }}" method="POST">
                    @csrf
                    <input type="hidden" name="recebido" value="{{ $troco + Cart::getTotal()}}" >
                    <input type="hidden" name="total" value="{{Cart::getTotal()}}" >
                    <input type="hidden" name="troco" value="{{$troco}}" >
                    <button class="border-0 btn btn-success text-whiter">Finalizar venda</button>
                  </form>

              </div>
        </div>
    </div>

 <!--------------------------- TABELA --------------------------------->

<div class="card shadow mb-6 col-8">
    <div class="card-header py-3">
        <form role="form" method="POST" action="{{ route('cart.store')}}">
            @csrf
            <div class="input-group rounded">
                <input type="search" name="search" class="form-control rounded"
                placeholder="Insira código ou nome"
                aria-label="Search" aria-describedby="search-addon" id="pesquisarProduto" />
                <button class="input-group-text border-0">
                <span class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                </span>
                </button>
            </div>
        </form>
        <ul id="search-results" class="list-group w-100 p-2">
        </ul>

    </div>

    <div class="card-body">
        <div class="table-responsive d-inline">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quant</th>
                        <th></th>
                        <th></th>
                        <!--
                        <th></th>-->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                    <tr>
                        <td>{{ $loop->index }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->quantity }}</td>

                        <td>
                          <form action="{{ route('cart.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id}}" >
                          <input class="form-control rounded" type="number" name="quantity" value="{{ $item->quantity }}"
                          class="w-6 text-center border-0" />
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary">alterar</button>
                        </td>
                        <!--
                        <td>
                            
                            <form action="{{ route('cart.remove') }}" method="POST">
                            @csrf
                            <input type="hidden" name="remover" value="{{ $item->id }}" >
                            <button type="submit" class="border-0 btn btn-danger text-white ">remover</button>
                            </form>
                        </td>-->
                    </form>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


<script src="{{ asset('js/cart.js') }}"></script>


@endsection

