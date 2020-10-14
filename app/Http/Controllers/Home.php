<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $lang = $locale = App::getLocale();
        if($lang == 'en') {
            $data = [
                'title' => 'Demo Angular Laravel'
            ];
        }
        else {
            $data = [
                'title' => 'Tutorial Angular Laravel'
            ];
        }
        return view( 'home', $data );
    }
}
