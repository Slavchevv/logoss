@extends('layouts.app')

@section('content')
{{--    @include('inc.contact')--}}
{!! Form::open(['url' => 'contact/submit']) !!}
<div class="form-group">

    {{Form::label('name', 'Name')}}
    {{Form::text('name','',['class' => 'form-control col-md-3', 'placeholder' =>'Enter name'])}}


</div>

<div class="form-group">

    {{Form::label('email', 'E-Mail Address')}}
    {{Form::text('email','',['class' => 'form-control col-md-3', 'placeholder' =>'Enter email'])}}


</div>

<div class="form-group">

    {{Form::label('email', 'Message')}}
    {{Form::textarea('msg','',['class' => 'form-control col-md-3', 'placeholder' =>'Enter message'])}}


</div>
<div>
    {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
</div>
{!! Form::close() !!}
@endsection