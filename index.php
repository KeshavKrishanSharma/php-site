<?php
include('partials/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">

    <title> Car Rento</title>
    <style>
        .steps {
            background-image: url(https://i.pinimg.com/originals/0e/13/c0/0e13c0a0c04befda2b72c1d5754a2368.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .sectionA {

            background-size: cover;
            background-image: url(https://wallpapercrafter.com/desktop/5478-car-person-sunset-mountains-nature-4k.jpg);
            background-repeat: no-repeat;
            background-position: center;
        }

        .card.op {
            opacity: 90%;
            border-radius: 50px;


        }


    </style>
</head>

<body>








    <!-- header -->
    <header class="sectionA ">
        <div class="mask text-white" style="background-color: rgba(0, 0, 0, 0.8)">
            <div class="container  ">
                <div>
                    <div class="textAnimation   text-center">
                        <h1 class=" p-5"><span> Looking </span> <span>To</span>
                            <br>
                            <span>Rent </span> <span>A</span> <span>Car</span>
                        </h1>
                    </div>
                    <div class=" intro text-center pt-5 mt-4  " style="font-family: 'Niconne', cursive;">
                        <h2 class=" introA mt-3"> Every car in which you seek your interest is right here, available
                        </h2>


                        <h2 class="introB mt-3">Rent / Book a car with 3 easy steps </h2>

                    </div>
                    <div class=" text-center mt-3 pb-5">
                        <button type="button" class="btn btn-secondary btn-rounded shadow-none"><a
                                class="text-white text-decoration-none" href="#ride">Click me</a></button>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>


    </header>




    <!-- steps to book -->
    <section id="ride" class="steps p-5 ">
        <div class="p-5 mt-5 text-center">
            <h1 class="mt-2"> Rent with 3 easy steps</h1>
        </div>

        <div class="container pb-5">
            <div class="row p-3">
                <div class="col-md-4 mt-3">
                    <div class="card op ">
                        <div class="card-body ">
                            <div class="card-title text-center"><svg style="color: rgb(253, 129, 14);"
                                    xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                    class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg><br>
                                <h3>Choose A Location</h3>
                            </div>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="card op">
                        <div class="card-body">
                            <div class="card-title text-center"><svg style="color: rgb(253, 129, 14);"
                                    xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                    class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                </svg><br>
                                <h3>Pick-Up Date</h3>
                            </div>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="card op">
                        <div class="card-body">
                            <div class="card-title text-center"><svg style="color: rgb(253, 129, 14);"
                                    xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                    class="bi bi-car-front-fill " viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189l.956-1.913A.5.5 0 0 1 4.309 3h7.382a.5.5 0 0 1 .447.276l.956 1.913a.51.51 0 0 1-.497.731c-.91-.073-3.35-.17-4.597-.17-1.247 0-3.688.097-4.597.17a.51.51 0 0 1-.497-.731Z" />
                                </svg><br>
                                <h3>Book A Car</h3>
                            </div>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>







    <!-- diplay service -->
    <div id="service"></div>
    <br>
    <br>

    <!-- check for availability -->
    <section class="sectionService">


        <div class=" mt-5 text-center">
            <h1 class="mt-2"> Explore top Deals From Top Explorers</h1>
        </div>
        <!-- Swiper -->
        <div id="bc" class="container-fluid " style="height:65vh ;">
            <div class="swiper mySwiper ">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="position-absolute top-0 start-50 translate-middle-x">
                            <img src="https://www.ccarprice.com/products/BMW_430i_xDrive_Convertible_2022.jpg" />
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="position-absolute top-0 start-50 translate-middle-x">
                            <img
                                src="https://imgd.aeplcdn.com/0x0/n/cw/ec/115453/sonet-right-front-three-quarter.jpeg?isig=0" />
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="position-absolute top-0 start-50 translate-middle-x">
                            <img
                                src="https://www.hyundai.com/content/dam/hyundai/au/en/models/side-profiles/2022-side-profiles/Hyundai_i30-SEDAN-Nline_Fiery-Red_Side-Profile_640x331.png" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="position-absolute top-0 start-50 translate-middle-x">
                            <img src="https://www.ccarprice.com/products/BMW_Alpina_B8_Gran_Coupe_2022_1.jpg" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="position-absolute top-0 start-50 translate-middle-x">
                            <img src="https://static.autox.com/uploads/2021/03/Jeep-Wrangler-Image-4-.jpg" />
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="position-absolute top-0 start-50 translate-middle-x">
                            <img src="https://www.jantacar.in/wp-content/uploads/2020/10/Mystic_Copper_Thar.jpg" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="position-absolute top-0 start-50 translate-middle-x">
                            <img src="https://www.ccarprice.com/products/Volvo-XC60-T5-Momentum-2021.jpg" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="position-absolute top-0 start-50 translate-middle-x">
                            <img
                                src="https://www.vans.mercedes-benz.com/vans/en/sprinter/panel-van/body-variants/image-group/extralong-superhigh/_jcr_content/parsysmeta/meta/image.mq6.png/1627455555000.png" />
                        </div>
                    </div>

                  

                </div>
            </div>
        </div>
        <div class="text-center pb-5 ">
            <a href="booking.php" class="btn cus">Book Now</a>
        </div>

    </section>






    <section class="sectionCheakUpDate">
        <div class="container p-lg-1 p-5">
            <div class="row">
                <div class="col-lg-12 bg-fluid shadow p-4 rounded">
                    <h5 class="mb-4">Check Booking Available date</h5>
                    <form>
                        <div class="row align-items-end">
                            <div class="col-md-3 mb-3">
                                <label class="form-lable" style="font-weight: 500;">Check-in</label>
                                <input type="date" class="form-control shadow-none">

                            </div>


                            <div class="col-md-3 mb-3">
                                <label class="form-lable" style="font-weight: 500;">Check-out</label>
                                <input type="date" class="form-control shadow-none">

                            </div>

                            <div class="col-md-3 mb-3">
                                <label class="form-lable" style="font-weight: 500;">Adult</label>
                           
                                <select class="form-select shadow-none">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label class="form-lable" style="font-weight: 500;">Children</label>
                              
                                <select class="form-select shadow-none">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-1 mb-lg-3 mb-5 ">
                                <button type="submit" class="cus btn  text-white shadow-none "> Submit</button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>






    <!-- Footer -->
    <footer id="contact" class="text-center text-lg-start bg-dark text-white">
        <!-- Section: Social media -->

        <!-- Left -->
        <div class="container text-center p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i
                        class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i
                        class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i
                        class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i
                        class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="#!" role="button"><i
                        class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>

        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Company name
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>

                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="#">KESHAV KRISHAN SHARMA</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "cube",
            grabCursor: true,
            autoplay: {
                delay: 2300,
                disableOnInteraction: false,
            },
            cubeEffect: {
                shadow: false,
                slideShadows: true,

            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</body>

</html>