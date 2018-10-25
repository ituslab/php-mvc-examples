<?php

namespace Model;

class UserModel extends BaseModel{


    
    public function saveUser($name){
        echo  "save user " .$name;
    }

    public function getUserByName($name) {
        return "User::".$name;
    }
}