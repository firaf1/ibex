@extends('layouts.homeLayout')
@section('content')



<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset('front/home/images/review.jpg')}}" style="background-image: url(&quot;images/review.jpg&quot;); background-position: 50% 72px;">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">አይቤክስ </h2>
             <ol class="breadcrumb text-left text-black mt-10">
              
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Course list -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9 blog-pull-right">
          
          
         
            
            
          
          

 @foreach ($vlogs11 as $blog)
  <div class="row mb-15">
              <div class="col-sm-6 col-md-4">
               <div class="thumb"> <img alt="featured project" src="{{ asset($blog->image) }}" class="img-fullwidth"></div>
              </div>
              <div class="col-sm-6 col-md-8">
                <h4 class="line-bottom mt-0 mt-sm-20">{{ $blog->title }}</h4>
                <ul class="review_text list-inline">
               
                </ul>
                <p> {!! Str::limit( $blog->description , 100, ' ...')   !!}..</p>
                <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="{{ route('blogDetail', $blog->id) }}">@lang('read_more')</a>
              </div>
            </div>
            <hr>

 @endforeach
 @if ($vlogs11->count() == 0)
<div class="row mb-15">
              <div class="col-sm-6 col-md-4">
               <div class="fluid-width-video-wrapper" style="padding-top: 63.7143%;">

 

            </div>
              </div>
              <div class="col-sm-6 col-md-8">
                <h4 class="line-bottom mt-0 mt-sm-20 text-danger"> No Blog is found under this category </h4>
                <ul class="review_text list-inline">
               
                </ul>
               
               
              </h4></div>
            </div>
 
 <hr>
@endif


 {{ $vlogs11->links() }}
          



          </div>

          <div class="col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">
              <div class="widget">
               
                <div class="search-form">
                 
                </div>
              </div>
              <div class="widget">
                <h5 class="widget-title line-bottom"><span class="text-theme-color-2">@lang('information')</span></h5>
                <div class="categories">
                  <ul class="list list-border angle-double-right">
               
                   @foreach ($categories as $category)
                       
                   <li><a href="{{ route('catagoryVlogList', $category->title) }}"  class="<?php if($currentCategory->id == $category->id) echo "text-primary"; ?>"  >{{ $category->title }} </a></li>
                   @endforeach
                 
                  </ul>
                </div>
              </div>
            
          </div>
        </div>
       
        
      </div>
    </div>
</section>
  <!-- end main-content -->

<!-- Start of LiveChat (www.livechatinc.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 12225951;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/12225951/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->




   
 <!-- Section: Services -->
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