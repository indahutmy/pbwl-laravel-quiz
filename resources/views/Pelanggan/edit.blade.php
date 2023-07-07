@extends('layouts.app')
@section('content')
    <div class="container">
        <h5><center><b>EDIT DATA PELANGGAN</b></center></h5><br>
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
                <label for="">ALAMAT</label>
                <input type="text" name="pel_alamat" class="form-control" value="{{$row->pel_alamat}}">
            </div>
            <div class="mb-3">
                <label for="">NO HP</label>
                <input type="text" name="pel_hp" class="form-control" value="{{$row->pel_hp}}">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection