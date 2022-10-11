<!DOCTYPE html>
<html>
<head>
	@include('frontend._components.metas')
	@include('frontend._components.styles')
	@yield('page-styles')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
        
        *{
            margin:0;
            padding:0;
        }
        body{
            width: 100%;
            margin: 0;
            font-size: 20px;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
            box-sizing: border-box;
            overflow-x:hidden;



        }
        #btnlogin{

        }

        .carousel-inner{
            filter: brightness(0.7);
        }
        #btnlogin{
  position: relative;
  display: inline-flex;
  width: 180px;
  height: 55px;
  margin: 0 15px;
  perspective: 1000px;
  font-weight: bold;
}
#btnlogin{
  font-size: 19px;
  letter-spacing: 1px;
  transform-style: preserve-3d;
  transform: translateZ(-25px);
  transition: transform .25s;
  font-family: 'Montserrat', sans-serif;
  
}
#btnlogin:before,
#btnlogin:after{
  position: absolute;
  content: "Login";
  height: 55px;
  width: 180px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 5px solid #0bb8c6;
  box-sizing: border-box;
  border-radius: 5px;
}
#btnlogin:before{
  color: #fff;
  background: #0bb8c6;
  transform: rotateY(0deg) translateZ(25px);
}
#btnlogin:after{
  color: #0bb8c6;
  transform: rotateX(90deg) translateZ(25px);
}
#btnlogin:hover{
  transform: translateZ(-25px) rotateX(-90deg);
}


        header{
            background-color:#212529a6;
            color:white;
            z-index: 9;
            width: 100%;
           display: block;
        }
        .logo{
            background-color: #157bd612;
            padding: 10px;
            
        }
        .logo h3{
            margin-bottom:0px;
        }

        .logo a{
            text-decoration: none;
        }
        .navbar{
            padding-top: 25px;
            position: fixed;
            z-index: 100;
            border: 0px;
            width: 100%;
            margin-bottom: 0px;
            justify-items: center;
            display:flex;
        }
        .nav{
            align-items: baseline;
            justify-content: center;
            position: fixed;
            width: 100%;
            background-color:#212529a6;
            padding-top: 15px;



        }
        .nav ul{

            display: flex;
           
   
    padding-left: 30px;
    
        }
        .nav ul li a{
            color: white ;
            font-size: 16px;
            transition: 0.3s;
        }
        .nav ul li a:hover{
            color: #0bb8c6 !important;
            transition: 0.3s;
           
        }
        .footer{
            background-color: #212529;
            padding-bottom: 1px;
            padding: 20px;
            color:white;


        }
        .footer-item {
            text-align: -webkit-center;
    
            }
            

        .footer ul{
            justify-content: center;
            display: flex;
            width: 0px;
        }
        .footer ul a{
            text-decoration: none;
            color: #8b8b8b;
            padding: 0px 1rem;
            font-size: 15px;
            transition:0.03s;
            
        }
        .footer ul a:hover{
            color: white;
            font-size: 20px;
            transition:0.03s;
        }
        .footer  p{
            margin-bottom: 0px;
            padding-top: 28px;
    font-size: 12px;           
        }
        .footer ul a:hover{
            opacity: 0.7;
        }
        fa:hover {
    opacity: 0.7;
}
        hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
        .h1, h1 {
    font-size: 2.5rem;
    padding-bottom: 26px;
    color:white;
}
        .nav-laravel
        {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
        }
        .nav-brand , .nav-link, .my-form, .login-form
        {
            font-family: Raleway, sans-serif;
        }
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
       
        .login-form
        {
            padding-top: 0;
            padding-bottom: 0;
        }
		.collapse
		{
			margin-left: 26%;
            width: 166%;
		}
        .list-unstyled li
        {
            text-align: justify;
            margin-bottom:5%; 
        }

        .service-container{
            padding: 0px 50px;
        }
        .service-list{
            text-align: center;
        }
        .about-title h1{
          color: black;
          letter-spacing: 10px;
          font-weight: bold;
          font-size: xx-large;
        }
        .service-container h1{
            color: black;
            letter-spacing: 10px;
                    font-weight: bold;s
                    font-size: xx-large;
                    text-align: center;
                    padding-top: 20px;
        }
        .feature-icon i{
            cursor:pointer;
            width: 66px;height: 60px;  
            font-size: 50px; 
            transition: 0.3s; 
            font-size:50px;color: black;  
        }
        .feature-icon i:hover{
            font-size: 60px;  
            transition: 0.3s; 
        }
        .about-container{
            padding: 50px;
 
        }
        .contact-container{
            padding: 0px 50px;
            text-align: center;
        }
        .service-list .card-list{
            border: 2px solid;
            padding: 20px;
            position: relative;
            margin-bottom: 1rem;

        }
        .service-list .card-list button{
            padding: 5px;
        }
       
        .service-list .card-list p{
            font-size: 15px;
            text-align: justify;
        }
        .service-list .card-list h2 {
            font-size: 20px;
            font-weight: bold;
            margin:0px
        }

        .btn-service{
            color: black;
            border-color: #0bb8c6;
            border: 2px solid  #0bb8c6;
            padding: 0px 1rem;
            transition: 0.5s;
            cursor:point;
            font-size: 15px;
    font-weight: bold;
        }
        .btn-service:hover{
            background-color: #0bb8c6;
            transition: 0.5s;
            font-size: 20px;
        }
        #more {display: none;}
        #more2 {display: none;}
        #more3 {display: none;}

        
       
    </style>
</head>

<body>	
		@yield('content')

@include('frontend._components.scripts')
@yield('page-scripts')

<script>

// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};
const navscroll = document.getElementById("navbarscroll");

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    navscroll.style.top = "0";
    
  } else {
    navscroll.style.top = "0px";
  }
}


    function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
function myFunction2() {
  var dots2 = document.getElementById("dots2");
  var moreText2 = document.getElementById("more2");
  var btnText2 = document.getElementById("myBtn2");

  if (dots2.style.display === "none") {
    dots2.style.display = "inline";
    btnText2.innerHTML = "Read more"; 
    moreText2.style.display = "none";
  } else {
    dots2.style.display = "none";
    btnText2.innerHTML = "Read less"; 
    moreText2.style.display = "inline";
  }
}
function myFunction3() {
  var dots = document.getElementById("dots3");
  var moreText = document.getElementById("more3");
  var btnText = document.getElementById("myBtn3");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
</body>
</html>