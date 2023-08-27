<?= $this->extend('template/pageTemplate'); ?>

<?= $this->section('pageContent'); ?>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Tambah Akun</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('admin/saveAkun'); ?>" method="POST">
                            <?php if (session()->getFlashdata('errors')) : ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                                            <li><?= esc($error) ?></li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            <?php endif ?>
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="text" name="password" class="form-control"></input>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control"></input>
                            </div>
                            <?php if (isset($validation) && $validation->getError('nama_lengkap')) : ?>
                                <div class="alert alert-danger">
                                    <?= $validation->getError('nama_lengkap') ?>
                                </div>
                            <?php endif; ?>
                            <div class="mb-3">
                                <label class="form-label">Role</label>
                                <select class="form-select" name="isAdmin">
                                    <option value="1">Admin</option>
                                    <option selected value="0">User</option>
                                </select>
                            </div>
                            <a href="<?= base_url(); ?>admin/dataAkun">
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