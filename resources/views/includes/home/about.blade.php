<section id="about">
                 <div class="container pb-70">
                     <div class="section-content">





                         <div class="row">
                             <div class="col-md-8 col-sm-12 wow fadeInRight" data-wow-duration="1s"
                                 data-wow-delay="0.3s">
                                 <h2 class="text-uppercase mt-0">@lang('aboutUs')<span class="text-theme-color-2"> IBEX </span></h2>
                                 <h3 class="text-uppercase mt-0">@lang('about_title')</h3>
                                 <p class="lead">
                                     @lang('about_content')


 
                                 </p>

                                 <div class="col-md-6 wow fadeInUp" data-wow-duration="1s">
                                     <div class="mb-sm-30">
                                         <img class="img-fullwidth"
                                             src="{{ asset('front/home/images/samethiotutor.jpg')}}" alt="">
                                         <h4 class="letter-space-1 mt-10">GTX techinology<span class="text-theme-color-2">
                                                 week</span></h4>
                                         <p>@lang('week')</p>

                                     </div>
                                 </div>
                                 <div class="col-md-6 wow fadeInUp" data-wow-duration="1.2s">
                                     <div class="mb-sm-30">
                                         <img class="img-fullwidth" src="{{ asset('front/home/images/review.png')}}"
                                             alt="">

                                         <h4 class=" letter-space-1 mt-10">IBEX<span class="text-theme-color-2">
                                                 @lang('vision2')</span></h4>
                                         <p>@lang('vision')</p>
                                         <a href="{{ route('about') }}" class="btn btn-sm btn-theme-colored">Read more</a>
                                     </div>
                                 </div>
                                 <h2 class="text-uppercase mt-0">የኢትዮቲቶር <span class="text-theme-color-2">@lang('benefit_of_our_service')</span></h2>
                                 <p class="lead">@lang('ben_detail')</p>

                                 <h4>24 * 7 @lang('Accessibility')</h4>
                                 <p class="lead">
                                 @lang('Accessibility_detail')</p>

                                 <h4>@lang('save_money_and_time')</h4>

                                 <p class="lead">

                                   @lang('student_lear')</p>


                                 <h4>@lang('provide_str')</h4>
                                 <p class="lead">

                                    @lang('edu_tech')</p>




                                 <div class="row mt-40">
                                     <div class="esc-heading">
                                         <div class="heading-line-bottom">
                                             <h4 class="heading-title">IBEX @lang('information')</h4>
                                             <p class="lead">

                                                @lang('mobile_info')
                                             </p>


                                             <h4 class="heading-title">@lang('traning_provided')</h4>
                                             <p class="lead">
@lang('gives')
                                                </p>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="owl-carousel-6col clients-logo">

                                             <div class="item"> <a href="#"><img
                                                         src="{{ asset('front/home/images/ethiotutordevice1.png')}}"
                                                         alt=""></a> </div>
                                             <div class="item"> <a href="#"><img
                                                         src="{{ asset('front/home/images/ethiotutordevice3.png')}}"
                                                         alt=""></a> </div>
                                             <div> <a href="#"><img src="{{ asset('front/home/images/logo-wide.png')}}"
                                                         alt=""></a> </div>
                                             <div class="item"> <a href="#"><img
                                                         src="{{ asset('front/home/images/ethiotutordevice4.png')}}"
                                                         alt=""></a> </div>
                                             <div class="item"> <a href="#"><img
                                                         src="{{ asset('front/home/images/ethiotutordevice5.jpg')}}"
                                                         alt=""></a> </div>


                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-4 col-sm-12 wow fadeInLeft" data-wow-duration="1s"
                                 data-wow-delay="0.3s">
                                 <div class="p-30">

                                     <!-- Appilication Form Start-->
                                     <img class="img-fullwidth" alt="" src="{{ asset('front/home/images/anim.gif"')}}>
                                      <!-- Application Form End-->

                              </div>

                                <div class=" p-30">

                                     <!-- Appilication Form Start-->
                                     <img class="img-fullwidth" alt="" src="{{ asset('front/home/images/advert.jpg')}}">
                                     <!-- Application Form End-->

                                 </div>


                                 @foreach ($blogs as $blog)
                             @if ($loop->index == 3)
                                 <div class="p-30">

                                     <!-- Appilication Form Start-->

                                     <img class="img-fullwidth" alt=""
                                         src="{{ asset($blog->image)}}">
                                     <h3>
                                        {{$blog->title}}</h3>
                                     <p>
                                     {!! Str::limit( $blog->description , 400, ' ...')   !!}
                                         </p>
                                         <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="{{ route('blogDetail', $blog->id) }}">@lang('read_more')</a>
                                     <!-- Application Form End-->


                                 </div>
                                 @endif
                             @endforeach


                             </div>
                         </div>
                     </div>
                 </div>
             </section>

             

             <!-- Divider: why choose us 1 -->
             <section class="divider parallax" data-bg-img="{{ asset('front/home/images/entertainment.png') }}" data-parallax-ratio="0.7">
                 <div class="container pt-0 pb-0">
                     <div class="row">
                         <div class="col-md-8 col-md-offset-4">
                             <div class="bg-white-transparent-9 pb-10 p-40">
                                 <h2 class="mb-20 mt-30 line-height-1 text-center text-uppercase">ስለ<span
                                         class="text-theme-color-2">እኛ</span></h2>
                                 <div class="row">

                                     <div class="col-xs-12 col-sm-6 col-md-6">
                                         <div class="icon-box p-15 mb-0 mb-sm-0 mt-sm-0">
                                             <a class="icon pull-left sm-pull-none flip" href="#">
                                                 <i class="fa fa-users text-theme-colored font-50"></i>
                                             </a>
                                             <div class="ml-70 ml-sm-0">
                                                 <h4 class="icon-box-title mt-15 mb-5">አይቤክስ Vlog</h4>
                                                 <p>We are a company of technology and lifstyle. Since information,
                                                     Education and entertainment is our core stones we depply study and
                                                     understand
                                                     societ's daily life and we provide a better solution for leading
                                                     knowledgable, cushy and relaxed life. </p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-xs-12 col-sm-6 col-md-6">
                                         <div class="icon-box p-15 mb-30 mb-sm-0 mt-sm-0">
                                             <a class="icon pull-left sm-pull-none flip" href="#">
                                                 <i class="fa fa-book text-theme-colored font-50"></i>
                                             </a>
                                             <div class="ml-70 ml-sm-0">
                                                 <h4 class="icon-box-title mt-15 mb-5">አገልግሎታችን</h4>
                                                 <p>Crbt and Rbt</p>
                                                 <p>Value added services for Telecom operators</p>
                                                 <p>Digital Content Development</p>

                                                 <p>IPTV & OTT</p>

                                                 <p>Game Service</p>
                                                 <p>Online Dating Service</p>
                                                 <p>E-sport & Fantasy Sport</p>
                                                 <p>Web based & App based service</p>
                                                 <p>E-commerce</p>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </section>
