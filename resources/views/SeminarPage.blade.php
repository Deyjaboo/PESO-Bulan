<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/logo_peso.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- card -->
  <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <title>PESO-Bulan</title>
</head>
<style>

@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');


*{
box-sizing: border-box;
}

.course{
background: #FFF;
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
margin-top: 30px;
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
display: inline-block;
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
/* .login-button:hover {
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
} */

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
        background: #1B4F72;;
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


#one {
   background-color: white;
  margin-left:30px;
  color:black;
  float:left; 
  margin-right:20px;
  width:200px;
  border : 2px solid #1B4F72; 
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

  .dropdown-content {
  margin-left: 20px;
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
   min-width: 160px;
  bottom: 50px;
  z-index: 1; 

}
}



#card_text{
  color: black;

} 


* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 28%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
  margin-left: 30px;
  margin-right: 30px;
  text-align: justify;
}
p{
    color: black;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

h5{
    color:RoyalBlue;
}

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

.wrapper{
  max-width: 450px;
  width: 100%;
  margin: 30px auto 0;
  padding: 10px;
}

.wrapper .form_container{
  background: #fff;
  padding: 30px;
  box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.15);
  border-radius: 25px;
  border-color: #99bbff;
  border-style: outset;
}

li a{
    color: white;
}

.train{
    color: black;
    margin-left: 20px;
    margin-top: 10px;
}
#nodata{
color: black;
}


#dropbtn {
  background-color: #ffffff;
  color: blue;
  padding: 8px;
  font-size: 12px;
  font-family: Arial, Helvetica, sans-serif;
  cursor: pointer;
  font-weight: bold;
  

}


.dropdown {
  position: relative;
  display: inline-block;
  
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1; 
   margin-left: 30px;

  
}

.dropdown-content a {
  color: black;
  padding: 5px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}



.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
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
        <ul class="nav-links">
            <li><a href="UserDash">Home</a></li>
            <li><a href="dashjobs">Jobs</a></li>
            <li><a href="companies">Companies</a></li>
            <li><a href="SeminarPage">Seminar</a></li>
            <!-- <li><a href="#">Services</a></li> -->
            <li><a href="Aboutus">About Us</a></li>
        
            @if (Route::has('login'))
            @auth
                @if (Auth::user()->role == 'admin')
                <div class="dropdown">
                  <li>  <a class="login-button" href="#">{{ Auth::user()->name }}</a> </li>   

                        <div class="dropdown-content">
                        <a href="dashboard" class="dropdown-item" id="dropbtn">
                              <i class="fa fa-eye" style="font-size:20px;color:blue"></i>
                              View As Admin
                            </a> 

                          <form action="{{ route('logout') }}" method="POST">
                                    @csrf  
                      <a href="route('logout')" id="dropbtn"
                              onclick="event.preventDefault();
                            this.closest('form').submit();">  <i class="fa fa-sign-out" style="font-size:18px;color:blue"></i>Logout 
                          
                              </a>  
                              </form>  
                            
                        </div>
                </div>
                  @else
                  <div class="dropdown">
                  <li>  <a class="login-button" href="#">{{ Auth::user()->name }}</a> </li>   

                        <div class="dropdown-content">
                          <a href="profile" class="dropdown-item" id="dropbtn">
                              <i class="fa fa-eye" style="font-size:20px;color:blue"></i>
                              View Profile
                          </a> 

                          <form action="{{ route('logout') }}" method="POST">
                                    @csrf  
                      <a href="route('logout')" id="dropbtn"
                              onclick="event.preventDefault();
                            this.closest('form').submit();">  <i class="fa fa-sign-out" style="font-size:18px;color:blue"></i>Logout 
                          
                              </a>  
                              </form>  

                            
                        </div>
                </div>
                  @endif  
                  @else
                 <b> <li><a class="login-button" href="login">Login</a></li></b>
              @endauth
            @endif  
          
        </ul>
    </nav>

    <img src="images/train.png" style="width:100%;height:300px;">
 
        <!-- <div class="course">
          <div class="course-info">
          <img src="images/Seminars.png" style="width:110%;height:200%;">
          </div>

          <div class="course-progress">
          
           <b><h2 id="card_text">Training / Seminar</h2></b> 
            <h4 id="card_text">Bulan,Sorsogon</h4>
            <p id="texts">Training and Seminar should be top priority to organisations because the benefits to employees are numerous. According to Steptoe-Warren (2013) these benefits include:

                Reduction in poor quality and defective products and services
                Reduced waste (eg materials in the process of production)
                Reduction in absenteeism
                Reduction in staff turnover
                Reduction in customer complaints and customer turnover
                Increased staff loyalty/feelings of obligation (Shore et al. 2006) and motivation (Grant 2008)
                A more flexible, empowered and adaptable workforce (Pfeffer 1998)
                Enhanced company image</p>
      
             <br><br> 
          </div>
          
       </div> -->
<br>
      
       <div class="row">
        @foreach($sem as $sem)
        <div class="column">
        <div class="wrapper">
        <div class="form_container">
        <!-- <img src="images/Peso.png" style="width:100%;height:100%;"> -->
        <!-- <img src="images/Peso.png" alt="" style="width:100%;"> -->
            <h5>{{$sem->SeminarTitle}}</h5> 
            <p>(Duration: From {{$sem->DateStart}} to {{$sem->DateEnd}})</p>
            <p>Slots: {{$sem->SeminarSlots}}</p>
          
            <a class="button-62 w3-right" data-toggle="modal" data-target="#seminar_view{{$sem->id}}">Learn more &raquo;</a>
            @include('modal.SeminarView')
        </div>
        </div>
        </div>   
        @endforeach
        </div>
        <br>
        @if ($sem1 == 0)
        <section>
            <center>
             <h1><i id="nodata">No Seminars Available!</i></h1>
            </center>
        </section>
        @endif
   
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
