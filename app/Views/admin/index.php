<?= $this->extend('template/pageTemplate'); ?>

<?= $this->section('pageContent'); ?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">
                    <h5 class="card-title fw-semibold mb-4">Daftar Project</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body p-4">
                            <!-- <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5> -->
                            <div class="table-responsive">
                                <table class="table text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                        <tr>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">No</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Nama</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Deskripsi</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Anggota Tim</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Tanggal Input</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Tanggal Selesai</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Progress</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Actions</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $index = 1;
                                        foreach ($project as $item) : ?>
                                            <tr>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0"><?= $index++ ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-1"><?= $item['nama'] ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <p class="mb-0 fw-normal"><?= $item['deskripsi'] ?></p>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-1"><?= $item['nama_lengkap'] ?></h6>
                                                    <span class="fw-normal"><?= $item['anggota_tim'] ?></span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0 fs-4"><?= $item['tanggal_buat'] ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0 fs-4"><?= $item['tanggal_deadline'] ?></h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <p><?= $item['progress'] ?>%</p>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: <?= $item['progress'] ?>%;" aria-valuenow="<?= $item['progress'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <a href="<?= base_url(); ?>admin/taskProject">
                                                            <span class="badge bg-primary rounded-1 fw-semibold"><i class="ti ti-eye"></i>&nbsp;Detail</span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>