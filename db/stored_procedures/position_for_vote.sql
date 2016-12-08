CREATE DEFINER=`root`@`localhost` PROCEDURE `position_for_vote`(IN v_id INT)
BEGIN
	DECLARE temp INT;
	DECLARE u_id int;
	select user_id INTO u_id from voter where voter_id=v_id;
	
    select precinct_id into temp from user 	where user_id=u_id;
    
    if temp < 6 then 	
		select distinct(po.position_id), Position_name, pre.precinct_division from position_info po Inner join candidate c inner join party p inner join precinct pre on po.Position_id=c.position_id and c.party_id=p.party_id and c.precinct_id = pre.precinct_id
		where c.precinct_id in (temp, 12, 13)
		group by c.position_id;
	elseif temp > 5 and temp <= 11 then
		select distinct(po.position_id), Position_name, pre.precinct_division from position_info po Inner join candidate c inner join party p inner join precinct pre on po.Position_id=c.position_id and c.party_id=p.party_id and c.precinct_id = pre.precinct_id
		where c.precinct_id in (temp, 13)
		group by c.position_id;
	else		
		select distinct(po.position_id), Position_name, pre.precinct_division from position_info po Inner join candidate c inner join party p inner join precinct pre on po.Position_id=c.position_id and c.party_id=p.party_id and c.precinct_id = pre.precinct_id
		where c.precinct_id in (temp)
		group by c.position_id;
	End if;
END