Delimiter //
create trigger before_insert_Voter
before insert on voter
for each row
begin
	declare age1 int;
	select age into age1 from user where user_id=new.user_id;
	if age1<18 then
		SIGNAL SQLSTATE 'HY000'
		SET MESSAGE_TEXT ='User is underage';
	end if;
end
delimiter


delimiter //
CREATE TRIGGER BEFORE_INSERT_CAST_VOTE
BEFORE INSERT ON cast_vote
for each row
begin 
declare temp integer;
select count(NEW.voter_id) into temp from voter where voter_id=NEW.voter.id;
if temp=1 then
SIGNAL SQLSTATE 'HY000'
SET MESSAGE_TEXT ='Voter ID not Present in Voter Record!!';
end if;
end//

delimiter //
create trigger before_insert_Voter_Expectation
before insert on voter_expectation
for each row
begin
	declare temp integer;
	select count(NEW.voter_id) into temp from voter_expectation
    where voter_id=NEW.voter_id;
	if temp=1 then
		SIGNAL SQLSTATE 'HY000'
		SET MESSAGE_TEXT ='Voter has already Provided his/her Expectation';
	end if;
end//


