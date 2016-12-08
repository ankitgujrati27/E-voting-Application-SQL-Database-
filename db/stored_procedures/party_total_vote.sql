CREATE DEFINER=`root`@`localhost` PROCEDURE `Party_Total_vote`()
BEGIN
	DECLARE SQL_ERROR TINYINT DEFAULT FALSE;
	DECLARE CONTINUE HANDLER FOR SQLEXCEPTION
	SET SQL_ERROR = TRUE;
    
	START TRANSACTION;
		select party_name as Party,sum(q.vote) as Total_Party_Vote 
		from party p join (select party_id,t.vote
		from candidate c join (select candidate_id,
		count(candidate_id) as vote
		from cast_vote 
		group by candidate_id)t 
		on c.candidate_id=t.candidate_id)q 
		on p.party_id=q.party_id 
		group by p.party_id;
	IF SQL_ERROR IS TRUE THEN
		ROLLBACK;
	ELSE 
		COMMIT;
	END IF;
END