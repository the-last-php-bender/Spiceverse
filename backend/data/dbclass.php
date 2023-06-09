<?php
class Data{
	private$pdo;
	public function connect_sql(){
		$this->pdo=new PDO("mysql:host=https://containers-us-west-59.railway.app:7425;dbname=railway",'root','VGriODK6Zc3o6lZQ32FY');
		return $this->pdo;
	}
}
?>