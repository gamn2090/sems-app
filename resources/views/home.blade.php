@extends('layouts.app2')

@section('content')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- navbar -->
  @include('partials.navbar')
  <!-- sidebar -->
  @include('partials.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Panel de Control</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
          @include('partials.cuadros')
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">
                  <i class="fa fa-pie-chart mr-1"></i>
                  Puntajes en porcentajes
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <canvas class="chart tab-pane active" id="DonutGraph" style=" position: relative; height: 300px;"></canvas>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">
                  <i class="fa fa-pie-chart mr-1"></i>
                  Puntajes por servicios
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <canvas class="chart tab-pane active" id="BarGraph" style=" position: relative; height: 300px;"></canvas>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@endsection

@section('Scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>

<script type="text/javascript">
// Donut Chart prices

var datas = '{{$puntajes}}';
var data1 = datas.replace(/&quot;/ig,'"');
var datas = JSON.parse(data1);
var data = {
    labels: [
        'Puntuacion Buena',
        'Puntuacion Regular',
        'Puntuacion Mala'
    ],

  datasets:[
    {
      backgroundColor: [
                'rgba(0, 255, 0, 0.5)',
                'rgba(255, 255, 0, 0.5)',
                'rgba(255, 0, 0, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 159, 64, 0.5)'
            ],
      hoverBackgroundColor: [
                'rgba(0, 255, 0, 0.8)',
                'rgba(255, 255, 0, 0.8)',
                'rgba(255, 0, 0, 0.8)',
                'rgba(75, 192, 192, 0.8)',
                'rgba(54, 162, 235, 0.8)',
                'rgba(255, 159, 64, 0.8)'
            ],
      hoverBorderColor: [
                'rgba(0, 255, 0, 1)',
                'rgba(255, 255, 0, 1)',
                'rgba(255, 0, 0, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 159, 64, 1)'
            ],
      borderWidth:[5,5,5],
      data:[
        datas.positivo,
        datas.regulares,
        datas.negativo,
      ]
    }
  ]
}

var context = document.querySelector('#DonutGraph').getContext('2d');

var myNewChart = new Chart(context , {
    type: "doughnut",
    data: data,
});

/* charts prices end*/


// Donut Chart prices

var datas = '{{$servicios}}';
var data1 = datas.replace(/&quot;/ig,'"');
var datas = JSON.parse(data1);
var data = {
    labels: [
        'Calidad-Precio',
        'Instalaciones',
        'Limpieza',
        'Confort',
        'Personal',
        'Ubicacion',
    ],

  datasets:[
    {
      backgroundColor: [
                'rgba(0, 255, 0, 0.5)',
                'rgba(255, 255, 0, 0.5)',
                'rgba(255, 0, 0, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 159, 64, 0.5)'
            ],
      hoverBackgroundColor: [
                'rgba(0, 255, 0, 0.8)',
                'rgba(255, 255, 0, 0.8)',
                'rgba(255, 0, 0, 0.8)',
                'rgba(75, 192, 192, 0.8)',
                'rgba(54, 162, 235, 0.8)',
                'rgba(255, 159, 64, 0.8)'
            ],
      hoverBorderColor: [
                'rgba(0, 255, 0, 1)',
                'rgba(255, 255, 0, 1)',
                'rgba(255, 0, 0, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 159, 64, 1)'
            ],
      borderWidth:[5,5,5,5,5,5],
      data:[
        datas.servicio6,
        datas.servicio2,
        datas.servicio3,
        datas.servicio4,
        datas.servicio1,
        datas.servicio5,
      ]
    }
  ]
}

var context = document.querySelector('#BarGraph').getContext('2d');

var myNewChart = new Chart(context , {
    type: "polarArea",
    data: data,
});


</script>
@endsection

</body>
</html>
