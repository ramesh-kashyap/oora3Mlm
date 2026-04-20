<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">
       
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="card custom--card h-100">
                     <div class="card-header">
                        <h4 class="card-title">Contract Profit Bonus</h4>
                    </div>
                      <div class="card-header">
                        <form method="GET" action="{{ route('user.contract-bonus') }}" class="d-flex align-items-center gap-2 flex-wrap">
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
                            <a href="{{ route('user.contract-bonus') }}" class="btn btn-secondary btn-sm"
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
                                    <th>Amount</th>
                                    <th>Remark</th>
                                    <th>Date</th>
                                    
                                    <!-- <th>User Id</th>                                     -->
                                </tr>
                            </thead>
                            @if (count($level_income) > 0)

                            <tbody>
                                <?php if (is_array($level_income) || is_object($level_income)) { ?>
                                        <?php date_default_timezone_set('UTC');
                                        $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); ?>
                                        @foreach ($level_income as $value)
                                <tr>
                                    <td> {{ $cnt + $loop->iteration }}
                                    </td>
                                    <td>
                                        <span class="badge badge--success">{{ $value->user_id_fk }}</span>
                                    </td>
                                    <!-- <td>
                                        {{ $value->amt }}
                                    </td> -->
                                    <td>{{ $value->comm }} </td>

                                    <!-- <td>
                                         {{ generalDetail()->cur_text }}
                                    </td> -->
                                    <td>
                                         {{ $value->remarks }}
                                    </td>
                                    <td>
                                         {{ $value->created_at }}
                                    </td>
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
                    </div>
                    </div>
                 @if ($level_income->total() > $level_income->perPage())
    {{ $level_income->withQueryString()->links() }}
@endif


                </div>


            </div>
        </div>
    </div>

</div>