CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `votes_precinct_party` AS
    SELECT 
        `election_vote_result`.`precinct_division` AS `precinct_division`,
        `election_vote_result`.`party_name` AS `party_name`,
        SUM(`election_vote_result`.`vote_count`) AS `votes_count`
    FROM
        `election_vote_result`
    GROUP BY `election_vote_result`.`party_name` , `election_vote_result`.`precinct_division`