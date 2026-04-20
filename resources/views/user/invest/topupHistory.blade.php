<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">My Topup History</h4>
                    </div>
                    <div class="card-header">
                        <form method="GET" action="{{ route('user.topupHistory') }}" class="d-flex align-items-center gap-2 flex-wrap">
                            <!-- Search Input -->
                            <input type="text" name="search" class="form-control form-control-sm" placeholder="Search..."
                                value="{{ request('search') }}" style="width: 150px; height: 50px;">

                            <!-- Start Date -->
                            <input type="date" name="start_date" class="form-control form-control-sm"
                                value="{{ request('start_date') }}" style="width: 130px; height: 50px;">

                            <!-- End Date -->
                            <input type="date" name="end_date" class="form-control form-control-sm"
                                value="{{ request('end_date') }}" style="width: 130px; height: 50px;">

                            <!-- Limit Dropdown -->
                            <select name="limit" class="form-control form-control-sm" style="width: 80px; height: 50px;">
                                <option value="10" {{ request('limit') == 10 ? 'selected' : '' }}>10</option>
                                <option value="25" {{ request('limit') == 25 ? 'selected' : '' }}>25</option>
                                <option value="50" {{ request('limit') == 50 ? 'selected' : '' }}>50</option>
                            </select>

                            <!-- Search Button -->
                            <button type="submit" class="btn btn-primary btn-sm"
                                style="height:  50px;">Search</button>

                            <!-- Reset Button -->
                            <a href="{{ route('user.topupHistory') }}" class="btn btn-secondary btn-sm"
                                style="height:  50px;">Reset</a>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th style="width:80px;"><strong>S.No</strong></th>
                                        <th><strong>Amount</strong></th>
                                        <th><strong>DATE</strong></th>
                                        <th><strong>Remarks</strong></th>
                                        <th><strong>Status</strong></th>

                                    </tr>
                                </thead>
                                @if (count($deposit_list) > 0)
                                <tbody>
                                    <?php if (is_array($deposit_list) || is_object($deposit_list)) { ?>
                                        <?php $cnt = 0; ?>
                                        @foreach($deposit_list as $value) <tr>
                                            <td><strong><?= $cnt += 1 ?></strong></td>
                                            <td> {{currency()}} {{ $value->amount }}</td>
                                            <td>{{ $value->sdate}}</td>
                                            <td><span class="badge light badge-success">{{ $value->remarks}}</span></td>
                                            <td><span class="{{ $value->status == 'Active' ? 'badge badge--success' : 'badge badge--danger' }}">{{ ucfirst($value->status) }}</span></td>

                                        </tr>
                                        @endforeach

                                    <?php } ?>

                                </tbody>
                                @else

                                <tbody>
                                    <tr>
                                        <td colspan="100%">
                                            <div class="empty-message ">

                                                <p class="empty-message-text text-center">No deposit history found</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                @endif
                            </table>
                            @if ($deposit_list->hasPages())
                            <div class="pagination-wrapper">
                                {{ $deposit_list->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>