
<?php
 
if(isset($_POST['save'])){
    include "dbCon.php";


  $consumer_no = mysqli_real_escape_string($conn,($_POST['consumer_no']));
  $user_name =mysqli_real_escape_string($conn,$_POST['user_name']);
  $user_email = mysqli_real_escape_string($conn,$_POST['user_email']);
  $user_contact = mysqli_real_escape_string($conn,$_POST['user_contact']);
  $user_password = mysqli_real_escape_string($conn,($_POST['user_password']));

  $sql = "SELECT consumer_no FROM user_table WHERE consumer_no = '{$consumer_no}'";

  $result = mysqli_query($conn, $sql) or die("Query Failed.");

  if(mysqli_num_rows($result) > 0){
    echo '<script>alert("you are  already registered user")</script>';
  }else{
    $sql1 = "INSERT INTO user_table (consumer_no,user_name, user_email, user_contact, user_password)
              VALUES ('$consumer_no','{$user_name}','{$user_email}','{$user_contact}','{$user_password}')";
    if(mysqli_query($conn,$sql1)){
        echo '<script>alert("Congratulation now you are the member of NBPDCL")</script>';
               
				echo "<script type='text/javascript'> document.location ='consumer_login.php'; </script>";
        
    }else{
        echo '<script>alert("Please try later")</script>';
    }
  }
}
?>
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

                                            <form onsubmit="return matchPassword()"action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST" autocomplete="off">
                                                <p>Register Yourself Here</p>

                                                <div class="form-group ">

                                                    <input class="form-control" name= "user_name" type="text" placeholder="User Name">
                                                </div>
                                                <div class="form-group mt-2">

                                                    <input class="form-control" name="user_email" value=""
                                                        type="email" placeholder="Enter Email id">
                                                </div>

                                                <div class="form-group mt-2">

                                                    <input class="form-control" name =" user_contact" value="" type="tel"required="true" maxlength="10" placeholder="Contact No.">
                                                </div>

                                                <div class="form-group mt-2">

                                                    <input class="form-control" name ="consumer_no" value="" type="tel" placeholder="Consumer No.">
                                                </div>
                                                <label class="form-group m-2">Password </label><span id="message1" class="text-danger" > </span>

                                                <div class="form-group my-2">
                                               
                                                    <input class="form-control" name ="consumer_password1" id ="consumer_password1"value="" type="password" Placeholder="" >
                                                   
                                                </div>

                                                <div class="form-group mb-3">

                                                    <input class="form-control" name ="user_password" id ="consumer_password" value="" type="password">
                                                </div>
                                                

                                                

                                                <div class="d-flex align-items-center justify-content-center pb-4 ">
                                                  
                                                    
                                                
                                                <button type="submit" name="save" class="btn btn-success">Register</button>
                                                
                                                </div>

                                            </form>

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
    <script>
function matchPassword() {
  var pw1 = document.getElementById("consumer_password1").value;
  var pw2 = document.getElementById("consumer_password").value;
  if(pw1=="")
  {	    document.getElementById("message1").innerHTML="is not entered";
        return false;
  	
  }
  if(pw1 != pw2){
    document.getElementById("message1").innerHTML="is not same";
        return false;
  }
}
</script>
</body>

</html>