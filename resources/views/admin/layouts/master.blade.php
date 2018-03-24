<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hencework.com/theme/philbert/full-width-light/inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 06:34:01 GMT -->
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Philbert I Fast build Admin dashboard for any platform</title>
	<meta name="description" content="Philbert is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Philbert Admin, Philbertadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Bootstrap Wysihtml5 css -->
	<link rel="stylesheet" href="../vendors/bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.css" />
		
	<!-- Custom CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	
</head>

<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
    <div class="wrapper theme-1-active pimary-color-green">

		@include('admin.inc.top-menu')
		@include('admin.inc.left-sidebar-menu')
		@include('admin.inc.right-sidebar-menu')
		@include('admin.inc.right-setting')
        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				@yield('content')
			</div>
			@include('admin.inc.footer')
		</div>

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- wysuhtml5 Plugin JavaScript -->
	<script src="../vendors/bower_components/wysihtml5x/dist/wysihtml5x.min.js"></script>
	
	<script src="../vendors/bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
	
	<!-- Bootstrap Wysuhtml5 Init JavaScript -->
	<script src="dist/js/bootstrap-wysuhtml5-data.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Owl JavaScript -->
	<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Switchery JavaScript -->
	<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>
	
</body>


<!-- Mirrored from hencework.com/theme/philbert/full-width-light/inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 06:34:04 GMT -->
</html>