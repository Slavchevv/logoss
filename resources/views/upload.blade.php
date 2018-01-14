@extends('layouts.app')

@section('content')
    <div class="container uploadbox-wrapper">
        <div class="row">

            <div class="container uploadbox">
                <div class="row rowub1 align-middle align-self-center">

                    <button class="btn btn-lg align-middle  btnupld btn-outline-success my-2 my-sm-0 mx-auto align-self-center" type="button" onclick="window.location='{{ route('upload-file') }}'">Upload</button>
                </div>
                <div class="row rowub2">
                    <div class="col-sm-7 mx-auto text-center font-italic">
                        Supported file types: pdf, txt, doc, ppt, xls, docx, and more

                    </div>

                </div>

                <div class="row rowub2">
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

                </div>
            </div>


        </div>
    </div>


@endsection




