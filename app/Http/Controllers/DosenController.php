<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Rivon Fotriyodi";
        $nobp = "181321017";
        $umur = 23;
        $jumlahbeli = 20;
        $hasil = $umur - $jumlahbeli;
        $perusahaan = "R-IT";
       
       
        $pelajaran =["Algoritma & Pemrograman","Kalkulus","Pemograman Web"];
        return view('biodata',['nama'=>$nama, 'nobp'=>$nobp, 'umur'=>$umur, 'hasil'=>$hasil,'perusahaan'=>$perusahaan, 'matkul'=>$pelajaran]);
        

    }
}
