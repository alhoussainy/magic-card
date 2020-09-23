<?php

namespace projetMagicCard\Services;

use projetMagicCard\Entity\Card;
use projetMagicCard\Entity\Color;
use projetMagicCard\Services\ApiService;
use projetMagicCard\Services\Builder\CardBuilderService;
use projetMagicCard\Services\Builder\ColorBuilderService;

class CardService
{

    public function findAll($option): array
    {
        $url = "https://api.magicthegathering.io/v1/cards?" . http_build_query($option);
        $cash = "cards" . http_build_query($option);
        $cardbuilder = new CardBuilderService();
        $paiservice = new ApiService();
        $json = $paiservice->fetch($url, "$cash.json");
        $carlist = $cardbuilder->buildCardList($json->cards);
        return $carlist;
    }

}
