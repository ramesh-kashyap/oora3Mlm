<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">
      
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                     <div class="card-header">
                        <h4 class="card-title">Reward Bonus</h4>
                    </div>
                      <div class="card-header">
                        <form method="GET" action="{{ route('user.reward-bonus') }}" class="d-flex align-items-center gap-2 flex-wrap">
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
                            <a href="{{ route('user.reward-bonus') }}" class="btn btn-secondary btn-sm"
                                style="height:  50px;">Reset</a>
                        </form>
                    </div>
            
                    <div class="card-body">
                         <div class="table-responsive">
                            <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Rank</th>
                                    <th>Team A Business</th>
                                     <th>Team B Business</th>
                                   <th>Team C Business</th>
                                    <th>Team A Req.</th>
                                    <th>Team B Req.</th>
                                    <th>Other Req.</th>
    
                                    <th>Rewards</th>
                                    <th>Status</th>
                                    
                                </tr>
                            </thead>
                           @php
                                $teamA      = (float) (Auth::user()->teamA ?? 0);
                                $teamB      = (float) (Auth::user()->teamB ?? 0);
                                $otherTeam  = (float) (Auth::user()->other_team ?? 0);
                            
                                // Parse amounts like "2.50 Lakh", "1 Cr", "16.50 CR" -> rupees
                                function parseToRupees($str) {
                                    $s = strtoupper(trim(str_replace(',', '', $str)));
                                    $num = (float) preg_replace('/[^0-9.]/', '', $s);
                                    if (str_contains($s, 'CR') || str_contains($s, 'CRORE'))  return $num * 10000000; // 1 Cr = 1,00,00,000
                                    if (str_contains($s, 'LAKH') || str_contains($s, 'LAC'))  return $num * 100000;   // 1 Lakh = 1,00,000
                                    return (float) $num; // fallback (already in rupees)
                                }
                            
                                // Indian comma formatting (no symbol)
                                $fmtInr = function ($n) {
                                    $n = (int) round($n);
                                    $s = (string)$n;
                                    if (strlen($s) <= 3) return $s;
                                    $last3 = substr($s, -3);
                                    $rest  = substr($s, 0, -3);
                                    $rest  = preg_replace('/\B(?=(\d{2})+(?!\d))/', ',', $rest);
                                    return $rest.','.$last3;
                                };
                            
                                // Approved levels from DB
                                $approvedLevels = collect($rewardIncomes)
                                    ->where('status', 'Approved')
                                    ->pluck('level')->map(fn($v) => (int)$v)->unique()->toArray();
                            
                              $rows = [
                                ['rank' => 'Manager',           'reward' => '5000',     'business' => '2.50 Lakh'],
                                ['rank' => 'Form Manager',      'reward' => '15000',    'business' => '9.50 Lakh'],
                                ['rank' => 'Sen. Form Manager', 'reward' => '40000',    'business' => '29.50 Lakh'],
                                ['rank' => 'Asso Manager',      'reward' => '1 Lakh',   'business' => '79.50 Lakh'],
                                ['rank' => 'Asso Sen. Manager', 'reward' => '2.5 Lakh', 'business' => '1.89 Cr'],
                                ['rank' => 'Platinum Rank',     'reward' => '7.5 Lakh', 'business' => '4.39 Cr'],
                                ['rank' => 'Diamond',           'reward' => '20 Lakh',  'business' => '11.89 Cr'],
                                ['rank' => 'Green Diamond',     'reward' => '50 Lakh',  'business' => '28.39 Cr'],
                                ['rank' => 'Crown Diamond',     'reward' => '1 Cr',     'business' => '63.89 Cr'],
                                ['rank' => 'Ambassador',        'reward' => '2 Cr',     'business' => '139.39 Cr'],
                                ['rank' => 'Crown Ambassador',  'reward' => '5 Cr',     'business' => '264.89 Cr'],
                            ];
                            @endphp
                            
                            @foreach($rows as $i => $row)
                                @php
                                    $level     = $i + 1;
                                    $approved  = in_array($level, $approvedLevels);
                            
                                    // Target per leg = business value
                                    $targetPerLeg = parseToRupees($row['business']);
                            
                                    // Remaining needed per leg (never negative)
                                    $needA     = max(0, $targetPerLeg - $teamA);
                                    $needB     = max(0, $targetPerLeg - $teamB);
                                    $needOther = max(0, $targetPerLeg - $otherTeam);
                                @endphp
                            
                                <tr @if($approved) style="background:linear-gradient(to bottom, #4CAF50, #90bb54)" @endif>
                                    <td>{{ $level }}</td>
                                    <td>{{ $row['rank'] }}</td>
                                    <td>{{ $row['business'] }}</td>
                                    <td>{{ $row['business'] }}</td>
                                    <td>{{ $row['business'] }}</td>
                            
                                    @if($approved)
                                        <!-- Approved: show target per leg -->
                                        <td>{{ $fmtInr($targetPerLeg) }}</td>
                                        <td>{{ $fmtInr($targetPerLeg) }}</td>
                                        <td>{{ $fmtInr($targetPerLeg) }}</td>
                                    @else
                                        <!-- Pending: show remaining per leg (same font, no extra spans) -->
                                        <td>{{ $needA > 0 ? $fmtInr($needA) : '0' }}</td>
                                        <td>{{ $needB > 0 ? $fmtInr($needB) : '0' }}</td>
                                        <td>{{ $needOther > 0 ?$fmtInr($needOther) : '0' }}</td>
                                    @endif
                            
                                    <td>{{ $row['reward'] }}</td>
                                    <td>{{ $approved ? 'Approved' : 'Pending' }}</td>
                                </tr>
                            @endforeach
                            </tbody>

                          

                        </table>
                        
                      </div>
                   </div>
                </div>


            </div>
        </div>
    </div>

</div>