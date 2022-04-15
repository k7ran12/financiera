<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="crm_body_bg">
    <nav class="sidebar dark_sidebar">
        <div class="logo d-flex justify-content-between">
            <a class="large_logo" href="index-2.html">
                <img alt="" src="{{asset('img/logo_white.png')}}"/>
            </a>
            <a class="small_logo" href="index-2.html">
                <img alt="" src="{{asset('img/mini_logo.png')}}"/>
            </a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close">
                </i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="">
                <a aria-expanded="false" class="has-arrow" href="#">
                    <div class="nav_icon_small">
                        <img alt="" src="{{asset('img/menu-icon/1.svg')}}">
                        </img>
                    </div>
                    <div class="nav_title">
                        <span>
                            Dashboard
                        </span>
                    </div>
                </a>
                <ul>
                    <li>
                        <a href="index_2.html">
                            Default
                        </a>
                    </li>
                    <li>
                        <a href="index_3.html">
                            Light Sidebar
                        </a>
                    </li>
                    <li>
                        <a href="index-2.html">
                            Dark Sidebar
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a aria-expanded="false" href="crypto_wallet.html">
                    <div class="nav_icon_small">
                        <img alt="" src="{{asset('img/menu-icon/2.svg')}}">
                        </img>
                    </div>
                    <div class="nav_title">
                        <span>
                            Crypto Wallet
                        </span>
                    </div>
                </a>
            </li>
            <li class="">
                <a aria-expanded="false" href="buy_sell.html">
                    <div class="nav_icon_small">
                        <img alt="" src="{{asset('img/menu-icon/3.svg')}}">
                        </img>
                    </div>
                    <div class="nav_title">
                        <span>
                            Buy & Sell
                        </span>
                    </div>
                </a>
            </li>
            <li class="">
                <a aria-expanded="false" href="Trader_Profile.html">
                    <div class="nav_icon_small">
                        <img alt="" src="{{asset('img/menu-icon/4.svg')}}">
                        </img>
                    </div>
                    <div class="nav_title">
                        <span>
                            Trader Profile
                        </span>
                    </div>
                </a>
            </li>
            <li class="">
                <a aria-expanded="false" href="crypto_stats.html">
                    <div class="nav_icon_small">
                        <img alt="" src="{{asset('img/menu-icon/5.svg')}}">
                        </img>
                    </div>
                    <div class="nav_title">
                        <span>
                            Crypto Stats
                        </span>
                    </div>
                </a>
            </li>
            <li class="">
                <a aria-expanded="false" class="has-arrow" href="#">
                    <div class="nav_icon_small">
                        <img alt="" src="{{asset('img/menu-icon/6.svg')}}">
                        </img>
                    </div>
                    <div class="nav_title">
                        <span>
                            Transactions
                        </span>
                    </div>
                </a>
                <ul>
                    <li>
                        <a href="Request.html">
                            Request
                        </a>
                    </li>
                    <li>
                        <a href="tan_cancel.html">
                            Cancel
                        </a>
                    </li>
                    <li>
                        <a href="Refound.html">
                            Refound
                        </a>
                    </li>
                    <li>
                        <a href="Payment_details.html">
                            Payment details
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a aria-expanded="false" class="has-arrow" href="#">
                    <div class="nav_icon_small">
                        <img alt="" src="{{asset('img/menu-icon/7.svg')}}">
                        </img>
                    </div>
                    <div class="nav_title">
                        <span>
                            Tickers
                        </span>
                    </div>
                </a>
                <ul>
                    <li>
                        <a href="ticker_dark.html">
                            Ticker Dark
                        </a>
                    </li>
                    <li>
                        <a href="Ticker_Light.html">
                            Ticker Light
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a aria-expanded="false" class="has-arrow" href="#">
                    <div class="nav_icon_small">
                        <img alt="" src="{{asset('img/menu-icon/8.svg')}}">
                        </img>
                    </div>
                    <div class="nav_title">
                        <span>
                            Apps
                        </span>
                    </div>
                </a>
                <ul>
                    <li>
                        <a href="editor.html">
                            Editor
                        </a>
                    </li>
                    <li>
                        <a href="invoice.html">
                            Invoice
                        </a>
                    </li>
                    <li>
                        <a href="Builder.html">
                            Builder
                        </a>
                    </li>
                    <li>
                        <a href="calender.html">
                            Calander
                        </a>
                    </li>
                    <li>
                        <a href="Board.html">
                            Board
                        </a>
                    </li>
                    <li>
                        <a href="basic_card.html">
                            Basic Card
                        </a>
                    </li>
                    <li>
                        <a href="theme_card.html">
                            Theme Card
                        </a>
                    </li>
                    <li>
                        <a href="dargable_card.html">
                            Draggable Card
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a aria-expanded="false" class="has-arrow" href="#">
                    <div class="nav_icon_small">
                        <img alt="" src="{{asset('img/menu-icon/Pages.svg')}}">
                        </img>
                    </div>
                    <div class="nav_title">
                        <span>
                            Pages
                        </span>
                    </div>
                </a>
                <ul>
                    <li>
                        <a href="role_permissions.html">
                            Role & Permissions
                        </a>
                    </li>
                    <li>
                        <a href="faq.html">
                            FAQ
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            Login
                        </a>
                    </li>
                    <li>
                        <a href="resister.html">
                            Register
                        </a>
                    </li>
                    <li>
                        <a href="error_400.html">
                            Error 404
                        </a>
                    </li>
                    <li>
                        <a href="error_500.html">
                            Error 500
                        </a>
                    </li>
                    <li>
                        <a href="forgot_pass.html">
                            Forgot Password
                        </a>
                    </li>
                    <li>
                        <a href="gallery.html">
                            Gallery
                        </a>
                    </li>
                    <li>
                        <a href="module_setting.html">
                            Module Setting
                        </a>
                    </li>
                    <li>
                        <a href="Products.html">
                            Products
                        </a>
                    </li>
                    <li>
                        <a href="Product_Details.html">
                            Product Details
                        </a>
                    </li>
                    <li>
                        <a href="Cart.html">
                            Cart
                        </a>
                    </li>
                    <li>
                        <a href="Checkout.html">
                            Checkout
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a aria-expanded="false" class="has-arrow" href="#">
                    <div class="nav_icon_small">
                        <img alt="" src="{{asset('img/menu-icon/General.svg')}}">
                        </img>
                    </div>
                    <div class="nav_title">
                        <span>
                            General
                        </span>
                    </div>
                </a>
                <ul>
                    <li>
                        <a href="Minimized_Aside.html">
                            Minimized Aside
                        </a>
                    </li>
                    <li>
                        <a href="empty_page.html">
                            Empty page
                        </a>
                    </li>
                    <li>
                        <a href="fixed_footer.html">
                            Fixed Footer
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a aria-expanded="false" class="has-arrow" href="#">
                    <div class="nav_icon_small">
                        <img alt="" src="{{asset('img/menu-icon/Mail_Box.svg')}}">
                        </img>
                    </div>
                    <div class="nav_title">
                        <span>
                            Mail Box
                        </span>
                    </div>
                </a>
                <ul>
                    <li>
                        <a href="mail_box.html">
                            Mail Box
                        </a>
                    </li>
                    <li>
                        <a href="compose.html">
                            Compose
                        </a>
                    </li>
                    <li>
                        <a href="important_mail.html">
                            Important Mail
                        </a>
                    </li>
                    <li>
                        <a href="mail_trash.html">
                            Mail Trash
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            Chat
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a aria-expanded="false" class="has-arrow" href="#">
                    <div class="nav_icon_small">
                        <img alt="" src="{{asset('img/menu-icon/icon.svg')}}">
                        </img>
                    </div>
                    <div class="nav_title">
                        <span>
                            Icons
                        </span>
                    </div>
                </a>
                <ul>
                    <li>
                        <a href="Fontawesome_Icon.html">
                            Fontawesome Icon
                        </a>
                    </li>
                    <li>
                        <a href="themefy_icon.html">
                            themefy icon
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a aria-expanded="false" class="has-arrow" href="#">
                    <div class="nav_icon_small">
                        <img alt="" src="{{asset('img/menu-icon/18.svg')}}">
                        </img>
                    </div>
                    <div class="nav_title">
                        <span>
                            UI Elements
                        </span>
                    </div>
                </a>
                <ul>
                    <li>
                        <a href="colors.html">
                            colors
                        </a>
                    </li>
                    <li>
                        <a href="Alerts.html">
                            Alerts
                        </a>
                    </li>
                    <li>
                        <a href="buttons.html">
                            Buttons
                        </a>
                    </li>
                    <li>
                        <a href="modal.html">
                            modal
                        </a>
                    </li>
                    <li>
                        <a href="dropdown.html">
                            Droopdowns
                        </a>
                    </li>
                    <li>
                        <a href="Badges.html">
                            Badges
                        </a>
                    </li>
                    <li>
                        <a href="Loading_Indicators.html">
                            Loading Indicators
                        </a>
                    </li>
                    <li>
                        <a href="color_plate.html">
                            Color Plate
                        </a>
                    </li>
                    <li>
                        <a href="typography.html">
                            Typography
                        </a>
                    </li>
                    <li>
                        <a href="datepicker.html">
                            Date Picker
                        </a>
                    </li>
                    <li>
                        <a href="wow_animation.html">
                            Animate
                        </a>
                    </li>
                    <li>
                        <a href="Scroll_Reveal.html">
                            Scroll Reveal
                        </a>
                    </li>
                    <li>
                        <a href="tilt.html">
                            Tilt Animation
                        </a>
                    </li>
                    <li>
                        <a href="navs.html">
                            Navs
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a aria-expanded="false" class="has-arrow" href="#">
                    <div class="nav_icon_small">
                        <img alt="" src="{{asset('img/menu-icon/forms.svg')}}">
                        </img>
                    </div>
                    <div class="nav_title">
                        <span>
                            forms
                        </span>
                    </div>
                </a>
                <ul>
                    <li>
                        <a href="Basic_Elements.html">
                            Basic Elements
                        </a>
                    </li>
                    <li>
                        <a href="Groups.html">
                            Groups
                        </a>
                    </li>
                    <li>
                        <a href="Max_Length.html">
                            Max Length
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.html">
                            Layouts
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a aria-expanded="false" class="has-arrow" href="#">
                    <div class="nav_icon_small">
                        <img alt="" src="{{asset('img/menu-icon/14.svg')}}">
                        </img>
                    </div>
                    <div class="nav_title">
                        <span>
                            Widgets
                        </span>
                    </div>
                </a>
                <ul>
                    <li>
                        <a href="accordion.html">
                            Accordions
                        </a>
                    </li>
                    <li>
                        <a href="Scrollable.html">
                            Scrollable
                        </a>
                    </li>
                    <li>
                        <a href="notification.html">
                            Notifications
                        </a>
                    </li>
                    <li>
                        <a href="carousel.html">
                            Carousel
                        </a>
                    </li>
                    <li>
                        <a href="Pagination.html">
                            Pagination
                        </a>
                    </li>
                    <li>
                        <a href="profilebox.html">
                            Profile Box
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a aria-expanded="false" class="has-arrow" href="#">
                    <div class="nav_icon_small">
                        <img alt="" src="{{asset('img/menu-icon/17.svg')}}">
                        </img>
                    </div>
                    <div class="nav_title">
                        <span>
                            Table
                        </span>
                    </div>
                </a>
                <ul>
                    <li>
                        <a href="data_table.html">
                            Data Tables
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap_table.html">
                            Bootstrap
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a aria-expanded="false" class="has-arrow" href="#">
                    <div class="nav_icon_small">
                        <img alt="" src="{{asset('img/menu-icon/16.svg')}}">
                        </img>
                    </div>
                    <div class="nav_title">
                        <span>
                            Charts
                        </span>
                    </div>
                </a>
                <ul>
                    <li>
                        <a href="chartjs.html">
                            ChartJS
                        </a>
                    </li>
                    <li>
                        <a href="apex_chart.html">
                            Apex Charts
                        </a>
                    </li>
                    <li>
                        <a href="chart_sparkline.html">
                            Chart sparkline
                        </a>
                    </li>
                    <li>
                        <a href="am_chart.html">
                            am-charts
                        </a>
                    </li>
                    <li>
                        <a href="nvd3_charts.html">
                            nvd3 charts.
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a aria-expanded="false" class="has-arrow" href="#">
                    <div class="nav_icon_small">
                        <img alt="" src="{{asset('img/menu-icon/map.svg')}}">
                        </img>
                    </div>
                    <div class="nav_title">
                        <span>
                            Maps
                        </span>
                    </div>
                </a>
                <ul>
                    <li>
                        <a href="mapjs.html">
                            Maps JS
                        </a>
                    </li>
                    <li>
                        <a href="vector_map.html">
                            Vector Maps
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <section class="main_content dashboard_part large_header_bg">
        <div class="container-fluid no-gutters">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu">
                            </i>
                        </div>
                        <div class="line_icon open_miniSide d-none d-lg-block">
                            <img alt="" src="{{asset('img/line_img.png')}}">
                            </img>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a class="CHATBOX_open nav-link-notify" href="#">
                                        <img alt="" src="{{asset('img/icon/msg.svg')}}">
                                        </img>
                                    </a>
                                </li>
                                <li>
                                    <a class="bell_notification_clicker nav-link-notify" href="#">
                                        <img alt="" src="{{asset('img/icon/bell.svg')}}">
                                        </img>
                                    </a>
                                    <div class="Menu_NOtification_Wrap">
                                        <div class="notification_Header">
                                            <h4>
                                                Notifications
                                            </h4>
                                        </div>
                                        <div class="Notification_body">
                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#">
                                                        <img alt="" src="{{asset('img/staf/2.png" ')}}/>
                                                    </a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>
                                                            Cool Marketing
                                                        </h5>
                                                    </a>
                                                    <p>
                                                        Lorem ipsum dolor sit amet
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#">
                                                        <img alt="" src="{{asset('img/staf/4.png" ')}}/>
                                                    </a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>
                                                            Awesome packages
                                                        </h5>
                                                    </a>
                                                    <p>
                                                        Lorem ipsum dolor sit amet
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#">
                                                        <img alt="" src="{{asset('img/staf/3.png" ')}}/>
                                                    </a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>
                                                            what a packages
                                                        </h5>
                                                    </a>
                                                    <p>
                                                        Lorem ipsum dolor sit amet
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#">
                                                        <img alt="" src="{{asset('img/staf/2.png" ')}}/>
                                                    </a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>
                                                            Cool Marketing
                                                        </h5>
                                                    </a>
                                                    <p>
                                                        Lorem ipsum dolor sit amet
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#">
                                                        <img alt="" src="{{asset('img/staf/4.png" ')}}/>
                                                    </a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>
                                                            Awesome packages
                                                        </h5>
                                                    </a>
                                                    <p>
                                                        Lorem ipsum dolor sit amet
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#">
                                                        <img alt="" src="{{asset('img/staf/3.png" ')}}/>
                                                    </a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>
                                                            what a packages
                                                        </h5>
                                                    </a>
                                                    <p>
                                                        Lorem ipsum dolor sit amet
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nofity_footer">
                                            <div class="submit_button text-center pt_20">
                                                <a class="btn_1 green" href="#">
                                                    See More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="profile_info d-flex align-items-center">
                                <div class="profile_thumb mr_20">
                                    <img alt="#" src="{{asset('img/transfer/4.png')}}">
                                    </img>
                                </div>
                                <div class="author_name">
                                    <h4 class="f_s_15 f_w_500 mb-0">
                                        Jiue Anderson
                                    </h4>
                                    <p class="f_s_12 f_w_400">
                                        Manager
                                    </p>
                                </div>
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">
                                        <p>
                                            Manager
                                        </p>
                                        <h5>
                                            Jiue Anderson
                                        </h5>
                                    </div>
                                    <div class="profile_info_details">
                                        <a href="#">
                                            My Profile
                                        </a>
                                        <a href="#">
                                            Settings
                                        </a>
                                        <a href="#">
                                            Log Out
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
        
    </section>
    <div class="CHAT_MESSAGE_POPUPBOX">
        <div class="CHAT_POPUP_HEADER">
            <div class="MSEESAGE_CHATBOX_CLOSE">
                <svg fill="none" height="12" viewbox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.09939 5.98831L11.772 10.661C12.076 10.965 12.076 11.4564 11.772 11.7603C11.468 12.0643 10.9766 12.0643 10.6726 11.7603L5.99994 7.08762L1.32737 11.7603C1.02329 12.0643 0.532002 12.0643 0.228062 11.7603C-0.0760207 11.4564 -0.0760207 10.965 0.228062 10.661L4.90063 5.98831L0.228062 1.3156C-0.0760207 1.01166 -0.0760207 0.520226 0.228062 0.216286C0.379534 0.0646715 0.578697 -0.0114918 0.777717 -0.0114918C0.976738 -0.0114918 1.17576 0.0646715 1.32737 0.216286L5.99994 4.889L10.6726 0.216286C10.8243 0.0646715 11.0233 -0.0114918 11.2223 -0.0114918C11.4213 -0.0114918 11.6203 0.0646715 11.772 0.216286C12.076 0.520226 12.076 1.01166 11.772 1.3156L7.09939 5.98831Z"
                        fill="white">
                    </path>
                </svg>
            </div>
            <h3>
                Chat with us
            </h3>
            <div class="Chat_Listed_member">
                <ul>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img alt="" src="{{asset('img/staf/1.png')}}">
                                </img>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img alt="" src="{{asset('img/staf/2.png')}}">
                                </img>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img alt="" src="{{asset('img/staf/3.png')}}">
                                </img>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img alt="" src="{{asset('img/staf/4.png')}}">
                                </img>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img alt="" src="{{asset('img/staf/5.png')}}">
                                </img>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <div class="more_member_count">
                                    <span>
                                        90+
                                    </span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="CHAT_POPUP_BODY">
            <p class="mesaged_send_date">
                Sunday, 12 January
            </p>
            <div class="CHATING_SENDER">
                <div class="SMS_thumb">
                    <img alt="" src="{{asset('img/staf/1.png')}}">
                    </img>
                </div>
                <div class="SEND_SMS_VIEW">
                    <p>
                        Hi! Welcome .
                        How can I help you?
                    </p>
                </div>
            </div>
            <div class="CHATING_SENDER CHATING_RECEIVEr">
                <div class="SEND_SMS_VIEW">
                    <p>
                        Hello
                    </p>
                </div>
                <div class="SMS_thumb">
                    <img alt="" src="{{asset('img/staf/1.png')}}">
                    </img>
                </div>
            </div>
        </div>
        <div class="CHAT_POPUP_BOTTOM">
            <div class="chat_input_box d-flex align-items-center">
                <div class="input-group">
                    <input aria-describedby="basic-addon2" aria-label="Recipient's username" class="form-control"
                        placeholder="Write your message" type="text">
                    <div class="input-group-append">
                        <button class="btn " type="button">
                            <svg fill="none" height="22" viewbox="0 0 22 22" width="22"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.7821 3.21895C14.4908 -1.07281 7.50882 -1.07281 3.2183 3.21792C-1.07304 7.50864 -1.07263 14.4908 3.21872 18.7824C7.50882 23.0729 14.4908 23.0729 18.7817 18.7815C23.0726 14.4908 23.0724 7.50906 18.7821 3.21895ZM17.5813 17.5815C13.9525 21.2103 8.04773 21.2108 4.41871 17.5819C0.78907 13.9525 0.789485 8.04714 4.41871 4.41832C8.04752 0.789719 13.9521 0.789304 17.5817 4.41874C21.2105 8.04755 21.2101 13.9529 17.5813 17.5815ZM6.89503 8.02162C6.89503 7.31138 7.47107 6.73534 8.18131 6.73534C8.89135 6.73534 9.46739 7.31117 9.46739 8.02162C9.46739 8.73228 8.89135 9.30811 8.18131 9.30811C7.47107 9.30811 6.89503 8.73228 6.89503 8.02162ZM12.7274 8.02162C12.7274 7.31138 13.3038 6.73534 14.0141 6.73534C14.7241 6.73534 15.3002 7.31117 15.3002 8.02162C15.3002 8.73228 14.7243 9.30811 14.0141 9.30811C13.3038 9.30811 12.7274 8.73228 12.7274 8.02162ZM15.7683 13.2898C14.9712 15.1332 13.1043 16.3243 11.0126 16.3243C8.8758 16.3243 6.99792 15.1272 6.22834 13.2744C6.09642 12.9573 6.24681 12.593 6.56438 12.4611C6.64238 12.4289 6.72328 12.4136 6.80293 12.4136C7.04687 12.4136 7.27836 12.5577 7.37772 12.7973C7.95376 14.1842 9.38048 15.0799 11.0126 15.0799C12.6077 15.0799 14.0261 14.1836 14.626 12.7959C14.7625 12.4804 15.1288 12.335 15.4441 12.4717C15.7594 12.6084 15.9048 12.9745 15.7683 13.2898Z"
                                    fill="#707DB7">
                                </path>
                            </svg>
                        </button>
                        <button class="btn" type="button">
                            <svg fill="none" height="22" viewbox="0 0 22 22" width="22"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 0.289062C4.92455 0.289062 0 5.08402 0 10.9996C0 16.9152 4.92455 21.7101 11 21.7101C17.0755 21.7101 22 16.9145 22 10.9996C22 5.08472 17.0755 0.289062 11 0.289062ZM11 20.3713C5.68423 20.3713 1.375 16.1755 1.375 10.9996C1.375 5.82371 5.68423 1.62788 11 1.62788C16.3158 1.62788 20.625 5.82371 20.625 10.9996C20.625 16.1755 16.3158 20.3713 11 20.3713ZM15.125 10.3302H11.6875V6.98314C11.6875 6.61363 11.3795 6.31373 11 6.31373C10.6205 6.31373 10.3125 6.61363 10.3125 6.98314V10.3302H6.875C6.4955 10.3302 6.1875 10.6301 6.1875 10.9996C6.1875 11.3691 6.4955 11.669 6.875 11.669H10.3125V15.016C10.3125 15.3855 10.6205 15.6854 11 15.6854C11.3795 15.6854 11.6875 15.3855 11.6875 15.016V11.669H15.125C15.5045 11.669 15.8125 11.3691 15.8125 10.9996C15.8125 10.6301 15.5045 10.3302 15.125 10.3302Z"
                                    fill="#707DB7">
                                </path>
                            </svg>
                            <input type="file">
                            </input>
                        </button>
                    </div>
                    </input>
                </div>
            </div>
        </div>
    </div>
    <div id="back-top" style="display: none;">
        <a href="#" title="Go to Top">
            <i class="ti-angle-up">
            </i>
        </a>
    </div>

</body>

</html>
