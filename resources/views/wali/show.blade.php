@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah DAta Wali
                </div>
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Wali</label>
                        <input type="text" value="{{$wali->nama}}"  class="form-control" readonly>
                    </div>
                        <div class="form-group">
                                <label for="">Nama Mahasiswa</label>
                        <input type="text" value="{{$wali->mahasiswa->nama}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                    <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
