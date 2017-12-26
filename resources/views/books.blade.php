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

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'A'); }))

                @if(count($booksAlphabetical) > 0)
                <button type="button" class="btn btn-secondary alphabutton">A</button>



                @foreach ($booksAlphabetical as $book)

                    <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'B'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">B</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'C'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">C</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'D'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">D</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'E'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">E</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'F'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">F</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'G'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">G</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'H'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">H</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'L'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">L</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'M'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">M</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'N'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">N</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'O'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">O</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'P'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">P</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'Q'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">Q</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'R'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">R</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'S'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">S</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'T'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">T</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'U'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">U</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'V'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">V</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'W'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">W</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'X'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">X</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif

                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'Y'); }))

                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">Y</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif
                @php ($booksAlphabetical = $books->filter(function($i) { return starts_with($i->name, 'Z'); }))
                @if(count($booksAlphabetical) > 0)
                    <button type="button" class="btn btn-secondary alphabutton">Z</button>



                    @foreach ($booksAlphabetical as $book)

                        <p><a class="orangelink" href="/uploads/{{$book->id}}">{{$book->name}}</a></p>

                    @endforeach
                @endif



            </div>
        </div>

    </div>

@endsection