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

    <title> Car Rento</title>
</head>

<body>
   









    <div class="sectionA "
        style="background-image: url(https://wallpapercrafter.com/desktop/5478-car-person-sunset-mountains-nature-4k.jpg);">
        <div class="mask text-white" style="background-color: rgba(0, 0, 0, 0.8)">
            <div class="container d-flex align-items-center text-center h-100">
                <div>
                    <h1 class="mb-5">This is title</h1>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis molestiae
                        laboriosam numquam expedita ullam saepe ipsam, deserunt provident corporis,
                        sit non accusamus maxime, magni nulla quasi iste ipsa architecto? Autem!
                    </p>
                </div>
            </div>
        </div>


    </div>


    <section class="sectionB bg-success">
        <br><br><br><br><br><br><br><br><br>

    </section>











    <section class="sectionC">
        <!-- Swiper -->
        <div class="swiper mySwiper ">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="position-absolute top-0 start-50 translate-middle-x">
                        <img
                            src="https://www.motorionline.com/wp-content/gallery/nuova-suzuki-swift/nuova-suzuki-swift_27.jpeg" />
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="position-absolute top-0 start-50 translate-middle-x">
                        <img src="https://www.ccarprice.com/products/Renault-Kwid-RXL-2019.gif" />
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
                        <img
                            src=" https://img-ik.cars.co.za/news-site-za/images/2021/12/White-PIK-UP-S6_small_1800x1800.jpg" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="position-absolute top-0 start-50 translate-middle-x">
                        <img
                            src="https://images.news18.com/ibnlive/uploads/2021/07/1627184144_1617191884_volkswagen-taigun-suv-1.png" />
                    </div>
                </div>

            </div>



    </section>

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


</body>

</html>