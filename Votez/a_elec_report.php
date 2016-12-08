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
    table.cand_report
    {
        margin:2px auto 25px auto;
    }
    table.cand_report, .cand_report th, .cand_report td
        {
            border: 2px solid whitesmoke;
            border-collapse: collapse;

        }
        
        
        
        .cand_report th
        {
            background: rgb(24,35,112);
            color:white;
            text-align: center;
        }

        .cand_report th, .cand_report td
        {
            padding: 10px;
            vertical-align: middle;
        }

        .cand_report tr:nth-child(odd)
        {
            background: rgb(189,196,241);
        }
        .cand_report tr:nth-child(even)
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
                                    <h2 class="text-center">Election - Report</h2> 
				</div>
			</div>
                    
                    
                        <div class="row">
				<!-- Portfolio -->
				<!-- Portfolio Item -->
                                <div class="portfolio-item col-sm-12 animate fadeIn" id="user-chart_container" style="min-height: 200px">
                                    <div class="image-hover" id="candidate-result-chart" style="margin: 20px 125px">
                                        <?php
                                        
                                            $res1 = $mysqli->query("select distinct(pos_pre) as pos_pre from election_vote_result");

                                            $positions = $res1->fetch_all();
                                            $row_count1 = $res1->num_rows;
                                            $res1->close();
                                            $mysqli->next_result();
                                            
                                            
                                            for($i=0; $i<$row_count1;$i++)
                                            {
                                                $pos_pre = $positions[$i][0];
                                                echo "<strong>".$pos_pre."</strong>";
                                                
                                                
                                                $res3 = $mysqli->query("select * from election_vote_result where pos_pre='$pos_pre' order by vote_count desc");

                                                $cand_result_details = $res3->fetch_all();
                                                $row_count3 = $res3->num_rows;
                                                $res3->close();
                                                $mysqli->next_result();
                                                ?>
                                        
                                                <table class="cand_report">
                                                    <tr>
                                                        <th> Result </th>
                                                        <th> Candidate Name </th>
                                                        <th> Party Name </th>
                                                        <th> Position - Precinct </th>
                                                        <th> Vote Count </th>
                                                    </tr>


                                                    <?php

                                                        for($z=0; $z<$row_count3; $z++)
                                                        {

                                                        ?>
                                                            <tr>
                                                                <?php
                                                                if($z==0)
                                                                    echo "<td style='color: green; font-weight:bold'> Win </td>";
                                                                else
                                                                    echo "<td style='color: red; font-weight:bold'> Lose </td>";
                                                                ?>
                                                                <td><?php echo $cand_result_details[$z][0] ?></td>
                                                                <td><?php echo $cand_result_details[$z][2] ?></td>
                                                                <td><?php echo $cand_result_details[$z][6] ?></td>
                                                                <td><?php echo $cand_result_details[$z][7] ?></td>
                                                            </tr>
                                                        <?php        
                                                        }
                                                    ?>
                                                </table>
                                                <?php
                                                
                                                
                                                
                                                
                                            }
                                            
                                            
                                        
                                        
                                        ?>
                                        
                                        
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