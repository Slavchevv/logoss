@extends('layouts.app')
@section('content')
    <div class="container w-95 p-3 mx-auto">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class = "orangelink" href="/books">Books</a></li>
            <li class="breadcrumb-item active">Saved</li>
        </ol>
    </div>
    @if(count($uploads)>0)


        <div class="list-group align-items-center">
            @foreach($uploads as $upload)

                {{--<a href="/uploads/{{$upload->id}}" class="list-group-item list-group-item-action flex-column align-items-start col-md-4">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$upload->name}}</h5>--}}

                        <a href="/uploads/{{$upload->id}}" class="list-group-item list-group-item-action flex-column align-items-start col-md-4 listsaved border-0">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{$upload->name}}</h5>



                    </div>

                    <small>by {{$upload->aname}}</small>
                </a>


                {{--  <div class="well">
                      <h3><a href="/uploads/{{$upload->id}}">{{$upload->name}}</a> </h3>
                      <small>Written on {{$upload->created_at}}</small>

                  </div>--}}
            @endforeach
          {{--  {{$uploads->links("pagination::bootstrap-4")}}
            --}}{{-- {{$uploads->links()}}--}}
        </div>

    @else
        <p>No uploads found</p>
    @endif

@endsection