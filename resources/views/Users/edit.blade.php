@extends('layouts.app')
@section('content')
    <div class="container">
    <h5><center><b>EDIT DATA USER</b></center></h5><br>
        <form action="{{ url('/users/' .$row->user_id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">EMAIL</label>
                <input type="text" name="user_email" class="form-control" value="{{$row->user_email}}">
            </div>
            <div class="mb-3">
                <label for="">PASSWORD</label>
                <input type="password" name="user_password" class="form-control" value="{{$row->user_password}}">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="user_nama" class="form-control" value="{{$row->user_nama}}">
            </div>
            <div class="mb-3">
                <label for="">ALAMAT</label>
                <input type="text" name="user_alamat" class="form-control" value="{{$row->user_alamat}}">
            </div>
            <div class="mb-3">
                <label for="">NO HP</label>
                <input type="text" name="user_hp" class="form-control" value="{{$row->user_hp}}">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection