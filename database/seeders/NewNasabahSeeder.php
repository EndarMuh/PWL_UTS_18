<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewNasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'No_Rekening' => 348104567,
                'Nama' => 'Muhammad Endar Darmawan',
                'Alamat' => 'Jl. aaa Bandung',
                'Jenis_Tabungan' => 'Platinum',
                'Saldo' => 10000000000
            ],
            [
                'No_Rekening' => 348104568,
                'Nama' => 'Salsa Billa Khairunnisa',
                'Alamat' => 'Jl. bbb Bandung',
                'Jenis_Tabungan' => 'Platinum',
                'Saldo' => 1000000000
            ],
            [
                'No_Rekening' => 348104569,
                'Nama' => 'Abdullah Azzam',
                'Alamat' => 'Jl. aaa Jakarta',
                'Jenis_Tabungan' => 'Gold',
                'Saldo' => 100000000
            ],
            [
                'No_Rekening' => 348104570,
                'Nama' => 'Ahmad Bima Tristan Ibrahim',
                'Alamat' => 'Jl. aaa Bogor',
                'Jenis_Tabungan' => 'Gold',
                'Saldo' => 150000000
            ],
            [
                'No_Rekening' => 348104571,
                'Nama' => 'Alfi Surya Pratama',
                'Alamat' => 'Jl. aaa Jakarta',
                'Jenis_Tabungan' => 'Gold',
                'Saldo' => 200000000
            ],
            [
                'No_Rekening' => 348104572,
                'Nama' => 'Andhito Galih Nur Cahyo',
                'Alamat' => 'Jl. aaa Madura',
                'Jenis_Tabungan' => 'Silver',
                'Saldo' => 1000000
            ],
            [
                'No_Rekening' => 348104573,
                'Nama' => 'Dimitri Abdullah',
                'Alamat' => 'Jl. bbb Bekasi',
                'Jenis_Tabungan' => 'Silver',
                'Saldo' => 1200000
            ],
            [
                'No_Rekening' => 348104574,
                'Nama' => 'Iemaduddin',
                'Alamat' => 'Jl. aaa Madura',
                'Jenis_Tabungan' => 'Silver',
                'Saldo' => 2100000
            ],
            [
                'No_Rekening' => 348104575,
                'Nama' => 'Diwa Arsyad Atthoriq',
                'Alamat' => 'Jl. aaa Pontianak',
                'Jenis_Tabungan' => 'Gold',
                'Saldo' => 170000000
            ],
            [
                'No_Rekening' => 348104576,
                'Nama' => 'Muhammad Ega Rama Fernanda',
                'Alamat' => 'Jl. aaa Banyuwangi',
                'Jenis_Tabungan' => 'Gold',
                'Saldo' => 250000000
            ],
            [
                'No_Rekening' => 348104577,
                'Nama' => 'Muhammad Farhan Riza Putra',
                'Alamat' => 'Jl. aaa Surabaya',
                'Jenis_Tabungan' => 'Platinum',
                'Saldo' => 1000000000
            ],
            [
                'No_Rekening' => 348104578,
                'Nama' => 'Naresh Pratista',
                'Alamat' => 'Jl. bbb Jakarta',
                'Jenis_Tabungan' => 'Platinum',
                'Saldo' => 130000000
            ],
            [
                'No_Rekening' => 348104579,
                'Nama' => 'Ramadhan Maulana Akbar',
                'Alamat' => 'Jl. aaa Sidoarjo',
                'Jenis_Tabungan' => 'Gold',
                'Saldo' => 100000000
            ],
            [
                'No_Rekening' => 348104580,
                'Nama' => 'Rr. Denti Nurramadhona',
                'Alamat' => 'Jl. aaa Surakarta',
                'Jenis_Tabungan' => 'Gold',
                'Saldo' => 290000000
            ],
            [
                'No_Rekening' => 348104581,
                'Nama' => 'Syahla Syafiqah',
                'Alamat' => 'Jl. aaa Depok',
                'Jenis_Tabungan' => 'Gold',
                'Saldo' => 210000000
            ],
            [
                'No_Rekening' => 348104582,
                'Nama' => 'Yasmine Navisha Andhani',
                'Alamat' => 'Jl. aaa Probolinggo',
                'Jenis_Tabungan' => 'Silver',
                'Saldo' => 1900000
            ],
            [
                'No_Rekening' => 348104583,
                'Nama' => 'Yuliana Rahmawati',
                'Alamat' => 'Jl. bbb Klaten',
                'Jenis_Tabungan' => 'Silver',
                'Saldo' => 1300000
            ],
            [
                'No_Rekening' => 348104584,
                'Nama' => 'Wildan Hafidz Mauludin',
                'Alamat' => 'Jl. aaa Bekasi',
                'Jenis_Tabungan' => 'Silver',
                'Saldo' => 3000000
            ],
            [
                'No_Rekening' => 348104585,
                'Nama' => 'Zahra Annisa Wahono',
                'Alamat' => 'Jl. aaa Banyuwangi',
                'Jenis_Tabungan' => 'Gold',
                'Saldo' => 150000000
            ],
            [
                'No_Rekening' => 348104586,
                'Nama' => 'Alvian Nur Firdaus',
                'Alamat' => 'Jl. aaa Banyuwangi',
                'Jenis_Tabungan' => 'Gold',
                'Saldo' => 280000000
            ],
        ];
        DB::table('nasabahs')->insert($data);
    }
}
