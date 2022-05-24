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
    <title>Monitoring Stock</title>

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
                                                    <strong class="card-title text-light">Monitoring Stock</strong>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="statistic__item" id ="" onclick="" style="background-color: rgba(0, 0, 0, 0.05);">
                                                        <h2 class="number"><?php echo $jumlahstock?> Pcs</h2>
                                                        <span class="desc">Kartu</span>
                                                        <div class="icon">
                                                            <i class="zmdi zmdi-account-o"></i>
                                                        </div>
                                                    </div>
                                                    <a style="float:; padding-bottom: 30px; padding-right: 20px;" href=<?php echo base_url('dashboard/penerimaan_kartu')?>>
                                                        <button class="btn btn-success">Detail Kartu</button>
                                                    </a>
                                                    <a style="float: right; padding-bottom: 30px;" href=<?php echo base_url('dashboard/penerimaan_kartu_logistik')?>>
                                                        <button class="btn btn-success">Penerimaan Kartu</button>
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
                                        <input type="hidden" id="value" value="aktif">
                                        <a style="padding-bottom: 10px;"><strong class="">Stock</strong></a>
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>Stock</th>
                                                        <th>Mengirim</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="display:;" id="stock">
                                                    <?php 
                                                        echo "<tr>";
                                                            echo "<td>".$jumlahstock."</td>";
                                                            echo "<td>".$jumlahpengiriman."</td>";
                                                        echo "</tr>";
                                                    ?>
                                                </tbody>
                                                <tbody style="display:none;" id="displaypin">
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <a style="padding-bottom: 10px;"><strong class="">Penerimaan Kartu</strong></a>
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>Stock</th>
                                                        <th>Penjualan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="display:;" id="stock">
                                                    <?php /*foreach ($penjualan as $jual) {
                                                        echo "<tr>";
                                                            echo "<td>".$jual->id."</td>";
                                                            echo "<td>".$jual->nama_tertanggung."</td>";
                                                            echo "<td>".$jual->tgl_penjualan."</td>";
                                                            echo "<td>".($jual->noreg_akhir-$jual->noreg_awal+1)."</td>";
                                                            echo "<td>".$jual->noreg_akhir."</td>";
                                                            echo "<td>".$jual->nama_marketing."</td>";
                                                        echo "</tr>";
                                                        }*/
                                                    ?>
                                                </tbody>
                                                <tbody style="display:none;" id="displaypin">
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <a style="padding-bottom: 10px;"><strong class="">Pengiriman</strong></a>
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>KODE</th>
                                                        <th>TGL. PENGIRIMAN</th>
                                                        <th style="width: 170px;">JUMLAH KARTU</th>
                                                        <th style="width: 170px;">NOREG TERAKHIR</th>
                                                        <th>AKSI</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="display:;" id="penjualan">
                                                    <?php foreach ($pengiriman as $kirim) {
                                                        echo "<tr>";
                                                            echo "<td>".$kirim->id."</td>";                                                           
                                                            echo "<td>".$kirim->tanggal_transaksi."</td>";
                                                            echo "<td>".($kirim->noreg_akhir-$kirim->noreg_awal+1)."</td>";
                                                            echo "<td>".$kirim->noreg_akhir."</td>";
                                                        echo "</tr>";
                                                        }
                                                    ?>
                                                </tbody>
                                                <tbody style="display:none;" id="displaypin">
                                                    
                                                </tbody>
                                            </table>
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