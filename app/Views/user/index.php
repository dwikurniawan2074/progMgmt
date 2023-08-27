<?php

use App\Models\UserModel;

?>
<?= $this->extend('template/pageTemplate'); ?>

<?= $this->section('pageContent'); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-8">
          <h5 class="card-title fw-semibold mb-4">Daftar Project</h5>
        </div>
        <div class="col-lg-4" style="text-align: right;">
          <a href="<?= base_url(); ?>user/tambahProject">
            <button type="button" class="btn btn-success m-1">Tambah Project</button>
          </a>
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
                        <h6 class="fw-semibold mb-0">Status</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Task</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Actions</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($projects as $project) : ?>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0"><?= $i ?></h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1"><?= $project['nama'] ?>t</h6>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?= $project['deskripsi'] ?></p>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">
                            <?php
                            $userModel = new UserModel();
                            $user = $userModel->find($project['id_user']);
                            echo $user['username'];
                            ?>

                          </h6>
                          <span class="fw-normal"><?= $project['anggota_tim'] ?></span>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4"><?= $project['tanggal_buat'] ?></h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4"><?= $project['tanggal_deadline'] ?></h6>
                        </td>
                        <td class="border-bottom-0">
                          <p><?= $project['progress'] ?>%</p>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: <?= $project['progress'] ?>%;" aria-valuenow="<?= $project['progress'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="border-botton-0">
                          <div class="d-flex align-items-center gap-2">
                            <a href="<?= base_url(); ?>user/taskProject/<?= $project['id_project'] ?>">
                              <span class="badge bg-primary rounded-1 fw-semibold"><i class="ti ti-eye"></i>&nbsp;Detail</span>
                            </a>
                          </div>
                        </td>
                        <td class="border-bottom-0" style="display: flex;">
                          <div class="d-flex align-items-center gap-2 pt-2">
                            <a href="<?= base_url(); ?>user/editProject/<?= $project['id_project'] ?> ">
                              <button class="badge btn btn-warning fw-semibold"><i class="ti ti-pencil"></i></button>
                            </a>
                          </div>
                          <div class="d-flex align-items-center gap-2 mx-1 pt-2">
                            <a href="<?= base_url(); ?>user/deleteProject/<?= $project['id_project'] ?>">
                              <button class="badge btn btn-danger fw-semibold" onclick="return confirm('Apa anda yakin ingin menghapus project ini?');"><i class="ti ti-trash"></i></button>
                            </a>
                          </div>
                        </td>
                      </tr>
                      <?php $i++; ?>
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