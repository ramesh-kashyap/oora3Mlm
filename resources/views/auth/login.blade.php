<!DOCTYPE html>
<html lang="en">

<head>
    <title>OORA3 - Log In</title>
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
                                                <a href="{{ asset('') }}" class="logo">
                                                    <div class="logo-img">
                                                        <img class="image" style="width: 250px; height:100px;"
                                                            src="{{ asset('') }}assets/oora3/images/logo.png">
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="language-open-modal-btn-block">
                                                <button class="language-open-modal-btn" data-bs-toggle="modal"
                                                    data-bs-target="#modalLanguage"></button>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="authorization-form-block blockHideFor2FAAuth  globalStartBlock">
                                        <div class="form-title-block">
                                            <h2 class="form-title text-gradient">
                                                Welcome back
                                            </h2>
                                        </div>
                                        <div class="form-subtitle-block">
                                            <div class="form-subtitle">
                                                Log in to access OORA3 products
                                            </div>
                                        </div>
                                        <div class="form-wrapper">
                                            <form action="{{ route('loginAction') }}" method="post" class="form login-form">

                                                 @csrf

                                                <div class="login-type-tabs-block">
                                                    <div class="login-type-tabs">
                                                        <div class="login-type-tab-wrapper" style="width:66.66%;"
                                                            onclick="$(this).closest('form').find('.authEmailOrLogin').attr('name','login');$(this).closest('form').find('.authPhone').attr('name','login2');">
                                                            <div class="login-type-tab active">
                                                                <div class="login-type-tab__text">
                                                                    Email or Username
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="login-type-tab-wrapper"
                                                            onclick="$(this).closest('form').find('.authEmailOrLogin').attr('name','login');$(this).closest('form').find('.authPhone').attr('name','login');">
                                                            <div class="login-type-tab">
                                                                <div class="login-type-tab__text">
                                                                    Mobile
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="login-type-tabs-content-block">
                                                    <div class="login-type-tabs-content">

                                                        <div class="login-type-tab-content"
                                                            data-auth-type="email_or_login">
                                                            <div class="field-block">
                                                                <div
                                                                    class="field field--input field--has-icon field--username">
                                                                    <input class="authEmailOrLogin"
                                                                        placeholder="Email or Username" type="text"
                                                                        name="login" maxlength="255"
                                                                        autocomplete="off">
                                                                    <div class="field-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="login-type-tab-content" data-auth-type="phone">
                                                            <div class="field-block">
                                                                <div class="field field--input field--phone">
                                                                    <input data-module="auth" type="text"
                                                                        class="authPhone" name="phone"
                                                                        autocomplete="off" value=""
                                                                        data-inputmask-regex="^\+[1-9]{1}[0-9]{0,20}$"
                                                                        data-inputmask-placeholder="Mobile number">

                                                                    <select name="country_phone"
                                                                        class="select-phone-code">

                                                                        <option data-code="AF" data-placeholder="+93"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/af.svg" alt=""></div><div class="select-phone-code-item__country">Afghanistan</div><div class="select-phone-code-item__country-short">AF</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+93</div></div></div>'
                                                                            value="AF">Afghanistan</option>
                                                                        <option data-code="AL" data-placeholder="+355"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/al.svg" alt=""></div><div class="select-phone-code-item__country">Albania</div><div class="select-phone-code-item__country-short">AL</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+355</div></div></div>'
                                                                            value="AL">Albania</option>
                                                                        <option data-code="DZ" data-placeholder="+213"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/dz.svg" alt=""></div><div class="select-phone-code-item__country">Algeria</div><div class="select-phone-code-item__country-short">DZ</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+213</div></div></div>'
                                                                            value="DZ">Algeria</option>
                                                                        <option data-code="AD" data-placeholder="+376"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ad.svg" alt=""></div><div class="select-phone-code-item__country">Andorra</div><div class="select-phone-code-item__country-short">AD</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+376</div></div></div>'
                                                                            value="AD">Andorra</option>
                                                                        <option data-code="AO" data-placeholder="+244"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ao.svg" alt=""></div><div class="select-phone-code-item__country">Angola</div><div class="select-phone-code-item__country-short">AO</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+244</div></div></div>'
                                                                            value="AO">Angola</option>
                                                                        <option data-code="AG"
                                                                            data-placeholder="+1268"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ag.svg" alt=""></div><div class="select-phone-code-item__country">Antigua and barbuda</div><div class="select-phone-code-item__country-short">AG</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+1268</div></div></div>'
                                                                            value="AG">Antigua and barbuda</option>
                                                                        <option data-code="AR" data-placeholder="+54"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ar.svg" alt=""></div><div class="select-phone-code-item__country">Argentina</div><div class="select-phone-code-item__country-short">AR</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+54</div></div></div>'
                                                                            value="AR">Argentina</option>
                                                                        <option data-code="AM" data-placeholder="+374"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/am.svg" alt=""></div><div class="select-phone-code-item__country">Armenia</div><div class="select-phone-code-item__country-short">AM</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+374</div></div></div>'
                                                                            value="AM">Armenia</option>
                                                                        <option data-code="AW" data-placeholder="+297"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/aw.svg" alt=""></div><div class="select-phone-code-item__country">Aruba</div><div class="select-phone-code-item__country-short">AW</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+297</div></div></div>'
                                                                            value="AW">Aruba</option>
                                                                        <option data-code="AU" data-placeholder="+61"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/au.svg" alt=""></div><div class="select-phone-code-item__country">Australia</div><div class="select-phone-code-item__country-short">AU</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+61</div></div></div>'
                                                                            value="AU">Australia</option>
                                                                        <option data-code="AT" data-placeholder="+43"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/at.svg" alt=""></div><div class="select-phone-code-item__country">Austria</div><div class="select-phone-code-item__country-short">AT</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+43</div></div></div>'
                                                                            value="AT">Austria</option>
                                                                        <option data-code="AZ" data-placeholder="+994"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/az.svg" alt=""></div><div class="select-phone-code-item__country">Azerbaijan</div><div class="select-phone-code-item__country-short">AZ</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+994</div></div></div>'
                                                                            value="AZ">Azerbaijan</option>
                                                                        <option data-code="BS"
                                                                            data-placeholder="+1242"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/bs.svg" alt=""></div><div class="select-phone-code-item__country">Bahamas</div><div class="select-phone-code-item__country-short">BS</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+1242</div></div></div>'
                                                                            value="BS">Bahamas</option>
                                                                        <option data-code="BH" data-placeholder="+973"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/bh.svg" alt=""></div><div class="select-phone-code-item__country">Bahrain</div><div class="select-phone-code-item__country-short">BH</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+973</div></div></div>'
                                                                            value="BH">Bahrain</option>
                                                                        <option data-code="BD" data-placeholder="+880"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/bd.svg" alt=""></div><div class="select-phone-code-item__country">Bangladesh</div><div class="select-phone-code-item__country-short">BD</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+880</div></div></div>'
                                                                            value="BD">Bangladesh</option>
                                                                        <option data-code="BB"
                                                                            data-placeholder="+1246"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/bb.svg" alt=""></div><div class="select-phone-code-item__country">Barbados</div><div class="select-phone-code-item__country-short">BB</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+1246</div></div></div>'
                                                                            value="BB">Barbados</option>
                                                                        <option data-code="BY" data-placeholder="+375"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/by.svg" alt=""></div><div class="select-phone-code-item__country">Belarus</div><div class="select-phone-code-item__country-short">BY</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+375</div></div></div>'
                                                                            value="BY">Belarus</option>
                                                                        <option data-code="BE" data-placeholder="+32"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/be.svg" alt=""></div><div class="select-phone-code-item__country">Belgium</div><div class="select-phone-code-item__country-short">BE</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+32</div></div></div>'
                                                                            value="BE">Belgium</option>
                                                                        <option data-code="BZ" data-placeholder="+501"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/bz.svg" alt=""></div><div class="select-phone-code-item__country">Belize</div><div class="select-phone-code-item__country-short">BZ</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+501</div></div></div>'
                                                                            value="BZ">Belize</option>
                                                                        <option data-code="BJ" data-placeholder="+229"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/bj.svg" alt=""></div><div class="select-phone-code-item__country">Benin</div><div class="select-phone-code-item__country-short">BJ</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+229</div></div></div>'
                                                                            value="BJ">Benin</option>
                                                                        <option data-code="BT" data-placeholder="+975"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/bt.svg" alt=""></div><div class="select-phone-code-item__country">Bhutan</div><div class="select-phone-code-item__country-short">BT</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+975</div></div></div>'
                                                                            value="BT">Bhutan</option>
                                                                        <option data-code="BO" data-placeholder="+591"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/bo.svg" alt=""></div><div class="select-phone-code-item__country">Bolivia</div><div class="select-phone-code-item__country-short">BO</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+591</div></div></div>'
                                                                            value="BO">Bolivia</option>
                                                                        <option data-code="BA" data-placeholder="+387"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ba.svg" alt=""></div><div class="select-phone-code-item__country">Bosnia and Herzegovina</div><div class="select-phone-code-item__country-short">BA</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+387</div></div></div>'
                                                                            value="BA">Bosnia and Herzegovina
                                                                        </option>
                                                                        <option data-code="BW" data-placeholder="+267"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/bw.svg" alt=""></div><div class="select-phone-code-item__country">Botswana</div><div class="select-phone-code-item__country-short">BW</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+267</div></div></div>'
                                                                            value="BW">Botswana</option>
                                                                        <option data-code="BR" data-placeholder="+55"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/br.svg" alt=""></div><div class="select-phone-code-item__country">Brazil</div><div class="select-phone-code-item__country-short">BR</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+55</div></div></div>'
                                                                            value="BR">Brazil</option>
                                                                        <option data-code="BN" data-placeholder="+673"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/bn.svg" alt=""></div><div class="select-phone-code-item__country">Brunei</div><div class="select-phone-code-item__country-short">BN</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+673</div></div></div>'
                                                                            value="BN">Brunei</option>
                                                                        <option data-code="BG" data-placeholder="+359"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/bg.svg" alt=""></div><div class="select-phone-code-item__country">Bulgaria</div><div class="select-phone-code-item__country-short">BG</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+359</div></div></div>'
                                                                            value="BG">Bulgaria</option>
                                                                        <option data-code="BF" data-placeholder="+226"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/bf.svg" alt=""></div><div class="select-phone-code-item__country">Burkina Faso</div><div class="select-phone-code-item__country-short">BF</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+226</div></div></div>'
                                                                            value="BF">Burkina Faso</option>
                                                                        <option data-code="BI" data-placeholder="+257"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/bi.svg" alt=""></div><div class="select-phone-code-item__country">Burundi</div><div class="select-phone-code-item__country-short">BI</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+257</div></div></div>'
                                                                            value="BI">Burundi</option>
                                                                        <option data-code="KH" data-placeholder="+855"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/kh.svg" alt=""></div><div class="select-phone-code-item__country">Cambodia</div><div class="select-phone-code-item__country-short">KH</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+855</div></div></div>'
                                                                            value="KH">Cambodia</option>
                                                                        <option data-code="CM" data-placeholder="+237"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/cm.svg" alt=""></div><div class="select-phone-code-item__country">Cameroon</div><div class="select-phone-code-item__country-short">CM</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+237</div></div></div>'
                                                                            value="CM">Cameroon</option>
                                                                        <option data-code="CA" data-placeholder="+1"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ca.svg" alt=""></div><div class="select-phone-code-item__country">Canada</div><div class="select-phone-code-item__country-short">CA</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+1</div></div></div>'
                                                                            value="CA">Canada</option>
                                                                        <option data-code="CV" data-placeholder="+238"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/cv.svg" alt=""></div><div class="select-phone-code-item__country">Cape Verde</div><div class="select-phone-code-item__country-short">CV</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+238</div></div></div>'
                                                                            value="CV">Cape Verde</option>
                                                                        <option data-code="CF" data-placeholder="+236"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/cf.svg" alt=""></div><div class="select-phone-code-item__country">Central African Republic</div><div class="select-phone-code-item__country-short">CF</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+236</div></div></div>'
                                                                            value="CF">Central African Republic
                                                                        </option>
                                                                        <option data-code="TD" data-placeholder="+235"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/td.svg" alt=""></div><div class="select-phone-code-item__country">Chad</div><div class="select-phone-code-item__country-short">TD</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+235</div></div></div>'
                                                                            value="TD">Chad</option>
                                                                        <option data-code="CL" data-placeholder="+56"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/cl.svg" alt=""></div><div class="select-phone-code-item__country">Chile</div><div class="select-phone-code-item__country-short">CL</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+56</div></div></div>'
                                                                            value="CL">Chile</option>
                                                                        <option data-code="CN" data-placeholder="+86"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/cn.svg" alt=""></div><div class="select-phone-code-item__country">China</div><div class="select-phone-code-item__country-short">CN</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+86</div></div></div>'
                                                                            value="CN">China</option>
                                                                        <option data-code="CO" data-placeholder="+57"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/co.svg" alt=""></div><div class="select-phone-code-item__country">Colombia</div><div class="select-phone-code-item__country-short">CO</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+57</div></div></div>'
                                                                            value="CO">Colombia</option>
                                                                        <option data-code="KM" data-placeholder="+269"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/km.svg" alt=""></div><div class="select-phone-code-item__country">Comoros</div><div class="select-phone-code-item__country-short">KM</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+269</div></div></div>'
                                                                            value="KM">Comoros</option>
                                                                        <option data-code="CR" data-placeholder="+506"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/cr.svg" alt=""></div><div class="select-phone-code-item__country">Costa Rica</div><div class="select-phone-code-item__country-short">CR</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+506</div></div></div>'
                                                                            value="CR">Costa Rica</option>
                                                                        <option data-code="HR" data-placeholder="+385"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/hr.svg" alt=""></div><div class="select-phone-code-item__country">Croatia</div><div class="select-phone-code-item__country-short">HR</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+385</div></div></div>'
                                                                            value="HR">Croatia</option>
                                                                        <option data-code="CU" data-placeholder="+53"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/cu.svg" alt=""></div><div class="select-phone-code-item__country">Cuba</div><div class="select-phone-code-item__country-short">CU</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+53</div></div></div>'
                                                                            value="CU">Cuba</option>
                                                                        <option data-code="CW" data-placeholder="+599"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/cw.svg" alt=""></div><div class="select-phone-code-item__country">Curacao</div><div class="select-phone-code-item__country-short">CW</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+599</div></div></div>'
                                                                            value="CW">Curacao</option>
                                                                        <option data-code="CY" data-placeholder="+357"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/cy.svg" alt=""></div><div class="select-phone-code-item__country">Cyprus</div><div class="select-phone-code-item__country-short">CY</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+357</div></div></div>'
                                                                            value="CY">Cyprus</option>
                                                                        <option data-code="CZ" data-placeholder="+420"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/cz.svg" alt=""></div><div class="select-phone-code-item__country">Czech Republic</div><div class="select-phone-code-item__country-short">CZ</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+420</div></div></div>'
                                                                            value="CZ">Czech Republic</option>
                                                                        <option data-code="CD" data-placeholder="+243"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/cd.svg" alt=""></div><div class="select-phone-code-item__country">Democratic Republic of the Congo</div><div class="select-phone-code-item__country-short">CD</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+243</div></div></div>'
                                                                            value="CD">Democratic Republic of the
                                                                            Congo</option>
                                                                        <option data-code="DK" data-placeholder="+45"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/dk.svg" alt=""></div><div class="select-phone-code-item__country">Denmark</div><div class="select-phone-code-item__country-short">DK</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+45</div></div></div>'
                                                                            value="DK">Denmark</option>
                                                                        <option data-code="DJ" data-placeholder="+253"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/dj.svg" alt=""></div><div class="select-phone-code-item__country">Djibouti</div><div class="select-phone-code-item__country-short">DJ</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+253</div></div></div>'
                                                                            value="DJ">Djibouti</option>
                                                                        <option data-code="DM"
                                                                            data-placeholder="+1767"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/dm.svg" alt=""></div><div class="select-phone-code-item__country">Dominica</div><div class="select-phone-code-item__country-short">DM</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+1767</div></div></div>'
                                                                            value="DM">Dominica</option>
                                                                        <option data-code="DO" data-placeholder="+18"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/do.svg" alt=""></div><div class="select-phone-code-item__country">Dominican Republic</div><div class="select-phone-code-item__country-short">DO</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+18</div></div></div>'
                                                                            value="DO">Dominican Republic</option>
                                                                        <option data-code="TL" data-placeholder="+670"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/tl.svg" alt=""></div><div class="select-phone-code-item__country">East Timor</div><div class="select-phone-code-item__country-short">TL</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+670</div></div></div>'
                                                                            value="TL">East Timor</option>
                                                                        <option data-code="EC" data-placeholder="+593"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ec.svg" alt=""></div><div class="select-phone-code-item__country">Ecuador</div><div class="select-phone-code-item__country-short">EC</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+593</div></div></div>'
                                                                            value="EC">Ecuador</option>
                                                                        <option data-code="EG" data-placeholder="+20"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/eg.svg" alt=""></div><div class="select-phone-code-item__country">Egypt</div><div class="select-phone-code-item__country-short">EG</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+20</div></div></div>'
                                                                            value="EG">Egypt</option>
                                                                        <option data-code="SV" data-placeholder="+503"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/sv.svg" alt=""></div><div class="select-phone-code-item__country">El Salvador</div><div class="select-phone-code-item__country-short">SV</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+503</div></div></div>'
                                                                            value="SV">El Salvador</option>
                                                                        <option data-code="GQ" data-placeholder="+240"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/gq.svg" alt=""></div><div class="select-phone-code-item__country">Equatorial Guinea</div><div class="select-phone-code-item__country-short">GQ</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+240</div></div></div>'
                                                                            value="GQ">Equatorial Guinea</option>
                                                                        <option data-code="ER" data-placeholder="+291"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/er.svg" alt=""></div><div class="select-phone-code-item__country">Eritrea</div><div class="select-phone-code-item__country-short">ER</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+291</div></div></div>'
                                                                            value="ER">Eritrea</option>
                                                                        <option data-code="EE" data-placeholder="+372"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ee.svg" alt=""></div><div class="select-phone-code-item__country">Estonia</div><div class="select-phone-code-item__country-short">EE</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+372</div></div></div>'
                                                                            value="EE">Estonia</option>
                                                                        <option data-code="ET" data-placeholder="+251"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/et.svg" alt=""></div><div class="select-phone-code-item__country">Ethiopia</div><div class="select-phone-code-item__country-short">ET</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+251</div></div></div>'
                                                                            value="ET">Ethiopia</option>
                                                                        <option data-code="FJ" data-placeholder="+679"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/fj.svg" alt=""></div><div class="select-phone-code-item__country">Fiji</div><div class="select-phone-code-item__country-short">FJ</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+679</div></div></div>'
                                                                            value="FJ">Fiji</option>
                                                                        <option data-code="FI" data-placeholder="+358"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/fi.svg" alt=""></div><div class="select-phone-code-item__country">Finland</div><div class="select-phone-code-item__country-short">FI</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+358</div></div></div>'
                                                                            value="FI">Finland</option>
                                                                        <option data-code="FR" data-placeholder="+"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/fr.svg" alt=""></div><div class="select-phone-code-item__country">France</div><div class="select-phone-code-item__country-short">FR</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+</div></div></div>'
                                                                            value="FR">France</option>
                                                                        <option data-code="GA" data-placeholder="+241"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ga.svg" alt=""></div><div class="select-phone-code-item__country">Gabon</div><div class="select-phone-code-item__country-short">GA</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+241</div></div></div>'
                                                                            value="GA">Gabon</option>
                                                                        <option data-code="GM" data-placeholder="+220"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/gm.svg" alt=""></div><div class="select-phone-code-item__country">Gambia</div><div class="select-phone-code-item__country-short">GM</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+220</div></div></div>'
                                                                            value="GM">Gambia</option>
                                                                        <option data-code="GE" data-placeholder="+995"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ge.svg" alt=""></div><div class="select-phone-code-item__country">Georgia</div><div class="select-phone-code-item__country-short">GE</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+995</div></div></div>'
                                                                            value="GE">Georgia</option>
                                                                        <option data-code="DE" data-placeholder="+49"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/de.svg" alt=""></div><div class="select-phone-code-item__country">Germany</div><div class="select-phone-code-item__country-short">DE</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+49</div></div></div>'
                                                                            value="DE">Germany</option>
                                                                        <option data-code="GH" data-placeholder="+233"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/gh.svg" alt=""></div><div class="select-phone-code-item__country">Ghana</div><div class="select-phone-code-item__country-short">GH</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+233</div></div></div>'
                                                                            value="GH">Ghana</option>
                                                                        <option data-code="GR" data-placeholder="+30"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/gr.svg" alt=""></div><div class="select-phone-code-item__country">Greece</div><div class="select-phone-code-item__country-short">GR</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+30</div></div></div>'
                                                                            value="GR">Greece</option>
                                                                        <option data-code="GD"
                                                                            data-placeholder="+1473"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/gd.svg" alt=""></div><div class="select-phone-code-item__country">Grenada</div><div class="select-phone-code-item__country-short">GD</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+1473</div></div></div>'
                                                                            value="GD">Grenada</option>
                                                                        <option data-code="GT" data-placeholder="+502"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/gt.svg" alt=""></div><div class="select-phone-code-item__country">Guatemala</div><div class="select-phone-code-item__country-short">GT</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+502</div></div></div>'
                                                                            value="GT">Guatemala</option>
                                                                        <option data-code="GN" data-placeholder="+224"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/gn.svg" alt=""></div><div class="select-phone-code-item__country">Guinea</div><div class="select-phone-code-item__country-short">GN</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+224</div></div></div>'
                                                                            value="GN">Guinea</option>
                                                                        <option data-code="GW" data-placeholder="+245"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/gw.svg" alt=""></div><div class="select-phone-code-item__country">Guinea-Bissau</div><div class="select-phone-code-item__country-short">GW</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+245</div></div></div>'
                                                                            value="GW">Guinea-Bissau</option>
                                                                        <option data-code="HT" data-placeholder="+509"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ht.svg" alt=""></div><div class="select-phone-code-item__country">Haiti</div><div class="select-phone-code-item__country-short">HT</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+509</div></div></div>'
                                                                            value="HT">Haiti</option>
                                                                        <option data-code="HN" data-placeholder="+504"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/hn.svg" alt=""></div><div class="select-phone-code-item__country">Honduras</div><div class="select-phone-code-item__country-short">HN</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+504</div></div></div>'
                                                                            value="HN">Honduras</option>
                                                                        <option data-code="HK" data-placeholder="+852"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/hk.svg" alt=""></div><div class="select-phone-code-item__country">Hong Kong</div><div class="select-phone-code-item__country-short">HK</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+852</div></div></div>'
                                                                            value="HK">Hong Kong</option>
                                                                        <option data-code="HU" data-placeholder="+36"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/hu.svg" alt=""></div><div class="select-phone-code-item__country">Hungary</div><div class="select-phone-code-item__country-short">HU</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+36</div></div></div>'
                                                                            value="HU">Hungary</option>
                                                                        <option data-code="IS" data-placeholder="+354"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/is.svg" alt=""></div><div class="select-phone-code-item__country">Iceland</div><div class="select-phone-code-item__country-short">IS</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+354</div></div></div>'
                                                                            value="IS">Iceland</option>
                                                                        <option data-code="IN" data-placeholder="+91"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/in.svg" alt=""></div><div class="select-phone-code-item__country">India</div><div class="select-phone-code-item__country-short">IN</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+91</div></div></div>'
                                                                            value="IN">India</option>
                                                                        <option data-code="ID" data-placeholder="+62"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/id.svg" alt=""></div><div class="select-phone-code-item__country">Indonesia</div><div class="select-phone-code-item__country-short">ID</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+62</div></div></div>'
                                                                            value="ID">Indonesia</option>
                                                                        <option data-code="IR" data-placeholder="+98"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ir.svg" alt=""></div><div class="select-phone-code-item__country">Iran</div><div class="select-phone-code-item__country-short">IR</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+98</div></div></div>'
                                                                            value="IR">Iran</option>
                                                                        <option data-code="IQ" data-placeholder="+964"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/iq.svg" alt=""></div><div class="select-phone-code-item__country">Iraq</div><div class="select-phone-code-item__country-short">IQ</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+964</div></div></div>'
                                                                            value="IQ">Iraq</option>
                                                                        <option data-code="IE" data-placeholder="+353"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ie.svg" alt=""></div><div class="select-phone-code-item__country">Ireland</div><div class="select-phone-code-item__country-short">IE</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+353</div></div></div>'
                                                                            value="IE">Ireland</option>
                                                                        <option data-code="IL" data-placeholder="+972"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/il.svg" alt=""></div><div class="select-phone-code-item__country">Israel</div><div class="select-phone-code-item__country-short">IL</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+972</div></div></div>'
                                                                            value="IL">Israel</option>
                                                                        <option data-code="IT" data-placeholder="+39"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/it.svg" alt=""></div><div class="select-phone-code-item__country">Italy</div><div class="select-phone-code-item__country-short">IT</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+39</div></div></div>'
                                                                            value="IT">Italy</option>
                                                                        <option data-code="CI" data-placeholder="+225"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ci.svg" alt=""></div><div class="select-phone-code-item__country">Ivory Coast</div><div class="select-phone-code-item__country-short">CI</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+225</div></div></div>'
                                                                            value="CI">Ivory Coast</option>
                                                                        <option data-code="JM"
                                                                            data-placeholder="+1876"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/jm.svg" alt=""></div><div class="select-phone-code-item__country">Jamaica</div><div class="select-phone-code-item__country-short">JM</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+1876</div></div></div>'
                                                                            value="JM">Jamaica</option>
                                                                        <option data-code="JP" data-placeholder="+81"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/jp.svg" alt=""></div><div class="select-phone-code-item__country">Japan</div><div class="select-phone-code-item__country-short">JP</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+81</div></div></div>'
                                                                            value="JP">Japan</option>
                                                                        <option data-code="JO" data-placeholder="+962"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/jo.svg" alt=""></div><div class="select-phone-code-item__country">Jordan</div><div class="select-phone-code-item__country-short">JO</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+962</div></div></div>'
                                                                            value="JO">Jordan</option>
                                                                        <option data-code="KZ" data-placeholder="+7"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/kz.svg" alt=""></div><div class="select-phone-code-item__country">Kazakhstan</div><div class="select-phone-code-item__country-short">KZ</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+7</div></div></div>'
                                                                            value="KZ">Kazakhstan</option>
                                                                        <option data-code="KE" data-placeholder="+254"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ke.svg" alt=""></div><div class="select-phone-code-item__country">Kenya</div><div class="select-phone-code-item__country-short">KE</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+254</div></div></div>'
                                                                            value="KE">Kenya</option>
                                                                        <option data-code="KI" data-placeholder="+686"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ki.svg" alt=""></div><div class="select-phone-code-item__country">Kiribati</div><div class="select-phone-code-item__country-short">KI</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+686</div></div></div>'
                                                                            value="KI">Kiribati</option>
                                                                        <option data-code="KW" data-placeholder="+965"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/kw.svg" alt=""></div><div class="select-phone-code-item__country">Kuwait</div><div class="select-phone-code-item__country-short">KW</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+965</div></div></div>'
                                                                            value="KW">Kuwait</option>
                                                                        <option data-code="KG" data-placeholder="+996"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/kg.svg" alt=""></div><div class="select-phone-code-item__country">Kyrgyzstan</div><div class="select-phone-code-item__country-short">KG</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+996</div></div></div>'
                                                                            value="KG">Kyrgyzstan</option>
                                                                        <option data-code="LA" data-placeholder="+856"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/la.svg" alt=""></div><div class="select-phone-code-item__country">Laos</div><div class="select-phone-code-item__country-short">LA</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+856</div></div></div>'
                                                                            value="LA">Laos</option>
                                                                        <option data-code="LV" data-placeholder="+371"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/lv.svg" alt=""></div><div class="select-phone-code-item__country">Latvia</div><div class="select-phone-code-item__country-short">LV</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+371</div></div></div>'
                                                                            value="LV">Latvia</option>
                                                                        <option data-code="LB" data-placeholder="+961"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/lb.svg" alt=""></div><div class="select-phone-code-item__country">Lebanon</div><div class="select-phone-code-item__country-short">LB</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+961</div></div></div>'
                                                                            value="LB">Lebanon</option>
                                                                        <option data-code="LS" data-placeholder="+266"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ls.svg" alt=""></div><div class="select-phone-code-item__country">Lesotho</div><div class="select-phone-code-item__country-short">LS</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+266</div></div></div>'
                                                                            value="LS">Lesotho</option>
                                                                        <option data-code="LR" data-placeholder="+231"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/lr.svg" alt=""></div><div class="select-phone-code-item__country">Liberia</div><div class="select-phone-code-item__country-short">LR</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+231</div></div></div>'
                                                                            value="LR">Liberia</option>
                                                                        <option data-code="LY" data-placeholder="+218"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ly.svg" alt=""></div><div class="select-phone-code-item__country">Libya</div><div class="select-phone-code-item__country-short">LY</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+218</div></div></div>'
                                                                            value="LY">Libya</option>
                                                                        <option data-code="LI" data-placeholder="+423"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/li.svg" alt=""></div><div class="select-phone-code-item__country">Liechtenstein</div><div class="select-phone-code-item__country-short">LI</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+423</div></div></div>'
                                                                            value="LI">Liechtenstein</option>
                                                                        <option data-code="LT" data-placeholder="+370"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/lt.svg" alt=""></div><div class="select-phone-code-item__country">Lithuania</div><div class="select-phone-code-item__country-short">LT</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+370</div></div></div>'
                                                                            value="LT">Lithuania</option>
                                                                        <option data-code="LU" data-placeholder="+352"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/lu.svg" alt=""></div><div class="select-phone-code-item__country">Luxembourg</div><div class="select-phone-code-item__country-short">LU</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+352</div></div></div>'
                                                                            value="LU">Luxembourg</option>
                                                                        <option data-code="MK" data-placeholder="+389"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/mk.svg" alt=""></div><div class="select-phone-code-item__country">Macedonia</div><div class="select-phone-code-item__country-short">MK</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+389</div></div></div>'
                                                                            value="MK">Macedonia</option>
                                                                        <option data-code="MG" data-placeholder="+261"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/mg.svg" alt=""></div><div class="select-phone-code-item__country">Madagascar</div><div class="select-phone-code-item__country-short">MG</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+261</div></div></div>'
                                                                            value="MG">Madagascar</option>
                                                                        <option data-code="MW" data-placeholder="+265"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/mw.svg" alt=""></div><div class="select-phone-code-item__country">Malawi</div><div class="select-phone-code-item__country-short">MW</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+265</div></div></div>'
                                                                            value="MW">Malawi</option>
                                                                        <option data-code="MY" data-placeholder="+60"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/my.svg" alt=""></div><div class="select-phone-code-item__country">Malaysia</div><div class="select-phone-code-item__country-short">MY</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+60</div></div></div>'
                                                                            value="MY">Malaysia</option>
                                                                        <option data-code="MV" data-placeholder="+960"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/mv.svg" alt=""></div><div class="select-phone-code-item__country">Maldives</div><div class="select-phone-code-item__country-short">MV</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+960</div></div></div>'
                                                                            value="MV">Maldives</option>
                                                                        <option data-code="ML" data-placeholder="+223"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ml.svg" alt=""></div><div class="select-phone-code-item__country">Mali</div><div class="select-phone-code-item__country-short">ML</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+223</div></div></div>'
                                                                            value="ML">Mali</option>
                                                                        <option data-code="MT" data-placeholder="+356"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/mt.svg" alt=""></div><div class="select-phone-code-item__country">Malta</div><div class="select-phone-code-item__country-short">MT</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+356</div></div></div>'
                                                                            value="MT">Malta</option>
                                                                        <option data-code="MH" data-placeholder="+692"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/mh.svg" alt=""></div><div class="select-phone-code-item__country">Marshall Islands</div><div class="select-phone-code-item__country-short">MH</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+692</div></div></div>'
                                                                            value="MH">Marshall Islands</option>
                                                                        <option data-code="MR" data-placeholder="+222"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/mr.svg" alt=""></div><div class="select-phone-code-item__country">Mauritania</div><div class="select-phone-code-item__country-short">MR</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+222</div></div></div>'
                                                                            value="MR">Mauritania</option>
                                                                        <option data-code="MU" data-placeholder="+230"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/mu.svg" alt=""></div><div class="select-phone-code-item__country">Mauritius</div><div class="select-phone-code-item__country-short">MU</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+230</div></div></div>'
                                                                            value="MU">Mauritius</option>
                                                                        <option data-code="MX" data-placeholder="+52"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/mx.svg" alt=""></div><div class="select-phone-code-item__country">Mexico</div><div class="select-phone-code-item__country-short">MX</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+52</div></div></div>'
                                                                            value="MX">Mexico</option>
                                                                        <option data-code="FM" data-placeholder="+691"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/fm.svg" alt=""></div><div class="select-phone-code-item__country">Micronesia</div><div class="select-phone-code-item__country-short">FM</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+691</div></div></div>'
                                                                            value="FM">Micronesia</option>
                                                                        <option data-code="MD" data-placeholder="+373"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/md.svg" alt=""></div><div class="select-phone-code-item__country">Moldova</div><div class="select-phone-code-item__country-short">MD</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+373</div></div></div>'
                                                                            value="MD">Moldova</option>
                                                                        <option data-code="MC" data-placeholder="+377"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/mc.svg" alt=""></div><div class="select-phone-code-item__country">Monaco</div><div class="select-phone-code-item__country-short">MC</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+377</div></div></div>'
                                                                            value="MC">Monaco</option>
                                                                        <option data-code="MN" data-placeholder="+976"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/mn.svg" alt=""></div><div class="select-phone-code-item__country">Mongolia</div><div class="select-phone-code-item__country-short">MN</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+976</div></div></div>'
                                                                            value="MN">Mongolia</option>
                                                                        <option data-code="ME" data-placeholder="+382"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/me.svg" alt=""></div><div class="select-phone-code-item__country">Montenegro</div><div class="select-phone-code-item__country-short">ME</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+382</div></div></div>'
                                                                            value="ME">Montenegro</option>
                                                                        <option data-code="MA" data-placeholder="+212"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ma.svg" alt=""></div><div class="select-phone-code-item__country">Morocco</div><div class="select-phone-code-item__country-short">MA</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+212</div></div></div>'
                                                                            value="MA">Morocco</option>
                                                                        <option data-code="MZ" data-placeholder="+258"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/mz.svg" alt=""></div><div class="select-phone-code-item__country">Mozambique</div><div class="select-phone-code-item__country-short">MZ</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+258</div></div></div>'
                                                                            value="MZ">Mozambique</option>
                                                                        <option data-code="MM" data-placeholder="+95"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/mm.svg" alt=""></div><div class="select-phone-code-item__country">Myanmar</div><div class="select-phone-code-item__country-short">MM</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+95</div></div></div>'
                                                                            value="MM">Myanmar</option>
                                                                        <option data-code="NA" data-placeholder="+264"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/na.svg" alt=""></div><div class="select-phone-code-item__country">Namibia</div><div class="select-phone-code-item__country-short">NA</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+264</div></div></div>'
                                                                            value="NA">Namibia</option>
                                                                        <option data-code="NR" data-placeholder="+674"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/nr.svg" alt=""></div><div class="select-phone-code-item__country">Nauru</div><div class="select-phone-code-item__country-short">NR</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+674</div></div></div>'
                                                                            value="NR">Nauru</option>
                                                                        <option data-code="NP" data-placeholder="+977"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/np.svg" alt=""></div><div class="select-phone-code-item__country">Nepal</div><div class="select-phone-code-item__country-short">NP</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+977</div></div></div>'
                                                                            value="NP">Nepal</option>
                                                                        <option data-code="NL" data-placeholder="+31"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/nl.svg" alt=""></div><div class="select-phone-code-item__country">Netherlands</div><div class="select-phone-code-item__country-short">NL</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+31</div></div></div>'
                                                                            value="NL">Netherlands</option>
                                                                        <option data-code="NZ" data-placeholder="+64"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/nz.svg" alt=""></div><div class="select-phone-code-item__country">New Zealand</div><div class="select-phone-code-item__country-short">NZ</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+64</div></div></div>'
                                                                            value="NZ">New Zealand</option>
                                                                        <option data-code="NI" data-placeholder="+505"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ni.svg" alt=""></div><div class="select-phone-code-item__country">Nicaragua</div><div class="select-phone-code-item__country-short">NI</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+505</div></div></div>'
                                                                            value="NI">Nicaragua</option>
                                                                        <option data-code="NE" data-placeholder="+227"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ne.svg" alt=""></div><div class="select-phone-code-item__country">Niger</div><div class="select-phone-code-item__country-short">NE</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+227</div></div></div>'
                                                                            value="NE">Niger</option>
                                                                        <option data-code="NG" data-placeholder="+234"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ng.svg" alt=""></div><div class="select-phone-code-item__country">Nigeria</div><div class="select-phone-code-item__country-short">NG</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+234</div></div></div>'
                                                                            value="NG">Nigeria</option>
                                                                        <option data-code="KP" data-placeholder="+850"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/kp.svg" alt=""></div><div class="select-phone-code-item__country">North Korea</div><div class="select-phone-code-item__country-short">KP</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+850</div></div></div>'
                                                                            value="KP">North Korea</option>
                                                                        <option data-code="NO" data-placeholder="+47"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/no.svg" alt=""></div><div class="select-phone-code-item__country">Norway</div><div class="select-phone-code-item__country-short">NO</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+47</div></div></div>'
                                                                            value="NO">Norway</option>
                                                                        <option data-code="OM" data-placeholder="+968"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/om.svg" alt=""></div><div class="select-phone-code-item__country">Oman</div><div class="select-phone-code-item__country-short">OM</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+968</div></div></div>'
                                                                            value="OM">Oman</option>
                                                                        <option data-code="PK" data-placeholder="+92"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/pk.svg" alt=""></div><div class="select-phone-code-item__country">Pakistan</div><div class="select-phone-code-item__country-short">PK</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+92</div></div></div>'
                                                                            value="PK">Pakistan</option>
                                                                        <option data-code="PW" data-placeholder="+680"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/pw.svg" alt=""></div><div class="select-phone-code-item__country">Palau</div><div class="select-phone-code-item__country-short">PW</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+680</div></div></div>'
                                                                            value="PW">Palau</option>
                                                                        <option data-code="PS" data-placeholder="+970"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ps.svg" alt=""></div><div class="select-phone-code-item__country">Palestinian Territory</div><div class="select-phone-code-item__country-short">PS</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+970</div></div></div>'
                                                                            value="PS">Palestinian Territory
                                                                        </option>
                                                                        <option data-code="PA" data-placeholder="+507"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/pa.svg" alt=""></div><div class="select-phone-code-item__country">Panama</div><div class="select-phone-code-item__country-short">PA</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+507</div></div></div>'
                                                                            value="PA">Panama</option>
                                                                        <option data-code="PG" data-placeholder="+675"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/pg.svg" alt=""></div><div class="select-phone-code-item__country">Papua New Guinea</div><div class="select-phone-code-item__country-short">PG</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+675</div></div></div>'
                                                                            value="PG">Papua New Guinea</option>
                                                                        <option data-code="PY" data-placeholder="+595"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/py.svg" alt=""></div><div class="select-phone-code-item__country">Paraguay</div><div class="select-phone-code-item__country-short">PY</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+595</div></div></div>'
                                                                            value="PY">Paraguay</option>
                                                                        <option data-code="PE" data-placeholder="+51"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/pe.svg" alt=""></div><div class="select-phone-code-item__country">Peru</div><div class="select-phone-code-item__country-short">PE</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+51</div></div></div>'
                                                                            value="PE">Peru</option>
                                                                        <option data-code="PH" data-placeholder="+63"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ph.svg" alt=""></div><div class="select-phone-code-item__country">Philippines</div><div class="select-phone-code-item__country-short">PH</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+63</div></div></div>'
                                                                            value="PH">Philippines</option>
                                                                        <option data-code="PL" data-placeholder="+48"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/pl.svg" alt=""></div><div class="select-phone-code-item__country">Poland</div><div class="select-phone-code-item__country-short">PL</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+48</div></div></div>'
                                                                            value="PL">Poland</option>
                                                                        <option data-code="PT" data-placeholder="+351"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/pt.svg" alt=""></div><div class="select-phone-code-item__country">Portugal</div><div class="select-phone-code-item__country-short">PT</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+351</div></div></div>'
                                                                            value="PT">Portugal</option>
                                                                        <option data-code="QA" data-placeholder="+974"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/qa.svg" alt=""></div><div class="select-phone-code-item__country">Qatar</div><div class="select-phone-code-item__country-short">QA</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+974</div></div></div>'
                                                                            value="QA">Qatar</option>
                                                                        <option data-code="CG" data-placeholder="+242"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/cg.svg" alt=""></div><div class="select-phone-code-item__country">Republic of the Congo</div><div class="select-phone-code-item__country-short">CG</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+242</div></div></div>'
                                                                            value="CG">Republic of the Congo
                                                                        </option>
                                                                        <option data-code="RO" data-placeholder="+40"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ro.svg" alt=""></div><div class="select-phone-code-item__country">Romania</div><div class="select-phone-code-item__country-short">RO</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+40</div></div></div>'
                                                                            value="RO">Romania</option>
                                                                        <option data-code="RU" data-placeholder="+7"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ru.svg" alt=""></div><div class="select-phone-code-item__country">Russia</div><div class="select-phone-code-item__country-short">RU</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+7</div></div></div>'
                                                                            value="RU">Russia</option>
                                                                        <option data-code="RW" data-placeholder="+250"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/rw.svg" alt=""></div><div class="select-phone-code-item__country">Rwanda</div><div class="select-phone-code-item__country-short">RW</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+250</div></div></div>'
                                                                            value="RW">Rwanda</option>
                                                                        <option data-code="WS" data-placeholder="+685"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ws.svg" alt=""></div><div class="select-phone-code-item__country">Samoa</div><div class="select-phone-code-item__country-short">WS</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+685</div></div></div>'
                                                                            value="WS">Samoa</option>
                                                                        <option data-code="SM" data-placeholder="+378"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/sm.svg" alt=""></div><div class="select-phone-code-item__country">San Marino</div><div class="select-phone-code-item__country-short">SM</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+378</div></div></div>'
                                                                            value="SM">San Marino</option>
                                                                        <option data-code="ST" data-placeholder="+239"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/st.svg" alt=""></div><div class="select-phone-code-item__country">Sao Tome and Principe</div><div class="select-phone-code-item__country-short">ST</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+239</div></div></div>'
                                                                            value="ST">Sao Tome and Principe
                                                                        </option>
                                                                        <option data-code="SA" data-placeholder="+966"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/sa.svg" alt=""></div><div class="select-phone-code-item__country">Saudi Arabia</div><div class="select-phone-code-item__country-short">SA</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+966</div></div></div>'
                                                                            value="SA">Saudi Arabia</option>
                                                                        <option data-code="SN" data-placeholder="+221"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/sn.svg" alt=""></div><div class="select-phone-code-item__country">Senegal</div><div class="select-phone-code-item__country-short">SN</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+221</div></div></div>'
                                                                            value="SN">Senegal</option>
                                                                        <option data-code="RS" data-placeholder="+381"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/rs.svg" alt=""></div><div class="select-phone-code-item__country">Serbia</div><div class="select-phone-code-item__country-short">RS</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+381</div></div></div>'
                                                                            value="RS">Serbia</option>
                                                                        <option data-code="SC" data-placeholder="+248"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/sc.svg" alt=""></div><div class="select-phone-code-item__country">Seychelles</div><div class="select-phone-code-item__country-short">SC</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+248</div></div></div>'
                                                                            value="SC">Seychelles</option>
                                                                        <option data-code="SL" data-placeholder="+232"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/sl.svg" alt=""></div><div class="select-phone-code-item__country">Sierra Leone</div><div class="select-phone-code-item__country-short">SL</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+232</div></div></div>'
                                                                            value="SL">Sierra Leone</option>
                                                                        <option data-code="SG" data-placeholder="+65"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/sg.svg" alt=""></div><div class="select-phone-code-item__country">Singapore</div><div class="select-phone-code-item__country-short">SG</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+65</div></div></div>'
                                                                            value="SG">Singapore</option>
                                                                        <option data-code="SX"
                                                                            data-placeholder="+1721"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/sx.svg" alt=""></div><div class="select-phone-code-item__country">Sint Maarten</div><div class="select-phone-code-item__country-short">SX</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+1721</div></div></div>'
                                                                            value="SX">Sint Maarten</option>
                                                                        <option data-code="SK" data-placeholder="+421"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/sk.svg" alt=""></div><div class="select-phone-code-item__country">Slovakia</div><div class="select-phone-code-item__country-short">SK</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+421</div></div></div>'
                                                                            value="SK">Slovakia</option>
                                                                        <option data-code="SI" data-placeholder="+386"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/si.svg" alt=""></div><div class="select-phone-code-item__country">Slovenia</div><div class="select-phone-code-item__country-short">SI</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+386</div></div></div>'
                                                                            value="SI">Slovenia</option>
                                                                        <option data-code="SB" data-placeholder="+677"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/sb.svg" alt=""></div><div class="select-phone-code-item__country">Solomon Islands</div><div class="select-phone-code-item__country-short">SB</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+677</div></div></div>'
                                                                            value="SB">Solomon Islands</option>
                                                                        <option data-code="SO" data-placeholder="+252"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/so.svg" alt=""></div><div class="select-phone-code-item__country">Somalia</div><div class="select-phone-code-item__country-short">SO</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+252</div></div></div>'
                                                                            value="SO">Somalia</option>
                                                                        <option data-code="ZA" data-placeholder="+27"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/za.svg" alt=""></div><div class="select-phone-code-item__country">South Africa</div><div class="select-phone-code-item__country-short">ZA</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+27</div></div></div>'
                                                                            value="ZA">South Africa</option>
                                                                        <option data-code="KR" data-placeholder="+82"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/kr.svg" alt=""></div><div class="select-phone-code-item__country">South Korea</div><div class="select-phone-code-item__country-short">KR</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+82</div></div></div>'
                                                                            value="KR">South Korea</option>
                                                                        <option data-code="SS" data-placeholder="+211"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ss.svg" alt=""></div><div class="select-phone-code-item__country">South Sudan</div><div class="select-phone-code-item__country-short">SS</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+211</div></div></div>'
                                                                            value="SS">South Sudan</option>
                                                                        <option data-code="ES" data-placeholder="+34"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/es.svg" alt=""></div><div class="select-phone-code-item__country">Spain</div><div class="select-phone-code-item__country-short">ES</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+34</div></div></div>'
                                                                            value="ES">Spain</option>
                                                                        <option data-code="LK" data-placeholder="+94"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/lk.svg" alt=""></div><div class="select-phone-code-item__country">Sri Lanka</div><div class="select-phone-code-item__country-short">LK</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+94</div></div></div>'
                                                                            value="LK">Sri Lanka</option>
                                                                        <option data-code="SD" data-placeholder="+249"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/sd.svg" alt=""></div><div class="select-phone-code-item__country">Sudan</div><div class="select-phone-code-item__country-short">SD</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+249</div></div></div>'
                                                                            value="SD">Sudan</option>
                                                                        <option data-code="SR" data-placeholder="+597"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/sr.svg" alt=""></div><div class="select-phone-code-item__country">Suriname</div><div class="select-phone-code-item__country-short">SR</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+597</div></div></div>'
                                                                            value="SR">Suriname</option>
                                                                        <option data-code="SE" data-placeholder="+46"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/se.svg" alt=""></div><div class="select-phone-code-item__country">Sweden</div><div class="select-phone-code-item__country-short">SE</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+46</div></div></div>'
                                                                            value="SE">Sweden</option>
                                                                        <option data-code="CH" data-placeholder="+41"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ch.svg" alt=""></div><div class="select-phone-code-item__country">Switzerland</div><div class="select-phone-code-item__country-short">CH</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+41</div></div></div>'
                                                                            value="CH">Switzerland</option>
                                                                        <option data-code="SY" data-placeholder="+963"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/sy.svg" alt=""></div><div class="select-phone-code-item__country">Syria</div><div class="select-phone-code-item__country-short">SY</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+963</div></div></div>'
                                                                            value="SY">Syria</option>
                                                                        <option data-code="TJ" data-placeholder="+992"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/tj.svg" alt=""></div><div class="select-phone-code-item__country">Tajikistan</div><div class="select-phone-code-item__country-short">TJ</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+992</div></div></div>'
                                                                            value="TJ">Tajikistan</option>
                                                                        <option data-code="TZ" data-placeholder="+255"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/tz.svg" alt=""></div><div class="select-phone-code-item__country">Tanzania</div><div class="select-phone-code-item__country-short">TZ</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+255</div></div></div>'
                                                                            value="TZ">Tanzania</option>
                                                                        <option data-code="TH" data-placeholder="+66"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/th.svg" alt=""></div><div class="select-phone-code-item__country">Thailand</div><div class="select-phone-code-item__country-short">TH</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+66</div></div></div>'
                                                                            value="TH">Thailand</option>
                                                                        <option data-code="TG" data-placeholder="+228"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/tg.svg" alt=""></div><div class="select-phone-code-item__country">Togo</div><div class="select-phone-code-item__country-short">TG</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+228</div></div></div>'
                                                                            value="TG">Togo</option>
                                                                        <option data-code="TO" data-placeholder="+676"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/to.svg" alt=""></div><div class="select-phone-code-item__country">Tonga</div><div class="select-phone-code-item__country-short">TO</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+676</div></div></div>'
                                                                            value="TO">Tonga</option>
                                                                        <option data-code="TT"
                                                                            data-placeholder="+1868"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/tt.svg" alt=""></div><div class="select-phone-code-item__country">Trinidad and Tobago</div><div class="select-phone-code-item__country-short">TT</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+1868</div></div></div>'
                                                                            value="TT">Trinidad and Tobago
                                                                        </option>
                                                                        <option data-code="TN" data-placeholder="+216"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/tn.svg" alt=""></div><div class="select-phone-code-item__country">Tunisia</div><div class="select-phone-code-item__country-short">TN</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+216</div></div></div>'
                                                                            value="TN">Tunisia</option>
                                                                        <option data-code="TR" data-placeholder="+90"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/tr.svg" alt=""></div><div class="select-phone-code-item__country">Turkey</div><div class="select-phone-code-item__country-short">TR</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+90</div></div></div>'
                                                                            value="TR">Turkey</option>
                                                                        <option data-code="TM" data-placeholder="+993"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/tm.svg" alt=""></div><div class="select-phone-code-item__country">Turkmenistan</div><div class="select-phone-code-item__country-short">TM</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+993</div></div></div>'
                                                                            value="TM">Turkmenistan</option>
                                                                        <option data-code="TV" data-placeholder="+688"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/tv.svg" alt=""></div><div class="select-phone-code-item__country">Tuvalu</div><div class="select-phone-code-item__country-short">TV</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+688</div></div></div>'
                                                                            value="TV">Tuvalu</option>
                                                                        <option data-code="VI"
                                                                            data-placeholder="+1340"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/vi.svg" alt=""></div><div class="select-phone-code-item__country">U.S. Virgin Islands</div><div class="select-phone-code-item__country-short">VI</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+1340</div></div></div>'
                                                                            value="VI">U.S. Virgin Islands
                                                                        </option>
                                                                        <option data-code="UG" data-placeholder="+256"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ug.svg" alt=""></div><div class="select-phone-code-item__country">Uganda</div><div class="select-phone-code-item__country-short">UG</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+256</div></div></div>'
                                                                            value="UG">Uganda</option>
                                                                        <option data-code="UA" data-placeholder="+380"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ua.svg" alt=""></div><div class="select-phone-code-item__country">Ukraine</div><div class="select-phone-code-item__country-short">UA</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+380</div></div></div>'
                                                                            value="UA">Ukraine</option>
                                                                        <option data-code="AE" data-placeholder="+971"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ae.svg" alt=""></div><div class="select-phone-code-item__country">United Arab Emirates</div><div class="select-phone-code-item__country-short">AE</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+971</div></div></div>'
                                                                            value="AE">United Arab Emirates
                                                                        </option>
                                                                        <option data-code="GB" data-placeholder="+44"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/gb.svg" alt=""></div><div class="select-phone-code-item__country">United Kingdom</div><div class="select-phone-code-item__country-short">GB</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+44</div></div></div>'
                                                                            value="GB">United Kingdom</option>
                                                                        <option data-code="US" data-placeholder="+1"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/us.svg" alt=""></div><div class="select-phone-code-item__country">United States</div><div class="select-phone-code-item__country-short">US</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+1</div></div></div>'
                                                                            value="US">United States</option>
                                                                        <option data-code="UY" data-placeholder="+598"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/uy.svg" alt=""></div><div class="select-phone-code-item__country">Uruguay</div><div class="select-phone-code-item__country-short">UY</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+598</div></div></div>'
                                                                            value="UY">Uruguay</option>
                                                                        <option data-code="UZ" data-placeholder="+998"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/uz.svg" alt=""></div><div class="select-phone-code-item__country">Uzbekistan</div><div class="select-phone-code-item__country-short">UZ</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+998</div></div></div>'
                                                                            value="UZ">Uzbekistan</option>
                                                                        <option data-code="VU" data-placeholder="+678"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/vu.svg" alt=""></div><div class="select-phone-code-item__country">Vanuatu</div><div class="select-phone-code-item__country-short">VU</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+678</div></div></div>'
                                                                            value="VU">Vanuatu</option>
                                                                        <option data-code="VE" data-placeholder="+58"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ve.svg" alt=""></div><div class="select-phone-code-item__country">Venezuela</div><div class="select-phone-code-item__country-short">VE</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+58</div></div></div>'
                                                                            value="VE">Venezuela</option>
                                                                        <option data-code="VN" data-placeholder="+84"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/vn.svg" alt=""></div><div class="select-phone-code-item__country">Vietnam</div><div class="select-phone-code-item__country-short">VN</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+84</div></div></div>'
                                                                            value="VN">Vietnam</option>
                                                                        <option data-code="YE" data-placeholder="+967"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/ye.svg" alt=""></div><div class="select-phone-code-item__country">Yemen</div><div class="select-phone-code-item__country-short">YE</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+967</div></div></div>'
                                                                            value="YE">Yemen</option>
                                                                        <option data-code="ZM" data-placeholder="+260"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/zm.svg" alt=""></div><div class="select-phone-code-item__country">Zambia</div><div class="select-phone-code-item__country-short">ZM</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+260</div></div></div>'
                                                                            value="ZM">Zambia</option>
                                                                        <option data-code="ZW" data-placeholder="+263"
                                                                            data-content='<div class="select-phone-code-item"><div class="select-phone-code-item__left"><div class="select-phone-code-item__flag"><img class="image" src="/assets/oora3/images/svg/flags/zw.svg" alt=""></div><div class="select-phone-code-item__country">Zimbabwe</div><div class="select-phone-code-item__country-short">ZW</div></div><div class="select-phone-code-item__right"><div class="select-phone-code-item__code">+263</div></div></div>'
                                                                            value="ZW">Zimbabwe</option>
                                                                    </select>


                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>


                                                <div class="field-block">
                                                    <div
                                                        class="field field--input field--has-icon field--password field--has-right-panel">
                                                        <input type="password" name="password" maxlength="255"
                                                            placeholder="Password" autocomplete="off">
                                                        <div class="field-icon"></div>
                                                        <div class="field-right-panel">
                                                            <div class="password-type-toggle-btn-block">
                                                                <button class="password-type-toggle-btn"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="forgot-password-link-block">
                                                        <a href="{{route('forgot-password')}}"
                                                            class="forgot-password-link">Forgot your password?</a>
                                                    </div>
                                                </div>

                                                <div class="form-button-block">
                                                    <button type="submit" class="green-gradient-btn iconed-btn">
                                                        <div class="iconed-btn__text">Log In</div>
                                                        <div class="iconed-btn__icon"></div>
                                                    </button>
                                                </div>
                                                <div class="form-divider-block">
                                                    <div class="form-divider">
                                                        <div class="form-divider__line"></div>
                                                        <div class="form-divider__text">OR</div>
                                                        <div class="form-divider__line"></div>
                                                    </div>
                                                </div>
                                              
                                                <div class="form-bottom-note-block">
                                                    <div class="form-bottom-note">
                                                        <a href="{{route('register')}}">Create an OORA3 Account</a>
                                                    </div>
                                                </div>

                                            </form>
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
                                    We use cookies (and similar technologies) to improve our service and enhance your
                                    experience on our website.
                                </div>
                            </div>
                        </div>
                        <div class="cookies__right">
                            <div class="cookies__buttons-block">
                                <div class="cookies__buttons">
                                    <div class="cookies__button-wrapper">
                                        <button type="button" onclick="acceptCookie();"
                                            class="cookies__accept-button green-gradient-btn button--small">
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

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516"
        integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg=="
        data-cf-beacon='{"version":"2024.11.0","token":"14dc89e34efd48bc85aa4f8e67cfc71b","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
  
</body>

</html>
