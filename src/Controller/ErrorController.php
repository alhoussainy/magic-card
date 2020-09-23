<?php


namespace projetMagicCard\Controller;


use projetMagicCard\Services\totoInterface;

class ErrorController
{
public function showerror($statusCode){
    $statusText=[
        404=>"Not Fund",
        500=>"Internal Server Error"
    ];
    header("HTTP/1.1 $statusCode $statusText[$statusCode]");
    header("Content-Type: text/html; charset=utf-8");
    include __DIR__.'/../../templates/card/error.html.php';
}
}