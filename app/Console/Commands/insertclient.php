<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Carbon\Carbon;
use \GuzzleHttp\Psr7\Request as GuzzleRequest;
use GuzzleHttp\Client as ClientGuzzle;
use GuzzleHttp\RequestOptions;
use Auth;
use Log;

use App\Client;

class insertclient extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clients:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'inserta a las 11:50pm todos los clientes que hicieron checkin en ese día';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $cliente = new ClientGuzzle();
        $id = 1;
        for ($i=$id; $i < 10 ; $i++) {
            $request = $cliente->request('GET', 'http://192.168.5.233:52156/ClientData/clients/Get/'.$i);
            $respuestas = json_decode($request->getBody()->getContents(), true);
            $array = json_decode( $respuestas, true );
            if(!empty($array)){
                foreach ($array as $value) {
                    $client_cont = Client::where('codigo_cliente','=',$value['clie_codi'])->count();
                    if($client_cont == 0)
                    {
                        $client = new Client();
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
                        $client->save();
                    }
                }
            }
        }
        Log::info('clientes insertados');
    }
}
