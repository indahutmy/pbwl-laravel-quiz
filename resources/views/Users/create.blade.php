@extends('layouts.app')
@section('content')
    <div class="container">
        <h5><center><b>TAMBAH DATA USER</b></center></h5><br>
        <form action="{{ url('/users')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">EMAIL</label>
                <input type="text" name="user_email" class="form-control" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="">PASSWORD</label>
                <input type="password" name="user_password" class="form-control" placeholder="Password">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="user_nama" class="form-control" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="">ALAMAT</label>
                <input type="text" name="user_alamat" class="form-control" placeholder="Alamat">
            </div>
            <div class="mb-3">
                <label for="">NO HP</label>
                <input type="text" name="user_hp" class="form-control" placeholder="No Hp">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection