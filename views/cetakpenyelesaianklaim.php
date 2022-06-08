<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEMO PENYELESAIAN KLAIM AKDA EXTRA</title>
    <style>
    #table {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #table td,
    #table th {
        padding: 8px;
    }

    #table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #table tr:hover {
        background-color: #ddd;
    }

    #table th {
        padding-top: 10px;
        padding-bottom: 10px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }

    #tablenama {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #tablenama td,
    #tablenama th {
        padding: 8px;
    }

    #tablenama tr:hover {
        background-color: #ddd;
    }

    #tablenama th {
        padding-top: 10px;
        padding-bottom: 10px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
    </style>
</head>

<body>
    <header class="header-desktop4">
        <div class="container">
            <div class="header4-wrap">
                <div class="header__logo">
                    <img src="<?php echo base_url('images/icon/abbedited.png')?>" alt="Akda Extra"
                        style="width: 200px;" />
                    <img src="<?php echo base_url('images/icon/logo mari berasuransi.png')?>" alt="Akda Extra"
                        style="width: 100px; float: right;margin-top: -30px;" />
                </div>
            </div>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>
    <div style="text-align:center">
        <h3>Memo Penyelesaian Klaim Akda Extra</h3>
        <h3><?php echo $info[0]->kd_no_kl?></h3>
    </div>
    <table id="tablenama">
        <tbody>
            <tr>
                <td style="min-width: 130px;">Nama Peserta</td>
                <td>:</td>
                <td><?php echo $info[0]->nama_peserta ?></td>
            </tr>
            <tr>
                <td>Nomor Register</td>
                <td>:</td>
                <td><?php echo $info[0]->noreg ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $info[0]->alamat_peserta ?></td>
            </tr>
            <tr>
                <td>Penyebab Klaim</td>
                <td>:</td>
                <td><?php echo $info[0]->penyebab_klaim ?></td>
            </tr>
            <tr>
                <td>Lokasi Kejadian</td>
                <td>:</td>
                <td><?php echo $info[0]->lokasi_kej ?></td>
            </tr>
        </tbody>
    </table>
    <h3>Klaim</h3>
    <table id="table" border="1">
        <thead>
            <tr>
                <td><center>NO</center></td>
                <td><center>Jenis Klaim</center></td>
                <td><center>Nilai Klaim</center></td>
        </thead>
        <tbody>
            <?php
                $value = 1;
                $totalklaim = 0;
                foreach ($jenisklaim as $klaim){
                    echo"
                        <tr>
                            <td><center>".$value."</center></td>
                            <td>".$klaim->nama_jenis."</td>
                            <td><center>Rp ".number_format($klaim->nilai_klaim)."</center></td>
                        </tr>
                    ";
                    $value++;
                    $totalklaim+=$klaim->nilai_klaim;
                }
                echo "
                    <tr>
                        <td colspan = '2'><center><strong>Total</strong></center></td>
                        <td><center>Rp ".number_format($totalklaim)."</center></td>
                    </tr>
                ";
            ?>
        </tbody>
    </table>
    <h3>Dokumen Klaim</h3>
    <table id="table" border="1">
        <thead>
            <tr>
                <td><center>NO</center></td>
                <td><center>Dokumen Klaim</center></td>
                <td><center>Status</center></td>
        </thead>
        <tbody>
            <?php
                $value = 1;
                foreach ($dokumenklaim as $klaim){
                    echo"
                        <tr>
                            <td><center>".$value."</center></td>
                            <td>".$klaim->nm_detail_lookup."</td>
                            <td><center>".$klaim->status."</center></td>
                        </tr>
                    ";
                    $value++;
                } 
            ?>
        </tbody>
    </table>
    <br>
    <br>
    <div style="border: 1px solid black; ">
        <h4>Analisa dan Evaluasi <?php echo $info[0]->user_input_jabatan ?></h4>
        <textarea cols="254" rows="5" style="border:0px;"><?php echo $info[0]->analisa_klaim?></textarea>
        <br>
        <h4 style="float:right;">Pengajuan</h4>
        <br>
        <br>
        <h4 style="float:right;"><?php echo $info[0]->user_input_jabatan?></h4>
    </div>
    <br>
    <br>
    <?php 
        if(!empty($info[0]->analisa_klaim2)){
            echo"
            <div style='border: 1px solid black; '>
                <h4>Analisa dan Evaluasi Kadiv Akda Extra</h4>
                <textarea cols='254' rows='5' style='border:0px;'>".$info[0]->analisa_klaim2."</textarea>
                <br>
            </div>
            ";
        }
        if($info[0]->kd_status!=5 && !empty($info[0]->analisa_klaim2)){
            echo"
            <br>
            <br>
            <div style='border: 1px solid black; '>
                <h4>Analisa dan Evaluasi ".$jabatantertinggi[0]->user_jabatan."</h4>
                <textarea cols='254' rows='5' style='border:0px;'>".$info[0]->analisa_klaim2."<br>Setuju untuk dibayar</textarea>
                <br>
            </div>
            ";
        }
    ?>
    <div style="float: right;">
        <h4>Jakarta, <?php echo date('d M Y') ?></h4>
        <!--<img style="width: 100px;" src="<?php echo base_url().'images/qrcode/'.$peserta[0]->noreg?>">-->
        <br>
        <br>Authorized Signature
    </div>
</body>

</html>