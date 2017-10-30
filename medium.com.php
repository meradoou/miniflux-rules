<?php

return array(
    'grabber' => array(
        '%.*%' => array(
            'test_url' => 'https://medium.com/@joshfoster_14132/best-javascript-shuffle-algorithm-c2c8057a3bc1#.gtpve5ce5',
            'body' => array(
                '//article[contains(@class, "postArticle--full")]'
            ),
            'strip' => array(
                '//header',
                '//*[contains(@class, "section-divider")]',
                '//*[contains(@class, "article-author")]',
                '//*[contains(@class, "article-social")]',
                '//*[contains(@class, "reg-txt")]',
                '//*[contains(@class, "num-linked-startup")]',
                '//footer'
            )                     
        ),
    ),
);
