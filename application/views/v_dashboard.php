<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?php echo base_url('asset/css/style1.css')?>" rel="stylesheet">
    <title>Hello, world!</title>
  </head>
  <body onload="loader()">
  <div id="loading">
            <span class="loader"></span>
            <div class="textLoader">
               
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Logo</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Field</a>
        </li>
      </ul>
      <div class="d-flex">
        <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#Loginmodal">Login</button>
</div>
    </div>
  </div>
</nav>
<div class="container-fluid">
<div class="p-5 mb-4 bg-light rounded-3" id="bghead" style="height:720px">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold  ">Bring Back </h1>
        <h1 class="display-5 fw-bold  ">Your Match</h1>
        <div class="d-flex align-items-center">
        <h1 class="">Bring Back </h1>
</div>
        <form action="">
            <div class="col-md-2">
            <input class="form-control" type="text" name="lokasi" id="lokasi" placeholder="lokasi" required>
            </div>
            <div class="col-md-2 pt-2">
            <input class="form-control" type="date" name="date" id="date" placeholder="tanggal" required>
            </div>
            <p class="pt-2"></p>
            <button class="btn btn-success">Cari</button>
        </form>

      </div>
    </div>
    <section class="news mt-3">
    <h1 class="text-center">News</h1>
    <hr>
    <div class="row">
    <div class="col-md-6 mx-auto">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('asset/img/unnamed.jpg')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('asset/img/berita.jpg')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('asset/img/futsal-uad.jpg')?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
    </div>
    </div>    
    </section>
    <hr>
    <section class="fields mt-4">
    <h1 class="text-center">Fields</h1>
    <hr>
    <div class="row mx-auto">
    <div class="col-auto mx-auto">
    <div class="card pr-2" style="width: 18rem;">
  <img src="<?php echo base_url('asset/img/default.png')?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-success">Go somewhere</a>
  </div>
    </div>
 
</div>
<div class="col-auto mx-auto">
<div class="card mr-2" style="width: 18rem;">
  <img src="<?php echo base_url('asset/img/default.png')?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-success">Go somewhere</a>
  </div>
</div>
</div>

<div class="col-auto mx-auto">
<div class="card mr-2" style="width: 18rem;">
  <img src="<?php echo base_url('asset/img/default.png')?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-success">Go somewhere</a>
  </div>
</div>
</div>

<div class="col-auto mx-auto">
<div class="card mr-2" style="width: 18rem;">
  <img src="<?php echo base_url('asset/img/default.png')?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-success">Go somewhere</a>
  </div>
</div>
</div>



    </div>
    
    
    </section>


    <section class="fotter mt-5" id="fotter">
    <footer class="text-muted py-5" style="background-color:green">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#" class="">Back to top</a>
    </p>
    <p class="mb-1 text-light">Album example is © Bootstrap, but please download and customize it for yourself!</p>
    <p class="mb-0 text-light">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="/docs/5.0/getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>
    
    </section>


</div>
<div class="modal fade" id="Loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <h4 class="text-center">Login</h4>
    <form action="">

    <input type="text" name="" id="" class="form-control" placeholder="username">
    <br>
    <input type="password" name="" id="" class="form-control" placeholder="password">

    </form>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
$(document).ready(function(){
    var delay = 500;
 
 $(window).load(function() {
     setTimeout(function(){
         $("#loading").hide();
         $(".loader").hide();
     },delay);
 });})
    </script>
  </body>
</html>