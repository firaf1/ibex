@extends('layouts.backLayout')

@section('content')

<div class="col-lg-12 mt-2">
    <div class="widget-content searchable-container list">



    @livewire('subscriber-index')


    </div>
<script>
    function subscriberModal(){
        $('#subcriberModal').modal('show');
    }
 
</script>
</div>



@endsection