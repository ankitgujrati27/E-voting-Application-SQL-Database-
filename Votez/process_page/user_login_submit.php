<?php
    include '../config.php';
    
    $email_id =$_REQUEST['email'];
    $password =$_REQUEST['pass'];
    
    //echo $email_id;
    
    $query_prec = "select user_id, user_email, first_name, password, precinct_id from user where user_email = '$email_id'";
    
    if ($result = $mysqli->query($query_prec)) {
        $row_cnt = $result->num_rows;
        
        if($row_cnt>0)
        {
            while ($row = $result->fetch_row())
            {
                $user_id = $row[0];
                $user_email = $row[1];
                $fname = $row[2];
                $pass = $row[3];
                $precinct_id = $row[4];
                
                if($email_id == $user_email && $password == $pass)
                {
                    session_start();
                    $_SESSION['user_id'] = $user_id;
                    header('Location:  ../voter_registration.php');
                }
                else
                {
                    header('Location:  ../user_login.php?user_msg=Invalid Username and Password');
                }
            }    
        }
        else
        {
            header('Location:  ../user_login.php?user_msg=User name is not registered');
        }
        
    }
    
    
    
?>