<div class="modal-body">
    <form action="<?= site_url('progress-so') ?>" method="post">
        <input type="hidden" name="id_customer" id="id_customer">
        <div class="mb-3 row">
            <label class="sm-2 col-form-label">Last Status </label>
            <div class="col-sm">
                <input type="text" class="form-control" id="status" disabled value="<?php echo $c['status']; ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Progress </label>
            <div class="col-sm-10">
                <select class="form-select" name="status">
                    <option selected>Open this select status</option>
                    <option value="IN PROGRESS">IN PROGRESS</option>
                    <option value="NO ODP">NO ODP</option>
                    <option value="COMPLETED">COMPLETED</option>
                    <option value="CANCEL">CANCEL</option>
                </select>
            </div>
        </div>
</div>
<div class="modal-footer">
    <button class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm mb-2" type="button" data-dismiss="modal">Cancel</button>
    <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2">Update</button>
</div>
</div>