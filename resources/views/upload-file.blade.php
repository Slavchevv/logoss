@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    <img src="{{ Session::get('path') }}">
                @endif
                    <div class="container uploadfilebox-wrapper">
                        <div class="row">

                            <div class="container uploadfilebox">
                                <div class="row rowubf2">
                                    {!! Form::open(['action'=>'UploadController@imageUploadPost', 'method'=>'POST','files' => true]) !!}
                                    {{--<form action="{{ url('upload-file') }}" enctype="multipart/form-data" method="POST">--}}
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <div class="input-group inptit form-group">
                                                    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Enter document title...'])}}
                                                    {{--  <input type="text" class="form-control" placeholder="Enter document title..." aria-label="Enter document title">--}}
                                                   <span class="input-group-btn">
                                         <label class="btn btn-default ">
                                     <i class="fa fa-upload" aria-hidden="true"></i>  Choose file...<input type="file" name="image" hidden>
                                              </label>
                                  </span>




                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="input-group inpauth form-group">
                                                    {{Form::text('author','',['class'=>'form-control','placeholder'=>'Enter author...'])}}
                                                    {{--<input type="text" class="form-control" placeholder="Enter author..." aria-label="Enter author">--}}
                                                    <span class="input-group-btn">
                                         <label class="btn btn-default ">
                                     <i class="fa fa-upload" aria-hidden="true"></i>  Choose file...<input type="file" name="text_file" hidden>
                                              </label>
                                  </span>

                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="input-group inptxt form-group">
                                                    {{Form::textarea('description','',['class'=>'form-control col-sm-9'])}}
                                               {{--     <textarea class="col-sm-9"></textarea>--}}

                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
                                           {{--     <button type="submit" class="btn btn-success">Upload</button>--}}
                                            </div>
                                        </div>
                                    {!! Form::close()!!}
                               {{--     </form>--}}

                                </div>
                            </div>


                        </div>
                    </div>


               {{-- <form action="{{ url('upload-file') }}" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <input type="file" name="image" />
                        </div>
                        <div class="col-md-12">
                            <input type="file" name="text_file" />
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>
                    </div>
                </form>--}}



            </div>

        </div>
    </div>
@endsection
