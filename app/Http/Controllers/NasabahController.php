<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NasabahController;
use Illuminate\Http\Request;
Route::resource('nasabahs', NasabahController::class);
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $nasabahs = Nasabah::paginate(6); // Mengambil 6 isi tabel
        $posts = Nasabah::orderBy('No_rekening', 'desc')->paginate(7);
        return view('nasabahs.index', compact('nasabahs'))->with('i', (request()->input('page', 1) - 1) * 6);
    }
    public function create()
    {
        return view('nasabahs.create');
    }
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'No_Rekening' => 'required',
            'Nama' => 'required',
            'Alamat' => 'required',
            'Jenis_Tabungan' => 'required',
            'Saldo' => 'required'
        ]);
        //fungsi eloquent untuk menambah data
        Nasabah::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('nasabahs.index')->with('success', 'Nasabah Berhasil Ditambahkan');
    }
    public function show($No_rekening)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Norek Nasabah
        $Nasabah = Nasabah::find($No_rekening);
        return view('nasabahs.detail', compact('Nasabah'));
    }
    public function edit($No_rekening)
    {
        //menampilkan detail data dengan menemukan berdasarkan Norek Nasabah untuk diedit
        $Nasabah = Nasabah::find($No_rekening);
        return view('nasabahs.edit', compact('Nasabah'));
    }
    public function update(Request $request, $No_rekening)
    {
        //melakukan validasi data
        $request->validate([
            'No_Rekening' => 'required',
            'Nama' => 'required',
            'Alamat' => 'required',
            'Jenis_Tabungan' => 'required',
            'Saldo' => 'required'
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        Nasabah::find($No_rekening)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('nasabahs.index')->with('success', 'Nasabah Berhasil Diupdate');
    }
    public function destroy($No_rekening)
    {
        //fungsi eloquent untuk menghapus data
        Nasabah::find($No_rekening)->delete();
        return redirect()->route('nasabahs.index')->with('success', 'Nasabah Berhasil Dihapus');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $nasabah = Nasabah::where('Nama', 'like', '%' . $keyword . '%')->paginate(6);
        return view('nasabahs.index', compact('nasabahs'))->with('i', (request()->input('page', 1) - 1) * 6);
    }
};