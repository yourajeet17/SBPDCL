<!doctype html>
<html lang="en">
<?php include 'header.php';?>


        <main>

            <section class="Payment-section">
                <div class="section-overlay"></div>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-9 col-12 mx-auto">
                            <form class="custom-form Payment-form" action="#" method="get" role="form">
                                <h3 class="mb-1">Check Complaint Status</h3>

                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <h5 class="mt-3">Enter Complaint No. </h5>
                                    </div>

                                    <div class="col-lg-6 col-12 mt-0">
                                        <input type="text" name="donation-name" id="donation-name" class="form-control" placeholder="Complaint Number " required>
                                    </div>

                                    <div class="col-lg-6 col-12 mt-0">
                                        <button type="submit" class="form-control ">Proceed </button>
                                    </div>

                                    
                                    <div class="col-lg-12 col-12 mt-3">
                                        <h5 class="mt-2 mb-3" style =" background-image: linear-gradient(to left, rgba(255,0,0,0), rgba(255,0,0,1));">Current Bill Details </h5>
                                    </div>
                                    <div class="col-lg-12 col-12 ">
                                        <table class="table table-bordered border-primarycaption-top">
                                         
                                            <thead>
                                              <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                    </div>
                                      


                                    
                                    
                                </div>
                            </form>
                        </div>

                    </div>
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