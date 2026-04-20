@include('layouts.mainsite.header')


<div class="front-page-top-block ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="front-page-top front-page-top--help-center">
                    <div class="front-page-top-title-block">
                        <h1 class="front-page-top-title">
                            OORA3 Help Center
                        </h1>
                    </div>
                    <div class="front-page-top-subtitle-block">
                        <div class="front-page-top-subtitle">
                           OORA3 Ecosystem: User Guide & Support Center
                        </div>
                    </div>
                    <div class="front-page-top-search-block">
                        <div class="front-page-top-search">
                            <form class="front-page-top-search-form">
                                <div class="field-block">
                                    <div class="field field--input field--has-right-panel">
                                        <input type="text" name="search_input" placeholder="Search......"
                                            autocomplete="off" required=""
                                            onchange="searchFAQSection($(this).val());"
                                            onkeyup="searchFAQSection($(this).val());">

                                        <div class="field-right-panel">

                                            <div class="form-button-block">
                                                <button type="button" class="search-button"></button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                            <div class="front-page-top-search-request-list-block">
                                <div class="front-page-top-search-request-list">
                                    <div class="front-page-top-search-request-list-title">
                                        Try searching:
                                    </div>
                                    <div class="front-page-top-search-request-items-wrapper">
                                        <div class="front-page-top-search-request-items">
                                            <div class="front-page-top-search-request-item">
                                                <a href="javascript:void(0)" onclick="trySearch($(this))"
                                                    data-word='Staking'
                                                    class="front-page-top-search-request-link">Staking</a>
                                            </div>
                                            <div class="front-page-top-search-request-item">
                                                <a href="javascript:void(0)" onclick="trySearch($(this))"
                                                    data-word='Loan' class="front-page-top-search-request-link">Loan</a>
                                            </div>
                                            <div class="front-page-top-search-request-item">
                                                <a href="javascript:void(0)" onclick="trySearch($(this))"
                                                    data-word='Exchange'
                                                    class="front-page-top-search-request-link">Exchange</a>
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
<div class="front-page-block">
    <div class="container">
        <div class="row">
            <div class="col-12">










                <div class="front-page globalPageFAQSections">
                    <div class="front-page__fullwidth">
                        <div class="front-page__content">

                            <div class="front-help-category-items-block">
                                <div class="front-help-category-items">
                                    <div class="front-help-category-item-wrapper globalPageFAQSectionsSection">
                                        <a href="javascript:void(0)" onclick="selectFAQSection($(this).data('section'))"
                                            data-section="1" class="front-help-category-item">
                                            <div class="front-help-category-item__inner">
                                                <div class="front-help-category-item__top">
                                                    <div class="front-help-category-item__top-left">
                                                        <div class="front-help-category-item__icon">
                                                            <div
                                                                class="front-help-category-item__icon-image front-help-category-item__icon-image--personal">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="front-help-category-item__top-right">
                                                        <div class="front-help-category-item__arrow"></div>
                                                    </div>
                                                </div>
                                                <div class="front-help-category-item__title">
                                                    Personal account & Security
                                                </div>
                                                <div class="front-help-category-item__descr">
                                                    Platform registration, password recovery, enabling 2FA, and
                                                    other account and security settings.
                                                </div>
                                                <div class="front-help-category-item__count-block">
                                                    <div class="front-help-category-item__count">9 articles
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="front-help-category-item-wrapper globalPageFAQSectionsSection">
                                        <a href="javascript:void(0)" onclick="selectFAQSection($(this).data('section'))"
                                            data-section="2" class="front-help-category-item">
                                            <div class="front-help-category-item__inner">
                                                <div class="front-help-category-item__top">
                                                    <div class="front-help-category-item__top-left">
                                                        <div class="front-help-category-item__icon">
                                                            <div
                                                                class="front-help-category-item__icon-image front-help-category-item__icon-image--wallet">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="front-help-category-item__top-right">
                                                        <div class="front-help-category-item__arrow"></div>
                                                    </div>
                                                </div>
                                                <div class="front-help-category-item__title">
                                                    Crypto Wallet
                                                </div>
                                                <div class="front-help-category-item__descr">
                                                    Sending and receiving crypto, favorite addresses, and
                                                    transaction history.
                                                </div>
                                                <div class="front-help-category-item__count-block">
                                                    <div class="front-help-category-item__count">5 articles
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="front-help-category-item-wrapper globalPageFAQSectionsSection">
                                        <a href="javascript:void(0)" onclick="selectFAQSection($(this).data('section'))"
                                            data-section="3" class="front-help-category-item">
                                            <div class="front-help-category-item__inner">
                                                <div class="front-help-category-item__top">
                                                    <div class="front-help-category-item__top-left">
                                                        <div class="front-help-category-item__icon">
                                                            <div
                                                                class="front-help-category-item__icon-image front-help-category-item__icon-image--exchange">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="front-help-category-item__top-right">
                                                        <div class="front-help-category-item__arrow"></div>
                                                    </div>
                                                </div>
                                                <div class="front-help-category-item__title">
                                                    Exchange
                                                </div>
                                                <div class="front-help-category-item__descr">
                                                    Using the cryptocurrency exchange service, he procedure and
                                                    speed of exchange, and transaction fees.
                                                </div>
                                                <div class="front-help-category-item__count-block">
                                                    <div class="front-help-category-item__count">3 articles
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="front-help-category-item-wrapper globalPageFAQSectionsSection">
                                        <a href="javascript:void(0)"
                                            onclick="selectFAQSection($(this).data('section'))" data-section="4"
                                            class="front-help-category-item">
                                            <div class="front-help-category-item__inner">
                                                <div class="front-help-category-item__top">
                                                    <div class="front-help-category-item__top-left">
                                                        <div class="front-help-category-item__icon">
                                                            <div
                                                                class="front-help-category-item__icon-image front-help-category-item__icon-image--ai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="front-help-category-item__top-right">
                                                        <div class="front-help-category-item__arrow"></div>
                                                    </div>
                                                </div>
                                                <div class="front-help-category-item__title">
                                                    AI Staking
                                                </div>
                                                <div class="front-help-category-item__descr">
                                                    Staking crypto assets, choosing a trading strategy, funding
                                                    the contract , coin release, and compounding.
                                                </div>
                                                <div class="front-help-category-item__count-block">
                                                    <div class="front-help-category-item__count">6 articles
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="front-help-category-item-wrapper globalPageFAQSectionsSection">
                                        <a href="javascript:void(0)"
                                            onclick="selectFAQSection($(this).data('section'))" data-section="5"
                                            class="front-help-category-item">
                                            <div class="front-help-category-item__inner">
                                                <div class="front-help-category-item__top">
                                                    <div class="front-help-category-item__top-left">
                                                        <div class="front-help-category-item__icon">
                                                            <div
                                                                class="front-help-category-item__icon-image front-help-category-item__icon-image--crypto">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="front-help-category-item__top-right">
                                                        <div class="front-help-category-item__arrow"></div>
                                                    </div>
                                                </div>
                                                <div class="front-help-category-item__title">
                                                    Crypto Loans
                                                </div>
                                                <div class="front-help-category-item__descr">
                                                    Taking out fixed or flexible loans, adding collateral, loan
                                                    repay, LTV ratio, APR rate, and service fees.
                                                </div>
                                                <div class="front-help-category-item__count-block">
                                                    <div class="front-help-category-item__count">8 articles
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="front-help-category-item-wrapper globalPageFAQSectionsSection">
                                        <a href="javascript:void(0)"
                                            onclick="selectFAQSection($(this).data('section'))" data-section="6"
                                            class="front-help-category-item">
                                            <div class="front-help-category-item__inner">
                                                <div class="front-help-category-item__top">
                                                    <div class="front-help-category-item__top-left">
                                                        <div class="front-help-category-item__icon">
                                                            <div
                                                                class="front-help-category-item__icon-image front-help-category-item__icon-image--affiliate">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="front-help-category-item__top-right">
                                                        <div class="front-help-category-item__arrow"></div>
                                                    </div>
                                                </div>
                                                <div class="front-help-category-item__title">
                                                    Affiliate program
                                                </div>
                                                <div class="front-help-category-item__descr">
                                                    Program terms, affiliate structure, rewards and affiliate
                                                    management, promo code and cashback setup.
                                                </div>
                                                <div class="front-help-category-item__count-block">
                                                    <div class="front-help-category-item__count">10 articles
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
















                <div class="front-page globalPageFAQResults d-none">

                    <div class="front-page__left">


                        <div class="front-help-menu-block">
                            <div class="front-help-menu-block__inner">
                                <div class="front-help-menu-title-block">
                                    <div class="front-help-menu-title">Categories</div>
                                </div>
                                <div class="front-help-menu-wrapper">
                                    <div class="front-help-menu">
                                        <div class="front-help-menu-item">
                                            <a href="javascript:void(0)"
                                                onclick="selectFAQSection($(this).data('section'))"
                                                class="front-help-menu-link" data-section="">
                                                <div class="front-help-menu-link__left">
                                                    <div
                                                        class="front-help-menu-link__icon front-help-menu-link__icon--general">
                                                    </div>
                                                    <div class="front-help-menu-link__text">All</div>
                                                </div>
                                                <div class="front-help-menu-link__right">
                                                    <div class="front-help-menu-link__count">41</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="front-help-menu-item">
                                            <a href="javascript:void(0)"
                                                onclick="selectFAQSection($(this).data('section'))"
                                                class="front-help-menu-link" data-section="1">
                                                <div class="front-help-menu-link__left">
                                                    <div
                                                        class="front-help-menu-link__icon front-help-menu-link__icon--personal">
                                                    </div>
                                                    <div class="front-help-menu-link__text">Personal account &
                                                        Security</div>
                                                </div>
                                                <div class="front-help-menu-link__right">
                                                    <div class="front-help-menu-link__count">9</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="front-help-menu-item">
                                            <a href="javascript:void(0)"
                                                onclick="selectFAQSection($(this).data('section'))"
                                                class="front-help-menu-link" data-section="2">
                                                <div
                                                    class="front-help-menu-link__left front-help-menu-link__icon--wallet">
                                                    <div class="front-help-menu-link__icon"></div>
                                                    <div class="front-help-menu-link__text">Crypto Wallet</div>
                                                </div>
                                                <div class="front-help-menu-link__right">
                                                    <div class="front-help-menu-link__count">5</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="front-help-menu-item">
                                            <a href="javascript:void(0)"
                                                onclick="selectFAQSection($(this).data('section'))"
                                                class="front-help-menu-link" data-section="3">
                                                <div class="front-help-menu-link__left">
                                                    <div
                                                        class="front-help-menu-link__icon front-help-menu-link__icon--general">
                                                    </div>
                                                    <div class="front-help-menu-link__text">Exchange</div>
                                                </div>
                                                <div class="front-help-menu-link__right">
                                                    <div class="front-help-menu-link__count">3</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="front-help-menu-item">
                                            <a href="javascript:void(0)"
                                                onclick="selectFAQSection($(this).data('section'))"
                                                class="front-help-menu-link" data-section="4">
                                                <div class="front-help-menu-link__left">
                                                    <div
                                                        class="front-help-menu-link__icon front-help-menu-link__icon--ai">
                                                    </div>
                                                    <div class="front-help-menu-link__text">AI Staking</div>
                                                </div>
                                                <div class="front-help-menu-link__right">
                                                    <div class="front-help-menu-link__count">6</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="front-help-menu-item">
                                            <a href="javascript:void(0)"
                                                onclick="selectFAQSection($(this).data('section'))"
                                                class="front-help-menu-link" data-section="5">
                                                <div class="front-help-menu-link__left">
                                                    <div
                                                        class="front-help-menu-link__icon front-help-menu-link__icon--crypto">
                                                    </div>
                                                    <div class="front-help-menu-link__text">Crypto Loans</div>
                                                </div>
                                                <div class="front-help-menu-link__right">
                                                    <div class="front-help-menu-link__count">8</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="front-help-menu-item">
                                            <a href="javascript:void(0)"
                                                onclick="selectFAQSection($(this).data('section'))"
                                                class="front-help-menu-link" data-section="6">
                                                <div class="front-help-menu-link__left">
                                                    <div
                                                        class="front-help-menu-link__icon front-help-menu-link__icon--affiliate">
                                                    </div>
                                                    <div class="front-help-menu-link__text">Affiliate program
                                                    </div>
                                                </div>
                                                <div class="front-help-menu-link__right">
                                                    <div class="front-help-menu-link__count">10</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="front-page__right">
                        <div class="front-page__content">

                            <div class="front-help-menu-block">
                                <div class="front-help-menu-block__inner">
                                    <div class="front-help-menu-dropdown-title-block">
                                        <div class="front-help-menu-dropdown-title">
                                            <div class="front-help-menu-dropdown-title__text">
                                                Categories
                                            </div>
                                            <div class="front-help-menu-dropdown-title__arrow"></div>
                                        </div>
                                    </div>
                                    <div class="front-help-menu-wrapper">
                                        <div class="front-help-menu">
                                            <div class="front-help-menu-item">
                                                <a href="javascript:void(0)"
                                                    onclick="selectFAQSection($(this).data('section'))"
                                                    class="front-help-menu-link" data-section="">
                                                    <div class="front-help-menu-link__left">
                                                        <div
                                                            class="front-help-menu-link__icon front-help-menu-link__icon--general">
                                                        </div>
                                                        <div class="front-help-menu-link__text">All</div>
                                                    </div>
                                                    <div class="front-help-menu-link__right">
                                                        <div class="front-help-menu-link__count">41</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="front-help-menu-item">
                                                <a href="javascript:void(0)"
                                                    onclick="selectFAQSection($(this).data('section'))"
                                                    class="front-help-menu-link" data-section="1">
                                                    <div class="front-help-menu-link__left">
                                                        <div
                                                            class="front-help-menu-link__icon front-help-menu-link__icon--personal">
                                                        </div>
                                                        <div class="front-help-menu-link__text">Personal account
                                                            & Security</div>
                                                    </div>
                                                    <div class="front-help-menu-link__right">
                                                        <div class="front-help-menu-link__count">9</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="front-help-menu-item">
                                                <a href="javascript:void(0)"
                                                    onclick="selectFAQSection($(this).data('section'))"
                                                    class="front-help-menu-link" data-section="2">
                                                    <div
                                                        class="front-help-menu-link__left front-help-menu-link__icon--wallet">
                                                        <div class="front-help-menu-link__icon"></div>
                                                        <div class="front-help-menu-link__text">Crypto Wallet
                                                        </div>
                                                    </div>
                                                    <div class="front-help-menu-link__right">
                                                        <div class="front-help-menu-link__count">5</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="front-help-menu-item">
                                                <a href="javascript:void(0)"
                                                    onclick="selectFAQSection($(this).data('section'))"
                                                    class="front-help-menu-link" data-section="3">
                                                    <div class="front-help-menu-link__left">
                                                        <div
                                                            class="front-help-menu-link__icon front-help-menu-link__icon--general">
                                                        </div>
                                                        <div class="front-help-menu-link__text">Exchange</div>
                                                    </div>
                                                    <div class="front-help-menu-link__right">
                                                        <div class="front-help-menu-link__count">3</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="front-help-menu-item">
                                                <a href="javascript:void(0)"
                                                    onclick="selectFAQSection($(this).data('section'))"
                                                    class="front-help-menu-link" data-section="4">
                                                    <div class="front-help-menu-link__left">
                                                        <div
                                                            class="front-help-menu-link__icon front-help-menu-link__icon--ai">
                                                        </div>
                                                        <div class="front-help-menu-link__text">AI Staking</div>
                                                    </div>
                                                    <div class="front-help-menu-link__right">
                                                        <div class="front-help-menu-link__count">6</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="front-help-menu-item">
                                                <a href="javascript:void(0)"
                                                    onclick="selectFAQSection($(this).data('section'))"
                                                    class="front-help-menu-link" data-section="5">
                                                    <div class="front-help-menu-link__left">
                                                        <div
                                                            class="front-help-menu-link__icon front-help-menu-link__icon--crypto">
                                                        </div>
                                                        <div class="front-help-menu-link__text">Crypto Loans
                                                        </div>
                                                    </div>
                                                    <div class="front-help-menu-link__right">
                                                        <div class="front-help-menu-link__count">8</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="front-help-menu-item">
                                                <a href="javascript:void(0)"
                                                    onclick="selectFAQSection($(this).data('section'))"
                                                    class="front-help-menu-link" data-section="6">
                                                    <div class="front-help-menu-link__left">
                                                        <div
                                                            class="front-help-menu-link__icon front-help-menu-link__icon--affiliate">
                                                        </div>
                                                        <div class="front-help-menu-link__text">Affiliate
                                                            program</div>
                                                    </div>
                                                    <div class="front-help-menu-link__right">
                                                        <div class="front-help-menu-link__count">10</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="help-article-items-block">
                                <div class="help-article-items">


                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="1">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Personal account & Security
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How to register an account?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>To get a wallet and start using OORA3 products, click
                                                        "Sign up" on any website page. Next, enter your email or
                                                        mobile number, create a username and a secure password
                                                        to log in, and specify your country of residence. If
                                                        necessary, enter your upline promo code if you used
                                                        other user's invitation to log in and the field was not
                                                        filled in automatically. Agree to the terms of use and
                                                        click "Create an account".

                                                    </p>
                                                    <p>Next, the platform will generate a special recovery
                                                        phrase of 12 words for your wallet. Safely keep this
                                                        phrase offline and go to your personal account.

                                                    </p>
                                                    <p>To log in with Telegram, click "Log In with Telegram" in
                                                        the account creation window, and then, when using the
                                                        web version of the website, log in to the TM widget that
                                                        appears. When you log in via the OORA3 mini-app, your
                                                        wallet will be created automatically.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="1">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Personal account & Security
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How to log in to my account?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>To access your personal account, click "Sign In" on any
                                                        website page. Next, select the login method and enter
                                                        your email, username, or mobile number. Then enter the
                                                        access password from your account and click "Log In". If
                                                        the two-factor authentication option is enabled,
                                                        additionally confirm the login by entering the 2FA code.

                                                    </p>
                                                    <p>To log in to your wallet with Telegram, click "Log In
                                                        with Telegram" and log in to the TM widget that appears.
                                                    </p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="1">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Personal account & Security
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How to link a Telegram account to my wallet?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>You can use OORA3 products directly in your Telegram
                                                        mobile app or use it to quickly and securely log in to
                                                        your wallet. To link a Telegram account, click "Connect
                                                        Telegram" in the Settings frame of your personal account
                                                        and log in to the TM widget that appears. Confirm the
                                                        action if necessary. If necessary, you can always unlink
                                                        the linked Telegram account. </p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="1">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Personal account & Security
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How can I change my username, email, or mobile number?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>You can update your basic personal information in the
                                                        Settings of your personal account: click "Change" or
                                                        "Set" (if you haven't done this before) in the
                                                        appropriate frame and save your new username, email
                                                        address, mobile number or country of residence. Confirm
                                                        the action if necessary.</p>

                                                    <div class="system-message-block">
                                                        <div class="system-message system-message--success">
                                                            <div class="system-message__icon"></div>
                                                            <div class="system-message__content">
                                                                <div class="system-message__text">For security
                                                                    reasons, the username is hidden from view,
                                                                    so instead other users associated with you
                                                                    can see your public UID, which cannot be
                                                                    changed.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="1">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Personal account & Security
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    I forgot my account password, how can I restore access to my
                                                    wallet?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>To restore access to your account, click "Forgot your
                                                        password?" in the login window, and enter your email
                                                        address in the next window. Confirm the action using a
                                                        secret code received by email or a 2FA code if
                                                        two-factor authentication was previously enabled. Next,
                                                        enter a new password or use a secure password generator,
                                                        re-enter it and complete the recovery, having saved the
                                                        changes.

                                                    </p>
                                                    <p>You can also confirm ownership of the wallet using the
                                                        mnemonic phrase received when creating the account.
                                                        Select "Recovery phrase" in the recovery window and
                                                        enter the 12 words of your phrase.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="1">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Personal account & Security
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How can I change my account password?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>To change an existing password (when logging with
                                                        Telegram account, the password may be missing), go to
                                                        the Security tab on the Settings page of your personal
                                                        account and click "Change" in the corresponding frame.
                                                        Enter a new secure password, enter the current password
                                                        below and save the changes you have made. Confirm the
                                                        action if necessary.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="1">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Personal account & Security
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    Where can I find the recovery phrase?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>You can find your 12-word wallet recovery mnemonic phrase
                                                        in the Security tab on the Account Settings page. To
                                                        view the phrase, click "Show" in the corresponding frame
                                                        and, if necessary, confirm the action using the method
                                                        suggested by the platform.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="1">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Personal account & Security
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How can I set my payment password?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>Go to the Security tab on the Settings page of your
                                                        personal account and click "Set" in the corresponding
                                                        frame. Enter a secure payment password and, if
                                                        necessary, confirm the saving using the suggested
                                                        method. Now, to perform any financial transaction in the
                                                        wallet, you will need to enter this payment password.
                                                    </p>

                                                    <div class="system-message-block">
                                                        <div class="system-message system-message--alert">
                                                            <div class="system-message__icon"></div>
                                                            <div class="system-message__content">
                                                                <div class="system-message__text">For security
                                                                    reasons, we recommend setting a payment
                                                                    password immediately after account creation
                                                                    to avoid unauthorized transactions.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="1">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Personal account & Security
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How can I enable two-factor authentication?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>Go to the Security tab on the Settings page of your
                                                        personal account and click "Enable" in the 2FA option
                                                        management frame. Using any mobile authentication app,
                                                        such as Google Authenticator, scan the issued QR code or
                                                        copy the private key from the pop-up window into it.
                                                        Next, enter the 6-digit code from the application and
                                                        confirm the activation using the method suggested by the
                                                        platform. Now logging in to your account and other
                                                        important actions in your wallet will require additional
                                                        confirmation by entering a 2FA code.</p>

                                                    <div class="system-message-block">
                                                        <div class="system-message system-message--alert">
                                                            <div class="system-message__icon"></div>
                                                            <div class="system-message__content">
                                                                <div class="system-message__text">For security
                                                                    reasons, it is recommended to enable
                                                                    two-factor authentication immediately after
                                                                    account creation to prevent unauthorized
                                                                    access.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>





                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="2">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Crypto Wallet
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How can I top up my wallet or get a crypto transfer?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>To top up your wallet balance, click to the Deposit
                                                        button in your personal account, select a currency from
                                                        the list of available coins and the standard of the
                                                        network where you plan to receive a crypto transfer, and
                                                        then click "Get address". The platform will
                                                        automatically generate a permanent address and
                                                        destination tag (if necessary) for the selected
                                                        transaction method, which will be assigned to your
                                                        wallet. Copy the address and send it to the sender.</p>

                                                    <div class="system-message-block">
                                                        <div class="system-message system-message--success">
                                                            <div class="system-message__icon"></div>
                                                            <div class="system-message__content">
                                                                <div class="system-message__text">Please note
                                                                    that when choosing some cryptocurrencies,
                                                                    you will need to specify the exact amount of
                                                                    the incoming transfer, and the address will
                                                                    be generated only for this transaction.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="2">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Crypto Wallet
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How can I transfer funds from my wallet?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>To send coins from your wallet balance, go to the Send
                                                        page of your personal account, select the cryptocurrency
                                                        and the standard of the network in which you plan to
                                                        make the transaction. Then paste the recipient's address
                                                        or select from the saved ones by clicking "Favorite
                                                        addresses" and, if necessary, enter the destination tag.
                                                        Specify the transfer amount and read the transaction
                                                        details about the network's commission, the approximate
                                                        execution time, and the exact amount of the transaction,
                                                        including the commission. Next, enter your payment
                                                        password to confirm the transaction before sending, and
                                                        if it is missing, click "Send now" and, if necessary,
                                                        confirm the transfer using another method.</p>

                                                    <div class="system-message-block">
                                                        <div class="system-message system-message--alert">
                                                            <div class="system-message__icon"></div>
                                                            <div class="system-message__content">
                                                                <div class="system-message__text">Before making
                                                                    a transaction, pay attention once again to
                                                                    the correctness of the recipient's address,
                                                                    destination tag and the selected network: in
                                                                    case of an error, it will be impossible to
                                                                    refund the funds.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="2">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Crypto Wallet
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How quickly will the recipient receive the funds?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>Usually, all cryptocurrency transfers are made instantly
                                                        or within 15 minutes. In some very rare cases,
                                                        transaction processing can take up to 24 hours. Further
                                                        confirmation of the transaction by the miners and the
                                                        actual transfer to the recipient's address takes place
                                                        outside the OORA3 infrastructure and depends on the
                                                        workload of the blockchain network.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="2">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Crypto Wallet
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How to save the recipient's address?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>For frequent transfers to the same recipient, you can add
                                                        its address to the favorites list. Go to the Favorite
                                                        addresses tab on the Settings page of your personal
                                                        account and click "Add". Select the cryptocurrency and
                                                        network standard, insert the address you want to save,
                                                        and enter the destination tag if necessary. Confirm the
                                                        saving if necessary.

                                                    </p>
                                                    <p>To remove it from the list, click on the corresponding
                                                        icon next to the desired address and confirm the action
                                                        if the platform requests additional confirmation.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="2">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Crypto Wallet
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    Where can I keep track of my wallet balance and my
                                                    transaction history?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>The total balance of all coins on the account, equivalent
                                                        to the current USDT exchange rate, is shown on the
                                                        Dashboard page of your personal account. Below is a list
                                                        of cryptocurrencies in your wallet that have been
                                                        received or are awaiting receipt, with a breakdown of
                                                        the balance by category: the amount available for
                                                        disposal in hot storage, the number of your coins in
                                                        staking, and crypto assets held as collateral.

                                                    </p>
                                                    <p>On the Transactions page of your personal account, you
                                                        can find a log of all transactions performed in the
                                                        wallet and interactions with OORA3 products, sorted by
                                                        currency, type, or status. The log contains incoming and
                                                        outgoing crypto transfers, purchases and sales through a
                                                        currency exchange service, your staking contracts, loan
                                                        granting and repayment operations, and accruals of
                                                        profits, bonuses, cashback and rewards. Each transaction
                                                        contains additional information about the type of
                                                        operation (for example, the contract number, staking
                                                        strategy, or exchange coins), the transaction amount
                                                        (static or dynamic), the current status, and the
                                                        execution date.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>




                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="3">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Exchange
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How to make a cryptocurrency exchange?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>To switch to the built-in automatic cryptocurrency
                                                        exchange service, log in to the Exchange page of your
                                                        personal account. Select a cryptocurrency pair, enter
                                                        the amount, and make sure that the exchange rate,
                                                        transaction fee, and total amount of coins to receive
                                                        meet your expectations. Click "Exchange now" and confirm
                                                        the operation with the payment password if you set it
                                                        earlier in the wallet settings. After that, the exchange
                                                        operation will be displayed on the Transactions page and
                                                        the wallet balance will be replenished.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="3">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Exchange
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How quickly will I receive the coins after the exchange?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>The exchange of cryptocurrencies takes place instantly.
                                                    </p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="3">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Exchange
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    What is the commission for the exchange of cryptocurrencies?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>For using the built-in OORA3 exchanger, we charge a
                                                        commission of only 1% of the amount of the exchange
                                                        transaction.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>




                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="4">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                AI Staking
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How to stake coins and start earning?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>Go to the AI Staking page of your personal account and
                                                        click "Stake Now". Choose a trading strategy, having
                                                        studied the advantages of each of them, and specify the
                                                        currency that you are going to stake from your wallet
                                                        balance.

                                                    </p>
                                                    <p>When choosing a Short/Medium/Long term strategy, specify
                                                        the minimum lock period: during this time, stake
                                                        withdrawal will be unavailable. The longer the contract
                                                        lasts, the higher your discount on the platform's fees
                                                        and, therefore, more profitable staking is. Next, enter
                                                        the amount of the contract, again focusing on the
                                                        discount amount.

                                                    </p>
                                                    <p>Finally, evaluate the predicted profitability of the
                                                        contract in the Profit calculator. Depending on the
                                                        success of AI model market trades, your real net
                                                        earnings from staking will be close to the percentage
                                                        values shown, but will not fall below the minimum.

                                                    </p>
                                                    <p>After activation, your staking will appear in your
                                                        personal account with the contract number, amount, net
                                                        return, earning fees, start date and average profit
                                                        margins.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="4">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                AI Staking
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    When will I make a profit on my stake?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>The moment when profits are accrued on open contracts
                                                        depends on the chosen strategy: according to Algorithmic
                                                        trading, income from staking flows from the pool to your
                                                        wallet balance every second, according to other
                                                        strategies - after the AI bot completes each personal
                                                        trading transaction. The number of completed trades on
                                                        your Short/Medium/Long term contract is displayed in the
                                                        active stake module.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="4">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                AI Staking
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How can I add funds to the contract?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>Click "Add funds" in the active contract module and enter
                                                        the amount you plan to add to the stake in the pop-up
                                                        window, based on the available balance displayed next to
                                                        it. Below you can calculate the amount you need to add
                                                        to this stake in order to get a discount on the
                                                        platform's commission and increase the contract
                                                        profitability.

                                                    </p>
                                                    <p>After adding funds, your stake will be instantly
                                                        increased, income will be calculated based on the amount
                                                        deposited, and the contract modification operation will
                                                        appear in the transaction log. </p>

                                                    <div class="system-message-block">
                                                        <div class="system-message system-message--alert">
                                                            <div class="system-message__icon"></div>
                                                            <div class="system-message__content">
                                                                <div class="system-message__text">Please note
                                                                    that after adding coins to the
                                                                    Short/Medium/Long term contract, the lock
                                                                    period will resume again.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="4">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                AI Staking
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How to withdraw coins from staking?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>To return coins from staking, you need to make a release
                                                        and wait for the end of the hold period. A release under
                                                        an Algorithmic strategy contract is possible at any time
                                                        with a hold of 8 hours. The release of the remaining
                                                        strategies will be available after the completion of the
                                                        contract, the waiting time from the hold will be 12
                                                        hours (Short term), 24 hours (Medium term) and 72 hours
                                                        (Long term).

                                                    </p>
                                                    <p>Click the "Release" button in the active contract module
                                                        and specify the amount you plan to withdraw from the
                                                        stake in the pop-up window. Please note that after
                                                        reducing the contract amount, your discount on fees may
                                                        decrease or cease to apply, which will lead to a fall of
                                                        profitability.

                                                    </p>
                                                    <p>Each contract can have only one application in the
                                                        release queue. To cancel the release, click "Cancel
                                                        release".</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="4">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                AI Staking
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How to enable automatic restaking?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>Your contract will bring more profit if you enable the
                                                        restaking control option. After "Compounding" is
                                                        activated in the active contract module, the income from
                                                        transactions will be automatically added to the stake
                                                        amount. Compounding is only available for contracts
                                                        running under Short/Medium/Long term trading strategies.
                                                    </p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="4">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                AI Staking
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    Where can I view AI bots' trades under my or third-party
                                                    contracts?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>Click on "AI Activity" on the AI Staking page of your
                                                        personal account to access the log of the latest trades
                                                        of our bots on the open market. Here you can explore the
                                                        details of each transaction: from the currency pair and
                                                        the prices of opening/closing positions to the exact
                                                        income received by the platform and the owner of the
                                                        contract.

                                                    </p>
                                                    <p>In the Algorithmic tab, the client specifies a pool of
                                                        stake contract holders, for other strategies - the
                                                        user's public UID or contract number, if you are the
                                                        owner. To view all personal trades made under your
                                                        contracts, sort the list by selecting "My" in the
                                                        strategies tab or click "View" in the active stake
                                                        module.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>



                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="5">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Crypto Loans
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How can I get a loan secured by cryptocurrency?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>Go to the Loans page and click "Borrow now" to view all
                                                        currently available loan options for each currency.
                                                        Expand the list of loan terms for the desired coin and
                                                        click "Borrow" next to the selected option with a
                                                        comfortable APR interest rate and validity period.

                                                    </p>
                                                    <p>On the loan opening page, you can change the previously
                                                        selected currency in which you plan to obtain a loan,
                                                        enter the loan amount and select the duration again
                                                        based on the APR rate. Next, specify the cryptocurrency
                                                        and the amount of your collateral so that the LTV
                                                        coefficient does not exceed 80%. Calculate the total
                                                        amount of the commission and the possible price of
                                                        collateral liquidation, and click "Borrow now".

                                                    </p>
                                                    <p>After that, the loan will be instantly transferred to
                                                        your wallet balance, and the deposit amount will be
                                                        blocked until the loan is repaid. All information about
                                                        the active loan will appear on the Loans page, including
                                                        the number, current APR and LTV values, liquidation
                                                        price and activation date.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="5">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Crypto Loans
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    What is the difference between flexible and fixed loans?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>The flexible/ fixed markings in the terms of the loan
                                                        determines the need to repay the loan within a certain
                                                        period of time. A loan with a fixed duration requires
                                                        payment within a set number of days with interest
                                                        accrued in advance for the period of use. The flexible
                                                        loan is valid indefinitely and is available for
                                                        repayment at any time, and an APR fee is charged once a
                                                        day.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="5">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Crypto Loans
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    What is the LTV coefficient and how is it calculated?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>The Loan-To-Value ratio shows the current ratio between
                                                        the loan amount to be paid (including the service fee)
                                                        and the current value of your cryptocurrency collateral
                                                        on the exchange. When issuing a loan, an LTV value in
                                                        the range of up to 80% is acceptable, that is, for
                                                        example, if the value of your crypto deposit is
                                                        equivalent to 10,000 USDT, then you can get a loan of up
                                                        to 8,000 USDT.</p>

                                                    <div class="system-message-block">
                                                        <div class="system-message system-message--alert">
                                                            <div class="system-message__icon"></div>
                                                            <div class="system-message__content">
                                                                <div class="system-message__text">Always monitor
                                                                    the LTV ratio of the current loan: as the
                                                                    value of your crypto asset increases, it
                                                                    decreases, and as it falls, it increases,
                                                                    bringing the position closer to liquidation.
                                                                    The current LTV is displayed in the active
                                                                    loan module on the Loans page of your
                                                                    personal account and is updated in real
                                                                    time.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="5">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Crypto Loans
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How is the active loan commission calculated?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>The amount of the commission is determined by the annual
                                                        interest rate (APR) applied to the current loan amount
                                                        due. The APR of your loan is indicated in the terms of
                                                        the loan at the moment the loan is opened: the interest
                                                        rate depends on the currency and its validity period.
                                                        The current due amount consists of the initial loan
                                                        amount and the commission that is added on top of it.

                                                    </p>
                                                    <p>The fixed loan commision is added to the amount
                                                        immediately for the entire period of the loan. The
                                                        commission for using a flexible loan is charged every 24
                                                        hours and increases your amount due by the amount of the
                                                        APR daily percentage.

                                                    </p>
                                                    <p>Use a loan calculator to mathematically precise calculate
                                                        the commission for maintenance of your future loan.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="5">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Crypto Loans
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How to repay the loan?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>To repay the loan, click "Repay" on the Loans page of
                                                        your personal account. In the pop-up window, pay
                                                        attention to the loan amount due, which consists of the
                                                        amounts of the initial loan and the accrued commission
                                                        according to the terms of use of the loan. After
                                                        clicking on the "Repay" button, the loan amount due will
                                                        be automatically debited from your balance, and the
                                                        collateral will be returned back to your wallet. The
                                                        date and time of completion will be added to the loan
                                                        module, and the loan status will change to "Closed".</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="5">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Crypto Loans
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    In which case can my collateral be liquidated?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>If the LTV of your loan reaches the 95% threshold (this
                                                        happens following a sharp drop in the loan's exchange
                                                        rate), your collateral is automatically sold on the open
                                                        market to cover the loan amount and OORA3 commission in
                                                        the amount of the APR interest rate for the term of this
                                                        loan. The exact liquidation price of the LIQ
                                                        cryptocurrency that secures your collateral is displayed
                                                        in the active loan module. To avoid forced liquidation,
                                                        increase the amount of collateral in proper time or make
                                                        a loan repayment.</p>

                                                    <div class="system-message-block">
                                                        <div class="system-message system-message--alert">
                                                            <div class="system-message__icon"></div>
                                                            <div class="system-message__content">
                                                                <div class="system-message__text">Please note
                                                                    that the remaining 5% share of the
                                                                    collateral following the sale is charged as
                                                                    an extra liquidation service fee.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="5">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Crypto Loans
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How to add a collateral?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>To increase the collateral amount, click "Add" in your
                                                        your loan module and in the pop-up window enter the
                                                        amount you plan to deposit, for convenience, focusing on
                                                        the available number of coins displayed next to it.
                                                        Complete the action by clicking "Add". The required
                                                        amount will be automatically added into the collateral.
                                                        Evaluate how much the LTV of your loan has decreased and
                                                        repeat the operation if necessary.</p>

                                                    <div class="system-message-block">
                                                        <div class="system-message system-message--alert">
                                                            <div class="system-message__icon"></div>
                                                            <div class="system-message__content">
                                                                <div class="system-message__text">If the LTV
                                                                    ratio of the loan exceeds or is close to
                                                                    90%, it is recommended to provide additional
                                                                    collateral to prevent its liquidation.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="5">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Crypto Loans
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    What happens if I delay repayment of the loan?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>In case of non-repayment of a loan with a fixed duration
                                                        before the expiration date, a double flexible-APR will
                                                        be applied to it after the expiration date. The loan
                                                        will continue to be effective with updated terms until
                                                        the debt is repaid or the collateral is liquidated.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>






                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="6">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Affiliate program
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    What are the terms of the affiliate program?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>Promote the wallet products to your audience using an
                                                        affiliate link or promo code, and earn up to 40% of the
                                                        platform's commission for each staking contract,
                                                        exchange operation, or cryptocurrency loan from an
                                                        invited referral to the seventh line. On the Partners
                                                        page in your personal account, we provide you with full
                                                        control over your affiliate structure with statistics,
                                                        the list of invited guests, current conditions, setting
                                                        up a personalized promo code and cashback.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="6">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Affiliate program
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How to invite a referral?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>To invite a user, send them one of your referral links,
                                                        which you can find on the Partners page in your personal
                                                        account. We will identify your referral using these
                                                        links: the first is a multi-purpose link and it is used
                                                        to go to the website, the second leads to the official
                                                        OORA3 mini-app inside Telegram. The referral who came
                                                        using your link will receive your individual promo code
                                                        when creating an account. They can also, after receiving
                                                        this code from you directly, specify it independently,
                                                        regardless of clicking on the invitation links.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="6">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Affiliate program
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How is the reward amount for an invited referral calculated?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>When your referral uses any OORA3 staking, loan, or
                                                        exchange services, the platform charges a service
                                                        commission. The affiliate percentage of the platform's
                                                        commission is your reward. The more coins your referral
                                                        adds to a stake, exchanges, or borrows, the higher is
                                                        your income under the affiliate program.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="6">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Affiliate program
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How to add a custom promo code?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>In order to better communicate to your referrals, you can
                                                        supplement the standard system promo code with a more
                                                        recognizable one among your audience. To create a custom
                                                        promo code, go to the Partners page in your personal
                                                        account and click "Add custom" in the corresponding
                                                        frame. Enter the original code in the pop-up window and
                                                        click "Add". The new promo code will be applied.</p>

                                                    <div class="system-message-block">
                                                        <div class="system-message system-message--alert">
                                                            <div class="system-message__icon"></div>
                                                            <div class="system-message__content">
                                                                <div class="system-message__text">Be careful, a
                                                                    custom promo code can only be created once,
                                                                    so you won't be able to change it or add
                                                                    another one.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="6">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Affiliate program
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    How to set up cashback for my referrals?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>To share a portion of the affiliate fee with your
                                                        referrals, go to the Partners page and look at the
                                                        "Cashback" frame. The module displays the current
                                                        percentage of cashback for referrals from the first to
                                                        the seventh line (where L1 is your direct referrals) of
                                                        your affiliate structure. By default, the size of the
                                                        cashback is set to 0%.

                                                    </p>
                                                    <p>Click "Change" to go to the cashback configuration, enter
                                                        the percentage of refund for your future partners next
                                                        to the selected referral line and save the changes. </p>
                                                    <div class="system-message-block">
                                                        <div class="system-message system-message--alert">
                                                            <div class="system-message__icon"></div>
                                                            <div class="system-message__content">
                                                                <div class="system-message__text">Please note
                                                                    that only your new referrals will receive
                                                                    the updated cashback level, while current
                                                                    referrals will keep the old terms.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="6">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Affiliate program
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    What are the benefits of upgrading my affiliate level?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>Each upgrade of your affiliate status from OORA3 1 to
                                                        OORA3 18 gives you an increase in the percentage of fee
                                                        on the referral lines of your structure and an
                                                        additional USDT bonus to your wallet. You can track your
                                                        progress in the "Next level" module on the Partners
                                                        page: it displays the current cash flow of your
                                                        structure, the required turnover for the transition, the
                                                        amount of the potential bonus and future affiliate
                                                        terms.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="6">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Affiliate program
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    Where can I track my rewards?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>The total amount of all rewards received for staking
                                                        coins, exchange transactions, or loans opened from your
                                                        referrals is displayed in the "Total affiliate earnings"
                                                        frame on the Partners page. Here, according to accrual
                                                        statistics, you can evaluate which product your
                                                        referrals use most often.

                                                    </p>
                                                    <p>On the Transactions page in your personal account, you
                                                        can track each award or sent cashback in particular. The
                                                        type of operation and the product used, the partner's
                                                        UID, the amount and currency, the current status, and
                                                        the date and time of execution will be indicated for all
                                                        transactions. </p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="6">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Affiliate program
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    Where can I see a list of my referrals?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>The list of all invited referrals is on the Partners page
                                                        in your personal account. The table contains the
                                                        referral's UID, the depth of his line in the structure,
                                                        the cashback level, the activity status, the total
                                                        amount of rewards received for him, and your commission
                                                        for each product used by the referral (indicating the
                                                        amounts in staking and the exchange volumes).</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="6">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Affiliate program
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    My referral has signed up. Why don't I see him in the list
                                                    of partners?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>When a user signs up using your invitation link or enters
                                                        your promo code when creating an account, they
                                                        automatically become your referral. If you don't see
                                                        their public UID in the list of partners, then there is
                                                        an error: for example, the user used an incorrect promo
                                                        code or had already visited the site using someone
                                                        else's link.

                                                    </p>
                                                    <p>Your referral needs to contact customer support with a
                                                        request to change the upline before using any OORA3
                                                        products.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="help-article-item-wrapper globalPageFAQResultsItemsItem"
                                        data-section="6">
                                        <div class="help-article-item">
                                            <div class="help-article-item__top">
                                                <div class="help-article-item__tags-block">
                                                    <div class="help-article-item__tags">
                                                        <div class="help-article-item__tag-wrapper">
                                                            <div class="help-article-item__tag">
                                                                Affiliate program
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="help-article-item__title">
                                                    Where can I download OORA3 promo materials?
                                                </h3>
                                                <div class="help-article-item__descr">
                                                    <p>Go to the Promo materials tab on the Partners page in
                                                        your personal account. It contains promo materials about
                                                        OORA3's financial products with a unified visual
                                                        representation of the brand, which you can use to
                                                        attract referrals and conduct marketing campaigns.</p>
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


@include('layouts.mainsite.footer')
