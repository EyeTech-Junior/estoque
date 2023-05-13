@extends('layouts.admin')

@section('content-header', '')

@section('content')
    <div class="container-fluid">
        <div class="row">
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                  <h3>{{$orders_count}}</h3>
                <p>Quatidade de Vendas</p>
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
                  <h3>{{config('settings.currency_symbol')}} {{number_format($income, 2)}}</h3>
                <p>Valor total de vendas</p>
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
                  <h3>{{config('settings.currency_symbol')}} {{number_format($cost, 2)}}</h3>
                <p>Renda Bruta</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              
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
            
            </div>
          </div>
          <!-- ./col -->
    </div>

    <div class="row col-12">
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

      @if ((!$labels))

      @else

      <div class="col-sm-9 chart-container" style="position: relative; height:40vh; width:80vw">
        <canvas id="myChart" width="1500%" height="500%"></canvas></div>

      <script>


        const DATA_COUNT = {!! $labels !!};
        const NUMBER_CFG = {count: DATA_COUNT, min: 0, max: 100};
        var ctx = document.getElementById("myChart").getContext("2d");
        var myChart = new Chart(ctx, {
            type: 'line',            
            data: {
              labels: {!! $labels !!},
              datasets: [{
                label: 'VENDAS',
                data: {!! $data !!},
                borderColor: 'rgb(0, 192, 192)',
                tension: 0.1

                
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
                text: 'Gráfico de vendas'
                     }          
                       }
            }
      });

      </script>
      @endif
    </div>
    
</div>
    
</div>

@endsection
