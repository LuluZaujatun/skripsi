<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard <?= session()->get('posisi'); ?></h1>
        <?php
        $pdf = false;
        if (strpos(current_url(), "generateSpv")) {
            $pdf = true;
        }
        if ($pdf == false) {
        ?>
            <a onclick="window.open('<?= site_url('pdf/generateSpv') ?>', 'blank')" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>
                Generate Report</a>
        <?php } ?>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-4 col-lg-5">
            <!-- WO CARD -->
            <div class="card shadow mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Work Order</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $woSpv; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PS CARD -->
            <div class="card shadow mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Put In Service</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $psSpv; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ketentuan -->
            <div class="card shadow mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Ketentuan Leaderboard</div>
                                <div class="text-xs mb-0  text-gray-800">
                                    <br> - Point WO : 50 Point
                                    <br> - Point PS : 100 Point
                                    <br> - Minimum target : 100 point

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- LEADERBOARD -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-danger">Leaderboard</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">Rank</th>
                                    <th scope="col">Points</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Mitra</th>
                                    <th scope="col">WO</th>
                                    <th scope="col">PS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($leader as $row => $s) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $s['poin'] ?></td>
                                        <td><?php echo $s['pic'] ?></td>
                                        <td><?php echo $s['mitra'] ?></td>
                                        <td><?php echo $s['wo'] ?></td>
                                        <td><?php echo $s['ps'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Page level plugins -->
<script src="<?php echo base_url('sb admin') ?>/vendor/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url('sb admin') ?>/js/demo/chart-pie-demo.js"></script>

<?= $this->endSection(); ?>