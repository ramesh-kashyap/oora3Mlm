    <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">User Management</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Approved Kyc</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Apporved Kyc</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                          <form action="{{ route('admin.approved-kyc') }}" method="GET">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="form-group mb-3">
                                                    <input type="text" style="height: 3rem;" Placeholder="Search Users"
                                                        name="search" class="form-control" value="{{ @$search }}">
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group mb-3">
                                                    <select name="limit" style="height: 3rem;" class="form-control">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group mb-3">
                                                    <input type="submit" style="padding: 0.6rem 2rem;" name="submit"
                                                        class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                                        value="Search" />
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group mb-3">
                                                    <a href="{{ route('admin.approved-kyc') }}" style="padding: 0.6rem 2rem;"
                                                        name="reset"
                                                        class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                                        value="Reset">Reset</a>
                                                </div>
                                            </div>
        
        
                                        </div>
                                    </form>
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>S NO.</th>
                                                <th>User Name</th>
                                                <th>User Id</th>
                                                <th>Kyc Date</th>
                                                 <th>KYC Details</th>
                                                <!--<th>Rank</th>-->
                                                <th>KYC Status</th>
                                             
                                                <!--<th>Status</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($active_user) || is_object($active_user)){ ?>
                    
                                            <?php $cnt = $active_user->perPage() * ($active_user->currentPage() - 1); ?>
                                            @foreach ($active_user as $row)
                                                <tr>
                                                    <td><?= $cnt += 1 ?></td>
                                                    <td>{{ $row->user->name }}</td>
                                                    <td>{{ $row->user->username }}</td>
                                                    <td>{{ $row->created_at }}</td>
                                                   <td>
                                                        <div class="small text-muted">
                                                            <div><strong>Aadhaar:</strong> {{ $row->aadhar_no ?? '—' }}</div>
                                                            <div><strong>PAN:</strong> {{ $row->pancard_no ?? '—' }}</div>
                                                            <div class="mt-1 d-flex flex-wrap gap-2">
                                                                @if($row->aadhar_front)
                                                                    <a href="{{ asset('public/'.$row->aadhar_front) }}" target="_blank" class="btn btn-sm btn-outline-secondary">Aadhaar Front</a>
                                                                @endif
                                                                @if($row->aadhar_back)
                                                                    <a href="{{ asset('public/'.$row->aadhar_back) }}" target="_blank" class="btn btn-sm btn-outline-secondary">Aadhaar Back</a>
                                                                @endif
                                                                @if($row->pancard_front)
                                                                    <a href="{{ asset('public/'.$row->pancard_front) }}" target="_blank" class="btn btn-sm btn-outline-secondary">PAN Front</a>
                                                                @endif
                                                                @if($row->pancard_back)
                                                                    <a href="{{ asset('public/'.$row->pancard_back) }}" target="_blank" class="btn btn-sm btn-outline-secondary">PAN Back</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                      <td>
                                                        <span class="badge 
                                                            @if($row->kyc_status === 'Approved') bg-success
                                                            @elseif($row->kyc_status === 'Rejected') bg-danger
                                                            @else bg-warning text-dark @endif">
                                                            {{ $row->kyc_status }}
                                                        </span>
                                                    </td>


                                                <!--    <td class="text-end">-->
                                                <!--    @if($row->kyc_status === 'Pending')-->
                                                <!--        <div class="d-inline-flex gap-2">-->
                                                <!--            <a href="{{ route('admin.kyc.status', ['user' => $row->id, 'status' => 'Approved']) }}"-->
                                                <!--               class="btn btn-success btn-sm"-->
                                                <!--               onclick="return confirm('Approve this KYC?');">-->
                                                <!--               Approve-->
                                                <!--            </a>-->
                                                
                                                <!--            <a href="{{ route('admin.kyc.status', ['user' => $row->id, 'status' => 'Rejected']) }}"-->
                                                <!--               class="btn btn-danger btn-sm"-->
                                                <!--               onclick="return confirm('Reject this KYC?');">-->
                                                <!--               Reject-->
                                                <!--            </a>-->
                                                <!--        </div>-->
                                                <!--    @else-->
                                                <!--        <span class="text-muted">—</span>-->
                                                <!--    @endif-->
                                                <!--</td>-->
                                                   
                                                </tr>
                                            @endforeach
                    
                                            <?php }?>
                                        </tbody>
                                       
                                    </table>
                                    
                                       
                                      <br>

                                    {{ $active_user->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                 
					
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
