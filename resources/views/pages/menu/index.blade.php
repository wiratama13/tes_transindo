@extends('layouts.app')

@section('content')
   <div class="container">
    <a href="">
        <button class="btn btn-primary">Tambah Produk</button>
    </a>
     <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Foto</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
          
        </tbody>
        </table>
   </div>
@endsection