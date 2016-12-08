<?php 
    include 'config.php'; 
    include("includes/fusioncharts.php");
?>
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
			<div class="row margin-top-30" >
				<div class="col-md-12 text-center">
                                    <h2 class="text-center">Election - Winning Candidate</h2> 
				</div>
			</div>
                    
                    
                        <div class="row">
				<!-- Portfolio -->
				<!-- Portfolio Item -->
                                <div class="portfolio-item col-sm-12 animate fadeIn" id="user-chart_container" style="min-height: 200px">
                                    <div style="margin: 20px 125px">
                                        <div name="precinct" style="display: inline-block"> 
                                        <?php
                                        $res = $mysqli->query("select precinct_id, precinct_division from precinct order by precinct_id ");

                                        $precinct = $res->fetch_all();
                                        $row_count = $res->num_rows;
                                        $res->close();
                                        $mysqli->next_result();

                                        echo "<b>Precinct Division:-</b> <select name='precinct_info' id='precinct_info' onchange='get_positions()'>";
                                        echo "<option value='0'>Select Precinct</option>";
                                        for($i=0; $i<$row_count; $i++)
                                        {
                                        ?>


                                            <option value="<?php echo $precinct[$i][0]; ?>"><?php echo $precinct[$i][1]; ?></option>

                                        <?php
                                        }
                                        echo "</select>";
                                    
                                    
                                   
                                   ?>
                                        </div>
                                        <div id="pos_info_elec_result" style="display:inline-block; padding-left: 20px">
                                            
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="image-hover" id="candidate-result-chart" style="margin: 20px 125px">
                                        
                                        
                                        
                                    </div>
                                    
                                    
                                    
                                </div>
                        </div>
                </div>
	
	<!-- === END CONTENT === -->
	<!-- === BEGIN FOOTER === -->
	<?php include 'base.php'; ?>
		<!-- Footer Menu -->
	<?php include 'footer.php'; ?>
	
	<!-- End Footer Menu -->

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