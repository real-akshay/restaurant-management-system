<span>

    <?php
    if (isset($_SESSION['status'])) {
        ?>
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


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var toastElList = [].slice.call(document.querySelectorAll('.toast'));
            toastElList.map(function (toastEl) {
                var toast = new bootstrap.Toast(toastEl);
                toast.show();
            });
        });
    </script>
</span>