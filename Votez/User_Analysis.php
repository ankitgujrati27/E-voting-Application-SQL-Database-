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
                                    <h2 class="text-center">User Analytics</h2> - Sort By <select id="user_filter"><option> &nbsp; </option><option value="race">Race</option><option value="gender">Gender</option><option value="profession">Profession</option></select>
				</div>
			</div>
                    
                    
                        <div class="row">
				<!-- Portfolio -->
				<!-- Portfolio Item -->
                                <div class="portfolio-item col-sm-12 animate fadeIn" id="user-chart_container" style="min-height: 200px">
                                   
                                    <div class="image-hover" id="user-chart" style="margin: 20px 200px">
                                    
                                    
                                        <?php
                                        
                                            $strQuery = "select race, count(*) as race_count from user group by race";

                                            $result = $mysqli->query($strQuery);


                                            if ($result) 
                                            {
                                            

                                                // The `$arrData` array holds the chart attributes and data

                                                $arrData = array(
                                                  "chart" => array
                                                  (
                                                    "caption" => "Users Based On Race",
                                                    "paletteColors" => "#0075c2",
                                                    "bgColor" => "#ffffff",
                                                    "borderAlpha"=> "20",
                                                    "canvasBorderAlpha"=> "0",
                                                    "usePlotGradientColor"=> "0",
                                                    "plotBorderAlpha"=> "10",
                                                    "showXAxisLine"=> "1",
                                                    "xAxisLineColor" => "#999999",
                                                    "showValues" => "0",
                                                    "divlineColor" => "#999999",
                                                    "divLineIsDashed" => "1",
                                                    "showAlternateHGridColor" => "0"
                                                    )
                                                  );
                                            }
                                            $arrData["data"] = array();

                                                // Push the data into the array

                                            while($row = mysqli_fetch_array($result)) 
                                            {
                                                array_push($arrData["data"], array(
                                                  "label" => $row["race"],
                                                  "value" => $row["race_count"]
                                                  )
                                                );
                                            }

                                            /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

                                            $jsonEncodedData = json_encode($arrData);

                                        /*
                                         Create an object for the column chart using the FusionCharts PHP class constructor. 
                                         Syntax for the constructor is 
                                         `FusionCharts("type of chart", "unique chart id", width of the chart, height of the chart, "div id to render the chart", "data format", "data source")`. 
                                         Because we are using JSON data to render the chart, the data format will be `json`. 
                                         The variable `$jsonEncodeData` holds all the JSON data for the chart, 
                                         and will be passed as the value for the data source parameter of the constructor.
                                        */

                                        $columnChart = new FusionCharts("column2D", "myFirstChart" , 600, 300, "user-chart", "json", $jsonEncodedData);

                                        // Render the chart

                                        $columnChart->render();

                                        // Close the database connection

                                        //$mysqli->close();

                                        ?>
                                    </div>
                                    
                                    <div class="image-hover" id="user-chart-1" style='margin: 20px 200px'>
                                    
                                    
                                        <?php
                                        
                                            $strQuery = "select gender, count(*) as gcount from user group by gender";

                                            $result = $mysqli->query($strQuery);


                                            if ($result) 
                                            {
                                            

                                                // The `$arrData` array holds the chart attributes and data

                                                $arrData = array(
                                                  "chart" => array
                                                  (
                                                    "caption" => "Users Based On Gender",
                                                    "paletteColors" => "#0075c2",
                                                    "bgColor" => "#ffffff",
                                                    "borderAlpha"=> "20",
                                                    "canvasBorderAlpha"=> "0",
                                                    "usePlotGradientColor"=> "0",
                                                    "plotBorderAlpha"=> "10",
                                                    "showXAxisLine"=> "1",
                                                    "xAxisLineColor" => "#999999",
                                                    "showValues" => "0",
                                                    "divlineColor" => "#999999",
                                                    "divLineIsDashed" => "1",
                                                    "showAlternateHGridColor" => "0"
                                                    )
                                                  );
                                            }
                                            $arrData["data"] = array();

                                                // Push the data into the array

                                            while($row = mysqli_fetch_array($result)) 
                                            {
                                                array_push($arrData["data"], array(
                                                  "label" => $row["gender"],
                                                  "value" => $row["gcount"]
                                                  )
                                                );
                                            }

                                            /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

                                            $jsonEncodedData = json_encode($arrData);

                                        /*
                                         Create an object for the column chart using the FusionCharts PHP class constructor. 
                                         Syntax for the constructor is 
                                         `FusionCharts("type of chart", "unique chart id", width of the chart, height of the chart, "div id to render the chart", "data format", "data source")`. 
                                         Because we are using JSON data to render the chart, the data format will be `json`. 
                                         The variable `$jsonEncodeData` holds all the JSON data for the chart, 
                                         and will be passed as the value for the data source parameter of the constructor.
                                        */

                                        $columnChart = new FusionCharts("column2D", "mySecondChart" , 600, 300, "user-chart-1", "json", $jsonEncodedData);

                                        // Render the chart

                                        $columnChart->render();

                                        // Close the database connection

                                        //$mysqli->close();

                                        ?>
                                    </div>
                                    
                                    <div class="image-hover" id="user-chart-2" style='margin: 20px 200px'>
                                    
                                    
                                        <?php
                                        
                                            $strQuery = "select user_profession,count(*) as prof_count from user group by user_profession";

                                            $result = $mysqli->query($strQuery);


                                            if ($result) 
                                            {
                                            

                                                // The `$arrData` array holds the chart attributes and data

                                                $arrData = array(
                                                  "chart" => array
                                                  (
                                                    "caption" => "Users Based On Profession",
                                                    "paletteColors" => "#0075c2",
                                                    "bgColor" => "#ffffff",
                                                    "borderAlpha"=> "20",
                                                    "canvasBorderAlpha"=> "0",
                                                    "usePlotGradientColor"=> "0",
                                                    "plotBorderAlpha"=> "10",
                                                    "showXAxisLine"=> "1",
                                                    "xAxisLineColor" => "#999999",
                                                    "showValues" => "0",
                                                    "divlineColor" => "#999999",
                                                    "divLineIsDashed" => "1",
                                                    "showAlternateHGridColor" => "0"
                                                    )
                                                  );
                                            }
                                            $arrData["data"] = array();

                                                // Push the data into the array

                                            while($row = mysqli_fetch_array($result)) 
                                            {
                                                array_push($arrData["data"], array(
                                                  "label" => $row["user_profession"],
                                                  "value" => $row["prof_count"]
                                                  )
                                                );
                                            }

                                            /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

                                            $jsonEncodedData = json_encode($arrData);

                                        /*
                                         Create an object for the column chart using the FusionCharts PHP class constructor. 
                                         Syntax for the constructor is 
                                         `FusionCharts("type of chart", "unique chart id", width of the chart, height of the chart, "div id to render the chart", "data format", "data source")`. 
                                         Because we are using JSON data to render the chart, the data format will be `json`. 
                                         The variable `$jsonEncodeData` holds all the JSON data for the chart, 
                                         and will be passed as the value for the data source parameter of the constructor.
                                        */

                                        $columnChart = new FusionCharts("column2D", "myThirdChart" , 600, 300, "user-chart-2", "json", $jsonEncodedData);

                                        // Render the chart

                                        $columnChart->render();

                                        // Close the database connection

                                        $mysqli->close();

                                        ?>
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