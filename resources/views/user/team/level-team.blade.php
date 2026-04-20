<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">
       
        <!-- row -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="card custom--card h-100">
                    <div class="card-header">
                        <h4 class="card-title">Level Team</h4>
                    </div>
                    <div class="card-header">
                        <form method="GET" action="{{ route('user.level-team') }}" class="d-flex align-items-center gap-2 flex-wrap">
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
                                <option value="100" {{ request('limit') == 100 ? 'selected' : '' }}>100</option>
                                <option value="1000" {{ request('limit') == 1000 ? 'selected' : '' }}>1000</option>
                                <option value="5000" {{ request('limit') == 5000 ? 'selected' : '' }}>5000</option>
                            </select>

                            <!-- Search Button -->
                            <button type="submit" class="btn btn-primary btn-sm"
                                style="height:  50px;">Search</button>

                            <!-- Reset Button -->
                            <a href="{{ route('user.level-team') }}" class="btn btn-secondary btn-sm"
                                style="height:  50px;">Reset</a>
                        </form>
                    </div>
                      <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <!--<th>Email</th>-->
                                    <th>Sponsor ID</th>
                                    <th>Level</th>
                                    <th>Package </th>

                                    <th>Joining Date</th>
                                    <th>Activation Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
                                @forelse ($direct_team as $index => $user)
                                <tr>
                                    <td>{{ $cnt +=  1 }}
                                    </td>
                                    <td>
                                        <span>{{ $user->username }}</span>
                                    </td>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <!--<td>{{ $user->email }}</td>-->

                                    <td>{{ ($user->sponsor_detail)?$user->sponsor_detail->username:'N/A' }}</td>
                                    <td>Lvl-{{ $user->level - Auth::user()->level }}</td>

                                    </td>
                                           <td>{{currency()}}{{ $user->investment->sum('amount') }}</td>
                                    <td>
                                        {{ $user->created_at }}
                                    </td> 
                                    <td>
                                        {{ $user->adate?$user->adate:'N/A' }}
                                    </td>
                                      <td><span class="badge light badge-<?=($user->active_status=="Active")?'success':'danger'?>">{{ ucfirst($user->active_status) }}</span></td>

                                </tr>
                                @empty
                                <tr>
                                    <td colspan="100%">
                                        <div class="empty-message item-center">
                                          
                                            <p class="empty-message-text text-center">No history found</p>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>


                    </div>
                    {{ $direct_team->appends(request()->query())->links() }}
                </div>


            </div>
        </div>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

<script>
    $('#example').DataTable({
        'dom': 'Bfrtip',
        'paging': false, // ❌ Pagination Off
        'lengthChange': false, // ❌ "Show Entries" Dropdown Off
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': true,
        'buttons': ['copy', 'csv', 'excel', 'pdf', 'print']
    });
</script>

