<main class="container-fluid flex-grow-1 my-4">
    <div class="row">

        <?php require_once 'components/aside.com.php'; ?>

        <section class="col-md-9 col-lg-10">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="fw-semibold"><i class="bi bi-cash-coin text-primary"></i> Reimbursement Logs</h2>
            </div>

            <?php
            require __DIR__ . '/../includes/alert.inc.php';
            showAlert('success', 'Reimbursement successfully added!');
            ?>

            <!-- Formulaire d'ajout -->
            <div class="card shadow-sm mb-4">
                <div class="card-header fw-bold">
                    Add Reimbursement Log
                </div>
                <div class="card-body">

                    <form action="add_reimbursement.php" method="POST" class="row g-3">
                        <div class="col-md-3">
                            <label for="player_uid" class="form-label">Player UID</label>
                            <input type="text" id="player_uid" name="player_uid" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label for="amount" class="form-label">Amount Given</label>
                            <input type="number" id="amount" name="amount" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="reason" class="form-label">Comp Reason</label>
                            <input type="text" id="reason" name="reason" class="form-control" required>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="submit" class="btn btn-outline-primary w-100">
                                <i class="bi bi-plus-circle"></i> Confirm
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Tableau des remboursements -->
            <div class="table-responsive shadow-sm rounded">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                    <tr>
                        <th>Reimbursement ID</th>
                        <th>Player ID</th>
                        <th>Amount Given</th>
                        <th>Reason</th>
                        <th>Admin</th>
                        <th>Time Stamp</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>123456789</td>
                        <td>5000</td>
                        <td>Server crash refund</td>
                        <td>AdminName</td>
                        <td>2025-07-14 10:30:00</td>
                    </tr>
                    <!-- Plus de lignes ici dynamiquement -->
                    </tbody>
                </table>
            </div>

        </section>
    </div>
</main>
