<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;

class NoviController extends Controller
{
    public function mika($a) {
        echo 'Ovo je pozvano iz kontrolera sa parametrom ' .$a;
        //return view ('welcome');
        //return redirect('neka');
        //return redirect()->to('/');
        return Redirect::to('/');
       }
}
