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
    <title>Registrasi Peserta</title>

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
            <section class=""style="padding-top: 25px;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <?php include 'sidebarpeserta.php' ?>
                        </div>
                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">
                                <div class="row">
                                    <div class="col-lg-12">                                            
                                        <div class="card-header bg-success">
                                            <strong class="card-title text-light">Aktivasi Peserta</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="<?php echo base_url('dashboard/act_peserta_daftar')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="alert alert-danger" role="alert" style="display:none;" id="alertnopin">
                                                    Cek kembali nomor pin kartu!
                                                </div>
                                                <div class="alert alert-danger" role="alert" style="display:none;" id="alertNoPinUsed">
                                                    Nomor PIN Kartu telah digunakan!
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">NO. PIN</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="number" id="nopin" name="nopin" placeholder="Nomor Pin" class="form-control" onkeyup="getPin()">
                                                    </div>
                                                    <input type="hidden" id="statusnopin" value='false'>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">NO. Register</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="number" id="noreg" name="noreg" placeholder="Nomor Register" class="form-control" disabled>
                                                    </div>
                                                    <input type="hidden" id="statusnoreg" value='false'>
                                                </div>
                                                <div class="alert alert-danger" role="alert" style="display:none;" id="alertnonik">
                                                    Nomor Identitas Kosong atau Telah Terdaftar, Cek Kembali Nomor Identitas
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">NO.IDENTITAS</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="number" id="nonik" name="nonik" placeholder="KTP/SIM/KARTU PELAJAR/PASPOR/NRP" class="form-control" onkeyup="cekNik()">
                                                    </div>
                                                    <input type="hidden" id="statusnonik" value='false'>
                                                </div>
                                                <div class="alert alert-danger" role="alert" style="display:none;" id="alertnama">
                                                    Nama hanya diisi dengan huruf
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">NAMA</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="nama" name="nama" placeholder="Nama" class="form-control" onkeyup="cekNama()">
                                                    </div>
                                                    <input type="hidden" id="statusnama" value='false'>
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
                                                    <input type="hidden" id="statusalamat" value='false'>
                                                </div>
                                                <div class="alert alert-danger" role="alert" style="display:none;" id="alerttgllahir">
                                                    Tanggal lahir tidak boleh kosong!
                                                </div>
                                                <div class="alert alert-danger" role="alert" style="display:none;" id="alertumur">
                                                    Umur Calon Peserta Antara 10 -  65 Tahun!
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">TANGGAL LAHIR</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="date" id="tgllahir" name="tanggallahir" placeholder="Tanggal Lahir" class="form-control" onchange="cekTglLahir()">
                                                    </div>
                                                    <input type="hidden" id="statustgllahir" value='false'>
                                                </div>
                                                <div class="alert alert-danger" role="alert" style="display:none;" id="alertnotelp">
                                                    Nomor Telpon tidak boleh kosong!
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">NO. TELPON</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="number" id="notelp" name="notelp" placeholder="Nomor Telpon" class="form-control" onkeyup="cekNoTelp()">
                                                    </div>
                                                    <input type="hidden" id="statusnotelp" value='false'>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">TANGGAL AKTIVASI</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="date" id="tglregister" name="tglregister" placeholder="Tanggal Register" class="form-control" value="<?php echo date("Y-m-d"); ?>" onchange="getTgl()">
                                                    </div>
                                                    <input type="hidden" id="statustglregister" value='true'>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">TANGGAL AKTIF</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="date" id="tglaktif" name="tglaktif" placeholder="tanggal expired" class="form-control" value="<?php echo date("Y-m-d",strtotime('+2 days')); ?>" disabled>
                                                    </div>
                                                    <input type="hidden" id="statustglaktif" value='false'>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">TANGGAL AKHIR</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="date" id="tglexpired" name="tglexpired" placeholder="Tanggal Expired" class="form-control" value="<?php echo date("Y-m-d",strtotime('+1 years 2 days')); ?>" disabled>
                                                    </div>
                                                    <input type="hidden" id="statustglexpired" value='false'>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary btn-sm" id='btnSubmit' disabled>
                                                        <i class="fa fa-dot-circle-o"></i> Save
                                                    </button>
                                                    <a href = "<?php echo base_url('dashboard/peserta');?>" class="btn btn-danger btn-sm">
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
        function getPin(){
            document.getElementById('alertNoPinUsed').style.display="none";
            document.getElementById('alertnopin').style.display="none";
            var nopin = $("#nopin").val();
            console.log(nopin.length);
            if(nopin.length<8){
                document.getElementById('statusnopin').value='false';
                document.getElementById('statusnoreg').value='false';
            }
            else
            if(nopin==''){
                document.getElementById('alertnopin').style.display=""; 
            }else{
                $.ajax({
                    url: "<?php echo base_url();?>dashboard/cekNoreg/" + nopin,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        if(data==''){
                            document.getElementById('alertnopin').style.display="";
                            $("#noreg").val(0);
                            document.getElementById('statusnopin').value='false';
                            document.getElementById('statusnoreg').value='false';
                        }else
                        {
                            if(data[0]['flag']==3)
                            {
                                $("#noreg").val(data[0]['no_reg']);
                                document.getElementById('alertnopin').style.display="none";
                                document.getElementById('statusnopin').value='true';
                                document.getElementById('statusnoreg').value='true';
                            }else{
                                document.getElementById('alertnopin').style.display="none";
                                document.getElementById('statusnoreg').value='false';
                                document.getElementById('statusnopin').value='false';
                                document.getElementById('alertNoPinUsed').style.display="";
                            }
                        }
                    }
                });
            }
            activeBtn();
        }
        function cekNik() {
            var nik = $("#nonik").val();
            if(nik==''){
                document.getElementById('alertnonik').style.display="";
                document.getElementById('statusnonik').value="false";
            }else{
                $.ajax({
                    url: "<?php echo base_url();?>dashboard/cekNoNik/" + nik,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        if(data==''){
                            document.getElementById('alertnonik').style.display="none";
                            document.getElementById('statusnonik').value="true";
                        }else
                        {
                            document.getElementById('alertnonik').style.display="";
                            document.getElementById('statusnonik').value="false";
                        }
                    }
                });
                //document.getElementById('alertnonik').style.display="none";
                //document.getElementById('statusnonik').value="true";
            }
            activeBtn();
        }
        function getTgl() {
            var tglregister = $('#tglregister').val();
            if (tglregister==''){
                document.getElementById('tglaktif').value = '';
                document.getElementById('tglexpired').value = '';
                document.getElementById('statustglregister').value='false';
                document.getElementById('statustglaktif').value='false';
                document.getElementById('statustglexpired').value='false';
            }else
            {            
                var tglregisterconvert = new Date(tglregister);
                var tanggalaktif = new Date(tglregisterconvert.getTime()+(2*24*60*60*1000));
                var tanggalexpired = new Date(tglregisterconvert.getTime()+(367*24*60*60*1000));
                $("#tglaktif").val(new Date(tanggalaktif).toISOString().slice(0, 10));
                document.getElementById('tglexpired').value = new Date(tanggalexpired).toISOString().slice(0, 10);
                document.getElementById('statustglregister').value='true';
                document.getElementById('statustglaktif').value='true';
                document.getElementById('statustglexpired').value='true';
            }
            activeBtn();
        }
        function cekNama(){
            var nama = $('#nama').val();
            var pola = /[0-9]/;
            console.log(pola.test(nama));
            if(nama===''){
                document.getElementById('statusnama').value="false";
            }else
            {
                if(pola.test(nama)){
                    document.getElementById('alertnama').style.display="";
                    document.getElementById('statusnama').value="false";
                }else{
                    document.getElementById('alertnama').style.display="none";
                    document.getElementById('statusnama').value="true";
                }
            }
            activeBtn();
        }
        function cekAlamat() {
            var alamat = $("#alamat").val();
            if(alamat==''){
                document.getElementById('alertalamat').style.display="";
                document.getElementById('statusalamat').value="false";
            }else{
                document.getElementById('alertalamat').style.display="none";
                document.getElementById('statusalamat').value="true";
            }
            activeBtn();
        }
        function cekTglLahir(){
            var tgllahir = $("#tgllahir").val();
            document.getElementById('alerttgllahir').style.display="none";
            document.getElementById('alertumur').style.display = "none";
            if(tgllahir==''){
                document.getElementById('alerttgllahir').style.display="";
                document.getElementById('statustgllahir').value="false";
            }else{
                var today = new Date();
                var tanggallahir = new Date(tgllahir);
                var year = 0;
                if (today.getMonth() < tanggallahir.getMonth()) {
                    year = 1;
                } else if ((today.getMonth() == tanggallahir.getMonth()) && today.getDate() < tanggallahir.getDate()) {
                    year = 1;
                }
                var age = today.getFullYear() - tanggallahir.getFullYear() - year;
                console.log(age);
                if(parseInt(age)<10 || parseInt(age)>65){
                    console.log('Tidak bisa boyyyy');
                    document.getElementById('alertumur').style.display = "";
                    document.getElementById('statustgllahir').value="false";
                }else
                {
                    console.log('bisa booyy');
                    document.getElementById('alerttgllahir').style.display="none";
                    document.getElementById('statustgllahir').value="true";
                }
            }
            activeBtn();
        }
        function cekNoTelp(){
            var notelp = $("#notelp").val();
            if(notelp==''){
                document.getElementById('alertnotelp').style.display="";
                document.getElementById('statusnotelp').value="false";
            }else{
                document.getElementById('alertnotelp').style.display="none";
                document.getElementById('statusnotelp').value="true";
            }
            activeBtn();
        }
        function activeBtn(){
            if(document.getElementById('statusnopin').value=='true' && document.getElementById('statusnama').value=='true' && document.getElementById('statusnonik').value=='true' && document.getElementById('statusalamat').value=='true' && document.getElementById('statustgllahir').value=='true' && document.getElementById('statusnotelp').value=='true'&& document.getElementById('statustglregister').value=='true'){
                document.getElementById('btnSubmit').disabled=false;
            }else{
                document.getElementById('btnSubmit').disabled=true;
            }
        }

    </script>

</body>

</html>
<!-- end document-->