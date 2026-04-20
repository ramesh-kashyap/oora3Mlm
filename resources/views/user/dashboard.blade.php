<div class="db-page-block" id="globalAccount">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="db-page">
                    <div class="row">
                       
                        @include('layouts.upnl.sidebar')
                        <div class="col-12 col-xl-9">
                            <div class="db-page__right globalAccount globalAccountDashboard">
                                <div class="db-page__title-block">
                                    <h2 class="db-page__title">Dashboard</h2>
                                </div>
                                <div class="db-page__descr-block">
                                    <div class="db-page__descr">A detailed overview of your crypto portfolio, including available assets on your balance sheet, staked coins, and collateral loans.</div>
                                </div>
                                <div class="db-page__content">

                                    <div class="db-info-panel-list-block">
                                        <div class="db-info-panel-list">
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="db-info-panel-wrapper">
                                                        <div class="db-info-panel db-info-panel--balance">
                                                            <div class="db-info-panel__top-block">
                                                                <div class="db-info-panel__top">
                                                                    <div class="db-info-panel__title-block">
                                                                        <div class="db-info-panel__title">
                                                                            Total available
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="db-info-amount-block">
                                                                <div class="db-info-amount ">
                                                                    <div class="db-info-amount__currency">$
                                                                    </div>
                                                                    <div class="db-info-amount__dollar optimaDynamicAmount" data-module="user-balance-usd" data-mask="[amount]" data-round="2">0</div>
                                                                </div>
                                                                <div class="db-info-amount-note">
                                                                    Total available for payments and transfers
                                                                </div>
                                                            </div>
                                                            <div class="db-info-operation-items-block">
                                                                <div class="db-info-operation-items">
                                                                    <div class="db-info-operation-item-wrapper">
                                                                        <div class="db-info-operation-item db-info-operation-item--staking">
                                                                            <div class="db-info-operation-item__icon-wrapper">
                                                                                <div class="db-info-operation-item__icon">
                                                                                </div>
                                                                            </div>
                                                                            <div class="db-info-operation-item__title">
                                                                                Staking
                                                                            </div>
                                                                            <div class="db-info-operation-item__value" data-module="user-staking-usd">$0</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="db-info-operation-item-wrapper">
                                                                        <div class="db-info-operation-item db-info-operation-item--loans">
                                                                            <div class="db-info-operation-item__icon-wrapper">
                                                                                <div class="db-info-operation-item__icon">
                                                                                </div>
                                                                            </div>
                                                                            <div class="db-info-operation-item__title">
                                                                                Loans
                                                                            </div>
                                                                            <div class="db-info-operation-item__value" data-module="user-loans-usd">$0</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="db-info-action-buttons-block">
                                                                <div class="db-info-action-buttons">
                                                                    <div class="db-info-action-button-wrapper">
                                                                        <button type="button" class="db-info-action-deposit-button green-gradient-btn iconed-btn button--small optimaDepositButton">
                                                                            <div class="iconed-btn__icon"></div>
                                                                            <div class="iconed-btn__text">
                                                                                Deposit</div>
                                                                        </button>
                                                                    </div>
                                                                    <div class="db-info-action-button-wrapper">
                                                                        <button type="button" data-module="menu" data-section="send" class="db-info-action-send-button light-black-btn iconed-btn button--small">
                                                                            <div class="iconed-btn__icon"></div>
                                                                            <div class="iconed-btn__text">Send
                                                                            </div>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="db-info-panel-wrapper">
                                                        <div class="db-info-panel db-info-panel--products">
                                                            <div class="db-info-panel__top-block">
                                                                <div class="db-info-panel__top">
                                                                    <div class="db-info-panel__title-block">
                                                                        <div class="db-info-panel__title">
                                                                            Products
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="db-info-products-slider-block">
                                                                <div class="db-info-products-slider swiper-slider">
                                                                    <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                                                                        <div class="swiper-wrapper" id="swiper-wrapper-48962ef22dd5e16b" aria-live="polite" style="transition-duration: 0ms; transition-delay: 0ms; transform: translate3d(0px, 0px, 0px);">



                                                                            <div class="db-info-products-slide swiper-slide swiper-slide-active" role="group" aria-label="1 / 4" style="width: 309px; margin-right: 20px;">
                                                                                <div class="db-info-products-slide-item">
                                                                                    <div class="db-info-products-slide-item__title-block">
                                                                                        <div class="db-info-products-slide-item__title">
                                                                                            <div class="db-info-products-slide-item__title__icon db-info-products-slide-item__title__icon--flame">
                                                                                                <div class="db-info-products-slide-item__title__icon-image">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="db-info-products-slide-item__title__text">
                                                                                                AI Staking
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="db-info-products-slide-item__descr">
                                                                                        Ultra profitable staking driven by innovative AI trading models
                                                                                    </div>
                                                                                    <div class="db-info-products-slide-item__button-block">
                                                                                        <button type="button" onclick="setActiveModule('staking');" class="db-info-products-slide-item__button light-black-btn iconed-btn button--small">
                                                                                            <div class="iconed-btn__text">
                                                                                                Stake Now</div>
                                                                                            <div class="iconed-btn__icon">
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="db-info-products-slide swiper-slide swiper-slide-next" role="group" aria-label="2 / 4" style="width: 309px; margin-right: 20px;">
                                                                                <div class="db-info-products-slide-item">
                                                                                    <div class="db-info-products-slide-item__title-block">
                                                                                        <div class="db-info-products-slide-item__title">
                                                                                            <div class="db-info-products-slide-item__title__icon db-info-products-slide-item__title__icon--wallet">
                                                                                                <div class="db-info-products-slide-item__title__icon-image">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="db-info-products-slide-item__title__text">
                                                                                                Crypto Wallet
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="db-info-products-slide-item__descr">
                                                                                        Your crypto wallet for secure transfers and fast coin exchange.
                                                                                    </div>
                                                                                    <div class="db-info-products-slide-item__button-block">
                                                                                        <button type="button" class="optimaDepositButton db-info-products-slide-item__button light-black-btn iconed-btn button--small">
                                                                                            <div class="iconed-btn__text">Deposit</div>
                                                                                            <div class="iconed-btn__icon">
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="db-info-products-slide swiper-slide" role="group" aria-label="3 / 4" style="width: 309px; margin-right: 20px;">
                                                                                <div class="db-info-products-slide-item">
                                                                                    <div class="db-info-products-slide-item__title-block">
                                                                                        <div class="db-info-products-slide-item__title">
                                                                                            <div class="db-info-products-slide-item__title__icon db-info-products-slide-item__title__icon--loans">
                                                                                                <div class="db-info-products-slide-item__title__icon-image">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="db-info-products-slide-item__title__text">
                                                                                                Crypto Loans
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="db-info-products-slide-item__descr">
                                                                                        Loans secured by cryptocurrencies with favorable terms and high LTV
                                                                                    </div>
                                                                                    <div class="db-info-products-slide-item__button-block">
                                                                                        <button type="button" onclick="setActiveModule('loans');" class="db-info-products-slide-item__button light-black-btn iconed-btn button--small">
                                                                                            <div class="iconed-btn__text">Borrow Now</div>
                                                                                            <div class="iconed-btn__icon">
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="db-info-products-slide swiper-slide" role="group" aria-label="4 / 4" style="width: 309px; margin-right: 20px;">
                                                                                <div class="db-info-products-slide-item">
                                                                                    <div class="db-info-products-slide-item__title-block">
                                                                                        <div class="db-info-products-slide-item__title">
                                                                                            <div class="db-info-products-slide-item__title__icon db-info-products-slide-item__title__icon--users">
                                                                                                <div class="db-info-products-slide-item__title__icon-image">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="db-info-products-slide-item__title__text">
                                                                                                Affiliate program
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="db-info-products-slide-item__descr">
                                                                                        Take part in the affiliate program and earn money with Optima
                                                                                    </div>
                                                                                    <div class="db-info-products-slide-item__button-block">
                                                                                        <button type="buttin" onclick="setActiveModule('partners');" class="db-info-products-slide-item__button light-black-btn iconed-btn button--small">
                                                                                            <div class="iconed-btn__text">Get promo code</div>
                                                                                            <div class="iconed-btn__icon">
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>




                                                                        </div>
                                                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>


                                                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-48962ef22dd5e16b" aria-disabled="true"></div>
                                                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-48962ef22dd5e16b" aria-disabled="false"></div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <div class="db-info-panel-wrapper">
                                                        <div class="db-info-panel db-info-panel--latest-news">
                                                            <div class="db-info-panel__top-block">
                                                                <div class="db-info-panel__top">
                                                                    <div class="db-info-panel__title-block">
                                                                        <div class="db-info-panel__title">
                                                                            Latest updates
                                                                        </div>
                                                                    </div>
                                                                    <div class="db-info-all-updates-link-block">
                                                                        <a href="https://t.me/optima_updates" target="_blank" class="db-info-all-updates-link">
                                                                            <div class="db-info-all-updates-link__icon">
                                                                            </div>
                                                                            <div class="db-info-all-updates-link__text">
                                                                                Channel
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="db-info-news-slider-block">
                                                                <div class="db-info-news-slider swiper-slider">
                                                                    <div class="swiper globalAccountDashboardSwiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                                                                        <div class="swiper-wrapper globalAccountDashboardSwiperWrapper" id="swiper-wrapper-6e65e4b21a6deb69" aria-live="polite" style="transition-duration: 0ms; transition-delay: 0ms; transform: translate3d(0px, 0px, 0px);">
                                                                            <div class="db-info-news-slide swiper-slide swiper-slide-active" role="group" aria-label="1 / 3" style="width: 309px; margin-right: 20px;">
                                                                                <a href="javascript:void(0)" data-href="/en/news/language-support-hindi/" onclick="openNewInModal($(this))" class="db-info-news-slide-item">
                                                                                    <div class="db-info-news-slide-item__image"><img class="image" src="{{asset('')}}assets/oora3/promo/n3-846-490.png" alt=""></div>
                                                                                    <div class="db-info-news-slide-item__content">
                                                                                        <div class="db-info-news-slide-item__info-block">
                                                                                            <div class="db-info-news-slide-item__info">
                                                                                                <div class="db-info-news-slide-item__status-wrapper">
                                                                                                    <div class="db-info-news-slide-item__status">New</div>
                                                                                                </div>
                                                                                                <div class="db-info-news-slide-item__date-wrapper">
                                                                                                    <div class="db-info-news-slide-item__date">Apr 02, 2026</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="db-info-news-slide-item__title-block">
                                                                                            <div class="db-info-news-slide-item__title">Language support: Hindi</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="db-info-news-slide swiper-slide swiper-slide-next" role="group" aria-label="2 / 3" style="width: 309px; margin-right: 20px;">
                                                                                <a href="javascript:void(0)" data-href="/en/news/press-release-global-launch/" onclick="openNewInModal($(this))" class="db-info-news-slide-item">
                                                                                    <div class="db-info-news-slide-item__image"><img class="image" src="{{asset('')}}assets/oora3/promo/n2-site-p-846-490.png" alt=""></div>
                                                                                    <div class="db-info-news-slide-item__content">
                                                                                        <div class="db-info-news-slide-item__info-block">
                                                                                            <div class="db-info-news-slide-item__info">
                                                                                                <div class="db-info-news-slide-item__status-wrapper"></div>
                                                                                                <div class="db-info-news-slide-item__date-wrapper">
                                                                                                    <div class="db-info-news-slide-item__date">Mar 29, 2026</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="db-info-news-slide-item__title-block">
                                                                                            <div class="db-info-news-slide-item__title">Press Release: Global Launch </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="db-info-news-slide swiper-slide" role="group" aria-label="3 / 3" style="width: 309px; margin-right: 20px;">
                                                                                <a href="javascript:void(0)" data-href="/en/news/press-release-soft-launch/" onclick="openNewInModal($(this))" class="db-info-news-slide-item">
                                                                                    <div class="db-info-news-slide-item__image"><img class="image" src="{{asset('')}}assets/oora3/promo/n1-site-p-846-490.png" alt=""></div>
                                                                                    <div class="db-info-news-slide-item__content">
                                                                                        <div class="db-info-news-slide-item__info-block">
                                                                                            <div class="db-info-news-slide-item__info">
                                                                                                <div class="db-info-news-slide-item__status-wrapper"></div>
                                                                                                <div class="db-info-news-slide-item__date-wrapper">
                                                                                                    <div class="db-info-news-slide-item__date">Mar 06, 2026</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="db-info-news-slide-item__title-block">
                                                                                            <div class="db-info-news-slide-item__title">Press Release: Soft Launch</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>


                                                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-6e65e4b21a6deb69" aria-disabled="true"></div>
                                                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-6e65e4b21a6deb69" aria-disabled="false"></div>

                                                                </div>
                                                            </div>



                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="db-asset-table-block">
                                        <div class="db-asset-table">
                                            <div class="db-asset-table-heading">
                                                <div class="db-asset-t-h-cell db-asset-t-h-cell--currency">
                                                    Currency
                                                </div>
                                                <div class="db-asset-t-h-cell db-asset-t-h-cell--available">
                                                    Available
                                                </div>
                                                <div class="db-asset-t-h-cell db-asset-t-h-cell--staking">
                                                    Staking
                                                </div>
                                                <div class="db-asset-t-h-cell db-asset-t-h-cell--loans">
                                                    Loans
                                                </div>
                                                <div class="db-asset-t-h-cell db-asset-t-h-cell--deposit">
                                                    Deposit
                                                </div>
                                                <div class="db-asset-t-h-cell db-asset-t-h-cell--send">
                                                    Send
                                                </div>
                                            </div>
                                            <div class="db-asset-table-items">
                                                <div class="db-asset-table-item">
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--currency">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Currency
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-currency-block">
                                                                <div class="db-asset-t-i-currency">

                                                                    <div class="currency-item">
                                                                        <div class="currency-icon currency-icon--usdt">
                                                                            <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/usdt.svg" alt="">
                                                                        </div>
                                                                        <div class="currency-item__content">
                                                                            <div class="currency-item__title">
                                                                                Tether
                                                                            </div>
                                                                            <div class="currency-item__abbr">
                                                                                USDT
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--available">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Available
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-available-block">
                                                                <div class="db-asset-t-i-available" data-page="account" data-module="user-balance" data-currency="usdt">
                                                                    <div class="db-asset-t-i-available__amount optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</div>
                                                                    <div class="db-asset-t-i-available__equivalent optimaDynamicAmount" data-mask="≈ $[amount]" data-round="2" data-type="usd">≈ $0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--staking">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Staking
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-stake-block">
                                                                <div class="db-asset-t-i-stake" data-module="user-balance-staking" data-currency="usdt">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('staking')" class="db-asset-t-i-loan__borrow">
                                                                        Stake
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__status">
                                                                            Active
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--loans">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Loans
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">

                                                            <div class="db-asset-t-i-loan-block">
                                                                <div class="db-asset-t-i-loan" data-module="user-balance-loan" data-currency="usdt">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('loans')" class="db-asset-t-i-loan__borrow">
                                                                        Borrow
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__status">
                                                                            Collateral
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--deposit">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Deposit
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-deposit-button-block">
                                                                <button class="db-asset-deposit-button light-black-btn iconed-btn button--small optimaDepositButton" data-currency="usdt">
                                                                    <div class="iconed-btn__icon"></div>
                                                                    <div class="iconed-btn__text">Deposit</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--send">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Send
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-send-button-block">
                                                                <button type="button" data-module="menu" data-section="send" class="db-asset-send-button light-black-btn iconed-btn button--small">
                                                                    <div class="iconed-btn__text">Send</div>
                                                                    <div class="iconed-btn__icon"></div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="db-asset-table-item">
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--currency">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Currency
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-currency-block">
                                                                <div class="db-asset-t-i-currency">

                                                                    <div class="currency-item">
                                                                        <div class="currency-icon currency-icon--usdt">
                                                                            <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/usdc.svg" alt="">
                                                                        </div>
                                                                        <div class="currency-item__content">
                                                                            <div class="currency-item__title">
                                                                                USDC
                                                                            </div>
                                                                            <div class="currency-item__abbr">
                                                                                USDC
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--available">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Available
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-available-block">
                                                                <div class="db-asset-t-i-available" data-page="account" data-module="user-balance" data-currency="usdc">
                                                                    <div class="db-asset-t-i-available__amount optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</div>
                                                                    <div class="db-asset-t-i-available__equivalent optimaDynamicAmount" data-mask="≈ $[amount]" data-round="2" data-type="usd">≈ $0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--staking">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Staking
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-stake-block">
                                                                <div class="db-asset-t-i-stake" data-module="user-balance-staking" data-currency="usdc">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('staking')" class="db-asset-t-i-loan__borrow">
                                                                        Stake
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__status">
                                                                            Active
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--loans">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Loans
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">

                                                            <div class="db-asset-t-i-loan-block">
                                                                <div class="db-asset-t-i-loan" data-module="user-balance-loan" data-currency="usdc">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('loans')" class="db-asset-t-i-loan__borrow">
                                                                        Borrow
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__status">
                                                                            Collateral
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--deposit">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Deposit
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-deposit-button-block">
                                                                <button class="db-asset-deposit-button light-black-btn iconed-btn button--small optimaDepositButton" data-currency="usdc">
                                                                    <div class="iconed-btn__icon"></div>
                                                                    <div class="iconed-btn__text">Deposit</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--send">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Send
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-send-button-block">
                                                                <button type="button" data-module="menu" data-section="send" class="db-asset-send-button light-black-btn iconed-btn button--small">
                                                                    <div class="iconed-btn__text">Send</div>
                                                                    <div class="iconed-btn__icon"></div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="db-asset-table-item">
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--currency">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Currency
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-currency-block">
                                                                <div class="db-asset-t-i-currency">

                                                                    <div class="currency-item">
                                                                        <div class="currency-icon currency-icon--usdt">
                                                                            <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/btc.svg" alt="">
                                                                        </div>
                                                                        <div class="currency-item__content">
                                                                            <div class="currency-item__title">
                                                                                Bitcoin
                                                                            </div>
                                                                            <div class="currency-item__abbr">
                                                                                BTC
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--available">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Available
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-available-block">
                                                                <div class="db-asset-t-i-available" data-page="account" data-module="user-balance" data-currency="btc">
                                                                    <div class="db-asset-t-i-available__amount optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</div>
                                                                    <div class="db-asset-t-i-available__equivalent optimaDynamicAmount" data-mask="≈ $[amount]" data-round="2" data-type="usd">≈ $0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--staking">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Staking
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-stake-block">
                                                                <div class="db-asset-t-i-stake" data-module="user-balance-staking" data-currency="btc">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('staking')" class="db-asset-t-i-loan__borrow">
                                                                        Stake
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__status">
                                                                            Active
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--loans">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Loans
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">

                                                            <div class="db-asset-t-i-loan-block">
                                                                <div class="db-asset-t-i-loan" data-module="user-balance-loan" data-currency="btc">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('loans')" class="db-asset-t-i-loan__borrow">
                                                                        Borrow
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__status">
                                                                            Collateral
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--deposit">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Deposit
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-deposit-button-block">
                                                                <button class="db-asset-deposit-button light-black-btn iconed-btn button--small optimaDepositButton" data-currency="btc">
                                                                    <div class="iconed-btn__icon"></div>
                                                                    <div class="iconed-btn__text">Deposit</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--send">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Send
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-send-button-block">
                                                                <button type="button" data-module="menu" data-section="send" class="db-asset-send-button light-black-btn iconed-btn button--small">
                                                                    <div class="iconed-btn__text">Send</div>
                                                                    <div class="iconed-btn__icon"></div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="db-asset-table-item">
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--currency">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Currency
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-currency-block">
                                                                <div class="db-asset-t-i-currency">

                                                                    <div class="currency-item">
                                                                        <div class="currency-icon currency-icon--usdt">
                                                                            <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/eth.svg" alt="">
                                                                        </div>
                                                                        <div class="currency-item__content">
                                                                            <div class="currency-item__title">
                                                                                Ethereum
                                                                            </div>
                                                                            <div class="currency-item__abbr">
                                                                                ETH
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--available">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Available
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-available-block">
                                                                <div class="db-asset-t-i-available" data-page="account" data-module="user-balance" data-currency="eth">
                                                                    <div class="db-asset-t-i-available__amount optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</div>
                                                                    <div class="db-asset-t-i-available__equivalent optimaDynamicAmount" data-mask="≈ $[amount]" data-round="2" data-type="usd">≈ $0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--staking">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Staking
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-stake-block">
                                                                <div class="db-asset-t-i-stake" data-module="user-balance-staking" data-currency="eth">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('staking')" class="db-asset-t-i-loan__borrow">
                                                                        Stake
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__status">
                                                                            Active
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--loans">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Loans
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">

                                                            <div class="db-asset-t-i-loan-block">
                                                                <div class="db-asset-t-i-loan" data-module="user-balance-loan" data-currency="eth">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('loans')" class="db-asset-t-i-loan__borrow">
                                                                        Borrow
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__status">
                                                                            Collateral
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--deposit">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Deposit
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-deposit-button-block">
                                                                <button class="db-asset-deposit-button light-black-btn iconed-btn button--small optimaDepositButton" data-currency="eth">
                                                                    <div class="iconed-btn__icon"></div>
                                                                    <div class="iconed-btn__text">Deposit</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--send">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Send
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-send-button-block">
                                                                <button type="button" data-module="menu" data-section="send" class="db-asset-send-button light-black-btn iconed-btn button--small">
                                                                    <div class="iconed-btn__text">Send</div>
                                                                    <div class="iconed-btn__icon"></div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="db-asset-table-item">
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--currency">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Currency
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-currency-block">
                                                                <div class="db-asset-t-i-currency">

                                                                    <div class="currency-item">
                                                                        <div class="currency-icon currency-icon--usdt">
                                                                            <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/bnb.svg" alt="">
                                                                        </div>
                                                                        <div class="currency-item__content">
                                                                            <div class="currency-item__title">
                                                                                BNB
                                                                            </div>
                                                                            <div class="currency-item__abbr">
                                                                                BNB
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--available">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Available
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-available-block">
                                                                <div class="db-asset-t-i-available" data-page="account" data-module="user-balance" data-currency="bnb">
                                                                    <div class="db-asset-t-i-available__amount optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</div>
                                                                    <div class="db-asset-t-i-available__equivalent optimaDynamicAmount" data-mask="≈ $[amount]" data-round="2" data-type="usd">≈ $0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--staking">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Staking
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-stake-block">
                                                                <div class="db-asset-t-i-stake" data-module="user-balance-staking" data-currency="bnb">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('staking')" class="db-asset-t-i-loan__borrow">
                                                                        Stake
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__status">
                                                                            Active
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--loans">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Loans
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">

                                                            <div class="db-asset-t-i-loan-block">
                                                                <div class="db-asset-t-i-loan" data-module="user-balance-loan" data-currency="bnb">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('loans')" class="db-asset-t-i-loan__borrow">
                                                                        Borrow
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__status">
                                                                            Collateral
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--deposit">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Deposit
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-deposit-button-block">
                                                                <button class="db-asset-deposit-button light-black-btn iconed-btn button--small optimaDepositButton" data-currency="bnb">
                                                                    <div class="iconed-btn__icon"></div>
                                                                    <div class="iconed-btn__text">Deposit</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--send">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Send
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-send-button-block">
                                                                <button type="button" data-module="menu" data-section="send" class="db-asset-send-button light-black-btn iconed-btn button--small">
                                                                    <div class="iconed-btn__text">Send</div>
                                                                    <div class="iconed-btn__icon"></div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="db-asset-table-item">
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--currency">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Currency
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-currency-block">
                                                                <div class="db-asset-t-i-currency">

                                                                    <div class="currency-item">
                                                                        <div class="currency-icon currency-icon--usdt">
                                                                            <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/sol.svg" alt="">
                                                                        </div>
                                                                        <div class="currency-item__content">
                                                                            <div class="currency-item__title">
                                                                                Solana
                                                                            </div>
                                                                            <div class="currency-item__abbr">
                                                                                SOL
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--available">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Available
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-available-block">
                                                                <div class="db-asset-t-i-available" data-page="account" data-module="user-balance" data-currency="sol">
                                                                    <div class="db-asset-t-i-available__amount optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</div>
                                                                    <div class="db-asset-t-i-available__equivalent optimaDynamicAmount" data-mask="≈ $[amount]" data-round="2" data-type="usd">≈ $0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--staking">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Staking
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-stake-block">
                                                                <div class="db-asset-t-i-stake" data-module="user-balance-staking" data-currency="sol">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('staking')" class="db-asset-t-i-loan__borrow">
                                                                        Stake
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__status">
                                                                            Active
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--loans">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Loans
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">

                                                            <div class="db-asset-t-i-loan-block">
                                                                <div class="db-asset-t-i-loan" data-module="user-balance-loan" data-currency="sol">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('loans')" class="db-asset-t-i-loan__borrow">
                                                                        Borrow
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__status">
                                                                            Collateral
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--deposit">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Deposit
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-deposit-button-block">
                                                                <button class="db-asset-deposit-button light-black-btn iconed-btn button--small optimaDepositButton" data-currency="sol">
                                                                    <div class="iconed-btn__icon"></div>
                                                                    <div class="iconed-btn__text">Deposit</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--send">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Send
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-send-button-block">
                                                                <button type="button" data-module="menu" data-section="send" class="db-asset-send-button light-black-btn iconed-btn button--small">
                                                                    <div class="iconed-btn__text">Send</div>
                                                                    <div class="iconed-btn__icon"></div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="db-asset-table-item">
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--currency">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Currency
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-currency-block">
                                                                <div class="db-asset-t-i-currency">

                                                                    <div class="currency-item">
                                                                        <div class="currency-icon currency-icon--usdt">
                                                                            <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/dot.svg" alt="">
                                                                        </div>
                                                                        <div class="currency-item__content">
                                                                            <div class="currency-item__title">
                                                                                Polkadot
                                                                            </div>
                                                                            <div class="currency-item__abbr">
                                                                                DOT
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--available">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Available
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-available-block">
                                                                <div class="db-asset-t-i-available" data-page="account" data-module="user-balance" data-currency="dot">
                                                                    <div class="db-asset-t-i-available__amount optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</div>
                                                                    <div class="db-asset-t-i-available__equivalent optimaDynamicAmount" data-mask="≈ $[amount]" data-round="2" data-type="usd">≈ $0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--staking">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Staking
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-stake-block">
                                                                <div class="db-asset-t-i-stake" data-module="user-balance-staking" data-currency="dot">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('staking')" class="db-asset-t-i-loan__borrow">
                                                                        Stake
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__status">
                                                                            Active
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--loans">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Loans
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">

                                                            <div class="db-asset-t-i-loan-block">
                                                                <div class="db-asset-t-i-loan" data-module="user-balance-loan" data-currency="dot">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('loans')" class="db-asset-t-i-loan__borrow">
                                                                        Borrow
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__status">
                                                                            Collateral
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--deposit">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Deposit
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-deposit-button-block">
                                                                <button class="db-asset-deposit-button light-black-btn iconed-btn button--small optimaDepositButton" data-currency="dot">
                                                                    <div class="iconed-btn__icon"></div>
                                                                    <div class="iconed-btn__text">Deposit</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--send">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Send
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-send-button-block">
                                                                <button type="button" data-module="menu" data-section="send" class="db-asset-send-button light-black-btn iconed-btn button--small">
                                                                    <div class="iconed-btn__text">Send</div>
                                                                    <div class="iconed-btn__icon"></div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="db-asset-table-item">
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--currency">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Currency
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-currency-block">
                                                                <div class="db-asset-t-i-currency">

                                                                    <div class="currency-item">
                                                                        <div class="currency-icon currency-icon--usdt">
                                                                            <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/ltc.svg" alt="">
                                                                        </div>
                                                                        <div class="currency-item__content">
                                                                            <div class="currency-item__title">
                                                                                Litecoin
                                                                            </div>
                                                                            <div class="currency-item__abbr">
                                                                                LTC
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--available">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Available
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-available-block">
                                                                <div class="db-asset-t-i-available" data-page="account" data-module="user-balance" data-currency="ltc">
                                                                    <div class="db-asset-t-i-available__amount optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</div>
                                                                    <div class="db-asset-t-i-available__equivalent optimaDynamicAmount" data-mask="≈ $[amount]" data-round="2" data-type="usd">≈ $0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--staking">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Staking
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-stake-block">
                                                                <div class="db-asset-t-i-stake" data-module="user-balance-staking" data-currency="ltc">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('staking')" class="db-asset-t-i-loan__borrow">
                                                                        Stake
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__status">
                                                                            Active
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--loans">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Loans
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">

                                                            <div class="db-asset-t-i-loan-block">
                                                                <div class="db-asset-t-i-loan" data-module="user-balance-loan" data-currency="ltc">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('loans')" class="db-asset-t-i-loan__borrow">
                                                                        Borrow
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__status">
                                                                            Collateral
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--deposit">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Deposit
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-deposit-button-block">
                                                                <button class="db-asset-deposit-button light-black-btn iconed-btn button--small optimaDepositButton" data-currency="ltc">
                                                                    <div class="iconed-btn__icon"></div>
                                                                    <div class="iconed-btn__text">Deposit</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--send">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Send
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-send-button-block">
                                                                <button type="button" data-module="menu" data-section="send" class="db-asset-send-button light-black-btn iconed-btn button--small">
                                                                    <div class="iconed-btn__text">Send</div>
                                                                    <div class="iconed-btn__icon"></div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="db-asset-table-item">
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--currency">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Currency
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-currency-block">
                                                                <div class="db-asset-t-i-currency">

                                                                    <div class="currency-item">
                                                                        <div class="currency-icon currency-icon--usdt">
                                                                            <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/doge.svg" alt="">
                                                                        </div>
                                                                        <div class="currency-item__content">
                                                                            <div class="currency-item__title">
                                                                                Dogecoin
                                                                            </div>
                                                                            <div class="currency-item__abbr">
                                                                                DOGE
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--available">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Available
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-available-block">
                                                                <div class="db-asset-t-i-available" data-page="account" data-module="user-balance" data-currency="doge">
                                                                    <div class="db-asset-t-i-available__amount optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</div>
                                                                    <div class="db-asset-t-i-available__equivalent optimaDynamicAmount" data-mask="≈ $[amount]" data-round="2" data-type="usd">≈ $0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--staking">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Staking
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-stake-block">
                                                                <div class="db-asset-t-i-stake" data-module="user-balance-staking" data-currency="doge">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('staking')" class="db-asset-t-i-loan__borrow">
                                                                        Stake
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__status">
                                                                            Active
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--loans">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Loans
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">

                                                            <div class="db-asset-t-i-loan-block">
                                                                <div class="db-asset-t-i-loan" data-module="user-balance-loan" data-currency="doge">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('loans')" class="db-asset-t-i-loan__borrow">
                                                                        Borrow
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__status">
                                                                            Collateral
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--deposit">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Deposit
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-deposit-button-block">
                                                                <button class="db-asset-deposit-button light-black-btn iconed-btn button--small optimaDepositButton" data-currency="doge">
                                                                    <div class="iconed-btn__icon"></div>
                                                                    <div class="iconed-btn__text">Deposit</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--send">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Send
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-send-button-block">
                                                                <button type="button" data-module="menu" data-section="send" class="db-asset-send-button light-black-btn iconed-btn button--small">
                                                                    <div class="iconed-btn__text">Send</div>
                                                                    <div class="iconed-btn__icon"></div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="db-asset-table-item">
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--currency">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Currency
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-currency-block">
                                                                <div class="db-asset-t-i-currency">

                                                                    <div class="currency-item">
                                                                        <div class="currency-icon currency-icon--usdt">
                                                                            <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/trx.svg" alt="">
                                                                        </div>
                                                                        <div class="currency-item__content">
                                                                            <div class="currency-item__title">
                                                                                TRON
                                                                            </div>
                                                                            <div class="currency-item__abbr">
                                                                                TRX
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--available">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Available
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-available-block">
                                                                <div class="db-asset-t-i-available" data-page="account" data-module="user-balance" data-currency="trx">
                                                                    <div class="db-asset-t-i-available__amount optimaDynamicAmount" data-mask="[amount]" data-round="6" data-type="currency">0</div>
                                                                    <div class="db-asset-t-i-available__equivalent optimaDynamicAmount" data-mask="≈ $[amount]" data-round="2" data-type="usd">≈ $0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--staking">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Staking
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-stake-block">
                                                                <div class="db-asset-t-i-stake" data-module="user-balance-staking" data-currency="trx">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('staking')" class="db-asset-t-i-loan__borrow">
                                                                        Stake
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__status">
                                                                            Active
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--loans">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Loans
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">

                                                            <div class="db-asset-t-i-loan-block">
                                                                <div class="db-asset-t-i-loan" data-module="user-balance-loan" data-currency="trx">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('loans')" class="db-asset-t-i-loan__borrow">
                                                                        Borrow
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__status">
                                                                            Collateral
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--deposit">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Deposit
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-deposit-button-block">
                                                                <button class="db-asset-deposit-button light-black-btn iconed-btn button--small optimaDepositButton" data-currency="trx">
                                                                    <div class="iconed-btn__icon"></div>
                                                                    <div class="iconed-btn__text">Deposit</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--send">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Send
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-send-button-block">
                                                                <button type="button" data-module="menu" data-section="send" class="db-asset-send-button light-black-btn iconed-btn button--small">
                                                                    <div class="iconed-btn__text">Send</div>
                                                                    <div class="iconed-btn__icon"></div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="db-asset-table-item">
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--currency">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Currency
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-currency-block">
                                                                <div class="db-asset-t-i-currency">

                                                                    <div class="currency-item">
                                                                        <div class="currency-icon currency-icon--usdt">
                                                                            <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/xlm.svg" alt="">
                                                                        </div>
                                                                        <div class="currency-item__content">
                                                                            <div class="currency-item__title">
                                                                                Stellar
                                                                            </div>
                                                                            <div class="currency-item__abbr">
                                                                                XLM
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--available">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Available
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-available-block">
                                                                <div class="db-asset-t-i-available" data-page="account" data-module="user-balance" data-currency="xlm">
                                                                    <div class="db-asset-t-i-available__amount optimaDynamicAmount" data-mask="[amount]" data-round="7" data-type="currency">0</div>
                                                                    <div class="db-asset-t-i-available__equivalent optimaDynamicAmount" data-mask="≈ $[amount]" data-round="2" data-type="usd">≈ $0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--staking">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Staking
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-stake-block">
                                                                <div class="db-asset-t-i-stake" data-module="user-balance-staking" data-currency="xlm">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('staking')" class="db-asset-t-i-loan__borrow">
                                                                        Stake
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__status">
                                                                            Active
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--loans">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Loans
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">

                                                            <div class="db-asset-t-i-loan-block">
                                                                <div class="db-asset-t-i-loan" data-module="user-balance-loan" data-currency="xlm">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('loans')" class="db-asset-t-i-loan__borrow">
                                                                        Borrow
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__status">
                                                                            Collateral
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--deposit">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Deposit
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-deposit-button-block">
                                                                <button class="db-asset-deposit-button light-black-btn iconed-btn button--small optimaDepositButton" data-currency="xlm">
                                                                    <div class="iconed-btn__icon"></div>
                                                                    <div class="iconed-btn__text">Deposit</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--send">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Send
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-send-button-block">
                                                                <button type="button" data-module="menu" data-section="send" class="db-asset-send-button light-black-btn iconed-btn button--small">
                                                                    <div class="iconed-btn__text">Send</div>
                                                                    <div class="iconed-btn__icon"></div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="db-asset-table-item">
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--currency">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Currency
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-currency-block">
                                                                <div class="db-asset-t-i-currency">

                                                                    <div class="currency-item">
                                                                        <div class="currency-icon currency-icon--usdt">
                                                                            <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/xrp.svg" alt="">
                                                                        </div>
                                                                        <div class="currency-item__content">
                                                                            <div class="currency-item__title">
                                                                                XRP
                                                                            </div>
                                                                            <div class="currency-item__abbr">
                                                                                XRP
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--available">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Available
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-available-block">
                                                                <div class="db-asset-t-i-available" data-page="account" data-module="user-balance" data-currency="xrp">
                                                                    <div class="db-asset-t-i-available__amount optimaDynamicAmount" data-mask="[amount]" data-round="6" data-type="currency">0</div>
                                                                    <div class="db-asset-t-i-available__equivalent optimaDynamicAmount" data-mask="≈ $[amount]" data-round="2" data-type="usd">≈ $0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--staking">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Staking
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-stake-block">
                                                                <div class="db-asset-t-i-stake" data-module="user-balance-staking" data-currency="xrp">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('staking')" class="db-asset-t-i-loan__borrow">
                                                                        Stake
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__status">
                                                                            Active
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--loans">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Loans
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">

                                                            <div class="db-asset-t-i-loan-block">
                                                                <div class="db-asset-t-i-loan" data-module="user-balance-loan" data-currency="xrp">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('loans')" class="db-asset-t-i-loan__borrow">
                                                                        Borrow
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__status">
                                                                            Collateral
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--deposit">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Deposit
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-deposit-button-block">
                                                                <button class="db-asset-deposit-button light-black-btn iconed-btn button--small optimaDepositButton" data-currency="xrp">
                                                                    <div class="iconed-btn__icon"></div>
                                                                    <div class="iconed-btn__text">Deposit</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--send">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Send
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-send-button-block">
                                                                <button type="button" data-module="menu" data-section="send" class="db-asset-send-button light-black-btn iconed-btn button--small">
                                                                    <div class="iconed-btn__text">Send</div>
                                                                    <div class="iconed-btn__icon"></div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="db-asset-table-item">
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--currency">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Currency
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-currency-block">
                                                                <div class="db-asset-t-i-currency">

                                                                    <div class="currency-item">
                                                                        <div class="currency-icon currency-icon--usdt">
                                                                            <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/ada.svg" alt="">
                                                                        </div>
                                                                        <div class="currency-item__content">
                                                                            <div class="currency-item__title">
                                                                                Cardano
                                                                            </div>
                                                                            <div class="currency-item__abbr">
                                                                                ADA
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--available">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Available
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-available-block">
                                                                <div class="db-asset-t-i-available" data-page="account" data-module="user-balance" data-currency="ada">
                                                                    <div class="db-asset-t-i-available__amount optimaDynamicAmount" data-mask="[amount]" data-round="6" data-type="currency">0</div>
                                                                    <div class="db-asset-t-i-available__equivalent optimaDynamicAmount" data-mask="≈ $[amount]" data-round="2" data-type="usd">≈ $0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--staking">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Staking
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-stake-block">
                                                                <div class="db-asset-t-i-stake" data-module="user-balance-staking" data-currency="ada">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('staking')" class="db-asset-t-i-loan__borrow">
                                                                        Stake
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__status">
                                                                            Active
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--loans">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Loans
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">

                                                            <div class="db-asset-t-i-loan-block">
                                                                <div class="db-asset-t-i-loan" data-module="user-balance-loan" data-currency="ada">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('loans')" class="db-asset-t-i-loan__borrow">
                                                                        Borrow
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__status">
                                                                            Collateral
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--deposit">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Deposit
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-deposit-button-block">
                                                                <button class="db-asset-deposit-button light-black-btn iconed-btn button--small optimaDepositButton" data-currency="ada">
                                                                    <div class="iconed-btn__icon"></div>
                                                                    <div class="iconed-btn__text">Deposit</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--send">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Send
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-send-button-block">
                                                                <button type="button" data-module="menu" data-section="send" class="db-asset-send-button light-black-btn iconed-btn button--small">
                                                                    <div class="iconed-btn__text">Send</div>
                                                                    <div class="iconed-btn__icon"></div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="db-asset-table-item">
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--currency">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Currency
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-currency-block">
                                                                <div class="db-asset-t-i-currency">

                                                                    <div class="currency-item">
                                                                        <div class="currency-icon currency-icon--usdt">
                                                                            <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/bch.svg" alt="">
                                                                        </div>
                                                                        <div class="currency-item__content">
                                                                            <div class="currency-item__title">
                                                                                Bitcoin Cash
                                                                            </div>
                                                                            <div class="currency-item__abbr">
                                                                                BCH
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--available">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Available
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-available-block">
                                                                <div class="db-asset-t-i-available" data-page="account" data-module="user-balance" data-currency="bch">
                                                                    <div class="db-asset-t-i-available__amount optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</div>
                                                                    <div class="db-asset-t-i-available__equivalent optimaDynamicAmount" data-mask="≈ $[amount]" data-round="2" data-type="usd">≈ $0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--staking">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Staking
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-stake-block">
                                                                <div class="db-asset-t-i-stake" data-module="user-balance-staking" data-currency="bch">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('staking')" class="db-asset-t-i-loan__borrow">
                                                                        Stake
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__status">
                                                                            Active
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--loans">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Loans
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">

                                                            <div class="db-asset-t-i-loan-block">
                                                                <div class="db-asset-t-i-loan" data-module="user-balance-loan" data-currency="bch">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('loans')" class="db-asset-t-i-loan__borrow">
                                                                        Borrow
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__status">
                                                                            Collateral
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--deposit">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Deposit
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-deposit-button-block">
                                                                <button class="db-asset-deposit-button light-black-btn iconed-btn button--small optimaDepositButton" data-currency="bch">
                                                                    <div class="iconed-btn__icon"></div>
                                                                    <div class="iconed-btn__text">Deposit</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--send">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Send
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-send-button-block">
                                                                <button type="button" data-module="menu" data-section="send" class="db-asset-send-button light-black-btn iconed-btn button--small">
                                                                    <div class="iconed-btn__text">Send</div>
                                                                    <div class="iconed-btn__icon"></div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="db-asset-table-item">
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--currency">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Currency
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-currency-block">
                                                                <div class="db-asset-t-i-currency">

                                                                    <div class="currency-item">
                                                                        <div class="currency-icon currency-icon--usdt">
                                                                            <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/chainlink.svg" alt="">
                                                                        </div>
                                                                        <div class="currency-item__content">
                                                                            <div class="currency-item__title">
                                                                                Chainlink
                                                                            </div>
                                                                            <div class="currency-item__abbr">
                                                                                LINK
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--available">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Available
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-available-block">
                                                                <div class="db-asset-t-i-available" data-page="account" data-module="user-balance" data-currency="link">
                                                                    <div class="db-asset-t-i-available__amount optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</div>
                                                                    <div class="db-asset-t-i-available__equivalent optimaDynamicAmount" data-mask="≈ $[amount]" data-round="2" data-type="usd">≈ $0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--staking">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Staking
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-stake-block">
                                                                <div class="db-asset-t-i-stake" data-module="user-balance-staking" data-currency="link">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('staking')" class="db-asset-t-i-loan__borrow">
                                                                        Stake
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__status">
                                                                            Active
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--loans">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Loans
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">

                                                            <div class="db-asset-t-i-loan-block">
                                                                <div class="db-asset-t-i-loan" data-module="user-balance-loan" data-currency="link">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('loans')" class="db-asset-t-i-loan__borrow">
                                                                        Borrow
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__status">
                                                                            Collateral
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--deposit">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Deposit
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-deposit-button-block">
                                                                <button class="db-asset-deposit-button light-black-btn iconed-btn button--small optimaDepositButton" data-currency="link">
                                                                    <div class="iconed-btn__icon"></div>
                                                                    <div class="iconed-btn__text">Deposit</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--send">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Send
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-send-button-block">
                                                                <button type="button" data-module="menu" data-section="send" class="db-asset-send-button light-black-btn iconed-btn button--small">
                                                                    <div class="iconed-btn__text">Send</div>
                                                                    <div class="iconed-btn__icon"></div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="db-asset-table-item">
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--currency">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Currency
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-currency-block">
                                                                <div class="db-asset-t-i-currency">

                                                                    <div class="currency-item">
                                                                        <div class="currency-icon currency-icon--usdt">
                                                                            <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/pol.svg" alt="">
                                                                        </div>
                                                                        <div class="currency-item__content">
                                                                            <div class="currency-item__title">
                                                                                Polygon
                                                                            </div>
                                                                            <div class="currency-item__abbr">
                                                                                POL
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--available">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Available
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-available-block">
                                                                <div class="db-asset-t-i-available" data-page="account" data-module="user-balance" data-currency="pol">
                                                                    <div class="db-asset-t-i-available__amount optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</div>
                                                                    <div class="db-asset-t-i-available__equivalent optimaDynamicAmount" data-mask="≈ $[amount]" data-round="2" data-type="usd">≈ $0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--staking">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Staking
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-t-i-stake-block">
                                                                <div class="db-asset-t-i-stake" data-module="user-balance-staking" data-currency="pol">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('staking')" class="db-asset-t-i-loan__borrow">
                                                                        Stake
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-stake__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-stake__status">
                                                                            Active
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--loans">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Loans
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">

                                                            <div class="db-asset-t-i-loan-block">
                                                                <div class="db-asset-t-i-loan" data-module="user-balance-loan" data-currency="pol">
                                                                    <div style="cursor:pointer;" onclick="setActiveModule('loans')" class="db-asset-t-i-loan__borrow">
                                                                        Borrow
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__amount-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__amount" data-type="currency">

                                                                        </div>
                                                                    </div>
                                                                    <div class="db-asset-t-i-loan__status-wrapper d-none">
                                                                        <div class="db-asset-t-i-loan__status">
                                                                            Collateral
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--deposit">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Deposit
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-deposit-button-block">
                                                                <button class="db-asset-deposit-button light-black-btn iconed-btn button--small optimaDepositButton" data-currency="pol">
                                                                    <div class="iconed-btn__icon"></div>
                                                                    <div class="iconed-btn__text">Deposit</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="db-asset-t-i-cell db-asset-t-i-cell--send">
                                                        <div class="db-asset-t-i-cell__title">
                                                            Send
                                                        </div>
                                                        <div class="db-asset-t-i-cell__content">
                                                            <div class="db-asset-send-button-block">
                                                                <button type="button" data-module="menu" data-section="send" class="db-asset-send-button light-black-btn iconed-btn button--small">
                                                                    <div class="iconed-btn__text">Send</div>
                                                                    <div class="iconed-btn__icon"></div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.modal')