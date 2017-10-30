<?php

return array(
    'grabber' => array(
        '%.*%' => array(
            'test_url' => 'http://www.mangamag.fr/chroniques/chroniques-manga/helter-skelter/',
            'body' => array(
                '//article[@id="the-post"]'
            ),
            'strip' => array(     
                '//h1[contains(@class, "post-title")]',
                '//*[contains(@class, "post-meta")]',
                '//*[contains(@class, "clear")]',
                '//*[contains(@class, "updated")]',
                '//*[contains(@class, "vcard")]',
                '//*[contains(@class, "author")]',
                '//*[contains(@class, "header_infos")]',
                '//*[contains(@class, "banniere_top")]',
                '//*[contains(@class, "section-divider")]',
                '//*[contains(@class, "article-author")]',
                '//*[contains(@class, "article_author")]',
                '//*[contains(@class, "article-social")]',
                '//*[contains(@class, "reg-txt")]',
                '//*[contains(@class, "num-linked-startup")]',
                '//*[contains(@class, "share_box_wrapper")]',
                '//*[contains(@class, "OUTBRAIN")]',
                '//*[contains(@class, "tags")]',
                '//*[contains(@class, "bottom_ads")]',
                '//*[contains(@class, "comments")]',
                '//*[contains(@class, "media_legend")]',
                '//*[contains(@class, "share-post")]',
                '//*[contains(@wibbitz, "embed-player-widget")]',
                '//*[@id="ligatus_slate_smartbox"]',
                '//*[@id="add_ads"]',
                '//footer',
                '//aside'
            )                     
        ),
    ),
);
