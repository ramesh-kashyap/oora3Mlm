<div class="db-page-block" id="globalAccount">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="db-page">
                    <div class="row">
                        @include('layouts.upnl.sidebar')
                        <div class="col-12 col-xl-9">
                            <div class="db-page__right globalAccount globalAccountSend">
                                <div class="db-page__title-block">
                                    <h2 class="db-page__title">Withdraw</h2>
                                </div>
                                <div class="db-page__descr-block">
                                    <div class="db-page__descr">Unlimited cryptocurrency transfers from your wallet with
                                        no delays or additional fees.</div>
                                </div>
                                <div class="db-page__content">
                                    <div class="db-send-form-block">
                                        <div class="db-send-form-wrapper">
                                            <form action="/withdraw/" method="post"
                                                class="db-send-form globalAccountSendForm">
                                                <div class="db-send-form__left">

                                                    <div class="db-send-form__fields">


                                                        <div class="field-block">

                                                            <div class="field-top-block">
                                                                <div class="field-top">
                                                                    <div class="field-top__left">
                                                                        <div class="field-title-block">
                                                                            <div class="field-title">
                                                                                Currency
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field-top__right">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="field field--select">
                                                                <div class="dropdown bootstrap-select select-currency">

                                                                    <button type="button" tabindex="-1"
                                                                        class="btn dropdown-toggle btn-light"
                                                                        data-bs-toggle="dropdown" role="combobox"
                                                                        aria-owns="bs-select-11" aria-haspopup="listbox"
                                                                        aria-expanded="false" title="TetherUSDTUSDT">
                                                                        <div class="filter-option">
                                                                            <div class="filter-option-inner">
                                                                                <div class="filter-option-inner-inner">
                                                                                    <div class="select-currency-item">
                                                                                        <div
                                                                                            class="select-currency-item__left">
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
                                                                                                        Tether</div>
                                                                                                    <div
                                                                                                        class="currency-item__abbr">
                                                                                                        USDT</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="select-currency-item__right">
                                                                                            <div
                                                                                                class="select-currency-item__abbr">
                                                                                                USDT</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </button>
                                                                    <div class="dropdown-menu ">
                                                                        <div class="bs-searchbox">
                                                                            <input type="search" class="form-control"
                                                                                autocomplete="off"
                                                                                placeholder="Search currency"
                                                                                role="combobox" aria-label="Search"
                                                                                aria-controls="bs-select-11"
                                                                                aria-autocomplete="list">
                                                                        </div>
                                                                        <div class="inner show" role="listbox"
                                                                            id="bs-select-11" tabindex="-1">
                                                                            <ul class="dropdown-menu inner show"
                                                                                role="presentation"></ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-fieldset-block">
                                                            <div class="form-fieldset-top-block">
                                                                <div class="form-fieldset-top">
                                                                    <div class="form-fieldset-top__left">
                                                                        <div class="form-fieldset-title-block">
                                                                            <div class="form-fieldset-title">Network
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-fieldset-top__right"></div>
                                                                </div>
                                                            </div>
                                                            <div class="form-fieldset form-fieldset--small-padding">


                                                                <div class="network-radio-items formNetworkItems">
                                                                    <div
                                                                        class="network-radio-item-wrapper formNetworkItemsItem">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment"
                                                                                        data-currency="usdt"
                                                                                        value="tether_bep-20_usdt"
                                                                                        class="radio-input" checked>
                                                                                    <div class="network-radio">
                                                                                        <div
                                                                                            class="network-radio__icon">
                                                                                            <div
                                                                                                class="currency-icon currency-icon--bnb">
                                                                                                <img class="image"
                                                                                                    src="{{ asset('') }}assets/oora3/images/svg/currency/bnb.svg"
                                                                                                    alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="network-radio__content">
                                                                                            <div
                                                                                                class="network-radio__title">
                                                                                                BEP20 (BSC)</div>
                                                                                            <div
                                                                                                class="network-radio__descr">
                                                                                                Binance Smart Chain
                                                                                                network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="network-radio__switcher">
                                                                                        </div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                  
                                                                    <div
                                                                        class="network-radio-item-wrapper formNetworkItemsItem">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio"
                                                                                        name="payment"
                                                                                        data-currency="usdt"
                                                                                        value="tether_trc-20_usdt"
                                                                                        class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div
                                                                                            class="network-radio__icon">
                                                                                            <div
                                                                                                class="currency-icon currency-icon--trx">
                                                                                                <img class="image"
                                                                                                    src="{{ asset('') }}assets/oora3/images/svg/currency/trx.svg"
                                                                                                    alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="network-radio__content">
                                                                                            <div
                                                                                                class="network-radio__title">
                                                                                                TRC20 (TRON)</div>
                                                                                            <div
                                                                                                class="network-radio__descr">
                                                                                                TRON network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="network-radio__switcher">
                                                                                        </div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio"
                                                                                        name="payment"
                                                                                        data-currency="usdc"
                                                                                        value="usdcoin_bep-20_usdc"
                                                                                        class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div
                                                                                            class="network-radio__icon">
                                                                                            <div
                                                                                                class="currency-icon currency-icon--bnb">
                                                                                                <img class="image"
                                                                                                    src="{{ asset('') }}assets/oora3/images/svg/currency/bnb.svg"
                                                                                                    alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="network-radio__content">
                                                                                            <div
                                                                                                class="network-radio__title">
                                                                                                BEP20 (BSC)</div>
                                                                                            <div
                                                                                                class="network-radio__descr">
                                                                                                Binance Smart Chain
                                                                                                network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="network-radio__switcher">
                                                                                        </div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                 
                                                                
                                                                 
                                                                </div>


                                                                <div class="form-notice-block">
                                                                    <div class="form-notice">
                                                                        <div class="form-notice__icon"></div>
                                                                        <div class="form-notice__text">
                                                                            Make sure that the recipient's wallet
                                                                            supports the selected network.
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>




                                                        <div class="form-amount-block">

                                                            <div class="form-amount">
                                                                <div class="form-amount__top">
                                                                    <div class="form-amount__top-left">
                                                                        <div class="form-amount__title">
                                                                            Amount
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-amount__top-right">
                                                                        <div class="form-amount__max globalAccountSendFormMin d-none"
                                                                            data-mask="Min: [amount] [currency]">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-amount__field">
                                                                    <div class="field-block">
                                                                        <div
                                                                            class="field field--input field--amount field--has-right-panel">
                                                                            <input type="text" name="amount"
                                                                                placeholder="Amount" 
                                                                                autocomplete="off" >
                                                                            <div class="field-right-panel">
                                                                                <div
                                                                                    class="field-currency inputAmountCurrency">
                                                                                    USDT </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-amount__bottom">
                                                                    <div class="form-amount__bottom-left">
                                                                        <div class="form-amount__available"
                                                                            data-module="user-balance"
                                                                            data-currency="usdt"
                                                                            style="font-size:12px;">
                                                                            Available: <span
                                                                                class="text--green optimaDynamicAmount"
                                                                                data-mask="[amount]" data-round="8"
                                                                                data-type="currency">{{number_format(Auth::user()->available_balance(),2,'.',',')}}</span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="form-amount__bottom-right">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="form-fieldset-block">
                                                            <div class="form-fieldset-top-block">
                                                                <div class="form-fieldset-top">
                                                                    <div class="form-fieldset-top__left">
                                                                        <div class="form-fieldset-title-block">
                                                                            <div class="form-fieldset-title">Address
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-fieldset-top__right">

                                                                        <div class="address-list-modal-button-block">
                                                                            <button type="button"
                                                                                class="address-list-modal-button"
                                                                                onclick="withdrawalFavouriteAddresses($(this));">
                                                                                <div
                                                                                    class="address-list-modal-button__icon">
                                                                                </div>
                                                                                <div
                                                                                    class="address-list-modal-button__text">
                                                                                    Favorite addresses
                                                                                </div>
                                                                            </button>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-fieldset form-fieldset--small-padding">
                                                                <div class="field-block field-block--small-margin">
                                                                    <div
                                                                        class="field field--input field--has-icon field--address">
                                                                        <input type="text" name="wallet"
                                                                            data-placeholder="[network] address"
                                                                            autocomplete="off"
                                                                            placeholder="BEP20 (BSC) address">
                                                                        <div class="field-icon"></div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="field-block field-block--small-margin d-none">
                                                                    <div
                                                                        class="field field--input field--has-icon field--tag">
                                                                        <input type="text" name="tag"
                                                                            data-placeholder-tag="Destination tag"
                                                                            data-placeholder-memo="Memo"
                                                                            autocomplete="off"
                                                                            placeholder="Destination tag">
                                                                        <div class="field-icon"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="checkbox-list-block d-none">
                                                                    <div class="checkbox-list">
                                                                        <div class="checkbox-list-item-wrapper">
                                                                            <div class="checkbox-list-item">
                                                                                <div class="field field--checkbox">
                                                                                    <label class="checkbox-container">
                                                                                        <input type="checkbox"
                                                                                            name="checkbox"
                                                                                            value="1"
                                                                                            class="checkbox-input">
                                                                                        <div class="checkbox-custom">
                                                                                            <div
                                                                                                class="checkbox-custom__switcher">
                                                                                            </div>
                                                                                            <div
                                                                                                class="checkbox-custom__text">

                                                                                            </div>
                                                                                        </div>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>



                                                        <div class="field-block globalAccountSendFormPin d-none">

                                                            <div class="field-top-block">
                                                                <div class="field-top">
                                                                    <div class="field-top__left">
                                                                        <div class="field-title-block">
                                                                            <div class="field-title">
                                                                                Payment password
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field-top__right">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="field-block">
                                                                <div
                                                                    class="field field--input field--has-icon field--password field--has-right-panel">
                                                                    <input type="password" name="pin"
                                                                        maxlength="255" placeholder="Payment password"
                                                                        autocomplete="off">
                                                                    <div class="field-icon"></div>
                                                                    <div class="field-right-panel">
                                                                        <div class="password-type-toggle-btn-block">
                                                                            <button
                                                                                class="password-type-toggle-btn"></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>


                                                </div>
                                                <div class="db-send-form__right">

                                                    <div class="db-send-form-summary-block">
                                                        <div class="db-send-form-summary-title">
                                                            Summary
                                                        </div>
                                                        <div class="db-send-form-summary-items-block">
                                                            <div class="db-send-form-summary-items">
                                                                <div class="db-send-form-summary-item-wrapper">
                                                                    <div class="db-send-form-summary-item">
                                                                        <div class="db-send-form-summary-item__title">
                                                                            Network fee
                                                                        </div>
                                                                        <div
                                                                            class="db-send-form-summary-item__content">

                                                                            <div
                                                                                class="db-send-form-summary-item__fee">
                                                                                <div
                                                                                    class="db-send-form-summary-item__fee__amount globalAccountSendFormFee">
                                                                                    0 USDT</div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="db-send-form-summary-item-wrapper">
                                                                    <div class="db-send-form-summary-item">
                                                                        <div class="db-send-form-summary-item__title">
                                                                            Estimated time
                                                                        </div>
                                                                        <div
                                                                            class="db-send-form-summary-item__content">
                                                                            <div
                                                                                class="db-send-form-summary-item__time">
                                                                                <div
                                                                                    class="db-send-form-summary-item__time__icon">
                                                                                </div>
                                                                                <div
                                                                                    class="db-send-form-summary-item__time__text">
                                                                                    ~ 24 - 48 hours
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="db-send-form-summary-item-wrapper">
                                                                    <div class="db-send-form-summary-item">
                                                                        <div class="db-send-form-summary-item__title">
                                                                            Amount due
                                                                        </div>
                                                                        <div
                                                                            class="db-send-form-summary-item__content">
                                                                            <div
                                                                                class="db-send-form-summary-item__receive">
                                                                                <div
                                                                                    class="db-send-form-summary-item__receive__amount globalAccountSendFormReceive">
                                                                                    0 USDT</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-button-block">
                                                        <button type="submit" class="green-gradient-btn iconed-btn">
                                                            <div class="iconed-btn__text">Send Now</div>
                                                            <div class="iconed-btn__icon"></div>
                                                        </button>
                                                    </div>


                                                </div>
                                                <input type="hidden" name="payments_type" value="withdraw">
                                                <input type="hidden" name="old_currency" value="usdt">
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

<script>
"use strict";

document.addEventListener("DOMContentLoaded", function () {

    const form = document.querySelector('.globalAccountSendForm');
    const amountInput = form.querySelector('input[name="amount"]');

    const feeEl = document.querySelector('.globalAccountSendFormFee');
    const receiveEl = document.querySelector('.globalAccountSendFormReceive');

    const MIN_AMOUNT = 10;
    const FEE_PERCENT = 7;

    function calculateWithdraw() {

        let amount = parseFloat(amountInput.value);

        if (!amount || amount <= 0) {
            feeEl.innerText = "0 USDT";
            receiveEl.innerText = "0 USDT";
            return;
        }

        // ❗ Validation min
        if (amount < MIN_AMOUNT) {
            feeEl.innerText = "0 USDT";
            receiveEl.innerText = "0 USDT";
            return;
        }

        // ✅ Calculate fee
        let fee = (amount * FEE_PERCENT) / 100;

        // ✅ Final amount user receives
        let receive = amount - fee;

        // ✅ Update UI
        feeEl.innerText = fee.toFixed(6) + " USDT";
        receiveEl.innerText = receive.toFixed(6) + " USDT";
    }

    // 🔄 Live calculation
    amountInput.addEventListener('input', calculateWithdraw);

    // 🚀 Submit validation
    form.addEventListener('submit', function (e) {

        let amount = parseFloat(amountInput.value);
        let network = document.querySelector('input[name="payment"]:checked');
        let wallet = form.querySelector('input[name="wallet"]').value;

        if (!amount || amount < MIN_AMOUNT) {
            e.preventDefault();
            notify('error', 'Minimum withdrawal is $10');
            return;
        }

        if (!network) {
            e.preventDefault();
            notify('error', 'Please select network');
            return;
        }

        if (!wallet || wallet.length < 10) {
            e.preventDefault();
            notify('error', 'Enter valid wallet address');
            return;
        }

    });

});
</script>
<script>
document.querySelectorAll('input[name="payment"]').forEach(el => {
    el.addEventListener('change', function () {

        let input = document.querySelector('input[name="wallet"]');

        if (this.value.includes('bep')) {
            input.placeholder = "BEP20 (BSC) address";
        } else if (this.value.includes('trc')) {
            input.placeholder = "TRC20 (TRON) address";
        }

    });
});
</script>

@include('partials.notify')