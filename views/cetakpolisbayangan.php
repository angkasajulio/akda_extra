<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-POLIS PESERTA AKDA EXTRA</title>
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
                        style="width: 100px; float: right;" />
                </div>
            </div>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>
    <div style="text-align:center">
        <h3>POLIS PESERTA AKDA EXTRA</h3>
    </div>
    <table id="table">
        <tbody>
            <tr>
                <td>Nomor Registrasi</td>
                <td>:</td>
                <td><?php echo $peserta[0]->noreg ?></td>
            </tr>
            <tr>
                <td>Nomor PIN</td>
                <td>:</td>
                <td><?php echo $peserta[0]->nopin ?></td>
            </tr>
            <tr>
                <td>Nama Peserta</td>
                <td>:</td>
                <td><?php echo $peserta[0]->nama ?></td>
            </tr>
            <tr>
                <td>Nomor KTP</td>
                <td>:</td>
                <td><?php echo $peserta[0]->no_ktp ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $peserta[0]->alamat ?></td>
            </tr>
            <tr>
                <td>Nomor Telpon</td>
                <td>:</td>
                <td><?php echo $peserta[0]->no_tlp ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo $peserta[0]->tgllahir ?> </td>
            </tr>
            <tr>
                <td>Tanggal Aktivasi</td>
                <td>:</td>
                <td><?php echo $peserta[0]->tgl_reg ?></td>
            </tr>
            <tr>
                <td>Tanggal Aktif</td>
                <td>:</td>
                <td><?php echo $peserta[0]->tgl_aktif ?></td>
            </tr>
            <tr>
                <td>Tanggal Akhir</td>
                <td>:</td>
                <td><?php echo $peserta[0]->tgl_expired?></td>
            </tr>
        </tbody>
    </table>
    <div style="float: right;">
        <h4>Jakarta, <?php echo date('d M Y') ?></h4>
        <img style="width: 100px;" src="<?php echo base_url().'images/qrcode/'.$peserta[0]->noreg?>">
        <br>Authorized Signature
    </div>
</body>

</html>