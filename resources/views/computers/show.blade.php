@extends('layout')
@section('centent')
<div class="d-flex justify-content-center align-items-center w-100 mt-5">
<div class="card" style="width: 18rem;">
  <img src="{{url('assets/img/pc.png')}}" class="card-img-top" alt="..." width="40" height="140">
  <div class="card-body">
    <h5 class="card-title">{{$computer['name']}}</h5>
    <p class="card-text">{{$computer['proc']}}</p>
    <p class="card-text">{{$computer['price']}}</p>
    <a href="{{route('computers.show',['computer' => $computer['id']])}}" class="btn btn-primary w-100">Go computer</a>
  </div>
</div>
</div>

@endsection
@section('title','computers')