@extends('layouts.app')
@section('content')


    <div class="container book-wrapper w-95 p-3">
        <div class="container book-box">
            <div class="row row-one">

                <div class="col-md-2 col-lg-2">
                    <img class="img-fluid" src="{{$author->imgURL}}">

                    <div class="dropdown text-center btndiv">
                        <button class="btn btn-warning btn-sm dropdown-toggle text-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Follow
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Follow</a>
                            <a class="dropdown-item" href="#">Add to favorites</a>
                        </div>
                    </div>

                </div>



                <div class="col-md-4 col-lg-4">
                    <h1>{{$author->name}}</h1>
                    <div class="block_1 hline-bottom"></div>
                    <div id="book-desc">{{$author->biography}}</div>
                </div>
                <div class="mx-auto my-auto col-md-3 col-lg-3 text-center">
                    <p><strong>Top works by</strong> {{$author->name}}</p>
                <ul class="list-group">

                    @if(isset($topfive[0]))
                    <a href="/uploads/{{$topfive[0]->id}}" class="list-group-item orangelink">{{$topfive[0]->name}}</a>
                    @endif
                    @if(isset($topfive[1]))
                    <a href="/uploads/{{$topfive[1]->id}}" class="list-group-item orangelink">{{$topfive[1]->name}}</a>
                        @endif
                            @if(isset($topfive[2]))
                    <a href="/uploads/{{$topfive[2]->id}}" class="list-group-item orangelink">{{$topfive[2]->name}}</a>
                            @endif
                                @if(isset($topfive[3]))
                    <a href="/uploads/{{$topfive[3]->id}}" class="list-group-item orangelink">{{$topfive[3]->name}}</a>
                                @endif
                                    @if(isset($topfive[4]))
                    <a href="/uploads/{{$topfive[4]->id}}" class="list-group-item orangelink">{{$topfive[4]->name}}</a>
                                    @endif
                </ul>

                    <button class="btn btn-warning btn-sm btnseemoreauthor" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >See more</button>
                       {{-- <button class="btn btn-warning btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">See similar</button>--}}
                  {{--  onclick="window.location='{{ route('upload-file') }}'--}}
                </div>

            </div>
        </div>
    </div>

@endsection







{{--
    TODO
    1.author picture
    below picture
    -follow author
    -add to favourite authors
    2. bio
    -date born
    -place born(perhaps)
    -biography
    3.list of books
    4 books
--}}

