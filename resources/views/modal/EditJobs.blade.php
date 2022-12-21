<!-- Modal -->
<div class="modal fade" id="editjobs{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form action="{{ route ('edit_jobs' , $data->id) }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="modal-body">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Job Title:</b></label>
                <input type="text" class="form-control" name="JobTitle" id="JobTitle" placeholder="" value="{{$data->JobTitle}}" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Company Name:</b></label>
                <input type="text" class="form-control" name="CompanyName" id="CompanyName" placeholder="" value="{{$data->CompanyName}}" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Company Website:</b></label>
                <input type="text" class="form-control" name="CompanyWebsite" id="CompanyWebsite" placeholder="" value="{{$data->CompanyWebsite}}" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label id="headlabel" for="inputEmail4"><b>Company Contact:</b></label>
                <input type="text" class="form-control" name="CompanyContact" id="CompanyContact" placeholder="" value="{{$data->CompanyContact}}" required>
            </div>
            <div class="form-group col-md-6">
                <label id="headlabel" for="inputEmail4"><b>Number of Vaccancies:</b></label>
                <input type="number" class="form-control" name="NumVacancies" id="NumVacancies" placeholder="" value="{{$data->NumVacancies}}" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Working Location:</b></label>
                <input type="text" class="form-control" name="WorkingLocation" id="WorkingLocation" placeholder="" value="{{$data->WorkingLocation}}" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
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

            </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label id="headlabel" for="inputEmail4"><b>Job Description:</b></label>
                    <textarea  class="form-control" name="JobDescription" id="JobDescription" cols="30" rows="10">{{$data->JobDescription}}</textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label id="headlabel" for="inputEmail4"><b>Requirements:</b></label>
                    <textarea  class="form-control" name="Requirements" id="Requirements" cols="30" rows="10">{{$data->Requirements}}</textarea>
                </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
                <label id="headlabel" for="inputEmail4"><b>Status:</b></label>
               <select name="Status" id="Status" class="form-control">
                @if($data->Status == "New")
                    <option value="New" selected>New</option>
                    <option value="Unavailable">Unavailable</option>
                @else
                    <option value="New">New</option>
                    <option value="Unavailable" selected>Unavailable</option>
                @endif
               </select>
            </div>
        </div>
 
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="myFunction()">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>

