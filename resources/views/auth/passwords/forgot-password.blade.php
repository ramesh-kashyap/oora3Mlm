<!DOCTYPE html>
<html lang="en">

<head>
    <title>OORA3 - Forgot Password</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="{{ asset('') }}assets/oora3/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/oora3/libs/priority-navigation-master/dist/priority-nav-core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/oora3/libs/bootstrap-select-1.14.0/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/oora3/libs/toastr-master/build/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/oora3/css/main%EF%B9%96v=32.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/oora3/css/media%EF%B9%96v=32.css">
    <link rel="icon" type="image/png" href="{{ asset('') }}assets/oora3/fav/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('') }}assets/oora3/fav/favicon.svg" />
    <link rel="shortcut icon" href="{{ asset('') }}assets/oora3/fav/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('') }}assets/oora3/fav/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="OORA3" />
    <meta name="apple-mobile-web-app-title" content="OORA3" />
    <link rel="manifest" href="{{ asset('') }}assets/oora3/fav/site.webmanifest.txt" />

    <style>
        .blog-detail-content a {
            text-decoration: none;
        }
    </style>
</head>


<body class="page page--authorization">
    <div class="progress-block d-none blockProgressBar">
        <div class="progress">
            <div class="progress__progress blockProgressBarLine" style="width: 0%"></div>
        </div>
    </div>
    <div class="page-inner">



        <section class="section-authorization" id="globalStart">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="s-authorization-inner">
                            <div class="authorization-block ">
                                <div class="authorization">
                                    <div class="authorization-top-block">
                                        <div class="authorization-top">

                                            <div class="logo-wrapper">
                                                <a href="{{asset('')}}" class="logo">
                                                    <div class="logo-img">
                                                        <img class="image"  style="width: 250px; height:100px;" src="{{asset('')}}assets/oora3/images/logo.png" alt="OORA3">
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="language-open-modal-btn-block">
                                                <button class="language-open-modal-btn" data-bs-toggle="modal" data-bs-target="#modalLanguage"></button>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="authorization-form-block blockShowAfterPasswordRestored d-none globalStartBlock">
                                        <div class="form-title-block">
                                            <h2 class="form-title text-gradient">
												Set up a password
											</h2>
                                        </div>
                                        <div class="form-subtitle-block">
                                            <div class="form-subtitle">
                                                Use a complex password for our account security
                                            </div>
                                        </div>


                                        <div class="form-wrapper">
                                            <form action="/password/" class="form recovery-form">


                                                <div class="field-block blockPasswordRecoverySecretCode">
                                                    <div class="field field--input field--has-icon field--password">
                                                        <input type="text" name="secret" maxlength="255" placeholder="Secret code" autocomplete="off">
                                                        <div class="field-icon"></div>
                                                    </div>
                                                </div>




                                                <div class="field-block">
                                                    <div class="field field--input field--has-icon field--password field--has-right-panel">
                                                        <input type="password" name="new_password" maxlength="255" placeholder="New password" autocomplete="off">
                                                        <div class="field-icon"></div>
                                                        <div class="field-right-panel">
                                                            <div class="password-type-toggle-btn-block">
                                                                <button class="password-type-toggle-btn"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="field-block">
                                                    <div class="field field--input field--has-icon field--password field--has-right-panel">
                                                        <input type="password" name="repeat_new_password" maxlength="255" placeholder="Repeat new password" autocomplete="off">
                                                        <div class="field-icon"></div>
                                                        <div class="field-right-panel">
                                                            <div class="password-type-toggle-btn-block">
                                                                <button class="password-type-toggle-btn"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-button-block">
                                                    <button type="submit" class="green-gradient-btn iconed-btn">
                                                        <div class="iconed-btn__text">Set a new password</div>
                                                        <div class="iconed-btn__icon"></div>
                                                    </button>
                                                </div>
                                                <div class="form-bottom-note-block">
                                                    <div class="form-bottom-note">
                                                        <a href="javascript:void(0);" onclick="$('.blockHideAfterPasswordRestored').removeClass('d-none');$('.blockShowAfterPasswordRestored').addClass('d-none');$('.blockHideAfterPasswordRestored form')[0].reset();">Back to access recovery</a>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="action" value="set">
                                            </form>
                                        </div>
                                    </div>






                                    <div class="authorization-form-block blockHideAfterPasswordRestored globalStartBlock">
                                        <div class="form-title-block">
                                            <h2 class="form-title text-gradient">
												Recover your account
											</h2>
                                        </div>
                                        <div class="form-subtitle-block">
                                            <div class="form-subtitle">
                                                Safe account access recovery
                                            </div>
                                        </div>

                                        


                                        <div class="recovery-type-tabs-content-block">
                                            <div class="recovery-type-tabs-content">

                                                <div class="recovery-type-tab-content">


                                                    <div class="form-wrapper">
                                                        <form action="/password/" class="form recovery-form">

                                                            <div class="field-block">
                                                                <div class="field field--input field--has-icon field--mail">
                                                                    <input placeholder="Email" type="text" name="email" maxlength="255" autocomplete="off">
                                                                    <div class="field-icon"></div>
                                                                </div>
                                                            </div>
                                                            <div class="form-button-block">
                                                                <button type="submit" class="green-gradient-btn iconed-btn">
                                                                    <div class="iconed-btn__text">Continue</div>
                                                                    <div class="iconed-btn__icon"></div>
                                                                </button>
                                                            </div>
                                                            <div class="form-bottom-note-block">
                                                                <div class="form-bottom-note">
                                                                    I have a secret code <a href="javascript:void(0)" onclick="$('.blockHideAfterPasswordRestored').addClass('d-none');$('.blockShowAfterPasswordRestored').removeClass('d-none');$('.blockPasswordRecoverySecretCode').removeClass('d-none');$('.blockShowAfterPasswordRestored form')[0].reset();">Set a new password</a>
                                                                </div>
                                                            </div>
                                                            <div class="form-bottom-note-block">
                                                                <div class="form-bottom-note">
                                                                    <a href="javascript:void(0)" onclick="$('.blockHideAfterPasswordRestored').addClass('d-none');$('.blockHideFor2FAAuth').removeClass('d-none');$('.blockHideFor2FAAuth form')[0].reset();">Back to Log In</a>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="type" value="email">
                                                        </form>
                                                    </div>


                                                </div>

                                            
                                            </div>

                                        </div>


                                    </div>











                                </div>
                            </div>
                            <div class="OORA3-benefit-items-block">
                                <div class="OORA3-benefit-items">
                                    <div class="OORA3-benefit-item-wrapper">
                                        <div class="OORA3-benefit-item OORA3-benefit-item--uptime">
                                            <div class="OORA3-benefit-item__icon"></div>
                                            <div class="OORA3-benefit-item__text">OORA3 Products</div>
                                        </div>
                                    </div>
                                    <div class="OORA3-benefit-item-wrapper">
                                        <div class="OORA3-benefit-item OORA3-benefit-item--audited">
                                            <div class="OORA3-benefit-item__icon"></div>
                                            <div class="OORA3-benefit-item__text">Secure Custodian</div>
                                        </div>
                                    </div>
                                    <div class="OORA3-benefit-item-wrapper">
                                        <div class="OORA3-benefit-item OORA3-benefit-item--ai">
                                            <div class="OORA3-benefit-item__icon"></div>
                                            <div class="OORA3-benefit-item__text">AI Tech</div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>
    <div class="cookies-block d-none" id="modalCookie">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cookies">
                        <div class="cookies__left">
                            <div class="cookies__icon"></div>
                            <div class="cookies__content">
                                <div class="cookies__title">
                                    Cookie Consent
                                </div>
                                <div class="cookies__descr">
                                    We use cookies (and similar technologies) to improve our service and enhance your experience on our website.
                                </div>
                            </div>
                        </div>
                        <div class="cookies__right">
                            <div class="cookies__buttons-block">
                                <div class="cookies__buttons">
                                    <div class="cookies__button-wrapper">
                                        <button type="button" onclick="acceptCookie();" class="cookies__accept-button green-gradient-btn button--small">
                                            Accept
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>




    @include('partials.notify')
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

    <script type="text/javascript">
        var pusher = new Pusher('5970cd7bd1747b68d15a', {
            cluster: 'us2'
        });
        var publicChannel = pusher.subscribe('public');
        publicChannel.bind('end', function(data) {
            processPusherPublic(data);
        });
    </script>

    <script src="https://telegram.org/js/telegram-widget.js"></script>
    <script src="{{ asset('') }}assets/oora3/libs/jquery/jquery-3.6.0.min.js" defer></script>
    <script defer src="{{ asset('') }}assets/oora3/libs/priority-navigation-master/dist/priority-nav.min.js"></script>
    <script defer src="{{ asset('') }}assets/oora3/libs/priority-navigation-master/dist/priority-nav-db.min.js">
    </script>
    <script defer src="{{ asset('') }}assets/oora3/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script defer src="{{ asset('') }}assets/oora3/libs/bootstrap-select-1.14.0/dist/js/bootstrap-select.min.js">
    </script>
    <script defer src="{{ asset('') }}assets/oora3/libs/bootstrap-select-1.14.0/dist/js/i18n/defaults-en_US.min.js">
    </script>
    <script defer src="{{ asset('') }}assets/oora3/libs/clipboard.js-master/dist/clipboard.min.js"></script>
    <script defer src="{{ asset('') }}assets/oora3/libs/autosize/autosize.min.js"></script>
    <script defer src="{{ asset('') }}assets/oora3/libs/toastr-master/build/toastr.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8-beta.17/jquery.inputmask.min.js">
    </script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.1/jquery-ui.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.5/mobile-detect.min.js"></script>
    <script src="{{ asset('') }}assets/oora3/js/common%EF%B9%96v=32.js" defer></script>


    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HQ7BFBXWDV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HQ7BFBXWDV');
    </script>
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=9e95e9bc-a6c0-4131-902f-b645902e2ae8">
    </script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon='{"version":"2024.11.0","token":"14dc89e34efd48bc85aa4f8e67cfc71b","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
    crossorigin="anonymous"></script>

</body>

</html>