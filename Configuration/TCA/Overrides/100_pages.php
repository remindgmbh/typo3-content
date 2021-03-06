<?php

defined('TYPO3_MODE') || die;

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'pages',
    [
        'overview_label' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:rmnd_content/Resources/Private/Language/locallang.xlf:pages.overview_label',
            'config' => [
                'type' => 'input',
            ]
        ]
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'pages',
    'title',
    '--linebreak--,overview_label',
);
