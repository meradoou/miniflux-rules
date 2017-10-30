<?php

return array(
    'grabber' => array(
        '%.*%' => array(
            'test_url' => 'http://www.footmercato.net/premier-league/chelsea-les-grands-oublies-d-antonio-conte_191092',
            'body' => array(
                '//article[contains(@class, "article")]'
            ),
            'strip' => array(
                '//*[contains(@class, "article-date")]',
                '//*[contains(@class, "article-author")]',
                '//*[contains(@class, "article-social")]',
                '//*[contains(@class, "reg-txt")]',
                '//*[contains(@class, "num-linked-startup")]',
                '//footer'
            )            
        ),
    ),
);
