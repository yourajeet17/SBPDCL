
<!doctype html>
<html lang="en">

<?php include 'header.php';?>
<body>
    <main>

        <section class="Payment-section">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">

                    <div class="col-sm-9 col-12 mx-auto">
                        <form class="custom-form Payment-form" action="register_complain_save.php" method="get"
                            role="form">
                            <div>
                                <h3
                                    style="border: 2px solid red; border-radius: 10px; padding: 10px; text-align: center;">
                                    We are here to assist you!</h3>
                                <p><B>Please complete the form below for your complaints.</B></p>
                            </div>


                            <div class="row">


                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-1">Complainant's Details</h5>
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="text" name="con_name" id="donation-name" class="form-control"
                                        placeholder="Full Name">
                                </div>
                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="text" name="con_contact" id="donation-name" class="form-control" required="true" maxlength="10"
                                        placeholder="Contact No">
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="email" name="con_email" id="donation-email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="Email id">
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="text" name="con_address" id="donation-email" class="form-control"
                                        placeholder="Address">
                                </div>

                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-4 pt-1">The complaint is regarding:</h5>
                                </div>

                                <div class="mb-3">
                                    <textarea type="textarea" name="con_complaint" class="form-control"
                                        rows="3"></textarea>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-4 pt-1">The nature of complaint:</h5>
                                </div>

                                <div class="mb-3">
                                    <textarea type="textarea" name="con_complaint_nature" class="form-control"
                                        rows="4"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="text-danger"><B>Name of the
                                            company/person against which/whom the complaint is filed:</B></label>
                                    <input type="text" name="complaint_against" class="form-control"
                                        id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-4 pt-1">
                                        <div class="col-lg-12 col-12">
                                            <h5 class="mt-4 pt-1">The specific details of the complaint:
                                            </h5>
                                        </div>

                                        <div class="mb-3">
                                            <textarea type="textarea" name="complaint_detail" class="form-control"
                                                rows="4"></textarea>
                                        </div>
                                    </h5>
                                </div>


                                <div class="col-lg-12 col-12 mt-2">



                                    <button type="save" class="form-control mt-4">Register Complaint</button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <?php include'footer.php';?>
</body>

</html>