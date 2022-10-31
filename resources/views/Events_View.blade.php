<!DOCTYPE html>
<html ang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Online Travel Booking</title>
        <link rel="icon" type="{{ asset('images/logo3.png')}}" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ URL::asset('css/Main.css') }}" rel="stylesheet" />
          <script src="{{ URL::asset('headers_bootstrap/vendor/jquery/jquery.min.js') }}"></script>
          

    </head>
  



    <body id="page-top">


                            <div id="loading"></div>

        <!-- Navigation-->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top"><img src="{{ asset('images/logo3.png') }}" id="logo" width="120px" style="border-radius: 10px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        

\


                           @guest
                             <li class="nav-item"><a class="nav-link" href="{{route('main')}}">Home</a></li>
                           <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                              <li class="nav-item"><a class="nav-link" href="{{asset('/login')}}" style="color: white;">{{ __('Sign In') }}</a></li>

<script type="text/javascript">
    window.location = "http://localhost:8000/login";
</script>
                            
                           
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{route('main')}}">Home</a></li>
                         <li class="nav-item"><a class="nav-link" href="{{route('events')}}" > Hotels </a></li>
                         <li class="nav-item"><a class="nav-link" href="{{route('Busticket')}}" > Bus-ticket </a></li>
                         <li class="nav-item"><a class="nav-link" href="{{route('CarRent')}}" > Car-Rental </a></li>
                         <li class="nav-item"><a class="nav-link" href="{{route('Tour')}}" > Travel-tour</a></li>

                         <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('PropertyVFavorites')}}">Favorites</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('MyBooking')}}">My Bookings</a></li>
                                                <li class="nav-item"><a class="nav-link" href="{{route('profileMain')}}">Profile</a></li>



                               <li class="nav-item"><a class="nav-link" href="{{asset('/login')}}" style="color: white;"> 
                                  <?php 

                                 $var = preg_split('/[\s,]+/', Auth::user()->name, 3);
                                 echo $var[0]." ".$var[1];

                                 ?></a></li>
                             
                           
                        @endguest


</a> 
                        </li>

<li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">

                           @guest
                                {{ __('') }}</a>
                            
                           
                        @else
                      
                                
                          <span style="font-size: 13px">  LogOut </span> 
                             
                           
                        @endguest
</a>
                        </li>




                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->

       
        <!-- About section-->
        <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-15">
                    <span style="font-size: 13px;color: green">Home/Property</span>
                        <center><h5>Booking Hotel</h5></center>
           

<br>




<ul class="cards">










@foreach ($events as $event)



<?php
if(isset($_GET["Ref"])) {
 
 if($_GET["Ref"] == $event->Reference){
 echo "<style>.card{$event->Reference}{background-color:#EEF7CE}</style>";}

}
else{

}
?>





<div class="card-group">



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center><img src="{{asset('/storage/images/Events/'.$event->image)}}" class="img-fluid rounded" alt="Responsive image" id="pro"></center>
      </div>
    
    </div>
  </div>
</div>


<div class="card " style="border-radius: 10px;margin-right: 7px">
   <div class="card-header">
    <Center>Image</Center>
  </div>
      <div class="card-body" style="background-color: #4b4f4e;">
       <CENTER><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('/storage/images/Events/'.$event->image)}}" class="img-fluid rounded" alt="Responsive image" id="pro"></a></CENTER>
      </div>
 <div class="card-footer text-muted">
    <Center>{{$event->updated_at}}</Center>
  </div>
    </div>


<div class="card" style="border-radius: 10px">
  <div class="card-header" >
   <Center> Hotel room details</Center>
  </div>
      <div class="card-body" >
        <h5 class="card-title"><b>{{ $event->E_title}}</b> , {{ $event->City }} 
          
         
         <a href="#" id="saved"><span style="float:right;font-size: 16px" class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg> save</span></a> 



<script>
  $("#saved").click(function(e) {

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

    $.ajax({
        type: "get",
        url: "{{route('PropertySave')}}",
        data: { 
            Ref: "{{$event->Reference}}",
            UserRef: "<?php echo Auth::user()->Reference; ?>", 
        },
        success: function(result) {
            alert(result);
        },
        error: function(result) {
            alert(result);
        }
    });
});

</script>



</h5> 

        <p class="card-text text-muted">{{ $event->Street_Address }}, ( <B>{{ $event->State }} </B>) <br> 
         <H4> <?php echo "For RM".$event->price." per night"; ?></H4></p>
<hr>
        <p class="card-text ">
          
          Bedroom : <span class="badge bg-dark" style="float: right">{{ $event->bedroom}}</span><br>
           Bathroom : <span class="badge bg-dark"style="float: right">{{ $event->bathroom}}</span><br>
           Build-Up : <span class="badge bg-dark"style="float: right">{{ $event->sqft}} Sq.ft</span><br>
           Hotel stars: <span style="float: right"><?php $i=0; $n = $event->build_year;for($i=0;$i<$n;$i++){
            echo "<img src='https://thumbs.dreamstime.com/b/vector-gold-star-icon-gray-background-80558761.jpg' width='20px'>";}?></span><br>
        </p>
<hr>
<p class="card-text ">
  Reference ID : <span class="badge bg-primary"style="float: right">{{$event->Reference}}</span><br>
  Capacity : <span class="badge bg-success"style="float: right">{{$event->Categorie}}</span><br>
  Furnishing : <span class="badge bg-danger"style="float: right">{{$event->Furnishing}}</span><br>
  Tenure : <span class="badge bg-danger"style="float: right">Freehold</span>
</p>
<center><a href="#Booking" class="btn btn-danger" >Booking Form</a></center>
      </div>
      <div class="card-footer">
      <Center><small class="text-muted">Updated on : {{$event->updated_at}}</small></Center>
    </div>
    </div>
</div>







<div class="card-group">

<div class="card text-center" style="margin-top: 20px;border-radius: 10px;margin-right: 7px"; >
  <div class="card-header">
    Map
  </div>
  <div class="card-body" style="background-color: #4b4f4e">
    
    <p class="card-text">

<Center><iframe width="550" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" alt="Responsive image" src="https://maps.google.it/maps?q=<?php echo $event->Street_Address; ?>&output=embed" class="rounded"></iframe></Center>

    </p>
  </div>
  <div class="card-footer text-muted">
    {{$event->updated_at}}
  </div>
</div>



<div class="card" style="margin-top: 20px;border-radius: 10px">
  <div class="card-header text-center">
    Other details
  </div>
  <div class="card-body">
    <p class="card-text">

<B>Details :</B><br><br>
-{{$event->about}}
<hr>
    <p class="card-text">

Agent ID : <span style="float: right"> {{$event->postor}}</span><br>
Pro : <span style="float: right"> Private advisor</span>

 <center> <a href="#" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg> (+60) 03-45474 </a>

</center>

    </p>

    </p>

  </div>
  <div class="card-footer text-muted">
    <Center>{{$event->updated_at}}</Center>
  </div>
</div>



</div>


    




<div class="card-group">


<div class="card" style="margin-top: 20px;border-radius: 10px;background-color: #C8C8C8;">
  <div class="card-header text-center">
    BOOK NOW
  </div>
  <div class="card-body">

  





<Center><div class="card" style="max-width: 28rem;background-color:WHITE;border-radius: 50px;">
  <div class="card-body">
    <img src="data:image/png;base64,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" width="100">
    <h5 class="card-title">Intersted in this hotel?</h5>
<hr>

 <form method="POST" id="Booking" onsubmit="return Booking(event)">
{{csrf_field()}}

<div class="mb-3">
  <input type="text" class="form-control" name="ref" id="ref" placeholder="" value="{{$event->postor}}" readonly></div>

<div class="mb-3">
<label for="name" class="form-label"> Full Name </label><br>
  <input type="text" class="form-control" name="name" id="name" placeholder=""></div>

<div class="mb-3">
  <label for="Email" class="form-label"> Email </label>
  <input type="email" class="form-control" id="Email" name="Email" placeholder="name@example.com">
</div>


<div class="mb-3">
  <label for="Email" class="form-label"> Tel </label>
  <input type="Number" class="form-control" id="Tel" name="Tel" placeholder="">
</div>

<div class="mb-3">
<label for="DOB" class="form-label"> Date of Birth </label>
  <input type="Date" class="form-control" id="DOB" name="DOB" placeholder="">
</div>

<div class="mb-3">
<label for="Number" class="form-label">Number of individual </label>
  <input type="number" class="form-control" id="NumberIn" name="NumberIn" placeholder="">
</div>

<div class="mb-3">
  <label for="Arrival" class="form-label">Arrival</label>
    <input type="Date" class="form-control" id="Arrival" name="Arrival" placeholder="">
</div>

<div class="mb-3">
  <label for="Departure" class="form-label">Departure</label>
    <input type="Date" class="form-control" id="Departure" name="Departure" placeholder="">
</div>

<div class="mb-3">
<button type="submit" class="btn btn-danger" >BOOK </button>
</div>

</form>


  </div>
</div>

</Center>



  </div>
  <div class="card-footer text-muted">
    <Center>{{$event->updated_at}}</Center>
  </div>
</div>














<div class="card" style="margin-top: 20px;border-radius: 10px">
  <div class="card-header text-center">
    Ask fo Enquires
  </div>
  <div class="card-body">

  





<Center><div class="card " style="max-width: 28rem;">

  <div class="card-body">
<img src="https://icon-library.com/images/inquiry-icon/inquiry-icon-9.jpg" width="100">
    <h5 class="card-title">Enquires Request</h5>

<hr>

 <form method="POST" id="feedback" onsubmit="return mySubmitFunction(event)">
{{csrf_field()}}

<div class="mb-3">
  <input type="text" class="form-control" name="ref" id="ref" placeholder="" value="{{$event->postor}}" readonly></div>

<div class="mb-3">
<label for="name" class="form-label">From : Full Name </label><br>
  <input type="text" class="form-control" name="name" id="names" placeholder=""></div>

<div class="mb-3">
  <label for="Email" class="form-label"> Email </label>
  <input type="email" class="form-control" id="Email" name="Emails" placeholder="name@example.com">
</div>

<div class="mb-3">
<label for="Objects" class="form-label"> Object </label>
  <input type="text" class="form-control" id="Objects" name="Objects" placeholder="">
</div>

<div class="mb-3">
  <label for="Message" class="form-label">Message</label>
  <textarea class="form-control" id="Message" name="Messages" rows="3"></textarea>
</div>

<div class="mb-3">
<button type="submit" class="btn btn-primary" >Send</button>
</div>

</form>


  </div>
</div>

</Center>



  </div>
  <div class="card-footer text-muted">
    <Center>{{$event->updated_at}}</Center>
  </div>
</div>























</div>



@endforeach
























    <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}





function mySubmitFunction(e){
    e.preventDefault();


var name = $("#names").val();
var ref = $("#ref").val();
var Email = $("#Emails").val();
var Objects = $("#Objects").val();
var Message = $("#Messages").val();


$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

  $.ajax(
    {
        url: '{{route("SendFeedbacks")}}',
        type: 'get',
        data: {
            "name": name,
            "ref": ref,
            "Email": Email,
            "Objects": Objects,
            "Message": Message,
        },
        success: function (data){
            alert(data);
            $('#feedback').trigger("reset");

        },
        error: function (data) {
            },

    });

}


function Booking(e){
    e.preventDefault();

var name = $("#name").val();
var ref = $("#ref").val();
var Email = $("#Email").val();
var DOB = $("#DOB").val();
var NumberIn = $("#NumberIn").val();
var Arrival = $("#Arrival").val();
var Departure = $("#Departure").val();
var Tel = $("#Tel").val();

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

  $.ajax(
    {
        url: '{{route("HotelBooking")}}',
        type: 'get',
        data: {
            "HotelName":'<?php echo $event->E_title; ?>',
            "name": name,
            "ref": ref,
            "Email": Email,
            "DOB": DOB,
            "NumberIn": NumberIn,
            "Arrival":Arrival,
            "Departure":Departure,
            "Tel":Tel,

        },
        success: function (data){
            alert(data);

        },
        error: function (data) {
            },

    });

}



</script>

</ul>


                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
     
        <!-- Contact section-->
       
        <!-- Footer-->
         <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">"This Real state web application soffers a comprehensive list of for-sale properties, as well as the information and tools to make informed real estate decisions. Today, more than ever, realtor.com® is The Home of Home Search℠"</p>
                <p class="m-0 text-center text-white">Copyright © 2022 City University of Malaysia All rights reserved. Powered by Abdifatah</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ URL::asset('js/Main.css') }}"></script>
    </body>
</html>
<script type="text/javascript">
      $(window).on('load', function () {
    $('#loading').fadeOut();
  }) ;
</script>