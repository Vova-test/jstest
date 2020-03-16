<?php
require("vendor/autoload.php");

use PHPHtmlParser\Dom;

$dom = new Dom;
$client = new \GuzzleHttp\Client();

$response = $client->request('GET', 'http://www.laughfactory.com/jokes/latest-jokes');

$dom->load($response->getBody());
$jokeblocks = $dom->find('.jokes');

$data = [];

foreach ($jokeblocks as $jokeblock)
{
	$p = $jokeblock->find('p', 0);
	$like = $jokeblock->find('.like',0);
	$dislike = $jokeblock->find('.dislike',0);
	$likeText = $like->find('span', 0);
	$dislikeText = $dislike->find('span', 0);
	$data[] = [
		'joke' => $p->innerHtml,
		'like' => $likeText->innerHtml,
		'dislike' => $dislikeText->innerHtml
	];
}

$json = json_encode($data);

file_put_contents('joke_json.txt', $json);

var_dump('done');

