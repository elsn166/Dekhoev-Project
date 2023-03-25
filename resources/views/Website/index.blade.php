<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DekoEV|Home Page</title>
        {{--  bootstrap css styles  --}}
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('pubic/css/bootstrap-grid.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-grid.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-grid.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-grid.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-reboot.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-reboot.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-reboot.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-reboot.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-utilities.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-utilities.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-utilities.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-utilities.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/custom1.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/style.css') }}" />
        {{--  font awesome cdn  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

</head>
<body>
    <section class="home_section">
        <div class="header_section">
            @include('Website/header')
        </div>
        <section class="banner_section">
            <div class="">
                <img src="{{ url('public/UploadImages/Website/banner1.jpg') }}" class="w-100" alt="banner_image">
            </div>
            <form action="" method="">
                <div class="container searchcar">
                    <div class="row">
                        <div class="col-1">
                            
                        </div>
                        <div class="col-2">
                            <div class="card py-3 px-2 my-5">
                                <h6 class="text-center fw-bold">Type</h6>
                                <input type="text" class="bannerinput text-center" name="type" id="type" placeholder="Select Type">
                            </div>
                        </div>
                         <div class="col-2">
                            <div class="card py-3 px-2 my-5">
                                <h6 class="text-center fw-bold">Price</h6>
                                <input type="text" class="bannerinput text-center" name="type" id="type" placeholder="Price Range">
                            </div>
                        </div>
                         <div class="col-2">
                            <div class="card py-3 px-2 my-5">
                                <h6 class="text-center fw-bold">Location</h6>
                                <input type="text" class="bannerinput text-center" name="type" id="type" placeholder="City">
                            </div>
                        </div>
                         <div class="col-2">
                            <div class="card py-3 px-2 my-5">
                                <h6 class="text-center fw-bold">Charging Time</h6>
                                <input type="text" class="bannerinput text-center" name="type" id="type" placeholder="Hrs">
                            </div>
                        </div>
                         <div class="col-2">
                            <div class="card py-3 px-2 my-5">
                                <h6 class="text-center fw-bold">Range</h6>
                                <input type="text" class="bannerinput text-center" name="type" id="type" placeholder="KM Range">
                            </div>
                        </div>
                        <div class="col-1">
                            
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="save" class="text-center searchev px-2 py-1 fw-bold">Search For Your EV</button>
                    </div>
                </div>
            </form>
        </section>
        <section class="home_icons">
            <div class="container">
                <div class="row py-5">
                     <div class="col-3">
                        <div class="card pt-2 text-center">
                            <img class="card-img-top " src="{{ url('public/UploadImages/Website/twowheel.png') }}" alt="Two Wheeler">
                            <h5 class="text-center fw-bold">2 Wheeler</h5>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card pt-2 text-center">
                            <img class="card-img-top " src="{{ url('public/UploadImages/Website/fourwheel.png') }}" alt="Four Wheeler "> 
                            <h5 class="text-center fw-bold">4 Wheeler</h5>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card pt-2 text-center">
                            <img class="card-img-top" src="{{ url('public/UploadImages/Website/threewheelcargo.png') }}" alt="Three Wheeler Cargo">
                            <h5 class="text-center fw-bold">3 Wheeler Cargo</h5>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card pt-2 text-center">
                            <img class="card-img-top" src="{{ url('public/UploadImages/Website/threewheelpass.png') }}" alt="Three Wheeler Pass">
                            <h5 class="text-center fw-bold">3 Wheeler Pass</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home_brands">
            <div class="container">
                <div class="row py-5">
                    <h2 class="py-3">All Brands</h2>
                    <!--<div class="col">-->
                    <!--     <img class="card-img-top " src="{{ url('public/UploadImages/Website/logo1.png') }}" alt="Card image cap">-->
                    <!--</div>-->
                    <!-- <div class="col">-->
                    <!--     <img class="card-img-top " src="{{ url('public/UploadImages/Website/logo2.png') }}" alt="Card image cap">-->
                    <!--</div>-->
                    <!-- <div class="col">-->
                    <!--     <img class="card-img-top " src="{{ url('public/UploadImages/Website/logo3.png') }}" alt="Card image cap">-->
                    <!--</div>-->
                    <!-- <div class="col">-->
                    <!--     <img class="card-img-top " src="{{ url('public/UploadImages/Website/logo4.png') }}" alt="Card image cap">-->
                    <!--</div>-->
                    <!-- <div class="col">-->
                    <!--     <img class="card-img-top " src="{{ url('public/UploadImages/Website/logo5.png') }}" alt="Card image cap">-->
                    <!--</div>-->
                    <!-- <div class="col">-->
                    <!--     <img class="card-img-top " src="{{ url('public/UploadImages/Website/logo6.png') }}" alt="Card image cap">-->
                    <!--</div>-->
                    <!-- <div class="col">-->
                    <!--     <img class="card-img-top " src="{{ url('public/UploadImages/Website/logo7.png') }}" alt="Card image cap">-->
                    <!--</div>-->
                    <div class="logoall">
                        <img class="img-fluid" src="{{ url('public/UploadImages/Website/logoall.png') }}" alt="Card image cap">
                    </div>
                </div>
            </div>
        </section>
        <section class="home_evgyaan">
            <div class="container">
                <div class="row py-5">
                    <h2 class="">EV Gyaan</h2>
                    <div class="col-3">
                        <div class="card evgyaan_card">
                            <img class="card-img-top p-3" src="{{ url('public/UploadImages/Website/car1.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">MG ZS5</h5>
                                <p class="card-text fw-bold">The seventh model to be included in Maruti Suzuki’s growing CNG line-up is the carmaker’s popular hatchback, the Swift. Almost five months...<a href="#" class="evgyaan_readmore">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card evgyaan_card">
                            <img class="card-img-top p-3" src="{{ url('public/UploadImages/Website/car1.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">MG ZS5</h5>
                                <p class="card-text fw-bold">The seventh model to be included in Maruti Suzuki’s growing CNG line-up is the carmaker’s popular hatchback, the Swift. Almost five months...<a href="#" class="evgyaan_readmore">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card evgyaan_card">
                            <img class="card-img-top p-3" src="{{ url('public/UploadImages/Website/car1.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">MG ZS5</h5>
                                <p class="card-text fw-bold">The seventh model to be included in Maruti Suzuki’s growing CNG line-up is the carmaker’s popular hatchback, the Swift. Almost five months...<a href="#" class="evgyaan_readmore">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card evgyaan_card">
                            <img class="card-img-top p-3" src="{{ url('public/UploadImages/Website/car1.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">MG ZS5</h5>
                                <p class="card-text fw-bold">The seventh model to be included in Maruti Suzuki’s growing CNG line-up is the carmaker’s popular hatchback, the Swift. Almost five months...<a href="#" class="evgyaan_readmore">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home_comparision">
            <div class="container">
                <div class="row py-5">
                    <div class="col-6 comparecol1">
                        <div class="row sub_row py-3">
                            <div class="col-5 ">
                                <div class="card evgyaan_card" >
                                    <img class="card-img-top" src="{{ url('public/UploadImages/Website/car1.png') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="fw-bold">Honda Civic EV</h5>
                                        <h6 class="fw-bold">Starting at ₹14,00,000</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <img class="card-img-top  vsimage" src="{{ url('public/UploadImages/Website/vs.png') }}" alt="Card image cap">
                            </div>
                            <div class="col-5 evgyaan_card">
                                <div class="card evgyaan_card" >
                                    <img class="card-img-top" src="{{ url('public/UploadImages/Website/car1.png') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="fw-bold">Tata Nexon EV</h4>
                                        <h6 class="fw-bold">Starting at ₹14,00,000</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="px-3 py-2 evgyaan_compare w-50 fw-bold">Compare Cars</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 comparecol2">
                        <div class="row sub_row py-3">
                            <div class="col-5">
                                <div class="card evgyaan_card" >
                                    <img class="card-img-top" src="{{ url('public/UploadImages/Website/car1.png') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="fw-bold">Honda Civic EV</h5>
                                        <h6 class="fw-bold">Starting at ₹14,00,000</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <img class="card-img-top  vsimage" src="{{ url('public/UploadImages/Website/vs.png') }}" alt="Card image cap">
                            </div>
                            <div class="col-5 evgyaan_card">
                                <div class="card evgyaan_card" >
                                    <img class="card-img-top" src="{{ url('public/UploadImages/Website/car1.png') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="fw-bold">Tata Nexon EV</h4>
                                        <h6 class="fw-bold">Starting at ₹14,00,000</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="px-3 py-2 evgyaan_compare w-50 fw-bold">Compare Cars</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-6 comparecol1">
                        <form action="" method="">
                            <div class="row sub_row py-3">
                                <div class="col-5 ">
                                    <div class="card evgyaan_card" >
                                        <img class="card-img-top" src="{{ url('public/UploadImages/Website/car1.png') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="fw-bold">Honda Civic EV</h5>
                                            <h6 class="fw-bold">Starting at ₹14,00,000</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <img class="card-img-top  vsimage" src="{{ url('public/UploadImages/Website/vs.png') }}" alt="Card image cap">
                                </div>
                                <div class="col-5 evgyaan_card">
                                    <div class="card evgyaan_card" >
                                        <img class="card-img-top" src="{{ url('public/UploadImages/Website/car1.png') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="fw-bold">Tata Nexon EV</h4>
                                            <h6 class="fw-bold">Starting at ₹14,00,000</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="px-3 py-2 evgyaan_compare w-50 fw-bold">Compare Cars</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-6 comparecol2">
                        <form action="" method="">
                            <div class="row sub_row py-3">
                                <div class="col-5">
                                    <div class="card evgyaan_card" >
                                        <img class="card-img-top" src="{{ url('public/UploadImages/Website/car1.png') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="fw-bold">Honda Civic EV</h5>
                                            <h6 class="fw-bold">Starting at ₹14,00,000</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <img class="card-img-top  vsimage" src="{{ url('public/UploadImages/Website/vs.png') }}" alt="Card image cap">
                                </div>
                                <div class="col-5 evgyaan_card">
                                    <div class="card evgyaan_card" >
                                        <img class="card-img-top" src="{{ url('public/UploadImages/Website/car1.png') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="fw-bold">Tata Nexon EV</h4>
                                            <h6 class="fw-bold">Starting at ₹14,00,000</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="px-3 py-2 evgyaan_compare w-50 fw-bold">Compare Cars</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <div class="footer_section">
            @include('Website/footer')
        </div>
    </section>


    {{--  bootstrap js files  --}}
<script type="text/javascript" src="{{ URL('public/js/bootstrap.bundle.js') }}"></script>
<script type="text/javascript" src="{{ URL('public/js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ URL('public/js/bootstrap.esm.js') }}"></script>
<script type="text/javascript" src="{{ URL('public/js/bootstrap.esm.min.js') }}"></script>
<script type="text/javascript" src="{{ URL('public/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ URL('public/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL('public/js/custom.js') }}"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


</body>
</html>
