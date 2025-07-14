<main class="container-fluid flex-grow-1 my-4">
    <div class="row">

        <?php require_once 'includes/aside.inc.php'; ?>


                <section class="col-md-9 col-lg-10">
                    <div class="d-flex justify-content-between flex-wrap align-items-center mb-3">
                        <h2 class="fw-semibold"><i class="bi bi-shield-lock-fill text-primary"></i> Gestion Staff</h2>
                    </div>

                    <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                        <a href="add_staff.php" class="btn btn-outline-success btn-sm">
                            <i class="bi bi-person-plus-fill"></i> Ajouter Staff
                        </a>

                        <form action="delete_all_staff.php" method="POST" class="d-inline">
                            <button type="submit" class="btn btn-outline-warning btn-sm" onclick="return confirm('Confirmer la suppression de TOUS les staffs ?');">
                                <i class="bi bi-person-x-fill"></i> Retirer Tout
                            </button>
                        </form>

                        <form class="ms-auto d-flex flex-nowrap" role="search">
                            <input class="form-control form-control-sm me-2" type="search" placeholder="Search Staff" aria-label="Search">
                            <button class="btn btn-primary btn-sm" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div>

                    <?php
                    require __DIR__ . '/../includes/alert.inc.php';
                    showAlert('success', 'Staff mis à jour !');
                    ?>

                    <div class="table-responsive shadow-sm rounded">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>SteamID64</th>
                                <th>Pseudo</th>
                                <th>Rôle</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- Staff 1: Créateur -->
                            <tr>
                                <td>1</td>
                                <td>788989873</td>
                                <td>Heinrich Vanderham</td>
                                <td><span class="badge bg-secondary">Créateur (Non Modifiable)</span></td>
                                <td>-</td>
                            </tr>

                            <!-- Staff 2: Modérateur -->
                            <tr>
                                <td>2</td>
                                <td>156348763</td>
                                <td>Alex Johnson</td>
                                <td>Modérateur</td>
                                <td>
                                    <div class="d-flex gap-1">
                                        <a href="edit_staff.php?id=2" class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i> Éditer
                                        </a>
                                        <form action="delete_staff.php" method="POST" class="d-inline">
                                            <input type="hidden" name="staff_id" value="2">
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirmer la suppression ?');">
                                                <i class="bi bi-trash-fill"></i> Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            <!-- Staff 3: Administrateur -->
                            <tr>
                                <td>3</td>
                                <td>987654321</td>
                                <td>Samuel White</td>
                                <td>Administrateur</td>
                                <td>
                                    <div class="d-flex gap-1">
                                        <a href="edit_staff.php?id=3" class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i> Éditer
                                        </a>
                                        <form action="delete_staff.php" method="POST" class="d-inline">
                                            <input type="hidden" name="staff_id" value="3">
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirmer la suppression ?');">
                                                <i class="bi bi-trash-fill"></i> Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </section>
            </div>
        </main>
