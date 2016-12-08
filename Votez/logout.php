<?php
    unset($_SESSION['user_id']);
    session_destroy();
    session_unset();
    
    
    
    header('Location:  user_login.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

