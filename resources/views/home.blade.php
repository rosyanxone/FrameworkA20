@php
    $conn = mysqli_connect("localhost", "root", "", "crudartc");
    $sql = "SELECT * FROM articles";
    $result = $conn->query($sql);
@endphp

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>For Your: Blog</title>
    <link rel="stylesheet" href="stylesheet/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-fixed-top navbar-dark main-nav">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="nav navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Tech</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Food</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Sport</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Politic</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Music</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Movie</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Health</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn" type="submit">
                <img class="search-icon" src="img/search-icon.png" alt="">
              </button>
            </form>
        </div>
    </nav>

    @php
    $myArr = array();
    while($row = $result-> fetch_assoc()) {
      array_push($myArr, $row);
    }
    @endphp
    <section>
      <div class="container header-content">
        <div class="highlight-news">
          <div class="top-news">
            <div class="news lg-news">
              <div class="layer">
                <ul>
                  <li>
                    <div class="category-sport">{{ $myArr[0]['kategori'] }}</div>
                  </li>
                  <li>
                    <h3>{{ $myArr[0]['waktu'] }}</h3>
                  </li>
                  <li>
                    <h3>{{ $myArr[0]['judul'] }}</h3>
                  </li>
                </ul>
              </div>
              <img src='img/{{ $myArr[0]["gambar"] }}' class="lg-img" alt="">
            </div>
          </div>
          <div class="side-news">
            <div class="news md-news">
              <div class="layer md-layer">
                <ul>
                  <li>
                    <div class="category-movie">{{ $myArr[1]['kategori'] }}</div>
                  </li>
                  <li>
                    <h3>{{ $myArr[1]['waktu'] }}</h3>
                  </li>
                  <li>
                    <h3>{{ $myArr[1]['judul'] }}</h3>
                  </li>
                </ul>
              </div>
              <img src='img/{{ $myArr[1]["gambar"] }}' class="md-img" alt="">
            </div>
            <div class="news md-news">
              <div class="layer md-layer">
                <ul>
                  <li>
                    <div class="category-hot">{{ $myArr[2]['kategori'] }}</div>
                  </li>
                  <li>
                    <h3>{{ $myArr[2]['waktu'] }}</h3>
                  </li>
                  <li>
                    <h3>{{ $myArr[2]['judul'] }}</h3>
                  </li>
                </ul>
              </div>
              <img src='img/{{ $myArr[2]["gambar"] }}' class="md-img" alt="">
            </div>
          </div>
        </div>
        <div class="bot-news">
          <div class="row-news">
            <div class="news md-news">
              <div class="layer md-layer">
                <ul>
                  <li>
                    <div class="category-tech">{{ $myArr[3]['kategori'] }}</div>
                  </li>
                  <li>
                    <h3>{{ $myArr[3]['waktu'] }}</h3>
                  </li>
                  <li>
                    <h3>{{ $myArr[3]['judul'] }}</h3>
                  </li>
                </ul>
              </div>
              <img src='img/{{ $myArr[3]["gambar"] }}' class="md-img" alt="">
            </div>
            <div class="news md-news">
              <div class="layer md-layer">
                <ul>
                  <li>
                    <div class="category-music">{{ $myArr[4]['kategori'] }}</div>
                  </li>
                  <li>
                    <h3>{{ $myArr[4]['waktu'] }}</h3>
                  </li>
                  <li>
                    <h3>{{ $myArr[4]['judul'] }}</h3>
                  </li>
                </ul>
              </div>
              <img src='img/{{ $myArr[4]["gambar"] }}' class="md-img" alt="">
            </div>
            <div class="news md-news">
              <div class="layer md-layer">
                <ul>
                  <li>
                    <div class="category-health">{{ $myArr[5]['kategori'] }}</div>
                  </li>
                  <li>
                    <h3>{{ $myArr[5]['waktu'] }}</h3>
                  </li>
                  <li>
                    <h3>{{ $myArr[5]['judul'] }}</h3>
                  </li>
                </ul>
              </div>
              <img src='img/{{ $myArr[5]["gambar"] }}' class="md-img" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container footer-container">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>