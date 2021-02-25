<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
public function welcome(){
    return ('selamat datang') ;
}
public function about(){
    return ('Nama: Brilliandy zufar P <p> NIM: 1941720201 <p> Kelas: TI-2A');
}
public function articles($page){
    return ('Halaman artikel ini dengan id').$page;

}
}