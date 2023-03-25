<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="/css/slick.css" />
	<link rel="stylesheet" type="text/css" href="/css/dgv-style.css" />
	<link rel="stylesheet" type="text/css" href="/css/dgv-responsive.css" />
	<script src='/js/jquery-3.6.0.min.js'></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/slick.min.js"></script>
	<script src="/js/common.js"></script>
 </head>
 <body>
	 <section class="wrapper">
	 	<header>
			@include('DekhoevWebsite/header')
		</header>
		<section class="main-cnt">			
			<section class="hm-gyaan dt">
				<section class="section-wrap">
					<section class="container">
						<section class="row">
                            @foreach($Posts as $values)
							<aside class="col-md-6">
								<figure><img src="{{'/UploadImages/Post/'. $values->Postimage}}"></figure>
							</aside>
							<aside class="col-md-6">
								<div class="hm-gyaan-bx gyaan dt">									
									<h3>{{$values->Posttitle}}</h3>
									<!-- <small>short by Shalini Ojha / 11:37 am on 20 Dec 2022,Tuesday</small> -->
									<p>{{$values->Postcontent}}</p>
									<div class="media-blk clearfix">
										<ul>
											<li class="fb"><a href="javascript:;">facebook</a></li>
											<li class="wa"><a href="javascript:;">whatsapp</a></li>
											<li class="in"><a href="javascript:;">instagram</a></li>
											<li class="tw"><a href="javascript:;">twitter</a></li>
										</ul>
									</div>	
								</div>						
							</aside>
                            @endforeach
						</section>
					</section>
				</section>
			</section>
			</section>
			<footer class="section-wrap">
				@include('DekhoevWebsite/footer')
			</footer>
	 </section>  
 </body>
 <a href="javascript:" id="return-to-top"><img src="{{ url('http://dekhoev.com/WebsiteImages/up-arrow.png') }}"></a>
</html>
