<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;

use Mail;
use Log;
use App\Client;
use App\Hotel;
use App\Point;
use App\Comment;
use Carbon\Carbon;

class SendTripMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:tripmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'envía el correo pidiendo que opine en el tripadvisor';

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
        $fecha = date("j/m/Y");
        try {

            $clients = Client::where('enviado_trip','=','0')
                             ->where('fecha_tripadvisor','like','%'.$fecha.'%')->get();
            $hotel = new Hotel();

            foreach ($clients as $client) {
               Mail::send('MailTemplateTripadvisor', ['client' => $client, 'hotel' => $hotel], function ($m) use ($client, $hotel) {
                     $m->from('emarketing@hotelessanagustin.pe', 'Envío automático de Encuestas de HSA');
                     $m->to($client['mail_cliente'], $client['nombre_cliente'].' '.$client['apellido_cliente'])->subject('Ayudenos con una opinión del '.$hotel->getName($client['hotel_id']));
                  });

               $cliente_update = Client::find($client->id);
               $cliente_update->enviado_trip = 1;
               $cliente_update->save();
            }
            Log::info('mails tripadvisor enviado');
        } catch (Exception $e) {

            Log::info('mails trip no enviados');

        }
    }
}
