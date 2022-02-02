@extends('layouts.homeLayout')
@section('content')
<div class="main-content">



<section class="inner-header divider parallax layer-overlay overlay-dark-5"  style="background-image: url({{ asset('front/home/images/why.jpg')  }}); background-position:center;">
  <div class="container pt-70 pb-20">
    <!-- Section Content -->
    <div class="section-content">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title text-white text-center">{{ $blog->title }}</h2>
         <ol class="breadcrumb text-left text-black mt-10">
          
         
        </ol></div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Blog -->
<section>
  <div class="container mt-30 mb-0 pt-30 pb-30">
    <div class="row">
      <div class="col-md-8 blog-pull-right">
        <div class="single-service">
          <img src="{{ asset($blog->image) }}" alt="">
         
 {!! $blog->description !!}

 




        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="sidebar sidebar-left mt-sm-30">
          <div class="widget">
            <h4 class="widget-title line-bottom">@lang('related_blog')</h4>
            <div class="services-list">
              <ul class="list list-border">

@foreach ($relatedBlogs as $relatedBlog)
    
<li  class="<?php if($blog->id == $relatedBlog->id) echo 'active';   ?>" ><a  href="{{ route('blogDetail', $relatedBlog->id) }}">    {{  Str::limit($relatedBlog->title , 50, ' ...')   }}       </a></li>
@endforeach


              </ul>
            </div>
          </div>
         
        
          
          <div class="widget">
            
            <div id="flickr-feed" class="clearfix">
             
            </div>
          </div>
        </div>
      </div>
    </div>




     </div>
</section>
<!-- end main-content -->






<section> 
      <div class="container pt-0 pb-0">
        <div class="section-content">
          <div class="row">
            <div class="footer-box-wrapper equal-height mt-0">
              <div class="col-sm-4 footer-box-one pr-0 pl-sm-0" style="min-height: 13.29em;">
                <div class="footer-box icon-box media"> <a href="#" class="media-left pull-left mr-30 mr-sm-15"><i class="fa fa-user text-white"></i></a>
                  <div class="media-body">
                    <h4 class="media-heading heading title"> @lang('our_service')</h4>
                    <p>@lang('basic_it')
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 footer-box-two pl-0 pr-0" style="min-height: 13.29em;">
                <div class="footer-box icon-box media"> <a href="#" class="media-left pull-left mr-30 mr-sm-15"><i class="fa fa-comments-o text-white"></i></a>
                  <div class="media-body">
                    <h4 class="media-heading heading title">@lang('online_chat_box')</h4>
                    <p>@lang('question_or_suggestion')
                </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 footer-box-three pl-0 pr-sm-0" style="min-height: 13.29em;">
                <div class="footer-box icon-box media"> <a href="#" class="media-left pull-left mr-30 mr-sm-15"><i class=" fa fa-credit-card text-white"></i></a>
                  <div class="media-body">
                    <h4 class="media-heading heading title">@lang('ibex_paymant')</h4>
                    <p>@lang('three_day_free')
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