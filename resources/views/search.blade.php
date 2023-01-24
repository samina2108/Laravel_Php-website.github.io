@extends('headerpost')

@section('content')

<!-- Start Author -->
@foreach($data as $item1)
<section id="mu-author">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-author-area">

                        <div class="mu-heading-area">
								<h2 class="mu-heading-title">Author Name: {{$item1->AuthorName}}</h2>
								<span class="mu-header-dot"></span>
							</div>

							<!-- Start Author Content -->
					

							<div class="mu-author-content">
								<div class="row">

					<div class="col-md-6">
										<div class="mu-author-image">
		<img src="assets/images/{{$item1->UploadFile}}" class="img-fluid" width="400" alt="Author Image">
										</div>
									</div>

									<div class="col-md-6">
										<div class="mu-author-info">
										
										    <h2>Book Title</h2>
										<hr/>
											<h3>{{$item1->BookTitle}}</h3>
										<hr>
											<h2>Book Description</h2>
										<hr/>
											<p>{{$item1->Description}}</p>
										<hr>
											<h2>Book Price</h2>
										<hr/>
											<h3>{{$item1->Price}}</h3> 
											@if(Auth::User() == null)
											<a href="/uploads/pdf/{{$item1->BookImage}}" target="_blank"><h3>Read</h3></a><br>
											<a href="/register"><h3>Download</h3></a><br>

											@else
											<a href="/uploads/pdf/{{$item1->BookImage}}" target="_blank"><h3>Read</h3></a><br>

											<a href="/uploads/pdf/{{$item1->BookImage}}" download><h3>Download</h3></a><br>

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
		 <!-- Footer -->
		 <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        <!-- End Author -->

		@endsection('content')
