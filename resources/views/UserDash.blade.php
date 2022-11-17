<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/logo_peso.png"/>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <!-- boostrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- card -->
  <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <title>PESO-Bulan</title>
</head>
<style>

@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');


*{
box-sizing: border-box;
}

.course{
/* background: #FFF; */
border-radius: 4px;
box-shadow: 0px 5px 40px rgba(0, 0, 0, 0.2);
display: inline-block;
overflow: hidden;
width: 100%;
}
.course-info{

height: 200px;
background-repeat: no-repeat;
  background-size: cover;
color: #FFF;
float: left;
padding: 30px;
width: 30%;
}
.course-progress{
float: left;
padding: 30px;
position: relative;
width: 65%;
}
.course h2{
letter-spacing: 1px;
margin: 10px 0px;
}

.course-info a{
color: #FFF;
display: inline-block;
font-size: 8px;
opacity: 0.8;
/* margin-top: 30px; */
text-decoration: none;
}
.progress-container{
position: absolute;
top: 30px;
right: 30px;
text-align: right;
width: 150px;
}
.progress{
/* background: #DDD; */
border-radius: 3px;
height: 5px;
width: 100%;
}

.progress-text{
font-size: 8px;
opacity: 0.8;
letter-spacing: 1px;
}

#texts{
  color:black;
  font-size: 12px;
}

.bttn{
background: #ED474A;
border: 0px;
outline: none;
box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.2);
color: #FFF;
font-size: 16px;
padding: 12px 25px;
position: absolute;
right: 30px;
bottom: -50px;
cursor: pointer;
letter-spacing: 1px;
}

@media screen and (max-width: 740px) {
.course-progress, .course-info{
width: 100%;
height: 200px;
float: none;
}
.course-info{
height: 140px;
}
.course-info h2{
margin: 8px 0px;
}
.course-info a{
margin-top: 10px;
}
.course-progress h2{
margin: 16px 0px;
}

}



    *{
    margin: 0;
    padding: 0;
    color: #f2f5f7;
    font-family: sans-serif;
    letter-spacing: 1px;
    font-weight: 300;
}
body{
    overflow-x: hidden;
}
nav{
    height: 6rem;
    width: 100vw;
    background-color: #1E5298;
    box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
    display: flex;
    /* position: fixed; */
    z-index: 10;
}

/*Styling logo*/
.logo{
    padding:1vh 1vw;
    text-align: center;
}
.logo img {
    height: 5rem;
    width: 5rem;
}

/*Styling Links*/
.nav-links{
    display: flex;
    list-style: none; 
    width: 88vw;
    padding: 0 0.7vw;
    justify-content: space-evenly;
    align-items: center;
    text-transform: uppercase;
}
.nav-links li a{
    text-decoration: none;
    margin: 0 0.7vw;
}
.nav-links li a:hover {
    color: #61DAFB;
}
.nav-links li {
    position: relative;
}
.nav-links li a::before {
    content: "";
    display: block;
    height: 3px;
    width: 0%;
    /* background-color: #61DAFB;  linee blue */
    position: absolute;
    transition: all ease-in-out 250ms;
    margin: 0 0 0 10%;
}
.nav-links li a:hover::before{
    width: 80%;
}

/*Styling Buttons*/
.login-button{
    background-color: transparent;
    border: 1.5px solid #f2f5f7;
    border-radius: 2em;
    padding: 0.7rem 0.9rem;
    margin-left: 2vw;
    font-size: 1rem;
    cursor: pointer;
    width: 150px;
    font-weight: 600;
    font-weight: bold;

}
.login-button:hover {
    color: #131418;
    background-color: #f2f5f7;
    border:1.5px solid #f2f5f7;
    transition: all ease-in-out 350ms;
    font-weight: 600;
    font-weight: bold;
}
.join-button{
    color: #131418;
    background-color: #61DAFB;
    border: 1.5px solid #61DAFB;
    border-radius: 2em;
    padding: 0.6rem 0.8rem;
    font-size: 1rem;
    cursor: pointer;
}
.join-button:hover {
    color: #f2f5f7;
    background-color: transparent;
    border:1.5px solid #f2f5f7;
    transition: all ease-in-out 350ms;
}

/*Styling Hamburger Icon*/
.hamburger div{
    width: 30px;
    height:3px;
    background: #f2f5f7;
    margin: 5px;
    transition: all 0.3s ease;
}
.hamburger{
    display: none;
}

/*Stying for small screens*/
@media screen and (max-width: 767px){

    nav{
        /* position: fixed; */
        position: relative;
        z-index: 3;
    }
    .hamburger{
        display:block;
        position: absolute;
        cursor: pointer;
        right: 5%;
        top: 50%;
        transform: translate(-5%, -50%);
        z-index: 2;
        transition: all 0.7s ease;
    }
    .nav-links{
        position: fixed;
        background: #1B4F72;
        color:white;
        height: 100vh;
        width: 100%;
        flex-direction: column;
        clip-path: circle(50px at 90% -20%);
        -webkit-clip-path: circle(50px at 90% -10%);
        transition: all 1s ease-out;
        pointer-events: none;
    }
    .nav-links.open{
        clip-path: circle(1000px at 90% -10%);
        -webkit-clip-path: circle(1000px at 90% -10%);
        pointer-events: all;
    }
    .nav-links li{
        opacity: 0;
    }
    .nav-links li:nth-child(1){
        transition: all 0.5s ease 0.2s;
    }
    .nav-links li:nth-child(2){
        transition: all 0.5s ease 0.4s;
    }
    .nav-links li:nth-child(3){
        transition: all 0.5s ease 0.6s;
    }
    .nav-links li:nth-child(4){
        transition: all 0.5s ease 0.7s;
    }
    .nav-links li:nth-child(5){
        transition: all 0.5s ease 0.8s;
    }
    .nav-links li:nth-child(6){
        transition: all 0.5s ease 0.9s;
        margin: 0;
    }
    .nav-links li:nth-child(7){
        transition: all 0.5s ease 1s;
        margin: 0;
    }
    li.fade{
        opacity: 1;
    }
}
/*Animating Hamburger Icon on Click*/
.toggle .line1{
    transform: rotate(-45deg) translate(-5px,6px);
}
.toggle .line2{
    transition: all 0.7s ease;
    width:0;
}
.toggle .line3{
    transform: rotate(45deg) translate(-5px,-6px);
}



div.input-block {
  position: relative;
  padding-left: 20px;
}
div.input-block input {
  font-size: 16px;
  color: #495055;
  width: 350px;
  padding: 15px 15px;
  border-radius: 0.5rem;
  border: 2px solid #D9D9D9;
  outline: none;
}
div.input-block span.placeholder {
  position: absolute;
  margin: 17px 0;
  padding: 0 4px;
  color: #6c757d;
  display: flex;
  align-items: center;
  font-size: 16px;
  top: 0;
  left: 25px;
  transition: all 0.2s;
  transform-origin: 0% 0%;
  background: none;
  pointer-events: none;
}
div.input-block input:valid+span.placeholder,
div.input-block input:focus+span.placeholder {
  transform: scale(0.8) translateY(-30px);
  background: #fff;
}
div.input-block input:focus {
  color: #284B63;
  border-color: #284B63;
}
div.input-block input:focus+span.placeholder {
  color: #1B4F72;
}
.place{
    width: 400px;
}

.card {
  /* background-color: dodgerblue;
  color: white; */
  padding: 1rem;
  height: 3rem;
  

}

.cards {
  max-width: 1100px;
  margin: 0 auto;
  display: grid;
  grid-gap: 1rem;
}

/* Screen larger than 600px? 2 column */
@media (min-width: 767px) {
  .cards { grid-template-columns: repeat(2, 1fr); }
}

/* Screen larger than 900px? 3 columns */
@media (min-width: 900px) {
  .cards { grid-template-columns: repeat(3, 1fr); }


}






.btn {
  margin-left:20px;
  background-color: #1B4F72;
  width: 90%;
  height: 52px;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 0.5rem;
  border: 2px solid #D9D9D9;
}

.btn:hover {
  background-color: RoyalBlue;
}



.wrapper{
  max-width: 1000px;
  width: 100%;
  margin: 30px auto 0;
  padding: 10px;
}

.wrapper .form_container{
  background: #fff;
  padding: 30px;
  box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.15);
  border-radius: 3px;
}


.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; 
}


.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 767px) {
  .column {
    width: 100%;
  }
} 



.wrapper { 
  /* margin-left:30px;
  margin-right:30px; */
  /* border : 2px solid #1B4F72;  */
  overflow:hidden;
  margin-bottom: 50px;
  
}

.wrapper div {
  
   min-height: 150px;
   padding: 10px;
} 

#one {
   background-color: white;
  margin-left:10px;
  color:black;
  float:left; 
  margin-right:10px;
  width:300px;
 
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);

  /* border-right:2px solid #1B4F72;; */
}
#two { 
  background-color: white;
  color:black;
  overflow:hidden;
  /* border:2px dashed #ccc; */
  min-height:170px;
  /* border : 2px solid #1B4F72;  */
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);

}

@media screen and (max-width: 767px) {
   #one { 
    float: none;
    /* margin-right:0; */
    margin-right:20px;
    margin-left:20px;
    width:auto;
    border:0;
    /* border-bottom:2px solid #000;     */
  }
}



#card_text{
  color: black;

} 

/* CSS */
.button-62 {
  /* background: #1B4F72; */
  background: RoyalBlue;
  
  border: 0;
  border-radius: 12px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: sans-serif;
  font-size: 16px;
  font-weight: 500;
  line-height: 2.5;
  outline: transparent;
  padding: 0 1rem;
  text-align: center;
  text-decoration: none;
  transition: box-shadow .2s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
}

.button-62:not([disabled]):focus {
  box-shadow: 0 0 .25rem rgba(17, 195, 232, 1), -.125rem -.125rem 1rem rgba(17, 195, 232, 1), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}

.button-62:not([disabled]):hover {
  box-shadow: 0 0 .25rem rgba(17, 195, 232, 1), -.125rem -.125rem 1rem rgba(17, 195, 232, 1), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}

nav ul li a{
color:white;
}

nav ul li{
  display:inline-block;
  line-height:100px;
  margin-top:20px;
}



</style>
<body>
    <nav>
        <div class="logo">
            <img src="images/logo_peso.png" alt="Logo Image">
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links" >
            <li style="color:red"><a href="#">Home</a></li>
            <li><a href="dashjobs">Jobs</a></li>
            <li><a href="companies">Companies</a></li>
            <!-- <li><a href="#">Services</a></li> -->
            <li><a href="Aboutus">About Us</a></li>
            @if (Route::has('login'))
            @auth
              <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf  
                      <a class="login-button" href="route('logout')"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">{{ Auth::user()->name }}
                      </a>
                </form>  
              </li>
                  @else
                  <b> <li><a class="login-button" href="login">Login</a></li></b>
                  <!-- <li><button class="join-button" href="#">Join</button></li> -->
              @endauth
            @endif
          
        </ul>
    </nav>
   

    <img src="images/Bulan.png" style="width:100%;height:300px;">
<hr>

<div class="cards">
    <div class="input-block" >
  <input type="text" name="input-text" id="input-text" required spellcheck="false">
  <span class="placeholder">
  Search for Job tittle or Company name
  </span>
</div>
 
    <div class="input-block">
  <input type="text" name="input-text" id="input-text" required spellcheck="false" >
  <span class="placeholder">
  Location
  </span>
</div>
 
  <button class="btn"><i class="fa fa-search"></i> Search</button>
   </div>
<hr>
   

<div class="wrapper">


    <div id="one">
      <img src="images/seminar.png" alt=""  width="100%" height="100%">
   
    <h2 style="color:blue;">Seminars</h2>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Quis delectus perferendis dicta nesciunt, iure at qui culpa deleniti, eaque est sequi laboriosam 
   
<hr>
    <a href="dashjobs"><img src="images/findjob.png" alt=""  width="100%" height="100%"></a>

    </div>

			@foreach($data as $data)
  <div id="two">
        <div class="course">
          <div class="course-info">
          <img src="images/{{$data->logo}}" style="width:100%;height:100%;">
          </div>
          <div class="course-progress">
          
            <h3 id="card_text">{{$data->CompanyName}}</h3>
            <h6 id="card_text">Job Description</h6>
                  <?php
                   $About = Str::limit($data->JobDescription, 250);
                   ?>
            <p id="texts">{{$About}} </p>  
               
          <br>
       
          
          <a class="button-62 w3-right" data-toggle="modal" data-target="#applicantModal1{{$data->id}}">View Details &raquo;</a>
            @include('modal.UserDashView');

              
          </div>
       </div>
       @endforeach
  </div> 

  </div>

  
 
  <!-- <div class="row">
  <div class="column">

  <div class="wrapper">
 <div class="form_container">
 
     
 </div>
</div>

  </div>

  <div class="column" >

  <div class="wrapper">
 <div class="form_container">
  
 </div>
</div>
  </div>
</div> -->

   
    
</body>
<script>
    const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener('click', ()=>{
   //Animate Links
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    //Hamburger Animation
    hamburger.classList.toggle("toggle");
});
</script>
</html>
