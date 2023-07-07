@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>EDIT DATA Pelanggan</h3>
        <form action="{{ url('/pelanggan/' .$row->pel_id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">KODE</label>
                <input type="text" name="pel_no" class="form-control" value="{{$row->pel_no}}">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="pel_nama" class="form-control" value="{{$row->pel_nama}}">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="pel_alamat" class="form-control" value="{{$row->pel_alamat}}">
            </div>
            <div class="mb-3">
                <label for="">Nomor Hp</label>
                <input type="text" name="pel_hp" class="form-control" value="{{$row->pel_hp}}">
            </div>
            <div class="mb-3">
                <label for="">Nomor KTP</label>
                <input type="text" name="pel_ktp" class="form-control" value="{{$row->pel_ktp}}">
            </div>
            <div class="mb-3">
                <label for="">Nomor Seri</label>
                <input type="text" name="pel_seri" class="form-control" value="{{$row->pel_seri}}">
            </div>
            <div class="mb-3">
                <label for="">Nomor Meteran</label>
                <input type="text" name="pel_meteran" class="form-control" value="{{$row->pel_meteran}}">
            </div>
            <div class="mb-3">
                <label for="">Status</label>
                <td><select class="form-control" name="pel_aktif" id="">
                    <option value="">PILIH</option>
                    <option value="">Aktif</option>
                    <option value="">Tidak Aktif</option>
                </select></td>
            </div>
            <div class="mb-3">
                <input class="btn btn-success" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection