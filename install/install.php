<?php
require __DIR__ . '/../includes/alert.inc.php';
?>

<main class="flex-grow-1 container my-4 d-flex flex-column align-items-center">
    <div id="clock" class="mb-4 fs-1 fw-bold text-center mt-3"></div>

    <div class="card shadow p-4 text-center" style="max-width: 900px; width: 100%;">
        <h2 class="mb-3">Installation du Panel</h2>

        <form class="form-inline" method="post">
            <div class="row">
                <!-- Affichage des alertes -->
                <?php
                showAlert('success', 'Updated successfully for ID! ');
                ?>

                <!-- Colonne 1 -->
                <div class="col-md-6">
                    <!-- Paramètres de la base de données -->
                    <div class="panel panel-info mb-3">
                        <div class="panel-heading p-2">Database Settings</div>
                        <div class="panel-body">
                            <input type="text" class="form-control mb-2" placeholder="DB User" name="user" value="<?= htmlspecialchars($_POST['user'] ?? '') ?>" required />
                            <input type="password" class="form-control mb-2" placeholder="DB Pass" name="pass" value="<?= htmlspecialchars($_POST['pass'] ?? '') ?>" required />
                            <input type="text" class="form-control mb-2" placeholder="DB Host" name="host" value="<?= htmlspecialchars($_POST['host'] ?? '') ?>" required />
                            <input type="text" class="form-control mb-2" placeholder="DB Name" name="name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" required />
                            <input type="text" class="form-control mb-2" placeholder="DB Port (Leave blank for 3306)" name="port" value="<?= htmlspecialchars($_POST['port'] ?? '') ?>" />
                        </div>
                    </div>

                    <!-- Paramètres généraux -->
                    <div class="panel panel-info mb-3">
                        <div class="panel-heading p-2">General Settings</div>
                        <div class="panel-body">
                            <label class="form-label mb-2 fw-semibold">Maximum Levels</label>
                            <div class="row g-3 mb-3">
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="maxCop" name="maxCop" value="<?= htmlspecialchars($_POST['maxCop'] ?? '') ?>" placeholder="Cop" required>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="maxMedic" name="maxMedic" value="<?= htmlspecialchars($_POST['maxMedic'] ?? '') ?>" placeholder="Medic" required>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="maxAdmin" name="maxAdmin" value="<?= htmlspecialchars($_POST['maxAdmin'] ?? '') ?>" placeholder="Admin" required>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="maxDonator" name="maxDonator" value="<?= htmlspecialchars($_POST['maxDonator'] ?? '') ?>" placeholder="Donator" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paramètres API -->
                    <div class="panel panel-info mb-3">
                        <div class="panel-heading p-2">API Settings</div>
                        <div class="panel-body">
                            <div class="form-check form-switch text-start mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="apiEnable" name="apiEnable" value="1" <?= isset($_POST['apiEnable']) ? 'checked' : '' ?>>
                                <label class="form-check-label" for="apiEnable">Activer l'API</label>
                            </div>

                            <input type="text" class="form-control mb-2" placeholder="API Username" name="apiUser" value="<?= htmlspecialchars($_POST['apiUser'] ?? '') ?>" />
                            <input type="password" class="form-control mb-2" placeholder="API Password" name="apiPass" value="<?= htmlspecialchars($_POST['apiPass'] ?? '') ?>" />
                        </div>
                    </div>
                </div>

                <!-- Colonne 2 -->
                <div class="col-md-6">
                    <div class="panel panel-info mb-3">
                        <div class="panel-heading p-2">RCON Settings</div>
                        <div class="panel-body">
                            <input type="text" class="form-control mb-2" placeholder="RCON Host" name="RHost" value="<?= htmlspecialchars($_POST['RHost'] ?? '') ?>" required />
                            <input type="password" class="form-control mb-2" placeholder="RCON Pass" name="RPass" value="<?= htmlspecialchars($_POST['RPass'] ?? '') ?>" required />
                            <input type="text" class="form-control mb-2" placeholder="RCON Port" name="RPort" value="<?= htmlspecialchars($_POST['RPort'] ?? '') ?>" required />
                        </div>
                    </div>

                    <!-- Steam API -->
                    <div class="alert alert-warning mt-3" role="alert">
                        <h5 class="alert-heading">⚠️ Informations Steam Obligatoires</h5>
                        <p>Pour sécuriser l'accès au panel, fournissez votre clé API Steam ainsi que votre SteamID64.</p>
                        <hr>

                        <input type="text" class="form-control mb-2" placeholder="API Steam Key" name="apiSteam" value="<?= htmlspecialchars($_POST['apiSteam'] ?? '') ?>" required />
                        <input type="text" class="form-control mb-2" placeholder="SteamID64 du créateur" name="steamIdCreator" value="<?= htmlspecialchars($_POST['steamIdCreator'] ?? '') ?>" required />
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success btn-block mt-3">Submit</button>
        </form>
    </div>
</main>

<script src="../assets/js/backgroundRotation.js"></script>
<script src="../assets/js/clock.js"></script>