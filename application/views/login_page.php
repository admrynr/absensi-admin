	<body>

        <!-- Begin page -->
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <?php if($this->session->flashdata())
                    {
                    echo 
                    '<div class="alert alert-danger">'
                      . $this->session->flashdata('error').
                    '</div>';
                    }
                    ?>

                    <h3 class="text-center m-0">
                        <a href="index.html" class="logo logo-admin"><img src="<?php echo base_url('assets/images/logo-smi.png')?>" height="70" alt="logo"></a>
                    </h3>

                    <div class="p-3" style="margin-top: 14px;">
                        <p class="text-muted text-center">Silahkan login dahulu.</p>

                        <form class="form-horizontal m-t-30" method="POST" action="<?php echo site_url('login/login_attempt')?>">

                        	<div class="form-group">
                                <label for="username">Username</label>
                                <input type="username" name="username" class="form-control" id="username" placeholder="Masukkan Username">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" name="userpassword" class="form-control" id="userpassword" placeholder="Masukkan password">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-12 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Login</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p>Belum punya akun ? <a href="<?php echo site_url('home/register')?>" class=" text-primary"> Daftar </a> </p>
                <p>© 2021 - Crafted with <i class="mdi mdi-heart text-danger"></i> by SMI</p>
            </div>

        </div>


        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
        <script src="<?php echo base_url('assets/js/waves.min.js')?>"></script>

        <script src="<?php echo base_url('plugins/jquery-sparkline/jquery.sparkline.min.js')?>"></script>

        <!-- App js -->
        <script src="<?php echo base_url('assets/js/app.js')?>"></script>

    </body>
</html>