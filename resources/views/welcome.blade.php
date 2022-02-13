
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from oxygen.goldeyestheme.com/oxygen/index7.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jul 2021 10:16:39 GMT -->

<head>

    <meta charset="utf-8" />
    <title>IBEX VLOG</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png" />

    <!-- CSS Files -->
    <meta property="og:title" content="IBEX Vlogign and Entertainment" />
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://ibexvlog.com/"/>
    <meta property="og:image" content="{{ asset('MY/LOGO/logo-wide.png') }}"/>
    <meta property="og:site_name" content="https://ibexvlog.com/"/>
    <meta property="og:description" content="IBEX is a platforme that Focus on Vlogign and Entertainment Our goal is to create a tech-savvy citizen! EthioTitor has experienced and educated information technology professionals."/>
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="article" />

    <link rel="stylesheet" href="front/css/animate.min.css" />

    <link rel="stylesheet" href="front/css/style.css" />
    <link rel="stylesheet" href="front/css/flexslider.css" />
    <link rel="stylesheet" href="front/css/font-awesome.css" />
    <link rel="stylesheet" href="front/css/bootstrap.min.css" />
    <link rel="stylesheet" href="front/css/prettyPhoto.css" />
    <link rel="stylesheet" href="front/css/responsive.css" />



    <!-- Skin Colors -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/blue.css" />
<style>
 
    .logo img{
        width:100%;
    }
    .logo{

        width:50%;
        margin-left:25%;
    }
    @media(max-width: 750px) {
        #mymodal{
        height:60vh;
    }
    .box{
        height:50vh;
        width:98%;
        margin-left:1%;
        
    }
        .logo{

width:90%;
margin-left:5%;
}
  }
</style>
    <!-- End CSS Files -->
    @livewireStyles
</head>

<body>
    <!-- 1ZAdv8B*#G6lo7 -->


    <!-- Home Section -->
    <section id="home">
        <div id="slides" class="home parallax">

            <!-- Slides -->
            <div class="slides-container relative">
                <!-- Slider Images -->
                <div class="image1 pattern-black"></div>
                <div class="image2 pattern-black"></div>
                <div class="image3 pattern-black"></div>
                <div class="image4 pattern-black"></div>
                <div class="image5 pattern-black"></div>
                <!-- End Slider Images -->
            </div>
<div class="lang">
    <ul>
 

            
        <a href="{{ route('lang', 'en') }}"><li style="<?php if($sessionLang == 'en')  echo 'background-color: #d10303'; ?>" >English</li></a>
       
       
       <a href="{{ route('lang', 'am') }}"> <li style=" <?php if($sessionLang == 'am')  echo 'background-color: #d10303;' ?>" >Amharic</li></a>
     
    </ul>
</div>
            <div class="home-details-tb absolute">
                <!-- Home Details Inner -->
                <div class="relative home-details-inner">
                    <!-- Your Logo -->
                    <div class="logo">
                        <img src="MY/LOGO/logo-wide.png" alt="Logo" />
                    </div>
                    <div class="hometexts">
                        <!-- Slide Texts -->
                        <ul class="slide-text condensed">
                            <li class="hometext bold uppercase">@lang('welcome_to') <span class="colored"> @lang('ibex') </span></li>
                            <li class="hometext bold uppercase">@lang('we_love_to')</li>
                            <li class="hometext bold uppercase">@lang('we_are') <span class="colored"> @lang('creative')</span></li>
                        </ul>
                    </div>
                    <!-- Fixed Text -->
                    <h1 class="fixed-text uppercase bold condensed">@lang('the_good_you_need') !</h1>
                    <!-- Home Categories -->
                    <ul class="home-categories">
                        <li class="h-item uppercase "> @lang('oportunity')</li>
                        <li class="h-item uppercase ">@lang('game_show')</li>
                        <li class="h-item uppercase ">@lang('entertainment')</li>
                        <li class="h-item uppercase ">@lang('product_review')</li>

                    </ul>



                    @if(Auth::check())
                    <a href="{{ route('admin')}}" class="btn btn-primary mt-3">@lang('dashboard') </a>
                    @else
                    <button class="btn btn-primary mt-3" onclick="myopen()">@lang('login') </button>
                    @endif

                </div><!-- End Home Texts -->

            </div>
        </div><!-- End Home Details -->
    </section><!-- End Home Section -->
    @livewire('login-request')


    <script>
    function myopen() {

        document.getElementById('mymodal').style.display = "block";
        document.getElementById('box').style.height = "85vh";
    }

    function myclose() {
        document.getElementById('mymodal').style.display = "none";

    }

    document.getElementById("mymodal").addEventListener('click', e => {
        if (e.target !== e.currentTarget) console.log("child clicked")
        else {
            document.getElementById('mymodal').style.display = "none";
            document.getElementById('box').style.height = "0px";
        }
    });
    </script>

    <script type="text/javascript" src="front/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="front/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="front/js/jquery.appear.js"></script>
    <script type="text/javascript" src="front/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="front/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="front/js/jquery.superslides.js"></script>
    <script type="text/javascript" src="front/js/jquery.flexslider.js"></script>

    <script type="text/javascript" src="front/js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="front/js/plugins.js"></script>
    @livewireScripts
</body>

</html>