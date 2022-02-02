<section id="blog">
                 <div class="container pb-70">
                     <div class="section-title mb-20 text-center">
                         <div class="row">
                             <div class="col-md-8 col-md-offset-2">
                                 <h2 class="mt-10 line-height-1 text-uppercase">Our  <span class="text-theme-color-2">
                                         Blogs</span></h2>

                             </div>
                         </div>
                     </div>
                     <div class="section-content">
                         <div class="row">

                             @foreach ($blogs as $blog)
                             @if ($loop->index < 3)
                                 
                             <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInRight" data-wow-duration="1s"
                                 data-wow-delay="0.3s">
                                 <article class="post clearfix mb-sm-30">
                                     <div class="entry-header">
                                         <div class="post-thumb thumb">
                                             <img src="{{ asset($blog->image)}}" alt=""
                                                 class="img-responsive img-fullwidth">
                                         </div>
                                     </div>
                                     <div class="entry-content p-20 pr-10">
                                         <div class="entry-meta mt-0 no-bg no-border">
                                             <div class="event-content">
                                                 <h4 class="entry-title text-white text-capitalize m-0"><a
                                                         href="blog1.html">{{$blog->title}}</a></h4>

                                             </div>
                                         </div>
                                         <p class="mt-10"> {!! Str::limit( $blog->description , 100, ' ...')   !!}</p>
                                         <div class="mt-10"> <a href="blog1.html"
                                                 class="btn btn-theme-colored btn-sm">ሙሉ መረጃ</a> </div>
                                         <div class="clearfix"></div>
                                     </div>
                                 </article>
                             </div>
                             @endif
                             @endforeach
                           


                            
 

                         </div>
                     </div>
                 </div>
             </section>