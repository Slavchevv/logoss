@extends('layouts.app')
@section('content')

    <div class="list-group align-items-center">
        <div class="container w-95 p-3 mx-auto">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class = "orangelink" href="/home">Home</a></li>
                <li class="breadcrumb-item active">Search results</li>
            </ol>
        </div>
      @if(count($upload)>0)
      <ul class="list-group">
          <li class="list-group-item"><h5><a class="orangelink" href="/uploads/{{$upload[0]->id}}">1. {{$upload[0]->name}}</a> </h5></li>
      </ul>
    {{-- @if(!$search_result->uploads->isEmpty()>0)
        <h3><a href="/uploads/{{$search_result->uploads->id}}">{{$search_result->uploads->name}}</a> </h3>--}}
      @elseif(count($avtor)>0)
         <h3><a href="/uploads/{{$avtor[0]->id}}">{{$avtor[0]->name}}</a> </h3>
         <small>Written on {{$avtor[0]->created_at}}</small>
     @else
            <ul class="list-group">
                <li class="list-group-item"><h5>No results for your search. Try looking in<a class="orangelink" href="/categories/"> categories</a> </h5></li>
            </ul>
      @endif
    </div>
@endsection