@extends('layout.layout')
@section('content')
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>DekhoEV /Vehicle Catelogue</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-style.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-responsive.css" />
	<link rel="stylesheet" type="text/css" href="../css/slick.css" />
	<link rel="stylesheet" type="text/css" href="{{ url('../css/font-awesome.min.css') }}" />
 </head>
 <body>
	 <section class="wrapper">
		 <header>
			 @include('DekhoevWebsite/header')
		</header>
		<section class="main-cnt">
			<section class="search-3W Cargo-wrap">
				<div class="container">
					<section class="search-3W Cargo ashBg"><!--wheeler-->
						<h2>Search  3Wheeler Passenger by Brand</h2>
							<section class="row">
								<aside class="col-md-2">
										<figure><img src="{{ url('/threewheeleratul.png')}}" alt=""  height="150" width="180"></figure>
								</aside>
								<aside class="col-md-2">
										<figure><img src="{{ url('/threewheelereuler.jpg')}}" alt=""  height="150" width="180"></figure>
								</aside>
								<aside class="col-md-2">
										<figure><img src="{{ url('/threewheelerkineticgreen.jpg')}}" alt=""  height="150" width="180"></figure>
								</aside>
								<aside class="col-md-2">
										<figure><img src="{{ url('/Threewheelermahindralogo.png')}}" alt=""  height="150" width="180"></figure>
								</aside>
								<aside class="col-md-2">
										<figure><img src="{{ url('/threewheelerpiaggio.png')}}" alt=""  height="150" width="200"></figure>
								</aside>
								<!--<aside class="col-md-2">-->
								<!--		<figure><img src="{{ url('public/WebsiteImages/threewheelercargo/logo-ktm.png')}}" alt=""></figure>-->
								<!--</aside>-->
							</section>
							<a href="javascript:;" class="link">View All Brands ></a>
						</section>
					</section><!--./wheeler-->
					</div>	
					</section>
        
			<section class="electric-bikes-wrap section-wrap-top">
				<div class="container">
					<h2>3Wheeler Passenger in India</h2>
					<section class="row">
					     @foreach($threewpass as $values)
    						<aside class="col-md-4">
						        <div class="electric-bike-bx">
						            <form action="/Website/Three-Wheeler-Pass-Product-Details" method="get">
        								<figure><img src="{{ url('/UploadImages/NewModel/Threewheelercargofeature/'. $values->Modelimage)}}" alt="image" width="300" height="250"></figure>
        								<p class="text-center">{{$values->Model_Name}}</p>
        								<p class="text-center">₹{{$values->Price_Ex_Showroom}}/-</p>
        								<input type="hidden" name="model_name" value="{{$values->Model_Name}}">
        								<input type="hidden" name="model_id" value="{{$values->id}}">
        								<center><button class="btn-view">View Details</button></center>
    								</form>
								</div>
    						</aside><br>
						</form>
						@endforeach
					</section>	
				</div>
			</section>
			<!--./Electric Bikes-->




			<footer class="section-wrap">
				@include('DekhoevWebsite/footer')
			</footer>
	 </section>  
  	 <section class="script">
	     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	    <script type="text/javascript" src="../js/bootstrap1.min.js"></script>
    	<script type="text/javascript" src="../js/common.js"></script>
    	<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
    	<script type="text/javascript" src="../js/slick.min.js"></script>
	 </section>
 </body>
</html>
@endsection
