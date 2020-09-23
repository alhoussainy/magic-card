<?php


namespace projetMagicCard\Services;

class ApiService
{
    public function fetch($url,$filename){

        $filename= "./../var/cache/$filename";

        if (file_exists($filename)) {
            $stringjson = file_get_contents($filename);
        } else {
            //$lien=$url;
            //$url = "https://api.magicthegathering.io/v1/cards";
            //$stringjson = file_get_contents($url);
            $stringjson = file_get_contents($url);
            file_put_contents($filename, $stringjson);
        }
 return $jsonObject=json_decode($stringjson);
    }

}