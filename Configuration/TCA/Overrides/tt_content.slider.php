<?php

defined('TYPO3') or die();

(function () {

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'LLL:EXT:t3easy_slider/Resources/Private/Language/locallang_ttc.xlf:CType.t3easy_slider.title',
            't3easy_slider',
            'content-textmedia',
            'default',
        ],
        'textmedia',
        'after'
    );

    $additionalColumns = [
        'tx_t3easyslider_autoplay' => [
            'exclude' => true,
            'label' => 'LLL:EXT:t3easy_slider/Resources/Private/Language/locallang_ttc.xlf:tx_t3easyslider_autoplay',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                    ],
                ],
            ],
        ],
        'tx_t3easyslider_show_bullets' => [
            'exclude' => true,
            'label' => 'LLL:EXT:t3easy_slider/Resources/Private/Language/locallang_ttc.xlf:tx_t3easyslider_show_bullets',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                    ],
                ],
            ],
        ],
        'tx_t3easyslider_label' => [
            'exclude' => true,
            'label' => 'LLL:EXT:t3easy_slider/Resources/Private/Language/locallang_ttc.xlf:tx_t3easyslider_label',
            'config' => [
                'type' => 'input',
                'max' => 255,
                'size' => 50,
            ],
        ],
        'tx_t3easyslider_timer_delay' => [
            'exclude' => true,
            'label' => 'LLL:EXT:t3easy_slider/Resources/Private/Language/locallang_ttc.xlf:tx_t3easyslider_timer_delay',
            'config' => [
                'type' => 'input',
                'size' => 5,
                'eval' => 'trim,int',
                'default' => 5000,
                'range' => [
                    'lower' => 100,
                    'upper' => 60000,
                ],
                'slider' => [
                    'step' => 100,
                    'width' => 600,
                ],
            ],
        ],
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_content',
        $additionalColumns
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'tt_content',
        'tx_t3easyslider_settings',
        'tx_t3easyslider_label, --linebreak--, tx_t3easyslider_timer_delay, --linebreak--, tx_t3easyslider_autoplay, tx_t3easyslider_show_bullets'
    );

    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['t3easy_slider'] = 'mimetypes-x-content-text-media';

    $defaultCropVariant = [
        'allowedAspectRatios' => [
            '16:9' => [
                'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.16_9',
                'value' => 16 / 9
            ],
            '3:2' => [
                'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.3_2',
                'value' => 3 / 2
            ],
            '4:3' => [
                'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                'value' => 4 / 3
            ],
            '1:1' => [
                'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.1_1',
                'value' => 1.0
            ],
            'NaN' => [
                'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                'value' => 0.0
            ],
        ],
        'selectedRatio' => 'NaN',
        'cropArea' => [
            'x' => 0.0,
            'y' => 0.0,
            'width' => 1.0,
            'height' => 1.0,
        ],
    ];

    $GLOBALS['TCA']['tt_content']['types']['t3easy_slider']['columnsOverrides'] = [
        'assets' => [
            'config' => [
                'minitems' => 1,
                'overrideChildTca' => [
                    'columns' => [
                        'crop' => [
                            'config' => [
                                'cropVariants' => [
                                    'default' => [
                                        'disabled' => true,
                                    ],
                                    'sm' => $defaultCropVariant + ['title' => 'S'],
                                    'md' => $defaultCropVariant + ['title' => 'M'],
                                    'lg' => $defaultCropVariant + ['title' => 'L'],
                                    'xl' => $defaultCropVariant + ['title' => 'XL'],
                                    'xxl' => $defaultCropVariant + ['title' => 'XXL'],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ];

    $GLOBALS['TCA']['tt_content']['types']['t3easy_slider']['showitem'] = '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,
            assets,
            --palette--;;tx_t3easyslider_settings,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ';
})();