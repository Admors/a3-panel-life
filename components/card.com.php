<?php
function generateCard($borderColor, $iconColor, $iconClass, $title, $stat) {
    echo '
    <div class="col-md-3">
        <div class="card border-0-end border-'. $iconColor .' shadow" style="border-left: 5px solid ' . $borderColor . ';">
            <div class="card-body d-flex align-items-center">
                <!-- Icone -->
                <i class="bi ' . $iconClass . ' fs-1" style="color: ' . $iconColor . ';"></i>
                <div class="ms-3">
                    <!-- Titre -->
                    <h5 class="card-title text-primary-emphasis">' . $title . '</h5>
                    <!-- Stat chiffre -->
                    <p class="card-text text-end text-body-tertiary">' . $stat . '</p>
                </div>
            </div>
        </div>
    </div>';
}
?>
