<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 13.11.2017
 * Time: 11:30
 */


require "vendor/autoload.php";
use HTL3R\KungFuMovies\MovieInfoAsJson;
use HTL3R\KungFuMovies\MovieInfoASQR;


$filmQR = new MovieInfoASQR("QRs Sieg", "10/10", "Youtube.com/movieFile", "12898397124718623489");
$filmJson = new MovieInfoAsJson("Jasons Kampf", "10/10", "Youtube.com/movieFile2", "This is a good movie");

echo "<h1> Der Mann mit der toten Kralle </h1>";

echo "<a href='index.php'>Film als Json</a>";
echo "</br>";
echo "<a href='index.php'>Film als QR</a>";

