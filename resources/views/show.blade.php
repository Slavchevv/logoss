@extends('layouts.app')
@section('content')
   <h1>{{$upload->name}}</h1>
   <a href="/uploads/{{$upload->id}}/edit" class = "btn btn default">Edit</a>
   <a href="/avtors/{{$upload->author->id}}" class = "btn btn default">{{$upload->author->name}}</a>
   {!! Form::open(['action'=>['UploadController@destroy',$upload->id],'method'=>'POST','class'=>'pull-right']) !!}
   {{Form::hidden('_method','DELETE')}}
   {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
   {!! Form::close()!!}
@endsection