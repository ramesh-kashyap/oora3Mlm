<div class="db-page-block" id="globalAccount">
    <div class="container">
        <div class="row">
            <style>
.referral-share-buttons {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    margin-top: 10px;
}

/* Buttons full width */
.referral-share-buttons .green-gradient-btn {
    width: 100%;
    justify-content: center;
}

/* 📱 Mobile (stack buttons) */
@media (max-width: 768px) {
    .referral-share-buttons {
        grid-template-columns: 1fr;
    }
}

/* 📲 Tablet */
@media (max-width: 1024px) {
    .referral-share-buttons {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>
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
                                                                    <div class="db-info-amount__dollar optimaDynamicAmount" data-module="user-balance-usd" data-mask="[amount]" data-round="2">{{number_format(Auth::user()->available_balance(),2)}}</div>
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
                                                                            <div class="db-info-operation-item__value" data-module="user-staking-usd">${{number_format(Auth::user()->stakingBonus->sum('comm'),2)}}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="db-info-operation-item-wrapper">
                                                                        <div class="db-info-operation-item db-info-operation-item--loans">
                                                                            <div class="db-info-operation-item__icon-wrapper">
                                                                                <div class="db-info-operation-item__icon">
                                                                                </div>
                                                                            </div>
                                                                            <div class="db-info-operation-item__title">
                                                                                Withdrawal
                                                                            </div>
                                                                            <div class="db-info-operation-item__value" data-module="user-loans-usd">${{number_format(Auth::user()->refer_bonus->sum('comm'),2)}}</div>
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
                                                                            <div class="iconed-btn__text">Withdraw
                                                                            </div>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="db-affiliate-panel-wrapper db-affiliate-panel-wrapper--total-profit">
                                                        <div class="db-affiliate-panel db-affiliate-panel--total-profit">
                                                            <div class="db-affiliate-panel__top-block">
                                                                <div class="db-affiliate-panel__top">
                                                                    <div class="db-affiliate-panel__top__left">
                                                                        <div class="db-affiliate-panel__title-block">
                                                                            <div class="db-affiliate-panel__title">
                                                                                Total Direct Reward
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="db-affiliate-panel__top__right"></div>
                                                                </div>
                                                            </div>
                                                            <div class="db-affiliate-profit-block">
                                                                <div class="db-affiliate-profit">
                                                                    <div class="db-affiliate-profit__currency">$
                                                                    </div>
                                                                    <div class="db-affiliate-profit__dollar optimaDynamicAmount" data-module="user-affiliate-usd" data-mask="[amount]" data-round="2">0</div>
                                                                </div>
                                                                <div class="db-affiliate-profit-note">
                                                                    Total affiliate earnings including bonuses
                                                                </div>
                                                            </div>
                                                            <div class="db-affiliate-profit-modal-buttons-block">
                                                                <div class="db-affiliate-profit-modal-buttons">
                                                                    <div class="db-affiliate-profit-modal-button-wrapper">
                                                                        <button class="db-affiliate-profit-modal-button db-affiliate-profit-modal-button--ai-staking" data-bs-toggle="modal" data-bs-target="#modalAffiliateEarningStaking">
                                                                            <div class="db-affiliate-profit-modal-button__left">
                                                                                <div class="db-affiliate-profit-modal-button__icon"></div>
                                                                                <div class="db-affiliate-profit-modal-button__title">Staking Referral Distribution</div>
                                                                            </div>
                                                                            <div class="db-affiliate-profit-modal-button__right">
                                                                                <div class="db-affiliate-profit-modal-button__amount optimaDynamicAmount" data-module="user-affiliate-staking-usd" data-mask="$[amount]" data-round="2">$0</div>
                                                                                <div class="db-affiliate-profit-modal-button__arrow"></div>
                                                                            </div>
                                                                        </button>
                                                                    </div>
                                                                    <div class="db-affiliate-profit-modal-button-wrapper">
                                                                        <button class="db-affiliate-profit-modal-button db-affiliate-profit-modal-button--exchange" data-bs-toggle="modal" data-bs-target="#modalAffiliateEarningExchange">
                                                                            <div class="db-affiliate-profit-modal-button__left">
                                                                                <div class="db-affiliate-profit-modal-button__icon"></div>
                                                                                <div class="db-affiliate-profit-modal-button__title">Team Development</div>
                                                                            </div>
                                                                            <div class="db-affiliate-profit-modal-button__right">
                                                                                <div class="db-affiliate-profit-modal-button__amount" data-module="user-affiliate-exchange-usd">$0</div>
                                                                                <div class="db-affiliate-profit-modal-button__arrow"></div>
                                                                            </div>
                                                                        </button>
                                                                    </div>
                                                                    <div class="db-affiliate-profit-modal-button-wrapper">
                                                                        <button class="db-affiliate-profit-modal-button db-affiliate-profit-modal-button--loans" data-bs-toggle="modal" data-bs-target="#modalAffiliateEarningLoans">
                                                                            <div class="db-affiliate-profit-modal-button__left">
                                                                                <div class="db-affiliate-profit-modal-button__icon"></div>
                                                                                <div class="db-affiliate-profit-modal-button__title">Club Reward</div>
                                                                            </div>
                                                                            <div class="db-affiliate-profit-modal-button__right">
                                                                                <div class="db-affiliate-profit-modal-button__amount" data-module="user-affiliate-loans-usd">$0</div>
                                                                                <div class="db-affiliate-profit-modal-button__arrow"></div>
                                                                            </div>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-4">

                                                    <div class="db-affiliate-panel-wrapper">
                                                        <div class="db-affiliate-panel">

                                                            <!-- HEADER -->
                                                            <div class="db-affiliate-panel__top-block">
                                                                <div class="db-affiliate-panel__top">
                                                                    <div class="db-affiliate-panel__top__left">
                                                                        <div class="db-affiliate-panel__title-block">
                                                                            <div class="db-affiliate-panel__title">
                                                                                Account Summary
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- CONTENT -->
                                                            <div class="db-affiliate-programm-current-level-block">
                                                                <div class="db-affiliate-programm-current-level">

                                                                    <!-- TOTAL EARNING -->
                                                                    <div class="mb-3">
                                                                        <div style="font-size:13px; color:#888;">Total Earnings</div>
                                                                        <div style="font-size:20px; font-weight:700; color:#16ff8e;">
                                                                            ${{ number_format(Auth::user()->totalIncome->sum('comm') ?? 0, 2) }}
                                                                        </div>
                                                                    </div>

                                                                    <!-- TOTAL DEPOSIT -->
                                                                    <div class="mb-3">
                                                                        <div style="font-size:13px; color:#888;">Total Deposit</div>
                                                                        <div style="font-size:18px; font-weight:600;">
                                                                            ${{ number_format(Auth::user()->investment->sum('amount') ?? 0, 2) }}
                                                                        </div>
                                                                    </div>

                                                                    <!-- TOTAL WITHDRAW -->
                                                                    <div class="mb-3">
                                                                        <div style="font-size:13px; color:#888;">Total Withdrawal</div>
                                                                        <div style="font-size:18px; font-weight:600;">
                                                                            ${{ number_format(Auth::user()->withdrawal->sum('amount') ?? 0, 2) }}
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="col-12 col-lg-4">
                                                    <div class="db-info-panel-wrapper">
                                                        <div class="db-info-panel">

                                                            <!-- HEADER -->
                                                            <div class="db-info-panel__top-block">
                                                                <div class="db-info-panel__top">
                                                                    <div class="db-info-panel__title-block">
                                                                        <div class="db-info-panel__title">
                                                                            My Account
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- USER INFO -->
                                                            <div class="db-info-panel__content" style="padding:15px;">

                                                                <!-- USER NAME -->
                                                                <div class="mb-3">
                                                                    <div style="font-size:13px; color:#888;">User</div>
                                                                    <div style="font-weight:600;">
                                                                        {{ Auth::user()->name ?? 'User' }}
                                                                    </div>
                                                                </div>

                                                                <!-- USERNAME -->
                                                                <div class="mb-3">
                                                                    <div style="font-size:13px; color:#888;">Username</div>
                                                                    <div style="font-weight:600;">
                                                                        {{ Auth::user()->username ?? '-' }}
                                                                    </div>
                                                                </div>

                                                                <!-- EMAIL -->
                                                                <div class="mb-3">
                                                                    <div style="font-size:13px; color:#888;">Email</div>
                                                                    <div style="font-weight:600;">
                                                                        {{ Auth::user()->email }}
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-8 order-5 order-lg-4">
                                                   <div class="db-affiliate-panel-wrapper db-affiliate-panel-wrapper--promo">
    <div class="db-affiliate-panel db-affiliate-panel--promo">

        <div class="db-affiliate-panel-promo-panel-list-block">
            <div class="db-affiliate-panel-promo-panel-list">

                <div class="db-affiliate-panel-promo-panel-wrapper">
                    <div class="db-affiliate-panel-promo-panel">

                        <!-- HEADER -->
                        <div class="db-affiliate-panel__top-block">
                            <div class="db-affiliate-panel__top">
                                <div class="db-affiliate-panel__top__left">
                                    <div class="db-affiliate-panel__title-block">
                                        <div class="db-affiliate-panel__title">
                                            Invite & Earn
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- REFERRAL LINK -->
                        <div class="db-affiliate-refferal-link-block">
                            <div class="db-affiliate-refferal-link">

                                <div class="field-block">
                                    <div class="field field--input field--has-icon field--refferal-web field--has-right-panel">

                                        <input type="text" id="refLink"
                                            value="{{ url('/') }}?referral={{ Auth::user()->username }}"
                                            >

                                        <div class="field-icon"></div>

                                        <div class="field-right-panel">
                                            <button class="copy-icon-button" onclick="copyRef2()">
                                                <div class="copy-icon-button__icon"></div>
                                            </button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- SHARE BUTTONS -->
                     <div class="form-button-block referral-share-buttons">

                            <button type="button" onclick="shareWhatsApp()" class="green-gradient-btn iconed-btn">
                                <div class="iconed-btn__text">WhatsApp</div>
                            </button>

                            <button type="button" onclick="shareTelegram()" class="green-gradient-btn iconed-btn">
                                <div class="iconed-btn__text">Telegram</div>
                            </button>

                            <button type="button" onclick="shareTwitter()" class="green-gradient-btn iconed-btn">
                                <div class="iconed-btn__text">Twitter</div>
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
            </div>
        </div>
    </div>
</div>
<script>
function getRefLink() {

    let el = document.getElementById('refLink');

    return el ? el.value : '';

}

function copyRef2() {

    let input = document.getElementById("refLink");

    if (!input || !input.value) {
        notify('error', 'Referral link not found');
        return;
    }

    let link = input.value;

    // Try modern clipboard
    if (navigator.clipboard && window.isSecureContext) {

        navigator.clipboard.writeText(link)
            .then(() => notify('success', 'Link copied'))
            .catch(() => fallbackCopy(link));

    } else {
        fallbackCopy(link);
    }
}


// 🔁 Fallback (works everywhere)
function fallbackCopy(text) {

    let temp = document.createElement("textarea");
    temp.value = text;
    document.body.appendChild(temp);

    temp.select();
    temp.setSelectionRange(0, 99999);

    document.execCommand("copy");
    document.body.removeChild(temp);

    notify('success', 'Link copied');
}
function shareWhatsApp() {
    let msg = "Join and earn 🚀 " + getRefLink();
    window.open(`https://wa.me/?text=${encodeURIComponent(msg)}`, '_blank');
}

function shareTelegram() {
    let msg = "Join and earn 🚀 " + getRefLink();
    window.open(`https://t.me/share/url?url=${encodeURIComponent(getRefLink())}&text=${encodeURIComponent(msg)}`, '_blank');
}

function shareTwitter() {
    let msg = "Join and earn 🚀 " + getRefLink();
    window.open(`https://twitter.com/intent/tweet?text=${encodeURIComponent(msg)}`, '_blank');
}
</script>

@include('partials.modal')