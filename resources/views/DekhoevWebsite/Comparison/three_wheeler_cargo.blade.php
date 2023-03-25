<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Three Wheeler Cargo</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-style.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-responsive.css" />
	<link rel="stylesheet" type="text/css" href="../css/slick.css" />
	<link rel="stylesheet" type="text/css" href="{{ url('../css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 </head>
 <body>
 <form action="{{URL::to('/Website/Comparisions-Table-Three-Wheeler-Cargo')}}" method="POST">
 {!! csrf_field() !!}
	 <section class="wrapper">
		 <header>
			 @include('DekhoevWebsite/header')
		</header>
		

		<section class="main-cnt compare-wrap">
				<div class="container">
			<section class="compare-wrap-in section-wrap"><!--wheeler-->
				<section class="row">
							
			<aside class="col-sm-4">
				<div class="add-vehicle">
					<div class="add-vehicle-in">
						<section class="choose-img">								
							<figure class="filename" for="file-input"><img id="imager1" src="{{url('WebsiteImages/comarison_plus_logo.jpeg')}}" class="img-fluid"></figure>							
							<!-- <input name="file" type="file"> -->
						</section>	
						<p>Add Vehicle</p>

						<select class="form-select" name="Model_Id_Threec1" aria-label="Default select example" id="select1" onChange="enable2()">
							<option selected="">Select Model</option>	
							@foreach($ThreeWheelerCargo as $item)
							<option value="{{$item->id}}">{{$item->Model_Name}}  -  {{$item->Model_Description}}</option>	
							@endforeach								
						</select>
					 
					</div>
				</div>
			</aside>
			
			<aside class="col-sm-4">
				<div class="add-vehicle">
					<div class="add-vehicle-in">
						<section class="choose-img">								
							<figure class="filename" for="file-input"><img id="imager2" src="{{url('WebsiteImages/comarison_plus_logo.jpeg')}}" class="img-fluid"></figure>
							<!-- <input name="file" type="file"> -->
						</section>
						<p>Add Vehicle</p>

						<select class="form-select" name="Model_Id_Threec2" aria-label="Default select example" id="select2" disabled="true" onChange="enable3()">
							<option selected="">Select Model</option>	
							@foreach($ThreeWheelerCargo as $item)		
							<option value="{{$item->id}}">{{$item->Model_Name}}  -  {{$item->Model_Description}}</option>	
							@endforeach								
						</select>

					</div>
				</div>
			</aside>
			<aside class="col-sm-4">
				<div class="add-vehicle">
					<div class="add-vehicle-in">
						<section class="choose-img">								
							<figure class="filename" for="file-input"><img id="imager3" src="{{url('WebsiteImages/comarison_plus_logo.jpeg')}}" class="img-fluid"></figure>
							<!-- <input name="file" type="file"> -->
						</section>
						<p>Add Vehicle</p>

						<select class="form-select" name="Model_Id_Threec3" aria-label="Default select example"  id="select3" disabled="true" onChange="enable4()">
							<option selected="">Select Model</option>	
							@foreach($ThreeWheelerCargo as $item)
							<option value="{{$item->id}}">{{$item->Model_Name}}  -  {{$item->Model_Description}}</option>	
							@endforeach								
						</select>

					</div>
				</div>
			</aside>

			<div class="btn-wrap text-center">				
			<button class="btn-pry" type="submit" >Compare</button>
			</div>
			</section>
			</section>			
				</div>			
		</section><!--./wheeler-->
		
</form>
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


	 <script>
		function enable2()
		{
		    if(document.getElementById("select1").value!=""){
		        document.getElementById("select2").disabled=false;
				var imgr = document.getElementById('select1').value;
		         $.ajax({
                    url: '/Ajax3wc',
                    type: 'GET',
                    data: {imgr:imgr},
					success: function(data) {
						if(data == ""){
							var datas = "/UploadImages/NewModel/Threewheelercargofeature/3WC.png"+data;							
	                      $("#imager1").attr("src",datas);
						}
	                    if(data !=""){
							var datas = "/UploadImages/NewModel/Threewheelercargofeature/"+data;
	                      $("#imager1").attr("src",datas);
						}

	                    
	                },
	                error: function(XMLHttpRequest, textStatus, errorThrown) {
                        }               //case error                    }
        });

			    }

		    else{ 
		    document.getElementById("select2").disabled=true;
}
		}
	</script>
	<script>
		function enable3()
		{
		    if(document.getElementById("select2").value!=""){
		        document.getElementById("select3").disabled=false;
		        var imgr = document.getElementById('select2').value;
		         $.ajax({
                    url: '/Ajax3wc1',
                    type: 'GET',
                    data: {imgr:imgr},

					success: function(data) {
						if(data == ""){
							var datas = "/UploadImages/NewModel/Threewheelercargofeature/3WC.png"+data;							
	                      $("#imager2").attr("src",datas);
						}
	                    if(data !=""){
							var datas = "/UploadImages/NewModel/Threewheelercargofeature/"+data;
	                      $("#imager2").attr("src",datas);
						}

	                    
	                },
	                error: function(XMLHttpRequest, textStatus, errorThrown) {
                        }               //case error                    }
        });
		    }
		    else
		    document.getElementById("select3").disabled=true;

		}
	</script>
	<script>
		function enable4()
		{
		    
		        var imgr = document.getElementById('select3').value;
		         $.ajax({
                    url: '/Ajax3wc2',
                    type: 'GET',
                    data: {imgr:imgr},
					success: function(data) {
						if(data == ""){
							var datas = "/UploadImages/NewModel/Threewheelercargofeature/3WC.png"+data;							
	                      $("#imager3").attr("src",datas);
						}
	                    if(data !=""){
							var datas = "/UploadImages/NewModel/Threewheelercargofeature/"+data;
	                      $("#imager3").attr("src",datas);
						}

	                    
	                },
	                error: function(XMLHttpRequest, textStatus, errorThrown) {
                        }               //case error                    }
        });
		    
		  
		}
		  
	</script>


	<script>
		$('#select1').change(function() {        
		    value1 = this.value;
		    $("#select2 option[value!='" + value1 + "']").show();
		    $("#select2 option[value='" + value1 + "']").hide();
		    $("#select3 option[value!='" + value1 + "']").show();
		    $("#select3 option[value='" + value1 + "']").hide();                                               
		});

		$('#select2').change(function() {        
		    value2 = this.value;
		    $("#select1 option[value!='" + value2 + "']").show();
		    $("#select1 option[value='" + value2 + "']").hide();
		    $("#select3 option[value!='" + value2 + "']").show();
		    $("#select3 option[value='" + value2 + "']").hide();                                               
		});


		$('#select3').change(function() {        
		    value3 = this.value;
		    if(value1 == value3){
		    	alert('You have already selected this variant. Please choose a different variant for comparison.');
		    }
		    else{
		    	$("#select1 option[value!='" + value3 + "']").show();
			    $("#select1 option[value='" + value3 + "']").hide();
			    $("#select2 option[value!='" + value3 + "']").show();
			    $("#select2 option[value='" + value3 + "']").hide();
		    }
		                                                   
		});
	</script>

	</script>
	<a href="javascript:" id="return-to-top"><img src="{{ url('http://dekhoev.com/WebsiteImages/up-arrow.png') }}"></a>
 </body>
</html>