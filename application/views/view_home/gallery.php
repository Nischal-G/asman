<div id="gallery">
	<div id="fh5co-portfolio">
		<div class="">

			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
					<h3>Our Activities</h3>
					<!-- <p>Sub Headings</p> -->
				</div>
			</div>
			<?php $ne=$cat->result_array(); ?>
				<div class="row row-bottom-padded-md">
					<div class="col-md-12">
						<ul id="fh5co-portfolio-list">

							<li class="grayh two-third animate-box " data-animate-effect="fadeIn" style="background-image: url(<?=base_url('lib/images/').$ne[1]['image']?>); ">						
								<a href="#" class="color-3">
									<div class="case-studies-summary">
										<span style="color: #D3D3D3;font-size: 20px;"><?php echo $ne[1]['caption']; ?></span>
										<h2><?php echo $ne[1]['category_name']; ?></h2>
									</div>
								</a>
							</li>

						
							<li class="one-third animate-box grayh" data-animate-effect="fadeIn" style="background-image: url(<?=base_url('lib/images/').$ne[0]['image']?>); ">
								<a href="#" class="color-4">
									<div class="case-studies-summary">
										<span style="color: #D3D3D3;font-size: 20px;"><?php echo $ne[0]['caption']; ?></span>
										<h2><?php echo $ne[0]['category_name']; ?></h2>
									</div>
								</a>
							</li>

							<li class="one-third animate-box grayh" data-animate-effect="fadeIn" style="background-image: url(<?=base_url('lib/images/').$ne[3]['image']?>); "> 
								<a href="#" class="color-5">
									<div class="case-studies-summary">
										<span style="color: #D3D3D3;font-size: 20px;"><?php echo $ne[3]['caption']; ?></span>
										<h2><?php echo $ne[3]['category_name']; ?></h2>
									</div>
								</a>
							</li>
							<li class="two-third animate-box grayh" data-animate-effect="fadeIn" style="background-image: url(<?=base_url('lib/images/').$ne[2]['image']?>); ">
								<a href="#" class="color-6">
									<div class="case-studies-summary">
										<span style="color: #D3D3D3;font-size: 20px;"><?php echo $ne[2]['caption']; ?></span>
										<h2><?php echo $ne[2]['category_name']; ?></h2>
									</div>
								</a>
							</li>
						</ul>		
					</div>
				</div>
<!-- 
			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center animate-box">
					<a href="#" class="btn btn-primary btn-lg">See More</a>
				</div>
			</div> -->
			
			
		</div>
	</div>
</div>