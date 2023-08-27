<?= $this->extend('template/pageTemplate'); ?>

<?= $this->section('pageContent'); ?>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Edit Akun</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('admin/updateAkun/' . $user['id_user']); ?>" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" value="<?= esc($user['username']) ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" value="<?= esc($user['nama_lengkap']) ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Role</label>
                                <select class="form-select" name="isAdmin">
                                    <option value="1" <?= ($user['isAdmin?'] == 1) ? 'selected' : '' ?>>Admin</option>
                                    <option value="0" <?= ($user['isAdmin?'] == 0) ? 'selected' : '' ?>>User</option>
                                </select>
                            </div>
                            <a href="<?= base_url('admin/dataAkun') ?>">
                                <button type="button" class="btn btn-danger">Back</button>
                            </a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>