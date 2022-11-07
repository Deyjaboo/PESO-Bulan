<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> PESO ADMIN</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/logo_peso.png"/>

</head>
<style>
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: sans-serif;
}

body{
  height: 100vh;
  background: #e1edf9;
}

.wrapper{
  max-width: 850px;
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

.wrapper .form_container .form_item{
  margin-bottom: 25px;
}

.form_wrap.fullname,
.form_wrap.select_box{
  display: flex;
}

.form_wrap.fullname .form_item,
.form_wrap.select_box .form_item{
  width: 50%;
}

.form_wrap.fullname .form_item:first-child,
.form_wrap.select_box .form_item:first-child{
  margin-right: 4%;
}

.wrapper .form_container .form_item label{
  display: block;
  margin-bottom: 5px;
}

.form_item input[type="text"],input[type="date"],
.form_item select{
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #dadce0;
  border-radius: 3px;
}

.form_item input[type="text"]:focus{
  border-color: #6271f0;
}

 #right {
        float: right;
        font-size: 18px;
      }


.form {
  margin:80px 0px 20px;
  padding:0px 50px;
}

.form .grid {
  margin-top:50px;
  display:flex;
  justify-content:space-around;
  flex-wrap:wrap;
  gap:20px;
}
.form .grid .form-element {
  width:250px;
  height:250px;
  box-shadow:0px 0px 20px 5px rgba(100,100,100,0.1);
}
.form .grid .form-element input {
  display:none;
}
.form .grid .form-element img {
  width:100%;
  height:100%;
  object-fit:cover;
}
.form .grid .form-element div {
  position:relative;
  height:40px;
  margin-top:-40px;
  background:rgba(0,0,0,0.5);
  text-align:center;
  line-height:40px;
  font-size:13px;
  color:#f5f5f5;
  font-weight:600;
}
.form .grid .form-element div span {
  font-size:40px;
}

textarea{
  width: 100%;
  height: 100px;

}
</style>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/peso-logo.png" class="mr-2" alt="logo"  style="width:60px;height:60px;"/>PESO-Bulan</a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/peso-logo.png" alt="logo" style="width:60px;height:60px;"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <!-- <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul> -->
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/usericon.png" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <!-- <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a> -->


                    <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a  class="dropdown-item" href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                         <i class="ti-power-off text-primary"></i>
                    <span>Logout</span>
                    </a>
                    </form>

            </div>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>

    <div class="container-fluid page-body-wrapper">

      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="icon-briefcase menu-icon"></i>
              <span class="menu-title">Jobs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <div  class="nav-item">
                <a class="nav-link" href="#">Lists Of Jobs</a>
                <a class="nav-link" href="jobs">Add Jobs</a>
                </div>
                <!-- <li class="nav-item"> <a class="nav-link" href="#">Lists Of Jobs</a></li>
                <li class="nav-item"> <a class="nav-link" href="jobs">Add Jobs</a></li> -->
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Manageduser">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Manage User</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="ManagedCompany">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
  <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
</svg>
            <i class="icon- menu-icon"></i>
              <span class="menu-title">Manage Company</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Chart">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Chart</span>
            </a>
          </li>

        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <h3 class="font-weight-bold">PESO-Bulan Add Jobs</h3>


        <div class="wrapper">

 <div class="form_container">
        <form name="form">


        <div class="form_wrap">
        <div class="form_item">
          <label>Job Title</label>
          <input type="text">
        </div>
      </div>


      

      <div class="form_wrap fullname">

        <div class="form_item">
        <label>Company Name</label>
            <select name="country">
          <option selected disabled></option>
          <option>Jollibee</option>
          <option>MangInasal</option>
          <option>LCC</option>
          <option>Mcdonald</option>
            </select>
        </div>


        <div class="form_item">
            <label>Number Of Vacancies</label>
            <input type="text">
        </div>

        </div>



           

          <div class="form_wrap fullname">

          <div class="form_item">
              <label>Working Location</Address></label>
              <input type="text">
          </div>


          <div class="form_item">
              <label>Industry</label>
              <input type="text">
          </div>

         </div>


          <!-- <div class="form_wrap fullname">
          <div class="form_item">
              <label>Website</Address></label>
              <input type="text">
          </div>
          <div class="form_item">
              <label>Industry</label>
              <input type="text">
          </div>
          </div> -->


          <div class="form_wrap">
            <div class="form_item">
            <label>Job Desciption</label>
            <textarea  width="200px" height="180px" id="IncidentDescription" name="IncidentDescription" required></textarea>
            </div>
          </div>

          <div class="form_wrap">
            <div class="form_item">
            <label>Requirements</label>
            <textarea  width="200px" height="180px" id="IncidentDescription" name="IncidentDescription" required></textarea>
            </div>
          </div>





           <div class="form_wrap fullname">

          <div class="form_item">
              <label>Posted on:</label>
              <input type="date">
          </div>

        <!-- <div class="form_item">
          <div class="form">
            <div class="grid">
              <div class="form-element">
            <input type="file" id="file-1" accept="image/*">
            <label for="file-1" id="file-1-preview">
              <img src="https://bit.ly/3ubuq5o" alt="">
              <div>
                <span>+</span>
              </div>
                </label>
              </div>

          </div>
          </div>
        </div> -->



</div>
 <button class="btn btn-primary"  id="right">Submit</button>
        </form>

        <br><br>
 </div>
</div>



            </div>
        </div>

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->



  <script>
function previewBeforeUpload(id){
document.querySelector("#"+id).addEventListener("change",function(e){
  if(e.target.files.length == 0){
    return;
  }
  let file = e.target.files[0];
  let url = URL.createObjectURL(file);
  document.querySelector("#"+id+"-preview div").innerText = file.name;
  document.querySelector("#"+id+"-preview img").src = url;
});
}

previewBeforeUpload("file-1");
previewBeforeUpload("file-2");
previewBeforeUpload("file-3");
</script>
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

