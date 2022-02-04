@extends('layouts.backLayout')

@section('content')

 
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing gy-5">

                <div class="card component-card_7   " style="height:12rem; width:30%; ">
                                        <div class="card-body">
                                            <h5 class="card-text">Today</h5>
                                             <h6 class="rating-count mt-3">   
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                             <span    style="margin-left:0.5rem" >  {{ $todaySub }}- subscibers    </span>         </h6>
                                            <div class="rating-stars">
                                              
                                                <span class="r-rating-num">{{round( $todayRev, 3) }}- birr</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card component-card_3  " style="height:12rem; width:30%;  ">
                                        <div class="card-body">
                                        <h5 class="card-text">This Week</h5>
                                            <h6 class="rating-count mt-3">   
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                             <span    style="margin-left:0.5rem" >  {{ $weekSubscriber }}- subscibers    </span>         </h6>  
                                            <div class="rating-stars">
                                                  <span class="r-rating-num">{{round( $weekRev, 3)}} - birr</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card component-card_30   " style="height:12rem; width:30%; ">
                                        <div class="card-body">
                                            <h5 class="card-text">This Month</h5>
                                            <h6 class="rating-count mt-3">   
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                             <span    style="margin-left:0.5rem" >  {{ $monthSubscriber }}- subscibers    </span>         </h6>
                                            <div class="rating-stars">
                                                  <span class="r-rating-num">{{ round( $monthRev, 3) }}- birr</span>
                                            </div>
                                        </div>
                                    </div>

<hr>
<br><br><br><br><br><br><br><br><br><br><br><br> 





<div class="col-12">
@livewire('report-index')

</div>


                </div>

            </div>
         
@endsection 
