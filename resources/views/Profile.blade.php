
@extends('layouts.Nav')



@section('page')
<i class="fas fa-user"></i> My Profile : <span class="badge badge-primary"><?php echo $users[0]->Matric; ?></span>
@endsection

@section('path')
Users / New User
@endsection





@section('content')
<form method="post"  action="{{route('UpdateProfileS1')}}" enctype= "multipart/form-data" style="font-size: 13px">
  {{ csrf_field() }}

<div class="container-fluid" id="container-wrapper">



<div class="msg">

</div>


          <div class="row mb-3">
  

           
            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card mb-4" style="background-image: url({{URL::asset('images/abstract-blue-background-with-depth_79603-874.jpg')}});">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-light" style="background-color: #6B80FB">
                  <h6 class="m-0 font-weight-bold "><i class="fas fa-images"></i> My profile picture</h6>
                 
                </div>
                <div class="card-body" >

<br>
<div class="form-group" style="margin-bottom: -40px;">
<div class="profile-pic" >
  <label class="-label" for="file">
    <span class="glyphicon glyphicon-camera"></span>
    <span><i class="fas fa-edit"></i></span>
  </label>
  <input  id="file" type="file" name="image" onchange="loadFile(event)" />
  <img src="@if($users[0]->photo != ''){{asset('/storage/images/profile_Images/'.$users[0]->photo)}} @else {{url('/images/icongif.gif')}} @endif" width="200" id="output" />
</div>
<center><Span class="ErrImage feed">@error('image')
{{$message}}
@enderror </Span></center><br>
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
<B>Success</B> the user data has been updated.</div>
                <?php } else{ } ?>
   
              
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-light" style="background-color: #6B80FB">
                  <h6 class="m-0 font-weight-bold">General Information Form</h6>
                </div>
                <div class="card-body">

  <div class="form-row">
    <div class="col-md-12 mb-1">
            <label for="Name">Reference:  <span style="color: red">*</span>   (A reference is pre-generated by the system for the new user.)</label>

<input type="text" class="form-control " name="Ref" id="Ref" value="<?php echo $users[0]->Reference; ?>" readonly>
</div></div>

  <div class="form-row">
    <div class="col-md-8 mb-2">
      <label for="Name">Full Name <span style="color: red">*</span></label>
      <input type="text" class="form-control @error('Name') is-invalid @enderror" name="Name" id="Name" placeholder="" value="{{$users[0]->Name}}" >
      <div class="ErrName feed">
       
@error('Name')
{{$message}}
@enderror 
      </div>
    </div>

    <div class="col-md-4 mb-2">
      <label for="Matric">Matric <span style="color: red">*</span></label>
<input type="Number" class="form-control @error('Matric') is-invalid @enderror" name="Matric" id="Matric" value="{{$users[0]->Matric}}" readonly>
      <div class="ErrSexe feed">
@error('Matric')
{{$message }}
@enderror         
      </div>
    </div>

</div>

  <div class="form-row">
     <div class="col-md-5 mb-2">
      <label for="Passport">Passport <span style="color: red">*</span></label>
<input type="text" class="form-control @error('Passport') is-invalid @enderror" name="Passport" id="Passport" value="{{$users[0]->Passport}}" readonly>

      <div class="ErrNationality feed">
@error('Passport')
{{$message }}
@enderror
      </div>
    </div>
   <div class="col-md-4 mb-2">
      <label for="Tel">Tel <span style="color: red">*</span></label>
      <input type="tel" class="form-control @error('Tel') is-invalid @enderror" name="Tel" id="Tel" placeholder="" value="{{$users[0]->Tel}}">
      <div class="ErrTel feed">
@error('Tel')
{{$message }}
@enderror
      </div>
    </div>

    <div class="col-md-3 mb-2">
      <label for="Privilege">Privilege <span style="color: red">*</span></label>
      <select class="form-control @error('Privilege') is-invalid @enderror" name="Privilege" id="Privilege">
<option value="{{$users[0]->Role}}">{{$users[0]->Role}}</option>              
<option value="Member">Member</option>
<option value="Committee">Committee</option>
<option value="Admin">Admin</option>
      </select>
      <div class="ErrPriv feed">
@error('Privilege')
{{$message }}
@enderror
      </div>
    </div>

  </div>

  <div class="form-row">
 
    <div class="col-md-6 mb-2">
      <label for="Graduation">Graduation Year</label>
    <select class="form-control @error('Graduation') is-invalid @enderror" name="Graduation" id="Graduation" placeholder="" value="{{old('Graduation')}} ">
<option value="{{$users[0]->GraduationYear}}">{{$users[0]->GraduationYear}}</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019 ">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
    </select>
      <div class="ErrOccupation feed">
@error('Graduation')
{{$message }}
@enderror
      </div>
    </div>

     <div class="col-md-6 mb-2">
      <label for="Programme">Programme</label>
      <Select  class="form-control @error('Programme') is-invalid @enderror" id="Programme" name="Programme" placeholder="" value="{{old('Programme')}} ">
<option value="{{$users[0]->Programme}}">{{$users[0]->Programme}}</option>
<option value="Bachelor of Architecture">Bachelor of Architecture </option>
<option value="Bachelor of Business ">Bachelor of Business </option>
<option value="Bachelor of Business Administration">Bachelor of Business Administration</option>
<option value="Bachelor of Science in Business">Bachelor of Science in Business</option>
<option value="Bachelor of Computer Science">Bachelor of Computer Science</option>
<option value="Bachelor of Science in Engineering">Bachelor of Science in Engineering</option>
      </Select>
      <div class="ErrInstitution feed">
@error('Programme')
{{$message }}
@enderror
      </div>
    </div>
  </div>

           <br>    
                 
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-info">
                  <h6 class="m-0 font-weight-bold">Login Information</h6>
                </div>
                <br>

         <div class="form-row">
    <div class="col-md-12 mb-2">
      <label for="Email">Email <span style="color: red">*</span></label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
        </div>
        <input type="text" class="form-control @error('Email') is-invalid @enderror" name="Email" id="Email" placeholder="" aria-describedby="inputGroupPrepend3" value="{{$users[0]->Email}}" >
      </div>
<Span class="ErrEmail feed">
  @error('Email')
{{$message }}
@enderror</Span>
    </div>
  </div>

<br>
    <div class="form-row">
    <div class="col-md-6 mb-2">
 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
      





<p>

  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
Reset Password  </button>
</p>
<div class="collapse" id="collapseExample" style="border-radius: 5px;border:1px lightblue solid">
  <div class="card card-body">
    <label for="password">New Password <span style="color: red"></span></label>

    <input type="password" class="form-control @error('Password') is-invalid @enderror" name="Password" id="Password" placeholder="" value="">
  </div>
</div>




      

      <div class="ErrPassword feed">
@error('Password')
{{$message }}
@enderror
      </div>
    </div>
    </div>

  </div>

<hr>
<center><button class="btn" id="save" style="width: 100px;background-color: #1270fc;color: white" type="submit"><i class="fas fa-plus-square"></i> Save</button>
 <a href="{{route('profile')}}" style="width: 100px;" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Back</a></center>




                </div>

<div class="card-footer text-center" style="background-color: #6B80FB">
      
    </div>  </div>
 </div>


              </div>
            </div>















</div>


                    </form>

  <button type="button" class="btn btn-primary" id="showdata" data-toggle="modal" data-target="#exampleModalCenter" style="visibility: hidden"></button>

<script type="text/javascript">


</script>
@endsection
