<?php
// session_start();
// Example usage:
// $_SESSION['status'] = ['type' => 'success', 'message' => 'Order placed successfully!'];

if (isset($_SESSION['status'])) {
    $type = $_SESSION['status']['type'] ?? 'info';
    $message = $_SESSION['status']['message'] ?? '';
    // Bootstrap color classes
    $toastTypes = [
        'success' => 'bg-success text-white',
        'error'   => 'bg-danger text-white',
        'info'    => 'bg-info text-dark',
        'warning' => 'bg-warning text-dark'
    ];
    $toastClass = $toastTypes[$type] ?? $toastTypes['info'];
    ?>
    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 2100;">
        <div class="toast align-items-center <?= $toastClass ?> border-0 shadow show" role="alert"
            aria-live="assertive" aria-atomic="true" data-bs-autohide="true" data-bs-delay="2500">
            <div class="d-flex">
                <div class="toast-body fw-semibold">
                    <?= htmlspecialchars($message) ?>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
    <!-- Make sure Bootstrap JS is loaded before this script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var toastElList = [].slice.call(document.querySelectorAll('.toast'));
            toastElList.map(function (toastEl) {
                var toast = new bootstrap.Toast(toastEl);
                toast.show();
            });
        });
    </script>
    <?php
    unset($_SESSION['status']);
}
?>