<?php include 'config.php'; ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<?php include 'header.php'; ?>
<body>
	<div id="pre_header" class="visible-lg"></div>
            <?php include 'top_menu.php'; ?>
		<!-- === END HEADER === -->
		<!-- === BEGIN CONTENT === -->
		<div id="content" class="container">
                    
			
			
			<div class="row margin-vert-30">
				<!-- Main Text -->
				<div class="col-md-12">
					<h2>Voter Functionality:</h2>
                                        <ul>
                                            <li>Voter have to register for online voting.</li>
                                            <li>Viewing the various parties involved in election in their precinct. </li> 
                                            <li>Can view the party information like what’s the motive, founder, Logo. </li>
                                            <li>Comparing the candidate profile.</li>
                                        </ul>
                                        
				</div>
                                
                                <div class="col-md-12" style="padding-top:15px">
					<h2>Candidate Functionality:</h2>
                                        <ul>
                                            <li>Can view their information.</li>
                                            <li>Candidate can update their profile information like photograph, address, campaign information for high visibility to voters.</li>
                                        </ul>
				</div>
				
			</div>
			<div class="row">
				<!-- Portfolio -->
				<!-- Portfolio Item -->
				<div class="portfolio-item col-sm-4 animate fadeIn">
					<div class="image-hover">
                                            <a onclick="voter_insert_check()">
							<figure>
                                                            <img src="resources/reg_vote.png" alt="image1">
								<div class="overlay">
									
								</div>
							</figure>
                                                    </a>
                                            <h3 class="margin-top-20"><strong> Register as Voter </strong></h3>
                                            <p class="margin-top-10 margin-bottom-20" id="user_message">&nbsp;</p>
							
						
					</div>
				</div>
				<!-- //Portfolio Item// -->
				<!-- Portfolio Item -->
				<div class="portfolio-item col-sm-4 animate fadeIn">
					<div class="image-hover">
                                                <a onclick="cast_vote_check()">
							<figure>
                                                            <img src="resources/vote.png"  alt="image2">
								<div class="overlay">
									
								</div>
							</figure>
                                                </a>
                                            <h3 class="margin-top-20"><strong>Cast Vote</strong></h3>
                                            <p class="margin-top-10 margin-bottom-20" id="user_message_1">&nbsp;<?php if(isset($_REQUEST['user_message_1'])) echo $_REQUEST['user_message_1'] ?></p>
                                            
					</div>
				</div>
				<!-- //Portfolio Item// -->
				<!-- Portfolio Item -->
				<div class="portfolio-item col-sm-4 animate fadeIn">
					<div class="image-hover">
						
							<figure>
                                                            <img src="resources/analytics.png" alt="analysis">
								<div class="overlay">
									
								</div>
							</figure>
                                            <h3 class="margin-top-20"><strong>Analytics</strong></h3>
                                            <p class="margin-top-10 margin-bottom-20">&nbsp;</p>
						
					</div>
				</div>
				<!-- //Portfolio Item// -->
				<!-- End Portfolio -->
			</div>
			
		</div>
	</div>
	<!-- === END CONTENT === -->
	<!-- === BEGIN FOOTER === -->
	<?php include 'base.php'; ?>
		<!-- Footer Menu -->
		<?php include 'footer.php'; ?>
	</div>
	<!-- End Footer Menu -->
</div>
</div>
<!-- JS -->
<script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/scripts.js"></script>
<!-- Isotope - Portfolio Sorting -->
<script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
<!-- Mobile Menu - Slicknav -->
<script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
<!-- Animate on Scroll-->
<script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
<!-- Slimbox2-->
<script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
<!-- Modernizr -->
<script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
<!-- End JS -->
</body>
</html>
<!-- === END FOOTER === -->