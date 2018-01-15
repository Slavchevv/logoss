@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="container uploadfilebox-wrapper">
                    <div class="row">
                        <div class="container uploadfilebox">
                            <div class="row editrow rowubf2">
                                {!! Form::open(['action'=>['UploadController@update',$upload[0]['attributes']['id']], 'method'=>'POST','files' => true]) !!}
                                {{--<form action="{{ url('upload-file') }}" enctype="multipart/form-data" method="POST">--}}
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-group inptit form-group">
                                            {{Form::text('title',$upload[0]['attributes']['name'],['class'=>'form-control','placeholder'=>'Enter document title...'])}}


                                        </div>
                                    </div>
                             {{--       <div class="col-sm-10">
                                        <div class="input-group inpauth form-group">
                                            {{Form::text('author','',['class'=>'form-control','placeholder'=>'Enter author...'])}}


                                        </div>
                                    </div>
--}}
                                    <div class="col-sm-12">
                                        <div class="input-group inptxt form-group">
                                            {{Form::textarea('description',$upload[0]['attributes']['description'],['class'=>'form-control col-sm-9'])}}


                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        {{Form::hidden('_method','PUT')}}
                                        {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
                                    </div>
                                </div>
                                {!! Form::close()!!}
                                </form>

                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
