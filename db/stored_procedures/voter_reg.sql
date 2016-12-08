CREATE DEFINER=`root`@`localhost` PROCEDURE `voter_reg`(u_id int,out msg varchar(150), out v_id int)
BEGIN
	declare temp int;
	declare id int;
	DECLARE sql_error TINYINT DEFAULT FALSE;
	DECLARE CONTINUE HANDLER FOR SQLEXCEPTION
	SET sql_error = TRUE;
	
    select count(*) into id from Voter where user_id=u_id;
	select age into temp from user where user_id=u_id;
    
	if temp < 18 then
		select 'User is underAge' into msg;
	
    elseif id > 0 then
		select voter_id into v_id from Voter where user_id=u_id;
		select 'You have already been registered as voter' into msg;
	
    else
		insert into Voter(user_id,voter_reg_date) values(u_id,now());
	    select 'You have been registered successfully ' into msg;
        set v_id = last_insert_id();
    
	end if;
END