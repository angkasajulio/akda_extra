<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KREDIT NOTA</title>
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
                    <div class = "row">
                        <img src="<?php echo base_url('images/icon/abbedited.png')?>" alt="Akda Extra"
                            style="width: 200px;" />
                        <img src="<?php echo base_url('images/icon/logo mari berasuransi.png')?>" alt="Akda Extra"
                            style="width: 100px; float: right; margin-top: -30px;" />
                    </div>
                </div>
            </div>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>
    <div style="text-align:center">
        <h3>NOTA KREDIT</h3>
    </div>
    <table id="tablenama">
        <tbody>
            <tr>
                <td style="min-width: 130px;">Nomor Dokumen</td>
                <td>:</td>
                <td><?php echo $info[0]->kd_no_kl ?></td>
            </tr>
            <tr>
                <td style="min-width: 130px;">Nomor Register</td>
                <td>:</td>
                <td><?php echo $info[0]->noreg ?></td>
            </tr>
            <tr>
                <td>Nama Peserta</td>
                <td>:</td>
                <td><?php echo $info[0]->nama_peserta ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $info[0]->alamat_peserta ?></td>
            </tr>
            <tr>
                <td>COB</td>
                <td>:</td>
                <td>Akda Extra</td>
            </tr>
        </tbody>
    </table>
    <h3>Klaim Yang Diajukan</h3>
    <table id="table" border="1">
        <thead>
            <tr>
                <td><center>NO</center></td>
                <td><center>Jenis</center></td>
                <td><center>Nilai</center></td>
        </thead>
        <tbody>
            <?php
                $value = 1;
                foreach ($jenisklaim as $klaim){
                    echo"
                        <tr>
                            <td><center>".$value."</center></td>
                            <td>".$klaim->nama_jenis."</td>
                            <td>Rp ".number_format($klaim->nilai_klaim)."</td>
                        </tr>
                    ";
                    $value++;
                } 
                echo"
                    <tr>
                        <td colspan = '2'><center><strong>Total</strong></center>
                        <td><strong>Rp ".number_format($nota[0]->nilai_nt)."</strong></td>
                    </tr>
                ";
            ?>
        </tbody>
    </table>
    <br>
    <br>
    <div style="float: right;">
        <h4>Jakarta, <?php echo date('d M Y',strtotime($nota[0]->tgl_nt)) ?></h4>
        KADIV AKDA & ASIBHARA
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        GATOT SUBROTO, SH.
    </div>
</body>

</html>