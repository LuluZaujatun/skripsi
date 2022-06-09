<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Page Heading -->
<div class="container">
    <h1 class="h4 mb-2 text-gray-800">Users</h1>
    <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2" href="<?= base_url('pages/register'); ?>"> <i class="fas fa-plus"></i> Add New User </a>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('pesan');  ?>
        </div>
    <?php endif; ?>

    <!-- Tables -->
    <div class="card shadow mb-4">
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">User ID</th>
                            <th scope="col">Role</th>
                            <th scope="col">Level</th>
                            <th colspan="3" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($user as $row => $s) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $s['name'] ?></td>
                                <td><?php echo $s['userID'] ?></td>
                                <td><?php echo $s['posisi'] ?></td>
                                <td><?php echo $s['level'] ?></td>
                                <td><a href="<?= base_url('edit-user/' . $s['id']); ?>" class="btn btn-danger btn-sm btn-circle">
                                        <i class="fas fa-pen"></i>
                                    </a></td>
                                <td><a href="<?= base_url('delete-user/' . $s['id']); ?>" class="btn btn-danger btn-sm btn-circle" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash"></i>
                                    </a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>