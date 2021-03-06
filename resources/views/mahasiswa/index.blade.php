@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
                @if(session('message'))
                <div class="alert alert-success" role="alert">
                    {{session('message') }}
                </div>
                @endif
            <div class="card">
            <div class="card-header">
                Data Mahasiswa
                    <a href="{{route('mahasiswa.create')}}"
                        class="float-right">
                        Tambah Data
                    </a>
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama</th>
                                    <th>Nomor Induk Sekolah</th>
                                    <th>Nama Dosen</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($mhs as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->nim}}</td>
                                    <td>{{$data->dosen->nama}}</td>
                                    <td>
                                    <form action="{{route('mahasiswa.destroy',$data->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('mahasiswa.show',$data->id)}}" class="btn btn-primary">Lihat</a>  |
                                    <a href="{{route('mahasiswa.edit',$data->id)}}" class="btn btn-success">Edit</a> |
                                    <button type="submit" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger">Hapus</button>
                                </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
