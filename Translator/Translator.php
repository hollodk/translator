<?php

namespace Translator;

use Google\Cloud\Translate\TranslateClient;

class Translator
{
    private $client;

    public function __construct($key)
    {
        $this->client = new TranslateClient(['key' => $key]);
    }

    public function process($text, $targetLanguage)
    {
        $result = $this->client->translate($text,
            ['target' => $targetLanguage]
        );

        if (isset($result['text']) && strlen($result['text']) > 0) {
            $output = preg_replace("/&amp;/", "&", $result['text']);
            $output = preg_replace("/&#39;/", "'", $output);

            return $output;
        }

        return $text;
    }
}
