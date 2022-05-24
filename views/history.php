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
    <title>History Peserta</title>

    <!-- Logo Icon Title-->
    <link rel="icon" href="<?php echo base_url('images/icon/logo_akda_playstore.png'); ?>">

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url("css/font-face.css") ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('vendor/font-awesome-4.7/css/font-awesome.min.css') ?>" rel="stylesheet"
        media="all">
    <link href="<?php echo base_url('vendor/font-awesome-5/css/fontawesome-all.min.css') ?>" rel="stylesheet"
        media="all">
    <link href="<?php echo base_url("vendor/mdi-font/css/material-design-iconic-font.min.css") ?>" rel="stylesheet"
        media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url("vendor/bootstrap-4.1/bootstrap.min.css") ?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url("vendor/animsition/animsition.min.css") ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css") ?>"
        rel="stylesheet" media="all">
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
                                <div class="card">
                                    <div class="card-header bg-success">
                                        <strong class="card-title text-light">History Peserta</strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input class="au-input au-input--full au-input--h65" type="number"
                                            placeholder="Cari nomor pin" style="margin-bottom: 20px;"
                                            onkeyup="searchPin()" id="nopin">
                                    </div>
                                    <div class="col-md-4">
                                        <input class="au-input au-input--full au-input--h65" type="number"
                                            placeholder="Cari nomor register" style="margin-bottom: 20px;"
                                            onkeyup="searchReg()" id="noreg">
                                    </div>
                                    <div class="col-md-4">
                                        <input class="au-input au-input--full au-input--h65" type="text"
                                            placeholder="Cari Nama" style="margin-bottom: 20px;" onkeyup="searchNama()"
                                            id="nama">
                                    </div>
                                </div>
                                <div class="row" style="min-height: 480px;">
                                    <div class="col-md-12">
                                        <input type="hidden" id="value" value="expired">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <center>
                                                            <th rowspan="2"
                                                                style="text-align:center;padding-bottom: 35px;">NOREG
                                                            </th>
                                                            <th rowspan="2"
                                                                style="text-align:center;padding-bottom: 35px;">NOPIN
                                                            </th>
                                                            <th rowspan="2"
                                                                style="text-align:center;padding-bottom: 35px;">NAMA
                                                            </th>
                                                            <th colspan="3" style="text-align:center;">TANGGAL</th>
                                                            <th rowspan="2"
                                                                style="text-align:center;padding-bottom: 35px; width: 230px;">
                                                                AKSI</th>
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
                                                <tbody style="display:;" id="peserta">
                                                    <?php foreach ($expired as $peserta) {
                                                        echo "<tr>";
                                                        echo "<td>" . $peserta->noreg . "</td>";
                                                        echo "<td>" . $peserta->nopin . "</td>";
                                                        echo "<td>" . $peserta->nama . "</td>";
                                                        echo "<td>" . $peserta->tgl_reg . "</td>";
                                                        echo "<td>" . $peserta->tgl_aktif . "</td>";
                                                        echo "<td>" . $peserta->tgl_expired . "</td>";
                                                        echo "<td>
                                                                <center>
                                                                    <button onclick='onDetail(" . $peserta->id . ")' class='btn btn-info' style='color:white;' data-toggle='modal' data-target='#largeModal'>Detail</button>
                                                                </center>
                                                            </td>";
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                                <tbody style="display:none;" id="displaypin">

                                                </tbody>
                                            </table>
                                            <div class="">
                                                <a style="float:right;" id="count">1 - 10 of
                                                    <?php echo $jumlahpeserta; ?></a>
                                            </div>
                                            <div class="card-body">
                                                <center>
                                                    <a onclick="prevBtn()"><button type="button"
                                                            class="btn btn-outline-danger btn-sm"
                                                            style="width:78px;">Previous</button></a>
                                                    <button type="button" class="btn btn-outline-secondary btn-sm"
                                                        id="page">1</button>
                                                    <a onclick="nextBtn()"><button type="button"
                                                            class="btn btn-outline-primary btn-sm"
                                                            style="width:78px;">Next</button></a>
                                                </center>
                                            </div>
                                        </div>
                                        <!-- END DATA TABLE-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <p>Copyright © 2022 PT. ASURANSI BHAKTI BHAYANGKARA. All rights reserved.
                                                Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PAGE CONTENT-->
                            <!-- MODALS PAGE CONTENT-->
                            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog"
                                aria-labelledby="largeModalLabel" aria-hidden="true">
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
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Kembali</button>
                                            <button type="button" class="btn btn-primary">Cetak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    function searchPin() {
        var nopin = $("#nopin").val();
        document.getElementById('displaypin').innerHTML = '';
        document.getElementById('count').innerHTML = '';
        document.getElementById('page').innerHTML = 1;
        if (nopin == '') {
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/getPeserteExpired/0",
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    if (data == '') {

                    } else {
                        document.getElementById('peserta').innerHTML = '';
                        data.forEach((isi) => {
                            document.getElementById('peserta').innerHTML +=
                                `<tr>
                                    <td>${isi['noreg']}</td>
                                    <td>${isi['nopin']}</td>
                                    <td>${isi['nama']}</td>
                                    <td>${isi['tgl_reg']}</td>
                                    <td>${isi['tgl_aktif']}</td>
                                    <td>${isi['tgl_expired']}</td>
                                    <td>
                                        <center>
                                            <button onclick='onDetail("${isi['id']}")' class='btn btn-info' style='color:white;' data-toggle='modal' data-target='#largeModal'>Detail</button>
                                        </center>
                                    </td>
                                </tr>`;
                        });
                    }
                    document.getElementById('count').innerHTML = 1 + " - " + (parseInt(data
                        .length)) + " of ";
                }
            });
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/countPeserteExpired",
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    document.getElementById('count').innerHTML += data;
                }
            });
        } else {
            document.getElementById('noreg').value = '';
            document.getElementById('nama').value = '';
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/searchPinExpired/0/" + nopin,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    document.getElementById('peserta').innerHTML = '';
                    if (data == '') {

                    } else {
                        data.forEach((isi) => {
                            document.getElementById('peserta').innerHTML +=
                                `<tr>
                                    <td>${isi['noreg']}</td>
                                    <td>${isi['nopin']}</td>
                                    <td>${isi['nama']}</td>
                                    <td>${isi['tgl_reg']}</td>
                                    <td>${isi['tgl_aktif']}</td>
                                    <td>${isi['tgl_expired']}</td>
                                    <td>
                                        <center>
                                        <button onclick='onDetail("${isi['id']}")' class='btn btn-info' style='color:white;' data-toggle='modal' data-target='#largeModal'>Detail</button>
                                        </center>
                                    </td>
                                </tr>`;
                        });
                        document.getElementById('count').innerHTML = "1 - " + data.length + " of ";
                    }
                }
            });
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/countPinExpired/" + nopin,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    document.getElementById('count').innerHTML += data;
                }
            });
        }
    }

    function onDetail(id) {
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
                                    <th>Tanggal Akhir</th>
                                    <th>:</th>
                                    <th>${isi['tgl_aktif']}</th>
                                </tr>
                                <tr>
                                    <th>Tanggal Berakhir</th>
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

    function searchReg() {
        var noreg = $("#noreg").val();
        document.getElementById('peserta').innerHTML = '';
        document.getElementById('count').innerHTML = '';
        document.getElementById('page').innerHTML = 1;
        if (noreg == '') {
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/getPeserteExpired/0",
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    if (data == '') {
                        document.getElementById('count').innerHTML = "0 - 0 of 0";
                    } else {
                        document.getElementById('peserta').innerHTML = '';
                        data.forEach((isi) => {
                            document.getElementById('peserta').innerHTML +=
                                `<tr>
                                    <td>${isi['noreg']}</td>
                                    <td>${isi['nopin']}</td>
                                    <td>${isi['nama']}</td>
                                    <td>${isi['tgl_reg']}</td>
                                    <td>${isi['tgl_aktif']}</td>
                                    <td>${isi['tgl_expired']}</td>
                                    <td>
                                        <center>
                                            <button onclick='onDetail("${isi['id']}")' class='btn btn-info' style='color:white;' data-toggle='modal' data-target='#largeModal'>Detail</button>
                                        </center>
                                    </td>
                                </tr>`;
                        });
                    }
                    document.getElementById('count').innerHTML = "1 - " + data.length + " of ";
                }
            });
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/countPeserteExpired",
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    document.getElementById('count').innerHTML += data;
                }
            });
        } else {
            document.getElementById('nopin').value = '';
            document.getElementById('nama').value = '';
            document.getElementById('count').page = '';
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/searchRegExpired/" + noreg,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    if (data == '') {
                        document.getElementById('peserta').innerHTML = '';
                        document.getElementById('count').innerHTML = '0 - 0 of 0';
                    } else {
                        data.forEach((isi) => {
                            document.getElementById('peserta').innerHTML +=
                                `<tr>
                                    <td>${isi['noreg']}</td>
                                    <td>${isi['nopin']}</td>
                                    <td>${isi['nama']}</td>
                                    <td>${isi['tgl_reg']}</td>
                                    <td>${isi['tgl_aktif']}</td>
                                    <td>${isi['tgl_expired']}</td>
                                    <td>
                                        <center>
                                            <button onclick='onDetail("${isi['id']}")' class='btn btn-info' style='color:white;' data-toggle='modal' data-target='#largeModal'>Detail</button>
                                        </center>
                                    </td>"
                                </tr>`;
                        });
                        document.getElementById('count').innerHTML = "1 - 1 of 1";
                    }
                }
            });

        }
    }

    function searchNama() {
        var nama = $("#nama").val();
        document.getElementById('displaypin').innerHTML = '';
        document.getElementById('page').innerHTML = 1;
        document.getElementById('count').innerHTML = '';
        if (nama == '') {
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/getPeserteExpired/0",
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    if (data == '') {
                        document.getElementById('count').innerHTML = "0 - 0 of 0";
                    } else {
                        document.getElementById('peserta').innerHTML = '';
                        data.forEach((isi) => {
                            document.getElementById('peserta').innerHTML +=
                                `<tr>
                                    <td>${isi['noreg']}</td>
                                    <td>${isi['nopin']}</td>
                                    <td>${isi['nama']}</td>
                                    <td>${isi['tgl_reg']}</td>
                                    <td>${isi['tgl_aktif']}</td>
                                    <td>${isi['tgl_expired']}</td>
                                    <td>
                                        <center>
                                            <button onclick='onDetail("${isi['id']}")' class='btn btn-info' style='color:white;' data-toggle='modal' data-target='#largeModal'>Detail</button>
                                        </center>
                                    </td>
                                </tr>`;
                        });
                    }
                    document.getElementById('count').innerHTML = "1 - " + data.length + " of ";
                }
            });
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/countPeserteExpired",
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    document.getElementById('count').innerHTML += data;
                }
            });
        } else {
            document.getElementById('nopin').value = '';
            document.getElementById('noreg').value = '';
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/searchNamaExpired/0/" + nama,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    document.getElementById('peserta').innerHTML = '';
                    if (data == '') {
                        document.getElementById('count').innerHTML = '0 - 0 of 0';
                    } else {
                        data.forEach((isi) => {
                            document.getElementById('peserta').innerHTML +=
                                `<tr>
                                    <td>${isi['noreg']}</td>
                                    <td>${isi['nopin']}</td>
                                    <td>${isi['nama']}</td>
                                    <td>${isi['tgl_reg']}</td>
                                    <td>${isi['tgl_aktif']}</td>
                                    <td>${isi['tgl_expired']}</td>
                                    <td>
                                        <center>
                                        <button onclick='onDetail("${isi['id']}")' class='btn btn-info' style='color:white;' data-toggle='modal' data-target='#largeModal'>Detail</button>
                                        </center>
                                    </td>
                                </tr>`;
                        });
                        document.getElementById('count').innerHTML = "1 - " + data.length + " of ";
                    }
                }
            });
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/countNamaExpired/" + nama,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    document.getElementById('count').innerHTML += data;
                }
            });
        }
    }

    function prevBtn() {
        var page = parseInt(document.getElementById('page').innerHTML) - 1;
        if (page < 1) {

        } else {
            document.getElementById('page').innerHTML = page;
        }
        var pageoffset = parseInt(page) - 1;
        var nopin = document.getElementById('nopin').value;
        var noreg = document.getElementById('noreg').value;
        var nama = document.getElementById('nama').value;
        if (pageoffset == '0') {
            var awal = 1;
        } else {
            var awal = parseInt(pageoffset) * 10 + 1;
        }
        if (nopin != "") {
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/searchPinExpired/" + pageoffset + "/" + nopin,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    document.getElementById('peserta').innerHTML = '';
                    data.forEach((isi) => {
                        document.getElementById('peserta').innerHTML +=
                            `<tr>
                                        <td>${isi['noreg']}</td>
                                        <td>${isi['nopin']}</td>
                                        <td>${isi['nama']}</td>
                                        <td>${isi['tgl_reg']}</td>
                                        <td>${isi['tgl_aktif']}</td>
                                        <td>${isi['tgl_expired']}</td>
                                        <td>
                                            <center>
                                                <button onclick='onDetail("${isi['id']}")' class='btn btn-info' style='color:white;' data-toggle='modal' data-target='#largeModal'>Detail</button>
                                            </center>
                                        </td>
                                    </tr>`;
                    });
                    document.getElementById('count').innerHTML = awal + " - " + (awal + parseInt(data
                        .length) - 1) + " of ";
                }
            });
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/countPinExpired/" + nopin,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    document.getElementById('count').innerHTML += data;
                }
            });
        } else
        if (noreg != "") {
            //Next Nomor Register
        } else
        if (nama != "") {
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/searchNamaExpired/" + pageoffset + "/" + nama,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    document.getElementById('peserta').innerHTML = '';
                    data.forEach((isi) => {
                        document.getElementById('peserta').innerHTML +=
                            `<tr>
                                        <td>${isi['noreg']}</td>
                                        <td>${isi['nopin']}</td>
                                        <td>${isi['nama']}</td>
                                        <td>${isi['tgl_reg']}</td>
                                        <td>${isi['tgl_aktif']}</td>
                                        <td>${isi['tgl_expired']}</td>
                                        <td>
                                            <center>
                                                <button onclick='onDetail("${isi['id']}")' class='btn btn-info' style='color:white;' data-toggle='modal' data-target='#largeModal'>Detail</button>
                                            </center>
                                        </td>
                                    </tr>`;
                    });
                    document.getElementById('count').innerHTML = awal + " - " + (awal + parseInt(data
                        .length) - 1) + " of ";
                }
            });
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/countNamaExpired/" + nama,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    document.getElementById('count').innerHTML += data;
                }
            });
        } else {
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/getPeserteExpired/" + pageoffset,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    if (data == '') {

                    } else {
                        document.getElementById('peserta').innerHTML = '';
                        data.forEach((isi) => {
                            document.getElementById('peserta').innerHTML +=
                                `<tr>
                                    <td>${isi['noreg']}</td>
                                    <td>${isi['nopin']}</td>
                                    <td>${isi['nama']}</td>
                                    <td>${isi['tgl_reg']}</td>
                                    <td>${isi['tgl_aktif']}</td>
                                    <td>${isi['tgl_expired']}</td>
                                    <td>
                                        <center>
                                            <button onclick='onDetail("${isi['id']}")' class='btn btn-info' style='color:white;' data-toggle='modal' data-target='#largeModal'>Detail</button>
                                        </center>
                                    </td>
                                </tr>`;
                        });
                    }
                    document.getElementById('count').innerHTML = awal + " - " + (awal + parseInt(data
                        .length) - 1) + " of ";
                }
            });
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/countPeserteExpired",
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    document.getElementById('count').innerHTML += data;
                }
            });
        }
    }

    function nextBtn() {
        document.getElementById('count').innerHTML = "";
        var page = parseInt(document.getElementById('page').innerHTML) + 1;
        document.getElementById('page').innerHTML = page;
        var pageoffset = parseInt(page) - 1;
        var nopin = document.getElementById('nopin').value;
        var noreg = document.getElementById('noreg').value;
        var nama = document.getElementById('nama').value;
        if (pageoffset == '0') {
            var awal = '1';
        } else
            var awal = parseInt(pageoffset) * 10 + 1;
        if (nopin != "") {
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/searchPinExpired/" + pageoffset + "/" + nopin,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    document.getElementById('peserta').innerHTML = '';
                    data.forEach((isi) => {
                        document.getElementById('peserta').innerHTML +=
                            `<tr>
                                        <td>${isi['noreg']}</td>
                                        <td>${isi['nopin']}</td>
                                        <td>${isi['nama']}</td>
                                        <td>${isi['tgl_reg']}</td>
                                        <td>${isi['tgl_aktif']}</td>
                                        <td>${isi['tgl_expired']}</td>
                                        <td>
                                            <center>
                                                <button onclick='onDetail("${isi['id']}")' class='btn btn-info' style='color:white;' data-toggle='modal' data-target='#largeModal'>Detail</button>
                                            </center>
                                        </td>
                                    </tr>`;
                    });
                    document.getElementById('count').innerHTML = awal + " - " + (awal + parseInt(data
                        .length) - 1) + " of ";
                }
            });
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/countPinExpired/" + nopin,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    document.getElementById('count').innerHTML += data;
                }
            });
        } else
        if (noreg != "") {
            //Next Nomor Register
        } else
        if (nama != "") {
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/searchNamaExpired/" + pageoffset + "/" + nama,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    document.getElementById('peserta').innerHTML = '';
                    data.forEach((isi) => {
                        document.getElementById('peserta').innerHTML +=
                            `<tr>
                                        <td>${isi['noreg']}</td>
                                        <td>${isi['nopin']}</td>
                                        <td>${isi['nama']}</td>
                                        <td>${isi['tgl_reg']}</td>
                                        <td>${isi['tgl_aktif']}</td>
                                        <td>${isi['tgl_expired']}</td>
                                        <td>
                                            <center>
                                                <button onclick='onDetail("${isi['id']}")' class='btn btn-info' style='color:white;' data-toggle='modal' data-target='#largeModal'>Detail</button>
                                            </center>
                                        </td>
                                    </tr>`;
                    });
                    document.getElementById('count').innerHTML = awal + " - " + (awal + parseInt(data
                        .length) - 1) + " of ";
                }
            });
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/countNamaExpired/" + nama,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    document.getElementById('count').innerHTML += data;
                }
            });
        } else {
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/getPeserteExpired/" + pageoffset,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    if (data == '') {

                    } else {
                        document.getElementById('peserta').innerHTML = '';
                        data.forEach((isi) => {
                            document.getElementById('peserta').innerHTML +=
                                `<tr>
                                    <td>${isi['noreg']}</td>
                                    <td>${isi['nopin']}</td>
                                    <td>${isi['nama']}</td>
                                    <td>${isi['tgl_reg']}</td>
                                    <td>${isi['tgl_aktif']}</td>
                                    <td>${isi['tgl_expired']}</td>
                                    <td>
                                        <center>
                                            <button onclick='onDetail("${isi['id']}")' class='btn btn-info' style='color:white;' data-toggle='modal' data-target='#largeModal'>Detail</button>
                                        </center>
                                    </td>
                                </tr>`;
                        });
                    }
                    document.getElementById('count').innerHTML = awal + " - " + (awal + parseInt(data
                        .length) - 1) + " of ";
                }
            });
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/countPeserteExpired",
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    document.getElementById('count').innerHTML += data;
                }
            });
        }
    }
    </script>

</body>

</html>
<!-- end document-->