@extends('layouts.app')
@section('content')


      @if(count($upload)>0)
      <h3><a href="/uploads/{{$upload[0]->id}}">{{$upload[0]->name}}</a> </h3>
      <small>Written on {{$upload[0]->created_at}}</small>
    {{-- @if(!$search_result->uploads->isEmpty()>0)
        <h3><a href="/uploads/{{$search_result->uploads->id}}">{{$search_result->uploads->name}}</a> </h3>--}}
      @elseif(count($avtor)>0)
         <h3><a href="/uploads/{{$avtor[0]->id}}">{{$avtor[0]->name}}</a> </h3>
         <small>Written on {{$avtor[0]->created_at}}</small>
     @else
         <p>No results from this search</p>
      @endif
@endsection