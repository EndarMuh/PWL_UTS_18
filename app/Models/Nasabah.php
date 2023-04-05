<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Nasabah as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent

class Nasabah extends Model //Definisi Model
{
    protected $table = "nasabahs"; // Eloquent akan membuat model mahasisw menyimpan record di tabel nasabah
    public $timestamps = false;
    protected $primaryKey = 'No_rekening'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable.
     * *
     * @var array
     */
    protected $fillable = [
        'No_Rekening',
        'Nama',
        'Alamat',
        'Jenis_Tabungan',
        'Saldo'
    ];
};