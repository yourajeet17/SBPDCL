

<!doctype html>
<html lang="en">

<?php include 'header.php';?>
    <body>
    <main>
    <style>
    .gradient-custom-2 {
        /* fallback for old browsers */
        background: #fccb90;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
    }

    @media (min-width: 768px) {
        .gradient-form {
            height: 100vh !important;
        }
    }

    @media (min-width: 769px) {
        .gradient-custom-2 {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem;
        }
    }
    </style>
        <section class="Payment-section">

            <div class="container" <section class="h-100 gradient-form" style="background-color: #eee;">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-xl-10">
                            <div class="card rounded-3 text-black">
                                <div class="row g-0">
                                    <div class="col-lg-6">
                                        <div class="card-body p-md-5 mx-md-4">

                                            <div class="text-center">
                                                <img src="images\logo.png" style="width: 100px;" alt="logo">
                                                <p class=" mt-2"><B>हमारा आधार... ऊर्जस्वित बिहार</b></p>

                                                <h5>We are Happy to Serve You</h5>
                                            </div>
                                            <form action="login.php" method="post">
                                                <?php if (isset($_GET['error'])) { ?>
                                                    <p class="error"><?php echo $_GET['error']; ?></p><?php } ?>
                                            
                                                <p>Please login to your account</p>

                                                <div class="form-outline mb-4">
                                                
                                                    <input type="text" name ="consumer_no" class="form-control"
                                                        placeholder="Conumser Number" />
                                                  
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input type="password" name ="user_password"  class="form-control" />
                                                   
                                                </div>

                                                <div class="text-center pt-1 mb-5 pb-1">
                                                <button type="submit" class="btn btn-success">Login</button>

                                                    <a class="text-muted" href="#!">Forgot password?</a>
                                                </div>

                                                

                                            </form>
                                            <div class="d-flex align-items-center justify-content-center pb-4">
                                                    <p class="mb-0 me-2">Don't have an account?</p>
                                                    <button type="button" class="btn btn-outline-danger"> <a href ="consumer_registration.php" traget ="_blank"> Create
                                                        new</button></a>
                                                </div>
                                          

                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                            <h4 class="mb-4">We are more than just a company</h4>
                                            <p class="small mb-0 text-white">As many of you may be aware that Government
                                                of Bihar
                                                has restructured the erstwhile Bihar State Electricity Board
                                                into five functionally independent state-owned companies viz. BSPHCL,
                                                SBPDCL,
                                                NBPDCL, BSPTCL & BSPGCL with effect from 1st November, 2012 under the
                                                provision of Bihar State Electricity Reforms Transfer Scheme
                                                2012 and Electricity Act 2003.South Bihar Power Distribution Company
                                                Ltd.

                                                Presently, we are providing uninterrupted power supply in PESU, Area,
                                                Patna i.e. Capital of Bihar and also providing 23-24 Hrs assured power
                                                supply in the entire 17 district HQ
                                                of South Bihar. We are also giving you the assurance for replacementof
                                                defective transformer in the Urban areas in 24
                                                hrs & in rural areas in 72 hrs. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        </div>
        </section>
    </main>

    <?php include 'footer.php';?>


    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>