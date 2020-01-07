<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\validation;
use Illuminate\Support\Facades\Crypt;



class validationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('welcome');
    }

    public function validar($uid)
    {
        $json = json_decode( $this->my_file_get_contents('http://179.235.157.137:50001/api/syclus/sistema/certificado/'.$uid),true);

        if($json == null) {

                return view('offline');

        };


        if($json == json_decode("{\"Sucesso\":\"false\",\"Mensagem\":\"Registro n\u00E3o encontrado!\"}",true)) {

                return view('fail');

        };

        $json = (object) $json;


        $coletas = (object)$json->coletas;

            return view('validar')->with([
            'certificado' => $json,
            'coletas' => $coletas
            ]);

}


function my_file_get_contents( $site_url ){
    $ch = curl_init();
    $timeout = 5; // set to zero for no timeout
    curl_setopt ($ch, CURLOPT_URL, $site_url);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    ob_start();
    curl_exec($ch);
    curl_close($ch);
    $file_contents = ob_get_contents();
    ob_end_clean();
    return $file_contents;
}




}
