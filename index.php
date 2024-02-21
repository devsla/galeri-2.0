<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Bootstrap demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Coiny&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        .carousel-inner .carousel-caption{
            paddingg-bottom: 170px;
        }.carousel-inner .carousel-caption h1{
            font-family: 'Coiny', cursive;
            font-size:56px
        }.carousel-inner .carousel-caption h3{
            font-family: 'Coiny', cursive;
           
        }.carousel-inner .carousel-caption button{
           font-weight: 500;
           font-size: 16px;
           letter-spacing: 1px;
           display: inline-block;
           padding: 10px 30px ;
           border-radius: 50px;
           transition: 0.5s; 
           border: 2px solid #3489db;
           text-decoration: none;
           background: #3489db;
           color: #ffff;
        }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light px-5 fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Creative Gallery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#SignModal">Sign Up</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section id="home">
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/fud2.jpeg" style="height: 700px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="animate__animated">First slide label</h1>
        <h3 class="animate__animated animate__zoomIn">Some representative placeholder content for the first slide.</h3>
        <a href="explore.php"><button class="animate__animated animate__zoomIn mt-3 p-4 px-5 btn font-weight-bold">About Us</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/alam.jpeg" style="height: 700px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h1 class="animate__animated">First slide label</h1>
        <h3 class="animate__animated animate__slideInDown">Some representative placeholder content for the first slide.</h3>
        <button class="animate__animated animate__zoomIn mt-3 p-4 px-5 btn font-weight-bold">About Us</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/bike.jpg" style="height: 700px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h1 class="animate__animated">First slide label</h1>
        <h3 class="animate__animated animate__slideInDown">Some representative placeholder content for the first slide.</h3>
        <button class="animate__animated animate__zoomIn mt-3 p-4 px-5 btn font-weight-bold">About Us</button>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<section>
<div class="height 900px">

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h3 class="text-center">Login</h3>
      <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
         <form action="proses-login.php" method="post">
            <input type="text" name="username" id="username" class="form-control my-4 py-2" placeholder="username">
            <input type="password" name="password" id="password" class="form-control my-4 py-2" placeholder="password">
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">
                    login
                </button>
                <a href="" class="navlink">Do you havent account?</a>
            </div>
        </form>
        </div>
        <form action="proses-login.php" method="post">
        </form>
      </div>
    </div>
  </div>
</div>

</div>
</section>

<!-- Modal -->
<div class="modal fade" id="SignModal" tabindex="-1" aria-labelledby="SignModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h3 class="text-center">Sign</h3>
        <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"><path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/><path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/></svg>
         <form action="proses-daftar.php" method="post">
            <input type="text" name="username" id="username" class="form-control my-4 py-2" placeholder="username">
            <input type="password" name="password" id="password" class="form-control my-4 py-2" placeholder="password">
            <input type="Email" class="form-control my-4 py-2" id="email" name="email">
            <input type="text" class="form-control my-4 py-2" id="namalengkap" name="namalengkap">
            <input type="text" class="form-control my-4 py-2" id="alamat" name="alamat">
            <div class="mb-3">
            <select class="form-select my-4 py-2" aria-label="Default select example" name="jeniskelamin">
            <option selected>Pilih jenis kelamin</option>
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">perempuan</option>
            </select>
            </div>
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">
                   Sign
                </button>
                <a href="" class="navlink">Do you havent account?</a>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>