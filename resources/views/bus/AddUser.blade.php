@extends('layouts.Nav')

@section('page')
<i class="fas fa-user"></i> Create Events
@endsection

@section('path')
Users / New User
@endsection

@section('content')
<?php $random = 'RA-'.rand(0,1).''.rand();?>
<form method="post"  action="{{route('AddCarUpload')}}" enctype= "multipart/form-data"  style="font-size: 15px">
  {{ csrf_field() }}

<div class="container-fluid" id="container-wrapper">



<div class="msg">

</div>


          <div class="row mb-3">
  

           
            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-light" style="background-color: #6B80FB" >
                  <h6 class="m-0 font-weight-bold "><i class="fas fa-images"></i> Upload Events cover picture</h6>
                 
                </div>
                <div class="card-body" >

<br>
<div class="form-group" style="margin-bottom: -40px">
<div class="profile-pic">
  <label class="-label" for="file">
    <span class="glyphicon glyphicon-camera"></span>
    <span><i class="fas fa-edit"></i></span>
  </label>
  <input  id="file" type="file" name="image" onchange="loadFile(event)" />
  <img src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930" id="output" width="200" />
</div>
<center><Span class="ErrImage feed">
  @error('image')
{{$message}}
@enderror 
</Span></center><br>
     </div>
      </div>

<div class="card-footer text-center" style="background-color: #6B80FB">
  <a class="btn btn-danger" id="Remove" onclick="RemoveFile(event)" style="display: none"><span style="color:white;" style="width: 20px"><i class="fas fa-trash-alt"></i></span></a>
    </div>  
  </div>



 </div>






 <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                        <?php  if(isset($_REQUEST['rslt'])){ ?>
                             <div class="alert alert-success" role="alert">
<B><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg> Success! </B>the record has been updated</div>
                <?php } else{ } ?>
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-light" style="background-color: #6B80FB">
                  <h6 class="m-0 font-weight-bold">Events Information</h6>
                </div>
                <div class="card-body">
                  


  <div class="form-row">

    <div class="col-md mb-3">
      <label for="Title">Car Model <span style="color: red">*</span></label>
      <input type="text" class="form-control " name="Title" id="Title" placeholder="" value="" >
      <div class="ErrName feed">
       
@error('Title')
{{$message}}
@enderror 
      </div>
    </div>



       <div class="col-md-3 mb-3">
      <label for="Fuel">Fuel <span style="color: red">*</span></label>
<select class="form-control" id="Fuel" aria-label="Default select example"  name="Fuel">
  <option value="" selected>- -</option>
  <option value="Diesel">Diesel</option>
    <option value="Petrol">Petrol</option>

</select>
      <div class="ErrC feed">
       
@error('Fuel')
{{$message}}
@enderror 
      </div>
    </div>

  

</div>



<br>
  <div class="form-row">
    
<div class="col-md mb-3">
      <label for="Price">Price (RM) <span style="color: red">*</span></label>
      <input type="number" class="form-control " name="Price" id="Price" placeholder="" value="" >
      <div class="ErrName feed">
       
@error('Price')
{{$message}}
@enderror 
      </div>
    </div>



       <div class="col-md-3 mb-3">
      <label for="Company"> Company <span style="color: red">*</span></label>
<select class="form-control" id="Company" aria-label="Default select example" class="form-control" name="Company">
  <option value="" selected>-  -</option>
       <option value="BMW">BMW</option>
          <option value="Audi">Audi</option>
          <option value="Honda">Honda</option>
          <option value="Toyota">Toyota</option>
          <option value="Jeep">Jeep</option>
          <option value="Hyundai">Hyundai</option>
          <option value="Mercedes-Benz">Mercedes-Benz</option>
          <option value="GMC">GMC</option>
          <option value="Lexus">Lexus</option>
          <option value="Subaru">Subaru</option>
</select>
      <div class="ErrName feed">
       
@error('Company')
{{$message}}
@enderror 
      </div>
    </div>



  </div>
<br>




<div class="form-row">



<div class="col-md mb-3">
      <label for="Date">Date </label>
      <input type="Date" class="form-control " name="Date" id="Date" placeholder="" value="" >
      <div class="ErrName feed">
       
@error('Date')
{{$message}}
@enderror 
      </div>
    </div>



</div>

<br>

<div class="form-row">

        <label for="Street_Address">Location  </label>
      <input type="text" class="form-control " name="Location" id="Location" placeholder="" value="" >
      <div class="ErrName feed">
       
@error('Location')
{{$message}}
@enderror 
      </div>
    </div>



<br>




<hr>
<center><button class="btn" id="save" style="width: 100px;background-color: #1270fc;color: white" type="submit"><i class="fas fa-plus-square"></i> Save</button>
 </center>




                </div>

<div class="card-footer text-center" style="background-color: #6B80FB">
      
    </div>  </div>
 </div>


              </div>
            </div>














</div>


                    </form>

  <button type="button" class="btn btn-primary" id="showdata" data-toggle="modal" data-target="#notif" ></button>

<script type="text/javascript">


</script>
@endsection
