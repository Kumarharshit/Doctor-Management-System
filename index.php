<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
    <title>Redstar Hospital | Bootstrap Responsive Hospital Admin Template</title>
    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="assets/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--bootstrap -->
    
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="assets/material/material.min.css">
	<link rel="stylesheet" href="css/material_style.css">
	<!-- Theme Styles -->
    <link href="assets/css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" /> 
 </head>
 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
        <?php include 'header.php';?>
        <!-- end header -->
        <!-- start color quick setting -->
      
		<!-- end color quick setting -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<?php include 'sidebar.php'; ?>
            <!-- end sidebar menu --> 
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                   <!-- start widget -->
					<div class="state-overview">
							<div class="row">
						        <div class="col-xl-4 col-md-6 col-12">
						          <div class="info-box bg-blue">
						            <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Appointments</span>
						              <span class="info-box-number">450</span>
						              <div class="progress">
						                <div class="progress-bar" style="width: 45%"></div>
						              </div>
						              
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->
						        <div class="col-xl-4 col-md-6 col-12">
						          <div class="info-box bg-orange">
						            <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Patients</span>
						              <span class="info-box-number">155</span>
						              <div class="progress">
						                <div class="progress-bar" style="width: 40%"></div>
						              </div>
						             
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->
						        <div class="col-xl-4 col-md-6 col-12">
						          <div class="info-box bg-purple">
						            <span class="info-box-icon push-bottom"><i class="material-icons">content</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Doctor's</span>
						              <span class="info-box-number">52</span>
						              <div class="progress">
						                <div class="progress-bar" style="width: 85%"></div>
						              </div>
						              
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->
						       
						        <!-- /.col -->
						      </div>
						</div>
					<!-- end widget -->
                
                   
                     <div class="row">
                        <div class="col-md-8 col-sm-12">
                         <div class="card  card-box">
                                <div class="card-head">
                                	<?php
                                                        include 'dbs/index.php' ;

                                                        $strsql="SELECT fname,lname,mob,email FROM add_patient order by id asc" ;
                                                        $query=mysql_query($strsql) or die('Error Couldn\'t get the data').mysql_error() ;
                                                        $result = mysql_fetch_assoc($query) ;   

                                                        ?>
                                    <header>ADMIT PATIENT LIST</header>
                                    
                                </div>
                                <div class="card-body ">
                                  <div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table">
												<thead>
													<tr>
														
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><?php echo $result['fname'].$result['lname'] ;?></td>
														<td>Jens Brincker</td>
														<td>Dr.Kenny Josh</td>
														<td>27/05/2016</td>
														</tr>
													
												</tbody>
											</table>
										</div>
									</div>	
                                </div>
                            </div>
                        </div>						
                        
                        <div class="col-md-4 col-sm-12">
                            <div class="card  card-box">
                                <div class="card-head">
                                	 <?php
                                                        include 'dbs/index.php' ;

                                                        $strsql="SELECT fname,lname,dept,mob,email FROM add_doc order by id asc" ;
                                                        $query=mysql_query($strsql) or die('Error Couldn\'t get the data').mysql_error() ;
                                                        $result = mysql_fetch_assoc($query) ;   

                                                        ?>
                                    <header>DOCTORS LIST</header>
                                  
                                </div>
                                <div class="card-body no-padding height-9">
                                    <div class="row">
                                        <ul class="docListWindow">
                                            <li>
                                              
                                                <div class="details">
                                                    <div class="title">
                                                       <?php
                                                       echo $result['fname'].$result['lname'] ;?>
                                                    </div>
                                                     <div>
                                                     	<?php

                                                          echo $result['mob'];
                                                     	?>
                                                     </div>   
                                                </div>
                                            </li>
                                            
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- start admited patient list -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                           
                        </div>
                    </div>
                    <!-- end admited patient list -->
                </div>
            </div>
            <!-- end page content -->
                    </div>
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2017 &copy; RedStar Hospital Theme By
            <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">RT Theme maker</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="assets/jquery.min.js" ></script>
    <script src="assets/popper/popper.js" ></script>
    <script src="assets/jquery.blockui.min.js" ></script>
	<script src="assets/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="assets/bootstrap/js/bootstrap.min.js" ></script>
    <script src="assets/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
    <!-- counterup -->
    <script src="assets/counterup/jquery.waypoints.min.js" ></script>
    <script src="assets/counterup/jquery.counterup.min.js" ></script>
    <!-- Common js-->
	<script src="assets/app.js" ></script>
    <script src="assets/layout.js" ></script>
    <script src="assets/theme-color.js" ></script>
    <!-- material -->
    <script src="assets/material/material.min.js"></script>
    <!-- chart js -->
    <script src="assets/chart-js/Chart.bundle.js" ></script>
    <script src="assets/chart-js/utils.js" ></script>
    <script src="assets/chart-js/home-data.js" ></script>
    <!-- end js include path -->
  </body>
</html>