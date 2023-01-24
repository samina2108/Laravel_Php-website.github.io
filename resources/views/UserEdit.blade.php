@include('headerpost')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 @extends('header')
 
</head>
<body>
<div class="container">
@isset($us)

<form method="POST" action="/crudupdate" enctype="multipart/form-data">

@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" value="{{$us->Name}}" class="form-control" name="uname" aria-describedby="emailHelp" placeholder="Enter Yoyr Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">User Email</label>
    <input type="email" value="{{$us->Email}}" class="form-control" name="uemail" placeholder="Enter Your Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">File Name</label>
    <input type="file" value="{{$us->FileName}}" class="form-control" name="uupload" placeholder="File">
    <input type="text" value="{{$us->id}}" class="form-control" name="id" placeholder="File" style="visibility:hidden">

  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endisset
</div>
	
	
	
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="assets/js/counter.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="assets/js/app.js"></script>
   
 
	
    <!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
</body>
</html>