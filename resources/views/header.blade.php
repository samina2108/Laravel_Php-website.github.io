
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header id="mu-header" class="" role="banner">
		<div class="containe-fluid">
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
				      <a class="navbar-brand mx-auto " href="/"><i class="fa fa-book" aria-hidden="true"></i>E Books</a>

				      <!-- Image Logo -->
				      <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"></a> -->


				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      	<ul class="nav navbar-nav mu-menu navbar-right">
                              
					        <li><a href="/">HOME</a></li>
					        <li><a href="http://localhost:8000/comics">Comics</a></li>
					        <li><a href="http://localhost:8000/story">Story Books</a></li>
                           <li><a href="http://localhost:8000/quiz">Quiz Books</a></li>
                           <li><a href="http://localhost:8000/novels">Novel</a></li>
						   <li><a href="http://localhost:8000/general">General</a></li>

				            <li><a href="contact">Contact</a></li>
                            <li><a href="{{'register'}}">Login/SighUp</a></li>
							<li><a href="{{'Adminlogin'}}">Adminlogin</a></li>
                            @if(Auth::User() != null)
                <li class="nav-item">
                <a class="nav-link" href="profile">{{ Auth::User()->name }}</a>
                </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="log">Logout</a>
                        </li>
                    @endif
                       
                      
				      	</ul>
				    </div><!-- /.navbar-collapse -->
			  	</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	<!-- End Header -->
</body>
</html>