<?php

require_once './vendor/autoload.php';

$token = 'hG0tAxNAC1PgRQ01ctOKgey62qndAITr4DJQsWK5TVkY6r3TOixd7JIgJwzHUvFEED66ebv8s60d/a9lxuAFRAbUdzsIUiSArMD4Hsh1Wa9rI0Ai3ZtrpwivcdUtiz3vdLahj6zTG/SrplObFojZuwdB04t89/1O/w1cDnyilFU=';
$secret = '65369c071154b7ed39dec0591b220927';
$uid = 'U34a89770e846f5205ce6e786b6bf3895';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $secret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->pushMessage($uid, $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
