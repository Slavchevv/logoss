@extends('layouts.app')
@section('content')
    <h1>Uploads</h1>
    @if(count($uploads)>0)


        <div class="list-group align-items-center">
@foreach($uploads as $upload)


               {{-- @if ($upload->status === -1)
                    I have one record!
                @elseif ($upload->status === 0)
                    I have multiple records!
                @elseif ($upload->status === 1)
                    I don't have any records!
                @endif
--}}

        <a href="/uploads/{{$upload->id}}" class="list-group-item list-group-item-action flex-column align-items-start col-md-4">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$upload->name}}</h5>

                @if ($upload->status === -1)
                    <h5> <span class="badge badge-pill badge-warning">Pending</span></h5>
                @elseif ($upload->status === 0)

                @elseif ($upload->status === 1)
                    <h5> <span class="badge badge-pill badge-danger">Rejected</span></h5>
                @endif


            </div>
            <p class="mb-1">{{$upload->description}}</p>
            <small>{{$upload->name}}</small>
        </a>


  {{--  <div class="well">
        <h3><a href="/uploads/{{$upload->id}}">{{$upload->name}}</a> </h3>
        <small>Written on {{$upload->created_at}}</small>

    </div>--}}
        @endforeach
    {{$uploads->links("pagination::bootstrap-4")}}
   {{-- {{$uploads->links()}}--}}
        </div>

    @else
    <p>No uploads found</p>
    @endif

@endsection