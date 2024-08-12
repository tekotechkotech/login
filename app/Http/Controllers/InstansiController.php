<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstansiController extends Controller
{
    
    public function getInstansi() {

        // $domain = ;
        $domain = implode('.', array_slice(explode('.', request()->getHost()), 1));
        $a = Instansi::where('web',$domain)->first();

        return $a;  
    }
}
