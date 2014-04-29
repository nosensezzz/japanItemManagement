<?php
/**
 * template 
 * @nosensezzz
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('customizeCSS');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script type="text/javascript" src="/<?= Configure::read('site_name')?>/jquery/jquery-1.9.1.js"></script>
	
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="header_buttons">
			<div id="header_button_wrapper">
				<div id="header_button">
				<img src="/<?=Configure::read('site_name')?>/sucai/xiaomen.png" width=20px height=20px >
				<span>button1</span>
				</div>
				<div id="header_button">
				<img src="/<?=Configure::read('site_name')?>/sucai/configuration.png" width=20px height=20px >
				<span>button2</span>
				</div>
				<div id="header_button">
				<img src="/<?=Configure::read('site_name')?>/sucai/xiaomen.png" width=20px height=20px >
				<span>button3</span>
				</div>
			</div>
			</div>
			
			<div id="header_category_wrapper">
			
			<!--img src="/<?=Configure::read('site_name')?>/sucai/header_category.png" width=1200px height=100px  -->
			
				<ul id="top_virtual_button">
					<li id="ItemRegistration"></li>
					<li id="ItemInBox"></li>
					<li id="Storage"></li>
					<li id="SendInformation"></li>
					<li id="History"></li>
					<li id="Money"></li>
					<li id="FAQ"></li>
				</ul>
			</div>
			
		</div>
		<div id="content">
			<div id="content_border_div">
			<?php //echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			</div>
		</div>
		
		<!--div id="footer"></div-->
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>

<script>
$("#top_virtual_button li").on('click' , function(){
	var controller = this.id;
	window.location.href = "/<?=Configure::read('site_name')?>/" + controller + "/index";
	
});

</script>
</html>
