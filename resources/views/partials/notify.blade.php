<!-- iziToast (optional, you can remove if not needed) -->
<link href="{{asset('')}}users/iziToast.min.css" rel="stylesheet">
<script src="{{asset('')}}users/iziToast.min.js"></script>


<script>
"use strict";

/* GLOBAL FUNCTION */
function notify(status, message, type = 'modal') {

    if (type === 'modal') {

        if (status === 'success') {

            let el = document.querySelector('.modalSuccessText');
            if (el) el.innerHTML = message;

            let modalEl = document.getElementById('modalSuccess');
            if (modalEl) {
                new bootstrap.Modal(modalEl).show();
            }

        } else {

            let el = document.querySelector('.modalErrorText');
            if (el) el.innerHTML = message;

            let modalEl = document.getElementById('modalError');
            if (modalEl) {
                new bootstrap.Modal(modalEl).show();
            }
        }

    } else {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
}
</script>

<!-- Laravel Session Notify -->
@if(session()->has('notify'))
<script>
document.addEventListener("DOMContentLoaded", function () {
    @foreach(session('notify') as $msg)
        notify("{{ $msg[0] }}", "{{ __($msg[1]) }}", "modal");
    @endforeach
});
</script>
@endif


<!-- Laravel Validation Errors -->
@if ($errors->any())
<script>
document.addEventListener("DOMContentLoaded", function () {
    @foreach($errors->all() as $error)
        notify('error', "{{ __($error) }}", "modal");
    @endforeach
});
</script>
@endif


<!-- ================= ERROR MODAL ================= -->
<div class="modal custom-modal fade modal--info modal--info--error" id="modalError" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content-block">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="modal-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="modal-body-content">

                        <div class="modal-info-icon-block">
                            <div class="modal-info-icon modal-info-icon--error"></div>
                        </div>

                        <div class="modal-title-block">
                            <div class="modal-title h2">Something is wrong...</div>
                        </div>

                        <div class="modal-descr-block">
                            <div class="modal-descr modalErrorText"></div>
                        </div>

                        <div class="modal-continue-button-block">
                            <button type="button" class="light-black-btn iconed-btn modal-continue-button" data-bs-dismiss="modal">
                                <div class="iconed-btn__text">Continue</div>
                                <div class="iconed-btn__icon"></div>
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<!-- ================= SUCCESS MODAL ================= -->
<div class="modal custom-modal fade modal--info modal--info--success" id="modalSuccess" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content-block">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="modal-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="modal-body-content">

                        <div class="modal-info-icon-block">
                            <div class="modal-info-icon modal-info-icon--success"></div>
                        </div>

                        <div class="modal-title-block">
                            <div class="modal-title h2">Great!</div>
                        </div>

                        <div class="modal-descr-block">
                            <div class="modal-descr modalSuccessText"></div>
                        </div>

                        <div class="modal-continue-button-block">
                            <button type="button" class="green-gradient-btn iconed-btn modal-continue-button" data-bs-dismiss="modal">
                                <div class="iconed-btn__text">Continue</div>
                                <div class="iconed-btn__icon"></div>
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>