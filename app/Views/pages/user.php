<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Page Heading -->
<div class="container">
    <h1 class="h4 mb-2 text-gray-800">Users</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">UserID</th>
                            <th scope="col">Role</th>
                            <th scope="col">Active</th>
                            <th colspan="3" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>DS12345</td>
                            <td>Administrator</td>
                            <td>1</td>
                            <td><a href="#" class="btn btn-danger btn-sm btn-circle">
                                    <i class="fas fa-trash"></i>
                                </a></td>
                            <td><a href="#" class="btn btn-danger btn-sm btn-circle">
                                    <i class="fas fa-pen"></i>
                                </a></td>
                        </tr>
                        <tr>
                            <td>Zorita Serrano</td>
                            <td>DS12345</td>
                            <td>PIC</td>
                            <td>1</td>
                            <td><a href="#" class="btn btn-danger btn-sm btn-circle">
                                    <i class="fas fa-trash"></i>
                                </a></td>
                            <td><a href="#" class="btn btn-danger btn-sm btn-circle">
                                    <i class="fas fa-pen"></i>
                                </a></td>
                        </tr>
                        <tr>
                            <td>Jennifer Acosta</td>
                            <td>DS12345</td>
                            <td>Sales</td>
                            <td>1</td>
                            <td><a href="#" class="btn btn-danger btn-sm btn-circle">
                                    <i class="fas fa-trash"></i>
                                </a></td>
                            <td><a href="#" class="btn btn-danger btn-sm btn-circle">
                                    <i class="fas fa-pen"></i>
                                </a></td>
                        </tr>
                        <tr>
                            <td>Cara Stevens</td>
                            <td>DS12345</td>
                            <td>SPV</td>
                            <td>1</td>
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