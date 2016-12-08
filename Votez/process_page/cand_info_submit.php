<style>
    table.cand_info, .cand_info th, .cand_info td
        {
            border: 2px solid whitesmoke;
            border-collapse: collapse;

        }
        
        
        
        .cand_info th
        {
            background: rgb(24,35,112);
            color:white;
            text-align: center;
        }

        .cand_info th, .cand_info td
        {
            padding: 10px;
            vertical-align: middle;
        }

        .cand_info tr:nth-child(odd)
        {
            background: #ebcccc;
        }
        .cand_info td:nth-child(odd)
        {
            font-weight: bold;
        }
        .cand_info td:nth-child(even)
        {
            text-align: justify;
        }
        .cand_info tr:nth-child(even)
        {
            background: aquamarine;
        }
    
</style>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 include '../config.php';
    
    $cand_id = $_REQUEST['cand_id'];
    
    
    $res3 = $mysqli->query("select * from candidate_details where candidate_id=$cand_id");
                                                                
    $cand_result_details = $res3->fetch_array();
    $row_count3 = $res3->num_rows;
    $res3->close();
    $mysqli->next_result();

    //var_dump($cand_result_details);
    


?>
                                            <table class="tbl-sm-12 user_reg cand_info">
                                                    <tbody>
                                                        <tr>
                                                            <td>Email Id:-</td>
                                                            <td><?php echo $cand_result_details[0]; ?></td>
                                                            <td>Candidate Name:-</td>
                                                            <td><?php echo $cand_result_details[1]; ?></td>
                                                            <td>Candidate Political Experience:-</td>
                                                            <td><?php echo $cand_result_details[2]; ?></td>
                                                            
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Candidate Profession Experience:-</td>
                                                            <td><?php echo $cand_result_details[3]; ?></td>
                                                            
                                                            <td>Candidate Motive:-</td>
                                                            <td colspan="3"><?php echo $cand_result_details[5]; ?></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Candidate Education Qualifications:-</td>
                                                            <td><?php echo $cand_result_details[4]; ?></td>
                                                            <td>Total Fund Raised For Election:-</td>
                                                            <td><?php echo $cand_result_details[6]; ?></td>
                                                            <td>Personal Net Worth:-</td>
                                                            <td><?php echo $cand_result_details[7]; ?></td>
                                                            
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Amount Spent:-</td>
                                                            <td><?php echo $cand_result_details[8]; ?></td>
                                                            <td>Candidate Party:-</td>
                                                            <td><?php echo $cand_result_details[9]; ?></td>
                                                            <td>Candidate Election Position:-</td>
                                                            <td><?php echo $cand_result_details[10]; ?></td>
                                                            
                                                            
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Candidate Precinct Division:-</td>
                                                            <td><?php echo $cand_result_details[11]; ?></td>
                                                            <td>Candidate Web-site:-</td>
                                                            <td colspan="3"><?php echo $cand_result_details[12]; ?></td>
                                                            
                                                            
                                                        </tr>
                                                        
                                                        
                                                        
                                                    </tbody>


                                                </table>
