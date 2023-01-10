@extends('layout.app')
@section('content')
<div class="mt-4">
  <div class="text-right mb-4">
    <a href="{{route('create')}}" class="btn btn-primary">Tambah Data</a>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Harga</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($prodak as $row)
        <tr>
          <th scope="row">{{ $loop->index+1 }}</th>
          <td>{{ $row->nama_produk }}</td>
          <td>{{ $row->keterangan }}</td>
          <td>{{ $row->harga }}</td>
          <td>{{ $row->jumlah }}</td>
          <td>
            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('produk.destroy',$row->id)}}" method="post">
              <a href="{{route('produk.edit',$row->id)}}" class="btn btn-warning">Edit</a>
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">Hapus</button>
            </form>
          </td>
        </tr>     
      @endforeach
      
    </tbody>
  </table>
</div>
    
@endsection