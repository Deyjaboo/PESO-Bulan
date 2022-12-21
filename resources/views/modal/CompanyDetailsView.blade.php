<style>
.form .grid {
  display:flex;
  justify-content:space-around;
  flex-wrap:wrap;
  gap:20px;
}
.form .grid .form-element {
  width:200px;
  height:200px;
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

</style>

<!-- Modal -->
<div class="modal fade" id="ViewCompany{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Company Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
    

      <div class="form-row">
            <div class="form-group col-md-6">
                <div class="form_item">
                    <div class="form">
                        <div class="grid">
                            <div class="form-element">
                          <img src="images/{{$data->logo}}" alt=""  style="width:150%;">  
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Company Name:</b></label>
                <p>{{$data->CompanyName}}</p>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Location:</b></label>
                <p>{{$data->Location}}</p>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Website:</b></label>
                <p>{{$data->Website}}</p>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>About:</b></label>
                <p>{{$data->About}}</p>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label id="headlabel" for="inputEmail4"><b>Contact:</b></label>
                <p>{{$data->Contact}}</p>
            </div>
            <div class="form-group col-md-6">
                <label id="headlabel" for="inputEmail4"><b>Industry:</b></label>
                <p>{{$data->Industry}}</p>
                <!-- <input type="text" class="form-control" name="Industry" id="Industry" placeholder="" value="{{$data->Industry}}" required> -->
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <!-- <button type="submit" class="btn btn-primary">Save</button> -->
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

