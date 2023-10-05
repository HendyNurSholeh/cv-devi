<?= self::extend('layouts/admin_layout'); ?>
<?= self::section('css'); ?>
<link rel="stylesheet" href="<?=base_url('/css/admin/style_kontrak.css')?>" />
<?= self::endSection(); ?>
<?= self::section('content'); ?>
<div id="content" class="mx-5">
    <div class="container mb-5 mt-3 rounded-5 p-5 pt-3 shadow" style="background-color: #fefefe;">
        <header class="mt-3">
        </header>
        <header class="mt-3">
            <div class="row justify-content-between">
                <div class="col mt-2">
                    <div class="d-flex align-items-center mb-4 justify-content-evenly">
                        <button type="button" class="btn btn-danger text-light fw-bolder" data-bs-toggle="modal"
                            data-bs-target="#"><i class="bi bi-x-octagon-fill"></i> Tutup Kontrak</button>
                        <button type="button" class="btn btn-primary text-light fw-bolder" data-bs-toggle="modal"
                            data-bs-target="#"><i class="bi bi-printer-fill"></i> Cetak
                            Tonase Angkut</button>
                        <button type="button" class="btn-utama btn btn-success text-light fw-bolder"
                            data-bs-toggle="modal" data-bs-target="#tambahJadwal"><i class="bi bi-plus-lg"></i>Tambah
                            Kontrak</button>
                    </div>
                    <div class="row mb-2 ms-4">
                        <div class="col-md-4">
                            <div class="rounded-pill mx-2 shadow-sm row rounded bg-white px-1 overflow-hidden">
                                <div
                                    class="col-3 bg-primary rounded-circle text-white d-flex justify-content-center align-items-center">
                                    <i class="bi bi-cart-plus-fill fw-bolder fs-1"></i>
                                </div>
                                <div class="col-9 bg-white text-dark-emphasis">
                                    <h6 class="fw-bold mt-2">Total Kontrak</h6>
                                    <span id="total-harga" class="fs-4 fw-bold">11</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="rounded-pill mx-2 shadow-sm row rounded bg-white px-1 overflow-hidden">
                                <div
                                    class="col-3 bg-success rounded-circle text-white d-flex justify-content-center align-items-center">
                                    <i class="bi bi-cart-check-fill fw-bolder fs-1"></i>
                                </div>
                                <div class="col-9 bg-white text-dark-emphasis">
                                    <h6 class="fw-bold mt-2">Kontrak Berjalan</h6>
                                    <span id="total-harga" class="fs-4 fw-bold">9</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="rounded-pill mx-2 shadow-sm row rounded bg-white px-1 overflow-hidden">
                                <div
                                    class="col-3 bg-danger rounded-circle text-white d-flex justify-content-center align-items-center">
                                    <i class="bi bi-droplet-half fw-bolder fs-1"></i>
                                </div>
                                <div class="col-9 bg-white text-dark-emphasis">
                                    <h6 class="fw-bold mt-2">Perkiraan Netto</h6>
                                    <span id="total-harga" class="fs-5 fw-bold">234.892
                                        Kg</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Tambah Akun -->
                    <div class="modal fade" id="tambahJadwal" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="tambahJadwalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 fw-bolder" id="tambahJadwalLabel">Verifikasi
                                        Pengiriman</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-start">
                                    <form action="" method="POST">
                                        <div class="mb-3">
                                            <label for="tanggal-pengiriman" class="form-label">Tanggal Pengiriman <span
                                                    class="text-danger">*</span></label>
                                            <input type="date" class="form-control tanggal" name="tanggal-pengiriman"
                                                value="2023/09/27" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama-produk" class="form-label">Nama Sopir<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="nama-produk-pk" name="idProduk" required>
                                                <option value="">Pilih Sopir</option>
                                                <option value="" data-satuan="" data-harga="">Nursani</option>
                                                <option value="" data-satuan="" data-harga="">Udin</option>
                                                <option value="" data-satuan="" data-harga="">Mursalim</option>
                                                <option value="" data-satuan="" data-harga="">Suparmin</option>
                                                <option value="" data-satuan="" data-harga="">Didik Darmadi</option>
                                                <option value="" data-satuan="" data-harga="">Ely Marga Luter</option>
                                                <option value="" data-satuan="" data-harga="">Alfiannor</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="mobil" class="form-label">Truck: </label>
                                            <input type="text" class="form-control" id="satuan-pk" value="DA44657L"
                                                placeholder="Kg" disabled />
                                        </div>
                                        <div class="row gap-2">
                                            <div class="col mb-3 me-0 pe-0">
                                                <label for="mobil" class="form-label">Asal: </label>
                                                <input type="text" class="form-control" id="satuan-pk" value="PT SMART"
                                                    placeholder="Kg" disabled />
                                            </div>
                                            <div class="col mb-3 ms-0 ps-0">
                                                <label for="mobil" class="form-label">Tujuan: </label>
                                                <input type="text" class="form-control" id="satuan-pk"
                                                    value="PT TANJUNG" placeholder="Kg" disabled />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jumlah" class="form-label">Total Bruto <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="number" class="form-control jumlah-pk" id="jumlah"
                                                    name="jumlah" placeholder="masukkan dalam satuan Kg" required
                                                    min="0" step="1" />
                                                <input type="text" class="form-control" id="satuan-pk"
                                                    value="kg"="satuan-pm" placeholder="Kg" disabled />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jumlah" class="form-label">Total Tarra <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="number" class="form-control jumlah-pk" id="jumlah"
                                                    name="jumlah" placeholder="masukkan dalam satuan Kg" required
                                                    min="0" step="1" />
                                                <input type="text" class="form-control" id="satuan-pk"
                                                    value="kg"="satuan-pm" placeholder="Kg" disabled />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jumlah" class="form-label">Total Netto <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="number" class="form-control jumlah-pk" id="jumlah"
                                                    name="jumlah" placeholder="masukkan dalam satuan Kg" required
                                                    min="0" step="1" />
                                                <input type="text" class="form-control" id="satuan-pk"
                                                    value="kg"="satuan-pm" placeholder="Kg" disabled />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="bukti-pengiriman" class="form-label">Bukti pengiriman <span
                                                    class="text-danger">*</span></label>
                                            <input type="file" class="form-control" id="bukti-pengiriman"
                                                name="bukti-pengiriman" min="0" value="0" step="0.01" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="catatan" class="form-label">Catatan</label>
                                            <textarea class="form-control" id="catatan" name="catatan"
                                                placeholder="(jika ada)" rows="3"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Keluar</button>
                                            <button type="submit" class="btn btn-primary"
                                                name="submit-barang-keluar">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <h2 class="mb-0 mt-3 fw-semibold text-oren fs-2 text-shadow"><i class="bi bi-clipboard-check-fill"></i> Daftar
            Kontrak</h2>
        <div class="bg-white p-3 rounded-lg mt-0 shadow-sm">
            <table id="table" class="table table-striped shadow-sm table-bordered">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Asal</th>
                        <th>Tujuan</th>
                        <th>Jumlah Minyak</th>
                        <th>Jumlah Terkirim</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i=10; $i>=0; $i--) : ?>
                    <tr>
                        <td>465789IA89K</td>
                        <td>PT Candi TBK - 54</td>
                        <td>PT Smart TBK</td>
                        <td>PT Berkah</td>
                        <td>97.500.000 Kg</td>
                        <td><i class="bi bi-arrow-up-short fw-bold text-success"></i>67.789.890 Kg</td>
                        <td class="fw-bold text-success">Berjalan</td>
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
                                            <label for="password" class="col-sm-3 col-form-label">Pasword Baru :
                                            </label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" name="password"
                                                    id="password" />
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
                                                <input type="number" class="form-control" name="noTelp"
                                                    value="083142301830" id="noTelp" placeholder="-" />
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
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Cancel</button>
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
</div>
<?= self::endSection(); ?>
<?= self::section('js'); ?>
<script src="<?= base_url('/js/admin/script_kontrak.js') ?>"></script>
<?= self::endSection(); ?>