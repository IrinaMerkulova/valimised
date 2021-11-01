<?php
$kasutaja="irinamerkulova20";
$andmebaas="irinamerkulova20";
$parool="123456";
$serverinimi="localhost";
$yhendus=new mysqli($serverinimi, $kasutaja,
    $parool, $andmebaas);
$yhendus->set_charset("utf8");