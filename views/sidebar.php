<!-- MENU SIDEBAR-->
<aside class="menu-sidebar3 js-spe-sidebar">
    <nav class="navbar-sidebar2 navbar-sidebar3">
        <input type="hidden" id="role" value="<?php echo $this->session->userdata('role'); ?>">
        <ul class="list-unstyled navbar__list">
            <li class="active has-sub">
                <a class="js-arrow" href="<?php echo base_url('dashboard') ?>">
                    <i class="fas fa-archive"></i>Main Menu
                </a>
            </li>
            <span id = "stock_kartu_logistik" style="display: none;">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-credit-card"></i>Stock Kartu Logistik
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?php echo base_url('dashboard/stock_kartu_logistik') ?>">Monitoring Stock</a>
                            <!--<a href="#">Data Master</a>-->
                        </li>
                        <li>
                            <a href="<?php echo base_url('dashboard/request_logistik') ?>">Request</a>
                            <!--<a href="#">Request</a>-->
                        </li>
                    </ul>
                </li>
            </span>
            <span id="pemasar" style="display:;">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-cog"></i>Setup
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?php echo base_url('dashboard/rekanan') ?>">Rekanan</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-credit-card"></i>Stock Kartu
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?php echo base_url('dashboard/stock_kartu') ?>">Monitoring Stock</a>
                            <!--<a href="#">Data Master</a>-->
                        </li>
                        <li>
                            <a href="<?php echo base_url('dashboard/request') ?>">Request</a>
                            <!--<a href="#">Request</a>-->
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-group"></i>Peserta
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?php echo base_url('dashboard/peserta') ?>">Data Master</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('dashboard/history') ?>">History</a>
                        </li>
                        <li>
                            <a class="js-arrowsub" href="#">
                                Report
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-listsub">
                                <li>
                                    <a href="<?php echo base_url('dashboard/query') ?>">Produksi Premi</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('dashboard/schedule_polis') ?>">Schedule Polis</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="js-arrowsub" href="#">
                                Aktivasi
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-listsub">
                                <li>
                                    <a href="<?php echo base_url('dashboard/peserta_daftar') ?>">Perorangan</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('dashboard/peserta_daftar_excel') ?>">Komunitas (Excel)</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('dashboard/peserta_perpanjangan') ?>">Perpanjangan</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('dashboard/peserta_renewal') ?>">Telah Konfirmasi Perpanjang</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-dollar"></i>Penjualan
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?php echo base_url('dashboard/penjualan') ?>">Transaksi</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-hospital-o"></i>Klaim
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?php echo base_url('dashboard/klaim') ?>">Registrasi</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('dashboard/settlement_klaim') ?>">Settlement</a>
                        </li>
                        <li>
                            <a class="js-arrowsub" href="#">
                                Report
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-listsub">
                                <li>
                                    <a href="<?php echo base_url('dashboard/memo_penyelesaian_klaim') ?>">Memo Penyelesaian Klaim</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('dashboard/kredit_nota') ?>">Kredit Nota</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </span>
        </ul>
    </nav>
</aside>
<script>
    var role = document.getElementById('role').value;
    if(role=='PEMASAR'){
        document.getElementById('pemasar').style.display='';
        document.getElementById('stock_kartu_logistik').style.display='none';
    }else if(role=="LOGISTIK"){
        document.getElementById('pemasar').style.display='none';
        document.getElementById('stock_kartu_logistik').style.display='';
    }
</script>
<!-- END MENU SIDEBAR-->