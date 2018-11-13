<?php include '../conn.php';?>

<?php 
$navbarservice = "SELECT * from `aboutcompany` where about_id=1";
$resultService = $conn->query($navbarservice);
if ($resultService->num_rows > 0) {
    while($row = $resultService->fetch_assoc()) {
 ?>  
 



<form action="pages/insertbox/insertcompanyprofile.php" method="post" enctype="multipart/form-data">
 <div class="card pd-20 pd-sm-40 w3-container-fluid">
          <center><h2 class="card-body-title">Edit Your Company</h2>
          <blockquote><pre>Note: Please verify all vacant space from "Form Input" before submitting because this will delete all vacant input data from old database</pre></blockquote>
         
          </center>
           <div class="form-layout w3-container-fluid">
            
            
            
            
     <!--Textarea with icon prefix-->
<div class="md-form amber-textarea active-amber-textarea-2">
    <i class="fa fa-pencil prefix"></i>
    <textarea type="text" id="form24" class="md-textarea form-control w3-card-4" rows="6" style="font-size: 18px;font-weight:bold;font-family:roman;" placeholder="OLD : <?php echo $row['about_description'];?>" name="discription"></textarea>
</div>          
        <hr/>    
            <div class="row mg-b-25">


          <div class="col-lg-3" style="border:1px solid black;">
            <h3>#1</h3>
            <hr>
                <label class="custom-file">
                <input type="file" id="file" class="custom-file-input" name="fimage">
                <span class="custom-file-control custom-file-control-inverse"></span>
              </label>
              <hr>
              <div class="form-group">
                  <label class="form-control-label" style="color:red;">First Advocate Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" style="color:red;" type="text" name="fname" placeholder="First Advocate Name">
                </div>
                <hr/>
              
                <div class="form-group">
                  <label class="form-control-label" style="color:red;">Court Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" style="color:red;" type="text" name="fcourt" placeholder="Patna High Court">
                </div>
              <hr/>
              <div class="form-group">
                  <label class="form-control-label" style="color:red;">Position: <span class="tx-danger">*</span></label>
                  <input class="form-control" style="color:red;" type="text" name="fpos" placeholder="ex:Advocate">
             </div>
          </div><!-- col -->
            
         
           <div class="col-lg-3" style="border:1px solid black;">
            <h3>#2</h3>
            <hr>
                <label class="custom-file">
                <input type="file" id="file" class="custom-file-input" name="simage">
                <span class="custom-file-control custom-file-control-inverse"></span>
              </label>
              <hr>
              <div class="form-group">
                  <label class="form-control-label" style="color:red;">2nd Advocate Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" style="color:black;" type="text" name="sname" placeholder="2nd Advocate Name">
                </div>
                <hr/>
              
                 <div class="form-group">
                  <label class="form-control-label" style="color:red;">Court Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" style="color:black;" type="text" name="scourt" placeholder="Patna High Court">
                </div>
              <hr/>
              <div class="form-group">
                  <label class="form-control-label" style="color:red;">Position: <span class="tx-danger">*</span></label>
                  <input class="form-control" style="color:black;" type="text" name="spos" placeholder="ex:Advocate">
             </div>
          </div><!-- col -->
         
         
         
         
           <div class="col-lg-3" style="border:1px solid black;">
            <h3>#3</h3>
            <hr>
                <label class="custom-file">
                <input type="file" id="file" class="custom-file-input" name="timage">
                <span class="custom-file-control custom-file-control-inverse"></span>
              </label>
              <hr>
              <div class="form-group">
                  <label class="form-control-label" style="color:red;">3rd Advocate Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" style="color:black;" type="text" name="tname" placeholder="3rd Advocate Name">
                </div>
                <hr/>
              
               <div class="form-group">
                  <label class="form-control-label" style="color:red;">Court Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" style="color:black;" type="text" name="tcourt" placeholder="Patna High Court">
                </div>
              <hr/>
              <div class="form-group">
                  <label class="form-control-label" style="color:red;">Position: <span class="tx-danger">*</span></label>
                  <input class="form-control" style="color:black;" type="text" name="tpos" placeholder="ex:Advocate">
             </div>
          </div><!-- col -->
         
         
      
            
            
            
              <div class="col-lg-3" style="border:1px solid black;">
            <h3>#4</h3>
            <hr>
                <label class="custom-file">
                <input type="file" id="file" class="custom-file-input" name="4image">
                <span class="custom-file-control custom-file-control-inverse"></span>
              </label>
              <hr>
              <div class="form-group">
                  <label class="form-control-label" style="color:red;">First Advocate Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" style="color:black;" type="text" name="4name" placeholder="4th Advocate Name">
                </div>
                <hr/>
              
                <div class="form-group">
                  <label class="form-control-label" style="color:red;">Court Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" style="color:black;" type="text" name="4court" placeholder="Patna High Court">
                </div>
              <hr/>
              <div class="form-group">
                  <label class="form-control-label" style="color:red;">Position: <span class="tx-danger">*</span></label>
                  <input class="form-control" style="color:black;" type="text" name="4pos" placeholder="ex:Advocate">
             </div>
             
          </div><!-- col -->
            
            
            
            
   <hr>
              <br>
              
              
              
              
              
   </div><!-- row -->
              
        
              
              
              


            <div class="form-layout-footer w3-right">
              <button class="btn btn-info mg-r-5" type="submit" name="submit">Submit Form</button>
              <button class="btn btn-secondary" href="">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->
    </form>    
        
        
        
    
        <?php
  }
} else {
?>  <li><a class="dropdown-item w3-padding-large" >Loading..</a></li><?php 
}
?>    
