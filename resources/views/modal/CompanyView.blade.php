<style>
 label{
  font-weight: 600;
}

p{
  text-align: justify;
}
</style>

<div class="modal fade" id="applicantModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <img src="images/{{$data->logo}}" alt="" width="50px" height="50px">
        <span aria-hidden="true">&times;</span>
        <h5 class="modal-title" id="exampleModalLongTitle">{{$data->CompanyName}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <style>
          #asd,#exampleModalLongTitle{
            color:black;
          }

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

.btn1:hover {      background-color:  #ff4d4d;      color: white; }
        </style>
        
        <!-- <b><label for="" id="asd">Company Name:</label></b>
          <p id="asd">{{$data->CompanyName}}</p> -->
        <b><label for="" id="asd">Industry:</label></b>
          <p id="asd">{{$data->Industry}}</p>
        <b><label for="" id="asd">Company Location:</label></b>
          <p id="asd">{{$data->Location}}</p>
        <label for="" id="asd">About The Company:</label>
          <p id="asd">{{$data->About}}</p>
        <b><label for="" id="asd">Website:</label></b>
        <?php
        if (strpos($data->Website, '.com') !== false) {
        ?>
           <a id="asd" href="{{$data->Website}}">{{$data->Website}}</a>
        <?php
        }else{
        ?>
          <a id="asd" href="#">{{$data->Website}}</a>
        <?php
        }
        ?>
         
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn1" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
