<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Slider',
    'description' => 'Slider',
    'category' => 'fe',
    'author' => 'Jan Kiesewetter',
    'author_email' => 'jan@t3easy.de',
    'author_company' => 't3easy',
    'state' => 'stable',
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.4.99',
            'fluid' => '10.4.0-12.4.99',
            'frontend' => '10.4.0-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [
            'fluid_styled_content' => '10.4.0-12.4.99',
        ],
    ],
];
