<?php
session_start();
?>
<?php include("../conn.php");?>


<?php 
$count=$_SESSION["count"];

$account = "select * from account WHERE account_count = '$count'";


$resultsqlaccount = $conn->query($account);

if ($resultsqlaccount->num_rows > 0) {
    while($row = $resultsqlaccount->fetch_assoc()) {
        
        
        
 
    }
} else {
    echo "0 results";
}
?> 








<!DOCTYPE head PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>


<?php include("include/profile-meta.php");?>
</head>

	<body id="body" data-ng-app="contactApp">
	
		<!--Preloader-->
		<div class="preloader-it">
			<div class="mdl-spinner mdl-js-spinner is-active is-upgraded" data-upgraded=",MaterialSpinner"><div class="mdl-spinner__layer mdl-spinner__layer-1"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div><div class="mdl-spinner__layer mdl-spinner__layer-2"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div><div class="mdl-spinner__layer mdl-spinner__layer-3"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div><div class="mdl-spinner__layer mdl-spinner__layer-4"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div></div>
		</div>
		<!--/Preloader-->
		
		<!--Main Wrapper-->
		<div class="main-wrapper">
		
		 	
			<div class="mdl-js-layout mdl-layout-fixed-header">
	 
	 <?php include 'include/tophead.php';?>
	 <br/><br/>
	 <?php include 'include/leftside.php';?>
	 
	 <?php include 'include/mainbody.php';?>	
 			
				
	
							
			</div>	
		</div>	
		<!--/Main Wrapper-->
		
		<!-- Scripts -->
		<script src="js/jquery-1.12.4.min.js"></script>
		<script src="js/angular.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/material.min.js"></script>
		<script src="js/jQuery.appear.js"></script>
		<script src="js/app.js"></script>
		<script src="js/controllers.js"></script>
		<script src="js/smooth-scroll.js"></script>
		<script src="js/isotope.js"></script>
		<script src="js/lightgallery-all.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/froogaloop2.min.js"></script>
		<script src="js/jquery.slimscroll.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxXt2P7-U38bK0xEFIT-ebZJ1ngK8wjww"></script>
		<script src="js/init.js"></script>
	</body>
</html>
