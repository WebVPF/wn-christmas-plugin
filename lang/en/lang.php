<?php

return [
    'plugin' => [
        'name' => 'Christmas holidays',
        'desc' => 'Decorations for the site for the Christmas holidays.',
    ],
    'garland' => [
        'name' => 'Christmas garland',
        'desc' => 'Decoration for Christmas and New Year holidays',
        'prop' => [
            'ondate' => 'On the indicated days',
            'ondatedesc' => 'Include component only in a specific date period',
            'start' => 'Start',
            'startdesc' => 'Include component on the specified day',
            'startvalidmes' => 'Incorrect format for the Beginning in the settings of the Garland component',
            'end' => 'End',
            'enddesc' => 'Turn off a component on a specified day',
            'endvalidmes' => 'Incorrect format for End in Garland component settings',
        ],
    ],
    'snow' => [
        'name' => 'Snow',
        'desc' => 'Snow on pages of your site',
        'prop' => [
            'amount' => 'Number of snowflakes',
            'amount_desc' => 'Number of snowflakes displayed at the same time. Default: 50',
            'amount_validation' => 'The number of snowflakes must be indicated by a number',
            'size' => 'Snowflake size',
            'size_desc' => 'Default: 5',
            'size_validation' => 'The size of the snowflakes must be indicated by a number',
            'speed' => 'Vertical speed',
            'speed_desc' => 'The vertical speed of the snowflakes. The more, the faster the snowflakes fall. Default: 1.5',
            'speed_validation' => 'Vertical speed must be indicated by a number',
            'wind' => 'Wind',
            'wind_desc' => 'Horizontal wind energy. The wind will blow to the right if it is a positive number, and a negative number causes the wind to blow to the left. Default: 0',
            'wind_validation' => 'The wind must be indicated by a number',
            'color' => 'Snowflake color',
            'color_desc' => 'This parameter accepts a HEX or RGB color code, e.g. "#fff", "#ffffff", "rgb (255,255,255)". Default: #fff',
            'opacity' => 'Transparency of snowflakes',
            'opacity_desc' => 'Maximum transparency of snowflakes. The plugin will generate snowflakes with different opacity from 0 to this number. Default: 0.8',
            'opacity_validation' => 'The transparency of the snowflakes must be specified by a number',
            'swing' => 'Swinging snowflakes',
            'swing_desc' => 'If you don\'t want the snowflakes to wobble, set this parameter to 0. Default: 1',
            'swing_validation' => 'Swinging snowflakes must be indicated by a number',
            'zIndex' => 'z-index',
            'zIndex_desc' => 'The position of the canvas layer. Set the front or back layer by changing this value. Default: null',
            'zIndex_validation' => 'The z-index must be a number.',
        ],
    ],
];
