<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php echo $title;?></title>
		
		<meta name="description" content="<?php echo $description;?>">
		<!-- Google will often use this as its description of your page/site. Make it good. -->
		
		<meta name="google-site-verification" content="">
		<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
		
		<meta name="author" content="Pablo Sánchez Lozano, Ignacio Soriano Cano y Pablo Ángel Velasco Molinero">
		<meta name="Copyright" content="Copyright Fokar 2012. All Rights Reserved.">
	
		<!-- Le styles -->
		<link href="<?php echo $this->config->item('resources');?>css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo $this->config->item('resources');?>css/bootstrap-responsive.css" rel="stylesheet">
		
		<!-- js -->
		<script type="text/javascript" src="<?php echo $this->config->item('resources');?>js/functions.js"></script>
		
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
	    
	    <!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="img/favicon.ico">
		<!-- This is the traditional favicon.
			 - size: 16x16 or 32x32
			 - transparency is OK
			 - see wikipedia for info on browser support: http://mky.be/favicon/ -->
	
			 
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<!-- The is the icon for iOS's Web Clip.
			 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
			 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
			 - Transparency is not recommended (iOS will put a black BG behind the icon) -->
		
	</head>
	<body>