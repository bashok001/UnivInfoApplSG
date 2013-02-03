<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>"<?php echo $this -> template -> title -> prepend('Studies Global - '); ?>"</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="<?php echo $this -> template -> description; ?>" />
		<?php $this -> template -> meta -> add('robots', 'index,follow'); ?>
		<?php echo $this -> template -> meta; ?>
		<link rel="stylesheet" href="http://localhost/univapp/css/univapp-core.css" type="text/css" media="all" />
		<link rel="stylesheet" href="http://localhost/univapp/js/jQueryUI192/themes/cynic/jquery-ui-1.9.2.css" type="text/css" media="all" />
		<?php echo $this -> template -> stylesheet; ?>
		<script src="http://localhost/univapp/js/jQuery183/jquery-1.8.3.js" type="text/javascript"></script>
		<script src="http://localhost/univapp/js/jQueryUI192/jquery-ui-1.9.2.js" type="text/javascript"></script>
		<script src="http://localhost/univapp/js/jQuery183/jquery.hotkeys.js" type="text/javascript"></script>
		<script src="http://localhost/univapp/js/jQuery183/jquery.vticker-min.js" type="text/javascript"></script>
		<script src="http://localhost/univapp/js/univapp-core.js" type="text/javascript"></script>
		<?php echo $this -> template -> javascript; ?>
		<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
		<!-- PNG FIX for IE6 -->
		<!--[if lte IE 6]><script type="text/javascript" src="js/pngfix/supersleight-min.js"></script><![endif]-->
		<link rel="shortcut icon" href="http://localhost/univapp/img/logo-part.png" />
	</head>
	<body>
		<?php // Login Panels
		echo $this -> template -> _login -> widget('login', array('auth' => '1'), $overwrite = TRUE);
		?>

		<div class="shell">
			<div class="border">
				<div id="header">
					<?php echo $this -> template -> _header; ?>
				</div>
				<div id="navigation">
					<?php // Navigation and Search
					echo $this -> template -> _navigation;
					?>
				</div>
				<div id="main">
					<div id="content" class="left">
						<?php echo $this -> template -> _content; ?>
					</div>
					<div id="sidebar" class="right">
						<?php echo $this -> template -> _sidebar; ?>
					</div>
				</div>
				<div class="shadow-l"></div>
				<div class="shadow-r"></div>
				<div class="shadow-b"></div>
			</div>
			<div id="footer">
				<?php echo $this -> template -> _footer; ?>
			</div>
		</div>
	</body>
</html>