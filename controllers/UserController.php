<?php
namespace Controllers;

class UserController extends BaseController{
    

    public function index(){
        $this->model("UserModel")->saveUser("Hello world");
        $this->renderView("home",array(
            'pageTitle'=>'Home Page'
        ));
    }

    

    public function listUser() {
        $this->renderView("user/detailuser",array(
            'listUser'=>[
                $this->model("UserModel")->getUserByName("arief"),
                $this->model("UserModel")->getUserByName("hello")
            ]
        ));
    }
}
