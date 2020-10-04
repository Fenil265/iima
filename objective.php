<?php
    include('config.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Governance & Administration of Government of National Capital Territory of Delhi (GNTCD)</title>  
        <meta name="keywords" content="Singapore, SIngapore Pub Crawl, Pub Crawl, Singapore Pubs, Pubs, Crawl, pub crawls singapore, nightlife, Singapore nightlife pass" />
        <meta name="description" content="Do you like to party? Experience the best of Singapore’s nightlife in a fun and sociable environment &amp; save a ton of money while doing so!">
        <meta property="og:type" content="website" />
        <meta property="og:ttl" content="2419100" />
        
        <meta property="og:title" content="<?=$config['organizer_name'];?>" />
        <meta property="og:image" content="<?=$config['org_og_image_meta'];?>" />
        <meta property="og:url" content="<?=$config['base_url'];?>" />
        <meta property="og:description" content="<?=$config['org_about'];?>" />

     	<link rel="shortcut icon" type="image/png" href="<?=$config['site_favicon']?>"/>
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">
		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.min.css">
		<link rel="stylesheet" href="css/theme-elements.min.css">

		<link rel="stylesheet" href="css/singapore-pub-crawl.min.css">
		<link rel="stylesheet" href="css/singapore-pub-crawl-skin.min.css"> 
		<script src="vendor/jquery/jquery.min.js"></script>
		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>
		
		<!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({‘gtm.start’:
        new Date().getTime(),event:‘gtm.js’});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!=‘dataLayer’?‘&l=‘+l:‘’;j.async=true;j.src=
        ’https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,‘script’,‘dataLayer’,‘GTM-5L3Q4XD’);</script>
        <!-- End Google Tag Manager -->
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-NXGJRG6');</script>
		<!-- End Google Tag Manager -->
		
	</head>
	<body>
		 <!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXGJRG6"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<div class="body">
			<style type="text/css">
				@media(min-width: 987px) and (max-width: 1200px){
					.thumb-image{
		        		min-height: 151px!important;max-height: 151px!important;object-fit: contain;
		        	}
				}
				@media(max-width: 486px){
	            	.mb-center{
	            		text-align: center!important;
	            	}
	            	.custom-ul{
		            	min-height: 95px!important;
		            }
	        	}
				.anchor{
				  display: block;
				  height: 80px; /*same height as header*/
				  margin-top: -80px; /*same height as header*/
				  visibility: hidden;
				}
				html{
					scroll-behavior: smooth;
				}
				.scroll-to-top{
	                display: none!important;
	            }
	            .custom-ul{
	            	min-height: 145px;
	            }
	        	.custom-ul > li {
	        		color: #2e353e!important;
	        		text-align: left;
	        		margin-left: -25px;
	        	}
	        	.thumb-image{
	        		min-height: 183px;max-height: 183px;object-fit: contain;
	        	}
	        	.thumb-info-caption h4 {
				    min-height: 55px;
				}
				
			</style>
			
			<div role="main" class="main">
				<?php include('topbar.php'); ?>
				<section class="section section-no-border section-light custom-padding-top-1 mb-0" style="padding: 150px;">
					<div class="container">
						<div class="row text-center">
							<div class="col">
								<h1 class="font-weight-bold text-color-primary mb-0 mt-2 mb-5">Objective</h1>
							</div>
						</div>
						<div class="row justify-content-center text-left pt-2 pb-2">
							<div class="col-sm-8 col-lg-10 appear-animation animated fadeInUp appear-animation-visible" data-appear-animation="fadeInUp" data-appear-animation-delay="0" style="animation-delay: 0ms;">
								<ul style="font-size: 1.2rem; line-height: 2">
									<li style="line-height: 1.8">Delhi is governed by multiple administrative agencies such as municipal corporations, state government and union government</li>
									<li style="line-height: 1.8">The Governance structure and administrative procedures have not created a citizen-centric approach to the services offered by GNCTD</li>
									<li style="line-height: 1.8">Responsibilities are divided; Partial Accountability</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

			</div>

			<?php include('footer.php'); ?>
			
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.min.js"></script>

		<script src="js/singapore-pub-crawl.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>
	</body>
</html>
