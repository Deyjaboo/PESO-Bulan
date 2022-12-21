
<style>
  .close{
    color: red;
  }

  .modalheaders{
 
 background-color: #337AB7;

 color:#FFF;

 height: 10px;

 border-bottom:2px dashed #337AB7;

}
#asd,#exampleModalLongTitle,#labelresume,#resume{
            color:black;
           
          }
label{
  font-weight: 600;
  margin-left: 20px;
}

p,input{
  margin-left: 20px;
  margin-right: 20px;
  text-align: justify;
}
#imga{
  margin-left: 20px;

}
.modal-title{
  margin-top: 10px;
  margin-left: 20px;
}

@media screen and (max-width: 767px) {
  #imga{
  padding-right: 50px;
}
}
.btn0{
  background-color: RoyalBlue;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 0.5rem;
}
.btn0:hover {      background-color: #008CBA;      color: white; }
.btn1:hover {      background-color:  #ff4d4d;      color: white; }
.btn1{
  background-color: #ff3333;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 0.5rem;
}
</style>


<form name="form" action="apply_job" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}
<div class="modal" id="applicantModal1{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
            <h4 class="modal-title" id="exampleModalLongTitle">{{$data->CompanyName}}</h4>
            <hr/>
            

            <div class="row">
          <div class="column">
           
          <img  src="images/{{$data->logo}}" id="imga"  alt="" width="100%" height="100%">
     
          </div>

          <div class="column" >

          <b><label for="" id="asd">Job Title:</label></b>
            <p id="asd" name="JobTitle">{{$data->JobTitle}}</p>

            <b><label for="" id="asd">Working Location:</label></b>
            <p id="asd">{{$data->WorkingLocation}}</p>

            <label for="" id="asd">Company Contact:</label>
            <p id="asd">{{$data->CompanyContact}}</p>

            <label for="" id="asd">Number Of Vacancies:</label>
            <p id="asd">{{$data->NumVacancies}}</p>
          </div>
        </div>

  <!-- <button type="button"  class="close"  data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  -->
      
            <!-- <p id="asd">{{$data->id}}</p> -->
            <!-- <label for="" id="asd">Company Name:</label>
            <p id="asd">{{$data->CompanyName}}</p> -->

          

           <hr>
            <input type="hidden" value="{{$data->id}}" id="job_id" name="job_id">
            <input type="hidden" value="{{$data->JobTitle}}" id="JobTitle" name="JobTitle">

            <label for="" id="asd">Job Description:</label>
            <!-- <p id="asd">{{$data->JobDescription}}</p> -->
            <p id="asd">
                 <?php
                   echo nl2br($data->JobDescription);
                  ?>
            </p>
            <label for="" id="asd">Requirements:</label>
            <!-- <p id="asd">{{$data->Requirements}}</p> -->
            <p id="asd">
                 <?php
                   echo nl2br($data->Requirements);
                  ?>
            </p>
            <label for="" id="asd">Date Posted:</label>
            <p id="asd">{{$data->DatePosted}}</p>
            
            @if (Route::has('login'))
            @auth
              <label for="" id="labelresume" >Insert Resume:</label>
              <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required>
            @endauth
            @endif
            
           
    <br>
    <style>
    #sel{
      text-align-last: right;
    }
    </style>
    <section id="sel">
          <button type="button" class="btn1" data-dismiss="modal">Close</button>
          <button type="submit" class="btn0">Apply Now</button> 
    </section>
        <!-- <div class="modal-footer">
          <button type="button" class="btn1" data-dismiss="modal">Close</button>
          <button type="submit" class="btn0">Apply Now</button> 
        </div> -->
       
    </div>
  </div>
</div>
</form> 
 