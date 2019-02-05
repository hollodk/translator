<?php

use Translator\Translator;

require_once(__DIR__.'/vendor/autoload.php');

$text = 'Hi darling, how are you?';

$key = '';
$translate = new Translator($key);

$r = $translate->process($text, 'da');

var_dump($r);
