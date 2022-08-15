@extends('layout')
@section('centent')
<a class="btn btn-primary text-center mt-4" href="{{route('computers.create')}}">Add New Computer</a>

<div class="mt-5 d-flex justify-content-center align-items-center gap-2 flex-wrap">
@foreach($computers as $computer)
<div class="card" style="width: 18rem;">
  <img src="{{url('assets/img/pc.png')}}" class="card-img-top" alt="..." width="40" height="140">
  <div class="card-body">
    <h5 class="card-title">{{$computer['name']}}</h5>
    <p class="card-text">{{$computer['proc']}}</p>
    <p class="card-text">{{$computer['price']}}</p>
    <a href="{{route('computers.show',$computer['id'])}}" class="btn btn-primary">Go computer</a>
    <form method="POST" action="{{route('computers.destroy',$computer['id'])}}">
      @csrf
      @method('DELETE')
    <button type='submit' value='delete' class="btn btn-danger">delete</button>
    </form>
    
  </div>

</div>
@endforeach
</div>
@endsection
@section('title','computer')