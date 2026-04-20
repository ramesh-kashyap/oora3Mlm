
<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">
      
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                     <div class="card-header">
                        <h4 class="card-title">Reccuring Income</h4>
                    </div>
                      <div class="card-header">
                        <form method="GET" action="{{ route('user.reccuring-bonus') }}" class="d-flex align-items-center gap-2 flex-wrap">
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
                            <a href="{{ route('user.reccuring-bonus') }}" class="btn btn-secondary btn-sm"
                                style="height:  50px;">Reset</a>
                        </form>
                    </div>
                    <div class="card-body">
                       <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>User Id</th>
                                    <!--<th>Package</th>-->
                                    <th>Amount</th>
                                    <th>Level</th>
                                  
                                    <th>From ID</th>
                                      <th>Remarks</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            @if (count($level_income) > 0)

                            <tbody>
                                @php $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); @endphp
                                @foreach ($level_income as $value)
                                <tr>
                                    <td> {{ $cnt + $loop->iteration }}
                                    </td>
                                    <td>
                                       {{ $value->user_id_fk }}
                                    </td>
                                   
                                    <td>   {{currency()}} {{ $value->comm }} </td>
                                    <td>   Lvl-{{ $value->level }} </td>
                                    
                                    
                                      <td>
                                        {{ $value->rname }} {{ $value->fullname }}
                                    </td>

                                    <td>
                                        {{ $value->remarks }}
                                    </td>
                                  
                                    <td>
                                           {{ date('D, d M Y H:i:s', strtotime($value->created_at)) }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            @else
                            <tbody>
                                <tr>
                                    <td colspan="100%">
                                        <div class="empty-message ">
                                          
                                            <p class="empty-message-text text-center">No history found</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            @endif


                        </table>
   @if ($level_income->total() > $level_income->perPage())
                    {{ $level_income->withQueryString()->links() }}
                    @endif
                    </div>
                  </div>
                
                </div>


            </div>
        </div>
    </div>

</div>