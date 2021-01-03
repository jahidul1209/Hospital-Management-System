<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- css -->
    <link href="{{asset('medical/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('medical/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('medical/plugins/cubeportfolio/css/cubeportfolio.min.css')}}">
    <link href="{{asset('medical/css/nivo-lightbox.css')}}" rel="stylesheet" />
    <link href="{{asset('medical/css/nivo-lightbox-theme/default/default.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('medical/css/owl.carousel.css')}}" rel="stylesheet" media="screen" />
    <link href="{{asset('medical/css/owl.theme.css')}}" rel="stylesheet" media="screen" />
    <link href="{{asset('medical/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('medical/css/style.css')}}" rel="stylesheet">

    <!-- boxed bg -->
    <link id="bodybg" href="{{asset('medical/bodybg/bg1.css')}}" rel="stylesheet" type="text/css" />
    <!-- template skin -->
    <link id="t-colors" href="{{asset('medical/color/default.css')}}" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>

<body class="antialiased" id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
    
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="top-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                    <p class="bold text-left">{{date('D M Y  h:i:sa') }} </p>
                    </div>
                    <div class="col-sm-6 col-md-6">
                    <p class="bold text-right">Call us now 01925076358</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container navigation">
        
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="{{URL::to('medical/img/logo.png')}}" alt="" width="150" height="40" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#facility">Facility</a></li>
                <li><a href="#partner">Partner</a></li>

                    @auth
                        <li><a href="{{ url('admin/dashboard') }}" class="text-sm text-gray-700 ">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 ">Login</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 ">Register</a></li>
                        @endif
                    @endauth

              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    

    <!-- Section: intro -->
    <section id="intro" class="intro">
        <div class="intro-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                    <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                    <h2 class="h-ultra">Medicio medical group</h2>
                    </div>
                    <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                    <h4 class="h-light">Provide <span class="color">best quality healthcare</span> for you</h4>
                    </div>
                        <div class="well well-trans">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">

                        <ul class="lead-list">
                            <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Affordable monthly premium packages</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
                            <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Choose your favourite doctor</strong><br />Sit zril sanctus scaevola ei, ea usu movet graeco</span></li>
                            <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Only use friendly environment</strong><br />Wisi lobortis eos ex, per at movet delectus, qui no vocent deleniti</span></li>
                        </ul>

                        </div>
                        </div>


                    </div>
                    <div class="col-lg-6">
            <div class="form-wrapper">
            <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
            
                <div class="panel panel-skin">
                <div class="panel-heading">
                        <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Make an appoinment <small>(It's free!)</small></h3>
                        </div>
                        <div class="panel-body">


                        <form role="form" class="lead" method="post" action="{{ route('appoinment.store') }}">
                               @csrf
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="f_name" id="f_name" class="form-control input-md">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="l_name" id="l_name" class="form-control input-md">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" required name="email" id="email" class="form-control input-md">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label>Phone number</label>
                                        <input type="text" name="phone" id="phone" class="form-control input-md">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea type="text" name="description" id="description" class="form-control input-md"></textarea> 
                                    </div>
                                </div>
                            </div>
                            
                            <input type="submit" value="Submit" class="btn btn-skin btn-block btn-lg">
                            
                            <p class="lead-footer">* We'll contact you by phone & email later</p>
                        
                        </form>
                    </div>
                </div>              
            
                        </div>
                        </div>
                    </div>                  
                </div>      
            </div>
        </div>      
    </section>
    
    <!-- /Section: intro -->

    <!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">
    
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            
                            <i class="fa fa-check fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Make an appoinment</h4>
                            <p>
                            Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            
                            <i class="fa fa-list-alt fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Choose your package</h4>
                            <p>
                            Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-user-md fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Help by specialist</h4>
                            <p>
                            Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            
                            <i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Get diagnostic report</h4>
                            <p>
                            Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /Section: boxes -->
    
    
    <section id="callaction" class="home-section paddingtop-40">    
           <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="callaction bg-gray">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="cta-text">
                                    <h3>In an emergency? Need help now?</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit uisque interdum ante eget faucibus. </p>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                        <div class="cta-btn">
                                        <a href="#" class="btn btn-skin btn-lg">Book an appoinment</a>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>  
    

    <!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">

        <div class="container">

        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                <img src="{{URL::to('medical/img/dummy/img-1.jpg')}}" class="img-responsive" alt="" />
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                
                <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="service-box">
                    <div class="service-icon">
                        <span class="fa fa-stethoscope fa-3x"></span> 
                    </div>
                    <div class="service-desc">
                        <h5 class="h-light">Medical checkup</h5>
                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                    </div>
                </div>
                </div>
                
                <div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="service-box">
                    <div class="service-icon">
                        <span class="fa fa-wheelchair fa-3x"></span> 
                    </div>
                    <div class="service-desc">
                        <h5 class="h-light">Nursing Services</h5>
                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                    </div>
                </div>
                </div>
                <div class="wow fadeInRight" data-wow-delay="0.3s">
                <div class="service-box">
                    <div class="service-icon">
                        <span class="fa fa-plus-square fa-3x"></span> 
                    </div>
                    <div class="service-desc">
                        <h5 class="h-light">Pharmacy</h5>
                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                    </div>
                </div>
                </div>


            </div>
            <div class="col-sm-3 col-md-3">
                
                <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="service-box">
                    <div class="service-icon">
                        <span class="fa fa-h-square fa-3x"></span> 
                    </div>
                    <div class="service-desc">
                        <h5 class="h-light">Gyn Care</h5>
                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                    </div>
                </div>
                </div>
                
                <div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="service-box">
                    <div class="service-icon">
                        <span class="fa fa-filter fa-3x"></span> 
                    </div>
                    <div class="service-desc">
                        <h5 class="h-light">Neurology</h5>
                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                    </div>
                </div>
                </div>
                <div class="wow fadeInRight" data-wow-delay="0.3s">
                <div class="service-box">
                    <div class="service-icon">
                        <span class="fa fa-user-md fa-3x"></span> 
                    </div>
                    <div class="service-desc">
                        <h5 class="h-light">Sleep Center</h5>
                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                    </div>
                </div>
                </div>

            </div>
            
        </div>      
        </div>
    </section>
    <!-- /Section: services -->

    <!-- Section: works -->
    <section id="facility" class="home-section paddingbot-60">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="section-heading text-center">
                    <h2 class="h-bold">Our facilities</h2>
                    <p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
                    </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>


   @php
    $allpost = DB::table('posts')->get();
    @endphp
<div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
                    <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div id="owl-works" class="owl-carousel">



        @foreach( $allpost as $row)
                             
                        <div class="item">
                             <a href="{{route('post.details',$row->id)}}" ><img src="{{asset('public/image/'.$row->photo)}} " style ="height:220px;width:100%" class="img-responsive" alt="img"></a><br>
                             <a href="{{route('post.details',$row->id)}}" style ="font-size: 20px;">{{$row->title}}</a> &nbsp;&nbsp;|&nbsp;&nbsp; 
                             <a href="#" style ="font-size: 15px;">{{$row->category}}</a>
                             <div class="author">
                                    <span class="text-small-gray text-uppercase text-extra-small d-lg-inline-block d-block md-margin-10px-top">by <a href="blog-masonry.html" class="text-small-gray">{{$row->author}}</a>&nbsp;&nbsp;|&nbsp;&nbsp;{{$row->created_at}}</span>
                                </div>
                            
                        </div>
                 @endforeach
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: works -->
    
    <section id="partner" class="home-section paddingbot-60">   
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                    <div class="section-heading text-center">
                    <h2 class="h-bold">Our partner</h2>
                    <p>Take charge of your health today with our specially designed health packages</p>
                    </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>
        
           <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="partner">
                        <a href="#"><img src="{{URL::to('/medical/img/dummy/partner-1.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="partner">
                        <a href="#"><img src="{{URL::to('/medical/img/dummy/partner-2.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="partner">
                        <a href="#"><img src="{{URL::to('/medical/img/dummy/partner-3.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="partner">
                        <a href="#"><img src="{{URL::to('/medical/img/dummy/partner-4.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
    </section>  
    
</div>

<footer class="footer " 
    style="text-align: center;
    padding-top: 25px;
    padding-bottom: 25px;
    font-size: 22px;
    color: blue;">
    2020 © Pavel.
</footer>

    <!-- Core JavaScript Files -->
    <script src="{{asset('medical/js/jquery.min.js')}}"></script>     
    <script src="j{{asset('medical/s/bootstrap.min.js')}}"></script>
    <script src="{{asset('medical/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('medical/js/wow.min.js')}}"></script>
    <script src="{{asset('medical/js/jquery.scrollTo.js')}}"></script>
    <script src="{{asset('medical/js/jquery.appear.js')}}"></script>
    <script src="{{asset('medical/js/stellar.js')}}"></script>
    <script src="{{asset('medical/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
    <script src="{{asset('medical/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('medical/s/nivo-lightbox.min.js')}}"></script>
    <script src="{{asset('medical/js/custom.js')}}"></script>

</body>
</html>
