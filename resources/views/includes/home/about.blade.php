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

                              
                                 <h2 class="text-uppercase mt-0"> <span class="text-theme-color-2">@lang('benefit_of_our_service')</span></h2>
                                 <p class="lead">@lang('ben_detail')</p>

                                 <h4>24 * 7 @lang('Accessibility')</h4>
                                 <p class="lead">
                                 @lang('Accessibility_detail')</p>

                               

                                  


                                  
                                    @lang('edu_tech')</p>




                                 <div class="row mt-40">
                                     <div class="esc-heading">
                                         <div class="heading-line-bottom">
                                             <h4 class="heading-title">IBEX @lang('information')</h4>
                                             <p class="lead">

                                                @lang('mobile_info')
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

             
 