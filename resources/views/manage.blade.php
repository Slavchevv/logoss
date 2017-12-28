
@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row">

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Filter
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/manage/">All</a>
                    <a class="dropdown-item" href="/manage/pending">Pending</a>
                    <a class="dropdown-item" href="/manage/rejected">Rejected</a>
                    <a class="dropdown-item" href="/manage/approved">Approved</a>
                </div>
            </div>

        </div>
        <div class="row">


            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($uploads as $upload)
                <tr>
                    <th scope="row">{{$upload->id}}</th>
                    <td>{{$upload->name}}</td>
                    <td>{{$upload->description}}</td>
                    <td>{{$upload->status}}</td>
                    <td>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filter
                            </button>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                {!! Form::open(['action'=>['AdminController@update',$upload->id,0], 'method'=>'POST']) !!}
                                {{Form::hidden('_method','PUT')}}
                                {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
                                <a class="dropdown-item" href="/manage">Approve</a>
                                {!! Form::close()!!}
                                <a class="dropdown-item" href="/manage">Reject</a>

                            </div>
                        </div>
                        {!! Form::close()!!}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>
{{--
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Username</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>--}}


    {{--<h1>Uploads</h1>
    @if(count($uploads)>0)
        @foreach($uploads as $upload)
            <div class="well">
                <h3><a href="/uploads/{{$upload->id}}">{{$upload->name}}</a> </h3>
                <small>Written on {{$upload->created_at}}</small>

            </div>
        @endforeach
        --}}{{--  {{$uploads->links()}}--}}{{--
    @else
        <p>No uploads found</p>
    @endif
--}}
@endsection