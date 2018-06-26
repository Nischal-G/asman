<div class="bg-contact3" style="background-image: url(<?=base_url('lib/images/form-modal/bg-01.jpg')?>);">
		<div class="container-contact3">		
			<div class="wrap-contact3" >
				<form class="contact3-form validate-form" method="POST">
					<span class="contact3-form-title">
						Become a Member
					</span>

					
					<div class="wrap-input3 validate-input" data-validate="Name is required">
						<input class="input3" type="text" name="name" placeholder="Full Name">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate="Address is required">
						<input class="input3" type="text" name="address" placeholder="Address">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="text" name="email" placeholder="Your Email">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "DOB is required">
						<input class="input3" type="text" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')" onfocusout="(this.type='text')">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-contact3-form-radio">
						<div class="contact3-form-radio">
							<input class="input-radio3" id="sex1" type="radio" name="sex" value="Male">
							<label class="label-radio3" for="sex1">
								Male &nbsp;&nbsp;&nbsp;
							</label>
						</div>

						<div class="contact3-form-radio">
							<input class="input-radio3" id="sex2" type="radio" name="sex" value="Female">
							<label class="label-radio3" for="sex2">
								Female &nbsp;&nbsp;&nbsp;
							</label>
						</div>

						<div class="contact3-form-radio">
							<input class="input-radio3" id="sex3" type="radio" name="sex" value="Other" checked="checked">
							<label class="label-radio3" for="sex3">
								Other 
							</label>
						</div>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Gradutation year is required">
						<input class="input3" type="year" name="batch" placeholder="Batch (i.e 2013)">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Occupation year is required">
						<input class="input3" type="text" name="occ" placeholder="Occupation">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Contact detail is required">
						<input class="input3" type="tel" name="contact" placeholder="Contact">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3">
						<input class="input3" type="text" name="org" placeholder="Work / Organization (Optional)">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-contact3-form-radio">
						<div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio1" type="radio" name="choice" value="say-hi" checked="checked">
							<label class="label-radio3" for="radio1">
								Unmarried / Single
							</label>
						</div>

						<div class="contact3-form-radio">
							<input class="input-radio3" id="radio2" type="radio" name="choice" value="get-quote">
							<label class="label-radio3" for="radio2">
								Married
							</label>
						</div>
					</div>

					<div class="wrap-input3 input3-select">
						<div>
							<input class="input3" type="text" name="spousename" placeholder="Spouse Name">
							<span class="focus-input3"></span>
						</div>
					</div>

					<div class="wrap-input3 input3-select">
						<div>
							<input class="input3" type="text" name="spouseocc" placeholder="Spouse Occupation">
							<span class="focus-input3"></span>
						</div>
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3">
						<textarea class="input3" name="message" placeholder="Any Message (Optional)"></textarea>
						<span class="focus-input3"></span>
					</div>

					<div class="container-contact3-form-btn" align="center">
						<button class="contact3-form-btn" name="memberSubmit">
							Submit
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>