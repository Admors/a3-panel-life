<main class="container-fluid flex-grow-1 my-4">
    <div class="row justify-content-center">
        <section class="col-md-10">
            <h2 class="fw-semibold mb-4 text-center"><i class="bi bi-gear-fill text-primary"></i> Paramètres</h2>

            <?php
            require __DIR__ . '/../includes/alert.inc.php';
            showAlert('success', 'Updated successfully for ID! ');
            ?>

            <form action="updateSettings.php" method="POST" class="row">
                <div class="col-md-6">
                    <h5>Database Configuration</h5>
                    <div class="mb-3"><label>Host</label><input type="text" name="host" class="form-control" value="127.0.0.1"></div>
                    <div class="mb-3"><label>Username</label><input type="text" name="user" class="form-control" value="a3-jarvis"></div>
                    <div class="mb-3"><label>Password</label><input type="password" name="pass" class="form-control" value="23092002"></div>
                    <div class="mb-3"><label>Database Name</label><input type="text" name="name" class="form-control" value="altislife"></div>

                    <hr>

                    <h5>RCON Configuration</h5>
                    <div class="mb-3"><label>RCON Host</label><input type="text" name="RHost" class="form-control" value="a3-jarvis"></div>
                    <div class="mb-3"><label>RCON Password</label><input type="password" name="RPass" class="form-control" value="23092002"></div>
                    <div class="mb-3"><label>RCON Port</label><input type="text" name="RPort" class="form-control" value="2003"></div>

                    <hr>

                    <h5>Levels Configuration</h5>
                    <div class="row">
                        <div class="col-3 mb-3"><label>Max Cop Level</label><input type="text" name="maxCop" class="form-control" value="7"></div>
                        <div class="col-3 mb-3"><label>Max Medic Level</label><input type="text" name="maxMedic" class="form-control" value="5"></div>
                        <div class="col-3 mb-3"><label>Max Admin Level</label><input type="text" name="maxAdmin" class="form-control" value="5"></div>
                        <div class="col-3 mb-3"><label>Max Donator Level</label><input type="text" name="maxDonator" class="form-control" value="5"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h5>API Configuration</h5>
                    <div class="mb-3"><label>API Username</label><input type="text" name="apiUser" class="form-control" value="default"></div>
                    <div class="mb-3"><label>API Password</label><input type="text" name="apiPass" class="form-control" value="password"></div>
                    <div class="mb-3">
                        <label>API Enabled</label>
                        <select name="apiEnable" class="form-control">
                            <option value="0">0 - Disabled</option>
                            <option value="1" selected>1 - Enabled</option>
                        </select>
                    </div>

                    <hr>

                    <div class="alert alert-danger shadow-sm mt-3" role="alert">
                        <h5><i class="bi bi-exclamation-triangle-fill"></i> Danger Zone: Steam Configuration</h5>
                        <p class="mb-3">Ce Steam ID64 donne les droits admin. Une erreur et tu perds l'accès administrateur !</p>

                        <div class="mb-3">
                            <label>Steam API Key</label>
                            <input type="text" name="steamApiKey" class="form-control" placeholder="Enter Steam API Key">
                        </div>

                        <div class="mb-3">
                            <label>Admin Steam ID64</label>
                            <input type="text" name="steamAdminID64" class="form-control" placeholder="Enter Admin Steam ID64">
                        </div>
                    </div>

                    <button type="submit" name="updateButton" class="btn btn-primary mt-4 w-100"><i class="bi bi-save"></i> Sauvegarder les Paramètres</button>
                </div>
            </form>
        </section>
    </div>
</main>