<?= $this->extend('template/pageTemplate'); ?>

<?= $this->section('pageContent'); ?>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Tambah Task</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url(); ?>user/taskProject" method="GET">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Input</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select">
                                    <option value="1">On-Progress</option>
                                    <option value="2">Done</option>
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