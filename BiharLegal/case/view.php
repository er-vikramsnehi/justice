<?php
session_start();
?>
<?php include("../conn.php");?>


<?php
 $ccount=$_GET['caseno'];
 ?>
<!DOCTYPE div PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
  
  <html>
  <head>
<title> Yash Law Firm- Dr. Pardeep Sharma (Advocate) (High Court, Patna)</title>
  
<link rel="icon" href="images/3.png" sizes="25x25" type="image/png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="YashLawFirm">
    <meta name="twitter:creator" content="YashLawFirm">
    <meta name="twitter:card" content="YashLawFirm">
    <meta name="twitter:title" content="YashLawFirm">
    <meta name="twitter:description" content="Pardeep Sharma & ASSOCIATES is a full-service law firm providing innovative legal solutions to its domestic as well as international clients. The firm offers a large portfolio of legal services through its offices located at Kumar Toli, Patna, Near Chiraiyantand Pool.
The stimulating work environment brings together the best legal brains at ALOK RANJAN & ASSOCIATES to take care of all legal needs of our clients. The 10-lawyer strong team comprises of experienced, dynamic, enterprising and innovative legal experts having outstanding academic and professional records.">
    <meta name="twitter:image" content="images/3.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://yashlawfirm.in">
    <meta property="og:title" content="Justics">
    <meta property="og:description" content="Pardeep Sharma & ASSOCIATES is a full-service law firm providing innovative legal solutions to its domestic as well as international clients. The firm offers a large portfolio of legal services through its offices located at Kumar Toli, Patna, Near Chiraiyantand Pool.
The stimulating work environment brings together the best legal brains at ALOK RANJAN & ASSOCIATES to take care of all legal needs of our clients. The 10-lawyer strong team comprises of experienced, dynamic, enterprising and innovative legal experts having outstanding academic and professional records.">

    <meta property="og:image" content="http://yashlawfirm.in">
    <meta property="og:image:secure_url" content="yashlawfirm.in/new.gif">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">



<meta name="description" content="Yash Law Firm - We Fight for you.">
<meta name="description" content="यश लॉ फर्म - हम आपके लिए लड़ते हैं">
  <meta name="keywords" content="Yash,Law,Firm,YashLawFirm,Pardeep Sharma,Advocate">
  <meta name="developer" content="Vikram Snehi">
  
  <meta name="description" content="परदीप शर्मा और एसोसिएट्स एक पूर्ण सेवा कानून फर्म है जो अपने घरेलू और अंतर्राष्ट्रीय ग्राहकों को अभिनव कानूनी समाधान प्रदान करती है। फर्म कुमार टॉली, पटना, चिराईतंत पूल के पास स्थित अपने कार्यालयों के माध्यम से कानूनी सेवाओं का एक बड़ा पोर्टफोलियो प्रदान करता है।
उत्तेजक कार्य पर्यावरण हमारे ग्राहकों की सभी कानूनी आवश्यकताओं का ध्यान रखने के लिए एलोक रंजन और एसोसिएट्स के सर्वश्रेष्ठ कानूनी मस्तिष्क को एक साथ लाता है। 10-वकील मजबूत टीम में अनुभवी, गतिशील, उद्यमी और अभिनव कानूनी विशेषज्ञ शामिल हैं जिनमें उत्कृष्ट शैक्षणिक और व्यावसायिक रिकॉर्ड हैं।">
    <!-- Meta -->
    <meta name="description" content="Pardeep Sharma & ASSOCIATES is a full-service law firm providing innovative legal solutions to its domestic as well as international clients. The firm offers a large portfolio of legal services through its offices located at Kumar Toli, Patna, Near Chiraiyantand Pool.
The stimulating work environment brings together the best legal brains at ALOK RANJAN & ASSOCIATES to take care of all legal needs of our clients. The 10-lawyer strong team comprises of experienced, dynamic, enterprising and innovative legal experts having outstanding academic and professional records.">
    <meta name="author" content="Pardeep Sharma the Advocate">



<style type="text/css">
body{ margin:0 0 0 0px; background-image:url(../images/main_bg.jpg); background-repeat:repeat;}
#secnav{
background-image:url(../images/nav_bg.jpg);
    /* Full height */
    height: 55px; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
#secnav2{
background-image:url(../images/nav_bg.jpg);
    /* Full height */
    height: 55px; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
#login{
float: right;
}
li{
position:inline;
}
#linka{
height:400px;

}
#rightnav{
height:700px;

}
#marqueenotice{
height:200px;
}
#lista{
 height:700px;
 background-image:url('../images/leftnav_bg.png');
 background-size: contain, cover;
 background-width:100%;
 background-repeat: no-repeat;
 padding:2px;
}
#secfooter{
   background-image:url("../images/footer_bg.jpg");
    /* Full height */
    height: 155px; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: repeat;
     opacity:2;
    display: table-row-group;
    vertical-align: middle;
    border-color: inherit;
    border-top-color: inherit;
    border-right-color: inherit;
    border-bottom-color: inherit;
    border-left-color: inherit;
}
</style>
    <link href="../Design/css/font-awesome.css" rel="stylesheet">
    <link href="../Design/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../Design/css/font-awesome.min.css">
	<link href="../Design/css/animate.min.css" rel="stylesheet"> 
	 <link href="../Design/css/prettyPhoto.css" rel="stylesheet"> 
	<link href="../Design/css/style.css" rel="stylesheet">
	<link href="../Design/css/w3.css" rel="stylesheet">	
   <link href="../Design/css/w3-theme-teal.css" rel="stylesheet">
   <link href="../Design/css/gallery.css" rel="stylesheet">
   <link href="../Design/css/footer.css" rel="stylesheet">
   <link href="../Design/css/flexslider.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="../Design/js/bootstrap.min.js"></script>

 <script type="text/javascript" src="../Design/textboxio/textboxio/textboxio.js"></script>
   
 <script>textboxio.replace('textarea');</script>
 
	
</head>


 <div class="w3-container-fluid">
 <div class="row">
 <?php include("include/inc-src-top.php");?>
 </div>
 </div>

 
 

  



 
 


<?php 
$navbarcasenav = "SELECT * from `formreg` WHERE `formreg_count`='$ccount'";
$resultcasenav = $conn->query($navbarcasenav);

if ($resultcasenav->num_rows > 0) {
    while($row = $resultcasenav->fetch_assoc()) {
 ?>  
 <div class="container">
 <div class="row">
 <div class="col-lg-6 w3-card-4" style="border:10px solid black;">
 
 <div class="jumbotron w3-card-4 table table-bordered table-dark" style="border:1px solid black;">
  <h2 class="display-4" style="color:red;">#<?php echo $row["formreg_count"];?>. <?php echo $row["formreg_name"];?></h2>
  <p class="lead">
  <pre> Email: <?php echo $row["formreg_email"];?> </pre>
  <pre> Mobile:<?php echo $row["formreg_mobile"];?> </pre>
  <pre> Gender:<?php echo $row["formreg_gender"];?> </pre>
  <pre> #Case submitted By:<img alt="Profile" src="../<?php echo $row["userimage"];?>" class="w3-circle img-circle" style="height:50px;width: 50px;"><button class="btn btn-info"><?php echo $row["formreg_username"];?></button> </pre>
  <pre> Process: <?php echo $row["process"];?> <font style="color:purple;font-weight:bolder;"><i class="fa fa-circle"></i></font></pre>
  </p>
  <hr class="my-4">
  <pre><?php echo $row["formreg_message"];?></pre>
  <a class="btn btn-success btn-sm w3-right" href="#" role="button">view user</a>
</div>
 
 
 </div>
 <div class="col-lg-6"><object width="100%" height="100%" data="../pdf/<?php echo $row["formreg_file"];?>" style="border:10px solid black;"></object></div>
 </div> 
</div>

<?php
  } 
} else {
?>  <li><a class="dropdown-item w3-padding-large" >Loading..</a></li><?php 
}
?>
































 
<?php include("include/footer.php");?>








  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="Design/js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="Design/js/jquery.prettyPhoto.js"></script>
    <script src="Design/js/jquery.isotope.min.js"></script> 
	<script src="Design/js/wow.min.js"></script>
	<script src="Design/js/jquery.easing.min.js"></script>	
	<script src="Design/js/main.js"></script>
	
 
<script type="text/javascript" src="Design/mainmenu.js"></script> 
 


<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57f73a27f35b8928"></script>


 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a268a3ed0795768aaf8d71e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


