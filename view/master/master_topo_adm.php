<?php require '../../config/constants.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Car Clube - Oliveira</title>
<link rel="stylesheet" href="<?php echo CSS_URL . 'reset.css';?>"type="text/css" media="all">
<link rel="stylesheet" href="<?php echo CSS_URL . 'layout.css';?>" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo CSS_URL . 'style.css';?>" type="text/css" media="all">
<script type="text/javascript" src="<?php echo JS_URL . 'jquery-1.8.2.min.js';?>" ></script>
<script type="text/javascript" >
	var site_url="<?php echo BASE_URL; ?>";
</script>
<script type="text/javascript" src="<?php echo JS_URL_URL . 'jquery-1.4.2.min.js';?>" ></script>
<script src="<?php echo JS_URL_URL . 'rollover.js';?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo JS_URL_URL . 'script.js';?>"></script>
<!--[if lt IE 7]>
	<link rel="stylesheet" href="<?php echo CSS_URL . 'ie6.css';?>" type="text/css" media="screen">
	<script type="text/javascript" src="<?php echo JS_URL . 'ie_png.js';?>"></script>
	<script type="text/javascript">
		ie_png.fix('.png, h1 a, .box');
	</script>
<![endif]-->
<!--[if lt IE 9]>
  	<script type="text/javascript" src="<?php echo JS_URL . 'html5.js';?>"></script>
  <![endif]-->
</head>	
<body id="page1" onload="MM_preloadImages('images/m1-act.gif','images/m2-act.gif','images/m4-act.gif','images/sair-act.gif')">
<!-- header -->
<header>
	<div class="container" class="header_adm">
		<figure><img src="<?php echo IMG_URL . '1page-header-img.jpg';?>"></figure>
		<figure><img src="<?php echo IMG_URL . '1page-header.jpg';?>"></figure>
		<h1><a href="#	"></a></h1>
		<nav>
			<ul>
				<li><a href="<?php echo BASE_URL . 'controller/redirecionamento/redirAdm.php?menu=1';?>"><img src="<?php echo IMG_URL . 'm1.gif';?>" id="m1"></a></li>
				<li><a href="<?php echo BASE_URL . 'controller/redirecionamento/redirAdm.php?menu=2';?>"><img src="<?php echo IMG_URL . 'm2.gif';?>" id="m2"></a></li>
				<li><a href="<?php echo BASE_URL . 'controller/redirecionamento/redirAdm.php?menu=3';?>"><img src="<?php echo IMG_URL . 'm4.gif';?>" id="m3"></a></li>
				<li><a href="<?php echo BASE_URL . 'controller/redirecionamento/redirAdm.php?menu=4';?>" class="last"><img src="<?php echo IMG_URL . 'sair.gif';?>" id="m4"></a></li>
			</ul>
		</nav>
	</div>
</header>