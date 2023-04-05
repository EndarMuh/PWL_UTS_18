@extends('nasabahs.layouts')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Nasabah
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>No Rekening: </b>{{$Nasabah->No_Rekening}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$Nasabah->Nama}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$Nasabah->Alamat}}</li>
                    <li class="list-group-item"><b>Jenis Tabungan: </b>{{$Nasabah->Jenis_Tabungan}}</li>
                    <li class="list-group-item"><b>Saldo: </b>{{$Nasabah->Saldo}}</li>
                </ul>
            </div><a class="btn btn-success mt-3" href="{{ route('mahasiswas.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection