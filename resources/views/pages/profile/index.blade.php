@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('create-profil') }}">
            <button class="btn btn-primary">Edit Profil</button>
        </a>
        <div class="container mt-5">
        <h1>Detail Perusahaan</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Field</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nama Perusahaan</td>
                    <td id="namaPerusahaan">{{ $profile->nama_perusahaan ?? '' }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td id="alamat">{{ $profile->alamat ?? ''}}</td>
                </tr>
                <tr>
                    <td>Kontak</td>
                    <td id="kontak">{{ $profile->kontak ?? ''}}</td>
                </tr>
                <tr>
                    <td>Jenis Makanan</td>
                    <td id="jenisMakanan">{{ $profile->jenis_makanan ?? ''}}</td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td id="deskripsi">{{ $profile->deskripsi ?? ''}}</td>
                </tr>
            </tbody>
        </table>
    </div>

    </div>
    
@endsection