<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Photo Gallery</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
    <link rel="stylesheet" href="css/style.css">   

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Photo Gallery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false" >Categories</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#nature">Nature</a>
          <a class="dropdown-item" href="#abstract">Abstract</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#nature">All</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact Us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
    </ul>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img7.jpg" class="d-block w-100" alt="nature1">
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" class="d-block w-100" alt="nature2">
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpg" class="d-block w-100" alt="nature3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

<section class="my-4 nature" id= "nature">
  <div class="py-4">
    <h2 class="text-center">Nature</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
    <div class="col-lg-4 col-md-6 col-12">
    <img src="images/img1.jpg" alt="image" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-6 col-12">
    <img src="images/img2.jpg" alt="image" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-6 col-12">
    <img src="images/img3.jpg" alt="image" class="img-fluid pb-3">
  </div>
    </div>   
  </div>
 
</section>

<section class="my-4" id="abstract">
  <div class="py-4">
    <h2 class="text-center">Abstract</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
    <div class="col-lg-4 col-md-6 col-12">
    <img src="images/img4.jpeg" alt="image" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-6 col-12">
    <img src="images/img5.jpg" alt="image" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-6 col-12">
    <img src="images/img6.jpeg" alt="image" class="img-fluid pb-3">
  </div>
    </div>   
  </div>
 
</section>

<section id="contact">
<div class="w-50 m-auto">
<h2 class="text-center py-4">Contact Us</h2><hr></hr>
  <form action="about.php" method="post">
   
  <div class="form-group">
    <label>Name:</label>
    <input type="text" name="name" id="name" placeholder="Enter your full name" class="form-control" required>
   </div>
   
   <div class="form-group">
    <label>Email:</label>
    <input type="email" name="email" id="email" placeholder="Enter your email id" class="form-control" required>
   </div>

   <div class="form-group">
    <label>Phone Number:</label>
    <input type="number" name="number" id="number" placeholder="Enter your phone number" class="form-control" required>
   </div>

   <div class="form-group">
    <label>Description:</label>
    <input type="textarea" name="des" id="des" placeholder="Enter description" class="form-control">
   </div>

   <button type="submit" class="btn btn-primary m-auto">Submit</button>

  </form>
</div>
</section>

<section class="my-4" id="about">
<h2 class="text-center py-4">About</h2>
<hr></hr>
  <div class="py-4 about">
   <h3 class="text-center">GS</h3>
    <p class="about text-center"><b>Welcome to my first php webpage</b></p>
  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>