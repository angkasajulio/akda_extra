<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PESERTA AKDA EXTRA</title>
    <style>
    @page {
        margin: 100px 25px;
    }
    #table {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    header{
        position: fixed;
        top: -60px;
        left: 0px;
        right: 0px;
        height: 50px;
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
        <h3>DATA PESERTA AKDA EXTRA</h3>
    </div>
    <table id="table">
        <thead>
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
        <tbody>
            <?php
                foreach($peserta as $peserta){
                    echo "
                        <tr>
                            <td>".$peserta->noreg."</td>
                            <td>".$peserta->nopin."</td>
                            <td>".$peserta->nama."</td>
                            <td>".$peserta->tgl_reg."</td>
                            <td>".$peserta->tgl_aktif."</td>
                            <td>".$peserta->tgl_expired."</td>
                        </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
    <main>
        <p style="page-break-after: always;">
            Content Page 1
        </p>
        <p style="page-break-after: never;">
            Content Page 2
        </p>
    </main>
</body>

</html>