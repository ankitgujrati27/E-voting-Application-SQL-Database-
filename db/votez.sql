/* ----------------------------------------------------------- Table Definitions ---------------------------------------------------*/

create table user(user_id int primary key auto_increment, password varchar(50), SSN int, first_name varchar(50), last_name varchar(50), middle_name varchar(50), age int, gender varchar(50), precinct_id int, street_address varchar(300), city varchar(50), state varchar(50), zip_code int, country varchar(50), race varchar(50), period_of_stay varchar(50), user_email varchar(50), user_profession varchar(50));
create table precinct(precinct_id int primary key auto_increment, precinct_division varchar(20), precinct_city varchar(20), precinct_state varchar(20));
create table zip_precinct(zip_code int(50) primary key, precinct_id int(50) references precinct(precinct_id));
create table party(party_id int primary key,party_name varchar(50),Party_logo varchar(50),party_motive varchar(100),party_website varchar(50),founded_in varchar(50),color varchar(50));
create table position_info(position_id int, position_name varchar(100), position_years int, position_seat int);
create table voter(voter_id int auto_increment primary key, user_id int, voter_reg_date varchar(50), voter_status varchar(20) default "Active", foreign key (user_id) references user(user_id) );
create table election(elec_id int, elec_date date, elec_start_time varchar(50), elec_end_time varchar(50), elec_year int);
create table candidate(candidate_id int auto_increment primary key, party_id int, position_id int, precinct_id int, candidate_name varchar(100), candidate_political_exp varchar(1000),candidate_professional_exp varchar(1000),candidate_education_qualifications varchar(1000),candidate_motive varchar(500),total_fund_raised varchar(50), personal_net_worth varchar(50), amount_spent varchar(50), candidate_email varchar(100),candidate_website varchar(200),candidate_reg_date varchar(50));
create table cast_vote(	election_id int, voter_id int, candidate_id int, position_id int, vote_time datetime default now(), Primary key(voter_id,position_id,election_id));
create table voter_expectation(voter_id int, expectation varchar(55), foreign key (voter_id) references voter(voter_id));

/* ------------------------------------------------ Select Statements For Each Table -----------------------------------------*/
select * from zip_precinct;
select * from precinct;
select * from user;
select * from user;
select * from voter;
select * from candidate;
select * from party;
select * from position_info;
select * from election;
select * from cast_vote;
select * from voter_expectation;


select * from election_vote_result;
select * from prof_expec;
select * from votes_precinct_party;
select * from candidate_details;


/* ------------------------------------------------------------------------ VIEWS ----------------------------------------------------- */

create or replace view election_vote_result as
Select c.candidate_name, pi.position_name, party.party_name, pi.position_id, pre.precinct_id, pre.precinct_division, concat(pi.position_name, ", ",pre.precinct_division) as pos_pre, (select count(*) from cast_vote where candidate_id = c.candidate_id) as vote_count
	from candidate c natural join position_info pi inner join precinct pre inner join party  on pre.precinct_id = c.precinct_id and party.party_id = c.party_id;

create or replace view prof_expec as 
select u.user_profession,ve.expectation,count(expectation) as count_expectation
from voter_expectation ve join voter v join user u 
on ve.voter_id=v.voter_id and v.user_id=u.user_id
group by expectation,user_profession order by user_profession,expectation;

create or replace view votes_precinct_party as 
select precinct_division, party_name, sum(vote_count) as votes_count from election_vote_result  group by party_name,precinct_division ;

create or replace view candidate_details as
select candidate_email, candidate_name, candidate_political_exp, candidate_professional_exp, candidate_education_qualifications, candidate_motive, total_fund_raised, personal_net_worth, amount_spent, party_name, position_name, precinct_division, candidate_website,candidate_id from candidate natural join party natural join position_info natural join precinct;  

