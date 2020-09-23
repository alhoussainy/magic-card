<?php


namespace projetMagicCard\Services\Builder;

use projetMagicCard\Entity\Card;

class CardBuilderService
{

    public function buildCardList($apicardlist)
    {

        $cardlist = [];
        $colorbuilder = new ColorBuilderService();
        $apicardBuilder = new ApiCardbuilderService();

        foreach ($apicardlist as $value) {
            $apicardBuilder->buildcard($value);
            if ($value->imageUrl) {
                $card = new Card();
                $card->setManaCost($value->manaCost);
                $card->setName($value->name);
                $card->setDescription($value->text);
                $card->setImageUrl(str_ireplace("http","https",$value->imageUrl));
                $card->setColorlist($colorbuilder->buildColorList($value->colors));
                $cardlist[] = $card;
            }
        }
        return $cardlist;
    }

}