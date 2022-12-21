<script src="js/mod.js"></script>
<style>

.center {
  height:100%;
  display:flex;
  align-items:center;
  justify-content:center;

}
.form-input {
  width:350px;
  padding:20px;
  background:#fff;
  box-shadow: -3px -3px 7px rgba(94, 104, 121, 0.377),
              3px 3px 7px rgba(94, 104, 121, 0.377);
}

.form-input img {
  width:100%;
  display:none;
  margin-bottom:30px;
}
.form-input input {
  display:none;
}

.form-input label {
  display:block;
  width:45%;
  height:45px;
  margin-left: 25%;
  line-height:50px;
  text-align:center;
  background:#1172c2;
  color:#fff;
  font-size:15px;
  font-family:"Open Sans",sans-serif;
  text-transform:Uppercase;
  font-weight:600;
  border-radius:5px;
  cursor:pointer;
}







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
<div class="modal fade" id="company_edit{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form action="{{ route ('edit_company' , $data->id) }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="modal-body">

    
       

        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Company Name:</b></label>
                <input type="text" class="form-control" name="CompanyName" id="CompanyName" placeholder="" value="{{$data->CompanyName}}" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Location:</b></label>
                <input type="text" class="form-control" name="Location" id="Location" placeholder="" value="{{$data->Location}}" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Website:</b></label>
                <input type="text" class="form-control" name="Website" id="Website" placeholder="" value="{{$data->Website}}" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>About:</b></label>
                <textarea class="form-control" name="About" id="About" cols="10" rows="5">{{$data->About}}</textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label id="headlabel" for="inputEmail4"><b>Contact:</b></label>
                <input type="text" class="form-control" name="Contact" id="Contact" placeholder="" value="{{$data->Contact}}" required>
            </div>
            <div class="form-group col-md-6">
                <label id="headlabel" for="inputEmail4"><b>Industry:</b></label>
                <select id="Industry" name="Industry" class="form-control" required>
                        @if($data->Industry == 'Accounting & Finance')
                            <option value="Accounting & Finance" selected>Accounting & Finance</option>
							<option value="BPO">BPO</option>
							<option value="Consumer Products">Consumer Products</option>
							<option value="Financial Services">Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources">Human Resources</option>
							<option value="Insurance">Insurance</option>
							<option value="Manufacturing">Manufacturing</option>
							<option value="Tourism">Tourism</option>
							<option value="Transportation">Transportation</option>
							<option value="Advertising">Advertising</option>
							<option value="Call Center">Call Center</option>
							<option value="Engineering">Engineering</option>
							<option value="Food & Beverages">Food & Beverages</option>
							<option value="Healthcare">Healthcare</option>
							<option value="Information Technology">Information Technology</option>
							<option value="Legal">Legal</option>
							<option value="Non-Profit Organisation">Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                           
                        @elseif($data->Industry == 'BPO')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" selected>BPO</option>
							<option value="Consumer Products">Consumer Products</option>
							<option value="Financial Services">Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources">Human Resources</option>
							<option value="Insurance">Insurance</option>
							<option value="Manufacturing">Manufacturing</option>
							<option value="Tourism">Tourism</option>
							<option value="Transportation">Transportation</option>
							<option value="Advertising">Advertising</option>
							<option value="Call Center">Call Center</option>
							<option value="Engineering">Engineering</option>
							<option value="Food & Beverages">Food & Beverages</option>
							<option value="Healthcare">Healthcare</option>
							<option value="Information Technology">Information Technology</option>
							<option value="Legal">Legal</option>
							<option value="Non-Profit Organisation">Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                           
                        @elseif($data->Industry == 'Consumer Products')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" selected>Consumer Products</option>
							<option value="Financial Services">Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources">Human Resources</option>
							<option value="Insurance">Insurance</option>
							<option value="Manufacturing">Manufacturing</option>
							<option value="Tourism">Tourism</option>
							<option value="Transportation">Transportation</option>
							<option value="Advertising">Advertising</option>
							<option value="Call Center">Call Center</option>
							<option value="Engineering">Engineering</option>
							<option value="Food & Beverages">Food & Beverages</option>
							<option value="Healthcare">Healthcare</option>
							<option value="Information Technology">Information Technology</option>
							<option value="Legal">Legal</option>
							<option value="Non-Profit Organisation">Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                           
                        @elseif($data->Industry == 'Financial Services')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" selected>Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources">Human Resources</option>
							<option value="Insurance">Insurance</option>
							<option value="Manufacturing">Manufacturing</option>
							<option value="Tourism">Tourism</option>
							<option value="Transportation">Transportation</option>
							<option value="Advertising">Advertising</option>
							<option value="Call Center">Call Center</option>
							<option value="Engineering">Engineering</option>
							<option value="Food & Beverages">Food & Beverages</option>
							<option value="Healthcare">Healthcare</option>
							<option value="Information Technology">Information Technology</option>
							<option value="Legal">Legal</option>
							<option value="Non-Profit Organisation">Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                           
                        @elseif($data->Industry == 'Government')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government" selected>Government</option>
							<option value="Human Resources">Human Resources</option>
							<option value="Insurance">Insurance</option>
							<option value="Manufacturing">Manufacturing</option>
							<option value="Tourism">Tourism</option>
							<option value="Transportation">Transportation</option>
							<option value="Advertising">Advertising</option>
							<option value="Call Center">Call Center</option>
							<option value="Engineering">Engineering</option>
							<option value="Food & Beverages">Food & Beverages</option>
							<option value="Healthcare">Healthcare</option>
							<option value="Information Technology">Information Technology</option>
							<option value="Legal">Legal</option>
							<option value="Non-Profit Organisation">Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                           
                        @elseif($data->Industry == 'Human Resources')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources" selected>Human Resources</option>
							<option value="Insurance">Insurance</option>
							<option value="Manufacturing">Manufacturing</option>
							<option value="Tourism">Tourism</option>
							<option value="Transportation">Transportation</option>
							<option value="Advertising">Advertising</option>
							<option value="Call Center">Call Center</option>
							<option value="Engineering">Engineering</option>
							<option value="Food & Beverages">Food & Beverages</option>
							<option value="Healthcare">Healthcare</option>
							<option value="Information Technology">Information Technology</option>
							<option value="Legal">Legal</option>
							<option value="Non-Profit Organisation">Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                           
                        @elseif($data->Industry == 'Insurance')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources" >Human Resources</option>
							<option value="Insurance" selected>Insurance</option>
							<option value="Manufacturing">Manufacturing</option>
							<option value="Tourism">Tourism</option>
							<option value="Transportation">Transportation</option>
							<option value="Advertising">Advertising</option>
							<option value="Call Center">Call Center</option>
							<option value="Engineering">Engineering</option>
							<option value="Food & Beverages">Food & Beverages</option>
							<option value="Healthcare">Healthcare</option>
							<option value="Information Technology">Information Technology</option>
							<option value="Legal">Legal</option>
							<option value="Non-Profit Organisation">Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                           
                        @elseif($data->Industry == 'Manufacturing')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources" >Human Resources</option>
							<option value="Insurance" >Insurance</option>
							<option value="Manufacturing" selected>Manufacturing</option>
							<option value="Tourism">Tourism</option>
							<option value="Transportation">Transportation</option>
							<option value="Advertising">Advertising</option>
							<option value="Call Center">Call Center</option>
							<option value="Engineering">Engineering</option>
							<option value="Food & Beverages">Food & Beverages</option>
							<option value="Healthcare">Healthcare</option>
							<option value="Information Technology">Information Technology</option>
							<option value="Legal">Legal</option>
							<option value="Non-Profit Organisation">Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                           
                        @elseif($data->Industry == 'Tourism')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources" >Human Resources</option>
							<option value="Insurance" >Insurance</option>
							<option value="Manufacturing" >Manufacturing</option>
							<option value="Tourism" selected>Tourism</option>
							<option value="Transportation">Transportation</option>
							<option value="Advertising">Advertising</option>
							<option value="Call Center">Call Center</option>
							<option value="Engineering">Engineering</option>
							<option value="Food & Beverages">Food & Beverages</option>
							<option value="Healthcare">Healthcare</option>
							<option value="Information Technology">Information Technology</option>
							<option value="Legal">Legal</option>
							<option value="Non-Profit Organisation">Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                           
                        @elseif($data->Industry == 'Transportation')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources" >Human Resources</option>
							<option value="Insurance" >Insurance</option>
							<option value="Manufacturing" >Manufacturing</option>
							<option value="Tourism" >Tourism</option>
							<option value="Transportation" selected>Transportation</option>
							<option value="Advertising">Advertising</option>
							<option value="Call Center">Call Center</option>
							<option value="Engineering">Engineering</option>
							<option value="Food & Beverages">Food & Beverages</option>
							<option value="Healthcare">Healthcare</option>
							<option value="Information Technology">Information Technology</option>
							<option value="Legal">Legal</option>
							<option value="Non-Profit Organisation">Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                           
                        @elseif($data->Industry == 'Advertising')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources" >Human Resources</option>
							<option value="Insurance" >Insurance</option>
							<option value="Manufacturing" >Manufacturing</option>
							<option value="Tourism" >Tourism</option>
							<option value="Transportation" >Transportation</option>
							<option value="Advertising" selected>Advertising</option>
							<option value="Call Center">Call Center</option>
							<option value="Engineering">Engineering</option>
							<option value="Food & Beverages">Food & Beverages</option>
							<option value="Healthcare">Healthcare</option>
							<option value="Information Technology">Information Technology</option>
							<option value="Legal">Legal</option>
							<option value="Non-Profit Organisation">Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                           
                        @elseif($data->Industry == 'Call Center')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources" >Human Resources</option>
							<option value="Insurance" >Insurance</option>
							<option value="Manufacturing" >Manufacturing</option>
							<option value="Tourism" >Tourism</option>
							<option value="Transportation" >Transportation</option>
							<option value="Advertising" >Advertising</option>
							<option value="Call Center" selected>Call Center</option>
							<option value="Engineering">Engineering</option>
							<option value="Food & Beverages">Food & Beverages</option>
							<option value="Healthcare">Healthcare</option>
							<option value="Information Technology">Information Technology</option>
							<option value="Legal">Legal</option>
							<option value="Non-Profit Organisation">Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                           
                        @elseif($data->Industry == 'Engineering')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources" >Human Resources</option>
							<option value="Insurance" >Insurance</option>
							<option value="Manufacturing" >Manufacturing</option>
							<option value="Tourism" >Tourism</option>
							<option value="Transportation" >Transportation</option>
							<option value="Advertising" >Advertising</option>
							<option value="Call Center" >Call Center</option>
							<option value="Engineering" selected>Engineering</option>
							<option value="Food & Beverages">Food & Beverages</option>
							<option value="Healthcare">Healthcare</option>
							<option value="Information Technology">Information Technology</option>
							<option value="Legal">Legal</option>
							<option value="Non-Profit Organisation">Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                           
                        @elseif($data->Industry == 'Food & Beverages')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources" >Human Resources</option>
							<option value="Insurance" >Insurance</option>
							<option value="Manufacturing" >Manufacturing</option>
							<option value="Tourism" >Tourism</option>
							<option value="Transportation" >Transportation</option>
							<option value="Advertising" >Advertising</option>
							<option value="Call Center" >Call Center</option>
							<option value="Engineering" >Engineering</option>
							<option value="Food & Beverages" selected>Food & Beverages</option>
							<option value="Healthcare">Healthcare</option>
							<option value="Information Technology">Information Technology</option>
							<option value="Legal">Legal</option>
							<option value="Non-Profit Organisation">Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                           
                        @elseif($data->Industry == 'Healthcare')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources" >Human Resources</option>
							<option value="Insurance" >Insurance</option>
							<option value="Manufacturing" >Manufacturing</option>
							<option value="Tourism" >Tourism</option>
							<option value="Transportation" >Transportation</option>
							<option value="Advertising" >Advertising</option>
							<option value="Call Center" >Call Center</option>
							<option value="Engineering" >Engineering</option>
							<option value="Food & Beverages" >Food & Beverages</option>
							<option value="Healthcare" selected>Healthcare</option>
							<option value="Information Technology">Information Technology</option>
							<option value="Legal">Legal</option>
							<option value="Non-Profit Organisation">Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                           
                        @elseif($data->Industry == 'Information Technology')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources" >Human Resources</option>
							<option value="Insurance" >Insurance</option>
							<option value="Manufacturing" >Manufacturing</option>
							<option value="Tourism" >Tourism</option>
							<option value="Transportation" >Transportation</option>
							<option value="Advertising" >Advertising</option>
							<option value="Call Center" >Call Center</option>
							<option value="Engineering" >Engineering</option>
							<option value="Food & Beverages" >Food & Beverages</option>
							<option value="Healthcare" >Healthcare</option>
							<option value="Information Technology" selected>Information Technology</option>
							<option value="Legal">Legal</option>
							<option value="Non-Profit Organisation">Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                           
                        @elseif($data->Industry == 'Legal')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources" >Human Resources</option>
							<option value="Insurance" >Insurance</option>
							<option value="Manufacturing" >Manufacturing</option>
							<option value="Tourism" >Tourism</option>
							<option value="Transportation" >Transportation</option>
							<option value="Advertising" >Advertising</option>
							<option value="Call Center" >Call Center</option>
							<option value="Engineering" >Engineering</option>
							<option value="Food & Beverages" >Food & Beverages</option>
							<option value="Healthcare" >Healthcare</option>
							<option value="Information Technology" >Information Technology</option>
							<option value="Legal" selected>Legal</option>
							<option value="Non-Profit Organisation">Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                           
                        @elseif($data->Industry == 'Non-Profit Organisation')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources" >Human Resources</option>
							<option value="Insurance" >Insurance</option>
							<option value="Manufacturing" >Manufacturing</option>
							<option value="Tourism" >Tourism</option>
							<option value="Transportation" >Transportation</option>
							<option value="Advertising" >Advertising</option>
							<option value="Call Center" >Call Center</option>
							<option value="Engineering" >Engineering</option>
							<option value="Food & Beverages" >Food & Beverages</option>
							<option value="Healthcare" >Healthcare</option>
							<option value="Information Technology" >Information Technology</option>
							<option value="Legal" >Legal</option>
							<option value="Non-Profit Organisation" selected>Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                           
                        @elseif($data->Industry == 'Retail')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources" >Human Resources</option>
							<option value="Insurance" >Insurance</option>
							<option value="Manufacturing" >Manufacturing</option>
							<option value="Tourism" >Tourism</option>
							<option value="Transportation" >Transportation</option>
							<option value="Advertising" >Advertising</option>
							<option value="Call Center" >Call Center</option>
							<option value="Engineering" >Engineering</option>
							<option value="Food & Beverages" >Food & Beverages</option>
							<option value="Healthcare" >Healthcare</option>
							<option value="Information Technology" >Information Technology</option>
							<option value="Legal" >Legal</option>
							<option value="Non-Profit Organisation" >Non-Profit Organisation</option>
							<option value="Retail" selected>Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                           
                        @elseif($data->Industry == 'Telecommunications')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources" >Human Resources</option>
							<option value="Insurance" >Insurance</option>
							<option value="Manufacturing" >Manufacturing</option>
							<option value="Tourism" >Tourism</option>
							<option value="Transportation" >Transportation</option>
							<option value="Advertising" >Advertising</option>
							<option value="Call Center" >Call Center</option>
							<option value="Engineering" >Engineering</option>
							<option value="Food & Beverages" >Food & Beverages</option>
							<option value="Healthcare" >Healthcare</option>
							<option value="Information Technology" >Information Technology</option>
							<option value="Legal" >Legal</option>
							<option value="Non-Profit Organisation" >Non-Profit Organisation</option>
							<option value="Retail" >Retail</option>
							<option value="Telecommunications" selected>Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
                        @else
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources" >Human Resources</option>
							<option value="Insurance" >Insurance</option>
							<option value="Manufacturing" >Manufacturing</option>
							<option value="Tourism" >Tourism</option>
							<option value="Transportation" >Transportation</option>
							<option value="Advertising" >Advertising</option>
							<option value="Call Center" >Call Center</option>
							<option value="Engineering" >Engineering</option>
							<option value="Food & Beverages" >Food & Beverages</option>
							<option value="Healthcare" >Healthcare</option>
							<option value="Information Technology" >Information Technology</option>
							<option value="Legal" >Legal</option>
							<option value="Non-Profit Organisation" >Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications" >Telecommunications</option>
							<option value="Training & Education" selected>Training & Education</option>
                        @endif
                        </select>
                <!-- <input type="text" class="form-control" name="Industry" id="Industry" placeholder="" value="{{$data->Industry}}" required> -->
            </div>

             <!-- <div class="form_item">
            <div class="form">
            <div class="grid">
                <div class="form-element">
                  <input type="file" id="file-1" accept="image/*" name="Picture" id="Picture" required>
                  <label for="file-1" id="file-1-preview">
                  <img src="https://bit.ly/3ubuq5o" alt="" >
                  <div>
                    <span>+</span>
             </div>
                  </label>
              </div>
            </div> 
          </div>
        </div> -->
			
					<div class="center">
			<div class="form-input">
		<div class="preview">
		<img  id="file-ip-1-preview">
		</div>
		<label for="file-ip-1">Change Logo</label>
        <input type="file" name="logo" id="file-ip-1" accept="image/*" onchange="showPreview(event);">

			</div>
			</div> 

        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
 <script>

function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-1-preview");
    preview.src = src;
    preview.style.display = "block";
  }
}
	//  function previewBeforeUpload(id){
    // document.querySelector("#"+id).addEventListener("change",function(e){
    //   if(e.target.files.length == 0){
    //     return;
    //   }
    //   let file = e.target.files[0];
    //   let url = URL.createObjectURL(file);
    //   document.querySelector("#"+id+"-preview div").innerText = file.name;
    //   document.querySelector("#"+id+"-preview img").src = url;
    // });
    // }

    // previewBeforeUpload("file-1");
    // previewBeforeUpload("file-2");
    // previewBeforeUpload("file-3");
 </script>
