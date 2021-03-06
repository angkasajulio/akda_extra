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
            <section class="" style="padding-top: 25px;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <?php include 'sidebarklaim.php' ?>
                        </div>
                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">
                                <div class="row">
                                    <div class="container-fluid">
                                        <div class="card">
                                            <div class="card-header bg-success">
                                                <strong class="card-title text-light">Data Master Klaim</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th><center>KODE KLAIM</center></th>
                                                        <th><center>NO.REG</center></th>
                                                        <th><center>NAMA</center></th>
                                                        <th><center>TANGGAL KEJADIAN</center></th>
                                                        <th><center>STATUS</center></th>
                                                        <th style="width: 250px; "><center>AKSI</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $count = 0;
                                                    foreach ($dataklaim as $klaim) {
                                                        echo "<tr>";
                                                            echo "<td rowspan = '2'>".$klaim->kd_no_kl."</td>";
                                                            echo "<td rowspan = '2'>".$klaim->noreg."</td>";
                                                            echo "<td rowspan = '2'>".$klaim->nama_peserta."</td>";
                                                            echo "<td rowspan = '2'>".$klaim->tgl_kej."</td>";
                                                            echo "<td rowspan = '2'>".$klaim->nama_status."</td>";
                                                            echo "<td>
                                                                    <center>
                                                                        <button class='btn btn-success' style='color:;' data-toggle = 'modal' data-target = '#approvalModal' onclick = 'postIdKlaim(".$klaim->kd_thn.",".$count.")' title='Approved'><i class='fa fa-check'></i></button>
                                                                        <button class='btn btn-warning' style='color: white;' data-toggle = 'modal' data-target = '#confirmModal' onclick = 'postIdKlaim(".$klaim->kd_thn.",".$count.")' title='Confirmed'><i class='fa fa-refresh'></i></button>
                                                                        <button class='btn btn-danger' style='color:;' data-toggle = 'modal' data-target = '#rejectModal' onclick = 'postIdKlaim(".$klaim->kd_thn.",".$count.")' title='Reject'><i class='fa fa-times'></i></button>
                                                                    </center>
                                                                </td>";
                                                        echo "</tr>";
                                                        echo "<tr>";
                                                            echo "<td>
                                                                    <center>
                                                                    <a class='btn btn-primary' style='color:white;' title='view' href = '".base_url('dashboard/view_klaim/'.$klaim->kd_cb.'/'.$klaim->kd_thn.'/'.$klaim->no_kl)."' title = 'View'><i class='fa fa-eye'></i></a>
                                                                        <button class='btn btn-info' style='color:;' data-toggle = 'modal' data-target = '#infoModal' onclick = 'infoKlaim(".$klaim->kd_thn.",".$count.")' title='History'><i class='fa fa-info'></i></button>
                                                                    </center>
                                                                </td>";
                                                        echo "</tr>";
                                                        echo"
                                                            <input type='hidden' value='".$klaim->no_kl."' id='tmp_no_kl".$count."'>
                                                            <input type='hidden' value='".$klaim->kd_cb."' id='tmp_kd_cb".$count."'>
                                                        ";
                                                        $count++;
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- END DATA TABLE-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <p>Copyright ?? 2022 PT. ASURANSI BHAKTI BHAYANGKARA. All rights reserved.
                                                Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="approvalModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header bg-success">
                                                            <strong class="card-title text-light">Keterangan Approval</strong>
                                                        </div>
                                                    </div>
                                                    <form action="<?php echo base_url('dashboard/act_approval_klaim') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="text-input" class=" form-control-label">KETERANGAN</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <textarea name="keterangan" id="keterangan" rows="9" placeholder="Keterangan Tambahan" class="form-control"></textarea>
                                                                <input type="text" name = "no_kl" id = "no_kl">
                                                                <input type="text" name = "kd_cb" id = "kd_cb">
                                                                <input type="text" name = "kd_thn" id = "kd_thn">
                                                                <input type="text" name = "kd_user" id = "kd_user" value = "<?php echo $this->session->userdata('kd_user');?>">
                                                                <input type="text" name = "status" value ="Approved">
                                                            </div>
                                                        </div>
                                                        <div class = "card-footer">
                                                            <button type = "submit" class="btn btn-success btn-sm">
                                                                Process
                                                            </button>
                                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Kembali</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header bg-warning">
                                                            <strong class="card-title text-light">Confirm Registrasi Klaim</strong>
                                                        </div>
                                                    </div>
                                                    <form action="<?php echo base_url('dashboard/act_approval_klaim') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="text-input" class=" form-control-label">KETERANGAN</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <textarea name="keterangan" id="keterangan" rows="9" placeholder="Keterangan Tambahan" class="form-control"></textarea>
                                                                <input type="text" name = "no_kl" id = "no_kl_confirm">
                                                                <input type="text" name = "kd_cb" id = "kd_cb_confirm">
                                                                <input type="text" name = "kd_thn" id = "kd_thn_confirm">
                                                                <input type="text" name = "kd_user" id = "kd_user" value = "<?php echo $this->session->userdata('kd_user');?>">
                                                                <input type="text" name = "status" value ="Confirm">
                                                            </div>
                                                        </div>
                                                        <div class = "card-footer">
                                                            <button type = "submit" class="btn btn-success btn-sm">
                                                                Process
                                                            </button>
                                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Kembali</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header bg-danger">
                                                            <strong class="card-title text-light">Reject Registrasi Klaim</strong>
                                                        </div>
                                                    </div>
                                                    <form action="<?php echo base_url('dashboard/act_approval_klaim') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="text-input" class=" form-control-label">KETERANGAN</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <textarea name="keterangan" id="keterangan" rows="9" placeholder="Keterangan Tambahan" class="form-control"></textarea>
                                                                <input type="text" name = "no_kl" id = "no_kl_reject">
                                                                <input type="text" name = "kd_cb" id = "kd_cb_reject">
                                                                <input type="text" name = "kd_thn" id = "kd_thn_reject">
                                                                <input type="text" name = "kd_user" id = "kd_user" value = "<?php echo $this->session->userdata('kd_user');?>">
                                                                <input type="text" name = "status" value ="Rejected">
                                                            </div>
                                                        </div>
                                                        <div class = "card-footer">
                                                            <button type = "submit" class="btn btn-success btn-sm">
                                                                Process
                                                            </button>
                                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Kembali</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-header bg-info">
                                                        <strong class="card-title text-light">Status Approval</strong>
                                                    </div>
                                                </div>
                                                <table class="table table-borderless table-data3">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 150px;"><center>TGL. PROSES</center></th>
                                                            <th style="width: 150px;"><center>USER</center></th>
                                                            <th><center>STATUS</center></th>
                                                            <th><center>KETERANGAN</center></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tabelinfo">
                                                    </tbody>
                                                </table>
                                                <div class="modal-footer" id="detailfooter">
                                                    <button class="btn btn-danger btn-sm" data-dismiss="modal">Kembali</button>
                                               </div>
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
    <script src="<?php echo base_url ("js/popper.js")?>"></script>
    <script>
    $(function () {
		$('[data-toggle="tooltip"]').tooltip();
	});
    var status = '<?php echo $this->session->flashdata('status')?>';
    var url = '<?php echo $this->session->flashdata('url')?>';
    if (status != '') {
        window.location.replace(url);
    }

    function getPesertaNoreg() {
        var noreg = document.getElementById('nomorreg').value;
        if(noreg==''){
            document.getElementById('statusnoreg').value = "false";
            document.getElementById('alertnoreg').style.display = "";
            document.getElementById('alertnoreg').innerHTML = "Nomor Register Tidak Boleh Kosong";
        }else
        {
            $.ajax({
            url: "<?php echo base_url(); ?>dashboard/searchPesertaByNoreg/" +noreg,
            method: "GET",
            async: false,
            dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    if(data==""){
                        document.getElementById('alertnoreg').style.display = "";
                        document.getElementById('alertnoreg').innerHTML = "Nomor Register Tidak Ditemukan, Silahkan Cek Kembali Nomor Register";
                        document.getElementById('nomorpin').value ='';
                        document.getElementById('nama').value = '';
                        document.getElementById('tgl_registrasi').value = "";
                        document.getElementById('alamat').value = "";
                        document.getElementById('statusnoreg').value = "false";
                    }else{
                        document.getElementById('nomorpin').value = data[0]['nopin'];
                        document.getElementById('nama').value = data[0]['nama'];
                        document.getElementById('tgl_registrasi').value = data[0]['tgl_reg'];
                        document.getElementById('alamat').value = data[0]['alamat'];
                        document.getElementById('statusnoreg').value = "true";
                    }
                }
            });
        }
    }
    
    function postIdKlaim(kd_thn,count){
        document.getElementById('no_kl').value = document.getElementById('tmp_no_kl'+count).value;
        document.getElementById('kd_cb').value = document.getElementById('tmp_kd_cb'+count).value;
        document.getElementById('kd_thn').value =kd_thn;
        document.getElementById('no_kl_confirm').value = document.getElementById('tmp_no_kl'+count).value;
        document.getElementById('kd_cb_confirm').value = document.getElementById('tmp_kd_cb'+count).value;
        document.getElementById('kd_thn_confirm').value =kd_thn;
        document.getElementById('no_kl_reject').value = document.getElementById('tmp_no_kl'+count).value;
        document.getElementById('kd_cb_reject').value = document.getElementById('tmp_kd_cb'+count).value;
        document.getElementById('kd_thn_reject').value =kd_thn;
    }

    function deleteIdKlaim(no_kl){
        document.getElementById('deleteId').value = no_kl;
    }

    function infoKlaim(kd_thn,count){
        var no_kl = document.getElementById('tmp_no_kl'+count).value;
        var kd_cb = document.getElementById('tmp_kd_cb'+count).value;
        $.ajax({
            url: "<?php echo base_url(); ?>dashboard/getDetailStatus/" +kd_cb+"/"+kd_thn+"/"+no_kl,
            method: "GET",
            async: false,
            dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    if(data==""){
                        
                    }else{
                        document.getElementById('tabelinfo').innerHTML = "";
                        data.forEach((isi) => {
                        document.getElementById('tabelinfo').innerHTML +=
                            `<tr>
                                <td>${isi['tgl_status']}</td>
                                <td>${isi['nama_user']}</td>
                                <td>${isi['nama_status']}</td>
                                <td>${isi['keterangan']}</td>
                            </tr>`;
                        }); 
                    }
                }
            });
    }
    </script>

</body>

</html>
<!-- end document-->