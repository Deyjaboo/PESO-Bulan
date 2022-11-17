<style>
          #asd,#exampleModalLongTitle{
            color:black;
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

.form_item input[type="text"],
.form_item select{
  width: 100%;
  padding: 10px;
  font-size: 13px;
  border: 1px solid #dadce0;
  border-radius: 3px;
}

.form_item input[type="text"]:focus{
  border-color: #6271f0;
}

@media screen and (max-width: 600px) {
    .form_item {
    width: 100%;
  }
}

        </style>

<div class="modal fade" id="useredit{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLongTitle">Edit User Details</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      <div class="form_wrap fullname">

        <div class="form_item">
        <b><label>Name:<span class="text-danger"></span></label></b> 
            <input class="form-control" type="text" value="{{$data->name}}">
        </div>


        <div class="form_item">
        <b><label>Email:<span class="text-danger"></span></label></b> 
            <input class="form-control" type="text" value="{{$data->email}}">
        </div>

        </div>

        <div class="form_wrap fullname">

        <div class="form_item">
        <b><label>Mobile Number:<span class="text-danger"></span></label></b> 
            <input class="form-control" type="text" value="{{$data->contact}}">
        </div>


        <div class="form_item">
        <b><label>Sex:<span class="text-danger"></span></label></b> 
                        <select id="sex" name="sex" class="form-control" required>
                        @if($data->sex == 'Male')
                            <option value="Male" selected>Male</option>
                            <option value="Female">Female</option>
                        @else
                            <option value="Male">Male</option>
                            <option value="Female" selected>Female</option>
                        @endif
                        </select>
        </div>

        </div>


        <div class="form_wrap fullname">

        <div class="form_item">
        <b><label>Job1:<span class="text-danger"></span></label></b>
            <select id="Job1" name="Job1" class="form-control" required>
                        @if($data->job1 == 'Accounting & Finance')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'BPO')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Consumer Products')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Financial Services')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Government')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Human Resources')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Insurance')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Manufacturing')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Tourism')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Transportation')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Advertising')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Call Center')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Engineering')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Food & Beverages')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Healthcare')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Information Technology')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Legal')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Non-Profit Organisation')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Retail')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Telecommunications')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Training & Education')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
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
							<option value="Training & Education" >Training & Education</option>
                            <option value ="Vehicular/Pedestrian Accident" selected>Vehicular/Pedestrian Accident</option>
                        @endif
                        </select>

        </div>


        <div class="form_item">
        <b><label>Job2:<span class="text-danger"></span></label></b> 
                        <select id="Job2" name="Job2" class="form-control" required>
                        @if($data->job2 == 'Accounting & Finance')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'BPO')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Consumer Products')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Financial Services')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Government')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Human Resources')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Insurance')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Manufacturing')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Tourism')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Transportation')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Advertising')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Call Center')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Engineering')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Food & Beverages')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Healthcare')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Information Technology')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Legal')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Non-Profit Organisation')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Retail')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Telecommunications')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Training & Education')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
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
							<option value="Training & Education" >Training & Education</option>
                            <option value ="Vehicular/Pedestrian Accident" selected>Vehicular/Pedestrian Accident</option>
                        @endif
                        </select>
        </div>

        </div>
        








            <!-- <b><label>User Id:<span class="text-danger"></span></label></b> 
            <input class="form-control" type="text" value="{{$data->id}}"> -->

          
            
            <b><label>Job1:<span class="text-danger"></span></label></b>
            <select id="Job1" name="Job1" class="form-control" required>
                        @if($data->job1 == 'Accounting & Finance')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'BPO')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Consumer Products')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Financial Services')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Government')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Human Resources')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Insurance')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Manufacturing')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Tourism')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Transportation')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Advertising')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Call Center')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Engineering')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Food & Beverages')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Healthcare')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Information Technology')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Legal')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Non-Profit Organisation')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Retail')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Telecommunications')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job1 == 'Training & Education')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
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
							<option value="Training & Education" >Training & Education</option>
                            <option value ="Vehicular/Pedestrian Accident" selected>Vehicular/Pedestrian Accident</option>
                        @endif
                        </select>








                        <b><label>Job2:<span class="text-danger"></span></label></b> 
                        <select id="Job2" name="Job2" class="form-control" required>
                        @if($data->job2 == 'Accounting & Finance')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'BPO')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Consumer Products')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Financial Services')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Government')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Human Resources')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Insurance')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Manufacturing')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Tourism')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Transportation')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Advertising')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Call Center')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Engineering')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Food & Beverages')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Healthcare')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Information Technology')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Legal')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Non-Profit Organisation')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Retail')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Telecommunications')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->job2 == 'Training & Education')
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
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
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
							<option value="Training & Education" >Training & Education</option>
                            <option value ="Vehicular/Pedestrian Accident" selected>Vehicular/Pedestrian Accident</option>
                        @endif
                        </select>

                       
                        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
