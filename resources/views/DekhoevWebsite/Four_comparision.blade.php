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
 </head>
 <body>
	 <section class="wrapper">
		 <header>
			 @include('DekhoevWebsite/header')
		</header>
			<footer class="section-wrap">
				@include('DekhoevWebsite/footer')
			</footer>

<!-- Three Wheeler cargo Modal -->
<div class="modal fade" id="myModalthreec" data-bs-backdrop="static">
	<div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
			<form action="/Website/Comparisions-Table-Four-Wheeler" method="post">
			    {!! csrf_field() !!}
			    <section class="row">
        			<aside class="col-sm-4">
        				<div class="add-vehicle" data-bs-toggle="modal" data-bs-target="#myModal2threec1">
        				    @foreach($currentmodelthreec1 as $item)
        					<div class="add-vehicle-in">
        					    <div id="add_vehicle" style="display:none">
        					        <figure><img src="{{ url('/icon-add.png')}}"></figure>
        						    <p>Add Vehicle</p>
        					    </div>
        						<figure><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item->Modelimage)}}" class="img-fluid"></figure>
        						<input type="hidden" name="Model_Name_Threec1" value="{{$item->Model_Name}}">

        						<input type="hidden" name="Model_Id_Threec1" value="{{$item->id}}">
        					</div>
        					@endforeach
        				</div>
        			</aside>
        			<aside class="col-sm-4">
        				<div class="add-vehicle" data-bs-toggle="modal" data-bs-target="#myModal2threec2">
        					@foreach($currentmodelthreec2 as $item)
        					<div class="add-vehicle-in">
        					    <div id="add_vehicle" style="display:none">
        					        <figure><img src="{{ url('/icon-add.png')}}"></figure>
        						    <p>Add Vehicle</p>
        					    </div>
        						<figure><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item->Modelimage)}}" class="img-fluid"></figure>
        						<input type="hidden" name="Model_Name_Threec2" value="{{$item->Model_Name}}">

        						<input type="hidden" name="Model_Id_Threec2" value="{{$item->id}}">
        					</div>
        					@endforeach
        				</div>
        			</aside>
        			<aside class="col-sm-4">
        				<div class="add-vehicle" data-bs-toggle="modal" data-bs-target="#myModal2threec3">
        					@foreach($currentmodelthreec3 as $item)
        					<div class="add-vehicle-in">
        					    <div id="add_vehicle" style="display:none">
        					        <figure><img src="{{ url('/icon-add.png')}}"></figure>
        						    <p>Add Vehicle</p>
        					    </div>
        						<figure><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item->Modelimage)}}" class="img-fluid"></figure>
        						<input type="hidden" name="Model_Name_Threec3" value="{{$item->Model_Name}}">

        						<input type="hidden" name="Model_Id_Threec3" value="{{$item->id}}">
        					</div>
        					@endforeach
        				</div>
        			</aside>
        			<div class="btn-wrap text-center mt-5">
        			    <input type="submit" class="btn-pry" value="compare">
        			</div>
			</section>
			</form>
        </div>
      </div>
    </div>
</div>

<!--Three Wheeler Cargo Modal-->

<!--Three Wheeler Cargo Add Product Modal 1-->
<div class="modal fade" id="myModal2threec1" data-backdrop="static">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">                        
            <h3>Add Product to Comparison</h3><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
			 <!--<div class="search">-->
				<!--  <i class="fa fa-search"></i>-->
				<!--  <input type="search" class="form-control" id="search_product" placeholder="Search">-->
				<!--  <button class="btn btn-primary">Search</button>-->
				<!--</div>-->
				@foreach($user2 as $item)
				<div class="search-wrap">
				    <form action="" method="get">
				        <section class="row">
						<aside class="item-img col-sm-3"><figure><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item->Modelimage)}}" id="text1"></figure></aside>
						<aside class="item-cnt col-sm-9">
							<div class="item-cnt-in">
							    <input type="hidden" name="Threec" id="Threec" value={{$item->Model_Name}}>
    							<p>{{$item->Model_Name}}</p>
    							<p class="grn">{{$item->Price_Ex_Showroom}}</p>	
							</div>					
						</aside>
						<input type="hidden" name="current_model1" value="{{$item->Model_Name}}">
						<input type="hidden" name="current_image1" value="{{$item->Modelimage}}">
						<button class="btn btn-primary">Select</button>
					    <hr class="hr">
				    </form>
				</div>
				@endforeach
            </div>
        </div>
    </div>
</div>
<!--Three Wheeler Cargo Add Product Modal 1-->


<!--Three Wheeler Cargo Add Product Modal 2-->
<div class="modal fade" id="myModal2threec2" data-backdrop="static">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">                        
            <h3>Add Product to Comparison</h3><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
			 <!--<div class="search">-->
				<!--  <i class="fa fa-search"></i>-->
				<!--  <input type="text" class="form-control" placeholder="Search">-->
				<!--  <button class="btn btn-primary">Search</button>-->
				<!--</div>-->
				@foreach($user2 as $item)
				<div class="search-wrap">
				    <form action="" method="get">
				        <section class="row">
						<aside class="item-img col-sm-3"><figure><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item->Modelimage)}}" id="text1"></figure></aside>
						<aside class="item-cnt col-sm-9">
							<div class="item-cnt-in">
							    <input type="hidden" name="Threec" id="Threec" value={{$item->Model_Name}}>
    							<p>{{$item->Model_Name}}</p>
    							<p class="grn">{{$item->Price_Ex_Showroom}}</p>	
							</div>					
						</aside>
						<input type="hidden" name="current_model2" value="{{$item->Model_Name}}">
						<input type="hidden" name="current_image2" value="{{$item->Modelimage}}">
						<button class="btn btn-primary">Select</button>
					    <hr class="hr">
				    </form>
				</div>
				@endforeach
            </div>
        </div>
    </div>
</div>
<!--Three Wheeler Cargo Add Product Modal 2-->


<!--Three Wheeler Cargo Add Product Modal 3-->
<div class="modal fade" id="myModal2threec3" data-backdrop="static">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">                        
            <h3>Add Product to Comparison</h3><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
			 <!--<div class="search">-->
				<!--  <i class="fa fa-search"></i>-->
				<!--  <input type="text" class="form-control" placeholder="Search">-->
				<!--  <button class="btn btn-primary">Search</button>-->
				<!--</div>-->
				@foreach($user2 as $item)
				<div class="search-wrap">
				    <form action="" method="get">
				        <section class="row">
						<aside class="item-img col-sm-3"><figure><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item->Modelimage)}}" id="text1"></figure></aside>
						<aside class="item-cnt col-sm-9">
							<div class="item-cnt-in">
							    <input type="hidden" name="Threec" id="Threec" value={{$item->Model_Name}}>
    							<p>{{$item->Model_Name}}</p>
    							<p class="grn">{{$item->Price_Ex_Showroom}}</p>	
							</div>					
						</aside>
						<input type="hidden" name="current_model3" value="{{$item->Model_Name}}">
						<input type="hidden" name="current_image3" value="{{$item->Modelimage}}">
						<button class="btn btn-primary">Select</button>
					    <hr class="hr">
				    </form>
				</div>
				@endforeach
            </div>
        </div>
    </div>
</div>
<!--Three Wheeler Cargo Add Product Modal 3-->


	 </section>  
	 
	 <!--//session category-->
	 
	 <input type='hidden' id='popup_cate' value = {{Session()->get('product')}}>
	 
	 <!--session category-->
	 
	 <section class="script">
	     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
		<script type="text/javascript" src="{{ URL('public/js/bootstrap1.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL('public/js/slick.min.js') }}"></script>
    	<script type="text/javascript" src="{{ URL('public/js/common.js')}}"></script>
          	  <script>
              $( function() {
                var availableTags = [
                  "ActionScript",
                  "AppleScript",
                  "Asp",
                  "BASIC",
                  "C",
                  "C++",
                  "Clojure",
                  "COBOL",
                  "ColdFusion",
                  "Erlang",
                  "Fortran",
                  "Groovy",
                  "Haskell",
                  "Java",
                  "JavaScript",
                  "Lisp",
                  "Perl",
                  "PHP",
                  "Python",
                  "Ruby",
                  "Scala",
                  "Scheme"
                ];
                $( "#search_product" ).autocomplete({
                  source: availableTags
                });
              } );
              </script>
              
            <script>
                $(document).ready(function(){
                    $("#myModalthreec").modal('show');
                });
            </script>
	 </section>
 </body>
</html>