   <!--**********************************
            Content body start
        ***********************************-->
   <div class="content-body">
       <div class="container-fluid">
           <div class="row page-titles">
               <ol class="breadcrumb">
                   <li class="breadcrumb-item active"><a href="javascript:void(0)">User Management</a></li>
                   <li class="breadcrumb-item"><a href="javascript:void(0)">User Profile View</a></li>
               </ol>
           </div>
           <!-- row -->
           <div class="row">


               <div class="col-xl-6 col-lg-12">
                   <div class="card">
                       <div class="card-header">
                           <h4 class="card-title">User Profile View</h4>
                       </div>
                       <div class="card-body">
                           <div class="basic-form">
                               <form action="{{ route('admin.update-user-profile') }}" method="POST">
                                {{ csrf_field() }}
                                   <div class="row">
                                       <div class="mb-3 col-md-12">
                                           <label class="form-label">Sponsor ID</label>
                                            <input class="form-control check_sponsor_exist" data-response="sponsor_res" type="text" name="sponsor"
                                               value="{{ $profile->sponsor_detail ? $profile->sponsor_detail->username : '0' }}"
                                               >
                                               <span id="sponsor_res"></span>
                                       </div>

                                       <input  type="hidden" name="id"
                                       value="{{ $profile ? $profile->id : '0' }}"
                                       >
                                       <div class="mb-3 col-md-6">
                                           <label class="form-label">UserID</label>
                                           <input class="form-control" type="text" name="memberID"
                                               value="{{ $profile ? $profile->username : '' }}" readonly>
                                       </div>
                                       <div class="mb-3 col-md-6">
                                           <label class="form-label">Full Name</label>
                                           <input class="form-control" type="text" id="firstName" name="name"
                                               value="{{ $profile ? $profile->name : '0' }}" autofocus />
                                       </div>
                                       <div class="mb-3 col-md-6">
                                           <label class="form-label">Email</label>
                                           <input class="form-control" type="email" name="email"
                                               value="{{ $profile ? $profile->email : '' }}" placeholder="Email ID" />
                                       </div>

                                       <div class="mb-3 col-md-6">
                                        <label class="form-label">Mobile No</label>
                                        <input type="text" value="{{($profile)?$profile->phone:''}}" id="phoneNumber" name="phone" class="form-control"
                                            placeholder="202 555 0111" />
                                       </div>
                                      <div class="mb-3 col-md-6">
                                        <label class="form-label">USDT.BEP20</label>
                                        <input type="text" value="{{($profile)?$profile->usdtBep20:''}}" id="phoneNumber" name="trx_addres" class="form-control"
                                            placeholder="USDT.BEP20" />
                                       </div>  
                                       
                                       
                                       
                                      <div class="mb-3 col-md-6">
                                        <label class="form-label">Password</label>
                                        <input type="text" value="" id="phoneNumber" name="password" class="form-control"
                                            placeholder="Password (Optional)" />
                                       </div>
                                       
                                       
                                             <div class="col-md-6">
                                            <label class="form-label">Account Holder</label>
                                            <input type="text" name="account_holder" id="account_holder"
                                                   value="{{ old('account_holder', $bank->account_holder ?? '') }}"
                                                   class="form-control @error('account_holder') is-invalid @enderror"
                                                   placeholder="Account holder name">
                                            @error('account_holder') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                          </div>
                                        
                                          <div class="col-md-6">
                                            <label class="form-label">Bank Name</label>
                                            <input type="text" name="bank_name" id="bank_name"
                                                   value="{{ old('bank_name', $bank->bank_name ?? '') }}"
                                                   class="form-control @error('bank_name') is-invalid @enderror"
                                                   placeholder="E.g. HDFC, SBI, PNB">
                                            @error('bank_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                          </div>
                                        
                                          <div class="col-md-6">
                                            <label class="form-label">Branch Name</label>
                                            <input type="text" name="branch_name" id="branch_name"
                                                   value="{{ old('branch_name', $bank->branch_name ?? '') }}"
                                                   class="form-control @error('branch_name') is-invalid @enderror"
                                                   placeholder="Branch name">
                                            @error('branch_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                          </div>
                                        
                                          <div class="col-md-6">
                                            <label class="form-label">Account Number</label>
                                            <input type="text" name="account_no" id="account_no"
                                                   value="{{ old('account_no', $bank->account_no ?? '') }}"
                                                   class="form-control @error('account_no') is-invalid @enderror"
                                                   placeholder="Account number">
                                            @error('account_no') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                          </div>
                                        
                                          <div class="col-md-6">
                                            <label class="form-label">IFSC Code</label>
                                            <input type="text" name="ifsc_code" id="ifsc_code"
                                                   value="{{ old('ifsc_code', $bank->ifsc_code ?? '') }}"
                                                   class="form-control @error('ifsc_code') is-invalid @enderror"
                                                   placeholder="e.g. HDFC0001234">
                                            @error('ifsc_code') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                          </div>


                                   </div>

                                   <div class="mb-3">
                                       <div class="form-check">
                                           <input class="form-check-input" type="checkbox">
                                           <label class="form-check-label">
                                               Check me out
                                           </label>
                                       </div>
                                   </div>
                                   <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                               </form>
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


    <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
    <script>

        $('.check_sponsor_exist').keyup(function(e) {
            var ths = $(this);
            var res_area = $(ths).attr('data-response');
            var sponsor = $(this).val();
            // alert(sponsor); 
            $.ajax({
                type: "POST"
                , url: "{{ route('getUserName') }}"
                , data: {
                    "user_id": sponsor
                    , "_token": "{{ csrf_token() }}"
                , }
                , success: function(response) {
                    // alert(response);      
                    if (response != 1) {
                        // alert("hh");
                        $(".submit-btn").prop("disabled", false);
                        $('#' + res_area).html(response).css('color', '#000').css('font-weight', '800')
                            .css('margin-buttom', '10px');
                    } else {
                        // alert("hi");
                        $(".submit-btn").prop("disabled", true);
                        $('#' + res_area).html("User ID Not exists!").css('color', 'red').css(
                            'margin-buttom', '10px');
                    }
                }
            });
        });

    </script>
    