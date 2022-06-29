
               <?php if($this->session->flashdata('gagal')): ?>
           
             <script>alert("Username atau password salah!")</script> 
                  
           
        <?php endif ?>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-8 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
    
                         
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="<?= base_url('assets/img/logo.png');?>" height="200">
                                    </div>
                                        <br>    
                                            
                                    <form class="user" action="<?php echo site_url('login/aksi_login'); ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="username" aria-describedby="emailHelp"
                                                placeholder="Masukan Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" placeholder="Masukan Password">
                                        </div>
                                      
                                        <input type="submit" class="btn btn-primary btn-user btn-block">
                                          
                                   
                                        <hr>
                                      
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Lupa Password?</a>
                                    </div>
                                   
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

