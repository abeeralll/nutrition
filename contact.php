<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="icon" type="image/x-icon" href="image/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <?php include('navbar.php') ?>

    <div class="container-fluid header d-flex justify-content-center align-items-center">
        <span style="font-size:2rem; font-weight:200">"To eat is a necessity, but to eat intelligently is an art."</span>
    </div>


    <div class="container">

        <div class="row mt-5">
            <h1 class="d-flex flex-row justify-content-center align-items-center" style="color:darkgoldenrod; font-weight:400">
                CONTACT ADRIANA
            </h1>
            <p class="d-flex flex-row justify-content-center align-items-center mt-3">
                For any enquiries please complete the details below or feel free to send an email at info@adrianadanielsnutrition.com.au
            </p>
        </div>
        <div class="row mt-3">
            <form>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="fname" class="form-label">First name:</label><br>
                            <input type="text" class="form-control" id="fname" name="fname" required><br>

                        </div>
                        <div class="col">
                            <label for="lname" class="form-label">Last name:</label><br>
                            <input type="text" class="form-control" id="lname" name="lname" required>
                        </div>
                    </div>



                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Message</label>
                    <textarea class="form-control" rows="4" cols="50" name="comment" form="usrform" required>
                    </textarea>


                </div>
                <div class="mt-5 d-flex flex-row justify-content-center align-items-center">
                    <button type="submit" onclick ="submitfu()"class="btn px-5" style="background-color:black; color:#e0b86e;">Submit</button>

                </div>



            </form>
        </div>
        <div class="mt-3 d-flex flex-row justify-content-center align-items-center">
            <div class="p-2"><a href="https://www.facebook.com/abeeral.shrestha10/" target="_blank" class="fa fa-facebook d-flex justify-content-center align-items-center"></a></div>
            <div class="p-2"><a href="https://www.linkedin.com/in/abiral-shrestha-b88a511a5" target="_blank" class="fa fa-linkedin d-flex justify-content-center align-items-center"></a></div>
            <div class="p-2"><a href="https://www.instagram.com/abee_raal/" target="_blank" class="fa fa-instagram  d-flex justify-content-center align-items-center"></a></div>
        </div>

    </div>





    <?php include('footer.php') ?>



</body>

<script src="js/bootstrap.bundle.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="lib/jquery.form.js"></script>
<script src="js/page.js"></script>
<script src="dist/jquery.validate.js"></script>
<script src="https://kit.fontawesome.com/70c966dfe1.js" crossorigin="anonymous"></script>

</html>