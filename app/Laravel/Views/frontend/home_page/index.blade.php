@extends('frontend._layouts.main')

@section('content')
<body>
 <header>
    <nav class="navbar " id="navbarscroll"> 
        <div class="nav">
          <div class="logo">
            <h3>Vac<span style="color:#0bb8c6;">cimo</span></h3>
          </div>
          <div class="nav-list"id="nav-menu">
            <ul>
            <li><a href="#carouselExampleSlidesOnly" class="nav-link active d-block">Home</a></li>
            <li><a href="#service" class="nav-link ">Service</a></li>
            <li><a href="#about" class="nav-link ">About</a></li>
            <li><a href="#contact" class="nav-link ">Contact</a></li>
            </ul>
            </div>
        </div>
   </nav>
  </header>
        <main role="main">
          <div class="row">
          <div class="col-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
              <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{asset('/assets/img/t.jpg')}}" class="d-block w-100" alt="..."style="height: 600px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/assets/img/w.jpg')}}" class="d-block w-100" alt="..."style="height: 600px;">
                    </div> 
              </div>
                  <div class="carousel-caption d-sm-block">  
                          <a href="{{route('system.login')}}" target="_blank"><button type="button" class="btn " id="btnlogin" ></button></a>
                      </div>
            </div>
          </div>
          </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <section id="service">
        <div class="row ">
          <div class="service-container">
            <br>
        <h1>SERVICE</h1>
         <div class="service-list">
         <div class="col-sm-4 ">
          <div class="card-list ">
            <img class="rounded-circle mb-3" src="{{asset('/assets/img/par.png')}}" alt="Generic placeholder image" width="140" height="140">
            <br>
            <h2>WHAT ADVERSE REACTION SHOULD YOU INDICATE?</h2>
            <br>
            <p>We urge individuals to report any medical problems that occur after getting vaccinated. The immunization may create certain issues. Others may not have a link.<span id="dots">...</span><span id="more">The application you use to submit a report to us collects information such as:The vaccinationThe individual who was immunizedThe response that occurred </span></p>
            <button type="button" class="btn-service" style="margin-top:26px" onclick="myFunction()" id="myBtn">Read more</button>
          </div><!-- /.col-4 -->
          </div>
          <div class="col-sm-4">
          <div class="card-list">
            <img class="rounded-circle mb-3" src="{{asset('/assets/img/par2.png')}}" alt="Generic placeholder image" width="140" height="140">
            <br>
            <h2>WHY SHOULD CARE ABOUT SIDE <br>EFFECTS?</h2>
            <br>
            <p>Vaccimo contains valuable information to vaccine safety specialists, allowing them to examine any vaccination safety risks, including the different kind of COVID-19 vaccines.<span id="dots2">...</span><span id="more2"> It is especially beneficial for spotting unusual or unexpected patterns of health issues (also known as "adverse events") that may suggest a potential vaccination safety risk. Severe reactions that might lead to long-term health problems are exceedingly rare after any immunization, particularly COVID-19 vaccination. If side effects do develop, they usually occur within six weeks of getting a vaccination dose.</span></p>
            <button type="button" class="btn-service" onclick="myFunction2()" id="myBtn2">Read more</button>
          </div><!-- /.col-4 -->
          </div>

          <div class="col-sm-4 ">
          <div class="card-list">
            <img class="rounded-circle mb-3" src="{{asset('/assets/img/par3.png')}}" alt="Generic placeholder image" width="140" height="140">
            <br>
            <h2>REGISTER TO VACCIMO:</h2>
            <br>
            <p>You can participate in Vaccimo after receiving any dose of COVID-19 vaccination by visiting vsafe.cdc.gov on your desktop or mobile device.<span id="dots3">...</span><span id="more3"> Keep your vaccination information card handy to help you recall which vaccines you got and when.</span></p>
            <button type="button" class="btn-service" style="margin-top:50px" onclick="myFunction3()" id="myBtn3">Read more</button>

          </div><!-- /.col-4 -->
          </div>
          </div>
          </div>
        </div><!-- /.row -->
     </section>

        <!-- START THE FEATURETTES -->
<div class="about-container">
        <hr class="featurette-divider " id="about">
        <div class="about-title">
              <h1>ABOUT US </h1>
        </div>

        <div class="row featurette ">
          <div class="col-md-7 "style="text-align: justify;">
            <p class="lead">VACCIMO  is a monitoring system,which means it appears to be based on participants who reported their experiences to us. VACCIMO is not required to assess whether a vaccination caused a health problem, but it is particularly beneficial for spotting odd or unexpected patterns of adverse event reporting that may signal a probable vaccine safety concern. In this manner, VACCIMO can give us with pertinent information indicating that extra study and investigation are required to better examine a potential safety problem. VACCIMO offers individual and confidential health check-ins via app, allowing users and easily share how you or your dependents are feeling after receiving a COVID-19 vaccine. This data enables us to monitor the safety of COVID-19 vaccines in order to monitor.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"  src="{{asset('/assets/img/carousel1.jpg')}}" data-holder-rendered="true">
          </div>
        </div>
        </div>

        <!-- /END THE FEATURETTES -->

      </div>
      <!-- /.container -->
      <div class="contact-container " id="contact">
      <hr class="featurette-divider">

    <h1 class="pb-2 " style="color:black;letter-spacing: 10px;
    font-weight: bold;
    font-size: xx-large;">CONTACT US</h1>
    <div class="row g-4 py-5 row-cols-1 row-cols-md-12">
      <div class="feature col-sm-4">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center  text-white fs-2 mb-3">
        <i class="fa fa-envelope"></i>
        </div>
        <p>wtorreno.k11722006@umak.edu.ph</p>
        
      </div>
      <div class="feature col-sm-4">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center  bg-gradient text-white fs-2 mb-3">
        <i class="fa fa-phone"></i>
        </div>
        
        <p>09193645186-SMART/TNT</p>
      </div>
      <div class="feature col-sm-4">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center     bg-gradient text-white fs-2 mb-3">
        <i class=" fa fa-location-arrow "aria-hidden="true"></i>
      </div>
        <p>JP.RIZAL EXTENSION WEST REMBO 1215 MAKATI CITY</p>
      </div>
    </div>

  </div>

      <!-- FOOTER -->
      <footer class=" footer ">
       
        <div class="footer-item">
    <ul >
      <li><a href="#carouselExampleSlidesOnly" >Home</a></li>
      <li><a href="#service">Service</a></li>
      <li><a href="#about" >About</a></li>
      <li><a href="#contact" >Contact</a></li>
    </ul>
    <p class="text-center ">© 2022 Vaccimo, Inc</p>
    </div>
  </footer>
    </main>

<script type="text/javascript">
    // window.location.href="/home-page"
</script>
</body>
@stop