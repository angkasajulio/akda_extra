<!-- HEADER DESKTOP-->
<header class="header-desktop4">
    <div class="container">
        <div class="header4-wrap">
            <div class="header__logo">
                <a href="<?php echo base_url('dashboard') ?>">
                    <img src="<?php echo base_url('images/icon/abbedited.png')?>" alt="Akda Extra" style="width: 200px;"/>
                </a>
            </div>
            <center>
                <div class="header">
                    <a style="float: center; font-size: 40px; vertical-align: middle; line-height: 100px;">Aplikasi Sistem Informasi Akda Extra</a>
                </div>
            </center>
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="content">
                            <a class="js-acc-btn" href="#"><?php echo $this->session->userdata('username');?></a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#"><?php echo $this->session->userdata('username');?></a>
                                    </h5>
                                    <span class="email"><?php echo $this->session->userdata('email');?></span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="<?php echo base_url('login')?>">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER DESKTOP -->
<!-- WELCOME-->

        <!-- END WELCOME-->