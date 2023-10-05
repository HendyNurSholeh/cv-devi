<?= self::extend('layouts/admin_layout'); ?>
<?= self::section('css'); ?>
<link rel="stylesheet" href="<?= base_url('/css/admin/style_home.css')?>" />
<?= self::endSection(); ?>
<?= self::section('content'); ?>
<!-- Modal Verifikasi pengiriman -->
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
                        <label for="tanggal-pengiriman" class="form-label">Tanggal Pengiriman <span
                                class="text-danger">*</span></label>
                        <input type="date" class="form-control tanggal" name="tanggal-pengiriman" value="2023/09/27"
                            required />
                    </div>
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
                        <label for="mobil" class="form-label">Truck: </label>
                        <input type="text" class="form-control" id="satuan-pk" value="DA44657L" placeholder="Kg"
                            disabled />
                    </div>
                    <div class="row gap-2">
                        <div class="col mb-3 me-0 pe-0">
                            <label for="mobil" class="form-label">Asal: </label>
                            <input type="text" class="form-control" id="satuan-pk" value="PT SMART" placeholder="Kg"
                                disabled />
                        </div>
                        <div class="col mb-3 ms-0 ps-0">
                            <label for="mobil" class="form-label">Tujuan: </label>
                            <input type="text" class="form-control" id="satuan-pk" value="PT TANJUNG" placeholder="Kg"
                                disabled />
                        </div>
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
                        <label for="bukti-pengiriman" class="form-label">Bukti pengiriman <span
                                class="text-danger">*</span></label>
                        <input type="file" class="form-control" id="bukti-pengiriman" name="bukti-pengiriman" min="0"
                            value="0" step="0.01" required />
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
                            class="rounded-circle bg-warning bi bi-droplet-half text-white fs-2"></i>
                        <h6 class="fw-semibold ps-2 mb-0 mt-2">Perkiraan Berat Netto</h6>
                        <p class="fs-3 m-0 fw-semibold">10500 Kg</p>
                    </div>
                    <div class="con-child-top bg-white rounded-5 p-3 shadow-sm text-center">
                        <i style="padding-block: 5px; padding-inline: 7px"
                            class="rounded-circle bg-danger bi bi-cart-plus-fill text-white fs-2"></i>
                        <h6 class="fw-bolder ps-2 mb-0 mt-2">Pengiriman Hari Ini</h6>
                        <p class="fs-3 m-0 fw-semibold">2</p>
                    </div>
                    <div class="con-child-top bg-white rounded-5 p-3 shadow-sm text-center">
                        <i style="padding-block: 5px; padding-inline: 7px"
                            class="rounded-circle bg-primary bi bi-cart-check-fill text-white fs-2"></i>
                        <h6 class="fw-bolder ps-2 mb-0 mt-2">Pengiriman selesai</h6>
                        <p class="fs-3 m-0 fw-semibold">1</p>
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
    <!-- Modal Details -->
    <div class="modal fade" id="detail1" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Detail Pengiriman</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col d-flex flex-column gap-0 justify-content-center align-items-center"
                            style="background-color: #fefe">
                            <h6><strong>Status Pengiriman: </strong></h6>
                            <h4><span class="text-danger fw-bold">Belum
                                    Selesai</span></h4>
                        </div>
                        <div class="col-5">
                            <h2>Nursani</h2>
                            <p><strong>Truck: </strong>DA8830LB</p>
                            <p><strong>Nama Kontrak: </strong>PT Smart-16</p>
                            <p><strong>Nomor Kontrak: </strong>DUIHBDJKDHU78K</p>
                            <p><strong>Asal: </strong>PT Smart Tarjun</p>
                            <p><strong>Tujuan: </strong>PT Berkah Mulia</p>
                            <p><strong>Tanggal Pengiriman: </strong>18 Mei 2024</p>
                            <p><strong>Perkiraan Berat Netto: </strong>8,240 Kg</p>
                            <p><strong>Perkiraan Berat Tarra: </strong>3,200 Kg</p>
                            <p><strong>Perkiraan Berat Bruto: </strong>11,440 Kg</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Details 2-->
    <div class="modal fade" id="detail2" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Detail Pengiriman</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col gambar-produk" style="background-image: url('<?=base_url('/images/bukti1.jpeg')?>')">
                            <a href="" class="btn btn-success"><i class="bi bi-download"></i> Download Bukti
                                Pengiriman</a>
                        </div>
                        <div class="col-5">
                            <h2>Udin</h2>
                            <p><strong>Truck: </strong>DA8830LB</p>
                            <p><strong>Nama Kontrak: </strong>PT Smart-16</p>
                            <p><strong>Nomor Kontrak: </strong>JSJOIDUJB9L</p>
                            <p><strong>Asal: </strong>PT Candi TBK</p>
                            <p><strong>Tujuan: </strong>PT Surya Bersama</p>
                            <p><strong>Total Bruto: </strong>12,230 Kg</p>
                            <p><strong>Total Tarra: </strong>3,990 Kg</p>
                            <p><strong>Total Netto: </strong>8,240 Kg</p>
                            <p><strong>Catatan: </strong>-</p>
                            <p><strong>Tanggal Pengiriman: </strong>18 Mei 2024</p>
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
<script src="<?= base_url('/js/admin/script_home.js') ?>"></script>
<?= self::endSection(); ?>