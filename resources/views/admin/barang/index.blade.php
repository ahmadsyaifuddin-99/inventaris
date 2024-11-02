@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Barang</h1>
            </div>
        </div>
        <div class="col-md-6 text-right">
            <a href="/admin/barang/tambah" class="btn btn-primary btn-circle btn-lg">
                <i class="fa fa-plus"></i>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Menampilkan Data Barang
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>NO</td>
                                    <td>KODE</td>
                                    <td>NAMA BARANG</td>
                                    <td>STOK</td>
                                    <td>AKSI</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->kode }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->stok }}</td>
                                        <td>
                                            <a href="/admin/barang/edit/{{ $item->id }}"
                                                class="btn btn-success btn-circle btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="/admin/barang/delete/{{ $item->id }}"
                                                class="btn btn-danger btn-circle btn-sm"
                                                onclick="return confirm('Yakin ingin di hapus?');">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
