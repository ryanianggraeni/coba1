<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\blog;

class PrakerinController extends Controller
{
    //
     public function index()
    {
    	$a = 2;
    	return view('index', compact ('a'));
    }
    public function percobaan1()
    {
    	$a = "Ryani";
    	return view ('tugas.saya',compact('a'));
    }
    public function percobaan2()
    {
    	$b = "Ryani ";
    	$c = "XII RPL 1";
    	$d = "SMK Assalaam";
    	$e = "Bojong";
    	$f = "08 oktober 1999";
    	return view('tugas.identitas',compact('b','c','d','e','f'));
    }
    public function percobaan3()
    {
    	$b = "1 ";
    	$c = "2";
    	$d = "3";
    	$e ="4";
    	$f ="5";
    	return view('tugas.angka',compact('b','c','d','e','f'));
    }
    public function percobaan4()
    {
    	$b = "Mangga";
    	$c = "Apel";
    	$d = "Semangka";
    	$e = "Rambutan";
    	$f = "Durian";
    	return view('tugas.buah',compact('b','c','d','e','f'));
    }
    public function percobaan6()
    {
    	$a = "nasi goreng";
    	$b = "Ayam Bakar";
    	$c = "Roti kukus";
    	$d = "Ice cream";
    	$e = "Es teler";
    	return view('latihan.kejuruan',compact('a','b','c','d','e'));
    }
     public function percobaan5()
    {
    	$b = "A";
    	$c = "B";
    	$d = "C";
    	$e = "D";
    	$f = "E";
    	return view('tugas.buah',compact('b','c','d','e','f'));
    }

    public function parameter ($a)
    {

    	return view('welcome',compact('a'));
    }

}
