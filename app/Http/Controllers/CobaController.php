<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coba;

class CobaController extends Controller
{
    //
    public function test()
    {
    	$a = Coba::all();
    	return $a;
    }
    public function test2($id)
    {
    	$a = Coba::findOrFail($id);
    	return $a;
    }
    public function index()
    {
    	$tampilan = Coba::all();
    	return view('index',compact('tampilan'));
    }
   
     public function coba1()
    {
    	$buahbuahan =['Mangga','Jeruk','Apel','Anggur','Manggis'];
    	return view('buah',compact('buahbuahan'));
    }

    public function coba2()
    {
    	$data =['ujang','idoy','juju','icih'];
    	return view('nama',compact('data'));
    }

    public function bin($data)
    {
    	$koplak =['binatang' =>['jerapah','gajah','unta','monyet','ayam'],
    			   'kendaraan'=>['motor','mobil','ojeg','bis','kereta api'],
    			   'laptop'=>['acer','lenovo','hp','asus','samsung']];
    	$ahaha =$koplak[$data];
    	return view('latihan',compact('ahaha'));
    }

    public function test10($nama)
    {
        $a = Coba::where('nama','like','%'.$nama.'%')->orwhere('jurusan','like','%'.$nama.'%')->get();
        return $a;
    }

    }
