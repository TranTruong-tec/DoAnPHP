
<?php 

class khachhangmodel extends DModel{

    public function __construct(){
        parent::__construct();
    }
    public function insertcustomer($table_customer,$data){
        return $this->db->them($table_customer,$data);
    }
    public function login($table_KH,$username,$password){
        $sql = "SELECT * FROM $table_KH WHERE email=? AND password=? ";
        return $this->db->affectedRows($sql,$username,$password);
    }	
    public function getLogin($table_KH,$username,$password){
        $sql = "SELECT * FROM $table_KH WHERE email=? AND password=? ";
        return $this->db->selectUser($sql,$username,$password);
    }

}



?>

