<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">

        <div class="row gy-4">

            <div class="col-lg-12 col-xxl-12">
                <div class="card custom--card profile-card h-100">
                    <div class="card-header">
                        <h5 class="card-title">Profile Update</h5>
                    </div>
                    <div class="card-body">
                        <form class="register" method="post" action="{{route('user.update-profile')}}" enctype="multipart/form-data">
                            @csrf




                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">

                                     
                                      
                                    </div>
                                </div>


                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name" class="form--label fs-14">First
                                            Name</label>
                                        <input type="text" id="name" name="name" placeholder="enter your first name"
                                            value="{{$profile_data->name}}" class="form-control form--control md-style"  @if($profile_data->name) readonly @endif />
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="lastname" class="form--label fs-14">
                                            LastName</label>
                                        <input type="lastname" id="email" name="lastname" placeholder="enter your lastname"
                                            value="{{$profile_data->lastname}}" class="form-control form--control md-style"  @if($profile_data->lastname) readonly @endif />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form--label fs-14">Address</label>
                                        <input type="text" placeholder="enter your address"
                                            class="form-control form--control md-style"
                                            name="address" value="{{$profile_data->address}}"  @if($profile_data->address) readonly @endif>
                                    </div>
                                </div>

<div class="col-sm-6">
    <div class="form-group">
        <label class="form--label fs-14">Date of Birth</label>
        <input type="date" 
            class="form-control form--control md-style"
            name="dob" 
            value="{{ $profile_data->dob }}"  
             @if($profile_data->dob) @endif>
    </div>
</div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form--label fs-14">State</label>
                                        <input type="text" placeholder="enter your state"
                                            class="form-control form--control  md-style"
                                            name="state" value="{{$profile_data->state}}"  @if($profile_data->state) readonly @endif>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="city" class="form--label fs-14">Zip Code</label>
                                        <input type="text" placeholder="enter your zip code"
                                            class="form-control form--control md-style" name="zipCode"
                                            value="{{$profile_data->zipCode}}" @if($profile_data->zipCode) readonly @endif>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="state" class="form--label fs-14">City</label>
                                        <input type="text" placeholder="enter your city"
                                            class="form-control form--control md-style" name="city"
                                            value="{{$profile_data->city}}" @if($profile_data->city) readonly @endif>
                                    </div>
                                </div>
                                <!--<div class="col-sm-6">-->
                                <!--    <div class="form-group">-->
                                <!--        <label for="state" class="form--label fs-14">Wallet Address</label>-->
                                <!--        <input type="text" placeholder="enter your Wallet Address"-->
                                <!--            class="form-control form--control md-style" name="usdtBep20	" required-->
                                <!--            value="{{$profile_data->usdtBep20}}">-->
                                <!--    </div>-->
                                <!--</div>-->


                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn me-2 btn-primary">Update Profile</button>
                                </div>
                            </div>
                        </form>
                        @include('partials.notify')

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    $('#profile-image').on('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                $('#preview-image').attr('src', e.target.result);
                $('#upload-thumb').attr('src', e.target.result);
            };

            reader.readAsDataURL(file);
        }
    });
</script>