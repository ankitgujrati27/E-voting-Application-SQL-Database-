CREATE DEFINER=`root`@`localhost` PROCEDURE `validate_cast_voter`(IN u_id int,out msg varchar(100),out v_id int)
BEGIN
	declare temp integer;
    
	select count(voter_id) into temp from voter where user_id=u_id and voter_status = "Active";
    
	if temp!=1 then
		select 'User has not been registered as voter' into msg;
	else 
		select voter_id into v_id from voter where user_id=u_id;
		Select 'User is registered as voter or Inactive in System' into msg;
	end if;
END