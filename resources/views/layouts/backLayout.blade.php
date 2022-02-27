<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jul 2021 08:24:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>IBEX VLOG - ETHIOPIA</title>
    <link rel="icon" type="image/x-icon" href=" {{ asset('back/assets/img/favicon.ico')}}"/>
    <link href=" {{ asset('back/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('back/assets/js/loader.js ') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href=" {{ asset('back/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('back/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('back/assets/css/apps/contacts.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href=" {{ asset('back/assets/css/forms/switches.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('back/plugins/animate/animate.css')}}">
    <link href=" {{ asset('back/plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('back/plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('back/assets/css/components/custom-sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('back/assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('back/plugins/notification/snackbar/snackbar.min.css')}}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('back/assets/css/tables/table-basic.css')}}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('back/assets/css/elements/miscellaneous.css')}}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('back/assets/css/users/user-profile.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back/assets/css/components/tabs-accordian/custom-tabs.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/elements/alert.css')}}">
 

    <link href="back/assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href=" {{ asset('back/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href=" {{ asset('back/assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/components/cards/card.css') }}">    
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    @livewireStyles
    <style>
        @media(max-width: 600px) {
    .card {
    width: 90%!important;

   
    }
    #passss{
        display:none;
    }
    #dddd{
        display:none;
    }
    .component-card_3{
        margin-top:10px;
        margin-bottom:10px;
    }
    .searchable-container .searchable-items.grid .items {
      -ms-flex: 0 0 33.333333%;
      flex: 0 0 33.333333%;
      max-width: 33.333333%;
    }
  }
  .card{
      width:23%;
  }
        .blockui-growl-message {
            display: none;
            text-align: left;
            padding: 15px;
            background-color: #455a64;
            color: #fff;
            border-radius: 3px;
        }
        .blockui-animation-container { display: none; }
        .multiMessageBlockUi {
            display: none;
            background-color: #455a64;
            color: #fff;
            border-radius: 3px;
            padding: 15px 15px 10px 15px;
        }
        .multiMessageBlockUi i { display: block }
   
   .display-none{
       display: none;
   }
        .blockui-growl-message {
            display: none;
            text-align: left;
            padding: 15px;
            background-color: #455a64;
            color: #fff;
            border-radius: 3px;
        }
        .blockui-animation-container { display: none; }
        .multiMessageBlockUi {
            display: none;
            background-color: #455a64;
            color: #fff;
            border-radius: 3px;
            padding: 15px 15px 10px 15px;
        }
        .multiMessageBlockUi i { display: block }
    </style>
</head>
<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
 @include('includes.top_nav')
    <!--  END NAVBAR  -->



    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
		@include('includes.sidebar')
        <!--  END SIDEBAR  -->
        <div id="content" class="main-content">


        <!--  BEGIN CONTENT AREA  -->
        @yield('content')
        <!--  END CONTENT AREA  -->
        <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com/">DesignReset</a>, All rights reserved.</p>
                </div>
               
            </div>
</div>
        </div>
   
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    @livewireScripts
    <script src="{{ asset('back/assets/js/libs/jquery-3.1.1.min.js ') }}"></script>
    <script src="{{ asset('back/bootstrap/js/popper.min.js ') }}"></script>
    <script src="{{ asset('back/bootstrap/js/bootstrap.min.js ') }}"></script>
    <script src="{{ asset('back/plugins/perfect-scrollbar/perfect-scrollbar.min.js ') }}"></script>
    <script src="{{ asset('back/assets/js/app.js ') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('back/assets/js/custom.js ') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    
    <script src="{{ asset('back/plugins/apex/apexcharts.min.js ') }}"></script>
    <script src="{{ asset('back/assets/js/dashboard/dash_1.js ') }}"></script>
    <script src="{{ asset('back/assets/js/custom.js ') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('back/plugins/jquery-ui/jquery-ui.min.js ') }}"></script>
    <script src="{{ asset('back/assets/js/apps/contact.js ') }}"></script>
    <script src="{{ asset('back/plugins/blockui/jquery.blockUI.min.js ') }}"></script>

<script src="{{ asset('back/plugins/blockui/custom-blockui.js ') }}"></script>
<script src="{{ asset('back/assets/js/scrollspyNav.js ') }}"></script>
    <script src="{{ asset('back/plugins/sweetalerts/sweetalert2.min.js ') }}"></script>
    <script src="{{ asset('back/plugins/sweetalerts/custom-sweetalert.js ') }}"></script>

    <script src="{{ asset('back/plugins/notification/snackbar/snackbar.min.js ') }}"></script>
    <script src="{{ asset('back/plugins/blockui/jquery.blockUI.min.js') }}"></script>

<script src="{{ asset('back/plugins/blockui/custom-blockui.js') }}"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{ asset('back/assets/js/components/notification/custom-snackbar.js ') }}"></script>


    <script>

 

window.addEventListener('successfully_added', event => {
    $('.user_add_modal').modal('hide');
    $('#subcriberModal').modal('hide');
    
    
    $('.user_edit_modal').modal('hide');
    $('#vlogModal').modal('hide');
    
   
  const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    padding: '2em'
  });
  toast({
    type: 'success',
    title: event.detail.newName,
    padding: '2em',
  })

})

window.addEventListener('ShowSubscriberDeleteModal', event => {
    $('#subscriberDeleteModal').modal('show');
     
})
window.addEventListener('editVlogModal', event => {
    $('#editVlogModal').modal('show');
     
})
window.addEventListener('deleted_confirm_modal', event => {
    
    $('#vlogDeletedModal').modal('show');
    $('#blogDeletedModal').modal('show');
    
    $('#editVlogModal').modal('show');
    
    $('#standardModal').modal('show');
})
window.addEventListener('open_cat_add_modal', event => {
    $('#cat_delete').modal('show');
})
window.addEventListener('open_edit_cat_modal', event => {
    $('#cat_edit').modal('show');
})


window.addEventListener('delete_toast', event => {
    
    $('#fadeinModal').modal('hide');
    $('#blogDeletedModal').modal('hide');
    $('#subscriberDeleteModal').modal('hide');
    
    $('#vlogDeletedModal').modal('hide');
    $('#standardModal').modal('hide');
    Snackbar.show({
        text:  event.detail.newName,
        actionTextColor: '#fff',
        backgroundColor: '#e7515a'
    });
})

window.addEventListener('questionDeleteModal', event => {
    $('#fadeinModal').modal('show');
   
})

window.addEventListener('success_toast', event => {
    $('#cat_ad').modal('hide');
    $('#cat_delete').modal('hide');
    $('#cat_edit').modal('hide');
    Snackbar.show({
        text: event.detail.newName,
        actionTextColor: '#fff',
        backgroundColor: '#4361ee'
    });
})
window.addEventListener('warning_toast', event => {
    Snackbar.show({
        text: event.detail.newName,
        actionTextColor: '#fff',
        backgroundColor: '#e2a03f'
    });
})

window.addEventListener('All_question_delete', event => {
 
    Snackbar.show({
        text: "Successfully Deleted",
        actionTextColor: '#fff',
        backgroundColor: '#e2a03f'
    });
 
 
 })

 window.addEventListener('hideQuestion', event => {
 
 Snackbar.show({
     text: "Successfully Hide",
     actionTextColor: '#fff',
     backgroundColor: '#e2a03f'
 });


})


 window.addEventListener('showQuestion', event => {
 
 
    Snackbar.show({
        text: ' Successfully Showed',
        actionTextColor: '#fff',
        backgroundColor: '#4361ee'
    });

})



Livewire.on('initializeCkEditor', function () {
  
    CKEDITOR.replace('editor', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
 });
 
 @if (session('status'))
 Snackbar.show({
        text: ' Successfully Updated',
        actionTextColor: '#fff',
        backgroundColor: '#4361ee'
    });
@endif
@if (session('vlogAdded'))
 Snackbar.show({
        text: ' Successfully Added',
        actionTextColor: '#fff',
        backgroundColor: '#4361ee'
    });
@endif


@if (session('blogUpdate'))
 Snackbar.show({
        text: 'Blog is Successfully Updated',
        actionTextColor: '#fff',
        backgroundColor: '#4361ee'
    });
@endif


@if (session('questionAdded'))
 Snackbar.show({
        text: 'Question  is Successfully Added',
        actionTextColor: '#fff',
        backgroundColor: '#4361ee'
    });
@endif

@if (session('blogAdded'))
 Snackbar.show({
        text: 'Blog is Successfully Updated',
        actionTextColor: '#fff',
        backgroundColor: '#4361ee'
    });
@endif

@if (session('blogAdded1'))
 Snackbar.show({
        text: 'Your Account Successfully Created',
        actionTextColor: '#fff',
        backgroundColor: '#4361ee'
    });
@endif

@if (session('blogAdded11111'))
 Snackbar.show({
        text: 'Your Profile Picture is Successfully Upload',
        actionTextColor: '#fff',
        backgroundColor: '#4361ee'
    });
@endif

    </script>

@if($errors->any())
<script>
console.log('helooooooooooooo')
    $('#quesm').modal('show');
</script>
@endif
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jul 2021 08:24:21 GMT -->
</html>
