@extends('layouts.admin')
@section('title', 'Histórico de vendas')
@section('content-header', 'Histórico de vendas')
@section('content-actions')
    <a href="{{route('cart.index')}}" class="btn btn-primary">Abrir venda</a>
@endsection

@section('content')
<div class="container-fluid">
      <div class="row">
        
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
                <h3>
                  002
                </h3>
              <p>Vendas realizadas hoje</p>
            </div>
            <div class="icon">
              <i class="fas fa-shopping-cart"></i>
            </div>
            
          </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                  <h3>
                      022
                  </h3>
                <p>Vendas mensais</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              
            </div>
          </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
                <h3>212</h3>
              <p>Renda liquida total</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
                <h3>21521</h3>
              <p>Renda Bruta total</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
           
          </div>
        </div>
        <!-- ./col -->
  </div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('orders.index')}}">
                    <div class="row col-12">
                        
                        <div class="col">
                            <input type="date" name="start_date" class="form-control" value="{{request('start_date')}}" />
                        </div>
                        <div class="col">
                            <input type="date" name="end_date" class="form-control" value="{{request('end_date')}}" />
                        </div>
                        

                        <div class="col">
                            <button class="btn btn-outline-primary me-2" type="submit">Pesquisar</button>
                            <button class="btn btn-outline-success me-2" onclick="window.print()">Gerar PDF</button>
                        </div>
                          
                    </div>
                </form>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Total</th>
                    <th>Recebido</th>
                    <th>Status</th>
                    <th>Para pagar</th>
                    <th>Criado em</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{ config('settings.currency_symbol') }} {{$order->formattedTotal()}}</td>
                    <td>{{ config('settings.currency_symbol') }} {{$order->formattedReceivedAmount()}}</td>
                    <td>
                        @if($order->receivedAmount() == 0)
                            <span class="badge badge-danger">Não pago</span>
                        @elseif($order->receivedAmount() < $order->total())
                            <span class="badge badge-warning">Parcial</span>
                        @elseif($order->receivedAmount() == $order->total())
                            <span class="badge badge-success">Pago</span>
                        @elseif($order->receivedAmount() > $order->total())
                            <span class="badge badge-info">Pago</span>
                        @endif
                    </td>
                    <td>{{config('settings.currency_symbol')}} {{number_format($order->total() - $order->receivedAmount(), 2)}}</td>
                    <td>{{$order->created_at}}</td>
                    <td><a href="orders/list/{{$order->id}}" class="btn btn-primary"><i
                        class="fas fa-edit"></i></a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th>{{ config('settings.currency_symbol') }} {{ number_format($total, 2) }}</th>
                    <th>{{ config('settings.currency_symbol') }} {{ number_format($receivedAmount, 2) }}</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
        {{ $orders->render() }}
    </div>
</div>
@endsection

