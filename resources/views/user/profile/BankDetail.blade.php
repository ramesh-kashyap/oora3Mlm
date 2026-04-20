<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">

        <div class="card custom--card">
            <div class="card-header">
                <h5 class="card-title">Bank Details</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('user.bank-update') }}" method="POST">
                    @csrf

                    @if ($errors->any())
                    <div style="color: red; margin-bottom: 10px;">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    {{-- Success Notification --}}
                    @if(session('notify'))
                    <div style="color: green; margin-bottom: 10px;">
                        @foreach(session('notify') as $n)
                        <p>{{ $n[1] }}</p>
                        @endforeach
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form--label">Account Holder</label>
                                <input type="text" class="form-control form--control md-style"
                                    name="account_holder" placeholder="enter your Account Holder" value="{{ $bank_value?->account_holder }}"  @if($bank_value?->account_holder) readonly @endif
                                    required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form--label">Account Number</label>
                                <input type="number" class="form-control form--control md-style md-style" value="{{ $bank_value?->account_no }}"

                                    placeholder="enter your Account Number" name="account_number" required @if($bank_value?->account_no) readonly @endif>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form--label">Bank Name</label>
                                <input type="text" class="form-control form--control md-style md-style" value="{{ $bank_value?->bank_name }}"

                                    placeholder="enter your Bank name" name="bank_name" placeholder="Check time"
                                    required @if($bank_value?->bank_name) readonly @endif>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form--label">Branch Name</label>
                                <input type="text" class="form-control form--control md-style" value="{{ $bank_value?->branch_name }}"

                                    name="branch_name" placeholder="enter your Branch Name" required @if($bank_value?->branch_name) readonly @endif>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form--label">IFSC Code</label>
                                <input type="text" class="form-control form--control md-style" value="{{ $bank_value?->ifsc_code}}"

                                    name="ifsc_code" placeholder="enter your IFSC code " step="any" required @if($bank_value?->ifsc_code) readonly @endif>
                            </div>
                        </div>




                    </div>

                    <div class="form-group mt-4">
                        <button type="submit" class="btn me-2 btn-primary">Submit</button>
                    </div>
                </form>
                @include('partials.notify')

            </div>
        </div>
    </div>


</div>