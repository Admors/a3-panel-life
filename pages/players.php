<main class="container-fluid flex-grow-1 my-4">
    <div class="row">

        <?php require_once 'includes/aside.inc.php';?>

<section class="col-md-9 col-lg-10">
    <div class="d-flex justify-content-between flex-wrap align-items-center mb-3">
        <h2 class="fw-semibold"><i class="bi bi-people-fill text-primary"></i> Player Menu</h2>
    </div>

    <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
        <button class="btn btn-outline-danger btn-sm"><i class="bi bi-person-dash-fill"></i> Ban</button>
        <button class="btn btn-outline-success btn-sm"><i class="bi bi-person-check-fill"></i> Unban</button>
        <button class="btn btn-outline-warning btn-sm"><i class="bi bi-person-x-fill"></i> Kick</button>
        <button class="btn btn-outline-info btn-sm"><i class="bi bi-journal-text"></i> Notes</button>

        <form class="ms-auto d-flex flex-nowrap" role="search">
            <input class="form-control form-control-sm me-2" type="search" placeholder="Search player" aria-label="Search">
            <button class="btn btn-primary btn-sm" type="submit"><i class="bi bi-search"></i></button>
        </form>
    </div>

    <div class="table-responsive shadow-sm rounded">
        <table class="table table-hover align-middle">
            <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Player Name</th>
                <th>Alias</th>
                <th>UID</th>
                <th>GUID</th>
                <th>Cash</th>
                <th>Bank</th>
                <th>Cop</th>
                <th>Medic</th>
                <th>Admin</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>JohnDoe</td>
                <td>JohnDoe</td>
                <td>123456789</td>
                <td>ABCDEFG12345</td>
                <td>$1,200</td>
                <td>$5,000</td>
                <td>2</td>
                <td>1</td>
                <td>0</td>
                <td>
                    <div class="d-flex gap-1">
                        <button class="btn btn-outline-primary btn-sm"><i class="bi bi-arrow-repeat"></i> Update</button>
                        <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-pencil-square"></i> Edit</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <nav aria-label="Page navigation" class="mt-3">
        <ul class="pagination pagination-sm justify-content-center">
            <li class="page-item disabled"><a class="page-link">&laquo;</a></li>
            <li class="page-item active"><a class="page-link">1</a></li>
            <li class="page-item"><a class="page-link">2</a></li>
            <li class="page-item"><a class="page-link">3</a></li>
            <li class="page-item"><a class="page-link">&raquo;</a></li>
        </ul>
    </nav>
</section>

    </div>
</main>