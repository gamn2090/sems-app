@extends('layouts.app3')

@section('content')
    <div><p>Estimado Sr./Sra. <strong>{{ $client->nombre_cliente.' '.$client->apellido_cliente }}</strong>, usted se hospedó en nuestro hotel <strong>{{ $hotel->getName($client->hotel_id) }}</strong>.</p>
    <p>Le gradeceríamos que nos dejara una reseña de nuestro hotel conjuntamente con una puntuación en Tripadvisor.</p>
    <br>
    <br>
    </div>

	@switch($client->hotel_id)
    @case(1)
        <a href="https://www.tripadvisor.com.pe/UserReviewEdit-g294316-d309486-San_Agustin_Exclusive-Lima_Lima_Region.html">San Agustín Exclusive</a>
        @break
    @case(2)
        <a href="https://www.tripadvisor.com.pe/UserReviewEdit-g294316-d562101-San_Agustin_Riviera_Hotel-Lima_Lima_Region.html">San Agustín Riviera</a>
        @break
		@case(3)
        <a href="https://www.tripadvisor.com.pe/UserReviewEdit-g445063-d3785199-San_Agustin_Paracas-Paracas_Ica_Region.html">San Agustín Paracas</a>
        @break
		@case(4)
        <a href="https://www.tripadvisor.com.pe/UserReviewEdit-g294321-d318921-San_Agustin_Monasterio_de_la_Recoleta_Hotel-Urubamba_Sacred_Valley_Cusco_Region.html">San Agustín Monasterio de la Rocleta</a>
        @break
		@case(5)
        <a href="https://www.tripadvisor.com.pe/UserReviewEdit-g294321-d877867-San_Agustin_Urubamba_Hotel-Urubamba_Sacred_Valley_Cusco_Region.html">San Agustín Urubamba</a>
        @break
		@case(6)
        <a href="https://www.tripadvisor.com.pe/UserReviewEdit-g294314-d455224-San_Agustin_Plaza-Cusco_Cusco_Region.html">San Agustín Plaza</a>
        @break
		@case(7)
        <a href="https://www.tripadvisor.com.pe/UserReviewEdit-g294314-d308977-El_Dorado_San_Agustin-Cusco_Cusco_Region.html">San Agustín El Dorado</a>
        @break
		@case(8)
        <a href="https://www.tripadvisor.com.pe/UserReviewEdit-g445060-d2703883-Hotel_San_Agustin_Internacional-San_Agustin_Huila_Department.html">San Agustín Internacional</a>
        @break
		@case(9)
        <a href="https://www.tripadvisor.com.pe/UserReviewEdit-g294313-d2283257-Hotel_San_Agustin_Posada_del_Monasterio-Arequipa_Arequipa_Region.html">San Agustín Posada del Monasterio</a>
        @break

@endswitch

@endsection
</body>
</html>
