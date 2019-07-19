<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //membuat agar nama table sesuai dengan apa yang kita buat.
	protected $table = 'siswa';
	//untuk mengizinkan field mana saja yang bisa diinput
	protected $fillable = ['nama_lengkap','jenis_kelamin','agama','alamat'];
}
