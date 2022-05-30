<?php

require 'vendor/autoload.php';
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['verify' => false]);
$res = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');
$html = $res->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);
$cursos = $crawler->filter("span.card-curso__nome");

foreach ($cursos as $curso){
    echo PHP_EOL. $curso->textContent . PHP_EOL;
}