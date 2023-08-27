<?= $this->extend('template/pageTemplate'); ?>

<?= $this->section('pageContent'); ?>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Edit Project</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= site_url('/user/editProject/update/' . $projects['id']) ?>" method="post">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?=esc($projects['name']) ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi">
                                    <?=esc($projects['deskripsi']) ?>
                                </textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Anggota Tim</label>
                                <textarea class="form-control" name="anggota_tim">
                                    <?=esc($projects['anggota_tim']) ?>
                                </textarea>
                            </div>
<!--                            <div class="mb-3">-->
<!--                                <label class="form-label">Tanggal Input</label>-->
<!--                                <input type="text" class="form-control">-->
<!--                            </div>-->
                            <div class="mb-3">
                                <label class="form-label">Tanggal Deadline</label>
                                <input type="date" class="form-control" name="tanggal_deadline" value="<?= esc($projects['tanggal_deadline']) ?>
                            </div>
<!--                            <div class="mb-3">-->
<!--                                <label class="form-label">Status</label>-->
<!--                                <select class="form-select">-->
<!--                                    <option value="1">On-Progress</option>-->
<!--                                    <option value="2">Done</option>-->
<!--                                </select>-->
<!--                            </div>-->
                            <a href="<?= base_url(); ?>user/index">
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