
<!DOCTYPE html>
<html lang="en">
<style>h1{
	color: green;
	font-family: 'Monoton', cursive;
	font-size: 100px;
	}
	
h2{
	font-family: 'Bungee Inline', cursive;
	color: black;
	font-size: 40px;
	}
	
h3{
	font-family: 'Press Start 2P', cursive;
	color: black;
	font-size: 45px;
	}

button {
	color: white;
	font-size: 25px; 
	}
	
.answer {
	background-color: green;
	font-family: 'Press Start 2P', cursive;
	color: white;
	}

.help {
	background-color: blue;
	font-family: 'Bungee Inline', cursive;
	color: white;
	}</style>
	
 

</style>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Register</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" type="text/css" href="winner.css">
	
  	
  	<!-- Connecting to jQuery CDN -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	
  	<!-- Importing Google Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Bungee+Shade|Monoton|Press+Start+2P|Sigmar+One|Ultra" rel="stylesheet">

	<!-- Importing the Font Awesome library to get the thumbs-up icon: -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
@if($errors->any())
<div class="alert alert-danger">
   <ul>
  @foreach($errors->all() as $error)
 <li> {{ $error }} </li>
  @endforeach
  </ul>
  </div>
@endif

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9"style="margin-top: 100px;">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Story Winner </h1>
                                    </div>
                                    <form class="user" action="Adminreg" method="post" >
                                        @csrf
                                    

                                        @foreach($data5 as $item4)
                                           <section id="mu-author">
		                        	         <div class="container">
			               	                  <div class="row">
				                             	<div class="col-md-12">
						                         <div class="mu-author-area">
                                                    
                                  <div class="mu-heading-area" >
                                  <center><h1 class="mu-heading-title">ID: {{$item4->id}}</h1></center> 
								             <center><h1 class="mu-heading-title"> Name: {{$item4->Name}}</h1></center> 
                                             <center><h1 class="mu-heading-title">Title: {{$item4->Title}}</h1></center> 
                                
							              	<span class="mu-header-dot"></span>
							                </div>
                                            <center>  <h4 text-gray-900 mb-4> <a class="small" href="{{URL('profile')}}">Go To Dasboard</a></h4></center> 
                                            <center>  <h4 text-gray-900 mb-4> <a class="small" href="{{URL('timeline')}}">Go To Timline</a></h4></center> 
                          

	                                            @endforeach
                                       
                                    
                                    </form>
                                    <hr>
                                    
                                

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>