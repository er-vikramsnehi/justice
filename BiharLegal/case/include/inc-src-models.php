


<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
 
 
 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
    
    
        <h5 class="modal-title" id="exampleModalLongTitle">Login Now<span style="float:right;"><i class="w3-blue" style="margin-top:0px;">Facebook</i></span></h5>
         
      </div>
      <div class="modal-body">
      
        
        
   Hello Every one
        
        ...
              </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>














 <div class="modal fade" id="myadmin"role="dialog">
    <div class="modal-dialog modal-md">
      
      
      <div class="modal-content">
        
        
        <div class="modal-header w3-card-2">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Admin Dashboard <span class="glyphicon glyphicon-dashboard" style="color:red;"></span></h4>
        </div>
        
  <form action="Admin/admin.php" method="post">        
<div class="modal-body">      
<div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control w3-card-4" id="email" name="email" placeholder="Admin Email">
</div>
<div class="form-group">
  <label for="pwd">Password:</label>
  <input type="password" class="form-control w3-card-4" id="password" name="password" placeholder="Admin Password">
</div>
 </div>
        <div class="modal-footer">
         <input type="submit" name="submit" value="Login" class="btn w3-blue w3-input">
        </div>
        
</form>        
      </div>
    </div>
  </div>








<!-- ========================================  Contact Us====================================== --> 					


						<section id="contact_sec" class="contact-sec sec-pad-top-sm w3-hide">
							<h2 class="mb-35">contact</h2>
							<div class="row">
								<div id="form_card_height" class="col-sm-7 mb-30">
									<div  class="mdl-card mdl-shadow--2dp" data-ng-controller="ContactController">
										<h4 class="mb-10 font-unsetcase">Hey <span  data-ng-bind="formData.inputName||'There'">There</span>, happy to hear from you.</h4>
										<form data-ng-submit="submit(contactform, $event)"  name="contactform"  method="post" class=" form-horizontal mb-30" role="form">
											<div class="form-group" data-ng-class="{ 'has-error': contactform.inputName.$invalid && submitted }">
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input autocomplete="off" data-ng-model="formData.inputName" class="mdl-textfield__input" type="text" id="inputName" name="inputName" required>
													<label class="mdl-textfield__label" for="inputName">name*</label>
												</div>	
											</div>
											<div class="form-group" data-ng-class="{ 'has-error': contactform.inputEmail.$invalid && submitted }">
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input autocomplete="off" data-ng-model="formData.inputEmail" class="mdl-textfield__input" type="email" id="inputEmail" name="inputEmail" required>
													<label class="mdl-textfield__label" for="inputEmail">email*</label>
												</div>
											</div>
											<div class="form-group" data-ng-class="{ 'has-error': contactform.inputMessage.$invalid && submitted }">
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<textarea 
													data-ng-model="formData.inputMessage" 
													class="mdl-textfield__input"  rows="3" id="inputMessage" name="inputMessage" required></textarea>
													<label class="mdl-textfield__label" for="inputMessage">message*</label>
												</div>	
											</div>
											<div class="form-group">
												<div class="align-center">
													<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  bg-blue font-white" data-ng-disabled="submitButtonDisabled">
														submit
													</button>
												</div>
											</div>
										</form>
										<p class="block result" data-ng-class="result">{{ resultMessage }}</p>
									</div>
								</div>
								<div class="col-sm-5 mb-30">
									<div class="mdl-card mdl-shadow--2dp pa-0">
										<div id="map_canvas"></div>
									</div>
								</div>
							</div>
						</section>
						<!--/Contact Sec-->
						
						
						
						