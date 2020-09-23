<?php
//
//
//namespace projetMagicCard\Services;
//
//use projetMagicCard\Entity\Card;
//use projetMagicCard\Entity\Color;
//use projetMagicCard\Services\ApiService;
//
//class Cardbuilder
//{
//    public function buildcard()
//    {
//        $url = "https://api.magicthegathering.io/v1/cards";
//        $filename = "cards.json";
//        $cardlist = [];
//        $jsondata = new ApiService();
//        $jsondata = $jsondata->fetch($url, $filename);
//// Nos données json sont de type stdclass avec comme attribut.Donc je dois me recreer une nouvelle
//        foreach ($jsondata->cards as $element) {
//
//            $card = new Card();
//            if (!property_exists($element, "imageUrl")) {
//                continue;
//                // $element->imageUrl = "";
//            }
//            if (!property_exists($element, "manaCost")) {
//                $element->manaCost = "";
//            }
//            if (!property_exists($element, "text")) {
//                $element->text = "";
//            }
//            $card->setName($element->name);
//            $card->setManaCost($element->manaCost);
//            $card->setType($element->type);
//            $card->setDescription($element->text);
//            $card->setImageUrl($element->imageUrl);
////            $colorlist = [];
////            foreach ($element->colors as $elem) {
////                $color = new Color();
////                $color->setValue($elem);
////                $colorlist[] = $color;
////            }
//            $card->setColorlist($colorlist);
//            $cardlist[] = $card;
//            ///$card=array_push($carlist,$element);
//
//        }
//        return $cardlist;
//    }
//
//}