<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">
     
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Referral Team</h4>
                    </div>
                      <div class="card-header">
                        <form method="GET" action="{{ route('user.referral-team') }}" class="d-flex align-items-center gap-2 flex-wrap">
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
                            <a href="{{ route('user.referral-team') }}" class="btn btn-secondary btn-sm"
                                style="height:  50px;">Reset</a>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>


                                    <tr>
                                        <th style="width:80px;"><strong>S.No</strong></th>
                                        <th><strong>Username</strong></th>
                                        <th><strong>Name</strong></th>
                                        <!--<th><strong>Email</strong></th>-->
                                        <!--<th><strong>Phone</strong></th>-->
                                        <th><strong>Package</strong></th>
                                        <th><strong>Joining Date</strong></th>
                                        <th><strong>Status</strong></th>


                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($direct_team as $index => $user)

                                    <tr>
                                        <td><strong>
                                              {{ $index + 1 }}

                                            </strong></td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->name }}</td>
                                        <!--<td>{{ $user->email }}</td>-->
                                        <!--<td>{{ $user->phone }}</td>-->
                                      
                                           <td>{{currency()}}{{ $user->investment->sum('amount') }}</td>
                                           <td>{{ $user->jdate}}</td>
                                        <td><span class="badge light badge-<?=($user->active_status=="Active")?'success':'danger'?>">{{ ucfirst($user->active_status) }}</span></td>
                                        

                                    </tr>
                                    @empty

                                    <tr>
                                        <td colspan="100%">
                                            <div class="empty-message ">

                                                <p class="empty-message-text text-center">No deposit history found</p>
                                            </div>
                                        </td>
                                    </tr>

                                    @endforelse



                                </tbody>

                                <tbody>

                                </tbody>

                            </table>
                            {{ $direct_team->appends(request()->query())->links() }}


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>