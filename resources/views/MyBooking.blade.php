<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Online Travel Booking</title>
        <link rel="icon" type="{{ asset('images/logo3.png')}}" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ URL::asset('css/Main.css') }}" rel="stylesheet" />
          <script src="{{ URL::asset('headers_bootstrap/vendor/jquery/jquery.min.js') }}"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"> 
<!-- datatable -->
<script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>


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

th{
  font-size: 15px;
}
td{
    font-size: 13px;

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
                    <span style="font-size: 13px">Home/Favorites</span>
                    <hr>
                        <center><h3>History of my booking</h3></center>
           


<div >

<div class="card" style="margin-top:20px">
  <h5 class="card-header">Booking</h5>
  <div class="card-body">
    <h5 class="card-title">Hotel Bookings</h5>

<table id="showHotelBookings" class="table table-sm" style="width:100%;">
        <thead>
            <tr>
                <th>Reference</th>
                <th class="Hotel">Hotel Name</th>
                <th class="Arrival">Arrival</th>
                <th class='Departure'>Departure</th>
                <th class="Name">Name</th>
                <th class="DOB">DOB</th>
                <th class="Email">Email</th>
                <th class="Tel">Tel</th>
                <th class="NumOfPerson">NumOfPerson</th>
                <th class="Status" >Status</th>
                <th class="action" ></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

  </div>
</div>


<div class="card" style="margin-top:20px">
  <h5 class="card-header">Booking</h5>
  <div class="card-body">
    <h5 class="card-title">Bus Bookings</h5>

<table id="showBusBookings" class="table table-sm" style="width:100%;">
        <thead>
            <tr>
                <th>Reference</th>
                <th class="Hotel">Bus company</th>
                <th class="Arrival">Pickup</th>
                <th class='Departure'>Dropoff</th>
                <th class="Name">status</th>
                <th class="action" ></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

  </div>
</div>






<div class="card" style="margin-top:20px">
  <h5 class="card-header">Booking</h5>
  <div class="card-body">
    <h5 class="card-title">Car Rental Bookings</h5>

<table id="showCarBookings" class="table table-sm" style="width:100%;">
        <thead>
            <tr>
                <th>Reference</th>
                <th class="Hotel">CarModel</th>
                <th class="Arrival">Name</th>
                <th class='Departure'>Email</th>
                <th class="Name">Pickup_date</th>
                <th class="action" >Return_date</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

  </div>
</div>









<div class="card" style="margin-top:20px">
  <h5 class="card-header">Booking</h5>
  <div class="card-body">
    <h5 class="card-title">Tour Bookings</h5>

<table id="showTourBookings" class="table table-sm" style="width:100%;">
        <thead>
            <tr>
                
                <th>Reference</th>
                <th class="Hotel">Tour</th>
                <th class="Arrival">Name</th>
                <th class='Departure'>Email</th>
                <th class="Name">Pickup_date</th>
                <th class="action" >Return_date</th>
                <th>price</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

  </div>
</div>











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



$(document).ready( function () {

$('#showHotelBookings').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": "{{ route('AllBooking')}}",
    "columns": [
   {"data" : "Reference"},
    {"data" : "Hotel_name"},
    {"data" : "checkIn"},
    {"data" : "checkOut"},
    {"data" : "Name"},
    {"data" : "DOB"},
     {"data" : "Email"},
    {"data" : "Tel"},
    {"data" : "Number_of_person"},
    {"data" : "status"},
 {"data": null,
  render: function ( data, type, row ) {
    return '<button type="button" name="show"  class="btn btn-primary btn-sm check" style="font-size:13px" onclick="PaymentHotel(`'+data['Reference']+'`,`'+data['Email']+'`,`'+data['Hotel_name']+'`,`'+data['checkIn']+'`,`'+data['checkOut']+'`,`'+data['Name']+'`,`'+data['DOB']+'`,`'+data['Tel']+'`,`'+data['Number_of_person']+'`,`'+data['status']+'`)">Pay</button> <button type="button" name="show"  class="btn btn-danger btn-sm check" style="font-size:13px" onclick="CancelHotel(`'+data['Reference']+'`)">Cancel</button>';
  }}
    ]

  })



$('#showBusBookings').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": "{{ route('AllBusBooking')}}",
    "columns": [
   {"data" : "Reference"},
    {"data" : "Bus_company"},
    {"data" : "Pickup"},
    {"data" : "Dropoff"},
    {"data" : "status"},
 {"data": null,
  render: function ( data, type, row ) {
    return '<button type="button" name="show"  class="btn btn-primary btn-sm check" style="font-size:13px" onclick="PaymentBus(`'+data['Reference']+'`)">Pay</button> <button type="button" name="show"  class="btn btn-danger btn-sm check" style="font-size:13px" onclick="CancelBus(`'+data['Reference']+'`)">Cancel</button>';
  }}
    ]

  })





$('#showCarBookings').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": "{{ route('AllCarBooking')}}",
    "columns": [
   {"data" : "Reference"},
    {"data" : "CarModel"},
    {"data" : "Name"},
    {"data" : "Email"},
    {"data" : "Pickup_date"},
    {"data" : "Return_date"},
    {"data" : "Status"},
 {"data": null,
  render: function ( data, type, row ) {
    return '<button type="button" name="show"  class="btn btn-primary btn-sm check" style="font-size:13px" onclick="PaymentCar(`'+data['Reference']+'`)">Pay</button> <button type="button" name="show"  class="btn btn-danger btn-sm check" style="font-size:13px" onclick="CancelCar(`'+data['Reference']+'`)">Cancel</button>';
  }}
    ]

  })





$('#showTourBookings').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": "{{ route('AllTourBooking')}}",
    "columns": [
   {"data" : "Reference"},
    {"data" : "Title"},
    {"data" : "Name"},
    {"data" : "Email"},
    {"data" : "Pickup_date"},
    {"data" : "Return_date"},
     {"data" : "price"},
    {"data" : "status"},
 {"data": null,
  render: function ( data, type, row ) {
    return '<button type="button" name="show"  class="btn btn-primary btn-sm check" style="font-size:13px" onclick="PaymentTour(`'+data['Reference']+'`)">Pay</button> <button type="button" name="show"  class="btn btn-danger btn-sm check" style="font-size:13px" onclick="CancelTour(`'+data['Reference']+'`)">Cancel</button>';
  }}
    ]

  })


});

//////////////////////////////////////////////////////////////////////////////////////////////////////

function CancelHotel(Matric){
   if (confirm('Are you sure you want to cancel this booking : '+Matric+' ?')) {
    $.ajax(
    {
        url: '{{route("DeleteBooking")}}',
        type: 'get',
        data: {
            "id": Matric,
        },
        success: function (result){
            alert(result);
            $('#showHotelBookings').DataTable().ajax.reload();  } }); }
}



function PaymentHotel(Matric,Email,Hotel_name,checkIn,checkOut,Name,DOB,Tel,Number_of_person,status){
  
    $.ajax(
    {
        url: '{{route("updateBooking")}}',
        type: 'get',
        data: {
            "HotelName":Hotel_name,
            "id": Matric,
            "name": Name,
            "Email": Email,
            "DOB": DOB,
            "NumberIn": Number_of_person,
            "Arrival":checkIn,
            "Departure":checkOut,
            "Tel":Tel,
            "status":status

        },
        success: function (result){
            alert(result);
            $('#showHotelBookings').DataTable().ajax.reload();  } }); 
    
}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////


function CancelBus(Matric){
   if (confirm('Are you sure you want to cancel this booking : '+Matric+' ?')) {
    $.ajax(
    {
        url: '{{route("DeleteBusBooking")}}',
        type: 'get',
        data: {
            "id": Matric,
        },
        success: function (result){
            alert(result);
            $('#showBusBookings').DataTable().ajax.reload();  } }); }
}



function PaymentBus(Matric){
  
    $.ajax(
    {
        url: '{{route("updateBusBooking")}}',
        type: 'get',
        data: {
            "id": Matric, 

        },
        success: function (result){
            alert(result);
            $('#showBusBookings').DataTable().ajax.reload();  } }); 
    
}




/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




function CancelCar(Matric){
   if (confirm('Are you sure you want to cancel this booking : '+Matric+' ?')) {
    $.ajax(
    {
        url: '{{route("DeleteCarBooking")}}',
        type: 'get',
        data: {
            "id": Matric,
        },
        success: function (result){
            alert(result);
            $('#showCarBookings').DataTable().ajax.reload();  } }); }
}



function PaymentCar(Matric){
  
    $.ajax(
    {
        url: '{{route("updateCarBooking")}}',
        type: 'get',
        data: {
            "id": Matric, 

        },
        success: function (result){
            alert(result);
            $('#showCarBookings').DataTable().ajax.reload();  } }); 
    
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////


function CancelTour(Matric){
   if (confirm('Are you sure you want to cancel this booking : '+Matric+' ?')) {
    $.ajax(
    {
        url: '{{route("DeleteTourBooking")}}',
        type: 'get',
        data: {
            "id": Matric,
        },
        success: function (result){
            alert(result);
            $('#showTourBookings').DataTable().ajax.reload();  } }); }
}



function PaymentTour(Matric){
  
    $.ajax(
    {
        url: '{{route("updateTourBooking")}}',
        type: 'get',
        data: {
            "id": Matric, 

        },
        success: function (result){
            alert(result);
            $('#showTourBookings').DataTable().ajax.reload();  } }); 
    
}




</script>


                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
     <
        <!-- Contact section-->
       <
        <!-- Footer-->
         <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">"This Real state web application soffers a comprehensive list of for-sale properties, as well as the information and tools to make informed real estate decisions. Today, more than ever, realtor.com® is The Home of Home Search℠"</p>
                <p class="m-0 text-center text-white">Copyright © 2022 City University of Malaysia All rights reserved. Powered by Abdifatah</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
    </body>
</html>
<script type="text/javascript">
      $(window).on('load', function () {
    $('#loading').fadeOut();
  }) ;
</script>