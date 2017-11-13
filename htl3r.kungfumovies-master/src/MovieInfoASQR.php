<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 13.11.2017
 * Time: 11:25
 */

namespace HTL3R\KungFuMovies;


class MovieInfoASQR extends AbstractKungFuMovie
{
    private $qr = "";

    public function __construct($name, $rating, $movieURI, $qr)
    {
        parent::__construct($name, $rating, $movieURI);
        $this->qr = $qr;
    }

    public function getMovieQRCodeForBrowser(){
        return $this->qr;
    }
}