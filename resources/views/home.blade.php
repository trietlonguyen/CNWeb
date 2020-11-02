@extends('layouts.app')

@section('content')


<style type="text/css">
	div.carousel-item{
		width: 100%;
		height: 250px!important;
	}
	.carouselExampleIndicators{

	}

	.all-center{
		align-items: center;
		justify-content: center;
	}
</style>
<script type="text/javascript">
	$('.carousel').carousel({
  interval: 1000
})
</script>

<div class="banner">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('public/images/banner4.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/images/banner2.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/images/banner5.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="row w-100 h-100">
		<h3 class="text-dark text-center w-100 font-weight-bold rounded"><hr />Danh Mục</h3>
		<ul class="nav nav-pills mb-3 w-100" id="pills-tab" role="tablist" style="display: flex;align-items: center;justify-content: center;">
		  	<li class="nav-item tab">
		    	<a class="nav-link active design" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">IPHONE<i class="fa fa-caret-down" aria-hidden="true"></i></a>
		  	</li>
		  	<li class="nav-item tab">
		    	<a class="nav-link design" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">SAMSUNG<i class="fa fa-caret-down" aria-hidden="true"></i></a>
		  	</li>
		  	<li class="nav-item tab">
		    	<a class="nav-link design" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">SONY<i class="fa fa-caret-down" aria-hidden="true"></i></a>
		  	</li>
		</ul>
		<div class="tab-content w-100" id="pills-tabContent" >
		  	<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
		  		<table class="table">
		  			{{--
				  	<thead class="thead-dark">
				    	<tr>
					      	<th scope="col"></th>
					      	<th scope="col">1 năm</th>
					      	<th scope="col">3 năm</th>
					      	<th scope="col">5 năm</th>
				    	</tr>
				  	</thead>
				  	--}}
				  	<tbody>
				    	<div class="container">
						  	<div class="row">

						  		<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
								<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
								<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
								<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
						  	</div>

						  	<div class="row">

						  		<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
								<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
								<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
								<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
						  	</div>

						</div>
				  	</tbody>
				</table>
		  	</div>
		  	<div class="tab-pane fade w-100" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
		  		<table class="table">
				  	
				  	<tbody>
<div class="container">
						  	<div class="row">

						  		<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
								<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
								<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
								<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
						  	</div>

						  	<div class="row">

						  		<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
								<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
								<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
								<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
						  	</div>
				  	</tbody>
				</table>
		  	</div>
		  	<div class="tab-pane fade w-100" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
		  		<table class="table">
				  
				  	<tbody>
				    	<div class="container">
						  	<div class="row">

						  		<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
								<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
								<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
								<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
						  	</div>

						  	<div class="row">

						  		<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
								<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
								<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
								<div class="card col col-sm-3 col-lg-3" style="width: 18rem;">
									<img class="card-img-top" src="{{asset('public/images/IPHONE/12.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
						  	</div>
				    	
				  	</tbody>
				</table>
			</div>
		</div>
	</div>

{{--
<div class="container">
  	<div class="row">
	    <div class="col col-sm-3 col-lg-3">
	      <image src="{{asset('public/images/logo.png')}}" alt="cc"/>
	    </div>
	    <div class="col col-sm-3 col-lg-3">
	      <image src="{{asset('public/images/logo.png')}}" alt="cc"/>
	    </div>
	    <div class="col col-sm-3 col-lg-3">
	      <image src="{{asset('public/images/logo.png')}}" alt="cc"/>
	    </div>
	    <div class="col col-sm-3 col-lg-3">
	      <image src="{{asset('public/images/logo.png')}}" alt="cc"/>
	    </div>
  	</div>
</div>--}}
@endsection