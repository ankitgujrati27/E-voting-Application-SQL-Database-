<style>
    table.cand_result, .cand_result th, .cand_result td
        {
            border: 2px solid whitesmoke;
            border-collapse: collapse;

        }
        
        
        
        .cand_result th
        {
            background: rgb(24,35,112);
            color:white;
            text-align: center;
        }

        .cand_result th, .cand_result td
        {
            padding: 10px;
            vertical-align: middle;
        }

        .cand_result tr:nth-child(odd)
        {
            background: rgb(189,196,241);
        }
        .cand_result tr:nth-child(even)
        {
            background: rgb(238,239,251);
        }
    
</style>

<?php
    
    include '../config.php';
    
    $pos_pre = $_REQUEST['pos_pre'];
    echo $pos_pre;
    
    $res3 = $mysqli->query("select * from election_vote_result where pos_pre='$pos_pre' order by vote_count desc");
                                                                
    $cand_result_details = $res3->fetch_all();
    $row_count3 = $res3->num_rows;
    $res3->close();
    $mysqli->next_result();
    
    //print_r($cand_result_details);
    ?>
    
    <table class="cand_result">
        <tr>
            <th> Result </th>
            <th> Candidate Name </th>
            <th> Party Name </th>
            <th> Position - Precinct </th>
            <th> Vote Count </th>
        </tr>
    
        
        <?php
    
            for($z=0; $z<$row_count3; $z++)
            {
            
            ?>
                <tr>
                    <?php
                    if($z==0)
                        echo "<td style='color: green; font-weight:bold'> Win </td>";
                    else
                        echo "<td style='color: red; font-weight:bold'> Lose </td>";
                    ?>
                    <td><?php echo $cand_result_details[$z][0] ?></td>
                    <td><?php echo $cand_result_details[$z][2] ?></td>
                    <td><?php echo $cand_result_details[$z][6] ?></td>
                    <td><?php echo $cand_result_details[$z][7] ?></td>
                </tr>
            <?php        
            }
        ?>
    </table>
        