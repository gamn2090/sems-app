@extends('layouts.app3')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Encuesta de Calidad</div>

                <div class="panel-body">
                  <div><p>Estimado Sr./Sra. <strong>{{ $client->nombre_cliente.' '.$client->apellido_cliente }}</strong>, usted se @if($client->envio_encuesta == 0) hospeda @else hospedó @endif en nuestro hotel <strong>{{ $hotel->getName($client->hotel_id) }}</strong>.</p>
                  <p>Nos gustaría nos ayudara a mejorar dejándonos su opinión acerca de nuestros servicios</p>
                  <br>
                  <br>
                  </div>
                  <form id="Survei" role="form" method="post" action="{{route('StorePoints')}}">
                    {!! csrf_field() !!}
                    <input type="hidden" id="cliente" name="cliente" value="{{$client->id}}">
                    <input type="hidden" id="hotel" name="hotel" value="{{$client->hotel_id}}">
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label for="">Atención del Personal</label>
                      </div>
                    </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label class="radio-inline">
                        <input type="radio" value="1" name="personal" id="personal">Muy malo
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="2" name="personal" id="personal">Malo
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="3" name="personal" id="personal">Regular
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="4" name="personal" id="personal">Bueno
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="5" name="personal" id="personal">Muy bueno
                      </label>
                    </div>
                  </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label for="">Instalaciones y Servicios</label>
                      </div>
                    </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label class="radio-inline">
                        <input type="radio" value="1" name="instalaciones" id="instalaciones">Muy malo
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="2" name="instalaciones" id="instalaciones">Malo
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="3" name="instalaciones" id="instalaciones">Regular
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="4" name="instalaciones" id="instalaciones">Bueno
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="5" name="instalaciones" id="instalaciones">Muy bueno
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="">Limpieza</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label class="radio-inline">
                        <input type="radio" value="1" name="limpieza" id="limpieza">Muy malo
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="2" name="limpieza" id="limpieza">Malo
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="3" name="limpieza" id="limpieza">Regular
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="4" name="limpieza" id="limpieza">Bueno
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="5" name="limpieza" id="limpieza">Muy bueno
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="">Confort</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label class="radio-inline">
                        <input type="radio" value="1" name="confort" id="confort">Muy malo
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="2" name="confort" id="confort">Malo
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="3" name="confort" id="confort">Regular
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="4" name="confort" id="confort">Bueno
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="5" name="confort" id="confort">Muy bueno
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="">Ubicación</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label class="radio-inline">
                        <input type="radio" value="1" name="ubicacion"id="ubicacion">Muy malo
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="2" name="ubicacion"id="ubicacion">Malo
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="3" name="ubicacion"id="ubicacion">Regular
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="4" name="ubicacion"id="ubicacion">Bueno
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="5" name="ubicacion" id="ubicacion">Muy bueno
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="">Relación Calidad-Precio</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label class="radio-inline">
                        <input type="radio" value="1" name="relacion" id="relacion">Muy malo
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="2" name="relacion" id="relacion">Malo
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="3" name="relacion" id="relacion">Regular
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="4" name="relacion" id="relacion">Bueno
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="5" name="relacion" id="relacion">Muy bueno
                      </label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="comment">Déjenos un comentario :</label>
                      <textarea class="form-control" rows="5" name="comentario" id="comentario"></textarea>
                    </div>
                  </div>

                <div class="row">
                  <div class="form-group col-md-6 col-md-offset-5">
                      <button type="submit" class="btn btn-default">Enviar Encuesta</button>
                    </div>
                </div>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('Scripts')

@endsection

</body>
</html>
