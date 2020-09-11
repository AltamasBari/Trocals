<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Trocals</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="shortcut icon" href="../images/icon/favicon.png" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="../css/animate.css" />

    <link rel="stylesheet" href="../css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="../css/magnific-popup.css" />

    <link rel="stylesheet" href="../css/aos.css" />

    <link rel="stylesheet" href="../css/ionicons.min.css" />

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />

    <link rel="stylesheet" href="../css/flaticon.css" />
    <link rel="stylesheet" href="../css/icomoon.css" />
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
      id="ftco-navbar"
    >
      <div class="container">
        <a class="navbar-brand" href="index.php"
          ><img
            src="./images/logo.png"
            class="img-fluid"
            width="150px"
            alt="trocals"
        /></a>

        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#ftco-nav"
          aria-controls="ftco-nav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="destination.php" class="nav-link">Experiences</a>
            </li>
            <li class="nav-item">
              <a href="city.php" class="nav-link">Destinations</a>
            </li>
            <li class="nav-item">
              <a href="https://trocals.com/blog/" class="nav-link">Blogs</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact Us</a>
            </li>
            <!-- <li class="nav-item cta">
              <a href="#" class="nav-link">Book Now</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <div
      class="hero-wrap hero-wrap-2 slide js-fullheight"
      data-stellar-background-ratio="0.5"
    >
      <div class="overlay"></div>
      <div class="container">
        <div
          class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
          data-scrollax-parent="true"
        >
          <div
            class="col-md-10 text text-center ftco-animate"
            data-scrollax=" properties: { translateY: '70%' }"
          >
            <!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
          		<span class="ion-ios-play"></span>
            </a>
            <p
              class="caps"
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
            >
              Travel to the any corner of the world, without going around in
              circles
            </p>
            <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
              Make Your Tour Amazing With Us
            </h1> -->
            <form>
              <div class="row">
                <div class="offset-lg-3 col-lg-4 col-md-6 col-sm-6 form-group">
                  <input
                    type="text"
                    class="form-control"
                    name="getdata"
                    list="keywords"
                    placeholder="Search Place"
                    required
                  />
                  <datalist id="keywords">
                    <option value="Agra"></option>
                    <option value="Delhi"></option>
                    <option value="Jaipur"></option>
                    <option value="Uttrakhand"></option>
                    <option value="Old Agra Walking Tour"></option>
                    <option value="Garden Walk"></option>
                    <option value="Food Walk"></option>
                    <option value="Jaipur Walking Tour"></option>
                    <option value="Delhi Night Walk"></option>
                    <option value="Beyond the Taj Walking Tour"></option>
                    <option value="Wildlife"></option>
                    <option value="Wildlife SOS"></option>
                    <option value="Bicycle Tour"></option>
                    <option value="Cooking Class"></option>
                    <option value="Agra Handicraft"></option>
                    <option value="Jaipur Handicraft"></option>
                  </datalist>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 form-group">
                  <div class="form-field">
                    <input
                      type="submit"
                      value="Search"
                      id="done"
                      class="form-control btn btn-primary"
                    />
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- <section class="ftco-section ftco-no-pb ftco-no-pt">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="search-wrap-1 ftco-animate p-4">
              <form action="#" class="search-property-1">
                <div class="row">
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Destination</label>
                      <div class="form-field">
                        <div class="icon">
                          <span class="ion-ios-search"></span>
                        </div>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Search place"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Check-in date</label>
                      <div class="form-field">
                        <div class="icon">
                          <span class="ion-ios-calendar"></span>
                        </div>
                        <input
                          type="text"
                          class="form-control checkin_date"
                          placeholder="Check In Date"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Check-out date</label>
                      <div class="form-field">
                        <div class="icon">
                          <span class="ion-ios-calendar"></span>
                        </div>
                        <input
                          type="text"
                          class="form-control checkout_date"
                          placeholder="Check Out Date"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Price Limit</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon">
                            <span class="ion-ios-arrow-down"></span>
                          </div>
                          <select name="" id="" class="form-control">
                            <option value="">$5,000</option>
                            <option value="">$10,000</option>
                            <option value="">$50,000</option>
                            <option value="">$100,000</option>
                            <option value="">$200,000</option>
                            <option value="">$300,000</option>
                            <option value="">$400,000</option>
                            <option value="">$500,000</option>
                            <option value="">$600,000</option>
                            <option value="">$700,000</option>
                            <option value="">$800,000</option>
                            <option value="">$900,000</option>
                            <option value="">$1,000,000</option>
                            <option value="">$2,000,000</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-self-end">
                    <div class="form-group">
                      <div class="form-field">
                        <input
                          type="submit"
                          value="Search"
                          class="form-control btn btn-primary"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModalCenter"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">
              Get the best curated holidays by experts!
            </h5>

            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="firstname">First Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="firstname"
                    placeholder="First Name"
                  />
                </div>
                <div class="form-group col-md-6">
                  <label for="lastname">Last Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="lastname"
                    placeholder="Last Name"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="inputEmail4"
                    placeholder="Email"
                  />
                </div>
                <div class="form-group col-md-6">
                  <label for="inputphone">Contact Number</label>
                  <input
                    type="tel"
                    class="form-control"
                    id="inputphone"
                    placeholder=""
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputmonth">Travel Month</label>
                  <input type="date" class="form-control" id="inputmonth" />
                </div>
              </div>
            </form>
          </div>

          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div
            class="col-lg-6 col-md-12 order-md-last heading-section pl-md-5 ftco-animate"
          >
            <h2 class="mb-4">It's Time to Travel With Locals</h2>
            <p>
              India is a booming hub of travel destinations that make the
              adventure of life into a thrilling normal. The India that internet
              knows is not just the land of palaces & hovels, of a zillion art
              forms & snake charmers, or life embedded in customs and
              stereotypes. It's also the land of rich diversity & incomparable
              humility. India makes for a charming destination to experience a
              mental renaissance and break the routine.
            </p>
            <p>
              <a href="destination.php" class="btn btn-primary py-3 px-4"
                >Experiences</a
              >
            </p>
          </div>
          <div class="col-lg-6 col-md-12 col-12 pl-md-5 mt-2">
            <div class="row">
              <div
                class="col-6 col-md-4 d-flex align-self-stretch ftco-animate"
              >
                <div class="media block-6 services d-block">
                  <div class="icon">
                    <a href="destination.php"
                      ><img
                        src="images/icon/walking-tour.png"
                        alt="walking-tour"
                    /></a>
                  </div>

                  <div class="media-body">
                    <a href="destination.php"
                      ><h3 class="heading my-3">Walking Tours</h3></a
                    >
                    <!-- remove margin in other <p style="margin-top: 2.75rem;">
                      A small river named Duden flows by their place and
                      supplies it with the necessary
                    </p> -->
                  </div>
                </div>
              </div>
              <div
                class="col-md-4 col-6 d-flex align-self-stretch ftco-animate"
              >
                <div class="media block-6 services d-block">
                  <div class="icon">
                    <a href="destination.php"
                      ><img src="./images/icon/lion.png" alt="wildlife"
                    /></a>
                  </div>
                  <div class="media-body">
                    <a href="destination.php"
                      ><h3 class="heading my-3">Wildlife Experience</h3></a
                    >
                  </div>
                </div>
              </div>
              <div
                class="col-md-4 col-6 d-flex align-self-stretch ftco-animate"
              >
                <div class="media block-6 services d-block">
                  <div class="icon">
                    <a href="destination.php"
                      ><span class="flaticon-paragliding"></span
                    ></a>
                  </div>
                  <div class="media-body">
                    <a href="destination.php"
                      ><h3 class="heading mb-3">Off-Beat Activities</h3></a
                    >
                  </div>
                </div>
              </div>
              <div
                class="col-md-4 col-6 d-flex align-self-stretch ftco-animate"
              >
                <div class="media block-6 services d-block">
                  <div class="icon">
                    <a href="destination.php"
                      ><img src="./images/icon/handmade.png" alt="Workshops"
                    /></a>
                  </div>
                  <div class="media-body">
                    <a href="destination.php"
                      ><h3 class="heading my-3">Workshops</h3></a
                    >
                  </div>
                </div>
              </div>
              <div
                class="col-md-4 col-6 d-flex align-self-stretch ftco-animate"
              >
                <div class="media block-6 services d-block">
                  <div class="icon">
                    <a href="destination.php"
                      ><img src="./images/icon/multi-day.png"
                    /></a>
                  </div>
                  <div class="media-body">
                    <a href="destination.php"
                      ><h3 class="heading my-3">
                        Immersive Multi Day Tours
                      </h3></a
                    >
                  </div>
                </div>
              </div>
              <div
                class="col-md-4 col-6 d-flex align-self-stretch ftco-animate"
              >
                <div class="media block-6 services d-block">
                  <div class="icon">
                    <a href="destination.php"
                      ><img src="./images/icon/aircraft.png"
                    /></a>
                  </div>
                  <div class="media-body">
                    <a href="destination.php"
                      ><h3 class="heading my-3">Weekend Gateaways</h3></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-counter" id="section-counter">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-12 pl-md-5 py-5">
            <div class="row">
              <div
                class="col-md-3 justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18 text-center mb-4">
                  <div class="text">
                    <strong class="number" data-number="1500">0</strong
                    ><strong class="number">+</strong>
                    <span>Customers</span>
                  </div>
                </div>
              </div>
              <div
                class="col-md-3 justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18 text-center mb-4">
                  <div class="text">
                    <strong class="number" data-number="8">0</strong>
                    <strong class="number">+</strong>
                    <span>Cities</span>
                  </div>
                </div>
              </div>
              <div
                class="col-md-3 justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18 text-center mb-4">
                  <div class="text">
                    <strong class="number" data-number="30">0</strong>
                    <strong class="number">+</strong>
                    <span>Local Experience</span>
                  </div>
                </div>
              </div>
              <div
                class="col-md-3 justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18 text-center mb-4">
                  <div class="text">
                    <strong class="number" data-number="400">0</strong>
                    <strong class="number">+</strong>
                    <span>Trees Planted</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="my-4">Popular Tours</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
              <a
                href="city-tour/old-city-agra.php"
                class="img"
                style="background-image: url(images/old-agra.jpg)"
              ></a>
              <div class="text p-4">
                <a href="city-tour/old-city-agra.php">
                  <span class="price">Explore</span>
                  <h3 class="text-center">Old Agra <br />Walking Tour</h3></a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
              <a
                href="city-tour/taj-tour.php"
                class="img"
                style="background-image: url(images/beyond-taj.png)"
              ></a>
              <div class="text p-4">
                <a href="city-tour/taj-tour.php">
                  <span class="price">Explore</span>
                  <h3 class="text-center">
                    Beyond the Taj <br />Walking Tour
                  </h3></a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
              <a
                href="city-tour/jaipur-tour.php"
                class="img"
                style="background-image: url(images/jaipur-saree.JPG)"
              ></a>
              <div class="text p-4">
                <a href="city-tour/jaipur-tour.php">
                  <span class="price">Explore</span>
                  <h3 class="text-center">Handicraft<br />Workshops</h3></a
                >
              </div>
            </div>
          </div>

          <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
              <a
                href="city-tour/old-city-agra.php"
                class="img"
                style="background-image: url(images/old-delhi-walk.jpg)"
              ></a>
              <div class="text p-4">
                <a href="#old-city-agra.php">
                  <span class="price">Explore</span>
                  <h3 class="text-center">Old Delhi<br />Walking Tour</h3></a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
              <a
                href="#"
                class="img"
                style="background-image: url(images/golden.JPG)"
              ></a>
              <div class="text p-4">
                <a href="#old-city-agra.php">
                  <span class="price">Explore</span>
                  <h3 class="text-center">Golden Triangle<br />Tours</h3></a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
              <a
                href="city-tour/delhi-food.php"
                class="img"
                style="background-image: url(images/delhi-food.webp)"
              ></a>
              <div class="text p-4">
                <a href="city-tour/delhi-food.php">
                  <span class="price">Explore</span>
                  <h3 class="text-center">Delhi Food <br />Walk</h3></a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Destinations</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 ftco-animate">
            <div class="project-destination">
              <a
                href="delhi.php"
                class="img"
                style="background-image: url(images/qutub-minar.png)"
              >
                <div class="text">
                  <h3>Delhi</h3>
                  <span>Explore</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="project-destination">
              <a
                href="agra.php"
                class="img"
                style="background-image: url(images/taj-mahal.webp)"
              >
                <div class="text">
                  <h3>Agra</h3>
                  <span>Explore</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="project-destination">
              <a
                href="jaipur.php"
                class="img"
                style="background-image: url(images/JJJJJ.webp)"
              >
                <div class="text">
                  <h3>Jaipur</h3>
                  <span>Explore</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="project-destination">
              <a
                href="uttrakhand.php"
                class="img"
                style="background-image: url(images/uttarakhand-4.jpg)"
              >
                <div class="text">
                  <h3>Uttarakhand</h3>
                  <span>Explore</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="row justify-content-center pb-4">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <h2 class="mb-4">Growing With Nature</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <h3 class="title">For every tour with us!</h3>
          <div class="content">
            <div class="content-overlay"></div>
            <img class="content-image" src="./images/initiative1.webp" />
            <div class="content-details fadeIn-left">
              <h3 class="content-title"></h3>
              <p class="content-text">
                We at Trocals fulfill our responsibility towards environment &
                our connection with your visit.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4">
          <h3 class="title">We plant a saplings</h3>
          <div class="content">
            <div class="content-overlay"></div>
            <img class="content-image" src="./images/initiative2.webp" />
            <div class="content-details fadeIn-top">
              <h3></h3>
              <p>
                For every tour that you book with us, we plant a sapling. Come
                to India anytime, the plant will continue to grow as you do.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4">
          <h3 class="title">The Idea behind!</h3>
          <div class="content">
            <div class="content-overlay"></div>
            <img class="content-image" src="./images/initiative3.webp" />
            <div class="content-details fadeIn-right">
              <h3></h3>
              <p>For us, to acknowledge life is also to cultivate it.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section
      class="ftco-section testimony-section bg-bottom"
      style="background-image: url(images/bg_3.jpg)"
    >
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Guest Reviews</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">
                      Agra is a sach a rabbit warren of Streets and so many
                      sounds that this tour was perfect! Ritik provided a
                      wonderful and interesting walk around parts of the city
                      that we wouldn't have seen otherwise. Very good value for
                      money!
                    </p>
                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="background-image: url(images/person_1.jpg)"
                      ></div>
                      <div class="pl-3">
                        <p class="name">Jane</p>
                        <span class="position">Aug 26,2019</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-5">
                      I loved the city walk and the beautiful perspective of the
                      city that most tourist don't get! I got to see Agra with
                      the eyes of a local. Thank You!
                    </p>
                    <div class="d-flex align-items-center pt-lg-5 pt-md-3">
                      <div
                        class="user-img mt-3"
                        style="background-image: url(images/person_4.jpg)"
                      ></div>
                      <div class="pl-3">
                        <p class="name">Hanichha</p>
                        <span class="position">Jul 28,2019</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-lg-5 mb-md-4">
                      Trocals took me for a city walk and food tour it was a
                      nice experience and Ritik who took me for the city walk is
                      a very good storyteller. He explained everything in a very
                      different way with stories related to each place.
                    </p>
                    <div class="d-flex align-items-center pt-1">
                      <div
                        class="user-img"
                        style="background-image: url(images/person_3.jpg)"
                      ></div>
                      <div class="pl-3">
                        <p class="name">Binto Francis</p>
                        <span class="position">Aug 7,2019</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-5">
                      I had my best experience with Trocal by walking around the
                      town and enjoing the local night life. Thank you Ritik for
                      making this tour an amazing one and providing us with the
                      best guide.
                    </p>
                    <div class="d-flex align-items-center">
                      <div
                        class="user-img mt-1"
                        style="background-image: url(images/person_2.jpg)"
                      ></div>
                      <div class="pl-3">
                        <p class="name">Steff</p>
                        <span class="position">July 28,2019</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">
                      This was our first experience of a city walk in
                      India.Ritik was full of life and knowledge. He made the
                      tour very interesting with stories of lots of monuments
                      and the legacies of forgotten historical figures. Highly
                      recommended!
                    </p>
                    <div class="d-flex align-items-center">
                      <div
                        class="user-img"
                        style="background-image: url(images/agra-review.jpg)"
                      ></div>
                      <div class="pl-3">
                        <p class="name">Carla Smith</p>
                        <span class="position">May 24,2017</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-3">
          <a
            href="https://www.tripadvisor.in/Attraction_Review-g297683-d17426389-Reviews-Trocals-Agra_Agra_District_Uttar_Pradesh.php#REVIEWS"
            class="btn btn-primary"
            >Read All Reviews</a
          >
        </div>
      </div>
    </section>

    <section class="ftco-section fcto-no-pt testimony-section">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">We've Featured In</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <img
                    src="./images/Hindustan-Times-Logo.png"
                    class="img-fluid"
                  />
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <img src="./images/ET Travel.png" class="img-fluid" />
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <img src="./images/Amar_Ujala.png" class="img-fluid" />
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <img src="./images/tripadvisor.png" class="img-fluid" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Blogs & Stories</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a
                href="https://trocals.com/blog/2020/09/01/plug-and-play-a-smart-travelers-guide-to-stay-connected/"
                class="block-20"
                style="background-image: url('images/blog/blog1.jpeg')"
              >
              </a>
              <div class="text mt-3 float-right d-block">
                <!-- <div class="d-flex align-items-center mb-4 topp">
                  <div class="one">
                    <span class="day">21</span>
                  </div>
                  <div class="two">
                    <span class="yr">2019</span>
                    <span class="mos">August</span>
                  </div>
                </div> -->
                <h3 class="heading">
                  <a
                    href="https://trocals.com/blog/2020/09/01/plug-and-play-a-smart-travelers-guide-to-stay-connected/"
                    >Plug and Play- A Smart Traveler’s Guide to Stay
                    Connected</a
                  >
                </h3>
                <p>
                  ‘No man is an island’ – wrote John Donne in the early 17th
                  century. Little did he know the phrase would acquire the
                  status of law in the 21st century.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry">
              <a
                href="https://trocals.com/blog/2020/09/01/from-packing-to-travelling-safely-a-guide-for-solo-women-travellers/"
                class="block-20"
                style="background-image: url('images/blog/smart.jpeg')"
              >
              </a>
              <div class="text mt-3 float-right d-block">
                <h3 class="heading">
                  <a
                    href="https://trocals.com/blog/2020/09/01/from-packing-to-travelling-safely-a-guide-for-solo-women-travellers/"
                    >From Packing to Travelling Safely: A Guide for Solo Women
                    Travellers</a
                  >
                </h3>
                <p>
                  Do you wish to plan a solo trip, but you are unaware of the
                  tips and tricks? Here is a comprehensive guide about the
                  packing tips, essential guide and safety tips for Female Solo
                  Travellers.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a
                href="https://trocals.com/blog/2020/09/01/best-airline-to-travel-to-india-and-south-asia%e2%80%8b/"
                class="block-20"
                style="background-image: url('images/blog/airlines.JPG')"
              >
              </a>
              <div class="text mt-3 float-right d-block">
                <h3 class="heading">
                  <a
                    href="https://trocals.com/blog/2020/09/01/best-airline-to-travel-to-india-and-south-asia%e2%80%8b/"
                    >Best Airline to travel to India and South Asia​</a
                  >
                </h3>
                <p>
                  India is an ever-developing business sector for air travel.
                  Every year, the quantity of voyagers taking trips for both
                  business and relaxation intentions is rising.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section fcto-no-pt contact-section">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Contact Us</h2>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-lg-6 col-md-10 order-md-last d-flex">
            <form action="#" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Your Name"
                />
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Your Email"
                />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" />
              </div>
              <div class="form-group">
                <textarea
                  name=""
                  id=""
                  cols="30"
                  rows="7"
                  class="form-control"
                  placeholder="Message"
                ></textarea>
              </div>
              <div class="form-group">
                <input
                  type="submit"
                  value="Send Message"
                  class="btn btn-primary py-3 px-5"
                />
              </div>
            </form>
          </div>

          <div class="col-md-6 d-none d-lg-block">
            <img src="./images/contact.png" alt="contact" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>

    <section
      style="background-color: #3390dd; height: 20vhpx"
      class="d-flex justify-content-center"
    >
      <div class="container">
        <form method="POST" action="news.php">
          <div class="row my-5">
            <div class="col-lg-5 justify-content-center">
              <h2 class="text-center">Subscribe to newsletter</h2>
            </div>
            <div class="ml-md-5 col-lg-4 col-md-6 col-sm-6">
              <input
                type="text"
                name="email_news"
                class="form-control"
                style="border-radius: 20px"
                placeholder="Enter your email"
              />
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 mt-2 mt-md-0">
              <input
                type="submit"
                value="Subscribe"
                style="border-radius: 20px"
                class="btn btn-primary form-control"
              />
            </div>
          </div>
        </form>
      </div>
    </section>

    <?php include "footer.php"?>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle
          class="path-bg"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke="#eeeeee"
        />
        <circle
          class="path"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke-miterlimit="10"
          stroke="#F96D00"
        />
      </svg>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/scrollax.min.js"></script>

    <script src="js/google-map.js"></script>
    <script src="js/search.js"></script>
    <script src="js/main.js"></script>
    <script>
      //Array of images which you want to show: Use path you want.
      var images = new Array(
        "./images/baba.webp",
        "./images/bg-final.JPG",
        "./images/bg-4.png",
        "./images/bg-home.JPG"
      );
      var nextimage = 0;
      doSlideshow();

      function doSlideshow() {
        if (nextimage >= images.length) {
          nextimage = 0;
        }
        $(".slide")
          .css("background-image", 'url("' + images[nextimage++] + '")')
          .fadeIn(500, function () {
            setTimeout(doSlideshow, 5000);
          });
      }
    </script>
  </body>
</html>
