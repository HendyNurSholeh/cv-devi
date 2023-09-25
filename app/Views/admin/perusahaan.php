<?= self::extend('layouts/admin_layout'); ?>
<?= self::section('css'); ?>
<link rel="stylesheet" href="/css/admin/style_perusahaan.css" />
<?= self::endSection(); ?>
<?= self::section('content'); ?>
<div id="content" class="mx-5">
    <div class="container mb-5 mt-3 bg-white rounded-5 p-5 pt-3 shadow">
        <header class="mt-3">
            <div class="row justify-content-between">
                <div class="col">
                    <h2 class="text-start mb-3 fw-semibold text-hitamAbu fs-2 text-shadow">Data Perusahaan</h2>
                </div>
                <div class="col">
                    <div class="text-end">
                        <button type="button" class="btn-utama btn btn-success text-light fw-bolder"
                            data-bs-toggle="modal" data-bs-target="#modalTambahAkun"><i class="bi bi-plus-lg"></i>Tambah
                            Perusahaan</button>
                    </div>
                    <!-- Modal Tambah Akun -->
                    <div class="modal fade" id="modalTambahAkun" tabindex="-1" aria-labelledby="modalTambahAkunLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTambahAkunLabel">Tambah Perusahaan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form tambah akun -->
                                    <form action="" method="POST" autocomplete="off">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                placeholder="Masukkan nama perusahaan" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="sopir" class="form-label">Peran Perusahaan <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="sopir" name="sopir" required>
                                                <option value="" selected disabled>-- Pilih Peran --</option>
                                                <option value="pengirim">pengirim</option>
                                                <option value="penerima">penerima</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kontak" class="form-label">Kontak Perusahaan <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="kontak" name="kontak"
                                                placeholder="Masukkan kontak perusahaan" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="alamat" name="alamat"
                                                placeholder="Masukkan alamat perusahaan" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="catatan" class="form-label">Catatan Tambahan </label>
                                            <input type="number" class="form-control" id="catatan" name="catatan"
                                                placeholder="Masukkan catatan tambahan" required />
                                        </div>
                                        <button type="submit" class="btn btn-primary"
                                            name="submit-add-akun">Tambah</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <table id="table" class="table table-striped shadow-sm table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Peran Perusahaan</th>
                    <th>Kontak Perusahaan</th>
                    <th>Alamat</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php for($i=10; $i>=0; $i--) : ?>
                <tr>
                    <td>PT Tanjung TBK</td>
                    <td>Pengirim</td>
                    <td>083142301830</td>
                    <td>Batu Licin</td>
                    <td style="width:111px;">
                        <button type='button' class='btn border btn-success p-0 px-2 m-0' data-bs-toggle='modal'
                            data-bs-target='#detail'><i class="bi bi-info-circle"></i></button>
                        <button type='button' class='btn border btn-primary p-0 px-2 m-0' data-bs-toggle='modal'
                            data-bs-target='#edit'><i class="bi bi-pencil-square text-light"></i></button>
                        <button type='button' class='btn border btn-danger p-0 px-2 m-0' data-bs-toggle='modal'
                            data-bs-target='#delete'><i class="bi bi-trash text-light"></i></button>
                    </td>
                </tr>
                <!-- Modal Details -->
                <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="deskripsiAkunModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deskripsiAkunModalLabel">Detail Akun</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-5 p-3 gambar-akun"
                                        style="background-image: url('/images/default_profile.png');"></div>
                                    <div class="col-md-7">
                                        <p class="fs-5"><strong>Nama:</strong>Hendy Nur Sholeh</p>
                                        <p class="fs-5"><strong>Username:</strong>Hendy</p>
                                        <p class="fs-5"><strong>No.Telp:</strong>083142301830</p>
                                        <p class="fs-5"><strong>Email:</strong>hendynursholeh7213@gmail.com</p>
                                        <p class="fs-5"><strong>Jabatan: </strong>Admin</p>
                                        <p class="fs-5"><strong>Alamat:</strong>Kintap</p>
                                        <p class="fs-5"><strong>Waktu Dibuat:22 Juli 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Edit Akun -->
                <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Ubah Data Akun</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <div class="row mb-3">
                                        <label for="username" class="col-sm-3 col-form-label">Username <span
                                                class="text-danger">*</span> : </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="username" id="username"
                                                value="Hendy" required />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="password" class="col-sm-3 col-form-label">Pasword Baru : </label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="password" id="password" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="konfirmasiPassword" class="col-sm-3 col-form-label">Konfirmasi
                                            Password : </label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="konfirmasiPassword"
                                                id="konfirmasiPassword" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="noTelp" class="col-sm-3 col-form-label">No. Telephone : </label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="noTelp" value="083142301830"
                                                id="noTelp" placeholder="-" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-3 col-form-label">Email : </label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" name="email"
                                                value="hendynursholeh7213@gmail.com" id="email" placeholder="-" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="level" class="col-sm-3 col-form-label">Level <span
                                                class="text-danger">*</span> : </label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="level" id="level" required>
                                                <option value="admin">Admin</option>
                                                <option value="owner">Owner</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="alamat" class="col-sm-3 col-form-label">Alamat : </label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="alamat" name="alamat" value="Kintap"
                                                placeholder="-"></textarea>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary" name="submit-edit-akun">Submit
                                        Perubahan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal delete -->
                <div class="modal" id="delete" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteConfirmationModalLabel">Konfirmasi Hapus Akun</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <input type="hidden" name="id_akun" value="">
                                    <p>Apakah anda yakin ingin menghapus Akun Hendy?
                                    </p>
                                    <div class="text-end">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-danger"
                                            name="submit-remove-akun">Ya</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</div>
<?= self::endSection(); ?>
<?= self::section('js'); ?>
<script src="/js/admin/script_perusahaan.js"></script>
<?= self::endSection(); ?>