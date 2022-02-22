<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="LearnPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
<meta name="author" content="ThemeMascot" />





<meta property="og:title" content="IBEX Vlogign and Entertainment" />
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://ibexvlog.com/"/>
    <meta property="og:image" content="{{ asset('MY/LOGO/logo-wide.png') }}"/>
    <meta property="og:site_name" content="https://ibexvlog.com/"/>
    <meta property="og:description" content="IBEX is a platforme that Focus on Vlogign and Entertainment Our goal is to create a tech-savvy citizen! EthioTitor has experienced and educated information technology professionals."/>
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="article" />


















<!-- Page Title -->
<title>IbexVlog</title>

<!-- Favicon and Touch Icons -->
<link href="{{ asset('front/home/images/favicon.png')}}" rel="shortcut icon" type="image/png">
<link href="{{ asset('front/home/images/apple-touch-icon.png')}}" rel="apple-touch-icon">
<link href="{{ asset('front/home/images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
<link href="{{ asset('front/home/images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
<link href="{{ asset('front/home/images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="{{ asset('front/home/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('front/home/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('front/home/css/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('front/home/css/css-plugin-collections.css')}}" rel="stylesheet"/>
<link href="{{ asset('front/css/game.css')}}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{ asset('front/home/css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{ asset('front/home/css/style-main.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{ asset('front/home/css/preloader.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{ asset('front/home/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{ asset('front/home/css/responsive.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="{{ asset('front/home/css/style.css')}}" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{ asset('front/home/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('front/home/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('front/home/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="{{ asset('front/home/css/myHome.css') }}">
<!-- CSS | Theme Color -->
<link href="{{ asset('front/home/css/colors/theme-skin-color-set-1.css')}}" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{ asset('front/home/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{ asset('front/home/js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('front/home/js/bootstrap.min.js')}}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{ asset('front/home/js/jquery-plugin-collection.js')}}"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{ asset('front/home/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('front/home/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
<![endif]-->

@livewireStyles

<style>

</style>



</head>
<body class="boxed-layout bg-img-fixed bg-img-cover " data-bg-img="http://placehold.it/1920x1280">
<div id="wrapper" class="clearfix">
 
  
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-white-f1 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5">
                <li> <i class="fa fa-phone text-theme-colored"></i>   @lang('call')  <a href="#">+251910804901</a> </li>
                <li> <i class="fa fa-envelope-o text-theme-colored"></i> <a href="#">info@ibexvlog.com</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-5">
            <div class="widget no-border m-0">
              <ul>
          
                
               <li><a href="{{ route('lang', 'en') }}"><font color="red">English</font></a>
               <a href="{{ route('lang', 'am') }}"><font color="red">&nbsp;&nbsp;&nbsp;&nbsp;አማርኛ</font></a>
               <a href="{{ route('user-logout') }}"><font color="red">&nbsp;&nbsp;&nbsp;&nbsp;Logout</font></a></li>

               
              </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav" >
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white" >
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
              <img src="{{ asset('front/home/images/logo-wide.png')}}" alt="">
            </a>
            <ul class="menuzord-menu">
              <li class="active"><a href="/home"> @lang('home') </a>
                </li>
               
             
       
              <li><a href="{{ route('about') }}"> @lang('aboutUs') </a></li>
              
             
              
              <li><a href="#home"> @lang('entertainment')</a>
                <ul class="dropdown">
                  @foreach ($categories as $category)
                  <li><a href="{{ route('catagoryVlogList', $category->title) }}">{{ $category->title }}</a></li>
                  @endforeach
                
                  <!-- <li><a href="course1.html">አይቤክስ opportunities </a></li>
                  <li><a href="course2.html">አይቤክስ Game Show </a></li>
                  <li><a href="course3.html">አይቤክስ Entertainment </a></li>
                  <li><a href="course4.html">አይቤክስ Product Review </a></li> -->
                  
                 
                </ul>
              </li> 
              <li><a href="{{ route('blogsList') }}"> @lang('blogs')</a></li>
              <li><a href="{{ route('contact') }}">@lang('contact_us')</a></li>
              @if (Auth::check())
                
              <li>
              @if (Auth::user()->photo != null)
              <a href="{{ route('profile') }}" style="width: 60px; height: 60px; border-radius:50%;border:4px solid #1F386B;  margin-top:-1rem;  overflow:hidden; padding:0px;" >
              
              <img src="{{ asset(Auth::user()->photo) }}" style="width:100%; height:100%;" alt="" srcset="">
              </a>
                        @else
                        <a href="" class="avatar avatar-xl "  style="margin-left:1rem; background:#bae7ff; width:50px; height:50px; border-radius:50%; 
                        display: inline-flex;
                        color:#2196f; font-weight:bold;
    align-items: center;
    justify-content: center;

                        ">
                            <span class="avatar-title">
                                <?php 
                                $position = strpos(Auth::user()->full_name, ' ');
                                if($position != 0)
                                echo substr( Auth::user()->full_name, 0, 1). Auth::user()->full_name[$position+1];
                                else    echo substr( Auth::user()->full_name, 0, 1);

?>
                            <!-- {{ Auth::user()->full_name }} -->
                        </span>
                        </a>
                        @endif





              

              
            </li>
              @endif
             
             
             


            </ul>

          </nav>
        </div>
      </div>
    </div>
  </header>
  @yield('content')
  <!-- end main-content -->
  
  
  <!-- Footer -->
  <footer id="footer" class="footer bg-black-222" data-bg-img="images/footer-bg.png')}}">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
          <img src="{{ asset('front/home/images/logo-wide.png')}}" alt="">
            <p class="font-16 mb-10">@lang('our_goal') </p>
            <a class="font-14" href="{{route('about')}}"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
            <ul class="styled-icons icon-dark mt-20">
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10"><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10"><a href="#" data-bg-color="#05A7E3"><i class="fa fa-skype"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s" data-wow-offset="10"><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" data-wow-offset="10"><a href="#" data-bg-color="#C22E2A"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">@lang('information')</h5>
            <div class="latest-posts">
               @foreach ($blogs as $blog)  
               @if($loop->index < 3 )
               
                <article class="post media-post clearfix pb-0 mb-10">
                  <a href="#" class="post-thumb"><img style=" width:25%;" alt="" src="{{ asset($blog->image)}}"></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="{{ route('blogDetail', $blog->id) }}">{{$blog->title}}</a></h5>
                    <!-- <p class="post-date mb-0 font-12">ጃክ ማ በ 1990 ዎቹ መጀመሪያ ወደ አሜሪካ ሲሄድ በይነመረቡ ተረዳ ፡፡ ከአሜሪካ በተለየ መልኩ ቻይና አሁንም የበየነመረብን አብዮት አልተከተለችም ፡፡</p> -->
                  </div>
                </article>
                @endif
               @endforeach 
            
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">IBEX vlog</h5>
            <ul class="list angle-double-right list-border">
              <li><a href="#">መረጃዎች</a></li>
              <li><a href="#">አባል ይሁኑ</a></li>
              <li><a href="#">ደንብና ግዴታዎች</a></li>
              <li><a href="#">@lang('aboutUs')</a></li>
              <li><a href="#">@lang('contact_us')</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">@lang('contact_us')</h5>
            <ul class="list-border">
              <li><a href="#">+251901116038</a></li>
              <li><a href="#">info@ethiotutor.net</a></li>
              <li><a href="#" class="lineheight-20">መክሲኮ ፥ ኬኬር ህንፃ ሶስተኛ ፍሎር, አዲስ አባባ, ኢትዮጲያ</a></li>
            </ul>
            <p class="font-16 text-white mb-5 mt-15">Subscribe</p>
            <form action="course1.html">
              <label class="display-block" for="mce-PHONE NUMBER"></label>
              <div class="input-group">
                <input  value="" name="phonenumber" placeholder="ስልክ ቁ."  class="form-control" data-height="37px" >
                <span class="input-group-btn">
                    <button class="btn btn-colored btn-theme-colored m-0"><i class="fa fa-paper-plane-o text-white"></i></button>
                </span>
              </div>
            </form>
            
            <!-- Mailchimp Subscription Form Validation-->
            <script type="text/javascript">
             

              function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#footer-mailchimp-subscription-form'),
                      $response = '';
                  $mailchimpform.children(".alert").remove();
                  if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
              }
            </script>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy;2020 Ethiotutor. All Rights Reserved</p>
          </div>
         
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<div id="snackbar">Your Comment is Successfully Submited We will get you soon</div>
<!-- end wrapper --> 
@livewireScripts

<script>
 



window.addEventListener('successfully_added', event => {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

})

   
</script>


<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<script src="{{ asset('front/home/js/custom.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="{{ asset('front/home/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('front/home/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('front/home/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('front/home/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('front/home/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('front/home/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('front/home/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('front/home/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('front/home/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="e///s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60660475f9ebea0f"></script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60660475f9ebea0f"></script>


<script>
     
  window.addEventListener('Add_dot_Class', event => {
  var x = document.getElementById(event.detail.correctId);
  var correctLabelId = "label" + event.detail.correctId
    document.getElementById(correctLabelId).style.color="blue";
  x.className = "dot";
  console.log(x);

  var y = document.getElementById(event.detail.wrongId);
  y.className = "redDot";
  var id = "radio_button"+ event.detail.wrongId;
  var z = document.getElementById(id);
   z.className = "red_radio_button";

   var label_id = "label"+ event.detail.wrongId;
   var label = document.getElementById(label_id).style.color="red";
   document.getElementById('realButton').style.display="block"
   document.getElementById('fakeButton').style.display="none"
  //  label.style.color="redx"
})

window.addEventListener('correct_answer', event => {
  var x = document.getElementById(event.detail.correctId);
  x.className = "dot";
  var label_id = "label"+ event.detail.correctId;
   var label = document.getElementById(label_id).style.color="#373ea3";
   document.getElementById('realButton').style.display="block"
   document.getElementById('fakeButton').style.display="none"
})
window.addEventListener('notAllowed', event => {
window.alert('You Cannot Change Your Answer');
})


</script>
</body>
</html>
