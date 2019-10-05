@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-primary">List Pengumuman</div>
                <div class="card-body">
                   
                <table class="table table-bordered">
                    <thead class="bg-primary">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Users Id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $listPengumuman as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->kategori_pengumuman_id !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                        <td>
                         <a href="{!! route('pengumuman.show',[$item->id]) !!}">Detail</a>
                        </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
                 <a href="{!! route('pengumuman.create') !!}" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection