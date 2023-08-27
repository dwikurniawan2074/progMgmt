<?= $this->extend('template/pageTemplate'); ?>

<?= $this->section('pageContent'); ?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row mb-4">
                <h5 class="card-title fw-semibold mb-3">Detail Task</h5>
                <h6 class="fw-semibold">Nama : <?= $tasks['nama'] ?></h6>
                <h6 class="fw-semibold">Deskripsi : <?= $tasks['deskripsi'] ?></h6>
                <h6 class="fw-semibold">Tanggal Input : <?= $tasks['tanggal_input'] ?></h6>
                <h6 class="fw-semibold">Progress : <?= $tasks['progress'] ?>%</h6>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h5 class="card-title mb-4">Daftar Sub Task</h5>
                                </div>
                                <div class="col-lg-4" style="text-align: right;">
                                    <a href="<?= base_url(); ?>user/tambahSubtask">
                                        <button type="button" class="btn btn-success m-1">Tambah Sub Task</button>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
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
                                                    <h6 class="fw-semibold mb-0">Tanggal Input</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Foto</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Status</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Actions</h6>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $index = 1;
                                            foreach ($subtask as $item) : ?>
                                                <tr>
                                                    <td class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0">1</h6>
                                                    </td>
                                                    <td class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-1"><?=$item['nama']?></h6>
                                                    </td>
                                                    <td class="border-bottom-0">
                                                        <p class="mb-0 fw-normal"><?=$item['deskripsi']?></p>
                                                    </td>
                                                    <td class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0 fs-4"><?=$item['tanggal_input']?></h6>
                                                    </td>
                                                    <td class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0 fs-4"><?=$item['foto']?></h6>
                                                    </td>
                                                    <td class="border-bottom-0">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="badge bg-warning rounded-3 fw-semibold"><?=$item['progress']?></span>
                                                        </div>
                                                    </td>
                                                    <td class="border-bottom-0" style="display: flex;">
                                                        <div class="d-flex align-items-center gap-2 pt-2">
                                                            <a href="<?= base_url(); ?>user/editSubtask">
                                                                <button class="badge btn btn-warning fw-semibold"><i class="ti ti-pencil"></i></button>
                                                            </a>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-2 mx-1 pt-2">
                                                            <a href="<?= base_url(); ?>user/subtaskProject">
                                                                <button class="badge btn btn-danger fw-semibold" onclick="return confirm('Apa anda yakin ingin menghapus sub task ini?');"><i class="ti ti-trash"></i></button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="py-6 px-6 text-left">
                                    <p class=""><a href="<?= base_url(); ?>user/taskProject" class="pe-1 text-primary text-decoration-underline">
                                            << Task </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>