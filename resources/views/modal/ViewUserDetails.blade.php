<!-- Modal -->
<div class="modal fade" id="viewuserdetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">User Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form action="{{ route ('user_update' , Auth::user()->id) }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="modal-body">

	  <div class="form-row">
            <div class="form-group col-md-12">

			<!-- <img src="images/{{ Auth::user()->pic }}" alt="Avatar" id="photo" >  -->
			<center>
			<div class="avatar-upload">
				<div class="avatar-edit">
					<input type='file' name="imageUpload" id="imageUpload" accept=".png, .jpg, .jpeg" />
					<label for="imageUpload"></label>
				</div>
				<div class="avatar-preview">
					<div id="imagePreview" style="background-image: url('images/{{ Auth::user()->pic }}');">
					
					</div>
				</div>
			</div>
			</center>


     </div>
      </div>

      <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Name:</b></label>
                <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{ Auth::user()->name }}" required>
            </div>
      </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label id="headlabel" for="inputEmail4"><b>Address:</b></label>
                <input type="text" class="form-control" name="address" id="address" placeholder="" value="{{ Auth::user()->address }}" required>
            </div>
        </div>

        <div class="form-row">
        <div class="form-group col-md-6">
                <label id="headlabel" for="inputEmail4"><b>Contact Number:</b></label>
                <input type="text" class="form-control" name="cp_num" id="cp_num" placeholder="" value="{{ Auth::user()->contact }}" required>
            </div>
            <div class="form-group col-md-6">
                <label id="headlabel" for="inputEmail4"><b>Sex:</b></label>
                <select class="form-control" name="sex" id="sex">
                  @if( Auth::user()->sex == "Male")
                  <option value="{{ Auth::user()->sex }}" selected>{{ Auth::user()->sex }}</option>
                  <option value="Female">Female</option>
                  @else
                  <option value="Male">Male</option>
                  <option value="Female" selected>Female</option>
                  @endif
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
        <b><label>Job Specialization:<span class="text-danger"></span></label></b>
            <select id="Job1" name="Job1" class="form-control" required>
                        @if(Auth::user()->job1 == 'Accounting & Finance')
                            <option value="Accounting & Finance" selected>Accounting & Finance</option>
							<option value="BPO">BPO</option>
							<option value="Consumer Products">Consumer Products</option>
							<option value="Financial Services">Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants">Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job1 == 'BPO')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" selected>BPO</option>
							<option value="Consumer Products">Consumer Products</option>
							<option value="Financial Services">Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants">Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job1 == 'Consumer Products')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" selected>Consumer Products</option>
							<option value="Financial Services">Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants">Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job1 == 'Financial Services')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" selected>Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants">Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job1 == 'Government')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government" selected>Government</option>
							<option value="Hotel & Restaurants">Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job1 == 'Hotel & Restaurants')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" selected>Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job1 == 'Insurance')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job1 == 'Manufacturing')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job1 == 'Tourism')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job1 == 'Transportation')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job1 == 'Advertising')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job1 == 'Call Center')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job1 == 'Engineering')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job1 == 'Food & Beverages')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job1 == 'Healthcare')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job1 == 'Information Technology')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job1 == 'Legal')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job1 == 'Non-Profit Organisation')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job1 == 'Retail')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job1 == 'Telecommunications')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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


		<div class="form-group col-md-6">
        <b><label>Job Specialization:<span class="text-danger"></span></label></b>
                        <select id="Job2" name="Job2" class="form-control" required>
                        @if(Auth::user()->job2 == 'Accounting & Finance')
                            <option value="Accounting & Finance" selected>Accounting & Finance</option>
							<option value="BPO">BPO</option>
							<option value="Consumer Products">Consumer Products</option>
							<option value="Financial Services">Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants">Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'BPO')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" selected>BPO</option>
							<option value="Consumer Products">Consumer Products</option>
							<option value="Financial Services">Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants">Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'Consumer Products')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" selected>Consumer Products</option>
							<option value="Financial Services">Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants">Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'Financial Services')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" selected>Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants">Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'Government')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government" selected>Government</option>
							<option value="Hotel & Restaurants">Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'Hotel & Restaurants')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" selected>Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'Insurance')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'Manufacturing')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'Tourism')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'Transportation')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'Advertising')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'Call Center')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'Engineering')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'Food & Beverages')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'Healthcare')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'Information Technology')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'Legal')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'Non-Profit Organisation')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'Retail')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'Telecommunications')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @elseif(Auth::user()->job2 == 'Training & Education')
                            <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

                        @else
                        <option value="Accounting & Finance" >Accounting & Finance</option>
							<option value="BPO" >BPO</option>
							<option value="Consumer Products" >Consumer Products</option>
							<option value="Financial Services" >Financial Services</option>
							<option value="Government">Government</option>
							<option value="Hotel & Restaurants" >Hotel & Restaurants</option>
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

        <div class="form-row">
            <div class="form-group col-md-6">
                <label id="headlabel" for="inputEmail4"><b>Email:</b></label>
                <input type="text" class="form-control" name="email" id="email" placeholder="" value="{{ Auth::user()->email }}" required>
            </div>
            <?php
            $string =  Auth::user()->pass_confirm;
            $password = substr($string, 3,-3);
            ?>
            <div class="form-group col-md-6">
                <label id="headlabel" for="inputEmail4"><b>Password:</b></label>
                <input type="password" class="form-control" name="password" id="password" placeholder="" value="{{$password}}" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            </div>
            <div class="form-group col-md-6">
              <label><input type="checkbox" onclick="myFunction()"> Show Password<span class="text-danger"></span></label>
            </div>
        </div>

            <section id="sel">
                <button type="submit" class="btn0">Save</button>
                <button type="button" class="btn1" data-dismiss="modal">Close</button>
             </section>

      </div>
    </form>
    </div>
  </div>
</div>
<style>
    #headlabel1{
        color: blue;
    }
    #headlabel2{
        color: red;
    }
    #sel{
      text-align-last: right;
    }
    .btn0{
  background-color: RoyalBlue;
  border: none;
  color: white;
  padding: 10px 25px;
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
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 0.5rem;
}

.avatar-upload {
  position: relative;
  max-width: 205px;
 
}
.avatar-upload .avatar-edit {
  position: absolute;
  right: 12px;
  z-index: 1;
  top: 10px;
}
.avatar-upload .avatar-edit input {
  display: none;
}
.avatar-upload .avatar-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #FFFFFF;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.avatar-upload .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.avatar-upload .avatar-edit input + label:after {
  content: "\f040";
  font-family: 'FontAwesome';
  color: #757575;
  position: absolute;
  top: 10px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-upload .avatar-preview {
  width: 192px;
  height: 192px;
  position: relative;
  border-radius: 100%;
  border: 6px solid #F8F8F8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}


</style>


