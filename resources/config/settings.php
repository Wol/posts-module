<?php

use Anomaly\SelectFieldType\Handler\Layouts;

return [
    'permalink_structure' => [
        'type'     => 'anomaly.field_type.text',
        'required' => true,
        'config'   => [
            'default_value' => '{year}/{month}/{day}/{post}'
        ]
    ],
    'module_segment'      => [
        'type'     => 'anomaly.field_type.text',
        'required' => true,
        'config'   => [
            'default_value' => 'posts'
        ]
    ],
    'category_segment'    => [
        'type'     => 'anomaly.field_type.text',
        'required' => true,
        'config'   => [
            'default_value' => 'category'
        ]
    ],
    'tag_segment'         => [
        'type'     => 'anomaly.field_type.text',
        'required' => true,
        'config'   => [
            'default_value' => 'tag'
        ]
    ],
    'theme_layout'        => [
        'type'     => 'anomaly.field_type.select',
        'required' => true,
        'config'   => [
            'handler' => Layouts::class
        ]
    ]
];
