<!doctype html>
<html lang="en">
<?php include 'header.php'; ?>
<body>
        <main>

            <section class="Payment-section">
                <div class="section-overlay"></div>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-9 col-12 mx-auto">
                            <form class="custom-form Payment-form" action="#" method="get" role="form">
                                <h3 class="mb-1">Pay Bill</h3>

                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <h5 class="mt-3">Enter Consumer No. </h5>
                                    </div>

                                    <div class="col-lg-6 col-12 mt-0">
                                        <input type="text" name="donation-name" id="donation-name" class="form-control" placeholder="Conumer No. " required>
                                    </div>

                                    <div class="col-lg-6 col-12 mt-0">
                                        <button type="submit" class="form-control ">Proceed </button>
                                    </div>

                                    <div class="col-lg-12 col-12 mt-3">
                                        <h5 class="mt-2 mb-3">Previous Bill Details </h5>
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
                                      


                                    <div class="col-lg-6 col-12 ">
                                        <div class="input-group" style ="align:center">
                                            <span class="input-group-text" id="basic-addon1" >Enter Amount </span>
                                            
                                            <input type="text" class="form-control" placeholder="Custom amount" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12 mt-2">
                                        <h5 class="mt-1">Personal Info</h5>
                                    </div>

                                    <div class="col-lg-6 col-12 mt-2">
                                        <input type="text" name="donation-name" id="donation-name" class="form-control" placeholder="Enter Name" required>
                                    </div>

                                    <div class="col-lg-6 col-12 mt-2">
                                        <input type="text" name="donation-name" id="donation-name" class="form-control" placeholder="Conatac Number" required>
                                    </div>
                                    <div class="col-lg-6 col-12 mt-2">
                                        <input type="email" name="donation-email" id="donation-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <h5 class="mt-4 pt-1">Choose Payment</h5>
                                    </div>

                                    <div class="col-lg-12 col-12 mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="DonationPayment" id="flexRadioDefault9">
                                            <label class="form-check-label" for="flexRadioDefault9">
                                                <i class="bi-credit-card custom-icon ms-1"></i>
                                                Debit or Credit card
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="DonationPayment" id="flexRadioDefault10">
                                            <label class="form-check-label" for="flexRadioDefault10">
                                                <i class="bi bi-bank"></i>
                                                Inter Net Banking
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="DonationPayment" id="flexRadioDefault10">
                                            <label class="form-check-label" for="flexRadioDefault10">
                                                <i class="bi bi-qr-code"></i>
                                                Qr Code 
                                            </label>
                                        </div>

                                        <button type="submit" class="form-control mt-4">Submit Donation</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </main>

    </body>
    <?php include 'footer.php'?>
</html>