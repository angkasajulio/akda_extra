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
    <title>Data Master Rekanan</title>

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
            <section class="" style="padding-top:25px;">
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
                                        <div class="container-fluid">
                                            <div class="card">
                                                <div class="card-header bg-success">
                                                    <strong class="card-title text-light">Data Master Rekanan</strong>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="statistic__item" id ="tertanggungtbl" onclick="on('tertanggung','tertanggungbtn','tertanggungtbl')" style="background-color: rgba(0, 0, 0, 0.05);">
                                                        <h2 class="number"><?php echo $jumlahtertanggung ?> Rekanan</h2>
                                                        <span class="desc">Tertanggung</span>
                                                        <div class="icon">
                                                            <i class="zmdi zmdi-account-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="statistic__item" id ="marketingtbl" onclick="on('marketing','marketingbtn','marketingtbl')">
                                                        <h2 class="number"><?php echo $jumlahmarketing ?> Rekanan</h2>
                                                        <span class="desc">Marketing</span>
                                                        <div class="icon">
                                                            <i class="zmdi zmdi-account-o"></i>
                                                        </div>
                                                    </div>
                                                    <a style="float: right; padding-bottom: 30px;" href=<?php echo base_url('dashboard/tambah_rekanan')?>>
                                                        <button class="btn btn-success">Tambah Rekanan</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- RECENT REPORT-->
                                        
                                        <!-- END RECENT REPORT-->
                                    </div>
                                </div>
                                <div class="row" style="min-height: 550px;">
                                    <div class="col-md-12">
                                        <input class="au-input au-input--full au-input--h65" type="text" placeholder="Cari nama" style="margin-bottom: 20px;" onkeyup="searchNama()" id="nama">
                                        <input type="hidden" id="value" value="aktif">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>KODE</th>
                                                        <th>NAMA</th>
                                                        <th>ALAMAT</th>
                                                        <th style="width: 170px;">STATUS</th>
                                                        <th>AKSI</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="display:;" id="tertanggung">
                                                    <?php foreach ($rekantertanggung as $rekan) {
                                                        echo "<tr>";
                                                            echo "<td>".$rekan->id."</td>";
                                                            echo "<td>".$rekan->nama."</td>";
                                                            echo "<td>".$rekan->alamat."</td>";
                                                            echo "<td>".$rekan->status."</td>";
                                                        echo "</tr>";
                                                        }
                                                    ?>
                                                </tbody>
                                                <tbody style="display:none;" id="marketing">
                                                    <?php foreach ($rekanmarketing as $rekan) {
                                                        echo "<tr>";
                                                            echo "<td>".$rekan->id."</td>";
                                                            echo "<td>".$rekan->nama."</td>";
                                                            echo "<td>".$rekan->alamat."</td>";
                                                            echo "<td>".$rekan->status."</td>";
                                                        echo "</tr>";
                                                        }
                                                    ?> 
                                                </tbody>
                                                <tbody style="display:none;" id="displaypin">
                                                    
                                                </tbody>
                                            </table>
                                            <div class="card-body"> 
                                                <center>
                                                    <a href='<?php echo base_url('dashboard/rekanan/'.$halaman-1)?>'><button type="button" class="btn btn-outline-primary btn-sm" style="width:78px;">Next</button></a>
                                                    <button type="button" class="btn btn-outline-secondary btn-sm"><?php echo $halaman?></button>
                                                    <a href='<?php echo base_url('dashboard/rekanan/'.$halaman+1)?>'><button type="button" class="btn btn-outline-danger btn-sm" style="width:78px;">Previous</button></a>
                                                </center>
                                            </div>
                                            <div class="au-task__footer" id="tertanggungbtn">
                                                    <a style="float: right;" href=<?php echo base_url('dashboard/cetak')?>>
                                                        <button class="btn btn-primary">Cetak</button>
                                                    </a>
                                            </div>
                                            <div class="au-task__footer" id="marketingbtn" style="display: none;">
                                                    <a style="float: right;" href=<?php echo base_url('dashboard/cetak')?>>
                                                        <button class="btn btn-primary">Cetak</button>
                                                    </a>
                                            </div>
                                        </div>
                                        <!-- END DATA TABLE-->
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
        function on(id,idbtn,idtbl) {
            //Untuk Tabel
            document.getElementById("tertanggung").style.display = "none";
            document.getElementById("marketing").style.display = "none";
            document.getElementById(id).style.display = "";

            //Untuk Button Cetak
            document.getElementById("tertanggungbtn").style.display = "none";
            document.getElementById("marketingbtn").style.display = "none";
            document.getElementById(idbtn).style.display = "";

            //Untuk warna tabel atas
            document.getElementById("tertanggungtbl").style.background = "";
            document.getElementById("marketingtbl").style.background = "";
            document.getElementById(idtbl).style.background = "rgba(0, 0, 0, 0.05)";

            //Mematikan display pin
            document.getElementById("displaypin").style.display = "none";

            //Memberikan id yang aktif terakhir
            document.getElementById("value").value=id;
        }
        function searchNama(){
            var nama = $("#nama").val();
            var id = $("#value").val();
            document.getElementById('displaypin').innerHTML='';
            if(nama==''){
                document.getElementById('tertanggung').style.display="none";
                document.getElementById('tertanggungbtn').style.display = "none";
                document.getElementById('tertanggungtbl').style.background = ""; 
                document.getElementById("marketing").style.display = "none";
                document.getElementById("marketingbtn").style.display = "none";
                document.getElementById("marketingtbl").style.background = "";
                if(id=='tertanggung'){
                    document.getElementById("tertanggung").style.display = "";
                    document.getElementById("tertanggungbtn").style.display = "";
                    document.getElementById("tertanggungtbl").style.background = "rgba(0, 0, 0, 0.05)";
                }else
                if(id=='marketing'){
                    document.getElementById("marketing").style.display = "";
                    document.getElementById("marketingbtn").style.display = "";
                    document.getElementById("marketingtbl").style.background = "rgba(0, 0, 0, 0.05)";
                }
            }else{
                $.ajax({
                    url: "<?php echo base_url();?>dashboard/searchNamaRekanan/" + nama,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
                        if(data==''){
                            document.getElementById("tertanggung").style.display = "none";
                            document.getElementById("marketing").style.display = "none";
                            document.getElementById("tertanggungbtn").style.display = "none";
                            document.getElementById("marketingbtn").style.display = "none";
                            document.getElementById("tertanggungtbl").style.background = "";
                            document.getElementById("marketingtbl").style.background = "";
                            document.getElementById('displaypin').style.display='';
                        }else
                        {
                            document.getElementById("tertanggung").style.display = "none";
                            document.getElementById("marketing").style.display = "none";
                            document.getElementById("tertanggungbtn").style.display = "none";
                            document.getElementById("marketingbtn").style.display = "none";
                            document.getElementById("tertanggungtbl").style.background = "";
                            document.getElementById("marketingtbl").style.background = "";
                            document.getElementById('displaypin').style.display='';
                            data.forEach((isi)=>{
                                document.getElementById('displaypin').innerHTML += `<tr><td>${isi['id']}</td><td>${isi['nama']}</td><td>${isi['alamat']}</td><td>${isi['status']}</td></tr>`;
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