<?php

return array(
    'grabber' => array(
        '%.*%' => array(
            'test_url' => 'https://www.slate.fr/story/131894/robots-sexuels',
            'body' => array(
                '//article[@id="fullArticle"]'
            ),
            'strip' => array(                
                '//header[contains(@class, "width_wrap")]//h1',
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
                '//*[contains(@wibbitz, "embed-player-widget")]',
                '//*[@id="ligatus_slate_smartbox"]',
                '//*[@id="add_ads"]',
                '//footer',
                '//aside'
            )                     
        ),
    ),
);
