@include('layouts.upnl.header')
<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">

        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="card custom--card h-100">
                    <div class="card-header">
                        <h5 class="card-title">Raise A Ticket</h5>
                    </div>
                    <div class="card-header">
                        <form method="GET" action="{{ route('user.ticket-status') }}" class="d-flex align-items-center gap-2 flex-wrap">
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
                            <a href="{{ route('user.ticket-status') }}" class="btn btn-secondary btn-sm"
                                style="height:  50px;">Reset</a>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>Massege</th>
                                        <th>Status</th>
                                        <th>Category</th>
                                        <th>Last Reply</th>
                                        <th>User Id</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tickets as $key => $withdraw)
                                    <tr>
                                        <td> {{ $withdraw->msg }}
                                        </td>
                                        <td>
                                            <span class="badge badge--success">{{ $withdraw->status}}</span>
                                        </td>
                                        <td>
                                            {{ $withdraw->category }}
                                        </td>
                                        <td>{{ $withdraw->created_at}} </td>

                                        <td>
                                            {{ $withdraw->user_id_fk }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </tbody>

                            </table>

                        </div>
                    </div>
                    {{ $tickets->links() }}
                </div>


            </div>
        </div>
    </div>

</div>
@include('layouts.upnl.footer')