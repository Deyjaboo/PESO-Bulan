
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/logo_peso.png"/>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    padding-top: 0;
    font-family: sans-serif;
    letter-spacing: 1px;
    font-weight: 300;
}
body{
    overflow-x: hidden;
}
nav.nav_head{
    color: white;
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
    color:white;
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
  margin-bottom: 50px;
}


}



#card_text{
  color: black;

} 


.columns {
 display: block;
 border-collapse: collapse;
 text-align: center;
 margin: 0 auto;
 padding: 0;
 width: 100%;


}
.col-12, .col-25, .col-33, .col-37, .col-50, .col-62, .col-66, .col-75, .col-87, .col-100 {
	text-align: left;
	display: block;
	float: left;
	padding: 10px 20px;
	box-sizing: border-box;
    
}
.col-12 img, .col-25 img, .col-33 img, .col-37 img, .col-50 img, .col-62 img, .col-66 img, .col-75 img, .col-87 img, .col-100 img {
	display: block;
	max-width: 100%;
	height: auto;
	margin: 0 auto;
	padding: 0;
	box-sizing: border-box;
}
@media screen and (min-width: 200px) {
 .columns {display: table;}
 .col-12, .col-25 {width: 50%;}
 .col-33, .col-37, .col-50, .col-62, .col-66, .col-75, .col-87, .col-100 {width: 100%;}
}
@media screen and (min-width: 680px) {
 .col-12, .col-25 {width: 25%;}
 .col-33 {width: calc(100%/3);}
 .col-37 {width: 37.5%;}
 .col-50 {width: 50%;}
 .col-62 {width: 62.5%;}
 .col-66 {width: calc(2/3*100%);}
 .col-75 {width: 75%;}
 .col-87 {width: 87.5%;}
 .col-100 {width: 100%;}
}
@media screen and (min-width: 1200px) {.col-12 {width:12.5%;}}


/* Clearfix:
** ------------------------------ */
.clearfix::after {
 /*clearfix hack from W3Schools, via https://www.w3schools.com/css/css_float.asp -- add class to containing element*/
 content: "";
 clear: both;
 display: table;
}


/* Typography:
** ------------------------------ */
/* Copyright (c) Steve Matteson ("Ascender Fonts"). This Font Software is licensed under the Apache License v2.00. This license is available at: https://www.fontsquirrel.com/license/open-sans */
body {font-family: "Open Sans", "Segoe UI", Tahoma, sans-serif;}
p.column-name {
 color: black;
 text-align: center;
 font-weight: bold;
 box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
 
}


#column-names{
padding: 20px;
 color: black;
 font-weight: bold;
 box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}

/* label{
    color: black;
    font-weight: bold;
} */


.bg-red {background-color: #eb3b25;}
.bg-blue {background-color: #2f91ae;}
.bg-teal {background-color: #83c5b5;}

.bg-charcoal {background-color: #808285;}
.fg-charcoal {color: #808285;}

#pro {
  border-radius: 50%;
}

table {
 
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  color: black;
}

/* tr:nth-child(even) {
  background-color: #dddddd;
} */

.wrapper{
  max-width: 1100px;
  width: 100%;
  margin: 30px auto 0;
  padding: 10px;
}

.wrapper .form_container{
  background: #fff;
  padding: 30px;
  box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.15);
  border-radius: 3px;
  border-style: groove;
}

.eight h1 {
  text-align:center;
 
  text-transform:uppercase;
  font-size:26px; letter-spacing:1px;
  
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  grid-template-rows: 16px 0;
  grid-gap: 22px;
}

.eight h1:after,.eight h1:before {
  content: " ";
  display: block;
  border-bottom: 2px solid #ccc;
  background-color:#f8f8f8;
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
 margin-left: 30px;
 display: none;
 position: absolute;
 background-color: #f9f9f9;
 box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
 min-width: 100px;

 z-index: 1;

}

.dropdown-content a {
 color: black;
 padding: 10px 5px;
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
    <nav class="nav_head">

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
                          <!-- <a href="profile" class="dropdown-item" id="dropbtn">
                              <i class="fa fa-eye" style="font-size:20px;color:blue"></i>
                              View Profile
                          </a>  -->

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
<br>
    <div class="eight">
  <h1><b>User Profile</b></h1>
</div>
@foreach($data as $data)
        <div class="columns">

        <div class="col-33 "><p  class="column-name ">
        <img src="images/usericon.png" alt="Avatar" id="pro" style="width:200px">
        <br>
        <!-- {{ Auth::user()->name }} -->
        {{$data->name}}
        <br>
        <br>
    </p></div>

        <div class="col-66">

                <section id="column-names"> 
                    <table>
  <tr>
 
    <h5 id="add">Information:</h5>
  </tr>
  <tr>
    <td>Address:</td>
    <!-- <td>{{ Auth::user()->address }}</td> -->
    <td>{{$data->address}}</td>
  </tr>
  <tr>
    <td>Contact Number:</td>
    <!-- <td>{{ Auth::user()->contact }}</td> -->
    <td>{{$data->contact}}</td>
  </tr>
  <tr>
    <td>Email Address:</td>
    <!-- <td>{{ Auth::user()->email }}</td> -->
    <td>{{$data->email}}</td>
  </tr>
  <tr>
    <td>Industry:</td>
    <!-- <td>{{ Auth::user()->job1 }} / {{ Auth::user()->job2 }}</td> -->
    <td>{{$data->job1}} / {{$data->job2}}</td>
  </tr>


</table>
@endforeach
<br>
<section id="view_details">
<a href="javascript:void(0)" data-toggle="modal" data-target="#viewuserdetails"> View/Edit Details &raquo;</a>

</section>
@include('modal.ViewUserDetails')
                
                

<style>
#view_details{
      text-align-last: right;
    }
</style>
                </section>

        </div>
        </div>
        


        <div class="wrapper">
 <div class="form_containers">
   <div class="main-panel">
        <div class="content-wrapper">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="form_container">
                        <div class="card-body">
                                <table id="datatablesSimple" class="TableData">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Job Title</th>
                                            <th>Company Name</th>
                                            <th>Work Location</th>
                                            <th>Job Title</th>
                                            <th>UserName</th>
                                        </tr>
                                    </thead>
                                     <tfoot>
                                        <tr>
                                        <th>ID</th>
                                            <th>Job Title</th>
                                            <th>Company Name</th>
                                            <th>Work Location</th>
                                            <th>Job Title</th>
                                            <th>UserName</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Programmer</td>
                                            <td>{{ Auth::user()->name }}.pdf</td>
                                            <td>{{ Auth::user()->name }}</td>
                                        </tr>
                                    </tbody>

                                </table>
                                </div>
                          </div>
                      </div>  
                      <!-- end table  -->

 </div>
</div>


            </div>
   
<style>
    #add{
        color:black;
    }
</style> 






</body>

<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

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

<script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  <!-- gride line table-->
        <script src="js/datatables-simple-demo.js"></script>
</html>
