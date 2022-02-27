<div>
     
<div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Rewarded User Table</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                               
                                                    <th>User Info.</th>
                                                    <th>Bank Account</th>
                                                    <th>Status</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach ($rewards as $reward)
                                                  
                                          
                                                <tr>
                                               
                                                <td>
                                                    <div class="row">

                                                        <div class="d-flex col-3">
                                                            <div class="usr-img-frame mr-2 rounded-circle">
                                                                <img alt="avatar" style="width:100%; height:100%;" class="img-fluid rounded-circle" src="{{ Auth::user()->photo }}">
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-8" style="margin-left:-2rem; ">
                                                        <p class="align-self-center mb-0">{{ $reward->user->full_name }}</p>
                                                            <p>{{ $reward->user->phone_number }}</p>
                                                        </div>

                                                    </div>
                                            
                                                    </td>
                                                    <td>           
                                                    <span class="badge badge-secondary"> {{ $reward->user->bank_type }} </span>
                                         
                                                        <p> {{ Auth::user()->account_type }} </p>
                                                    </td>
                                                    <td>
                                                        @if($reward->status == null)

                                                    <button type="button" wire:click="Approve({{ $reward->id }})" class="btn btn-success mt-3 mb-3 ml-2">  
                                                        
                                                    <span style="width: 25px; height:25px" wire:loading wire:target="Approve({{ $reward->id }})"
                                        class="spinner-border text-white mr-2 align-self-center loader-sm "></span>
                                    <span wire:loading.class="display-none">Pandding</span>
                                                    
                                                        </button>
                                                    @elseif ($reward->status == "Unpproved") 
                                          
                                                    <button type="button" wire:click="Approve({{ $reward->id }})" class="btn btn-danger mt-3 mb-3 ml-2">  
                                                        
                                                        <span style="width: 25px; height:25px" wire:loading wire:target="Approve"
                                            class="spinner-border text-white mr-2 align-self-center loader-sm "></span>
                                        <span wire:loading.class="display-none">Unapproved</span>
                                                        
                                                            </button>
                                                    @elseif ($reward->status == "Approved")
                                                 
                                                    <button type="button" wire:click="Unpprove({{ $reward->id }})"  class="btn btn-primary mt-3 mb-3 ml-2"> 
                                                        
                                                    <span style="width: 25px; height:25px" wire:loading wire:target="Unpprove"
                                        class="spinner-border text-white mr-2 align-self-center loader-sm "></span>
                                    <span wire:loading.class="display-none">Approve</span>
                                                        </button>
                                                    @endif
                                                    </td>
                                                 

                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                               
                                </div>
                            </div>
</div>
