<?php
class user{
    private $id;
    private $user;
    private $password;
    private $email;

    public function __construct($id,$user,$password,$email){
        $this->id=$id;
        $this->user=$user;
        $this->password=$password;
        $this->email=$email;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->user;
    }

    public function getPassword(){
        return $this->password;
    }
    
    public function getEmail(){
        return $this->email;
    }

    function __destruct(){
    }
}
?>