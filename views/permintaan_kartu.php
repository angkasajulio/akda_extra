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
    <title>Permintaan Kartu</title>

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
                            <?php include 'sidebarkartu.php' ?>
                        </div>
                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">
                                <div class="row">
                                    <div class="col-lg-12">                                            
                                        <div class="container-fluid">
                                            <div class="card">
                                                <div class="card-header bg-success">
                                                    <strong class="card-title text-light">Permintaan Kartu</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- RECENT REPORT-->
                                        
                                        <!-- END RECENT REPORT-->
                                    </div>
                                </div>
                                <div class="row" style="min-height: 550px;">
                                    <div class="col-md-12">
                                        <input type="hidden" id="value" value="aktif">
                                        <strong class="card-title text-light">Monitoring Stock</strong>
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>Kode</th>
                                                        <th>Tanggal Request</th>
                                                        <th>Jumlah Kartu</th>
                                                        <th>Noreg Yang Didapat</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="display:;" id="request">
                                                    <?php /*foreach ($request as $request) {
                                                        if(empty($request->approval)){
                                                            $approval = "Menunggu Akseptasi Request Kartu";
                                                        }elseif($request->approval=='TERIMA'){
                                                            $approval = "Permintaan Request Kartu Diterima";
                                                        }else{
                                                            $approval = "Permintaan Request Kartu Ditolak";
                                                        }
                                                        echo "<tr>";
                                                            echo "<td>".$request->id."</td>";
                                                            echo "<td>".$request->tanggal_transaksi."</td>";
                                                            echo "<td>".$request->jumlah_kartu."</td>";
                                                            echo "<td>".$request->noreg_awal." s/d ".$request->noreg_akhir."</td>";
                                                        echo "</tr>";
                                                        }*/
                                                    ?>
                                                </tbody>
                                                <tbody style="display:none;" id="displaypin">
                                                    
                                                </tbody>
                                            </table>
                                            <div class="card-body"> 
                                                <center>
                                                    <a href='<?php echo base_url('dashboard/request/'.$halaman-1)?>'><button type="button" class="btn btn-outline-primary btn-sm" style="width:78px;">Next</button></a>
                                                    <button type="button" class="btn btn-outline-secondary btn-sm"><?php echo $halaman?></button>
                                                    <a href='<?php echo base_url('dashboard/request/'.$halaman+1)?>'><button type="button" class="btn btn-outline-danger btn-sm" style="width:78px;">Previous</button></a>
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
            document.getElementById("penjualan").style.display = "none";
            document.getElementById(id).style.display = "";

            //Untuk Button Cetak
            document.getElementById("penjualanbtn").style.display = "none";
            document.getElementById(idbtn).style.display = "";

            //Untuk warna tabel atas
            document.getElementById("penjualantbl").style.background = "";
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
                document.getElementById("penjualan").style.display = "none";
                document.getElementById("penjualanbtn").style.display = "none";
                document.getElementById("penjualantbl").style.background = "";
                if(id=='penjualan'){
                    document.getElementById("penjualan").style.display = "";
                    document.getElementById("penjualanbtn").style.display = "";
                    document.getElementById("penjualantbl").style.background = "rgba(0, 0, 0, 0.05)";
                }
            }else{
                $.ajax({
                    url: "<?php echo base_url();?>dashboard/searchNamaPenjualan/" + nama,
                    method: "GET",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
                        if(data==''){
                            document.getElementById("penjualan").style.display = "none";
                            document.getElementById("penjualanbtn").style.display = "none";
                            document.getElementById("penjualantbl").style.background = "";
                        }else
                        {
                            document.getElementById("penjualan").style.display = "none";
                            document.getElementById("penjualanbtn").style.display = "none";
                            document.getElementById("penjualantbl").style.background = "";
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