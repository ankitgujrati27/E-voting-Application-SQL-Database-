<?php
    
    include '../config.php';
    
    $precinct_id = $_REQUEST['precinct_id'];
    
    $res1 = $mysqli->query("select distinct(pos_pre) as pos_pre from election_vote_result where precinct_id=$precinct_id");
                                                                
    $positions = $res1->fetch_all();
    $row_count1 = $res1->num_rows;
    $res1->close();
    $mysqli->next_result();
    
    //var_dump($positions);
    
    
    echo "<b>Position:-</b><select name='pos_info' id='pos_info'>";
    
    for($j=0; $j<$row_count1; $j++)
    {
    ?>


        <option value="<?php echo $positions[$j][0]; ?>"><?php echo $positions[$j][0]; ?></option>

    <?php
    }
    echo "</select>";  
    
    ?>
        <div style='padding-left:15px; display:inline-block'><input type='button' value="Submit" onclick='elec_result()'> </div>
    
