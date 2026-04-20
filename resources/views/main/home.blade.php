@include('layouts.mainsite.header')

<div class="front-page-info-top-block">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="front-page-info-top front-page-info-top--home">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12 col-xl-6">
                            <div class="front-page-info-top__left">
                                <div class="front-page-info-top-divider-block">
                                    <div class="front-page-info-top-divider"></div>
                                </div>
                                <div class="front-page-info-top-content">
                                    <div class="front-page-info-top-title-block">
                                        <h1 class="front-page-info-top-title">
                                             OORA3 – Empowering

                                            <div class="gradient-text-wrapper">
                                                <div class="gradient-text">
                                                   Global Investments</div>
                                            </div>
                                        </h1>
                                    </div>
                                    <div class="front-page-info-top-descr-block">
                                        <div class="front-page-info-top-descr">
                                             Step into a decentralized digital ecosystem powered by privacy, security, and advanced blockchain technology. 
    Designed for transparency, scalability, and global participation, OORA3 redefines the future of digital finance.
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="front-page-info-feature-items-block">
                                    <div class="front-page-info-feature-items">
                                        <div class="front-page-info-feature-item-wrapper">
                                            <div
                                                class="front-page-info-feature-item front-page-info-feature-item--home-uptime">
                                                <div class="front-page-info-feature-item__icon"></div>
                                                <div class="front-page-info-feature-item__text">Decentralized 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="front-page-info-feature-item-wrapper">
                                            <div
                                                class="front-page-info-feature-item front-page-info-feature-item--home-audited">
                                                <div class="front-page-info-feature-item__icon"></div>
                                                <div class="front-page-info-feature-item__text">Security</div>
                                            </div>
                                        </div>
                                        <div class="front-page-info-feature-item-wrapper">
                                            <div
                                                class="front-page-info-feature-item front-page-info-feature-item--home-ai-active">
                                                <div class="front-page-info-feature-item__icon"></div>
                                                <div class="front-page-info-feature-item__text">AI automation</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="front-page-info-top-buttons-block">
                                    <div class="front-page-info-top-buttons">
                                        <div class="front-page-info-top-button-wrapper">
                                            <a href="{{ route('index') }}"
                                                class="front-page-info-top-button green-gradient-btn iconed-btn">
                                                <div class="iconed-btn__text">Create Account</div>
                                                <div class="iconed-btn__icon"></div>
                                            </a>
                                        </div>
                                        <div
                                            class="front-page-info-top-button-wrapper d-none OORA3HideTabletAndMobile">
                                            <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#modalDownload"
                                                class="download-button light-black-btn iconed-btn">
                                                <div class="iconed-btn__text">Download</div>
                                                <div class="iconed-btn__icon"></div>
                                            </button>
                                        </div>
                                        <div
                                            class="front-page-info-top-button-wrapper d-none OORA3ShowTabletAndMobile">
                                            <a href="https://t.me/OORA3_crypto_bot/app?startapp=" target="_blank"
                                                class="telegram-app-button iconed-btn">
                                                <div class="iconed-btn__icon"></div>
                                                <div class="iconed-btn__text">Telegram app</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="front-page-info-top-currency-change-items-block OORA3Price24Change">
                                    <div class="front-page-info-top-currency-change-items">
                                        <div class="front-page-info-top-currency-change-item-wrapper">
                                            <div class="front-page-info-top-currency-change-item d-none"
                                                data-pair="BTCUSDT" data-currency="BTC">

                                            </div>
                                        </div>
                                        <div class="front-page-info-top-currency-change-item-wrapper">
                                            <div class="front-page-info-top-currency-change-item d-none"
                                                data-pair="ETHUSDT" data-currency="ETH">

                                            </div>
                                        </div>
                                        <div class="front-page-info-top-currency-change-item-wrapper">
                                            <div class="front-page-info-top-currency-change-item d-none"
                                                data-pair="BNBUSDT" data-currency="BNB">

                                            </div>
                                        </div>
                                        <div class="front-page-info-top-currency-change-item-wrapper">
                                            <div class="front-page-info-top-currency-change-item d-none"
                                                data-pair="XRPUSDT" data-currency="XRP">

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-12 col-lg-12 col-xl-6">
                            <div class="front-page-info-top__right">

                                <div class="home-infographic-block">
                                    <div class="home-infographic">
                                        <div class="home-infographic-bg">
                                            <div class="home-infographic-bg-circle home-infographic-bg-circle--outer">
                                            </div>
                                            <div class="home-infographic-bg-circle home-infographic-bg-circle--middle">
                                            </div>
                                            <div class="home-infographic-bg-circle home-infographic-bg-circle--inner">
                                            </div>
                                            <div class="home-infographic-bg-dot home-infographic-bg-dot--australia">
                                            </div>
                                            <div
                                                class="home-infographic-bg-dot home-infographic-bg-dot--united-kingdom">
                                            </div>
                                            <div class="home-infographic-bg-dot home-infographic-bg-dot--hong-kong">
                                            </div>
                                            <div class="home-infographic-bg-image">
                                                <img class="image"
                                                    src="{{ asset('') }}assets/oora3/images/svg/front/home-infographic-bg-image.svg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="home-infographic-content">
                                            <div class="home-infographic-label home-infographic-label--australia">
                                                 Global Node 
                                            </div>
                                            <div class="home-infographic-label home-infographic-label--united-kingdom">
                                               EU Region 
                                            </div>
                                            <div class="home-infographic-label home-infographic-label--hong-kong">
                                               APAC Hub  
                                            </div>
                                            <div class="home-infographic-card home-infographic-card--trade">
                                                <div class="home-infographic-trade">
                                                    <div class="home-infographic-trade__icon-block">
                                                        <div class="home-infographic-trade__icon">
                                                            <div class="home-infographic-trade__icon__image"></div>
                                                        </div>
                                                    </div>
                                                    <div class="home-infographic-trade__content">
                                                        <div class="home-infographic-trade__title">
                                                            AI-driven transaction executed
                                                        </div>
                                                        <div class="home-infographic-trade__descr">
                                                          Intelligent decentralized trading model
                                                        </div>
                                                        <div class="home-infographic-trade__info-block">
                                                            <div class="home-infographic-trade__info">
                                                                <div class="home-infographic-trade__info__profit">
                                                                   Performance +0.21%
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="home-infographic-card home-infographic-card--shield">
                                                <div class="home-infographic-shield">
                                                    <div class="home-infographic-shield-top">
                                                        <div class="home-infographic-shield-top__icon">
                                                            <div class="home-infographic-shield-top__icon__image">
                                                            </div>
                                                        </div>
                                                        <div class="home-infographic-shield-top__title">
                                                             Secure Blockchain Custodian</div>
                                                    </div>
                                                    <div class="home-infographic-shield-progress">
                                                        <div class="home-infographic-shield-progress__progress"
                                                            style="width: 100%;"></div>
                                                    </div>
                                                    <div class="home-infographic-shield-bottom">
                                                        <div class="home-infographic-shield-bottom__threats">
                                                          Transparent & Decentralized Operations
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="home-infographic-card home-infographic-card--pair">
                                                <div class="home-infographic-pair">
                                                    <div class="home-infographic-pair-top">
                                                        <div class="home-infographic-pair-top__left">
                                                            <div class="home-infographic-pair-top__title">
                                                                ETH/USDT
                                                            </div>
                                                        </div>
                                                        <div class="home-infographic-pair-top__right">
                                                            <div class="home-infographic-pair-top__type-wrapper">
                                                                <div
                                                                    class="home-infographic-pair-top__type home-infographic-pair-top__type--long">
                                                                    AI Trend</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="home-infographic-pair-graph-block">
                                                        <div class="home-infographic-pair-graph">
                                                            <div class="home-infographic-pair-graph-item-wrapper"
                                                                style="height: 39.06%;">
                                                                <div class="home-infographic-pair-graph-item"></div>
                                                            </div>
                                                            <div class="home-infographic-pair-graph-item-wrapper"
                                                                style="height: 59.37%;">
                                                                <div class="home-infographic-pair-graph-item"></div>
                                                            </div>
                                                            <div class="home-infographic-pair-graph-item-wrapper"
                                                                style="height: 29.68%;">
                                                                <div
                                                                    class="home-infographic-pair-graph-item home-infographic-pair-graph-item--red">
                                                                </div>
                                                            </div>
                                                            <div class="home-infographic-pair-graph-item-wrapper"
                                                                style="height: 50%;">
                                                                <div class="home-infographic-pair-graph-item"></div>
                                                            </div>
                                                            <div class="home-infographic-pair-graph-item-wrapper"
                                                                style="height: 59.37%;">
                                                                <div class="home-infographic-pair-graph-item"></div>
                                                            </div>
                                                            <div class="home-infographic-pair-graph-item-wrapper"
                                                                style="height: 40.62%;">
                                                                <div class="home-infographic-pair-graph-item"></div>
                                                            </div>
                                                            <div class="home-infographic-pair-graph-item-wrapper"
                                                                style="height: 29.68%;">
                                                                <div
                                                                    class="home-infographic-pair-graph-item home-infographic-pair-graph-item--green">
                                                                </div>
                                                            </div>
                                                            <div class="home-infographic-pair-graph-item-wrapper"
                                                                style="height: 48.43%;">
                                                                <div
                                                                    class="home-infographic-pair-graph-item home-infographic-pair-graph-item--green">
                                                                </div>
                                                            </div>
                                                            <div class="home-infographic-pair-graph-item-wrapper"
                                                                style="height: 59.37%;">
                                                                <div
                                                                    class="home-infographic-pair-graph-item home-infographic-pair-graph-item--green">
                                                                </div>
                                                            </div>
                                                            <div class="home-infographic-pair-graph-item-wrapper"
                                                                style="height: 79.68%;">
                                                                <div
                                                                    class="home-infographic-pair-graph-item home-infographic-pair-graph-item--green">
                                                                </div>
                                                            </div>
                                                            <div class="home-infographic-pair-graph-item-wrapper"
                                                                style="height: 86.06%;">
                                                                <div
                                                                    class="home-infographic-pair-graph-item home-infographic-pair-graph-item--green">
                                                                </div>
                                                            </div>
                                                            <div class="home-infographic-pair-graph-item-wrapper"
                                                                style="height: 100%;">
                                                                <div
                                                                    class="home-infographic-pair-graph-item home-infographic-pair-graph-item--green">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="home-infographic-pair-entry">
                                                    Market Entry: $1,240
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

<div class="front-page-block">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="front-page">
                    <div class="front-page__fullwidth">
                        <div class="front-page__content">

                            <div class="front-features-block">
                                <div class="front-features">
                                    <div class="front-features-top-block">
                                        <div class="front-features-top">
                                            <div class="front-features-top__left">
                                                <h2 class="front-features-top__title">
                                                  Decentralized Ecosystem Advantages
                                                </h2>
                                                <div class="front-features-top__descr">
                                                  Building a secure, transparent, and scalable digital infrastructure powered by advanced blockchain technology, enabling seamless asset interaction and intelligent participation in a decentralized financial ecosystem
                                                </div>

                                            </div>
                                            <div class="front-features-top__right">
                                                <div class="front-section-update-block">
                                                    <div class="front-section-update front-section-update--online">
                                                        Data Protected
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="front-feature-items-block">
                                        <div class="front-feature-items front-feature-items--home">
                                            <div class="front-feature-item-wrapper">
                                                <div class="front-feature-item">
                                                    <div class="front-feature-item__icon">
                                                        <img class="image"
                                                            src="{{ asset('') }}assets/oora3/images/svg/front/front-feature-item-icon--lock.svg"
                                                            alt="">
                                                    </div>
                                                    <div class="front-feature-item__title">
                                                       Intelligent AI Ecosystem Engine
                                                    </div>
                                                    <div class="front-feature-item__descr">
                                                     Built on a robust multi-layered architecture with advanced 
                                                     encryption, intelligent key management, and strict access controls to safeguard assets with uncompromising reliability.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="front-feature-item-wrapper">
                                                <div class="front-feature-item">
                                                    <div class="front-feature-item__icon">
                                                        <img class="image"
                                                            src="{{ asset('') }}assets/oora3/images/svg/front/front-feature-item-icon--cpu.svg"
                                                            alt="">
                                                    </div>
                                                    <div class="front-feature-item__title">
  Intelligent AI Ecosystem Engine                                                </div>
                                                    <div class="front-feature-item__descr">
                                                                An advanced AI-powered system designed to process real-time data, analyze behavioral patterns, and enable autonomous decision-making within a decentralized digital ecosystem. 



                                                    </div>
                                                </div>
                                            </div>
                                            <div class="front-feature-item-wrapper">
                                                <div class="front-feature-item">
                                                    <div class="front-feature-item__icon">
                                                        <img class="image"
                                                            src="{{ asset('') }}assets/oora3/images/svg/front/front-feature-item-icon--droplets.svg"
                                                            alt="">
                                                    </div>
                                                    <div class="front-feature-item__title">
                                                        Seamless Liquidity Infrastructure
                                                    </div>
                                                    <div class="front-feature-item__descr">
                                                          A decentralized liquidity framework enabling continuous asset accessibility and efficient value movement across the ecosystem. 
                                                          Designed to support real-time interaction, adaptive resource allocation.
                                                         

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="front-feature-item-wrapper">
                                                <div class="front-feature-item">
                                                    <div class="front-feature-item__icon">
                                                        <img class="image"
                                                            src="{{ asset('') }}assets/oora3/images/svg/front/front-feature-item-icon--circle-percent.svg"
                                                            alt="">
                                                    </div>
                                                    <div class="front-feature-item__title">
                                                       Transparent System Architecture
                                                    </div>
                                                    <div class="front-feature-item__descr">
                                                          Designed with a transparent and efficient framework that ensures predictable system operations, optimized resource utilization, and seamless value exchange across the decentralized ecosystem. Every interaction is structured for clarity.
                         


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="front-section-block">
                                <div class="front-section-top-block">
                                    <div class="front-section-top">
                                        <div class="front-section-top__left">
                                            <div class="front-section-title-block">
                                                <h2 class="front-section-title">
                                                 Integrated Digital Ecosystem
                                                </h2>
                                            </div>
                                            <div class="front-section-descr-block">
                                                <div class="front-section-descr">
                                                   A unified and interconnected infrastructure composed of multiple intelligent layers, designed to enable seamless interaction, 
                                                   scalable operations, and efficient value flow within a decentralized digital environment.

                                                </div>
                                            </div>
                                        </div>
                                        <div class="front-section-top__right">
                                            <div class="more-link-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="front-section">


                                    <div class="front-eco-product-items-block">
                                        <div class="front-eco-product-items">
                                            <div class="front-eco-product-item-wrapper">
                                                <div class="front-eco-product-item">
                                                    <div class="front-eco-product-item__left">
                                                        <div class="front-eco-product-item__content">
                                                            <div class="front-eco-product-item__type-block">
                                                                <div class="front-eco-product-item__type">Wallet</div>
                                                            </div>
                                                            <div class="front-eco-product-item__title-block">
                                                                <div class="front-eco-product-item__title h1">
                                                                    Digital Asset Management Layer
                                                                </div>
                                                            </div>
                                                            <div class="front-eco-product-item__descr-block">
                                                                <div class="front-eco-product-item__descr">
                                                                      A secure and integrated environment designed for managing, transferring, and interacting with digital assets across a 
                                                                      decentralized ecosystem. Built with advanced security protocols and 
                                                                      blockchain-based architecture, it ensures reliability, transparency, and seamless asset accessibility.

                                                                </div>
                                                            </div>
                                                            <div class="front-eco-product-item__features-block">
                                                                <div class="front-eco-product-item__features">
                                                                    <div
                                                                        class="front-eco-product-item__feature-wrapper">
                                                                        <div class="front-eco-product-item__feature">
                                                                            <div
                                                                                class="front-eco-product-item__feature__icon">
                                                                            </div>
                                                                            <div
                                                                                class="front-eco-product-item__feature__text">
                                                                                <span
                                                                                    class="text--white"> Multi-asset:</span>
                                                                                support across an integrated ecosystem
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="front-eco-product-item__feature-wrapper">
                                                                        <div class="front-eco-product-item__feature">
                                                                            <div
                                                                                class="front-eco-product-item__feature__icon">
                                                                            </div>
                                                                            <div
                                                                                class="front-eco-product-item__feature__text">
                                                                                <span class="text--white">Secure and:</span>  verifiable asset interactions
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="front-eco-product-item__feature-wrapper">
                                                                        <div class="front-eco-product-item__feature">
                                                                            <div
                                                                                class="front-eco-product-item__feature__icon">
                                                                            </div>
                                                                            <div
                                                                                class="front-eco-product-item__feature__text">
                                                                                <span
                                                                                    class="text--white">Advanced :</span>
                                                                               custodial-grade protection infrastructure
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="front-eco-product-item__feature-wrapper">
                                                                        <div class="front-eco-product-item__feature">
                                                                            <div
                                                                                class="front-eco-product-item__feature__icon">
                                                                            </div>
                                                                            <div
                                                                                class="front-eco-product-item__feature__text">
                                                                                <span class="text--white">Seamless asset : </span>transfer and ecosystem connectivity.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="front-eco-product-item__buttons-block">
                                                                <div class="front-eco-product-item__buttons">
                                                                    <div
                                                                        class="front-eco-product-item__button-wrapper">
                                                                        <a href="{{ route('index') }}"
                                                                            class="front-eco-product-item__wallet-button white-btn iconed-btn">
                                                                            <div class="iconed-btn__text">Access Ecosystem
                                                                            </div>
                                                                            <div class="iconed-btn__icon"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="front-eco-product-item__button-wrapper">
                                                                        <a href="{{ route('index') }}"
                                                                            class="front-eco-product-item__view-button light-black-btn iconed-btn">
                                                                            <div class="iconed-btn__text">Explore Infrastructure
                                                                            </div>
                                                                            <div class="iconed-btn__icon"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="front-eco-product-item__right">

                                                        <div class="fp-infographic-block">
                                                            <div class="fp-infographic fp-infographic--wallet">
                                                                <div class="fp-infographic__bg">
                                                                    <div class="fp-infographic__circles">
                                                                        <div
                                                                            class="fp-infographic__circle fp-infographic__circle--outer">
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic__circle fp-infographic__circle--middle">
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic__circle fp-infographic__circle--inner">
                                                                        </div>
                                                                    </div>
                                                                    <div class="fp-infographic__poiners">
                                                                        <div
                                                                            class="fp-infographic__pointer fp-infographic__pointer--left-top">
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic__pointer fp-infographic__pointer--right-top">
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic__pointer fp-infographic__pointer--right-bottom">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="fp-infographic__content">
                                                                    <div class="fp-infographic__center-icon-block">
                                                                        <div class="fp-infographic__center-icon">
                                                                        </div>
                                                                    </div>
                                                                    <div class="fp-infographic-items">
                                                                        <div
                                                                            class="fp-infographic-item fp-infographic-item--left-top">
                                                                            <div class="fp-infographic-item__inner">
                                                                                <div
                                                                                    class="fp-infographic-item__info fp-infographic-item__info--wallet-security">
                                                                                    <div
                                                                                        class="fp-infographic-item__info__icon-block">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__icon fp-infographic-item__info__icon--wallet-security">
                                                                                            <div
                                                                                                class="fp-infographic-item__info__icon__image">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fp-infographic-item__info__content">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__title">
                                                                                             System Integrity Alert
                                                                                        </div>
                                                                                        <div class="fp-infographic-item__info__value"
                                                                                            style="font-size:12px;">
                                                                                           Unverified activity detected
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic-item fp-infographic-item--right-top">
                                                                            <div class="fp-infographic-item__inner">
                                                                                <div
                                                                                    class="fp-infographic-item__info fp-infographic-item__info--wallet-deposit">
                                                                                    <div
                                                                                        class="fp-infographic-item__info__icon-block">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__icon fp-infographic-item__info__icon--wallet-deposit">
                                                                                            <div
                                                                                                class="fp-infographic-item__info__icon__image">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fp-infographic-item__info__content">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__title">
                                                                                              Asset Interaction
                                                                                        </div>
                                                                                        <div
                                                                                            class="fp-infographic-item__new-deposit">
                                                                                            <div
                                                                                                class="fp-infographic-item__new-deposit__left">
                                                                                                <div
                                                                                                    class="fp-infographic-item__new-deposit__amount">
                                                                                                     +1.45 ETH
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fp-infographic-item__new-deposit__right">
                                                                                                <div
                                                                                                    class="fp-infographic-item__new-deposit__status-wrapper">
                                                                                                    <div
                                                                                                        class="fp-infographic-item__new-deposit__status fp-infographic-item__new-deposit__status--success">
                                                                                                        Verified
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic-item fp-infographic-item--right-bottom">
                                                                            <div class="fp-infographic-item__inner">

                                                                                <div
                                                                                    class="fp-infographic-item__exchange-top">
                                                                                    <div
                                                                                        class="fp-infographic-item__exchange-top__left">
                                                                                        <div
                                                                                            class="fp-infographic-item__exchange-top__title">
                                                                                            <div
                                                                                                class="fp-infographic-item__exchange-top__title__icon">
                                                                                            </div>
                                                                                            <div
                                                                                                class="fp-infographic-item__exchange-top__title__text">
                                                                                                Instant exchange</div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fp-infographic-item__exchange-top__right">
                                                                                        <div
                                                                                            class="fp-infographic-item__exchange-top__time">
                                                                                            Just now</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="fp-infographic-item__exchange-pair-block">
                                                                                    <div
                                                                                        class="fp-infographic-item__exchange-pair">
                                                                                        <div
                                                                                            class="fp-infographic-item__exchange-pair__left">
                                                                                            <div class="currency-item">
                                                                                                <div
                                                                                                    class="currency-icon currency-icon--btc">
                                                                                                    <img class="image"
                                                                                                        src="{{ asset('') }}assets/oora3/images/svg/currency/btc.svg"
                                                                                                        alt="">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="currency-item__content">
                                                                                                    <div
                                                                                                        class="currency-item__title">
                                                                                                        BTC
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="fp-infographic-item__exchange-pair__arrow">
                                                                                        </div>
                                                                                        <div
                                                                                            class="fp-infographic-item__exchange-pair__right">
                                                                                            <div class="currency-item">
                                                                                                <div
                                                                                                    class="currency-icon currency-icon--usdt">
                                                                                                    <img class="image"
                                                                                                        src="{{ asset('') }}assets/oora3/images/svg/currency/usdt.svg"
                                                                                                        alt="">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="currency-item__content">
                                                                                                    <div
                                                                                                        class="currency-item__title">
                                                                                                        USDT
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
                                            <div class="front-eco-product-item-wrapper">
                                                <div class="front-eco-product-item">
                                                    <div class="front-eco-product-item__left">
                                                        <div class="front-eco-product-item__content">
                                                            <div class="front-eco-product-item__type-block">
                                                                <div class="front-eco-product-item__type">AI LAYER
                                                                </div>
                                                            </div>
                                                            <div class="front-eco-product-item__title-block">
                                                                <div class="front-eco-product-item__title h1">
                                                                  Intelligent Ecosystem Layer   
                                                                </div>
                                                            </div>
                                                            <div class="front-eco-product-item__descr-block">
                                                                <div class="front-eco-product-item__descr">
                                                                     An advanced intelligence layer designed to enhance ecosystem performance through real-time data analysis, predictive modeling, and adaptive system optimization. Built on machine learning frameworks, it enables efficient resource utilization, automated processes, and intelligent participation within a decentralized infrastructure.

                                                                </div>
                                                            </div>
                                                            <div class="front-eco-product-item__features-block">
                                                                <div class="front-eco-product-item__features">
                                                                    <div
                                                                        class="front-eco-product-item__feature-wrapper">
                                                                        <div class="front-eco-product-item__feature">
                                                                            <div
                                                                                class="front-eco-product-item__feature__icon">
                                                                            </div>
                                                                            <div
                                                                                class="front-eco-product-item__feature__text">
                                                                                <span class="text--white">Real-time : </span>data analysis and predictive insights<
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="front-eco-product-item__feature-wrapper">
                                                                        <div class="front-eco-product-item__feature">
                                                                            <div
                                                                                class="front-eco-product-item__feature__icon">
                                                                            </div>
                                                                            <div
                                                                                class="front-eco-product-item__feature__text">
                                                                                <span class="text--white">Adaptive system :</span> optimization across ecosystem layers
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="front-eco-product-item__feature-wrapper">
                                                                        <div class="front-eco-product-item__feature">
                                                                            <div
                                                                                class="front-eco-product-item__feature__icon">
                                                                            </div>
                                                                            <div
                                                                                class="front-eco-product-item__feature__text">
                                                                                <span class="text--white"> MAutomated process :</span>
                                                                               execution within decentralized infrastructure
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="front-eco-product-item__feature-wrapper">
                                                                        <div class="front-eco-product-item__feature">
                                                                            <div
                                                                                class="front-eco-product-item__feature__icon">
                                                                            </div>
                                                                            <div
                                                                                class="front-eco-product-item__feature__text">
                                                                                <span class="text--white"> Enhanced efficiency:</span>stability, and intelligent interaction
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="front-eco-product-item__buttons-block">
                                                                <div class="front-eco-product-item__buttons">
                                                                    <div
                                                                        class="front-eco-product-item__button-wrapper">
                                                                        <a href="{{ route('index') }}"
                                                                            class="front-eco-product-item__ai-staking-button white-btn iconed-btn">
                                                                            <div class="iconed-btn__text">Stake Now
                                                                            </div>
                                                                            <div class="iconed-btn__icon"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="front-eco-product-item__button-wrapper">
                                                                        <a href="{{ route('index') }}"
                                                                            class="front-eco-product-item__view-button light-black-btn iconed-btn">
                                                                            <div class="iconed-btn__text">Read More
                                                                            </div>
                                                                            <div class="iconed-btn__icon"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="front-eco-product-item__right">

                                                        <div class="fp-infographic-block">
                                                            <div class="fp-infographic fp-infographic--ai-staking">
                                                                <div class="fp-infographic__bg">
                                                                    <div class="fp-infographic__circles">
                                                                        <div
                                                                            class="fp-infographic__circle fp-infographic__circle--outer">
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic__circle fp-infographic__circle--middle">
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic__circle fp-infographic__circle--inner">
                                                                        </div>
                                                                    </div>
                                                                    <div class="fp-infographic__poiners">
                                                                        <div
                                                                            class="fp-infographic__pointer fp-infographic__pointer--left-top">
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic__pointer fp-infographic__pointer--left-bottom">
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic__pointer fp-infographic__pointer--right-top">
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic__pointer fp-infographic__pointer--right-bottom">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="fp-infographic__content">
                                                                    <div class="fp-infographic__center-icon-block">
                                                                        <div class="fp-infographic__center-icon">
                                                                        </div>
                                                                    </div>
                                                                    <div class="fp-infographic-items">
                                                                        <div
                                                                            class="fp-infographic-item fp-infographic-item--left-top">
                                                                            <div class="fp-infographic-item__inner">
                                                                                <div
                                                                                    class="fp-infographic-item__info fp-infographic-item__info--ai-staking-algorithmic">
                                                                                    <div
                                                                                        class="fp-infographic-item__info__icon-block">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__icon fp-infographic-item__info__icon--ai-staking-algorithmic">
                                                                                            <div
                                                                                                class="fp-infographic-item__info__icon__image">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fp-infographic-item__info__content">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__value">
Activate AI Layer                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic-item fp-infographic-item--left-bottom">
                                                                            <div class="fp-infographic-item__inner">
                                                                                <div
                                                                                    class="fp-infographic-item__info fp-infographic-item__info--ai-staking-medium">
                                                                                    <div
                                                                                        class="fp-infographic-item__info__icon-block">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__icon fp-infographic-item__info__icon--ai-staking-medium">
                                                                                            <div
                                                                                                class="fp-infographic-item__info__icon__image">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fp-infographic-item__info__content">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__value">
                                                                                          Explore Intelligence
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic-item fp-infographic-item--right-top">
                                                                            <div class="fp-infographic-item__inner">
                                                                                <div
                                                                                    class="fp-infographic-item__info fp-infographic-item__info--ai-staking-short">
                                                                                    <div
                                                                                        class="fp-infographic-item__info__icon-block">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__icon fp-infographic-item__info__icon--ai-staking-short">
                                                                                            <div
                                                                                                class="fp-infographic-item__info__icon__image">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fp-infographic-item__info__content">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__value">
                                                                                             Intelligent Data Processing
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic-item fp-infographic-item--right-bottom">
                                                                            <div class="fp-infographic-item__inner">
                                                                                <div
                                                                                    class="fp-infographic-item__info fp-infographic-item__info--ai-staking-long">
                                                                                    <div
                                                                                        class="fp-infographic-item__info__icon-block">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__icon fp-infographic-item__info__icon--ai-staking-long">
                                                                                            <div
                                                                                                class="fp-infographic-item__info__icon__image">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fp-infographic-item__info__content">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__value">
                                                                                            Adaptive System Optimization
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
                                            <div class="front-eco-product-item-wrapper">
                                                <div class="front-eco-product-item">
                                                    <div class="front-eco-product-item__left">
                                                        <div class="front-eco-product-item__content">
                                                            <div class="front-eco-product-item__type-block">
                                                                <div class="front-eco-product-item__type">LIQUIDITY</div>
                                                            </div>
                                                            <div class="front-eco-product-item__title-block">
                                                                <div class="front-eco-product-item__title h1">
                                                                   Integrated Liquidity Access Layer
                                                                </div>
                                                            </div>
                                                            <div class="front-eco-product-item__descr-block">
                                                                <div class="front-eco-product-item__descr">
                                                                     A decentralized liquidity layer designed to enable seamless access to digital value within the ecosystem. It supports efficient asset utilization, real-time interaction, and flexible participation while maintaining transparency, control, and system integrity across blockchain infrastructure.

                                                                </div>
                                                            </div>
                                                            <div class="front-eco-product-item__features-block">
                                                                <div class="front-eco-product-item__features">
                                                                    <div
                                                                        class="front-eco-product-item__feature-wrapper">
                                                                        <div class="front-eco-product-item__feature">
                                                                            <div
                                                                                class="front-eco-product-item__feature__icon">
                                                                            </div>
                                                                            <div
                                                                                class="front-eco-product-item__feature__text">
                                                                                <span class="text--white">Real-time : </span>asset accessibility within the ecosystem
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="front-eco-product-item__feature-wrapper">
                                                                        <div class="front-eco-product-item__feature">
                                                                            <div
                                                                                class="front-eco-product-item__feature__icon">
                                                                            </div>
                                                                            <div
                                                                                class="front-eco-product-item__feature__text">
                                                                                <span class="text--white">Efficient value:</span>Efficient value utilization through integrated infrastructure
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="front-eco-product-item__feature-wrapper">
                                                                        <div class="front-eco-product-item__feature">
                                                                            <div
                                                                                class="front-eco-product-item__feature__icon">
                                                                            </div>
                                                                            <div
                                                                                class="front-eco-product-item__feature__text">
                                                                                <span class="text--white">Flexible participation:</span> with controlled asset interaction

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="front-eco-product-item__feature-wrapper">
                                                                        <div class="front-eco-product-item__feature">
                                                                            <div
                                                                                class="front-eco-product-item__feature__icon">
                                                                            </div>
                                                                            <div
                                                                                class="front-eco-product-item__feature__text">
                                                                                <span class="text--white">Transparent and :</span> verifiable system operations
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="front-eco-product-item__buttons-block">
                                                                <div class="front-eco-product-item__buttons">
                                                                    <div
                                                                        class="front-eco-product-item__button-wrapper">
                                                                        <a href="{{ route('index') }}"
                                                                            class="front-eco-product-item__loan-button white-btn iconed-btn">
                                                                            <div class="iconed-btn__text">Access Liquidity
                                                                            </div>
                                                                            <div class="iconed-btn__icon"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="front-eco-product-item__button-wrapper">
                                                                        <a href="{{ route('index') }}"
                                                                            class="front-eco-product-item__view-button light-black-btn iconed-btn">
                                                                            <div class="iconed-btn__text">Read More
                                                                            </div>
                                                                            <div class="iconed-btn__icon"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="front-eco-product-item__right">

                                                        <div class="fp-infographic-block">
                                                            <div class="fp-infographic fp-infographic--loans">
                                                                <div class="fp-infographic__bg">
                                                                    <div class="fp-infographic__circles">
                                                                        <div
                                                                            class="fp-infographic__circle fp-infographic__circle--outer">
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic__circle fp-infographic__circle--middle">
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic__circle fp-infographic__circle--inner">
                                                                        </div>
                                                                    </div>
                                                                    <div class="fp-infographic__poiners">
                                                                        <div
                                                                            class="fp-infographic__pointer fp-infographic__pointer--left-top">
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic__pointer fp-infographic__pointer--right-top">
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic__pointer fp-infographic__pointer--right-bottom">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="fp-infographic__content">
                                                                    <div class="fp-infographic__center-icon-block">
                                                                        <div class="fp-infographic__center-icon">
                                                                        </div>
                                                                    </div>
                                                                    <div class="fp-infographic-items">
                                                                        <div
                                                                            class="fp-infographic-item fp-infographic-item--left-top">
                                                                            <div class="fp-infographic-item__inner">
                                                                                <div
                                                                                    class="fp-infographic-item__info fp-infographic-item__info--loans-rate">
                                                                                    <div
                                                                                        class="fp-infographic-item__info__icon-block">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__icon fp-infographic-item__info__icon--loans-rate">
                                                                                            <div
                                                                                                class="fp-infographic-item__info__icon__image">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fp-infographic-item__info__content">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__title">
                                                                                            System Efficiency
                                                                                        </div>
                                                                                        <div
                                                                                            class="fp-infographic-item__info__value">
                                                                                          Optimized Flow
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic-item fp-infographic-item--right-top">
                                                                            <div class="fp-infographic-item__inner">
                                                                                <div class="fp-infographic-item__top">
                                                                                    <div
                                                                                        class="fp-infographic-item__top-left">
                                                                                        <div
                                                                                            class="fp-infographic-item__top-title">
                                                                                             Liquidity Access
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fp-infographic-item__top-right d-none">
                                                                                        <div
                                                                                            class="fp-infographic-item__top-label-wrapper">
                                                                                            <div
                                                                                                class="fp-infographic-item__top-label fp-infographic-item__top-label--green">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="fp-infographic-item__info fp-infographic-item__info--loans-available">
                                                                                    <div
                                                                                        class="fp-infographic-item__info__icon-block">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__icon fp-infographic-item__info__icon--loans-available">
                                                                                            <div
                                                                                                class="fp-infographic-item__info__icon__image">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fp-infographic-item__info__content">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__title">
                                                                                            Real-Time
                                                                                        </div>
                                                                                        <div
                                                                                            class="fp-infographic-item__info__value">
                                                                                              Adaptive Allocation
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic-item fp-infographic-item--right-bottom">
                                                                            <div class="fp-infographic-item__inner">
                                                                                <div
                                                                                    class="fp-infographic-item__info fp-infographic-item__info--loans-network">
                                                                                    <div
                                                                                        class="fp-infographic-item__info__icon-block">
                                                                                        <div
                                                                                            class="currency-icon currency-icon--btc">
                                                                                            <img class="image"
                                                                                                src="{{ asset('') }}assets/oora3/images/svg/currency/btc.svg"
                                                                                                alt="">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fp-infographic-item__info__content">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__title">
                                                                                           Asset Layer
                                                                                        </div>
                                                                                        <div
                                                                                            class="fp-infographic-item__info__value">
                                                                                          Decentralized Value
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="fp-infographic-item__progress fp-infographic-item__progress--btc">
                                                                                    <div
                                                                                        class="fp-infographic-item__progress__loaded">
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
                                            <div class="front-eco-product-item-wrapper">
                                                <div class="front-eco-product-item">
                                                    <div class="front-eco-product-item__left">
                                                        <div class="front-eco-product-item__content">
                                                            <div class="front-eco-product-item__type-block">
                                                                <div class="front-eco-product-item__type">Integrated Liquidity Infrastructure</div>
                                                            </div>
                                                            <div class="front-eco-product-item__title-block">
                                                                <div class="front-eco-product-item__title h1">
                                                                   Integrated Liquidity Infrastructure
                                                                </div>
                                                            </div>
                                                            <div class="front-eco-product-item__descr-block">
                                                                <div class="front-eco-product-item__descr">
                                                                   A decentralized liquidity infrastructure designed to enable seamless access to digital value across the ecosystem. 
It supports efficient asset utilization, real-time interaction, and adaptive participation while ensuring transparency, control, and system integrity within a scalable blockchain environment.
                                                                </div>
                                                            </div>
                                                            <div class="front-eco-product-item__features-block">
                                                                <div class="front-eco-product-item__features">
                                                                    <div
                                                                        class="front-eco-product-item__feature-wrapper">
                                                                        <div class="front-eco-product-item__feature">
                                                                            <div
                                                                                class="front-eco-product-item__feature__icon">
                                                                            </div>
                                                                            <div
                                                                                class="front-eco-product-item__feature__text">
                                                                                <span class="text--white"> Real-times:</span> access to digital assets within the ecosystem  
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="front-eco-product-item__feature-wrapper">
                                                                        <div class="front-eco-product-item__feature">
                                                                            <div
                                                                                class="front-eco-product-item__feature__icon">
                                                                            </div>
                                                                            <div
                                                                                class="front-eco-product-item__feature__text">
                                                                                <span class="text--white">Optimized:</span> value flow through integrated infrastructure 
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="front-eco-product-item__feature-wrapper">
                                                                        <div class="front-eco-product-item__feature">
                                                                            <div
                                                                                class="front-eco-product-item__feature__icon">
                                                                            </div>
                                                                            <div
                                                                                class="front-eco-product-item__feature__text">
                                                                                <span class="text--white">Adaptive participation:</span> with controlled asset interaction  
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="front-eco-product-item__feature-wrapper">
                                                                        <div class="front-eco-product-item__feature">
                                                                            <div
                                                                                class="front-eco-product-item__feature__icon">
                                                                            </div>
                                                                            <div
                                                                                class="front-eco-product-item__feature__text">
                                                                                <span class="text--white">Transparent and :</span> verifiable system operations  
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="front-eco-product-item__buttons-block">
                                                                <div class="front-eco-product-item__buttons">
                                                                    <div
                                                                        class="front-eco-product-item__button-wrapper">
                                                                        <a href="{{route('index')}}"
                                                                            class="front-eco-product-item__affiliate-button white-btn iconed-btn">
                                                                            <div class="iconed-btn__text">Access Liquidity  
                                                                            </div>
                                                                            <div class="iconed-btn__icon"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div
                                                                        class="front-eco-product-item__button-wrapper">
                                                                        <a href="{{route('index')}}"
                                                                            class="front-eco-product-item__view-button light-black-btn iconed-btn">
                                                                            <div class="iconed-btn__text">Explore Infrastructure
                                                                            </div>
                                                                            <div class="iconed-btn__icon"></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="front-eco-product-item__right">


                                                        <div class="fp-infographic-block">
                                                            <div class="fp-infographic fp-infographic--affiliate">
                                                                <div class="fp-infographic__bg">
                                                                    <div class="fp-infographic__circles">
                                                                        <div
                                                                            class="fp-infographic__circle fp-infographic__circle--outer">
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic__circle fp-infographic__circle--middle">
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic__circle fp-infographic__circle--inner">
                                                                        </div>
                                                                    </div>
                                                                    <div class="fp-infographic__poiners">
                                                                        <div
                                                                            class="fp-infographic__pointer fp-infographic__pointer--left-top">
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic__pointer fp-infographic__pointer--right-top">
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic__pointer fp-infographic__pointer--right-bottom">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="fp-infographic__content">
                                                                    <div class="fp-infographic__center-icon-block">
                                                                        <div class="fp-infographic__center-icon">
                                                                        </div>
                                                                    </div>
                                                                    <div class="fp-infographic-items">
                                                                        <div
                                                                            class="fp-infographic-item fp-infographic-item--left-top">
                                                                            <div class="fp-infographic-item__inner">
                                                                                <div
                                                                                    class="fp-infographic-item__info fp-infographic-item__info--affiliate-bonus">
                                                                                    <div
                                                                                        class="fp-infographic-item__info__icon-block">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__icon fp-infographic-item__info__icon--affiliate-bonus">
                                                                                            <div
                                                                                                class="fp-infographic-item__info__icon__image">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fp-infographic-item__info__content">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__title">
                                                                                           System Efficiency
                                                                                        </div>
                                                                                        <div
                                                                                            class="fp-infographic-item__info__value">
                                                                                           Optimized Flow
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic-item fp-infographic-item--right-top">
                                                                            <div class="fp-infographic-item__inner">
                                                                                <div class="fp-infographic-item__top">
                                                                                    <div
                                                                                        class="fp-infographic-item__top-left">
                                                                                        <div
                                                                                            class="fp-infographic-item__top-title">
                                                                                        Liquidity Access  
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fp-infographic-item__top-right">
                                                                                        <div
                                                                                            class="fp-infographic-item__top-label-wrapper">
                                                                                            <div
                                                                                                class="fp-infographic-item__top-label fp-infographic-item__top-label--green">
                                                                                              Adaptive Allocation (Real-Time)</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="fp-infographic-item__info fp-infographic-item__info--affiliate-referral">
                                                                                    <div
                                                                                        class="fp-infographic-item__info__icon-block">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__icon fp-infographic-item__info__icon--affiliate-referral">
                                                                                            <div
                                                                                                class="fp-infographic-item__info__icon__image">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fp-infographic-item__info__content">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__title">
                                                                                            Asset Layer  
                                                                                        </div>
                                                                                        <div
                                                                                            class="fp-infographic-item__info__value">
                                                                                          Decentralized Value
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="fp-infographic-item fp-infographic-item--right-bottom">
                                                                            <div class="fp-infographic-item__inner">
                                                                                <div
                                                                                    class="fp-infographic-item__info fp-infographic-item__info--affiliate-upgrade">
                                                                                    <div
                                                                                        class="fp-infographic-item__info__icon-block">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__icon fp-infographic-item__info__icon--affiliate-upgrade">
                                                                                            <div
                                                                                                class="fp-infographic-item__info__icon__image">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fp-infographic-item__info__content">
                                                                                        <div
                                                                                            class="fp-infographic-item__info__title">
                                                                                            Сareer growth
                                                                                        </div>
                                                                                        <div
                                                                                            class="fp-infographic-item__info-level-block">
                                                                                            <div
                                                                                                class="fp-infographic-item__info-levels">
                                                                                                <div
                                                                                                    class="fp-infographic-item__info-level fp-infographic-item__info-level--current">
                                                                                                    OORA3 1 </div>
                                                                                                <div
                                                                                                    class="fp-infographic-item__info-level-arrow">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fp-infographic-item__info-level fp-infographic-item__info-level--next">
                                                                                                    OORA3 2</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="fp-infographic-item__progress fp-infographic-item__progress--upgrade">
                                                                                    <div class="fp-infographic-item__progress__loaded"
                                                                                        style="width: 80%;">
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




                          

<div class="front-page-block">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="front-page">
                    <div class="front-page__fullwidth">
                        <div class="front-page__content">

                            <div class="front-section-block">
                                <div class="front-section-title-block">
                                    <h2 class="front-section-title">
                                       Coming Soon 🚀
                                    </h2>
                                </div>
                                <div class="front-section-descr-block">
                                    <div class="front-section-descr">
                                          OORA3 ecosystem is launching soon. Stay connected with us for updates,
        announcements, and early access.
                                    </div>
                                </div>

                                <div class="front-section">

                                    <div class="front-direction-items-block">
                                        <div class="front-direction-items">
                                            <div class="front-direction-item-wrapper">
                                                
                                                <div class="front-direction-item front-direction-item--custody">

                                                    <div class="front-direction-item-infographic">
                                                        <div class="fdi-infographic-custody">
                                                            <div class="fdi-infographic-custody-back-line"></div>
                                                            <div
                                                                class="fdi-infographic-custody-circle fdi-infographic-custody-circle--outer">
                                                            </div>
                                                            <div
                                                                class="fdi-infographic-custody-circle fdi-infographic-custody-circle--middle">
                                                            </div>
                                                            <div
                                                                class="fdi-infographic-custody-circle fdi-infographic-custody-circle--inner">
                                                            </div>
                                                            <div class="fdi-infographic-custody-icon"></div>
                                                        </div>
                                                    </div>
                                                    <div class="front-direction-item-content">
                                                        <div class="front-direction-item-title-block">
                                                            <div class="front-direction-item-title">
                                                                <div class="front-direction-item-title__icon">
                                                                    <div
                                                                        class="front-direction-item-title__icon-image">
                                                                    </div>
                                                                </div>
                                                                <div class="front-direction-item-title__text">
                                                                OORA3 Meet
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="front-direction-item-descr">
                                                           A decentralized video conferencing platform designed for secure and seamless
online meetings. OORA3 Meet enables high-quality video calls, real-time
collaboration, and global communication without relying on centralized servers,
ensuring privacy, security, and uninterrupted connectivity.
                                                        </div>
                                                        <div class="front-direction-item-tags-block">
                                                            <div class="front-direction-item-tags">
                                                                <div class="front-direction-item-tag-wrapper">
                                                                    <div class="front-direction-item-tag">
                                                                       Video Meetings
                                                                    </div>
                                                                </div>
                                                                <div class="front-direction-item-tag-wrapper">
                                                                    <div class="front-direction-item-tag">
                                                                         End-to-End Encryption
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="front-direction-item-wrapper">
                                                <div class="front-direction-item front-direction-item--credit">




                                                   <div class="front-direction-item-infographic">
                                                        <div class="fdi-infographic-custody">
                                                            <div class="fdi-infographic-custody-back-line"></div>
                                                            <div
                                                                class="fdi-infographic-custody-circle fdi-infographic-custody-circle--outer">
                                                            </div>
                                                            <div
                                                                class="fdi-infographic-custody-circle fdi-infographic-custody-circle--middle">
                                                            </div>
                                                            <div
                                                                class="fdi-infographic-custody-circle fdi-infographic-custody-circle--inner">
                                                            </div>
                                                            <div class="fdi-infographic-custody-icon"></div>
                                                        </div>
                                                    </div>





                                                    <div class="front-direction-item-content">
                                                        <div class="front-direction-item-title-block">
                                                            <div class="front-direction-item-title">
                                                                <div class="front-direction-item-title__icon">
                                                                    <div
                                                                        class="front-direction-item-title__icon-image">
                                                                    </div>
                                                                </div>
                                                                <div class="front-direction-item-title__text">
                                                                   OORA3CHAT
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="front-direction-item-descr">
                                                          Stay connected with OORA3 through WhatsApp for instant updates,
real-time communication, and community support. Get quick access
to announcements, assistance, and important information anytime,
anywhere with secure and reliable messaging.
                                                        </div>
                                                        <div class="front-direction-item-tags-block">
                                                            <div class="front-direction-item-tags">
                                                                <div class="front-direction-item-tag-wrapper">
                                                                    <div class="front-direction-item-tag">
                                                                          Instant Messaging
                                                                    </div>
                                                                </div>
                                                                <div class="front-direction-item-tag-wrapper">
                                                                    <div class="front-direction-item-tag">
                                                                          24/7 Support
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="front-direction-item-wrapper">
                                                <div class="front-direction-item front-direction-item--staking">
                                                    <div class="front-direction-item-infographic">
                                                        <div class="fdi-infographic-custody">
                                                            <div class="fdi-infographic-custody-back-line"></div>
                                                            <div
                                                                class="fdi-infographic-custody-circle fdi-infographic-custody-circle--outer">
                                                            </div>
                                                            <div
                                                                class="fdi-infographic-custody-circle fdi-infographic-custody-circle--middle">
                                                            </div>
                                                            <div
                                                                class="fdi-infographic-custody-circle fdi-infographic-custody-circle--inner">
                                                            </div>
                                                            <div class="fdi-infographic-custody-icon"></div>
                                                        </div>
                                                    </div>
                                                    <div class="front-direction-item-content">
                                                        <div class="front-direction-item-title-block">
                                                            <div class="front-direction-item-title">
                                                                <div class="front-direction-item-title__icon">
                                                                    <div
                                                                        class="front-direction-item-title__icon-image">
                                                                    </div>
                                                                </div>
                                                                <div class="front-direction-item-title__text">
                                                                     OORA3 Email
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="front-direction-item-descr">
                                                          Stay connected with OORA3 through secure and reliable email communication.
                Receive important updates, announcements, and support directly in your inbox,
                ensuring seamless interaction with the ecosystem anytime, anywhere.
                                                        </div>
                                                        <div class="front-direction-item-tags-block">
                                                            <div class="front-direction-item-tags">
                                                                <div class="front-direction-item-tag-wrapper">
                                                                    <div class="front-direction-item-tag">
                                                                      Email Support
                                                                    </div>
                                                                </div>
                                                                <div class="front-direction-item-tag-wrapper">
                                                                    <div class="front-direction-item-tag">
                                                                       Instant Updates
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








                            

                            <div class="front-section-block front-section-block--partners">

                                <div class="front-section-title-block">
                                    <h2 class="front-section-title">
                                       Strategic Ecosystem Partners
                                    </h2>
                                </div>
                                <div class="front-section-descr-block">
                                    <div class="front-section-descr">
                                     Collaborating with global technology providers and infrastructure networks to ensure security, scalability, and operational integrity across the decentralized ecosystem. Our partnerships strengthen reliability, enhance system performance, and support continuous innovation.

                                    </div>
                                </div>


                                <div class="front-section">
                                    <div class="front-partner-slider-block">

                                        <div class="front-partner-slider swiper-slider">
                                            <div class="swiper">
                                                <div class="swiper-wrapper">

                                                    <div class="front-partner-slide swiper-slide">
                                                        <div class="front-partner-slide-item">
                                                            <img class="image"
                                                                src="{{ asset('') }}assets/oora3/images/front/ai-staking/front-partner-image--binance.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="front-partner-slide swiper-slide">
                                                        <div class="front-partner-slide-item">
                                                            <img class="image"
                                                                src="{{ asset('') }}assets/oora3/images/front/ai-staking/front-partner-image--bybit.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="front-partner-slide swiper-slide">
                                                        <div class="front-partner-slide-item">
                                                            <img class="image"
                                                                src="{{ asset('') }}assets/oora3/images/front/ai-staking/front-partner-image--phemex.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="front-partner-slide swiper-slide">
                                                        <div class="front-partner-slide-item">
                                                            <img class="image"
                                                                src="{{ asset('') }}assets/oora3/images/front/ai-staking/front-partner-image--mexc.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="front-partner-slide swiper-slide">
                                                        <div class="front-partner-slide-item">
                                                            <img class="image"
                                                                src="{{ asset('') }}assets/oora3/images/front/ai-staking/front-partner-image--bitget.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="front-partner-slide swiper-slide">
                                                        <div class="front-partner-slide-item">
                                                            <img class="image"
                                                                src="{{ asset('') }}assets/oora3/images/front/ai-staking/front-partner-image--coinbase.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="front-partner-slide swiper-slide">
                                                        <div class="front-partner-slide-item">
                                                            <img class="image"
                                                                src="{{ asset('') }}assets/oora3/images/front/ai-staking/front-partner-image--gate.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="front-partner-slide swiper-slide">
                                                        <div class="front-partner-slide-item">
                                                            <img class="image"
                                                                src="{{ asset('') }}assets/oora3/images/front/ai-staking/front-partner-image--coinbase.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="front-partner-slide swiper-slide">
                                                        <div class="front-partner-slide-item">
                                                            <img class="image"
                                                                src="{{ asset('') }}assets/oora3/images/front/ai-staking/front-partner-image--okx.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="front-partner-slide swiper-slide">
                                                        <div class="front-partner-slide-item">
                                                            <img class="image"
                                                                src="{{ asset('') }}assets/oora3/images/front/ai-staking/front-partner-image--kraken.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="front-partner-slide swiper-slide">
                                                        <div class="front-partner-slide-item">
                                                            <img class="image"
                                                                src="{{ asset('') }}assets/oora3/images/front/ai-staking/front-partner-image--crypto.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="front-partner-slide swiper-slide">
                                                        <div class="front-partner-slide-item">
                                                            <img class="image"
                                                                src="{{ asset('') }}assets/oora3/images/front/ai-staking/front-partner-image--kucoin.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="front-partner-slide swiper-slide">
                                                        <div class="front-partner-slide-item">
                                                            <img class="image"
                                                                src="{{ asset('') }}assets/oora3/images/front/ai-staking/front-partner-image--htx.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="front-partner-slide swiper-slide">
                                                        <div class="front-partner-slide-item">
                                                            <img class="image"
                                                                src="{{ asset('') }}assets/oora3/images/front/ai-staking/front-partner-image--bingx.png"
                                                                alt="">
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>


                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-button-next"></div>

                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="front-cta-block">
                                <div class="front-cta">
                                    <div class="front-cta__title-block">
                                        <div class="h1 front-cta__title">
                                          Build the Future with OORA3
                                        </div>
                                    </div>
                                    <div class="front-cta__descr-block">
                                        <div class="front-cta__descr">
                                       Join a decentralized digital ecosystem powered by advanced technology, enabling secure interaction, intelligent systems, and scalable infrastructure for global participation.

                                        </div>
                                    </div>
                                    <div class="front-cta-features-block">
                                        <div class="front-cta-features">
                                            <div class="front-cta-feature-wrapper">
                                                <div class="front-cta-feature">
                                                    <div class="front-cta-feature__icon"></div>
                                                    <div class="front-cta-feature__text">Decentralized Infrastructure
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="front-cta-feature-wrapper">
                                                <div class="front-cta-feature">
                                                    <div class="front-cta-feature__icon"></div>
                                                    <div class="front-cta-feature__text">Secure Ecosystem
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="front-cta-feature-wrapper">
                                                <div class="front-cta-feature">
                                                    <div class="front-cta-feature__icon"></div>
                                                    <div class="front-cta-feature__text">AI-Powered Technology
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="front-cta-buttons-block">
                                        <div class="front-cta-buttons">
                                            <div class="front-cta-button-wrapper">
                                                <a href="{{ route('index') }}"
                                                    class="front-cta-button green-gradient-btn iconed-btn">
                                                    <div class="iconed-btn__text">Get Started</div>
                                                    <div class="iconed-btn__icon"></div>
                                                </a>
                                            </div>
                                            <div class="front-cta-button-wrapper d-none OORA3HideTabletAndMobile">
                                                <button type="button" data-bs-toggle="modal"
                                                    data-bs-target="#modalDownload"
                                                    class="download-button light-black-btn iconed-btn">
                                                    <div class="iconed-btn__text">Download Overview</div>
                                                    <div class="iconed-btn__icon"></div>
                                                </button>
                                            </div>
                                            <div class="front-cta-button-wrapper d-none OORA3ShowTabletAndMobile">
                                                <a href="https://t.me/OORA3_crypto_bot/app?startapp=" target="_blank"
                                                    class="telegram-app-button iconed-btn">
                                                    <div class="iconed-btn__icon"></div>
                                                    <div class="iconed-btn__text">Telegram app</div>
                                                </a>
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
