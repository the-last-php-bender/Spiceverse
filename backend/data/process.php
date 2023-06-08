<?php
include 'dbclass.php';
class processQuery{
	public function query($sql){
		$query=new Data();
		$stmt=$query->connect_sql();
		$stmt1=$stmt->prepare($sql);
		return $stmt1;
	}
}
?>