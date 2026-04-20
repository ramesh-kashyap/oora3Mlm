<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">

        <div class="card custom--card">
            <div class="card-header">
                <h5 class="card-title">Add Kyc</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('kyc.update') }}"  enctype="multipart/form-data" method="POST">
                    @csrf

                  <div class="row">
                        <!-- Aadhaar Number -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form--label">Aadhaar Card Number</label>
                                <input type="text" 
                                       class="form-control form--control md-style" 
                                       name="aadhar_no" 
                                       value="{{ $kyc_value?->aadhar_no }}" 
                                       placeholder="Enter your Aadhaar Number" 
                                       required>
                            </div>
                        </div>
                    
                        <!-- Aadhaar Front -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form--label">Aadhaar Front Image</label>
                                <input type="file" 
                                       class="form-control form--control md-style" 
                                       name="aadhar_front" 
                                       accept="image/*" 
                                       required>
                                @if(!empty($kyc_value?->aadhar_front))
                                    <img src="{{ asset('public/'.$kyc_value->aadhar_front) }}" 
                                         alt="Aadhaar Front" 
                                         class="mt-2 rounded" 
                                         width="120">
                                @endif
                            </div>
                        </div>
                    
                        <!-- Aadhaar Back -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form--label">Aadhaar Back Image</label>
                                <input type="file" 
                                       class="form-control form--control md-style" 
                                       name="aadhar_back" 
                                       accept="image/*" 
                                       required>
                                @if(!empty($kyc_value?->aadhar_back))
                                    <img src="{{ asset('public/'.$kyc_value->aadhar_back) }}" 
                                         alt="Aadhaar Back" 
                                         class="mt-2 rounded" 
                                         width="120">
                                @endif
                            </div>
                        </div>
                    
                        <!-- PAN Number -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form--label">PAN Card Number</label>
                                <input type="text" 
                                       class="form-control form--control md-style" 
                                       name="pancard_no" 
                                       value="{{ $kyc_value?->pancard_no }}" 
                                       placeholder="Enter your PAN Number" 
                                       required>
                            </div>
                        </div>
                    
                        <!-- PAN Front -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form--label">PAN Card Front Image</label>
                                <input type="file" 
                                       class="form-control form--control md-style" 
                                       name="pancard_front" 
                                       accept="image/*" 
                                       required>
                                @if(!empty($kyc_value?->pancard_front))
                                    <img src="{{ asset('public/'.$kyc_value->pancard_front) }}"  
                                         alt="PAN Front" 
                                         class="mt-2 rounded" 
                                         width="120">
                                @endif
                            </div>
                        </div>
                    
                        <!-- PAN Back -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form--label">PAN Card Back Image</label>
                                <input type="file" 
                                       class="form-control form--control md-style" 
                                       name="pancard_back" 
                                       accept="image/*" 
                                       required>
                                @if(!empty($kyc_value?->pancard_back))
                                    <img src="{{ asset('public/'.$kyc_value->pancard_back) }}"  
                                         alt="PAN Back" 
                                         class="mt-2 rounded" 
                                         width="120">
                                @endif
                            </div>
                        </div>
                    </div>

<br>
                  <div class="form-group mt-4">
                        @if(empty($kyc_value) || $kyc_value->kyc_status === 'Rejected')
                            <!-- Show Submit button if no KYC yet or Rejected -->
                            <button type="submit" class="btn me-2 btn-primary">Submit</button>
                        @else
                            <!-- Show KYC status if exists and not rejected -->
                            <span class="badge 
                                @if($kyc_value->kyc_status === 'Pending') bg-warning text-dark
                                @elseif($kyc_value->kyc_status === 'Approved') bg-success
                                @endif
                            ">
                                KYC Status: {{ $kyc_value->kyc_status === 'Pending' ? 'Under Review' : $kyc_value->kyc_status }}
                            </span>
                        @endif
                    </div>
                </form>
                @include('partials.notify')

            </div>
        </div>
    </div>


</div>