<?php
namespace api\BuscadorDeCursos;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Buscador
{
    public function __construct(ClientInterface $httpClient, Crawler $crawler)
    {

    }

}