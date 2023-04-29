<!doctype html>
<?php if (isset($_GET['error'])): ?>
<p><?php echo $_GET['error']; ?></p>
<?php endif ?>
<html lang="en">
<?php include 'header.php'; ?>

<body>
    <main>

        <section class="Payment-section">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-9 col-12 mx-auto">
                        <form class="custom-form Payment-form" action="new_connection_save.php" method="post"
                            enctype="multipart/form-data">

                            <h3 class="mb-4">New Connection</h3>

                            <div class="row">

                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-1">Connection Types</h5>

                                    <select class="form-control" name="Connection_Type" id="Connection_Type" requied>
                                        <option value="" class="form-control">Select Connection Type</option>
                                        <option value="LT" class="form-control">LT(Low Tension Supply)</option>
                                        <option value="HT" class="form-control">HT(High Tension Supply)</option>

                                    </select>

                                </div>


                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-3">Personal Info</h5>
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="text" name="Full_Name" id="donation-name" class="form-control"
                                        placeholder="Full Name" reqired>
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="text" name="Husband_Father_Name" id="donation-name"
                                        class="form-control" placeholder="Husband/Father's Name" rquired>
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="tel" id="conatact_no" name="conatact_no" class="form-control"  required="true" maxlength="10"
                                        placeholder="Contact No.">
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="email" name="email_id" id="email_id" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="Enter Email id">
                                </div>



                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-4 pt-1">Address Details</h5>
                                </div>


                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="text" name="house_no" id="house_no" class="form-control"
                                        placeholder="House No.">
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="text" name="steet" id="steet" class="form-control"
                                        placeholder="Street">
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="text" id="address_line-1" name="address_line-1" class="form-control"
                                        placeholder="Address line - 1 ">
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="text" name="address_line-2" id="address_line-2" class="form-control"
                                        placeholder="Address line - 2">
                                </div>

                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-4 pt-1">Documents Section </h5>
                                </div>

                                <div class="mb-3">
                                    <label for="my_image" class="form-label">Applicant Photo</label>
                                    <input class="form-control" type="file" name="my_image" id="my_image" >
                                </div>

                                <div class="mb-3">
                                    <label for="my_image" class="form-label">Applicant ID proof</label>
                                    <input class="form-control" type="file" name="applicant_id" id="my_image" >
                                </div>


                                <input class="btn btn-success mt-4" type="submit" name="submit" value="Submit">

                            </div>
                    </div>
                    </form>
                </div>

            </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>