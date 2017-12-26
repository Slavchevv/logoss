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

                <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

            @endforeach

                <button type="button" class="btn btn-secondary alphabutton">B</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'B'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">C</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'C'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">D</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'D'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">E</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'E'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">F</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'F'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">G</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'G'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">H</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'H'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">L</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'L'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">M</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'M'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">N</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'N'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">O</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'O'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">P</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'P'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach


                <button type="button" class="btn btn-secondary alphabutton">Q</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'Q'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">R</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'R'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">S</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'S'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">T</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'T'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">U</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'U'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">V</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'V'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">W</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'W'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">X</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'X'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">Y</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'Y'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

                @endforeach

                <button type="button" class="btn btn-secondary alphabutton">Z</button>

                @php ($categoriesStartFromA = $categories->filter(function($i) { return starts_with($i->name, 'Z'); }))
                @foreach ($categoriesStartFromA as $category)

                    <p><a class="orangelink" href=/categories/{{$category->id}}">{{$category->name}}</a></p>

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