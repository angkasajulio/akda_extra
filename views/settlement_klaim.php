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
                                                        <th><center>NO.REG</center></th>
                                                        <th><center>NAMA</center></th>
                                                        <th><center>TANGGAL KEJADIAN</center></th>
                                                        <th><center>STATUS</center></th>
                                                        <th><center>AKSI</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($dataklaim as $klaim) {
                                                        echo "<tr>";
                                                            echo "<td>".$klaim->noreg."</td>";
                                                            echo "<td>".$klaim->nama_peserta."</td>";
                                                            echo "<td>".$klaim->tgl_kej."</td>";
                                                            echo "<td>".$klaim->nama_status."</td>";
                                                            echo "<td>
                                                                    <center>
                                                                        <a class='btn btn-warning' style='color:white;' title='view' href = '".base_url('dashboard/view_klaim/'.$klaim->kd_cb.'/'.$klaim->kd_thn.'/'.$klaim->no_kl)."' title = 'View'>View</a>
                                                                        <button class='btn btn-info' style='color:;' data-toggle = 'modal' data-target = '#processModal' onclick = 'postIdKlaim(".$klaim->no_kl.")' title='Approval'>Approval</button>
                                                                        <button class='btn btn-warning' style='color: white;' data-toggle = 'modal' data-target = '#processModal' onclick = 'postIdKlaim(".$klaim->no_kl.")'>Confirmed</button>
                                                                        <button class='btn btn-danger' style='color:;' data-toggle = 'modal' data-target = '#deleteModal' onclick = 'deleteIdKlaim(".$klaim->no_kl.")'>Rejected</button>
                                                                    </center>
                                                                </td>";
                                                        echo "</tr>";
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <div class="au-task__footer">
                                                <a class="btn btn-primary" style="float: right;" href="<?php echo base_url("dashboard/klaim_register") ?>">Registrasi
                                                    Klaim</a>
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
                                <div class="modal fade" id="processModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header bg-success">
                                                            <strong class="card-title text-light">Keterangan Proses</strong>
                                                        </div>
                                                    </div>
                                                    <form action="<?php echo base_url('dashboard/act_proses_klaim') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="text-input" class=" form-control-label">KETERANGAN</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <textarea name="keterangan" id="keterangan" rows="9" placeholder="Keterangan Tambahan" class="form-control"></textarea>
                                                                <input type="hidden" name = "no_kl" id = "no_kl">
                                                                <input type="hidden" name = "kd_cb" id = "kd_cb">
                                                                <input type="hidden" name = "kd_thn" id = "kd_thn">
                                                                <input type="hidden" name = "kd_user" id = "kd_user">
                                                            </div>
                                                        </div>
                                                        <div class = "card-footer">
                                                            <button type = "submit" class="btn btn-success btn-sm">
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
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header bg-danger">
                                                            <strong class="card-title text-light">Menghapus Registrasi Klaim</strong>
                                                        </div>
                                                    </div>
                                                    <form action="<?php echo base_url('dashboard/delete_registrasi_klaim') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                        <div class="row form-group">
                                                            <div class="col col-md-12">
                                                                <label for="text-input" class=" form-control-label">Apakah Anda Yakin?</label>
                                                                <input type = "hidden" name ="id" id = "deleteId">
                                                            </div>
                                                        </div>
                                                        <div class = "card-footer">
                                                            <button type = "submit" class="btn btn-danger">
                                                                Ya
                                                            </button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                                        </div>
                                                    </form>
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
    
    function postIdKlaim(no_kl){
       document.getElementById('no_kl').value = no_kl;
    }

    function deleteIdKlaim(no_kl){
        document.getElementById('deleteId').value = no_kl;
    }
    </script>

</body>

</html>
<!-- end document-->