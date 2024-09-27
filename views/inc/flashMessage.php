<?php
// dd($_SESSION[APP]->flashMessage->message);
if (isset($_SESSION[APP]->flashMessage)): ?>

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            var flashMessageType = "<?php echo $_SESSION[APP]->flashMessage->type; ?>";
            var flashMessageText = "<?php echo $_SESSION[APP]->flashMessage->message; ?>";

            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "timeOut": "9000", // Stays until manually closed
                "extendedTimeOut": "0", // No timeout after hover
            };

            if (flashMessageType === 'success') {
                toastr.success(flashMessageText);
            } else if (flashMessageType === 'error') {
                toastr.error(flashMessageText);
            } else if (flashMessageType === 'info') {
                toastr.info(flashMessageText);
            } else if (flashMessageType === 'warning') {
                toastr.warning(flashMessageText);
            }
        });
    </script>
<?php unset($_SESSION[APP]->flashMessage);
endif; ?>