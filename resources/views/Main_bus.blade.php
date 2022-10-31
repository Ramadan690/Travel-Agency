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
                        <center><h3>Online <B>Bus</B> ticket</h3></center>
             <br>
    

<div class="input-group">
 
 <div class="input-group-prepend" style="border:1px solid #989898;">
    <span class="input-group-text" id="">Pick-up</span>
  </div>
  <select class="form-select" id="inputGroupSelect02"  style="margin-right: 12px; border:1px solid #989898;border-radius: 10px;">
    <option value="<?php if (isset($_GET['State'])) {echo $_GET['State'];}else{}?>">-<?php if (isset($_GET['State'])) {echo $_GET['State'];}else{}?>-</option>
          <option value="Shah Alam">Shah Alam</option>
<option value="Sarawak">Sarawak</option>
<option value="Kajang">Kajang</option>
<option value="Sepang">Sepang</option>
<option value="Shah Alam">Kuala Lumpur</option>
<option value="Ampang">Ampang</option>
<option value="Bagan Pulau Ketam">Bagan Pulau Ketam</option>
<option value="Banting">Banting</option>
    <option value="Batang Berjuntai">Batang Berjuntai</option>
    <option value="Batu Arang">Batu Arang</option>
    <option value="Jenjarum">Jenjarum</option>
    <option value="Kampong Baharu Balakong">Kampong Baharu Balakong</option>
    <option value="Kampung Baru Subang">Kampung Baru Subang</option>
    <option value="Kampung Tanjung Karang">Kampung Tanjung Karang</option>
    <option value="Klang">Klang</option>
    <option value="Kuala Selangor">Kuala Selangor</option>
    <option value="Kuang">Kuang</option>
    <option value="Ladang Seri Kundang">Ladang Seri Kundang</option>
    <option value="Pelabuhan Klang">Pelabuhan Klang</option>
    <option value="Petaling Jaya">Petaling Jaya</option>
    <option value="Putra Heights">Putra Heights</option>
    <option value="Rawang">Rawang</option>
    <option value="Semenyih">Semenyih</option>
    <option value="Serendah">Serendah</option>
    <option value="Shah Alam">Shah Alam</option>
    <option value="Subang Jaya">Subang Jaya</option>
    <option value="Sungai Besar">Sungai Besar</option>
    <option value="Sungai Pelek New Village">Sungai Pelek New Village</option>
    <option value="Tanjung Sepat">Tanjung Sepat</option>
    <option value="">Select City</option>
    <option value="Bandar Labuan">Bandar Labuan</option>
    <option value="Beaufort">Beaufort</option>
    <option value="Donggongon">Donggongon</option>
    <option value="Keningau">Keningau</option>
    <option value="Kinarut">Kinarut</option>
    <option value="Kota Belud">Kota Belud</option>
    <option value="Kota Kinabalu">Kota Kinabalu</option>
    <option value="Kudat">Kudat</option>
    <option value="Lahad Datu">Lahad Datu</option>
    <option value="Papar">Papar</option>
    <option value="Putatan">Putatan</option>
    <option value="Ranau">Ranau</option>
    <option value="Sandakan">Sandakan</option>
    <option value="Semporna">Semporna</option>
    <option value="Taman Rajawali">Taman Rajawali</option>
    <option value="Tawau">Tawau</option>
  </select>


 <div class="input-group-prepend" style="border:1px solid #989898;">
    <span class="input-group-text" id="">Dropoff</span>
  </div>
  <select  class="form-select" id="citySelect" style="margin-right: 12px; border:1px solid #989898;border-radius: 10px;">
    <option value="<?php if (isset($_GET['City'])) {echo $_GET['City'];}else{}?>">-<?php if (isset($_GET['City'])) {echo $_GET['City'];}else{}?>-</option>
    <option value="Shah Alam">Shah Alam</option>
<option value="Sarawak">Sarawak</option>
<option value="Kajang">Kajang</option>
<option value="Sepang">Sepang</option>
<option value="Shah Alam">Kuala Lumpur</option>
<option value="Ampang">Ampang</option>
<option value="Bagan Pulau Ketam">Bagan Pulau Ketam</option>
<option value="Banting">Banting</option>
    <option value="Batang Berjuntai">Batang Berjuntai</option>
    <option value="Batu Arang">Batu Arang</option>
    <option value="Jenjarum">Jenjarum</option>
    <option value="Kampong Baharu Balakong">Kampong Baharu Balakong</option>
    <option value="Kampung Baru Subang">Kampung Baru Subang</option>
    <option value="Kampung Tanjung Karang">Kampung Tanjung Karang</option>
    <option value="Klang">Klang</option>
    <option value="Kuala Selangor">Kuala Selangor</option>
    <option value="Kuang">Kuang</option>
    <option value="Ladang Seri Kundang">Ladang Seri Kundang</option>
    <option value="Pelabuhan Klang">Pelabuhan Klang</option>
    <option value="Petaling Jaya">Petaling Jaya</option>
    <option value="Putra Heights">Putra Heights</option>
    <option value="Rawang">Rawang</option>
    <option value="Semenyih">Semenyih</option>
    <option value="Serendah">Serendah</option>
    <option value="Shah Alam">Shah Alam</option>
    <option value="Subang Jaya">Subang Jaya</option>
    <option value="Sungai Besar">Sungai Besar</option>
    <option value="Sungai Pelek New Village">Sungai Pelek New Village</option>
    <option value="Tanjung Sepat">Tanjung Sepat</option>
    <option value="">Select City</option>
    <option value="Bandar Labuan">Bandar Labuan</option>
    <option value="Beaufort">Beaufort</option>
    <option value="Donggongon">Donggongon</option>
    <option value="Keningau">Keningau</option>
    <option value="Kinarut">Kinarut</option>
    <option value="Kota Belud">Kota Belud</option>
    <option value="Kota Kinabalu">Kota Kinabalu</option>
    <option value="Kudat">Kudat</option>
    <option value="Lahad Datu">Lahad Datu</option>
    <option value="Papar">Papar</option>
    <option value="Putatan">Putatan</option>
    <option value="Ranau">Ranau</option>
    <option value="Sandakan">Sandakan</option>
    <option value="Semporna">Semporna</option>
    <option value="Taman Rajawali">Taman Rajawali</option>
    <option value="Tawau">Tawau</option>
  </select>


  <input type="date" class="form-input" id="Checkin" name="Checkin" style="margin-right: 12px; border:1px solid #989898;width: 200px;border-radius: 10px;" value="<?php if (isset($_GET['CheckIn'])) {echo $_GET['CheckIn'];}else{}?>">

  <input type="date" class="form-input" id="Checkout" name="Checkout" style="margin-right: 12px; border:1px solid #989898;width: 200px;border-radius: 10px;" value="<?php if (isset($_GET['CheckOut'])) {echo $_GET['CheckOut'];}else{}?>">



<button type="button" class="btn btn-success" style="border-radius: 10px;" onclick="changeurl()">Search <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>


<!-- Button trigger modal -->


<button type="button" class="btn btn-light" onclick="window.location.href = 'http://localhost:8000/BusTicket'" style="margin-left: 10px;border:1px solid black;border-radius: 10px;">Clear Filter</button>


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
<input type="text" class="form-control" placeholder="Place" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled="" >
</div>

<div class="input-group mb-3">
 <select class="form-select" id="type">
    <option value="<?php if (isset($_GET['Type'])) {echo $_GET['Type'];}else{}?>" selected>-<?php if (isset($_GET['Type'])) {echo $_GET['Type'];}else{echo "Bus company name"; }?>-</option>
    <option value="Maraliner" >Maraliner</option>
    <option value="City Express">City Express</option>
    <option value="KKKL Express">KKKL Express</option>
    <option value="707 - Inc">707 - Inc</option>

  </select>
</div>


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
  <div class="card-header">
    Company : <b>{{$event->Bus_company}}</b>
  </div>
  <div class="card-body">
    <h6 class="card-title"><img src="https://findicons.com/files/icons/914/cemagraphics/256/travel_bus.png" width="50px"> <B>{{$event->Reference}}</B></h6>

    <h5 style="float: right;">Price : RM {{$event->price}}</h5>

    <p class="card-text">

<table class="table table-light" style="font-size:13px">

<thead>
  <th>Reference</th>
  <th>Departure_time</th>
  <th>Arrival_time</th>
  <th>duration</th>
  <th>pickup </th>
  <th>destination</th>
  <th>avalable_seat</th>

</thead>


<tbody>
  <td>{{$event->Reference}}</td>
<td>{{$event->Departure_time}}</td>
<td>{{$event->Arrival_time}}</td>
<td>{{$event->duration}}</td>
<td>{{$event->pickup}}</td>
<td>{{$event->destination}}</td>
<td>{{$event->avalable_seat}}</td>
</tbody>

</table>

<div class="modal fade" id="seat{{$event->Reference}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Purshase a ticket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


   <h5>Company : <b>{{$event->Bus_company}}</b></h5>
    
<hr>
Date : {{$event->Date}}
<hr>
Price : RM {{$event->price}}
<hr>
<table class="table table-light">

<thead>
  <th>Reference</th>
  <th>Departure_time</th>
  <th>Arrival_time</th>
  <th>duration</th>
  <th>pickup </th>
  <th>destination</th>
  <th>avalable_seat</th>

</thead>

<tbody>
  <td>{{$event->Reference}}</td>
<td>{{$event->Departure_time}}</td>
<td>{{$event->Arrival_time}}</td>
<td>{{$event->duration}}</td>
<td>{{$event->pickup}}</td>
<td>{{$event->destination}}</td>
<td>{{$event->avalable_seat}}</td>
</tbody>

</table>



<div class="row">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
       <img src="{{ asset('images/seat.png') }}" width="300px">  

      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        


  <span class="input-group-text">Select Seat Number</span>
 <select class="form-select" id="seat"><?php for($i=1; $i<=$event->avalable_seat; $i++){ ?> <option value='<?php echo $i; ?>'> <?php echo $i; ?> </option> <?php } ?></select> 






      </div>
    </div>
  </div>
</div>







      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" onclick="Booking('{{$event->Bus_company}}','{{$event->pickup}}','{{$event->destination}}',)">BOOK</button>
      </div>
    </div>
  </div>
</div>



    </p>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#seat{{$event->Reference}}" style="font-size:12px">
 view seat
</button>
  </div>

</div>


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
var state = document.getElementById("inputGroupSelect02");
var Svalue = state.value;

var city = document.getElementById("citySelect");
var Cvalue = city.value;


var checkin = document.getElementById("Checkin");
var Checkvalue = checkin.value;

var checkout = document.getElementById("Checkout");
var CheckOutvalue = checkout.value;



var type = document.getElementById("type");
var Tvalue = type.value;


var ma = document.getElementById("MAprice");
var MAvalue = ma.value;

var mi = document.getElementById("MIprice");
var MIvalue = mi.value;




if(Svalue != ""){
count += "&State="+Svalue;
}

if(Cvalue != ""){
count += "&City="+Cvalue;
}

if(Tvalue != ""){
count += "&Type="+Tvalue;
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




if(Checkvalue != ""){
count += "&CheckIn="+Checkvalue;
}

if(CheckOutvalue != ""){
count += "&CheckOut="+CheckOutvalue;
}

 window.location.href = 'http://localhost:8000/BusTicket?'+count;

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





   
function Booking(Bus_company,pickup,destination){


$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

  $.ajax(
    {
        url: '{{route("BusBooking")}}',
        type: 'get',
        data: {
            "Bus_company": Bus_company,
            "pickup": pickup,
            "destination": destination,

        },
        success: function (data){
            alert(data);

        },
        error: function (data) {
            },

    });

}










</script>