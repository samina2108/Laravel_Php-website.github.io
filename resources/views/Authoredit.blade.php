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
<header id="mu-header" class="" role="banner">
		<div class="container">
			<nav class="navbar navbar-default mu-navbar">
			  	<div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>

				      <!-- Text Logo -->
				      <a class="navbar-brand mx-auto " href="index.html"><i class="fa fa-book" aria-hidden="true"></i>Authors</a>

				      <!-- Image Logo -->
				      <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"></a> -->


				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      	<ul class="nav navbar-nav mu-menu navbar-right">
                              
					        <li><a href="index.php">HOME</a></li>
					        <li><a href="http://localhost:8000/comics">Comics</a></li>
					        <li><a href="http://localhost:8000/story">Story Books</a></li>
                           <li><a href="http://localhost:8000/quiz">Quiz Books</a></li>
                           <li><a href="http://localhost:8000/novels">Novel</a></li>
						   <li><a href="http://localhost:8000/general">General</a></li>

				            <li><a href="contactus.php">CONTACT</a></li>
                            <li><a href="Loginsighup.php">Login/SighUp</a></li>
                       
                      
                      
				      	</ul>
				    </div><!-- /.navbar-collapse -->
			  	</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
<div class="container">
@isset($auth)

<form method="POST" action="/authorupdate" enctype="multipart/form-data">

@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Author Name</label>
    <input type="text" value="{{$auth->AuthorName}}" class="form-control" name="authname" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"> Book Title</label>
    <input type="text" value="{{$auth->BookTitle}}" class="form-control" name="bktitle" placeholder="Book Title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" value="{{$auth->Description}}" class="form-control" name="desp" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"> File Upload</label>
    <input type="file" value="{{$auth->UploadFile}}" class="form-control" name="read" placeholder="File">
    <input type="text" value="{{$auth->id}}" class="form-control" name="id" placeholder="File" style="visibility:hidden">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="text" class="form-control" name="price" placeholder="Enter Price Here">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Book Image</label>
    <input type="file" value="{{$auth->BookImage}}" class="form-control" name="image" placeholder="Upload Image">

  </div>
  <label>Categories</label>
        <select name="Cat" class="form-control">
          <option>Comics</option>
          <option>Novels</option>
          <option>General</option>
          <option>Quiz</option>
          <option>Story</option>
        </select>
  
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