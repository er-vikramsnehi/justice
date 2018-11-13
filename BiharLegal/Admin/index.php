<?php
session_start();
ob_start();
?>
<?php include("../conn.php");?>
   
   <?php 
       if(!isset($_SESSION["acount"])){
     ?> 
           <?php 
           header('Location: ../index.php');
            ?>
            <?php 
       }
    ?>
 
 
<?php include("../conn.php");?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <title><?php echo $_SESSION["aname"];?></title>
  <link rel="icon" href="<?php echo $_SESSION["apimage"];?>" sizes="16x16 32x32" type="image/png"> 
    <link rel="stylesheet" href="css/w3.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
 <?php include("include/inc-src-meta.php")?>
 
    
 </head>

 
<?php include("include/inc-src-header.php");?>
 
<?php include("include/inc-src-sideleft.php");?>

<?php include("include/inc-src-dashboard.php");?>

  
<?php include("include/inc-src-script.php")?>




<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


<!-- Insert -->
<script type="text/javascript">

function EditCompany(){

      var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("dashb").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "editprofile.php", true);
	  xhttp.send();
	
}
















function showaccount(){
	 
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("dashb").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "pages/showaccount.php", true);
	  xhttp.send();

}

function showadmin(){
	 
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("dashb").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "pages/showadmin.php", true);
	  xhttp.send();

}



function shownotice(){
	 
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("dashb").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "pages/shownotice.php", true);
	  xhttp.send();

}

 
function showcase(){
	 
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("dashb").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "pages/showcase.php", true);
	  xhttp.send();

}

function showservice(){
	 
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("dashb").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "pages/showservice.php", true);
	  xhttp.send();

}

function showareaofpractice(){
	 
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("dashb").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "pages/showareaofpractice.php", true);
	  xhttp.send();

}

function showhonblejustics(){
	 
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("dashb").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "pages/showhunblejustics.php", true);
	  xhttp.send();

}

function showotherlinks(){
	 
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("dashb").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "pages/showotherlinks.php", true);
	  xhttp.send();

}





</script>
<!-- End Insert -->

<!-- Delete  -->

<script type="text/javascript">
function deleteaccount(){
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("dashb").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "pages/delaccount.php", true);
	  xhttp.send();
}

function deleteadmin(){
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("dashb").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "pages/deladmin.php", true);
	  xhttp.send();
}


function deletenotice(){
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("dashb").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "pages/delnotice.php", true);
	  xhttp.send();
}

/*  */
function deletecase(){
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("dashb").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "pages/delcase.php", true);
	  xhttp.send();
}


function deleteservice(){
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("dashb").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "pages/delservice.php", true);
	  xhttp.send();
}


function deleteareaofpractice(){
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("dashb").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "pages/delareaofpractice.php", true);
	  xhttp.send();
}


function deletehonble(){
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("dashb").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "pages/delhonblejustics.php", true);
	  xhttp.send();
}


function deleteotherlink(){
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("dashb").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "pages/delotherlinks.php", true);
	  xhttp.send();
}


<!--

//-->

</script>