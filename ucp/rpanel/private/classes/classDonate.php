<?php

class Donate {

	public static function countDonations( $buscar='', $status='') {
		
		$whereAdd = "";
		
		if(!empty($buscar)) {
			$whereAdd .= " AND (protocolo LIKE '%".$buscar."%' OR metodo_pgto LIKE '%".$buscar."%' OR account LIKE '%".$buscar."%' OR (quant_coins + coins_bonus) = '".$buscar."' OR quant_coins = '".$buscar."' OR valor = '".(intval($buscar) > 0 ? save_preco($buscar) : 0)."')";
		}

		if(!empty($status)) {
			$whereAdd .= " AND D.status = '".$status."'";
		}
		
		$sql = "SELECT COUNT(*) AS quant FROM site_donations WHERE status <> '2' ".$whereAdd;
		return DB::Executa($sql, "SITE");
		
	}

	public static function listDonations($pgBeg, $pgMax, $buscar='', $status='') {
		
		$whereAdd = "";

		if(!empty($buscar)) {
			$whereAdd .= " AND (protocolo LIKE '%".$buscar."%' OR metodo_pgto LIKE '%".$buscar."%' OR account LIKE '%".$buscar."%' OR (quant_coins + coins_bonus) = '".$buscar."' OR quant_coins = '".$buscar."' OR valor = '".(intval($buscar) > 0 ? save_preco($buscar) : 0)."')";
		}

		if(!empty($status)) {
			$whereAdd .= " AND D.status = '".$status."'";
		}
		
		$sql = "SELECT * FROM (SELECT ROW_NUMBER() OVER (ORDER BY data DESC) AS row, t1.* FROM site_donations AS t1 WHERE status <> '2' ".$whereAdd.") AS t2 WHERE t2.row BETWEEN ".($pgBeg+1)." AND ".($pgBeg+$pgMax)."";
		return DB::Executa($sql, "SITE");
		
	}

	public static function findConcluidas() {
		
		$sql = "SELECT COUNT(*) AS quant FROM site_donations WHERE status = '3' OR status = '4'";
		return DB::Executa($sql, "SITE");
		
	}

	public static function searchValTotal() {
		
		$sql = "SELECT SUM(valor) AS val, currency FROM site_donations WHERE status = '3' OR status = '4' GROUP BY currency";
		return DB::Executa($sql, "SITE");
		
	}

	public static function countPending($buscar='') {
		
		$whereAdd = "";
		
		if(!empty($buscar)) {
			$whereAdd .= " AND (protocolo LIKE '%".$buscar."%' OR metodo_pgto LIKE '%".$buscar."%' OR account LIKE '%".$buscar."%' OR (quant_coins + coins_bonus) = '".$buscar."' OR quant_coins = '".$buscar."' OR valor = '".(intval($buscar) > 0 ? save_preco($buscar) : 0)."')";
		}

		$sql = "SELECT COUNT(*) AS quant FROM site_donations WHERE (status = '1' OR status = '3') ".$whereAdd;
		return DB::Executa($sql, "SITE");
		
	}

	public static function listPending($pgBeg, $pgMax, $buscar='') {
		
		$whereAdd = "";

		if(!empty($buscar)) {
			$whereAdd .= " AND (protocolo LIKE '%".$buscar."%' OR metodo_pgto LIKE '%".$buscar."%' OR account LIKE '%".$buscar."%' OR (quant_coins + coins_bonus) = '".$buscar."' OR quant_coins = '".$buscar."' OR valor = '".(intval($buscar) > 0 ? save_preco($buscar) : 0)."')";
		}

		$sql = "SELECT * FROM (SELECT ROW_NUMBER() OVER (ORDER BY status DESC, data DESC) AS row, t1.* FROM site_donations AS t1 WHERE (status = '1' OR status = '3') ".$whereAdd.") AS t2 WHERE t2.row BETWEEN ".($pgBeg+1)." AND ".($pgBeg+$pgMax)."";
		return DB::Executa($sql, "SITE");
		
	}

	public static function findDonation($protocolo) {
		
		$sql = "SELECT TOP 1 * FROM site_donations WHERE status <> '2' AND protocolo = '".$protocolo."'";
		return DB::Executa($sql, "SITE");
		
	}

	public static function paidDonation($protocolo, $data, $coinsEntregues) {
		
		$sql = "UPDATE site_donations SET status = '4', coins_entregues = '".$coinsEntregues."', ultima_alteracao = '".$data."' WHERE protocolo = '".$protocolo."' AND status <> '2'";
		return DB::Executa($sql, "SITE");
		
	}

	public static function insertBalance($dest, $count) {
		
		$checkExists = DB::Executa("SELECT TOP 1 * FROM site_balance WHERE account = '".$dest."'", "SITE");
		if(count($checkExists) > 0) {
			$sql = DB::Executa("UPDATE site_balance SET saldo = (saldo+".$count.") WHERE account = '".$dest."'", "SITE");
		} else {
			$sql = DB::Executa("INSERT INTO site_balance (account, saldo) VALUES ('".$dest."', '".$count."')", "SITE");
		}
		
		return $sql;
		
	}

	public static function deleteDonation($protocolo) {
		
		$sql = "UPDATE site_donations SET status = '2' WHERE protocolo = '".$protocolo."' AND status <> '2'";
		return DB::Executa($sql, "SITE");
		
	}

}
