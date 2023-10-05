<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?=$title ?? "CV. Devi"?></title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <!-- css -->
    <link rel="stylesheet" href="<?= base_url('/css/admin/style_umum.css') ?>">
    <?= self::renderSection('css');?>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" />
</head>

<body class="bg-abu">
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark-emphasis bg-white shadow fixed-top">
        <div class="container">
            <a class="navbar-brand fw-semibold text-secondary" href="#">CV. DEVI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <div class="row me-4">
                            <a class="nav-link click-oren fw-semibold p-2 px-3 home" aria-current="page"
                                href="<?=base_url('/admin/home')?>"><i class="bi bi-house-door-fill"></i> Home</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="row me-4">
                            <a class="nav-link click-oren fw-semibold p-2 px-3 jadwal" aria-current="page"
                                href="<?=base_url('/admin/jadwal')?>"><i class="bi bi-calendar3"></i> Jadwal</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="row me-4">
                            <a class="nav-link dropdown-toggle click-oren fw-semibold p-2 px-3 perusahaan mobil" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-bag-check-fill"></i>
                                Data
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item fw-semibold sub-data text-secondary"
                                        href="<?=base_url('/admin/perusahaan')?>">Perusahaan</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item fw-semibold sub-data text-secondary"
                                        href="<?=base_url('/admin/mobil')?>">Mobil</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="row me-4">
                            <a class="nav-link click-oren fw-semibold p-2 px-3 kontrak" aria-current="page"
                                href="<?=base_url('/admin/kontrak')?>"><i class="bi bi-clipboard-check-fill"></i> Kontrak</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="row me-4">
                            <a class="nav-link click-oren fw-semibold p-2 px-3 gaji" aria-current="page"
                                href="<?=base_url('/admin/gaji')?>"><i class="bi bi-envelope-check-fill"></i> Gaji</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="row me-4">
                            <a class="nav-link click-oren fw-semibold p-2 px-3 history" aria-current="page"
                                href="<?=base_url('/admin/history')?>"><i class="bi bi-stopwatch-fill"></i> History</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="row me-4">
                            <a class="nav-link click-oren fw-semibold p-2 px-3 manajement-akun" aria-current="page"
                                href="<?=base_url('/admin/manajement-akun')?>"><i class="bi bi-person-square"></i> Manajement Akun</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="row">
                            <a class="nav-link click-oren fw-semibold p-2 px-3 akun" aria-current="page"
                                href="<?=base_url('/admin/akun')?>"><i class="bi bi-person-circle"></i> Akun</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="mt-5">.</div>
    <?= self::renderSection('content');?>
    <!-- Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <!-- jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="<?= base_url('/js/admin/script_umum.js')?>"></script>
    <?= self::renderSection('js');?>
</body>

</html>