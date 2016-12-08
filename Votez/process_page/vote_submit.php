<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<?php 
    session_start(); 
    include '../config.php';
    
    //echo $_SESSION['voter_id'];
    
    if(isset($_SESSION['voter_id']))
    {    
        $voter_id = $_SESSION['voter_id'];
        $res = $mysqli->query("CALL position_for_vote($voter_id)");

        $positions = $res->fetch_all();
        $row_count = $res->num_rows;
        $res->close();
        $mysqli->next_result();



        for($i=0; $i< $row_count; $i++)
        {
            $position_id = $positions[$i]['0'];
            
            if(isset($_REQUEST[$position_id]))
            {
                $candidate_id = $_REQUEST[$position_id];
                
                $sql = "insert into cast_vote(election_id, voter_id, candidate_id, position_id) values (1,$voter_id, $candidate_id, $position_id);";
                if(!$mysqli->query($sql))
                    printf("Errormessage: %s\n", $mysqli->error);
                
                
                    
                
            }
            

        }
        if(isset($_REQUEST['Expectation']))
        {
            $expec = $_REQUEST['Expectation'];
            $sql1 = "insert into voter_expectation(voter_id, expectation) values ($voter_id, '$expec')";
            if(!$mysqli->query($sql1))
                    printf("Errormessage: %s\n", $mysqli->error);
        }
        
        header('Location:  ../voter_registration.php?user_message_1=Thanks for casting vote');
        
    }
    else
        header('Location:  ../voter_registration.php?user_message_1=Something Went Wrong');
  
?>