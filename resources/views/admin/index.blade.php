@extends('layouts.backLayout')

@section('content')

 
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">

                <div class="card component-card_30   " style="height:12rem; width:30%;  ">
                                        <div class="card-body">
                                            <h5 class="card-text">Today New User</h5>
                                            <h6 class="rating-count mt-3">   
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                             <span    style="margin-left:0.5rem" > {{ $todayTotalUser }}  </span>         </h6>
                                            <div class="rating-stars">
                                            <p style="color:white; text-align: center;"> <span class="badge badge-secondary">Revenue- </span> {{ round( $todayRev, 3) }}- birr</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card component-card_3  " style="height:12rem; width:30%; ">
                                        <div class="card-body">
                                            <h5 class="card-text">This Month New User</h5>
                                            <h6 class="rating-count mt-3">   
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                             <span    style="margin-left:0.5rem" >   {{ $monthSubscriber }}    </span>         </h6>
                                            <div class="rating-stars">
                                            <p style="color:white; text-align: center;"> 
                                            <span class="badge badge-primary">Revenue- </span>
                                            {{ round( $weekRev, 3) }}- birr</p>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-account-invoice-two" style="background-image: linear-gradient(to top, #00c6fb -227%, #005bea 100%);">
                            <div class="widget-content">
                                <div class="account-box">
                                    <div class="info">
                                        <div class="inv-title">
                                            <h5 class="">Total System Users</h5>
                                        </div>
                                        <div class="inv-balance-info">

                                            <p class="inv-balance">{{ $totalUsers }}- users</p>
                                            
                                            <span class="inv-stats balance-credited">{{ round( $totalRev, 3) }}- birr</span>
                                            
                                        </div>
                                    </div>
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                                    <hr>
<br><br><br><br><br><br><br><br><br><br><br><br> 

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-one">
                            <div class="widget-heading">
                                <h5 class="">Agents </h5>
                                
                            </div>

                            <div class="widget-content">
                            @foreach ($agents as $agent)
                                
                            <div class="transactions-list t-info">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title">SP</span>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>{{ $agent->full_name }}</h4>
                                            <p class="meta-date">{{ $agent->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                    <div class="t-rate rate-inc">
                                        <p><span>+${{ round( $agent->total11($agent->id), 3) }}</span></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        </div>
                        {{ $admins->links() }}
                    </div>


                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-one">
                            <div class="widget-heading">
                                <h5 class="">Admins </h5>
                                
                            </div>

                            <div class="widget-content">
                            @foreach ($admins as $agent)
                                
                            <div class="transactions-list t-info">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title">SP</span>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>{{ $agent->full_name }}</h4>
                                            <p class="meta-date">{{ $agent->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    {{ $admins->links() }}
                    </div>


                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-one">
                            <div class="widget-heading">
                                <h5 class="">Users </h5>
                                
                            </div>

                            <div class="widget-content">
                            @foreach ($users as $agent)
                                
                            <div class="transactions-list t-info">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title">SP</span>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>{{ $agent->full_name }}</h4>
                                            <p class="meta-date">{{ $agent->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    {{ $admins->links() }}
                    </div>


 



                    

                </div>

            </div>
         
@endsection 
