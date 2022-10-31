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
        <section id="about" style="background-color:yellow;">
            <div class="container px-4" style="background-color:yellow;">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-15">
                    <span style="font-size: 13px">Home/Hotels</span>
                        <center><h3>Find the <B>best</B> Hotel</h3></center>
             <br>
    

<div class="input-group">
 
 <div class="input-group-prepend" style="border:1px solid #989898;">
    <span class="input-group-text" id="">State</span>
  </div>
  <select class="form-select" id="inputGroupSelect02" onchange="makeSubmenu(this.value)" style="margin-right: 12px; border:1px solid #989898;border-radius: 10px;">
    <option value="<?php if (isset($_GET['State'])) {echo $_GET['State'];}else{}?>">-<?php if (isset($_GET['State'])) {echo $_GET['State'];}else{}?>-</option>
     <option value="Johor">Johor</option>
      <option value="Kedah">Kedah</option>
      <option value="Kelantan">Kelantan</option>
      <option value="Labuan">Labuan</option>
      <option value="Melaka">Melaka</option>
      <option value="Negeri_Sembilan">Negeri Sembilan</option>
      <option value="Kuala_Lumpur">Kuala Lumpur</option>
      <option value="Pahang">Pahang</option>
      <option value="Penang">Penang</option>
      <option value="Perak">Perak</option>
      <option value="Perlis">Perlis</option>
      <option value="Putrajaya">Putrajaya</option>
      <option value="Sabah">Sabah</option>
      <option value="Sarawak">Sarawak</option>
      <option value="Selangor">Selangor</option>
      <option value="Terengganu">Terengganu</option>
  </select>


 <div class="input-group-prepend" style="border:1px solid #989898;">
    <span class="input-group-text" id="">City</span>
  </div>
  <select  class="form-select" id="citySelect" style="margin-right: 12px; border:1px solid #989898;border-radius: 10px;">
    <option value="<?php if (isset($_GET['City'])) {echo $_GET['City'];}else{}?>">-<?php if (isset($_GET['City'])) {echo $_GET['City'];}else{}?>-</option>
  </select>


  <input type="date" class="form-input" id="Checkin" name="Checkin" style="margin-right: 12px; border:1px solid #989898;width: 200px;border-radius: 10px;" value="<?php if (isset($_GET['CheckIn'])) {echo $_GET['CheckIn'];}else{}?>">

  <input type="date" class="form-input" id="Checkout" name="Checkout" style="margin-right: 12px; border:1px solid #989898;width: 200px;border-radius: 10px;">



<button type="button" class="btn btn-success" style="border-radius: 10px;" onclick="changeurl()">Search <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>


<!-- Button trigger modal -->


<button type="button" class="btn btn-light" onclick="window.location.href = 'http://localhost:8000/Events'" style="margin-left: 10px;border:1px solid black;border-radius: 10px;">All Hotels</button>


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
    <option value="<?php if (isset($_GET['Type'])) {echo $_GET['Type'];}else{}?>" selected>-<?php if (isset($_GET['Type'])) {echo $_GET['Type'];}else{}?>-</option>
    <option value="Hotel room" >Hotel room</option>
    <option value="Apartment">Apartment</option>

  </select>
</div>

<div class="input-group mb-3">
 <select class="form-select" id="Categorie">
  <option value="<?php if (isset($_GET['Categorie'])) {echo $_GET['Categorie'];}else{}?>" selected>-<?php if (isset($_GET['Categorie'])) {echo $_GET['Categorie'];}else{}?>-</option>
    <option value="1 person">1 person</option>
    <option value="2 person">2 person</option>
    <option value="3 person">3 person</option>
    <option value="+4 person">+4 person</option>

  </select>
</div>

<div class="input-group mb-3">
  <span class="input-group-text">RM</span><input type="Number" class="form-control" id="MIprice" placeholder="Min price" aria-label="Recipient's username" aria-describedby="basic-addon2" size="10" > <span class="input-group-text">RM</span><input type="Number" id="MAprice" class="form-control" placeholder="Max price" aria-label="Recipient's username" aria-describedby="basic-addon2" size="10">
  
</div>


<div class="input-group mb-3">
  <span class="input-group-text">Bedroom</span>
 <select class="form-select" id="Bedroom">
  <option value="<?php if (isset($_GET['Bedroom'])) {echo $_GET['Bedroom'];}else{}?>" selected>-<?php if (isset($_GET['Bedroom'])) {echo $_GET['Bedroom'];}else{}?>-</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
</div>
<div class="input-group mb-3">
  <span class="input-group-text">Bathroom</span>
 <select class="form-select" id="Bathroom">
    <option value="<?php if (isset($_GET['Bathroom'])) {echo $_GET['Bathroom'];}else{}?>" selected>-<?php if (isset($_GET['Bathroom'])) {echo $_GET['Bathroom'];}else{}?>-</option>
    <option value="1" >1</option>
    <option value="2">2</option>
    <option value="3">3</option>

  </select>
</div>

<div class="input-group mb-3">
  <span class="input-group-text">Furnishing</span>
 <select class="form-select" id="Furnishing">
    <option value="<?php if (isset($_GET['Furnishing'])) {echo $_GET['Furnishing'];}else{}?>" selected>-<?php if (isset($_GET['Furnishing'])) {echo $_GET['Furnishing'];}else{}?>-</option>
    <option value="Not Furnished" >Not Furnished</option>
    <option value="Fully Furnished">Fully Furnished</option>
    <option value="Partially Furnished">Partially Furnished</option>

  </select>
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


  <li style="width: 400px">
    <a href="{{route('PropertyV',['id'=>$event->Reference])}}" class="card card{{$event->Reference}}">
      
     <img class="card-img-top imga" src="{{asset('/storage/images/Events/'.$event->image)}}" alt="Card image cap" id="output" width="50" >
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="https://cdn-icons-png.flaticon.com/512/4298/4298373.png" alt="" />
          <div class="card__header-text">
            <h3 class="card__title"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
</svg> <b>{{ $event->E_title}}</b> ( {{ $event->City }},{{ $event->State }} )

<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
$scall = strtotime(date('Y-m-d H:i:s')) - strtotime($event->updated_at);
if($scall < 30000){echo " <img src='https://static.wixstatic.com/media/ab448a_db8fad17f50f4329887ead34d58752d2~mv2.gif' width='28px' style='float:right'>";}else{};?>


</span></h3>            
            <span class="card__status badge "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
  <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
  <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
</svg> 
RM {{ $event->price}}


</span>



 <span style="font-size: 12px;color: red"><b>per Night</b>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upc-scan" viewBox="0 0 16 16">
  <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"/>
</svg>


<?php 
$i=0; 
$n = $event->build_year;
for($i=0;$i<$n;$i++){
echo "<img src='https://thumbs.dreamstime.com/b/vector-gold-star-icon-gray-background-80558761.jpg' width='20px' style='float:right'>";
} ?>
 </span>



          </div>
        </div>
       
        <p class="card__description" style="color: black"><b>Build-up :</b> {{ $event->sqft}} Sq.ft; <br>
<b>Bedroom :</b> {{ $event->bedroom}} ;<br>
<b>Bathroom :</b> {{ $event->bathroom}}<br>
<b>stars :</b> <?php 
$i=0; 
$n = $event->build_year;
for($i=0;$i<$n;$i++){
echo "<img src='https://thumbs.dreamstime.com/b/vector-gold-star-icon-gray-background-80558761.jpg' width='20px'>";
} ?>

<CENTER><span class="badge rounded-pill bg-primary">{{ $event->Categorie }}</span>
<span class="badge rounded-pill bg-warning">{{ $event->Furnishing }}</span>
<span class="badge rounded-pill bg-light text-dark">
  {{ $event->Type}}
</CENTER>
        </p>
      </div>
    </a>      
  </li>    

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


var citiesByState = {
Johor: ["Bhubaneswar","Puri","Cuttack"],
Kuala_Lumpur: ["KL","Pune","Nagpur"],
Selangor: ["Kajang","Sepang"]
}

function makeSubmenu(value) {
if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
else {
var citiesOptions = "";
for(cityId in citiesByState[value]) {
citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
}
document.getElementById("citySelect").innerHTML = '<option value="">Choose a City</option>'+citiesOptions;
}
}



function changeurl(){

var count = "";
var state = document.getElementById("inputGroupSelect02");
var Svalue = state.value;

var city = document.getElementById("citySelect");
var Cvalue = city.value;

var type = document.getElementById("type");
var Tvalue = type.value;

var categorie = document.getElementById("Categorie");
var Gvalue = categorie.value;

var ma = document.getElementById("MAprice");
var MAvalue = ma.value;

var mi = document.getElementById("MIprice");
var MIvalue = mi.value;

var bedroom = document.getElementById("Bedroom");
var Bvalue = bedroom.value;

var bathroom = document.getElementById("Bathroom");
var Bavalue = bathroom.value;

var furnishing = document.getElementById("Furnishing");
var Fvalue = furnishing.value;

var checkin = document.getElementById("Checkin");
var Checkvalue = checkin.value;



if(Svalue != ""){
count += "&State="+Svalue;
}

if(Cvalue != ""){
count += "&City="+Cvalue;
}

if(Tvalue != ""){
count += "&Type="+Tvalue;
}


if(Gvalue != ""){
count += "&Categorie="+Gvalue;
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




if(Bvalue != ""){
count += "&Bedroom="+Bvalue;
}

if(Bavalue != ""){
count += "&Bathroom="+Bavalue;
}

if(Fvalue != ""){
count += "&Furnishing="+Fvalue;
}


if(Checkvalue != ""){
count += "&CheckIn="+Checkvalue;
}

 window.location.href = 'http://localhost:8000/Events?'+count;

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