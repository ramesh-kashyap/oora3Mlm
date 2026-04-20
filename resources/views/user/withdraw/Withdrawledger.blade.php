<div class="content-body" style="min-height: 732px;">
   <div class="container-fluid">


      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-tit  le">Withdraw Ledger</h4>
               </div>
                <div class="card-header">
                        <form method="GET" action="{{ route('user.paymentledger') }}" class="d-flex align-items-center gap-2 flex-wrap">
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
                            <a href="{{ route('user.paymentledger') }}" class="btn btn-secondary btn-sm"
                                style="height:  50px;">Reset</a>
                        </form>
                    </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-responsive-md">
                        <thead>
                           <tr>
                              <th style="width:80px;"><strong>Date</strong></th>
                              <!--<th><strong>Id</strong></th>-->
                              <th><strong>Referral Income</strong></th>
                              <th><strong>Farming Income</strong></th>
                              <th><strong>Reccuring Income</strong></th>
                              <th><strong>Reward Income</strong></th>
                              <th><strong>Salary Income</strong></th>
                              <th><strong>Contract Profit Sharing</strong></th>
                              <th><strong>Total Income</strong></th>
                              <th><strong>Deduction</strong></th>
                              <th><strong>Service Charge</strong></th>
                              <th><strong>TDS Charge</strong></th>
                              <th>Payable Amount</th>

                           </tr>
                        </thead>
                        @if (!empty($withdraw_report) && count($withdraw_report) > 0)
                        <tbody>
                           <?php if (is_array($withdraw_report) || is_object($withdraw_report)) { ?>
                              <?php $cnt = 0; ?>
                              @foreach($withdraw_report as $value) <tr>

                                 <td data-label="Last Reply">{{ $value->created_at }}</td>
                                 <!--<td>{{ $value->id }}</td>-->
                                 <td>{{ currency() }} {{ $value->referral_income }}</td>
                                 <td>{{ currency() }}{{ $value->farming_income}}</td>
                                 <td>{{ currency() }}{{ $value->reccuring_income }}</td>
                                 <td>{{ currency() }}{{ $value->reward_income }}</td>
                                 <td>{{ currency() }}{{ $value->salary_income }}</td>
                                 <td>{{ currency() }}{{ $value->contract_profit_sharing }}</td>
                                 <td>{{ currency() }}{{ $value->total }}</td>
                                 <td>{{ currency() }}{{ $value->deduction }}</td>
                                 <td>{{ currency() }}{{ $value->service_charge }}</td>
                                 <td>{{ currency() }}{{ $value->tds }}</td>
                                 <td>{{ currency() }}{{ $value->withdraw_amt}}</td>



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
            </div>
         </div>

      </div>
   </div>
</div>