<div class="db-page-block" id="globalAccount">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="db-page">
                    <div class="row">

                        @include('layouts.upnl.sidebar')
                        <div class="col-12 col-xl-9">
                            <div class="db-page__right globalAccount globalAccountSettings">


                                <div class="db-page__content">

                                    <div class="db-setting-tabs-content-block">
                                        <div class="db-setting-tabs-content">
                                            <div class="db-setting-tab-content" style="display: block;">
                                                <div
                                                    class="favorite-addresses-empty-block globalAccountSettingsWalletsEmpty d-none">
                                                    <div class="favorite-addresses-empty-wrapper">
                                                        <div class="favorite-addresses-empty">
                                                            <div class="favorite-addresses-empty__icon"></div>
                                                            <div class="favorite-addresses-empty__title">
                                                                No saved addresses found
                                                            </div>
                                                            <div class="favorite-addresses-empty__descr">
                                                                Saved wallet addresses for fast and secure transfers
                                                                without additional confirmation
                                                            </div>
                                                            <div class="favorite-addresses-empty__button-block">
                                                                <button type="button"
                                                                    onclick="$('#modalAddWallet').find('.modal-descr-block').removeClass('d-none');$('#modalAddWallet').find('select[name=currency]').closest('.field-block').removeClass('d-none');"
                                                                    class="green-gradient-btn iconed-btn favorite-addresses-empty__button button--small add-wallet-btn"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modalAddWallet">
                                                                    <div class="iconed-btn__icon"></div>
                                                                    <div class="iconed-btn__text">Add</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="favorite-addresses-block globalAccountSettingsWalletsNotEmpty">
                                                    <div class="favorite-addresses-top-block">
                                                        <div class="favorite-addresses-top">
                                                            <div class="favorite-addresses-top__left">
                                                                <div class="favorite-addresses-top__title">
                                                                    Favorite addresses
                                                                </div>
                                                                <div class="favorite-addresses-top__descr">
                                                                    Saved wallet addresses for fast and secure transfers
                                                                    without additional confirmation
                                                                </div>
                                                            </div>
                                                            <div class="favorite-addresses-top__right">
                                                                <div class="favorite-addresses-top__button-block">

                                                                    <button type="button"
                                                                        onclick="$('#modalAddWallet').find('.modal-descr-block').removeClass('d-none');$('#modalAddWallet').find('select[name=currency]').closest('.field-block').removeClass('d-none');"
                                                                        class="green-gradient-btn iconed-btn favorite-addresses-empty__button button--small"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modalAddWallet">
                                                                        <div class="iconed-btn__icon"></div>
                                                                        <div class="iconed-btn__text">Add</div>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div
                                                        class="favorite-address-table-block globalAccountSettingsWalletsNotEmptyTable">
                                                        <div class="favorite-address-table">
                                                            <div
                                                                class="favorite-address-table-heading globalAccountSettingsWalletsNotEmptyTableHeading">
                                                                <div
                                                                    class="favorite-address-t-h-cell favorite-address-t-h-cell--currency">
                                                                    Currency
                                                                </div>
                                                                <div
                                                                    class="favorite-address-t-h-cell favorite-address-t-h-cell--network">
                                                                    Network
                                                                </div>
                                                                <div
                                                                    class="favorite-address-t-h-cell favorite-address-t-h-cell--address">
                                                                    Address
                                                                </div>
                                                                <div
                                                                    class="favorite-address-t-h-cell favorite-address-t-h-cell--added">
                                                                    Date
                                                                </div>

                                                            </div>

                                                            <div
                                                                class="favorite-address-table-items globalAccountSettingsWalletsNotEmptyTableItems">

                                                                @forelse($wallets as $wallet)
                                                                    @php
                                                                        $parts = explode('_', $wallet->blockchain);

                                                                        $currency = $wallet->blockchain=="BSC"? 'bnb' : 'trx';
                                                                        $network = strtoupper(
                                                                            str_replace('-', ' ', $parts[1] ?? ''),
                                                                        );
                                                                        $abbr = strtoupper($parts[2] ?? 'USDT');

                                                                        $shortAddress =
                                                                            substr($wallet->wallet_address, 0, 5) .
                                                                            '...' .
                                                                            substr($wallet->wallet_address, -5);
                                                                    @endphp

                                                                    <div
                                                                        class="favorite-address-table-item globalAccountSettingsWalletsNotEmptyTableItemsItem">

                                                                        <!-- Currency -->
                                                                        <div
                                                                            class="favorite-address-t-i-cell favorite-address-t-i-cell--currency">
                                                                            <div
                                                                                class="favorite-address-t-i-cell__title">
                                                                                Currency
                                                                            </div>
                                                                            <div
                                                                                class="favorite-address-t-i-cell__content">
                                                                                <div class="fa-t-i-currency-block">
                                                                                    <div class="currency-item">
                                                                                        <div
                                                                                            class="currency-icon currency-icon--{{ $currency }}">
                                                                                            <img class="image"
                                                                                                src="{{ asset('assets/oora3/images/svg/currency/' . $currency . '.svg') }}"
                                                                                                alt="">
                                                                                        </div>
                                                                                        <div
                                                                                            class="currency-item__content">
                                                                                            <div
                                                                                                class="currency-item__title">
                                                                                                {{ ucfirst($wallet->blockchain) }}
                                                                                            </div>
                                                                                            <div
                                                                                                class="currency-item__abbr">
                                                                                                {{ $abbr }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Network -->
                                                                        <div
                                                                            class="favorite-address-t-i-cell favorite-address-t-i-cell--network">
                                                                            <div
                                                                                class="favorite-address-t-i-cell__title">
                                                                                Network
                                                                            </div>
                                                                            <div
                                                                                class="favorite-address-t-i-cell__content">
                                                                                <div class="fa-t-i-network-block">
                                                                                    <div class="fa-t-i-network">
                                                                                        {{ $wallet->blockchain }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Address -->
                                                                        <div
                                                                            class="favorite-address-t-i-cell favorite-address-t-i-cell--address">
                                                                            <div
                                                                                class="favorite-address-t-i-cell__title">
                                                                                Address
                                                                            </div>
                                                                            <div
                                                                                class="favorite-address-t-i-cell__content">
                                                                                <div class="fa-t-i-address-block">
                                                                                    <div class="fa-t-i-address">

                                                                                        <div
                                                                                            class="fa-t-i-address__title">
                                                                                            {{ $shortAddress }}
                                                                                        </div>

                                                                                        <div
                                                                                            class="fa-t-i-address__copy">
                                                                                            <button  data-clipboard-text="{{ $wallet->wallet_address }}"
                                                                                                class="copy-icon-button">
                                                                                                <div
                                                                                                    class="copy-icon-button__icon">
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Date -->
                                                                        <div
                                                                            class="favorite-address-t-i-cell favorite-address-t-i-cell--added">
                                                                            <div
                                                                                class="favorite-address-t-i-cell__title">
                                                                                Date
                                                                            </div>
                                                                            <div
                                                                                class="favorite-address-t-i-cell__content">
                                                                                <div class="fa-t-i-date-block">
                                                                                    <div class="fa-t-i-date">
                                                                                        {{ \Carbon\Carbon::parse($wallet->created_at)->format('M d, Y') }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>

                                                                @empty
                                                                    <div style="padding:20px; text-align:center;">
                                                                        No wallets found
                                                                    </div>
                                                                @endforelse

                                                            </div>

                                                            <div class="favorite-address-table-manage-panel">
                                                                <div class="favorite-address-table-manage-panel__left">
                                                                    <div class="pagination-block">
                                                                        <div class="pagination">
                                                                            <ul
                                                                                class="pagination-list globalAccountSettingsWalletsNotEmptyPages">
                                                                                <li class="pagination-item active">
                                                                                    <button onclick="return false;"
                                                                                        class="pagination-link">1</button>
                                                                                </li>
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

<script>
    document.addEventListener("DOMContentLoaded", function() {

        document.querySelectorAll('.add-wallet-btn').forEach(btn => {
            btn.addEventListener('click', function() {

                let modal = new bootstrap.Modal(document.getElementById('modalAddWallet'));
                modal.show();

            });
        });

    });
</script>
<script>

function copyWallet(address) {

    navigator.clipboard.writeText(address);

}

</script>
<script>

document.addEventListener("DOMContentLoaded", function () {

    const radios = document.querySelectorAll('input[name="payment"]');

    const input  = document.getElementById('walletAddress');

    function updatePlaceholder(radio) {

        const network = radio.getAttribute('data-network') || '';

        input.placeholder = network + ' address';

    }

    // on change

    radios.forEach(radio => {

        radio.addEventListener('change', function () {

            updatePlaceholder(this);

        });

    });

    // set default on load

    const checked = document.querySelector('input[name="payment"]:checked');

    if (checked) {

        updatePlaceholder(checked);

    }

});

</script>
<div class="modal custom-modal fade modal--add-address" id="modalAddWallet" tabindex="-1" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content-block">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="modal-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-body-content">
                        <div class="modal-title-block">
                            <div class="modal-title h2">Add wallet</div>
                        </div>
                        <div class="modal-descr-block">
                            <div class="modal-descr">
                                Select the cryptocurrency, network standard, and enter the wallet address
                            </div>
                        </div>


                        <div class="form-wrapper">
                            <form action="{{ route('user.walletStore') }}" method="post"
                                class="form modal-add-address-form" data-gtm-form-interact-id="0">
                                @csrf


                                <div class="field-block">
                                    <div class="field field--select">
                                        <div class="dropdown bootstrap-select select-currency"><select name="currency"
                                                class="select-currency">
                                                <option
                                                    data-content="&lt;div class=&quot;select-currency-item&quot;&gt;&lt;div class=&quot;select-currency-item__left&quot;&gt;&lt;div class=&quot;currency-item&quot;&gt;&lt;div class=&quot;currency-icon currency-icon--usdt&quot;&gt;&lt;img class=&quot;image&quot; src=&quot;{{ asset('') }}assets/oora3/images/svg/currency/usdt.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;&lt;div class=&quot;currency-item__content&quot;&gt;&lt;div class=&quot;currency-item__title&quot;&gt;Tether&lt;/div&gt;&lt;div class=&quot;currency-item__abbr&quot;&gt;USDT&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;select-currency-item__right&quot;&gt;&lt;div class=&quot;select-currency-item__abbr&quot;&gt;USDT&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;"
                                                    value="usdt">Tether</option>

                                            </select>
                                            <div class="dropdown-menu ">
                                                <div class="bs-searchbox"><input type="search" class="form-control"
                                                        autocomplete="off" placeholder="Search currency"
                                                        role="combobox" aria-label="Search"
                                                        aria-controls="bs-select-16" aria-autocomplete="list"></div>
                                                <div class="inner show" role="listbox" id="bs-select-16"
                                                    tabindex="-1">
                                                    <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="add-address-fieldset-block">
                                    <div class="add-address-fieldset-title">
                                        Network
                                    </div>
                                    <div class="add-address-fieldset">
                                        <div class="network-radio-items-block">
                                            <div class="network-radio-items formNetworkItems">
                                                <div class="network-radio-item-wrapper formNetworkItemsItem">
                                                    <div class="network-radio-item">
                                                        <div class="field field--radio">
                                                            <label class="radio-container">
                                                                <input type="radio" name="payment"
                                                                    data-currency="usdt" value="BSC"  data-network="BEP20 (BSC)"
                                                                    class="radio-input" checked>
                                                                <div class="network-radio">
                                                                    <div class="network-radio__icon">
                                                                        <div class="currency-icon currency-icon--bnb">
                                                                            <img class="image"
                                                                                src="{{ asset('') }}assets/oora3/images/svg/currency/bnb.svg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio__content">
                                                                        <div class="network-radio__title">BEP20 (BSC)
                                                                        </div>
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
                                                                    data-currency="usdt" value="TRON"  data-network="TRC20 (TRON)"
                                                                    class="radio-input">
                                                                <div class="network-radio">
                                                                    <div class="network-radio__icon">
                                                                        <div class="currency-icon currency-icon--trx">
                                                                            <img class="image"
                                                                                src="{{ asset('') }}assets/oora3/images/svg/currency/trx.svg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio__content">
                                                                        <div class="network-radio__title">TRC20 (TRON)
                                                                        </div>
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

                                                <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                    <div class="network-radio-item">
                                                        <div class="field field--radio">
                                                            <label class="radio-container">
                                                                <input type="radio" name="payment"
                                                                    data-currency="btc" value="bitcoin_bep-20_btcb"
                                                                    class="radio-input">
                                                                <div class="network-radio">
                                                                    <div class="network-radio__icon">
                                                                        <div class="currency-icon currency-icon--bnb">
                                                                            <img class="image"
                                                                                src="{{ asset('') }}assets/oora3/images/svg/currency/bnb.svg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio__content">
                                                                        <div class="network-radio__title">BEP20 (BSC)
                                                                        </div>
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
                                    </div>
                                </div>

                                <div class="add-address-fieldset-block">
                                    <div class="add-address-fieldset-title">
                                        Address
                                    </div>
                                    <div class="add-address-fieldset">
                                        <div class="field-block ">
                                            <div class="field field--input field--has-icon field--address">
                                                <input type="text" name="wallet"
                                                    data-placeholder="[network] address" id="walletAddress" autocomplete="off"
                                                    placeholder="BEP20 (BSC) address"
                                                    data-gtm-form-interact-field-id="0">
                                                <div class="field-icon"></div>
                                            </div>
                                        </div>
                                        <div class="field-block d-none">
                                            <div class="field field--input field--has-icon field--tag">
                                                <input type="text" name="tag"
                                                    data-placeholder-tag="Destination tag"
                                                    data-placeholder-memo="Memo" autocomplete="off"
                                                    placeholder="Destination tag">
                                                <div class="field-icon"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="modal-form-buttons-block">
                                    <div class="modal-form-buttons">
                                        <div class="modal-form-button-wrapper">

                                            <button type="button" class="light-black-btn modal-form-cancel-button"
                                                data-bs-dismiss="modal" aria-label="Close">
                                                Cancel
                                            </button>
                                        </div>
                                        <div class="modal-form-button-wrapper">

                                            <button type="submit"
                                                class="green-gradient-btn modal-form-continue-button">
                                                Continue
                                            </button>


                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="payments_type" value="withdraw">
                                <input type="hidden" name="action" value="add_wallet">
                                <input type="hidden" name="mtcaptcha-verifiedtoken"
                                    value="v1(f48fa34c,2ccfc74e,MTPublic-RCmJPgs00,30b727591113cbd255d2423c1d91929d,xKn0OscE3aho9QIrwahAGEJcBrzKGkJbRbnPmGaygY8MWvxG7ZeBwrQCVl-WmaUV8f4IEEHgILhd2XpjxtfNRPhxUcOvIJceOwpWVpsHsVnL_YVfNEZsNvFC4SWEP7ks8kUMHMLHTsmDzv7SYen8zcC9m5iShCdmXbBR8MkBZJFXaLWV5q2UnGR71cFW5X8RTqHiWMuSIESN5VJ8TyKLm51lRZyhHkal6xPd45oJZ0yA-sME_rLPid7H2IYsStmdulxZ1M-W-GWKrxEzf5MnzGOR-IYvpyxaNyOx-7ot1-hHqMzIInaO01kR9JdtJyJk)">
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
