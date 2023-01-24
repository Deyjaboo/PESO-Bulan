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
    <title>PESO-Bulan</title>
</head>
<style>

@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
p{
  color:black;
}
h2{
    color:black;
}

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
  text-align: justify;
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
}



#card_text{
  color: black;

} 



#dropbtn {
  background-color: #ffffff;
  color: blue;
  padding: 10px;
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
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  margin-left: 20px;
 margin-top: 10px;

}

.dropdown-content a {
  color: black;
  padding: 10px;
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

 footer{
    /* position:fixed; */
    bottom: 0;
    left: 0;
    right: 0;
    background: #1E5298;
    color: #fff;
}

.footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.footer-content h3{
    font-size: 2rem;
    font-weight: 500;
    text-transform: capitalize;

}
.footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 5px;
    font-size: 14px;
    color: #cacdd2;
}

.socials{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 2rem 0;
}

.socials li{
    margin: 0 10px;
}

.socials a{
    text-decoration: none;
    color: #fff;
    border: 1.1px solid white;
    padding: 5px;
    border-radius: 50%;
}

.socials a i{
    font-size: 1.1rem;
    width: 20px;
    transition: color .4s ease;
}

.socials a:hover i{
    color: aqua;
} 

#aboutfooter{
    padding: 50px;
    text-align: justify;
}

#car{
    font-weight: 500;
    color:black;
}
.column {
  float: left;
  width: 50%;
  padding: 30px;
  /* padding-left: 30px;
  padding-right: 30px; */
  height: 300px; /* Should be removed. Only for demonstration */
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
            <li><a href="#">About Us</a></li>
           
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

    <center>
        
        <img src="images/home1.png" style="width:100%;height:500;">
        <p id="aboutfooter">The Public Employment Service Office or PESO is a non-free charging multi-employment service 
              facility or entity established or accredited pursuant to Republic Act. No. 8579, otherwise known as 
              the PESO Act of 1999. This office is a venue where people could explore simultaneously various
               employment options and seek assistance they prefer; service as referral and information center for 
               the various services and programs of DOLE, TESDA, POEA, OWWA, and other recruitment agencies; 
               Provide clients with adequate information in employment and labor market situation in the area, and
                network with other PESOs within the region on employment for job exchange purposes. 
                This office is linked to the regional offices if the Department of Labor and Employment
                 (DOLE) for coordination and technical supervision, 
              and to the DOLE central office, to constitute the national employment service network. </p>


              <h5><i id="card_text">  Core Services:
              
 Labor Market Information
, Referral and Placement
, Employment Coaching and Career Counseling</i>
</h5>
    </center>

    <!-- <p>Programs Implemented:

1. Special Program for the Employment of Students (SPES)
2. Job Fairs
3. PhilJobnet / PESO Employment Information System (PEIS)
4. National Skills Registry Program (NSRP)
5. DOLE Government Internship Program (DOLE-GIP)
6. Tulong Pangkabuhayan para sa Ating Disadvantaged Workers (TUPAD)
7. DOLE Integrated Livelihood and Emergency Employment Program (DILEEP)
8. JOBSTART
9. Pre-Employment Orientation Seminar (PAOS)</p> -->


<!-- <div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Column 1</h2>
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <p>1. Special Program for the Employment of Students (SPES)
2. Job Fairs
3. PhilJobnet / PESO Employment Information System (PEIS)
4. National Skills Registry Program (NSRP)
5. DOLE Government Internship Program (DOLE-GIP)
6. Tulong Pangkabuhayan para sa Ating Disadvantaged Workers (TUPAD)
7. DOLE Integrated Livelihood and Emergency Employment Program (DILEEP)
8. JOBSTART
9. Pre-Employment Orientation Seminar (PAOS)</p>



  </div>
</div> -->
 
<center>  
<div class="row">
  <div class="column" >
    <b><h2>Vision</h2></b>
    <p>A Premier Investment centre with empowered and resilient community, progressive economy, sustainable environment and preserved heritage anchored on transformational and responsive governance.</p>
  </div>
  <div class="column">
   <b><h2>Mission</h2></b> 
    <p>To Live and uphold the values of respect for god , human life and dignity, the environment, and its heritage,to promote integrity in public service that will help to transform bulan into empowered, peaceful, prosperous,resilient and investment-friendly community.</p>
  </div>
</div>      
</center>   


    <br><br>
       <footer>
       <div class="footer-content">
       <h3>PESO-Bulan</h3>
       <p>Public Employment Service Office </p>
       <ul class="socials">
       <a href="https://www.dole.gov.ph/"> <img src="images/Dole.png"  alt="Avatar" style="width:30px"></a> 
   <li></li>
    <a href="https://bulan4706.com/"> <img src="images/BULAN LGU LOGO.png"  alt="Avatar" style="width:30px"></a> 
    <li></li>
    <a href="https://www.tesda.gov.ph/"> <img src="images/tesda.png"  alt="Avatar" style="width:30px"></a> 
 </ul>
        </div>
        </footer> 

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
