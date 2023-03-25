<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>DekhoEV / Home</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/slick.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-style.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-responsive.css" />

</head>
 <body>


	 <section class="wrapper">
		 <header>
			@include('DekhoevWebsite/header')
		</header>
		<section class="main-cnt">
			<section class="hm-banner"><!--Banner-->
				<div class="cnt-blk">
					
					    <div class="container">
    						
					    </div>				
					<!--</form>-->
				</div>			
			</section>
		</section><!--./Banner-->

			<section class="grnBg section-wrap"><!--wheeler-->
				<div class="container">
				<section class="row">
				<aside class="col-md-3 col-sm-6">
				    <a href="/Website/Two-Wheeler-Vehicle-Catelogue" style="color:black;text-decoration:none;">
				        <div class="wheeler-bx">
						<figure><img src="/ic-scooter.png" alt=""></figure>
						<p>2 Wheeler</p>
					</div>
				    </a>
				</aside>
				<aside class="col-md-3 col-sm-6">
				    <a href="/Website/Four-Wheeler-Vehicle-Catelogue" style="color:black;text-decoration:none;">
				        <div class="wheeler-bx">
						<figure><img src="/ic-car.png" alt=""></figure>
						<p> Cars </p>
					</div>
				    </a>
				</aside>
				<aside class="col-md-3 col-sm-6">
					<div class="wheeler-bx">
					    <a href="/Website/Three-Wheeler-Cargo-Vehicle-Catelogue" style="color:black;text-decoration:none;">
					        <figure><img src="/ic-van.png" alt=""></figure>
						    <p>3 Wheeler Cargo</p>
					    </a>
					</div>				
				</aside>
				<aside class="col-md-3 col-sm-6">
					<div class="wheeler-bx">
					    <a href="/Website/Three-Wheeler-Pass-Vehicle-Catelogue" style="color:black;text-decoration:none;">
					        <figure><img src="/ic-auto.png" alt=""></figure>
						    <p>3 Wheeler Passenger</p>
					    </a>
					</div>				
				</aside>
				</section>
				</div>				
			</section>
		</section><!--./wheeler-->
			<section class="section-wrap"><!--All Brands-->
				<div class="container">
					<h2>All Brands</h2>
					<section class="brands-slider">
						<!--<div><img src="/logo-mercedesbenz.png" alt=""></div>
						<div><img src="/logo-tata.png" alt=""></div>
						<div><img src="/logo-toyota.png" alt=""></div>
						<div><img src="/logo-jeep.png" alt=""></div>-->
						<div><img src="http://dekhoev.com/WebsiteImages/logo-ampere.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-audi.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-bajaj.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-benlg.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-bmw.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-byd.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-egh.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-eq.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-heroelectric.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-hyundai.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-infinity.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-jaguar.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-kabira.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-kinetic.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-kn.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-mahindra.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-mg.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-okaya.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-okinawa.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-piaggio.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-pure.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/logo-volvo.png" alt=""></div>
						<div><img src="http://dekhoev.com/WebsiteImages/porsche.png" alt=""></div>
					</section>	
				</div>
			</section><!--./All Brands-->		
			<section class="hm-gyaan">
				<section class="section-wrap">
					<section class="container">
					<h2>EV Gyaan</h2>
					
						<section class="row">	
							@foreach($Posts as $Post)														
								<aside class="col-md-4">										
									<div class="hm-gyaan-bx">
										<form action="/Website/Gyaan/Details" method="GET">
											<input type="hidden" name="Post_id" value="{{$Post->id}}">
											<figure><img src="{{'../UploadImages/Post/'. $Post->Postimage}}"></figure>
											<h3>{{$Post->Posttitle}}</h3>
											<p>{{substr($Post->Postcontent,0,100)}}........</p>
											<button type="submit" class="btn btn-info btn-sm"  > Read more >></button>
										</form>	
									</div>																
								</aside><br>
							   												   
							   @endforeach	
						</section>						
					</section>
				</section>
			</section>
            <footer>
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
	 <a href="javascript:" id="return-to-top"><img src="{{ url('http://dekhoev.com/WebsiteImages/up-arrow.png') }}"></a>

 </body>
</html>
