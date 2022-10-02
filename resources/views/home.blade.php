<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Web Icon -->
    <title>Pixel: Rental Ps</title>
    <link rel="shortcut icon" href="img/background/logo-p.png">
    
    <!-- Link Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/213e56f9ea368890b9d2da0577e49dab?family=Zona+Pro" rel="stylesheet" type="text/css"/>

    <!-- CSS -->
    <link rel="stylesheet" href="stylesheet/style.css">
    <link rel="stylesheet" href="stylesheet/style-mobile.css">
</head>
<body>
    <!-- HEADER -->
    <header id="home">
        <!-- navbar -->
        <nav class="mode">
            <div class="logo">
                <a href="https://rosyanxone.github.io" class="mode">
                    PIXEL
                </a>
            </div>

            <ul class="pt-3">
                <li><a class="mode" href="#home">Home</a></li>
                <li><a class="mode" href="#about">About Us</a></li>
                <li><a class="mode" href="#contact">Contact Us</a></li>
            </ul>
            <div>
                <input type="checkbox" class="checkbox" id="chk"/>
                <label class="label" for="chk">
                    <i class="fas fa-moon"></i>
                    <i class="fas fa-sun"></i>
                    <div class="ball"></div>
                </label>
            </div>

            <div class="menu-toggle">
                <input type="checkbox" id="menTog"/>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        <!-- end navbar -->

        <div class="header-container">
            <div class="header-item-left">
                <h1>LET THE<br>GAME BEGIN</h1>
                <p>Renting is an agreement where a payment is made for the temporary use of a good, service, or property. Economic rent is any payment in excess of the cost of production. Rent-seeking attempts to increase one's share of existing wealth without creating wealth. Nemo, assumenda? Libero eligendi, recusandae ab rerum eius excepturi inventore, in esse eos laboriosam distinctio.</p>
                <a href="#coming-soon">
                    <button class="rent-btn">Rent Now</button>
                </a>
                <a href="#coming-soon">
                    <button class="play-btn">Play</button>
                </a>
                <h4>Available Service :</h4>
                <img src="img/service/services.png" alt="">
            </div>
            <div class="header-item-right">
                <img src="img/service/ps5-sticks.webp" class="img-gif" alt="">
            </div>
        </div>
    </header>
    <!-- END HEADER -->


    <!-- MAIN CONTENT -->
    <section>
        <div class="about-container mode" id="about">
            <div class="about-title">
                <h2>ABOUT US</h2>
            </div>
            <div class="about-content">
                <p class="about-item-left"><b>Pixel</b> is a privately held Samarinda online video game rental subscription service that specializes in providing games for Sony and Microsoft systems starting from the sixth generation onwards. The business model of <b>Pixel</b> is similar to the DVD-by-mail subscription service Netflix and Blockbuster online. <b>Pixel</b> sends games to subscribers for a monthly fee.</p>
                <p class="about-item-right">Over 8,000 titles are available. In May 2018, Electronic Arts announced that they acquired cloud gaming technology assets and personnel from <b>Pixel</b> (including its Chicago outpost). <b>Pixel</b> is currently owned by the same ownership group as Alliance Entertainment and is operated as a stand-alone company.</p>
            </div>
        </div>

        @php
            $conn = mysqli_connect("localhost", "root", "", "rentalps");
            $sql = "SELECT * FROM rental_ps";
            $result = $conn->query($sql);
        @endphp
        <div class="price-container mode">
            <h3 class="mode">Price List</h3>
            <div class="price-table">
                <table class="table">
                    <thead class="mode-bor">
                        <tr>
                            <th scope='col'>No</th>
                            <th scope='col'>Brand</th>
                            <th scope='col'>Type</th>
                            <th scope='col'>Price</th>
                            <th scope='col'>P/week</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            while($row = $result-> fetch_assoc()) {
                                echo "
                                    <tr>
                                        <td scope='row'>". $row["id"]."</td>
                                        <td>". $row["merek"]."</td>
                                        <td>". $row["jenis"]."</td>
                                        <td>Rp.". $row["harga"]."/day</td>
                                        <td><b>Rp.". $row["per_week"]."</b>/week</td>
                                    </tr>
                                    ";
                            }
                        @endphp
                    </tbody>
                </table>
            </div>
        </div>

        <div class="partners-container mundur-dikit">
            <h3>Our Partners</h3>
            <div class="content-img">
                <img src="img/partners/ovo.png" alt="">
                <img src="img/partners/dana.png" alt="">
                <img src="img/partners/gopay.png" alt="">
            </div>
        </div>

        <div class="service-container">
            <h3>Our Services</h3>
            <div class="service-cards">
                <div class="card-panel mode">
                    <img src="img/service/ps-logo.png" class="mode-img" alt="">
                    <h4>Playstation</h4>
                    <p>PlayStation is a brand produced by Sony Interactive Entertainment. The first PlayStation console was released in Japan in December 1994, and released worldwide the following year.</p>
                </div>
                <div class="card-panel mode">
                    <img src="img/service/xbox-logo.png" class="mode-img" alt="">
                    <h4>Xbox</h4>
                    <p>Xbox is a video gaming brand created and owned by Microsoft. The brand was first introduced in the United States in November 2001, with the launch of the original Xbox console.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END MAIN CONTENT -->


    <!-- FOOTER -->
    <footer class="mode">
        <div class="footer-container mode">
            <div class="footer-title" id="contact">
                <h2>CONTACT US</h2>
            </div>
            <div class="footer-contact-item">
                <div class="footer-item">
                    <h4>Location</h4>
                    <p>28 Jackson Blvd Ste 1020 Chicago<br>IL 60604-2340<br>Phone: +628 135 158 0524</p>
                </div>
                <div class="footer-item">
                    <h4>Find Us On</h4>
                    <div class="circle-container">
                        <!-- salah satu fitur pop up box -->
                        <div class="circle ig">
                            <a href="https://www.instagram.com/pixel" onclick="return confirm('Click on OK to continue.');"><img src="img/media-social/instagram.png" alt=""></a>
                        </div>
                        <div class="circle fb">
                            <a href="https://www.facebook.com/pixel" onclick="return confirm('Click on OK to continue.');"><img src="img/media-social/facebook.png" alt=""></a>
                        </div>
                        <div class="circle wa">
                            <a href="https://www.whatsapp.com/pixel" onclick="return confirm('Click on OK to continue.');"><img src="img/media-social/whatsapp.png" alt=""></a>
                        </div>
                        <div class="circle tw">
                            <a href="https://www.twitter.com/pixel" onclick="return confirm('Click on OK to continue.');"><img src="img/media-social/twitter.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="copyright">© 2022 <a href="https://instagram.com/rosyanxone/">rosyanxone</a>. All rights reserved.</div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <script src="js/dark-mode.js"></script>
    <script src="js/manipulasi-dom.js"></script>
    <script src="js/pop-up-box.js"></script>
    <script src="https://kit.fontawesome.com/a374d5ed26.js" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> -->
</body>
</html>