<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Logos</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!--header-->
    @include('inc.header')

</head>
<body>
@yield('content')


@section('scripts')


@endsection



<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
{{--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="{{ asset('js/logos.js') }}"></script>
{{--<script type="text/javascript" src="{{ asset('/js/logos.js') }}"></script>--}}
<script>

 /*   $(document).on('click','#btnSrch',function(){
        console.log("hi");
    });*/
    /*$(document).on('click','#btnSrch',function(){
      /!*  var data = "success";
        $.ajax({
            url: 'search-results',
            type: "get",
            data: {data : data},
            success: function(response){
                if(data == "success")
                    console.log(response);
            }
        });*!/

    });*/
/*

 $(".dropdown-item").click(function(e){
     //e.preventDefault();

     $("form").submit();

 });
*/

 $(".actiondrop").click(function(e){
     e.preventDefault();
     $(this).closest("form").submit();
 });
 $(".abth").click(function(e){
     var btnid='#'.concat($(this).text());
     console.log(btnid);
     var $btn = $(btnid);
     var divPosition = $btn.offset();
     $('html, body').animate({scrollTop: divPosition.top}, "slow");//this is working
     $btn.addClass("no-transition");
     $btn.effect( "highlight", {color:"#F7931D"}, 5000, function () {
         $btn.removeClass("no-transition");
     });
 });
 $(document).ready(function() {

         //e.preventDefault();
         //var input = $('#inputserver').val();

         /*$.ajax({
             type: "GET",
             url: './update-points',
                 data: { test: comments  },
             success: function (data) {
                 // data is your result from controller
                 if (data.success) {
                     alert(data.message);
                 }
             }
         });*/

         $.get('update-points',function (data) {
             console.log(data);
             $("#pointsspan").text(data);
         });

       /*  $.get('this-book-save',function (data) {
             console.log(data);
             $("#svd").text(data);
         })*/
    /* $("#svd").click(function(e){
         e.preventDefault();
         var data = $("#bksv").data().value;
         console.log(data);

         $.ajax({

             url: './save-book',
             data: {'id': data,'_token':'csrf_token()'  },
             type: 'POST',
             datatype: 'JSON',
             success: function (response) {
          /!*       if (response.status === true) {
                     console.log('success');
                 } else {
                     document.getElementById('errcallbackModalOtp').innerHTML = "Some error occured .. Please try again later";
//                        $('#errcallbackModalOtp').html('Some error occured .. Please try again later');
                 }*!/
             },
             error: function (response) {
                 /!*document.getElementById('errcallbackModalOtp').innerHTML = response.message;
//                    $('#errcallbackModalOtp').html(response.message);*!/
             }
         });

     });*/
     //console.log("abv");

 });
 //console.log("abv");
    /*suggestions*/

    /*suggestions*/



</script>
</body>


<footer class = "footer2">

    {{--@include('inc.footer')--}}

</footer>

</html>
