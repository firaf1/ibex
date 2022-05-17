@extends('layouts.backLayout')

@section('content')

<div class="col-lg-12 mt-2">
    <div class="widget-content searchable-container list">



    @livewire('agent-agent')


    </div>
<script>
    function subscriberModal(){
        $('#subcriberModal').modal('show');
    }
 
</script>
</div>



@endsection