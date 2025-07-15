<main class="container-fluid flex-grow-1 my-4">
    <div class="row">

        <?php require_once 'components/aside.com.php';?>

        <!-- Main Content -->
        <section class="col-md-9 col-lg-10">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold"><i class="bi bi-speedometer2"></i> Dashboard</h2>
                <span class="badge bg-primary fs-6">Last updated: <?php echo date('H:i'); ?></span>
            </div>

            <?php
            require __DIR__ . '/../includes/alert.inc.php';
            showAlert('success', 'Updated successfully for ID! ');
            ?>

            <!-- Stats Cards -->
            <div class="row g-4 mb-4">
                <?php
                include __DIR__ .'/../components/card.com.php';
                generateCard('#007bff', '#007bff', 'bi-person', 'Players', '0 Registered on the island');
                generateCard('#28a745', '#28a745', 'bi-car-front', 'Vehicles', '0 Vehicles owned');
                generateCard('#111111', '#111111', 'bi-shield-shaded', 'Gangs', '0 Gangs created');
                generateCard('#6f42c1', '#6f42c1', 'bi-house-door', 'Houses', '0 Houses purchased');
                generateCard('#007bff', '#007bff', 'bi-person-check', 'Players Today', '0 players connected today');
                generateCard('#ffc107', '#ffc107', 'bi-cash-stack', 'Money circulating', '$0.00');
                generateCard('#17a2b8', '#17a2b8', 'bi-person-lines-fill', 'Players Online', 'Currently 0 players online');
                generateCard('#28a745', '#28a745', 'bi-check-circle', 'Server Status', 'Server is Online');
                ?>
            </div>



            <!-- Server Actions -->
            <div class="row g-4 mb-4">
                <div class="col-md-6">
                    <div class="card border-0 shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="bi bi-arrow-clockwise fs-3 text-primary"></i> Restart Server</h5>
                            <form action="restart_server.php" method="post">
                                <button type="submit" class="btn btn-primary w-50 mt-2">Restart</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card border-0 shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="bi bi-stop-circle fs-3 text-danger"></i> Stop Server</h5>
                            <form action="stop_server.php" method="post">
                                <button type="submit" class="btn btn-danger w-50 mt-2">Stop</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Admin Shortcuts (Kick, Ban) -->
            <div class="row g-4 mb-4">
                <?
                    include __DIR__ . '/../components/actionButton.com.php';
                    generateActionButton('btn-outline-danger', 'bi-person-x', 'Kick Player', 'kickModal');
                    generateActionButton('btn-outline-warning', 'bi-person-x', 'Ban Player', 'banModal');
                    generateActionButton('btn-outline-success', 'bi-person-check', 'Unban Player', 'unbanModal');
                ?>

            <!-- Kick Modal -->
            <div class="modal fade" id="kickModal" tabindex="-1" aria-labelledby="kickModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="kickModalLabel">Kick Player</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="kick_player.php" method="post">
                                <div class="mb-3">
                                    <label for="playerIdKick" class="form-label">Player ID</label>
                                    <input type="text" name="player_id" id="playerIdKick" class="form-control" placeholder="Player ID" required>
                                </div>
                                <div class="mb-3">
                                    <label for="playerReasonKick" class="form-label">Reason</label>
                                    <input type="text" name="playerReasonKick" id="playerReasonKick" class="form-control" placeholder="Raison" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-danger w-50">Kick</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ban Modal -->
            <div class="modal fade" id="banModal" tabindex="-1" aria-labelledby="banModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="banModalLabel">Ban Player</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="ban_player.php" method="post">
                                <div class="mb-3">
                                    <label for="playerIdBan" class="form-label">Player ID</label>
                                    <input type="text" name="player_id" id="playerIdBan" class="form-control" placeholder="Player ID" required>
                                </div>
                                <div class="mb-3">
                                    <label for="playerReasonBan" class="form-label">Reason</label>
                                    <input type="text" name="playerReasonBan" id="playerReasonBan" class="form-control" placeholder="Raison" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-warning w-50">Ban</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Global Message -->
            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <h5 class="card-title text-center"><i class="bi bi-megaphone text-primary fs-3"></i> Global Message</h5>
                    <form action="send_message.php" method="post">
                        <div class="mb-3">
                            <textarea name="server_message" class="form-control" rows="1" placeholder="Type your message here..." required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-50">
                                <i class="bi bi-send"></i> Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>
