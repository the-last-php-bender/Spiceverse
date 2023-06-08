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
        $this->query = 'INSERT INTO lavatb (firstname,lastname,spicename,email,price,pword)VALUES(?,?,?,?,?,?)';
        $this->prepare = $this->processQuery->query( $this->query );
        $this->prepare->execute( [ $a, $b, $c, $d, $e, $f ] );
        return $this->prepare;
    }

    public function login_user()
 {
        $this->processQuery = new processQuery();
        $this->query = 'SELECT * FROM lavatb WHERE email=?';
        $this->execute = $this->processQuery->query( $this->query );
        return $this->execute;

    }

    public function hash( $password ) {
        $hash = password_hash( $password, PASSWORD_DEFAULT );
        return $hash;
    }
}
// //      if($upload){
//     echo   json_encode(["STATUS"=>200,"MESSAGE"=>"IMAGE UPLDADED SUCCESSFULLY"]);
// }else{
//  echo   json_encode(["STATUS"=>500,"MESSAGE"=>"AN ERROR OCCURED"]);
// }json_encode(["STATUS"=>400,"MESSAGE"=>"THIS IS A WRONG IMAGE FORMAT "]);
// json_encode(["STATUS"=>402,"MESSAGE"=>"FiLE IS TOO LARGE"]);
// json_encode(["STATUS"=>200,"MESSAGE"=>"UPLOADED SUCCESSFULLY"]); 
?>