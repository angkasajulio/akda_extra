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
    <title>Posisi</title>

    <link rel="icon" href="<?php echo base_url('images/icon/logo_akda_playstore.png');?>">

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
            <?php echo $this->session->flashdata('msg');?>
            <section class="" style="padding-top: 25px;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <?php include 'sidebarsetup.php' ?>
                        </div>
                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header bg-success">
                                                <strong class="card-title text-light">Posisi Users</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="min-height: 350px;">
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <center>
                                                            <th style="width: 60px;text-align:center;">Kode Posisi</th>
                                                            <th style="width: 130px;text-align:center;">Posisi</th>
                                                            <th style="width: 130px;text-align:center;">Role
                                                            </th>
                                                            <th style="width: 130px;text-align:center;">AKSI</th>
                                                        </center>
                                                    </tr>
                                                </thead>
                                                <tbody style="display:;" id="posisi">
                                                    <?php foreach ($posisi as $posisi) {
                                                        echo "<tr>";
                                                            echo "<td>".$posisi->id."</td>";
                                                            echo "<td>".$posisi->posisi."</td>";
                                                            echo "<td>".$posisi->role."</td>";
                                                            echo "<td>
                                                                    <center>
                                                                        <button onclick='onDetail(" . $posisi->id . ")' class='btn btn-info' style='color:white;' data-toggle='modal' data-target='#detailModals'>Detail</button>
                                                                        <button onclick='onEdit(" . $posisi->id . ")' class='btn btn-warning' style='color:;' data-toggle='modal' data-target='#editModal'>Edit</button>
                                                                    </center>
                                                                </td>";
                                                        echo "</tr>";
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <!--<div class="card-body">
                                                <center>
                                                    <button type="button" class="btn btn-outline-danger btn-sm" style="width:78px;" onclick="prevBtn()">Previous</button>
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-sm" id="page">1</button>
                                                    
                                                    <button type="button" class="btn btn-outline-primary btn-sm" style="width:78px;" onclick="nextBtn()">Next</button>
                                                </center>
                                            </div>-->
                                            <div class="au-task__footer" id="btnCetak">
                                                <button class="btn btn-primary" data-toggle = 'modal' data-target = '#tambahPosisiModal' style="float: right;">Tambah</button>
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
                            <!-- MODALS DETAIL-->
                            <div class="modal fade" id="detailModals" tabindex="-1" role="dialog"
                                aria-labelledby="largeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header bg-success">
                                                        <strong class="card-title text-light">Detail
                                                            Users</strong>
                                                    </div>
                                                </div>
                                                <div class="card-body card-block">
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input"
                                                                class=" form-control-label">Username</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <a id="username" class="form-control"></a>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Nama
                                                                Pengguna</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <a id="nama" class="form-control"></a>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input"
                                                                class=" form-control-label">Email</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <a id="email" class="form-control"></a>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Nomor
                                                                Telpon</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <a id="nomortelpon" class="form-control"></a>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input"
                                                                class=" form-control-label">Posisi</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <a id="posisi" class="form-control"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer" id="detailfooter">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Kembali</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END DETAIL MODALS-->
                            <!-- EDIT MODALS-->
                            <div class="modal fade" id="editModal" tabindex="-1" role="dialog"
                                aria-labelledby="largeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header bg-success">
                                                        <strong class="card-title text-light">Edit
                                                            User</strong>
                                                    </div>
                                                </div>
                                                <div class="card-body card-block">
                                                    <form action="<?php echo base_url('dashboard/act_users_edit') ?>"
                                                        method="post" enctype="multipart/form-data"
                                                        class="form-horizontal">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="text-input" class=" form-control-label">Username</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="usernameedit" name="username"
                                                                    placeholder="Username" class="form-control"
                                                                    value="">
                                                            </div>
                                                        </div>
                                                        <div class="alert alert-danger" role="alert"
                                                            style="display:none;" id="alertnama">
                                                            Nama Pengguna Tidak Boleh Kosong!
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="text-input" class=" form-control-label">Nama Pengguna</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="namaedit" name="nama"
                                                                    placeholder="Nama Pengguna" class="form-control"
                                                                    value="" onkeyup="cekNama()">
                                                            </div>
                                                            <input type="hidden" id="statusnama" value='true'>
                                                        </div>
                                                        <div class="alert alert-danger" role="alert"
                                                            style="display:none;" id="alertemail">
                                                            Email Tidak Boleh Kosong 
                                                        </div>
                                                        <div class="alert alert-danger" role="alert"
                                                            style="display:none;" id="alertemailsama">
                                                            Email Telah digunakan
                                                        </div>
                                                        <div class="alert alert-danger" role="alert"
                                                            style="display:none;" id="alertemailformat">
                                                            Format email tidak sesuai
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="text-input"
                                                                    class=" form-control-label">Email</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="emailedit" name="email"
                                                                    placeholder="Email Pengguna"
                                                                    class="form-control" onkeyup="cekEmail()" value="">
                                                                <input type="hidden" name="id_peserta" value=""
                                                                    id="id_peserta">
                                                            </div>
                                                            <input type="hidden" id="statusemail" value='true'>
                                                        </div>
                                                        <div class="alert alert-danger" role="alert"
                                                            style="display:none;" id="alertpassword">
                                                            Password tidak sesuai
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="text-input"
                                                                    class=" form-control-label">Password</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="password" id="passwordedit" name="password"
                                                                    class="form-control"
                                                                    onkeyup="cekPassword()" value="">
                                                            </div>
                                                            <input type="hidden" id="statuspassword" value='true'>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="text-input"
                                                                    class=" form-control-label">Confirm Password</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="password" id="passwordconfirm"
                                                                    class="form-control"
                                                                    onkeyup="cekPassword()" value="">
                                                            </div>
                                                            <input type="hidden" id="statuspassword" value='true'>
                                                            <input type="hidden" id = "passwordlama" name="passwordlama" value=''>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="text-input"
                                                                    class=" form-control-label">Posisi</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <select name="posisiedit" class="form-control" placeholer="Status Rekanan">
                                                                    <option value="1">Administration</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <button type="submit" class="btn btn-primary btn-sm"
                                                                id='btnSubmit'>
                                                                <i class="fa fa-dot-circle-o"></i> Save
                                                            </button>
                                                            <button type="button" class="btn btn-secondary btn-sm"
                                                                data-dismiss="modal">Kembali</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END EDIT MODALS-->
                            <!-- TAMBAH POSISI MODALS-->
                            <div class="modal fade" id="tambahPosisiModal" tabindex="-1" role="dialog"
                                aria-labelledby="largeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header bg-success">
                                                        <strong class="card-title text-light">Tambah Posisi</strong>
                                                    </div>
                                                </div>
                                                <div class="card-body card-block">
                                                    <form action="<?php echo base_url('dashboard/act_posisi_tambah') ?>"
                                                        method="post" enctype="multipart/form-data"
                                                        class="form-horizontal">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="text-input" class=" form-control-label">Posisi</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="posisitambah" name="posisi"
                                                                    placeholder="Posisi" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="text-input"
                                                                    class=" form-control-label">Role</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <select name="role" class="form-control">
                                                                    <?php
                                                                        foreach($role as $role){
                                                                            echo '<option value="'.$role->id.'">'.$role->role_name.'</option>';
                                                                        } 
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <button type="submit" class="btn btn-primary btn-sm"
                                                                id='btnSubmitTambah'>
                                                                <i class="fa fa-dot-circle-o"></i> Save
                                                            </button>
                                                            <button type="button" class="btn btn-secondary btn-sm"
                                                                data-dismiss="modal">Kembali</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END TAMBAH POSISI MODALS
                        </div>
                    </div>
                </div>
            </section>
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
    var pagepeserta = '<?php echo $this->session->flashdata('page')?>';
    if (status != '') {
        window.location.replace(url);
    }
    if (pagepeserta != "") {
        document.getElementById('peserta').innerHTML = "";
        document.getElementById('page').innerHTML = pagepeserta;
        $.ajax({
            url: "<?php echo base_url(); ?>dashboard/getPesertaRenewal/" + (parseInt(pagepeserta) - 1),
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                //console.log(data);
                if (data == '') {

                } else {
                    data.forEach((isi) => {
                        var status_renewal = '';
                        if (isi['status_renewal'] == "Waiting") {
                            status_renewal = 'Waiting';
                        } else {
                            status_renewal = 'Proses';
                        }
                        document.getElementById('peserta').innerHTML +=
                            `<tr>
                                    <td>${isi['noreg']}</td>
                                    <td>${isi['nopin']}</td>
                                    <td>${isi['nama']}</td>
                                    <td>${isi['no_tlp']}</td>
                                    <td>
                                        <center>
                                            <button onclick='onDetail("${isi['id']}")' class='btn btn-info' style='color:white;' data-toggle='modal' data-target='#followUpModals'>Detail</button>
                                        </center>
                                    </td>
                                    <td>${status_renewal}</td>
                                </tr>`;
                    });
                }
            }
        });
    }

    function on(id, idbtn) {
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
    }

    function onDetail(id) {
        var page = document.getElementById('page').innerHTML;
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
                        document.getElementById('nomorpin').innerHTML = isi['nopin'];
                        document.getElementById('nomorreg').innerHTML = isi['noreg'];
                        document.getElementById('nonik').innerHTML = isi['no_ktp'];
                        document.getElementById('namaedit').innerHTML = isi['nama'];
                        document.getElementById('alamat').innerHTML = isi['alamat'];
                        document.getElementById('tgllahir').innerHTML = isi['tgllahir'];
                        document.getElementById('notelp').innerHTML = isi['no_tlp'];
                        document.getElementById('tglregister').innerHTML = isi['tgl_reg'];
                        document.getElementById('tglaktif').innerHTML = isi['tgl_aktif'];
                        document.getElementById('tglexpired').innerHTML = isi['tgl_expired'];
                        document.getElementById('page_peserta').value = page;
                        document.getElementById('keterangan').innerHTML = isi['keterangan_renewal'];
                        document.getElementById('status_detail').innerHTML = isi['status_renewal'];
                        if (isi['status_renewal'] != 'Waiting') {
                            document.getElementById('btnSubmit').disabled = true;
                        } else {
                            document.getElementById('btnSubmit').disabled = false;
                        }
                    });
                }
            }
        });
    }

    function nextBtn() {
        var page = parseInt(document.getElementById('page').innerHTML) + 1;
        document.getElementById('peserta').innerHTML = "";
        document.getElementById('page').innerHTML = page;
        var pageoffset = parseInt(page) - 1;
        var status = document.getElementById('status_peserta').value;
        if (pageoffset == '0') {
            var awal = '1';
        } else {
            var awal = parseInt(pageoffset) * 10 + 1;
        }
        if (status == '') {
            var url = "<?php echo base_url(); ?>dashboard/getPesertaRenewal/" + pageoffset;
        } else {
            var url = "<?php echo base_url(); ?>dashboard/getPesertaRenewal/" + pageoffset + "/" + status;
        }
        console.log(status);
        $.ajax({
            url: url,
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                //console.log(data);
                if (data == '') {

                } else {
                    data.forEach((isi) => {
                        var status_renewal = '';
                        if (isi['status_renewal'] == "Waiting" || isi['status_renewal'] ==
                            "Menolak") {
                            status_renewal = isi['status_renewal'];
                        } else {
                            status_renewal = 'Proses';
                        }
                        document.getElementById('peserta').innerHTML +=
                            `<tr>
                                    <td>${isi['noreg']}</td>
                                    <td>${isi['nopin']}</td>
                                    <td>${isi['nama']}</td>
                                    <td>${isi['no_tlp']}</td>
                                    <td>
                                        <center>
                                            <button onclick='onDetail("${isi['id']}")' class='btn btn-info' style='color:white;' data-toggle='modal' data-target='#followUpModals'>Detail</button>
                                        </center>
                                    </td>
                                    <td>${status_renewal}</td>
                                </tr>`;
                    });
                }
            }
        });

    }

    function prevBtn() {
        var page = parseInt(document.getElementById('page').innerHTML) - 1;
        document.getElementById('peserta').innerHTML = "";
        document.getElementById('page').innerHTML = page;
        var status = document.getElementById('status_peserta').value;
        var pageoffset = parseInt(page) - 1;
        if (pageoffset == '0') {
            var awal = '1';
        } else {
            var awal = parseInt(pageoffset) * 10 + 1;
        }
        if (status == '') {
            var url = "<?php echo base_url(); ?>dashboard/getPesertaRenewal/" + pageoffset;
        } else {
            var url = "<?php echo base_url(); ?>dashboard/getPesertaRenewal/" + pageoffset + "/" + status;
        }
        $.ajax({
            url: url,
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                //console.log(data);
                if (data == '') {

                } else {
                    data.forEach((isi) => {
                        var status_renewal = '';
                        if (isi['status_renewal'] == "Waiting" || isi['status_renewal'] ==
                            "Menolak") {
                            status_renewal = isi['status_renewal'];
                        } else {
                            status_renewal = 'Proses';
                        }
                        document.getElementById('peserta').innerHTML +=
                            `<tr>
                                    <td>${isi['noreg']}</td>
                                    <td>${isi['nopin']}</td>
                                    <td>${isi['nama']}</td>
                                    <td>${isi['no_tlp']}</td>
                                    <td>
                                        <center>
                                            <button onclick='onDetail("${isi['id']}")' class='btn btn-info' style='color:white;' data-toggle='modal' data-target='#followUpModals'>Detail</button>
                                        </center>
                                    </td>
                                    <td>${status_renewal}</td>
                                </tr>`;
                    });
                }
            }
        });

    }

    function cetakPeserta() {
        var status = document.getElementById('status_peserta').value;
        if (status == '') {
            status = 'All';
        }
        var url = "<?php echo base_url('dashboard/cetak_peserta_renewal')?>/" + status;
        window.open(url, '_blank');
    }
    </script>

</body>

</html>
<!-- end document-->