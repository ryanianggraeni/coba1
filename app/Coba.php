<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coba extends Model
{
    //
    protected $table = 'table';
    protected $fillable = ['Nama','Kelas','Jurusan','Jenis_kelamin'];
    protected $visible =['Nama','Kelas','JUrusan','Jenis_kelamin'];
    public $timestamps = true;
 }
