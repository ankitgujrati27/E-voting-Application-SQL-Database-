CREATE DEFINER=`root`@`localhost` PROCEDURE `Vote_Count`(IN p_id int,IN pre_id int)
BEGIN
	/*declare vote_count int;*/
	/*declare vote int;
	declare candidate int;*/

	DECLARE SQL_ERROR TINYINT DEFAULT FALSE;
	DECLARE CONTINUE HANDLER FOR SQLEXCEPTION
	SET SQL_ERROR = TRUE;

	CASE p_id

	WHEN 1 THEN
	Select c.candidate_name,p.vote_count 
	from candidate c inner join
	(select candidate_id as c_id,v_count as vote_count
	from (Select candidate_id,
	count(*) as v_count
	from cast_vote 
	where position_id =1 
	group by candidate_id order by v_count desc) t limit 1)p 
	on c.candidate_id =p.c_id 
	where precinct_id=pre_id;

	WHEN 2 THEN

	Select c.candidate_name,p.vote_count 
	from candidate c inner join
	(select candidate_id as c_id,v_count as vote_count
	from (Select candidate_id,
	count(*) as v_count
	from cast_vote 
	where position_id =2 
	group by candidate_id order by v_count desc) t limit 1)p 
	on c.candidate_id =p.c_id 
	where precinct_id=pre_id;

	WHEN 3 THEN

	Select c.candidate_name,p.vote_count 
	from candidate c inner join
	(select candidate_id as c_id,v_count as vote_count
	from (Select candidate_id,
	count(*) as v_count
	from cast_vote 
	where position_id =3 
	group by candidate_id order by v_count desc) t limit 1)p 
	on c.candidate_id =p.c_id
	where precinct_id=pre_id;

	WHEN 4 THEN

	Select c.candidate_name,p.vote_count 
	from candidate c inner join
	(select candidate_id as c_id,v_count as vote_count
	from (Select candidate_id,
	count(*) as v_count
	from cast_vote 
	where position_id =4 
	group by candidate_id order by v_count desc) t limit 1)p 
	on c.candidate_id =p.c_id
	where precinct_id=pre_id;

	WHEN 5 THEN

	Select c.candidate_name,p.vote_count 
	from candidate c inner join
	(select candidate_id as c_id,v_count as vote_count
	from (Select candidate_id,
	count(*) as v_count
	from cast_vote 
	where position_id =5 
	group by candidate_id order by v_count desc) t limit 1)p 
	on c.candidate_id =p.c_id
	where precinct_id=pre_id;

	WHEN 6 THEN

	Select c.candidate_name,p.vote_count 
	from candidate c inner join
	(select candidate_id as c_id,v_count as vote_count
	from (Select candidate_id,
	count(*) as v_count
	from cast_vote 
	where position_id =6 
	group by candidate_id order by v_count desc) t limit 1)p 
	on c.candidate_id =p.c_id
	where precinct_id=pre_id;

	else

	select 'Not a valid Position';

	END CASE;

END