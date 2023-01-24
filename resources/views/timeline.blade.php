@extends('headerpost')

<!DOCTYPE html>
<html lang="en">
<head>

     <title>Document</title>
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>Kindle : Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Lato for Title -->
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
  
</head>
<body>


		
@section('content')

    
@foreach($us as $item2)
<section id="mu-author">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-author-area">

                        <div class="mu-heading-area">
								<h2 class="mu-heading-title">User Name: {{$item2->Name}}</h2>
								<span class="mu-header-dot"></span>
							</div>

							<!-- Start Timline Content -->
					

							<div class="mu-author-content">
								<div class="row">

					<div class="col-md-6">
										<div class="mu-author-image">
		<img src="assets/images/{{$item2->Pics}}" class="img-fluid" width="400" alt="Author Image">
										</div>
									</div>

									<div class="col-md-6">
										<div class="mu-author-info">
										
										    <h2>Book Title</h2>
										<hr/>
											<h3>{{$item2->Title}}</h3>
										<hr>
											<h2>Book Description</h2>
										<hr/>
											<p>{{$item2->Description}}</p>
										<hr>
											
											@if(Auth::User() == null)
											<a href="/uploads/pdf/{{$item2->Upload}}" target="_blank"><h3>Read</h3></a><br>
											<a href="/register"><h3>Download</h3></a><br>

											@else
											<a href="/uploads/pdf/{{$item2->Upload}}" target="_blank"><h3>Read</h3></a><br>

											<a href="/uploads/pdf/{{$item2->BookImage}}" download><h3>Download</h3></a><br>

											@endif
											<img class="mu-author-sign" src="assets/images/author-signature.png" alt="Author Signature">

											

										</div>
									</div>
								</div>
							</div>
							<br>
			<br>	
			<br>	
			<br>
			<br>
			<br>

							<!-- End Author Content -->

						</div>
					</div>
				</div>
			</div>
			
		
		</section>
		<hr /><hr />
		@endforeach
        <!-- End Timline -->
        

     

 <!-- Footer -->
 <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
		@endsection('content')

        <!-- End Author -->

      
	
	
	
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