<div id="fh5co-blog-section" class="fh5co-section-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h3>Recent News</h3><!-- 
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p> -->
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row row-bottom-padded-md">
			<?php foreach($news->result_array() as $ne):?>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="fh5co-blog animate-box" onclick="location.href='<?=base_url('news/').$ne['news_title']?>';">
					<a href="<?=base_url('/news')?>"><img class="img-responsive" src="<?=base_url('lib/images/').$ne['news_image']?>" alt=""></a>
					<div class="blog-text">
						<div class="prod-title">
							<h3><a href=""#><?=ucfirst($ne['news_title'])?></a></h3>
							<span class="posted_by"><?=$ne['news_date']?></span>
							<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
							<p><?=$ne['news_objective']?></p>
							<p><a href="<?=base_url('/news')?>">Learn More...</a></p>
						</div>
					</div> 
				</div>
			</div>
			<?php endforeach; ?>

		
			<!-- div class="col-lg-4 col-md-4 col-sm-6">
				<div class="fh5co-blog animate-box">
					<a href="<?=base_url('/home/news')?>"><img class="img-responsive" src="<?=base_url('lib/images/cover_bg_2.jpg')?>" alt=""></a>
					<div class="blog-text">
						<div class="prod-title">
							<h3><a href="#">Medical Mission in Southern Kenya</a></h3>
							<span class="posted_by">Sep. 15th</span>
							<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="#">Learn More...</a></p>
						</div>
					</div> 
				</div>
			</div>
			<div class="clearfix visible-sm-block"></div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="fh5co-blog animate-box">
					<a href="<?=base_url('/home/news')?>"><img class="img-responsive" src="<?=base_url('lib/images/cover_bg_3.jpg')?>" alt=""></a>
					<div class="blog-text">
						<div class="prod-title">
							<h3><a href=""#>Medical Mission in Southern Kenya</a></h3>
							<span class="posted_by">Sep. 15th</span>
							<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="#">Learn More...</a></p>
						</div>
					</div> 
				</div>
			</div>
			<div class="clearfix visible-md-block"></div> -->
		</div>

		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center animate-box">
				<a href="<?=base_url('/news')?>" class="btn btn-primary btn-lg">Our Blog</a>
			</div>
		</div>

	</div>
</div>