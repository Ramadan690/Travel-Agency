<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Online Bus ticket</title>
        <link rel="icon" type="{{ asset('images/logo3.png')}}" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ URL::asset('css/Main.css') }}" rel="stylesheet" />
          <script src="{{ URL::asset('headers_bootstrap/vendor/jquery/jquery.min.js') }}"></script>

    </head>
  



<style type="text/css">
:root {
  --surface-color: #fff;
  --curve: 20;
}

* {
  box-sizing: border-box;
}

body {
  font-family: 'Noto Sans JP', sans-serif;
  background-color: #fef8f8;
}

.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin: 4rem 5vw;
  padding: 0;
  list-style-type: none;

}

.card {
  position: relative;
  display: block;
  height: 100%;  
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
  
}

.card__image {      
  width: 100%;
  height: auto;
}

.card__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;      
  border-radius: calc(var(--curve) * 1px);    
  background-color: var(--surface-color);      
  transform: translateY(100%);
  transition: .2s ease-in-out;
}

.card:hover .card__overlay {
  transform: translateY(0);
}

.card__header {
  position: relative;
  display: flex;
  align-items: center;
  gap: 0.5em;
  padding: 0.5em;
  border-radius: calc(var(--curve) * 1px) 0 0 0;    
  background-color: var(--surface-color);
  transform: translateY(-100%);
  transition: .2s ease-in-out;


}

.card__arc {
  width: 80px;
  height: 80px;
  position: absolute;
  bottom: 100%;
  right: 0;      
  z-index: 1;
}

.card__arc path {
  fill: var(--surface-color);
  d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
}       

.card:hover .card__header {
  transform: translateY(0);
}

.card__thumb {
  flex-shrink: 0;
  width: 50px;
  height: 50px;      
  border-radius: 50%;      
}

.card__title {
  font-size: 0.8em;
  margin: 0 0 .3em;
  color: #6A515E;
}

.card__tagline {
  display: block;
  margin: 1em 0;
  font-family: "MockFlowFont";  
  font-size: .8em; 
  color: #D7BDCA;  
}

.card__status {
  font-size: .8em;
  color: black;
  background-color: yellow
}

.card__description {
  padding: 0 2em 2em;
  margin: 0;
  color: #D7BDCA;
  font-family: "MockFlowFont";   
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
}    
hr.style-four {
     border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}
</style>


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
                    <span style="font-size: 13px">Home/Buses ticket</span>
                        <center><h3>Online <B>Car</B> Rental</h3></center>
             <br>
    

<div class="input-group">
 

   <input type="text" class="form-control" placeholder="<?php if (isset($_GET['Company'])) {echo $_GET['Company'];}else{echo 'Name';}?>" id="Name" aria-label="Example text with button addon" aria-describedby="button-addon1">





  <select class="form-select" id="Package" >
    <option value="<?php if (isset($_GET['Package'])) {echo $_GET['Package'];}else{}?>">-<?php if (isset($_GET['Package'])) {echo $_GET['Package'];}else{}?>-</option>
          <option value="Langkawi Island">Langkawi Island</option>
          <option value="Perhentian Island">Perhentian Island</option>
          <option value="Penang">Penang</option>
          <option value="Kinabatangan">Kinabatangan</option>
          <option value="Mount Kinabalu">Mount Kinabalu</option>
          <option value="Sipadan Island">Sipadan Island</option>
          <option value="Pangkor Island">Pangkor Island</option>
          <option value="Redang Island">Redang Island</option>
          <option value="Manukan Island">Manukan Island</option>
          <option value="Johor Bahru">Johor Bahru</option>

  </select>





  <input type="date" class="form-input" id="Available" name="Checkout" style="margin-right: 12px; border:0.4px solid #989898;width: 200px;" value="<?php if (isset($_GET['CheckOut'])) {echo $_GET['CheckOut'];}else{}?>">



<button type="button" class="btn btn-success" style="border-radius: 10px;" onclick="changeurl()">Search <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>


<!-- Button trigger modal -->


<button type="button" class="btn btn-light" onclick="window.location.href = 'http://localhost:8000/TourBooking'" style="margin-left: 10px;border:1px solid black;border-radius: 10px;">Clear Filter</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
  <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
</svg> Filter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
      </div>
      <div class="modal-body">
        



<form>



<div class="input-group mb-3">
  <span class="input-group-text">RM</span><input type="Number" class="form-control" id="MIprice" placeholder="Min price" aria-label="Recipient's username" aria-describedby="basic-addon2" size="10" > <span class="input-group-text">RM</span><input type="Number" id="MAprice" class="form-control" placeholder="Max price" aria-label="Recipient's username" aria-describedby="basic-addon2" size="10">
  
</div>





</form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="changeurl()">Apply</button>
      </div>
    </div>
  </div>
</div>



</div>




<hr class="style-four">
- Results of Hotels Found. 


<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border:1px solid #989898;border-radius: 3px;float: right;border-radius: 10px;">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
  <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
</svg> Filter
</button>










<div class="container">

@foreach ($events as $event)


<?php
if(isset($_GET["Ref"])) {
 
 if($_GET["Ref"] == $event->Reference){
 echo "<style>.card{$event->Reference}{background-color:#EEF7CE}</style>";}

}
else{

}
?>



    

<div class="card" style="margin: 20px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('/storage/images/Events/'.$event->image)}}" class="img-fluid rounded-start" alt="...">
    </div>
        <div class="col-md-8">

  <div class="card-body">
    <h6 class="card-title">
      <a href="#"><B>{{$event->Title}}</B></a> ({{$event->Reference}})</h6>

    <h5 style="float: right;">Price : <B style="color: red">RM {{$event->price}}</B>/person</h5>

    <p class="card-text">

<table class="table table-light" style="font-size:13px">

<thead>
  <th>Reference</th>
  <th>Package</th>
  <th>Booking Starts</th>
  <th>Booking Ends</th>
  <th>Period</th>

</thead>


<tbody>
  <td>{{$event->Reference}}</td>
<td>{{$event->Package}}</td>
<td><b>{{$event->Start}}</b></td>
<td>{{$event->Ends}}</td>
<td>{{$event->period}}</td>

</tbody>

</table>

<div class="modal fade" id="seat{{$event->Reference}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rent : {{$event->Reference}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


   <h5>Tour to : <b>{{$event->Title}}</b></h5>
    
<hr>
Location : {{$event->Package}}
<hr>
Price : <B style="color: red">RM {{$event->price}}</B>/person
<hr>
<table class="table table-light">


<thead>
  <th>Reference</th>
  <th>Package</th>
  <th>Booking Starts</th>
  <th>Booking Ends</th>
  <th>Period</th>

</thead>


<tbody>
  <td>{{$event->Reference}}</td>
<td>{{$event->Package}}</td>
<td><b>{{$event->Start}}</b></td>
<td>{{$event->Ends}}</td>
<td>{{$event->period}}</td>

</tbody>

</table>



<div class="row">
  <div class="col-lg-6" >
    <div class="card">
      <div class="card-body">
       <img src="{{asset('/storage/images/Events/'.$event->image)}}" class="img-fluid rounded-start" alt="..." >  
for more details check here : <a href="https://www.klook.com/city/190-langkawi-things-to-do/">Click here for details https://www.klook.com/city/190-langkawi-things-to-do/</a>

      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        

<form method="get" id="Booking" onsubmit="return Booking{{$event->Reference}}(event)">
{{csrf_field()}}


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
  <label for="Email" class="form-label"> Number of person </label>
  <input type="Number" class="form-control" id="Number" name="Tel" value="1">
</div>

<div class="mb-3">
<label for="DOB" class="form-label"> Date of Birth </label>
  <input type="Date" class="form-control" id="DOB" name="DOB" placeholder="">
</div>


<div class="mb-3">
  <label for="Arrival" class="form-label">Arrival</label>
    <input type="Date" class="form-control" id="Arrival" name="Arrival" placeholder="" max="{{$event->Ends}}" min="{{$event->Start}}">
</div>

<div class="mb-3">
  <label for="Departure" class="form-label">Departure</label>
    <input type="Date" class="form-control" id="Departure" name="Departure" placeholder="" max="{{$event->Ends}}" min="{{$event->Start}}">
</div>

<div class="mb-3">
<button type="submit" class="btn btn-danger" >BOOK </button>
</div>

</form>


<script type="text/javascript">
  function Booking{{$event->Reference}}(e){
    e.preventDefault();

var name = $("#name").val();
var Email = $("#Email").val();
var DOB = $("#DOB").val();
var Arrival = $("#Arrival").val();
var Departure = $("#Departure").val();
var Tel = $("#Tel").val();
var number = $("#Number").val();

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

  $.ajax(
    {
        url: '{{route("TourBooking")}}',
        type: 'get',
        data: {
            "Title":'<?php echo $event->Title; ?>',
            "name": name,
            "price":'<?php echo $event->price; ?>',
            "Email": Email,
            "DOB": DOB,
            "Arrival":Arrival,
            "Departure":Departure,
            "Tel":Tel,
            "Number":number,

        },
        success: function (data){
            alert(data);

        },
        error: function (data) {
            },

    });

}



</script>


      </div>
    </div>
  </div>
</div>







      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



    </p>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#seat{{$event->Reference}}" style="font-size:12px">
 Book Now
</button>
  </div>
</div>
</div></div>


 <!-- Modal -->

   

@endforeach






</div>


























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



function changeurl(){

var count = "";
var name = document.getElementById("Name");
var Nvalue = name.value;

var package = document.getElementById("Package");
var Pvalue = package.value;

var available = document.getElementById("Available");
var Avalue = available.value;

var ma = document.getElementById("MAprice");
var MAvalue = ma.value;

var mi = document.getElementById("MIprice");
var MIvalue = mi.value;




if(Nvalue != ""){
count += "&Name="+Nvalue;
}

if(Pvalue != ""){
count += "&Package="+Pvalue;
}

if(Avalue != ""){
count += "&Available="+Avalue;
}


if(MAvalue != ""){
  if(MIvalue > MAvalue){
    count += "&MAprice="+MAvalue;
  }
  else{
count += "&MAprice="+MAvalue;}
}

if(MIvalue != ""){

  if(MAvalue != ""){
  if(MIvalue > MAvalue){
    count += "&MIprice="+MAvalue;
  }
  else{
count += "&MIprice="+MIvalue;}}
else{
count += "&MIprice="+MIvalue;
}}


 window.location.href = 'http://localhost:8000/TourBooking?'+count;

}

</script>



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