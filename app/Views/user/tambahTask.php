<?= $this->extend('template/pageTemplate'); ?>

<?= $this->section('pageContent'); ?>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Tambah Task</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= site_url('/user/tambahTask/post/') ?>" method="post" enctype="multipart/form-data">
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
                                <select class="form-select" name="id_project">
                                    <?php foreach ($projects as $project) : ?>
                                        <option value="<?= esc($project['id_project']) ?>"><?= esc($project['nama']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
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