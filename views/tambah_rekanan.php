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
    <title>Tambah Rekanan</title>

    <link rel="icon" href="<?php echo base_url('images/icon/logo_akda_playstore.png');?>">

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url("css/font-face.css") ?>" rel="stylesheet"  media="all">
    <link href="<?php echo base_url ('vendor/font-awesome-4.7/css/font-awesome.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url ('vendor/font-awesome-5/css/fontawesome-all.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url ("vendor/mdi-font/css/material-design-iconic-font.min.css")?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url ("vendor/bootstrap-4.1/bootstrap.min.css")?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url ("vendor/animsition/animsition.min.css")?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url ("vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css")?>" rel="stylesheet" media="all">
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
            <section class="alert-wrap p-t-70 p-b-70">
                <div class="container">
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <?php include 'sidebarsetup.php' ?>
                        </div>
                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">
                                <div class="row">
                                    <div class="col-lg-12">                                            
                                        <div class="card-header">
                                            Register <strong>Rekanan</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="<?php echo base_url('dashboard/act_rekanan_daftar')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Kode Rekanan</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="number" id="kode" name="kode" placeholder="Kode Rekanan" class="form-control" value = "<?php echo $id[0]->id+1?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">NAMA</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="nama" name="nama" placeholder="Nama Orang/ Komunitas/ Satuan" class="form-control" onkeyup="cekNama()">
                                                    </div>
                                                    <input type="hidden" id="statusnama" value='false'>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">ALAMAT</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="alamat" id="alamat" rows="9" placeholder="Alamat..." class="form-control" ></textarea>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Nomor Identitas</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="number" id="noktp" name="noktp" placeholder="Nomor Identitas KTP/KTM/NRP/ dan lain-lain" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">NPWP</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="number" id="nonpwp" name="nonpwp" placeholder="Nomor NPWP" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="select" class=" form-control-label">Status</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="status" id="status" class="form-control" placeholer="Status Rekanan">
                                                            <option value="TERTANGGUNG">Tertanggung</option>
                                                            <option value="MARKETING">Marketing</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Nama PIC</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="pic" name="pic" placeholder="Nama Person In Charge" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Nomor PIC</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="number" id="nopic" name="nopic" placeholder="Nomor Telpon Person In Charge" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary btn-sm" id='btnSubmit' disabled>
                                                        <i class="fa fa-dot-circle-o"></i> Save
                                                    </button>
                                                    <a href="<?php echo base_url('dashboard/rekanan'); ?>" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-ban"></i> Cancel
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- RECENT REPORT-->
                                        
                                        <!-- END RECENT REPORT-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <p>Copyright © 2022 PT. ASURANSI BHAKTI BHAYANGKARA. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
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

    <!--Ajax Script
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->

    <!-- Main JS-->
    <script src="<?php echo base_url ("js/main.js")?>"></script>
    <script>
        var status = '<?php echo $this->session->flashdata('status')?>';
        var url = '<?php echo $this->session->flashdata('url')?>';
        if(status!=''){
            window.location.replace(url);
        }

        function cekNama() {
            var nama = $("#nopin").val();
            if(nama = ""){
                document.getElementById('btnSubmit').disabled=true;
            }else{
                document.getElementById('btnSubmit').disabled=false;
            }
        }
    </script>

</body>

</html>
<!-- end document-->