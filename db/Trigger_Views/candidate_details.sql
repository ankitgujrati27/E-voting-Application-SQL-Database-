CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `candidate_details` AS
    SELECT 
        `candidate`.`candidate_email` AS `candidate_email`,
        `candidate`.`candidate_name` AS `candidate_name`,
        `candidate`.`candidate_political_exp` AS `candidate_political_exp`,
        `candidate`.`candidate_professional_exp` AS `candidate_professional_exp`,
        `candidate`.`candidate_education_qualifications` AS `candidate_education_qualifications`,
        `candidate`.`candidate_motive` AS `candidate_motive`,
        `candidate`.`total_fund_raised` AS `total_fund_raised`,
        `candidate`.`personal_net_worth` AS `personal_net_worth`,
        `candidate`.`amount_spent` AS `amount_spent`,
        `party`.`party_name` AS `party_name`,
        `position_info`.`position_name` AS `position_name`,
        `precinct`.`precinct_division` AS `precinct_division`,
        `candidate`.`candidate_website` AS `candidate_website`,
        `candidate`.`candidate_id` AS `candidate_id`
    FROM
        (((`candidate`
        JOIN `party` ON ((`candidate`.`party_id` = `party`.`party_id`)))
        JOIN `position_info` ON ((`candidate`.`position_id` = `position_info`.`position_id`)))
        JOIN `precinct` ON ((`candidate`.`precinct_id` = `precinct`.`precinct_id`)))