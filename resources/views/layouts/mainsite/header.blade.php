<!DOCTYPE html>
<html lang="en">

<head>
    <title>OORA3 - Home</title>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="{{ asset('') }}assets/oora3/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="{{ asset('') }}assets/oora3/libs/priority-navigation-master/dist/priority-nav-core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css">
    <link rel="stylesheet"
        href="{{ asset('') }}assets/oora3/libs/bootstrap-select-1.14.0/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/oora3/libs/toastr-master/build/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/oora3/css/main%EF%B9%96v=32.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/oora3/css/media%EF%B9%96v=32.css">
    <link rel="icon" type="image/png" href="{{ asset('') }}assets/oora3/fav/favicon-96x96.png"
        sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('') }}assets/oora3/fav/favicon.svg" />
    <link rel="shortcut icon" href="{{ asset('') }}assets/oora3/fav/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('') }}assets/oora3/fav/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="OORA3" />

    <style>
        .blog-detail-content a {
            text-decoration: none;
        }
    </style>
</head>


<body class="page page--front">

    <div class="page-inner">





        <div class="mobile-panel-block">
            <div class="mobile-panel">
                <div class="mobile-panel__inner">
                    <div class="mobile-panel-middle">
                        <div class="mobile-panel-soc-block">
                            <div class="mobile-panel-soc">
                                <div class="mobile-panel-soc__left">
                                    <div class="mobile-panel-soc-title">Follow us</div>
                                </div>
                                <div class="mobile-panel-soc__right">
                                    <div class="topline-social-block">
                                        <div class="topline-social">
                                            <div class="topline-social-item">
                                                <a href="https://x.com/OORA3_updates" target="_blank"
                                                    class="topline-social-link topline-social-link--x">
                                                    <img class="image"
                                                        src="{{ asset('') }}assets/oora3/images/svg/social/social-link-icon--x.svg"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="topline-social-item">
                                                <a href="https://t.me/OORA3_updates" target="_blank"
                                                    class="topline-social-link topline-social-link--telegram">
                                                    <img class="image"
                                                        src="{{ asset('') }}assets/oora3/images/svg/social/social-link-icon--telegram.svg"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="topline-social-item">
                                                <a href="https://www.youtube.com/@OORA3_updates" target="_blank"
                                                    class="topline-social-link topline-social-link--youtube">
                                                    <img class="image"
                                                        src="{{ asset('') }}assets/oora3/images/svg/social/social-link-icon--youtube.svg"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-topmenu-block">
                            <div class="mobile-topmenu">
                                <ul class="mobile-topmenu-list">
                                    <li class="mobile-topmenu-item">
                                        <a href="{{route('wallets')}}"
                                            class="mobile-topmenu-link mobile-topmenu-link--wallet">
                                            <div class="mobile-topmenu-link__icon"></div>
                                            <div class="mobile-topmenu-link__text">Wallet</div>
                                        </a>
                                    </li>
                                    <li class="mobile-topmenu-item">
                                        <a href="{{route('ai-staking')}}"
                                            class="mobile-topmenu-link mobile-topmenu-link--ai-staking">
                                            <div class="mobile-topmenu-link__icon"></div>
                                            <div class="mobile-topmenu-link__text">AI Staking
</div>
                                        </a>
                                    </li>
                                    <li class="mobile-topmenu-item">
                                        <a href="{{route('about-us')}}"
                                            class="mobile-topmenu-link mobile-topmenu-link--loans">
                                            <div class="mobile-topmenu-link__icon"></div>
                                            <div class="mobile-topmenu-link__text">About us</div>
                                        </a>
                                    </li>
                                    <!-- <li class="mobile-topmenu-item">
                                        <a href="{{route('affiliate')}}"
                                            class="mobile-topmenu-link mobile-topmenu-link--affiliate-program">
                                            <div class="mobile-topmenu-link__icon"></div>
                                            <div class="mobile-topmenu-link__text">Affiliate program</div>
                                        </a>
                                    </li> -->
                                    <li class="mobile-topmenu-item mobile-topmenu-item--has-menu">
                                        <a href="javascript:void(0)" class="mobile-topmenu-link">
                                            <div class="mobile-topmenu-link__text">More</div>
                                        </a>
                                        <div class="mobile-submenu">
                                          
                                            <!-- <div class="mobile-submenu-item">
                                                <a href="{{route('help-center')}}" class="mobile-submenu-link">Help
                                                    center</a>
                                            </div> -->
                                           
                                            <div class="mobile-submenu-item">
                                                <a href="{{route('roadmap')}}" class="mobile-submenu-link">Roadmap</a>
                                            </div>
                                            <div class="mobile-submenu-item">
                                                <a href="{{route('contact-us')}}" class="mobile-submenu-link">Contact
                                                    Us</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>
                    <div class="mobile-panel-bottom">
                        <div class="topline-manage-buttons-block">
                            <div class="topline-manage-buttons">
                                <div class="topline-manage-button-wrapper topline-manage-button-wrapper--sign-in">
                                    <a href="#"
                                        class="topline-sign-in-button light-black-btn button--small">
                                        Sign In
                                    </a>
                                </div>
                                <div class="topline-manage-button-wrapper topline-manage-button-wrapper--sign-up">
                                    <a href="#"
                                        class="topline-sign-up-button green-gradient-btn button--small">
                                        Sign Up
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <header class="header">
            <div class="topline-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="topline">
                                <div class="topline__left">

                                    <div class="logo-wrapper">
                                        <a href="{{ asset('') }}" class="logo">
                                            <div class="logo-img">
                                                <img class="image"
                                                    src="{{ asset('') }}assets/oora3/images/svg/logo.png" alt="OORA3" style="width: 115px;">
                                            </div>
                                        </a>
                                    </div>

                                    <div class="topmenu-block">
                                        <div class="topmenu">
                                            <ul class="topmenu-list">
                                                <li class="topmenu-item">
                                                    <a href="{{route('wallets')}}"
                                                        class="topmenu-link topmenu-link--wallet">
                                                        <div class="topmenu-link__icon"></div>
                                                        <div class="topmenu-link__text">Wallet</div>
                                                    </a>
                                                </li>
                                                <li class="topmenu-item">
                                                    <a href="{{route('ai-staking')}}"
                                                        class="topmenu-link topmenu-link--ai-staking">
                                                        <div class="topmenu-link__icon"></div>
                                                        <div class="topmenu-link__text">AI Staking</div>
                                                    </a>
                                                </li>
                                                <li class="topmenu-item">
                                                    <a href="{{route('about-us')}}"
                                                        class="topmenu-link topmenu-link--loans">
                                                        <div class="topmenu-link__icon"></div>
                                                        <div class="topmenu-link__text">About us</div>
                                                    </a>
                                                </li>
                                                <li class="topmenu-item">
                                                    <a href="{{route('affiliate')}}"
                                                        class="topmenu-link topmenu-link--affiliate-program">
                                                        
                                                    </a>
                                                </li>
                                              
                                                <!-- <li class="topmenu-item">
                                                    <a href="{{route('help-center')}}" class="topmenu-link">
                                                        <div class="topmenu-link__text">Help center</div>
                                                    </a>
                                                </li> -->
                                        
                                                <li class="topmenu-item">
                                                    <a href="{{route('roadmap')}}" class="topmenu-link">
                                                        <div class="topmenu-link__text">Roadmap</div>
                                                    </a>
                                                </li>
                                                <li class="topmenu-item">
                                                    <a href="{{route('contact-us')}}" class="topmenu-link">
                                                        <div class="topmenu-link__text">Contact Us</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="topline__center">

                                    <div class="topline-social-block">
                                        <div class="topline-social">
                                            <div class="topline-social-item">
                                                <a href="https://x.com/OORA3_updates" target="_blank"
                                                    class="topline-social-link topline-social-link--x">
                                                    <img class="image"
                                                        src="{{ asset('') }}assets/oora3/images/svg/social/social-link-icon--x.svg"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="topline-social-item">
                                                <a href="https://t.me/OORA3_updates" target="_blank"
                                                    class="topline-social-link topline-social-link--telegram">
                                                    <img class="image"
                                                        src="{{ asset('') }}assets/oora3/images/svg/social/social-link-icon--telegram.svg"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="topline-social-item">
                                                <a href="https://www.youtube.com/@OORA3_updates" target="_blank"
                                                    class="topline-social-link topline-social-link--youtube">
                                                    <img class="image"
                                                        src="{{ asset('') }}assets/oora3/images/svg/social/social-link-icon--youtube.svg"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="topline__right">
                                    <div class="topline-language-button-block">
                                        <button class="topline-language-button" data-bs-toggle="modal"
                                            data-bs-target="#modalLanguage"></button>
                                    </div>
                                    <div class="topline-manage-buttons-block">
                                        <div class="topline-manage-buttons">
                                            <div
                                                class="topline-manage-button-wrapper topline-manage-button-wrapper--sign-in">
                                                <a href="{{route('index')}}"
                                                    class="topline-sign-in-button light-black-btn button--small">
                                                    Sign In
                                                </a>
                                            </div>
                                            <div
                                                class="topline-manage-button-wrapper topline-manage-button-wrapper--sign-up">
                                                <a href="{{route('index')}}"
                                                    class="topline-sign-up-button green-gradient-btn button--small">
                                                    Sign Up
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mobile-panel-btn-block">
                                        <button class="mobile-panel-btn"></button>
                                    </div>
                                </div>








                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
