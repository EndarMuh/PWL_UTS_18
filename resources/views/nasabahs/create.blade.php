@extends('nasabahs.layouts')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Nasabah
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input. <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('nasabahs.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="No_Rekening">No Rekening</label>
                            <input type="text" name="No_Rekening" class="form-control" id="No_Rekening" 
                            aria-describedby="No_Rekening">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" name="Nama" class="form-control" id="Nama"
                                aria-describedby="Nama">
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input type="text" name="Alamat" class="form-control" id="Alamat"
                                aria-describedby="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="Jenis_Tabungan">Jenis Tabungan</label>
                            <input type="text" name="Jenis_Tabungan" class="form-control" id="Jenis_Tabungan"
                                aria-describedby="Jenis_Tabungan">
                        </div>
                        <div class="form-group">
                            <label for="Saldo">Saldo</label>
                            <input type="text" name="Saldo" class="form-control" id="Saldo"
                                aria-describedby="Saldo">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
