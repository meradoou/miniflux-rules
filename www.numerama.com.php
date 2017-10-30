<?php

return array(
    'grabber' => array(
        '%.*%' => array(
            'test_url' => 'http://www.developpez.com/actu/99997/Sortie-d-une-nouvelle-build-Windows-10-Microsoft-Edge-se-dote-d-une-extension-Office-online-et-la-chasse-aux-bogues-s-ouvre-aux-insiders/',
            'body' => array(
                '//article[contains(@class, "post-content")]'
            ),
            'strip' => array(
                '//*[@class="post-author-bloc"]',
                '//*[@class="post-share"]',
                '//*[@class="related-article"]',
                '//*[@class="embedded-tag-container"]',
                '//*[contains(@class, "num-linked-startup")]',
                '//span[contains(@class, "summary-entry")]',
                '//footer',
                '//script'
            )
        ),
    ),
);
