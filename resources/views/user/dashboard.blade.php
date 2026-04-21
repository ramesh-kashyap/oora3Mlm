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

                /* ===== DASHBOARD WRAPPER ===== */
                .custom-dashboard {
                    margin-top: 20px;
                }

                /* HEADER */
                .cd-header {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 20px;
                }

                .cd-header h1 {
                    font-size: 28px;
                    color: #fff;
                }

                .cd-header p {
                    color: #888;
                    font-size: 14px;
                }

                /* SEARCH */
                .cd-search {
                    position: relative;
                }

                .cd-search input {
                    background: #111;
                    border: none;
                    border-radius: 30px;
                    padding: 8px 15px 8px 35px;
                    color: #fff;
                }

                .cd-search i {
                    position: absolute;
                    left: 10px;
                    top: 8px;
                    color: #777;
                }

                /* GRID */
                .cd-grid {
                    display: grid;
                    grid-template-columns: 1.2fr 2fr;
                    gap: 20px;
                }

                /* CARD */
                .cd-card {
                    /* background: #0c0c0c;
                    border: 1px solid #1a1a1a; */
                    border-radius: 20px;
                    padding: 20px;
                }

                /* HEADER */
                .cd-card-header {
                    display: flex;
                    justify-content: space-between;
                }

                .cd-card-header h3 {
                    color: #aaa;
                    font-size: 14px;
                }

                .cd-card-header span {
                    font-size: 12px;
                    color: #666;
                }

                /* BUTTON */
                .cd-btn {
                    background: #1a1a1a;
                    border: none;
                    padding: 5px 12px;
                    border-radius: 20px;
                    color: #fff;
                    font-size: 12px;
                }

                /* AMOUNT */
                .cd-amount {
                    font-size: 30px;
                    margin-top: 15px;
                }

                .cd-amount span {
                    font-size: 12px;
                    color: #aaa;
                }

                /* SUBTEXT */
                .cd-sub {
                    font-size: 13px;
                    color: #666;
                }

                /* ACTIONS */
                .cd-actions {
                    display: flex;
                    gap: 10px;
                    margin-top: 15px;
                }

                .cd-actions div {
                    flex: 1;
                    background: #151618;
                    border-radius: 12px;
                    padding: 10px;
                    text-align: center;
                    border: 1px solid #313131;
                }

                .cd-actions p {
                    font-size: 11px;
                    margin-top: 5px;
                }

                /* RIGHT GRID */
                .cd-right {
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    gap: 15px;
                }

                .cd-small {
                    /* background: #0c0c0c;
                    border: 1px solid #1a1a1a; */
                    border-radius: 20px;
                    padding: 15px;
                }

                .cd-small h4 {
                    color: #aaa;
                    font-size: 13px;
                }

                .cd-small h2 {
                    margin: 10px 0;
                }

                /* COLORS */
                .green {
                    color: #16ff8e;
                    font-size: 12px;
                }

                .red {
                    color: #ff4d4d;
                    font-size: 12px;
                }

                /* ===== GRID RESPONSIVE ===== */
                .cd-grid {
                    display: grid;
                    grid-template-columns: 1.2fr 2fr;
                    gap: 20px;
                }

                /* RIGHT GRID */
                .cd-right {
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    gap: 15px;
                }

                /* ===== TABLET ===== */
                @media (max-width: 992px) {
                    .cd-grid {
                        grid-template-columns: 1fr;
                        /* stack */
                    }

                    .cd-right {
                        grid-template-columns: repeat(2, 1fr);
                    }
                }

                /* ===== MOBILE ===== */
                @media (max-width: 576px) {

                    .cd-right {
                        grid-template-columns: 1fr;
                        /* single column */
                    }

                    .cd-card {
                        padding: 15px;
                    }

                    .cd-amount {
                        font-size: 22px;
                    }

                    .cd-actions {
                        flex-direction: column;
                    }

                    .cd-actions div {
                        width: 100%;
                    }

                    .cd-card-header {
                        flex-direction: column;
                        gap: 10px;
                    }

                    .cd-btn {
                        width: 100%;
                        text-align: center;
                    }

                    .cd-small h2 {
                        font-size: 18px;
                    }

                    .db-page__title {
                        font-size: 20px;
                    }

                    .db-page__descr {
                        font-size: 13px;
                    }
                }

                /* ICON CIRCLE */
                .cd-icon {
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    width: 38px;
                    height: 38px;
                    border-radius: 50%;
                    background: #111;
                    color: #fff;
                }

                .cd-icon i {
                    width: 18px;
                    height: 18px;
                }

                /* SMALL ICON */
                .cd-icon.small {
                    width: 34px;
                    height: 34px;
                }

                /* ICON BOX (SMART WALLET) */
                .cd-icon-box {
                    flex: 1;
                    background: #111;
                    border-radius: 14px;
                    padding: 12px;
                    text-align: center;
                    transition: 0.3s;
                }

                .cd-icon-box:hover {
                    background: #161616;
                    transform: translateY(-2px);
                }

                /* HEADER */
                .cd-small-header {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 10px;
                }

                /* DOT MENU */
                .cd-dots {
                    color: #777;
                    font-size: 18px;
                    cursor: pointer;
                }

                /* HOVER GLOW */
                .cd-icon-box:hover .cd-icon {
                    background: linear-gradient(135deg, #16ff8e, #0f2f1f);
                    color: #000;
                }

                /* GRID */
                .stats-grid {
                    display: grid;
                    grid-template-columns: repeat(4, 1fr);
                    gap: 20px;
                    margin-top: 20px;
                }

                /* CARD */
                .stat-card {
                    background: #0c0c0c;
                    border: 1px solid #1a1a1a;
                    border-radius: 20px;
                    padding: 20px;
                    transition: 0.3s;
                    position: relative;
                }

                /* ACTIVE (GREEN GRADIENT) */
                .stat-card.active {
                    background: linear-gradient(135deg, #0f2f1f, #16ff8e);
                    color: #000;
                }

                /* HEADER */
                .stat-header {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }

                .stat-header h4 {
                    font-size: 14px;
                    color: #aaa;
                }

                .stat-card.active h4 {
                    color: #003b1f;
                }

                /* ICON BUTTON */
                .stat-icon {
                    width: 34px;
                    height: 34px;
                    border-radius: 50%;
                    background: #111;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .stat-card.active .stat-icon {
                    background: rgba(255, 255, 255, 0.3);
                }

                /* NUMBER */
                .stat-card h1 {
                    font-size: 36px;
                    margin: 20px 0 10px;
                }

                /* FOOTER */
                .stat-footer {
                    font-size: 13px;
                    display: flex;
                    align-items: center;
                    gap: 5px;
                }

                /* COLORS */
                .green {
                    color: #16ff8e;
                }

                .yellow {
                    color: #ffcc00;
                }

                /* HOVER */
                .stat-card:hover {
                    transform: translateY(-4px);
                    border-color: #16ff8e;
                }

                /* RESPONSIVE */
                @media (max-width: 992px) {
                    .stats-grid {
                        grid-template-columns: repeat(2, 1fr);
                    }
                }

                @media (max-width: 576px) {
                    .stats-grid {
                        grid-template-columns: 1fr;
                    }
                }

                /* CARD */
                .ref-card {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    background: #0c0c0c;
                    border: 1px solid #1a1a1a;
                    border-radius: 20px;
                    padding: 20px;
                    gap: 20px;
                }

                /* LEFT */
                .ref-left {
                    display: flex;
                    align-items: center;
                    gap: 15px;
                }

                .ref-left h3 {
                    margin: 0;
                    font-size: 18px;
                }

                .ref-left p {
                    margin: 0;
                    font-size: 13px;
                    color: #777;
                }

                /* ICON */
                .ref-icon {
                    width: 50px;
                    height: 50px;
                    border-radius: 14px;
                    background: linear-gradient(135deg, #16ff8e, #0f2f1f);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: #000;
                }

                .ref-icon i {
                    width: 22px;
                    height: 22px;
                }

                /* RIGHT */
                .ref-right {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    flex: 1;
                    justify-content: flex-end;
                }

                /* INPUT */
                .ref-right input {
                    background: #111;
                    border: 1px solid #1a1a1a;
                    border-radius: 12px;
                    padding: 10px 15px;
                    color: #fff;
                    width: 100%;
                    max-width: 420px;
                }

                /* BUTTON */
                .copy-btn {
                    background: linear-gradient(135deg, #16ff8e, #0f2f1f);
                    border: none;
                    border-radius: 12px;
                    padding: 10px 18px;
                    color: #000;
                    font-weight: 600;
                    display: flex;
                    align-items: center;
                    gap: 6px;
                    cursor: pointer;
                    transition: 0.3s;
                }

                .copy-btn:hover {
                    opacity: 0.85;
                    transform: translateY(-1px);
                }

                @media (max-width: 768px) {
                    .ref-card {
                        flex-direction: column;
                        align-items: flex-start;
                    }

                    .ref-right {
                        width: 100%;
                        flex-direction: column;
                        align-items: stretch;
                    }

                    .ref-right input {
                        max-width: 100%;
                    }

                    .copy-btn {
                        width: 100%;
                        justify-content: center;
                    }
                }
                .cd-chart {
    margin-top: 18px;
    height: 110px;
    position: relative;
}

/* soft fade bottom */
.cd-chart::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 40px;
    background: linear-gradient(to top, #0c0c0c, transparent);
}
                
            </style>
            <div class="col-12">
                <div class="db-page">
                    <div class="row">

                        @include('layouts.upnl.sidebar')
                        <div class="col-12 col-xl-9">
                            <div class="db-page__right globalAccount globalAccountDashboard">

                                <!-- Title -->
                                <div class="db-page__title-block">
                                    <h2 class="db-page__title">Dashboard</h2>
                                </div>

                                <!-- Description -->
                                <div class="db-page__descr-block mb-4">
                                    <div class="db-page__descr">
                                        A detailed overview of your crypto portfolio, including available assets on your
                                        balance sheet, staked coins, and collateral loans.
                                    </div>
                                </div>

                                <!-- ===== CUSTOM DASHBOARD UI ===== -->
                                <div class="custom-dashboard">
                                    <!-- Grid -->
                                    <div class="cd-grid">

                                        <div class="cd-card wallet db-info-panel">

                                            <!-- Header -->
                                            <div class="cd-card-header">
                                                <div>
                                                    <h3>Total Assets</h3>
                                                    <span>My income portfolio .</span>
                                                </div>

                                                <button class="cd-btn">
                                                    <i data-lucide="plus"></i> Deposit
                                                </button>
                                            </div>

                                            <!-- Amount -->
                                            <div class="cd-amount">
                                                {{ number_format(Auth::user()->available_balance(), 2) }}
                                                <span>USD</span>
                                            </div>

                                            <div class="cd-sub">Availbale Balance</div>

                                            <!-- Actions -->
                                            <div class="cd-actions">

                                                <!-- Deposit -->
                                                <div class="cd-icon-box">
                                                    <span class="cd-icon">
                                                        <i data-lucide="arrow-down-circle"></i>
                                                    </span>
                                                    <p>Deposit</p>
                                                </div>

                                                <!-- Withdraw -->
                                                <div class="cd-icon-box">
                                                    <span class="cd-icon">
                                                        <i data-lucide="arrow-up-circle"></i>
                                                    </span>
                                                    <p>Withdraw</p>
                                                </div>

                                                <!-- Refer -->
                                                <div class="cd-icon-box">
                                                    <span class="cd-icon">
                                                        <i data-lucide="users"></i>
                                                    </span>
                                                    <p>Refer</p>
                                                </div>

                                            </div>

                                            <!-- Growth Chart -->

<div class="cd-chart">

    <canvas id="growthChart"></canvas>

</div>

                                        </div>

                                        <!-- Right Cards -->
                                        <div class="cd-right">
                                            <div class="cd-small db-info-panel">

                                                <div class="cd-small-header">

                                                    <span class="cd-icon small">

                                                        <i data-lucide="wallet"></i>

                                                    </span>

                                                    <span class="cd-dots">•••</span>

                                                </div>

                                                <h4>Total Deposit</h4>

                                                <h2>{{ currency() }}{{ number_format(Auth::user()->investment->sum('amount'), 2) }}
                                                </h2>

                                                <span class="green">+34.5%</span>

                                            </div>
                                            <div class="cd-small db-info-panel">

                                                <!-- Top Header -->
                                                <div class="cd-small-header">
                                                    <span class="cd-icon small">
                                                        <i data-lucide="shield"></i>
                                                    </span>

                                                    <span class="cd-dots">•••</span>
                                                </div>

                                                <!-- Title -->
                                                <h4>Staking Reward</h4>

                                                <!-- Amount -->
                                                <h2>{{ currency() }}{{ number_format(Auth::user()->stakingBonus->sum('comm'), 2) }}
                                                </h2>

                                                <!-- Growth -->
                                                <span class="green">
                                                    +12.01%
                                                    <i data-lucide="trending-up" class="trend-icon"></i>
                                                </span>

                                            </div>

                                            <div class="cd-small db-info-panel">

                                                <!-- Header -->
                                                <div class="cd-small-header">
                                                    <span class="cd-icon small">
                                                        <i data-lucide="trending-up"></i>
                                                    </span>

                                                    <span class="cd-dots">•••</span>
                                                </div>

                                                <!-- Title -->
                                                <h4>Direct Reward</h4>

                                                <!-- Amount -->
                                                <h2>{{ currency() }}{{ number_format(Auth::user()->refer_bonus->sum('comm'), 2) }}
                                                </h2>

                                                <!-- Growth -->
                                                <span class="green">
                                                    +7.76%
                                                    <i data-lucide="arrow-up-right" class="trend-icon"></i>
                                                </span>

                                            </div>

                                            <div class="cd-small db-info-panel">

                                                <!-- Header -->
                                                <div class="cd-small-header">
                                                    <span class="cd-icon small">
                                                        <i data-lucide="trending-down"></i>
                                                    </span>

                                                    <span class="cd-dots">•••</span>
                                                </div>

                                                <!-- Title -->
                                                <h4>Staking Referral Reward </h4>

                                                <!-- Amount -->
                                                <h2>{{ currency() }}{{ number_format(Auth::user()->stakingRefBonus->sum('comm'), 2) }}
                                                </h2>

                                                <!-- Growth -->
                                                <span class="red">
                                                    -8.12%
                                                    <i data-lucide="arrow-down-right" class="trend-icon"></i>
                                                </span>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="stats-grid">

                                        <!-- Total Projects (Highlighted) -->
                                        <div class="stat-card highlight">
                                            <div class="stat-header">
                                                <h4>Team Development Reward</h4>
                                                <div class="stat-icon">
                                                    <i data-lucide="arrow-up-right"></i>
                                                </div>
                                            </div>

                                            <h1>{{ currency() }}{{ number_format(Auth::user()->teamDevelopmentReward->sum('comm'), 2) }}
                                            </h1>

                                            <p class="stat-growth green">
                                                <i data-lucide="trending-up"></i>
                                                5%
                                            </p>
                                        </div>

                                        <!-- Ended Projects -->
                                        <div class="stat-card">
                                            <div class="stat-header">
                                                <h4>Club Reward</h4>
                                                <div class="stat-icon">
                                                    <i data-lucide="arrow-up-right"></i>
                                                </div>
                                            </div>

                                            <h1>{{ currency() }}{{ number_format(Auth::user()->club_bonus->sum('comm'), 2) }}
                                            </h1>

                                            <p class="stat-growth green">
                                                <i data-lucide="trending-up"></i>
                                                5%
                                            </p>
                                        </div>

                                        <!-- Running Projects -->
                                        <div class="stat-card">
                                            <div class="stat-header">
                                                <h4>Referral Team</h4>
                                                <div class="stat-icon">
                                                    <i data-lucide="arrow-up-right"></i>
                                                </div>
                                            </div>

                                            <h1>{{ number_format($user_direct, 1) }}</h1>

                                            <p class="stat-growth green">
                                                <i data-lucide="trending-up"></i>
                                                8.4%
                                            </p>
                                        </div>

                                        <!-- Pending -->
                                        <div class="stat-card">
                                            <div class="stat-header">
                                                <h4>Total Withdrawal</h4>
                                                <div class="stat-icon">
                                                    <i data-lucide="arrow-up-right"></i>
                                                </div>
                                            </div>

                                            <h1> {{ currency() }}{{ number_format(Auth::user()->withdrawal->sum('amount'), 2) }}
                                            </h1>

                                            <p class="stat-growth">
                                                5%
                                                <i data-lucide="trending-down"></i>
                                            </p>
                                        </div>

                                    </div>
                                    <br>

                                    <div class="ref-card">

                                        <!-- Left -->
                                        <div class="ref-left">
                                            <div class="ref-icon">
                                                <i data-lucide="link"></i>
                                            </div>

                                            <div>
                                                <h3>Your Referral Link</h3>
                                                <p>Share this link to earn commissions</p>
                                            </div>
                                        </div>

                                        <!-- Right -->
                                        <div class="ref-right">
                                            <input type="text" value="{{ route('register', ['ref' => Auth::user()->username]) }}" id="referralLink"
                                                readonly>

                                           <button class="copy-btn" onclick="copyReferral(this)">
                                                <i data-lucide="copy"></i>
                                                Copy
                                            </button>
                                        </div>

                                    </div>

                                </div>
                                <!-- ===== END ===== -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function copyReferral(btn) {
    const input = btn.parentElement.querySelector("input");

    // Copy text
    navigator.clipboard.writeText(input.value).then(() => {
        btn.innerHTML = "Copied ✓";

        setTimeout(() => {
            btn.innerHTML = '<i data-lucide="copy"></i> Copy';
            lucide.createIcons();
        }, 1500);
    }).catch(() => {
        // fallback (older browsers)
        input.select();
        document.execCommand("copy");
        btn.innerHTML = "Copied ✓";
    });
}
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
        const growthData = @json($growthData);

document.addEventListener("DOMContentLoaded", function () {

    const ctx = document.getElementById('growthChart').getContext('2d');

    const gradient = ctx.createLinearGradient(0, 0, 0, 120);

    gradient.addColorStop(0, "rgba(22,255,142,0.35)");

    gradient.addColorStop(1, "rgba(22,255,142,0)");

    new Chart(ctx, {

        type: 'line',

        data: {

            labels: growthData, // hidden anyway

            datasets: [{

                data: growthData,

                borderColor: '#16ff8e',

                backgroundColor: gradient,

                borderWidth: 2,

                fill: true,

                tension: 0.45,

                pointRadius: 0,

                pointHoverRadius: 0

            }]

        },

        options: {

            responsive: true,

            maintainAspectRatio: false,

            plugins: {

                legend: { display: false },

                tooltip: { enabled: false } // ❌ no popup

            },

            scales: {

                x: { display: false },

                y: { display: false }

            },

            elements: {

                point: {

                    radius: 0

                }

            }

        }

    });

});
</script>
<script>
    lucide.createIcons();
</script>

