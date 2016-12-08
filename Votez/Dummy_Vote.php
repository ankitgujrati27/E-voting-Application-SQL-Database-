<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<?php session_start(); ?>
<?php include 'config.php'; ?>
<?php include 'header.php'; ?>

<body>
	<div id="pre_header" class="visible-lg"></div>
            <?php include 'top_menu.php'; ?>
		<!-- === END HEADER === -->
		<!-- === BEGIN CONTENT === -->
		<div id="content" class="container">
			<div class="row margin-top-30">
				<div class="col-md-12 text-center">
					<h2 class="text-center">Cast Vote Form</h2>
				</div>
			</div>
			
			
			<div class="row">
				<!-- Portfolio -->
				<!-- Portfolio Item -->
				<div class="portfolio-item col-sm-12 animate fadeIn">
					<div class="image-hover1">
                                            <form name="cast_vote" action="process_page/vote_submit_1.php" method="POST">
                                                <div>
                                                        <?php
                                                            if(isset($_REQUEST['voter_id']))
                                                            {   
                                                                $voter_id = $_REQUEST['voter_id'];
                                                                $res = $mysqli->query("select * from user where user_id = (select user_id from voter where voter_id=$voter_id)");
                                                                $user_details = $res->fetch_assoc();
                                                                ?>
                                                                <table class="tbl-sm-6 cast_vote image-hover1" >
                                                                    <tr><td><?php echo "voter id - ".$voter_id; ?></td></tr>
                                                                    <tr><td><?php echo "user id. - ".$user_details['user_id']; ?></td> </tr>
                                                                    <tr><td><?php echo "first name - ".$user_details['first_name']; ?></td></tr>
                                                                    <tr><td><?php echo "User Profession - ".$user_details['user_profession']; ?></td></tr>
                                                                
                                                                </table>
                                                                <?php
                                                                $res->close();
                                                                $mysqli->next_result();
                                                            
                                                                echo "<input type='hidden' name='voter_id' value=$voter_id readonly>";
                                                                $res = $mysqli->query("CALL position_for_vote($voter_id)");
                                                                
                                                                $positions = $res->fetch_all();
                                                                $row_count = $res->num_rows;
                                                                $res->close();
                                                                $mysqli->next_result();
                                                                
                                                                   
                                                                
                                                                for($i=0; $i< $row_count; $i++)
                                                                {?>
                                                        
                                                                    <table class="tbl-sm-6 cast_vote image-hover1" >
                                                                        <tr>
                                                                            <td colspan="2"><strong><?php 
                                                                                $position_id = $positions[$i]['0'];
                                                                                echo $positions[$i]['1'].", ".$positions[$i]['2']; ?></strong>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>     
                                                                            <?php

                                                                            $res1 = $mysqli->query("CALL cast_vote($voter_id, $position_id)");
                                                                            if($res1)
                                                                            {
                                                                                While($candidate_details = $res1->fetch_array())
                                                                                {
                                                                                    echo "<tr><td style='text-align:left'><input type='radio' name=".$candidate_details['position_id']." value=".$candidate_details['candidate_id']."><span style='padding-left:10px'>".$candidate_details['candidate_name']."</span></td><td style='text-align:left'>".$candidate_details['party_name']."</td></tr>";

                                                                                }
                                                                                $res1->close();
                                                                                $mysqli->next_result(); 
                                                                            }
                                                                            else
                                                                            {
                                                                                echo $mysqli->error;
                                                                            }



                                                                            ?>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                 <?php
                                                                    
                                                                }
                                                                
                                                                
                                                                

                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                            }
                                                            
                                                            
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        ?>
                                                        
                                                        
                                                        
                                                            
                                                        
                                                        
                                                        
                                                </div>
                                                
                                                    <p style="text-align: center"><strong>Expectation :- </strong>
                                                        <select name="Expectation">
                                                            <option value="Other"> - Other</option>
                                                            <option value="Job Opportunities"> - Job Opportunity</option>
                                                            <option value="Reduce Crime"> - Control Crime</option>
                                                            <option value="Better Education"> - Better Education</option>
                                                            <option value="Tax reduction"> - Tax Reduction</option>
                                                        </select>
                                                    </p>
                                                
                                                <p style="text-align: center"><input type="submit" name="Submit" value="Submit"></p>
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