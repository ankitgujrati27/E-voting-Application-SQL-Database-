CREATE DEFINER=`root`@`localhost` PROCEDURE `cast_vote`(IN v_id INT,In pos_id int)
BEGIN
	DECLARE temp INT;
	DECLARE u_id int;
	select user_id INTO u_id from voter where voter_id=v_id;
	
    select precinct_id into temp from user 	where user_id=u_id;
    
    if temp <= 5 then 	
		select candidate_id, p.party_id, po.position_id, candidate_name,party_name,Position_name, pre.precinct_division from position_info po Inner join candidate c inner join party p inner join precinct pre on po.Position_id=c.position_id and c.party_id=p.party_id and c.precinct_id = pre.precinct_id
		where c.precinct_id in (temp, 12, 13) and po.position_id = pos_id
		group by c.position_id, c.candidate_id;
	elseif temp >= 6 and temp <= 11 then
		select candidate_id, p.party_id, po.position_id, candidate_name,party_name,Position_name, pre.precinct_division from position_info po Inner join candidate c inner join party p inner join precinct pre on po.Position_id=c.position_id and c.party_id=p.party_id and c.precinct_id = pre.precinct_id
		where c.precinct_id in (temp, 13) and po.position_id = pos_id
		group by c.position_id, c.candidate_id;
	else		
		select candidate_id, p.party_id, po.position_id, candidate_name,party_name,Position_name, pre.precinct_division from position_info po Inner join candidate c inner join party p inner join precinct pre on po.Position_id=c.position_id and c.party_id=p.party_id and c.precinct_id = pre.precinct_id
		where c.precinct_id in (temp) and po.position_id = pos_id
		group by c.position_id, c.candidate_id;
	End if;
END