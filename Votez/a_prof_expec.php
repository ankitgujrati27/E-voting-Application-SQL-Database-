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
                                    <h2 class="text-center">Voter - Expectation & Profession</h2> 
				</div>
			</div>
                    
                    
                        <div class="row">
				<!-- Portfolio -->
				<!-- Portfolio Item -->
                                <div class="portfolio-item col-sm-12 animate fadeIn" id="user-chart_container" style="min-height: 200px">
                                   
                                    <div class="image-hover"  style="margin: 20px 50px">
                                    
                                         <div id="voter-chart">
                                        <!--script type="text/javascript">
                                            FusionCharts.ready(function () {
                                            var myChart = new FusionCharts({
                                              "type": "mscolumn3d",
                                              "renderAt": "voter-chart",
                                              "width": "500",
                                              "height": "300",
                                              "dataFormat": "xml",
                                              "dataSource": "<chart caption='Harry&#39;s SuperMart' subcaption='Sales by quarter' xaxisname='Quarter' yaxisname='Sales (In USD)' numberprefix='$' palettecolors='#0075c2,#1aaf5d,#f2c500' bgcolor='#ffffff' showborder='0' showcanvasborder='0' useplotgradientcolor='0' plotborderalpha='10' legendborderalpha='0' legendbgalpha='0' legendshadow='0' showhovereffect='1' valuefontcolor='#ffffff' rotatevalues='1' placevaluesinside='1' divlinecolor='#999999' divlinedashed='1' divlinedashlen='1' divlinegaplen='1' canvasbgcolor='#ffffff' captionfontsize='14' subcaptionfontsize='14' subcaptionfontbold='0'><categories><category label='Q1' /><category label='Q2' /><category label='Q3' /><category label='Q4' /></categories><dataset seriesname='Current Year'><set value='10000' /><set value='10000' /><set value='10000' /><set value='10000' /></dataset><dataset seriesname='Previous Year'><set value='10000' /><set value='10000' /><set value='10000' /><set value='10000' /></dataset></chart>"
                                            });

                                                myChart.render();
                                            });
                                        </script-->
                                           
                                        
                                        <?php
                                        
                                            $str="{
                                                'chart': {
                                                    'caption': 'Comparison of Quarterly Revenue',
                                                    'xAxisname': 'Quarter',
                                                    'yAxisName': 'Revenues (In USD)',
                                                    'numberPrefix': '$',
                                                    'plotFillAlpha': '80',
                                                    'paletteColors': '#0075c2,#1aaf5d',
                                                    'baseFontColor': '#333333',
                                                    'baseFont': 'Helvetica Neue,Arial',
                                                    'captionFontSize': '14',
                                                    'subcaptionFontSize': '14',
                                                    'subcaptionFontBold': '0',
                                                    'showBorder': '0',
                                                    'bgColor': '#ffffff',
                                                    'showShadow': '0',
                                                    'canvasBgColor': '#ffffff',
                                                    'canvasBorderAlpha': '0',
                                                    'divlineAlpha': '100',
                                                    'divlineColor': '#999999',
                                                    'divlineThickness': '1',
                                                    'divLineIsDashed': '1',
                                                    'divLineDashLen': '1',
                                                    'divLineGapLen': '1',
                                                    'usePlotGradientColor': '0',
                                                    'showplotborder': '0',
                                                    'valueFontColor': '#ffffff',
                                                    'placeValuesInside': '1',
                                                    'showHoverEffect': '1',
                                                    'rotateValues': '1',
                                                    'showXAxisLine': '1',
                                                    'xAxisLineThickness': '1',
                                                    'xAxisLineColor': '#999999',
                                                    'showAlternateHGridColor': '0',
                                                    'legendBgAlpha': '0',
                                                    'legendBorderAlpha': '0',
                                                    'legendShadow': '0',
                                                    'legendItemFontSize': '10',
                                                    'legendItemFontColor': '#666666'
                                                },
                                                'categories': [
                                                    {
                                                        'category': [
                                                            {
                                                                'label': 'Q1'
                                                            },
                                                            {
                                                                'label': 'Q2'
                                                            },
                                                            {
                                                                'label': 'Q3'
                                                            },
                                                            {
                                                                'label': 'Q4'
                                                            }
                                                        ]
                                                    }
                                                ],
                                                'dataset': [
                                                    {
                                                        'seriesname': 'Previous Year',
                                                        'data': [
                                                            {
                                                                'value': '10000'
                                                            },
                                                            {
                                                                'value': '11500'
                                                            },
                                                            {
                                                                'value': '12500'
                                                            },
                                                            {
                                                                'value': '15000'
                                                            }
                                                        ]
                                                    },
                                                    {
                                                        'seriesname': 'Current Year',
                                                        'data': [
                                                            {
                                                                'value': '25400'
                                                            },
                                                            {
                                                                'value': '29800'
                                                            },
                                                            {
                                                                'value': '21800'
                                                            },
                                                            {
                                                                'value': '26800'
                                                            }
                                                        ]
                                                    }
                                                ],
                                                'trendlines': [
                                                    {
                                                        'line': [
                                                            {
                                                                'startvalue': '12250',
                                                                'color': '#0075c2',
                                                                'displayvalue': 'Previous{br}Average',
                                                                'valueOnRight': '1',
                                                                'thickness': '1',
                                                                'showBelow': '1',
                                                                'tooltext': 'Previous year quarterly target  : $13.5K'
                                                            },
                                                            {
                                                                'startvalue': '25950',
                                                                'color': '#1aaf5d',
                                                                'displayvalue': 'Current{br}Average',
                                                                'valueOnRight': '1',
                                                                'thickness': '1',
                                                                'showBelow': '1',
                                                                'tooltext': 'Current year quarterly target  : $23K'
                                                            }
                                                        ]
                                                    }
                                                ]
                                            }"; 
                                            
                                            
                                            
                                            
                                            $str1="{
                                                'chart': {
                                                    'caption': 'Voters -> Expectation W.R.T Profession',
                                                    'xAxisname': 'Profession',
                                                    'yAxisName': 'Expectation Count',
                                                    'numberPrefix': '',
                                                    'plotFillAlpha': '80',
                                                    'paletteColors': '#0075c2,#1aaf5d,#c20058,#f0ff00,#b000ff',
                                                    'baseFontColor': '#333333',
                                                    'baseFont': 'Helvetica Neue,Arial',
                                                    'captionFontSize': '14',
                                                    'subcaptionFontSize': '14',
                                                    'subcaptionFontBold': '0',
                                                    'showBorder': '0',
                                                    'bgColor': '#ffffff',
                                                    'showShadow': '0',
                                                    'canvasBgColor': '#ffffff',
                                                    'canvasBorderAlpha': '0',
                                                    'divlineAlpha': '100',
                                                    'divlineColor': '#999999',
                                                    'divlineThickness': '1',
                                                    'divLineIsDashed': '1',
                                                    'divLineDashLen': '1',
                                                    'divLineGapLen': '1',
                                                    'usePlotGradientColor': '0',
                                                    'showplotborder': '0',
                                                    'valueFontColor': '#313031',
                                                    'placeValuesInside': '1',
                                                    'showHoverEffect': '1',
                                                    'rotateValues': '0',
                                                    'showXAxisLine': '1',
                                                    'xAxisLineThickness': '1',
                                                    'xAxisLineColor': '#999999',
                                                    'showAlternateHGridColor': '0',
                                                    'legendBgAlpha': '0',
                                                    'legendBorderAlpha': '0',
                                                    'legendShadow': '0',
                                                    'legendItemFontSize': '10',
                                                    'legendItemFontColor': '#666666'
                                                },
                                                'categories': [
                                                    {
                                                        'category': [
                                                            {
                                                                'label': 'Agriculture'
                                                            },
                                                            {
                                                                'label': 'Cops'
                                                            },
                                                            {
                                                                'label': 'Doctor'
                                                            },
                                                            {
                                                                'label': 'Engineer'
                                                            },
                                                            {
                                                                'label': 'Professor'
                                                            },
                                                            {
                                                                'label': 'Student'
                                                            }
                                                        ]
                                                    }
                                                ],
                                                'dataset': [
                                                    {
                                                        'seriesname': 'Better Education',
                                                        'data': [
                                                            {
                                                                'value': '1'
                                                            },
                                                            {
                                                                'value': '1'
                                                            },
                                                            {
                                                                'value': '0'
                                                            },
                                                            {
                                                                'value': '4'
                                                            },
                                                            {
                                                                'value': '15'
                                                            },
                                                            {
                                                                'value': '35'
                                                            }
                                                        ]
                                                    },
                                                    {
                                                        'seriesname': 'Job Opportunities',
                                                        'data': [
                                                            {
                                                                'value': '5'
                                                            },
                                                            {
                                                                'value': '13'
                                                            },
                                                            {
                                                                'value': '5'
                                                            },
                                                            {
                                                                'value': '2'
                                                            },
                                                            {
                                                                'value': '9'
                                                            },
                                                            {
                                                                'value': '48'
                                                            }
                                                        ]
                                                    },
                                                    {
                                                        'seriesname': 'Tax Reduction',
                                                        'data': [
                                                            {
                                                                'value': '10'
                                                            },
                                                            {
                                                                'value': '7'
                                                            },
                                                            {
                                                                'value': '68'
                                                            },
                                                            {
                                                                'value': '4'
                                                            },
                                                            {
                                                                'value': '4'
                                                            },
                                                            {
                                                                'value': '6'
                                                            }
                                                        ]
                                                    },
                                                    {
                                                        'seriesname': 'Reduce Crime',
                                                        'data': [
                                                            {
                                                                'value': '4'
                                                            },
                                                            {
                                                                'value': '11'
                                                            },
                                                            {
                                                                'value': '0'
                                                            },
                                                            {
                                                                'value': '2'
                                                            },
                                                            {
                                                                'value': '2'
                                                            },
                                                            {
                                                                'value': '7'
                                                            }
                                                        ]
                                                    },
                                                    {
                                                        'seriesname': 'Others',
                                                        'data': [
                                                            {
                                                                'value': '0'
                                                            },
                                                            {
                                                                'value': '1'
                                                            },
                                                            {
                                                                'value': '18'
                                                            },
                                                            {
                                                                'value': '2'
                                                            },
                                                            {
                                                                'value': '0'
                                                            },
                                                            {
                                                                'value': '12'
                                                            }
                                                        ]
                                                    },
                                                    
                                                ]
                                                
                                            }"; 
                                            
                                            
                                                            
                                            
                                            $columnChart = new FusionCharts("mscolumn3d", "myFirstChart" , 900, 500, "voter-chart", "json", $str1);
                                        
                                        // Render the chart

                                            $columnChart->render();
                                        ?>  
                                        </div>
                                        <div style="margin: 20px 150px">
                                        
                                        <?php
                                            
                                            $strQuery = "select distinct(user_profession) from prof_expec order by user_profession";

                                            $res = $mysqli->query($strQuery);
                                            $user_prof = $res->fetch_all();
                                            $row_count = $res->num_rows;
                                            $res->close();
                                            $mysqli->next_result();
                                            
                                            $strQuery1 = "select distinct(expectation) from prof_expec";
                                            $res1 = $mysqli->query($strQuery1);
                                            $expectation = $res1->fetch_all();
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
                                              
                                                    <th><?php echo $user_prof[$i][0]; ?></th>
                                            <?php       
                                            }
                                                echo "</tr>";
                                            
                                            for($j=0; $j<$row_count1; $j++)
                                            {
                                                $expectation_id = $expectation[$j][0];
                                            ?>
                                                <tr>
                                                    <td><strong><?php echo $expectation_id; ?></strong></td>
                                                    <?php
                                                    for($k=0; $k<$row_count; $k++)
                                                    {
                                                        $user_prof_id = $user_prof[$k][0];
                                                        
                                                        $strQuery2 = "select count_expectation from prof_expec where user_profession='$user_prof_id' and expectation='$expectation_id'";
                                                        $res2 = $mysqli->query($strQuery2);
                                                        $count = $res2->fetch_array()
                                                        
                                                    ?>
                                                    <td><?php if(isset($count['count_expectation'])) echo $count['count_expectation'];else echo 0; ?></td>
                                                    <?php
                                                       
                                                    }
                                                echo "</tr>";
                                            }
                                            
                                            
                                            
                                            
                                            
                                        ?>
                                                    
                                                
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