@extends('layouts.app')
@section('content')
    <div class="container w-95 p-3 mx-auto">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class = "orangelink" href="/home">Home</a></li>
        <li class="breadcrumb-item"><a class = "orangelink" href="/categories">Categories</a></li>
        <li class="breadcrumb-item active">{{$category->name}}</li>
    </ol>
    </div>
    @if(count($books)>0)
        @include('inc.books')

        {{--@foreach($uploads as $upload)
            <div class="well">
                <h3><a href="/uploads/{{$upload->id}}">{{$upload->name}}</a></h3>
                <small>Written on {{$upload->created_at}}</small>
            </div>
        @endforeach--}}
        {{--  {{$uploads->links()}}--}}
    @else
        <p>No books found in this category</p>
    @endif

@endsection