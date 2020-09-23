<?php


namespace projetMagicCard\Services\Builder;


class ApiCardbuilderService
{
public function buildCard(\stdClass $card):\stdClass

{

    $card->imageUrl=$card->imageUrl ?? "";
    $card->text=$card->text ?? "";
    $card->manaCost=$card->manaCost ?? "";
   return $card;

}
}