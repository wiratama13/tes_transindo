@extends('layouts.app')

@section('content')
 <div class="container mt-2">
        <h1>Form Input Perusahaan</h1>
        <form action="{{ route('store-profil') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="hidden" value="{{ $profile->user_id }}" name="user_id">
                <label for="namaPerusahaan" class="form-label">Nama Perusahaan</label>
                <input type="text" class="form-control" value="{{ $profile->nama_perusahaan }}" name="nama_perusahaan" id="namaPerusahaan" placeholder="Masukkan nama perusahaan" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" value="{{ $profile->alamat }}" id="alamat" name="alamat" placeholder="Masukkan alamat" required>
            </div>
            <div class="mb-3">
                <label for="kontak" class="form-label">Kontak</label>
                <input type="text" class="form-control" id="kontak" value="{{ $profile->kontak }}" name="kontak" placeholder="Masukkan nomor kontak" required>
            </div>
            <div class="mb-3">
                <label for="jenisMakanan" class="form-label">Jenis Makanan</label>
                <input type="text" class="form-control" id="jenisMakanan" value="{{ $profile->jenis_makanan }}" name="jenis_makanan" placeholder="Masukkan jenis makanan" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" rows="4" name="deskripsi" placeholder="Masukkan deskripsi" required>
                    {{ $profile->deskripsi }}
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>

@endsection