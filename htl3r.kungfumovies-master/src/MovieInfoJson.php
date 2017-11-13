<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 13.11.2017
 * Time: 11:15
 */

namespace HTL3R\KungFuMovies;


class MovieInfoAsJson extends AbstractKungFuMovie
{
    private $json = "Kein Filmname";

    public function __construct($name, $rating, $movieURI, $json)
    {
        parent::__construct($name, $rating, $movieURI);
        $this->$json = $json;
    }

    public function getMovieInfoAsJsone(){
        return $this->json;
    }
}