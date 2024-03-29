<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title> DekhoEv/Product-Details </title>
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
        @foreach ($twospecsproduct as $item)
            <header>
                @include('DekhoevWebsite/header')
            </header>
            <section class="main-cnt">
            <div class="container">
                @if(session('Error'))
                    <div class="text-center" style="color:Red;">
                       <h5> {{session('Error')}}</h5>
                    </div>
                @endif  
            </div>
            <div class="container">
                @if(session('loginError'))
                    <div class="text-center" style="color:Red;">
                       <h5> {{session('loginError')}}</h5>
                    </div>
                @endif  
            </div>

                <section class="single-prd">
                    <div class="container">

                        <section class="row">
                            <aside class="col-lg-6">
                                <div class="prd-image">    
								<h2>{{ $item->Model_Name }} - {{ $item->Model_Description}}</h2>
                                    <!-- Tab panes -->                                    
                                    <div class="tab-content float-sm-end">
									@if($item->Modelimage =="") 
									<div id="img" class="container tab-pane active">
                                            <img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/2W.png')}}"
                                                class="img-fluid">
                                        </div>
									@endif
									@if($item->Modelimage <>"")
									<div id="img" class="container tab-pane active">
                                            <img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/' . $item->Modelimage) }}"
                                                class="img-fluid">
                                        </div>
									@endif 
                                        <div id="img2" class="container tab-pane">
                                            <img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/' . $item->Back_Modelimage) }}"
                                                class="img-fluid">
                                        </div>
                                        <div id="img3" class="container tab-pane">
                                            <img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/' . $item->Leftside_Modelimage) }}"
                                                class="img-fluid">
                                        </div>
                                        <div id="img4" class="container tab-pane">
                                            <img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/' . $item->Rightside_Modelimage) }}"
                                                class="img-fluid">
                                        </div>
                                        <div id="img5" class="container tab-pane">
                                            <img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/' . $item->Front_Modelimage) }}"
                                                class="img-fluid">
                                        </div>
                                    </div><!-- ./Tab panes -->

                                    <!-- Nav tabs -->                                    
                                    <ul class="nav nav-tabs float-sm-start" role="tablist">
                                                       
                                    @if($item->Modelimage =="")                                        
									<figure><img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/2W.png')}}" alt="image" class="img-fluid"></figure>                                                                               
                                    @endif    
                                    @if($item->Modelimage <>"")
                                            <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#img"><img
                                                    src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/' . $item->Modelimage) }}"
                                                    class="img-fluid"></a>
                                        </li>                                        
                                    @endif
                                    @if($item->Back_Modelimage =="")                                        
                                            <input type="hidden" value="">                                        
                                    @endif 
                                    @if($item->Back_Modelimage <>"")
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#img2"><img
                                                    src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/' . $item->Back_Modelimage) }}"
                                                    class="img-fluid"></a>
                                        </li>
                                    @endif 
                                    @if($item->Leftside_Modelimage =="")                                        
                                            <input type="hidden" value="">                                        
                                    @endif 
                                    @if($item->Leftside_Modelimage <>"")    
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#img3"><img
                                                    src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/' . $item->Leftside_Modelimage) }}"
                                                    class="img-fluid"></a>
                                        </li>
                                    @endif   
                                    @if($item->Rightside_Modelimage =="")                                        
                                            <input type="hidden" value="">                                        
                                    @endif 
                                    @if($item->Rightside_Modelimage <>"")
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#img4"><img
                                                    src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/' . $item->Rightside_Modelimage) }}"
                                                    class="img-fluid"></a>
                                        </li>
                                    @endif  
                                    @if($item->Front_Modelimage =="")                                        
                                            <input type="hidden" value="">                                        
                                    @endif 
                                    @if($item->Front_Modelimage <>"")
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#img5"><img
                                                    src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/' . $item->Front_Modelimage) }}"
                                                    class="img-fluid"></a>
                                        </li>
                                    @endif 
                                    </ul>
                                    
                                </div>
                            </aside>
                            <aside class="col-lg-6">

                                <div class="prd-details">

                                    <h2>{{ $item->Model_Name }} - {{ $item->Model_Description}}</h2>
                                    @php                                       
                             $servername = "127.0.0.1";
                             $username = "bleapadmin";
                             $password = "BLeap!admin123";
                             $dbname = "dekhoevdb";
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                 if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }    
                                        $Model_Name = session()->get('Model_Name');
                                        $Model_Brand = session()->get('Model_Brand');
                                $sql = "SELECT COUNT(id) AS Review FROM reviewevowners where Model_Brand='$Model_Brand'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row1 = $result->fetch_assoc()) {

                                                $review1= $row1['Review'];
                                                
                                        }}
                                        $sql1 = "SELECT COUNT(id) AS Review FROM reviewmodelratings where Model_Brand='$Model_Brand'";
                                            $result = $conn->query($sql1);
                                            if ($result->num_rows > 0) {
                                                while ($row2 = $result->fetch_assoc()) {

                                                $review2= $row2['Review'];
                                                
                                        }}
                                        $review3=$review1+$review2;


                        @endphp
                                  <!--   <a class="star-blk"><i class="a-ic ic-star star-4-5"></i><span
                                            class="ic-star-link"><b><?php echo $review3;  ?></b>Reviews</span></a> -->


                                            
                        @php

                         $servername = "127.0.0.1";
                                     $username = "bleapadmin";
                                     $password = "BLeap!admin123";
                                     $dbname = "dekhoevdb";
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                                                                 
                                                                                 $Model_Name = session()->get('Model_Name');
                                                                                 
                                                                                 if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                            $sql = "select SUM(Pickup)as pic, COUNT(*) as cou from reviewevowners WHERE Model_Brand='$Model_Brand'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row1 = $result->fetch_assoc()) {

                                         $pic = $row1['pic'];
                                         $cou = $row1['cou'];
                                        
                                         if ($cou==0){
                                                $pic = 0;
                                                $cou = 1;
                                            }
                                            $av =(round($pic/$cou));

                                            echo '<h4>Pickup</h4>';

                                            $avs = str_replace(".","-",$av);

                                            

                                 }}

                                 $sql = "select SUM(Pickup)as pic, COUNT(*) as cou from reviewmodelratings WHERE Model_Brand='$Model_Brand'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row1 = $result->fetch_assoc()) {

                                         $pic = $row1['pic'];
                                         $cou = $row1['cou'];
                                        
                                         if ($cou==0){
                                                $pic = 0;
                                                $cou = 1;
                                            }
                                            $av =(round($pic/$cou));

                                            $avs1 = str_replace(".","-",$av);

                                            

                                 }}

                                 $avs2= ($avs + $avs1)/2;

                                 $avs2=(round($avs2));

                                 echo '<a class="star-blk"><i class="a-ic ic-star star-'.$avs2.'"></i><span class="ic-star-link"><b>'.$review3.' Reviews</b></span></a>';

                        @endphp


                        @php

                         $servername = "127.0.0.1";
                                     $username = "bleapadmin";
                                     $password = "BLeap!admin123";
                                     $dbname = "dekhoevdb";
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                                                                 
                                                                                 $Model_Name = session()->get('Model_Name');
                                                                                 
                                                                                 if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                            $sql = "select SUM(Ease_of_Driving)as pic, COUNT(*) as cou from reviewevowners WHERE Model_Brand='$Model_Brand'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row1 = $result->fetch_assoc()) {

                                         $pic = $row1['pic'];
                                         $cou = $row1['cou'];
                                      
                                         if ($cou==0){
                                                $pic = 0;
                                                $cou = 1;
                                            }
                                            $av =(round($pic/$cou));

                                            echo '<h4>Ease of Driving</h4>';

                                            $avs = str_replace(".","-",$av);

                                            

                                 }}

                                  $sql = "select SUM(Ease_of_Driving)as pic, COUNT(*) as cou from reviewmodelratings WHERE Model_Brand='$Model_Brand'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row1 = $result->fetch_assoc()) {

                                         $pic = $row1['pic'];
                                         $cou = $row1['cou'];
                                      
                                         if ($cou==0){
                                                $pic = 0;
                                                $cou = 1;
                                            }
                                            $av =(round($pic/$cou));

                                            $avs1 = str_replace(".","-",$av);

                                            

                                 }}

                                 $avs2= ($avs + $avs1)/2;

                                 $avs2=(round($avs2));

                                 echo '<a class="star-blk"><i class="a-ic ic-star star-'.$avs2.'"></i><span class="ic-star-link"><b>'.$review3.' Reviews</b></span></a>';



                        @endphp

                        @php

                         $servername = "127.0.0.1";
                                     $username = "bleapadmin";
                                     $password = "BLeap!admin123";
                                     $dbname = "dekhoevdb";
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                                                                 
                                                                                 $Model_Name = session()->get('Model_Name');
                                                                                 
                                                                                 if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                            $sql = "select SUM(Ranges)as pic, COUNT(*) as cou from reviewevowners WHERE Model_Brand='$Model_Brand'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row1 = $result->fetch_assoc()) {

                                         $pic = $row1['pic'];
                                         $cou = $row1['cou'];
                                      
                        if ($cou==0){
                                                $pic = 0;
                                                $cou = 1;
                                            }
                                            $av =(round($pic/$cou));

                                            echo '<h4>Range</h4>';

                                            $avs = str_replace(".","-",$av);



                                 }}
                                 $sql = "select SUM(Ranges)as pic, COUNT(*) as cou from reviewmodelratings WHERE Model_Brand='$Model_Brand'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row1 = $result->fetch_assoc()) {

                                         $pic = $row1['pic'];
                                         $cou = $row1['cou'];
                                      
                        if ($cou==0){
                                                $pic = 0;
                                                $cou = 1;
                                            }
                                            $av =(round($pic/$cou));

                                            $avs1 = str_replace(".","-",$av);



                                 }}

                                 $avs2= ($avs + $avs1)/2;

                                 $avs2=(round($avs2));

                                  echo '<a class="star-blk"><i class="a-ic ic-star star-'.$avs2.'"></i><span class="ic-star-link"><b>'.$review3.' Reviews</b></span></a>';


                        @endphp

                        



                        @php

                         $servername = "127.0.0.1";
                                     $username = "bleapadmin";
                                     $password = "BLeap!admin123";
                                     $dbname = "dekhoevdb";
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                                                                 
                                                                                 $Model_Name = session()->get('Model_Name');
                                                                                 
                                                                                 if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                            $sql = "select SUM(Time_to_Change)as pic, COUNT(*) as cou from reviewevowners WHERE Model_Brand='$Model_Brand'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row1 = $result->fetch_assoc()) {

                                         $pic = $row1['pic'];
                                         $cou = $row1['cou'];
                                      
                                         if ($cou==0){
                                                $pic = 0;
                                                $cou = 1;
                                            }
                                            $av =(round($pic/$cou));

                                            echo '<h4>Time to Charge</h4>';

                                            $avs = str_replace(".","-",$av);



                                            


                                 }}

                                 $sql = "select SUM(Time_to_Change)as pic, COUNT(*) as cou from reviewmodelratings WHERE Model_Brand='$Model_Brand'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row1 = $result->fetch_assoc()) {

                                         $pic = $row1['pic'];
                                         $cou = $row1['cou'];
                                      
                                         if ($cou==0){
                                                $pic = 0;
                                                $cou = 1;
                                            }
                                            $av =(round($pic/$cou));

                                            $avs1 = str_replace(".","-",$av);

                                 }}

                                  $avs2= ($avs + $avs1)/2;

                                 $avs2=(round($avs2));

                                 echo '<a class="star-blk"><i class="a-ic ic-star star-'.$avs2.'"></i><span class="ic-star-link"><b>'.$review3.' Reviews</b></span></a>';


                        @endphp



                        @php

                         $servername = "127.0.0.1";
                                     $username = "bleapadmin";
                                     $password = "BLeap!admin123";
                                     $dbname = "dekhoevdb";
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                                                                 
                                                                                 $Model_Name = session()->get('Model_Name');
                                                                                 
                                                                                 if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                            $sql = "select SUM(Price_value_for_money)as pic, COUNT(*) as cou from reviewevowners WHERE Model_Brand='$Model_Brand'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row1 = $result->fetch_assoc()) {

                                         $pic = $row1['pic'];
                                         $cou = $row1['cou'];
                                      
                                         if ($cou==0){
                                                $pic = 0;
                                                $cou = 1;
                                            }
                                            $av =(round($pic/$cou));

                                            echo '<h4>Price Value for Money</h4>';

                                            $avs = str_replace(".","-",$av);

                                 }}

                                 $sql = "select SUM(Price_value_for_money)as pic, COUNT(*) as cou from reviewmodelratings WHERE Model_Brand='$Model_Brand'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row1 = $result->fetch_assoc()) {

                                         $pic = $row1['pic'];
                                         $cou = $row1['cou'];
                                      
                                         if ($cou==0){
                                                $pic = 0;
                                                $cou = 1;
                                            }
                                            $av =(round($pic/$cou));

                                            $avs1 = str_replace(".","-",$av);

                                 }}

                                  $avs2= ($avs + $avs1)/2;

                                 $avs2=(round($avs2));

                                 echo '<a class="star-blk"><i class="a-ic ic-star star-'.$avs2.'"></i><span class="ic-star-link"><b>'.$review3.' Reviews</b></span></a>';
                        @endphp
             
                                    <p class="price">₹{{ $item->Price_Ex_Showroom }}/-</p>
                                    <p class="small">*Ex-showroom price</p>
                                    <form action="/Website/Feedback" method="get">
                                        <input type="hidden" name="Products" value="{{ $item->Products }}">
                                        <input type="hidden" name="Model_Name" value="{{ $item->Model_Name }}">
					<input type="hidden" name="Model_Description" value="{{$item->Model_Description}}">
                                        <div class="btn-wrap mb20">
                                            <button class="btn-pry">Feedback</button>
                                        </div>
                                    </form>

                                </div>
                            </aside>

                        </section>
                    </div>
                </section>

                <section class="prd-item-desp">
                    <div class="container">
                        <ul class="tab clearfix">
                            <li><a href="#">{{ $item->Model_Name }}</a></li>
                            <li><a href="#price">PRICE</a></li>
                            <li><a href="#specs">SPECS</a></li>
                            <!--<li><a href="#color">COLOUR</a></li>-->
                            <li><a href="#faq">FAQ's</a></li> 
                            <!--<li><a href="#news">NEWS</a></li>-->
                            <li><a href="#review">USER REVIEWS</a></li>
                        </ul>
                        <div class="prd-item-blk">
                            <h3>Model Highlights</h3>
                            <h5>Price of {{$item->Model_Name}} MODEL {{$item->Model_Description}} is INR ₹{{$item->Price_Ex_Showroom}}/- </h5>
                                <!-- <a href="javascript:;">Read more</a></p> -->
                        </div>
                        <div class="prd-item-blk" id="price">
                            <!-- <h3>{{ $item->Model_Name }} Price</h3>
                            <p class="mb20">The price of {{ $item->Model_Name }}  Rs. {{ $item->Price_Ex_Showroom }}
                                .</p> -->
                            <h3> Price List (Model)</h3>
                            <table class="dgv">
                                <tr>
                                    <th>Model</th>
                                    <th>Price</th>
                                    <!-- <th>Compare</th> -->
                                </tr>
                                @foreach($twospecsdesc as $itemdesc)
                                <tr>
                                    <td>{{ $itemdesc->Model_Description }}</td>
                                    <td>&#8377; {{ $itemdesc->Price_Ex_Showroom }}<span></span></td>
                                    <!-- <td>
                                        <div class="form-check pl">
                                            <label class="form-check-label" for="flexCheckDefault">Add To
                                                Compare</label>
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </td> -->
                                </tr>
                                @endforeach
                                <!-- <tr>
                                    <td> PRO</td>
                                    <td>&#8377; 1,39,999<span>*Ex-showroom price in Delhi</span></td>
                                    <td>
                                        <div class="form-check pl">
                                            <label class="form-check-label" for="flexCheckDefault">Add To
                                                Compare</label>
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </td>
                                </tr> -->
                            </table>
                            <form action="/Website/Feedback" method="get">
						     <input type="hidden" name="Products" value="{{$item->Products}}">
						    <input type="hidden" name="Model_Name" value="{{$item->Model_Name}}">
                            			    <input type="hidden" name="Model_Description" value="{{$item->Model_Description}}">
                            <h6 class="py-4" style="color:red">*Prices are indicative and subject to change. Any Model/Price/Feature discrepancy  <a href="/Website/Feedback" ><button class="btn btn-succes-sm" style="color:blue"> please click here....</button></a></h6>
						</form>
                        </div>
                        <div class="prd-item-blk2 twospecs" id="specs">
                            <h3> Specifications</h3>
                            <table class="dgv2">
                                <thead>
                                    <tr>
                                        <th>Feature Name </th>
                                        <th> Values </th>
                                    </tr>
									<tr>
									<td><span><img src="{{ url('/UploadImages/NewFeatureMaster/1670304859.2OEM.png' ) }}" ></span> OEM Brand</td>
										@foreach ($twospecsproduct as $values)
												<td>{{ $values->OEM_name }}</td>
										@endforeach
									<tr>

                                <tr>
								</thead>
                                @foreach ($users as $user)						
                                    <tbody>
										@if($user->Featureimage == "")
								 			<!-- <input type="hidden" value=""> -->
								 			<td> {{ $user->Feature_Name }}  -    {{$user->Unit_of_Measurement}}</td>
										@endif
										@if($user->Featureimage <> "")
										<td> <span><img src="{{ url('/UploadImages/NewFeatureMaster/' . $user->Featureimage) }}" ></span>  {{ $user->Feature_Name }}  -    {{$user->Unit_of_Measurement}}</td>
										@endif
                                            
											<!-- <td>{{ $user->Featureimage }}</td> -->
											
                                            @php
                                                $servername = '127.0.0.1';
                                                $username = 'bleapadmin';
                                                $password = 'BLeap!admin123';
                                                $dbname = 'dekhoevdb';
                                                $conn = new mysqli($servername, $username, $password, $dbname);
                                                $val = $user->Feature_Name;
                                                $val = str_replace(' ', '_', $val);
                                                $val = str_replace('&', '', $val);
                                                $val = str_replace('/', '', $val);
                                                $val = str_replace('@', '', $val);
                                                $val = str_replace('-', '_', $val);
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
                                                $val = str_replace(":", "_",$val);
                                                $val = str_replace(";", "_",$val);
                                                $val = str_replace(",", "_",$val);
                                                $val = str_replace("+", "_",$val);
                                                $val = str_replace("$", "_",$val);
                                                $val = str_replace("^", "_",$val);
                                                $val = str_replace("`", "_",$val);

                                                $model_id = session()->get('model_id');
                                                if ($conn->connect_error) {
                                                    die('Connection failed: ' . $conn->connect_error);
                                                }
                                                $sql = "SELECT * FROM twowheelerspecsfeatures WHERE id='$model_id'";
                                                $result = $conn->query($sql);												
                                                if ($result->num_rows > 0) {
                                                    while ($row1 = $result->fetch_assoc()) {
                                                        echo '<td>' .$row1[$val] .'</td>';
                                                    }
                                                }
                                            @endphp
                                        </tr>
                                    </tbody>
								
								@endforeach
                            </table>
                        </div>

                        <div class="prd-item-blk2" id="color">
                            <div class="color-blk">
                            @if($item->Modelimage =="")  
                                <div class="color-blk-in">                                      
                                        <figure><img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/2W.png')}}" alt="image" class="img-fluid"></figure>                                                                               
                                </div>
                            @endif 
                            @if($item->Modelimage <>"")   
                                <div class="color-blk-in">
                                    <figure><img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/' . $item->Modelimage) }}" class="img-fluid" alt=""></figure>
                                </div>
                            @endif
                            </div>
                        </div>

				<section class="prd-faq" id="faq"><!--FAQ-->
					<div class="">
						<div class="row">
						<h3>Frequently asked questions & answers about Vehicles</h3>                        
							<div class="col-md-12">
								<div class="accordion accordion-flush" id="faqlist">                                
									<div class="accordion-item">
										<h2 class="accordion-header">                                        
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#content-accordion-1">
                                               Q1 :
                                                @foreach($FAQs as $values)	
                                                    {{$values->Question1}} 
                                                @endforeach 
											</button>
										</h2>
										<div id="content-accordion-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
											<div class="accordion-body">

                                                @foreach($FAQs as $values)                                            
                                                    {{$values->Answer1}}
                                                @endforeach
											</div>                                            
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header">                                        
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#content-accordion-2">
                                                Q2 :
                                                @foreach($FAQs as $values)
                                                  {{$values->Question2}}
                                                @endforeach	
                                            </button>  
										</h2>
										<div id="content-accordion-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">											
                                            <div class="accordion-body">
                                                @foreach($FAQs as $values)
                                                  {{$values->Answer2}}
                                                @endforeach	
                                            </div>                                           
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header">											
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#content-accordion-3">
                                            Q3 :
                                            @foreach($FAQs as $values)
                                               {{$values->Question3}}
                                            @endforeach       
                                        </button>                                            
										</h2>
										<div id="content-accordion-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">											
                                        <div class="accordion-body">
                                            @foreach($FAQs as $values)
                                               {{$values->Answer3}}
                                            @endforeach		
                                        </div>                                            
										</div>
									</div>
                                    
									<!-- <div class="accordion-item">
										<h2 class="accordion-header">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#content-accordion-4">
											Q: {{$item->Question4}}
											</button>
										</h2>
										<div id="content-accordion-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
											<div class="accordion-body">
												{{$item->Answer4}}
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#content-accordion-5">
											Q: {{$item->Question5}}
											</button>
										</h2>
										<div id="content-accordion-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
											<div class="accordion-body">
												{{$item->Answer5}}
											</div>
										</div>
									</div> -->
								</div>
							</div>
                            
						</div>                        
					</div>
				</section><!--./FAQ-->

                        <section class="user-review-blk" id="review">
                            <div class="container">
                                <section class="row">
                                    <aside class="col-sm-9">
                                        <h2>{{ $item->Model_Name }} Review</h2>
                                        <!--<a class="star-blk"><i class="a-ic ic-star star-4-5"></i><span class="ic-star-link">4.5/5</span></a>-->
                                        <!--<p class="small">Based on 270 rating & 196 reviews</p>-->
                                    </aside>
                                    <aside class="col-sm-3">
                                        <a class="btn-pry write" type="button" data-bs-target="#exampleModalToggle3"
                                            data-bs-toggle="modal">Write a Review</a>
                                    </aside>
                                </section>
                            </div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <!-- <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#latest">Latest</a>
    </li> -->
                                <!--<li class="nav-item">-->
                                <!--  <a class="nav-link" data-bs-toggle="tab" href="#positive">Positive</a>-->
                                <!--</li>-->
                                <!--<li class="nav-item">-->
                                <!--  <a class="nav-link" data-bs-toggle="tab" href="#negative">Negative</a>-->
                                <!--</li>-->
                            </ul>

                            <!-- Tab panes -->

                            <div class="tab-content">
                                <div id="latest" class="container tab-pane active"><br>



                                    <aside class="review latest">

                                        @foreach ($reviewevowners as $Owner)
                                            <div class="review-blk">
                                                <!--<a class="star-blk"><i class="a-ic ic-star star-4-5"></i></a>-->
                                                <h4 class="mb-3">Pickup : </h4>
                                                @php
                                                    
                                                    $ownpic = $Owner->Pickup;
                                                    if ($ownpic == 1) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-1"></i></a>';
                                                    }
                                                    if ($ownpic == 2) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-2"></i></a>';
                                                    }
                                                    if ($ownpic == 3) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-3"></i></a>';
                                                    }
                                                    if ($ownpic == 4) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-4"></i></a>';
                                                    }
                                                    if ($ownpic == 5) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-5"></i></a>';
                                                    }
                                                    
                                                @endphp

                                                </h4>
                                                <!--<a class="star-blk"><i class="a-ic ic-star star-4-5"></i><span class="ic-star-link">4.5/5</span></a>-->

                                                <!--ease of driving-->

                                                <h4 class="mb-3">Ease of Driving : </h4>
                                                @php
                                                    
                                                    $ownpice = $Owner->Ease_of_driving;
                                                    if ($ownpice == 1) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-1"></i></a>';
                                                    }
                                                    if ($ownpice == 2) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-2"></i></a>';
                                                    }
                                                    if ($ownpice == 3) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-3"></i></a>';
                                                    }
                                                    if ($ownpice == 4) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-4"></i></a>';
                                                    }
                                                    if ($ownpice == 5) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-5"></i></a>';
                                                    }
                                                    
                                                @endphp

                                                </h4>
                                                <!--ease of driving-->
                                                <!--range-->
                                                <h4 class="mb-3">Range : </h4>
                                                @php
                                                    
                                                    $ownpicer = $Owner->Ranges;
                                                    if ($ownpicer == 1) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-1"></i></a>';
                                                    }
                                                    if ($ownpicer == 2) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-2"></i></a>';
                                                    }
                                                    if ($ownpicer == 3) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-3"></i></a>';
                                                    }
                                                    if ($ownpicer == 4) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-4"></i></a>';
                                                    }
                                                    if ($ownpicer == 5) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-5"></i></a>';
                                                    }
                                                    
                                                @endphp

                                                </h4>
                                                <!--range-->

                                                <!--time to change-->
                                                </h4>
                                                <!--ease of driving-->
                                                <!--range-->
                                                <h4 class="mb-3">Time to Charge :</h4>
                                                @php
                                                    
                                                    $ownpicert = $Owner->Time_to_Change;
                                                    if ($ownpicert == 1) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-1"></i></a>';
                                                    }
                                                    if ($ownpicert == 2) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-2"></i></a>';
                                                    }
                                                    if ($ownpicert == 3) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-3"></i></a>';
                                                    }
                                                    if ($ownpicert == 4) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-4"></i></a>';
                                                    }
                                                    if ($ownpicert == 5) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-5"></i></a>';
                                                    }
                                                    
                                                @endphp

                                                </h4>

                                                <!--time to change-->
                                                <!--price value for money-->
                                                </h4>
                                                <!--range-->

                                                <!--time to change-->
                                                </h4>
                                                <!--ease of driving-->
                                                <!--range-->
                                                <h4 class="mb-3">Price Value For Money : </h4>
                                                @php
                                                    
                                                    $ownpicertp = $Owner->Price_value_for_money;
                                                    if ($ownpicertp == 1) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-1"></i></a>';
                                                    }
                                                    if ($ownpicertp == 2) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-2"></i></a>';
                                                    }
                                                    if ($ownpicertp == 3) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-3"></i></a>';
                                                    }
                                                    if ($ownpicertp == 4) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-4"></i></a>';
                                                    }
                                                    if ($ownpicertp == 5) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-5"></i></a>';
                                                    }
                                                    
                                                @endphp

                                                </h4>

                                                <!--price value for money-->

                                                <h4>{{ $item->Model_family_Brand_Name }}</h4>
                                                <p>{{ $Owner->Message }} </p>
                                                <div class="author">
                                                    <!-- <figure><img src="{{ url('/ic-user.png') }}"></figure> -->
                                                    <!-- <div class="author-in">
                                                        <p> {{ $Owner->Name }}</p>
                                                    </div> -->
                                                </div>
                                            </div>
                                        @endforeach
                                        @foreach ($ratings as $ratings)
                                            <div class="review-blk">
                                                <!--<a class="star-blk"><i class="a-ic ic-star star-4-5"></i></a>-->
                                                <h4 class="mb-3">Pickup : </h4>
                                                @php
                                                    
                                                    $ownpic = $ratings->Pickup;
                                                    if ($ownpic == 1) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-1"></i></a>';
                                                    }
                                                    if ($ownpic == 2) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-2"></i></a>';
                                                    }
                                                    if ($ownpic == 3) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-3"></i></a>';
                                                    }
                                                    if ($ownpic == 4) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-4"></i></a>';
                                                    }
                                                    if ($ownpic == 5) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-5"></i></a>';
                                                    }
                                                    
                                                @endphp

                                                </h4>
                                                <!--<a class="star-blk"><i class="a-ic ic-star star-4-5"></i><span class="ic-star-link">4.5/5</span></a>-->

                                                <!--ease of driving-->

                                                <h4 class="mb-3">Ease of Driving : </h4>
                                                @php
                                                    
                                                    $ownpice = $ratings->Ease_of_driving;
                                                    if ($ownpice == 1) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-1"></i></a>';
                                                    }
                                                    if ($ownpice == 2) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-2"></i></a>';
                                                    }
                                                    if ($ownpice == 3) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-3"></i></a>';
                                                    }
                                                    if ($ownpice == 4) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-4"></i></a>';
                                                    }
                                                    if ($ownpice == 5) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-5"></i></a>';
                                                    }
                                                    
                                                @endphp

                                                </h4>
                                                <!--ease of driving-->
                                                <!--range-->
                                                <h4 class="mb-3">Range : </h4>
                                                @php
                                                    
                                                    $ownpicer = $ratings->Ranges;
                                                    if ($ownpicer == 1) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-1"></i></a>';
                                                    }
                                                    if ($ownpicer == 2) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-2"></i></a>';
                                                    }
                                                    if ($ownpicer == 3) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-3"></i></a>';
                                                    }
                                                    if ($ownpicer == 4) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-4"></i></a>';
                                                    }
                                                    if ($ownpicer == 5) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-5"></i></a>';
                                                    }
                                                    
                                                @endphp

                                                </h4>
                                                <!--range-->

                                                <!--time to change-->
                                                </h4>
                                                <!--ease of driving-->
                                                <!--range-->
                                                <h4 class="mb-3">Time to Charge : </h4>
                                                @php
                                                    
                                                    $ownpicert = $ratings->Time_to_Change;
                                                    if ($ownpicert == 1) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-1"></i></a>';
                                                    }
                                                    if ($ownpicert == 2) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-2"></i></a>';
                                                    }
                                                    if ($ownpicert == 3) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-3"></i></a>';
                                                    }
                                                    if ($ownpicert == 4) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-4"></i></a>';
                                                    }
                                                    if ($ownpicert == 5) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-5"></i></a>';
                                                    }
                                                    
                                                @endphp

                                                </h4>

                                                <!--time to change-->
                                                <!--price value for money-->
                                                </h4>
                                                <!--range-->

                                                <!--time to change-->
                                                </h4>
                                                <!--ease of driving-->
                                                <!--range-->
                                                <h4 class="mb-3">Price Value For Money : </h4>
                                                @php
                                                    
                                                    $ownpicertp = $ratings->Price_value_for_money;
                                                    if ($ownpicertp == 1) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-1"></i></a>';
                                                    }
                                                    if ($ownpicertp == 2) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-2"></i></a>';
                                                    }
                                                    if ($ownpicertp == 3) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-3"></i></a>';
                                                    }
                                                    if ($ownpicertp == 4) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-4"></i></a>';
                                                    }
                                                    if ($ownpicertp == 5) {
                                                        echo '	<a class="star-blk"><i class="a-ic ic-star star-5"></i></a>';
                                                    }
                                                    
                                                @endphp

                                                </h4>
                                                <h4>{{ $item->Model_family_Brand_Name }}</h4>
                                                <p>{{ $ratings->Message }} </p>
                                                <div class="author">
                                                    <!-- <figure><img src="{{ url('/ic-user.png') }}"></figure>
                                                    <div class="author-in">
                                                        <p> </p>
                                                    </div> -->
                                                </div>
                                            </div>
                                        @endforeach
                                    </aside>


                                </div>
                            </div>
                        </section>
                    </div>
                </section>

                <!--<section class="popular-bikes-wrap section-wrap-btm">
               <div class="container">-->
                <!--		<div class="popular-bikes best">-->
                <!--			<h2>Best Electric Bikes</h2>-->
                <!--				<section class="popular-bikes-slider2">-->
                <!--						<div class="electric-bike-bx">-->
                <!--							<figure><img src="{{ url('/WebsiteImages/bikes/tvs-iqube-electric.jpg') }}" alt=""></figure>-->
                <!--							<p>TVS iQube Electric<br>&#8377; 1.61 - 1.66 Lakh*</p>-->
                <!--							<a class="btn-view" href="javascript:;">View Details</a>-->
                <!--						</div>-->
                <!--						<div class="electric-bike-bx">-->
                <!--							<figure><img src="{{ url('/WebsiteImages/bikes/ola-s13.jpg') }}" alt=""></figure>-->
                <!--							<p>Ola S1<br>&#8377; 99,999 - 1.40 Lakh*</p>-->
                <!--							<a class="btn-view" href="javascript:;">View Details</a>-->
                <!--						</div>-->
                <!--						<div class="electric-bike-bx">-->
                <!--							<figure><img src="{{ url('/WebsiteImages/bikes/ather-450x3.jpg') }}" alt=""></figure>-->
                <!--							<p>Ather 450X<br>&#8377; 1.17 - 1.39 Lakh*</p>-->
                <!--							<a class="btn-view" href="javascript:;">View Details</a>-->
                <!--						</div>-->
                <!--						<div class="electric-bike-bx">-->
                <!--							<figure><img src="{{ url('/WebsiteImages/bikes/tvs-iqube-electric.jpg') }}" alt=""></figure>-->
                <!--							<p>TVS iQube Electric<br>&#8377; 1.61 - 1.66 Lakh*</p>-->
                <!--							<a class="btn-view" href="javascript:;">View Details</a>-->
                <!--						</div>-->
                <!--				</section>-->
                <!--				</div>-->
                <!--			</div>-->
                <!--		</section>-->

                <footer class="section-wrap">
                    @include('DekhoevWebsite/footer')
                </footer>
            </section>



           <!--Review section Strat-->


<!--review popup section1-->

<div class="modal fade" id="exampleModalToggle" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <section class="write-a-review"><!--Write A Review-->
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" type="button" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">
				<label class="form-check-label" for="flexCheckDefault">
				Do you own same/similar product from this brand?
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" type="button" data-bs-target="#exampleModalToggle5" data-bs-toggle="modal" data-bs-dismiss="modal">
				<label class="form-check-label" for="flexCheckChecked">
				Are you an auto blogger who has driven this product?
				</label>
			</div>
		</section>
      </div>
    </div>
  </div>
</div>
<!-- <div class="modal fade" id="exampleModalToggle2" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <section class="would-u-like">
			<p>would you like to review ?</p>
			<div class="btn-wrap"> 
				<a class="btn-pry" data-bs-toggle="modal" href="#exampleModalToggle3" role="button">Yes</a>
				<a class="btn-sec" href="javascript:;">No</a>
			</div>
		</section>
      </div>
    </div>
  </div>
</div> -->

<!--review popup section1-->

<!--review popup section2-->

<div class="modal fade" id="exampleModalToggle3" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <section class="three-option"><!--three option-->
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"  data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" data-bs-dismiss="modal">
			  <label class="form-check-label" for="flexRadioDefault1">
			  <input type="hidden" name="Products" value="{{$item->Products}}">
		      <input type="hidden" name="Model_Name" value="{{$item->Model_Name}}">
              <input type="hidden" name="User_Types" value="Owner">
				Are you an Owner?
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"  data-bs-toggle="modal" href="#exampleModalToggle5" role="button">
			  <label class="form-check-label" for="flexRadioDefault2">
			  <input type="hidden" name="Products" value="{{$item->Products}}">
		      <input type="hidden" name="Model_Name" value="{{$item->Model_Name}}">	
              <input type="hidden" name="User_Types" value="Blogger">		      
				Are you a Blogger?
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" data-bs-toggle="modal" href="#exampleModalToggle10" role="button">
			  <label class="form-check-label" for="flexRadioDefault3">
			  <input type="hidden" name="Products" value="{{$item->Products}}">
		      <input type="hidden" name="Model_Name" value="{{$item->Model_Name}}">	
              <input type="hidden" name="User_Types" value="OEM">		      
				Are you a representative from an OEM?
			  </label>
			</div>
		</section><!--./three option-->
      </div>
    </div>
  </div>
</div>

            <!--Owner Form-->

            <form action="{{ URL::to('/Website/Review/Owner_Store') }}" method="POST">
                {!! csrf_field() !!}
                <div class="modal fade" id="exampleModalToggle4" data-bs-backdrop="static" aria-hidden="true"
                    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel2"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <section class="owner-signin-form">
                                    <!--Owner Form-->
                                    <h2>{{ $item->Model_Name }}</h2>
                                    <p class="st"> </p>

                                    <input type="hidden" name="Products" value="{{ $item->Products }}">
                                    <input type="hidden" name="Model_Name" value="{{ $item->Model_Name }}">
                                    <input type="hidden" name="Model_Brand" value="{{ $item->Model_family_Brand_Name }}">

                                    <input type="hidden" name="User_Types" value="Owner">


                                    <div class="form-wrap my-3">
                                        <input type="text" name="Name" placeholder="Name" class="form-control"
                                            required />
                                    </div>
                                    <div class="form-wrap my-3">
                                        <input type="text" name="Email" placeholder="Email"
                                            class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                            required />
                                    </div>
                                    <div class="form-wrap my-3">
                                        <input type="tel" name="Mobile_Number" placeholder="Mobile No"
                                            class="form-control" required />
                                    </div>
                                    <div class="form-wrap my-3">
                                        <label>Are you willing to answer Other people's Queries</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                name="Are_you_willing_to_answer_Other_People_Queries"
                                                id="inlineRadio1">
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                name="Are_you_willing_to_answer_Other_People_Queries"
                                                id="inlineRadio2">
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
                                    </div>
                                    <div class="form-wrap my-3" >
                                          <p> <b> Rating selection: select from 1 to 5 as rating. 1 - Poor  and  5 - Excellent</b></p>              
                                    </div>
                                    <div class="form-wrap my-3">
                                        <table>
                                            <tr>
                                                <td><label><b>Pickup</b></label></td>
                                                <td>
                                                    <select name="Pickup" id="Pickup" required>
                                                      <option value="">Given Ratings</option>
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="3">3</option>
                                                      <option value="4">4</option>
                                                      <option value="5">5</option>
                                                    </select>
                                                </td>
                                                <!-- <td><input type="text" name="Pickup" maxlength="1" required>
                                                </td> -->
                                            </tr>
                                            <tr>
                                                <td><label><b>Ease of Driving</b></label></td>
                                                <td>
                                                    <select name="Ease_of_driving" id="Ease_of_driving" required>
                                                      <option value="">Given Ratings</option>
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="3">3</option>
                                                      <option value="4">4</option>
                                                      <option value="5">5</option>
                                                    </select>
                                                </td>
                                                <!-- <td><input type="text" name="Ease_of_driving" maxlength="1"
                                                        required></td> -->
                                            </tr>
                                            <tr>
                                                <td><label><b>Range</b></label></td>
                                                <td>
                                                    <select name="Ranges" id="Ranges" required>
                                                      <option value="">Given Ratings</option>
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="3">3</option>
                                                      <option value="4">4</option>
                                                      <option value="5">5</option>
                                                    </select>
                                                </td>
                                                <!-- <td><input type="text" name="Range" maxlength="1" required>
                                                </td> -->
                                            </tr>
                                            <tr>
                                                <td><label><b>Time to Charge</b></label></td>
                                                <td>
                                                    <select name="Time_to_Change" id="Time_to_Change" required>
                                                      <option value="">Given Ratings</option>
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="3">3</option>
                                                      <option value="4">4</option>
                                                      <option value="5">5</option>
                                                    </select>
                                                </td>
                                                <!-- <td><input type="text" name="Time_to_Change" maxlength="1"
                                                        required></td> -->
                                            </tr>
                                            <tr>
                                                <td><label><b>Price Value for Money</b></label></td>
                                                <td>
                                                    <select name="Price_value_for_money" id="Price_value_for_money" required>
                                                      <option value="">Given Ratings</option>
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="3">3</option>
                                                      <option value="4">4</option>
                                                      <option value="5">5</option>
                                                    </select>
                                                </td>
                                                <!-- <td><input type="text" name="Price_value_for_money" maxlength="1"
                                                        required></td> -->
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="form-wrap my-3">
                                        <textarea class="form-control" id="Massage" name="Message" rows="3" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="form-wrap my-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="Want_to_convey_your_review_to_Manufacturer"
                                                id="flexCheckDefault" onclick="showvehicle()">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Would you like to convey your review to the manufacturer?
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-wrap my-3" id="Vehicles" style="display:none;">
                                        <label>Vehicle Registration No :</label>&nbsp;<span><input type="text"
                                                name="Vehicle_Registration_No" placeholder="Enter Vehicle number"
                                                class="form-control" /></span>
                                    </div>
                                    <div class="btn-wrap text-center my-3">
                                        <center><button class="btn-pry" type="submit" value="save">Submit</button>
                                        </center>
                                    </div>
                                </section>
                                <!--./Owner Form-->

                            </div>
                        </div>
                    </div>
                </div>
            </form>

<!--review popup section 2-->

<!--review popup section 3-->
<div class="modal fade" id="exampleModalToggle5" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <section class="blogger"><!--Blogger-->
			<div class="btn-wrap"> 
				<a class="btn-pry" href="javascript:;"  data-bs-target="#exampleModalToggle6" data-bs-toggle="modal" data-bs-dismiss="modal">Sign up</a>
				<a class="btn-sec" href="javascript:;" data-bs-target="#exampleModalToggle7" data-bs-toggle="modal" data-bs-dismiss="modal">Login</a>
			</div>
		</section><!--./Blogger-->
      </div>
    </div>
  </div>
</div>


<!--Auto Blogger-->

<form action="{{URL::to('/Website/Review/Blogger_store')}}" method="POST">
    {!! csrf_field() !!}
<div class="modal fade" id="exampleModalToggle6" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <section class="auto-blogger-form"><!--Auto Blogger-->
			<!--<h2>Auto Blogger</h2>-->

				    <input type="hidden" name="Products" value="{{$item->Products}}">
                    <input type="hidden" name="Model_Name" value="{{$item->Model_Name}}">	
                    <input type="hidden" name="Model_Brand" value="{{ $item->Model_family_Brand_Name }}">

                    <input type="hidden" name="User_Types" value="Blogger">
			
					<div class="form-wrap my-3">
						<input type="text"  name="Name" placeholder="Name" class="form-control" required/>
					</div>
					<div class="form-wrap my-3">
						<input type="text" name="Email" placeholder="Email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
					</div>
					<div class="form-wrap my-3">
						<input type="tel" name="Mobile_Number" placeholder="Mobile No" class="form-control"  required/>
					</div>
					<div class="form-wrap my-3">
						<input type="password" name="Password"  placeholder="Create Password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
					</div>
					<div class="form-wrap my-3">
						<label>Are you willing to answer Other people's Queries</label><br>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="Are_you_willing_to_answer_Other_People_Queries" id="inlineRadio1" >
						  <label class="form-check-label" for="inlineRadio1">Yes</label>
						</div>
						<div class="form-check form-check-inline my-3">
						  <input class="form-check-input" type="radio" name="Are_you_willing_to_answer_Other_People_Queries" id="inlineRadio2" >
						  <label class="form-check-label" for="inlineRadio2">No</label>
						</div>
					</div>
					<div class="btn-wrap text-center my-3">
						<center><button class="btn-pry" type="submit" value="save">Create</button></center>
					</div>
		</section><!--./Auto Blogger-->
      </div>
    </div>
  </div>
</div>
</form>
<!--review pop up section3-->

<!--review popup section 4-->
 <!--login Section-->
 <form action="{{URL::to('/Website/Review/login_store')}}" method="POST">
    {!! csrf_field() !!}
<div class="modal fade" id="exampleModalToggle7" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    
      <div class="modal-body">
        <section class="login-form"><!--Login-->
			<h2>Log in</h2>

				    <input type="hidden" name="Products" value="{{$item->Products}}">
                   		    <input type="hidden" name="Model_Name" value="{{$item->Model_Name}}">
 		                    <input type="hidden" name="Model_Brand" value="{{ $item->Model_family_Brand_Name }}">                               
                            <input type="hidden" name="User_Types" value="Blogger">
                    
                    
					<div class="form-wrap my-3">
						<input type="text" name="MobileNumber_Email" placeholder="Email-ID" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
					</div>
					<div class="form-wrap my-3">
						<input type="password" name="password" placeholder="Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" required/>
					</div>
					<div class="btn-wrap my-3 text-center">
						<center><button class="btn-pry" type="submit" value="save">login</button></center>
					</div>

		</section><!--./Login-->
      </div>

    </div>
  </div>
</div>
</form> 

<!--Ratings Section -->


<!--oem popup section sign in or login-->
<div class="modal fade" id="exampleModalToggle10" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <section class="blogger"><!--oem-->
			<div class="btn-wrap"> 
				<a class="btn-pry" href="javascript:;"  data-bs-target="#exampleModalToggle11" data-bs-toggle="modal" data-bs-dismiss="modal">Sign up</a>
				<a class="btn-sec" href="javascript:;" data-bs-target="#exampleModalToggle12" data-bs-toggle="modal" data-bs-dismiss="modal">Login</a>
			</div>
		</section><!--./oem-->
      </div>
    </div>
  </div>
</div>



<!--OEM sign in popup form-->

<form action="{{URL::to('/Website/Review/Blogger_store')}}" method="POST">
    {!! csrf_field() !!}
<div class="modal fade" id="exampleModalToggle11" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <section class="auto-blogger-form"><!--oem-->
			<!-- <h2>oem</h2> -->

				    <input type="hidden" name="Products" value="{{$item->Products}}">
                    <input type="hidden" name="Model_Name" value="{{$item->Model_Name}}">	
                    <input type="hidden" name="Model_Brand" value="{{ $item->Model_family_Brand_Name }}">

                    <input type="hidden" name="User_Types" value="OEM">
			
					<div class="form-wrap my-3">
						<input type="text"  name="Name" placeholder="Name" class="form-control" required/>
					</div>
					<div class="form-wrap my-3">
						<input type="text" name="Email" placeholder="Email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
					</div>
					<div class="form-wrap my-3">
						<input type="tel" name="Mobile_Number" placeholder="Mobile No" class="form-control"  required/>
					</div>
					<div class="form-wrap my-3">
						<input type="password" name="Password"  placeholder="Create Password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
					</div>
					<div class="form-wrap my-3">
						<label>Are you willing to answer Other people's Queries</label><br>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="Are_you_willing_to_answer_Other_People_Queries" id="inlineRadio1" >
						  <label class="form-check-label" for="inlineRadio1">Yes</label>
						</div>
						<div class="form-check form-check-inline my-3">
						  <input class="form-check-input" type="radio" name="Are_you_willing_to_answer_Other_People_Queries" id="inlineRadio2" >
						  <label class="form-check-label" for="inlineRadio2">No</label>
						</div>
					</div>
					<div class="btn-wrap text-center my-3">
						<center><button class="btn-pry" type="submit" value="save">Create</button></center>
					</div>
		</section><!--.oem-->
      </div>
    </div>
  </div>
</div>
</form>

<!--OEM sign in popup form end-->

<!--OEM login popup form-->
<form action="{{URL::to('/Website/Review/oemlogin_store')}}" method="POST">
    {!! csrf_field() !!}
<div class="modal fade" id="exampleModalToggle12" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    
      <div class="modal-body">
        <section class="login-form"><!--Login-->
			<h2>Log in</h2>

				            <input type="hidden" name="Products" value="{{$item->Products}}">
                   		    <input type="hidden" name="Model_Name" value="{{$item->Model_Name}}">
 		                    <input type="hidden" name="Model_Brand" value="{{ $item->Model_family_Brand_Name }}">  
							<input type="hidden" name="User_Types" value="OEM">                          

                  
                    
					<div class="form-wrap my-3">
						<input type="text" name="MobileNumber_Email" placeholder="Email ID" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  required/>
					</div>
					<div class="form-wrap my-3">
						<input type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" required/>
					</div>
					<div class="btn-wrap my-3 text-center">
						<center><button class="btn-pry" type="submit" value="save">login</button></center>
					</div>

		</section><!--./Login-->
      </div>

    </div>
  </div>
</div>
</form> 
<!--OEM login popup form end-->

<form action="" method="POST">
    {!! csrf_field() !!}
<div class="modal fade" id="exampleModalToggle8" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <section class="owner-signin-form"><!--EV Auto OEM Next-->
			<p class="st">For {{$item->Model_Name}}</p>
				<form>
					<div class="form-wrap">
						<label>Are you willing to answer Other people's Queries</label><br>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
						  <label class="form-check-label" for="inlineRadio1">Yes</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
						  <label class="form-check-label" for="inlineRadio2">No</label>
						</div>
					</div>
				<div class="form-wrap">
					<div class="star-wrap"><label>Pickup</label><a class="star-blk"><i class="a-ic ic-star star-4-5"></i></a></div>
					<div class="star-wrap"><label>Ease of Driving</label><a class="star-blk"><i class="a-ic ic-star star-3"></i></a></div>
					<div class="star-wrap"><label>Range</label><a class="star-blk"><i class="a-ic ic-star star-1-5"></i></a></div>
					<div class="star-wrap"><label>Time to Charge</label><a class="star-blk"><i class="a-ic ic-star star-0-5"></i></a></div>
					<div class="star-wrap"><label>Price Value for Money</label><a class="star-blk"><i class="a-ic ic-star star-2-5"></i></a></div>
				</div>
				<div class="form-wrap">
					<textarea class="form-control" id="" rows="3"  placeholder="Message" required></textarea>
				</div>
					<div class="btn-wrap text-center">
						<a class="btn-pry" href="javascript:;">Submit</a>
					</div>
				</form>
		</section><!--./EV Auto OEM Next-->
      </div>
    </div>
  </div>
</div>
</form>
<!--review popup section 4-->

@endforeach

	 <section>
	     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	    <script type="text/javascript" src="../js/bootstrap1.min.js"></script>
    	<script type="text/javascript" src="../js/common.js"></script>
    	<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
    	<script type="text/javascript" src="../js/slick.min.js"></script>
	 </section>
     <script>  
function showvehicle() {  
    var x = document.getElementById("Vehicles");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }   
}  
</script> 
<a href="javascript:" id="return-to-top"><img src="{{ url('http://dekhoev.com/WebsiteImages/up-arrow.png') }}"></a>
 </body>
</html>
