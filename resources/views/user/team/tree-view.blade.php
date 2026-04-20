
  <style type="text/css">
    .tree-border::before {
      display: block;
      width: 50%;
      margin-left: 25%;
      margin-right: 25%;
      border-top: 2px solid #5883b7;
      border-radius: 100px;
      color: #2D2A03;
      content: "|";
    }

    .scrollbar-hidden {
      overflow: auto;
      scrollbar-width: none;
      -ms-overflow-style: none;
    }

    .scrollbar-hidden::-webkit-scrollbar {
      display: none;
    }

    .data-table td span:nth-child(3n - 1) {
      cursor: pointer !important;
      color: #fe7e10 !important;
      font-weight: 700 !important;
      padding: 6px 6px 4px 6px;

    }

    /*Om code start*/
    /* .data-table td span:nth-child(3n - 1){cursor:pointer !important; color:#e6b429 !important; font-weight:400 !important; padding:6px 6px 4px 6px;}  */
    .load-gif img {
      width: 120px;
    }

    .load-gif {
      width: 20px !important;
    }

    .load-gif img {
      width: 20px !important;
      float: left;
    }

    .system-cal-report {
      font-size: 12px;
      color: red;
    }

    #userDataModal #userName {
      text-transform: uppercase;
    }

    #userData table {
      width: 100%;
      border: 1px #ccc solid;
      background-color: #000;
    }

    #userData table td {
      border: 1px #ccc solid;
      padding: 8px;
      text-transform: uppercase;
      color: #fff;
      text-align: center;
    }

    #userData table td i {
      margin-right: 4px;
    }

    #userData table td span {
      float: center;
      font-weight: 100px;
      font-size: 12px;
    }


    .card {
      border: none;
      box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
      border-radius: 5px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      -ms-border-radius: 5px;
      -o-border-radius: 5px;
    }

    .card {
      position: relative;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-direction: column;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid rgba(0, 0, 0, .125);
      border-radius: .25rem;
    }

    .text-center {
      text-align: center !important;
    }

    .justify-content-center {
      -ms-flex-pack: center !important;
      justify-content: center !important;
    }

    .row {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px;
    }

    .container {
      border: 1px solid #000;
      padding: 15px;
    }

    .user {
      height: 70px;
      width: 70px;
      margin-left: auto;
      margin-right: auto;
      line-height: 120px;
      position: relative;
      border-radius: 50%;
      background-color: transparent;
      border: none;
      -webkit-appearance: initial !important;
    }

    .user img {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      top: -31px;
      object-fit: cover;
      position: relative;
      z-index: 99;
    }

    .line {
      width: 86%;
      margin-left: auto;
      margin-right: auto;
      height: 4px;
      display: inherit;
      border: 2px dotted #bbb;
      border-bottom: none;
      border-left: none;
      border-right: none;
      position: relative;
    }

    @media (max-width: 768px) {
      .line {
        /*width: 400px !important;*/
        margin-bottom: -11px;
        width:100%;
      }
    }

    .line::before,
    .line::after {
      position: absolute;
      /*content: "\f107";*/
      font-family: "Line Awesome Free";
      font-weight: 600;
      font-size: 24px;
      color: #bbb;
      bottom: 0;
      width: 30px;
      text-align: center;
      background: #fff;
      z-index: 1;
      line-height: 20px;
      height: 0px;
    }

    .line::before {
      left: -15px;
    }

    .line::after {
      right: -15px;
    }

    .w-8 .line::before,
    .w-8 .line::after {
      display: none;
    }

    .llll:last-child .line {
      border: none;
    }

    .w-1 {
      width: 100%;
    }

    .w-2 {
      width: 50%;
    }

    .w-4 {
      width: 25%;
    }

    .w-8 {
      width: 12.5%;
    }

    .user .user-name {
      line-height: 1.5;
      font-size: 16px;
      font-weight: 500;
      color: #ffffffff;
    }

    @media (max-width: 767px) {
      .user {
        line-height: 0;
        position: relative;
        z-index: 2;
      }

      .w-4 .line::before,
      .w-4 .line::after {
        display: none;
      }

      .user img {
        border-width: 3px;
      }

      .line {
        transform: translateY(-10px);
      }

      .w-1 .user {
        width: 80px;
        height: 80px;
      }

      .w-1 .user img {
        width: 70px;
        height: 70px;
      }

      .user::before {
        display: none;
      }

      .w-1 .line {
        height: 50px;
      }

      .w-2 .user {
        width: 70px;
        height: 70px;
      }

      .w-2 .user img {
        width: 70px;
        height: 70px;
      }

      .w-2 .line {
        height: 50px;
      }

      .w-4 .user {
        width: 60px;
        height: 60px;
      }

      .w-4 .user img {
        width: 60px;
        height: 60px;
      }

      .w-4 .line {
        height: 40px;
        margin-top: 17px;
        width: 60%;
        transform: translate(-8px, -20px);
        z-index: 0;
      }

      .w-8 {
        transform: translateY(-30px);
      }

      .w-8 .user {
        width: 50px;
        height: 50px;
      }

      .w-8 .user img {
        width: 50px;
        height: 50px;
      }

      .w-8 .line {
        height: 0;
      }

      @media (max-width: 767px) {
        .user .user-name {
          display: block;
          font-size: 11px;
        }
      }
    }

    @media (max-width: 575px) {
      .user {
        line-height: 0;
        position: relative;
        z-index: 2;
      }

      .line {
        transform: translateY(-10px);
      }

      .w-1 .user {
        width: 70px;
        height: 70px;
      }

      .w-1 .user img {
        width: 70px;
        height: 70px;
      }

      .w-1 .line {
        height: 50px;
      }

      .w-2 .user {
        width: 60px;
        height: 60px;
      }

      .w-2 .user img {
        width: 60px;
        height: 60px;
      }

      .w-2 .line {
        height: 50px;
      }

      .w-4 .user {
        width: 55px;
        height: 55px;
      }

      .w-4 .user img {
        width: 55px;
        height: 55px;
      }

      .w-4 .line {
        height: 40px;
        margin-top: 18px;
        width: 70%;
        transform: translate(-1px, -20px);
        z-index: 0;
      }

      .w-8 {
        transform: translateY(-30px);
      }

      .w-8 .user {
        width: 45px;
        height: 45px;
      }

      .w-8 .user img {
        width: 45px;
        height: 45px;
      }

      .w-8 .line {
        height: 0;
      }

      .user img {
        border-width: 2px;
      }
    }

    @media (max-width: 400px) {
      .user {
        line-height: 0;
        position: relative;
        z-index: 2;
      }

      .line {
        transform: translateY(-10px);
      }

      .w-1 .user {
        width: 70px;
        height: 70px;
      }

      .w-1 .user img {
        width: 70px;
        height: 70px;
      }

      .w-1 .line {
        height: 0px;
      }

      .w-2 .user {
        width: 60px;
        height: 60px;
      }

      .w-2 .user img {
        width: 60px;
        height: 60px;
      }

      .w-2 .line {
        height: 50px;
      }

      .w-4 .user {
        width: 50px;
        height: 50px;
      }

      .w-4 .user img {
        width: 50px;
        height: 50px;
      }

      .w-4 .line {
        height: 50px;
        margin-top: 17px;
        width: 49%;
        transform: translate(-2px, -19px);
        z-index: 0;
      }

      .w-8 {
        transform: translateY(-30px);
      }

      .w-8 .user {
        width: 35px;
        height: 35px;
      }

      .w-8 .user img {
        width: 35px;
        height: 35px;
      }

      .w-8 .line {
        height: 0;
      }

      .card {
        padding: 30px;
        margin: 0 -30px;
      }

    }

    .user::before {
      /* position: absolute; */
      content: '';
      top: 5px;
      /* left: -5px; */
      width: 70px;
      height: 70px;
      border-radius: 50%;
      /* background-color: #ffffffff; */
      z-index: 2;
    }

    .paid-user {
      border: 5px solid  green;
    }
    .paid-users {
      border: 5px solid #cc502e;
    }

    .free-user {
      border: 5px solid #101536;
    }

    .no-user {
      border: 5px solid #ddd;
    }

    .user-details-modal-area .modal-body {
      padding: 0;
    }

    .user-details-header {
      /*background-color: rgba(6, 243, 183, 0.22);*/
      display: flex;
      align-items: center;
      padding: 25px 30px;
    }

    .Paid {
      background-color: rgba(6, 243, 183, 0.22);
    }

    .Free {
      background-color: rgba(241, 196, 15, 0.22);
    }




    .user-details-header .thumb {
      width: 80px;
      height: 80px;
      overflow: hidden;
      border-radius: 50%;
    }

    .user-details-header .content {
      width: calc(100% - 80px);
      padding-left: 30px;
    }

    .user-details-header .content .user-name {
      display: block;
      font-size: 22px;
      font-weight: 500;
      text-transform: capitalize;

    }

    .user-details-header .content .user-status {
      font-weight: 500;
    }

    .user-details-body {
      padding: 20px 30px;
    }

    .user-details-body h4 {
      margin-bottom: 20px;
    }

    .user-details-body p {
      margin-bottom: 0;
      color: #777777;
    }

    .user-details-body p+p {
      margin-top: 10px;
    }

    img {
      max-width: 100%;
    }



    @media (max-width: 768px) {
      .responsive-line {
        margin: 0 auto 30px !important;

      }

      .user {
        margin: 2px;
      }
    }

    .user-info {
      text-align: center;
      line-height: 1.2;
      /* tight spacing */
    }

    .user-info .name {
      font-size: 12px;
      font-weight: 500;
      display: block;
      margin-bottom: 2px;
    }

    .user-info .username {
      font-size: 15px;
      color: #fe7e10;
      font-weight: 600;
      display: block;
    }

    /* Mobile responsive (screen <= 576px) */
    @media (max-width: 576px) {
      .user-info .name {
        font-size: 10px;
      }

      .user-info .username {
        font-size: 12px;
      }
    }
    
      .popup-wrapper {
    position: relative;
    display: inline-block;
  }

  .popup-content {
    display: none;
    position: absolute;
    top: -55px;
    left: 50%;
    transform: translateX(-50%);
    background-color: #2b2b2b;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    z-index: 999;
    width: max-content;
    min-width: 150px;
    text-align: center;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
  }

  .popup-wrapper:hover .popup-content {
    display: block;
  }
  </style>
                  <style>
                  /* Line styling */
                  .responsive-line {
                    width: 2px;
                    height: 35px;
                    background: #cdcdcd;
                    margin: 0 auto 8px;
                    border: none;
                  }

                  /* User container */
                  .user {
                    text-align: center;
                    display: inline-block;

                  }

                  /* User image */
                  .user img {
                    width: 70px;
                    height: auto;
                    object-fit: contain;
                  }

                  /* User name */
                  .user-name {
                    font-size: 10px;
                    font-weight: bold;
                    margin: 2px 0;
                    text-align: center;
                  }

                  /* User username */
                  .user-username {
                    font-size: 12px;
                    font-weight: bold;
                    color: #fe7e10;
                    margin: 0;
                    text-align: center;
                  }

                  /* Content wrapper */
                  .content {
                    margin-top: 4px;
                    /* desktop pe thoda gap */
                    text-align: center;
                  }

                  /* Mobile view */
                  @media (max-width: 576px) {
                    .content {
                      margin-top: 2px;
                      /* mobile pe gap kam */
                    }

                    .user {
                      text-align: center;
                      display: inline-block;
                      margin-bottom: -22px;

                    }

                    .content p {
                      margin: -9;
                      /* p tags ka default gap hatana */
                      line-height: 1.1;
                      /* text ko compact rakhna */
                    }

                    .user-name {
                      font-size: 9px;
                    }

                    .user-username {
                      font-size: 11px;
                    }
                  }

                  /* Mobile view */
                  @media (max-width: 576px) {
                    .responsive-line {
                      height: 20px;
                    }

                    .user img {
                      width: 60px;
                      height: 60px;
                    }



                  }
                </style>
<div class="content-body" style="min-height: 732px;">
  <div class="container-fluid">
    

       <h3 class="text-center"><strong>Distributor Record</strong></h3>

    <div class="card" style="background:transparent; ">


                          <div class="table-responsive scrollbar-hidden" style="height: 500px;">
                    
                    <?php
                    $status = @$mydata->active_status;
                    
                    if ($status == "Active" || $status == "Block") {
                        $color = "green";
                        $imgClass = "paid-user";
                    } elseif ($status == "Pending" || $status == "Inactive") {
                        $color = "red";
                        $imgClass = "paid-users";
                    } else {
                        $color = "empty";
                        $imgClass = "paid-users"; // default class 
                    }
                    ?>
                            <div class="row text-center justify-content-center llll">
                              <div class="w-1">
                                <div class="user showDetails" type="button" style="display: inline-block; margin-top: 50px; text-align: center;">
                    <a class="popup-wrapper">
              <img src="{{ asset('users/images/avatar/') }}/{{ $color }}.png" alt="*" class="{{ $imgClass }}">

                      <h5 class="popup-content">
             
                          <strong>Team A Business:</strong> {{currency()}} {{ number_format($mydata->teamA,2) }}<br>
                          <strong>Team B Business:</strong> {{currency()}} {{ number_format($mydata->teamB,2) }}<br>
                          <strong>Other Leg Business:</strong> {{currency()}} {{ number_format($mydata->other_team,2) }}
                        <!--<strong>Name: {{ $mydata->name }}</strong><br>-->


                      </h5>
                      </a>
            </div>
            <p class="" style=" font-weight: bold; font-size:12px;">
              {{ @$mydata->name ? strtoupper(@$mydata->name) : "" }}
            </p>
            <p class="" style=" color: #fe7e10; font-weight: bold;font-size:16px;">
              {{ @$mydata->username ? strtoupper(@$mydata->username) : "" }}
            </p>


            <!-- Responsive Horizontal Line -->
          </div>
        </div>

        <div class="line" style="margin-top: 10px;"></div>

        <style>

        </style>
        <table id="zero-conf" class="data-table" style="width:100%">
          <thead>

            <?php if (is_array($direct_team) || is_object($direct_team)) { ?>


              @foreach($direct_team as $value)


              <td colspan="2" style="" class="text-center">
                <!-- <div class="line" style="margin-top: 10px;"></div> -->


              </td>
              @endforeach

            <?php } ?>
          </thead>

          <tbody>




            <!-- Direct Team Row -->
            <tr class="text-center">

              @foreach($direct_team as $value)

            <?php
$status = @$value->active_status;

if ($status == "Active" || $status == "Block") {
    $color = "green";
    $imgClass = "paid-user";
} elseif ($status == "Pending" || $status == "Inactive") {
    $color = "red";
    $imgClass = "paid-users";
} else {
    $color = "empty";
    $imgClass = "paid-users"; // default class
}
?>


              <td>



                <!-- Line -->
                <div class="responsive-line"></div>

                <!-- User image -->
                
                <div class="user showDetails " type="button">
                    <h5 class="popup-wrapper">
                  <a href="{{ route('user.tree-view', ['id' => Crypt::encrypt($value->username)]) }}"class="" >
                    <img src="{{ asset('users/images/avatar/') }}/{{ $color }}.png" alt="*" class="{{ $imgClass }}">
                    
                    
                         <!-- Custom Hover Popup -->
                        <div class="popup-content">
                          <strong>Team A Business:</strong> {{currency()}} {{ number_format($value->teamA,2) }}<br>
                          <strong>Team B Business:</strong> {{currency()}} {{ number_format($value->teamB,2) }}<br>
                          <strong>Other Leg Business:</strong> {{currency()}} {{ number_format($value->other_team,2) }}
                        </div>
                  </a>
                </div>
                </div>

                <!-- User details -->
                
                <div class="content">
                  <p class="user-name">{{ @$value->name ? strtoupper(@$value->name) : "" }}</p>
                  <p class="user-username">{{ @$value->username ? strtoupper(@$value->username) : "" }}</p>

                </div>

              </td>
              @endforeach

            </tr>

          </tbody>
        </table>



      </div>
    </div>

</div>
</div>

<div id="userDataRes">
  <!-- Modal -->
  <div class="modal fade" id="userDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="userName"></h5>
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="userData"><span class="load-gif"><img style="width: 100%;"
                src="{{ asset('assets/images/load.gif') }}"> System calculating reports</span>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary close_model" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>





