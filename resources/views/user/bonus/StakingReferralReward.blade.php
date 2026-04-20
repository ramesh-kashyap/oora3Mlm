<div class="db-page-block" id="globalAccount">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="db-page">
                    <div class="row">

                        @include('layouts.upnl.sidebar')
                        <div class="col-12 col-xl-9">
                            <div class="db-page__right globalAccount globalAccountTransactions">
                                <div class="db-page__title-block">
                                    <h2 class="db-page__title">Staking Referral Reward</h2>
                                </div>
                                <div class="db-page__descr-block">
                                    <div class="db-page__descr">Transaction log with detailed information about all transactions in your wallet.</div>
                                </div>
                                <div class="db-page__content">


                                    <div class="transactions-empty-block globalAccountTransactionsEmpty d-none">
                                        <div class="transactions-empty-wrapper">
                                            <div class="transactions-empty">
                                                <div class="transactions-empty__icon"></div>
                                                <div class="transactions-empty__title">
                                                    Transactions not found
                                                </div>
                                                <div class="transactions-empty__descr">
                                                    Fund your wallet to use oora3 products
                                                </div>
                                                <div class="transactions-empty__button-block">
                                                    <button type="button" class="green-gradient-btn iconed-btn transactions-empty__button button--small optimaDepositButton">
                                                        <div class="iconed-btn__icon"></div>
                                                        <div class="iconed-btn__text">Staking Referral Reward
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="db-transaction-table-block globalAccountTransactionsNotEmpty">
                                        <div class="db-transaction-table">
                                            <div class="db-transaction-table-filter">
                                                <div class="db-transaction-filter-mobile-panel-block">
                                                    <div class="db-transaction-filter-mobile-panel">
                                                        <div class="db-transaction-filter-mobile-panel__left">
                                                            <div class="db-transaction-filter-mobile-toogle-button-block">
                                                                <button class="db-transaction-filter-mobile-toogle-button"></button>
                                                            </div>
                                                        </div>
                                                        <div class="db-transaction-filter-mobile-panel__right">

                                                            <div class="db-transaction-filter-form-reset-button-block">
                                                                <button type="button" data-form=".globalAccountTransactionsFilterForm" class="formFilterReset db-transaction-filter-form-button iconed-btn light-black-btn button--small">
                                                                    <div class="iconed-btn__icon"></div>
                                                                    <div class="iconed-btn__text">Reset</div>
                                                                </button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="db-transaction-filter-form-block">
                                                    <form class="db-transaction-filter-form globalAccountTransactionsFilterForm">
                                                        <div class="db-transaction-filter-form-row">
                                                            <div class="db-transaction-filter-form-row__fields">
                                                                <div class="db-transaction-filter-form-fields-block">
                                                                    <div class="db-transaction-filter-form-fields">
                                                                        <div class="db-transaction-filter-form-field-wrapper">

                                                                            <div class="field-block">
                                                                                <div class="field field--select field--select--small">
                                                                                    <div class="dropdown bootstrap-select select-currency">

                                                                                        <input type="text"   id="searchInput" placeholder="Search " style="width: 100%">


                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="db-transaction-filter-form-field-wrapper">
                                                                            <div class="field-block">
                                                                                <div class="field field--select field--select--small">
                                                                                    <div class="dropdown bootstrap-select select">
                                                                                        <select name="type" class="select" data-none-selected-text="Type" tabindex="null" onchange="filterType(this.value)">
                                                                                            <option data-content="&lt;div class=&quot;select-item&quot;&gt;&lt;div class=&quot;select-item-text&quot;&gt;Type&lt;/div&gt;&lt;/div&gt;" value="" hidden="" disabled="" selected="">Type</option>
                                                                                            <option data-content="&lt;div class=&quot;select-item&quot;&gt;&lt;div class=&quot;select-item-text&quot;&gt;Deposit&lt;/div&gt;&lt;/div&gt;" value="{{route('user.topupHistory')}}">Deposit</option>
                                                                                            <option data-content="&lt;div class=&quot;select-item&quot;&gt;&lt;div class=&quot;select-item-text&quot;&gt;Withdrawal&lt;/div&gt;&lt;/div&gt;" value="{{route('user.Withdraw-History')}}">Withdrawal</option>
                                                                                            <option data-content="&lt;div class=&quot;select-item&quot;&gt;&lt;div class=&quot;select-item-text&quot;&gt;Staking Reward&lt;/div&gt;&lt;/div&gt;" value="{{route('user.staking-reward')}}">Staking reward</option>
                                                                                            <option data-content="&lt;div class=&quot;select-item&quot;&gt;&lt;div class=&quot;select-item-text&quot;&gt;Direct Reward&lt;/div&gt;&lt;/div&gt;" value="{{route('user.referral-bonus')}}">Direct Reward</option>
                                                                                            <option data-content="&lt;div class=&quot;select-item&quot;&gt;&lt;div class=&quot;select-item-text&quot;&gt;Staking Referral Reward&lt;/div&gt;&lt;/div&gt;" value="{{route('user.staking-referral-bonus')}}">Staking Referral Reward</option>
                                                                                            <option data-content="&lt;div class=&quot;select-item&quot;&gt;&lt;div class=&quot;select-item-text&quot;&gt;Team Development Reward&lt;/div&gt;&lt;/div&gt;" value="{{route('user.team-development-reward')}}">Team Development Reward</option>
                                                                                            <option data-content="&lt;div class=&quot;select-item&quot;&gt;&lt;div class=&quot;select-item-text&quot;&gt;Club Reward&lt;/div&gt;&lt;/div&gt;" value="{{ route('user.club-reward') }}">Club Reward</option>
                                                                                        </select>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="db-transaction-filter-form-field-wrapper">
                                                                            <div class="field-block">
                                                                                <div class="field field--select field--select--small">
                                                                                    <div class="dropdown bootstrap-select select">
                                                                                        <select name="status" class="select" data-none-selected-text="Status">
                                                                                            <option data-content="&lt;div class=&quot;select-item&quot;&gt;&lt;div class=&quot;select-item-text&quot;&gt;Status&lt;/div&gt;&lt;/div&gt;" value="" hidden="" disabled="" selected="">Status</option>
                                                                                            <option data-content="&lt;div class=&quot;select-item&quot;&gt;&lt;div class=&quot;select-item__text&quot;&gt;All&lt;/div&gt;&lt;/div&gt;" value="">All</option>
                                                                                            <option data-content="&lt;div class=&quot;select-item&quot;&gt;&lt;div class=&quot;select-item__text&quot;&gt;Completed&lt;/div&gt;&lt;/div&gt;" value="success">Completed</option>
                                                                                            <option data-content="&lt;div class=&quot;select-item&quot;&gt;&lt;div class=&quot;select-item__text&quot;&gt;Pending&lt;/div&gt;&lt;/div&gt;" value="pending">Pending</option>
                                                                                            <option data-content="&lt;div class=&quot;select-item&quot;&gt;&lt;div class=&quot;select-item__text&quot;&gt;Canceled&lt;/div&gt;&lt;/div&gt;" value="error">Canceled</option>
                                                                                        </select>

                                                                                        <div class="dropdown-menu ">
                                                                                            <div class="inner show" role="listbox" id="bs-select-22" tabindex="-1">
                                                                                                <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="db-transaction-filter-form-row__button">
                                                                <div class="db-transaction-filter-form-reset-button-block">
                                                                    <button type="button" class="db-transaction-filter-form-button iconed-btn light-black-btn button--small formFilterReset">
                                                                        <div class="iconed-btn__icon"></div>
                                                                        <div class="iconed-btn__text">Reset</div>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="db-transaction-table-heading globalAccountTransactionsNotEmptyTableHeading">
                                                <div class="db-transaction-t-h-cell db-transaction-t-h-cell--type">
                                                    Type
                                                </div>
                                                <div class="db-transaction-t-h-cell db-transaction-t-h-cell--currency">
                                                    Currency
                                                </div>
                                                <div class="db-transaction-t-h-cell db-transaction-t-h-cell--amount">
                                                    Amount
                                                </div>
                                                <div class="db-transaction-t-h-cell db-transaction-t-h-cell--status">
                                                    From ID
                                                </div>
                                                <div class="db-transaction-t-h-cell db-transaction-t-h-cell--date">
                                                    Date
                                                </div>
                                                <div class="db-transaction-t-h-cell db-transaction-t-h-cell--detail">

                                                </div>
                                            </div>
                                            <div class="db-transaction-table-items ">
                                                @forelse($level_income as $row)

                                                <div class="db-transaction-table-item db-transaction-table-item--deposit">

                                                    <!-- TYPE -->
                                                    <div class="db-transaction-t-i-cell db-transaction-t-i-cell--type">
                                                        <div class="db-transaction-t-i-cell__title">Type</div>
                                                        <div class="db-transaction-t-i-cell__content">
                                                            <div class="db-transaction-t-i-type db-transaction-t-i-type--deposit">

                                                                <div class="db-transaction-t-i-type__right">
                                                                    <div class="db-transaction-t-i-type__title">
                                                                        {{ ucfirst($row->remarks ?? 'Withdrawal') }}
                                                                    </div>

                                                                    <div class="db-transaction-t-i-type__descr">
                                                                        {{ strtoupper($row->payment_mode ?? 'BEP20') }}
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- CURRENCY -->
                                                    <div class="db-transaction-t-i-cell db-transaction-t-i-cell--currency">
                                                        <div class="db-transaction-t-i-cell__title">Currency</div>
                                                        <div class="db-transaction-t-i-cell__content">

                                                            <div class="currency-item">
                                                                <div class="currency-icon currency-icon--{{ strtolower($row->currency ?? 'usdt') }}">
                                                                    <img src="{{ asset('assets/oora3/images/svg/currency/'.strtolower($row->currency ?? 'usdt').'.svg') }}">
                                                                </div>
                                                                <div class="currency-item__title">
                                                                    &nbsp; {{ strtoupper($row->payment ?? 'USDT') }}   &nbsp;
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <!-- AMOUNT -->
                                                    <div class="db-transaction-t-i-cell db-transaction-t-i-cell--amount">
                                                        <div class="db-transaction-t-i-cell__title">Amount</div>
                                                        <div class="db-transaction-t-i-cell__content">

                                                            <div class="db-transaction-t-i-amount 
                {{ $row->type == 'deposit' ? 'db-transaction-t-i-amount--green2' : 'db-transaction-t-i-amount--red2' }}">

                                                                ${{ number_format($row->comm, 2) }}
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <!-- STATUS -->
                                                    <div class="db-transaction-t-i-cell db-transaction-t-i-cell--status">
                                                        <div class="db-transaction-t-i-cell__title">Status</div>
                                                        <div class="db-transaction-t-i-cell__content">

                                                            @php $statusClass = match($row->status) { 'Active' => 'completed', 'Pending' => 'pending', 'Decline' => 'canceled', default => 'pending' }; @endphp

                                                            <div class="db-transaction-t-i-status db-transaction-t-i-status--{{ $statusClass }}">
                                                                {{ $row->rname }}
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <!-- DATE -->
                                                    <div class="db-transaction-t-i-cell db-transaction-t-i-cell--date">
                                                        <div class="db-transaction-t-i-cell__title">Date</div>
                                                        <div class="db-transaction-t-i-cell__content">

                                                            {{ \Carbon\Carbon::parse($row->created_at)->format('M d Y H:i:s') }}

                                                        </div>
                                                    </div>


                                                </div>

                                                @empty
                                                <div class="text-center p-3 text-muted">
                                                    No transactions found
                                                </div>
                                                @endforelse



                                            </div>
                                            <div class="db-transaction-table-manage-panel">
                                                <div class="db-transaction-table-manage-panel__left">

                                                    <div class="pagination-block">
                                                        <div class="pagination">
                                                            <ul class="pagination-list globalAccountTransactionsNotEmptyPages">
                                                                <li class="pagination-item active">
                                                                    <button onclick="return false;" class="pagination-link">1</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="db-transaction-table-manage-panel__right">

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
    function filterType(type) {
         let baseUrl = type;
        window.location.href = baseUrl;
    
    }
</script>
<script>

let timer;

document.getElementById('searchInput').addEventListener('keyup', function () {

    clearTimeout(timer);

    timer = setTimeout(() => {

        let value = this.value.trim();

        let url = new URL(window.location.href);

        if (value) {

            url.searchParams.set('search', value);

        } else {

            url.searchParams.delete('search');

        }

        window.location.href = url.toString();

    }, 600);

});

</script>