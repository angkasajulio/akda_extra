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
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url("css/font-face.css") ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url ('vendor/font-awesome-4.7/css/font-awesome.min.css')?>" rel="stylesheet"
        media="all">
    <link href="<?php echo base_url ('vendor/font-awesome-5/css/fontawesome-all.min.css')?>" rel="stylesheet"
        media="all">
    <link href="<?php echo base_url ("vendor/mdi-font/css/material-design-iconic-font.min.css")?>" rel="stylesheet"
        media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url ("vendor/bootstrap-4.1/bootstrap.min.css")?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url ("vendor/animsition/animsition.min.css")?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url ("vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css")?>"
        rel="stylesheet" media="all">
    <link href="<?php echo base_url ("vendor/wow/animate.css")?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url ("vendor/css-hamburgers/hamburgers.min.css")?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url ("vendor/slick/slick.css")?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url ("vendor/select2/select2.min.css")?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url ("vendor/perfect-scrollbar/perfect-scrollbar.css")?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url ("css/theme.css")?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <?php include('headerbayangan.php') ?>
        <!-- PAGE CONTENT-->
        <div class="page-container3">
            <?php echo $this->session->flashdata('msg'); ?>
            <section style="padding-top: 25px;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <?php include 'sidebarklaim.php' ?>
                        </div>
                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header bg-success">
                                                <strong class="card-title text-light">Registrasi Klaim</strong>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <button class="nav-link active" id="umumTab" data-toggle="pill"
                                                        href="#pills-umum" role="tab" aria-controls="pills-umum"
                                                        aria-selected="true" onclick="kendoTab('umum')">Informasi
                                                        Umum</button>
                                                </li>
                                                <li class="nav-item">
                                                    <button class="nav-link" id="klaimTab" data-toggle="pill"
                                                        href="#pills-klaim" role="tab" aria-controls="pills-klaim"
                                                        aria-selected="false" onclick="kendoTab('klaim')"
                                                        disabled>Klaim</button>
                                                </li>
                                                <li class="nav-item">
                                                    <button class="nav-link" id="dokumenTab" data-toggle="pill"
                                                        href="#pills-dokumen" role="tab" aria-controls="pills-dokumen"
                                                        aria-selected="false" onclick="kendoTab('dokumen')"
                                                        disabled>Dokumen
                                                        Klaim</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body card-block">
                                            <form
                                                action="<?php if(empty($id)){echo base_url('dashboard/act_registrasi_klaim');}else{echo base_url('dashboard/act_update_klaim/'.$id);} ?>"
                                                method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <!--Untuk Input Data Master-->
                                                <span id="masterKlaim" style="display: ;">
                                                    <div class="alert alert-danger" role="alert" style="display:none;"
                                                        id="alertnoreg">
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-md-3">
                                                            <label for="text-input" class=" form-control-label">Nomor
                                                                Register</label>
                                                        </div>
                                                        <div class="col col-md-3">
                                                            <input type="number" id="nomorreg" name="noreg"
                                                                placeholder="NOREG" class="form-control" value=""
                                                                onkeyup="getPesertaNoreg()">
                                                            <input type="hidden" id="statusnoreg" value='false'>
                                                        </div>
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Nomor
                                                                PIN</label>
                                                        </div>
                                                        <div class="col col-md-3">
                                                            <input type="number" id="nomorpin" name="nopin"
                                                                placeholder="NOPIN" class="form-control" value=""
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input"
                                                                class=" form-control-label">Nama</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="nama" name="nama"
                                                                placeholder="Nama Peserta" class="form-control"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Tanggal
                                                                Aktivasi Peserta</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="date" id="tgl_registrasi_peserta"
                                                                name="tgl_registrasi_peserta" placeholder="Nama"
                                                                class="form-control" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input"
                                                                class=" form-control-label">ALAMAT</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea name="alamat" id="alamat" rows="9"
                                                                placeholder="Alamat..." class="form-control"
                                                                disabled></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="alert alert-danger" role="alert" style="display:none;"
                                                        id="alerttglkejadian">
                                                        Tanggal Kejadian tidak boleh kosong!
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Tanggal
                                                                Kejadian</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="date" id="tglkejadian" name="tglkejadian"
                                                                placeholder="Tanggal Kejadian" class="form-control"
                                                                onchange="cekTglKejadian()">
                                                        </div>
                                                        <input type="hidden" id="statustglkejadian" value='false'>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Tanggal
                                                                Lapor</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="date" id="tgllapor" name="tgllapor"
                                                                placeholder="Tanggal Kejadian" class="form-control"
                                                                onchange="cekTglKejadian()">
                                                        </div>
                                                        <input type="hidden" id="statustglkejadian" value='false'>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Tanggal
                                                                Registrasi Klaim</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="date" value="<?php echo date('Y-m-d');?>"
                                                                id="tgl_registrasi_klaim" name="tgl_registrasi"
                                                                placeholder="Nama" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input"
                                                                class=" form-control-label">Pelapor</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="pelapor" name="pelapor"
                                                                placeholder="Pelapor" class="form-control" value="">
                                                        </div>
                                                        <input type="hidden" id="statustglregister" value='true'>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Penyebab
                                                                Klaim</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <select name="penyebab_klaim" id="penyebab_klaim"
                                                                class="form-control" placeholer="Status Rekanan">
                                                                <?php
                                                                    foreach ($penyebab_klaim as $penyebab_klaim) {
                                                                        echo "<option value='".$penyebab_klaim->no_lookup."'>".$penyebab_klaim->nm_detail_lookup."</option>";
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <input type="hidden" id="statusnotelp" value='true'>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Lokasi
                                                                Kejadian</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="lokasi_kejadian"
                                                                name="lokasi_kejadian" placeholder="Lokasi Kejadian"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input"
                                                                class=" form-control-label">Keterangan
                                                                Klaim</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea name="keterangan_klaim" id="keterangan_klaim"
                                                                rows="9" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm"
                                                            id='btnSubmit' onclick="on()">
                                                            <i class="fa fa-dot-circle-o"></i> Save
                                                        </button>
                                                    </div>
                                                </span>
                                            </form>
                                            <!--Untuk mengisi detail klaim dan jumlahnya-->
                                            <form
                                                action="<?php echo base_url('dashboard/act_registrasi_nilai_klaim/'.$kd_cb.'/'.$kd_thn.'/'.$id)?>"
                                                method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <span id="detailJenisPertanggungan" style="display: none;" ;>
                                                    <div class="row form-group">
                                                        <div class="col col-md-12">
                                                            <strong> Plafond dan Riwayat Klaim</strong>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-12">
                                                            <table class="table table-borderless table-data3">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Jenis Klaim</th>
                                                                        <th>Plafond</th>
                                                                        <th>Riwayat Klaim</th>
                                                                        <th>Saldo</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="riwayat_klaim">

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <span id="pengajuan_klaim" style="display: none;">
                                                        <div class="row form-group">
                                                            <div class="col col-md-12">
                                                                <strong>Klaim Yang Diajukan</strong>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-12">
                                                                <table class="table table-borderless table-data3">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No.</th>
                                                                            <th>Jenis Klaim</th>
                                                                            <th>Nilai Klaim</th>
                                                                            <th>Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="klaim_pengajuan">

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </span>
                                                    <div class="row form-group">
                                                        <div class="col col-md-12">
                                                            <strong>Klaim</strong>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Jenis
                                                                Klaim </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <select name="jenis_klaim" id="jenis_klaim"
                                                                class="form-control" placeholer="Status Rekanan">
                                                                <?php
                                                                    foreach ($jenis_klaim as $jenis_klaim) {
                                                                        echo "<option value='".$jenis_klaim->no_lookup."'>".$jenis_klaim->nm_detail_lookup."</option>";
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="number" id="nilai_klaim_utama"
                                                                name="nilai_klaim_utama" placeholder="Nilai Klaim"
                                                                class="form-control" value="">
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm"
                                                            id='btnSubmit' onclick="on()">
                                                            <i class="fa fa-dot-circle-o"></i> Save
                                                        </button>
                                                    </div>
                                                </span>
                                            </form>
                                            <!--Untuk Block Dokumen Klaim-->
                                            <form
                                                action="<?php echo base_url('dashboard/act_registrasi_dokumen_klaim/'.$kd_cb.'/'.$kd_thn.'/'.$id)?>"
                                                method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <span id="dokumenKlaim" style="display: none;">
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <strong>Dokumen Klaim</strong>
                                                        </div>
                                                    </div>
                                                    <span id="dokumen_klaim">

                                                    </span>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Memenuhi
                                                                Syarat?</label>
                                                        </div>
                                                        <div class="col col-md-4">

                                                        </div>
                                                        <div class="col-md-5">
                                                            <select id="persyaratan" class="form-control"
                                                                placeholer="Status Rekanan"
                                                                onchange="autoAnalisis(<?php echo $id?>)">
                                                                <option value="ya">Ya</option>
                                                                <option value="tidak">Tidak</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Analisa
                                                                Klaim</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea name="analisa_klaim" id="analisa_klaim" rows="9"
                                                                class="form-control"></textarea>
                                                        </div>

                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm"
                                                            id='btnSubmit' onclick="on()">
                                                            <i class="fa fa-dot-circle-o"></i> Save
                                                        </button>
                                                    </div>
                                                </span>
                                            </form>
                                            <div class="card-footer">
                                                <button class="btn btn-danger btn-sm" id='btnPrev' onclick="prevPage()">
                                                    <font color="white"><i class="fa fa-dot-circle-o"></i> Previous
                                                    </font>
                                                </button>
                                                <button class="btn btn-primary btn-sm" id='btnNext' onclick="nextPage()"
                                                    disabled>
                                                    <font color="white">Next <i class="fa fa-dot-circle-o"></i>
                                                    </font>
                                                </button>
                                            </div>
                                            <div class="card-footer">
                                                <a href="<?php echo base_url ('dashboard/klaim')?>"
                                                    class="btn btn-success btn-sm">
                                                    Selesai
                                                </a>
                                            </div>
                                            <!--</form>-->
                                        </div>
                                        <!-- RECENT REPORT-->

                                        <!-- END RECENT REPORT-->
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
        <!-- Block Modals-->
        <div class="modal fade" id="processModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-success">
                                    <strong class="card-title text-light">Keterangan Proses</strong>
                                </div>
                            </div>
                            <form action="<?php echo base_url('dashboard/act_proses_klaim') ?>" method="post"
                                enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">KETERANGAN</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="keterangan" id="keterangan" rows="9"
                                            placeholder="Keterangan Tambahan" class="form-control"></textarea>
                                        <input type="hidden" name="no_kl" id="no_kl">
                                        <input type="hidden" name="kd_cb" id="kd_cb">
                                        <input type="hidden" name="kd_thn" id="kd_thn">
                                        <input type="hidden" name="kd_user" id="kd_user">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success btn-sm">
                                        Process
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer" id="detailfooter">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT  -->

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url ("vendor/jquery-3.2.1.min.js")?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url ("vendor/bootstrap-4.1/popper.min.js")?>"></script>
    <script src="<?php echo base_url ("vendor/bootstrap-4.1/bootstrap.min.js")?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url ("vendor/slick/slick.min.js")?>">
    </script>
    <script src="<?php echo base_url ("vendor/wow/wow.min.js")?>"></script>
    <script src="<?php echo base_url ("vendor/animsition/animsition.min.js")?>"></script>
    <script src="<?php echo base_url ("vendor/bootstrap-progressbar/bootstrap-progressbar.min.js")?>">
    </script>
    <script src="<?php echo base_url ("vendor/counter-up/jquery.waypoints.min.js")?>"></script>
    <script src="<?php echo base_url ("vendor/counter-up/jquery.counterup.min.js")?>">
    </script>
    <script src="<?php echo base_url ("vendor/circle-progress/circle-progress.min.js")?>"></script>
    <script src="<?php echo base_url ("vendor/perfect-scrollbar/perfect-scrollbar.js")?>"></script>
    <script src="<?php echo base_url ("vendor/chartjs/Chart.bundle.min.js")?>"></script>
    <script src="<?php echo base_url ("vendor/select2/select2.min.js")?>">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url ("js/main.js")?>"></script>
    <script>
    var status = '<?php echo $this->session->flashdata('status')?>';
    var url = '<?php echo $this->session->flashdata('url')?>';
    if (status != '') {
        window.location.replace(url);
    }

    var statusklaim = "<?php echo $klaimstatus?>";
    var id = "<?php echo $id?>";
    var kd_cb = "<?php echo $kd_cb?>";
    var kd_thn = "<?php echo $kd_thn?>";

    if (statusklaim == "") {
        document.getElementById('masterKlaim').style.display = "";
        document.getElementById('detailJenisPertanggungan').style.display = "none";
        document.getElementById('dokumenKlaim').style.display = "none";
        document.getElementById('btnPrev').disabled = true;
        document.getElementById('btnNext').disabled = false;
    } else
    if (statusklaim == "klaim") {
        document.getElementById('masterKlaim').style.display = "none";
        document.getElementById('detailJenisPertanggungan').style.display = "";
        document.getElementById('dokumenKlaim').style.display = "none";
        document.getElementById('btnPrev').disabled = false;
        document.getElementById('btnNext').disabled = false;
        document.getElementById('klaimTab').className = "nav-link active";
        document.getElementById('umumTab').className = "nav-link";
        document.getElementById('dokumenTab').className = "nav-link";
    } else
    if (statusklaim == "dokumen") {
        document.getElementById('masterKlaim').style.display = "none";
        document.getElementById('detailJenisPertanggungan').style.display = "none";
        document.getElementById('dokumenKlaim').style.display = "";
        document.getElementById('btnPrev').disabled = false;
        document.getElementById('btnNext').disabled = true;
        document.getElementById('klaimTab').className = "nav-link";
        document.getElementById('umumTab').className = "nav-link";
        document.getElementById('dokumenTab').className = "nav-link active";
    }

    if (id != "") {
        document.getElementById('penyebab_klaim').innerHTML = "";
        document.getElementById('nomorreg').disabled = true;
        document.getElementById('riwayat_klaim').innerHTML = "";
        document.getElementById('klaimTab').disabled = false;
        document.getElementById('dokumenTab').disabled = false;
        document.getElementById('btnNext').disabled = false;
        $.ajax({
            url: "<?php echo base_url(); ?>dashboard/getTKlaimByPrimary/"+kd_cb+"/"+kd_thn+"/"+id,
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                //console.log(data);
                if (data == "") {

                } else {
                    document.getElementById('nomorreg').value = data[0]['noreg'];
                    document.getElementById('nomorpin').value = data[0]['nopin'];
                    document.getElementById('nama').value = data[0]['nama_peserta'];
                    document.getElementById('tgl_registrasi_peserta').value = data[0]['tgl_kepesertaan'];
                    document.getElementById('tgl_registrasi_klaim').value = data[0]['tgl_reg'];
                    document.getElementById('alamat').value = data[0]['alamat_peserta'];
                    document.getElementById('tglkejadian').value = data[0]['tgl_kej'];
                    document.getElementById('tgllapor').value = data[0]['tgl_lapor'];
                    document.getElementById('keterangan_klaim').value = data[0]['ket_klaim'];
                    document.getElementById('lokasi_kejadian').value = data[0]['lokasi_kej'];
                    document.getElementById('pelapor').value = data[0]['pelapor'];
                    document.getElementById('analisa_klaim').innerHTML = data[0]['analisa_klaim']
                    var penampung = data[0]['no_sebab'];
                    $.ajax({
                        url: "<?php echo base_url(); ?>dashboard/getPenyebabKlaim",
                        method: "GET",
                        async: false,
                        dataType: 'json',
                        success: function(data) {
                            data.forEach((isi) => {
                                if (isi['no_lookup'] == penampung) {
                                    document.getElementById('penyebab_klaim')
                                        .innerHTML +=
                                        `<option value="${isi['no_lookup']}" selected>${isi['nm_detail_lookup']}</option>`;
                                } else {
                                    document.getElementById('penyebab_klaim')
                                        .innerHTML +=
                                        `<option value="${isi['no_lookup']}">${isi['nm_detail_lookup']}</option>`;
                                }
                            });
                        }
                    });
                }
            }
        });
        var count = 1;
        $.ajax({
            url: "<?php echo base_url(); ?>dashboard/getPlafondKlaimById/"+kd_cb+"/"+kd_thn+"/"+id,
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                //console.log(data);
                if (data == "") {

                } else {
                    data.forEach((isi) => {
                        document.getElementById('riwayat_klaim').innerHTML +=
                            `<tr>
                            <td>${count}</td>
                            <td>${isi['nm_detail_lookup']}</td>
                            <td>${isi['value']}</td>
                            <td>${isi['riwayat']}</td>
                            <td>${isi['saldo']}</td>
                        </tr>`;
                        count++;
                    });
                }
            }
        });
        count = 1;
        $.ajax({
            url: "<?php echo base_url(); ?>dashboard/getDetailKlaimByPrimary/"+kd_cb+"/"+kd_thn+"/"+id,
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                //console.log(data);
                if (data == "") {
                    document.getElementById('pengajuan_klaim').style.display = "none";
                } else {
                    document.getElementById('pengajuan_klaim').style.display = "";
                    data.forEach((isi) => {
                        document.getElementById('klaim_pengajuan').innerHTML +=
                            `<tr>
                            <td>${count}</td>
                            <td>${isi['jenis_pertanggungan']}</td>
                            <td>${isi['nilai_klaim']}</td>
                            <td>
                                <button class='btn btn-warning' style='color:white;' data-toggle = 'modal' data-target = '#editModal' onclick = 'editJenisKlaim(${id})'>Edit</button>
                                <button class='btn btn-danger' style='color:;' data-toggle = 'modal' data-target = '#deleteModal' onclick = 'deleteJenisKlaim(${id})'>Delete</button>
                            </td>
                        </tr>`;
                        count++;
                    });
                }
            }
        });
        $.ajax({
            url: "<?php echo base_url(); ?>dashboard/getFormDokumenKlaim/" +kd_cb+"/"+kd_thn+"/"+id,
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                //console.log(data);
                if (data == "") {

                } else {
                    data.forEach((isi) => {
                        /*document.getElementById('dokumen_klaim').innerHTML += 
                        `<div class="row form-group">
                            <div class="col-md-7">
                                <label for="text-input" class=" form-control-label">${isi['nm_detail_lookup']}</label>
                            </div>
                            <div class="col-md-1">
                                <center><input type="checkbox" name="value[]" value="${isi['no_lookup']}" id="check${isi['no_lookup']}"></center>
                            </div>
                            <div class="col-md-4">
                                <input type="file" name="file[]" id = "file${isi['no_lookup']}" onchange = "autoCheked(${isi['no_lookup']})">
                            </div>
                        </div>`;*/
                        if (isi['status'] == "null") {
                            document.getElementById('dokumen_klaim').innerHTML +=
                                `<div class="row form-group">
                                <div class="col-md-7">
                                    <label for="text-input" class=" form-control-label">${isi['nm_detail_lookup']}</label>
                                </div>
                                <div class="col-md-1">
                                    <center><input type="checkbox" name="value[]" value="${isi['no_lookup']}" id="check${isi['no_lookup']}" onchange = "autoAnalisis('<?php echo $id?>')"></center>
                                </div>
                                <div class="col-md-4">
                                    <input type="file" name="file[]" id = "file${isi['no_lookup']}" onchange = "autoCheked(${isi['no_lookup']})">
                                </div>
                            </div>`;
                        } else {
                            document.getElementById('dokumen_klaim').innerHTML +=
                                `<div class="row form-group">
                                <div class="col-md-7">
                                    <label for="text-input" class=" form-control-label">${isi['nm_detail_lookup']}</label>
                                </div>
                                <div class="col-md-1">
                                    <center><input type="checkbox" name="value[]" value="${isi['no_lookup']}" id="check${isi['no_lookup']}" onchange = "autoAnalisis('<?php echo $id?>')" checked></center>
                                </div>
                                <div class="col-md-4">
                                    <input type="file" name="file[]" id = "file${isi['no_lookup']}" onchange = "autoCheked(${isi['no_lookup']})">
                                </div>
                            </div>`;
                        }

                        if (isi['lokasi'] != 'null') {
                            document.getElementById('dokumen_klaim').innerHTML +=
                                `<div class="row form-group">
                                <div class="col-md-12">
                                    <a href="<?php echo base_url ('upload/berkas_klaim')?>/${isi['lokasi']}" target="_blank"
                                        class="btn btn-primary btn-sm">
                                            Lihat
                                    </a>
                                </div>
                            </div>`;
                        }
                    });
                }
            }
        });
    } else {
        document.getElementById('btnNext').disabled = true;
    }

    function getPesertaNoreg() {
        var noreg = document.getElementById('nomorreg').value;
        if (noreg == '') {
            document.getElementById('statusnoreg').value = "false";
            document.getElementById('alertnoreg').style.display = "";
            document.getElementById('alertnoreg').innerHTML = "Nomor Register Tidak Boleh Kosong";
            document.getElementById('nomorpin').value = '';
            document.getElementById('nama').value = '';
            document.getElementById('tgl_registrasi_peserta').value = "";
            document.getElementById('alamat').value = "";
            document.getElementById('statusnoreg').value = "false";
        } else {
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/searchPesertaByNoreg/" + noreg,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    if (data == "") {
                        document.getElementById('alertnoreg').style.display = "";
                        document.getElementById('alertnoreg').innerHTML =
                            "Nomor Register Tidak Ditemukan, Silahkan Cek Kembali Nomor Register";
                        document.getElementById('nomorpin').value = '';
                        document.getElementById('nama').value = '';
                        document.getElementById('tgl_registrasi_peserta').value = "";
                        document.getElementById('alamat').value = "";
                        document.getElementById('statusnoreg').value = "false";
                    } else {
                        document.getElementById('nomorpin').value = data[0]['nopin'];
                        document.getElementById('nama').value = data[0]['nama'];
                        document.getElementById('tgl_registrasi_peserta').value = data[0]['tgl_reg'];
                        document.getElementById('alamat').value = data[0]['alamat'];
                        document.getElementById('statusnoreg').value = "true";
                        document.getElementById('alertnoreg').style.display = "none";
                    }
                }
            });
        }
        btnOn();
    }

    function btnOn() {
        var statusnoreg = document.getElementById('statusnoreg').value;
        if (statusnoreg == "true") {
            document.getElementById('btnSubmit').disabled = false;
        } else {
            document.getElementById('btnSubmit').disabled = true;
        }
    }

    function nextPage() {
        if (document.getElementById('masterKlaim').style.display == "") {
            document.getElementById('detailJenisPertanggungan').style.display = "";
            document.getElementById('masterKlaim').style.display = "none";
            document.getElementById('btnPrev').disabled = false;
            document.getElementById('klaimTab').className = "nav-link active";
            document.getElementById('umumTab').className = "nav-link";
            document.getElementById('dokumenTab').className = "nav-link";
        } else
        if (document.getElementById('detailJenisPertanggungan').style.display == "") {
            document.getElementById('dokumenKlaim').style.display = "";
            document.getElementById('detailJenisPertanggungan').style.display = "none";
            document.getElementById('btnNext').disabled = true;
            document.getElementById('dokumenTab').className = "nav-link active";
            document.getElementById('klaimTab').className = "nav-link";
            document.getElementById('umumTab').className = "nav-link";
        }
    }

    function prevPage() {
        if (document.getElementById('detailJenisPertanggungan').style.display == "") {
            document.getElementById('masterKlaim').style.display = "";
            document.getElementById('detailJenisPertanggungan').style.display = "none";
            document.getElementById('btnPrev').disabled = true;
            document.getElementById('umumTab').className = "nav-link active";
            document.getElementById('klaimTab').className = "nav-link";
            document.getElementById('dokumenTab').className = "nav-link";
        } else
        if (document.getElementById('dokumenKlaim').style.display == "") {
            document.getElementById('detailJenisPertanggungan').style.display = "";
            document.getElementById('dokumenKlaim').style.display = "none";
            document.getElementById('btnNext').disabled = false;
            document.getElementById('klaimTab').className = "nav-link active";
            document.getElementById('umumTab').className = "nav-link";
            document.getElementById('dokumenTab').className = "nav-link";
        }
    }

    function kendoTab(page) {
        if (page == "umum") {
            document.getElementById('masterKlaim').style.display = "";
            document.getElementById('detailJenisPertanggungan').style.display = "none";
            document.getElementById('dokumenKlaim').style.display = "none";
            document.getElementById('btnPrev').disabled = true;
            document.getElementById('btnNext').disabled = false;
        } else
        if (page == "klaim") {
            document.getElementById('masterKlaim').style.display = "none";
            document.getElementById('detailJenisPertanggungan').style.display = "";
            document.getElementById('dokumenKlaim').style.display = "none";
            document.getElementById('btnPrev').disabled = false;
            document.getElementById('btnNext').disabled = false;
        } else
        if (page == "dokumen") {
            document.getElementById('masterKlaim').style.display = "none";
            document.getElementById('detailJenisPertanggungan').style.display = "none";
            document.getElementById('dokumenKlaim').style.display = "";
            document.getElementById('btnPrev').disabled = false;
            document.getElementById('btnNext').disabled = true;
        }
    }

    function on() {
        document.getElementById('nomorpin').disabled = false;
        document.getElementById('nama').disabled = false;
        document.getElementById('alamat').disabled = false;
    }

    function autoCheked(id) {
        var temp = "file" + id;
        var value = document.getElementById(temp).value;
        var checkboxes = document.getElementsByTagName('input');
        autoAnalisis(id);
        if (value == '') {
            //console.log("isi bro "+value);
            //document.getElementById('isi'+id).checked = false;
            /*if (checkboxes[parseInt(id)].type == 'checkbox') {
                checkboxes[parseInt(id)].checked = true;
           }*/
            document.getElementById('check' + id).checked = false;
        } else {
            //console.log('kosong bro '+value);
            //document.getElementById('isi'+id).checked = true;
            /*if (checkboxes[parseInt(id+1)].type == 'checkbox' ) {
                checkboxes[parseInt(id+1)].checked = true;
            }*/
            document.getElementById('check' + id).checked = true;
        }
    }

    function autoAnalisis(id) {
        var penampungjarak = document.getElementsByName('value[]');
        var jarak = penampungjarak.length;
        var penampung = [];
        var status = "true";
        //var penampung = document.getElementById('check'+16).checked;
        for (let i = 0; i < jarak; i++) {
            penampung[i] = document.getElementById('check' + parseInt(i + 1)).checked;
        }
        //console.log(penampung);
        var filechecked = [];
        var i = 0;
        penampung.forEach((checked) => {
            if (checked == true) {
                filechecked.push(parseInt(i + 1));
            }
            i++;
        });
        console.log(filechecked);
        console.log(id);
        document.getElementById('analisa_klaim').innerHTML = `- Dokumen Klaim Lengkap`;
        $.ajax({
            url: "<?php echo base_url(); ?>dashboard/getJenisKlaimTaken/" + id,
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                //console.log(data);
                if (data == "") {

                } else {
                    data.forEach((isi) => {
                        var penampungstatus = filechecked.includes(parseInt(isi));
                        //console.log(isi);
                        //console.log(penampungstatus);
                        if (penampungstatus == false) {
                            document.getElementById('analisa_klaim').innerHTML =
                                `- Dokumen Klaim Tidak Lengkap`;
                        }
                    });
                }
            }
        });
        var persyaratan = document.getElementById('persyaratan').value;
        if (persyaratan == "ya") {
            document.getElementById('analisa_klaim').innerHTML += `
- Memenuhi Persyaratan
- Mohon Persetujuan Kepala Divisi Akda Extra`;
        } else {
            document.getElementById('analisa_klaim').innerHTML += `
- Tidak Memenuhi Persyaratan`;
        }
    }
    </script>

</body>

</html>
<!-- end document-->