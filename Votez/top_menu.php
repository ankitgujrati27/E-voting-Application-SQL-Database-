
<div id="header" class="container">
		<div class="row">
			<!-- Logo -->
			<div class="logo">
				<a href="index.php" title="">
					<img src="assets/img/logo.png" alt="Logo" />
				</a>
			</div>
			<!-- End Logo -->
			<!-- Top Menu -->
			<div class="col-md-12 margin-top-30">
				<div id="hornav" class="pull-right visible-lg">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><span>Election Results</span>
							<ul>
                                                                <li><a href="a_elec_result.php">Election Result</a></li>
								<li><a href="a_elec_report.php">Election Report</a></li>
                                                                
							</ul>
						</li>
						<li><span>Vote Analytics</span>
							<ul>
                                                                <!--li><a href="a_elec_result.php">Election Result</a></li-->
								<li><a href="a_party_votes.php">Votes - Party</a></li>
                                                                <li><a href="a_votes_precinct.php">Votes - Precinct</a></li>
								<li><a href="a_voter_expectation.php">Voter Expectation</a></li>
                                                                <li><a href="a_prof_expec.php">Profession Expectation</a></li>
								<!--li><a href="">Party Votes - Gender</a></li-->
								<li><a href="a_hour_traffic.php">Hourly Traffic</a></li>
							</ul>
						</li>
						<li class="parent"><span>Admin</span>
									<ul>
                                                                            
                                                                            <li ><a href="User_Analysis.php">User </a></li>
                                                                            <li><a href="a_voter_status.php">Voter Status</a></li>
                                                                            <li><a href="candidate_info.php">Candidate Info</a></li>
									</ul>
								</li>
						<li><span>Sign Up</span>
							<ul>
                                                            <li><a href="registration.php">Registration</a></li>
                                                            <li><a href="user_login.php">Login</a></li>
							</ul>
						</li>
						
                                                    <?php
                                                        
                                                            if(isset($_SESSION['user_id']))
                                                            {
                                                                
                                                                    echo "<li><a href='logout.php'>Logout</a></li>";
                                                                
                                                            }
                                                            else
                                                                    echo "<li><a href='#'>Hi</a></li>";
                                                        
                                                            
                                                    ?>
                                                   
					</ul>				
                                </div>
				</div>
				<div class="clear"></div>
				<!-- End Top Menu -->
			</div>
		</div>