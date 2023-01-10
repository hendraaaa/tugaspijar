@extends('layout.app')
@section('content')
    <div class="mt-4">
        <form action="{{route('store')}}" method="POST">
            @csrf
            <div class="form-group">          
                <label for="nama_produk">Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Nama Produk">    
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga">
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah">
                
            </div>
           
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection