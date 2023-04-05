@extends('nasabahs.layouts')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Nasabah
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ route('nasabahs.update', $Nasabah->No_Rekening) }}" id="myForm">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="No_Rekening">No Rekening</label>
                            <input type="text" name="No_Rekening" class="form-control" 
                                id="No_Rekening" value="{{ $Nasabah->No_Rekening }}" ariadescribedby="No_Rekening" >
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" name="Nama" class="form-control" 
                                id="Nama" value="{{ $Nasabah->Nama }}" ariadescribedby="Nama" >
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input type="text" name="Alamat" class="form-control" 
                                id="Alamat" value="{{ $Nasabah->Alamat }}" ariadescribedby="Alamat" >
                        </div>
                        <div class="form-group">
                            <label for="Jenis_Tabungan">Jenis Tabungan</label>
                            <input type="Jenis_Tabungan" name="Jenis_Tabungan" class="form-control" 
                            id="Jenis_Tabungan" value="{{ $Nasabah->Jenis_Tabungan }}" ariadescribedby="Jenis_Tabungan" >
                        </div>
                        <div class="form-group">
                            <label for="Saldo">Saldo</label>
                            <input type="Saldo" name="Saldo" class="form-control"
                            id="Saldo" value="{{ $Nasabah->Saldo }}" ariadescribedby="Saldo" >
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
