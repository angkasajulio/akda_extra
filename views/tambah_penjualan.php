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
    <title>Tambah Penjualan</title>

    <!--Icon-->
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
            <section style="padding-top: 25px;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <?php include 'sidebarpenjualan.php' ?>
                        </div>
                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">
                                <div class="row">
                                    <div class="col-lg-12">                                            
                                        <div class="card-header">
                                            Tambah <strong>Penjualan</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="<?php echo base_url('dashboard/act_penjualan_tambah')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Kode Penjualan</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <?php
                                                            if(empty($id)){
                                                                echo "<input type='number' id='kode' name='kode' placeholder='Kode Penjualan' class='form-control' value = '1' disabled>";
                                                            }else
                                                            echo "<input type='number' id='kode' name='kode' placeholder='Kode Penjualan' class='form-control' value = ".($id[0]->id+1)." disabled>"
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="multiple-select" class=" form-control-label">Kode Rekanan Tertanggung</label>
                                                    </div>
                                                    <div class="col col-md-9">
                                                        <select name="kodetertanggung" id="kodetertanggung" multiple="" class="form-control" onchange="cekRekananTertanggung()">
                                                            <?php
                                                                foreach ($tertanggung as $rekanan) {
                                                                    echo "<option value=".$rekanan->id.">".$rekanan->id." - ".$rekanan->nama."</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">NAMA TERTANGGUNG</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="namatertanggung" name="namatertanggung" placeholder="Nama Orang/ Komunitas/ Satuan" class="form-control" value ="" disabled>
                                                    </div>
                                                    <input type="hidden" id="statusnama" value='false'>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="multiple-select" class=" form-control-label">Kode Marketing</label>
                                                    </div>
                                                    <div class="col col-md-9">
                                                        <select name="kodemarketing" id="kodemarketing" multiple="" class="form-control" onchange="cekRekananMarketing()">
                                                            <?php
                                                                foreach ($marketing as $rekanan) {
                                                                    echo "<option value=".$rekanan->id.">".$rekanan->id." - ".$rekanan->nama."</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Nama Marketing</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="namamarketing" name="namamarketing" placeholder="Nama Orang/ Komunitas/ Satuan" class="form-control" value ="" disabled>
                                                    </div>
                                                    <input type="hidden" id="statusnama" value='false'>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Nomor Registrasi Awal</label>
                                                    </div>
                                                    <?php
                                                        if(empty($noreg)){
                                                            echo '<div class="col-12 col-md-9">
                                                                    <input type="number" id="noregawal" name="noregawal" placeholder="Nomor Registerasi Awal" class="form-control" onkeyup ="getNoRegAkhir()">
                                                                </div>';
                                                        }else
                                                        echo '<div class="col-12 col-md-9">
                                                                <input type="number" id="noregawal" name="noregawal" placeholder="Nomor Registrasi Awal" class="form-control" value = '.($noreg[0]->noreg_akhir+1).' onkeyup = "getNoRegAkhir()">
                                                            </div>'
                                                    ?>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Jumlah Kartu</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="number" id="jumlahkartu" name="jumlahkartu" placeholder="Jumlah Kartu Terjual" class="form-control" onkeyup="getNoRegAkhir()">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Noreg Akhir</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="number" id="noregakhir" name="noregakhir" placeholder="Nomor Registrasi Akhir" class="form-control" value ="" disabled>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Tanggal Penjualan</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="date" id="tglpenjualan" name="tglpenjualan" placeholder="Tanggal Register" class="form-control" value="<?php echo date("Y-m-d"); ?>" onchange="getTgl()">
                                                    </div>
                                                </div>
                                                    <input type="hidden" id="statustertanggung" value='false'>
                                                    <input type="hidden" id="statusmarketing" value='false'>
                                                    <input type="hidden" id="statusnoreg" value='false'>
                                                    <input type="hidden" id="statustgl" value="true">
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary btn-sm" id='btnSubmit' onclick="on()" disabled>
                                                        <i class="fa fa-dot-circle-o"></i> Save
                                                    </button>
                                                    <a href="<?php echo base_url('dashboard/penjualan') ?>" class="btn btn-danger btn-sm">
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

        function cekRekananTertanggung(){
            var kode = $("#kodetertanggung").val();
            var getkode = kode[0];
            console.log(getkode);
            if(kode=""){

            }else{
                $.ajax({
                    url: "<?php echo base_url();?>dashboard/cekRekananById/" +getkode,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        if(data==''){
                           
                        }else
                        {
                            $("#namatertanggung").val(data[0]['nama']);
                            $("#statustertanggung").val('true');
                        }
                    }
                });
            }
            activeBtn();
        }

        function cekRekananMarketing(){
            var kode = $("#kodemarketing").val();
            var getkode = kode[0];
            console.log(getkode);
            if(kode=""){

            }else{
                $.ajax({
                    url: "<?php echo base_url();?>dashboard/cekRekananById/" + getkode,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        if(data==''){
                           
                        }else
                        {
                            $("#namamarketing").val(data[0]['nama']);
                            $("#statusmarketing").val('true');
                        }
                    }
                });
            }
            activeBtn();
        }

        function getNoRegAkhir(){
            var noreg_awal = $("#noregawal").val();
            var jumlah_kartu = $("#jumlahkartu").val();
            var total = parseInt(noreg_awal) + parseInt(jumlah_kartu) - 1;
            if(noreg_awal!='' && jumlah_kartu!=''){
                $.ajax({
                    url: "<?php echo base_url();?>dashboard/cekKartu/"+jumlah_kartu+"/"+noreg_awal,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        if(data['status']=='true'){
                           document.getElementById('noregakhir').value = total;
                           $("#statusnoreg").val('true');
                        }else
                        {
                           document.getElementById('noregakhir').value = '';
                           $("#statusnoreg").val('false');
                        }
                    }
                });
            }else{
                document.getElementById('noregakhir').value = '';
                $("#statusnoreg").val('false');
            }
            activeBtn();
        }

        function getTgl(){
            var tgl = $("#tglpenjualan").val();
            if(tgl==""){
                $("#statustgl").val('false');
            }else{
                $("#statustgl").val('true');
            }
            activeBtn();
        }

        function activeBtn(){
            if(document.getElementById('statustertanggung').value=='true' && document.getElementById('statusmarketing').value=='true' && document.getElementById('statusnoreg').value=='true' && document.getElementById('statustgl').value=='true'){
                document.getElementById('btnSubmit').disabled=false;
            }else{
                document.getElementById('btnSubmit').disabled=true;
            }
        }

        function on(){
            document.getElementById('kode').disabled=false;
            document.getElementById('namatertanggung').disabled=false;
            document.getElementById('namamarketing').disabled=false;
            document.getElementById('noregakhir').disabled=false;
            document.getElementById('noregawal').disabled=false;
        }

    </script>

</body>

</html>
<!-- end document-->