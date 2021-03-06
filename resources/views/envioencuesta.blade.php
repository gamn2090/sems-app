@extends('layouts.app3')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center; font-size: 22px; font-weight: bold">Encuesta de Calidad</div>

                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12" style="text-align: center">
                        <img src="https://res.cloudinary.com/dklua9mor/image/upload/v1544639796/hsa.jpg" alt="Hoteles San Agustín" width="174" height="150">
                    </div>
                  </div>
                  <div><p>Estimado Sr./Sra. <strong>{{ $client->nombre_cliente.' '.$client->apellido_cliente }}</strong>, usted se hospeda hospedó en nuestro hotel <strong>{{ $hotel->getName($client->hotel_id) }}</strong>.</p>
                  <p>Nos gustaría nos ayudara a mejorar dejándonos su opinión acerca de nuestros servicios</p>
                  <br>
                  <br>
                  </div>
                  <form id="Survei" role="form" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" id="cliente" name="cliente" value="{{$client->id}}">
                    <input type="hidden" id="hotel" name="hotel" value="{{$client->hotel_id}}">
                    <div class="row">
                      <div class="form-group col-md-12" style="text-align: center">
                        <label for="">Atención del Personal</label>
                      </div>
                    </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label class="radio-inline">
                        <input type="radio" value="1" name="personal" id="personal">Muy malo
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="2" name="personal" id="personal">Malo
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="3" name="personal" id="personal">Regular
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="4" name="personal" id="personal">Bueno
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input checked type="radio" value="5" name="personal" id="personal">Muy bueno
                         <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                  <br><br>
                    <div class="row">
                      <div class="form-group col-md-12" style="text-align: center">
                        <label for="">Instalaciones y Servicios</label>
                      </div>
                    </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label class="radio-inline">
                        <input type="radio" value="1" name="instalaciones" id="instalaciones">Muy malo
                        <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="2" name="instalaciones" id="instalaciones">Malo
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="3" name="instalaciones" id="instalaciones">Regular
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="4" name="instalaciones" id="instalaciones">Bueno
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input checked type="radio" value="5" name="instalaciones" id="instalaciones">Muy bueno
                         <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                  <br><br>
                  <div class="row">
                      <div class="form-group col-md-12" style="text-align: center">
                      <label for="">Limpieza</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label class="radio-inline">
                        <input type="radio" value="1" name="limpieza" id="limpieza">Muy malo
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="2" name="limpieza" id="limpieza">Malo
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="3" name="limpieza" id="limpieza">Regular
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="4" name="limpieza" id="limpieza">Bueno
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input checked type="radio" value="5" name="limpieza" id="limpieza">Muy bueno
                         <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                  <br><br>
                  <div class="row">
                      <div class="form-group col-md-12" style="text-align: center">
                      <label for="">Confort</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label class="radio-inline">
                        <input type="radio" value="1" name="confort" id="confort">Muy malo
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="2" name="confort" id="confort">Malo
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="3" name="confort" id="confort">Regular
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="4" name="confort" id="confort">Bueno
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input checked type="radio" value="5" name="confort" id="confort">Muy bueno
                         <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                  <br><br>
                  <div class="row">
                      <div class="form-group col-md-12" style="text-align: center">
                      <label for="">Ubicación</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label class="radio-inline">
                        <input type="radio" value="1" name="ubicacion" id="ubicacion">Muy malo
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="2" name="ubicacion" id="ubicacion">Malo
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="3" name="ubicacion" id="ubicacion">Regular
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="4" name="ubicacion" id="ubicacion">Bueno
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input checked type="radio" value="5" name="ubicacion" id="ubicacion">Muy bueno
                         <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                  <br><br>
                  <div class="row">
                      <div class="form-group col-md-12" style="text-align: center">
                      <label for="">Relación Calidad-Precio</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label class="radio-inline">
                        <input type="radio" value="1" name="relacion" id="relacion">Muy malo
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="2" name="relacion" id="relacion">Malo
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="3" name="relacion" id="relacion">Regular
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="4" name="relacion" id="relacion">Bueno
                         <span class="checkmark"></span>
                      </label>
                      <label class="radio-inline">
                        <input checked type="radio" value="5" name="relacion" id="relacion">Muy bueno
                         <span class="checkmark"></span>
                      </label>
                    </div>
                 </div>
                  <br><br>
                  <div class="row">
                      <div class="form-group col-md-12" style="text-align: center">
                      <label for="comment">Déjenos un comentario :</label>
                      <textarea class="form-control" rows="5" name="comentario" id="comentario"></textarea>
                    </div>
                  </div>

                <div class="row">
                  <div class="form-group col-md-6 col-md-offset-5">
                      <button id="enviar" type="button" class="btn btn-primary">Enviar Encuesta</button>
                    </div>
                </div>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="text-align: center" id="myModalLabel">¡Muchas gracias por su preferencia!</h4>
        </div>
        <div class="modal-body">
          <div data-editable="multimedia:image" id="edi-edje7" data-uid="edi-edje7" class="" data-draggable="true" style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; text-align: center;">
                <img src="https://multimedia.getresponse.com/getresponse-zICDz/photos/721532102.jpg" alt="" width="292" height="241">
            </div>
            <div style="font-size:54px; text-align: center;" class="text-content">Que sigas disfrutando tus viajes
                <br>
            </div>
            <div data-editable="text" id="edi-jjdu0" data-uid="edi-jjdu0" class="" data-draggable="true">
                    <div style="line-height:1.2; text-align: center; font-size: 20px;" class="text-content">¡Fuiste un cliente excepcional!
                        <br>
                    </div>
                </div>

                <div data-editable="multimedia:image" id="edi-5811d" data-uid="edi-5811d" class="" data-draggable="true" style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; text-align: center;">
                    <img src="https://app.getresponse.com/images/common/templates/landing/195/1/img/195_05.png" alt="/" width="135" height="188">
                </div>
                <button id="salir" type="button" class="btn btn-default">Cerrar</button>
        </div>

      </div>
    </div>
  </div>
@endsection

@section('Scripts')
<script type="text/javascript">
  $("#enviar").click(function() {
          $("#enviar").attr("disabled", "disabled");
          var hotel  = $('#hotel').val();
          var cliente = $('#cliente').val();
          var personal  = $('#personal:checked').val();
          var instalaciones = $('#instalaciones:checked').val();
          var limpieza = $('#limpieza:checked').val();
          var confort = $('#confort:checked').val();
          var ubicacion = $('#ubicacion:checked').val();
          var relacion = $('#relacion:checked').val();
          var comentario = $('#comentario').val();
          var data = {personal,
                      hotel,
                      cliente,
                      instalaciones,
                      limpieza,
                      confort,
                      ubicacion,
                      relacion,
                      comentario,
                      data};

          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

          var request = $.ajax({
              url:  '/StorePoints',
              type: "POST",
              data: data,
              dataType:"json"
          });

          request.done(function( data ) {
            $('#myModal').modal({
                backdrop: 'static',
                keyboard: false,
            }, "show")
        });
  });
  $("#salir").click(function() {
    window.close();
  });
</script>
@endsection

</body>
</html>
