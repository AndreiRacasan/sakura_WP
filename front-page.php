<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php wp_head(); ?>

  <title>Sakura UI</title>
</head>

<body>
  <header class="header text-center">
    <a class="site-title pt-lg-4 mb-0" href="index.html">Sakura UI</a>

    <nav class="navbar navbar-expand-lg navbar-dark">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div id="navigation" class="collapse navbar-collapse flex-column">
        <img class="mb-3 mx-auto logo" src="img/logo.png" alt="logo">

        <ul class="navbar-nav flex-column text-center">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.html">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page.html">Page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="archive.html">Archive</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>

      </div>
    </nav>
  </header>

  <div class="main-wrapper">
    <header class="page-title theme-bg-light text-center gradient py-5">
      <h1 class="heading">Home</h1>
    </header>
    <article class="content px-3 py-5 p-md-5">
      <div class='container'>
        <p class="mt-3 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae veritatis laborum hic velit reprehenderit consequatur fuga consectetur sunt nobis saepe!</p>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/s1.jpg" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
              <img src="img/s2.jpg" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
              <img src="img/s3.jpg" class="d-block w-100" alt="3">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <section class="newsletter py-5 mt-4 text-center">
          <h3 class='text-light d-block'>Subscribe to the Newsletter</h3>
          <form class="signup-form form-inline justify-content-center pt-3">
            <div class="form-group">
              <label class="sr-only" for="semail">Your email</label>
              <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-purple">Subscribe</button>
          </form>
        </section>
        <div class="row row-cols-1 mt-4 row-cols-md-2">
          <div class="col mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Card 1</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae voluptatum itaque in distinctio dolores sequi repellat.</p>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Card 2</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae voluptatum itaque in distinctio dolores sequi repellat.</p>
              </div>
            </div>
          </div>
        </div>
    </article>
    <footer class="footer text-center py-2 theme-bg-dark">

      <p class="copyright"><a href="#">© Andrei Racasan 2021</a></p>

    </footer>

  </div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>

</body>

</html>