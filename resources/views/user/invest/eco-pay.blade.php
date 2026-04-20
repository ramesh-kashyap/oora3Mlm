  <style>
    .card-title1 {
      padding: 6px;
      /*border:1px solid green;*/
      width: 220px;
      color: green;
      border-radius: 10px;
    }

    .card-title {
      padding-bottom: 20px;

    }
  </style>


  <div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">


      <div class="row">
        <div class="col-lg-12">
          <div class="card">

            <div class="card custom--card">
              <div class="card-header">
                <h4 class="card-title">Transfer to Ecopay</h4>
                <p class="card-title1"> Balance : {{ currency() }}{{ number_format(Auth::user()->WithdrawBalance(), 2) }} </p>

              </div>
              <div class="card-body">
                <form id="depositForm" method="post"
                  action="{{ route('user.confirmEcopay') }}" id="myForm">
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

                    <div class="form-group">
                      <label class="form--label"> Amount</label>
                      <input type="number" class="form-control form--control md-style"
                        name="amount" placeholder="Enter your Amount" required id="">
                      <p id="" class="text-danger" style="font-size:13px; margin-top: 5px;"></p>
                    </div>


                    <div class="form-group">
                      <label class="form--label">Transaction Password</label>
                      <input type="text" class="form-control form--control md-style"
                        name="transaction_password" placeholder="Enter your transaction password" required>

                    </div>

                  </div>


                  <div class="form-group">
                    <button type="submit" id=""  class="btn me-2 btn-primary mt-2">Transfer Now</button>
                  </div>
                </form>

@include('partials.notify')

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>







  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




