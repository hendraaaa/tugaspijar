@extends('layout.app')
@section('content')
    <div class="mt-4">
        <form action="{{route('produk.update',$produk->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">          
                <label for="nama_produk">Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Nama Produk" value="{{$produk->nama_produk}}">    
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" value="{{$produk->keterangan}}">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga" value="{{$produk->harga}}">
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="{{$produk->jumlah}}">
                
            </div>
           
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection