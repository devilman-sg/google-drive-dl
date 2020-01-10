<?
error_reporting(0);
if($_POST['custId']=='3487' and preg_match_all('@drive.google.com@',$_POST['link'])){

include_once 'stuff.php';


$link = get_drive_dlink($_POST['link']);



}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Drivelink Generate Direct Download Links for your google drive files">
  <meta name="author" content="Anonembed/drivelink">

  <link href="https://i.imgur.com/LY2rwrT.png" type="image/x-icon" rel="shortcut icon">

  <title>Drivelink: Generate Direct Download link for google drive</title>

  <!-- Bootstrap core CSS -->
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <style>
      body{font-family:Lato,'Helvetica Neue',Helvetica,Arial,sans-serif}h1,h2,h3,h4,h5,h6{font-family:Lato,'Helvetica Neue',Helvetica,Arial,sans-serif;font-weight:700}header.masthead{position:relative;background-color:#343a40;background:url("https://i.imgur.com/hh44oFu.jpg") no-repeat center center;background-size:cover;padding-top:8rem;padding-bottom:8rem}header.masthead .overlay{position:absolute;background-color:#212529;height:100%;width:100%;top:0;left:0;opacity:.3}header.masthead h1{font-size:2rem}@media (min-width:768px){header.masthead{padding-top:12rem;padding-bottom:12rem}header.masthead h1{font-size:3rem}}.showcase .showcase-text{padding:3rem}.showcase .showcase-img{min-height:30rem;background-size:cover}@media (min-width:768px){.showcase .showcase-text{padding:7rem}}.features-icons{padding-top:7rem;padding-bottom:7rem}.features-icons .features-icons-item{max-width:20rem}.features-icons .features-icons-item .features-icons-icon{height:7rem}.features-icons .features-icons-item .features-icons-icon i{font-size:4.5rem}.features-icons .features-icons-item:hover .features-icons-icon i{font-size:5rem}.testimonials{padding-top:7rem;padding-bottom:7rem}.testimonials .testimonial-item{max-width:18rem}.testimonials .testimonial-item img{max-width:12rem;-webkit-box-shadow:0 5px 5px 0 #adb5bd;box-shadow:0 5px 5px 0 #adb5bd}.call-to-action{position:relative;background-color:#343a40;background:url("https://i.imgur.com/zw2hKdC.png") no-repeat center center;background-size:cover;padding-top:7rem;padding-bottom:7rem}.call-to-action .overlay{position:absolute;background-color:#212529;height:100%;width:100%;top:0;left:0;opacity:.3}footer.footer{padding-top:4rem;padding-bottom:4rem}
  .features-icons {
     padding-top: 1rem;
  }
  </style>


</head>

<body>

  <!-- Navigation -->
  <nav class="navbar sticky-top navbar-dark bg-dark navbar-expand-lg">
  <a class="navbar-brand" href="index.php">
      <img src="https://i.imgur.com/LY2rwrT.png" width = "25px" height="25px">
      Drivelink
      </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="https://p4pirate.xyz/"><i class="fas fa-home"></i> Movies, Tv shows & more+</a>
      </li>

    </ul>

  </div>
</nav>

 <!-- Search -->
  <section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Paste Google Drive Link</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form action="" method="POST" id="generate">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="text" name="link" value="" class="form-control form-control-lg" placeholder="Paste Link here" required>
           <input type="hidden" name="custId" value="3487">
              </div>
              <div class="col-12 col-md-3">
                <button id="gog" type="submit" class="btn btn-block btn-lg btn-primary"><i class="fas fa-arrow-circle-right"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-light text-center">
      <div class="container">
          <div class="row">
          <div class="col">

              <div id="results">
              <? if($link){ ?>
              <div id="alert" class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Generated!!</strong> Your link is generated. <a href="<? echo $link; ?>" target="_blank">Click here</a><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button></div>
              <? } ?>
              </div>
          </div>
  </div>
      </div>
  </section>


  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">

        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">

              <i class="fas fa-paste m-auto"></i>
            </div>

            <p class="lead mb-0"> Paste Gdrive Link!</p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fas fa-arrow-circle-right m-auto"></i>
            </div>

            <p class="lead mb-0">Hit <i class="fas fa-arrow-circle-right"></i> and Get Your link!  </p>
          </div>
        </div>

         <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
                <i class="fas fa-share-alt m-auto"></i>
            </div>

            <p class="lead mb-0">Enjoy your Direct Download link!</p>
          </div>
        </div>

        </div>



      </div>
    </div>
  </section>



<hr>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; AnonEmbed <?php echo date("Y"); ?>. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

</body>
</html>

