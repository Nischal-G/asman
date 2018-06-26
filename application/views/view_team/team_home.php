<!DOCTYPE html>
<html>
<head>
	<title>TEAM | ASMAN</title>
</head>
<?php include 'header/css_inc.php'; ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url('lib/css/team_style.css')?>">
<body>
<div id="home">
	<div id="fh5co-wrapper">
		<div id="fh5co-page">
			<?php 
				$this->load->view('inc_view/messenger_api');
				$this->load->view('inc_view/floating');
				$this->load->view('inc_view/header_menu');
				$this->load->view('view_team/team');
				$this->load->view('inc_view/footer');
				// foreach($team->result_array() as $p)
				// {
				// 	echo "<pre>".print_r($p)."</pre>";
				// }
			 ?>
		</div>
	</div>
</div>
<?php include 'header/js_inc.php'; ?>
</body>

</html>