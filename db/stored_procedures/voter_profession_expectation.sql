CREATE DEFINER=`root`@`localhost` PROCEDURE `Voter_Profession_Expectation`()
BEGIN
DECLARE SQL_ERROR TINYINT DEFAULT FALSE;
DECLARE CONTINUE HANDLER FOR SQLEXCEPTION
SET SQL_ERROR = TRUE;
START TRANSACTION;
select u.proffesion,ve.expectation,count(expectation)
from voter_expectation ve join voter v join user u 
on ve.voter_id=v.voter_id and v.user_id=u.user_id
group by expectation,proffesion order by proffesion,expectation;
if SQL_ERROR is true then
select 'Error! Please Try again!'
Rollback;
else 
Select'Here is the Voter_Expectation';
Commit;
END if;
end