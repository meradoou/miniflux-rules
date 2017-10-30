<?php
return array(
    'grabber' => array(
        '%.*%' => array(
            'test_url' => 'http://www.blog-nouvelles-technologies.fr/119209/google-ajoute-appels-video-duo-android/',
            'body' => array(
                '//article[contains(@class, "post")]//*[@class="entry"]',
            ),
            'strip' => array(
                '//link',
                '//*[contains(@class, "article_navigation")]',
                '//*[contains(@class, "single-header")]',
                '//*[contains(@class, "post-cate-info")]',
                '//*[contains(@class, "post-title")]',
                '//*[contains(@class, "breadcrumbs")]',
                '//*[contains(@class, "post-meta-info")]',
                '//*[contains(@class, "box-share")]',
                '//*[contains(@class, "box-author")]',
                '//*[contains(@class, "single-nav")]',
                '//*[contains(@class, "single-tag-wrap")]',
                '//*[contains(@class, "related-wrap")]',
                '//h1',
                '//*[contains(@class, "article_toolbarMain")]',
                '//*[contains(@class, "article_imagehaute_box")]',
            ),
        ),
    ),
);
