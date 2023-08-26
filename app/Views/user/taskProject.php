<?= $this->extend('template/pageTemplate'); ?>

<?= $this->section('pageContent'); ?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row mb-4">
                <h5 class="card-title fw-semibold mb-3">Detail Project</h5>
                <h6 class="fw-semibold">Nama : </h6>
                <h6 class="fw-semibold">Deskripsi : </h6>
                <h6 class="fw-semibold">Anggota Tim : </h6>
                <h6 class="fw-semibold">Tanggal Input : </h6>
                <h6 class="fw-semibold">Tanggal Selesai : </h6>
                <h6 class="fw-semibold">Status : </h6>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-lg-8" style="display: flex; align-items: baseline;">
                                    <h5 class="card-title mb-4">Daftar Task</h5>
                                </div>
                                <div class="col-lg-4" style="text-align: right;">
                                    <a href="<?= base_url(); ?>user/tambahTask">
                                        <button type="button" class="btn btn-success m-1">Tambah Task</button>
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
                                                    <h6 class="fw-semibold mb-0">Sub Task</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Actions</h6>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">1</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-1">Dummy Task</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <p class="mb-0 fw-normal">Dummy Task</p>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0 fs-4">25-08-2023</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0 fs-4">[Foto]</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="badge bg-warning rounded-3 fw-semibold">On-Progress</span>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <a href="<?= base_url(); ?>user/subtaskProject">
                                                            <span class="badge bg-primary rounded-1 fw-semibold"><i class="ti ti-eye"></i>&nbsp;Detail</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0" style="display: flex;">
                                                    <div class="d-flex align-items-center gap-2 pt-2">
                                                        <a href="<?= base_url(); ?>user/editTask">
                                                            <button class="badge btn btn-warning fw-semibold"><i class="ti ti-pencil"></i></button>
                                                        </a>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 mx-1 pt-2">
                                                        <a href="<?= base_url(); ?>user/taskProject">
                                                            <button class="badge btn btn-danger fw-semibold" onclick="return confirm('Apa anda yakin ingin menghapus task ini?');"><i class="ti ti-trash"></i></button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="py-6 px-6 text-left">
                                    <p class=""><a href="<?= base_url(); ?>user/index" class="pe-1 text-primary text-decoration-underline">
                                            << Projects </a>
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