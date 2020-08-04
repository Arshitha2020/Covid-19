<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Covid-19 portal</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body>
<nav class="navbar navbar-expand-lg nav_style  p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
     
    </ul>
  
  </div>
</nav>

<div class="main_header">
 <div class="row w-100 h-100">
  <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
    <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
     <img src="images/diversity (1).png" alt="" width="300" height="300">
  </div>
</div>
<div class="col-lg-7  col-md-7 col-12 order-lg-2 order-1">
  <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
    <h1>Let's Stay Home, Stay Safe and fight together against Cor <span class="corona_rot"><img src="images/vi.png" alt=""></span>  na Virus.</h1>
  </div>
 </div>
</div>
</div>




<!-- Corona latest updates-->
<section class="corona_update">
  <div class="mb-3">
    <h3 class="text-uppercase text-center">Covid-19 Current Updates</h3>
  </div>
    <div class="d-flex justify-content-around align-items-center">
      <div>
        <h1 class="count">6,524,266</h1>
        <p>Total passengers screened</p>
      </div>
      <div>
        <h1 class="count">250,847</h1>
        <p>Active cases</p>
      </div>
      <div>
        <h1 class="count">89,0087</h1>
        <p>Cured/discharged cases</p>
      </div>
      <div>
        <h1 class="count">2,567</h1>
        <p>Deaths</p>
      </div>
    </div>
</section>

<!--About Section-->

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>About COVID-19</h1>
  </div>


  <div class="row pt-5">
    <div class="col-lg-5 col-md-6 col-12 ml-5">
      <img src="images/covid.jpg" alt="" class="img-fluid">
    </div>

    <div class="col-lg-6 col-md-6 col-12">
      <h2>What is COVID-19 / Corona virus?</h2>
      <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people and cancer are more likely to develop serious illness.</p>
      <p>
At this time, there are no specific vaccines or treatments for COVID-19. WHO will continue to provide updated information as soon as clinical findings become available.</p>
    </div>
  </div>

</div>

<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>copyright by Arshitha S A</p>
    </div>
</footer>

<script type="text/javascript">
  $('.count').counterUp({
    delay:90,
    time:5000
  })
</script>

</body>
</html>
