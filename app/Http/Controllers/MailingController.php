<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Redirect;
use App\Client;
use App\Hotel;
use App\Point;
use App\Comment;
use App\Notification;
use Carbon\Carbon;

class MailingController extends Controller
{
    public function sendMail(Request $request)
    {
        $fecha = date("j/m/Y");
        $clients = Client::where('id','=','2643')->get();
        $hotel = new Hotel();
        //dd($clients);

        foreach ($clients as $client) {
           Mail::send('MailTemplateTripadvisor', ['client' => $client, 'hotel' => $hotel], function ($m) use ($client, $hotel) {
                 $m->from('emarketing@hotelessanagustin.pe', 'Envío automático de Encuestas de HSA');
                 $m->to('reservasonline@hsaperu.com', $client['nombre_cliente'].' '.$client['apellido_cliente'])->subject('Encuesta de Calidad de Servicios de '.$hotel->getName($client['hotel_id']));
              });

           $cliente_update = Client::find($client->id);
           $cliente_update->enviado_mail = 0;
           $cliente_update->save();
        }
    }

    public function sendMailEnd(Request $request)
    {
        $fecha = Carbon::today()->format('d/m/Y');
        $clients = Client::where('enviado_mail','=','1')
                         ->where('fecha_salida','like','%'.$fecha.'%')->get();
        $hotel = new Hotel();

        foreach ($clients as $client) {
           Mail::send('MailTemplateEnd', ['client' => $client, 'hotel' => $hotel], function ($m) use ($client, $hotel) {
                 $m->from('emarketing@hotelessanagustin.pe', 'Envío automático de Encuestas de HSA');
                 $m->to($client['mail_cliente'], $client['nombre_cliente'].' '.$client['apellido_cliente'])->subject('Encuesta de Calidad de Servicios de '.$hotel->getName($client['hotel_id']));
              });

           $cliente_update = Client::find($client->id);
           $cliente_update->enviado_mail = 2;
           $cliente_update->save();
        }
        echo json_encode('OK');
    }

    public function sendMailtrip(Request $request)
    {
        $fecha = Carbon::today()->format('d/m/Y');
        $clients = Client::where('enviado_trip','=','0')
                         ->where('fecha_salida','like','%'.$fecha.'%')->get();
        $hotel = new Hotel();

        foreach ($clients as $client) {
           Mail::send('MailTemplateEnd', ['client' => $client, 'hotel' => $hotel], function ($m) use ($client, $hotel) {
                 $m->from('emarketing@hotelessanagustin.pe', 'Envío automático de Encuestas de HSA');
                 $m->to($client['mail_cliente'], $client['nombre_cliente'].' '.$client['apellido_cliente'])->subject('Encuesta de Calidad de Servicios de '.$hotel->getName($client['hotel_id']));
              });

           $cliente_update = Client::find($client->id);
           $cliente_update->enviado_mail = 2;
           $cliente_update->save();
        }
        echo json_encode('OK');
    }

    public function ShowSurvei( $id )
    {
    		$client = Client::find($id);
    		$hotel = new Hotel();
    		if($client->recibido_encuesta == 0)
    			return view('envioencuesta',compact('client','hotel'));
    		else
          return Redirect('http://www.hotelessanagustin.com.pe');
    }

    public function ShowSecondSurvei( $id )
    {
        $client = Client::find($id);
        $hotel = new Hotel();
        if($client->recibido_encuesta == 0)
          return view('envioencuesta',compact('client','hotel'));
        else
          return Redirect('http://www.hotelessanagustin.com.pe');
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function StorePoints(Request $request)
    {
    		$post = $request->all();
        //dd($post);

  			$point = new Point();
  			$point->hotel_id = $post['hotel'];
  			$point->client_id = $post['cliente'];
  			$point->service_id = 1;
  			$point->puntaje = $post['personal'];
  			$point->save();

  			$point = new Point();
  			$point->hotel_id = $post['hotel'];
  			$point->client_id = $post['cliente'];
  			$point->service_id = 2;
  			$point->puntaje = $post['instalaciones'];
  			$point->save();

  			$point = new Point();
  			$point->hotel_id = $post['hotel'];
  			$point->client_id = $post['cliente'];
  			$point->service_id = 3;
  			$point->puntaje = $post['limpieza'];
  			$point->save();

  			$point = new Point();
  			$point->hotel_id = $post['hotel'];
  			$point->client_id = $post['cliente'];
  			$point->service_id = 4;
  			$point->puntaje = $post['confort'];
  			$point->save();

  			$point = new Point();
  			$point->hotel_id = $post['hotel'];
  			$point->client_id = $post['cliente'];
  			$point->service_id = 5;
  			$point->puntaje = $post['ubicacion'];
  			$point->save();

  			$point = new Point();
  			$point->hotel_id = $post['hotel'];
  			$point->client_id = $post['cliente'];
  			$point->service_id = 6;
  			$point->puntaje = $post['relacion'];
  			$point->save();

        if(isset($post['comentario']))
        {
    			$comment = new Comment();
    			$comment->hotel_id = $post['hotel'];
    			$comment->client_id = $post['cliente'];
    			$comment->comentario = $post['comentario'];
    			$comment->save();

          $notification = new Notification();
          $notification->status = 1;
          $notification->type = 'Comentario';
          $notification->save();
        }

        $notification = new Notification();
        $notification->status = 1;
        $notification->type = 'Puntuación';
        $notification->save();

        $cliente = Client::find($post['cliente']);
        $cliente->recibido_encuesta = 1;
        $cliente->save();

        echo json_encode("1");
    }
}
