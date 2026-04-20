<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Withdrawal </a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Pending Withdrawal</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pending Withdrawal</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('admin.pendingWithdrawal') }}" method="GET">
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
                                                         <option value="500">500</option>
                                                         <option value="100000">100000</option>
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
                                        <a href="{{ route('admin.pendingWithdrawal') }}" style="padding: 0.6rem 2rem;"
                                            name="reset"
                                            class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                            value="Reset">Reset</a>
                                    </div>
                                </div>


                            </div>
                        </form>

                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>S NO.</th>


                                        <th>Name</th>
                                        <th>User ID</th>
                                        <th>Request Amount</th>



                                        <th>Payment Mode.</th>
                                        <th>Transaction Date.</th>
                                        <th>Bank Name </th>

                                        <th>Account No</th>
                                        <th>Ifsc Code</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (is_array($withdraw_list) || is_object($withdraw_list)) { ?>

                                        <?php $cnt = $withdraw_list->perPage() * ($withdraw_list->currentPage() - 1); ?>
                                        @foreach ($withdraw_list as $value)
                                        <?php

                                        if ($value->walletType == 1) {
                                            $percent = 6;
                                        } else {
                                            $percent = 10;
                                        }
                                        ?>
                                        <tr>
                                            <td><?= $cnt += 1 ?></td>
                                            <td>{{ $value->user->name }}</td>
                                            <td>{{ $value->user_id_fk }}</td>

                                            <td>{{ $value->amount }} </td>


                                            <td> {{ $value->payment_mode }} </td>

                                            <td>{{ $value->created_at }}</td>


                                            @php
                                            $bank = \App\Models\Bank::where('user_id', $value->user_id)->first();
                                            @endphp

                                            <td>{{ $bank->bank_name?? 0 }}</td>
                                            <td>
                                                <span id="myInput{{ $cnt }}">
                                                    {{ $bank->account_no ?? 0 }}
                                                </span>
                                                &nbsp;&nbsp;&nbsp;
                                                <span>
                                                    <i class="fa fa-clone"
                                                        onclick="copyTextFromElement('myInput{{ $cnt }}')"
                                                        title="Copy Address" aria-hidden="true"></i>
                                                </span>
                                            </td>



                                            <td>{{ $bank->ifsc_code?? 0 }}</td>

                                            <!--<td>{{ $value->payment_mode }}</td>-->


                                            <td><a href="{{ route('admin.withdraw_request_done') }}?id={{ $value->id }}&withdraw_status=success"
                                                    class='btn btn-success'>Success</a> <a
                                                    href="{{ route('admin.withdraw_request_done') }}?id={{ $value->id }}&withdraw_status=blocked"
                                                    class='btn btn-danger'>Reject</a></td>

                                        </tr>
                                        @endforeach

                                    <?php } ?>
                                </tbody>

                            </table>

                            <br>


                            {{ $withdraw_list->withQueryString()->links() }}



                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

<script>
    $('#example').DataTable({
        'dom': 'Bfrtip',
        'paging': false, // ❌ Pagination Off
        'lengthChange': false, // ❌ "Show Entries" Dropdown Off
        'searching': true,
        'ordering': true,
        'info': true,
        'autoWidth': true,
        'buttons': ['copy', 'csv', 'excel', 'pdf', 'print']
    });
</script>



<script>
    function copyTextFromElement(elementId) {
        // span ka text uthao
        var text = document.getElementById(elementId).innerText;

        // clipboard me copy karo
        navigator.clipboard.writeText(text).then(function() {
            alert("Copied: " + text); // Success message
        }, function(err) {
            alert("Copy failed!");
        });
    }
</script>
<!--**********************************
            Content body end
        ***********************************-->