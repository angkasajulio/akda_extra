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
    <title>Data Master Peserta</title>

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
            <?php echo $this->session->flashdata('msg'); ?>
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
                                    <div class="container-fluid">
                                        <div class="card">
                                            <div class="card-header bg-success">
                                                <strong class="card-title text-light">Data Master Peserta</strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-4">
                                                <div class="statistic__item" id="aktif" onclick="on('aktif')" style="background-color: rgba(0, 0, 0, 0.05);">
                                                    <h2 class="number" id="jumlahpesertaaktif">
                                                        <?php echo $jumlahpeserta ?> Orang</h2>
                                                    <span class="desc">Peserta Aktif</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="statistic__item" id="aktivasi" onclick="on('aktivasi')">
                                                    <h2 class="number" id="jumlahpesertasebulan">
                                                        <?php echo $jumlahpesertasebulan ?> Orang</h2>
                                                    <span class="desc">Peserta Aktivasi Bulan Ini</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-4">
                                                <div class="statistic__item" id="expired" onclick="on('expired')">
                                                    <h2 class="number" id="jumlahexpiredsebulan">
                                                        <?php echo $jumlahexpiredsebulan ?> Orang</h2>
                                                    <span class="desc">Peserta Yang Berakhir 1 Bulan Kedepan</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- RECENT REPORT-->

                                    <!-- END RECENT REPORT-->
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input class="au-input au-input--full au-input--h65" type="number" placeholder="Cari nomor pin" style="margin-bottom: 20px;" onkeyup="searchPin()" id="nopin">
                                    </div>
                                    <div class="col-md-4">
                                        <input class="au-input au-input--full au-input--h65" type="number" placeholder="Cari nomor register" style="margin-bottom: 20px;" onkeyup="searchNoReg()" id="noreg">
                                    </div>
                                    <div class="col-md-4">
                                        <input class="au-input au-input--full au-input--h65" type="text" placeholder="Cari nama" style="margin-bottom: 20px;" onkeyup="searchNama()" id="nama">
                                    </div>
                                </div>
                                <div class="row" style="min-height: 0px;">
                                    <div class="col-md-12">
                                        <input type="hidden" id="value" value="aktif">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <table class="table table-responsive">
                                                <thead style="background:#4272d7; color:#fff;">
                                                    <!--<tr>
                                                        <td rowspan="2"><center>NO. REG</center></th>
                                                        <td rowspan="2">>NO. PIN</th>
                                                        <td rowspan="2">NAMA</th>
                                                        <td colspan="3">Data</th>
                                                        <td style="width: 240px;" rowspan="2"><center>AKSI</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 170px;" rowspan="2">REGISTER</th>
                                                        <th style="width: 170px;" rowspan="2">AKTIF</th>
                                                        <th style="width: 170px;" rowspan="2">BERAKHIR</th>
                                                    </tr>-->
                                                    <tr>
                                                        <center>
                                                            <th rowspan="2" style="text-align:center;padding-bottom: 35px;">NOREG
                                                            </th>
                                                            <th rowspan="2" style="text-align:center;padding-bottom: 35px;">NOPIN
                                                            </th>
                                                            <th rowspan="2" style="text-align:center;padding-bottom: 35px;">NAMA
                                                            </th>
                                                            <th colspan="3" style="text-align:center;">TANGGAL</th>
                                                            <th rowspan="2" style="text-align:center;padding-bottom: 35px; width: 230px;">
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
                                                    <?php foreach ($pesertaaktif as $peserta) {
                                                        echo "<tr>";
                                                        echo "<td>" . $peserta->noreg . "</td>";
                                                        echo "<td>" . $peserta->nopin . "</td>";
                                                        echo "<td>" . $peserta->nama . "</td>";
                                                        echo "<td>" . $peserta->tgl_reg . "</td>";
                                                        echo "<td>" . $peserta->tgl_aktif . "</td>";
                                                        echo "<td>" . $peserta->tgl_expired . "</td>";
                                                        /*echo "<td>
                                                                <center>
                                                                    <a href=".base_url('dashboard/info_peserta/'.$peserta->id)." class='btn btn-info'>Detail</a>
                                                                    <a href=".base_url('dashboard/edit_peserta/'.$peserta->id)." class='btn btn-warning'>Edit</a>
                                                                </center>
                                                            </td>";*/
                                                        echo "<td>
                                                                <center>
                                                                    <button onclick='onDetail(" . $peserta->id . ")' class='btn btn-info' style='color:white;' data-toggle='modal' data-target='#largeModal'>Detail</button>
                                                                    <button onclick='onEdit(" . $peserta->id . ")' class='btn btn-warning' style='color:;' data-toggle='modal' data-target='#editModal'>Edit</button>
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
                                                    <a onclick="prevBtn()"><button type="button" class="btn btn-outline-danger btn-sm" style="width:78px;">Previous</button></a>
                                                    <button type="button" class="btn btn-outline-secondary btn-sm" id="page">1</button>
                                                    <a onclick="nextBtn()"><button type="button" class="btn btn-outline-primary btn-sm" style="width:78px;">Next</button></a>
                                                </center>
                                            </div>
                                            <div class="au-task__footer" id="btnCetak">
                                                <!--<a style="float: right;" target="framename" href=<?php echo base_url('dashboard/cetak_peserta/aktif') ?>>-->
                                                    <button class="btn btn-primary" onClick="cetakPeserta()" style="float: right;">Cetak</button>
                                                <!--</a>-->
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
                                                                        <th>Tanggal Aktivasi</th>
                                                                        <th>:</th>
                                                                        <th></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Tanggal Aktif</th>
                                                                        <th>:</th>
                                                                        <th></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Tanggal Akhir</th>
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
                                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="col-md-12">
                                                            <div class="card">
                                                                <div class="card-header bg-success">
                                                                    <strong class="card-title text-light">Edit
                                                                        Peserta</strong>
                                                                </div>
                                                            </div>
                                                            <div class="card-body card-block">
                                                                <form action="<?php echo base_url('dashboard/act_peserta_edit') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                                    <span id="editPeserta">
                                                                        <div class="row form-group">
                                                                            <div class="col col-md-3">
                                                                                <label for="text-input" class=" form-control-label">NO.
                                                                                    PIN</label>
                                                                            </div>
                                                                            <div class="col-12 col-md-9">
                                                                                <input type="number" id="nomorpin" name="nopin" placeholder="Nomor Pin" class="form-control" value="" disabled>
                                                                            </div>
                                                                            <input type="hidden" id="statusnopin" value='true'>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col col-md-3">
                                                                                <label for="text-input" class=" form-control-label">NO.
                                                                                    Register</label>
                                                                            </div>
                                                                            <div class="col-12 col-md-9">
                                                                                <input type="number" id="nomorreg" name="noreg" placeholder="Nomor Register" class="form-control" value="" disabled>
                                                                            </div>
                                                                            <input type="hidden" id="statusnoreg" value='true'>
                                                                        </div>
                                                                        <div class="alert alert-danger" role="alert" style="display:none;" id="alertnonik">
                                                                            Nomor Identitas Tidak Boleh Kosong
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col col-md-3">
                                                                                <label for="text-input" class=" form-control-label">NO.IDENTITAS</label>
                                                                            </div>
                                                                            <div class="col-12 col-md-9">
                                                                                <input type="number" id="nonik" name="nonik" placeholder="KTP/SIM/KARTU PELAJAR/PASPOR/NRP" class="form-control" onkeyup="cekNik()" value="">
                                                                                <input type="hidden" name="id_peserta" value="" id="id_peserta">
                                                                                <input type="hidden" name="statusPeserta" value="" id="status_peserta">
                                                                                <input type="hidden" name="noregPeserta" value="" id="noreg_peserta">
                                                                                <input type="hidden" name="nopinPeserta" value="" id="nopin_peserta">
                                                                                <input type="hidden" name="namaPeserta" value="" id="nama_peserta">
                                                                                <input type="hidden" name="pagePeserta" value="" id="page_peserta">
                                                                            </div>
                                                                            <input type="hidden" id="statusnonik" value='true'>
                                                                        </div>
                                                                        <div class="alert alert-danger" role="alert" style="display:none;" id="alertnama">
                                                                            Nama hanya diisi dengan huruf
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col col-md-3">
                                                                                <label for="text-input" class=" form-control-label">NAMA</label>
                                                                            </div>
                                                                            <div class="col-12 col-md-9">
                                                                                <input type="text" id="namaedit" name="nama" placeholder="Nama" class="form-control" onkeyup="cekNama()" value="">
                                                                            </div>
                                                                            <input type="hidden" id="statusnama" value='true'>
                                                                        </div>
                                                                        <div class="alert alert-danger" role="alert" style="display:none;" id="alertalamat">
                                                                            Alamat tidak boleh kosong!
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col col-md-3">
                                                                                <label for="text-input" class=" form-control-label">ALAMAT</label>
                                                                            </div>
                                                                            <div class="col-12 col-md-9">
                                                                                <textarea name="alamat" id="alamat" rows="9" placeholder="Alamat..." class="form-control" onkeyup="cekAlamat()"></textarea>
                                                                            </div>
                                                                            <input type="hidden" id="statusalamat" value='true'>
                                                                        </div>
                                                                        <div class="alert alert-danger" role="alert" style="display:none;" id="alerttgllahir">
                                                                            Tanggal lahir tidak boleh kosong!
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col col-md-3">
                                                                                <label for="text-input" class=" form-control-label">TANGGAL
                                                                                    LAHIR</label>
                                                                            </div>
                                                                            <div class="col-12 col-md-9">
                                                                                <input type="date" id="tgllahir" name="tanggallahir" placeholder="Tanggal Lahir" class="form-control" onchange="cekTglLahir()" value="">
                                                                            </div>
                                                                            <input type="hidden" id="statustgllahir" value='true'>
                                                                        </div>
                                                                        <div class="alert alert-danger" role="alert" style="display:none;" id="alertnotelp">
                                                                            Nomor Telpon tidak boleh kosong!
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col col-md-3">
                                                                                <label for="text-input" class=" form-control-label">NO.
                                                                                    TELPON</label>
                                                                            </div>
                                                                            <div class="col-12 col-md-9">
                                                                                <input type="number" id="notelp" name="notelp" placeholder="Nomor Telpon" class="form-control" onkeyup="cekNoTelp()" value="0">
                                                                            </div>
                                                                            <input type="hidden" id="statusnotelp" value='true'>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col col-md-3">
                                                                                <label for="text-input" class=" form-control-label">TANGGAL
                                                                                    AKTIVASI</label>
                                                                            </div>
                                                                            <div class="col-12 col-md-9">
                                                                                <input type="date" id="tglregister" name="tglregister" placeholder="Tanggal Register" class="form-control" value="" disabled>
                                                                            </div>
                                                                            <input type="hidden" id="statustglregister" value='true'>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col col-md-3">
                                                                                <label for="text-input" class=" form-control-label">TANGGAL
                                                                                    AKTIF</label>
                                                                            </div>
                                                                            <div class="col-12 col-md-9">
                                                                                <input type="date" id="tglaktif" name="tglaktif" placeholder="tanggal expired" class="form-control" value="" disabled>
                                                                            </div>
                                                                            <input type="hidden" id="statustglaktif" value='true'>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col col-md-3">
                                                                                <label for="text-input" class=" form-control-label">TANGGAL
                                                                                    AKHIR</label>
                                                                            </div>
                                                                            <div class="col-12 col-md-9">
                                                                                <input type="date" id="tglexpired" name="tglexpired" placeholder="Tanggal Expired" class="form-control" value="" disabled>
                                                                            </div>
                                                                            <input type="hidden" id="statustglexpired" value='true'>
                                                                        </div>
                                                                    </span>
                                                                    <div class="card-footer">
                                                                        <button type="submit" class="btn btn-primary btn-sm" id='btnSubmit'>
                                                                            <i class="fa fa-dot-circle-o"></i> Save
                                                                        </button>
                                                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Kembali</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
        var statuspeserta = '<?php echo $this->session->flashdata('status_peserta') ?>';
        var nopin = '<?php echo $this->session->flashdata('nopin_peserta') ?>';
        var noreg = '<?php echo $this->session->flashdata('noreg_peserta') ?>';
        var nama = '<?php echo $this->session->flashdata('nama_peserta') ?>';
        var page = '<?php echo $this->session->flashdata('page_peserta') ?>';
        document.getElementById('value').value = statuspeserta;
        document.getElementById('aktif').style.background = "";
        document.getElementById('aktivasi').style.background = "";
        document.getElementById('expired').style.background = "";
        console.log(statuspeserta);
        console.log(nopin);
        console.log(noreg);
        console.log(nama);
        console.log(page);
        if (page == '') {
            page = 1;
            var awal = 1;
        } else {
            var awal = (parseInt(page)-1) * 10 + 1;
        }

        if (status != '') {
            window.location.replace(url);
        }

        if (statuspeserta == 'aktivasi') {
            document.getElementById('aktivasi').style.background = "rgba(0, 0, 0, 0.05)";
            var jumlah = document.getElementById('jumlahpesertasebulan').innerHTML;
        } else
        if (statuspeserta == 'expired') {
            document.getElementById('expired').style.background = "rgba(0, 0, 0, 0.05)";
            var jumlah = document.getElementById('jumlahexpiredsebulan').innerHTML;
        } else {
            document.getElementById('aktif').style.background = "rgba(0, 0, 0, 0.05)";
            var jumlah = document.getElementById('jumlahpesertaaktif').innerHTML;
            document.getElementById('value').value = 'aktif';
        }

        if (nopin != "") {
            document.getElementById('nopin').value = nopin;
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/searchPinAktif/" + (parseInt(page)-1) + "/" + nopin + "/" + statuspeserta,
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
                                                <button onclick='onEdit("${isi['id']}")' class='btn btn-warning' style='color:;' data-toggle='modal' data-target='#editModal'>Edit</button>
                                            </center>
                                        </td>
                                    </tr>`;
                    });
                    document.getElementById('count').innerHTML = awal + " - " + (awal + parseInt(data.length) -
                        1) + " of ";
                }
            });
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/countPinAktif/" + nopin + "/" + statuspeserta,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    document.getElementById('count').innerHTML += data;
                }
            });
        } else
        if (noreg != "") {
            document.getElementById('noreg').value = noreg;
            document.getElementById('peserta').innerHTML = '';
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/searchNoRegAktif/" + noreg + "/" + statuspeserta,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    if (data == '') {
                        document.getElementById('count').innerHTML = "0 - 0 of 0";
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
                                                    <button onclick='onEdit("${isi['id']}")' class='btn btn-warning' style='color:;' data-toggle='modal' data-target='#editModal'>Edit</button>
                                                </center>
                                            </td>
                                        </tr>`;
                        });
                        document.getElementById('count').innerHTML = "1 - 1 of 1";
                    }
                }
            });
        } else
        if (nama != "") {
            document.getElementById('nama').value = nama;
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/searchNamaAktif/" + (parseInt(page)-1) + "/" + nama + "/" + statuspeserta,
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
                                                <button onclick='onEdit("${isi['id']}")' class='btn btn-warning' style='color:;' data-toggle='modal' data-target='#editModal'>Edit</button>
                                            </center>
                                        </td>
                                    </tr>`;
                    });
                    document.getElementById('count').innerHTML = awal + " - " + (awal + parseInt(data
                        .length) - 1) + " of ";
                }
            });
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/countNamaAktif/" + nama + "/" + statuspeserta,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    document.getElementById('count').innerHTML += data;
                }
            });
        } else {
            $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/getPesertaByStatus/" + (parseInt(page)-1) + "/" + statuspeserta,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
                        if (data == '') {

                        } else {
                            document.getElementById('peserta').innerHTML = '';
                            document.getElementById('aktif').style.background = '';
                            document.getElementById('aktivasi').style.background = '';
                            document.getElementById('expired').style.background = '';
                            document.getElementById(statuspeserta).style.background = "rgba(0, 0, 0, 0.05)";
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
                                            <button onclick='onEdit("${isi['id']}")' class='btn btn-warning' style='color:;' data-toggle='modal' data-target='#editModal'>Edit</button>
                                        </center>
                                    </td>
                                </tr>`;
                            });
                        }
                        document.getElementById('count').innerHTML = awal + " - " + (awal + parseInt(data
                            .length) - 1) + " of " + jumlah.replace('Orang', '');
                    }
                });
        }

        document.getElementById('page').innerHTML = page;

        function on(status) {
            document.getElementById("value").value = status;
            var statusfix = document.getElementById("value").value;
            document.getElementById("page").innerHTML = "1";
            document.getElementById('noreg').value = '';
            document.getElementById('nopin').value = '';
            document.getElementById('nama').value = '';
            if (status == 'aktif') {
                var jumlah = document.getElementById('jumlahpesertaaktif').innerHTML;
            } else
            if (status == 'aktivasi') {
                var jumlah = document.getElementById('jumlahpesertasebulan').innerHTML;
            } else
            if (status == 'expired') {
                var jumlah = document.getElementById('jumlahexpiredsebulan').innerHTML;
            }
            console.log(statusfix);
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/getPesertaByStatus/0/" + statusfix,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    if (data == '') {

                    } else {
                        document.getElementById('peserta').innerHTML = '';
                        document.getElementById('aktif').style.background = '';
                        document.getElementById('aktivasi').style.background = '';
                        document.getElementById('expired').style.background = '';
                        document.getElementById(statusfix).style.background = "rgba(0, 0, 0, 0.05)";
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
                                            <button onclick='onEdit("${isi['id']}")' class='btn btn-warning' style='color:;' data-toggle='modal' data-target='#editModal'>Edit</button>
                                        </center>
                                    </td>
                                </tr>`;
                        });
                    }
                    document.getElementById('count').innerHTML = "1 - " + data.length + " of " + jumlah.replace(
                        "Orang", '');
                }
            });
        }

        function onEdit(id) {
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
                            document.getElementById('id_peserta').value = isi['id'];
                            document.getElementById('nomorpin').value = isi['nopin'];
                            document.getElementById('nomorreg').value = isi['noreg'];
                            document.getElementById('nonik').value = isi['no_ktp'];
                            document.getElementById('namaedit').value = isi['nama'];
                            document.getElementById('alamat').innerHTML = isi['alamat'];
                            document.getElementById('tgllahir').value = isi['tgllahir'];
                            document.getElementById('notelp').value = isi['no_tlp'];
                            document.getElementById('tglregister').value = isi['tgl_reg'];
                            document.getElementById('tglaktif').value = isi['tgl_aktif'];
                            document.getElementById('tglexpired').value = isi['tgl_expired'];

                            document.getElementById('status_peserta').value = document.getElementById(
                                'value').value;
                            document.getElementById('nopin_peserta').value = document.getElementById(
                                'nopin').value;
                            document.getElementById('noreg_peserta').value = document.getElementById(
                                'noreg').value;
                            document.getElementById('nama_peserta').value = document.getElementById(
                                'nama').value;
                            document.getElementById('page_peserta').value = document.getElementById(
                                'page').innerHTML;
                        });
                    }
                }
            });
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
            var status = $("#value").val();
            document.getElementById('peserta').innerHTML = '';
            document.getElementById("noreg").value = '';
            document.getElementById("nama").value = '';
            document.getElementById("page").innerHTML = '1';
            if (status == 'aktif') {
                var jumlah = document.getElementById('jumlahpesertaaktif').innerHTML;
            } else
            if (status == 'aktivasi') {
                var jumlah = document.getElementById('jumlahpesertasebulan').innerHTML;
            } else
            if (status == 'expired') {
                var jumlah = document.getElementById('jumlahexpiredsebulan').innerHTML;
            }
            if (nopin == '') {
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/getPesertaByStatus/0/" + status,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
                        if (data == '') {

                        } else {
                            document.getElementById('peserta').innerHTML = '';
                            document.getElementById('aktif').style.background = '';
                            document.getElementById('aktivasi').style.background = '';
                            document.getElementById('expired').style.background = '';
                            document.getElementById(status).style.background = "rgba(0, 0, 0, 0.05)";
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
                                            <button onclick='onEdit("${isi['id']}")' class='btn btn-warning' style='color:;' data-toggle='modal' data-target='#editModal'>Edit</button>
                                        </center>
                                    </td>
                                </tr>`;
                            });
                            document.getElementById('count').innerHTML = "1 - " + data.length + " of " + jumlah;
                        }
                    }
                });
            } else {
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/searchPinAktif/0/" + nopin + "/" + status,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
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
                                                <button onclick='onEdit("${isi['id']}")' class='btn btn-warning' style='color:;' data-toggle='modal' data-target='#editModal'>Edit</button>
                                            </center>
                                        </td>
                                    </tr>`;
                        });
                        document.getElementById('count').innerHTML = "1 - " + data.length + " of ";
                    }
                });
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/countPinAktif/" + nopin + "/" + status,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        document.getElementById('count').innerHTML += data;
                    }
                });
            }
        }

        function searchNoReg() {
            var noreg = $("#noreg").val();
            var status = $("#value").val();
            document.getElementById('peserta').innerHTML = '';
            document.getElementById("nopin").value = '';
            document.getElementById("nama").value = '';
            document.getElementById('page').innerHTML = '1';
            if (status == 'aktif') {
                var jumlah = document.getElementById('jumlahpesertaaktif').innerHTML;
            } else
            if (status == 'aktivasi') {
                var jumlah = document.getElementById('jumlahpesertasebulan').innerHTML;
            } else
            if (status == 'expired') {
                var jumlah = document.getElementById('jumlahexpiredsebulan').innerHTML;
            }
            if (noreg == '') {
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/getPesertaByStatus/0/" + status,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
                        if (data == '') {

                        } else {
                            document.getElementById('peserta').innerHTML = '';
                            document.getElementById('aktif').style.background = '';
                            document.getElementById('aktivasi').style.background = '';
                            document.getElementById('expired').style.background = '';
                            document.getElementById(status).style.background = "rgba(0, 0, 0, 0.05)";
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
                                            <button onclick='onEdit("${isi['id']}")' class='btn btn-warning' style='color:;' data-toggle='modal' data-target='#editModal'>Edit</button>
                                        </center>
                                    </td>
                                </tr>`;
                            });
                            document.getElementById('count').innerHTML = "1 - " + data.length + " of " + jumlah;
                        }
                    }
                });
            } else {
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/searchNoRegAktif/" + noreg + "/" + status,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
                        if (data == '') {
                            document.getElementById('count').innerHTML = "0 - 0 of 0";
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
                                            <button onclick='onEdit("${isi['id']}")' class='btn btn-warning' style='color:;' data-toggle='modal' data-target='#editModal'>Edit</button>
                                        </center>
                                    </td>
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
            var status = $("#value").val();
            document.getElementById('peserta').innerHTML = '';
            document.getElementById("noreg").value = '';
            document.getElementById("nopin").value = '';
            document.getElementById("page").innerHTML = '1';
            if (status == 'aktif') {
                var jumlah = document.getElementById('jumlahpesertaaktif').innerHTML;
            } else
            if (status == 'aktivasi') {
                var jumlah = document.getElementById('jumlahpesertasebulan').innerHTML;
            } else
            if (status == 'expired') {
                var jumlah = document.getElementById('jumlahexpiredsebulan').innerHTML;
            }
            if (nama == '') {
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/getPesertaByStatus/0/" + status,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
                        if (data == '') {

                        } else {
                            document.getElementById('peserta').innerHTML = '';
                            document.getElementById('aktif').style.background = '';
                            document.getElementById('aktivasi').style.background = '';
                            document.getElementById('expired').style.background = '';
                            document.getElementById(status).style.background = "rgba(0, 0, 0, 0.05)";
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
                                            <button onclick='onEdit("${isi['id']}")' class='btn btn-warning' style='color:;' data-toggle='modal' data-target='#editModal'>Edit</button>
                                        </center>
                                    </td>
                                </tr>`;
                            });
                        }
                        document.getElementById('count').innerHTML = "1 - " + data.length + " of " + jumlah;
                    }
                });
            } else {
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/searchNamaAktif/0/" + nama + "/" + status,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
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
                                                <button onclick='onEdit("${isi['id']}")' class='btn btn-warning' style='color:;' data-toggle='modal' data-target='#editModal'>Edit</button>
                                            </center>
                                        </td>
                                    </tr>`;
                        });
                        document.getElementById('count').innerHTML = "1 - " + data.length + " of ";
                    }
                });

                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/countNamaAktif/" + nama + "/" + status,
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
            var page = parseInt(document.getElementById('page').innerHTML) + 1;
            document.getElementById('page').innerHTML = page;
            var status = document.getElementById('value').value;
            var pageoffset = parseInt(page) - 1;
            var nopin = document.getElementById('nopin').value;
            var noreg = document.getElementById('noreg').value;
            var nama = document.getElementById('nama').value;
            if (status == 'aktif') {
                var jumlah = document.getElementById('jumlahpesertaaktif').innerHTML;
            } else
            if (status == 'aktivasi') {
                var jumlah = document.getElementById('jumlahpesertasebulan').innerHTML;
            } else
            if (status == 'expired') {
                var jumlah = document.getElementById('jumlahexpiredsebulan').innerHTML;
            }
            if (pageoffset == '0') {
                var awal = '1';
            } else
                var awal = parseInt(pageoffset) * 10 + 1;
            if (nopin != "") {
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/searchPinAktif/" + pageoffset + "/" + nopin + "/" +
                        status,
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
                                                <button onclick='onEdit("${isi['id']}")' class='btn btn-warning' style='color:;' data-toggle='modal' data-target='#editModal'>Edit</button>
                                            </center>
                                        </td>
                                    </tr>`;
                        });
                        document.getElementById('count').innerHTML = awal + " - " + (awal + parseInt(data
                            .length) - 1) + " of ";
                    }
                });
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/countPinAktif/" + nopin + "/" + status,
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
                    url: "<?php echo base_url(); ?>dashboard/searchNamaAktif/" + pageoffset + "/" + nama + "/" + status,
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
                                                <button onclick='onEdit("${isi['id']}")' class='btn btn-warning' style='color:;' data-toggle='modal' data-target='#editModal'>Edit</button>
                                            </center>
                                        </td>
                                    </tr>`;
                        });
                        document.getElementById('count').innerHTML = awal + " - " + (awal + parseInt(data
                            .length) - 1) + " of ";
                    }
                });
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/countNamaAktif/" + nama + "/" + status,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        document.getElementById('count').innerHTML += data;
                    }
                });
            } else {
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/getPesertaByStatus/" + pageoffset + "/" + status,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
                        if (data == '') {

                        } else {
                            document.getElementById('peserta').innerHTML = '';
                            document.getElementById('aktif').style.background = '';
                            document.getElementById('aktivasi').style.background = '';
                            document.getElementById('expired').style.background = '';
                            document.getElementById(status).style.background = "rgba(0, 0, 0, 0.05)";
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
                                            <button onclick='onEdit("${isi['id']}")' class='btn btn-warning' style='color:;' data-toggle='modal' data-target='#editModal'>Edit</button>
                                        </center>
                                    </td>
                                </tr>`;
                            });
                        }
                        document.getElementById('count').innerHTML = awal + " - " + (awal + parseInt(data
                            .length) - 1) + " of " + jumlah.replace('Orang', '');
                    }
                });
            }
        }

        function prevBtn() {
            var page = parseInt(document.getElementById('page').innerHTML) - 1;
            if (page < 1) {

            } else
                document.getElementById('page').innerHTML = page;
            var status = document.getElementById('value').value;
            var pageoffset = parseInt(page) - 1;
            var nopin = document.getElementById('nopin').value;
            var noreg = document.getElementById('noreg').value;
            var nama = document.getElementById('nama').value;
            if (status == 'aktif') {
                var jumlah = document.getElementById('jumlahpesertaaktif').innerHTML;
            } else
            if (status == 'aktivasi') {
                var jumlah = document.getElementById('jumlahpesertasebulan').innerHTML;
            } else
            if (status == 'expired') {
                var jumlah = document.getElementById('jumlahexpiredsebulan').innerHTML;
            }
            if (pageoffset == '0') {
                var awal = 1;
            } else
                var awal = parseInt(pageoffset) * 10 + 1;
            if (nopin != "") {
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/searchPinAktif/" + pageoffset + "/" + nopin + "/" +
                        status,
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
                                                <button onclick='onEdit("${isi['id']}")' class='btn btn-warning' style='color:;' data-toggle='modal' data-target='#editModal'>Edit</button>
                                            </center>
                                        </td>
                                    </tr>`;
                        });
                        document.getElementById('count').innerHTML = awal + " - " + (awal + parseInt(data
                            .length) - 1) + " of ";
                    }
                });
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/countPinAktif/" + nopin + "/" + status,
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
                    url: "<?php echo base_url(); ?>dashboard/searchNamaAktif/" + pageoffset + "/" + nama + "/" +
                        status,
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
                                                <button onclick='onEdit("${isi['id']}")' class='btn btn-warning' style='color:;' data-toggle='modal' data-target='#editModal'>Edit</button>
                                            </center>
                                        </td>
                                    </tr>`;
                        });
                        document.getElementById('count').innerHTML = awal + " - " + (awal + parseInt(data
                            .length) - 1) + " of ";
                    }
                });
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/countNamaAktif/" + nama + "/" + status,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        document.getElementById('count').innerHTML += data;
                    }
                });
            } else {
                $.ajax({
                    url: "<?php echo base_url(); ?>dashboard/getPesertaByStatus/" + pageoffset + "/" + status,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
                        if (data == '') {

                        } else {
                            document.getElementById('peserta').innerHTML = '';
                            document.getElementById('aktif').style.background = '';
                            document.getElementById('aktivasi').style.background = '';
                            document.getElementById('expired').style.background = '';
                            document.getElementById(status).style.background = "rgba(0, 0, 0, 0.05)";
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
                                            <button onclick='onEdit("${isi['id']}")' class='btn btn-warning' style='color:;' data-toggle='modal' data-target='#editModal'>Edit</button>
                                        </center>
                                    </td>
                                </tr>`;
                            });
                        }
                        document.getElementById('count').innerHTML = awal + " - " + (awal + parseInt(data
                            .length) - 1) + " of " + jumlah.replace('Orang', '');
                    }
                });
            }
        }
        function cetakPeserta(){
            var status = document.getElementById('value').value;
            var url = "<?php echo base_url('dashboard/cetak_peserta')?>/"+status;
            window.open(url,'_blank');
        }
    </script>

</body>

</html>
<!-- end document-->