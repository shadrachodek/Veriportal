<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Imo Portal</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="./assets/css/light-bootstrap-dashboard.css?v=1.4.1" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="./assets/css/demo.css" rel="stylesheet" />

    <link href="./assets/css/custom.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> 
    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'> -->
    <link href="./assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="./assets/img/full-screen-image-3.jpg">
        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <!-- Side Bar Starts Here -->

        <div class="logo">
            <img class="mx-auto d-block" src="./assets/img/logo.png" />
        </div>

    	<div class="sidebar-wrapper">
            
			<ul class="nav">
				<li >
					<a href="dashboard.html">
						<i class="pe-7s-graph"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li >
					<a href="document-owners.html">
                        <i class="pe-7s-user"></i>
                        <p>Owners
                          
                        </p>
                    </a>
					
				</li>
				<li>
					<a data-toggle="collapse" href="#formsExamples">
                        <i class="pe-7s-copy-file"></i>
                        <p>Document
                           <b class="caret"></b>
                        </p>
                    </a>
					<div class="collapse" id="formsExamples">
						<ul class="nav">
							<li>
                                    <a href="index.blade.php">
									<i class="fa fa-file-archive-o"></i>
									<span class="sidebar-normal">Documents List</span>
								</a>
							</li>
							<li class="active">
								<a href="document-batches.html">
									<i class="fa fa-clone"></i>
									<span class="sidebar-normal">Documents Batches</span>
								</a>
							</li>
							<li>
                                <a href="document-approved.html">
									<i class="fa fa-check"></i>
									<span class="sidebar-normal">Documents Approved</span>
								</a>
							</li>
							<li>
								<a href="document-declined.html">
									<i class="fa fa-close"></i>
									<span class="sidebar-normal">Documents Declined</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li >
                        <a data-toggle="collapse" href="#formsDropdown">
                            <i class="pe-7s-note2"></i>
                            <p>Stock Management
                               <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="formsDropdown">
                            <ul class="nav">
                                <li>
                                    <a href="stock-management-item.html">
                                        <i class="fa fa-bars"></i>
                                        <span class="sidebar-normal"> Items </span>
                                    </a>
                                </li>
                                <li >
                                    <a href="stock-management-material-request.html">
                                        <i class="fa fa-hourglass"></i>
                                        <span class="sidebar-normal"> Material Request </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="stock-management-receive-item.html">
                                        <i class="fa fa-arrow-down"></i>
                                        <span class="sidebar-normal"> Receive Items </span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                </li>
                
				<li>
					<a href="print-management.html">
                        <i class="pe-7s-print"></i>
                        <p>Print Management
                      
                        </p>
                    </a>
	
                </li>
                
				<li>
                    <a href="reports.html">
                        <i class="pe-7s-graph3"></i>
                        <p>Reports</p>
                    </a>
                </li>

                <li>
                    <a href="user-management.html">
                        <i class="pe-7s-users"></i>
                        <p>Usermanagement</p>
                    </a>
                </li>
				<li>
					<a href="setting.html">
                        <i class="pe-7s-config"></i>
                        <p>Settings
                          
                        </p>
                    </a>
					
				</li>
            </ul>
            
            <div class="fixed-footer"> <p class="text-muted"> Powered by: Verisys.ng </p>  </div>

    

        </div>
        
        

    </div>

    <!-- Sidebar Ends Here -->

    
       <!-- Main Container starts here -->

    <div class="main-panel">

        <!-- Top bar Starts Here -->

		<nav class="navbar navbar-default">
			<div class="container-fluid">

                     <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                          
                        </div>
				<div class="collapse navbar-collapse">

					<form class="navbar-form navbar-left navbar-search-form" role="search">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-search"></i></span>
							<input type="text" value="" class="form-control" placeholder="Search...">
						</div>
					</form>

					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="charts.html">
								<i class="fa fa-line-chart"></i>
								<p>Stats</p>
							</a>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell-o"></i>
								<span class="notification">5</span>
								<p class="hidden-md hidden-lg">
									Notifications
									<b class="caret"></b>
								</p>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Notification 1</a></li>
								<li><a href="#">Notification 2</a></li>
								
							</ul>
                        </li>
                        
                         
                           
                    

						<li class="dropdown dropdown-with-icons">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								
								<p class="">
									Tania Andrew
									<b class="caret"></b>
                                </p>
                                
                            </a>
                           

							<ul class="dropdown-menu dropdown-with-icons">
								<li>
									<a href="#">
										<i class="pe-7s-mail"></i> Messages
									</a>
								</li>
								<li>
									<a href="#">
										<i class="pe-7s-help1"></i> Help Center
									</a>
								</li>
								<li>
									<a href="#">
										<i class="pe-7s-tools"></i> Settings
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">
										<i class="pe-7s-lock"></i> Lock Screen
									</a>
								</li>
								<li>
									<a href="#" class="text-danger">
										<i class="pe-7s-close-circle"></i>
										Log out
									</a>
                                </li>
                                
							</ul>
                        </li>
                        <img class="photo" src="assets/img/default-avatar.png" />
                    </ul>

                    
                    
                    

				</div>
			</div>
		</nav>
        <!-- Top bar Ends Here -->

        <div class="main-content">
            <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-4">

                            <div class="status-check">
                                <p> Status</p>
                                <h5 class="title declined"> Declined</h5>
        
                             </div>

                        </div>


                        <div class="col-md-4 col-md-offset-4 text-right">

                                <button class="btn tweaked-margin btn-success btn-fill small-btn "><i class="fa fa-check"></i><a href="#exampleModalCenter" data-toggle="modal" data-target="#exampleModalCenter"> Approve</a></button>

                        </div>

                    </div>

                <div class="row modal-modifier doc-view">

                    <!-- Left Panel Starts here-->
                    
                    <div class="col-md-6">
                        <div class="card ">

                            <div class="card-inner-spacer bottom-buffer">
                               <!-- ********first row******** -->
                                <div class="row border-bottom">

                                        <div class="col-md-3  col-sm-6 col-xs-6">
                                            <h5>First Name</h5>
                                            <h3>Oluseye</h3>

                                        </div>

                                        <div class="col-md-3  col-sm-6 col-xs-6">
                                            <h5>Middle Name</h5>
                                            <h3>Craig</h3>
                                        </div>

                                        <div class="col-md-3  col-sm-6 col-xs-6">
                                            <h5>Last Name</h5>
                                            <h3>Adebola</h3>
                                        </div>

                                        <div class="col-md-3  col-sm-6 col-xs-6">
                                            <h5>Unique id #</h5>
                                            <h3>5247352921</h3>
                                        </div>

                                </div>
                                    <!-- ********first row******** -->

                                    <!-- ********Second row******** -->

                                    <div class="row border-bottom">

                                            <div class="col-md-3  col-sm-6 col-xs-6">
                                                <h5>Date of Birth</h5>
                                                <h3>Jun 10 1984</h3>
                
                                            </div>
                
                                            <div class="col-md-3  col-sm-6 col-xs-6">
                                                <h5>Marital Status</h5>
                                                <h3>Married</h3>
                                            </div>
                
                                            <div class="col-md-6  col-sm-6 col-xs-6">
                                                <h5>Occupation</h5>
                                                <h3>Capentry</h3>
                                            </div>
                
                                            
                
                                    </div>

                                    <!-- ********Second row******** -->

                                    <!-- ********Thirdrow******** -->

                                    <div class="row border-bottom">

                                            <div class="col-md-12  col-sm-12 col-xs-12">
                                                <h5>Street Address</h5>
                                                <h3>1024, Adekunle Fajuyi way, Off Awolowo Way</h3>
                
                                            </div>
                
                                    </div>


                                    <!-- ********Thirdrow******** -->

                                    <!-- ********Fourthrow******** -->
                                    <div class="row border-bottom">

                                            <div class="col-md-3  col-sm-6 col-xs-6">
                                                <h5>City</h5>
                                                <h3>Ikeja</h3>
                
                                            </div>
                
                                            <div class="col-md-3  col-sm-6 col-xs-6">
                                                <h5>LGA/LCDA</h5>
                                                <h3>Ikeja</h3>
                                            </div>
                
                                            <div class="col-md-6  col-sm-6 col-xs-6">
                                                <h5>Nearest Bust-Stop</h5>
                                                <h3>Ikeja</h3>
                                            </div>
                
                                                
                                    </div>


                                    <!-- ********Fourthrow******** -->

                                    <!-- ********Fifthrow******** -->
                                    <div class="row border-bottom">

                                            <div class="col-md-3  col-sm-6 col-xs-6">
                                                <h5>Telephone</h5>
                                                <h3>08178611220</h3>
                
                                            </div>
                
                                            <div class="col-md-3  col-sm-6 col-xs-6">
                                                <h5>Mobile</h5>
                                                <h3>0807652435</h3>
                                            </div>
                
                                            <div class="col-md-6  col-sm-6 col-xs-6">
                                                <h5>Email</h5>
                                                <h3>Olurot@yhaoo.com</h3>
                                            </div>

                                    </div>

                                    <!-- ********Fifthrow******** -->
                                </div>
<!--*****************************************************************************************************************-->
                                <!-- Profile picture and signature starts here-->
                            <div class="doc-view-footer card-inner-spacer">

                                
                                        <div class="col-md-2">

                                                <div class="avata">
                    
                                                <img class="img border-gray " src="assets/img/faces/face-2.jpg" alt="photo">
                    
                                                </div>
                    
                                        </div>

                                        <div class="col-md-8 col-md-offset-1 data-cap-white">

                                                <div class="signature">
                                                <img src="assets/img/signature.png" alt="owner's signature">
                                                        
                                        </div>            
                            </div> <!-- Profile picture and signature ends here-->
                            </div> 
                        </div>
                </div><!-- Left Panel ends here-->
          
                
                    
                    <div class="col-md-6"> <!-- right Panel Starts here-->
                        <div class="card card-inner-spacer">
                                    <h2> Documents </h2>

                            <div class="row ">

                                <div class="col-md-6">

                                    <p>Document Type</p>
                                    <h3>Certificate of Occupancy</h3>
                                        
                                </div>

                                <div class="col-md-6">
                                    <div class="text-right">
                                        <p>Document ID</p>
                                        <h3>#784788387</h3>
                                    </div>
                                </div>

                        </div>

                        <!--***************************************************-->

                        <div class="row border-bottom">

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>House Number / Plot Number</h5>
                                    <h3>134</h3>
    
                                </div>
    
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5> Street Name </h5>
                                    <h3>Omiddili Road</h3>
                                </div>
     
                        </div>

                        <div class="row border-bottom">

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>City</h5>
                                    <h3>Ikeja</h3>
    
                                </div>
    
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5> Local Government </h5>
                                    <h3>Ikeja Local Government</h3>
                                </div>
     
                        </div>

                        <div class="row border-bottom">

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h5>Survey Plan Number</h5>
                                    <h3>732982647736477</h3>
    
                                </div>
    
                        </div>

                        <div class="row border-bottom">

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>Dimension Area (SQM)</h5>
                                    <h3>Ikeja</h3>
    
                                </div>
    
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5> Development Period </h5>
                                    <h3>2 Years</h3>
                                </div>
     
                        </div>

                        <div class="row border-bottom">

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>Purpose of Use</h5>
                                    <h3>Residential</h3>
    
                                </div>
    
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5> Commencement Year </h5>
                                    <h3>2016</h3>
                                </div>
     
                        </div>

                        <div class="row border-bottom">
 
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5>Building Value</h5>
                                    <h3>27,000,000.00</h3>
    
                                </div>
    
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5> Yearly Rent Payable </h5>
                                    <h3>135,000.00</h3>
                                </div>
     
                        </div>

                        <div class="row border-bottom">
 
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5> Term </h5>
                                    <h3> 99 years </h3>
    
                                </div>
    
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h5> revision period </h5>
                                    <h3>10 years</h3>
                                </div>
     
                        </div>

                                 
                    </div>

                </div><!-- right Panel endshere-->


                <div class="col-md-3 text-right col-md-offset-5">

                        <button class="btn bottom-buffer-3 btn-success btn-fill small-btn btn-block"><a href="#">Next</a><i class="fa fa-angle-right"></i></button>

                </div>

                            
        </div> <!-- row ends here ---->


       
      </div>
     
    </div>
  </div>
</div>


            </div>
        </div>


        

    </div>
</div>


</body>

    <!--   Core JS Files  -->

    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- <script src="assets/js/core/popper.min.js"></script> -->


	<!--  Forms Validations Plugin -->
	<script src="assets/js/jquery.validate.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="assets/js/moment.min.js"></script>
    
    <script src="assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <!--  Select Picker Plugin -->
    <script src="assets/js/bootstrap-selectpicker.js"></script>

	<!--  Checkbox, Radio, Switch and Tags Input -->
		<script src="assets/js/bootstrap-switch-tags.min.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!-- Sweet Alert 2 plugin -->
	<script src="assets/js/sweetalert2.js"></script>

    <!-- Vector Map plugin -->
	<script src="assets/js/jquery-jvectormap.js"></script>

    <!--  Google Maps Plugin    -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->

	<!-- Wizard Plugin    -->
    <script src="assets/js/jquery.bootstrap.wizard.min.js"></script>

    <!--  Bootstrap Table Plugin    -->
    <script src="./assets/js/bootstrap-table.js"></script>

	<!--  Plugin for DataTables.net  -->
    <script src="assets/js/jquery.datatables.js"></script>

   


    <!--  Full Calendar Plugin    -->
    <script src="assets/js/fullcalendar.min.js"></script>

    <!-- Light Bootstrap Dashboard Core javascript and methods -->
	<script src="./assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
        $(document).ready(function() {
            $('#datatables').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                responsive: true,
                language: {
                search: "_INPUT_",
                searchPlaceholder: "unique Ids",
                }
    
            });
    
    
            var table = $('#datatables').DataTable();
    
            // // Edit record
            // table.on( 'click', '.edit', function () {
            //     $tr = $(this).closest('tr');
    
            //     if($tr.hasClass('child')){
            //         $tr = $tr.prev('.parent');
            //     }
    
            //     var data = table.row($tr).data();
            //     alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
            // } );
    
            
    
            
        });
    
        </script>

</html>
