<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>DekhoEv/Comparision-Table</title>
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

	
@php
if(count($user2) == 0){
	

@endphp

@foreach($user as $item)
		    @foreach($user1 as $item1)

			<section class="comparision-table-tp">
				<div class="container">
					<section class="row">
						<div class="bread-comp"><p>{{$item->Model_Name}} -{{$item->Model_Description}}  V/s {{$item1->Model_Name}} -  {{$item1->Model_Description}}</div>
						<aside class="col-sm-3 compare-opt">
							<!-- <div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
							  <label class="form-check-label" for="flexCheckDefault">Hide common features</label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
							  <label class="form-check-label" for="flexCheckChecked">Highlight differences</label>
							</div>	 -->				
						</aside>
						<aside class="col-sm-9">
							<ul class="compare-list">
								<li>
									<div class="compare-list-bx">
									@if($item->Modelimage =="")
										<figure><img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/2W.png')}}" alt="image" class="img-fluid"></figure>                                        
										@endif
										@if($item->Modelimage <> "")
										<figure><img src="{{url('/UploadImages/NewModel/Twowheelerspecsfeature/'. $item->Modelimage)}}" class="img-fluid"></figure>
										@endif										
										<h4>{{$item->Model_Name}} -  {{$item->Model_Description}}</h4>
										<p> ₹.{{$item->Price_Ex_Showroom}} /-<span></span> </p>
									</div>
								</li>
								<li>
									<div class="compare-list-bx">
									@if($item1->Modelimage =="")
										<figure><img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/2W.png')}}" alt="image" class="img-fluid"></figure>                                        
										@endif
										@if($item1->Modelimage <> "")
										<figure><img src="{{url('/UploadImages/NewModel/Twowheelerspecsfeature/'. $item1->Modelimage)}}" class="img-fluid"></figure>
										@endif	

										<h4>{{$item1->Model_Name}} -  {{$item1->Model_Description}}</h4> 
										<p>₹.{{$item1->Price_Ex_Showroom}} /-<span></span> </p>
									</div>
								</li>
								<li>
									
								</li>
							</ul>		
						</aside>
					</section>
				</div>
			</section>

			<section class="comparision-table-wrap">
				<div class="container">
					<section class="section-wrap"><!--wheeler-->
            <div id="table-scroll" class="table-scroll">
              <div class="table-wrap">
                <table class="main-table">
                  <thead>
                    <tr>
                      <th class="fixed-side wbg" scope="col">Overview</th>
                      <th scope="col">&nbsp;</th>
                      <th scope="col">&nbsp;</th>
                      <th scope="col">&nbsp;</th>
                    </tr>
                    <tr>
                    <td class="fixed-side"><span><img src="{{ url('/UploadImages/NewFeatureMaster/1670304859.2OEM.png' ) }}" ></span>OEM Brand</td>
							@foreach ($user as $values)	
                            @foreach ($user1 as $values1)
    						   <td>{{ $values->OEM_name }}</td>
                               <td>{{ $values1->OEM_name }}</td>
						   @endforeach
                           @endforeach
					<tr>
                  </thead>
                  <tbody>
                       @foreach ($user3 as $user)
                   <tr>
                   <!-- <th class="fixed-side">{{$user->Feature_Name}} -	{{$user->Unit_of_Measurement}}</th> -->
                   @if($user->Featureimage == "")
								 			<!-- <input type="hidden" value=""> -->
								 			<td> {{ $user->Feature_Name }}  -    {{$user->Unit_of_Measurement}}</td>
										@endif
										@if($user->Featureimage <> "")
										<td class="fixed-side"> <span><img src="{{ url('/UploadImages/NewFeatureMaster/' . $user->Featureimage) }}" ></span>  {{ $user->Feature_Name }}  -    {{$user->Unit_of_Measurement}}</td>
										@endif
                   <!--test-->
                   
                   @php
                                     $servername = "127.0.0.1";
                                     $username = "bleapadmin";
                                     $password = "BLeap!admin123";
                                     $dbname = "dekhoevdb";
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                                                                 $val = $user->Feature_Name;
                                                                                 $val = str_replace(" ","_",$val);
                                                                                 $val = str_replace("&","",$val);
                                                                                 $val = str_replace("/","",$val);
                                                                                 $val = str_replace("@","",$val);
                                                                                 $val = str_replace("-","_",$val);
																				 $val = str_replace("(","_",$val);
																				 $val = str_replace(")","_",$val);
																				 $val = str_replace("{","_",$val);
																				 $val = str_replace("}","_",$val);
																				 $val = str_replace(",","_",$val);
																				 $val = str_replace("!","_",$val);
																				 $val = str_replace("?","_",$val);
																				 $val = str_replace('!', '_', $val);
																				 $val = str_replace('*', '_', $val);
																				 $val = str_replace('<', '_', $val);
																				 $val = str_replace('>', '_', $val);
																				 $val = str_replace('#', '_', $val);
																				 $val = str_replace('~', '_', $val);
																				 $val = str_replace(":", "_", $val);
                                                                                 $val = str_replace(";", "_", $val);
                                                                                 $val = str_replace(",", "_", $val);
                                                                                 $val = str_replace("+", "_", $val);
                                                                                 $val = str_replace("$", "_", $val);
                                                                                 $val = str_replace("^", "_", $val);
                                                                                 $val = str_replace("`", "_", $val);

                                                                                 $Model_Id_Threec1 = session()->get('Model_Id_Threec1');
                                                                                 $Model_Id_Threec2 = session()->get('Model_Id_Threec2');
                                       
                                                                                 if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                        
                                        $model_id =$item->id;
                                        $model_id1=$item1->id;
                                         
                                        
                                            $sql = "SELECT * FROM twowheelerspecsfeatures WHERE id='$Model_Id_Threec1'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row1 = $result->fetch_assoc()) {
                                                echo' 
                                                <td>'.$row1[$val].'</td>
                                                ';
                                        }}
                                        
                                        //second comparision
                                        $sql1 = "SELECT * FROM twowheelerspecsfeatures WHERE id='$Model_Id_Threec2'";
                                            $result1 = $conn->query($sql1);
                                            if ($result1->num_rows > 0) {
                                                while ($row1 = $result1->fetch_assoc()) {
                                                echo' 
                                                <td>'.$row1[$val].'</td>
                                                ';
                                        }}
                                        
                                        
                                        
                                       @endphp
                   
                   
                   <!--test-->
                   
                   @endforeach
                    </tr>
                  </tbody>
            	  <tfoot>
                    <tr>
                      <th class="fixed-side">&nbsp;</th>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
			</section><!--./wheeler-->
		    </div>	
		    @endforeach
		    @break
		    @endforeach
		    

@php
}

@endphp

@php
if(count($user1) == 0){
	


@endphp

@foreach($user as $item)
		    @foreach($user2 as $item2)

			<section class="comparision-table-tp">
				<div class="container">
					<section class="row">
						<div class="bread-comp"><p>{{$item->Model_Name}} -  {{$item->Model_Description}} V/s {{$item2->Model_Name}} -  {{$item2->Model_Description}}</div>
						<aside class="col-sm-3 compare-opt">
							<!-- <div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
							  <label class="form-check-label" for="flexCheckDefault">Hide common features</label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
							  <label class="form-check-label" for="flexCheckChecked">Highlight differences</label>
							</div>	 -->				
						</aside>
						<aside class="col-sm-9">
							<ul class="compare-list">
								<li>
									<div class="compare-list-bx">
									@if($item->Modelimage =="")
										<figure><img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/2W.png')}}" alt="image" class="img-fluid"></figure>                                        
										@endif
										@if($item->Modelimage <> "")
										<figure><img src="{{url('/UploadImages/NewModel/Twowheelerspecsfeature/'. $item->Modelimage)}}" class="img-fluid"></figure>
										@endif	
										<h4>{{$item->Model_Name}} -  {{$item->Model_Description}}</h4>
										<p> ₹.{{$item->Price_Ex_Showroom}} /-<span></span> </p>
									</div>
								</li>
								<li>
									<div class="compare-list-bx">
									@if($item2->Modelimage =="")
										<figure><img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/2W.png')}}" alt="image" class="img-fluid"></figure>                                        
										@endif
										@if($item2->Modelimage <> "")
										<figure><img src="{{url('/UploadImages/NewModel/Twowheelerspecsfeature/'. $item2->Modelimage)}}" class="img-fluid"></figure>
										@endif	
										<h4>{{$item2->Model_Name}} -  {{$item2->Model_Description}}</h4> 
										<p> ₹.{{$item2->Price_Ex_Showroom}} /-<span></span> </p>
									</div>
								</li>
								<li>
									
								</li>
							</ul>		
						</aside>
					</section>
				</div>
			</section>

			<section class="comparision-table-wrap">
				<div class="container">
					<section class="section-wrap"><!--wheeler-->
            <div id="table-scroll" class="table-scroll">
              <div class="table-wrap">
                <table class="main-table">
                  <thead>
                    <tr>
                      <th class="fixed-side wbg" scope="col">Overview</th>
                      <th scope="col">&nbsp;</th>
                      <th scope="col">&nbsp;</th>
                      <th scope="col">&nbsp;</th>
                    </tr>
                    <tr>
                    <td class="fixed-side"><span><img src="{{ url('/UploadImages/NewFeatureMaster/1670304859.2OEM.png' ) }}" ></span>OEM Brand</td>
							@foreach ($user as $values)	
                            @foreach ($user2 as $values1)
    						   <td>{{ $values->OEM_name }}</td>
                               <td>{{ $values1->OEM_name }}</td>
						   @endforeach
                           @endforeach
					<tr>
                  </thead>
                  <tbody>
                       @foreach ($user3 as $user)
                   <tr>
                   <!-- <th class="fixed-side">{{$user->Feature_Name}} -  {{$user->Unit_of_Measurement}}</th> -->
                   @if($user->Featureimage == "")
								 			<!-- <input type="hidden" value=""> -->
								 			<td> {{ $user->Feature_Name }}  -    {{$user->Unit_of_Measurement}}</td>
										@endif
										@if($user->Featureimage <> "")
										<td class="fixed-side"> <span><img src="{{ url('/UploadImages/NewFeatureMaster/' . $user->Featureimage) }}" > </span> {{ $user->Feature_Name }}  -    {{$user->Unit_of_Measurement}}</td>
										@endif
                   <!--test-->
                   
                   @php
                                     $servername = "127.0.0.1";
                                     $username = "bleapadmin";
                                     $password = "BLeap!admin123";
                                     $dbname = "dekhoevdb";
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                                                                 $val = $user->Feature_Name;
                                                                                 $val = str_replace(" ","_",$val);
                                                                                 $val = str_replace("&","",$val);
                                                                                 $val = str_replace("/","",$val);
                                                                                 $val = str_replace("@","",$val);
                                                                                 $val = str_replace("-","_",$val);
																				 $val = str_replace("(","_",$val);
																				 $val = str_replace(")","_",$val);
																				 $val = str_replace("{","_",$val);
																				 $val = str_replace("}","_",$val);
																				 $val = str_replace(",","_",$val);
																				 $val = str_replace("!","_",$val);
																				 $val = str_replace("?","_",$val);
																				 $val = str_replace('!', '_', $val);
																				 $val = str_replace('*', '_', $val);
																				 $val = str_replace('<', '_', $val);
																				 $val = str_replace('>', '_', $val);
																				 $val = str_replace('#', '_', $val);
																				 $val = str_replace('~', '_', $val);
																				 $val = str_replace(":", "_", $val);
                                                                                 $val = str_replace(";", "_", $val);
                                                                                 $val = str_replace(",", "_", $val);
                                                                                 $val = str_replace("+", "_", $val);
                                                                                 $val = str_replace("$", "_", $val);
                                                                                 $val = str_replace("^", "_", $val);
                                                                                 $val = str_replace("`", "_", $val);
                                                                                 $Model_Id_Threec1 = session()->get('Model_Id_Threec1');
                                                                                 $Model_Id_Threec3 = session()->get('Model_Id_Threec3');
                                       
                                                                                 if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                        
                                        $model_id =$item->id;
                                        $model_id1=$item2->id;
                                         
                                        
                                            $sql = "SELECT * FROM twowheelerspecsfeatures WHERE id='$Model_Id_Threec1'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row1 = $result->fetch_assoc()) {
                                                echo' 
                                                <td>'.$row1[$val].'</td>
                                                ';
                                        }}
                                        
                                        //second comparision
                                        $sql1 = "SELECT * FROM twowheelerspecsfeatures WHERE id='$Model_Id_Threec3'";
                                            $result1 = $conn->query($sql1);
                                            if ($result1->num_rows > 0) {
                                                while ($row1 = $result1->fetch_assoc()) {
                                                echo' 
                                                <td>'.$row1[$val].'</td>
                                                ';
                                        }}
                                        
                                        
                                        
                                       @endphp
                   
                   
                   <!--test-->
                   
                   @endforeach
                    </tr>
                  </tbody>
            	  <tfoot>
                    <tr>
                      <th class="fixed-side">&nbsp;</th>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
			</section><!--./wheeler-->
		    </div>	
		    @endforeach
		    @break
		    @endforeach
		    

@php
}

@endphp

		    @foreach($user as $item)
		    @foreach($user1 as $item1)
		    @foreach($user2 as $item2)
			<section class="comparision-table-tp">
				<div class="container">
					<section class="row">
						<div class="bread-comp"><p>{{$item->Model_Name}} -  {{$item->Model_Description}} V/s {{$item1->Model_Name}} - {{$item1->Model_Description}} V/s {{$item2->Model_Name}} -  {{$item2->Model_Description}}</div>
						<aside class="col-sm-3 compare-opt">
							<!-- <div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
							  <label class="form-check-label" for="flexCheckDefault">Hide common features</label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
							  <label class="form-check-label" for="flexCheckChecked">Highlight differences</label>
							</div> -->					
						</aside>
						<aside class="col-sm-9">
							<ul class="compare-list">
								<li>
									<div class="compare-list-bx">
									@if($item->Modelimage =="")
										<figure><img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/2W.png')}}" alt="image" class="img-fluid"></figure>                                        
										@endif
										@if($item->Modelimage <> "")
										<figure><img src="{{url('/UploadImages/NewModel/Twowheelerspecsfeature/'. $item->Modelimage)}}" class="img-fluid"></figure>
										@endif	
										<h4>{{$item->Model_Name}} - {{$item->Model_Description}}</h4>
										<p>&#8377; {{$item->Price_Ex_Showroom}} /-<span></span> </p>
									</div>
								</li>
								<li>
									<div class="compare-list-bx">
									@if($item1->Modelimage =="")
										<figure><img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/2W.png')}}" alt="image" class="img-fluid"></figure>                                        
										@endif
										@if($item1->Modelimage <> "")
										<figure><img src="{{url('/UploadImages/NewModel/Twowheelerspecsfeature/'. $item1->Modelimage)}}" class="img-fluid"></figure>
										@endif	
										<h4>{{$item1->Model_Name}} - {{$item1->Model_Description}}</h4> 
										<p>&#8377; {{$item1->Price_Ex_Showroom}} /-<span></span> </p>
									</div>
								</li>
								<li>
									<div class="compare-list-bx">
									@if($item2->Modelimage =="")
										<figure><img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/2W.png')}}" alt="image" class="img-fluid"></figure>                                        
										@endif
										@if($item2->Modelimage <> "")
										<figure><img src="{{url('/UploadImages/NewModel/Twowheelerspecsfeature/'. $item2->Modelimage)}}" class="img-fluid"></figure>
										@endif	
										<h4>{{$item2->Model_Name}} - {{$item2->Model_Description}}</h4> 
										<p>&#8377; {{$item2->Price_Ex_Showroom}} /- <span></span> </p>
									</div>
								</li>
							</ul>		
						</aside>
					</section>
				</div>
			</section>

			<section class="comparision-table-wrap">
				<div class="container">
					<section class="section-wrap"><!--wheeler-->
            <div id="table-scroll" class="table-scroll">
              <div class="table-wrap">
                <table class="main-table">
                  <thead>
                    <tr>
                      <th class="fixed-side wbg" scope="col">Overview</th>
                      <th scope="col">&nbsp;</th>
                      <th scope="col">&nbsp;</th>
                      <th scope="col">&nbsp;</th>
                    </tr>
                    <tr>
						<td class="fixed-side"><span><img src="{{ url('/UploadImages/NewFeatureMaster/1670304859.2OEM.png' ) }}" ></span>OEM Brand</td>
							@foreach ($user as $values)	
                            @foreach ($user1 as $values1)
                            @foreach ($user2 as $values2)
    						   <td>{{ $values->OEM_name }}</td>
                               <td>{{ $values1->OEM_name }}</td>
                               <td>{{ $values2->OEM_name }}</td>
						   @endforeach
                           @endforeach
                           @endforeach
					<tr>
                  </thead>
                  <tbody>
                      
                      
                      @foreach ($user3 as $user)
                   <tr>
                   <!-- <th class="fixed-side">{{$user->Feature_Name}} -  {{$user->Unit_of_Measurement}}</th> -->
                   @if($user->Featureimage == "")
								 			<!-- <input type="hidden" value=""> -->
								 			<td> {{ $user->Feature_Name }}  -    {{$user->Unit_of_Measurement}}</td>
										@endif
										@if($user->Featureimage <> "")
										<td class="fixed-side"> <span><img src="{{ url('/UploadImages/NewFeatureMaster/' . $user->Featureimage) }}" ></span>  {{ $user->Feature_Name }}  -    {{$user->Unit_of_Measurement}}</td>
										@endif
                   <!--test-->
                   
                   @php
                                     $servername = "127.0.0.1";
                                     $username = "bleapadmin";
                                     $password = "BLeap!admin123";
                                     $dbname = "dekhoevdb";
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                                                                 $val = $user->Feature_Name;
                                                                                 $val = str_replace(" ","_",$val);
                                                                                 $val = str_replace("&","",$val);
                                                                                 $val = str_replace("/","",$val);
                                                                                 $val = str_replace("@","",$val);
                                                                                 $val = str_replace("-","_",$val);
																				 $val = str_replace("(","_",$val);
																				 $val = str_replace(")","_",$val);
																				 $val = str_replace("{","_",$val);
																				 $val = str_replace("}","_",$val);
																				 $val = str_replace(",","_",$val);
																				 $val = str_replace("!","_",$val);
																				 $val = str_replace("?","_",$val);
																				 $val = str_replace('!', '_', $val);
																				 $val = str_replace('*', '_', $val);
																				 $val = str_replace('<', '_', $val);
																				 $val = str_replace('>', '_', $val);
																				 $val = str_replace('#', '_', $val);
																				 $val = str_replace('~', '_', $val);
																				 $val = str_replace(":", "_", $val);
                                                                                 $val = str_replace(";", "_", $val);
                                                                                 $val = str_replace(",", "_", $val);
                                                                                 $val = str_replace("+", "_", $val);
                                                                                 $val = str_replace("$", "_", $val);
                                                                                 $val = str_replace("^", "_", $val);
                                                                                 $val = str_replace("`", "_", $val);
																				 
                                                                                 $Model_Id_Threec1 = session()->get('Model_Id_Threec1');
                                                                                 $Model_Id_Threec2 = session()->get('Model_Id_Threec2');
                                                                                 $Model_Id_Threec3 = session()->get('Model_Id_Threec3');
                                                                                 if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                        
                                        $model_id =$item->id;
                                        $model_id1=$item1->id;
                                        $model_id2=$item2->id;
                                        
                                        
                                            $sql = "SELECT * FROM twowheelerspecsfeatures WHERE id='$Model_Id_Threec1'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row1 = $result->fetch_assoc()) {
                                                echo' 
                                                <td>'.$row1[$val].'</td>
                                                ';
                                        }}
                                        
                                        //second comparision
                                        $sql1 = "SELECT * FROM twowheelerspecsfeatures WHERE id='$Model_Id_Threec2'";
                                            $result1 = $conn->query($sql1);
                                            if ($result1->num_rows > 0) {
                                                while ($row1 = $result1->fetch_assoc()) {
                                                echo' 
                                                <td>'.$row1[$val].'</td>
                                                ';
                                        }}
                                        
                                        //third comparision
                                        
                                        $sql2 = "SELECT * FROM twowheelerspecsfeatures WHERE id='$Model_Id_Threec3'";
                                            $result2 = $conn->query($sql2);
                                            if ($result2->num_rows > 0) {
                                                while ($row2 = $result2->fetch_assoc()) {
                                                echo' 
                                                <td>'.$row2[$val].'</td>
                                                ';
                                        }}
                                        
                                        
                                       @endphp
                   
                   
                   <!--test-->
                   
                   @endforeach
                   
                    <!--<tr>-->
                    <!--  <th class="fixed-side">Make Model</th>-->
                    <!--  <td>{{$item->Model_Name}}</td>-->
                    <!--  <td>{{$item1->Model_Name}}</td>-->
                    <!--  <td>{{$item2->Model_Name}}</td>-->
                    <!--</tr>-->
                    </tr>
                  </tbody>
            	  <tfoot>
                    <tr>
                      <th class="fixed-side">&nbsp;</th>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
			</section><!--./wheeler-->
		    </div>	
		    @endforeach
		    @endforeach
		    @endforeach
			</section>

			<footer class="section-wrap">
				@include('DekhoevWebsite/footer')
			</footer>

			<!-- Modal -->
<div class="modal fade" id="myModal3">
	<div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
			<section class="row">
			<aside class="col-sm-3">
				<div class="add-vehicle" data-bs-toggle="modal" data-bs-target="#myModal4">
					<div class="add-vehicle-in">
						<figure><img src="/icon-add.png"></figure>
						<p>Add Vehicle</p>
					</div>
				</div>
			</aside>
			<aside class="col-sm-3">
				<div class="add-vehicle" data-bs-toggle="modal" data-bs-target="#myModal4">
					<div class="add-vehicle-in">
						<figure><img src="/icon-add.png"></figure>
						<p>Add Vehicle</p>
					</div>
				</div>
			</aside>
			<aside class="col-sm-3">
				<div class="add-vehicle" data-bs-toggle="modal" data-bs-target="#myModal4">
					<div class="add-vehicle-in">
						<figure><img src="/icon-add.png"></figure>
						<p>Add Vehicle</p>
					</div>
				</div>
			</aside>
			<aside class="col-sm-3">
				<div class="add-vehicle" data-bs-toggle="modal" data-bs-target="#myModal4">
					<div class="add-vehicle-in">
						<figure><img src="/icon-add.png"></figure>
						<p>Add Vehicle</p>
					</div>
				</div>
			</aside>
			<div class="btn-wrap">
			<a class="btn-pry" href="javascript:;">Compare</a>
			</div>
			</section>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="myModal4" data-backdrop="static">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">                        
            <h3>Add Product to Comparison</h3><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
			 <div class="search">
				  <i class="fa fa-search"></i>
				  <input type="text" class="form-control" placeholder="Search">
				  <button class="btn btn-primary">Search</button>
				</div>
				<div class="search-wrap">
					<section class="row">
						<aside class="item-img col-sm-3"><figure><img src="/hyundai-venue.png"></figure></aside>
						<aside class="item-cnt col-sm-9">
							<div class="item-cnt-in">
							<p>Hyundai Venue</p>
							<p class="grn">&#8377; 1,20,000 - &#8377; 1,40,000 </p>	
							</div>					
						</aside>
					</section>				
				</div>
				<div class="search-wrap">
					<section class="row">
						<aside class="item-img col-sm-3"><figure><img src="/hyundai-grand.png"></figure></aside>
						<aside class="item-cnt col-sm-9">
							<div class="item-cnt-in">
							<p>Hyundai Grand i10 Nios</p>
							<p class="grn">&#8377; 1,20,000 - &#8377; 1,40,000 </p>	
							</div>					
						</aside>
					</section>				
				</div>
				<div class="search-wrap">
					<section class="row">
						<aside class="col-sm-3"><figure><img src="{{ url('/logo.png')}}" alt=""></figure></aside>
						<aside class="item-cnt col-sm-9">
							<div class="item-cnt-in">
							<p>Hyundai Venue</p>
							<p class="grn">&#8377; 1,20,000 - &#8377; 1,40,000 </p>	
							</div>
						</aside>
					</section>				
				</div>
        </div>
      </div>
    </div>
</div>
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





