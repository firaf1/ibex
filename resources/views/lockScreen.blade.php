{{--
@if(Route::has('login'))
        <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
@auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700
underline">Dashboard</a>
@else
<a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

@if(Route::has('register'))
<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
@endif
@endauth
</div>
@endif--}}

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


    <link rel="stylesheet" href="front/css/animate.min.css" />

    <link rel="stylesheet" href="front/css/style.css" />
    <link rel="stylesheet" href="front/css/flexslider.css" />
    <link rel="stylesheet" href="front/css/font-awesome.css" />
    <link rel="stylesheet" href="front/css/bootstrap.min.css" />
    <link rel="stylesheet" href="front/css/prettyPhoto.css" />
    <link rel="stylesheet" href="front/css/responsive.css" />
    <link rel="stylesheet" href="back/style.css">



    <!-- Skin Colors -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/blue.css" />

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

          @livewire('locked-screen')


        </div><!-- End Home Details -->
    </section><!-- End Home Section -->
   


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