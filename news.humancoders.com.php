<?php

return array(
    'grabber' => array(
        '%.*%' => array(
            'test_url' => 'http://news.humancoders.com/t/android/items/14867-les-progressive-web-apps-de-google-arrivent-dans-l',
            'body' => array(
                '//*[contains(@class, "items_show")]//*[@class="description"]'
            ),
            'strip' => array(
                '//*[@class="post-author-bloc"]',
                '//*[@class="post-share"]',
                '//*[@class="related-article"]',
                '//*[@class="embedded-tag-container"]',
                '//*[contains(@class, "num-linked-startup")]',
                '//span[contains(@class, "summary-entry")]',
                '//footer'
            )
        ),
    ),
);
