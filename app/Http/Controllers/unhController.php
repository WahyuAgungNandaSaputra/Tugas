<?php

namespace App\Http\Controllers;

class unhController 
{
    public function mhs()
    {
        return view('dataMahasiswa');
    }

    public function dosen()
    {
        return view('dataDosen');
    }

     public function home()
    {
        return view('home');
    }
}
