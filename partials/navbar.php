<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&family=Poppins&family=Send+Flowers&family=Tangerine:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
      .mer-font {
        font-family: "Merienda", cursive;
      }

      .pop-font {
        font-family: "Poppins", sans-serif;
      }

      .flower-font {
        font-family: "Send Flowers", cursive;
      }

      .tan-font {
        font-family: "Tangerine", cursive;
      }
      /* Chrome, Safari, Edge, Opera */
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }

      /* Firefox */
      input[type="number"] {
        -moz-appearance: textfield;
      }
    </style>

    <title>Book Hotel</title>
  </head>

  <body>
    <nav
      class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top shadow-5-strong"
    >
      <div class="container-fluid">
        <a class="navbar-brand me-5 fs-3 mer-font fw-bold" href="#"
          >Car Rento</a
        >
        <button
          class="navbar-toggler shadow-none"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active me-3" aria-current="page" href="#"
                >Home</a
              >
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#ride">Rides</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#service">Facilities</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#contact">Contact us</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">About us</a>
            </li>
          </ul>
          <form class="d-flex">
            <!-- Button trigger modal -->
            <button
              type="button"
              class="btn btn-outline-dark shadow-none me-lg-2 me-3"
              data-bs-toggle="modal"
              data-bs-target="#loginModel"
            >
              Login
            </button>
            <button
              type="button"
              class="btn btn-outline-dark shadow-none me-lg-2 me-3"
              data-bs-toggle="modal"
              data-bs-target="#registerModel"
            >
              Register
            </button>
          </form>
        </div>
      </div>
    </nav>

    <!-- Modal login -->
    <div
      class="modal fade"
      id="loginModel"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <h3 class="modal-title">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="36"
                  height="36"
                  fill="currentColor"
                  class="bi bi-person-bounding-box"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"
                  />
                  <path
                    d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"
                  />
                </svg>
                User Login
              </h3>
              <button
                type="button"
                class="btn-close shadow-none"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control shadow-none" />
                </div>
                <div class="mb-4">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control shadow-none" />
                </div>
                <div
                  class="d-flex align-items-center justify-content-between mb-3"
                >
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class="text-secondary text-decoration-none" href="#"
                    >Forget Password ?</a
                  >
                </div>
              </form>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal register -->
    <div
      class="modal fade"
      id="registerModel"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <h3 class="modal-title">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="36"
                  height="36"
                  fill="currentColor"
                  class="bi bi-person-plus"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"
                  />
                  <path
                    fill-rule="evenodd"
                    d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"
                  />
                </svg>
                User Registration
              </h3>

              <button
                type="button"
                class="btn-close shadow-none"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>

            <div class="modal-body">
              <span
                class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base"
              >
                Note: Your Details must be match with your Id ( Adhaar card,
                Passport, etc ).
              </span>
              <form>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control shadow-none" />
                      </div>
                      <div class="mb-4">
                        <label class="form-label">Phone Number</label>
                        <input type="number" class="form-control shadow-none" />
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea class="form-control shadow-none" rows="1"></textarea>
                      </div>
                      <div class="mb-4">
                        <label class="form-label">Date Of Birth</label>
                        <input type="date" class="form-control shadow-none" />
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none" />
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label">User Name</label>
                        <input type="text" class="form-control shadow-none" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control shadow-none" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Picture</label>
                        <input type="file" class="form-control shadow-none" />
                      </div>
                      <div class="mb-4">
                        <label class="form-label">Pin Code</label>
                        <input type="number" class="form-control shadow-none" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control shadow-none" />
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="d-flex align-items-center justify-content-center mt-3 mb-4"
                >
                  <button
                    type="submit"
                    class="btn btn-outline-dark shadow-none rounded-pill ms-2"
                  >
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  </body>
</html>
