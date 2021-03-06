<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Akda Extra - Login</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('cssadmin/bootstrap.min.css') ?>" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('cssadmin/metisMenu.min.css') ?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url('cssadmin/startmin.css') ?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url('cssadmin/font-awesome.min.css')?> " rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="notifications">
            <?php
                if($this->session->flashdata('login')=='false'){
                    echo $this->session->flashdata('msg');
                }else
                    {
                        
                    }
            ?>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <center><img src="<?php echo base_url('images/icon/abb.png')?>" alt="Akda Extra" style="width: 200px;"/></center>
                            <h3 class="panel-title"><center>APLIKASI SISTEM INFORMASI AKDA EXTRA</center></h3>
                            <h3 class="panel-title"><center>LOGIN</center></h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="<?php echo base_url('login/cek_login')?>">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email" name="email" type="email" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Login">                                    
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- jQuery -->
        <script src="../../jsadmin/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../../jsadmin/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../../jsadmin/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../../jsadmin/startmin.js"></script>

    </body>
</html>
