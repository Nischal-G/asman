<header id="fh5co-header-section" class="sticky-banner">
	<div class="container">
		<div class="nav-header">

			<!-- <a href="<?=base_url();?>" ><i></i></a> -->
			<a href="<?=base_url('#home');?>" >
				<img  src="<?=base_url('lib/images/flat_logo.png')?>" width="100px" >
			</a>
			<!-- <h1 id="fh5co-logo"><a href="index.html">ASMAN</a></h1> -->
						<!-- START #fh5co-menu-wrap -->
			<nav id="fh5co-menu-wrap" role="navigation">

				<ul class="sf-menu" id="fh5co-primary-menu">
					<!-- <li class="active">
						<a href="<?=base_url('#home')?>">Home</a>
					</li> -->
					<li>
						<a href="#" class="fh5co-sub-ddown">About</a>
						<ul class="fh5co-sub-menu">
							<li><a href="<?=base_url('#message')?>">Message From the President</a></li>
							<li><a href="<?=base_url('#testimonials')?>">Testimonials</a></li>
						</ul>
                    </li>
                    <li><a href="<?=base_url('#gallery')?>">Gallery</a></li>
                    <li>
						<a href="<?=base_url('#projects')?>" class="fh5co-sub-ddown">Projects</a>
						
						 <ul class="fh5co-sub-menu">
						 	<?php  foreach($cat->result_array() as $ca):?>
						 	<li><a href="<?=base_url('news/project/').$ca['category_id']?>"><?=ucfirst($ca['category_name'])?></a></li>
						 	<?php endforeach;?>
						</ul>
					</li>
					<li><a href="<?=base_url('/team')?>">Team</a></li>
					<li>
						<a href="#" class="fh5co-sub-ddown">Get Involved</a>
						<ul class="fh5co-sub-menu">
							<li><a href="<?=base_url('/home/member')?>">Become a Member</a></li>
							<li><a href="<?=base_url('/home#features')?>">Become a Volunteer</a></li>
							<li><a href="<?=base_url('/home#popup')?>">Donate</a></li>
						</ul>
					</li>
					<li><a href="<?=base_url('contact')?>">Contact</a></li>


				</ul>
			</nav>
		</div>
	</div>
</header>