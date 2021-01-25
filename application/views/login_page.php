	<body>

        <!-- Begin page -->
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="index.html" class="logo logo-admin"><img src="assets/images/logo-smi.png" height="70" alt="logo"></a>
                    </h3>

                    <div class="p-3" style="margin-top: 14px;">
                        <p class="text-muted text-center">Silahkan login dahulu.</p>

                        <form class="form-horizontal m-t-30" method="GET" action="<?php echo site_url('login/login_attempt')?>">

                        	<div class="form-group">
                                <label for="username">Username</label>
                                <input type="username" class="form-control" id="username" placeholder="Masukkan Username">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" id="userpassword" placeholder="Masukkan password">
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
                <p>Not you ? return <a href="pages-login.html" class=" text-primary"> Sign In </a> </p>
                <p>© 2018 Lexa. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
            </div>

        </div>


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>