-- START CHANGE ACCOUNT TO OFFLINE WHEN NONE ACTION SEEN BY 15 MIN ON CLIENT SITE

CREATE DEFINER=`root`@`localhost` EVENT `StatusAktywnosci` ON SCHEDULE EVERY 15 MINUTE STARTS '2022-10-17 00:59:04' ON COMPLETION PRESERVE ENABLE COMMENT 'Zmiana statusu online' DO UPDATE user SET idActive = 0, last_logout_date = NOW() WHERE (lastActive+900)<UNIX_TIMESTAMP() AND idActive = 1

-- END CHANGE ACCOUNT TO OFFLINE WHEN NONE ACTION SEEN BY 15 MIN ON CLIENT SITE
