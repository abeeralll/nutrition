<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steph Butler Nutrition</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container-fluid">
        <?php include('view/navbar.php') ?>

        <div class="body">
            <div class="container header d-flex flex-column justify-content-center align-items-center mt-0">
                <span class="boxText">"Eat Well, Live Strong!"</span>
            </div>

            <div class="container geeks" style="width:60%; height:auto;">
                <img src="image/nutritionist.jpg" class="image">
            </div>

            <div class="container flex-row m-4 align-items-center">
                <h3 class="d-flex flex-row justify-content-center align-items-center">What are clients Saying?</h3>

                <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel"  style="width:60%; height:auto;">
                    <div class="carousel-inner"  >
                        <div class="carousel-item active">
                            <div class="row flex-row justify-content-center align-items-center mt-4">

                                <div class="col-md-6 d-flex flex-column p-0">
                                    <img src="image/emma.jpg" class="image" >
                                </div>
                                <div class="col ">
                                    <div class="row flex-row p-5">
                                        “Working with Steph was very easy and throughout
                                        the 8 weeks not once did it feel like I was on a diet.
                                        I was still eating delicious and filling foods whilst
                                        getting results. Steph was also very helpful and
                                        attentive with any questions that I had asked
                                        throughout the program. Definitely recommended
                                        Steph to help achieve your health and fitness goals.”
                                    </div>
                                    <div class="d-flex flex-row justify-content-center mt-4" style="font-style:italic;">
                                        <h3>-Emma Hayes</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row flex-row justify-content-center align-items-center border">
                                <div class="col-md-6 d-flex flex-column p-0">
                                    <img src="image/pat (2).jpg" class="image" height="500" width="300">
                                </div>
                                <div class="col">
                                    <div class="row flex-row p-5">
                                        “Steph was very friendly and catered to my coeliac disease
                                        needs with a range of exceedingly delicious meals that helped
                                        me achieve my goals. I was immediately impressed with her knowledge
                                        of coeliac disease and by following her recommended meal plan I found
                                        that my energy levels were consistent throughout the day and I have now
                                        learnt how to put together healthy yet delicious meals that aren’t repetitive.
                                        Steph has taught me that I don’t need to deprive myself from great tasting food
                                        in order to lose weight”.
                                    </div>
                                    <div class="d-flex flex-row justify-content-center mt-4" style="font-style:italic;">
                                        <h3>-Pat Cummins</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row flex-row justify-content-center align-items-center border">

                                <div class="col-md-6 d-flex flex-column p-0">
                                    <img src="image/tracey.jpg" class="image" height="500" width="300">
                                </div>
                                <div class="col">
                                    <div class="row flex-row p-5">
                                        “Steph portrays a high level of professionalism and
                                        sincerity. Not only have I lost weight but I now have
                                        more energy and I feel healthier overall. After completing
                                        her 12 week meal plan, I now feel empowered to be able to make
                                        the right choices in regards to my food and eating habits.
                                        Thank you Steph for keeping me motivated, giving me encouragement
                                        and advice each week to help me succeed.”
                                    </div>
                                    <div class="d-flex flex-row justify-content-center mt-4" style="font-style:italic;">
                                        <h3>-Tracey Mosby</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>

        <?php include('view/footer.php') ?>


        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="lib/jquery.form.js"></script>
        <script src="dist/jquery.validate.js"></script>
        <script src="https://kit.fontawesome.com/70c966dfe1.js" crossorigin="anonymous"></script>
</body>

</html>