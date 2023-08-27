<?= $this->extend('template/pageTemplate'); ?>

<?= $this->section('pageContent'); ?>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Edit Task</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= site_url('/user/editTask/'.$task['id_task']) ?>" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="nama">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi"><?= $task['deskripsi'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Input</label>
                                <input type="date" class="form-control" name="tanggal_input" value="<?= $task['tanggal_input'] ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto</label>
                                <input type="file" class="form-control" name="foto">
                            </div>
                            <in
                            <a href="<?= base_url(); ?>user/taskProject">
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