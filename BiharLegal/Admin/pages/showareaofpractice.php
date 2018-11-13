    <div class="am-pagebody">
        <div class="row row-lg mg-t-20">

        <div class="col-xl-12 mg-t-25 mg-xl-t-0 w3-card">
          
        <form action="pages/insertbox/insertareaofpractice.php" method="POST" class="w3-margin w3-padding">  
          
            <div class="card pd-20 pd-lg-40 form-layout form-layout-5 w3-card-4">
              <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10" style="color:brown;">Area of Practice</h6>
              
              
               <div class="row row-xs mg-t-20">
                <label class="col-sm-4 form-control-label"><span class="tx-danger ">*</span>Area Name here:</label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea rows="2" class="form-control w3-card-4"  placeholder="Area Name" name="name" id="name" required="" style="color:brown;font-size:20px;font-weight:bold;" maxlength="30"></textarea>
                </div>
              </div><!-- row -->
              
              
              <div class="row row-xs mg-t-20">
                <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Area Link:</label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="url" class="form-control fc-datepicker w3-input w3-card-4" name="url" id="url" style="color:brown;font-size:20px;font-weight:bold;" placeholder="Additional Url: http://url.com">
                </div>
              </div>
             
              <div class="row row-xs mg-t-30">
                <div class="col-sm-8 mg-l-auto">
                  <div class="form-layout-footer">
                      <button type="submit" id="submit" value="Add Notice" class="btn btn-success w3-card-4 w3-input">Create </button>
                   </div><!-- form-layout-footer -->
                </div><!-- col-8 -->
              </div>
         </div><!-- card -->
        </form> 
         
         </div><!-- col-6 -->


</div></div>