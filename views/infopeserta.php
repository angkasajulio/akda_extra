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
    <title>Detail Peserta</title>

    <!-- Logo Icon Title-->
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
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header bg-success">
                                                <strong class="card-title text-light">Detail Peserta</strong>
                                            </div>
                                        </div>
                                        <table class="table table-border">
                                            <thead style="color:black;">
                                               <tr>
                                                    <th>Nomor Registrasi</th>
                                                    <th>:</th>
                                                    <th><?php echo $peserta[0]->noreg ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Nomor PIN</th>
                                                    <th>:</th>
                                                    <th><?php echo $peserta[0]->nopin ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Nama Peserta</th>
                                                    <th>:</th>
                                                    <th><?php echo $peserta[0]->nama ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Nomor KTP</th>
                                                    <th>:</th>
                                                    <th><?php echo $peserta[0]->no_ktp ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Alamat</th>
                                                    <th>:</th>
                                                    <th><?php echo $peserta[0]->alamat ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Nomor Telpon</th>
                                                    <th>:</th>
                                                    <th><?php echo $peserta[0]->no_tlp ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Lahir</th>
                                                    <th>:</th>
                                                    <th><?php echo $peserta[0]->tgllahir ?> </th>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Registrasi</th>
                                                    <th>:</th>
                                                    <th><?php echo $peserta[0]->tgl_reg ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Aktif</th>
                                                    <th>:</th>
                                                    <th><?php echo $peserta[0]->tgl_aktif ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Berakhir</th>
                                                    <th>:</th>
                                                    <th><?php echo $peserta[0]->tgl_expired?></th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <div class="au-task__footer" id="expiredbtn" style="display:;">
                                            <a style="float: right;" target = "_BLANK" href="<?php echo base_url('dashboard/cetak_info_peserta/'.$peserta[0]->id)?>">
                                                <button class="btn btn-primary">Cetak</button>
                                            </a>
                                            <a style="float: right;" onclick="goBack()">
                                                <button class="btn btn-primary">Kembali</button>
                                            </a>
                                        </div>
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
        function goBack(){
            window.history.back();
        }
        function on(id,idbtn,idtbl) {
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
            document.getElementById("value").value=id;
        }
        function searchPin(){
            var nopin = $("#nopin").val();
            var id = $("#value").val();
            document.getElementById('displaypin').innerHTML='';
            if(nopin==''){
                document.getElementById('aktif').style.display="none";
                document.getElementById('aktifbtn').style.display = "none";
                document.getElementById('aktiftbl').style.background = ""; 
                document.getElementById("aktivasi").style.display = "none";
                document.getElementById("expired").style.display = "none";
                document.getElementById("aktivasibtn").style.display = "none";
                document.getElementById("expiredbtn").style.display = "none";
                document.getElementById("aktivasitbl").style.background = "";
                document.getElementById("expiredtbl").style.background = "";
                if(id=='aktif'){
                    document.getElementById("aktif").style.display = "";
                    document.getElementById("aktifbtn").style.display = "";
                    document.getElementById("aktiftbl").style.background = "rgba(0, 0, 0, 0.05)";
                }else
                if(id=='aktivasi'){
                    document.getElementById("aktivasi").style.display = "";
                    document.getElementById("aktivasibtn").style.display = "";
                    document.getElementById("aktivasitbl").style.background = "rgba(0, 0, 0, 0.05)";
                }else
                if(id=='expired'){
                    document.getElementById("expired").style.display = "";
                    document.getElementById("expiredbtn").style.display = "";
                    document.getElementById("expiredtbl").style.background = "rgba(0, 0, 0, 0.05)";
                }
            }else{
                document.getElementById("noreg").value='';
                document.getElementById("nama").value='';
                $.ajax({
                    url: "<?php echo base_url();?>dashboard/searchPinAktif/" + nopin,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
                        if(data==''){
                            document.getElementById("aktif").style.display = "none";
            
                            document.getElementById("aktivasi").style.display = "none";
                            
                            document.getElementById("expired").style.display = "none";
                            document.getElementById("aktifbtn").style.display = "none";
                            document.getElementById("aktivasibtn").style.display = "none";
                            document.getElementById("expiredbtn").style.display = "none";
                            document.getElementById("aktiftbl").style.background = "";
                            document.getElementById("aktivasitbl").style.background = "";
                            document.getElementById("expiredtbl").style.background = "";
                            document.getElementById('displaypin').style.display='';
                        }else
                        {
                            document.getElementById("aktif").style.display = "none";
            
                            document.getElementById("aktivasi").style.display = "none";
                            
                            document.getElementById("expired").style.display = "none";
                            document.getElementById("aktifbtn").style.display = "none";
                            document.getElementById("aktivasibtn").style.display = "none";
                            document.getElementById("expiredbtn").style.display = "none";
                            document.getElementById("aktiftbl").style.background = "";
                            document.getElementById("aktivasitbl").style.background = "";
                            document.getElementById("expiredtbl").style.background = "";
                            document.getElementById('displaypin').style.display='';
                            data.forEach((isi)=>{
                                document.getElementById('displaypin').innerHTML += `<tr><td>${isi['noreg']}</td><td>${isi['nopin']}</td><td>${isi['nama']}</td><td>${isi['tgl_reg']}</td><td>${isi['tgl_aktif']}</td><td>${isi['tgl_expired']}</td></tr>`;
                            });
                        }
                    }
                });
            }
        }
        function searchNoReg(){
            var noreg = $("#noreg").val();
            var id = $("#value").val();
            document.getElementById('displaypin').innerHTML='';
            if(noreg==''){
                document.getElementById('aktif').style.display="none";
                document.getElementById('aktifbtn').style.display = "none";
                document.getElementById('aktiftbl').style.background = ""; 
                document.getElementById("aktivasi").style.display = "none";
                document.getElementById("expired").style.display = "none";
                document.getElementById("aktivasibtn").style.display = "none";
                document.getElementById("expiredbtn").style.display = "none";
                document.getElementById("aktivasitbl").style.background = "";
                document.getElementById("expiredtbl").style.background = "";
                if(id=='aktif'){
                    document.getElementById("aktif").style.display = "";
                    document.getElementById("aktifbtn").style.display = "";
                    document.getElementById("aktiftbl").style.background = "rgba(0, 0, 0, 0.05)";
                }else
                if(id=='aktivasi'){
                    document.getElementById("aktivasi").style.display = "";
                    document.getElementById("aktivasibtn").style.display = "";
                    document.getElementById("aktivasitbl").style.background = "rgba(0, 0, 0, 0.05)";
                }else
                if(id=='expired'){
                    document.getElementById("expired").style.display = "";
                    document.getElementById("expiredbtn").style.display = "";
                    document.getElementById("expiredtbl").style.background = "rgba(0, 0, 0, 0.05)";
                }
            }else{
                document.getElementById("nopin").value='';
                document.getElementById("nama").value='';
                $.ajax({
                    url: "<?php echo base_url();?>dashboard/searchNoRegAktif/" + noreg,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
                        if(data==''){
                            document.getElementById("aktif").style.display = "none";
            
                            document.getElementById("aktivasi").style.display = "none";
                            
                            document.getElementById("expired").style.display = "none";
                            document.getElementById("aktifbtn").style.display = "none";
                            document.getElementById("aktivasibtn").style.display = "none";
                            document.getElementById("expiredbtn").style.display = "none";
                            document.getElementById("aktiftbl").style.background = "";
                            document.getElementById("aktivasitbl").style.background = "";
                            document.getElementById("expiredtbl").style.background = "";
                            document.getElementById('displaypin').style.display='';
                        }else
                        {
                            document.getElementById("aktif").style.display = "none";
            
                            document.getElementById("aktivasi").style.display = "none";
                            
                            document.getElementById("expired").style.display = "none";
                            document.getElementById("aktifbtn").style.display = "none";
                            document.getElementById("aktivasibtn").style.display = "none";
                            document.getElementById("expiredbtn").style.display = "none";
                            document.getElementById("aktiftbl").style.background = "";
                            document.getElementById("aktivasitbl").style.background = "";
                            document.getElementById("expiredtbl").style.background = "";
                            document.getElementById('displaypin').style.display='';
                            data.forEach((isi)=>{
                                document.getElementById('displaypin').innerHTML += `<tr><td>${isi['noreg']}</td><td>${isi['nopin']}</td><td>${isi['nama']}</td><td>${isi['tgl_reg']}</td><td>${isi['tgl_aktif']}</td><td>${isi['tgl_expired']}</td></tr>`;
                            });
                        }
                    }
                });
            }
        }
        function searchNama(){
            var nama = $("#nama").val();
            var id = $("#value").val();
            document.getElementById('displaypin').innerHTML='';
            if(nama==''){
                document.getElementById('aktif').style.display="none";
                document.getElementById('aktifbtn').style.display = "none";
                document.getElementById('aktiftbl').style.background = ""; 
                document.getElementById("aktivasi").style.display = "none";
                document.getElementById("expired").style.display = "none";
                document.getElementById("aktivasibtn").style.display = "none";
                document.getElementById("expiredbtn").style.display = "none";
                document.getElementById("aktivasitbl").style.background = "";
                document.getElementById("expiredtbl").style.background = "";
                if(id=='aktif'){
                    document.getElementById("aktif").style.display = "";
                    document.getElementById("aktifbtn").style.display = "";
                    document.getElementById("aktiftbl").style.background = "rgba(0, 0, 0, 0.05)";
                }else
                if(id=='aktivasi'){
                    document.getElementById("aktivasi").style.display = "";
                    document.getElementById("aktivasibtn").style.display = "";
                    document.getElementById("aktivasitbl").style.background = "rgba(0, 0, 0, 0.05)";
                }else
                if(id=='expired'){
                    document.getElementById("expired").style.display = "";
                    document.getElementById("expiredbtn").style.display = "";
                    document.getElementById("expiredtbl").style.background = "rgba(0, 0, 0, 0.05)";
                }
            }else{
                document.getElementById("nopin").value='';
                document.getElementById("noreg").value='';
                $.ajax({
                    url: "<?php echo base_url();?>dashboard/searchNamaAktif/" + nama,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
                        if(data==''){
                            document.getElementById("aktif").style.display = "none";
            
                            document.getElementById("aktivasi").style.display = "none";
                            
                            document.getElementById("expired").style.display = "none";
                            document.getElementById("aktifbtn").style.display = "none";
                            document.getElementById("aktivasibtn").style.display = "none";
                            document.getElementById("expiredbtn").style.display = "none";
                            document.getElementById("aktiftbl").style.background = "";
                            document.getElementById("aktivasitbl").style.background = "";
                            document.getElementById("expiredtbl").style.background = "";
                            document.getElementById('displaypin').style.display='';
                        }else
                        {
                            document.getElementById("aktif").style.display = "none";
            
                            document.getElementById("aktivasi").style.display = "none";
                            
                            document.getElementById("expired").style.display = "none";
                            document.getElementById("aktifbtn").style.display = "none";
                            document.getElementById("aktivasibtn").style.display = "none";
                            document.getElementById("expiredbtn").style.display = "none";
                            document.getElementById("aktiftbl").style.background = "";
                            document.getElementById("aktivasitbl").style.background = "";
                            document.getElementById("expiredtbl").style.background = "";
                            document.getElementById('displaypin').style.display='';
                            data.forEach((isi)=>{
                                document.getElementById('displaypin').innerHTML += `<tr><td>${isi['noreg']}</td><td>${isi['nopin']}</td><td>${isi['nama']}</td><td>${isi['tgl_reg']}</td><td>${isi['tgl_aktif']}</td><td>${isi['tgl_expired']}</td></tr>`;
                            });
                        }
                    }
                });
            }
        }  
    </script>

</body>

</html>
<!-- end document-->