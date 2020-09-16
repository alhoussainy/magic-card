<?php

namespace projetMagicCard\Services;

use projetMagicCard\Entity\Card;
use projetMagicCard\Entity\Color;

class CardService
{

    public function findAll()
    {
        $myfile = "./../var/cache/cards.json";

        if (file_exists($myfile)) {
            $stringjson = file_get_contents($myfile);
        } else {
            $url = "https://api.magicthegathering.io/v1/cards";
            $stringjson = file_get_contents($url);
            file_put_contents($myfile, $stringjson);
        }

        $jsonObject = json_decode($stringjson);

        $cardlist = [];

        foreach ($jsonObject->cards as $element) {

            $card = new Card();

            $card->setName($element->name);

            if (!property_exists($element, "image")) {
                $element->image = "";
            }

            if (!property_exists($element, "manaCost")) {
                $element->manaCost = "";
            }
            $card->setManaCost($element->manaCost);

            if (!property_exists($element, "text")) {
                $element->text = "";
            }
            $card->setType($element->type);
            $card->setDescription($element->text);
            $card->setImage($element->image);

            $colorlist = [];
            foreach ($element->colors as $elem) {
                $color = new Color();
                $color->setValue($elem);
                $colorlist[] = $color;
            }
            $card->setColorlist($colorlist);

            $cardlist[] = $card;
            ///$card=array_push($carlist,$element);

        }

        return $cardlist;

    }


}

;
