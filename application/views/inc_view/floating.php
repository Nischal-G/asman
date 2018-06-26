<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<style type="text/css">
		.float{
			display: none;
			position:fixed;
			z-index: 99;
			width:60px;
			height:60px;
			bottom:40px;
			left:40px;
			background-color:#56A7E9;
			color:#FFF;
			border-radius:50px;
			text-align:center;
			box-shadow: 2px 2px 3px #999;
		  	font-size:35px;
		}

		.float:hover
		{
			background-color:#FFF;
			color:#56A7E9;
		}

		.my-float{
			margin-top:10px;
		}
	</style>

<a href="<?=base_url('#home');?>" class="float" id="myBtn">
<i class="fa fa-chevron-up my-float"></i>
</a>

<script type="text/javascript">
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
	        document.getElementById("myBtn").style.display = "block";
	    } else {
	        document.getElementById("myBtn").style.display = "none";
	    }
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	    document.body.scrollTop = 0; // For Safari
	    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
	}
</script>