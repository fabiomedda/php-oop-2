<?php

class User {
    public $name;
    public $username;
    public $email;
    protected $password;

    public function __construct(string $name, string $username, string $email) {
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }
    
}