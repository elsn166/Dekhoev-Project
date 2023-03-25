<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
	<title>DekhoEV / Comparision</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css" />
	<link rel="stylesheet" type="text/css" href="{{ url('../css/font-awesome.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="../css/slick.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-style.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-responsive.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 </head>
 <body>



	 <section class="wrapper">
		 <header>
			 @include('DekhoevWebsite/header')
		</header>
		<section class="main-cnt">
				<div class="container">
			<section class="compare-blk ashBg section-wrap"><!--wheeler-->
				<h2>What Do You Want to Compare?</h2>
				<section class="row">
				<aside class="col-md-3">
				    <a href="{{URL::to('/Website/Comparisions-Two-Wheeler-Specs')}}" style="text-decoration:none !important;">
				        <div class="wheeler-bx comp">
    						<figure><img src="{{ url('/ic-scooter.png')}}" alt=""></figure>
    						<p style="color:black;">2 Wheeler</p>			
					    </div>
				    </a>
				</aside>
				<aside class="col-md-3">
					<a href="{{URL::to('/Website/Comparisions-Four-Wheeler-Specs')}}" style="text-decoration:none !important;">
				        <div class="wheeler-bx comp">
    						<figure><img src="{{ url('/ic-car.png')}}" alt=""></figure>
    						<p style="color:black;">Cars</p>			
					    </div>
				    </a>				
				</aside>
				<aside class="col-md-3">
					<a href="{{URL::to('/Website/Comparisions-Three-Wheeler-Cargo')}}" style="text-decoration:none !important;">
				        <div class="wheeler-bx comp">
    						<figure><img src="{{ url('/ic-van.png')}}" alt=""></figure>
    						<p style="color:black;">3 Wheeler Cargo</p>			
					    </div>
				    </a>				
				</aside>
				<aside class="col-md-3">
					<a href="{{URL::to('/Website/Comparisions-Three-Wheeler-Pass')}}" style="text-decoration:none !important;">
				        <div class="wheeler-bx comp">
    						<figure><img src="{{ url('/ic-auto.png')}}" alt=""></figure>
    						<p style="color:black;">3 Wheeler Pass</p>			
					    </div>
				    </a>				
				</aside>
				</section>
			</section>			
				</div>			
		</section><!--./wheeler-->

			<footer class="section-wrap">
				@include('DekhoevWebsite/footer')
			</footer>
	 </section>  
	 <section class="script">
	     {{-- <script src="//code.jquery.com/jquery-1.12.0.min.js"></script> --}}
	     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	    <script type="text/javascript" src="{{ URL('public/js/bootstrap1.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL('public/js/slick.min.js') }}"></script>
    	<script type="text/javascript" src="{{ URL('public/js/common.js')}}"></script>
    	<script>
      </script>
	 </section>
 </body>
</html>