<style type="text/css">
	.li-social-font-size {
		font-size: 20px!important;
	}
	.social-icons li:hover.social-icons-top-icon a {
				background: #21c0e8ff;
	}		
</style>
<footer id="footer" class="background-color-quaternary">
				<div class="container">
					<div class="row text-center mb-5 pt-5 pb-3">
						<div class="col-lg-3 custom-sm-margin-bottom-1">
							<a href="<?=$config['base_url'];?>" class="text-decoration-none" style="font-size: 2rem;font-weight: 600;">
								<img alt="<?=$config['organizer_name']?>" title="<?=$config['organizer_name']?>" width="100" class="img-fluid custom-img-fluid-center" src="https://www.iima.ac.in/image/journal/articlef1a1.png?img_id=30640377&t=1589955230668" >
							</a>
						</div>
						<div class="col-lg-3 custom-sm-margin-bottom-1">
							<i class="fa fa-map-marker text-color-primary custom-icon-size-1"></i>
							<p class="custom-text-color-2">
								<strong class="text-color-light">Location</strong></br>
								<a class="text-decoration-none custom-text-color-2" href="<?=$config['org_map_location_url']?>" target="_blank" title="Location">Indian Institute of Management Ahmedabad</a>
							</p>
						</div>						
						<div class="col-lg-3">
							<i class="fa fa-volume-control-phone text-color-primary custom-icon-size-1"></i>
							<p>
								<strong class="text-color-light">Contact us now</strong></br>
								<a href="tel: <?=$config['org_contact_no'];?>" class="text-decoration-none custom-text-color-2">Phone : <?=$config['org_contact_no'];?></a></br>
								<a href="mail:<?=$config['org_email'];?>" class="text-decoration-none custom-text-color-2">Email : <?=$config['org_email'];?></a>
							</p>
						</div>
						<div class="col-lg-3 custom-sm-margin-bottom-1">
							<ul class="social-icons custom-social-icons">
								<li class="social-icons-facebook"><a href="<?=$config['org_fb_page_id'];?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li class="social-icons-instagram"><a href="<?=$config['org_insta_page_id'];?>" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>								
								<li class="social-icons-twitter"><a href="<?=$config['org_twitter_page_id'];?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>	
					</div>
					<div class="row mt-2 text-center">
							<div class="col-lg-12" style="margin-bottom: 20px;">
								<p class="custom-text-color-2">© Copyright 2020. All Rights Reserved</p>
							</div>
						</div>
				</div>
			</footer>