<?php

return array(
    'grabber' => array(
        '%.*%' => array(
            'test_url' => 'http://www.developpez.com/actu/99997/Sortie-d-une-nouvelle-build-Windows-10-Microsoft-Edge-se-dote-d-une-extension-Office-online-et-la-chasse-aux-bogues-s-ouvre-aux-insiders/',
            'body' => array(
                '//*[@id="actu"]//*[@class="content"]',
            ),
            'strip' => array(
                '//*[@class="inlineimg"]',
                '//*[@id="actu"]//*[@class="content"]/img',
            )            
        ),
    ),
);
