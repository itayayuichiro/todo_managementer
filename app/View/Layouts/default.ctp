<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Bootstrap core CSS -->
	<?php echo $this->Html->css('bootstrap.min.css'); ?>
	<!-- Custom styles for this template -->
	<?php echo $this->Html->css('round-about.css'); ?>
	<?php echo $this->Html->css('round-about.css'); ?>
	<?php echo $this->Html->script('jquery.min.js'); ?>
	<?php echo $this->Html->script('popper.min.js'); ?>
	<?php echo $this->Html->script('bootstrap.min.js'); ?>
	<title>
		TODOリスト
	</title>
</head>
<body>
	<!--header_parts-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	  <div class="container">
		<?php
		print(
			$this->Html->link(
				'TODOリスト',
				array(
					'controller' => 'tasks',
					'action' => 'index'
				),
				array(
					'class' => 'navbar-brand',
				)
			)
		);
		?>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
		  <ul class="navbar-nav ml-auto">
			<li class="nav-item">
			<?php
				print(
					$this->Html->link(
						'検索',
						array(
							'controller' => 'tasks',
							'action' => 'search'
						),
						array(
							'class' => 'navbar-brand',
						)
					)
				);
			?>
			</li>
		  </ul>
		</div>
	  </div>
	</nav>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-105760530-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<script type="text/javascript">
		window._pt_lt = new Date().getTime();
		window._pt_sp_2 = [];
		_pt_sp_2.push('setAccount,4190bd84');
		var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
		(function() {
			var atag = document.createElement('script'); atag.type = 'text/javascript'; atag.async = true;
			atag.src = _protocol + 'js.ptengine.jp/pta.js';
			var stag = document.createElement('script'); stag.type = 'text/javascript'; stag.async = true;
			stag.src = _protocol + 'js.ptengine.jp/pts.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(atag, s); s.parentNode.insertBefore(stag, s);
		})();
	</script>
	<!--header_parts-->


	<div class="container">
		<?php 
		echo $this->fetch('content');
		 ?>
	</div>

	<!-- Footer -->
	<footer class="py-5 bg-dark">
	  <div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
	  </div>
	  <!-- /.container -->
	</footer>
</body>
</html>
