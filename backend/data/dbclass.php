<?php
class Data{
	private$pdo;
	public function connect_sql(){
		$this->pdo=new PDO("mysql:host=localhost;dbname=lavadb",'root','');
		return $this->pdo;
	}
}
?>