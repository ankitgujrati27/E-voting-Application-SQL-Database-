CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `election_vote_result` AS
    SELECT 
        `c`.`candidate_name` AS `candidate_name`,
        `pi`.`position_name` AS `position_name`,
        `party`.`party_name` AS `party_name`,
        `pi`.`position_id` AS `position_id`,
        `pre`.`precinct_id` AS `precinct_id`,
        `pre`.`precinct_division` AS `precinct_division`,
        CONCAT(`pi`.`position_name`,
                ', ',
                `pre`.`precinct_division`) AS `pos_pre`,
        (SELECT 
                COUNT(0)
            FROM
                `cast_vote`
            WHERE
                (`cast_vote`.`candidate_id` = `c`.`candidate_id`)) AS `vote_count`
    FROM
        (((`candidate` `c`
        JOIN `position_info` `pi` ON ((`c`.`position_id` = `pi`.`position_id`)))
        JOIN `precinct` `pre`)
        JOIN `party` ON (((`pre`.`precinct_id` = `c`.`precinct_id`)
            AND (`party`.`party_id` = `c`.`party_id`))))