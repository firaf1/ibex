@extends('layouts.backLayout')

@section('content')


<div class="layout-px-spacing">

<div class="row layout-top-spacing gy-5">
<div class="col-lg-12">
            <div class="statbox widget box box-shadow row ">
                <div class="col-sm-4">
<img src="{{ asset('back/calling.gif') }}" style="width:100%; height:80%;" alt="" srcset="">
<div
                        class=" " style="width:90%;">

                        <div class=" ">
                        <div style="background:#ee4363; padding:7px; border-radius:6px;   cursor: pointer; " onclick="subscriberModal()">
                        

                            <svg style="background:white; color:#042ce3; height:2rem;  border-radius:7px; padding:4px   "  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                         
 
    <span style="margin-bottom:-10rem; margin-left:0.5rem; margin-right:1rem; color:white; " > Call Center: +251910804901</span> <br>
 
</div>



                         
                        </div>


                    </div>
                </div>
                <div class="col-sm-8">

                    <form action="{{route('addAgentMessage')}}" method="post">
                    @csrf
                                <div class="form-group col-sm-12">
                                    <label for="exampleFormControlInput1">Subject</label>
                                    <input type="text" name="subject" class="form-control @error('subject')is-invalid  @enderror" placeholder="Subject" id="exampleFormControlInput1" >
                                    @error('subject') <span class="text-danger ">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="exampleFormControlInput1">Message</label>
                                    <textarea name="message"  class="form-control @error('message')is-invalid  @enderror" id="" placeholder="Message" cols="30" rows="10"></textarea>
                                    @error('message') <span class="text-danger ">{{ $message }}</span> @enderror
                                    <!-- <input type="text" class="form-control" placeholder="Subject" id="exampleFormControlInput1" > -->
                                </div>
                                <button class="btn btn-primary py-3 col-sm-12 btn-block mb-4 mr-2">Submit</button>
                                </form>
                </div>
</div>
</div>

    </div>
 
</div>



@endsection