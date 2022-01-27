 @extends('layouts.homeLayout')
 @section('content')



 <!-- Start main-content -->
 <div class="main-content">
     <!-- Section: home -->
     @include('includes.home.banner')


     <!-- Section: home-boxes -->
     <section class="bg-silver-light">
         <div class="container pt-0 pb-0">
             <div class="section-content">
                 <div class="row equal-height-inner home-boxes" data-margin-top="-40px">
                     <div
                         class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
                         <div class="sm-height-auto bg-theme-colored">
                             <div class="text-center pt-10 pb-10">
                                 <i class="fa fa-user text-white font-64"></i>
                                 <h4 class="text-uppercase mt-10"><a href="#" class="text-white">ኦንላይን መረጃ ንሰጣለን</a>
                                 </h4>
                             </div>
                         </div>
                     </div>
                     <div
                         class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
                         <div class="sm-height-auto bg-theme-colored-darker2">
                             <div class="text-center pt-10 pb-10">
                                 <i class="fa fa-comments-o text-white font-64"></i>
                                 <h4 class="text-uppercase mt-10"><a href="#" class="text-white">ኦንላይን ጥያቄ ንመልሳለን</a>
                                 </h4>
                             </div>
                         </div>
                     </div>

                     <div
                         class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
                         <div class="sm-height-auto bg-theme-colored-darker4">
                             <div class="text-center pt-10 pb-10">
                                 <i class="fa fa-mobile text-white font-64"></i>
                                 <h4 class="text-uppercase mt-10"><a href="#" class="text-white">በዚ ስልክ ቁ ያግኙን
                                         +251910804901</a></h4>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>d

     <section class="divider bg-lightest text-center">
         <div class="container pb-0">
             <div class="row">
                 <div class="col-md-12">
                     <div class="call-to-action pt-40 pb-30 mb-20 border-1px bg-lighter">
                         <div class="row">
                             <div class="col-md-6">
                                 <h5>ለ 3 ቀን በነፃ አገልግሎት ያገኛሉ ፥ በቀን በምንሰጠው አገልግሎት 2ብር ይከፍላሉ። አገልግሎቱ ማቋረጥ ከፈለጉ ወደ 9094 stop
                                     ብለው ይላኩ። <a href="law.html">
                                         <font color="blue" size="2px">Terms and conditions</font>
                                     </a></h5>

                             </div>
                             <div class="col-md-5">

                                 <form action="course1.html">
                                     <div class="input-group">
                                         <input data-height="45px" class="form-control input-lg" placeholder="ስልክ ቁ"
                                             value="">
                                         <span class="input-group-btn">
                                             <button class="btn btn-colored btn-theme-colored btn-lg m-0"
                                                 data-height="45px">Subscribe</button>
                                         </span>
                                     </div>
                                 </form>


                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Section: About -->
             @include('includes.home.about')




             <!-- Section: courses  -->
           @include('includes.home.service')

             <!-- Diver: Video Background  -->
             <section class="divider parallax layer-overlay overlay-theme-colored-9"
                 data-bg-img="{{ asset('images/course/samjimp2.jpg')}}" data-parallax-ratio="0.7">
                 <div class="container pt-60 pb-70">
                     <!-- Section Content -->
                     <div class="section-content">
                         <div class="row">
                             <div class="col-md-10 col-md-offset-1 text-center">
                                 <h3 class="text-white text-uppercase font-30 font-weight-600 mt-0 mb-20">Gimp ፎቶ ኤዲቲንግ
                                     መረጃ
                                 </h3>
                                 <p class="text-white lead">በ GIMP ውስጥ ምስሎችን ለማረም ሊያገለግሉ የሚችሉ ብዙ መሣሪያዎች አሉ። በጣም የተለመዱት
                                     መሳሪያዎች አዲስ ወይም የተቀላቀሉ ፒክስሎችን ለመፍጠር የሚያገለግሉ የቀለም ብሩሽ ፣ እርሳስ ፣ የአየር ብሩሽ ፣ ማጥፊያ እና
                                     የቀለም መሣሪያዎችን ያካትታሉ፡፡</p>
                                 <a href="https://youtu.be/iYacM8gbLlE" data-lightbox-gallery="#"><i
                                         class="fa fa-play-circle text-white font-72"></i>
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
             </section>


             <!-- Section: teachers -->
             <!--
    <section>
      <div class="container pt-70 pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1 text-uppercase">የኢትዮቲቶር<span class="text-theme-color-2"> አስተማሪዎች</span></h2>
              <p>ልምድና ትምህርት ያላቸው የኢንፎርሜሽን ቴክኖሎጂ ባለሙያዎችን<br></p>
            </div>
          </div>
        </div>
        <div class="row multi-row-clearfix">
          <div class="col-md-12">
            <div class="owl-carousel-4col" data-nav="true">
              <div class="item">
                <div class="hover-effect mb-30">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="{{ asset('front/home/images/danop.jpg')}}">
                    <div class="hover-link">
                      <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="details p-15 pt-10 pb-10">
                    <h4 class="title mb-5">Mr.Daniel</h4>
                    <h5 class="sub-title mt-0 mb-15">bachelor degree in computer science and engineering & Expert on startup ICT bussiness idea</h5>

                  </div>
                </div>
              </div>

              <div class="item">
                <div class="hover-effect mb-30">
                  <div class="thumb">
                     <img class="img-fullwidth" alt="" src="{{ asset('front/home/images/endalkop.jpg')}}">
                    <div class="hover-link">
                      <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="details p-15 pt-10 pb-10">
                    <h4 class="title mb-5">Mr.Endalcachew</h4>
                    <h5 class="sub-title mt-0 mb-15">Certified and expert in Web and Multimedia Technology.</h5>

                  </div>
                </div>
              </div>
              <div class="item">
                <div class="hover-effect mb-30">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="{{ asset('front/home/images/samop.jpg')}}">
                    <div class="hover-link">
                      <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="details p-15 pt-10 pb-10">
                    <h4 class="title mb-5">Mr.Samuel</h4>
                    <h5 class="sub-title mt-0 mb-15">bachelor degree in information technology engineering & certified in computer networking and graphic design.</h5>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

             <!-- Start of LiveChat (www.livechatinc.com) code -->
             <script>
             window.__lc = window.__lc || {};
             window.__lc.license = 12225951;;
             (function(n, t, c) {
                 function i(n) {
                     return e._h ? e._h.apply(null, n) : e._q.push(n)
                 }
                 var e = {
                     _q: [],
                     _h: null,
                     _v: "2.0",
                     on: function() {
                         i(["on", c.call(arguments)])
                     },
                     once: function() {
                         i(["once", c.call(arguments)])
                     },
                     off: function() {
                         i(["off", c.call(arguments)])
                     },
                     get: function() {
                         if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                         return i(["get", c.call(arguments)])
                     },
                     call: function() {
                         i(["call", c.call(arguments)])
                     },
                     init: function() {
                         var n = t.createElement("script");
                         n.async = !0, n.type = "text/javascript", n.src =
                             "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n)
                     }
                 };
                 !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
             }(window, document, [].slice))
             </script>
             <noscript><a href="https://www.livechatinc.com/chat-with/12225951/" rel="nofollow">Chat with us</a>,
                 powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow"
                     target="_blank">LiveChat</a></noscript>
             <!-- End of LiveChat code -->










             <!-- Section: Blog -->
          @include('includes.home.blog')

             <!-- Section: Services -->
             <section>
                 <div class="container pt-0 pb-0">
                     <div class="section-content">
                         <div class="row">
                             <div class="footer-box-wrapper equal-height mt-0">
                                 <div class="col-sm-4 footer-box-one pr-0 pl-sm-0">
                                     <div class="footer-box icon-box media"> <a href="#"
                                             class="media-left pull-left mr-30 mr-sm-15"><i
                                                 class="fa fa-user text-white"></i></a>
                                         <div class="media-body">
                                             <h4 class="media-heading heading title"> የአትዮቲቶር አገልግሎት</h4>
                                             <p>መሰራታዊ የአይሲቲና የአይሲቲ ስራ ፈጠራ ቲቶሪያል ኦንላይን በጥራት ያቀርባል።
                                                 <a href="#"><i class="fa fa-arrow-circle-right font-14"></i></a>
                                             </p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-sm-4 footer-box-two pl-0 pr-0">
                                     <div class="footer-box icon-box media"> <a href="#"
                                             class="media-left pull-left mr-30 mr-sm-15"><i
                                                 class="fa fa-comments-o text-white"></i></a>
                                         <div class="media-body">
                                             <h4 class="media-heading heading title">የአትዮቲቶር ኦንላይን ቻት ቦክስ</h4>
                                             <p>ጥያቄ ወይም ሃሳብ ካለቦት በ ኢትዮቲቶር የ ኦንላይን ቻት ቦክስ(chat box) መልክት መላክ ይችላሉ።
                                                 <a href="#"><i class="fa fa-arrow-circle-right font-14"></i></a>
                                             </p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-sm-4 footer-box-three pl-0 pr-sm-0">
                                     <div class="footer-box icon-box media"> <a href="#"
                                             class="media-left pull-left mr-30 mr-sm-15"><i
                                                 class=" fa fa-credit-card text-white"></i></a>
                                         <div class="media-body">
                                             <h4 class="media-heading heading title">የአትዮቲቶር ክፍያ</h4>
                                             <p>ለ 3 ቀን በነፃ አገልግሎት ያገኛሉ ፥ በቀን በምንሰጠው አገልግሎት 2ብር ይከፍላሉ።
                                                 <a href="#"><i class="fa fa-arrow-circle-right font-14"></i></a>
                                             </p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </section>

         </div>

         @endsection
