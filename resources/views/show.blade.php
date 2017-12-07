@extends('layouts.app')
@section('content')
   <h1>{{$upload->name}}</h1>
   <a href="/uploads/{{$upload->id}}/edit" class = "btn btn default">Edit</a>

   {!! Form::open(['action'=>['UploadController@destroy',$upload->id],'method'=>'POST','class'=>'pull-right']) !!}
   {{Form::hidden('_method','DELETE')}}
   {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
   {!! Form::close()!!}
@endsection