
<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$DBaseMeta = "biharlegal";
 
$conn = new mysqli($servername, $username, $password,$DBaseMeta);

 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Amanda">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/amanda/img/amanda-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/amanda">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/amanda/img/amanda-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/amanda/img/amanda-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">


    <title>Amanda Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/jquery-toggles/toggles-full.css" rel="stylesheet">
    <link href="../lib/highlightjs/github.css" rel="stylesheet">
    <link href="../lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Amanda CSS -->
    <link rel="stylesheet" href="../css/amanda.css">
  </head>

  <body>

    <div class="am-header">
      <div class="am-header-left">
        <a id="naviconLeft" href="" class="am-navicon d-none d-lg-flex"><i class="icon ion-navicon-round"></i></a>
        <a id="naviconLeftMobile" href="" class="am-navicon d-lg-none"><i class="icon ion-navicon-round"></i></a>
        <a href="index.html" class="am-logo">amanda</a>
      </div><!-- am-header-left -->

      <div class="am-header-right">
        <div class="dropdown dropdown-notification">
          <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
            <i class="icon ion-ios-bell-outline tx-24"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
            <!-- end: if statement -->
          </a>
          <div class="dropdown-menu wd-300 pd-0-force">
            <div class="dropdown-menu-header">
              <label>Notifications</label>
              <a href="">Mark All as Read</a>
            </div><!-- d-flex -->

            <div class="media-list">
              <!-- loop starts here -->
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0"><strong class="tx-medium">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                    <span class="tx-12">October 03, 2017 8:45am</span>
                  </div>
                </div><!-- media -->
              </a>
              <!-- loop ends here -->
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0"><strong class="tx-medium">Mellisa Brown</strong> appreciated your work <strong class="tx-medium">The Social Network</strong></p>
                    <span class="tx-12">October 02, 2017 12:44am</span>
                  </div>
                </div><!-- media -->
              </a>
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0">20+ new items added are for sale in your <strong class="tx-medium">Sale Group</strong></p>
                    <span class="tx-12">October 01, 2017 10:20pm</span>
                  </div>
                </div><!-- media -->
              </a>
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0"><strong class="tx-medium">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium">Ronnie Mara</strong></p>
                    <span class="tx-12">October 01, 2017 6:08pm</span>
                  </div>
                </div><!-- media -->
              </a>
              <div class="media-list-footer">
                <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
              </div>
            </div><!-- media-list -->
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <div class="dropdown dropdown-profile">
          <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <img src="../img/img3.jpg" class="wd-32 rounded-circle" alt="">
            <span class="logged-name"><span class="hidden-xs-down">Jane Doe</span> <i class="fa fa-angle-down mg-l-3"></i></span>
          </a>
          <div class="dropdown-menu wd-200">
            <ul class="list-unstyled user-profile-nav">
              <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
              <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
              <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
              <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
              <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
              <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </div><!-- am-header-right -->
    </div><!-- am-header -->

    <div class="am-sideleft">
      <ul class="nav am-sideleft-tab">
        <li class="nav-item">
          <a href="#mainMenu" class="nav-link active"><i class="icon ion-ios-home-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a href="#emailMenu" class="nav-link"><i class="icon ion-ios-email-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a href="#chatMenu" class="nav-link"><i class="icon ion-ios-chatboxes-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a href="#settingMenu" class="nav-link"><i class="icon ion-ios-gear-outline tx-24"></i></a>
        </li>
      </ul>

      <div class="tab-content">
        <div id="mainMenu" class="tab-pane active">
          <ul class="nav am-sideleft-menu">
            <li class="nav-item">
              <a href="index.html" class="nav-link">
                <i class="icon ion-ios-home-outline"></i>
                <span>Dashboard</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-gear-outline"></i>
                <span>Forms</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="form-elements.html" class="nav-link">Form Elements</a></li>
                <li class="nav-item"><a href="form-layouts.html" class="nav-link">Form Layouts</a></li>
                <li class="nav-item"><a href="form-validation.html" class="nav-link">Form Validation</a></li>
                <li class="nav-item"><a href="form-wizards.html" class="nav-link">Form Wizards</a></li>
                <li class="nav-item"><a href="form-editor-text.html" class="nav-link">Text Editor</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-filing-outline"></i>
                <span>UI Elements</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="accordion.html" class="nav-link">Accordion</a></li>
                <li class="nav-item"><a href="alerts.html" class="nav-link">Alerts</a></li>
                <li class="nav-item"><a href="buttons.html" class="nav-link">Buttons</a></li>
                <li class="nav-item"><a href="cards.html" class="nav-link">Cards</a></li>
                <li class="nav-item"><a href="icons.html" class="nav-link">Icons</a></li>
                <li class="nav-item"><a href="modal.html" class="nav-link">Modal</a></li>
                <li class="nav-item"><a href="navigation.html" class="nav-link">Navigation</a></li>
                <li class="nav-item"><a href="pagination.html" class="nav-link">Pagination</a></li>
                <li class="nav-item"><a href="popups.html" class="nav-link">Tooltip &amp; Popover</a></li>
                <li class="nav-item"><a href="progress.html" class="nav-link">Progress</a></li>
                <li class="nav-item"><a href="spinners.html" class="nav-link">Spinners</a></li>
                <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-analytics-outline"></i>
                <span>Charts</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="chart-morris.html" class="nav-link">Morris Charts</a></li>
                <li class="nav-item"><a href="chart-flot.html" class="nav-link">Flot Charts</a></li>
                <li class="nav-item"><a href="chart-chartjs.html" class="nav-link">Chart JS</a></li>
                <li class="nav-item"><a href="chart-rickshaw.html" class="nav-link">Rickshaw</a></li>
                <li class="nav-item"><a href="chart-sparkline.html" class="nav-link">Sparkline</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-navigate-outline"></i>
                <span>Maps</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="map-google.html" class="nav-link">Google Maps</a></li>
                <li class="nav-item"><a href="map-vector.html" class="nav-link">Vector Maps</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link with-sub active show-sub">
                <i class="icon ion-ios-list-outline"></i>
                <span>Tables</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="table-basic.html" class="nav-link">Basic Table</a></li>
                <li class="nav-item"><a href="table-datatable.html" class="nav-link active">Data Table</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-bookmarks-outline"></i>
                <span>Pages</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="blank.html" class="nav-link">Blank Page</a></li>
                <li class="nav-item"><a href="page-signin.html" class="nav-link">Signin Page</a></li>
                <li class="nav-item"><a href="page-signup.html" class="nav-link">Signup Page</a></li>
                <li class="nav-item"><a href="page-notfound.html" class="nav-link">404 Page Not Found</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="widgets.html" class="nav-link">
                <i class="icon ion-ios-briefcase-outline"></i>
                <span>Widgets</span>
              </a>
            </li><!-- nav-item -->
          </ul>
        </div><!-- #mainMenu -->
        <div id="emailMenu" class="tab-pane">
          <div class="pd-x-20 pd-y-10">
            <a href="" class="btn btn-orange btn-block btn-compose">Compose Email</a>
          </div>
          <ul class="nav am-sideleft-menu">
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-ios-filing-outline"></i>
                <span>Inbox</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-ios-filing-outline"></i>
                <span>Drafts</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-ios-paperplane-outline"></i>
                <span>Sent</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-ios-trash-outline"></i>
                <span>Trash</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-ios-filing-outline"></i>
                <span>Spam</span>
              </a>
            </li><!-- nav-item -->
          </ul>

          <label class="pd-x-20 tx-uppercase tx-11 mg-t-10 tx-orange mg-b-0 tx-medium">My Folder</label>
          <ul class="nav am-sideleft-menu">
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-ios-folder-outline"></i>
                <span>Updates</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-ios-folder-outline"></i>
                <span>Social</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-ios-folder-outline"></i>
                <span>Promotions</span>
              </a>
            </li><!-- nav-item -->
          </ul>
        </div><!-- #emailMenu -->
        <div id="chatMenu" class="tab-pane">
          <div class="chat-search-bar">
            <input type="search" class="form-control wd-150" placeholder="Search chat...">
            <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
          </div><!-- chat-search-bar -->

          <label class="pd-x-15 tx-uppercase tx-11 mg-t-20 tx-orange mg-b-10 tx-medium">Recent Chat History</label>
          <div class="list-group list-group-chat">
            <a href="#" class="list-group-item">
              <div class="d-flex align-items-center">
                <img src="../img/img6.jpg" class="wd-32 rounded-circle" alt="">
                <div class="mg-l-10">
                  <h6>Russell M. Evans</h6>
                  <span>Tuesday, 10:33am</span>
                </div>
              </div><!-- d-flex -->
              <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain...</p>
            </a><!-- list-group-item -->
            <a href="#" class="list-group-item">
              <div class="d-flex align-items-center">
                <img src="../img/img7.jpg" class="wd-32 rounded-circle" alt="">
                <div class="mg-l-10">
                  <h6>James F. Sears</h6>
                  <span>Monday, 4:21pm</span>
                </div>
              </div><!-- d-flex -->
              <p>But who has any right to find fault with a man who chooses to enjoy a pleasure that has...</p>
            </a><!-- list-group-item -->
            <a href="#" class="list-group-item">
              <div class="d-flex align-items-center">
                <img src="../img/img8.jpg" class="wd-32 rounded-circle" alt="">
                <div class="mg-l-10">
                  <h6>Sharon R. Rowe</h6>
                  <span>Sunday, 7:45pm</span>
                </div>
              </div><!-- d-flex -->
              <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising...</p>
            </a><!-- list-group-item -->
            <a href="#" class="list-group-item">
              <div class="d-flex align-items-center">
                <img src="../img/img9.jpg" class="wd-32 rounded-circle" alt="">
                <div class="mg-l-10">
                  <h6>Ruby M. Martin</h6>
                  <span>Sunday, 7:45pm</span>
                </div>
              </div><!-- d-flex -->
              <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising...</p>
            </a><!-- list-group-item -->
            <a href="#" class="list-group-item">
              <div class="d-flex align-items-center">
                <img src="../img/img10.jpg" class="wd-32 rounded-circle" alt="">
                <div class="mg-l-10">
                  <h6>Joslyn C. Mayo</h6>
                  <span>Sunday, 7:45pm</span>
                </div>
              </div><!-- d-flex -->
              <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising...</p>
            </a><!-- list-group-item -->
          </div><!-- list-group -->
          <span class="d-block pd-15 tx-12">Loading messages...</span>

        </div><!-- #chatMenu -->
        <div id="settingMenu" class="tab-pane">
          <div class="pd-x-15">
            <label class="tx-uppercase tx-11 mg-t-10 tx-orange mg-b-15 tx-medium">Quick Settings</label>
            <div class="bd pd-15">
              <h6 class="tx-13 tx-normal tx-gray-800">Daily Newsletter</h6>
              <p class="tx-12">Get notified when someone else is trying to access your account.</p>
              <div class="toggle toggle-light warning"></div>
            </div><!-- bd -->

            <div class="bd pd-15 mg-t-15">
              <h6 class="tx-13 tx-normal tx-gray-800">Call Phones</h6>
              <p class="tx-12">Make calls to friends and family right from your account.</p>
              <div class="toggle toggle-light warning"></div>
            </div><!-- bd -->

            <div class="bd pd-15 mg-t-15">
              <h6 class="tx-13 tx-normal tx-gray-800">Login Notifications</h6>
              <p class="tx-12">Get notified when someone else is trying to access your account.</p>
              <div class="toggle toggle-light warning"></div>
            </div><!-- bd -->

            <div class="bd pd-15 mg-t-15">
              <h6 class="tx-13 tx-normal tx-gray-800">Phone Approvals</h6>
              <p class="tx-12">Use your phone when login as an extra layer of security.</p>
              <div class="toggle toggle-light warning"></div>
            </div><!-- bd -->
          </div>
        </div><!-- #settingMenu -->
      </div><!-- tab-content -->
    </div><!-- am-sideleft -->

    <div class="am-pagetitle">
      <h5 class="am-title">Data Table</h5>
      <form id="searchBar" class="search-bar" action="index.html">
        <div class="form-control-wrapper">
          <input type="search" class="form-control bd-0" placeholder="Search...">
        </div><!-- form-control-wrapper -->
        <button id="searchBtn" class="btn btn-orange"><i class="fa fa-search"></i></button>
      </form><!-- search-bar -->
    </div><!-- am-pagetitle -->

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    <div class="am-mainpanel">
      <div class="am-pagebody">

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Basic Responsive DataTable</h6>
          <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

          
          <div class="table-wrapper">
                       <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Name</th>
                  <th class="wd-25p">Email</th>
                  <th class="wd-20p">Number</th>
                  <th class="wd-15p">Address</th>
                  <th class="wd-10p">Position</th>
                  <th class="wd-25p">Start Date</th>
                  <th class="wd-25p">Salary</th>
                  <th class="wd-25p">Image</th>
                  <th class="wd-25p">Cover Image</th>
                  <th class="wd-25p">DOB</th>
                 
                                    
                </tr>
              </thead>
              <tbody>  
 

 <?php 
$sqlaccount = "SELECT * FROM account";
$result = $conns->query($sqlaccount);

if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        ?> 
    <tr>
                  <td><?php echo $row["account_name"];?></td>
                  <td><?php echo $row["account_email"];?></td>
                  <td><?php echo $row["account_number"];?></td>
                  <td><?php echo $row["account_address"];?></td>
                  <td><?php echo $row["account_position"];?></td>
                  <td><?php echo $row["account_salary"];?></td>
                  <td><?php echo $row["account_image"];?></td>
                  <td><?php echo $row["account_cover"];?></td>
                  <td><?php echo $row["account_dob"];?></td>
                  <td style="color:red;">Delete this Account</td>
   </tr> 
<?php
  }
} else {
    echo "0 results";
}
?>          
                      
              
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->











        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
        <pre><code class="javascript pd-20">$('#datatable1').DataTable({
responsive: true,
language: {
  searchPlaceholder: 'Search...',
  sSearch: '',
  lengthMenu: '_MENU_ items/page',
}
});</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Disabling Search &amp; Items Per Page Menu</h6>
          <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

          <div class="table-wrapper">
            <table id="datatable2" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">First name</th>
                  <th class="wd-15p">Last name</th>
                  <th class="wd-20p">Position</th>
                  <th class="wd-15p">Start date</th>
                  <th class="wd-10p">Salary</th>
                  <th class="wd-25p">E-mail</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiger</td>
                  <td>Nixon</td>
                  <td>System Architect</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                  <td>t.nixon@datatables.net</td>
                </tr>
                <tr>
                  <td>Garrett</td>
                  <td>Winters</td>
                  <td>Accountant</td>
                  <td>2011/07/25</td>
                  <td>$170,750</td>
                  <td>g.winters@datatables.net</td>
                </tr>
                <tr>
                  <td>Ashton</td>
                  <td>Cox</td>
                  <td>Junior Technical Author</td>
                  <td>2009/01/12</td>
                  <td>$86,000</td>
                  <td>a.cox@datatables.net</td>
                </tr>
                <tr>
                  <td>Cedric</td>
                  <td>Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>2012/03/29</td>
                  <td>$433,060</td>
                  <td>c.kelly@datatables.net</td>
                </tr>
                <tr>
                  <td>Airi</td>
                  <td>Satou</td>
                  <td>Accountant</td>
                  <td>2008/11/28</td>
                  <td>$162,700</td>
                  <td>a.satou@datatables.net</td>
                </tr>
                <tr>
                  <td>Brielle</td>
                  <td>Williamson</td>
                  <td>Integration Specialist</td>
                  <td>2012/12/02</td>
                  <td>$372,000</td>
                  <td>b.williamson@datatables.net</td>
                </tr>
                <tr>
                  <td>Herrod</td>
                  <td>Chandler</td>
                  <td>Sales Assistant</td>
                  <td>2012/08/06</td>
                  <td>$137,500</td>
                  <td>h.chandler@datatables.net</td>
                </tr>
                <tr>
                  <td>Rhona</td>
                  <td>Davidson</td>
                  <td>Integration Specialist</td>
                  <td>2010/10/14</td>
                  <td>$327,900</td>
                  <td>r.davidson@datatables.net</td>
                </tr>
                <tr>
                  <td>Colleen</td>
                  <td>Hurst</td>
                  <td>Javascript Developer</td>
                  <td>2009/09/15</td>
                  <td>$205,500</td>
                  <td>c.hurst@datatables.net</td>
                </tr>
                <tr>
                  <td>Sonya</td>
                  <td>Frost</td>
                  <td>Software Engineer</td>
                  <td>2008/12/13</td>
                  <td>$103,600</td>
                  <td>s.frost@datatables.net</td>
                </tr>
                <tr>
                  <td>Jena</td>
                  <td>Gaines</td>
                  <td>Office Manager</td>
                  <td>2008/12/19</td>
                  <td>$90,560</td>
                  <td>j.gaines@datatables.net</td>
                </tr>
                <tr>
                  <td>Quinn</td>
                  <td>Flynn</td>
                  <td>Support Lead</td>
                  <td>2013/03/03</td>
                  <td>$342,000</td>
                  <td>q.flynn@datatables.net</td>
                </tr>
                <tr>
                  <td>Charde</td>
                  <td>Marshall</td>
                  <td>Regional Director</td>
                  <td>2008/10/16</td>
                  <td>$470,600</td>
                  <td>c.marshall@datatables.net</td>
                </tr>
                <tr>
                  <td>Haley</td>
                  <td>Kennedy</td>
                  <td>Senior Marketing Designer</td>
                  <td>2012/12/18</td>
                  <td>$313,500</td>
                  <td>h.kennedy@datatables.net</td>
                </tr>
                <tr>
                  <td>Tatyana</td>
                  <td>Fitzpatrick</td>
                  <td>Regional Director</td>
                  <td>2010/03/17</td>
                  <td>$385,750</td>
                  <td>t.fitzpatrick@datatables.net</td>
                </tr>
                <tr>
                  <td>Michael</td>
                  <td>Silva</td>
                  <td>Marketing Designer</td>
                  <td>2012/11/27</td>
                  <td>$198,500</td>
                  <td>m.silva@datatables.net</td>
                </tr>
                <tr>
                  <td>Paul</td>
                  <td>Byrd</td>
                  <td>Chief Financial Officer</td>
                  <td>2010/06/09</td>
                  <td>$725,000</td>
                  <td>p.byrd@datatables.net</td>
                </tr>
                <tr>
                  <td>Gloria</td>
                  <td>Little</td>
                  <td>Systems Administrator</td>
                  <td>2009/04/10</td>
                  <td>$237,500</td>
                  <td>g.little@datatables.net</td>
                </tr>
                <tr>
                  <td>Bradley</td>
                  <td>Greer</td>
                  <td>Software Engineer</td>
                  <td>2012/10/13</td>
                  <td>$132,000</td>
                  <td>b.greer@datatables.net</td>
                </tr>
                <tr>
                  <td>Dai</td>
                  <td>Rios</td>
                  <td>Personnel Lead</td>
                  <td>2012/09/26</td>
                  <td>$217,500</td>
                  <td>d.rios@datatables.net</td>
                </tr>
                <tr>
                  <td>Jenette</td>
                  <td>Caldwell</td>
                  <td>Development Lead</td>
                  <td>2011/09/03</td>
                  <td>$345,000</td>
                  <td>j.caldwell@datatables.net</td>
                </tr>
                <tr>
                  <td>Yuri</td>
                  <td>Berry</td>
                  <td>Chief Marketing Officer</td>
                  <td>2009/06/25</td>
                  <td>$675,000</td>
                  <td>y.berry@datatables.net</td>
                </tr>
                <tr>
                  <td>Caesar</td>
                  <td>Vance</td>
                  <td>Pre-Sales Support</td>
                  <td>2011/12/12</td>
                  <td>$106,450</td>
                  <td>c.vance@datatables.net</td>
                </tr>
                <tr>
                  <td>Doris</td>
                  <td>Wilder</td>
                  <td>Sales Assistant</td>
                  <td>2010/09/20</td>
                  <td>$85,600</td>
                  <td>d.wilder@datatables.net</td>
                </tr>
                <tr>
                  <td>Angelica</td>
                  <td>Ramos</td>
                  <td>Chief Executive Officer</td>
                  <td>2009/10/09</td>
                  <td>$1,200,000</td>
                  <td>a.ramos@datatables.net</td>
                </tr>
                <tr>
                  <td>Gavin</td>
                  <td>Joyce</td>
                  <td>Developer</td>
                  <td>2010/12/22</td>
                  <td>$92,575</td>
                  <td>g.joyce@datatables.net</td>
                </tr>
                <tr>
                  <td>Jennifer</td>
                  <td>Chang</td>
                  <td>Regional Director</td>
                  <td>2010/11/14</td>
                  <td>$357,650</td>
                  <td>j.chang@datatables.net</td>
                </tr>
                <tr>
                  <td>Brenden</td>
                  <td>Wagner</td>
                  <td>Software Engineer</td>
                  <td>2011/06/07</td>
                  <td>$206,850</td>
                  <td>b.wagner@datatables.net</td>
                </tr>
                <tr>
                  <td>Fiona</td>
                  <td>Green</td>
                  <td>Chief Operating Officer</td>
                  <td>2010/03/11</td>
                  <td>$850,000</td>
                  <td>f.green@datatables.net</td>
                </tr>
                <tr>
                  <td>Shou</td>
                  <td>Itou</td>
                  <td>Regional Marketing</td>
                  <td>2011/08/14</td>
                  <td>$163,000</td>
                  <td>s.itou@datatables.net</td>
                </tr>
                <tr>
                  <td>Michelle</td>
                  <td>House</td>
                  <td>Integration Specialist</td>
                  <td>2011/06/02</td>
                  <td>$95,400</td>
                  <td>m.house@datatables.net</td>
                </tr>
                <tr>
                  <td>Suki</td>
                  <td>Burks</td>
                  <td>Developer</td>
                  <td>2009/10/22</td>
                  <td>$114,500</td>
                  <td>s.burks@datatables.net</td>
                </tr>
                <tr>
                  <td>Prescott</td>
                  <td>Bartlett</td>
                  <td>Technical Author</td>
                  <td>2011/05/07</td>
                  <td>$145,000</td>
                  <td>p.bartlett@datatables.net</td>
                </tr>
                <tr>
                  <td>Gavin</td>
                  <td>Cortez</td>
                  <td>Team Leader</td>
                  <td>2008/10/26</td>
                  <td>$235,500</td>
                  <td>g.cortez@datatables.net</td>
                </tr>
                <tr>
                  <td>Martena</td>
                  <td>Mccray</td>
                  <td>Post-Sales support</td>
                  <td>2011/03/09</td>
                  <td>$324,050</td>
                  <td>m.mccray@datatables.net</td>
                </tr>
                <tr>
                  <td>Unity</td>
                  <td>Butler</td>
                  <td>Marketing Designer</td>
                  <td>2009/12/09</td>
                  <td>$85,675</td>
                  <td>u.butler@datatables.net</td>
                </tr>
                <tr>
                  <td>Howard</td>
                  <td>Hatfield</td>
                  <td>Office Manager</td>
                  <td>2008/12/16</td>
                  <td>$164,500</td>
                  <td>h.hatfield@datatables.net</td>
                </tr>
                <tr>
                  <td>Hope</td>
                  <td>Fuentes</td>
                  <td>Secretary</td>
                  <td>2010/02/12</td>
                  <td>$109,850</td>
                  <td>h.fuentes@datatables.net</td>
                </tr>
                <tr>
                  <td>Vivian</td>
                  <td>Harrell</td>
                  <td>Financial Controller</td>
                  <td>2009/02/14</td>
                  <td>$452,500</td>
                  <td>v.harrell@datatables.net</td>
                </tr>
                <tr>
                  <td>Timothy</td>
                  <td>Mooney</td>
                  <td>Office Manager</td>
                  <td>2008/12/11</td>
                  <td>$136,200</td>
                  <td>t.mooney@datatables.net</td>
                </tr>
                <tr>
                  <td>Jackson</td>
                  <td>Bradshaw</td>
                  <td>Director</td>
                  <td>2008/09/26</td>
                  <td>$645,750</td>
                  <td>j.bradshaw@datatables.net</td>
                </tr>
                <tr>
                  <td>Olivia</td>
                  <td>Liang</td>
                  <td>Support Engineer</td>
                  <td>2011/02/03</td>
                  <td>$234,500</td>
                  <td>o.liang@datatables.net</td>
                </tr>
                <tr>
                  <td>Bruno</td>
                  <td>Nash</td>
                  <td>Software Engineer</td>
                  <td>2011/05/03</td>
                  <td>$163,500</td>
                  <td>b.nash@datatables.net</td>
                </tr>
                <tr>
                  <td>Sakura</td>
                  <td>Yamamoto</td>
                  <td>Support Engineer</td>
                  <td>2009/08/19</td>
                  <td>$139,575</td>
                  <td>s.yamamoto@datatables.net</td>
                </tr>
                <tr>
                  <td>Thor</td>
                  <td>Walton</td>
                  <td>Developer</td>
                  <td>2013/08/11</td>
                  <td>$98,540</td>
                  <td>t.walton@datatables.net</td>
                </tr>
                <tr>
                  <td>Finn</td>
                  <td>Camacho</td>
                  <td>Support Engineer</td>
                  <td>2009/07/07</td>
                  <td>$87,500</td>
                  <td>f.camacho@datatables.net</td>
                </tr>
                <tr>
                  <td>Serge</td>
                  <td>Baldwin</td>
                  <td>Data Coordinator</td>
                  <td>2012/04/09</td>
                  <td>$138,575</td>
                  <td>s.baldwin@datatables.net</td>
                </tr>
                <tr>
                  <td>Zenaida</td>
                  <td>Frank</td>
                  <td>Software Engineer</td>
                  <td>2010/01/04</td>
                  <td>$125,250</td>
                  <td>z.frank@datatables.net</td>
                </tr>
                <tr>
                  <td>Zorita</td>
                  <td>Serrano</td>
                  <td>Software Engineer</td>
                  <td>2012/06/01</td>
                  <td>$115,000</td>
                  <td>z.serrano@datatables.net</td>
                </tr>
                <tr>
                  <td>Jennifer</td>
                  <td>Acosta</td>
                  <td>Junior Javascript Developer</td>
                  <td>2013/02/01</td>
                  <td>$75,650</td>
                  <td>j.acosta@datatables.net</td>
                </tr>
                <tr>
                  <td>Cara</td>
                  <td>Stevens</td>
                  <td>Sales Assistant</td>
                  <td>2011/12/06</td>
                  <td>$145,600</td>
                  <td>c.stevens@datatables.net</td>
                </tr>
                <tr>
                  <td>Hermione</td>
                  <td>Butler</td>
                  <td>Regional Director</td>
                  <td>2011/03/21</td>
                  <td>$356,250</td>
                  <td>h.butler@datatables.net</td>
                </tr>
                <tr>
                  <td>Lael</td>
                  <td>Greer</td>
                  <td>Systems Administrator</td>
                  <td>2009/02/27</td>
                  <td>$103,500</td>
                  <td>l.greer@datatables.net</td>
                </tr>
                <tr>
                  <td>Jonas</td>
                  <td>Alexander</td>
                  <td>Developer</td>
                  <td>2010/07/14</td>
                  <td>$86,500</td>
                  <td>j.alexander@datatables.net</td>
                </tr>
                <tr>
                  <td>Shad</td>
                  <td>Decker</td>
                  <td>Regional Director</td>
                  <td>2008/11/13</td>
                  <td>$183,000</td>
                  <td>s.decker@datatables.net</td>
                </tr>
                <tr>
                  <td>Michael</td>
                  <td>Bruce</td>
                  <td>Javascript Developer</td>
                  <td>2011/06/27</td>
                  <td>$183,000</td>
                  <td>m.bruce@datatables.net</td>
                </tr>
                <tr>
                  <td>Donna</td>
                  <td>Snider</td>
                  <td>Customer Support</td>
                  <td>2011/01/25</td>
                  <td>$112,000</td>
                  <td>d.snider@datatables.net</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
        <pre class="mg-b-0"><code class="javascript pd-20">$('#datatable2').DataTable({
  bLengthChange: false,
  searching: false,
  responsive: true
});</code></pre>

      </div><!-- am-pagebody -->
      <div class="am-footer">
        <span>Copyright &copy;. All Rights Reserved. Amanda Responsive Bootstrap 4 Admin Dashboard.</span>
        <span>Created by: ThemePixels, Inc.</span>
      </div><!-- am-footer -->
    </div><!-- am-mainpanel -->

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../lib/jquery-toggles/toggles.min.js"></script>
    <script src="../lib/highlightjs/highlight.pack.js"></script>
    <script src="../lib/datatables/jquery.dataTables.js"></script>
    <script src="../lib/datatables-responsive/dataTables.responsive.js"></script>
    <script src="../lib/select2/js/select2.min.js"></script>

    <script src="../js/amanda.js"></script>
    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
  </body>
</html>
