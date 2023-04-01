<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

  {{-- NavBar --}}
  <div class="navbar1">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a href="/home"><img src="asset/logo.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/home">Home.</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#div1">About.</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Contact.</a>
              </li>
          </div>
        </div>
      </nav>
  </div>

  {{-- Introduction --}}
  <div class="intro">
    <div class="row">
      <div class="intro_left">
            <img src="asset/intro_2.png" alt="" id="i1" width="100%">
        <h5>I'm a PPTI student and I currently studying at BINUS.</h5>
        <p>My major in college is Computer Science. I'm a creative person who likes to design and I'm interest in UI/UX design and Front-end code.</p>
      </div>

      <div class="intro_right">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="2000">
                <img src="asset/c1_1.png" class="d-block w-100" alt="..." id="ir1">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="asset/c1_2.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="asset/c1_3.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            </button>
          </div>
      </div>
    </div>
  </div>

    {{-- Divider Intro & About Me --}}
    <div>
        <img src="asset/div1.png" alt="" width="100%" id="div1">
    </div>

    {{-- About Me --}}
    <div class="container" id="am">
        <div class="row">
          <div class="col">
            <div data-aos="zoom-in">
                <img src="asset/au_1.png" alt="" width="100%">
            </div>
          </div>
          <div class="col">
            <div data-aos="zoom-in">
                <img src="asset/au_2.png" alt="" width="100%">
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col">
                <img src="asset/au_3.png" alt="" width="100%">
            </div>
            <div class="col">
                <img src="asset/au_4.png" alt="" width="100%">
            </div>
            <div class="col">
                <img src="asset/au_5.png" alt="" width="100%">
            </div>
          </div>
      </div>

    <h3 id="am_1">
        Hello and Welcome!
    </h3>
    <p class="am_2">
        I'm a student at Bina Nusantara University (BINUSIAN 2025) with scholarship from BCA through Program Pendidikan Teknik Informatika(PPTI). My major in college is Computer Science. I'm creative, pationate, and motivate person. I'm an INTP-T so I'm a thoutful and analytical person.
    </p>
    <p class="am_2">
        I'm grateful that I'm able to pursue my dream through PPTI. At first, I don't feel like I'm into IT thing but now I'm grateful that I'm able to study a lot about code, design, software, etc. I love to draw and design and my goal is to work in a field that I love.
    </p>
    <p class="am_2">
        When I’m not forehead deep in study or projects, I spend my free time painting in canvas, drawing, cooking, and being a movie enthusiast.
    </p>
  </div>

  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>

