<?php


namespace projetMagicCard\Services\Builder;

use projetMagicCard\Entity\Color;

class ColorBuilderService
{

    public function buildColorList($apicolorlist):array

    {
        $colorlist = [];
        foreach ($apicolorlist as $elem) {
            $color = new Color();
            $color->setValue($elem);
            $colorlist[] = $color;
        }
        return $colorlist;
    }

}