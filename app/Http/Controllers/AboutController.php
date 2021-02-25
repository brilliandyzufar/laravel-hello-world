<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return ('Nama: Brilliandy zufar P <p> NIM: 1941720201 <p> Kelas: TI-2A');
    }
}
