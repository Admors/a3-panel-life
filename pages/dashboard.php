<?php require_once 'includes/aside.inc.php';?>

<main class="container-fluid flex-grow-1 my-4">
    <div class="row">

        <!-- Main Content -->
        <section class="col-md-9 col-lg-10">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold"><i class="bi bi-speedometer2"></i> Dashboard</h2>
                <span class="badge bg-primary fs-6">Last updated: <?php echo date('H:i'); ?></span>
            </div>

            <!-- Stats Cards -->
            <div class="row g-4 mb-4">
                <div class="col-md-3">
                    <div class="card text-white bg-primary shadow">
                        <div class="card-body text-center">
                            <i class="bi bi-person fs-1"></i>
                            <h5 class="card-title mt-2">Players</h5>
                            <p class="card-text">0 Registered</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-white bg-success shadow">
                        <div class="card-body text-center">
                            <i class="bi bi-car-front fs-1"></i>
                            <h5 class="card-title mt-2">Vehicles</h5>
                            <p class="card-text">0 Vehicles</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-white bg-warning shadow">
                        <div class="card-body text-center">
                            <i class="bi bi-cash-stack fs-1"></i>
                            <h5 class="card-title mt-2">Total Money</h5>
                            <p class="card-text">$0.00</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-white bg-info shadow">
                        <div class="card-body text-center">
                            <i class="bi bi-person-lines-fill fs-1"></i>
                            <h5 class="card-title mt-2">Players Online</h5>
                            <p class="card-text">Currently 0 connected</p>
                        </div>
                    </div>
                </div>
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

            <!-- Global Message -->
            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <h5 class="card-title text-center"><i class="bi bi-megaphone text-primary fs-3"></i> Global Message</h5>
                    <form action="send_message.php" method="post">
                        <div class="mb-3">
                            <textarea name="server_message" class="form-control" rows="3" placeholder="Type your message here..." required></textarea>
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