@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>TAMBAH DATA PELANGGAN</h3>
        <form action="{{ url('/pelanggan')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">KODE</label>
                <input type="text" name="pel_no" class="form-control" placeholder="Kode">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="pel_nama" class="form-control" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="pel_alamat" class="form-control" placeholder="Alamat">
            </div>
            <div class="mb-3">
                <label for="">Nomor Hp</label>
                <input type="text" name="pel_hp" class="form-control" placeholder="Nomor Hp">
            </div>
            <div class="mb-3">
                <label for="">Nomor KTP</label>
                <input type="text" name="pel_ktp" class="form-control" placeholder="Nomor KTP">
            </div>
            <div class="mb-3">
                <label for="">Nomor Seri</label>
                <input type="text" name="pel_seri" class="form-control" placeholder="Nomor Seri">
            </div>
            <div class="mb-3">
                <label for="">Nomor Meteran</label>
                <input type="text" name="pel_meteran" class="form-control" placeholder="Nomor Meteran">
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
                <input class="btn btn-success" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection