<div id="fh5co-features">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="feature-left" onclick="location.href='<?=base_url('/home/member/member_form')?>';" style="cursor: pointer;">
					<span class="icon">
						<i class="icon-profile-male"></i>
					</span>
					<div class="feature-copy">
						<h3>Become a Member</h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
						<p><a href="<?=base_url('/home/member/member_form')?>">Learn more</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="feature-left">
					<span class="icon">
						<i class="icon-happy"></i>
					</span>
					<div class="feature-copy">
						<h3>Become a volunteer</h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
						<p><a href="#">Learn More</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="feature-left" onclick="location.href='<?=base_url('/home#popup')?>';" style="cursor: pointer;">
					<span class="icon">
						<a href="<?=base_url('/home#popup')?>"><i class="icon-wallet"></i></a>
					</span>
					<div class="feature-copy">
						<h3>Make a Donation</h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
						<p><a href="<?=base_url('/home#popup')?>">Learn More</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="popup" id="popup">
	    <div class="popup-inner" style="margin-top: 100px">
	      <div class="popup__photo">
	        <img src="<?=base_url('lib/images/form-modal/image2.JPG')?>" alt="">
	       <!--  https://images.unsplash.com/photo-1515224526905-51c7d77c7bb8?ixlib=rb-0.3.5&s=9980646201037d28700d826b1bd096c4&auto=format&fit=crop&w=700&q=80 -->
	      </div>
	      <div class="popup__text">
	        <h1>Make a Donation !</h1>
	        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ex velit, viverra non vulputate vitae, blandit vitae nisl. Nullam fermentum orci et erat viverra bibendum. Aliquam sed varius nibh, vitae mattis purus. Mauris elementum sapien non ullamcorper vulputate. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed eget felis sit amet eros viverra pulvinar.</p>
	      </div>
	      <a class="popup__close" href="<?=base_url('/home')?>">X</a>
	    </div>
	  </div>
</div>
