<div id="team_profile"><br>
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
			<h3>Our Team</h3>
				<!-- <p>Take a closer look. We won't bite !</p> -->
		</div>
	</div>


	<div class="row row-bottom-padded-md">
		<div class="">
		    <div class="container">
		        <div class="row">
		        	<?php foreach($team->result_array() as $t): ?>
		        	<div class="col-md-3 col-sm-6">
		        		<div class="our-team">
		                    <img src="<?=base_url('lib/images/teams/'.$t['sw_image'])?>" alt="<?=ucfirst($t['sw_name'])?>"/>
		                    
		                    <div class="team-content">
		                        <h3 class="team-prof">
		                            <a href="#"><?=ucfirst($t['sw_name'])?></a>
		                            <small><?=ucfirst($t['sw_desg'])?></small>
		                        </h3>
		                        <ul class="social-link">
		                            <li><a href="<?=$t['sw_fb']?>" target="_blank" class="fa fa-facebook" ></a></li>
		                            <!-- <li><a href="<?=$t['sw_googleplus']?>" target="_blank" class="fa fa-google"></a></li> -->
		                            <li><a href="<?=$t['sw_twitter']?>" target="_blank" class="fa fa-twitter"></a></li>
		                            <!--<li><a href="<?=$t['sw_instagram']?>" class="fa fa-instagram"></a></li> -->
		                            <li><a href="<?="mailto:".$t['sw_email']?>" target="_blank" class="fa fa-envelope"></a></li>
		                        </ul>
		                    </div>
		                </div>
		            </div>
		            <?php endforeach;?>
		        </div>
		    </div>
		</div>
	</div>

</div>