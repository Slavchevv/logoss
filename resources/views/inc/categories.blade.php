<div class="container catcols">
    <div class="row">
        <div class="col center-block text-center">
            <h2>Categories</h2>
           <ul>
               @foreach($categories as $category)

                   <li><a class="orangelink" href="#">{{$category->name}}</a></li>
                   {{--
                                               <div class="well">
                                                   <h3><a href="/uploads/{{$upload->id}}">{{$upload->name}}</a> </h3>
                                                   <small>Written on {{$upload->created_at}}</small>

                                               </div>
                   --}}
               @endforeach
               <li><strong><a class="orangelink" href="#">See more</a></strong></li>

           </ul>
        </div>
        <div class="col center-block text-center">
            <h2>Popular Books</h2>
            <ul>
                @foreach($uploads as $upload)

                    <li><a class="orangelink" href="#">{{$upload->name}}</a></li>

                @endforeach
                <li><strong><a class="orangelink" href="#">See more</a></strong></li>

            </ul>
        </div>
        <div class="col center-block text-center">
            <h2>Popular Authors</h2>
            <ul>
                @foreach($avtors as $avtor)

                    <li><a class="orangelink" href="#">{{$avtor->name}}</a></li>
                @endforeach
                <li><strong><a class="orangelink" href="#">See more</a></strong></li>

            </ul>
        </div>
    </div>
</div>
