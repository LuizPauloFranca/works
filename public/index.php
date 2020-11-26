<?php

require "../app/functions/DateConv.php";

$dateFormat = new DateConv();

echo ($dateFormat -> dateToBR("2020-11-26")) . "<br>";
echo ($dateFormat -> dateToUs("26/11/2020")) . "<br>";

