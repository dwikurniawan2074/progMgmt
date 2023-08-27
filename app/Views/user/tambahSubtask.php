<?= $this->extend('template/pageTemplate'); ?>

<?= $this->section('pageContent'); ?>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Tambah Sub Task</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= site_url('/user/tambahSubtask/post/') ?>" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Input</label>
                                <input type="date" class="form-control" name="tanggal_input">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto</label>
                                <input type="file" class="form-control" name="foto">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Project</label>
                                <select class="form-select" name="id_task">
                                    <?php foreach ($tasks as $task) : ?>
                                        <option value="<?= esc($task['id_task']) ?>"><?= esc($task['nama']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <a href="<?= base_url(); ?>user/subtaskProject">
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