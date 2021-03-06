<?php

defined('TYPO3_MODE') || die;

$hasBackground = [
    'AND' => [
        'FIELD:background_color:!=:none',
        'FIELD:background_color:REQ:true',
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
    [
        'rmnd_content_items' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:rmnd_content/Resources/Private/Language/locallang.xlf:tt_content.rmnd_content_items',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'rmnd_content_items',
                'foreign_field' => 'tt_content',
            ]
        ],
        'header_layout' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:rmnd_content/Resources/Private/Language/locallang.xlf:tt_content.header_layout.text', '0'],
                    ['H1', '1'],
                    ['H2', '2'],
                    ['H3', '3'],
                    ['H4', '4'],
                    ['H5', '5'],
                    ['H6', '6'],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.6', '100']
                ],
                'default' => 0
            ]
        ],
        'background_color' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:rmnd_content/Resources/Private/Language/locallang.xlf:tt_content.background_color',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:rmnd_content/Resources/Private/Language/locallang.xlf:tt_content.background_color.none', 'none'],
                    ['LLL:EXT:rmnd_content/Resources/Private/Language/locallang.xlf:tt_content.background_color.primary', 'primary'],
                    ['LLL:EXT:rmnd_content/Resources/Private/Language/locallang.xlf:tt_content.background_color.secondary', 'secondary'],
                    ['LLL:EXT:rmnd_content/Resources/Private/Language/locallang.xlf:tt_content.background_color.accent', 'accent'],
                    ['LLL:EXT:rmnd_content/Resources/Private/Language/locallang.xlf:tt_content.background_color.white', 'white'],
                    ['LLL:EXT:rmnd_content/Resources/Private/Language/locallang.xlf:tt_content.background_color.black', 'black'],
                ],
                'default' => 'none'
            ],
            'onChange' => 'reload',
        ],
        'background_full_width' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:rmnd_content/Resources/Private/Language/locallang.xlf:tt_content.background_full_width',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                    ]
                ],
            ],
            'displayCond' => $hasBackground
        ],
        'space_before_inside' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:rmnd_content/Resources/Private/Language/locallang.xlf:tt_content.space_before_inside',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value', ''],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small', 'extra-small'],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small', 'small'],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium', 'medium'],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large', 'large'],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large', 'extra-large'],
                ],
                'default' => ''
            ],
            'displayCond' => $hasBackground
        ],
        'space_after_inside' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:rmnd_content/Resources/Private/Language/locallang.xlf:tt_content.space_after_inside',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value', ''],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small', 'extra-small'],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small', 'small'],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium', 'medium'],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large', 'large'],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large', 'extra-large'],
                ],
                'default' => ''
            ],
            'displayCond' => $hasBackground
        ]
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'frames',
    '--linebreak--,background_color,background_full_width,--linebreak--',
    'after:frame_class'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'frames',
    'space_before_inside',
    'after:space_before_class'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'frames',
    'space_after_inside',
    'after:space_after_class'
);
