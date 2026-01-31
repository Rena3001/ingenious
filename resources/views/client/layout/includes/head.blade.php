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


/* Wrapper */
.tech-dropdown {
    position: relative;
}

/* Parent link (Technical_services) */
.tech-dropdown > a {
    position: relative;
    display: flex;
    align-items: center;
    padding: 10px 0 10px 18px;
    font-size: 15px;
    color: #1e1e1e;
    text-decoration: none;
}

/* LEFT ARROW for parent */
.tech-dropdown > a::before {
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    color: #6fbf8a;
    font-size: 14px;
}

/* Green underline on hover */
.tech-dropdown:hover > a {
    color: #1e1e1e;
}

.tech-dropdown:hover > a::after {
    content: "";
    position: absolute;
    left: 18px;
    bottom: 2px;
    width: 70%;
    height: 2px;
    background: #6fbf8a;
}

/* ========================= */
/* DROPDOWN MENU (RIGHT) */
/* ========================= */

.tech-dropdown-menu {
    position: absolute;
    top: 0;
    left: 100%;
    min-width: 260px;
    background: #fff;
    padding: 8px 0;
    margin-left: 10px;

    opacity: 0;
    visibility: hidden;
    transform: translateX(10px);
    transition: all 0.25s ease;

    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    border-radius: 6px;
    z-index: 999;
}

/* Show on hover */
.tech-dropdown:hover .tech-dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateX(0);
}

/* Dropdown items */
.tech-dropdown-menu li {
    list-style: none;
}

/* Dropdown links */
.tech-dropdown-menu li a {
    position: relative;
    display: block;
    padding: 10px 20px 10px 30px;
    font-size: 14px;
    font-weight: 600;
    color: #363636;
    text-decoration: none;
    transition: background 0.2s ease, color 0.2s ease;
}

/* LEFT ARROW for submenu items */
.tech-dropdown-menu li a::before {
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: #1b5e8a;
    font-size: 13px;
}

/* Hover effect */
.tech-dropdown-menu li a:hover {
    background: #f5f5f5;
    color: #1b5e8a;
}

</style>
@endpush