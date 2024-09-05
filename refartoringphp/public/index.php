<?php

require '../vendor/autoload.php';

$element = new \App\HtmlElement('p',['id'=>'my_paragraft'],'Este es el contenido');

echo $element->render();

$element = new \App\HtmlElement('p',[],'Este es el contenido 2');

echo $element->render();