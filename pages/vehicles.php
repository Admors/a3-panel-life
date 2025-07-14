<main class="container-fluid flex-grow-1 my-4">
    <div class="row">

        <?php require_once 'includes/aside.inc.php';?>

<section class="col-md-9 col-lg-10">
    <div class="d-flex justify-content-between flex-wrap align-items-center mb-3">
        <h2 class="fw-semibold"><i class="bi bi-truck-front text-primary"></i> Vehicle Menu</h2>
    </div>

    <div class="table-responsive shadow-sm rounded">
        <table class="table table-hover align-middle">
            <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Side</th>
                <th>Class Name</th>
                <th>UID</th>
                <th>Type</th>
                <th>Alive</th>
                <th>Active</th>
                <th>Plate</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            <!-- Exemple de ligne modifiable -->
            <tr>
                <form action="update_vehicle.php" method="POST" class="d-flex flex-nowrap">
                    <td>42</td>
                    <td>BLUFOR</td>
                    <td>
                        <input type="text" name="class_name" value="B_MRAP_01_F" class="form-control form-control-sm" required>
                    </td>
                    <td>123456789</td>
                    <td>Car</td>
                    <td>
                        <select name="alive" class="form-select form-select-sm">
                            <option value="1" selected>Yes</option>
                            <option value="0">No</option>
                        </select>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="active" value="1" id="activeSwitch1" checked>
                            <label class="form-check-label" for="activeSwitch1"></label>
                        </div>
                    </td>
                    <td>
                        <input type="text" name="plate" value="ABC123" class="form-control form-control-sm" required>
                    </td>
                    <td>
                        <input type="hidden" name="vehicle_id" value="42">
                        <button type="submit" class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-arrow-repeat"></i> Update
                        </button>
                    </td>
                </form>
            </tr>

            <!-- Copie du même format pour d'autres véhicules -->

            </tbody>
        </table>
    </div>
</section>

    </div>
</main>