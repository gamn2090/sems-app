@extends('layouts.app3')

@section('content')
    <div><p>Estimado Sr./Sra. <strong>{{ $client->nombre_cliente.' '.$client->apellido_cliente }}</strong>, usted se hospeda en nuestro hotel <strong>{{ $hotel->getName($client->hotel_id) }}</strong>.</p>
    <p>Nos gustaría que nos ayudara a mejorar dejándonos su opinión acerca de nuestros servicios entrando al siguiente link y llenando la encuesta</p>
    <br>
    <br>
    </div>

    <h1><a href="www.hsaperu.com/ShowSurvei/{{$client->id}}">Encuesta de Calidad de Servicios</a></h1>

@endsection
</body>
</html>
