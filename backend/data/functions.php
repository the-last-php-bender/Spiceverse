<?php
include 'process.php';

class User
 {
    public $sql;
    public $sql1;
    public $processQuery;
    public $execute;
    public $query;
    public $prepare;
    public function insert_user( $a, $b, $c, $d, $e, $f ) {
        $this->processQuery = new processQuery();
        $this->query = 'INSERT INTO spicetb (firstname,lastname,spicename,email,price,pword)VALUES(?,?,?,?,?,?)';
        $this->prepare = $this->processQuery->query( $this->query );
        $this->prepare->execute( [ $a, $b, $c, $d, $e, $f ] );
        return $this->prepare;
    }

    public function login_user()
 {
        $this->processQuery = new processQuery();
        $this->query = 'SELECT * FROM spicetb WHERE email=?';
        $this->execute = $this->processQuery->query( $this->query );
        return $this->execute;

    }

    public function hash( $password ) {
        $hash = password_hash( $password, PASSWORD_DEFAULT );
        return $hash;
    }
}
?>