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

</head>
<body>

<div class="container">
@isset($us)

<form class="user" method="POST" action="/updatedata/{{$us->id}}" enctype="multipart/form-data">

@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">user Name</label>
    <input type="text" value="{{$us->Name}}" class="form-control form-control-user" name="uname" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">image</label>
    <input type="file" value="{{$us->Pics}}" class="form-control form-control-user" name="img" placeholder="Book Title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" value="{{$us->Description}}" class="form-control form-control-user" name="Description" placeholder="Description">
  </div>
  <label>Categories</label>
        <select value="{{$us->Category}}" name="Cate" class="form-control form-control-user">
          <option>Compition</option>
          
        </select>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Title</label>
    <input type="text" value="{{$us->Title}}" class="form-control form-control-user" name="title" placeholder="File">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Upload</label>
    <input type="file" value="{{$us->Upload}}" class="form-control form-control-user" name="load" placeholder="File">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Winner</label>
    <input type="text" value="{{$us->Winner}}" class="form-control " name="winner" placeholder="Winner">
  </div>
  
 
  <button type="submit" class="btn btn-primary">Update</button>
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