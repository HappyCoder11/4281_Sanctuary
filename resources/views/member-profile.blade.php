<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>sanctuaryforhumanity</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/reset.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/editor.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}"/>

    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css">--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#txtEditor").Editor();
        });
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="apple-touch-icon" type="image/png"
          href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Space+Mono:400,400i,700,700i');


    .title {
        margin-bottom: 30px;
        color: #162969;
    }


    .credit_card{
        width: 320px;
        height: 190px;
        -webkit-perspective: 600px;
        -moz-perspective: 600px;
        perspective:600px;

    }

    .card__part{
        box-shadow: 1px 1px #aaa3a3;
        top: 0;
        position: absolute;
        z-index: 1000;
        left: 0;
        display: inline-block;
        width: 320px;
        height: 190px;
        background-color:#aaa3a3;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        border-radius: 8px;

        -webkit-transition: all .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        -moz-transition: all .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        -ms-transition: all .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        -o-transition: all .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        transition: all .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
    }

    .card__front{
        padding: 18px;
        -webkit-transform: rotateY(0);
        -moz-transform: rotateY(0);
    }

    .card__back {
        padding: 18px 0;
        -webkit-transform: rotateY(-180deg);
        -moz-transform: rotateY(-180deg);
    }

    .card__black-line {
        margin-top: 5px;
        height: 38px;
        background-color: #303030;
    }

    .card__logo {
        height: 16px;
    }

    .card__front-logo{
        position: absolute;
        top: 18px;
        right: 18px;
    }
    .card__square {
        border-radius: 5px;
        height: 30px;
    }

    .card_numer {
        display: block;
        width: 100%;
        word-spacing: 4px;
        font-size: 20px;
        letter-spacing: 2px;
        color: #fff;
        text-align: center;
        margin-bottom: 20px;
        margin-top: 20px;
    }

    .card__space-75 {
        width: 75%;
        float: left;
    }

    .card__space-25 {
        width: 25%;
        float: left;
    }

    .card__label {
        font-size: 10px;
        text-transform: uppercase;
        color: rgba(255,255,255,0.8);
        letter-spacing: 1px;
    }

    .card__info {
        margin-bottom: 0;
        margin-top: 5px;
        font-size: 16px;
        line-height: 18px;
        color: #fff;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .card__back-content {
        padding: 15px 15px 0;
    }
    .card__secret--last {
        color: #303030;
        text-align: right;
        margin: 0;
        font-size: 14px;
    }

    .card__secret {
        padding: 5px 12px;
        background-color: #fff;
        position:relative;
    }

    .card__secret:before{
        content:'';
        position: absolute;
        top: -3px;
        left: -3px;
        height: calc(100% + 6px);
        width: calc(100% - 42px);
        border-radius: 4px;
        background: repeating-linear-gradient(45deg, #ededed, #ededed 5px, #f9f9f9 5px, #f9f9f9 10px);
    }

    .card__back-logo {
        position: absolute;
        bottom: 15px;
        right: 15px;
    }

    .card__back-square {
        position: absolute;
        bottom: 15px;
        left: 15px;
    }
    #stripeModal {
        height: 70%;
        margin: auto;
        overflow: hidden;
    }
    #stripeModal  .modal-content {
        padding: 20px;
        border-radius: 5px;
        height: 100%;
    }

    #stripeModal  .card input {
        margin: 0 !important;
        width: 85%;
    }

    #stripeModal  .modal-dialog {
        /* height: auto; */
        margin: auto;
        /* position: absolute; */
        left: 0;
        right: 0;
        max-width: 500px;
        height: 50%;
        bottom: 0;
        top: 0;
        border-radius: 10px;
    }
    #stripeModal  .modal-dialog h2 {
        font-size: 24px;
    }

    #stripeModal  .modal-body {
        padding: 15px 0;
    }

    #stripeModal  .modal-header {
        padding: 0;
    }

    #stripeModal  .card-body {
        padding: 15px 0;
    }

    .payment-submit {
        background: rgb(78, 102, 54);
        border: none;
        cursor: pointer;
    }

    #stripeModal  .modal-header .close {
        position: absolute;
        right: 10px;
        top: -5px;
    }
    #stripeModal  .input-group {
        border:1px solid #d6d6d6;
    }
    #payment-form {
        height: 100px;
    }
</style>

<body translate="no">
<div class="page-bg"></div>
<div class="position-relative">
    <header class="header-inner">
        <div class="container modalOpen">

            <div class="navbar-expand-md navbar-dark">
                <div class="flex-row d-flex">
                    <!--                    <h1><a class="navbar-brand" href="home.html"><img src="images/logo.png" class="img-fluid logo"-->
                    <!--                                                                      alt="logo" title="logo"></a></h1>-->
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="menu-box">

                    <div class="navbar-collapse collapse" id="collapsingNavbar">
                        <ul>
                            <li>
                                <a href="{{route('home')}}">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{route('network')}}">
                                    The Network
                                </a>
                            </li>
                            <li>
                                <a href="{{route('contribute')}}">
                                    Contributors
                                </a>
                            </li>
                            <li>
                                <a href="{{route('members')}}">
                                    Members
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="registration-banner">

                    <div class="d-flex">
                        <svg data-bbox="7 3 36 45" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" height="50"
                             width="50" data-type="shape">
                            <g>
                                <path
                                    d="M38.473 34.564L43 39.273v2.298H7v-2.298l4.527-4.71V22.959c0-3.662.88-6.82 2.64-9.474 1.797-2.729 4.294-4.504 7.492-5.326V6.532c0-.972.323-1.803.97-2.495C23.275 3.346 24.066 3 25 3c.934 0 1.734.346 2.398 1.037.665.692.997 1.523.997 2.495v1.626c3.162.822 5.64 2.616 7.437 5.382 1.76 2.654 2.641 5.793 2.641 9.418v11.606zM25 48c-1.364 0-2.523-.47-3.477-1.411-.955-.94-1.432-2.078-1.432-3.41h9.818c0 1.332-.487 2.47-1.46 3.41C27.473 47.529 26.324 48 25 48z"
                                    fill-rule="evenodd"></path>
                            </g>
                        </svg>
                        @auth
                            @if(Auth::user()->avatar_url)<img src="{{asset('images/'.Auth::user()->avatar_url)}}"
                                                              width="30px" height="30px">@endif

                            {{--                        <svg data-bbox="0 0 50 50" data-type="shape" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" class="dropIcon">--}}
                            {{--                            <g>--}}
                            {{--                                <path d="M25 48.077c-5.924 0-11.31-2.252-15.396-5.921 2.254-5.362 7.492-8.267 15.373-8.267 7.889 0 13.139 3.044 15.408 8.418-4.084 3.659-9.471 5.77-15.385 5.77m.278-35.3c4.927 0 8.611 3.812 8.611 8.878 0 5.21-3.875 9.456-8.611 9.456s-8.611-4.246-8.611-9.456c0-5.066 3.684-8.878 8.611-8.878M25 0C11.193 0 0 11.193 0 25c0 .915.056 1.816.152 2.705.032.295.091.581.133.873.085.589.173 1.176.298 1.751.073.338.169.665.256.997.135.515.273 1.027.439 1.529.114.342.243.675.37 1.01.18.476.369.945.577 1.406.149.331.308.657.472.98.225.446.463.883.714 1.313.182.312.365.619.56.922.272.423.56.832.856 1.237.207.284.41.568.629.841.325.408.671.796 1.02 1.182.22.244.432.494.662.728.405.415.833.801 1.265 1.186.173.154.329.325.507.475l.004-.011A24.886 24.886 0 0 0 25 50a24.881 24.881 0 0 0 16.069-5.861.126.126 0 0 1 .003.01c.172-.144.324-.309.49-.458.442-.392.88-.787 1.293-1.209.228-.232.437-.479.655-.72.352-.389.701-.78 1.028-1.191.218-.272.421-.556.627-.838.297-.405.587-.816.859-1.24a26.104 26.104 0 0 0 1.748-3.216c.208-.461.398-.93.579-1.406.127-.336.256-.669.369-1.012.167-.502.305-1.014.44-1.53.087-.332.183-.659.256-.996.126-.576.214-1.164.299-1.754.042-.292.101-.577.133-.872.095-.89.152-1.791.152-2.707C50 11.193 38.807 0 25 0"></path>--}}
                            {{--                            </g>--}}
                            {{--                        </svg>--}}

                            <button type="button" class="btn-generic profile-arrow  dropdown-toggle"
                                    @guest data-toggle="modal" @else data-toggle="dropdown"
                                    @endguest aria-haspopup="true" aria-expanded="false"
                                    @guest data-target=".login-modal"@endguest>
                                <svg width="14" height="8" viewBox="0 0 14 8">
                                    <path
                                        d="M1.707.293L.293 1.707l6 6a1 1 0 001.397.016l6-5.726L12.31.55 7.016 5.602 1.707.292z"></path>
                                </svg>
                                @endauth
                                @guest
                                    <a class="nav-link" style="color:white"
                                       href="{{ route('login') }}">{{ __('Login') }}</a>
                                @endguest

                            </button>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('profile')}}">Profile</a>
                                <a class="dropdown-item" href="#">My Account</a>
                                <a class="logout-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <div class="dropdown-divider"></div>
                            </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="console"></div>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <main>
        <div class="modal fade login-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
             aria-hidden="true">

            <div class="modal-dialog">

                <!-- Modal Content: begins -->
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Sign Up
                        </h4>
                        <div class="d-flex login-container">
                            <p>
                                Already a member?
                            </p>
                            <button type="button"><a href="{{route('register')}}">Log In</a></button>
                        </div>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="block-wrap">


                            <!-- facebook	 -->
                            <div>
                                <a class="btn-fb" href="">
                                    <div class="fb-content">
                                        <div class="logo">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                 viewBox="0 0 32 32"
                                                 version="1">
                                                <path fill="#FFFFFF"
                                                      d="M32 30a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h28a2 2 0 0 1 2 2v28z"/>
                                                <path fill="#4267b2"
                                                      d="M22 32V20h4l1-5h-5v-2c0-2 1.002-3 3-3h2V5h-4c-3.675 0-6 2.881-6 7v3h-4v5h4v12h5z"/>
                                            </svg>
                                        </div>
                                        <p>Sign in with Facebook</p>
                                    </div>
                                </a>
                            </div>
                            <!-- google	 -->
                            <div>
                                <a class="btn-google" href="">
                                    <div class="google-content">
                                        <div class="logo">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 viewBox="0 0 48 48">
                                                <defs>
                                                    <path id="a"
                                                          d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/>
                                                </defs>
                                                <clipPath id="b">
                                                    <use xlink:href="#a" overflow="visible"/>
                                                </clipPath>
                                                <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"/>
                                                <path clip-path="url(#b)" fill="#EA4335"
                                                      d="M0 11l17 13 7-6.1L48 14V0H0z"/>
                                                <path clip-path="url(#b)" fill="#34A853"
                                                      d="M0 37l30-23 7.9 1L48 0v48H0z"/>
                                                <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"/>
                                            </svg>
                                        </div>
                                        <p>Sign in with Google</p>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="position-relative or-row">
                            <p>or</p>
                        </div>
                        <button type="button" class="sign-up">
                            <a href="{{route('register')}}">
                                Sign up with email</a>
                        </button>
                        <div class="position-relative">
                            <div class="custom-control custom-checkbox sign-in-checkbox mt-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">Join this site’s
                                    community.</label>
                            </div>
                            <div id="read-more">
                                <div class="read-more-article">
                                    <p class="moretext">
                                        Connect with members of our site. Leave comments, follow people and more. Your
                                        nickname,
                                        profile image, and public activity will be visible on our site. </p>
                                </div>
                                <a class="moreless-button" href="#">Read more</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Modal Content: ends -->

            </div>

        </div>
        <div class="modal fade login-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
             aria-hidden="true">

            <div class="modal-dialog">

                <!-- Modal Content: begins -->
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Sign In
                        </h4>
                        <div class="d-flex login-container">
                            <p>
                                Already a member?
                            </p>
                            <button type="button">Log In</button>
                        </div>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="block-wrap">


                            <!-- facebook	 -->
                            <div>
                                <a class="btn-fb" href="">
                                    <div class="fb-content">
                                        <div class="logo">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                 viewBox="0 0 32 32"
                                                 version="1">
                                                <path fill="#FFFFFF"
                                                      d="M32 30a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h28a2 2 0 0 1 2 2v28z"/>
                                                <path fill="#4267b2"
                                                      d="M22 32V20h4l1-5h-5v-2c0-2 1.002-3 3-3h2V5h-4c-3.675 0-6 2.881-6 7v3h-4v5h4v12h5z"/>
                                            </svg>
                                        </div>
                                        <p>Sign in with Facebook</p>
                                    </div>
                                </a>
                            </div>
                            <!-- google	 -->
                            <div>
                                <a class="btn-google" href="">
                                    <div class="google-content">
                                        <div class="logo">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 viewBox="0 0 48 48">
                                                <defs>
                                                    <path id="a"
                                                          d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/>
                                                </defs>
                                                <clipPath id="b">
                                                    <use xlink:href="#a" overflow="visible"/>
                                                </clipPath>
                                                <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"/>
                                                <path clip-path="url(#b)" fill="#EA4335"
                                                      d="M0 11l17 13 7-6.1L48 14V0H0z"/>
                                                <path clip-path="url(#b)" fill="#34A853"
                                                      d="M0 37l30-23 7.9 1L48 0v48H0z"/>
                                                <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"/>
                                            </svg>
                                        </div>
                                        <p>Sign in with Google</p>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="position-relative or-row">
                            <p>or</p>
                        </div>
                        <button type="button" class="sign-up">
                            <a href="{{route('register')}}">
                                Sign up with email</a>
                        </button>
                        <div class="position-relative">
                            <div class="custom-control custom-checkbox sign-in-checkbox mt-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">Join this site’s
                                    community.</label>
                            </div>
                            <div id="read-more">
                                <div class="read-more-article">
                                    <p class="moretext">
                                        Connect with members of our site. Leave comments, follow people and more. Your
                                        nickname,
                                        profile image, and public activity will be visible on our site. </p>
                                </div>
                                <a class="moreless-button" href="#">Read more</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Modal Content: ends -->

            </div>

        </div>
        <div class="profile-banner">
            <div class="profile-left-banner">
                <div class="profile-inner">

                    <div class="avatar-upload">

                        <div class="avatar-preview mt-3">

                            <div id="imagePreview"
                                 style="background-image: url({{asset('images/'. $member->avatar_url)}})">
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-3 text-white text-center">{{$member->name}}</p>
                    @auth
                            <button type="button" id="followButton" class="edit-btn{{Auth::user()->followings->contains($member->id) ? 'followed edit-btn' : 'followings edit-btn' }}"  data-id="{{$member->id}}">@if(Auth::user()->followings->contains($member->id))Followed @else Follow @endif </button>
                        @endauth
                </div>
                <ul class="profile-list">
                    <li>
                        <a href="{{route('member-profile',$member->id)}}" class="active">
                            Profile
                        </a>
                    </li>
                    <li>
                        <a class="posts toCoursor" data-id="{{$member->id}}">
                            Forum Posts ({{count($posts)}})
                        </a>
                    </li>
                    <li>
                        <a class="comment toCoursor" data-id="{{$member->id}}">
                            Forum Comments ({{count($comments)}})
                        </a>
                    </li>



                    {{--                    <li>--}}
                    {{--                        <a href="#">--}}
                    {{--                            Notifications--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    {{--                    <li>--}}
                    {{--                        <a href="#">--}}
                    {{--                            Settings--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                </ul>



                @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p>{{ Session::get('success') }}</p>
                    </div>
                @elseif(Session::has('error'))
                    <div class="alert alert-danger text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p>{{ Session::get('error') }}</p>
                    </div>@endif

            </div>
            <div class="profile-right-banner">
                <form method="POST" id="editProfile" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="id" value="@auth{{Auth::user()->id}}@endauth">
                    <div class="container-fluid rich-editor">
                        <h3>About
                        </h3>
                        <div class="container-fluid">
                            <p class="pull-right">
                                <script>document.write(new Date().getFullYear())</script>
                            </p>
                        </div>
                        <div class="row">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 nopadding">
                                        <div class="about-member">@if($member->about){{$member->about}}@else Nothing Here yet.
                                            This member hasn't written about themselves.@endif</div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
        </div>

    </main>
</div>

</body>


<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
{{--<script src="{{asset('js/main.js')}}"></script>--}}
<script src="{{asset('js/editor.js')}}"></script>
<script id="rendered-js">
    $(document).ready(function () {
        $('.dropdown-item').on('click', function () {
            if ($(this).attr('href')) {
                // alert('redirect to ' + $(this).attr('href'));
                window.location.replace($(this).attr('href'));

            }

        });
    });
    //# sourceURL=pen.js
</script>
<script>
    $('.comment').on('click', function (event) {
        event.preventDefault();
        let id=$(this).data('id');
        $.ajax({
            url: '/member-comments',
            method: "get",
            data: {_token: $('meta[name="csrf-token"]').attr('content'),id:id},
            success: (response) => {
                console.log(response);
                $(".profile-right-banner").html(response);
            }
        })
    });
    $('.posts').on('click', function (event) {
        event.preventDefault();
        let id=$(this).data('id');
        $.ajax({
            url: '/member-posts',
            method: "get",
            data: {_token: $('meta[name="csrf-token"]').attr('content'),id:id},
            success: (response) => {
                console.log(response);
                $(".profile-right-banner").html(response);
            }
        })
    });
</script>
<script>
    $(document).on('click', '.edit-btn', function (event) {
        event.preventDefault();
        let follow = $(this);
        let toFollowId = $(this).attr('data-id');
        let user_id = $(this).attr('data-path');
        $.ajax({
            type: "get",
            url: '/followUser',
            data: {_token: $('meta[name="csrf-token"]').attr('content'), id: toFollowId, postId: user_id},
            success: function (r) {
                follow.html('Followed');
                if (follow.text = 'Following') {
                    follow.removeClass('.edit-btn').addClass('followed');
                }
            }

        })
    })

    $(document).on('click', '#followButton', function (event) {
        event.preventDefault();
        let follow = $(this);
        let toFollowId = $(this).attr('data-id');
        {
            $.ajax({
                type: "post",
                url: '/followUser',
                data: {_token: $('meta[name="csrf-token"]').attr('content'), id: toFollowId},
                success: function (r) {

                    if( r==1 ) {
                        follow.html('Followed');

                    } else if( r==2 ) {
                        follow.html('Follow');

                    }

                }
            })
        }
    })


</script>
