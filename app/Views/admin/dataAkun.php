<?= $this->extend('template/pageTemplate'); ?>

<?= $this->section('pageContent'); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-8">
          <h5 class="card-title fw-semibold mb-4">Data Akun</h5>
        </div>
        <div class="col-lg-4" style="text-align: right;">
          <a href="<?= base_url(); ?>admin/tambahAkun">
            <button type="button" class="btn btn-success m-1">Tambah Akun</button>
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
                        <h6 class="fw-semibold mb-0">Nama Lengkap</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Username</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Password</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Actions</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $index = 1;
                    foreach ($users as $user) : ?>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0"><?=$index++ ?></h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1"><?= esc($user['nama_lengkap']) ?></h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1"><?= esc($user['username']) ?></h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1"><?= esc($user['password']) ?></h6>
                        </td>
                        <td class="border-bottom-0" style="display: flex;">
                          <div class="d-flex align-items-center gap-2">
                            <a href="<?= base_url('admin/editAkun/' . $user['id_user']); ?>">
                              <button class="badge btn btn-warning fw-semibold"><i class="ti ti-pencil"></i></button>
                            </a>
                          </div>
                          <div class="d-flex align-items-center gap-2 mx-2">
                            <a href="<?= base_url('admin/deleteAkun/' . $user['id_user']); ?>" onclick="return confirm('Apa anda yakin ingin menghapus akun ini?');">
                              <button class="badge btn btn-danger fw-semibold"><i class="ti ti-trash"></i></button>
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