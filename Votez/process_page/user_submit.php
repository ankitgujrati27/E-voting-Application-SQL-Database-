<?php
    include '../config.php';
    
    $email_id =$_POST['email'];
    $pass =$_POST['password'];
    $ssn =$_POST['ssn'];
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $mname =$_POST['mname'];
    $age =$_POST['age'];
    $gender =$_POST['gender'];
    $race =$_POST['race'];
    $strAddr =$_POST['saddr'];
    $city =$_POST['city'];
    $state =$_POST['state'];
    $prof =$_POST['prof'];
    $days =$_POST['days'];
    $zip =$_POST['zip'];
    
    $query_prec = "select precinct_id from zip_precinct where zip_code=$zip";
    $res = $mysqli->query($query_prec);
    
    if ($row = $res->fetch_array())
      $precinct_id = $row[0];
    else
        $precinct_id = 13;
        
    $query = "insert into user(password, SSN, first_name, last_name, middle_name, age, gender , precinct_id , street_address, city , state , zip_code, race, period_of_stay, user_email, user_profession) values ('$pass',$ssn,'$fname','$lname','$mname',$age,'$gender', '$precinct_id' ,'$strAddr','$city','$state',$zip,'$race', '$days','$email_id','$prof')";
        
    if (!($res1 = $mysqli->query($query)))
        echo "SELECT failed: (" . $mysqli->errno . ") " . $mysqli->error;
    else
    {
        session_start();
        echo $user_id = $mysqli->insert_id;
        $_SESSION['user_id'] = $user_id;
        header('Location:  ../voter_registration.php');
    }
?>