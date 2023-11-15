<?php

defined('TYPO3') or die();

(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        't3easy_slider',
        'Configuration/PageTs/Slider.tsconfig',
        'Slider settings'
    );
})();