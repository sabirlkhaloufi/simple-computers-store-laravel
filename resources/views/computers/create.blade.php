@extends('layout')
@section('centent')

<div class="d-flex justify-content-center align-itmes-center mt-5 vh-100">
    
<form class="mt-5" method="POST" action="{{route('computers.store')}}">
  @csrf
<h2>add new computer</h2>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="{{old('name')}}" name="name">
    @error('name')
    <div class="alert alert-danger py-0">{{$message}}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">proc</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="{{old('proc')}}" name="proc">
    @error('proc')
    <div class="alert alert-danger py-0">{{$message}}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">price</label>
    <input type="number" class="form-control" id="exampleInputPassword1" value="{{old('price')}}" name="price">
    @error('price')
    <div class="alert alert-danger py-0">{{$message}}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary w-100">add new computer</button>
</form>
</div>

@endsection
@section('title','create computer')