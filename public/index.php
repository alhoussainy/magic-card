<?php

use projetMagicCard\Entity\Card;
use projetMagicCard\Entity\Color;
use projetMagicCard\Entity\User;
use projetMagicCard\Controller\CardController;

use projetMagicCard\Services\CardService;
use projetMagicCard\Services\Cardbuilder;
use projetMagicCard\Controller\ErrorController;
use projetMagicCard\Controller\userController;
include "./../vendor/autoload.php";


////$mycard=new Card();
//$jsondata=new CardService();
//
//$cardlist=$jsondata->findAll();
//
//var_dump($cardlist);


$url=filter_input(INPUT_SERVER,"REQUEST_URI");

if ("/cards"===$url || "/cards?"===substr($url,0,7) ){

    $card=new CardController();
   $card=$card->showAll();
}elseif ("/user/create"===$url){

    $user= new userController();
   $user= $user->UserController();

}else
    {
$error=new ErrorController();
$error=$error->showerror(404);

}




//if ("/cards"===$url){
//
//    $card=new CardController();
//    $card=$card->showAll();
//
//}elseif ("/cards?page=".filter_input(INPUT_GET,"page")===$url){
//    $card=new CardController();
//    $card=$card->showAll();
//}elseif ("/cards?color=".filter_input(INPUT_GET,"color")===$url){
//    $card=new CardController();
//    $card=$card->showAll();
//}



