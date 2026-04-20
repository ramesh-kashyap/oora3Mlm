<style id="overlaycss">

.modalDepositOverlay {

    position: absolute;

    top: 0;

    left: 0;

    width: 100%;

    height: 100%;

    background: rgba(0, 0, 0, 0.6);

    backdrop-filter: blur(4px);

    display: flex;

    align-items: center;

    justify-content: center;

    flex-direction: column;

    z-index: 999;

    border-radius: 20px;

}

.modalDepositOverlay img {

    width: 40px;

    margin-bottom: 10px;

}

</style>
<div class="modals">
    <div class="modal custom-modal fade modal--deposit" id="modalDeposit" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content-block">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="modal-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body-content">
                            <div class="modal-title-block modalDepositTitleOne">
                                <div class="modal-title h2">Deposit</div>
                            </div>
                            <div class="modal-descr-block modalDepositDescOne">
                                <div class="modal-descr">
                                    Select the cryptocurrency and network for deposit
                                </div>
                            </div>
                            <div class="modal-currency-heading-block modalDepositTitleSelect d-none">
                                <div class="modal-currency-heading">
                                    <div class="modal-currency-heading__icon">
                                        <div class="currency-icon">
                                            <img class="image" src=""
                                                data-src="{{ asset('') }}assets/oora3/images/svg/currency/[icon].svg"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="modal-currency-heading__content">
                                        <div class="modal-currency-heading__title" data-deposit-text="Deposit">

                                        </div>
                                        <div class="modal-currency-heading__descr">
                                            Select a network for deposit
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="modal-deposit-block modalDepositF">
                                <div class="modal-deposit">
                                    <form class="modal-deposit-form modalDepositForm"
                                        data-gtm-form-interact-id="0">
                                        <div class="field-block modalDepositFormCurrency">
                                            <div class="field field--select">
                                                <div class="dropdown bootstrap-select select-currency">
                                                    <select name="currency" class="select-currency" tabindex="null">
                                                        <option
                                                            data-content="&lt;div class=&quot;select-currency-item&quot;&gt;&lt;div class=&quot;select-currency-item__left&quot;&gt;&lt;div class=&quot;currency-item&quot;&gt;&lt;div class=&quot;currency-icon currency-icon--usdt&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;{{ asset('') }}assets/oora3/images/svg/currency/usdt.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;currency-item__content&quot;&gt;&lt;div class=&quot;currency-item__title&quot;&gt;Tether&lt;/div&gt;&lt;div class=&quot;currency-item__abbr&quot;&gt;USDT&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-currency-item__right&quot;&gt;&lt;div class=&quot;select-currency-item__abbr&quot;&gt;USDT&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                            value="usdt">Tether</option>

                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-fieldset-block">
                                            <div class="form-fieldset-top-block">
                                                <div class="form-fieldset-top">
                                                    <div class="form-fieldset-top__left">
                                                        <div class="form-fieldset-title-block">
                                                            <div class="form-fieldset-title">Network</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-fieldset-top__right"></div>
                                                </div>
                                            </div>
                                            <div class="form-fieldset">
                                                <div class="network-radio-items-block">
                                                    <div class="network-radio-items formNetworkItems">
                                                        <div class="network-radio-item-wrapper formNetworkItemsItem">
                                                            <div class="network-radio-item">
                                                                <div class="field field--radio">
                                                                    <label class="radio-container">
                                                                        <input type="radio" name="payment"
                                                                            data-currency="usdt"
                                                                            value="tether_bep-20_usdt"
                                                                            class="radio-input"
                                                                            data-gtm-form-interact-field-id="1" checked>
                                                                        <div class="network-radio">
                                                                            <div class="network-radio__icon">
                                                                                <div
                                                                                    class="currency-icon currency-icon--bnb">
                                                                                    <img class="image"
                                                                                        src="{{ asset('') }}assets/oora3/images/svg/currency/bnb.svg"
                                                                                        alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="network-radio__content">
                                                                                <div class="network-radio__title">BEP20
                                                                                    (BSC)</div>
                                                                                <div class="network-radio__descr">
                                                                                    Binance Smart Chain network
                                                                                </div>
                                                                            </div>
                                                                            <div class="network-radio__switcher"></div>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="network-radio-item-wrapper formNetworkItemsItem">
                                                            <div class="network-radio-item">
                                                                <div class="field field--radio">
                                                                    <label class="radio-container">
                                                                        <input type="radio" name="payment"
                                                                            data-currency="usdt"
                                                                            value="tether_trc-20_usdt"
                                                                            class="radio-input">
                                                                        <div class="network-radio">
                                                                            <div class="network-radio__icon">
                                                                                <div
                                                                                    class="currency-icon currency-icon--trx">
                                                                                    <img class="image"
                                                                                        src="{{ asset('') }}assets/oora3/images/svg/currency/trx.svg"
                                                                                        alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="network-radio__content">
                                                                                <div class="network-radio__title">TRC20
                                                                                    (TRON)</div>
                                                                                <div class="network-radio__descr">
                                                                                    TRON network
                                                                                </div>
                                                                            </div>
                                                                            <div class="network-radio__switcher"></div>
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
                                                                        <input type="radio" name="payment"
                                                                            data-currency="usdc"
                                                                            value="usdcoin_bep-20_usdc"
                                                                            class="radio-input">
                                                                        <div class="network-radio">
                                                                            <div class="network-radio__icon">
                                                                                <div
                                                                                    class="currency-icon currency-icon--bnb">
                                                                                    <img class="image"
                                                                                        src="{{ asset('') }}assets/oora3/images/svg/currency/bnb.svg"
                                                                                        alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="network-radio__content">
                                                                                <div class="network-radio__title">BEP20
                                                                                    (BSC)</div>
                                                                                <div class="network-radio__descr">
                                                                                    Binance Smart Chain network
                                                                                </div>
                                                                            </div>
                                                                            <div class="network-radio__switcher"></div>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              

                                                <div class="form-notice-block modalDepositFormUniqueNotice d-none">
                                                    <div class="form-notice">
                                                        <div class="form-notice__icon"></div>
                                                        <div class="form-notice__text">
                                                            Generate a new address for each deposit with this network.
                                                            Do not send more than 1 transaction to the generated
                                                            address.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-amount-block modalDepositFormAmount">
                                            <div class="form-amount">
                                                <div class="form-amount__top">
                                                    <div class="form-amount__top-left">
                                                        <div class="form-amount__title">
                                                            Amount
                                                        </div>
                                                    </div>
                                                    <div class="form-amount__top-right">

                                                    </div>
                                                </div>
                                                <div class="form-amount__field">
                                                    <div class="field-block">
                                                        <div
                                                            class="field field--input field--amount field--has-right-panel">
                                                            <input type="text" name="amount" placeholder="Amount"
                                                                autocomplete="off" value="100">
                                                            <div class="field-right-panel">
                                                                <div class="field-currency inputAmountCurrency">USDT
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-button-block">
                                            <button type="submit" class="green-gradient-btn iconed-btn">
                                                <div class="iconed-btn__text">Get Address</div>
                                                <div class="iconed-btn__icon"></div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="payments_type" value="up">
                                        <input type="hidden" name="old_currency" value="usdt">
                                    </form>
                                    <div class="modal-deposit-overlay modalDepositOverlay d-none">
                                        <div class="modal-deposit-overlay__spiner-block">
                                            <div class="modal-deposit-overlay__spiner">
                                                <img class="image"
                                                    src="{{ asset('') }}assets/oora3/images/svg/spinner.svg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="modal-deposit-overlay__title-block">
                                            <div class="modal-deposit-overlay__title">
                                                We generate an address...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="modal-deposit-address-heading-block modalDepositAddressTitle d-none">
                                <div class="modal-deposit-address-heading">
                                    <div class="modal-dep-addr-heading__left">
                                        <div class="modal-dep-addr-back-button-block">
                                            <button class="modal-dep-addr-back-button"
                                                onclick="backDepositModal($(this).closest('.modal'));"
                                                type="button"></button>
                                        </div>
                                    </div>
                                    <div class="modal-dep-addr-heading__right">
                                        <div class="modal-dep-addr-heading__icon">
                                            <div class="currency-icon currency-icon--usdt">
                                                <img class="image"
                                                    data-src="{{ asset('') }}assets/oora3/images/svg/currency/[icon].svg"
                                                    alt=""
                                                    src="{{ asset('') }}assets/oora3/images/svg/currency/usdt.svg">
                                            </div>
                                        </div>
                                        <div class="modal-dep-addr-heading__content">
                                            <div class="modal-dep-addr-heading__title">Tether</div>
                                            <div class="modal-dep-addr-heading__network-block">
                                                <div class="modal-dep-addr-heading__network">
                                                    <div class="modal-dep-addr-heading__network__title">
                                                        Network
                                                    </div>
                                                    <div class="modal-dep-addr-heading__network__value-block">
                                                        <div
                                                            class="modal-dep-addr-heading__network__value modalDepositAddressTitleNetwork">
                                                            BEP20 (BSC)</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="modal-deposit-address-qr-block modalDepositAddressQR d-none">
                                <div class="modal-deposit-address-qr">
                                    <img id="depositQRImage" class="image" alt="QR Code">
                                </div>
                            </div>

                            <div class="modal-deposit-address-block modalDepositAddressWT d-none">
                                <div class="modal-deposit-address modalDepositAddressWTAddress">
                                    <div class="modal-deposit-address__heading">
                                        <div class="modal-deposit-address__heading__left">
                                            <div class="modal-deposit-address__title">
                                                Deposit address
                                            </div>
                                        </div>
                                        <div class="modal-deposit-address__heading__right">
                                            <div class="copy-link-block">
                                                <button class="copy-link"
                                                    data-clipboard-text="0xf6bd64493167ec17cc73b69d720abef825ec0a37"
                                                    aria-label="Copied">
                                                    <div class="copy-link__icon"></div>
                                                    <div class="copy-link__text">Copy</div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-deposit-address__field">
                                        <div class="modal-deposit-address-field modalDepositAddressWTAddressInput">
                                            0xf6bd64493167ec17cc73b69d720abef825ec0a37</div>
                                    </div>
                                </div>
                                <br>
                                <div class="modal-deposit-address modalDepositAddressWTTag d-none">
                                    <div class="modal-deposit-address__heading">
                                        <div class="modal-deposit-address__heading__left">
                                            <div class="modal-deposit-address__title modalDepositAddressWTTagTitle"
                                                data-placeholder-tag="Destination tag" data-placeholder-memo="Memo">

                                            </div>
                                        </div>
                                        <div class="modal-deposit-address__heading__right">
                                            <div class="copy-link-block">
                                                <button class="copy-link" data-clipboard-text="" aria-label="Copied">
                                                    <div class="copy-link__icon"></div>
                                                    <div class="copy-link__text">Copy</div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-deposit-address__field">
                                        <div class="modal-deposit-address-field modalDepositAddressWTTagInput"></div>
                                    </div>
                                    <div class="modal-deposit-address__note">
                                        <div class="modal-deposit-address-note">
                                            Be sure to specify this destination tag or memo when transferring funds
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="system-message-block modalDepositAddressMessage d-none">
                                <div class="system-message system-message--alert">
                                    <div class="system-message__icon"></div>
                                    <div class="system-message__content">
                                        <div class="system-message__title">
                                            Important warning
                                        </div>
                                        <div class="system-message__text"
                                            data-text="Send [currency] on the [network] blockchain, otherwise your funds will be lost.">
                                            Send USDT on the BEP20 (BSC) blockchain, otherwise your funds will be lost.
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
    document.addEventListener("DOMContentLoaded", function() {

        document.querySelectorAll('.optimaDepositButton').forEach(btn => {
            btn.addEventListener('click', function() {

                let modal = new bootstrap.Modal(document.getElementById('modalDeposit'));
                modal.show();

                // Reset UI
                document.querySelector('.modalDepositAddressWT').classList.add('d-none');
                document.querySelector('.modalDepositF').classList.remove('d-none');
            });
        });

    });
</script>
<script>
"use strict";

/* GLOBAL FUNCTION */
function getSelectedNetwork() {
    let selected = document.querySelector('input[name="payment"]:checked');
    return selected ? selected.value : null;
}
</script>
<script>

    
    document.addEventListener("DOMContentLoaded", function() {

        const form = document.querySelector('.modalDepositForm');

        form.addEventListener('submit', async function(e) {
            e.preventDefault();

            let amount = parseFloat(form.querySelector('input[name="amount"]').value);
            let network = getSelectedNetwork();

            // ✅ Validation
            if (!amount || amount < 100) {
                notify('error', 'Minimum deposit is $100');
                return;
            }

            if (!network) {
                notify('error', 'Please select network');
                return;
            }

            try {

                document.querySelector('.modalDepositOverlay').classList.remove('d-none');

                let res = await fetch("/user/deposit-address", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        amount: amount,
                        network: network
                    })
                });

                let data = await res.json();

                document.querySelector('.modalDepositOverlay').classList.add('d-none');

                if (data.status !== 'success') {
                    notify('error', 'Failed to generate address');
                    return;
                }

                // ✅ Show address
                document.querySelector('.modalDepositAddressWTAddressInput').innerText = data
                    .address;
                // Set QR image
                let address = data.address;
                let qrImg = document.getElementById('depositQRImage');

                qrImg.src = `https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=${encodeURIComponent(address)}`;
                // Show QR
                document.querySelector('.modalDepositF').classList.add('d-none');
                document.querySelector('.modalDepositAddressWT').classList.remove('d-none');
                document.querySelector('.modalDepositAddressQR').classList.remove('d-none');
                document.querySelector('.modalDepositAddressTitle').classList.remove('d-none');
                document.querySelector('.modalDepositTitleOne')?.classList.add('d-none');
                document.querySelector('.modalDepositDescOne')?.classList.add('d-none');
               // Detect network text
                let networkText = '';
                if (network.includes('bep')) {
                    networkText = 'BEP20 (BSC)';
                } else if (network.includes('trc')) {
                    networkText = 'TRC20 (TRON)';
                }

                // Set warning message
                let msgEl = document.querySelector('.modalDepositAddressMessage .system-message__text');

                if (msgEl) {
                    msgEl.innerText = `Send USDT on the ${networkText} blockchain, otherwise your funds will be lost.`;
                }
                document.querySelector('.modalDepositAddressTitleNetwork').innerText = networkText;
                // Show warning
                document.querySelector('.modalDepositAddressMessage').classList.remove('d-none');

            } catch (err) {
                console.error(err);
                notify('error', 'Server error');
            }

        });

    });
</script>

@include('partials.notify')