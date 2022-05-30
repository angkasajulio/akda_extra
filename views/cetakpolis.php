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
    <title>Cetak Polis Peserta</title>

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
            <?php echo $this->session->flashdata('msg');?>
            <section class=""style="padding-top: 25px;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <?php include 'sidebarpeserta.php' ?>
                        </div>
                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">
                                <div class="row" style="min-height: 650px;">
                                    <div class="col-lg-12">
                                        <div class="card-header bg-success">
                                            <strong class="card-title text-light">Cetak Schedule Polis Akda Extra</strong>
                                        </div>                                            
                                        <div class="card-body card-block">
                                            <form action="<?php echo base_url('dashboard/act_cetak_schedule_peserta')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">NOPIN</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="nopin" name="nopin" placeholder="nopin" class="form-control" onkeyup="cekNopin()">
                                                    </div>
                                                    <input type="hidden" id="statusnopin" value='false'>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">NOREG</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="noreg" name="noreg" placeholder="noreg" class="form-control" onkeyup="cekNoreg()">
                                                    </div>
                                                    <input type="hidden" id="statusnoreg" value='false'>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary btn-sm" id="submit" disabled>
                                                        <i class="fa fa-dot-circle-o"></i> Save
                                                    </button>
                                                    <a href ="<?php echo base_url('dashboard/peserta') ?>" class="btn btn-danger btn-sm">
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

    <!-- Main JS-->
    <script src="<?php echo base_url ("js/main.js")?>"></script>
    <script>
        var status = '<?php echo $this->session->flashdata('status')?>';
        var url = '<?php echo $this->session->flashdata('url')?>';
        if(status!=''){
            window.location.replace(url);
        }
        function on(id,idbtn) {
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
        
        function getFile(){
            var file = document.getElementById("file-input").value;
            var cari = file.search("xlsx");
            if(cari!="-1"){
                document.getElementById('submit').disabled=false;
            }else{
                document.getElementById('submit').disabled=true;
            }
        }

        function cekNopin(){
            var nopin = document.getElementById("nopin").value;
            if(nopin!=""){
                document.getElementById("statusnopin").value = "true";
            }else{
                document.getElementById("statusnopin").value = "false";
            }
            activeBtn();
        }

        function cekNoreg(){
            var noreg = document.getElementById("noreg").value;
            if(noreg!=""){
                document.getElementById("statusnoreg").value = "true";
            }else{
                document.getElementById("statusnoreg").value = "false";
            }
            activeBtn();
        }

        function activeBtn(){
            var statusnopin = document.getElementById('statusnopin').value;
            var statusnoreg = document.getElementById('statusnoreg').value;
            if(statusnopin=="true" && statusnoreg=="true"){
                document.getElementById("submit").disabled = false;
            }else{
                document.getElementById("submit").disabled = true;
            }
        }
    </script>

</body>

</html>
<!-- end document-->