<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Laporan Peserta</title>

    <!-- Logo Icon Title-->
    <link rel="icon" href="<?php echo base_url('images/icon/logo_akda_playstore.png'); ?>">

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url("css/font-face.css") ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('vendor/font-awesome-4.7/css/font-awesome.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('vendor/font-awesome-5/css/fontawesome-all.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("vendor/mdi-font/css/material-design-iconic-font.min.css") ?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url("vendor/bootstrap-4.1/bootstrap.min.css") ?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url("vendor/animsition/animsition.min.css") ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css") ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("vendor/wow/animate.css") ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("vendor/css-hamburgers/hamburgers.min.css") ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("vendor/slick/slick.css") ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("vendor/select2/select2.min.css") ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("vendor/perfect-scrollbar/perfect-scrollbar.css") ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url("css/theme.css") ?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <?php include('headerbayangan.php') ?>
        <!-- PAGE CONTENT-->
        <div class="page-container3">
            <section class="" style="padding-top: 25px;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <?php include 'sidebarpeserta.php' ?>
                        </div>
                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header bg-success">
                                                <strong class="card-title text-light">Query Berdasarkan Tanggal</strong>
                                            </div>
                                            <div class="card-body card-block">
                                                <form action="<?php echo base_url('dashboard/query') ?>" method="post" enctype="multipart/form-data" class="">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="select" class="px-1  form-control-label">Opsi Filter</label>
                                                                <select name="tanggal" class="form-control" placeholer="Status Rekanan">
                                                                    <?php
                                                                    if (empty($tanggal)) {
                                                                        echo '
                                                                                <option value="tgl_reg" >Tanggal Registrasi</option>
                                                                                <option value="tgl_aktif">Tanggal Aktif</option>
                                                                                <option value="tgl_expired">Tanggal Expired</option>
                                                                            ';
                                                                    } elseif ($tanggal == 'tgl_reg') {
                                                                        echo '
                                                                                <option value="tgl_reg" selected>Tanggal Registrasi</option>
                                                                                <option value="tgl_aktif">Tanggal Aktif</option>
                                                                                <option value="tgl_expired">Tanggal Expired</option>
                                                                            ';
                                                                    } elseif ($tanggal == 'tgl_aktif') {
                                                                        echo '
                                                                                <option value="tgl_reg">Tanggal Registrasi</option>
                                                                                <option value="tgl_aktif" selected>Tanggal Aktif</option>
                                                                                <option value="tgl_expired">Tanggal Expired</option>
                                                                            ';
                                                                    } elseif ($tanggal == 'tgl_expired') {
                                                                        echo '
                                                                                <option value="tgl_reg">Tanggal Registrasi</option>
                                                                                <option value="tgl_aktif">Tanggal Aktif</option>
                                                                                <option value="tgl_expired" selected>Tanggal Expired</option>
                                                                            ';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail2" class="px-1  form-control-label">Tanggal Awal</label>
                                                                <input type="date" id="exampleInputEmail2" placeholder="tanggal awal" required="" class="form-control" name="tgl_awal" value="<?php echo $tgl_awal; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail2" class="px-1  form-control-label">Tanggal Akhir</label>
                                                                <input type="date" id="exampleInputEmail2" placeholder="jane.doe@example.com" required="" class="form-control" name="tgl_akhir" value="<?php echo $tgl_akhir ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Query
                                                </button>
                                                <a href="<?php echo base_url('dashboard/query'); ?>" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </a>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="min-height: 420px;">
                                    <div class="col-md-12">

                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <center>
                                                            <th rowspan="2" style="text-align:center;padding-bottom: 35px;">NOREG</th>
                                                            <th rowspan="2" style="text-align:center;padding-bottom: 35px;">NOPIN</th>
                                                            <th rowspan="2" style="text-align:center;padding-bottom: 35px;">NAMA</th>
                                                            <th colspan="3" style="text-align:center;">TANGGAL</th>
                                                            <th rowspan="2" style="text-align:center;padding-bottom: 35px; width: 230px;">AKSI</th>
                                                        </center>
                                                    </tr>
                                                    <tr>
                                                        <center>
                                                            <th style="width: 130px;text-align:center;">AKTIVASI</th>
                                                            <th style="width: 130px;text-align:center;">AKTIF</th>
                                                            <th style="width: 130px;text-align:center;">AKHIR</th>
                                                        </center>
                                                    </tr>
                                                </thead>
                                                <tbody style="" id="tabelpeserta">
                                                    <?php
                                                    for ($i = 0; $i <= 9; $i++) {
                                                        echo "<tr>";
                                                        echo "<td>" . $peserta[$i]->noreg . "</td>";
                                                        echo "<td>" . $peserta[$i]->nopin . "</td>";
                                                        echo "<td>" . $peserta[$i]->nama . "</td>";
                                                        echo "<td>" . $peserta[$i]->tgl_reg . "</td>";
                                                        echo "<td>" . $peserta[$i]->tgl_aktif . "</td>";
                                                        echo "<td>" . $peserta[$i]->tgl_expired . "</td>";
                                                        echo "<td>
                                                                <center>
                                                                    <button onclick='onDetail(" . $peserta[$i]->id . ")' class='btn btn-info' style='color:white;' data-toggle='modal' data-target='#largeModal'>Detail</button>
                                                                </center>
                                                            </td>";
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <div class="">
                                                <a style="float:right;" id="count">1 - 10 of
                                                    <?php echo $jumlahpeserta ?></a>
                                            </div>
                                            <div class="card-body">
                                                <center>
                                                    <a onclick="prevBtn()"><button type="button" class="btn btn-outline-danger btn-sm" style="width:78px;">Previous</button></a>
                                                    <button type="button" class="btn btn-outline-secondary btn-sm" id="page">1</button>
                                                    <a onclick="nextBtn()"><button type="button" class="btn btn-outline-primary btn-sm" style="width:78px;">Next</button></a>
                                                </center>
                                            </div>
                                            <form action="<?php echo base_url('dashboard/cetak_query') ?>" method="post" enctype="multipart/form-data" class="" style="display:;" target="_blank">
                                                <div class="form-group">
                                                    <input type="hidden" id="tanggal" placeholder="tanggal awal" required="" class="form-control" name="tanggal" value="<?php echo $tanggal; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" id="tgl_awal" placeholder="tanggal awal" required="" class="form-control" name="tgl_awal" value="<?php echo $tgl_awal; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" id="tgl_akhir" placeholder="jane.doe@example.com" required="" class="form-control" name="tgl_akhir" value="<?php echo $tgl_akhir ?>">
                                                </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm" style="float:right">
                                            <i class="fa fa-dot-circle-o"></i> Cetak
                                        </button>
                                        </form>
                                    </div>
                                    <!-- END DATA TABLE-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="copyright">
                                        <p>Copyright © 2022 PT. ASURANSI BHAKTI BHAYANGKARA. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header bg-success">
                                                        <strong class="card-title text-light">Detail
                                                            Peserta</strong>
                                                    </div>
                                                </div>
                                                <table class="table table-border">
                                                    <thead style="color:black;" id="detailpeserta">
                                                        <tr>
                                                            <th>Nomor Registrasi</th>
                                                            <th>:</th>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Nomor PIN</th>
                                                            <th>:</th>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Nama Peserta</th>
                                                            <th>:</th>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Nomor KTP</th>
                                                            <th>:</th>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Alamat</th>
                                                            <th>:</th>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Nomor Telpon</th>
                                                            <th>:</th>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Tanggal Lahir</th>
                                                            <th>:</th>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Tanggal Registrasi</th>
                                                            <th>:</th>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Tanggal Aktif</th>
                                                            <th>:</th>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Tanggal Berakhir</th>
                                                            <th>:</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer" id="detailfooter">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                            <button type="button" class="btn btn-primary">Cetak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE CONTENT-->
                    </div>
                </div>
        </div>
        </section>
    </div>
    <!-- END PAGE CONTENT  -->

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url("vendor/jquery-3.2.1.min.js") ?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url("vendor/bootstrap-4.1/popper.min.js") ?>"></script>
    <script src="<?php echo base_url("vendor/bootstrap-4.1/bootstrap.min.js") ?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url("vendor/slick/slick.min.js") ?>">
    </script>
    <script src="<?php echo base_url("vendor/wow/wow.min.js") ?>"></script>
    <script src="<?php echo base_url("vendor/animsition/animsition.min.js") ?>"></script>
    <script src="<?php echo base_url("vendor/bootstrap-progressbar/bootstrap-progressbar.min.js") ?>">
    </script>
    <script src="<?php echo base_url("vendor/counter-up/jquery.waypoints.min.js") ?>"></script>
    <script src="<?php echo base_url("vendor/counter-up/jquery.counterup.min.js") ?>">
    </script>
    <script src="<?php echo base_url("vendor/circle-progress/circle-progress.min.js") ?>"></script>
    <script src="<?php echo base_url("vendor/perfect-scrollbar/perfect-scrollbar.js") ?>"></script>
    <script src="<?php echo base_url("vendor/chartjs/Chart.bundle.min.js") ?>"></script>
    <script src="<?php echo base_url("vendor/select2/select2.min.js") ?>">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url("js/main.js") ?>"></script>
    <script>
        var status = '<?php echo $this->session->flashdata('status') ?>';
        var url = '<?php echo $this->session->flashdata('url') ?>';
        if (status != '') {
            window.location.replace(url);
        }

        function on(id, idbtn, idtbl) {
            //Untuk Tabel
            document.getElementById("aktif").style.display = "none";
            document.getElementById("aktivasi").style.display = "none";
            document.getElementById("expired").style.display = "none";
            document.getElementById(id).style.display = "";

            //Untuk Button Cetak
            document.getElementById("aktifbtn").style.display = "none";
            document.getElementById("aktivasibtn").style.display = "none";
            document.getElementById("expiredbtn").style.display = "none";
            document.getElementById(idbtn).style.display = "";

            //Untuk warna tabel atas
            document.getElementById("aktiftbl").style.background = "";
            document.getElementById("aktivasitbl").style.background = "";
            document.getElementById("expiredtbl").style.background = "";
            document.getElementById(idtbl).style.background = "rgba(0, 0, 0, 0.05)";

            //Mematikan display pin
            document.getElementById("displaypin").style.display = "none";

            //Memberikan id yang aktif terakhir
            document.getElementById("value").value = id;
        }

        function onDetail(id) {
            console.log(id);
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/getPesertaById/" + id,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    if (data == '') {

                    } else {
                        data.forEach((isi) => {
                            document.getElementById('detailpeserta').innerHTML =
                                `<tr>    
                                    <th>Nomor Registrasi</th>
                                    <th>:</th>
                                    <th>${isi['noreg']}</th>
                                </tr>
                                <tr>
                                    <th>Nomor PIN</th>
                                    <th>:</th>
                                    <th>${isi['nopin']}</th>
                                </tr>
                                <tr>
                                    <th>Nama Peserta</th>
                                    <th>:</th>
                                    <th>${isi['nama']}</th>
                                </tr>
                                <tr>
                                    <th>Nomor Identitas</th>
                                    <th>:</th>
                                    <th>${isi['no_ktp']}</th>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <th>:</th>
                                    <th>${isi['alamat']}</th>
                                </tr>
                                <tr>
                                    <th>Nomor Telpon</th>
                                    <th>:</th>
                                    <th>${isi['no_tlp']}</th>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <th>:</th>
                                    <th>${isi['tgllahir']}</th>
                                </tr>
                                <tr>
                                    <th>Tanggal Aktivasi</th>
                                    <th>:</th>
                                    <th>${isi['tgl_reg']}</th>
                                </tr>
                                <tr>
                                    <th>Tanggal Aktif</th>
                                    <th>:</th>
                                    <th>${isi['tgl_aktif']}</th>
                                </tr>
                                <tr>
                                    <th>Tanggal Akhir</th>
                                    <th>:</th>
                                    <th>${isi['tgl_expired']}</th>
                                </tr>`;
                            document.getElementById('detailfooter').innerHTML =
                                `
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                    <a href='cetak_info_peserta/${isi['id']}' target="_blank"><button type="button" class="btn btn-primary">Cetak</button></a>
                                `;
                        });
                    }
                }
            });
        }

        function searchPin() {
            var nopin = $("#nopin").val();
            var id = $("#value").val();
            document.getElementById('displaypin').innerHTML = '';
            if (nopin == '') {
                document.getElementById('aktif').style.display = "none";
                document.getElementById('aktifbtn').style.display = "none";
                document.getElementById('aktiftbl').style.background = "";
                document.getElementById("aktivasi").style.display = "none";
                document.getElementById("expired").style.display = "none";
                document.getElementById("aktivasibtn").style.display = "none";
                document.getElementById("expiredbtn").style.display = "none";
                document.getElementById("aktivasitbl").style.background = "";
                document.getElementById("expiredtbl").style.background = "";
                if (id == 'aktif') {
                    document.getElementById("aktif").style.display = "";
                    document.getElementById("aktifbtn").style.display = "";
                    document.getElementById("aktiftbl").style.background = "rgba(0, 0, 0, 0.05)";
                } else
                if (id == 'aktivasi') {
                    document.getElementById("aktivasi").style.display = "";
                    document.getElementById("aktivasibtn").style.display = "";
                    document.getElementById("aktivasitbl").style.background = "rgba(0, 0, 0, 0.05)";
                } else
                if (id == 'expired') {
                    document.getElementById("expired").style.display = "";
                    document.getElementById("expiredbtn").style.display = "";
                    document.getElementById("expiredtbl").style.background = "rgba(0, 0, 0, 0.05)";
                }
            } else {
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/searchPinAktif/" + nopin,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
                        if (data == '') {
                            document.getElementById("aktif").style.display = "none";

                            document.getElementById("aktivasi").style.display = "none";

                            document.getElementById("expired").style.display = "none";
                            document.getElementById("aktifbtn").style.display = "none";
                            document.getElementById("aktivasibtn").style.display = "none";
                            document.getElementById("expiredbtn").style.display = "none";
                            document.getElementById("aktiftbl").style.background = "";
                            document.getElementById("aktivasitbl").style.background = "";
                            document.getElementById("expiredtbl").style.background = "";
                            document.getElementById('displaypin').style.display = '';
                        } else {
                            document.getElementById("aktif").style.display = "none";

                            document.getElementById("aktivasi").style.display = "none";

                            document.getElementById("expired").style.display = "none";
                            document.getElementById("aktifbtn").style.display = "none";
                            document.getElementById("aktivasibtn").style.display = "none";
                            document.getElementById("expiredbtn").style.display = "none";
                            document.getElementById("aktiftbl").style.background = "";
                            document.getElementById("aktivasitbl").style.background = "";
                            document.getElementById("expiredtbl").style.background = "";
                            document.getElementById('displaypin').style.display = '';
                            data.forEach((isi) => {
                                document.getElementById('displaypin').innerHTML += `<tr><td>${isi['noreg']}</td><td>${isi['nopin']}</td><td>${isi['nama']}</td><td>${isi['tgl_reg']}</td><td>${isi['tgl_aktif']}</td><td>${isi['tgl_expired']}</td></tr>`;
                            });
                        }
                    }
                });
            }
        }

        function nextBtn() {
            var page = parseInt(document.getElementById('page').innerHTML) + 1;
            document.getElementById('page').innerHTML = page;
            var jenistanggal = document.getElementById('tanggal').value;
            var tanggalawal = document.getElementById('tgl_awal').value;
            var tanggalakhir = document.getElementById('tgl_akhir').value;
            var pageoffset = parseInt(page) - 1;
            if (pageoffset == '0') {
                var awal = '1';
            } else {
                var awal = parseInt(pageoffset) * 10 + 1;
            }
            if (tanggalawal == '' && tanggalakhir == '') {
                console.log('Tanggal kosong');
                //diisi dengan paging data seluruh peserta
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/getAllPeserta/" + pageoffset,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
                        if (data == '') {
                            //ya kosong
                        } else {
                            document.getElementById('tabelpeserta').innerHTML = '';
                            data.forEach((isi) => {
                                document.getElementById('tabelpeserta').innerHTML +=
                                    `<tr>
                                    <td>${isi['noreg']}</td>
                                    <td>${isi['nopin']}</td>
                                    <td>${isi['nama']}</td>
                                    <td>${isi['tgl_reg']}</td>
                                    <td>${isi['tgl_aktif']}</td>
                                    <td>${isi['tgl_expired']}</td>
                                    <td>
                                        <center>
                                            <a href="info_peserta/${isi['id']}" class='btn btn-info'>Detail</a>
                                        </center>
                                    </td>
                                </tr>`;
                            });
                            document.getElementById('count').innerHTML = awal + " - " + (awal + parseInt(data.length) - 1) + " of " + <?php echo $jumlahpeserta ?>;
                        }
                    }
                });
            } else {
                console.log('Tanggal isi');
                //diisi dengan paging data sesuai sortir tanggal
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/getPesertaByDate/" + pageoffset + "/" + jenistanggal + "/" + tanggalawal + "/" + tanggalakhir,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
                        if (data == '') {
                            //ya kosong
                        } else {
                            document.getElementById('tabelpeserta').innerHTML = '';
                            data.forEach((isi) => {
                                document.getElementById('tabelpeserta').innerHTML +=
                                    `<tr>
                                    <td>${isi['noreg']}</td>
                                    <td>${isi['nopin']}</td>
                                    <td>${isi['nama']}</td>
                                    <td>${isi['tgl_reg']}</td>
                                    <td>${isi['tgl_aktif']}</td>
                                    <td>${isi['tgl_expired']}</td>
                                    <td>
                                        <center>
                                            <a href="info_peserta/${isi['id']}" class='btn btn-info'>Detail</a>
                                        </center>
                                    </td>
                                </tr>`;
                            });
                            document.getElementById('count').innerHTML = awal + " - " + (awal + parseInt(data.length) - 1) + " of " + <?php echo $jumlahpeserta ?>;
                        }
                    }
                });
            }
        }

        function prevBtn() {
            var page = parseInt(document.getElementById('page').innerHTML) - 1;
            if (page < 1) {

            } else
                document.getElementById('page').innerHTML = page;
            var jenistanggal = document.getElementById('tanggal').value;
            var tanggalawal = document.getElementById('tgl_awal').value;
            var tanggalakhir = document.getElementById('tgl_akhir').value;
            var pageoffset = parseInt(page) - 1;
            if (pageoffset == '0') {
                var awal = 1;
            } else {
                var awal = parseInt(pageoffset) * 10 + 1;
            }
            if (tanggalawal == '' && tanggalakhir == '') {
                console.log('Tanggal kosong');
                //diisi dengan paging data seluruh data
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/getAllPeserta/" + pageoffset,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
                        if (data == '') {
                            //ya kosong
                        } else {
                            document.getElementById('tabelpeserta').innerHTML = '';
                            data.forEach((isi) => {
                                document.getElementById('tabelpeserta').innerHTML +=
                                    `<tr>
                                    <td>${isi['noreg']}</td>
                                    <td>${isi['nopin']}</td>
                                    <td>${isi['nama']}</td>
                                    <td>${isi['tgl_reg']}</td>
                                    <td>${isi['tgl_aktif']}</td>
                                    <td>${isi['tgl_expired']}</td>
                                    <td>
                                        <center>
                                            <a href="info_peserta/${isi['id']}" class='btn btn-info'>Detail</a>
                                        </center>
                                    </td>
                                </tr>`;
                            });
                            document.getElementById('count').innerHTML = awal + " - " + (awal + parseInt(data.length) - 1) + " of " + <?php echo $jumlahpeserta ?>;
                        }
                    }
                });
            } else {
                console.log('Tanggal isi');
                //diisi dengan paging data sesuai sortir tanggal
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/getPesertaByDate/" + pageoffset + "/" + jenistanggal + "/" + tanggalawal + "/" + tanggalakhir,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
                        if (data == '') {
                            //ya kosong
                        } else {
                            document.getElementById('tabelpeserta').innerHTML = '';
                            data.forEach((isi) => {
                                document.getElementById('tabelpeserta').innerHTML +=
                                    `<tr>
                                    <td>${isi['noreg']}</td>
                                    <td>${isi['nopin']}</td>
                                    <td>${isi['nama']}</td>
                                    <td>${isi['tgl_reg']}</td>
                                    <td>${isi['tgl_aktif']}</td>
                                    <td>${isi['tgl_expired']}</td>
                                    <td>
                                        <center>
                                            <a href="info_peserta/${isi['id']}" class='btn btn-info'>Detail</a>
                                        </center>
                                    </td>
                                </tr>`;
                            });
                            document.getElementById('count').innerHTML = awal + " - " + (awal + parseInt(data.length) - 1) + " of " + <?php echo $jumlahpeserta ?>;
                        }
                    }
                });
            }
        }
    </script>

</body>

</html>
<!-- end document-->