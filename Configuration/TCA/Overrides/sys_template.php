<?php

defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    't3easy_slider',
    'Configuration/TypoScript/Standalone/',
    'Standalone'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    't3easy_slider',
    'Configuration/TypoScript/WithFluidStyledContent/',
    'Together with Fluid Content Elements'
);
