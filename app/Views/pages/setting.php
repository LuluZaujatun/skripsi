<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Page Heading -->
<div class="container">
    <h1 class="h4 mb-2 text-gray-800">Setting Points</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">Indikator</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Point</th>
                            <th scope="col">Periode</th>
                            <th colspan="3" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>WO H-1</td>
                            <td>Work Order Cut Off 24hours</td>
                            <td>50</td>
                            <td>Mei</td>
                            <td><a href="#" class="btn btn-danger btn-sm btn-circle">
                                    <i class="fas fa-trash"></i>
                                </a></td>
                            <td><a href="#" class="btn btn-danger btn-sm btn-circle">
                                    <i class="fas fa-pen"></i>
                                </a></td>
                        </tr>
                        <tr>
                            <td>PS MTD</td>
                            <td>Put In Sevice Month To Date</td>
                            <td>100</td>
                            <td>Mei</td>
                            <td><a href="#" class="btn btn-danger btn-sm btn-circle">
                                    <i class="fas fa-trash"></i>
                                </a></td>
                            <td><a href="#" class="btn btn-danger btn-sm btn-circle">
                                    <i class="fas fa-pen"></i>
                                </a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>