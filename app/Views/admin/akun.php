<?= self::extend('layouts/admin_layout'); ?>
<?= self::section('content'); ?>
<!-- content -->
<div class="container mb-5 mt-3 bg-white rounded-5 p-5 pt-3 shadow-lg">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-9">
                            <h5 class="card-title mb-3">Informasi Akun</h5>
                            <form action="" method="post" id="form-profil">
                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control form-input" id="nama" name="nama"
                                            placeholder="-" value="Hendy Nur Sholeh">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control form-input" id="email" name="email"
                                            placeholder="-" value="hendynursholeh7213@gmail.com">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="telepon" class="col-sm-3 col-form-label">Telepon</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control form-input" id="telepon" name="telepon"
                                            placeholder="-" value="083142301830">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control form-input" id="alamat" name="alamat"
                                            placeholder="-" rows="3">Kintap</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="jabatan" name="jabatan"
                                            value="Admin" disabled>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <input type="hidden" name="idAkun" value="akunId">
                                    <div class="col-sm-9 offset-sm-3">
                                        <button type="button" class="btn btn-primary" id="edit-profil"><i
                                                class="bi bi-pencil-square me-2"></i>Edit Profil</button>
                                        <button type="submit" class="btn btn-primary d-none" name="submitPerubahan"
                                            id="simpan-perubahan"><i class="bi bi-check-circle me-2"></i>Simpan
                                            Perubahan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-3">
                            <h5 class="card-title mb-2 mt-5">Hendy</h5>
                            <p class="card-text">Admin</p>
                            <hr>
                            <br>
                            <button name="logout" type="submit" class="btn btn-danger d-block" data-bs-toggle='modal'
                                data-bs-target='#confirmLogout'><i
                                    class="bi bi-box-arrow-right me-2"></i>Logout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal konfirmasi logout  -->
<div class="modal" id="confirmLogout" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmationModalLabel">Konfirmasi Logout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <p>Apakah anda yakin ingin Logout ?</p>
                    <div class="text-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger" name="logout">Ya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= self::endSection(); ?>
<?= self::section('js'); ?>
<script src="/js/admin/script_akun.js"></script>
<?= self::endSection(); ?>