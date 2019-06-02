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
    public function validar($uid)
    {
//        $encrypted = Crypt::encrypt($uid);
        if($uid == 0001) {
            return view('validar')->with('uid', $uid);

        }

        return view('fail')->with('error',$uid);

    }

}
