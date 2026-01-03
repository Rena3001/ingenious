<meta charset="utf-8">
<title>@yield('title', __('your_title'))</title>

<!-- Stylesheets -->
<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('assets/plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{asset('assets/plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{asset('assets/plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/flaticon.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/jquery.modal.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/fontawesome-all.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/odometer.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/owl.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/select2.min.css')}}" rel="stylesheet">
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

@stack('styles')
@push('styles')
<style>
/* MOBIL ÖLÇÜLƏRDƏ DESKTOP HEADER-İN TƏKRARLANAN HİSSƏLƏRİNİ GİZLƏDİR */

</style>
@endpush