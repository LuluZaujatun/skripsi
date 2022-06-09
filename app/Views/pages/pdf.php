<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('sb admin') ?>/css/sb-admin-2.css" rel="stylesheet">
    <title>Report Monitoring Sales</title>

</head>

<body>
    <center>
        <h2>Report Monitoring Sales Force BGES</h2>
        <h3><?= date('M-Y'); ?></h3>
    </center>
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            <!-- WO CARD -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    WORK ORDER</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $wo; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PS CARD -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    PUT IN SERVICE</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $ps; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <center>
            <h4>LEADERBOARD</h4>
        </center>
        <!-- Leaderboard -->
        <table border=1 width=100% cellpadding=2 cellspacing=0 style="margin-top: 5px; text-align:center">
            <thead>
                <tr bgcolor=silver align=center>
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
        <br>

        <center>
            <h4>SALES ORDER</h4>
        </center>
        <!-- Sales Order -->
        <table border=1 width=100% cellpadding=2 cellspacing=0 style="margin-top: 5px; text-align:center">
            <thead>
                <tr bgcolor=silver align=center>
                    <th scope="col">No</th>
                    <th scope="col">Date Input</th>
                    <th scope="col">No Order</th>
                    <th scope="col">Nama</th>
                    <th scope="col">STO</th>
                    <th scope="col">Mitra</th>
                    <th scope="col">PIC</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($customer as $row => $c) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $c['date_input'] ?></td>
                        <td><?php echo $c['no_order'] ?></td>
                        <td><?php echo $c['nama_cust'] ?></td>
                        <td><?php echo $c['sto'] ?></td>
                        <td><?php echo $c['mitra'] ?></td>
                        <td><?php echo $c['pic'] ?></td>
                        <td><?php echo $c['status'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <br>
    <footer class="sticky-footer">
        <center><span>Copyright &copy; Website Monitoring <?= date('Y'); ?> by Lulu Zaujatun </span></center>
    </footer>
</body>


</html>