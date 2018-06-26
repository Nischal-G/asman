<!DOCTYPE html>
<html>
<head>
	<title>ASMAN | HOME</title>	

</head>
<?php include 'header/css_inc.php'; ?>
<body>
<div id="home">
	<div id="fh5co-wrapper">
		<div id="fh5co-page">
			<?php 
				$this->load->view('inc_view/messenger_api');
				$this->load->view('inc_view/floating');
				$this->load->view('inc_view/header_menu');
				$this->load->view('view_home/slider');
				$this->load->view('view_home/feature');
				$this->load->view('view_home/message');
				$this->load->view('view_home/gallery');
				$this->load->view('view_home/philanthropist');
				$this->load->view('view_home/project.php');
				$this->load->view('view_home/news');
				$this->load->view('inc_view/footer');
			 ?>
		</div>
	</div>
</div>
<?php include 'header/js_inc.php'; ?>
</body>


</html>