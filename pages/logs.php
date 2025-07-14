<main class="container-fluid flex-grow-1 my-4">
    <div class="row">

        <?php require_once 'includes/aside.inc.php'; ?>

<section class="col-md-9 col-lg-10">
    <div class="d-flex justify-content-between flex-wrap align-items-center mb-3">
        <h2 class="fw-semibold"><i class="bi bi-journal-text text-primary"></i> Log Menu</h2>
    </div>

    <div class="table-responsive shadow-sm rounded">
        <table class="table table-hover align-middle">
            <thead class="table-light">
            <tr>
                <th>Date/Time</th>
                <th>Admin Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <!-- Exemple de log (peut être dynamique via PHP ou une base de données) -->
            <tr>
                <td>2025-07-13 06:24:40</td>
                <td>AdminPanel</td>
                <td>Admin AdminPanel has stopped the server.</td>
            </tr>
            <tr>
                <td>2025-07-13 06:19:33</td>
                <td>AdminPanel</td>
                <td>Admin AdminPanel has stopped the server.</td>
            </tr>
            <!-- Ajouter d'autres lignes de logs ici selon la source (base de données, fichier log, etc.) -->
            </tbody>
        </table>
    </div>

    <!-- Pagination si nécessaire -->
    <nav aria-label="Page navigation" class="mt-3">
        <ul class="pagination pagination-sm justify-content-center">
            <li class="page-item disabled"><a class="page-link">&laquo;</a></li>
            <li class="page-item active"><a class="page-link">1</a></li>
            <li class="page-item"><a class="page-link">2</a></li>
            <li class="page-item"><a class="page-link">&raquo;</a></li>
        </ul>
    </nav>
</section>
    </div>
</main>