@extends('layouts.app')

@section('content')

    <div class="container uploadfilebox-wrapper">
        <div class="row">

            <div class="container uploadfilebox">
                <div class="row rowubf1 align-middle align-self-center">

                    {{--<button class="btn btn-lg align-middle  btnupld btn-outline-success my-2 my-sm-0 mx-auto align-self-center" type="button" onclick="window.location='{{ route('upload-file') }}'">Upload</button>--}}
                </div>
                <div class="row rowubf2">
                    <form action="{{ url('upload-file') }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="row">

                            <div class="col-sm-10">
                                <div class="input-group inptit">

                                    <input type="text" class="form-control" placeholder="Enter document title..." aria-label="Enter document title">
                                    <span class="input-group-btn">
                                         <label class="btn btn-default ">
                                     <i class="fa fa-upload" aria-hidden="true"></i>  Choose file...<input type="file" name="image" hidden>
                                              </label>
                                  </span>
                                </div>
                            </div>


                            <div class="col-sm-10">
                                <div class="input-group inpauth">
                                    <input type="text" class="form-control" placeholder="Enter author..." aria-label="Enter author">
                                    <span class="input-group-btn">
                                         <label class="btn btn-default ">
                                     <i class="fa fa-upload" aria-hidden="true"></i>  Choose file...<input type="file" name="text_file" hidden>
                                              </label>
                                  </span>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="input-group inptxt">
                                    <textarea class="col-sm-9"></textarea>

                                </div>
                            </div>


                   {{--         <div class="d-inline-block col-md-10">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="inline-block form-control" id="bookTitle" aria-describedby="" placeholder="Enter document title">
                                </div>
                                <div class="d-inline-block col-sm-20">
                                <label class="btn btn-default inline-block">
                                    <i class="fa fa-upload" aria-hidden="true"></i>  Choose a file... <input type="file"     name="image" hidden>
                                </label>
                                </div>
                            --}}{{--  <input type="file" name="image" />--}}{{--

                            <div class="col-md-12">

                                <div class="d-inline-block">
                                <input type="text" class="form-control" id="bookTitle" aria-describedby="" placeholder="Enter Author">
                                </div>
                                <div class="d-inline-block">
                                <label class="btn btn-default">
                                    <i class="fa fa-upload" aria-hidden="true"></i>  Choose a file... <input type="file"  name="text_file" hidden>
                                </label>
                                </div>--}}{{--<input type="file" class="btn"  name="text_file" />--}}{{----}}{{--
                            </div>--}}
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">Upload</button>
                            </div>
                        </div>
                    </form>

                </div>

         {{--       <div class="row rowubf2">
                    <div class="col center-block text-center">
                        <span class="fa-stack fa-2x">
                             <i class="fa fa-circle-thin fa-stack-2x"></i>
                             <i class="fa fa-upload fa-stack-1x"></i>
                        </span>
                        <p>Upload swiftly</p>
                    </div>
                    <div class="col center-block text-center">
                       <span class="fa-stack fa-2x">
                             <i class="fa fa-circle-thin fa-stack-2x"></i>
                             <i class="fa fa-users fa-stack-1x"></i>
                        </span>
                        <p>Contribute to the community</p>
                    </div>
                    <div class="col center-block text-center">
                    <span class="fa-stack fa-2x">
                             <i class="fa fa-circle-thin fa-stack-2x"></i>
                             <i class="fa fa-heart-o fa-stack-1x"></i>
                        </span>
                        <p>Earn download points</p>
                    </div>

                </div>--}}
            </div>


        </div>
    </div>


  {{--  ////////////--}}

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

            {{--<form action="{{ url('upload-file') }}" enctype="multipart/form-data" method="POST">
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
