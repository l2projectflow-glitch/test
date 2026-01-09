<?php

class Stats {

	public static function TopPvP($limit) {
		
		$sql = DB::Executa("SELECT TOP ".$limit." C.char_name, C.duel AS pvpkills, C.PK AS pkkills, CASE WHEN (C.login > C.logout OR C.logout IS NULL) AND C.login IS NOT NULL THEN 1 ELSE 0 END AS online, C.use_time AS onlinetime, D.name AS clan_name FROM user_data AS C LEFT JOIN pledge AS D ON D.pledge_id = C.pledge_id WHERE C.builder = '0' ORDER BY C.duel DESC, C.PK DESC, C.use_time DESC, C.char_name ASC", "WORLD");
		return $sql;
		
	}
	
	public static function TopPk($limit) {
		
		$sql = DB::Executa("SELECT TOP ".$limit." C.char_name, C.duel AS pvpkills, C.PK AS pkkills, CASE WHEN (C.login > C.logout OR C.logout IS NULL) AND C.login IS NOT NULL THEN 1 ELSE 0 END AS online, C.use_time AS onlinetime, D.name AS clan_name FROM user_data AS C LEFT JOIN pledge AS D ON D.pledge_id = C.pledge_id WHERE C.builder = '0' ORDER BY C.PK DESC, C.duel DESC, C.use_time DESC, C.char_name ASC", "WORLD");
		return $sql;
		
	}
	
	public static function TopOnline($limit) {
		
		$sql = DB::Executa("SELECT TOP ".$limit." C.char_name, C.duel AS pvpkills, C.PK AS pkkills, CASE WHEN (C.login > C.logout OR C.logout IS NULL) AND C.login IS NOT NULL THEN 1 ELSE 0 END AS online, C.use_time AS onlinetime, D.name AS clan_name FROM user_data AS C LEFT JOIN pledge AS D ON D.pledge_id = C.pledge_id WHERE C.builder = '0' ORDER BY C.use_time DESC, C.duel DESC, C.PK DESC, C.char_name ASC", "WORLD");
		return $sql;
		
	}
	
	public static function TopClan($limit) {
		
		$sql = DB::Executa("
			SELECT
			TOP ".$limit."
				C.name AS clan_name,
				C.skill_level AS clan_level,
				C.name_value AS reputation_score,
				A.name AS ally_name,
				P.char_name,
				(SELECT COUNT(*) FROM user_data WHERE pledge_id = C.pledge_id) AS membros
			FROM
				Pledge AS C
			LEFT JOIN
				Alliance AS A ON A.id = C.alliance_id
			LEFT JOIN
				user_data AS P ON P.char_id = C.ruler_id
			ORDER BY
				C.skill_level DESC, C.name_value DESC, membros DESC
		", "WORLD");
		return $sql;
		
	}
	
public static function OlympiadRanking() {
    $query = "
        SELECT  
            char_name, 
            subjob0_class, 
            olympiad_point, 
            clan.name as clan_name, 
            ally.name as ally_name
        FROM 
            lin2world.dbo.user_data usr
        LEFT JOIN 
            lin2world.dbo.user_nobless nob ON usr.char_id = nob.char_id 
        LEFT JOIN 
            lin2world.dbo.pledge clan ON usr.pledge_id = clan.pledge_id OR clan.pledge_id IS NULL
        LEFT JOIN 
            lin2world.dbo.Alliance ally ON clan.alliance_id = ally.id
        WHERE 
            usr.builder='0' AND 
            usr.account_id>'0' AND 
            nobless_type='1' AND 
            match_count>'10' AND 
            olympiad_point >'50'
        ORDER BY 
            subjob0_class asc, 
            olympiad_point desc
    ";
    
    return DB::Executa($query, "WORLD");
}

	public static function OlympiadAllHeroes() {
		
		$sql = DB::Executa("
			SELECT 
				C.char_name, 
				CASE WHEN (C.login > C.logout OR C.logout IS NULL) AND C.login IS NOT NULL THEN 1 ELSE 0 END AS online, 
				D.name AS clan_name, 
				A.name AS ally_name,
				C.subjob0_class AS base, 
				H.win_count AS count
			FROM
				user_nobless AS H
			LEFT JOIN
				user_data AS C ON C.char_id = H.char_id
			LEFT JOIN
				Pledge AS D ON D.pledge_id = C.pledge_id 
			LEFT JOIN
				Alliance AS A ON A.id = D.alliance_id
			WHERE
				H.win_count > '0' AND
				C.builder = '0'
			ORDER BY H.win_count DESC, C.subjob0_class ASC, C.char_name ASC
		", "WORLD");
		return $sql;
		
	}
	
	public static function OlympiadCurrentHeroes() {
		
		$sql = DB::Executa("
			SELECT 
				C.char_name, 
				CASE WHEN (C.login > C.logout OR C.logout IS NULL) AND C.login IS NOT NULL THEN 1 ELSE 0 END AS online, 
				D.name AS clan_name, 
				A.name AS ally_name,
				C.subjob0_class AS base
			FROM
				user_nobless AS H
			LEFT JOIN
				user_data AS C ON C.char_id = H.char_id
			LEFT JOIN
				Pledge AS D ON D.pledge_id = C.pledge_id 
			LEFT JOIN
				Alliance AS A ON A.id = D.alliance_id
			WHERE
				H.hero_type IN (1,2) AND
				C.builder = '0'
			ORDER BY H.win_count DESC, C.subjob0_class ASC, C.char_name ASC
		", "WORLD");
		return $sql;
		
	}
	
	public static function RaidbossStatus() {
		
		$sql = DB::Executa("
			SELECT
				npc_db_name, 
				alive, 
				time_low
			FROM
				npc_boss
			WHERE
				npc_db_name NOT LIKE 'sentinel_guard_%' 
				AND npc_db_name NOT LIKE '%_siege_%' 
				AND npc_db_name NOT LIKE 'acmboss%' 
				AND npc_db_name NOT LIKE '%b02_%' 
				AND npc_db_name NOT LIKE 'tbb%' 
				AND npc_db_name NOT LIKE 'tbf%' 
				AND npc_db_name NOT LIKE 'nurka%'  
				AND npc_db_name NOT LIKE 'devastated_%'
			ORDER BY
				time_low DESC, npc_db_name ASC
		", "WORLD");
		return $sql;
		
	}
	
	public static function Siege() {
		
		$sql = DB::Executa("
			SELECT
				CAS.id,
				CAS.name,
				CAS.next_war_time AS sdate, 
				CAS.tax_rate AS stax, 
				P.char_name, 
				C.name AS clan_name, 
				A.name AS ally_name,
				CAS.id
			FROM
				castle AS CAS
			LEFT JOIN
				Pledge AS C ON C.pledge_id = CAS.pledge_id
			LEFT JOIN
				Alliance AS A ON A.id = C.alliance_id
			LEFT JOIN
				user_data AS P ON P.char_id = C.ruler_id
		", "WORLD");
		return $sql;
		
	}
	
	public static function SiegeParticipants($castle_id) {
		
		$sql = DB::Executa("
			SELECT
				W.type, 
				C.name AS clan_name
			FROM
				castle_war AS W
			INNER JOIN
				Pledge AS C ON C.pledge_id = W.pledge_id
			WHERE
				W.castle_id = '".$castle_id."'
		", "WORLD");
		return $sql;
		
	}
	
}
