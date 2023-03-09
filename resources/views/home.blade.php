@extends('layouts.admin')

@section('content-header', '')

@section('content')
    <div class="container-fluid">
      <h1>Valores totais das vendas</h1>
        <div class="row">
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                  <h3>{{$orders_count}}</h3>
                <p>Vendas totais</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('orders.index')}}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                  <h3>{{config('settings.currency_symbol')}} {{number_format($income, 2)}}</h3>
                <p>Renda liquida</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('orders.index')}}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                  <h3>{{config('settings.currency_symbol')}} {{number_format($cost, 2)}}</h3>
                <p>Renda Bruta</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('orders.index')}}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$customers_count}}</h3>

                <p>Usuários</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ route('customers.index') }}" class="small-box-footer">Mais informações<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
    </div>


    <h1>Valor de vendas (diário)</h1>
<!---------------------------------------------------->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
              <h3>{{$orders_today}}</h3>
            <p>Vendas feitas hoje</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="{{route('orders.index')}}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
              <h3>{{config('settings.currency_symbol')}} {{number_format($income_today, 2)}}</h3>
            <p>Renda liquida</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="{{route('orders.index')}}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
              <h3>{{config('settings.currency_symbol')}} {{number_format($cost_today, 2)}}</h3>
            <p>Renda bruta</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="{{route('orders.index')}}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{config('settings.currency_symbol')}} </h3>
            <p>Saída de caixa</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="{{route('outflow.index')}}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- ./col -->
      
      <!-- ./col -->
</div>

<h1>Valores em estoque</h1>

<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-primary">
      <div class="inner">
          <h3>{{number_format($cost_today, 2)}}</h3>
        <p>Itens em estoque</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="{{route('orders.index')}}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-primary">
      <div class="inner">
          <h3> {{number_format($cost_today, 2)}}</h3>
        <p>Itens vendidos</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="{{route('orders.index')}}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
          <h3>{{config('settings.currency_symbol')}} {{number_format($income_today, 2)}}</h3>
        <p>Valor liquido</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="{{route('orders.index')}}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
          <h3>{{config('settings.currency_symbol')}} {{number_format($income_today, 2)}}</h3>
        <p>Valor bruto</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="{{route('orders.index')}}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  
  
  <!-- ./col -->
  
  <!-- ./col -->
</div>
    <div class="row">
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

      @if ((!$labels))

      @else
        <div><canvas id="myChart" width="700%" height="500%"></canvas></div>
      
      <script>
        const DATA_COUNT = {!! $labels !!};
        const NUMBER_CFG = {count: DATA_COUNT, min: -100, max: 100};
        var ctx = document.getElementById("myChart").getContext("2d");
        var myChart = new Chart(ctx, {
            type: 'line',            
            data: {
              labels: {!! $labels !!},
              datasets: [{
                label: 'Renda por Mês',
                data: {!! $data !!},
                

                
              }]
            },
            options: {
              responsive: true,
              plugins: {
              legend: {
                position: 'top',
                      },
              title: {
                display: true,
                text: 'Renda ao Mês'
                     }          
                       }
            }
      });

      </script>
      @endif
    </div>
</div>

@endsection
