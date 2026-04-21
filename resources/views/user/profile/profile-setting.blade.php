<div class="db-page-block" id="globalAccount">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="db-page">
                    <div class="row">
                        @include('layouts.upnl.sidebar')
                        <div class="col-12 col-xl-9">


                            <div class="db-page__right globalAccount globalAccountSettings">

                                <div class="db-page__title-block">
                                    <h2 class="db-page__title">Settings</h2>
                                </div>
                                <div class="db-page__descr-block">
                                    <div class="db-page__descr">Important information about your account and active sessions, saved addresses, access settings, and wallet security rules.</div>
                                </div>

                                <div class="db-page__content">

                                    <div class="db-setting-tabs-block">
                                        <div class="db-setting-tabs">
                                            <div class="db-setting-tab-wrapper">
                                                <div class="db-setting-tab active" onclick="setActiveModule('settings')">
                                                    Account
                                                </div>
                                            </div>
                                            <div class="db-setting-tab-wrapper">
                                                <div class="db-setting-tab">
                                                    Security
                                                </div>
                                            </div>
                                            <div class="db-setting-tab-wrapper">
                                                <div class="db-setting-tab" onclick="setActiveModule('wallets')">
                                                    Favorite addresses
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="db-setting-tabs-content-block">
                                        <div class="db-setting-tabs-content">
                                            <div class="db-setting-tab-content" style="">



                                                <div class="setting-panel-block">
                                                    <div class="setting-panel">
                                                        <div class="setting-panel__top">
                                                            <div class="setting-panel__top-left">
                                                                <div class="setting-panel__title">
                                                                    Account information
                                                                </div>
                                                            </div>
                                                        </div>






                                                        <div class="setting-panel__content">
                                                            <div class="acc-info-items-block">
                                                                <div class="acc-info-items">










                                                                    <div class="acc-info-item ">
                                                                        <div class="acc-info-item__states">
                                                                            <div class="acc-info-item__state acc-info-item__state--set">
                                                                                <div class="acc-info-item__state-inner">
                                                                                    <div class="acc-info-item__state__left">
                                                                                        <div class="acc-info-item__title">
                                                                                            Username
                                                                                        </div>

                                                                                        <div class="acc-info-username-set-block">
                                                                                            <div class="acc-info-username-set">
                                                                                                <div class="acc-info-username-set__title">11223344</div>
                                                                                                <div class="acc-info-mail-set__status">
                                                                                                    Public
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="acc-info-item__state__right">
                                                                                        <div class="acc-info-change-button-block">

                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </div>









                                                                    <form class="register" method="post" action="https://oora3.com/user/update-profile" enctype="multipart/form-data">
                                                                        <input type="hidden" name="_token" value="WwkSWZvaAd1j5hcDtpZQBiV4S9JaWsgGb79n3r0t">
                                                                        <div class="acc-info-item globalAccountSettingsLogin">
                                                                            <div class="acc-info-item__states">
                                                                                <div class="acc-info-item__state acc-info-item__state--unset globalAccountSettingsLoginUnset" style="display: none;">
                                                                                    <div class="acc-info-item__state-inner">
                                                                                        <div class="acc-info-item__state__left">
                                                                                            <div class="acc-info-item__title">
                                                                                                Name
                                                                                            </div>

                                                                                            <div class="acc-info-not-set-block">
                                                                                                <div class="acc-info-not-set">
                                                                                                    <div class="acc-info-not-set__title">
                                                                                                        N/A
                                                                                                    </div>
                                                                                                    <div class="acc-info-not-set__icon">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="acc-info-item__state__right">
                                                                                            <div class="acc-info-set-button-block">
                                                                                                <button class="acc-info-set-button iconed-btn light-black-btn button--small acc-info-set-button--username globalAccountSettingsLoginButton">
                                                                                                    <div class="iconed-btn__icon">
                                                                                                    </div>
                                                                                                    <div class="iconed-btn__text">
                                                                                                        Set
                                                                                                    </div>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="acc-info-item__state acc-info-item__state--set globalAccountSettingsLoginSet">
                                                                                    <div class="acc-info-item__state-inner">
                                                                                        <div class="acc-info-item__state__left">
                                                                                            <div class="acc-info-item__title">
                                                                                                Name
                                                                                            </div>

                                                                                            <div class="acc-info-username-set-block">
                                                                                                <div class="acc-info-username-set">
                                                                                                    <div class="acc-info-username-set__title globalAccountSettingsLoginActive">OORA3</div>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="acc-info-item__state__right">
                                                                                            <div class="acc-info-change-button-block">
                                                                                                <button class="acc-info-change-button iconed-btn light-black-btn button--small acc-info-set-button--username globalAccountSettingsLoginButton">
                                                                                                    <div class="iconed-btn__icon">
                                                                                                    </div>
                                                                                                    <div class="iconed-btn__text">
                                                                                                        Change
                                                                                                    </div>
                                                                                                </button>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>






                                                                                <div class="acc-info-item__state acc-info-item__state--change globalAccountSettingsLoginChange" style="display: none;">
                                                                                    <div class="acc-info-item__state-inner">
                                                                                        <div class="acc-info-item__state__left">
                                                                                            <div class="acc-info-item__title">
                                                                                            </div>


                                                                                            <div class="acc-info-change-form-block">




                                                                                                <input type="hidden" name="_token" value="WwkSWZvaAd1j5hcDtpZQBiV4S9JaWsgGb79n3r0t">
                                                                                                <div class="acc-info-change-form-row">
                                                                                                    <div class="acc-info-change-form-row-field">
                                                                                                        <div class="field-block">
                                                                                                            <div class="field field--input field--has-icon field--username">
                                                                                                                <input placeholder="name" type="text" value="OORA3" name="name" maxlength="32" data-inputmask-regex="^[A-Za-z.0-9_-]{1,32}$" data-inputmask-placeholder="" autocomplete="off" inputmode="text">
                                                                                                                <div class="field-icon"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="acc-info-change-form-row-button">
                                                                                                        <div class="form-button-block">
                                                                                                            <button type="submit" class="green-gradient-btn">
                                                                                                                Save
                                                                                                            </button>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>


                                                                                        </div>
                                                                                        <div class="acc-info-item__state__right">
                                                                                            <div class="acc-info-close-button-block">
                                                                                                <button class="acc-info-close-button globalAccountSettingsLoginChangeClose"></button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                    </form>













                                                                    <div class="acc-info-item">
                                                                        <div class="acc-info-item__states">
                                                                            <div class="acc-info-item__state acc-info-item__state--unset globalAccountSettingsEmailUnset" style="display: none;">
                                                                                <div class="acc-info-item__state-inner">
                                                                                    <div class="acc-info-item__state__left">
                                                                                        <div class="acc-info-item__title">
                                                                                            Email
                                                                                        </div>
                                                                                        <div class="acc-info-not-set-block">
                                                                                            <div class="acc-info-not-set">
                                                                                                <div class="acc-info-not-set__title">
                                                                                                    N/A
                                                                                                </div>
                                                                                                <div class="acc-info-not-set__icon">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="acc-info-item__state__right">
                                                                                        <div class="acc-info-set-button-block">
                                                                                            <button class="acc-info-set-button iconed-btn light-black-btn button--small acc-info-set-button--email globalAccountSettingsEmailButton">
                                                                                                <div class="iconed-btn__icon">
                                                                                                </div>
                                                                                                <div class="iconed-btn__text">
                                                                                                    Set
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="acc-info-item__state acc-info-item__state--set globalAccountSettingsEmailSet">
                                                                                <div class="acc-info-item__state-inner">
                                                                                    <div class="acc-info-item__state__left">
                                                                                        <div class="acc-info-item__title">
                                                                                            Email
                                                                                        </div>

                                                                                        <div class="acc-info-mail-set-block">
                                                                                            <div class="acc-info-mail-set">
                                                                                                <div class="acc-info-mail-set__title globalAccountSettingsEmailActive">oora3@gmail.com</div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="acc-info-item__state__right">
                                                                                        <div class="acc-info-change-button-block">
                                                                                            <button class="acc-info-change-button iconed-btn light-black-btn button--small globalAccountSettingsEmailButton">
                                                                                                <div class="iconed-btn__icon">
                                                                                                </div>
                                                                                                <div class="iconed-btn__text">
                                                                                                    Change
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="acc-info-item__state acc-info-item__state--change globalAccountSettingsEmailChange" style="display: none;">
                                                                                <div class="acc-info-item__state-inner">
                                                                                    <div class="acc-info-item__state__left">
                                                                                        <div class="acc-info-item__title">
                                                                                            Email
                                                                                        </div>
                                                                                        <div class="acc-info-change-form-block">
                                                                                            <form class="register" method="post" action="https://oora3.com/user/update-profile" enctype="multipart/form-data">
                                                                                                <input type="hidden" name="_token" value="WwkSWZvaAd1j5hcDtpZQBiV4S9JaWsgGb79n3r0t">
                                                                                                <div class="acc-info-change-form-row">
                                                                                                    <div class="acc-info-change-form-row-field">

                                                                                                        <div class="field-block">
                                                                                                            <div class="field field--input field--has-icon field--mail">
                                                                                                                <input placeholder="Email" type="text" value="oora3@gmail.com" name="email" maxlength="255" autocomplete="off">
                                                                                                                <div class="field-icon"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="acc-info-change-form-row-button">
                                                                                                        <div class="form-button-block">
                                                                                                            <button type="submit" class="green-gradient-btn">
                                                                                                                Save
                                                                                                            </button>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>




                                                                                        <div class="acc-info-change-form-block">


                                                                                            <form class="register" method="post" action="https://oora3.com/user/update-profile" enctype="multipart/form-data">
                                                                                                <input type="hidden" name="_token" value="WwkSWZvaAd1j5hcDtpZQBiV4S9JaWsgGb79n3r0t">
                                                                                                <div class="acc-info-change-form-row">
                                                                                                    <div class="acc-info-change-form-row-field">
                                                                                                        <div class="field field--checkbox">
                                                                                                            <label class="checkbox-container">
                                                                                                                <input type="checkbox" name="email" value="1" class="checkbox-input" checked="checked">
                                                                                                                <div class="checkbox-custom">
                                                                                                                    <div class="checkbox-custom__switcher">
                                                                                                                    </div>
                                                                                                                    <div class="checkbox-custom__text">
                                                                                                                        Send me updates and news
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </form>
                                                                                        </div>



                                                                                    </div>
                                                                                    <div class="acc-info-item__state__right">
                                                                                        <div class="acc-info-close-button-block">
                                                                                            <button class="acc-info-close-button globalAccountSettingsEmailChangeClose"></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>







                                                                    <div class="acc-info-item">
                                                                        <div class="acc-info-item__states">
                                                                            <div class="acc-info-item__state acc-info-item__state--unset globalAccountSettingsPhoneUnset" style="display: block;">
                                                                                <div class="acc-info-item__state-inner">
                                                                                    <div class="acc-info-item__state__left">
                                                                                        <div class="acc-info-item__title">
                                                                                            Mobile number
                                                                                        </div>
                                                                                        <div class="acc-info-not-set-block">
                                                                                            <div class="acc-info-not-set">
                                                                                                <div class="acc-info-not-set__title">
                                                                                                    N/A
                                                                                                </div>
                                                                                                <div class="acc-info-not-set__icon">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="acc-info-item__state__right">
                                                                                        <div class="acc-info-set-button-block">
                                                                                            <button class="acc-info-set-button iconed-btn light-black-btn button--small acc-info-set-button--phone globalAccountSettingsPhoneButton">
                                                                                                <div class="iconed-btn__icon">
                                                                                                </div>
                                                                                                <div class="iconed-btn__text">
                                                                                                    Set
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="acc-info-item__state acc-info-item__state--set globalAccountSettingsPhoneSet" style="display: none;">
                                                                                <div class="acc-info-item__state-inner">
                                                                                    <div class="acc-info-item__state__left">
                                                                                        <div class="acc-info-item__title">
                                                                                            Mobile number
                                                                                        </div>

                                                                                        <div class="acc-info-phone-set-block">
                                                                                            <div class="acc-info-phone-set">
                                                                                                <div class="acc-info-phone-set-content">
                                                                                                    <div class="acc-info-phone-set__title globalAccountSettingsPhoneActive" style="padding-left:0px;">

                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="acc-info-item__state__right">
                                                                                        <div class="acc-info-change-button-block">
                                                                                            <button class="acc-info-change-button iconed-btn light-black-btn button--small globalAccountSettingsPhoneButton">
                                                                                                <div class="iconed-btn__icon">
                                                                                                </div>
                                                                                                <div class="iconed-btn__text">
                                                                                                    Change
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="acc-info-item__state acc-info-item__state--change globalAccountSettingsPhoneChange" style="display: none;">
                                                                                <div class="acc-info-item__state-inner">
                                                                                    <div class="acc-info-item__state__left">
                                                                                        <div class="acc-info-item__title">
                                                                                            Mobile number
                                                                                        </div>
                                                                                        <div class="acc-info-change-form-block">


                                                                                            <div class="acc-info-change-form-row">
                                                                                                <div class="acc-info-change-form-row-field">


                                                                                                    <div class="field-block">
                                                                                                        <div class="field field--input field--phone">
                                                                                                            <input data-module="" type="text" class="authPhone" name="phone" value="9518183744" autocomplete="off" data-inputmask-regex="^\+[1-9]{1}[0-9]{0,20}$" data-inputmask-placeholder="Mobile number" inputmode="text">


                                                                                                            <div class="dropdown bootstrap-select select-phone-code">


                                                                                                                <div class="dropdown bootstrap-select select-phone-code">
                                                                                                                    <select value="INDIA" name="country" class="select-phone-code">

                                                                                                                        <option data-code="AF" data-placeholder="+93" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/af.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Afghanistan&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;AF&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+93&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="AF">Afghanistan</option>
                                                                                                                        <option data-code="AL" data-placeholder="+355" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/al.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Albania&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;AL&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+355&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="AL">Albania</option>
                                                                                                                        <option data-code="DZ" data-placeholder="+213" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/dz.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Algeria&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;DZ&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+213&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="DZ">Algeria</option>
                                                                                                                        <option data-code="AD" data-placeholder="+376" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ad.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Andorra&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;AD&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+376&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="AD">Andorra</option>
                                                                                                                        <option data-code="AO" data-placeholder="+244" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ao.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Angola&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;AO&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+244&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="AO">Angola</option>
                                                                                                                        <option data-code="AG" data-placeholder="+1268" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ag.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Antigua and barbuda&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;AG&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+1268&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="AG">Antigua and barbuda</option>
                                                                                                                        <option data-code="AR" data-placeholder="+54" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ar.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Argentina&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;AR&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+54&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="AR">Argentina</option>
                                                                                                                        <option data-code="AM" data-placeholder="+374" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/am.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Armenia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;AM&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+374&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="AM">Armenia</option>
                                                                                                                        <option data-code="AW" data-placeholder="+297" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/aw.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Aruba&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;AW&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+297&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="AW">Aruba</option>
                                                                                                                        <option data-code="AU" data-placeholder="+61" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/au.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Australia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;AU&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+61&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="AU">Australia</option>
                                                                                                                        <option data-code="AT" data-placeholder="+43" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/at.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Austria&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;AT&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+43&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="AT">Austria</option>
                                                                                                                        <option data-code="AZ" data-placeholder="+994" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/az.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Azerbaijan&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;AZ&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+994&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="AZ">Azerbaijan</option>
                                                                                                                        <option data-code="BS" data-placeholder="+1242" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bs.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Bahamas&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;BS&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+1242&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="BS">Bahamas</option>
                                                                                                                        <option data-code="BH" data-placeholder="+973" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bh.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Bahrain&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;BH&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+973&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="BH">Bahrain</option>
                                                                                                                        <option data-code="BD" data-placeholder="+880" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bd.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Bangladesh&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;BD&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+880&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="BD">Bangladesh</option>
                                                                                                                        <option data-code="BB" data-placeholder="+1246" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bb.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Barbados&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;BB&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+1246&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="BB">Barbados</option>
                                                                                                                        <option data-code="BY" data-placeholder="+375" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/by.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Belarus&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;BY&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+375&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="BY">Belarus</option>
                                                                                                                        <option data-code="BE" data-placeholder="+32" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/be.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Belgium&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;BE&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+32&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="BE">Belgium</option>
                                                                                                                        <option data-code="BZ" data-placeholder="+501" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bz.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Belize&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;BZ&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+501&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="BZ">Belize</option>
                                                                                                                        <option data-code="BJ" data-placeholder="+229" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bj.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Benin&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;BJ&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+229&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="BJ">Benin</option>
                                                                                                                        <option data-code="BT" data-placeholder="+975" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bt.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Bhutan&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;BT&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+975&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="BT">Bhutan</option>
                                                                                                                        <option data-code="BO" data-placeholder="+591" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bo.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Bolivia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;BO&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+591&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="BO">Bolivia</option>
                                                                                                                        <option data-code="BA" data-placeholder="+387" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ba.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Bosnia and Herzegovina&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;BA&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+387&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="BA">Bosnia and Herzegovina</option>
                                                                                                                        <option data-code="BW" data-placeholder="+267" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bw.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Botswana&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;BW&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+267&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="BW">Botswana</option>
                                                                                                                        <option data-code="BR" data-placeholder="+55" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/br.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Brazil&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;BR&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+55&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="BR">Brazil</option>
                                                                                                                        <option data-code="BN" data-placeholder="+673" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bn.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Brunei&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;BN&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+673&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="BN">Brunei</option>
                                                                                                                        <option data-code="BG" data-placeholder="+359" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bg.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Bulgaria&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;BG&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+359&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="BG">Bulgaria</option>
                                                                                                                        <option data-code="BF" data-placeholder="+226" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bf.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Burkina Faso&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;BF&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+226&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="BF">Burkina Faso</option>
                                                                                                                        <option data-code="BI" data-placeholder="+257" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bi.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Burundi&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;BI&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+257&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="BI">Burundi</option>
                                                                                                                        <option data-code="KH" data-placeholder="+855" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/kh.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Cambodia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;KH&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+855&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="KH">Cambodia</option>
                                                                                                                        <option data-code="CM" data-placeholder="+237" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cm.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Cameroon&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;CM&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+237&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="CM">Cameroon</option>
                                                                                                                        <option data-code="CA" data-placeholder="+1" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ca.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Canada&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;CA&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+1&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="CA">Canada</option>
                                                                                                                        <option data-code="CV" data-placeholder="+238" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cv.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Cape Verde&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;CV&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+238&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="CV">Cape Verde</option>
                                                                                                                        <option data-code="CF" data-placeholder="+236" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cf.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Central African Republic&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;CF&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+236&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="CF">Central African Republic</option>
                                                                                                                        <option data-code="TD" data-placeholder="+235" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/td.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Chad&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;TD&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+235&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="TD">Chad</option>
                                                                                                                        <option data-code="CL" data-placeholder="+56" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cl.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Chile&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;CL&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+56&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="CL">Chile</option>
                                                                                                                        <option data-code="CN" data-placeholder="+86" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cn.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;China&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;CN&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+86&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="CN">China</option>
                                                                                                                        <option data-code="CO" data-placeholder="+57" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/co.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Colombia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;CO&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+57&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="CO">Colombia</option>
                                                                                                                        <option data-code="KM" data-placeholder="+269" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/km.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Comoros&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;KM&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+269&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="KM">Comoros</option>
                                                                                                                        <option data-code="CR" data-placeholder="+506" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Costa Rica&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;CR&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+506&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="CR">Costa Rica</option>
                                                                                                                        <option data-code="HR" data-placeholder="+385" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/hr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Croatia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;HR&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+385&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="HR">Croatia</option>
                                                                                                                        <option data-code="CU" data-placeholder="+53" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cu.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Cuba&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;CU&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+53&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="CU">Cuba</option>
                                                                                                                        <option data-code="CW" data-placeholder="+599" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cw.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Curacao&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;CW&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+599&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="CW">Curacao</option>
                                                                                                                        <option data-code="CY" data-placeholder="+357" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cy.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Cyprus&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;CY&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+357&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="CY">Cyprus</option>
                                                                                                                        <option data-code="CZ" data-placeholder="+420" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cz.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Czech Republic&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;CZ&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+420&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="CZ">Czech Republic</option>
                                                                                                                        <option data-code="CD" data-placeholder="+243" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cd.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Democratic Republic of the Congo&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;CD&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+243&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="CD">Democratic Republic of the Congo</option>
                                                                                                                        <option data-code="DK" data-placeholder="+45" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/dk.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Denmark&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;DK&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+45&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="DK">Denmark</option>
                                                                                                                        <option data-code="DJ" data-placeholder="+253" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/dj.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Djibouti&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;DJ&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+253&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="DJ">Djibouti</option>
                                                                                                                        <option data-code="DM" data-placeholder="+1767" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/dm.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Dominica&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;DM&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+1767&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="DM">Dominica</option>
                                                                                                                        <option data-code="DO" data-placeholder="+18" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/do.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Dominican Republic&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;DO&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+18&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="DO">Dominican Republic</option>
                                                                                                                        <option data-code="TL" data-placeholder="+670" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/tl.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;East Timor&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;TL&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+670&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="TL">East Timor</option>
                                                                                                                        <option data-code="EC" data-placeholder="+593" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ec.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Ecuador&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;EC&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+593&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="EC">Ecuador</option>
                                                                                                                        <option data-code="EG" data-placeholder="+20" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/eg.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Egypt&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;EG&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+20&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="EG">Egypt</option>
                                                                                                                        <option data-code="SV" data-placeholder="+503" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sv.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;El Salvador&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;SV&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+503&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="SV">El Salvador</option>
                                                                                                                        <option data-code="GQ" data-placeholder="+240" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/gq.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Equatorial Guinea&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;GQ&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+240&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="GQ">Equatorial Guinea</option>
                                                                                                                        <option data-code="ER" data-placeholder="+291" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/er.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Eritrea&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;ER&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+291&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="ER">Eritrea</option>
                                                                                                                        <option data-code="EE" data-placeholder="+372" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ee.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Estonia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;EE&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+372&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="EE">Estonia</option>
                                                                                                                        <option data-code="ET" data-placeholder="+251" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/et.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Ethiopia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;ET&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+251&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="ET">Ethiopia</option>
                                                                                                                        <option data-code="FJ" data-placeholder="+679" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/fj.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Fiji&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;FJ&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+679&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="FJ">Fiji</option>
                                                                                                                        <option data-code="FI" data-placeholder="+358" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/fi.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Finland&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;FI&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+358&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="FI">Finland</option>
                                                                                                                        <option data-code="FR" data-placeholder="+" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/fr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;France&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;FR&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="FR">France</option>
                                                                                                                        <option data-code="GA" data-placeholder="+241" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ga.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Gabon&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;GA&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+241&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="GA">Gabon</option>
                                                                                                                        <option data-code="GM" data-placeholder="+220" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/gm.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Gambia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;GM&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+220&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="GM">Gambia</option>
                                                                                                                        <option data-code="GE" data-placeholder="+995" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ge.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Georgia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;GE&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+995&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="GE">Georgia</option>
                                                                                                                        <option data-code="DE" data-placeholder="+49" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/de.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Germany&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;DE&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+49&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="DE">Germany</option>
                                                                                                                        <option data-code="GH" data-placeholder="+233" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/gh.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Ghana&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;GH&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+233&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="GH">Ghana</option>
                                                                                                                        <option data-code="GR" data-placeholder="+30" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/gr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Greece&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;GR&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+30&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="GR">Greece</option>
                                                                                                                        <option data-code="GD" data-placeholder="+1473" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/gd.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Grenada&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;GD&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+1473&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="GD">Grenada</option>
                                                                                                                        <option data-code="GT" data-placeholder="+502" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/gt.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Guatemala&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;GT&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+502&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="GT">Guatemala</option>
                                                                                                                        <option data-code="GN" data-placeholder="+224" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/gn.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Guinea&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;GN&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+224&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="GN">Guinea</option>
                                                                                                                        <option data-code="GW" data-placeholder="+245" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/gw.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Guinea-Bissau&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;GW&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+245&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="GW">Guinea-Bissau</option>
                                                                                                                        <option data-code="HT" data-placeholder="+509" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ht.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Haiti&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;HT&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+509&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="HT">Haiti</option>
                                                                                                                        <option data-code="HN" data-placeholder="+504" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/hn.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Honduras&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;HN&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+504&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="HN">Honduras</option>
                                                                                                                        <option data-code="HK" data-placeholder="+852" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/hk.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Hong Kong&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;HK&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+852&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="HK">Hong Kong</option>
                                                                                                                        <option data-code="HU" data-placeholder="+36" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/hu.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Hungary&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;HU&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+36&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="HU">Hungary</option>
                                                                                                                        <option data-code="IS" data-placeholder="+354" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/is.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Iceland&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;IS&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+354&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="IS">Iceland</option>
                                                                                                                        <option data-code="IN" data-placeholder="+91" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/in.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;India&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;IN&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+91&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="IN">India</option>
                                                                                                                        <option data-code="ID" data-placeholder="+62" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/id.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Indonesia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;ID&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+62&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="ID">Indonesia</option>
                                                                                                                        <option data-code="IR" data-placeholder="+98" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ir.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Iran&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;IR&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+98&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="IR">Iran</option>
                                                                                                                        <option data-code="IQ" data-placeholder="+964" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/iq.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Iraq&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;IQ&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+964&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="IQ">Iraq</option>
                                                                                                                        <option data-code="IE" data-placeholder="+353" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ie.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Ireland&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;IE&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+353&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="IE">Ireland</option>
                                                                                                                        <option data-code="IL" data-placeholder="+972" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/il.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Israel&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;IL&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+972&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="IL">Israel</option>
                                                                                                                        <option data-code="IT" data-placeholder="+39" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/it.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Italy&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;IT&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+39&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="IT">Italy</option>
                                                                                                                        <option data-code="CI" data-placeholder="+225" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ci.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Ivory Coast&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;CI&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+225&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="CI">Ivory Coast</option>
                                                                                                                        <option data-code="JM" data-placeholder="+1876" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/jm.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Jamaica&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;JM&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+1876&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="JM">Jamaica</option>
                                                                                                                        <option data-code="JP" data-placeholder="+81" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/jp.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Japan&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;JP&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+81&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="JP">Japan</option>
                                                                                                                        <option data-code="JO" data-placeholder="+962" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/jo.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Jordan&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;JO&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+962&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="JO">Jordan</option>
                                                                                                                        <option data-code="KZ" data-placeholder="+7" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/kz.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Kazakhstan&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;KZ&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+7&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="KZ">Kazakhstan</option>
                                                                                                                        <option data-code="KE" data-placeholder="+254" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ke.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Kenya&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;KE&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+254&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="KE">Kenya</option>
                                                                                                                        <option data-code="KI" data-placeholder="+686" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ki.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Kiribati&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;KI&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+686&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="KI">Kiribati</option>
                                                                                                                        <option data-code="KW" data-placeholder="+965" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/kw.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Kuwait&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;KW&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+965&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="KW">Kuwait</option>
                                                                                                                        <option data-code="KG" data-placeholder="+996" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/kg.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Kyrgyzstan&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;KG&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+996&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="KG">Kyrgyzstan</option>
                                                                                                                        <option data-code="LA" data-placeholder="+856" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/la.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Laos&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;LA&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+856&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="LA">Laos</option>
                                                                                                                        <option data-code="LV" data-placeholder="+371" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/lv.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Latvia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;LV&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+371&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="LV">Latvia</option>
                                                                                                                        <option data-code="LB" data-placeholder="+961" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/lb.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Lebanon&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;LB&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+961&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="LB">Lebanon</option>
                                                                                                                        <option data-code="LS" data-placeholder="+266" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ls.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Lesotho&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;LS&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+266&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="LS">Lesotho</option>
                                                                                                                        <option data-code="LR" data-placeholder="+231" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/lr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Liberia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;LR&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+231&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="LR">Liberia</option>
                                                                                                                        <option data-code="LY" data-placeholder="+218" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ly.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Libya&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;LY&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+218&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="LY">Libya</option>
                                                                                                                        <option data-code="LI" data-placeholder="+423" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/li.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Liechtenstein&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;LI&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+423&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="LI">Liechtenstein</option>
                                                                                                                        <option data-code="LT" data-placeholder="+370" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/lt.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Lithuania&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;LT&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+370&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="LT">Lithuania</option>
                                                                                                                        <option data-code="LU" data-placeholder="+352" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/lu.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Luxembourg&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;LU&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+352&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="LU">Luxembourg</option>
                                                                                                                        <option data-code="MK" data-placeholder="+389" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mk.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Macedonia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;MK&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+389&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="MK">Macedonia</option>
                                                                                                                        <option data-code="MG" data-placeholder="+261" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mg.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Madagascar&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;MG&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+261&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="MG">Madagascar</option>
                                                                                                                        <option data-code="MW" data-placeholder="+265" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mw.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Malawi&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;MW&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+265&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="MW">Malawi</option>
                                                                                                                        <option data-code="MY" data-placeholder="+60" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/my.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Malaysia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;MY&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+60&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="MY">Malaysia</option>
                                                                                                                        <option data-code="MV" data-placeholder="+960" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mv.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Maldives&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;MV&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+960&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="MV">Maldives</option>
                                                                                                                        <option data-code="ML" data-placeholder="+223" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ml.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Mali&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;ML&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+223&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="ML">Mali</option>
                                                                                                                        <option data-code="MT" data-placeholder="+356" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mt.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Malta&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;MT&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+356&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="MT">Malta</option>
                                                                                                                        <option data-code="MH" data-placeholder="+692" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mh.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Marshall Islands&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;MH&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+692&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="MH">Marshall Islands</option>
                                                                                                                        <option data-code="MR" data-placeholder="+222" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Mauritania&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;MR&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+222&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="MR">Mauritania</option>
                                                                                                                        <option data-code="MU" data-placeholder="+230" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mu.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Mauritius&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;MU&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+230&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="MU">Mauritius</option>
                                                                                                                        <option data-code="MX" data-placeholder="+52" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mx.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Mexico&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;MX&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+52&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="MX">Mexico</option>
                                                                                                                        <option data-code="FM" data-placeholder="+691" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/fm.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Micronesia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;FM&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+691&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="FM">Micronesia</option>
                                                                                                                        <option data-code="MD" data-placeholder="+373" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/md.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Moldova&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;MD&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+373&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="MD">Moldova</option>
                                                                                                                        <option data-code="MC" data-placeholder="+377" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mc.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Monaco&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;MC&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+377&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="MC">Monaco</option>
                                                                                                                        <option data-code="MN" data-placeholder="+976" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mn.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Mongolia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;MN&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+976&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="MN">Mongolia</option>
                                                                                                                        <option data-code="ME" data-placeholder="+382" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/me.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Montenegro&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;ME&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+382&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="ME">Montenegro</option>
                                                                                                                        <option data-code="MA" data-placeholder="+212" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ma.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Morocco&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;MA&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+212&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="MA">Morocco</option>
                                                                                                                        <option data-code="MZ" data-placeholder="+258" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mz.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Mozambique&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;MZ&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+258&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="MZ">Mozambique</option>
                                                                                                                        <option data-code="MM" data-placeholder="+95" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mm.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Myanmar&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;MM&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+95&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="MM">Myanmar</option>
                                                                                                                        <option data-code="NA" data-placeholder="+264" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/na.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Namibia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;NA&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+264&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="NA">Namibia</option>
                                                                                                                        <option data-code="NR" data-placeholder="+674" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/nr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Nauru&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;NR&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+674&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="NR">Nauru</option>
                                                                                                                        <option data-code="NP" data-placeholder="+977" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/np.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Nepal&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;NP&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+977&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="NP">Nepal</option>
                                                                                                                        <option data-code="NL" data-placeholder="+31" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/nl.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Netherlands&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;NL&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+31&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="NL">Netherlands</option>
                                                                                                                        <option data-code="NZ" data-placeholder="+64" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/nz.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;New Zealand&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;NZ&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+64&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="NZ">New Zealand</option>
                                                                                                                        <option data-code="NI" data-placeholder="+505" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ni.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Nicaragua&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;NI&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+505&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="NI">Nicaragua</option>
                                                                                                                        <option data-code="NE" data-placeholder="+227" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ne.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Niger&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;NE&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+227&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="NE">Niger</option>
                                                                                                                        <option data-code="NG" data-placeholder="+234" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ng.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Nigeria&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;NG&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+234&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="NG">Nigeria</option>
                                                                                                                        <option data-code="KP" data-placeholder="+850" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/kp.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;North Korea&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;KP&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+850&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="KP">North Korea</option>
                                                                                                                        <option data-code="NO" data-placeholder="+47" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/no.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Norway&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;NO&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+47&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="NO">Norway</option>
                                                                                                                        <option data-code="OM" data-placeholder="+968" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/om.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Oman&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;OM&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+968&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="OM">Oman</option>
                                                                                                                        <option data-code="PK" data-placeholder="+92" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/pk.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Pakistan&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;PK&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+92&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="PK">Pakistan</option>
                                                                                                                        <option data-code="PW" data-placeholder="+680" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/pw.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Palau&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;PW&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+680&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="PW">Palau</option>
                                                                                                                        <option data-code="PS" data-placeholder="+970" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ps.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Palestinian Territory&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;PS&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+970&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="PS">Palestinian Territory</option>
                                                                                                                        <option data-code="PA" data-placeholder="+507" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/pa.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Panama&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;PA&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+507&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="PA">Panama</option>
                                                                                                                        <option data-code="PG" data-placeholder="+675" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/pg.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Papua New Guinea&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;PG&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+675&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="PG">Papua New Guinea</option>
                                                                                                                        <option data-code="PY" data-placeholder="+595" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/py.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Paraguay&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;PY&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+595&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="PY">Paraguay</option>
                                                                                                                        <option data-code="PE" data-placeholder="+51" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/pe.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Peru&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;PE&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+51&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="PE">Peru</option>
                                                                                                                        <option data-code="PH" data-placeholder="+63" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ph.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Philippines&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;PH&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+63&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="PH">Philippines</option>
                                                                                                                        <option data-code="PL" data-placeholder="+48" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/pl.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Poland&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;PL&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+48&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="PL">Poland</option>
                                                                                                                        <option data-code="PT" data-placeholder="+351" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/pt.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Portugal&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;PT&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+351&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="PT">Portugal</option>
                                                                                                                        <option data-code="QA" data-placeholder="+974" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/qa.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Qatar&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;QA&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+974&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="QA">Qatar</option>
                                                                                                                        <option data-code="CG" data-placeholder="+242" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cg.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Republic of the Congo&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;CG&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+242&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="CG">Republic of the Congo</option>
                                                                                                                        <option data-code="RO" data-placeholder="+40" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ro.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Romania&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;RO&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+40&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="RO">Romania</option>
                                                                                                                        <option data-code="RU" data-placeholder="+7" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ru.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Russia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;RU&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+7&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="RU">Russia</option>
                                                                                                                        <option data-code="RW" data-placeholder="+250" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/rw.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Rwanda&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;RW&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+250&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="RW">Rwanda</option>
                                                                                                                        <option data-code="WS" data-placeholder="+685" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ws.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Samoa&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;WS&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+685&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="WS">Samoa</option>
                                                                                                                        <option data-code="SM" data-placeholder="+378" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sm.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;San Marino&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;SM&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+378&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="SM">San Marino</option>
                                                                                                                        <option data-code="ST" data-placeholder="+239" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/st.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Sao Tome and Principe&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;ST&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+239&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="ST">Sao Tome and Principe</option>
                                                                                                                        <option data-code="SA" data-placeholder="+966" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sa.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Saudi Arabia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;SA&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+966&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="SA">Saudi Arabia</option>
                                                                                                                        <option data-code="SN" data-placeholder="+221" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sn.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Senegal&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;SN&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+221&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="SN">Senegal</option>
                                                                                                                        <option data-code="RS" data-placeholder="+381" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/rs.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Serbia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;RS&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+381&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="RS">Serbia</option>
                                                                                                                        <option data-code="SC" data-placeholder="+248" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sc.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Seychelles&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;SC&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+248&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="SC">Seychelles</option>
                                                                                                                        <option data-code="SL" data-placeholder="+232" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sl.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Sierra Leone&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;SL&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+232&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="SL">Sierra Leone</option>
                                                                                                                        <option data-code="SG" data-placeholder="+65" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sg.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Singapore&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;SG&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+65&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="SG">Singapore</option>
                                                                                                                        <option data-code="SX" data-placeholder="+1721" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sx.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Sint Maarten&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;SX&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+1721&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="SX">Sint Maarten</option>
                                                                                                                        <option data-code="SK" data-placeholder="+421" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sk.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Slovakia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;SK&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+421&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="SK">Slovakia</option>
                                                                                                                        <option data-code="SI" data-placeholder="+386" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/si.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Slovenia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;SI&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+386&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="SI">Slovenia</option>
                                                                                                                        <option data-code="SB" data-placeholder="+677" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sb.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Solomon Islands&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;SB&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+677&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="SB">Solomon Islands</option>
                                                                                                                        <option data-code="SO" data-placeholder="+252" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/so.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Somalia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;SO&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+252&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="SO">Somalia</option>
                                                                                                                        <option data-code="ZA" data-placeholder="+27" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/za.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;South Africa&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;ZA&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+27&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="ZA">South Africa</option>
                                                                                                                        <option data-code="KR" data-placeholder="+82" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/kr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;South Korea&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;KR&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+82&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="KR">South Korea</option>
                                                                                                                        <option data-code="SS" data-placeholder="+211" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ss.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;South Sudan&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;SS&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+211&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="SS">South Sudan</option>
                                                                                                                        <option data-code="ES" data-placeholder="+34" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/es.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Spain&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;ES&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+34&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="ES">Spain</option>
                                                                                                                        <option data-code="LK" data-placeholder="+94" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/lk.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Sri Lanka&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;LK&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+94&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="LK">Sri Lanka</option>
                                                                                                                        <option data-code="SD" data-placeholder="+249" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sd.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Sudan&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;SD&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+249&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="SD">Sudan</option>
                                                                                                                        <option data-code="SR" data-placeholder="+597" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Suriname&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;SR&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+597&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="SR">Suriname</option>
                                                                                                                        <option data-code="SE" data-placeholder="+46" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/se.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Sweden&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;SE&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+46&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="SE">Sweden</option>
                                                                                                                        <option data-code="CH" data-placeholder="+41" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ch.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Switzerland&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;CH&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+41&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="CH">Switzerland</option>
                                                                                                                        <option data-code="SY" data-placeholder="+963" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sy.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Syria&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;SY&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+963&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="SY">Syria</option>
                                                                                                                        <option data-code="TJ" data-placeholder="+992" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/tj.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Tajikistan&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;TJ&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+992&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="TJ">Tajikistan</option>
                                                                                                                        <option data-code="TZ" data-placeholder="+255" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/tz.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Tanzania&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;TZ&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+255&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="TZ">Tanzania</option>
                                                                                                                        <option data-code="TH" data-placeholder="+66" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/th.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Thailand&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;TH&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+66&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="TH">Thailand</option>
                                                                                                                        <option data-code="TG" data-placeholder="+228" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/tg.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Togo&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;TG&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+228&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="TG">Togo</option>
                                                                                                                        <option data-code="TO" data-placeholder="+676" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/to.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Tonga&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;TO&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+676&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="TO">Tonga</option>
                                                                                                                        <option data-code="TT" data-placeholder="+1868" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/tt.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Trinidad and Tobago&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;TT&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+1868&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="TT">Trinidad and Tobago</option>
                                                                                                                        <option data-code="TN" data-placeholder="+216" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/tn.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Tunisia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;TN&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+216&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="TN">Tunisia</option>
                                                                                                                        <option data-code="TR" data-placeholder="+90" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/tr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Turkey&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;TR&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+90&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="TR">Turkey</option>
                                                                                                                        <option data-code="TM" data-placeholder="+993" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/tm.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Turkmenistan&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;TM&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+993&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="TM">Turkmenistan</option>
                                                                                                                        <option data-code="TV" data-placeholder="+688" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/tv.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Tuvalu&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;TV&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+688&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="TV">Tuvalu</option>
                                                                                                                        <option data-code="VI" data-placeholder="+1340" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/vi.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;U.S. Virgin Islands&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;VI&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+1340&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="VI">U.S. Virgin Islands</option>
                                                                                                                        <option data-code="UG" data-placeholder="+256" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ug.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Uganda&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;UG&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+256&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="UG">Uganda</option>
                                                                                                                        <option data-code="UA" data-placeholder="+380" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ua.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Ukraine&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;UA&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+380&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="UA">Ukraine</option>
                                                                                                                        <option data-code="AE" data-placeholder="+971" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ae.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;United Arab Emirates&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;AE&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+971&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="AE">United Arab Emirates</option>
                                                                                                                        <option data-code="GB" data-placeholder="+44" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/gb.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;United Kingdom&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;GB&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+44&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="GB">United Kingdom</option>
                                                                                                                        <option data-code="US" data-placeholder="+1" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/us.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;United States&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;US&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+1&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="US">United States</option>
                                                                                                                        <option data-code="UY" data-placeholder="+598" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/uy.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Uruguay&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;UY&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+598&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="UY">Uruguay</option>
                                                                                                                        <option data-code="UZ" data-placeholder="+998" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/uz.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Uzbekistan&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;UZ&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+998&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="UZ">Uzbekistan</option>
                                                                                                                        <option data-code="VU" data-placeholder="+678" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/vu.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Vanuatu&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;VU&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+678&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="VU">Vanuatu</option>
                                                                                                                        <option data-code="VE" data-placeholder="+58" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ve.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Venezuela&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;VE&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+58&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="VE">Venezuela</option>
                                                                                                                        <option data-code="VN" data-placeholder="+84" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/vn.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Vietnam&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;VN&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+84&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="VN">Vietnam</option>
                                                                                                                        <option data-code="YE" data-placeholder="+967" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ye.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Yemen&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;YE&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+967&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="YE">Yemen</option>
                                                                                                                        <option data-code="ZM" data-placeholder="+260" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/zm.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Zambia&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;ZM&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+260&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="ZM">Zambia</option>
                                                                                                                        <option data-code="ZW" data-placeholder="+263" data-content="&lt;div class=&quot;select-phone-code-item&quot;&gt;&lt;div class=&quot;select-phone-code-item__left&quot;&gt;&lt;div class=&quot;select-phone-code-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/zw.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country&quot;&gt;Zimbabwe&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__country-short&quot;&gt;ZW&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-phone-code-item__right&quot;&gt;&lt;div class=&quot;select-phone-code-item__code&quot;&gt;+263&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                                                                                        value="ZW">Zimbabwe</option>
                                                                                                                    </select>
                                                                                                                    <button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-7"
                                                                                                                    aria-haspopup="listbox" aria-expanded="false" title="AfghanistanAF+93">
                                                                                                                        <div class="filter-option">
                                                                                                                            <div class="filter-option-inner">
                                                                                                                                <div class="filter-option-inner-inner">
                                                                                                                                    <div class="select-phone-code-item">
                                                                                                                                        <div class="select-phone-code-item__left">
                                                                                                                                            <div class="select-phone-code-item__flag"><img class="image" src="/assets/optima/images/svg/flags/af.svg" alt=""></div>
                                                                                                                                            <div class="select-phone-code-item__country">Afghanistan</div>
                                                                                                                                            <div class="select-phone-code-item__country-short">AF</div>
                                                                                                                                        </div>
                                                                                                                                        <div class="select-phone-code-item__right">
                                                                                                                                            <div class="select-phone-code-item__code">+93</div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </button>
                                                                                                                    <div class="dropdown-menu ">
                                                                                                                        <div class="bs-searchbox">
                                                                                                                            <input type="search" class="form-control" autocomplete="off" placeholder="Search country or code" role="combobox" aria-label="Search"
                                                                                                                            aria-controls="bs-select-7" aria-autocomplete="list">
                                                                                                                        </div>
                                                                                                                        <div class="inner show" role="listbox" id="bs-select-7" tabindex="-1">
                                                                                                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-7"
                                                                                                                aria-haspopup="listbox" aria-expanded="false" title="IndiaIN+91">
                                                                                                                    <div class="filter-option">
                                                                                                                        <div class="filter-option-inner">
                                                                                                                            <div class="filter-option-inner-inner">
                                                                                                                                <div class="select-phone-code-item">
                                                                                                                                    <div class="select-phone-code-item__left">
                                                                                                                                        <div class="select-phone-code-item__flag"><img class="image" src="/assets/optima/images/svg/flags/in.svg" alt=""></div>
                                                                                                                                        <div class="select-phone-code-item__country">India</div>
                                                                                                                                        <div class="select-phone-code-item__country-short">IN</div>
                                                                                                                                    </div>
                                                                                                                                    <div class="select-phone-code-item__right">
                                                                                                                                        <div class="select-phone-code-item__code">+91</div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </button>
                                                                                                                <div class="dropdown-menu ">
                                                                                                                    <div class="bs-searchbox">
                                                                                                                        <input type="search" class="form-control" autocomplete="off" placeholder="Search country or code" role="combobox" aria-label="Search" aria-controls="bs-select-7"
                                                                                                                        aria-autocomplete="list" aria-activedescendant="bs-select-7-76">
                                                                                                                    </div>
                                                                                                                    <div class="inner show" role="listbox" id="bs-select-7" tabindex="-1">
                                                                                                                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>


                                                                                                        </div>
                                                                                                    </div>


                                                                                                </div>
                                                                                                <div class="acc-info-change-form-row-button">
                                                                                                    <div class="form-button-block">
                                                                                                        <button type="submit" class="green-gradient-btn">
                                                                                                            Save
                                                                                                        </button>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                            <input type="hidden" name="action" value="phone">

                                                                                        </div>





                                                                                    </div>
                                                                                    <div class="acc-info-item__state__right">
                                                                                        <div class="acc-info-close-button-block">
                                                                                            <button class="acc-info-close-button globalAccountSettingsPhoneChangeClose"></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>








                                                                    <div class="acc-info-item">
                                                                        <div class="acc-info-item__states">
                                                                            <div class="acc-info-item__state acc-info-item__state--unset globalAccountSettingsCountryUnset" style="display: none;">
                                                                                <div class="acc-info-item__state-inner">
                                                                                    <div class="acc-info-item__state__left">
                                                                                        <div class="acc-info-item__title">
                                                                                            Country
                                                                                        </div>
                                                                                        <div class="acc-info-not-set-block">
                                                                                            <div class="acc-info-not-set">
                                                                                                <div class="acc-info-not-set__title">
                                                                                                    INDIA
                                                                                                </div>
                                                                                                <div class="acc-info-not-set__icon">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="acc-info-item__state__right">
                                                                                        <div class="acc-info-set-button-block">
                                                                                            <button class="acc-info-set-button iconed-btn light-black-btn button--small acc-info-set-button--country globalAccountSettingsCountryButton">
                                                                                                <div class="iconed-btn__icon">
                                                                                                </div>
                                                                                                <div class="iconed-btn__text">
                                                                                                    Set
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="acc-info-item__state acc-info-item__state--set globalAccountSettingsCountrySet">
                                                                                <div class="acc-info-item__state-inner">
                                                                                    <div class="acc-info-item__state__left">
                                                                                        <div class="acc-info-item__title">
                                                                                            Country
                                                                                        </div>

                                                                                        <div class="acc-info-country-set-block">
                                                                                            <div class="acc-info-country-set globalAccountSettingsCountryActive">
                                                                                                <div class="acc-info-country-set__flag"><img class="image" src="/assets/optima/images/svg/flags/in.svg" alt=""></div>
                                                                                                <div class="acc-info-country-set__title">India</div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="acc-info-item__state__right">
                                                                                        <div class="acc-info-change-button-block">
                                                                                            <button class="acc-info-change-button iconed-btn light-black-btn button--small globalAccountSettingsCountryButton">
                                                                                                <div class="iconed-btn__icon">
                                                                                                </div>
                                                                                                <div class="iconed-btn__text">
                                                                                                    Change
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="acc-info-item__state acc-info-item__state--change globalAccountSettingsCountryChange" style="display: none;">
                                                                                <div class="acc-info-item__state-inner">
                                                                                    <div class="acc-info-item__state__left">
                                                                                        <div class="acc-info-item__title">
                                                                                            Country
                                                                                        </div>
                                                                                        <div class="acc-info-change-form-block">


                                                                                            <form class="register" method="post" action="https://oora3.com/user/update-profile" enctype="multipart/form-data">
                                                                                                <input type="hidden" name="_token" value="WwkSWZvaAd1j5hcDtpZQBiV4S9JaWsgGb79n3r0t">

                                                                                                <div class="acc-info-change-form-row">
                                                                                                    <div class="acc-info-change-form-row-field">

                                                                                                        <div class="field-block">
                                                                                                            <div class="field field--select">
                                                                                                                <div class="dropdown bootstrap-select select-country globalAccountSettingsCountrySelect">
                                                                                                                    <div class="dropdown bootstrap-select select-country globalAccountSettingsCountrySelect">
                                                                                                                        <select name="country" class="select-country globalAccountSettingsCountrySelect">
                                                                                                                            <option hidden="" selected="" disabled="" value="">
                                                                                                                                Select
                                                                                                                            </option>
                                                                                                                            <option data-name="Afghanistan" data-flag="/assets/optima/images/svg/flags/af.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/af.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Afghanistan&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="AF">
                                                                                                                                Afghanistan
                                                                                                                            </option>
                                                                                                                            <option data-name="Albania" data-flag="/assets/optima/images/svg/flags/al.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/al.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Albania&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="AL">
                                                                                                                                Albania
                                                                                                                            </option>
                                                                                                                            <option data-name="Algeria" data-flag="/assets/optima/images/svg/flags/dz.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/dz.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Algeria&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="DZ">
                                                                                                                                Algeria
                                                                                                                            </option>
                                                                                                                            <option data-name="Andorra" data-flag="/assets/optima/images/svg/flags/ad.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ad.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Andorra&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="AD">
                                                                                                                                Andorra
                                                                                                                            </option>
                                                                                                                            <option data-name="Angola" data-flag="/assets/optima/images/svg/flags/ao.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ao.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Angola&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="AO">
                                                                                                                                Angola
                                                                                                                            </option>
                                                                                                                            <option data-name="Antigua and barbuda" data-flag="/assets/optima/images/svg/flags/ag.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ag.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Antigua and barbuda&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="AG">
                                                                                                                                Antigua and barbuda
                                                                                                                            </option>
                                                                                                                            <option data-name="Argentina" data-flag="/assets/optima/images/svg/flags/ar.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ar.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Argentina&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="AR">
                                                                                                                                Argentina
                                                                                                                            </option>
                                                                                                                            <option data-name="Armenia" data-flag="/assets/optima/images/svg/flags/am.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/am.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Armenia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="AM">
                                                                                                                                Armenia
                                                                                                                            </option>
                                                                                                                            <option data-name="Aruba" data-flag="/assets/optima/images/svg/flags/aw.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/aw.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Aruba&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="AW">
                                                                                                                                Aruba
                                                                                                                            </option>
                                                                                                                            <option data-name="Australia" data-flag="/assets/optima/images/svg/flags/au.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/au.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Australia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="AU">
                                                                                                                                Australia
                                                                                                                            </option>
                                                                                                                            <option data-name="Austria" data-flag="/assets/optima/images/svg/flags/at.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/at.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Austria&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="AT">
                                                                                                                                Austria
                                                                                                                            </option>
                                                                                                                            <option data-name="Azerbaijan" data-flag="/assets/optima/images/svg/flags/az.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/az.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Azerbaijan&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="AZ">
                                                                                                                                Azerbaijan
                                                                                                                            </option>
                                                                                                                            <option data-name="Bahamas" data-flag="/assets/optima/images/svg/flags/bs.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bs.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Bahamas&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="BS">
                                                                                                                                Bahamas
                                                                                                                            </option>
                                                                                                                            <option data-name="Bahrain" data-flag="/assets/optima/images/svg/flags/bh.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bh.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Bahrain&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="BH">
                                                                                                                                Bahrain
                                                                                                                            </option>
                                                                                                                            <option data-name="Bangladesh" data-flag="/assets/optima/images/svg/flags/bd.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bd.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Bangladesh&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="BD">
                                                                                                                                Bangladesh
                                                                                                                            </option>
                                                                                                                            <option data-name="Barbados" data-flag="/assets/optima/images/svg/flags/bb.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bb.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Barbados&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="BB">
                                                                                                                                Barbados
                                                                                                                            </option>
                                                                                                                            <option data-name="Belarus" data-flag="/assets/optima/images/svg/flags/by.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/by.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Belarus&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="BY">
                                                                                                                                Belarus
                                                                                                                            </option>
                                                                                                                            <option data-name="Belgium" data-flag="/assets/optima/images/svg/flags/be.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/be.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Belgium&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="BE">
                                                                                                                                Belgium
                                                                                                                            </option>
                                                                                                                            <option data-name="Belize" data-flag="/assets/optima/images/svg/flags/bz.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bz.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Belize&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="BZ">
                                                                                                                                Belize
                                                                                                                            </option>
                                                                                                                            <option data-name="Benin" data-flag="/assets/optima/images/svg/flags/bj.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bj.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Benin&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="BJ">
                                                                                                                                Benin
                                                                                                                            </option>
                                                                                                                            <option data-name="Bhutan" data-flag="/assets/optima/images/svg/flags/bt.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bt.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Bhutan&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="BT">
                                                                                                                                Bhutan
                                                                                                                            </option>
                                                                                                                            <option data-name="Bolivia" data-flag="/assets/optima/images/svg/flags/bo.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bo.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Bolivia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="BO">
                                                                                                                                Bolivia
                                                                                                                            </option>
                                                                                                                            <option data-name="Bosnia and Herzegovina" data-flag="/assets/optima/images/svg/flags/ba.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ba.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Bosnia and Herzegovina&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="BA">
                                                                                                                                Bosnia and Herzegovina
                                                                                                                            </option>
                                                                                                                            <option data-name="Botswana" data-flag="/assets/optima/images/svg/flags/bw.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bw.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Botswana&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="BW">
                                                                                                                                Botswana
                                                                                                                            </option>
                                                                                                                            <option data-name="Brazil" data-flag="/assets/optima/images/svg/flags/br.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/br.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Brazil&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="BR">
                                                                                                                                Brazil
                                                                                                                            </option>
                                                                                                                            <option data-name="Brunei" data-flag="/assets/optima/images/svg/flags/bn.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bn.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Brunei&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="BN">
                                                                                                                                Brunei
                                                                                                                            </option>
                                                                                                                            <option data-name="Bulgaria" data-flag="/assets/optima/images/svg/flags/bg.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bg.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Bulgaria&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="BG">
                                                                                                                                Bulgaria
                                                                                                                            </option>
                                                                                                                            <option data-name="Burkina Faso" data-flag="/assets/optima/images/svg/flags/bf.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bf.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Burkina Faso&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="BF">
                                                                                                                                Burkina Faso
                                                                                                                            </option>
                                                                                                                            <option data-name="Burundi" data-flag="/assets/optima/images/svg/flags/bi.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/bi.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Burundi&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="BI">
                                                                                                                                Burundi
                                                                                                                            </option>
                                                                                                                            <option data-name="Cambodia" data-flag="/assets/optima/images/svg/flags/kh.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/kh.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Cambodia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="KH">
                                                                                                                                Cambodia
                                                                                                                            </option>
                                                                                                                            <option data-name="Cameroon" data-flag="/assets/optima/images/svg/flags/cm.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cm.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Cameroon&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="CM">
                                                                                                                                Cameroon
                                                                                                                            </option>
                                                                                                                            <option data-name="Canada" data-flag="/assets/optima/images/svg/flags/ca.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ca.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Canada&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="CA">
                                                                                                                                Canada
                                                                                                                            </option>
                                                                                                                            <option data-name="Cape Verde" data-flag="/assets/optima/images/svg/flags/cv.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cv.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Cape Verde&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="CV">
                                                                                                                                Cape Verde
                                                                                                                            </option>
                                                                                                                            <option data-name="Central African Republic" data-flag="/assets/optima/images/svg/flags/cf.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cf.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Central African Republic&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="CF">
                                                                                                                                Central African Republic
                                                                                                                            </option>
                                                                                                                            <option data-name="Chad" data-flag="/assets/optima/images/svg/flags/td.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/td.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Chad&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="TD">
                                                                                                                                Chad
                                                                                                                            </option>
                                                                                                                            <option data-name="Chile" data-flag="/assets/optima/images/svg/flags/cl.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cl.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Chile&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="CL">
                                                                                                                                Chile
                                                                                                                            </option>
                                                                                                                            <option data-name="China" data-flag="/assets/optima/images/svg/flags/cn.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cn.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;China&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="CN">
                                                                                                                                China
                                                                                                                            </option>
                                                                                                                            <option data-name="Colombia" data-flag="/assets/optima/images/svg/flags/co.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/co.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Colombia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="CO">
                                                                                                                                Colombia
                                                                                                                            </option>
                                                                                                                            <option data-name="Comoros" data-flag="/assets/optima/images/svg/flags/km.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/km.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Comoros&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="KM">
                                                                                                                                Comoros
                                                                                                                            </option>
                                                                                                                            <option data-name="Costa Rica" data-flag="/assets/optima/images/svg/flags/cr.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Costa Rica&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="CR">
                                                                                                                                Costa Rica
                                                                                                                            </option>
                                                                                                                            <option data-name="Croatia" data-flag="/assets/optima/images/svg/flags/hr.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/hr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Croatia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="HR">
                                                                                                                                Croatia
                                                                                                                            </option>
                                                                                                                            <option data-name="Cuba" data-flag="/assets/optima/images/svg/flags/cu.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cu.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Cuba&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="CU">
                                                                                                                                Cuba
                                                                                                                            </option>
                                                                                                                            <option data-name="Curacao" data-flag="/assets/optima/images/svg/flags/cw.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cw.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Curacao&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="CW">
                                                                                                                                Curacao
                                                                                                                            </option>
                                                                                                                            <option data-name="Cyprus" data-flag="/assets/optima/images/svg/flags/cy.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cy.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Cyprus&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="CY">
                                                                                                                                Cyprus
                                                                                                                            </option>
                                                                                                                            <option data-name="Czech Republic" data-flag="/assets/optima/images/svg/flags/cz.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cz.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Czech Republic&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="CZ">
                                                                                                                                Czech Republic
                                                                                                                            </option>
                                                                                                                            <option data-name="Democratic Republic of the Congo" data-flag="/assets/optima/images/svg/flags/cd.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cd.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Democratic Republic of the Congo&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="CD">
                                                                                                                                Democratic Republic of the Congo
                                                                                                                            </option>
                                                                                                                            <option data-name="Denmark" data-flag="/assets/optima/images/svg/flags/dk.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/dk.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Denmark&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="DK">
                                                                                                                                Denmark
                                                                                                                            </option>
                                                                                                                            <option data-name="Djibouti" data-flag="/assets/optima/images/svg/flags/dj.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/dj.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Djibouti&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="DJ">
                                                                                                                                Djibouti
                                                                                                                            </option>
                                                                                                                            <option data-name="Dominica" data-flag="/assets/optima/images/svg/flags/dm.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/dm.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Dominica&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="DM">
                                                                                                                                Dominica
                                                                                                                            </option>
                                                                                                                            <option data-name="Dominican Republic" data-flag="/assets/optima/images/svg/flags/do.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/do.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Dominican Republic&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="DO">
                                                                                                                                Dominican Republic
                                                                                                                            </option>
                                                                                                                            <option data-name="East Timor" data-flag="/assets/optima/images/svg/flags/tl.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/tl.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;East Timor&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="TL">
                                                                                                                                East Timor
                                                                                                                            </option>
                                                                                                                            <option data-name="Ecuador" data-flag="/assets/optima/images/svg/flags/ec.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ec.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Ecuador&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="EC">
                                                                                                                                Ecuador
                                                                                                                            </option>
                                                                                                                            <option data-name="Egypt" data-flag="/assets/optima/images/svg/flags/eg.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/eg.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Egypt&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="EG">
                                                                                                                                Egypt
                                                                                                                            </option>
                                                                                                                            <option data-name="El Salvador" data-flag="/assets/optima/images/svg/flags/sv.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sv.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;El Salvador&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="SV">
                                                                                                                                El Salvador
                                                                                                                            </option>
                                                                                                                            <option data-name="Equatorial Guinea" data-flag="/assets/optima/images/svg/flags/gq.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/gq.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Equatorial Guinea&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="GQ">
                                                                                                                                Equatorial Guinea
                                                                                                                            </option>
                                                                                                                            <option data-name="Eritrea" data-flag="/assets/optima/images/svg/flags/er.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/er.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Eritrea&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="ER">
                                                                                                                                Eritrea
                                                                                                                            </option>
                                                                                                                            <option data-name="Estonia" data-flag="/assets/optima/images/svg/flags/ee.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ee.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Estonia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="EE">
                                                                                                                                Estonia
                                                                                                                            </option>
                                                                                                                            <option data-name="Ethiopia" data-flag="/assets/optima/images/svg/flags/et.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/et.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Ethiopia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="ET">
                                                                                                                                Ethiopia
                                                                                                                            </option>
                                                                                                                            <option data-name="Fiji" data-flag="/assets/optima/images/svg/flags/fj.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/fj.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Fiji&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="FJ">
                                                                                                                                Fiji
                                                                                                                            </option>
                                                                                                                            <option data-name="Finland" data-flag="/assets/optima/images/svg/flags/fi.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/fi.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Finland&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="FI">
                                                                                                                                Finland
                                                                                                                            </option>
                                                                                                                            <option data-name="France" data-flag="/assets/optima/images/svg/flags/fr.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/fr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;France&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="FR">
                                                                                                                                France
                                                                                                                            </option>
                                                                                                                            <option data-name="Gabon" data-flag="/assets/optima/images/svg/flags/ga.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ga.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Gabon&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="GA">
                                                                                                                                Gabon
                                                                                                                            </option>
                                                                                                                            <option data-name="Gambia" data-flag="/assets/optima/images/svg/flags/gm.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/gm.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Gambia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="GM">
                                                                                                                                Gambia
                                                                                                                            </option>
                                                                                                                            <option data-name="Georgia" data-flag="/assets/optima/images/svg/flags/ge.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ge.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Georgia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="GE">
                                                                                                                                Georgia
                                                                                                                            </option>
                                                                                                                            <option data-name="Germany" data-flag="/assets/optima/images/svg/flags/de.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/de.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Germany&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="DE">
                                                                                                                                Germany
                                                                                                                            </option>
                                                                                                                            <option data-name="Ghana" data-flag="/assets/optima/images/svg/flags/gh.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/gh.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Ghana&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="GH">
                                                                                                                                Ghana
                                                                                                                            </option>
                                                                                                                            <option data-name="Greece" data-flag="/assets/optima/images/svg/flags/gr.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/gr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Greece&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="GR">
                                                                                                                                Greece
                                                                                                                            </option>
                                                                                                                            <option data-name="Grenada" data-flag="/assets/optima/images/svg/flags/gd.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/gd.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Grenada&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="GD">
                                                                                                                                Grenada
                                                                                                                            </option>
                                                                                                                            <option data-name="Guatemala" data-flag="/assets/optima/images/svg/flags/gt.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/gt.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Guatemala&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="GT">
                                                                                                                                Guatemala
                                                                                                                            </option>
                                                                                                                            <option data-name="Guinea" data-flag="/assets/optima/images/svg/flags/gn.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/gn.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Guinea&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="GN">
                                                                                                                                Guinea
                                                                                                                            </option>
                                                                                                                            <option data-name="Guinea-Bissau" data-flag="/assets/optima/images/svg/flags/gw.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/gw.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Guinea-Bissau&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="GW">
                                                                                                                                Guinea-Bissau
                                                                                                                            </option>
                                                                                                                            <option data-name="Haiti" data-flag="/assets/optima/images/svg/flags/ht.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ht.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Haiti&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="HT">
                                                                                                                                Haiti
                                                                                                                            </option>
                                                                                                                            <option data-name="Honduras" data-flag="/assets/optima/images/svg/flags/hn.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/hn.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Honduras&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="HN">
                                                                                                                                Honduras
                                                                                                                            </option>
                                                                                                                            <option data-name="Hong Kong" data-flag="/assets/optima/images/svg/flags/hk.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/hk.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Hong Kong&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="HK">
                                                                                                                                Hong Kong
                                                                                                                            </option>
                                                                                                                            <option data-name="Hungary" data-flag="/assets/optima/images/svg/flags/hu.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/hu.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Hungary&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="HU">
                                                                                                                                Hungary
                                                                                                                            </option>
                                                                                                                            <option data-name="Iceland" data-flag="/assets/optima/images/svg/flags/is.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/is.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Iceland&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="IS">
                                                                                                                                Iceland
                                                                                                                            </option>
                                                                                                                            <option data-name="India" data-flag="/assets/optima/images/svg/flags/in.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/in.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;India&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="IN">
                                                                                                                                India
                                                                                                                            </option>
                                                                                                                            <option data-name="Indonesia" data-flag="/assets/optima/images/svg/flags/id.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/id.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Indonesia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="ID">
                                                                                                                                Indonesia
                                                                                                                            </option>
                                                                                                                            <option data-name="Iran" data-flag="/assets/optima/images/svg/flags/ir.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ir.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Iran&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="IR">
                                                                                                                                Iran
                                                                                                                            </option>
                                                                                                                            <option data-name="Iraq" data-flag="/assets/optima/images/svg/flags/iq.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/iq.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Iraq&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="IQ">
                                                                                                                                Iraq
                                                                                                                            </option>
                                                                                                                            <option data-name="Ireland" data-flag="/assets/optima/images/svg/flags/ie.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ie.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Ireland&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="IE">
                                                                                                                                Ireland
                                                                                                                            </option>
                                                                                                                            <option data-name="Israel" data-flag="/assets/optima/images/svg/flags/il.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/il.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Israel&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="IL">
                                                                                                                                Israel
                                                                                                                            </option>
                                                                                                                            <option data-name="Italy" data-flag="/assets/optima/images/svg/flags/it.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/it.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Italy&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="IT">
                                                                                                                                Italy
                                                                                                                            </option>
                                                                                                                            <option data-name="Ivory Coast" data-flag="/assets/optima/images/svg/flags/ci.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ci.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Ivory Coast&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="CI">
                                                                                                                                Ivory Coast
                                                                                                                            </option>
                                                                                                                            <option data-name="Jamaica" data-flag="/assets/optima/images/svg/flags/jm.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/jm.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Jamaica&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="JM">
                                                                                                                                Jamaica
                                                                                                                            </option>
                                                                                                                            <option data-name="Japan" data-flag="/assets/optima/images/svg/flags/jp.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/jp.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Japan&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="JP">
                                                                                                                                Japan
                                                                                                                            </option>
                                                                                                                            <option data-name="Jordan" data-flag="/assets/optima/images/svg/flags/jo.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/jo.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Jordan&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="JO">
                                                                                                                                Jordan
                                                                                                                            </option>
                                                                                                                            <option data-name="Kazakhstan" data-flag="/assets/optima/images/svg/flags/kz.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/kz.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Kazakhstan&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="KZ">
                                                                                                                                Kazakhstan
                                                                                                                            </option>
                                                                                                                            <option data-name="Kenya" data-flag="/assets/optima/images/svg/flags/ke.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ke.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Kenya&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="KE">
                                                                                                                                Kenya
                                                                                                                            </option>
                                                                                                                            <option data-name="Kiribati" data-flag="/assets/optima/images/svg/flags/ki.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ki.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Kiribati&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="KI">
                                                                                                                                Kiribati
                                                                                                                            </option>
                                                                                                                            <option data-name="Kuwait" data-flag="/assets/optima/images/svg/flags/kw.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/kw.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Kuwait&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="KW">
                                                                                                                                Kuwait
                                                                                                                            </option>
                                                                                                                            <option data-name="Kyrgyzstan" data-flag="/assets/optima/images/svg/flags/kg.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/kg.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Kyrgyzstan&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="KG">
                                                                                                                                Kyrgyzstan
                                                                                                                            </option>
                                                                                                                            <option data-name="Laos" data-flag="/assets/optima/images/svg/flags/la.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/la.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Laos&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="LA">
                                                                                                                                Laos
                                                                                                                            </option>
                                                                                                                            <option data-name="Latvia" data-flag="/assets/optima/images/svg/flags/lv.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/lv.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Latvia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="LV">
                                                                                                                                Latvia
                                                                                                                            </option>
                                                                                                                            <option data-name="Lebanon" data-flag="/assets/optima/images/svg/flags/lb.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/lb.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Lebanon&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="LB">
                                                                                                                                Lebanon
                                                                                                                            </option>
                                                                                                                            <option data-name="Lesotho" data-flag="/assets/optima/images/svg/flags/ls.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ls.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Lesotho&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="LS">
                                                                                                                                Lesotho
                                                                                                                            </option>
                                                                                                                            <option data-name="Liberia" data-flag="/assets/optima/images/svg/flags/lr.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/lr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Liberia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="LR">
                                                                                                                                Liberia
                                                                                                                            </option>
                                                                                                                            <option data-name="Libya" data-flag="/assets/optima/images/svg/flags/ly.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ly.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Libya&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="LY">
                                                                                                                                Libya
                                                                                                                            </option>
                                                                                                                            <option data-name="Liechtenstein" data-flag="/assets/optima/images/svg/flags/li.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/li.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Liechtenstein&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="LI">
                                                                                                                                Liechtenstein
                                                                                                                            </option>
                                                                                                                            <option data-name="Lithuania" data-flag="/assets/optima/images/svg/flags/lt.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/lt.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Lithuania&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="LT">
                                                                                                                                Lithuania
                                                                                                                            </option>
                                                                                                                            <option data-name="Luxembourg" data-flag="/assets/optima/images/svg/flags/lu.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/lu.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Luxembourg&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="LU">
                                                                                                                                Luxembourg
                                                                                                                            </option>
                                                                                                                            <option data-name="Macedonia" data-flag="/assets/optima/images/svg/flags/mk.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mk.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Macedonia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="MK">
                                                                                                                                Macedonia
                                                                                                                            </option>
                                                                                                                            <option data-name="Madagascar" data-flag="/assets/optima/images/svg/flags/mg.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mg.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Madagascar&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="MG">
                                                                                                                                Madagascar
                                                                                                                            </option>
                                                                                                                            <option data-name="Malawi" data-flag="/assets/optima/images/svg/flags/mw.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mw.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Malawi&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="MW">
                                                                                                                                Malawi
                                                                                                                            </option>
                                                                                                                            <option data-name="Malaysia" data-flag="/assets/optima/images/svg/flags/my.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/my.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Malaysia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="MY">
                                                                                                                                Malaysia
                                                                                                                            </option>
                                                                                                                            <option data-name="Maldives" data-flag="/assets/optima/images/svg/flags/mv.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mv.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Maldives&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="MV">
                                                                                                                                Maldives
                                                                                                                            </option>
                                                                                                                            <option data-name="Mali" data-flag="/assets/optima/images/svg/flags/ml.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ml.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Mali&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="ML">
                                                                                                                                Mali
                                                                                                                            </option>
                                                                                                                            <option data-name="Malta" data-flag="/assets/optima/images/svg/flags/mt.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mt.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Malta&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="MT">
                                                                                                                                Malta
                                                                                                                            </option>
                                                                                                                            <option data-name="Marshall Islands" data-flag="/assets/optima/images/svg/flags/mh.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mh.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Marshall Islands&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="MH">
                                                                                                                                Marshall Islands
                                                                                                                            </option>
                                                                                                                            <option data-name="Mauritania" data-flag="/assets/optima/images/svg/flags/mr.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Mauritania&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="MR">
                                                                                                                                Mauritania
                                                                                                                            </option>
                                                                                                                            <option data-name="Mauritius" data-flag="/assets/optima/images/svg/flags/mu.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mu.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Mauritius&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="MU">
                                                                                                                                Mauritius
                                                                                                                            </option>
                                                                                                                            <option data-name="Mexico" data-flag="/assets/optima/images/svg/flags/mx.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mx.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Mexico&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="MX">
                                                                                                                                Mexico
                                                                                                                            </option>
                                                                                                                            <option data-name="Micronesia" data-flag="/assets/optima/images/svg/flags/fm.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/fm.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Micronesia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="FM">
                                                                                                                                Micronesia
                                                                                                                            </option>
                                                                                                                            <option data-name="Moldova" data-flag="/assets/optima/images/svg/flags/md.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/md.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Moldova&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="MD">
                                                                                                                                Moldova
                                                                                                                            </option>
                                                                                                                            <option data-name="Monaco" data-flag="/assets/optima/images/svg/flags/mc.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mc.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Monaco&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="MC">
                                                                                                                                Monaco
                                                                                                                            </option>
                                                                                                                            <option data-name="Mongolia" data-flag="/assets/optima/images/svg/flags/mn.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mn.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Mongolia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="MN">
                                                                                                                                Mongolia
                                                                                                                            </option>
                                                                                                                            <option data-name="Montenegro" data-flag="/assets/optima/images/svg/flags/me.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/me.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Montenegro&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="ME">
                                                                                                                                Montenegro
                                                                                                                            </option>
                                                                                                                            <option data-name="Morocco" data-flag="/assets/optima/images/svg/flags/ma.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ma.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Morocco&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="MA">
                                                                                                                                Morocco
                                                                                                                            </option>
                                                                                                                            <option data-name="Mozambique" data-flag="/assets/optima/images/svg/flags/mz.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mz.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Mozambique&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="MZ">
                                                                                                                                Mozambique
                                                                                                                            </option>
                                                                                                                            <option data-name="Myanmar" data-flag="/assets/optima/images/svg/flags/mm.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/mm.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Myanmar&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="MM">
                                                                                                                                Myanmar
                                                                                                                            </option>
                                                                                                                            <option data-name="Namibia" data-flag="/assets/optima/images/svg/flags/na.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/na.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Namibia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="NA">
                                                                                                                                Namibia
                                                                                                                            </option>
                                                                                                                            <option data-name="Nauru" data-flag="/assets/optima/images/svg/flags/nr.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/nr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Nauru&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="NR">
                                                                                                                                Nauru
                                                                                                                            </option>
                                                                                                                            <option data-name="Nepal" data-flag="/assets/optima/images/svg/flags/np.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/np.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Nepal&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="NP">
                                                                                                                                Nepal
                                                                                                                            </option>
                                                                                                                            <option data-name="Netherlands" data-flag="/assets/optima/images/svg/flags/nl.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/nl.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Netherlands&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="NL">
                                                                                                                                Netherlands
                                                                                                                            </option>
                                                                                                                            <option data-name="New Zealand" data-flag="/assets/optima/images/svg/flags/nz.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/nz.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;New Zealand&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="NZ">
                                                                                                                                New Zealand
                                                                                                                            </option>
                                                                                                                            <option data-name="Nicaragua" data-flag="/assets/optima/images/svg/flags/ni.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ni.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Nicaragua&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="NI">
                                                                                                                                Nicaragua
                                                                                                                            </option>
                                                                                                                            <option data-name="Niger" data-flag="/assets/optima/images/svg/flags/ne.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ne.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Niger&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="NE">
                                                                                                                                Niger
                                                                                                                            </option>
                                                                                                                            <option data-name="Nigeria" data-flag="/assets/optima/images/svg/flags/ng.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ng.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Nigeria&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="NG">
                                                                                                                                Nigeria
                                                                                                                            </option>
                                                                                                                            <option data-name="North Korea" data-flag="/assets/optima/images/svg/flags/kp.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/kp.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;North Korea&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="KP">
                                                                                                                                North Korea
                                                                                                                            </option>
                                                                                                                            <option data-name="Norway" data-flag="/assets/optima/images/svg/flags/no.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/no.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Norway&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="NO">
                                                                                                                                Norway
                                                                                                                            </option>
                                                                                                                            <option data-name="Oman" data-flag="/assets/optima/images/svg/flags/om.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/om.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Oman&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="OM">
                                                                                                                                Oman
                                                                                                                            </option>
                                                                                                                            <option data-name="Pakistan" data-flag="/assets/optima/images/svg/flags/pk.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/pk.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Pakistan&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="PK">
                                                                                                                                Pakistan
                                                                                                                            </option>
                                                                                                                            <option data-name="Palau" data-flag="/assets/optima/images/svg/flags/pw.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/pw.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Palau&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="PW">
                                                                                                                                Palau
                                                                                                                            </option>
                                                                                                                            <option data-name="Palestinian Territory" data-flag="/assets/optima/images/svg/flags/ps.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ps.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Palestinian Territory&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="PS">
                                                                                                                                Palestinian Territory
                                                                                                                            </option>
                                                                                                                            <option data-name="Panama" data-flag="/assets/optima/images/svg/flags/pa.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/pa.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Panama&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="PA">
                                                                                                                                Panama
                                                                                                                            </option>
                                                                                                                            <option data-name="Papua New Guinea" data-flag="/assets/optima/images/svg/flags/pg.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/pg.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Papua New Guinea&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="PG">
                                                                                                                                Papua New Guinea
                                                                                                                            </option>
                                                                                                                            <option data-name="Paraguay" data-flag="/assets/optima/images/svg/flags/py.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/py.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Paraguay&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="PY">
                                                                                                                                Paraguay
                                                                                                                            </option>
                                                                                                                            <option data-name="Peru" data-flag="/assets/optima/images/svg/flags/pe.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/pe.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Peru&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="PE">
                                                                                                                                Peru
                                                                                                                            </option>
                                                                                                                            <option data-name="Philippines" data-flag="/assets/optima/images/svg/flags/ph.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ph.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Philippines&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="PH">
                                                                                                                                Philippines
                                                                                                                            </option>
                                                                                                                            <option data-name="Poland" data-flag="/assets/optima/images/svg/flags/pl.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/pl.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Poland&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="PL">
                                                                                                                                Poland
                                                                                                                            </option>
                                                                                                                            <option data-name="Portugal" data-flag="/assets/optima/images/svg/flags/pt.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/pt.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Portugal&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="PT">
                                                                                                                                Portugal
                                                                                                                            </option>
                                                                                                                            <option data-name="Qatar" data-flag="/assets/optima/images/svg/flags/qa.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/qa.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Qatar&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="QA">
                                                                                                                                Qatar
                                                                                                                            </option>
                                                                                                                            <option data-name="Republic of the Congo" data-flag="/assets/optima/images/svg/flags/cg.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/cg.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Republic of the Congo&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="CG">
                                                                                                                                Republic of the Congo
                                                                                                                            </option>
                                                                                                                            <option data-name="Romania" data-flag="/assets/optima/images/svg/flags/ro.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ro.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Romania&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="RO">
                                                                                                                                Romania
                                                                                                                            </option>
                                                                                                                            <option data-name="Russia" data-flag="/assets/optima/images/svg/flags/ru.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ru.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Russia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="RU">
                                                                                                                                Russia
                                                                                                                            </option>
                                                                                                                            <option data-name="Rwanda" data-flag="/assets/optima/images/svg/flags/rw.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/rw.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Rwanda&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="RW">
                                                                                                                                Rwanda
                                                                                                                            </option>
                                                                                                                            <option data-name="Samoa" data-flag="/assets/optima/images/svg/flags/ws.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ws.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Samoa&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="WS">
                                                                                                                                Samoa
                                                                                                                            </option>
                                                                                                                            <option data-name="San Marino" data-flag="/assets/optima/images/svg/flags/sm.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sm.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;San Marino&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="SM">
                                                                                                                                San Marino
                                                                                                                            </option>
                                                                                                                            <option data-name="Sao Tome and Principe" data-flag="/assets/optima/images/svg/flags/st.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/st.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Sao Tome and Principe&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="ST">
                                                                                                                                Sao Tome and Principe
                                                                                                                            </option>
                                                                                                                            <option data-name="Saudi Arabia" data-flag="/assets/optima/images/svg/flags/sa.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sa.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Saudi Arabia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="SA">
                                                                                                                                Saudi Arabia
                                                                                                                            </option>
                                                                                                                            <option data-name="Senegal" data-flag="/assets/optima/images/svg/flags/sn.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sn.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Senegal&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="SN">
                                                                                                                                Senegal
                                                                                                                            </option>
                                                                                                                            <option data-name="Serbia" data-flag="/assets/optima/images/svg/flags/rs.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/rs.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Serbia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="RS">
                                                                                                                                Serbia
                                                                                                                            </option>
                                                                                                                            <option data-name="Seychelles" data-flag="/assets/optima/images/svg/flags/sc.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sc.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Seychelles&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="SC">
                                                                                                                                Seychelles
                                                                                                                            </option>
                                                                                                                            <option data-name="Sierra Leone" data-flag="/assets/optima/images/svg/flags/sl.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sl.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Sierra Leone&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="SL">
                                                                                                                                Sierra Leone
                                                                                                                            </option>
                                                                                                                            <option data-name="Singapore" data-flag="/assets/optima/images/svg/flags/sg.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sg.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Singapore&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="SG">
                                                                                                                                Singapore
                                                                                                                            </option>
                                                                                                                            <option data-name="Sint Maarten" data-flag="/assets/optima/images/svg/flags/sx.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sx.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Sint Maarten&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="SX">
                                                                                                                                Sint Maarten
                                                                                                                            </option>
                                                                                                                            <option data-name="Slovakia" data-flag="/assets/optima/images/svg/flags/sk.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sk.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Slovakia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="SK">
                                                                                                                                Slovakia
                                                                                                                            </option>
                                                                                                                            <option data-name="Slovenia" data-flag="/assets/optima/images/svg/flags/si.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/si.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Slovenia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="SI">
                                                                                                                                Slovenia
                                                                                                                            </option>
                                                                                                                            <option data-name="Solomon Islands" data-flag="/assets/optima/images/svg/flags/sb.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sb.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Solomon Islands&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="SB">
                                                                                                                                Solomon Islands
                                                                                                                            </option>
                                                                                                                            <option data-name="Somalia" data-flag="/assets/optima/images/svg/flags/so.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/so.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Somalia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="SO">
                                                                                                                                Somalia
                                                                                                                            </option>
                                                                                                                            <option data-name="South Africa" data-flag="/assets/optima/images/svg/flags/za.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/za.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;South Africa&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="ZA">
                                                                                                                                South Africa
                                                                                                                            </option>
                                                                                                                            <option data-name="South Korea" data-flag="/assets/optima/images/svg/flags/kr.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/kr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;South Korea&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="KR">
                                                                                                                                South Korea
                                                                                                                            </option>
                                                                                                                            <option data-name="South Sudan" data-flag="/assets/optima/images/svg/flags/ss.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ss.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;South Sudan&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="SS">
                                                                                                                                South Sudan
                                                                                                                            </option>
                                                                                                                            <option data-name="Spain" data-flag="/assets/optima/images/svg/flags/es.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/es.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Spain&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="ES">
                                                                                                                                Spain
                                                                                                                            </option>
                                                                                                                            <option data-name="Sri Lanka" data-flag="/assets/optima/images/svg/flags/lk.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/lk.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Sri Lanka&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="LK">
                                                                                                                                Sri Lanka
                                                                                                                            </option>
                                                                                                                            <option data-name="Sudan" data-flag="/assets/optima/images/svg/flags/sd.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sd.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Sudan&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="SD">
                                                                                                                                Sudan
                                                                                                                            </option>
                                                                                                                            <option data-name="Suriname" data-flag="/assets/optima/images/svg/flags/sr.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Suriname&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="SR">
                                                                                                                                Suriname
                                                                                                                            </option>
                                                                                                                            <option data-name="Sweden" data-flag="/assets/optima/images/svg/flags/se.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/se.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Sweden&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="SE">
                                                                                                                                Sweden
                                                                                                                            </option>
                                                                                                                            <option data-name="Switzerland" data-flag="/assets/optima/images/svg/flags/ch.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ch.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Switzerland&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="CH">
                                                                                                                                Switzerland
                                                                                                                            </option>
                                                                                                                            <option data-name="Syria" data-flag="/assets/optima/images/svg/flags/sy.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/sy.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Syria&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="SY">
                                                                                                                                Syria
                                                                                                                            </option>
                                                                                                                            <option data-name="Tajikistan" data-flag="/assets/optima/images/svg/flags/tj.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/tj.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Tajikistan&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="TJ">
                                                                                                                                Tajikistan
                                                                                                                            </option>
                                                                                                                            <option data-name="Tanzania" data-flag="/assets/optima/images/svg/flags/tz.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/tz.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Tanzania&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="TZ">
                                                                                                                                Tanzania
                                                                                                                            </option>
                                                                                                                            <option data-name="Thailand" data-flag="/assets/optima/images/svg/flags/th.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/th.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Thailand&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="TH">
                                                                                                                                Thailand
                                                                                                                            </option>
                                                                                                                            <option data-name="Togo" data-flag="/assets/optima/images/svg/flags/tg.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/tg.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Togo&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="TG">
                                                                                                                                Togo
                                                                                                                            </option>
                                                                                                                            <option data-name="Tonga" data-flag="/assets/optima/images/svg/flags/to.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/to.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Tonga&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="TO">
                                                                                                                                Tonga
                                                                                                                            </option>
                                                                                                                            <option data-name="Trinidad and Tobago" data-flag="/assets/optima/images/svg/flags/tt.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/tt.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Trinidad and Tobago&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="TT">
                                                                                                                                Trinidad and Tobago
                                                                                                                            </option>
                                                                                                                            <option data-name="Tunisia" data-flag="/assets/optima/images/svg/flags/tn.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/tn.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Tunisia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="TN">
                                                                                                                                Tunisia
                                                                                                                            </option>
                                                                                                                            <option data-name="Turkey" data-flag="/assets/optima/images/svg/flags/tr.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/tr.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Turkey&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="TR">
                                                                                                                                Turkey
                                                                                                                            </option>
                                                                                                                            <option data-name="Turkmenistan" data-flag="/assets/optima/images/svg/flags/tm.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/tm.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Turkmenistan&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="TM">
                                                                                                                                Turkmenistan
                                                                                                                            </option>
                                                                                                                            <option data-name="Tuvalu" data-flag="/assets/optima/images/svg/flags/tv.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/tv.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Tuvalu&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="TV">
                                                                                                                                Tuvalu
                                                                                                                            </option>
                                                                                                                            <option data-name="U.S. Virgin Islands" data-flag="/assets/optima/images/svg/flags/vi.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/vi.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;U.S. Virgin Islands&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="VI">
                                                                                                                                U.S. Virgin Islands
                                                                                                                            </option>
                                                                                                                            <option data-name="Uganda" data-flag="/assets/optima/images/svg/flags/ug.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ug.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Uganda&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="UG">
                                                                                                                                Uganda
                                                                                                                            </option>
                                                                                                                            <option data-name="Ukraine" data-flag="/assets/optima/images/svg/flags/ua.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ua.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Ukraine&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="UA">
                                                                                                                                Ukraine
                                                                                                                            </option>
                                                                                                                            <option data-name="United Arab Emirates" data-flag="/assets/optima/images/svg/flags/ae.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ae.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;United Arab Emirates&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="AE">
                                                                                                                                United Arab Emirates
                                                                                                                            </option>
                                                                                                                            <option data-name="United Kingdom" data-flag="/assets/optima/images/svg/flags/gb.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/gb.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;United Kingdom&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="GB">
                                                                                                                                United Kingdom
                                                                                                                            </option>
                                                                                                                            <option data-name="United States" data-flag="/assets/optima/images/svg/flags/us.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/us.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;United States&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="US">
                                                                                                                                United States
                                                                                                                            </option>
                                                                                                                            <option data-name="Uruguay" data-flag="/assets/optima/images/svg/flags/uy.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/uy.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Uruguay&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="UY">
                                                                                                                                Uruguay
                                                                                                                            </option>
                                                                                                                            <option data-name="Uzbekistan" data-flag="/assets/optima/images/svg/flags/uz.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/uz.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Uzbekistan&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="UZ">
                                                                                                                                Uzbekistan
                                                                                                                            </option>
                                                                                                                            <option data-name="Vanuatu" data-flag="/assets/optima/images/svg/flags/vu.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/vu.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Vanuatu&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="VU">
                                                                                                                                Vanuatu
                                                                                                                            </option>
                                                                                                                            <option data-name="Venezuela" data-flag="/assets/optima/images/svg/flags/ve.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ve.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Venezuela&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="VE">
                                                                                                                                Venezuela
                                                                                                                            </option>
                                                                                                                            <option data-name="Vietnam" data-flag="/assets/optima/images/svg/flags/vn.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/vn.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Vietnam&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="VN">
                                                                                                                                Vietnam
                                                                                                                            </option>
                                                                                                                            <option data-name="Yemen" data-flag="/assets/optima/images/svg/flags/ye.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/ye.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Yemen&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="YE">
                                                                                                                                Yemen
                                                                                                                            </option>
                                                                                                                            <option data-name="Zambia" data-flag="/assets/optima/images/svg/flags/zm.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/zm.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Zambia&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="ZM">
                                                                                                                                Zambia
                                                                                                                            </option>
                                                                                                                            <option data-name="Zimbabwe" data-flag="/assets/optima/images/svg/flags/zw.svg" data-content="&lt;div class=&quot;select-country-item&quot;&gt;&lt;div class=&quot;select-country-item__flag&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;/assets/optima/images/svg/flags/zw.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;select-country-item__text&quot;&gt;Zimbabwe&lt;/div&gt;&lt;/div&gt;"
                                                                                                                            value="ZW">
                                                                                                                                Zimbabwe
                                                                                                                            </option>
                                                                                                                        </select>
                                                                                                                        <button type="button" tabindex="-1" class="btn dropdown-toggle bs-placeholder btn-light" data-bs-toggle="dropdown" role="combobox"
                                                                                                                        aria-owns="bs-select-6" aria-haspopup="listbox" aria-expanded="false" title="Select country">
                                                                                                                            <div class="filter-option">
                                                                                                                                <div class="filter-option-inner">
                                                                                                                                    <div class="filter-option-inner-inner">Select country</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </button>
                                                                                                                        <div class="dropdown-menu ">
                                                                                                                            <div class="bs-searchbox">
                                                                                                                                <input type="search" class="form-control" autocomplete="off" placeholder="Search country" role="combobox" aria-label="Search" aria-controls="bs-select-6"
                                                                                                                                aria-autocomplete="list">
                                                                                                                            </div>
                                                                                                                            <div class="inner show" role="listbox" id="bs-select-6" tabindex="-1">
                                                                                                                                <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-6"
                                                                                                                    aria-haspopup="listbox" aria-expanded="false" title="India">
                                                                                                                        <div class="filter-option">
                                                                                                                            <div class="filter-option-inner">
                                                                                                                                <div class="filter-option-inner-inner">
                                                                                                                                    <div class="select-country-item">
                                                                                                                                        <div class="select-country-item__flag">



                                                                                                                                            <img class="image" src="/assets/optima/images/svg/flags/in.svg" alt=""></div>



                                                                                                                                        <div class="select-country-item__text">India</div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>




                                                                                                                    </button>







                                                                                                                    <div class="dropdown-menu ">
                                                                                                                        <div class="bs-searchbox">


                                                                                                                            <input type="search" class="form-control" autocomplete="off" placeholder="Search country" role="combobox" aria-label="Search" aria-controls="bs-select-6" aria-autocomplete="list" aria-activedescendant="bs-select-6-76">
                                                                                                                        </div>
                                                                                                                        <div class="inner show" role="listbox" id="bs-select-6" tabindex="-1">
                                                                                                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>


                                                                                                    </div>
                                                                                                    <div class="acc-info-change-form-row-button">
                                                                                                        <div class="form-button-block">
                                                                                                            <button type="submit" class="green-gradient-btn">
                                                                                                                Save
                                                                                                            </button>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="acc-info-item__state__right">
                                                                                        <div class="acc-info-close-button-block">
                                                                                            <button class="acc-info-close-button globalAccountSettingsCountryChangeClose"></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>






















                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>











                                                <div class="setting-panel-block">
                                                    <div class="setting-panel">
                                                        <div class="setting-panel__top">
                                                            <div class="setting-panel__top-left">
                                                                <div class="setting-panel__title">
                                                                    Telegram account
                                                                </div>
                                                            </div>
                                                            <div class="setting-panel__top-right">
                                                            </div>
                                                        </div>
                                                        <div class="setting-panel__content">
                                                            <div class="acc-telegram-item-block">
                                                                <div class="acc-telegram-item">
                                                                    <div class="acc-telegram-item__states">




                                                                        <div class="acc-telegram-item__state acc-telegram-item__state--connected globalAccountSettingsTelegramDisconnected" style="display: block;">
                                                                            <div class="acc-telegram-item__state-inner">
                                                                                <div class="acc-telegram-item__state__left">
                                                                                    <div class="acc-telegram-disconnected-info-block">
                                                                                        <div class="acc-telegram-disconnected-info">
                                                                                            <div class="acc-telegram-disconnected-info__title">
                                                                                                Connect your Telegram account
                                                                                            </div>
                                                                                            <div class="acc-telegram-disconnected-info__descr">
                                                                                                Link your Telegram account for a seamless login to your wallet and to use of the Telegram app
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="acc-telegram-item__state__right">
                                                                                    <div class="acc-telegram-connect-button-block">
                                                                                        <button type="button" class="optimaTelegramAuth acc-telegram-connect-button iconed-btn">
                                                                                            <div class="iconed-btn__icon">
                                                                                            </div>
                                                                                            <div class="iconed-btn__text">
                                                                                                Connect Telegram
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>




                                                                        <div class="acc-telegram-item__state acc-telegram-item__state--disconnected globalAccountSettingsTelegramConnected" style="display: none;">
                                                                            <div class="acc-telegram-item__state-inner">
                                                                                <div class="acc-telegram-item__state__left">



                                                                                    <div class="acc-telegram-connected-info-block">
                                                                                        <div class="acc-telegram-connected-info">
                                                                                            <div class="acc-telegram-connected-info__icon">

                                                                                            </div>
                                                                                            <div class="acc-telegram-connected-info__content">
                                                                                                <div class="acc-telegram-connected-info__top">
                                                                                                    <div class="acc-telegram-connected-info__nickname">

                                                                                                    </div>
                                                                                                    <div class="acc-telegram-connected-info__status">
                                                                                                        Connected
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="acc-telegram-connected-info__id">

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>
                                                                                <div class="acc-telegram-item__state__right">
                                                                                    <div class="acc-telegram-disconnect-button-block">
                                                                                        <form method="post" action="/change/">
                                                                                            <button type="submit" class="acc-telegram-disconnect-button iconed-btn light-black-btn button--small">Disconnect
                                                                                            </button>
                                                                                            <input type="hidden" name="action" value="telegram_disconnect">
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>






                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>






                                            <div class="db-setting-tab-content" style="display: none;">

                                                <div class="setting-panel-block">
                                                    <div class="setting-panel">
                                                        <div class="setting-panel__top">
                                                            <div class="setting-panel__top-left">
                                                                <div class="setting-panel__title">
                                                                    Password
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="setting-panel__content">

                                                            <div class="acc-security-items-block">
                                                                <div class="acc-security-items">






                                                                    <div class="acc-security-item acc-security-item--unset">
                                                                        <div class="acc-security-item__states">



                                                                            <div class="acc-security-item__state acc-security-item__state--change globalAccountSettingsPasswordChange" style="display: none;">
                                                                                <div class="acc-security-item__state-inner">

                                                                                    <div class="acc-security-item__state__left">
                                                                                        <div class="acc-info-item__title">
                                                                                            Password
                                                                                        </div>

                                                                                        <div class="acc-security-change-form-block">

                                                                                            <!-- ✅ IMPORTANT: correct form -->
                                                                                            <form method="POST" action="https://oora3.com/user/edit-password" class="acc-security-change-form acc-security-change-form--password">
                                                                                                <input type="hidden" name="_token" value="WwkSWZvaAd1j5hcDtpZQBiV4S9JaWsgGb79n3r0t">
                                                                                                <div class="acc-security-change-form-row">

                                                                                                    <div class="acc-security-change-form-row-field">

                                                                                                        <!-- Current Password -->
                                                                                                        <div class="field-block">
                                                                                                            <div class="field field--input field--has-icon field--password field--has-right-panel">

                                                                                                                <input type="password" name="old_password" placeholder="Current password" required="">

                                                                                                                <div class="field-icon"></div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <!-- New Password -->
                                                                                                        <div class="field-block">
                                                                                                            <div class="field field--input field--has-icon field--password field--has-right-panel">

                                                                                                                <input type="password" name="password" placeholder="New password" required="">

                                                                                                                <div class="field-icon"></div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <!-- Confirm Password -->
                                                                                                        <div class="field-block">
                                                                                                            <div class="field field--input field--has-icon field--password field--has-right-panel">

                                                                                                                <input type="password" name="password_confirmation" placeholder="Confirm password" required="">

                                                                                                                <div class="field-icon"></div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="acc-security-change-form-row-button">
                                                                                                        <div class="form-button-block">
                                                                                                            <button type="submit" class="green-gradient-btn">
                                                                                                                Save
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>

                                                                                            </form>

                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="acc-security-item__state__right">
                                                                                        <div class="acc-security-close-button-block">
                                                                                            <button type="button" class="acc-security-close-button globalAccountSettingsPasswordChangeClose"></button>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>






                                                                            <div class="acc-security-item acc-security-item--unset">
                                                                                <div class="acc-security-item__states">
                                                                                    <div class="acc-security-item__state acc-security-item__state--unset globalAccountSettingsPINUnset" style="display: none;">
                                                                                        <div class="acc-security-item__state-inner">
                                                                                            <div class="acc-security-item__state__left">



                                                                                                <div class="acc-security-item__title">
                                                                                                    Payment password
                                                                                                </div>
                                                                                                <div class="acc-security-not-set-block">
                                                                                                    <div class="acc-security-not-set">
                                                                                                        <div class="acc-security-not-set__title">
                                                                                                            N/A
                                                                                                        </div>
                                                                                                        <div class="acc-security-not-set__icon">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div class="acc-security-item__state__right">
                                                                                                <div class="acc-security-set-button-block">
                                                                                                    <button class="acc-security-set-button iconed-btn light-black-btn button--small acc-security-set-button--pin globalAccountSettingsPINButton">
                                                                                                        <div class="iconed-btn__icon">
                                                                                                        </div>
                                                                                                        <div class="iconed-btn__text">
                                                                                                            Set
                                                                                                        </div>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="acc-security-item__state acc-security-item__state--set globalAccountSettingsPINSet" style="display: block;">
                                                                                        <div class="acc-security-item__state-inner">
                                                                                            <div class="acc-security-item__state__left">
                                                                                                <div class="acc-security-item__title">
                                                                                                    Payment password
                                                                                                </div>

                                                                                                <div class="acc-security-pin-set-block">
                                                                                                    <div class="acc-security-pin-set">
                                                                                                        <div class="acc-security-pin-set__status acc-security-pin-set__status--enabled">
                                                                                                            Enabled
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div class="acc-security-item__state__right">
                                                                                                <div class="acc-security-change-button-block">
                                                                                                    <button class="acc-security-change-button iconed-btn light-black-btn button--small globalAccountSettingsPINButton">
                                                                                                        <div class="iconed-btn__icon">
                                                                                                        </div>
                                                                                                        <div class="iconed-btn__text">
                                                                                                            Change
                                                                                                        </div>
                                                                                                    </button>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="acc-security-item__state acc-security-item__state--change globalAccountSettingsPINChange" style="display: none;">
                                                                                        <div class="acc-security-item__state-inner">
                                                                                            <div class="acc-security-item__state__left">
                                                                                                <div class="acc-info-item__title">
                                                                                                    Payment password
                                                                                                </div>
                                                                                                <div class="acc-security-change-form-block">
                                                                                                    <form action="/change/" class="acc-security-change-form acc-security-change-form--password">
                                                                                                        <div class="acc-security-change-form-row">
                                                                                                            <div class="acc-security-change-form-row-field">

                                                                                                                <div class="field-block">
                                                                                                                    <div class="field field--input field--has-icon field--password field--has-right-panel">
                                                                                                                        <input type="password" name="new_pin" maxlength="255" placeholder="New payment password" autocomplete="off">
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
                                                                                                                        <input type="password" name="current_pin" maxlength="255" placeholder="Current payment password" autocomplete="off">
                                                                                                                        <div class="field-icon"></div>
                                                                                                                        <div class="field-right-panel">
                                                                                                                            <div class="password-type-toggle-btn-block">
                                                                                                                                <button class="password-type-toggle-btn"></button>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </div>
                                                                                                            <div class="acc-security-change-form-row-button">
                                                                                                                <div class="form-button-block">
                                                                                                                    <button type="submit" class="green-gradient-btn">
                                                                                                                        Save
                                                                                                                    </button>
                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <input type="hidden" name="action" value="pin">
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="acc-security-item__state__right">
                                                                                                <div class="acc-security-close-button-block">
                                                                                                    <button class="acc-security-close-button globalAccountSettingsPINChangeClose"></button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>







                                                                            <div class="acc-security-item acc-security-item--recovery-phrase">
                                                                                <div class="acc-security-item__states">
                                                                                    <div class="acc-security-item__state">
                                                                                        <div class="acc-security-item__state-inner">
                                                                                            <div class="acc-security-item__state__left">
                                                                                                <div class="acc-security-item__title">
                                                                                                    Recovery phrase
                                                                                                </div>
                                                                                                <div class="acc-security-item-phrase-block">
                                                                                                    <div class="acc-security-item-phrase-items-block">
                                                                                                        <div class="acc-security-item-phrase-items">
                                                                                                            <div class="acc-security-item-phrase-item-wrapper">
                                                                                                                <div class="acc-security-item-phrase-item">
                                                                                                                    <div class="acc-security-item-phrase-item__count">1</div>
                                                                                                                    <div class="acc-security-item-phrase-item__word">optima</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="acc-security-item-phrase-item-wrapper">
                                                                                                                <div class="acc-security-item-phrase-item">
                                                                                                                    <div class="acc-security-item-phrase-item__count">2</div>
                                                                                                                    <div class="acc-security-item-phrase-item__word">optima</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="acc-security-item-phrase-item-wrapper">
                                                                                                                <div class="acc-security-item-phrase-item">
                                                                                                                    <div class="acc-security-item-phrase-item__count">3</div>
                                                                                                                    <div class="acc-security-item-phrase-item__word">optima</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="acc-security-item-phrase-item-wrapper">
                                                                                                                <div class="acc-security-item-phrase-item">
                                                                                                                    <div class="acc-security-item-phrase-item__count">4</div>
                                                                                                                    <div class="acc-security-item-phrase-item__word">optima</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="acc-security-item-phrase-item-wrapper">
                                                                                                                <div class="acc-security-item-phrase-item">
                                                                                                                    <div class="acc-security-item-phrase-item__count">5</div>
                                                                                                                    <div class="acc-security-item-phrase-item__word">optima</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="acc-security-item-phrase-item-wrapper">
                                                                                                                <div class="acc-security-item-phrase-item">
                                                                                                                    <div class="acc-security-item-phrase-item__count">6</div>
                                                                                                                    <div class="acc-security-item-phrase-item__word">optima</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="acc-security-item-phrase-item-wrapper">
                                                                                                                <div class="acc-security-item-phrase-item">
                                                                                                                    <div class="acc-security-item-phrase-item__count">7</div>
                                                                                                                    <div class="acc-security-item-phrase-item__word">optima</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="acc-security-item-phrase-item-wrapper">
                                                                                                                <div class="acc-security-item-phrase-item">
                                                                                                                    <div class="acc-security-item-phrase-item__count">8</div>
                                                                                                                    <div class="acc-security-item-phrase-item__word">optima</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="acc-security-item-phrase-item-wrapper">
                                                                                                                <div class="acc-security-item-phrase-item">
                                                                                                                    <div class="acc-security-item-phrase-item__count">9</div>
                                                                                                                    <div class="acc-security-item-phrase-item__word">optima</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="acc-security-item-phrase-item-wrapper">
                                                                                                                <div class="acc-security-item-phrase-item">
                                                                                                                    <div class="acc-security-item-phrase-item__count">10</div>
                                                                                                                    <div class="acc-security-item-phrase-item__word">optima</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="acc-security-item-phrase-item-wrapper">
                                                                                                                <div class="acc-security-item-phrase-item">
                                                                                                                    <div class="acc-security-item-phrase-item__count">11</div>
                                                                                                                    <div class="acc-security-item-phrase-item__word">optima</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="acc-security-item-phrase-item-wrapper">
                                                                                                                <div class="acc-security-item-phrase-item">
                                                                                                                    <div class="acc-security-item-phrase-item__count">12</div>
                                                                                                                    <div class="acc-security-item-phrase-item__word">optima</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="acc-security-item-phrase-overlay">
                                                                                                        <form action="/change/" method="post">
                                                                                                            <button class="acc-security-item-phrase-overlay-button green-gradient-btn button--small" type="submit">Show</button>
                                                                                                            <input type="hidden" name="action" value="words">
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="setting-panel-block globalAccountSettings2FA">
                                                            <div class="setting-panel">
                                                                <div class="setting-panel__top">
                                                                    <div class="setting-panel__top-left">
                                                                        <div class="setting-panel__title">
                                                                            Two-factor verification
                                                                        </div>
                                                                    </div>
                                                                    <div class="setting-panel__top-right">
                                                                    </div>
                                                                </div>
                                                                <div class="setting-panel__content">


                                                                    <div class="acc-two-fa-item-block">
                                                                        <div class="acc-two-fa-item">
                                                                            <div class="acc-two-fa-item__states">

                                                                                <div class="acc-two-fa-item__state acc-two-fa-item__state--connected globalAccountSettings2FADisabled" style="display: block;">
                                                                                    <div class="acc-two-fa-item__state-inner">
                                                                                        <div class="acc-two-fa-item__state__left">
                                                                                            <div class="acc-two-fa-disconnected-info-block">
                                                                                                <div class="acc-two-fa-disconnected-info">
                                                                                                    <div class="acc-two-fa-disconnected-info__title">
                                                                                                        2FA
                                                                                                    </div>
                                                                                                    <div class="acc-two-fa-disconnected-info__descr">
                                                                                                        Your account isn't sufficiently protected. Add an additional security layer by using Google Authenticator.
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="acc-two-fa-item__state__right">
                                                                                            <div class="acc-two-fa-connect-button-block">
                                                                                                <button class="acc-two-fa-connect-button green-gradient-btn iconed-btn button--small globalAccountSettings2FADisabledEnable">
                                                                                                    <div class="iconed-btn__text">
                                                                                                        Enable
                                                                                                    </div>
                                                                                                    <div class="iconed-btn__icon">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="acc-two-fa-item__state acc-two-fa-item__state--disconnected globalAccountSettings2FAEnabled" style="display: none;">
                                                                                    <div class="acc-two-fa-item__state-inner">
                                                                                        <div class="acc-two-fa-item__state__left">



                                                                                            <div class="acc-two-fa-connected-info-block">
                                                                                                <div class="acc-two-fa-connected-info">
                                                                                                    <div class="acc-two-fa-connected-info__icon">

                                                                                                    </div>
                                                                                                    <div class="acc-two-fa-connected-info__content">
                                                                                                        <div class="acc-two-fa-connected-info__title">
                                                                                                            2FA
                                                                                                        </div>
                                                                                                        <div class="acc-two-fa-connected-info__descr">
                                                                                                            Your account is securely protected. 2FA is required to log in, transfer funds, and make important changes to your account.
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>
                                                                                        <div class="acc-two-fa-item__state__right">
                                                                                            <div class="acc-two-fa-disconnect-button-block">
                                                                                                <form method="post" action="/change/">
                                                                                                    <input type="hidden" name="action" value="2fa_off">
                                                                                                    <button type="submit" class="acc-two-fa-disconnect-button iconed-btn light-black-btn button--small globalAccountSettings2FAEnabledDisable">Disable
                                                                                                    </button>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>



                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-setting-tab-content" style="display: none;">
                                                        <div class="favorite-addresses-empty-block globalAccountSettingsWalletsEmpty">
                                                            <div class="favorite-addresses-empty-wrapper">
                                                                <div class="favorite-addresses-empty">
                                                                    <div class="favorite-addresses-empty__icon"></div>
                                                                    <div class="favorite-addresses-empty__title">
                                                                        No saved addresses found
                                                                    </div>
                                                                    <div class="favorite-addresses-empty__descr">
                                                                        Saved wallet addresses for fast and secure transfers without additional confirmation
                                                                    </div>
                                                                    <div class="favorite-addresses-empty__button-block">
                                                                        <button type="button" onclick="$('#modalAddWallet').find('.modal-descr-block').removeClass('d-none');$('#modalAddWallet').find('select[name=currency]').closest('.field-block').removeClass('d-none');" class="green-gradient-btn iconed-btn favorite-addresses-empty__button button--small"
                                                                        data-bs-toggle="modal" data-bs-target="#modalAddWallet">
                                                                            <div class="iconed-btn__icon"></div>
                                                                            <div class="iconed-btn__text">Add</div>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="favorite-addresses-block d-none globalAccountSettingsWalletsNotEmpty">
                                                            <div class="favorite-addresses-top-block">
                                                                <div class="favorite-addresses-top">
                                                                    <div class="favorite-addresses-top__left">
                                                                        <div class="favorite-addresses-top__title">
                                                                            Favorite addresses
                                                                        </div>
                                                                        <div class="favorite-addresses-top__descr">
                                                                            Saved wallet addresses for fast and secure transfers without additional confirmation
                                                                        </div>
                                                                    </div>
                                                                    <div class="favorite-addresses-top__right">
                                                                        <div class="favorite-addresses-top__button-block">

                                                                            <button type="button" onclick="$('#modalAddWallet').find('.modal-descr-block').removeClass('d-none');$('#modalAddWallet').find('select[name=currency]').closest('.field-block').removeClass('d-none');" class="green-gradient-btn iconed-btn favorite-addresses-empty__button button--small"
                                                                            data-bs-toggle="modal" data-bs-target="#modalAddWallet">
                                                                                <div class="iconed-btn__icon"></div>
                                                                                <div class="iconed-btn__text">Add</div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="favorite-address-table-block globalAccountSettingsWalletsNotEmptyTable">
                                                                <div class="favorite-address-table">
                                                                    <div class="favorite-address-table-heading globalAccountSettingsWalletsNotEmptyTableHeading">
                                                                        <div class="favorite-address-t-h-cell favorite-address-t-h-cell--currency">
                                                                            Currency
                                                                        </div>
                                                                        <div class="favorite-address-t-h-cell favorite-address-t-h-cell--network">
                                                                            Network
                                                                        </div>
                                                                        <div class="favorite-address-t-h-cell favorite-address-t-h-cell--address">
                                                                            Address
                                                                        </div>
                                                                        <div class="favorite-address-t-h-cell favorite-address-t-h-cell--added">
                                                                            Date
                                                                        </div>
                                                                        <div class="favorite-address-t-h-cell favorite-address-t-h-cell--action">
                                                                            Action
                                                                        </div>
                                                                    </div>


                                                                    <div class="favorite-address-table-items globalAccountSettingsWalletsNotEmptyTableItems">


                                                                        <div class="favorite-address-table-item globalAccountSettingsWalletsNotEmptyTableItemsItem">
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--currency">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Currency
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-currency-block">
                                                                                        <div class="currency-item">
                                                                                            <div class="currency-icon">
                                                                                                <img class="image" src="" data-src="/assets/optima/images/svg/currency/[icon].svg" alt="">
                                                                                            </div>
                                                                                            <div class="currency-item__content">
                                                                                                <div class="currency-item__title">

                                                                                                </div>
                                                                                                <div class="currency-item__abbr">

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--network">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Network
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-network-block">
                                                                                        <div class="fa-t-i-network">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--address">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Address
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">

                                                                                    <div class="fa-t-i-address-block">
                                                                                        <div class="fa-t-i-address">
                                                                                            <div class="fa-t-i-address__title"></div>
                                                                                            <div class="fa-t-i-address__copy">
                                                                                                <button class="copy-icon-button" data-clipboard-text="" aria-label="Copied">
                                                                                                    <div class="copy-icon-button__icon">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--added">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Date
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-date-block">
                                                                                        <div class="fa-t-i-date"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--action">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Action
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-action-buttons-block">
                                                                                        <div class="fa-t-i-action-buttons">
                                                                                            <div class="fa-t-i-action-button-wrapper">
                                                                                                <form method="post" action="/change/">
                                                                                                    <button type="submit" class="fa-t-i-remove-button"></button>
                                                                                                    <input type="hidden" name="action" value="remove_wallet">
                                                                                                    <input type="hidden" name="id">
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="favorite-address-table-item globalAccountSettingsWalletsNotEmptyTableItemsItem">
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--currency">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Currency
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-currency-block">
                                                                                        <div class="currency-item">
                                                                                            <div class="currency-icon">
                                                                                                <img class="image" src="" data-src="/assets/optima/images/svg/currency/[icon].svg" alt="">
                                                                                            </div>
                                                                                            <div class="currency-item__content">
                                                                                                <div class="currency-item__title">

                                                                                                </div>
                                                                                                <div class="currency-item__abbr">

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--network">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Network
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-network-block">
                                                                                        <div class="fa-t-i-network">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--address">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Address
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">

                                                                                    <div class="fa-t-i-address-block">
                                                                                        <div class="fa-t-i-address">
                                                                                            <div class="fa-t-i-address__title"></div>
                                                                                            <div class="fa-t-i-address__copy">
                                                                                                <button class="copy-icon-button" data-clipboard-text="" aria-label="Copied">
                                                                                                    <div class="copy-icon-button__icon">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--added">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Date
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-date-block">
                                                                                        <div class="fa-t-i-date"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--action">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Action
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-action-buttons-block">
                                                                                        <div class="fa-t-i-action-buttons">
                                                                                            <div class="fa-t-i-action-button-wrapper">
                                                                                                <form method="post" action="/change/">
                                                                                                    <button type="submit" class="fa-t-i-remove-button"></button>
                                                                                                    <input type="hidden" name="action" value="remove_wallet">
                                                                                                    <input type="hidden" name="id">
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="favorite-address-table-item globalAccountSettingsWalletsNotEmptyTableItemsItem">
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--currency">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Currency
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-currency-block">
                                                                                        <div class="currency-item">
                                                                                            <div class="currency-icon">
                                                                                                <img class="image" src="" data-src="/assets/optima/images/svg/currency/[icon].svg" alt="">
                                                                                            </div>
                                                                                            <div class="currency-item__content">
                                                                                                <div class="currency-item__title">

                                                                                                </div>
                                                                                                <div class="currency-item__abbr">

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--network">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Network
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-network-block">
                                                                                        <div class="fa-t-i-network">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--address">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Address
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">

                                                                                    <div class="fa-t-i-address-block">
                                                                                        <div class="fa-t-i-address">
                                                                                            <div class="fa-t-i-address__title"></div>
                                                                                            <div class="fa-t-i-address__copy">
                                                                                                <button class="copy-icon-button" data-clipboard-text="" aria-label="Copied">
                                                                                                    <div class="copy-icon-button__icon">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--added">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Date
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-date-block">
                                                                                        <div class="fa-t-i-date"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--action">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Action
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-action-buttons-block">
                                                                                        <div class="fa-t-i-action-buttons">
                                                                                            <div class="fa-t-i-action-button-wrapper">
                                                                                                <form method="post" action="/change/">
                                                                                                    <button type="submit" class="fa-t-i-remove-button"></button>
                                                                                                    <input type="hidden" name="action" value="remove_wallet">
                                                                                                    <input type="hidden" name="id">
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="favorite-address-table-item globalAccountSettingsWalletsNotEmptyTableItemsItem">
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--currency">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Currency
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-currency-block">
                                                                                        <div class="currency-item">
                                                                                            <div class="currency-icon">
                                                                                                <img class="image" src="" data-src="/assets/optima/images/svg/currency/[icon].svg" alt="">
                                                                                            </div>
                                                                                            <div class="currency-item__content">
                                                                                                <div class="currency-item__title">

                                                                                                </div>
                                                                                                <div class="currency-item__abbr">

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--network">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Network
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-network-block">
                                                                                        <div class="fa-t-i-network">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--address">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Address
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">

                                                                                    <div class="fa-t-i-address-block">
                                                                                        <div class="fa-t-i-address">
                                                                                            <div class="fa-t-i-address__title"></div>
                                                                                            <div class="fa-t-i-address__copy">
                                                                                                <button class="copy-icon-button" data-clipboard-text="" aria-label="Copied">
                                                                                                    <div class="copy-icon-button__icon">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--added">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Date
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-date-block">
                                                                                        <div class="fa-t-i-date"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--action">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Action
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-action-buttons-block">
                                                                                        <div class="fa-t-i-action-buttons">
                                                                                            <div class="fa-t-i-action-button-wrapper">
                                                                                                <form method="post" action="/change/">
                                                                                                    <button type="submit" class="fa-t-i-remove-button"></button>
                                                                                                    <input type="hidden" name="action" value="remove_wallet">
                                                                                                    <input type="hidden" name="id">
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="favorite-address-table-item globalAccountSettingsWalletsNotEmptyTableItemsItem">
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--currency">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Currency
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-currency-block">
                                                                                        <div class="currency-item">
                                                                                            <div class="currency-icon">
                                                                                                <img class="image" src="" data-src="/assets/optima/images/svg/currency/[icon].svg" alt="">
                                                                                            </div>
                                                                                            <div class="currency-item__content">
                                                                                                <div class="currency-item__title">

                                                                                                </div>
                                                                                                <div class="currency-item__abbr">

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--network">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Network
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-network-block">
                                                                                        <div class="fa-t-i-network">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--address">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Address
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">

                                                                                    <div class="fa-t-i-address-block">
                                                                                        <div class="fa-t-i-address">
                                                                                            <div class="fa-t-i-address__title"></div>
                                                                                            <div class="fa-t-i-address__copy">
                                                                                                <button class="copy-icon-button" data-clipboard-text="" aria-label="Copied">
                                                                                                    <div class="copy-icon-button__icon">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--added">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Date
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-date-block">
                                                                                        <div class="fa-t-i-date"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--action">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Action
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-action-buttons-block">
                                                                                        <div class="fa-t-i-action-buttons">
                                                                                            <div class="fa-t-i-action-button-wrapper">
                                                                                                <form method="post" action="/change/">
                                                                                                    <button type="submit" class="fa-t-i-remove-button"></button>
                                                                                                    <input type="hidden" name="action" value="remove_wallet">
                                                                                                    <input type="hidden" name="id">
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="favorite-address-table-item globalAccountSettingsWalletsNotEmptyTableItemsItem">
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--currency">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Currency
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-currency-block">
                                                                                        <div class="currency-item">
                                                                                            <div class="currency-icon">
                                                                                                <img class="image" src="" data-src="/assets/optima/images/svg/currency/[icon].svg" alt="">
                                                                                            </div>
                                                                                            <div class="currency-item__content">
                                                                                                <div class="currency-item__title">

                                                                                                </div>
                                                                                                <div class="currency-item__abbr">

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--network">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Network
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-network-block">
                                                                                        <div class="fa-t-i-network">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--address">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Address
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">

                                                                                    <div class="fa-t-i-address-block">
                                                                                        <div class="fa-t-i-address">
                                                                                            <div class="fa-t-i-address__title"></div>
                                                                                            <div class="fa-t-i-address__copy">
                                                                                                <button class="copy-icon-button" data-clipboard-text="" aria-label="Copied">
                                                                                                    <div class="copy-icon-button__icon">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--added">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Date
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-date-block">
                                                                                        <div class="fa-t-i-date"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--action">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Action
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-action-buttons-block">
                                                                                        <div class="fa-t-i-action-buttons">
                                                                                            <div class="fa-t-i-action-button-wrapper">
                                                                                                <form method="post" action="/change/">
                                                                                                    <button type="submit" class="fa-t-i-remove-button"></button>
                                                                                                    <input type="hidden" name="action" value="remove_wallet">
                                                                                                    <input type="hidden" name="id">
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="favorite-address-table-item globalAccountSettingsWalletsNotEmptyTableItemsItem">
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--currency">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Currency
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-currency-block">
                                                                                        <div class="currency-item">
                                                                                            <div class="currency-icon">
                                                                                                <img class="image" src="" data-src="/assets/optima/images/svg/currency/[icon].svg" alt="">
                                                                                            </div>
                                                                                            <div class="currency-item__content">
                                                                                                <div class="currency-item__title">

                                                                                                </div>
                                                                                                <div class="currency-item__abbr">

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--network">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Network
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-network-block">
                                                                                        <div class="fa-t-i-network">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--address">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Address
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">

                                                                                    <div class="fa-t-i-address-block">
                                                                                        <div class="fa-t-i-address">
                                                                                            <div class="fa-t-i-address__title"></div>
                                                                                            <div class="fa-t-i-address__copy">
                                                                                                <button class="copy-icon-button" data-clipboard-text="" aria-label="Copied">
                                                                                                    <div class="copy-icon-button__icon">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--added">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Date
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-date-block">
                                                                                        <div class="fa-t-i-date"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--action">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Action
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-action-buttons-block">
                                                                                        <div class="fa-t-i-action-buttons">
                                                                                            <div class="fa-t-i-action-button-wrapper">
                                                                                                <form method="post" action="/change/">
                                                                                                    <button type="submit" class="fa-t-i-remove-button"></button>
                                                                                                    <input type="hidden" name="action" value="remove_wallet">
                                                                                                    <input type="hidden" name="id">
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="favorite-address-table-item globalAccountSettingsWalletsNotEmptyTableItemsItem">
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--currency">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Currency
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-currency-block">
                                                                                        <div class="currency-item">
                                                                                            <div class="currency-icon">
                                                                                                <img class="image" src="" data-src="/assets/optima/images/svg/currency/[icon].svg" alt="">
                                                                                            </div>
                                                                                            <div class="currency-item__content">
                                                                                                <div class="currency-item__title">

                                                                                                </div>
                                                                                                <div class="currency-item__abbr">

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--network">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Network
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-network-block">
                                                                                        <div class="fa-t-i-network">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--address">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Address
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">

                                                                                    <div class="fa-t-i-address-block">
                                                                                        <div class="fa-t-i-address">
                                                                                            <div class="fa-t-i-address__title"></div>
                                                                                            <div class="fa-t-i-address__copy">
                                                                                                <button class="copy-icon-button" data-clipboard-text="" aria-label="Copied">
                                                                                                    <div class="copy-icon-button__icon">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--added">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Date
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-date-block">
                                                                                        <div class="fa-t-i-date"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--action">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Action
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-action-buttons-block">
                                                                                        <div class="fa-t-i-action-buttons">
                                                                                            <div class="fa-t-i-action-button-wrapper">
                                                                                                <form method="post" action="/change/">
                                                                                                    <button type="submit" class="fa-t-i-remove-button"></button>
                                                                                                    <input type="hidden" name="action" value="remove_wallet">
                                                                                                    <input type="hidden" name="id">
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="favorite-address-table-item globalAccountSettingsWalletsNotEmptyTableItemsItem">
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--currency">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Currency
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-currency-block">
                                                                                        <div class="currency-item">
                                                                                            <div class="currency-icon">
                                                                                                <img class="image" src="" data-src="/assets/optima/images/svg/currency/[icon].svg" alt="">
                                                                                            </div>
                                                                                            <div class="currency-item__content">
                                                                                                <div class="currency-item__title">

                                                                                                </div>
                                                                                                <div class="currency-item__abbr">

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--network">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Network
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-network-block">
                                                                                        <div class="fa-t-i-network">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--address">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Address
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">

                                                                                    <div class="fa-t-i-address-block">
                                                                                        <div class="fa-t-i-address">
                                                                                            <div class="fa-t-i-address__title"></div>
                                                                                            <div class="fa-t-i-address__copy">
                                                                                                <button class="copy-icon-button" data-clipboard-text="" aria-label="Copied">
                                                                                                    <div class="copy-icon-button__icon">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--added">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Date
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-date-block">
                                                                                        <div class="fa-t-i-date"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--action">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Action
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-action-buttons-block">
                                                                                        <div class="fa-t-i-action-buttons">
                                                                                            <div class="fa-t-i-action-button-wrapper">
                                                                                                <form method="post" action="/change/">
                                                                                                    <button type="submit" class="fa-t-i-remove-button"></button>
                                                                                                    <input type="hidden" name="action" value="remove_wallet">
                                                                                                    <input type="hidden" name="id">
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="favorite-address-table-item globalAccountSettingsWalletsNotEmptyTableItemsItem">
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--currency">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Currency
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-currency-block">
                                                                                        <div class="currency-item">
                                                                                            <div class="currency-icon">
                                                                                                <img class="image" src="" data-src="/assets/optima/images/svg/currency/[icon].svg" alt="">
                                                                                            </div>
                                                                                            <div class="currency-item__content">
                                                                                                <div class="currency-item__title">

                                                                                                </div>
                                                                                                <div class="currency-item__abbr">

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--network">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Network
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-network-block">
                                                                                        <div class="fa-t-i-network">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--address">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Address
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">

                                                                                    <div class="fa-t-i-address-block">
                                                                                        <div class="fa-t-i-address">
                                                                                            <div class="fa-t-i-address__title"></div>
                                                                                            <div class="fa-t-i-address__copy">
                                                                                                <button class="copy-icon-button" data-clipboard-text="" aria-label="Copied">
                                                                                                    <div class="copy-icon-button__icon">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--added">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Date
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-date-block">
                                                                                        <div class="fa-t-i-date"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="favorite-address-t-i-cell favorite-address-t-i-cell--action">
                                                                                <div class="favorite-address-t-i-cell__title">
                                                                                    Action
                                                                                </div>
                                                                                <div class="favorite-address-t-i-cell__content">
                                                                                    <div class="fa-t-i-action-buttons-block">
                                                                                        <div class="fa-t-i-action-buttons">
                                                                                            <div class="fa-t-i-action-button-wrapper">
                                                                                                <form method="post" action="/change/">
                                                                                                    <button type="submit" class="fa-t-i-remove-button"></button>
                                                                                                    <input type="hidden" name="action" value="remove_wallet">
                                                                                                    <input type="hidden" name="id">
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="favorite-address-table-manage-panel">
                                                                        <div class="favorite-address-table-manage-panel__left">
                                                                            <div class="pagination-block">
                                                                                <div class="pagination">
                                                                                    <ul class="pagination-list globalAccountSettingsWalletsNotEmptyPages">

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>



                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>


                                        </div>





                                    </div>







                                </div>












                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>