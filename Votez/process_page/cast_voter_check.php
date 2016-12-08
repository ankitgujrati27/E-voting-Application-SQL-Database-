<?php
    include '../config.php';
    
    session_start();
    //$_SESSION['user_id'] = 3;
    if(isset($_SESSION['user_id']))
    {
        $user_id = $_SESSION['user_id'];
        $test = $mysqli->query("CALL validate_cast_voter($user_id,@msg, @voter_id)");
        $res = $mysqli->query("SELECT @msg as msg, @voter_id as voter_id");

        $row = $res->fetch_array();
        if(isset($row['voter_id']))
        {
            $_SESSION['voter_id'] = $row['voter_id'];
            echo "redirect";
        }
        else
        {
            echo "You are not register as voter";
        }
    }        
    else
        echo "User has not logged in";
    
    
    
    
    
    
    
?>
