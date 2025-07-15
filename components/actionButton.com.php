<?php
function generateActionButton($btnClass, $icon, $label, $modalId) {
    echo '
    <div class="col-md-4">
        <button class="btn '.$btnClass.' w-100" data-bs-toggle="modal" data-bs-target="#'.$modalId.'">
            <i class="bi '.$icon.' fs-3"></i> '.$label.'
        </button>
    </div>
    ';
}
?>
