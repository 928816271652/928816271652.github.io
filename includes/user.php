<?php
include 'db.php';
class User extends DB
{
    private $name;
    private $username;


    public function exists($username, $password){
        $md5pass = md5($password);
        $query = $this->connect()->prepare('SELECT * FROM users WHERE username = :user AND password = :pass');
        $query->execute(['user' => $username, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($username){
        $query = $this->connect()->prepare('SELECT * FROM users WHERE username = :user');
        $query->execute(['user' => $username]);
        
        foreach ($query as $currentUser) {
            $this->name = $currentUser['name'];
            $this->username = $currentUser['username'];
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getUsername()
    {
        return $this->username;
    }
}