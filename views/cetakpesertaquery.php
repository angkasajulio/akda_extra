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
    <title>Data Master Peserta</title>

    <!-- Logo Icon Title-->
    <link rel="icon" href="<?php echo base_url('images/icon/logo_akda_playstore.png'); ?>">

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url("css/font-face.css") ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('vendor/font-awesome-4.7/css/font-awesome.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('vendor/font-awesome-5/css/fontawesome-all.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("vendor/mdi-font/css/material-design-iconic-font.min.css") ?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url("vendor/bootstrap-4.1/bootstrap.min.css") ?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url("vendor/animsition/animsition.min.css") ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css") ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("vendor/wow/animate.css") ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("vendor/css-hamburgers/hamburgers.min.css") ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("vendor/slick/slick.css") ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("vendor/select2/select2.min.css") ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("vendor/perfect-scrollbar/perfect-scrollbar.css") ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url("css/theme.css") ?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <span id="nextPage"></span>

    <!-- Jquery JS-->
    <script src="<?php echo base_url("vendor/jquery-3.2.1.min.js") ?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url("vendor/bootstrap-4.1/popper.min.js") ?>"></script>
    <script src="<?php echo base_url("vendor/bootstrap-4.1/bootstrap.min.js") ?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url("vendor/slick/slick.min.js") ?>">
    </script>
    <script src="<?php echo base_url("vendor/wow/wow.min.js") ?>"></script>
    <script src="<?php echo base_url("vendor/animsition/animsition.min.js") ?>"></script>
    <script src="<?php echo base_url("vendor/bootstrap-progressbar/bootstrap-progressbar.min.js") ?>">
    </script>
    <script src="<?php echo base_url("vendor/counter-up/jquery.waypoints.min.js") ?>"></script>
    <script src="<?php echo base_url("vendor/counter-up/jquery.counterup.min.js") ?>">
    </script>
    <script src="<?php echo base_url("vendor/circle-progress/circle-progress.min.js") ?>"></script>
    <script src="<?php echo base_url("vendor/perfect-scrollbar/perfect-scrollbar.js") ?>"></script>
    <script src="<?php echo base_url("vendor/chartjs/Chart.bundle.min.js") ?>"></script>
    <script src="<?php echo base_url("vendor/select2/select2.min.js") ?>">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url("js/main.js") ?>"></script>
    <script>
        window.print();
        var status = '<?php echo $this->session->flashdata('status') ?>';
        var url = '<?php echo $this->session->flashdata('url') ?>';
        var jenistanggal = "<?php echo $jenistanggal ?>";
        var tanggalawal = "<?php echo $tgl_awal ?>";
        var tanggalakhir = "<?php echo $tgl_akhir ?>";
        pagingQuery(jenistanggal,tanggalawal,tanggalakhir);        

        function paging(status, page) {
            var penampung = '';
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/next_cetak_peserta/" + status + "/" + page,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    if (data == '') {

                    } else {
                        penampung = `
                        <thead style="background:#4272d7; color:black;">
                            <tr>
                                <center>
                                    <th rowspan="2" style="text-align:center;padding-bottom: 35px;">NOREG</th>
                                    <th rowspan="2" style="text-align:center;padding-bottom: 35px;">NOPIN</th>
                                    <th rowspan="2" style="text-align:center;padding-bottom: 35px;">NAMA</th>
                                    <th colspan="3" style="text-align:center;">TANGGAL</th>
                                </center>
                            </tr>
                            <tr>
                                <center>
                                    <th style="text-align:center;">AKTIVASI</th>
                                    <th style="text-align:center;">AKTIF</th>
                                    <th style="text-align:center;">AKHIR</th>
                                </center>
                            </tr>
                        </thead>
                        <tbody style="color:black;" id="aktif">
                        `;
                        data.forEach((isi) => {
                            penampung += `
                                    <tr>
                                        <td>${isi['noreg']}</td>
                                        <td>${isi['nopin']}</td>
                                        <td>${isi['nama']}</td>
                                        <td>${isi['tgl_reg']}</td>
                                        <td>${isi['tgl_aktif']}</td>
                                        <td>${isi['tgl_expired']}</td> 
                                    <tr>
                                `;
                        });
                        penampung += '</tbody>';
                        document.getElementById('nextPage').innerHTML += `
                                <div class="page-wrapper" style="margin-bottom: -90px;">
                                    <!-- HEADER DESKTOP-->
                                    <?php include('headercetak.php') ?>
                                    <!-- PAGE CONTENT-->
                                    <div class="page-container3">
                                        <?php echo $this->session->flashdata('msg'); ?>
                                        <section class="" style="padding-top: 25px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <!-- PAGE CONTENT-->
                                                        <div class="page-content">
                                                            <div class="row" style="min-height: 0px; margin-bottom: 0px; ">
                                                                <div class="col-md-12">
                                                                    <input type="hidden" id="value" value="aktif">
                                                                    <!-- DATA TABLE-->
                                                                    <div class="table-responsive m-b-40" style="min-height: 1100px;">
                                                                        <table class="table table-border" style="margin-left:auto;margin-right:auto">
                                                                            ${penampung}
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="copyright">
                                                                            <p style="float:right;"> Halaman ${(parseInt(page)+1)}</p>
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
                            `;
                        paging(status, parseInt(page) + 1);
                    }
                }
            });
        }
        function pagingQuery(jenis,tanggalawal,tanggalakhir) {
            var penampung = '';
            var counter=0;
            var page = 0;
            $.ajax({
                url: "<?php echo base_url(); ?>dashboard/next_cetak_peserta_query/" + jenis + "/" + tanggalawal + "/" + tanggalakhir,
                method: "GET",
                async: false,
                dataType: 'json',
                success: function(data) {
                    if (data == '') {

                    } else {
                        var panjang = data.length;
                        data.forEach((isi) => {
                            penampung += `
                                    <tr>
                                        <td>${isi['noreg']}</td>
                                        <td>${isi['nopin']}</td>
                                        <td>${isi['nama']}</td>
                                        <td>${isi['tgl_reg']}</td>
                                        <td>${isi['tgl_aktif']}</td>
                                        <td>${isi['tgl_expired']}</td> 
                                    <tr>
                                `;
                            if(parseInt(counter)==0){
                                counter++;
                            }else
                            if(parseInt(counter)%20==0 || parseInt(panjang)==counter){
                                document.getElementById('nextPage').innerHTML += `
                                <div class="page-wrapper" style="margin-bottom: -90px;">
                                    <!-- HEADER DESKTOP-->
                                    <?php include('headercetak.php') ?>
                                    <!-- PAGE CONTENT-->
                                    <div class="page-container3">
                                        <?php echo $this->session->flashdata('msg'); ?>
                                        <section class="" style="padding-top: 25px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <!-- PAGE CONTENT-->
                                                        <div class="page-content">
                                                            <div class="row" style="min-height: 0px; margin-bottom: 0px; ">
                                                                <div class="col-md-12">
                                                                    <input type="hidden" id="value" value="aktif">
                                                                    <!-- DATA TABLE-->
                                                                    <div class="table-responsive m-b-40" style="min-height: 1100px;">
                                                                        <table class="table table-border" style="margin-left:auto;margin-right:auto">
                                                                            <thead style="background:#4272d7; color:black;">
                                                                                <tr>
                                                                                    <center>
                                                                                        <th rowspan="2" style="text-align:center;padding-bottom: 35px;">NOREG</th>
                                                                                        <th rowspan="2" style="text-align:center;padding-bottom: 35px;">NOPIN</th>
                                                                                        <th rowspan="2" style="text-align:center;padding-bottom: 35px;">NAMA</th>
                                                                                        <th colspan="3" style="text-align:center;">TANGGAL</th>
                                                                                    </center>
                                                                                </tr>
                                                                                <tr>
                                                                                    <center>
                                                                                        <th style="text-align:center;">AKTIVASI</th>
                                                                                        <th style="text-align:center;">AKTIF</th>
                                                                                        <th style="text-align:center;">AKHIR</th>
                                                                                    </center>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody style="color:black;" id="aktif">
                                                                                ${penampung}
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="copyright">
                                                                            <p style="float:right;"> Halaman ${(parseInt(page)+1)}</p>
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
                                `;
                                penampung = '';
                                page++;
                            }                          
                            counter++;
                        });
                    }
                }
            });
        }
    </script>

</body>

</html>
<!-- end document-->