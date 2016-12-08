<?php 
    include 'config.php'; 
    include("includes/fusioncharts.php");
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<?php include 'header.php'; ?>
    <style>
        table.measure, .measure th, .measure td
        {
            border: 2px solid whitesmoke;
            border-collapse: collapse;

        }
        
        
        
        .measure th
        {
            background: rgb(24,35,112);
            color:white;
            text-align: center;
        }

        .measure th, .measure td
        {
            padding: 5px;
            vertical-align: middle;
        }

        .measure tr:nth-child(odd)
        {
            background: rgb(189,196,241);
        }
        .measure tr:nth-child(even)
        {
            background: rgb(238,239,251);
        }
        
        
        
        
    </style>
<body>
	<div id="pre_header" class="visible-lg"></div>
            <?php include 'top_menu.php'; ?>
		<!-- === END HEADER === -->
		<!-- === BEGIN CONTENT === -->
                <div id="content" class="container">
			<div class="row margin-top-30" >
				<div class="col-md-12 text-center">
                                    <h2 class="text-center">Votes - Precinct</h2>
                                        
				</div>
			</div>
                    
                    
                        <div class="row">
				<!-- Portfolio -->
				<!-- Portfolio Item -->
                                <div class="portfolio-item col-sm-12 animate fadeIn" id="user-chart_container" style="min-height: 200px">
                                   
                                    <div class="image-hover" style='margin: 20px 20px'>
                                        <img src="resources/votes_party_precinct.JPG">
                                        <?php
                                            
                                            $strQuery = "select distinct(precinct_division) from election_vote_result order by precinct_division";

                                            $res = $mysqli->query($strQuery);
                                            $prec_div = $res->fetch_all();
                                            $row_count = $res->num_rows;
                                            $res->close();
                                            $mysqli->next_result();
                                            
                                            $strQuery1 = "select distinct(party_name) from election_vote_result ";
                                            $res1 = $mysqli->query($strQuery1);
                                            $party_name = $res1->fetch_all();
                                            $row_count1 = $res1->num_rows;
                                            $res1->close();
                                            $mysqli->next_result();
                                            
                                            
                                            
                                            ?>
                                            <table class="measure">
                                                <tr>
                                                    <th> &nbsp;</th>
                                                
                                            <?php
                                            
                                            for($i=0; $i<$row_count; $i++)
                                            {?>
                                              
                                                    <th><?php echo $prec_div[$i][0]; ?></th>
                                            <?php       
                                            }
                                                echo "</tr>";
                                            
                                            for($j=0; $j<$row_count1; $j++)
                                            {
                                                $party_name1 = $party_name[$j][0];
                                            ?>
                                                <tr>
                                                    <td><strong><?php echo $party_name1; ?></strong></td>
                                                    <?php
                                                    for($k=0; $k<$row_count; $k++)
                                                    {
                                                        $prec_div_name = $prec_div[$k][0];
                                                        
                                                        $strQuery2 = "select votes_count from votes_precinct_party where precinct_division='$prec_div_name' and party_name='$party_name1'";
                                                        $res2 = $mysqli->query($strQuery2);
                                                        $count = $res2->fetch_array()
                                                        
                                                    ?>
                                                    <td><?php if(isset($count['votes_count'])) echo $count['votes_count'];else echo 0; ?></td>
                                                    <?php
                                                       
                                                    }
                                                echo "</tr>";
                                            }?>
                                            </table>
                                    </div>
                                    
                                </div>
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