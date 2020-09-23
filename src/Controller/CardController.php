<?php


namespace projetMagicCard\Controller;

use projetMagicCard\Services\CardService;

class CardController extends Controller
{

    public function showAll()
    {
//        header("HTTP/1.1 200 OK");
//        header("Content-Type: text/html; charset=utf-8");
        $cardservice = new CardService();
        $page = (int)filter_input(INPUT_GET, "page");
        if (0 === $page) {
            $page = 1;
        }
        $color = filter_input(INPUT_GET, "colors");
        $option = [];
        if (in_array($color, ["red", "green", "blue", "black", "white"])) {
            $option["colors"] = $color;
        }
        $option["page"] = $page;
        $optionsuivant = $option;
        $optionsuivant["page"]=$page+1;
        $optionavant = $option;
        $optionavant["page"]=$page-1;
        $cardlist = $cardservice->findAll($option);

        $this->render("card/showcards.html.php",[
            "optionsuivant"=>$optionsuivant,
            "optionavant"=>$optionavant,
            "cardlist"=>$cardlist
        ]);
        //include __DIR__ . '/../../templates/card/showcards.html.php';

    }

}