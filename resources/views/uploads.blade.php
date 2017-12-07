@extends('layouts.app')
@section('content')
    <h1>Uploads</h1>
    @if(count($uploads)>0)
@foreach($uploads as $upload)
    <div class="well">
        <h3><a href="/uploads/{{$upload->id}}">{{$upload->name}}</a> </h3>
        <small>Written on {{$upload->created_at}}</small>

    </div>
        @endforeach
           {{$uploads->links()}}
    @else
    <p>No uploads found</p>
    @endif

@endsection