<?= self::extend('layouts/admin_layout'); ?>
<?= self::section('css'); ?>
<link rel="stylesheet" href="<?=base_url('/css/admin/style_history.css')?>" />
<?= self::endSection(); ?>
<?= self::section('content'); ?>
<!-- content -->
<div id="content" class="mx-5 pt-3">
    <div class="container mb-5 bg-white rounded-5 p-5 pt-3 shadow">
        <header class="mt-3">
            <h2 class="text-center mb-3 fw-semibold text-hitamAbu fs-2 text-shadow"><i class="bi bi-clock-history"></i>
                History Pengiriman</h2>
        </header>
        <p class="text-center fw-semibold">Pilih tanggal :</p>
        <form class="mb-3" id="date-form" action="" method="POST">
            <label for="tanggal-awal">Tanggal Awal:</label>
            <input type="date" value="2023-05-05" max="" id="tanggal-awal" name="tanggal-awal" class="inputTanggal"
                lang="id-ID" name="start-date" />
            <label class="ms-2" for="tanggal-akhir" class="inputTanggal">Tanggal Akhir:</label>
            <input type="date" value="2023-06-04" max="" id="tanggal-akhir" name="tanggal-akhir" />
            <button class="ms-2 bg-white rounded-1 border-dark-subtle fs-09 px-2" name="submit-date-form"
                type="submit">Filter</button>
        </form>
        <!-- History Produk Keluar -->
        <div id="history-produk-keluar">
            <div class="total-penjualan my-2">
                <!-- <h5 class="fw-semibold text-dark-emphasis"> Total Pengiriman</h5> -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="judul-total-buah card-header bg-success fw-semibold text-white"><i
                                    class="bi bi-cart-plus-fill"></i> Total Pengiriman</div>
                            <div class="card-body">
                                <span id="total-buah">30</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="judul-total-fr card-header bg-primary fw-semibold text-white"><i
                                    class="bi bi-bi-droplet-half"></i> Total Netto</div>
                            <div class="card-body">
                                <span id="total-frozen-food">153.8297 Kg</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="judul-total-harga card-header bg-oren fw-semibold text-white"><i
                                    class="bi bi-database-add"></i> Total Kontrak</div>
                            <div class="card-body">
                                <span id="total-harga">2</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table id="table" class="table table-striped shadow-sm table-bordered">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Truck</th>
                        <th>Sopir</th>
                        <th>Asal</th>
                        <th>Tujuan</th>
                        <th>Admin</th>
                        <th width="10px"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php  for($i=10; $i>=0; $i--) :?>
                    <tr>
                        <td>19 Oktober 2023</td>
                        <td>DA8830LB</td>
                        <td>Ujang</td>
                        <td>PT Smart</td>
                        <td>PT Candi</td>
                        <td>Hendy</td>
                        <td><button type='button' class='btn border btn-success p-0 px-2 m-0' data-bs-toggle='modal'
                                data-bs-target='#detail'><i class="bi bi-info-circle"></i></button> </td>
                    </tr>
                    <!-- Modal Details -->
                    <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="productModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="productModalLabel">Detail Pengiriman</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 gambar-produk"
                                            style="background-image:url('../../assets/img/');">
                                        </div>
                                        <div class="col-md-6">
                                            <h2>Ujang</h2>
                                            <p><strong>Truck: </strong>DA8830LB</p>
                                            <p><strong>Asal: </strong>PT Candi TBK</p>
                                            <p><strong>Tujuan: </strong>PT Surya Bersama</p>
                                            <p><strong>Total Bruto: </strong>12,230 Kg</p>
                                            <p><strong>Total Tarra: </strong>3,990 Kg</p>
                                            <p><strong>Total Netto: </strong>8,240 Kg</p>
                                            <p><strong>Catatan: </strong>-</p>
                                            <p><strong>Tanggal: </strong>18 Mei 2024</p>
                                        </div>
                                    </div>
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
<script src="<?= base_url('/js/admin/script_history.js') ?>"></script>
<?= self::endSection(); ?>