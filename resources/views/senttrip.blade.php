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
          <section class="col-lg-12 connectedSortable">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Encuestas </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                @if($encuestas->count() > 0)
                 <table class="table table-striped">
                  <thead>
                    <tr>
                      <th >Cliente</th>
                      <th >Correo</th>
                      <th >CheckIn</th>
                      <th >CheckOut</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($encuestas as $encuesta)
                    <tr >
                      <td >{{ $encuesta->nombre_cliente }}</td>
                      <td >{{ $encuesta->mail_cliente }}</td>
                      <td >{{ $encuesta->fecha_entrada }}</td>
                      <td >{{ $encuesta->fecha_salida }}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                @else
                <h3 style="text-align: center;">Aún no se ha enviado ningún correo del Trip</h3>
                @endif
              </div>
              <!-- /.card-body -->
            </div>
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
</body>
</html>
