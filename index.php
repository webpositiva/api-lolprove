<?php

require_once("lolprove/LolProve.php");
require_once("lolprove/Unirest.php");

//$lolprove = new LolProve("Kizone");

//$lolprove->getSummonerInfos();

$response = Unirest::get(
  "https://teemojson.p.mashape.com/datadragon/champion",
  array(
    "X-Mashape-Authorization" => "0PMwcbjih9s7WQQXMpRExRw4vIU2q8A7"
  ),
  null
);
print_r($response);