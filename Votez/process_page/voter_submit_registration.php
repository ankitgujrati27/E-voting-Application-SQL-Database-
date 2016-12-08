<?php
    include '../config.php';
    
    session_start();
    //$_SESSION['user_id'] = 3;
    if(isset($_SESSION['user_id']))
    {    
        $user_id = $_SESSION['user_id'];
        $test = $mysqli->query("CALL voter_reg($user_id,@msg, @voter_id)");
        $res = $mysqli->query("SELECT @msg as msg, @voter_id as voter_id");

        $row = $res->fetch_array();

        echo $row['msg']." ";

        if(isset($row['voter_id']))
        {
            echo "and voter id is ".$row['voter_id'];
            $_SESSION['voter_id'] = $row['voter_id'];
        }
    }   
    else
        echo "User has not logged in";
    
    
    
    
    
    
    /*
    $mysqli->query("call voter_reg($user_id, @msg);");
    $test1 = $mysqli->query("SELECT @msg as output");
    
    var_dump($test1);
    
    

    $row = $test1->fetch_array();     
    echo " test ";
    var_dump($row);
    */
    //echo $row['output'];
    //$res = mysqli_fetch_assoc();
    //$result = mysqli_fetch_assoc($res);
    //echo $result['@msg'];
    
?>
