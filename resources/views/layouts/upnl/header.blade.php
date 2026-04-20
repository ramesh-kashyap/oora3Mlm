<!DOCTYPE html>
<html lang="en">

<head>
    <title>OORA3 - Dashboard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="{{asset('')}}assets/oora3/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('')}}assets/oora3/libs/priority-navigation-master/dist/priority-nav-core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{asset('')}}assets/oora3/libs/bootstrap-select-1.14.0/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{asset('')}}assets/oora3/libs/toastr-master/build/toastr.min.css">
    <link rel="stylesheet" href="{{asset('')}}assets/oora3/css/main﹖v=32.css">
    <link rel="stylesheet" href="{{asset('')}}assets/oora3/css/media﹖v=32.css">
    <link rel="icon" type="image/png" href="{{asset('')}}assets/oora3/fav/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{asset('')}}assets/oora3/fav/favicon.svg" />
    <link rel="shortcut icon" href="{{asset('')}}assets/oora3/fav/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('')}}assets/oora3/fav/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="OORA3" />

<style>
        .blog-detail-content a {
        			text-decoration: none;
        		}
    </style>
</head>


<body class="page page--dashboard">
  
    <div class="page-inner">



        <div class="db-mobile-panel-block">
            <div class="db-mobile-panel">
                <div class="db-mobile-panel__inner">
                    <div class="db-mobile-panel-middle">


                        <div class="db-menu-block">
                            <div class="db-mobile-menu-title-block">
                                <div class="db-mobile-menu-title">Dashboard</div>
                            </div>
                            <div class="db-menu">
                                <ul class="db-menu-list">
                                    <li class="db-menu-item active">
                                        <a href="{{route('user.dashboard')}}" data-module="menu" data-section="account" class="db-menu-link db-menu-link--dashboard">
                                            <div class="db-menu-link__icon"></div>
                                            <div class="db-menu-link__text">Dashboard</div>
                                        </a>
                                    </li>
                                    <li class="db-menu-item">
                                        <a href="javascript:void(0)" class="db-menu-link db-menu-link--deposit optimaDepositButton">
                                            <div class="db-menu-link__icon"></div>
                                            <div class="db-menu-link__text">Deposit</div>
                                        </a>
                                    </li>
                                    <li class="db-menu-item ">
                                        <a href="javascript:void(0)" data-module="menu" data-section="send" class="db-menu-link db-menu-link--send">
                                            <div class="db-menu-link__icon"></div>
                                            <div class="db-menu-link__text">Send</div>
                                        </a>
                                    </li>
                                    <li class="db-menu-item ">
                                        <a href="javascript:void(0)" data-module="menu" data-section="transactions" class="db-menu-link db-menu-link--transactions">
                                            <div class="db-menu-link__icon"></div>
                                            <div class="db-menu-link__text">Transactions</div>
                                        </a>
                                    </li>
                                    <li class="db-menu-item ">
                                        <a href="javascript:void(0)" data-module="menu" data-section="staking" class="db-menu-link db-menu-link--ai-staking">
                                            <div class="db-menu-link__icon"></div>
                                            <div class="db-menu-link__text">AI Staking</div>
                                        </a>
                                    </li>
                                    <li class="db-menu-item ">
                                        <a href="javascript:void(0)" data-module="menu" data-section="loans" class="db-menu-link db-menu-link--loans">
                                            <div class="db-menu-link__icon"></div>
                                            <div class="db-menu-link__text">Loans</div>
                                        </a>
                                    </li>
                                    <li class="db-menu-item ">
                                        <a href="javascript:void(0)" data-module="menu" data-section="exchange" class="db-menu-link db-menu-link--exchange">
                                            <div class="db-menu-link__icon"></div>
                                            <div class="db-menu-link__text">Exchange</div>
                                        </a>
                                    </li>
                                    <li class="db-menu-item ">
                                        <a href="javascript:void(0)" data-module="menu" data-section="partners" class="db-menu-link db-menu-link--affiliate-program">
                                            <div class="db-menu-link__icon"></div>
                                            <div class="db-menu-link__text">Partners</div>
                                        </a>
                                    </li>
                                    <li class="db-menu-item ">
                                        <a href="javascript:void(0)" data-module="menu" data-section="tasks" class="db-menu-link db-menu-link--tasks">
                                            <div class="db-menu-link__icon"></div>
                                            <div class="db-menu-link__text">Tasks</div>
                                        </a>
                                    </li>
                                    <li class="db-menu-item ">
                                        <a href="javascript:void(0)" data-module="menu" data-section="settings" class="db-menu-link db-menu-link--settings">
                                            <div class="db-menu-link__icon"></div>
                                            <div class="db-menu-link__text">Settings</div>
                                        </a>
                                    </li>
                                    <li class="db-menu-item">
                                        <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="db-menu-link db-menu-link--logout">
                                            <div class="db-menu-link__icon"></div>
                                            <div class="db-menu-link__text">Log out</div>
                                        </a>
                                    </li>
                                </ul>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                            </div>
                        </div>


                        <div class="mobile-topmenu-block">
                            <div class="db-mobile-menu-title-block">
                                <div class="db-mobile-menu-title">OORA3</div>
                            </div>
                            <div class="mobile-topmenu mobile-topmenu--db">
                                <ul class="mobile-topmenu-list">
                                    <li class="mobile-topmenu-item">
                                        <a href="{{route('wallets')}}" class="mobile-topmenu-link mobile-topmenu-link--wallet">
                                            <div class="mobile-topmenu-link__icon"></div>
                                            <div class="mobile-topmenu-link__text">Wallet</div>
                                        </a>
                                    </li>
                                    <li class="mobile-topmenu-item">
                                        <a href="{{route('ai-staking')}}" class="mobile-topmenu-link mobile-topmenu-link--ai-staking">
                                            <div class="mobile-topmenu-link__icon"></div>
                                            <div class="mobile-topmenu-link__text">AI Staking</div>
                                        </a>
                                    </li>
                                    <li class="mobile-topmenu-item">
                                        <a href="{{route('about-us')}}" class="mobile-topmenu-link mobile-topmenu-link--loans">
                                            <div class="mobile-topmenu-link__icon"></div>
                                            <div class="mobile-topmenu-link__text">About Us</div>
                                        </a>
                                    </li>
                                    <li class="mobile-topmenu-item">
                                        <a href="{{route('affiliate')}}" class="mobile-topmenu-link mobile-topmenu-link--affiliate-program">
                                            <div class="mobile-topmenu-link__icon"></div>
                                            <div class="mobile-topmenu-link__text">Affiliate program</div>
                                        </a>
                                    </li>
                                    <li class="mobile-topmenu-item mobile-topmenu-item--has-menu">
                                        <a href="javascript:void(0)" class="mobile-topmenu-link">
                                            <div class="mobile-topmenu-link__text">More</div>
                                        </a>
                                        <div class="mobile-submenu">
                                          
                                          
                                          
                                            <div class="mobile-submenu-item">
                                                <a href="/en/about-us/" class="mobile-submenu-link">About Us</a>
                                            </div>
                                            <div class="mobile-submenu-item">
                                                <a href="{{route('roadmap')}}" class="mobile-submenu-link">Roadmap</a>
                                            </div>
                                            <div class="mobile-submenu-item">
                                                <a href="{{route('contact-us')}}" class="mobile-submenu-link">Contact Us</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="db-mobile-panel-bottom">
                        <div class="db-mobile-panel-logout-button-block">
                            <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="db-mobile-panel-logout-button light-black-btn iconed-btn button--small">
                                <div class="iconed-btn__text">Log out</div>
                                <div class="iconed-btn__icon"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>







        <header class="db-header">
            <div class="db-topline-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="db-topline">
                                <div class="db-topline__left">

                                    <div class="logo-wrapper">
                                        <a href="{{asset('')}}" class="logo">
                                            <div class="logo-img">
                                             <img class="image"
                                                    src="{{ asset('') }}assets/oora3/images/svg/logo.png" alt="OORA3" style="width: 115px;">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="db-topmenu-block">
                                        <div class="db-topmenu">
                                            <ul class="db-topmenu-list">
                                                <li class="db-topmenu-item">
                                                    <a href="{{route('wallets')}}" class="db-topmenu-link db-topmenu-link--wallet">
                                                        <div class="db-topmenu-link__icon"></div>
                                                        <div class="db-topmenu-link__text">Wallet</div>
                                                    </a>
                                                </li>
                                                <li class="db-topmenu-item">
                                                    <a href="{{route('ai-staking')}}" class="db-topmenu-link db-topmenu-link--ai-staking">
                                                        <div class="db-topmenu-link__icon"></div>
                                                        <div class="db-topmenu-link__text">AI Staking</div>
                                                    </a>
                                                </li>
                                                <li class="db-topmenu-item">
                                                    <a href="{{route('about-us')}}" class="db-topmenu-link db-topmenu-link--loans">
                                                        <div class="db-topmenu-link__icon"></div>
                                                        <div class="db-topmenu-link__text">About Us</div>
                                                    </a>
                                                </li>
                                                <li class="db-topmenu-item">
                                                    <a href="{{route('affiliate')}}" class="db-topmenu-link db-topmenu-link--affiliate-program">
                                                        <div class="db-topmenu-link__icon"></div>
                                                        <div class="db-topmenu-link__text">Affiliate program</div>
                                                    </a>
                                                </li>
                                             
                                            
                                                <li class="db-topmenu-item">
                                                    <a href="{{route('roadmap')}}" class="db-topmenu-link">
                                                        <div class="db-topmenu-link__text">Roadmap</div>
                                                    </a>
                                                </li>
                                                <li class="db-topmenu-item">
                                                    <a href="{{route('contact-us')}}" class="db-topmenu-link">
                                                        <div class="db-topmenu-link__text">Contact Us</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>


                                <div class="db-topline__right">
                                    <div class="db-topline-manage-buttons-block">
                                        <div class="db-topline-manage-buttons">
                                            <div class="db-topline-manage-button-wrapper">
                                                <button type="button" onclick="setActiveModule('staking');" class="db-topline-ai-button iconed-btn light-black-btn button--small">
                                                    <div class="iconed-btn__icon"></div>
                                                    <div class="iconed-btn__text">
                                                        <span class="d-none d-sm-inline">AI </span>Staking
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="db-topline-manage-button-wrapper">
                                                <button type="button" class="db-topline-deposit-button iconed-btn green-gradient-btn button--small optimaDepositButton">
                                                    <div class="iconed-btn__icon"></div>
                                                    <div class="iconed-btn__text">Deposit</div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="db-topline-language-button-block">
                                        <button class="db-topline-language-button" data-bs-toggle="modal" data-bs-target="#modalLanguage"></button>
                                    </div>
                                    <div class="db-topline-logout-button-block">
                                        <a class="db-topline-logout-button"  href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  ></a>
                                    </div>
                                    <div class="db-mobile-panel-btn-block">
                                        <button type="button" class="db-mobile-panel-btn"></button>
                                    </div>

                                </div>










                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>