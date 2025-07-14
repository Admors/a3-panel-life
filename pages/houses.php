<main class="container-fluid flex-grow-1 my-4">
    <div class="row">

        <?php require_once 'includes/aside.inc.php'; ?>

        <section class="col-md-9 col-lg-10">
            <div class="d-flex justify-content-between flex-wrap align-items-center mb-3">
                <h2 class="fw-semibold"><i class="bi bi-house-door-fill text-primary"></i> House Menu</h2>
            </div>

            <?php
            require __DIR__ . '/../includes/alert.inc.php';
            showAlert('success', 'Updated successfully for ID! ');
            ?>

            <div class="table-responsive shadow-sm rounded">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Owner UID</th>
                        <th>House Pos</th>
                        <th>Owned</th>
                        <th>Containers</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <form action="update_house.php" method="POST" class="align-middle">
                            <td>1 <input type="hidden" name="house_id" value="1"></td>
                            <td>123456789</td>
                            <td>[100, 200, 300]</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="owned" value="1" id="ownedSwitch1" checked>
                                    <label class="form-check-label" for="ownedSwitch1"></label>
                                </div>
                            </td>
                            <td>
                                <input type="text" name="containers" class="form-control form-control-sm"
                                       value='["container1", "container2"]'>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-arrow-repeat"></i> Update
                                </button>
                            </td>
                        </form>
                    </tr>

                    <!-- Exemple supplémentaire -->
                    <tr>
                        <form action="update_house.php" method="POST" class="align-middle">
                            <td>2 <input type="hidden" name="house_id" value="2"></td>
                            <td>987654321</td>
                            <td>[150, 250, 350]</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="owned" value="1" id="ownedSwitch2">
                                    <label class="form-check-label" for="ownedSwitch2"></label>
                                </div>
                            </td>
                            <td>
                                <input type="text" name="containers" class="form-control form-control-sm"
                                       value='["container3"]'>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-arrow-repeat"></i> Update
                                </button>
                            </td>
                        </form>
                    </tr>

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
