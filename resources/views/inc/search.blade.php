<div class="container searchbox-wrapper">
    <div class="row">

<div class="container searchbox">
    <div class="row rowsb1 align-self-center">
        <h1 class="align-self-center logos text-white text-bold mx-auto" href="#">λ</h1>
    </div>
    <div class="row rowsb2">
        <div class="col-sm-7 mx-auto">
            {!! Form::open(['action'=>'HomeController@search', 'method'=>'POST']) !!}
            <div class="input-group stylish-input-group">

             {{--   <input type="text" class="form-control"  placeholder="Search" />--}}
                {{Form::text('search','',['class'=>'form-control','placeholder'=>'Search for books or documents'])}}
                <span class="input-group-addon">
              {{-- <button id = "btnSrch" type="submit">--}}
                    {{Form::button('<i class="fa fa-search" aria-hidden="true"></i>',['id'=>'btnSrch','type' => 'submit'])}}
             {{--  <span class="fa fa-search" aria-hidden="true"></span>--}}
              </button>
              </span>
            </div>
            {!! Form::close()!!}
            </div>

    </div>
</div>


    </div>
</div>