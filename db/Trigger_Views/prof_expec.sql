CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `prof_expec` AS
    SELECT 
        `u`.`user_profession` AS `user_profession`,
        `ve`.`expectation` AS `expectation`,
        COUNT(`ve`.`expectation`) AS `count_expectation`
    FROM
        ((`voter_expectation` `ve`
        JOIN `voter` `v`)
        JOIN `user` `u` ON (((`ve`.`voter_id` = `v`.`voter_id`)
            AND (`v`.`user_id` = `u`.`user_id`))))
    GROUP BY `ve`.`expectation` , `u`.`user_profession`
    ORDER BY `u`.`user_profession` , `ve`.`expectation`