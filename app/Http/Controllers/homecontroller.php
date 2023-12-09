<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index(){
        return 'Pierwsza strona';
    }

    public function show(){
        $array = [
            1,2,3,4,'abc',5
        ];
        dd($array);
    }

    public function time(){
        // Pobiera aktualny czas
        $currentTime = time();

        // Przesunięcie czasu o 83 sekundy
        $shiftedTime = $currentTime + 83; 

        $shiftedTimeString = date('Y-m-d H:i:s', $shiftedTime);
        // Zwrot 
        return $shiftedTimeString;
    }
}