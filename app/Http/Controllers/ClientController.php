<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use \GuzzleHttp\Psr7\Request as GuzzleRequest;
use GuzzleHttp\Client as ClientGuzzle;
use GuzzleHttp\RequestOptions;

use Auth;
use App\Client;
use App\Point;
use App\Comment;
use App\Notification;

use DB;

use App\Client as ClientSystem;


class ClientController extends Controller
{
		 /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getClientData()
    {
	   		$cliente = new ClientGuzzle();
        $id = 1;
        for ($i=$id; $i < 10 ; $i++) {
            $request = $cliente->request('GET', 'http://localhost:52156/ClientData/clients/Get/'.$i);
            $respuestas = json_decode($request->getBody()->getContents(), true);
            $array = json_decode( $respuestas, true );
            if(!empty($array)){
                foreach ($array as $value) {
                    /*$client = new Client();
                    $client->hotel_id = $i;
                    $client->fecha_entrada  = $value['rese_daen'];
                    $client->fecha_salida  = $value['rese_dasa'];
                    $client->fecha_media  = $value['middle'];
                    $client->fecha_nacimiento  = $value['clie_dana'];
                    $client->fecha_tripadvisor  = $value['sendMail'];
                    $client->codigo_reserva  = $value['rese_codi'];
                    $client->codigo_cliente  = $value['clie_codi'];
                    $client->nombre_cliente  = $value['clie_nome'];
                    $client->apellido_cliente  = $value['clie_apel'];
                    $client->mail_cliente  = $value['clie_mail'];
                    $client->save();*/
                    print_r($value);
                }
            }
        }
	  }

	   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function Encuestas()
    {
			 $encuestas = DB::table('points')
                     ->select(DB::raw('client_id, sum(puntaje) as puntaje'))
                     ->where('hotel_id', '=', Auth::user()->hotel_id)
                     ->groupBy('client_id')
                     ->get();

        $comment = new Comment();
        $client = new Client();
        $encuestas_enviadas = 0;
				$encuestas_enviadas = Client::where('enviado_mail','=', '1')->where('hotel_id','=', Auth::user()->hotel_id)->count();
				$encuestas_recibidas = 0;
				$encuestas_recibidas = Client::where('recibido_encuesta','=', '1')->where('hotel_id','=', Auth::user()->hotel_id)->count();
				$enviado_trip = 0;
				$enviado_trip = Client::where('enviado_trip','=', '1')->where('hotel_id','=', Auth::user()->hotel_id)->count();
				$comentarios=0;
				$comentarios = Comment::where('hotel_id','=', Auth::user()->hotel_id)->count();

				$Notification = 0;
				$comments_cont = 0;
				$puntuacion_cont = 0;

				$Notification = Notification::where('status','=', 1)->count();
    		$comments_cont = Notification::where('type','=','Comentario')->count();
    		$puntuacion_cont = Notification::where('type','=','Puntuación')->count();

        return view('encuestas', compact('encuestas','comment','client','encuestas_enviadas','encuestas_recibidas','enviado_trip','comentarios','Notification','comments_cont','puntuacion_cont'));
	  }

	  /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function SentSurveys()
    {
			 $encuestas = Client::where('enviado_mail','>','0')->get();

        $comment = new Comment();
        $client = new Client();
        $encuestas_enviadas = 0;
				$encuestas_enviadas = Client::where('enviado_mail','=', '1')->where('hotel_id','=', Auth::user()->hotel_id)->count();
				$encuestas_recibidas = 0;
				$encuestas_recibidas = Client::where('recibido_encuesta','=', '1')->where('hotel_id','=', Auth::user()->hotel_id)->count();
				$enviado_trip = 0;
				$enviado_trip = Client::where('enviado_trip','=', '1')->where('hotel_id','=', Auth::user()->hotel_id)->count();
				$comentarios=0;
				$comentarios = Comment::where('hotel_id','=', Auth::user()->hotel_id)->count();

				$Notification = 0;
				$Notification = Notification::where('status','=', 1)->count();
				$comments_cont = 0;
    		$comments_cont = Notification::where('type','=','Comentario')->count();
    		$puntuacion_cont = 0;
    		$puntuacion_cont = Notification::where('type','=','Puntuación')->count();

        return view('sentsurveys', compact('encuestas','comment','client','encuestas_enviadas','encuestas_recibidas','enviado_trip','comentarios','Notification','comments_cont','puntuacion_cont'));
	  }

	  /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function AnsweredSurveys()
    {
			 	$encuestas = Client::where('recibido_encuesta','>','0')->where('hotel_id','=',Auth::user()->hotel_id)->get();

        $comment = new Comment();
        $client = new Client();
        $encuestas_enviadas = 0;
				$encuestas_enviadas = Client::where('enviado_mail','=', '1')->where('hotel_id','=', Auth::user()->hotel_id)->count();
				$encuestas_recibidas = 0;
				$encuestas_recibidas = Client::where('recibido_encuesta','=', '1')->where('hotel_id','=', Auth::user()->hotel_id)->count();
				$enviado_trip = 0;
				$enviado_trip = Client::where('enviado_trip','=', '1')->where('hotel_id','=', Auth::user()->hotel_id)->count();
				$comentarios=0;
				$comentarios = Comment::where('hotel_id','=', Auth::user()->hotel_id)->count();

				$Notification = 0;
				$comments_cont = 0;
				$puntuacion_cont = 0;

				$Notification = Notification::where('status','=', 1)->count();
    		$comments_cont = Notification::where('type','=','Comentario')->count();
    		$puntuacion_cont = Notification::where('type','=','Puntuación')->count();

        return view('answeredsurveys', compact('encuestas','comment','client','encuestas_enviadas','encuestas_recibidas','enviado_trip','comentarios','Notification','comments_cont','puntuacion_cont'));
	  }

	   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function SentTrip()
    {
			 	$encuestas = Client::where('enviado_trip','>','0')->get();

        $comment = new Comment();
        $client = new Client();
        $encuestas_enviadas = 0;
				$encuestas_enviadas = Client::where('enviado_mail','=', '1')->where('hotel_id','=', Auth::user()->hotel_id)->count();
				$encuestas_recibidas = 0;
				$encuestas_recibidas = Client::where('recibido_encuesta','=', '1')->where('hotel_id','=', Auth::user()->hotel_id)->count();
				$enviado_trip = 0;
				$enviado_trip = Client::where('enviado_trip','=', '1')->where('hotel_id','=', Auth::user()->hotel_id)->count();
				$comentarios=0;
				$comentarios = Comment::where('hotel_id','=', Auth::user()->hotel_id)->count();
				$Notification = 0;
				$comments_cont = 0;
				$puntuacion_cont = 0;
				$Notification = Notification::where('status','=', 1)->count();
    		$comments_cont = Notification::where('type','=','Comentario')->count();
    		$puntuacion_cont = Notification::where('type','=','Puntuación')->count();

        return view('senttrip', compact('encuestas','comment','client','encuestas_enviadas','encuestas_recibidas','enviado_trip','comentarios','Notification','comments_cont','puntuacion_cont'));
	  }

	   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function CommentsReceived()
    {
			 $encuestas = Comment::where('hotel_id','=',Auth::user()->hotel_id)->get();

        $comment = new Comment();
        $client = new Client();
        $encuestas_enviadas = 0;
				$encuestas_enviadas = Client::where('enviado_mail','=', '1')->where('hotel_id','=', Auth::user()->hotel_id)->count();
				$encuestas_recibidas = 0;
				$encuestas_recibidas = Client::where('recibido_encuesta','=', '1')->where('hotel_id','=', Auth::user()->hotel_id)->count();
				$enviado_trip = 0;
				$enviado_trip = Client::where('enviado_trip','=', '1')->where('hotel_id','=', Auth::user()->hotel_id)->count();
				$comentarios=0;
				$comentarios = Comment::where('hotel_id','=', Auth::user()->hotel_id)->count();
				$Notification = 0;
				$comments_cont = 0;
				$puntuacion_cont = 0;
				$Notification = Notification::where('status','=', 1)->count();
    		$comments_cont = Notification::where('type','=','Comentario')->count();
    		$puntuacion_cont = Notification::where('type','=','Puntuación')->count();

        return view('commentsreceived', compact('encuestas','comment','client','encuestas_enviadas','encuestas_recibidas','enviado_trip','comentarios','Notification','comments_cont','puntuacion_cont'));
	  }

	  /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function commentsNotSeen()
    {
			 $encuestas = Comment::orderBy('created_at', 'desc')->get();

        $comment = new Comment();
        $client = new Client();
        $encuestas_enviadas = 0;
				$encuestas_enviadas = Client::where('enviado_mail','=', '1')->where('hotel_id','=', Auth::user()->hotel_id)->count();
				$encuestas_recibidas = 0;
				$encuestas_recibidas = Client::where('recibido_encuesta','=', '1')->where('hotel_id','=', Auth::user()->hotel_id)->count();
				$enviado_trip = 0;
				$enviado_trip = Client::where('enviado_trip','=', '1')->where('hotel_id','=', Auth::user()->hotel_id)->count();
				$comentarios=0;
				$comentarios = Comment::where('hotel_id','=', Auth::user()->hotel_id)->count();
				$Notification = 0;
				$comments_cont = 0;
				$puntuacion_cont = 0;
				$Notification = Notification::where('status','=', 1)->count();
    		$comments_cont = Notification::where('type','=','Comentario')->count();
    		$puntuacion_cont = Notification::where('type','=','Puntuación')->count();

        return view('commentsreceived', compact('encuestas','comment','client','encuestas_enviadas','encuestas_recibidas','enviado_trip','comentarios','Notification','comments_cont','puntuacion_cont'));
	  }

	   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPoints(Request $request)
    {
    	$post   = $request->all();
			$encuestas = Point::where('hotel_id','=', Auth::user()->hotel_id)->where('client_id','=', $post['id'])->get();

			echo json_encode($encuestas);
	  }

	  /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function ChangeStatus(Request $request)
    {
    	$post   = $request->all();

			DB::table('notifications')->where('status', '=', 1)->where('type','=',$post['type'])->update(array('status' => 0));

			echo json_encode($post['type']);
	  }


	  /**
     * Show the Secretaria dashboard.
     *
     * @return view
     */
    public function index()
    {
	    	//contadores de puntaje para el hotel

	    	$cont = Point::where('hotel_id','=', Auth::user()->hotel_id)->count();
	    	if($cont == 0)
	    		$cont = 1;

	    	$points_positivos = Point::where('hotel_id','=', Auth::user()->hotel_id)
	    							   			     ->where('puntaje','>',3)->count();
	    	$points_negativos = Point::where('hotel_id','=', Auth::user()->hotel_id)
	    							   			     ->where('puntaje','<',3)->count();
	    	$points_regulares = Point::where('hotel_id','=', Auth::user()->hotel_id)
	    							   			     ->where('puntaje','>',2)->where('puntaje','<',4)->count();

	    	$puntajes = array(
	    		'positivo' =>  substr(($points_positivos*100)/$cont, 0,4),
	    		'negativo' =>  substr(($points_negativos*100)/$cont, 0,4),
	    		'regulares' => substr(($points_regulares*100)/$cont, 0,4),
	    	);

	    	//contadores de puntaje para cada servicio
	    	$cont1 = Point::where('hotel_id','=', Auth::user()->hotel_id)
	    								->where('service_id','=',1)->count();//Personal
	    	if($cont1 == 0)
	    		$cont1 = 1;

	    	$cont2 = Point::where('hotel_id','=', Auth::user()->hotel_id)
	    								->where('service_id','=',2)->count();//Instalaciones y servicios
	    	if($cont2 == 0)
	    		$cont2 = 1;

	    	$cont3 = Point::where('hotel_id','=', Auth::user()->hotel_id)
	    								->where('service_id','=',3)->count();//Limpieza
	    	if($cont3 == 0)
	    		$cont3 = 1;

	    	$cont4 = Point::where('hotel_id','=', Auth::user()->hotel_id)
	    								->where('service_id','=',4)->count();//Confort
	    	if($cont4 == 0)
	    		$cont4 = 1;

	    	$cont5 = Point::where('hotel_id','=', Auth::user()->hotel_id)
	    								->where('service_id','=',5)->count();//Ubicacion
	    	if($cont5 == 0)
	    		$cont5 = 1;

	    	$cont6 = Point::where('hotel_id','=', Auth::user()->hotel_id)
	    								->where('service_id','=',6)->count();//Relación Calidad-Precio
	    	if($cont6 == 0)
	    		$cont6 = 1;

	    	//get the data to ponderate
	    	$point1 = Point::where('hotel_id','=', Auth::user()->hotel_id)
	    								->where('service_id','=',1)->get();//Personal

	    	$point2 = Point::where('hotel_id','=', Auth::user()->hotel_id)
	    								->where('service_id','=',2)->get();//Instalaciones y servicios

	    	$point3 = Point::where('hotel_id','=', Auth::user()->hotel_id)
	    								->where('service_id','=',3)->get();//Limpieza

	    	$point4 = Point::where('hotel_id','=', Auth::user()->hotel_id)
	    								->where('service_id','=',4)->get();//Confort

	    	$point5 = Point::where('hotel_id','=', Auth::user()->hotel_id)
	    								->where('service_id','=',5)->get();//Ubicacion

	    	$point6 = Point::where('hotel_id','=', Auth::user()->hotel_id)
	    								->where('service_id','=',6)->get();//Relación Calidad-Precio

	    	$sum1 = 0;
	    	foreach ($point1 as $value) {
	    		$sum1 = $sum1 + $value->puntaje;
	    	}
	    	$sum2 = 0;
	    	foreach ($point2 as $value) {
	    		$sum2 = $sum2 + $value->puntaje;
	    	}
	    	$sum3 = 0;
	    	foreach ($point3 as $value) {
	    		$sum3 = $sum3 + $value->puntaje;
	    	}
	    	$sum4 = 0;
	    	foreach ($point4 as $value) {
	    		$sum4 = $sum4 + $value->puntaje;
	    	}
	    	$sum5 = 0;
	    	foreach ($point5 as $value) {
	    		$sum5 = $sum5 + $value->puntaje;
	    	}
	    	$sum6 = 0;
	    	foreach ($point6 as $value) {
	    		$sum6 = $sum6 + $value->puntaje;
	    	}

	      $servicios = array(
					'servicio1' => $sum1/$cont1,
					'servicio2' => $sum2/$cont2,
					'servicio3' => $sum3/$cont3,
					'servicio4' => $sum4/$cont4,
					'servicio5' => $sum5/$cont5,
          'servicio6' => $sum6/$cont6,
				);

				$servicios = json_encode($servicios);
				$puntajes = json_encode($puntajes);

				$encuestas_enviadas = 0;
				$encuestas_enviadas = Client::where('enviado_mail','=', '1')
																		->where('hotel_id','=', Auth::user()->hotel_id)
																		->count();
				$encuestas_recibidas = 0;
				$encuestas_recibidas = Client::where('recibido_encuesta','=', '1')
																		 ->where('hotel_id','=', Auth::user()->hotel_id)
																		 ->count();
				$enviado_trip = 0;
				$enviado_trip = Client::where('enviado_trip','=', '1')
															->where('hotel_id','=', Auth::user()->hotel_id)
															->count();
				$comentarios=0;
				$comentarios = Comment::where('hotel_id','=', Auth::user()->hotel_id)->count();

				$Notification = 0;
				$comments_cont = 0;
				$puntuacion_cont = 0;
				$Notification = Notification::where('status','=', 1)->count();
    		$comments_cont = Notification::where('type','=','Comentario')->where('status','=',1)->count();
    		$puntuacion_cont = Notification::where('type','=','Puntuación')->where('status','=',1)->count();

	 		return view('home', compact('servicios','puntajes','encuestas_enviadas','encuestas_recibidas','enviado_trip','comentarios','Notification','comments_cont','puntuacion_cont'));
 	}
}
