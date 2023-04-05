@extends('nasabahs.layouts')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <br><br>
                <center>
                    <h2>DATA NASABAH BANK PWL</h2><br>  
                </center>
            </div>
            <div class="float-right my-2">
                
            </div>
            <form class="form-left my-4" method="get" action="{{ route('search') }}">
                <div class="form-group w-80 mb-3">
                    <input type="text" name="search" class="form-control w-50 d-inline" id="search" placeholder="Search">
                    <button type="submit" class="btn btn-primary mb-1">Cari</button>
                    <a class="btn btn-success right" href="{{ route('nasabahs.create') }}" style="margin-left:9cm"> Input Nasabah</a>
                </div>
            </form>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    
    <table class="table table-bordered">
        <tr>
            <th>No Rekening</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Tabungan</th>
            <th>Saldo</th>
            <th width="225px">Action</th>
        </tr>
        @foreach ($nasabahs as $Nasabah)
        <tr>
            <td>{{ $Nasabah->No_Rekening }}</td>
            <td>{{ $Nasabah->Nama }}</td>
            <td>{{ $Nasabah->Alamat }}</td>
            <td>{{ $Nasabah->Jenis_Tabungan }}</td>
            <td>{{ $Nasabah->Saldo }}</td>
            <td>
                <form action="{{ route('nasabahs.destroy', $Nasabah->No_Rekening) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('nasabahs.show', $Nasabah->No_Rekening) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('nasabahs.edit', $Nasabah->No_Rekening) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $nasabahs->withQueryString()->links('pagination::bootstrap-6') !!}
@endsection

