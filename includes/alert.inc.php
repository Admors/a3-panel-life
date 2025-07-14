<?php
function showAlert($type, $message) {
    $icons = [
        'success' => 'check-circle-fill',
        'danger'  => 'exclamation-triangle-fill',
        'warning' => 'exclamation-circle-fill',
        'info'    => 'info-circle-fill'
    ];

    $icon = isset($icons[$type]) ? $icons[$type] : 'info-circle-fill';

    echo '
    <div class="alert alert-' . htmlspecialchars($type) . ' d-flex align-items-center" role="alert">
        <i class="bi bi-' . $icon . ' me-2"></i>
        ' . htmlspecialchars($message) . '
    </div>';
}
?>
