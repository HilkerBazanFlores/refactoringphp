<?php

require '../vendor/autoload.php';

$element = new \App\HtmlElement('p',[],'Este es el contenido');

echo $element->open().'Cualquier contenido'.close();

exit;

echo htmlentities($element->render(), ENT_QUOTES, 'UTF-8');

echo '<br><br>';

$element = new \App\HtmlElement('p',['id'=>'my_paragraph'],'Este es el contenido');

echo htmlentities($element->render(), ENT_QUOTES, 'UTF-8');

echo '<br><br>';

$element = new \App\HtmlElement('p', ['id'=>'my_paragraph','class'=>'paragraph'],'Este es el contenido');

echo htmlentities($element->render(), ENT_QUOTES, 'UTF-8');

echo '<br><br>';

echo $element->render();