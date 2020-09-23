<?php


namespace projetMagicCard\Controller;


class userController extends Controller
{

    public function UserController(){

//        header("HTTP/1.1 200 OK");
//        header("Content-Type: text/html; charset=utf-8");
//        $titre="Create Account";
//        $email="email";
//        $password="password";

        $this->render("/user/creat.html.php",[
            "titre"=>"Create Account",

        ]);
        //include __DIR__.'/../../templates/user/creat.html.php';

    }



}