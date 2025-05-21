<!-- <php 

// if (isset($_SESSION['status'])) {
// ?>
 <div class="alert alert-warning alert-dismissible fade show" role="alert"> -->
<!-- <strong>Hey! </strong> <php echo $_SESSION['status'] ?> -->
<!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"> -->
<!-- <span aria-hidden="true">&times;</span> 
 </button> 
 </div> 
 <php 
 unset($_SESSION['status']);
 }

 ?> -->


<span>
    <?php

    if (isset($_SESSION['status'])) { ?>
        <div class="toast-container position-absolute top-0 start-50 translate-middle-x p-3" style="z-index: 2100;">
            <div class="toast show align-items-center text-white bg-success border-0 shadow" role="alert"
                aria-live="assertive" aria-atomic="true" data-bs-autohide="true" data-bs-delay="1000">
                <div class="d-flex">
                    <div class="toast-body fw-semibold">
                        <?= $_SESSION['status']; ?>
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php
        unset($_SESSION['status']);
    }
    ?>


    <!-- echo '<div class="toast-container position-fixed top-0  p-3"
                                        style="z-index: 1055;">
                                         <div class="toast align-items-center text-bg-success border-0" role="alert"
                                            aria-live="assertive" aria-atomic="true" data-bs-autohide="true"
                                            data-bs-delay="3000">
                                             <div class="d-flex">
                                                 <div class="toast-body">
                                                    ' . $_SESSION['status'] . '
                                                     </div>
                                                 <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                                    data-bs-dismiss="toast" aria-label="Close"></button>
                                                 </div>
                                             </div>
                                         </div>'; -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var toastElList = [].slice.call(document.querySelectorAll('.toast'));
            toastElList.map(function (toastEl) {
                var toast = new bootstrap.Toast(toastEl);
                toast.show();
            });
        });
    </script>
    <!-- if (isset($_SESSION['status'])) {
                                        echo "<span>" . $_SESSION['status'] . "</span>";
                                        unset($_SESSION['status']);
                                    } -->

</span>