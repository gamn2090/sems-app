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
                    <tr style="text-align: center;">
                      <th >Cliente</th>
                      <th >Puntaje General</th>
                      <th >Comentario</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($encuestas as $encuesta)
                    <tr onclick="searchPoints({{$encuesta->client_id}})" style="cursor: pointer" >
                      <td  style="width: 30%;">{{ $client->getName($encuesta->client_id) }}</td>
                      <td style="width: 30%;" >
                        {{ round(($encuesta->puntaje/6),2) }}
                      </td>
                      <td style="width: 40%;">{{ $comment->getComment($encuesta->client_id) }}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                <div id="dialog" class="detalles" style="display: none; ">
                  <ul>
                    <li id="detalles1"></li>
                    <li id="detalles2"></li>
                    <li id="detalles3"></li>
                    <li id="detalles4"></li>
                    <li id="detalles5"></li>
                    <li id="detalles6"></li>
                  </ul>
                </div>
                @else
                <h3 style="text-align: center;">no hay puntajes disponibles</h3>
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

@section('Scripts')
<script type="text/javascript">
function searchPoints(id){
          var id = id;
          var data = {id:id, data:data};

          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

          var request = $.ajax({
              url:  'getPoints/',
              type: "get",
              data: data,
              dataType:"json"
          });

          request.done(function( data ) {
              $('#detalles1').text( 'Personal: '+data[0].puntaje);
              $('#detalles2').text(' Instalaciones y servicios: '+data[1].puntaje);
              $('#detalles3').text('Limpieza: '+data[2].puntaje);
              $('#detalles4').text('Confort: '+data[3].puntaje);
              $('#detalles5').text('Ubicacion: '+data[4].puntaje);
              $('#detalles6').text('Relación Calidad-Precio: '+data[5].puntaje );
              $("#dialog").dialog({
                title: "Puntajes por servicios",
              });
          });
    }
</script>
@endsection

</body>
</html>
