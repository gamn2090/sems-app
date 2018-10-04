@extends('layouts.app3')

@section('content')
    <div><p>Estimado Sr./Sra. <strong>{{ $client->nombre_cliente.' '.$client->apellido_cliente }}</strong>, usted se hospedó en nuestro hotel <strong>{{ $hotel->getName($client->hotel_id) }}</strong>.</p>
    <p>Le pedimos que nos califique nuevamente, para ver si ha habido mejoría desde su puntuación anterior, nos disculpamos por las molestias ocacionadas y le agradecemos infinitamente por tomarse su tiempo al calificarnos, esto nos ayuda a mejorar constantemente.</p>
    <br>
    <br>
    </div>

    <h1><a href="www.hsaperu.com/ShowSurvei/1">Encuesta de Calidad de Servicios</a></h1>

@endsection
</body>
</html>
