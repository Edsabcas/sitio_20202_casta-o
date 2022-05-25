<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Validator;

class MensajesController extends Controller
{


   public function mensaje(){
    //   $sid='ACf65a4d05035612081d718a163f8846ef';
      // $tok="6dc2ddb7908517da6679d626b5b16b58";
       $twilio = new Client( $sid, $tok );
       $message = $twilio->messages
    ->create("whatsapp:+50250549056", // to
             [
                 "from" => "whatsapp:+14155238886",
                 "body" => "Hola *Amigos*,!"
             ]
    );

    return view('mensaje',compact('message'));

            print($message->sid."hola");
   }
}
