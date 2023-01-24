

<!-- Custom fonts for this template-->
 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

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

            <div class="col-xl-10 col-lg-12 col-md-9" style="margin-top: 100px;">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-userlogin-image "></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">User Register!</h1>
                                    </div>
                                    <form class="user" action="userreg" method="post" >
                                        @csrf
                                        <div class="form-group">
                                            <input  type="text" name="name" placeholder="enter your name" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="enter your email" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="password" name="password" placeholder="enter your password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="confirm" placeholder="confirm your password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Confirm Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class=" btn btn-primary btn-user btn-block">
                                          
                                        </div>

                                        <div class="text-center">
                                        <a class="small " href="login">Already Account</a>
                                    </div>
                                   
                                        </div>
                                        
                                    </form>
                                    <div class="text-center">
                                        <a class="small " href="/">Go Back</a>
                                    </div>
                                  
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

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