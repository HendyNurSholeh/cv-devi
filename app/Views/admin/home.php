<?= self::extend('layouts/admin_layout'); ?>
<?= self::section('css'); ?>
<link rel="stylesheet" href="/css/admin/style_home.css" />
<?= self::endSection(); ?>
<?= self::section('content'); ?>
<!-- Modal Produk Keluar -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bolder" id="staticBackdropLabel">Verifikasi Pengiriman</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-start">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nama-produk" class="form-label">Nama Sopir<span class="text-danger">*</span></label>
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
                        <label for="nama-produk" class="form-label">Truck<span class="text-danger">*</span></label>
                        <select class="form-select" id="nama-produk-pk" name="idProduk" required>
                            <option value="">Pilih Truck</option>
                            <option value="" data-satuan="" data-harga="">DA8830LB</option>
                            <option value="" data-satuan="" data-harga="">DA8830LB</option>
                            <option value="" data-satuan="" data-harga="">DA8830LB</option>
                            <option value="" data-satuan="" data-harga="">DA8830LB</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Total Bruto <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="number" class="form-control jumlah-pk" id="jumlah" name="jumlah"
                                placeholder="masukkan dalam satuan Kg" required min="0" step="1" />
                            <input type="text" class="form-control" id="satuan-pk" value="kg"="satuan-pm"
                                placeholder="Kg" disabled />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Total Tarra <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="number" class="form-control jumlah-pk" id="jumlah" name="jumlah"
                                placeholder="masukkan dalam satuan Kg" required min="0" step="1" />
                            <input type="text" class="form-control" id="satuan-pk" value="kg"="satuan-pm"
                                placeholder="Kg" disabled />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Total Netto <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="number" class="form-control jumlah-pk" id="jumlah" name="jumlah"
                                placeholder="masukkan dalam satuan Kg" required min="0" step="1" />
                            <input type="text" class="form-control" id="satuan-pk" value="kg"="satuan-pm"
                                placeholder="Kg" disabled />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="harga-terjual" class="form-label">Harga Terjual <span
                                class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="harga-terjual" name="harga-terjual" min="0"
                            value="0" step="0.01" required />
                    </div>
                    <div class="mb-3">
                        <label for="tanggal-keluar" class="form-label">Tanggal Keluar <span
                                class="text-danger">*</span></label>
                        <input type="date" class="form-control tanggal" name="tanggal-keluar" required />
                    </div>
                    <div class="mb-3">
                        <label for="catatan" class="form-label">Catatan</label>
                        <textarea class="form-control" id="catatan" name="catatan" placeholder="(jika ada)"
                            rows="3"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary" name="submit-barang-keluar">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- content -->
<div id="content" class="mx-5 mt-2">
    <div class="con-utama rounded-5 p-3 shadow-lg mb-3">
        <!-- top-statistik -->
        <section id="top-statistik m-0 p-0">
            <p class="m-0 p-0">Selasa, 12 September 2030</p>
            <div class="container-fluid mt-2 text-dark-emphasis">
                <div class="row gap-4">
                    <div class="con-child-top bg-white rounded-5 p-3 shadow-sm text-center">
                        <i style="padding-block: 5px; padding-inline: 7px"
                            class="rounded-circle bg-warning bi bi-coin text-white fs-2"></i>
                        <h6 class="fw-semibold ps-2 mb-0 mt-2">Perkiraan Berat Netto</h6>
                        <p class="fs-3 m-0 fw-semibold">10500 Kg</p>
                    </div>
                    <div class="con-child-top bg-white rounded-5 p-3 shadow-sm text-center">
                        <i style="padding-block: 5px; padding-inline: 7px"
                            class="rounded-circle bg-danger bi bi-cart-plus-fill text-white fs-2"></i>
                        <h6 class="fw-bolder ps-2 mb-0 mt-2">Jumlah Pengiriman</h6>
                        <p class="fs-3 m-0 fw-semibold">2</p>
                    </div>
                    <div class="con-child-top bg-white rounded-5 p-3 shadow-sm text-center">
                        <i style="padding-block: 5px; padding-inline: 7px"
                            class="rounded-circle bg-primary bi bi-cart-check-fill text-white fs-2"></i>
                        <h6 class="fw-bolder ps-2 mb-0 mt-2">Pengiriman selesai</h6>
                        <p class="fs-3 m-0 fw-semibold">5</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- mid-table -->
        <h1 class="text-dark-emphasis fs-4 fw-bolder mt-4">Pengiriman</h1>
        <section class="con-mid-table text-center text-dark-emphasis">
            <div class="container-fluid bg-white rounded-5 p-4">
                <button type="button" class="btn btn-primary bg-biruMuda fw-bolder" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"><i class="bi bi-arrow-down-square"></i> Verifikasi
                    Pengiriman</button>
                <table id="table" class="table table-striped text-start">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Asal Pengiriman</th>
                            <th>Tujuan Pengiriman</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nursani</td>
                            <td>PT Smart</td>
                            <td>PT Berkah Mulia</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Udin</td>
                            <td>PT Candi TBK</td>
                            <td>PT Surya Bersama</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <div id="sidebar" class="position-fixed end-0 bottom-0 p-3 pt-4 overflow-auto">
        <div class="con-side rounded-2 mt-5 p-2 py-3 shadow-lg">
            <h1 class="text-dark-emphasis fs-4 fw-bolder ps-2">Daftar Pengiriman Hari Ini</h1>
            <table class="table-side table-striped table table-hover rounded-2 p-3 shadow-sm text-center">
                <thead>
                    <tr>
                        <th scope="col">Sopir</th>
                        <th scope="col">Status Pengiriman</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nursani</td>
                        <td class="text-danger fw-bold">Belum Selesai</td>
                        <td>
                            <button type="button" class="btn border-0 p-0 m-0" data-bs-toggle="modal"
                                data-bs-target="#detail1"><a href="#" class="text-decoration-none">Details</a></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Udin</td>
                        <td class="text-success fw-bold">Selesai</td>
                        <td>
                            <button type="button" class="btn border-0 p-0 m-0" data-bs-toggle="modal"
                                data-bs-target="#detail2"><a href="#" class="text-decoration-none">Details</a></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal Details Apel-->
    <div class="modal fade" id="detail1" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Profil Sopir</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 gambar-produk" style="background-image: url('images/truk.jpg')"></div>
                        <div class="col-md-6">
                            <h2>Nursani</h2>
                            <p><strong>Truck: </strong>DA8830LB</p>
                            <p><strong>Asal: </strong>PT Smart Tarjun</p>
                            <p><strong>Tujuan: </strong>PT Berkah Mulia</p>
                            <p><strong>Perkiraan Berat Netto: </strong>8,240 Kg</p>
                            <p><strong>Catatan: </strong>-</p>
                            <p><strong>Tanggal: </strong>18 Mei 2024</p>
                            <p><strong>Status Pengiriman: </strong><span class="text-danger fw-bold">Dalam
                                    Perjalanan</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Details Frozen Food-->
    <div class="modal fade" id="detail2" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Detail Pengiriman</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 gambar-produk" style="background-image: url('images/sopir.jpg')"></div>
                        <div class="col-md-6">
                            <h2>Udin</h2>
                            <p><strong>Truck: </strong>DA8830LB</p>
                            <p><strong>Asal: </strong>PT Candi TBK</p>
                            <p><strong>Tujuan: </strong>PT Surya Bersama</p>
                            <p><strong>Total Bruto: </strong>12,230 Kg</p>
                            <p><strong>Total Tarra: </strong>3,990 Kg</p>
                            <p><strong>Total Netto: </strong>8,240 Kg</p>
                            <p><strong>Catatan: </strong>-</p>
                            <p><strong>Tanggal: </strong>18 Mei 2024</p>
                            <p><strong>Status Pengiriman: </strong><span class="text-success fw-bold">Selesai</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= self::endSection(); ?>
<?= self::section('js'); ?>
<script src="/js/admin/script_home.js"></script>
<?= self::endSection(); ?>