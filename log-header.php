
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
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        .carousel-inner .carousel-caption{
            padding-bottom: 170px;
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
        }.profil{
          width: 30px;
          height: 30px; 
          border-radius: 50%;
          overflow: hidden;
        }.fotoprofil{
          width: 100px; 
          height: 100px;
          border-radius: 50%; 
          overflow: hidden;
          margin: auto;
         
        }.img{
          width: 30px;
          height: 30px; 
          border-radius: 50%;
          overflow: hidden;
        }.detail{
          width: 30px;
          height: 30px; 
          border-radius: 50%;
          overflow: hidden;
        }
    </style>
  </head>
  <body>
  <?php 
session_start();
if (!isset($_SESSION['userid'])) {
   header("location=index.php");
}

?>


  <nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
  <div class="container-fluid">
  <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
       Creative Gallery
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="create.php">create</a>
        </li>
      </ul>
    </div>
    <div class="profil">
           <a href="profile.php"><img src="<?= $_SESSION['profile']; ?>" class="ms-auto" alt="gambar"></a> 
    </div>
  </div>
</nav>
  
<?php include 'footer.php'; ?>
</body>
</html>
