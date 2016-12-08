<!-- === BEGIN HEADER === -->
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
			<div class="row margin-top-30">
				<div class="col-md-12 text-center">
					<h2 class="text-center">Login Form</h2>
				</div>
			</div>
			
			
			<div class="row">
				<!-- Portfolio -->
				<!-- Portfolio Item -->
				<div class="portfolio-item col-sm-12 animate fadeIn">
                                    <div class="image-hover" style="margin-left: 350px;">
                                            <form name="user_login" action="process_page/user_login_submit.php" method="POST">
                                                <table class="tbl-sm-2 user_reg">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="2"> &nbsp; </td> 
                                                        </tr>
                                                        <tr>
                                                            <td>Email Id:-</td>
                                                            <td><input type="email" name="email" value="" size="25" required/></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Password:-</td>
                                                            <td><input type="password" name="pass" value="" size="25" required/></td>                                                           
                                                        </tr>
                                                        
                                                        
                                                        <tr>
                                                            <td colspan="6" style="text-align: center"><input type="submit" name="Submit" value="Submit"></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" style="color: red; text-align: center"> 
                                                                <?php 
                                                                    if(isset($_GET['user_msg']))
                                                                        echo $_GET['user_msg'];
                                                                
                                                                ?>
                                                            </td> 
                                                        </tr>
                                                        
                                                    </tbody>


                                                </table>
                                            </form>
					</div>
				</div>
				
			</div>
			<div class="row">
				<h2 class="text-center margin-top-10"></h2>
				<p class="text-center margin-bottom-30"></p>
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