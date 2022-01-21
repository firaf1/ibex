<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jul 2021 08:24:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>IBEX VLOG - ETHIOPIA</title>
    <link rel="icon" type="image/x-icon" href="back/assets/img/favicon.ico"/>
    <link href="back/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="back/assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="back/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="back/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="back/assets/css/apps/contacts.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="back/assets/css/forms/switches.css">
    <link rel="stylesheet" type="text/css" href="back/plugins/animate/animate.css">
    <link href="back/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="back/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="back/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="back/assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
    <link href="back/plugins/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="back/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="back/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    @livewireStyles
    <style>
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
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
</div>
        </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    @livewireScripts
    <script src="back/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="back/bootstrap/js/popper.min.js"></script>
    <script src="back/bootstrap/js/bootstrap.min.js"></script>
    <script src="back/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="back/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="back/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="back/plugins/apex/apexcharts.min.js"></script>
    <script src="back/assets/js/dashboard/dash_1.js"></script>
    <script src="back/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="back/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="back/assets/js/apps/contact.js"></script>
    <script src="back/plugins/blockui/jquery.blockUI.min.js"></script>

<script src="back/plugins/blockui/custom-blockui.js"></script>
<script src="back/assets/js/scrollspyNav.js"></script>
    <script src="back/plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="back/plugins/sweetalerts/custom-sweetalert.js"></script>

    <script src="back/plugins/notification/snackbar/snackbar.min.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="back/assets/js/components/notification/custom-snackbar.js"></script>


    <script>

window.addEventListener('successfully_added', event => {
    $('.user_add_modal').modal('hide');
   
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
window.addEventListener('deleted_confirm_modal', event => {
    $('#standardModal').modal('show');
})
window.addEventListener('delete_toast', event => {
    $('#standardModal').modal('hide');
    Snackbar.show({
        text:  event.detail.newName,
        actionTextColor: '#fff',
        backgroundColor: '#1abc9c'
    });
})


 
      
    </script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jul 2021 08:24:21 GMT -->
</html>
