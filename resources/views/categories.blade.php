@extends('layouts.app')
@section('content')

    <div class="container">

        <div class="row">
            <div class="mx-auto col-lg-10 col-sm-10 col-md-10">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">

                        <li class="page-item"><a class="page-link" href="#">A</a></li>
                        <li class="page-item"><a class="page-link" href="#">B</a></li>
                        <li class="page-item"><a class="page-link" href="#">C</a></li>
                        <li class="page-item"><a class="page-link" href="#">D</a></li>
                        <li class="page-item"><a class="page-link" href="#">E</a></li>
                        <li class="page-item"><a class="page-link" href="#">F</a></li>
                        <li class="page-item"><a class="page-link" href="#">G</a></li>
                        <li class="page-item"><a class="page-link" href="#">H</a></li>
                        <li class="page-item"><a class="page-link" href="#">L</a></li>
                        <li class="page-item"><a class="page-link" href="#">M</a></li>
                        <li class="page-item"><a class="page-link" href="#">N</a></li>
                        <li class="page-item"><a class="page-link" href="#">O</a></li>
                        <li class="page-item"><a class="page-link" href="#">P</a></li>
                        <li class="page-item"><a class="page-link" href="#">Q</a></li>
                        <li class="page-item"><a class="page-link" href="#">R</a></li>
                        <li class="page-item"><a class="page-link" href="#">S</a></li>
                        <li class="page-item"><a class="page-link" href="#">T</a></li>
                        <li class="page-item"><a class="page-link" href="#">U</a></li>
                        <li class="page-item"><a class="page-link" href="#">V</a></li>
                        <li class="page-item"><a class="page-link" href="#">W</a></li>
                        <li class="page-item"><a class="page-link" href="#">X</a></li>
                        <li class="page-item"><a class="page-link" href="#">Y</a></li>
                        <li class="page-item"><a class="page-link" href="#">Z</a></li>

                    </ul>
                </nav>
            </div>

        </div>

    </div>

    <div class="container float-left containeralphabet">

        <div class="row">

            <div class="mx-auto col-lg-3 col-sm-3 col-md-3">


            <button type="button" class="btn btn-secondary alphabutton">A</button>

            @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'A'); }))
            @foreach ($categoriesStartFromA as $category)

                <p><a class="orangelink" href="">{{$category->name}}</a></p>

            @endforeach

                <button type="button" class="btn btn-secondary">B</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'B'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href="">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary">C</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'C'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href="">{{$category->name}}</a></p>

                @endforeach


            </div>
        </div>

    </div>






  {{--  @foreach($categories as $category)--}}

          {{--  <h3><a href="/uploads/{{$upload->id}}">{{$upload->name}}</a> </h3>
            <small>Written on {{$upload->created_at}}</small>

            @for ($i = 0; $i < count($athletes); $i++)
    // use $i as index
    // use $athletes[$i]
@endfor
--}}
  {{--count($categories)--}}
  {{--        @for ($i = 0; $i < count($categories); $i++)


              <h3><a href="">{{$categories[$i]->name}}</a></h3>



          @endfor--}}

    {{--@endforeach--}}

 {{-- @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'A'); }))
  @foreach ($categoriesStartFromA as $category)

      <h3><a href="">{{$category->name}}</a></h3>
      @endforeach--}}

{{--

  @foreach ('ABCDEFGHIJKLMNOPQRSTUVWXYZ' as $letter)
      @foreach ($categories->filter(function($i) use($letter) { return starts_with($i->name, $letter); }) as $category)
          {{ $category->name }}
      @endforeach
  @endforeach
--}}

@endsection