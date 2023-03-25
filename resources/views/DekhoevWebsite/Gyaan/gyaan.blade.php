<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="Keywords" content="">
		<meta name="Description" content="">
		<title> DekhoEv/Gyaan </title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css" />
		<link rel="stylesheet" type="text/css" href="../css/dgv-style.css" />
		<link rel="stylesheet" type="text/css" href="../css/dgv-responsive.css" />
		<link rel="stylesheet" type="text/css" href="../css/slick.css" />
		<link rel="stylesheet" type="text/css" href="{{ url('../css/font-awesome.min.css') }}" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
			integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
			crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
 <body>
	 <section class="wrapper">
		 <header>
			@include('DekhoevWebsite/header')
		</header>
		<section class="main-cnt">
			
			<section class="hm-gyaan">
				<section class="section-wrap">
					<section class="container">
					<h2>EV Gyaan</h2>
						<section class="row">
							@foreach($Posts as $values)
								<aside class="col-md-4">
									<form action="{{URL::to('/Website/Gyaan/Details')}}" method="GET">
										<div class="hm-gyaan-bx gyaan">
											<input type="hidden" name="Post_id" value="{{$values->id}}">
											<figure><img src="{{'../UploadImages/Post/' . $values->Postimage}}"></figure>
											<h3>{{$values->Posttitle}}</a></h3>
											<p>{{substr($values->Postcontent,0,180)}}........</p>
											<div class="media-blk clearfix">
											<button type="submit" class="btn btn-info btn-sm float-end" > Read more >></button>
												<ul>
													<li class="fb"><a href="javascript:;">facebook</a></li>
													<li class="wa"><a href="javascript:;">whatsapp</a></li>
													<li class="in"><a href="javascript:;">instagram</a></li>
													<li class="tw"><a href="javascript:;">twitter</a></li>
												</ul>
											</div>	
										</div>
									</form>						
								</aside>
							@endforeach
						</section>
					</section>
				</section>
			</section>

			<footer class="section-wrap">
				@include('DekhoevWebsite/footer')
			</footer>


	 </section>  
	 <section>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap1.min.js"></script>
		<script type="text/javascript" src="../js/common.js"></script>
		<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
		<script type="text/javascript" src="../js/slick.min.js"></script>
	</section>
<a href="javascript:" id="return-to-top"><img src="{{ url('http://dekhoev.com/WebsiteImages/up-arrow.png') }}"></a> 
 </body>
</html>
