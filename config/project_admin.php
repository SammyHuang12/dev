<?php

return [

    'sidebar' => [

        'MENU'=>[
            [
                'title' => 'Dashboard',
                'icon' => 'ri-dashboard-line',
                'route' => 'dashboard',
                'badge' => 3,
            ],    
            [
                'title' => 'Calendar',
                'icon' => 'ri-calendar-2-line',
                'route' => 'calendar',
            ],    
            [
                'title' => 'Email',
                'icon' => 'ri-mail-send-line',
                'sub-sidebar' => [
                    [
                        'title' => 'Inbox',
                        'route' => 'email.inbox',
                    ],
                    [
                        'title' => 'Read',
                        'route' => 'email.read',
                    ],
                ]
            ],
            [
                'title' => 'Layouts',
                'icon' => 'ri-layout-3-line',
                'sub-sidebar' => [
                    [
                        'title' => 'Vertical',
                        'route' => 'layouts.vertical',
                    ],
                    [
                        'title' => 'Horizontal',
                        'route' => 'layouts.horizontal',
                    ],
                ]
            ],
            [
                'title' => '客製頁面',
                'icon' => 'ri-mail-send-line',
                'sub-sidebar' => [
                    [
                        'title' => '列表頁',
                        'route' => 'table_lists',
                    ],
                    [
                        'title' => 'eventDetails',
                        'route' => 'event_details',
                    ],
                    [
                        'title' => 'detailsNew',
                        'route' => 'event_details_new',
                    ],
                ]
            ],
        ],    
        'PAGES'=>[
            [
                'title' => 'Authentication',
                'icon' => 'ri-account-circle-line',
                'sub-sidebar' => [
                    [
                        'title' => 'Login',
                        'route' => 'Login',
                    ],
                    [
                        'title' => 'Register',
                        'route' => 'Register',
                    ],
                    [
                        'title' => 'Recover Password',
                        'route' => 'Recover-Password',
                    ],
                    [
                        'title' => 'Lock Screen',
                        'route' => 'Lock-Screen',
                    ],
                ]
            ],
            [
                'title' => 'Utility',
                'icon' => 'ri-profile-line',
                'sub-sidebar' => [
                    [
                        'title' => 'Starter Page',
                        'route' => 'Starter-Page',
                    ],
                    [
                        'title' => 'Timeline',
                        'route' => 'Timeline',
                    ],
                    [
                        'title' => 'Directory',
                        'route' => 'Directory',
                    ],
                    [
                        'title' => 'Invoice',
                        'route' => 'Invoice',
                    ],
                    [
                        'title' => 'Error 404',
                        'route' => 'Error-404',
                    ],
                    [
                        'title' => 'Error 500',
                        'route' => 'Error-500',
                    ],
                ]
            ],
        ],
        'Components'=>[
            [
                'title' => 'UI Elements',
                'icon' => 'ri-pencil-ruler-2-line',
                'sub-sidebar' => [
                    [
                        'title' => 'Alerts',
                        'route' => 'Alerts',
                    ],
                    [
                        'title' => 'Buttons',
                        'route' => 'Buttons',
                    ],
                ]
            ],
            [
                'title' => 'Advanced UI',
                'icon' => 'ri-vip-crown-2-line',
                'sub-sidebar' => [
                    [
                        'title' => 'Range Slider',
                        'route' => 'Range-Slider',
                    ],
                    [
                        'title' => 'Round Slider',
                        'route' => 'Round-Slider',
                    ],
                ]
            ],
            [
                'title' => 'Forms',
                'icon' => 'ri-eraser-fill',
                'badge' => 8,
                'sub-sidebar' => [
                    [
                        'title' => 'Form Elements',
                        'route' => 'Form-Elements',
                    ],
                    [
                        'title' => 'Form Validation',
                        'route' => 'Form-Validation',
                    ],
                ]
            ],
            [
                'title' => 'Tables',
                'icon' => 'ri-table-2',
                'sub-sidebar' => [
                    [
                        'title' => 'Basic Tables',
                        'route' => 'Basic-Tables',
                    ],
                    [
                        'title' => 'Data Tables',
                        'route' => 'Data-Tables',
                    ],
                ]
            ],
            [
                'title' => 'Charts',
                'icon' => 'ri-bar-chart-line',
                'sub-sidebar' => [
                    [
                        'title' => 'Apex Charts',
                        'route' => 'Apex-Charts',
                    ],
                    [
                        'title' => 'Chartjs Charts',
                        'route' => 'Chartjs-Charts',
                    ],
                ]
            ],
            [
                'title' => 'Icons',
                'icon' => 'ri-brush-line',
                'sub-sidebar' => [
                    [
                        'title' => 'Remix Icons',
                        'route' => 'Remix-Icons',
                    ],
                    [
                        'title' => 'Material Design',
                        'route' => 'Material-Design',
                    ],
                ]
            ],
            [
                'title' => 'Maps',
                'icon' => 'ri-map-pin-line',
                'sub-sidebar' => [
                    [
                        'title' => 'Google Maps',
                        'route' => 'Google-Maps',
                    ],
                    [
                        'title' => 'Vector Maps',
                        'route' => 'Vector-Maps',
                    ],
                ]
            ],
            
        ]


    ]       

];