<main class="container-fluid flex-grow-1 my-4">
    <div class="row">

        <?php require_once 'includes/aside.inc.php'; ?>

        <section class="col-md-9 col-lg-10">
            <div class="d-flex justify-content-between flex-wrap align-items-center mb-3">
                <h2 class="fw-semibold"><i class="bi bi-shield-shaded text-primary"></i> Gang Menu</h2>
            </div>

            <div class="table-responsive shadow-sm rounded">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                    <tr>
                        <th>Owner</th>
                        <th>Name</th>
                        <th>Members</th>
                        <th>Max Members</th>
                        <th>Bank</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <form action="update_gang.php" method="POST" class="align-middle">
                            <td>JohnDoe <input type="hidden" name="gang_id" value="1"></td>
                            <td>TheWolves</td>
                            <td>
                                <input type="text" name="members" class="form-control form-control-sm" value='["123456789","987654321"]'>
                            </td>
                            <td>
                                <input type="number" name="max_members" class="form-control form-control-sm" value="10" min="1">
                            </td>
                            <td>
                                <input type="number" name="bank" class="form-control form-control-sm" value="5000" min="0">
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="active" value="1" id="activeSwitch1" checked>
                                    <label class="form-check-label" for="activeSwitch1"></label>
                                </div>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-arrow-repeat"></i> Update
                                </button>
                            </td>
                        </form>
                    </tr>
                    <!-- Répéter pour chaque gang -->
                    </tbody>
                </table>
            </div>

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