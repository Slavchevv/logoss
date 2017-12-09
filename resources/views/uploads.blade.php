@extends('layouts.app')
@section('content')
    <h1>Uploads</h1>
    @if(count($uploads)>0)


        <div class="list-group align-items-center">
@foreach($uploads as $upload)


        <a href="/uploads/{{$upload->id}}" class="list-group-item list-group-item-action flex-column align-items-start col-md-4">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
                <small>3 days ago</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            <small>Donec id elit non mi porta.</small>
        </a>





   {{-- <div class="well">
        <h3><a href="/uploads/{{$upload->id}}">{{$upload->name}}</a> </h3>
        <small>Written on {{$upload->created_at}}</small>

    </div>--}}
        @endforeach
        </div>
           {{--{{$uploads->links()}}--}}
    @else
    <p>No uploads found</p>
    @endif

@endsection