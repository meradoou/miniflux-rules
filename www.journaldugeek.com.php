<?php

return array(
    'grabber' => array(
        '%.*%' => array(
            'test_url' => 'http://www.jdubuzz.com/2016/07/26/vestige-atlantide-google-earth/',
            'body' => array(
                '//*[@itemprop="articleBody"]',
                '//*[contains(@class, "lire-aussi")]'
            ),
        ),
    ),
);
