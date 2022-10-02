<?php
include('partials/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width= , initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/index.css">
  <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title> Car Rento</title>
  <style>
    #pop {
      box-shadow: rgba(233, 46, 240, 0.4) -5px 5px, rgba(46, 217, 240, 0.3) -10px 10px, rgba(169, 46, 240, 0.2) -15px 15px, rgba(179, 46, 240, 0.1) -20px 20px, rgba(59, 46, 240, 0.05) -25px 25px;
    }
  </style>
</head>

<body>

  <div class="my-5 px-4">
    <h2 class="fw-bold text-center">Book your Car</h2>
    <div class="h-line bg-dark"></div>

  </div>

  <div class="container p-2">
    <div class="row">
      <div class="col-lg-3 col-md-12 px-4">


        <nav class="navbar navbar-expand-lg bg-light rounded shadow">
          <div class="container-fluid flex-lg-column align-items-lg-stretch">
            <h4 class="mt-2">Filters</h4>
            <button class="navbar-toggler bg-danger" type="button" data-bs-toggle="collapse"
              data-bs-target="#filterDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column" id="filterDropdown">
              <div class="border bg-light p-3 round mb-3 w-100">
                <h5 class="mb-3" style="font-size: 18px;">Cheak Availablity</h5>
                <label class="form-label">Cheak-in</label>
                <input type="date" class="form-control shadow-none">

                <label class="form-label">Cheak-out</label>
                <input type="date" class="form-control shadow-none">
              </div>


              <div class="border bg-light p-3 round mb-3  w-100">
                <h5 class="mb-3" style="font-size: 18px;">Facilities</h5>
                <div class="mb-2">
                  <input type="checkbox" id="f1" class="form-check-input shadow-none">
                  <label class="form-check-label" for="f1">4 seater</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f2" class="form-check-input shadow-none">
                  <label class="form-check-label" for="f2">5+ seater</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f3" class="form-check-input shadow-none">
                  <label class="form-check-label" for="f3">8+ seater</label>
                </div>




              </div>
            </div>
          </div>
        </nav>





      </div>

      <div class="col-lg-9 col-md-12 px-4">
        <div id="bob" class="bg-white pt-0 pb-0 ps-0 pe-0  rounded shadow p-4 border-top  border-warning border-4">
          <div id class="card mb-3 shadow border-0">
            <div class="row g-0 p-2 align-items-center">
              <div class="col-md-3 text-center">
                <img src="  https://media.zigcdn.com/media/model/2022/Feb/swift-2_195x130.jpg"
                  class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <div class="card-body pt-0">
                    <h5 class="card-title">Car Name</h5>
                    <h6 class="mb-3">
                      &#8377 1000 + &#8377 42/- Per KM</h6>
                    <div class="features mb-3">
                      <h6>Features</h6>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> 4 seater</span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">1490 cc </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">Petrol </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> Vehicle number XXXXxxX </span>
                    </div>

                    <div class="rating ">
                      <h6>Rating</h6>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-2">
                <div class="text-center  ">
                  <a href="#showCarDeals" class="btn cus">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>






        <div id="bob" class="bg-white pt-0 pb-0 ps-0 pe-0  rounded shadow p-4 border-top  border-warning border-4">
          <div id class="card mb-3 shadow border-0">
            <div class="row g-0 p-2 align-items-center">
              <div class="col-md-3 text-center">
                <img src="https://media.zigcdn.com/media/model/2019/Sep/bmw_7_series_195x130.jpg"
                  class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <div class="card-body pt-0">
                    <h5 class="card-title">Car Name</h5>
                    <h6 class="mb-3">
                      &#8377 1000 + &#8377 42/- Per KM</h6>
                    <div class="features mb-3">
                      <h6>Features</h6>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> 4 seater</span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">1490 cc </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">Petrol </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> Vehicle number XXXXxxX </span>
                    </div>

                    <div class="rating ">
                      <h6>Rating</h6>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-2">
                <div class="text-center  ">
                  <a href="#showCarDeals" class="btn cus">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>








        <div id="bob" class="bg-white pt-0 pb-0 ps-0 pe-0  rounded shadow p-4 border-top  border-warning border-4">
          <div id class="card mb-3 shadow border-0">
            <div class="row g-0 p-2 align-items-center">
              <div class="col-md-3 text-center">
                <img src="https://media.zigcdn.com/media/model/2022/Sep/grand-1_195x130.jpg"
                  class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <div class="card-body pt-0">
                    <h5 class="card-title">Car Name</h5>
                    <h6 class="mb-3">
                      &#8377 1000 + &#8377 42/- Per KM</h6>
                    <div class="features mb-3">
                      <h6>Features</h6>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> 4 seater</span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">1490 cc </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">Petrol </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> Vehicle number XXXXxxX </span>
                    </div>

                    <div class="rating ">
                      <h6>Rating</h6>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-2">
                <div class="text-center  ">
                  <a href="#showCarDeals" class="btn cus">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>




        <div id="bob" class="bg-white pt-0 pb-0 ps-0 pe-0  rounded shadow p-4 border-top  border-warning border-4">
          <div id class="card mb-3 shadow border-0">
            <div class="row g-0 p-2 align-items-center">
              <div class="col-md-3 text-center">
                <img src="https://media.zigcdn.com/media/model/2022/May/city_hybrid_195x130.jpg"
                  class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <div class="card-body pt-0">
                    <h5 class="card-title">Car Name</h5>
                    <h6 class="mb-3">
                      &#8377 1000 + &#8377 42/- Per KM</h6>
                    <div class="features mb-3">
                      <h6>Features</h6>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> 4 seater</span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">1490 cc </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">Petrol </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> Vehicle number XXXXxxX </span>
                    </div>

                    <div class="rating ">
                      <h6>Rating</h6>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-2">
                <div class="text-center  ">
                  <a href="#showCarDeals" class="btn cus">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>





        <div id="bob" class="bg-white pt-0 pb-0 ps-0 pe-0  rounded shadow p-4 border-top  border-warning border-4">
          <div id class="card mb-3 shadow border-0">
            <div class="row g-0 p-2 align-items-center">
              <div class="col-md-3 text-center">
                <img src="https://media.zigcdn.com/media/model/2022/Sep/xc90-4_195x130.jpg"
                  class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <div class="card-body pt-0">
                    <h5 class="card-title">Car Name</h5>
                    <h6 class="mb-3">
                      &#8377 1000 + &#8377 42/- Per KM</h6>
                    <div class="features mb-3">
                      <h6>Features</h6>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> 4 seater</span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">1490 cc </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">Petrol </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> Vehicle number XXXXxxX </span>
                    </div>

                    <div class="rating ">
                      <h6>Rating</h6>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-2">
                <div class="text-center  ">
                  <a href="#showCarDeals" class="btn cus">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>





        <div id="bob" class="bg-white pt-0 pb-0 ps-0 pe-0  rounded shadow p-4 border-top  border-warning border-4">
          <div id class="card mb-3 shadow border-0">
            <div class="row g-0 p-2 align-items-center">
              <div class="col-md-3 text-center">
                <img src="https://media.zigcdn.com/media/model/2022/Feb/celerio-2_195x130.jpg"
                  class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <div class="card-body pt-0">
                    <h5 class="card-title">Car Name</h5>
                    <h6 class="mb-3">
                      &#8377 1000 + &#8377 42/- Per KM</h6>
                    <div class="features mb-3">
                      <h6>Features</h6>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> 4 seater</span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">1490 cc </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">Petrol </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> Vehicle number XXXXxxX </span>
                    </div>

                    <div class="rating ">
                      <h6>Rating</h6>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-2">
                <div class="text-center  ">
                  <a href="#showCarDeals" class="btn cus">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>






        <div id="bob" class="bg-white pt-0 pb-0 ps-0 pe-0  rounded shadow p-4 border-top  border-warning border-4">
          <div id class="card mb-3 shadow border-0">
            <div class="row g-0 p-2 align-items-center">
              <div class="col-md-3 text-center">
                <img src="https://media.zigcdn.com/media/model/2021/Aug/amaze_195x130.jpg"
                  class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <div class="card-body pt-0">
                    <h5 class="card-title">Car Name</h5>
                    <h6 class="mb-3">
                      &#8377 1000 + &#8377 42/- Per KM</h6>
                    <div class="features mb-3">
                      <h6>Features</h6>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> 4 seater</span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">1490 cc </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">Petrol </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> Vehicle number XXXXxxX </span>
                    </div>

                    <div class="rating ">
                      <h6>Rating</h6>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-2">
                <div class="text-center  ">
                  <a href="#showCarDeals" class="btn cus">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>






        <div id="bob" class="bg-white pt-0 pb-0 ps-0 pe-0  rounded shadow p-4 border-top  border-warning border-4">
          <div id class="card mb-3 shadow border-0">
            <div class="row g-0 p-2 align-items-center">
              <div class="col-md-3 text-center">
                <img src="https://media.zigcdn.com/media/model/2019/Sep/bmw_7_series_195x130.jpg"
                  class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <div class="card-body pt-0">
                    <h5 class="card-title">Car Name</h5>
                    <h6 class="mb-3">
                      &#8377 1000 + &#8377 42/- Per KM</h6>
                    <div class="features mb-3">
                      <h6>Features</h6>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> 4 seater</span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">1490 cc </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">Petrol </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> Vehicle number XXXXxxX </span>
                    </div>

                    <div class="rating ">
                      <h6>Rating</h6>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-2">
                <div class="text-center  ">
                  <a href="#showCarDeals" class="btn cus">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>






        <div id="bob" class="bg-white pt-0 pb-0 ps-0 pe-0  rounded shadow p-4 border-top  border-warning border-4">
          <div id class="card mb-3 shadow border-0">
            <div class="row g-0 p-2 align-items-center">
              <div class="col-md-3 text-center">
                <img src="https://media.zigcdn.com/media/model/2020/Sep/verna-3_195x130.jpg"
                  class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <div class="card-body pt-0">
                    <h5 class="card-title">Car Name</h5>
                    <h6 class="mb-3">
                      &#8377 1000 + &#8377 42/- Per KM</h6>
                    <div class="features mb-3">
                      <h6>Features</h6>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> 4 seater</span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">1490 cc </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">Petrol </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> Vehicle number XXXXxxX </span>
                    </div>

                    <div class="rating ">
                      <h6>Rating</h6>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-2">
                <div class="text-center  ">
                  <a href="#showCarDeals" class="btn cus">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>






        <div id="bob" class="bg-white pt-0 pb-0 ps-0 pe-0  rounded shadow p-4 border-top  border-warning border-4">
          <div id class="card mb-3 shadow border-0">
            <div class="row g-0 p-2 align-items-center">
              <div class="col-md-3 text-center">
                <img src="https://media.zigcdn.com/media/model/2022/Feb/swift-2_195x130.jpg"
                  class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <div class="card-body pt-0">
                    <h5 class="card-title">Car Name</h5>
                    <h6 class="mb-3">
                      &#8377 1000 + &#8377 42/- Per KM</h6>
                    <div class="features mb-3">
                      <h6>Features</h6>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> 4 seater</span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">1490 cc </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">Petrol </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> Vehicle number XXXXxxX </span>
                    </div>

                    <div class="rating ">
                      <h6>Rating</h6>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-2">
                <div class="text-center  ">
                  <a href="#showCarDeals" class="btn cus">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>






        <div id="bob" class="bg-white pt-0 pb-0 ps-0 pe-0  rounded shadow p-4 border-top  border-warning border-4">
          <div id class="card mb-3 shadow border-0">
            <div class="row g-0 p-2 align-items-center">
              <div class="col-md-3 text-center">
                <img src="https://media.zigcdn.com/media/model/2019/Sep/bmw_7_series_195x130.jpg"
                  class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <div class="card-body pt-0">
                    <h5 class="card-title">Car Name</h5>
                    <h6 class="mb-3">
                      &#8377 1000 + &#8377 42/- Per KM</h6>
                    <div class="features mb-3">
                      <h6>Features</h6>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> 4 seater</span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">1490 cc </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap">Petrol </span>
                      <span class="badge rounded-pill bg-dark text-white text-wrap"> Vehicle number XXXXxxX </span>
                    </div>

                    <div class="rating ">
                      <h6>Rating</h6>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                      <i class="fa-solid fa-star text-warning"></i>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-2">
                <div class="text-center  ">
                  <a href="#showCarDeals" class="btn cus">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>






      </div>
    </div>
  </div>








        
  <div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6  mb-4 px-4">
            <div id="bobc" class="bg-white rounded shadow p-4 border-top border-dark border-4">
                <div class="text-center ">
                    <img src="https://cdn-icons-png.flaticon.com/512/2555/2555021.png" width="55" height="55"><br>
                    <h4 class="mt-3">100+ cars</h4>

                </div>
            </div>
        </div>


        <div class="col-lg-3 col-md-6  mb-4 px-4">
            <div id="bobc" class="bg-white rounded shadow p-4 border-top border-dark border-4">
                <div class="text-center ">


                    <img src="https://cdn-icons-png.flaticon.com/512/5225/5225045.png" width="55" height="55"><br>
                    <h4 class="mt-3">299+ customers</h4>

                </div>
            </div>
        </div>


        <div class="col-lg-3 col-md-6  mb-4 px-4">
            <div id="bobc" class="bg-white rounded shadow p-4 border-top border-dark border-4">
                <div class="text-center ">

                    <img src="https://cdn-icons-png.flaticon.com/512/172/172117.png" width="55" height="55"><br>
                    <h3 class="mt-3">150+ reviews</h3>

                </div>
            </div>
        </div>


        <div class="col-lg-3 col-md-6  mb-4 px-4">
            <div id="bobc" class="bg-white rounded shadow p-4 border-top border-dark border-4">
                <div class="text-center ">

                    <img src="https://cdn-icons-png.flaticon.com/512/1478/1478951.png" width="55" height="55"><br>
                    <h3 class="mt-3">200+ staffs</h3>

                </div>
            </div>
        </div>



    </div>
</div>

      
        
            



  <br><br><br><br><br>

  <?php
    include('partials/footer.php');
    ?>




  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>

  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</body>

</html>