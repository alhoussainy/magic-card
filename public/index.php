<?php

use projetMagicCard\Entity\Card;
use projetMagicCard\Entity\Color;
use projetMagicCard\Entity\User;

use projetMagicCard\Services\CardService;


include "./../vendor/autoload.php";

//$mycard=new Card();
$jsondata=new CardService();

$cardlist=$jsondata->findAll();

var_dump($cardlist);







