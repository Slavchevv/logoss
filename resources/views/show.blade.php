@extends('layouts.app')
@section('content')
   <div class="container book-wrapper w-95 p-3">
{{--      <div class="row">--}}
         <div class="container book-box">
            <div class="row row-one">
               <div class="col-md-2 col-lg-2 image">
                  <img class="img-fluid" src="{{$uploads[0]->imgURL}}">
                  <div class="row">
                  {{--<span id="rate-this-book"> Rate this book ! </span>--}}
                     <div class="ratings">
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                     </div>
                  </div>

                  <div class="row">
                  <span id="share-this-book"> Share: </span>
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                  <i class="fa fa-envelope-o" aria-hidden="true"></i>
                  </div>

                  <div class="row">
                     <span id="this-book-download"> Download! </span>
               {{--       <a href="/download/{{url($uploads[0]->txtURL)}}" download="download">Download</a>--}}
                      <a class ="btn" id="dnld" href="{{ route('download') }}?url={{ urlencode($uploads[0]->txtURL).'&'.'id='.$uploads[0]->id}}"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
              {{--        <a href="/download/{{url($uploads[0]->txtURL)}}">Download</a>--}}
                     {{---}}
                  </div>
                  <div class="row">
                     <span id="this-book-categories"> In categories: </span>

                     <ul class="tags-book">
                        @if(isset($categories[0]))
                           <a href="/categories/{{$categories[0]->id}}" class="badge badge-warning">{{$categories[0]->name}}</a>
                        @endif
                           @if(isset($categories[1]))
                              <a href="/categories/{{$categories[1]->id}}" class="badge badge-warning">{{$categories[1]->name}}</a>
                           @endif
                           @if(isset($categories[2]))
                              <a href="/categories/{{$categories[2]->id}}" class="badge badge-warning">{{$categories[2]->name}}</a>
                           @endif
                     </ul>
                     <ul class="tags-book">
                        @if(isset($categories[3]))
                           <a href="/categories/{{$categories[3]->id}}" class="badge badge-warning">{{$categories[0]->name}}</a>
                        @endif
                        @if(isset($categories[4]))
                           <a href="/categories/{{$categories[4]->id}}" class="badge badge-warning">{{$categories[1]->name}}</a>
                        @endif
                        @if(isset($categories[5]))
                           <a href="/categories/{{$categories[5]->id}}" class="badge badge-warning">{{$categories[2]->name}}</a>
                        @endif
                     </ul>
                   {{--  <span id="this-book-save"> Save it! </span>

                     <i class="fa fa-bookmark-o svd" aria-hidden="true"></i>--}}
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 image">
                  <h2 id="book-title">{{$uploads[0]->name}}</h2><p>by <a class = "orangelink" href="/avtors/{{$author->id}}">{{$author->name}}</a></p>
        {{--          <h3><a href="/uploads/{{$upload->id}}">{{$upload->name}}</a> </h3>--}}
                   <div class="block_1 hline-bottom"></div>
                  <div id="book-desc">{{$uploads[0]->description}}</div>
                  </div>
               <div class="col-md-3 col-lg-3 image">
               {{--   <div class="row row-three">--}}
                  <h3>Top 5 books</h3>
                  <p>by <a class = "orangelink" href="/avtors/{{$author->id}}">{{$author->name}}</a></p>
                  <p class="top-five-books">
                  <p><a href="/uploads/{{$topfive[0]->id}}" class="orangelink">{{$topfive[0]->name}}</a></p>
                  <p><a href="/uploads/{{$topfive[1]->id}}" class="orangelink">{{$topfive[1]->name}}</a></p>
                  <p><a href="/uploads/{{$topfive[2]->id}}" class="orangelink">{{$topfive[2]->name}}</a></p>
                  <p><a href="/uploads/{{$topfive[3]->id}}" class="orangelink">{{$topfive[3]->name}}</a></p>
                  <p><a href="/uploads/{{$topfive[4]->id}}" class="orangelink">{{$topfive[4]->name}}</a></p>


                   {{--{!! Form::open(['action'=>['AdminController@update',$upload->id,0], 'method'=>'POST']) !!}
                                {{Form::hidden('_method','PUT')}}
                                {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
                                <a class="dropdown-item" href="/manage">Approve</a>
                                {!! Form::close()!!}
                                <a class="dropdown-item" href="/manage">Reject</a>

                            </div>
                        </div>
                        {!! Form::close()!!}--}}

                {{--  </div>--}}
                  </div>
               <div class="col-md-1 col-lg-1">
                  {!! Form::open(['action'=>['UploadController@save_book',$uploads[0]->id,0], 'method'=>'POST']) !!}
               {{--   <span id="this-book-save"> Save it! </span>--}}
         {{--          <a href="{{ route('savebk') }}?id={{$uploads[0]->id}}">Save it!</a>--}}
                   {{Form::hidden('_method','PUT')}}
                   {{Form::button('<i class="fa fa-bookmark-o svd" aria-hidden="true"></i>',['id'=>'svd','type' => 'submit'])}}
                  {{-- <button id="svd"></button>--}}
                 {{-- <i class="fa fa-bookmark-o svd" aria-hidden="true"></i>--}}
               {{--    <a href="{{ route('savebook') }}?upload={{ $uploads[0]->id}}">Save</a>--}}
               {!! Form::close()!!}
               </div>
               </div>
    {{--  </div>--}}
   </div>
         </div>
   </div>
  {{-- <h1>{{$upload->name}}</h1>
   <a href="/uploads/{{$upload->id}}/edit" class = "btn btn default">Edit</a>
   <a href="/avtors/{{$upload->author->id}}" class = "btn btn default">{{$upload->author->name}}</a>



   {!! Form::open(['action'=>['UploadController@destroy',$upload->id],'method'=>'POST','class'=>'pull-right']) !!}
   {{Form::hidden('_method','DELETE')}}
   {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
   {!! Form::close()!!}--}}
@endsection

{{--
<div class="container book-box">
   <div class="row row-one">
      <div class="col-md-4 col-sm-4 col-4 image">
         <img src="{{$upload->imgURL}}">
         <div class="row">
            --}}
{{-- <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>--}}{{--



            <span id="rate-this-book"> Rate this book ! </span>

            <fieldset class="rating">
               <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
               <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
               <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
               <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
               <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
               <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
               <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
               <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
               <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
               <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            <span id="share-this-book"> Share: </span>
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-envelope-o" aria-hidden="true"></i>


            <span id="this-book-categories"> In categories: </span>
            <ul class="tags-book">
               <a href="#" class="badge badge-warning">Psychology</a>
               <a href="#" class="badge badge-warning">Philosophy</a>
               <a href="#" class="badge badge-warning">Religion</a>
            </ul>

            <span id="this-book-categories"> Download: </span>

            <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>

         </div>
      </div>
      <div class="col-md-6 col-sm-6 col-6">
         <h2 id="book-title">{{$upload->name}}</h2><p>by Friedrich Nietzsche</p>
         <div id="book-desc">{{$upload->description}}</div>

      </div>

      <div class="col-md-2 col-sm-2 col-2">
         <h3>Top 5 books</h3>
         <p>by Friedrich Nietzsche</p>
         <img src="{{$upload->imgURL}}" height="109.5" width="100">
         <div class="top-five-books">
            <a href="#" class="orangelink">{{$upload->name}}</a>
            <a href="#" class="orangelink">{{$upload->name}}</a>
            <a href="#" class="orangelink">{{$upload->name}}</a>
            <a href="#" class="orangelink">{{$upload->name}}</a>
            <a href="#" class="orangelink">{{$upload->name}}</a>
            <a href="#" class="orangelink">{{$upload->name}}</a>
         </div>
      </div>--}}
