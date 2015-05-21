<?php 
/**
* 
*/
class Wordlist{
	protected $link_id;

	function __construct(){
		require_once($_SERVER['DOCUMENT_ROOT']."/db.php");
		$this->link_id=mysql_connect($DB_HOST,$DB_USER,$DB_PWD);
		mysql_select_db("word");
		mysql_query("SET NAMES 'utf8'");
	}

	function queryimp($num){
		$sql="Select * from imp where gro=1 order by rand() limit $num";
		$implist=array();
		$implisttemp=mysql_query($sql);
		while ($rowi=mysql_fetch_array($implisttemp)){	
			array_push($implist, $rowi);
		}
		return array('status' => 1, 'data' => $implist );
	}

	function querycurrent($num){
		$sql="Select id from queryrecord order by unixstamp DESC limit 10 ";
		$idtmp=mysql_query($sql);
		$idlist= array();
		while ($rowi=mysql_fetch_array($idtmp)){	
			array_push($idlist, $rowi);
		}
		$targetid=$idlist[(int)array_rand($idlist,1)][0];
		$sql="Select list, gro, idlo, idup from queryrecord where id = $targetid ";
		$recordtmp=mysql_query($sql);
		while ($rowi=mysql_fetch_array($recordtmp)){	
			$list=$rowi['list'];
			$gro=$rowi['gro'];
			$idlo=$rowi['idlo'];
			$idup=$rowi['idup'];
		}
		$sql="Select * from $list where gro= $gro and id > $idlo and id < $idup order by rand() limit $num";
		$getlist=array();
		$getlisttemp=mysql_query($sql);
		while ($rowi=mysql_fetch_array($getlisttemp)){	
			array_push($getlist, $rowi);
		}
		return array('status' => 1, 'data' => $getlist );
	}

	function __destruct (){
		mysql_close($this->link_id);
	}
}
	

?>
