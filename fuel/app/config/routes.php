<?php
return [
    '_root_'                => 'top/main/index',
    '_404_'                 => 'start/404',
    'check'                 => 'check',
    'top'                   => 'top/index',
    'client'                => 'client/main/index',
    'admin/(:any)'          => 'admin/$1',
    'admin'                 => 'admin',
    'system'                => 'system',
    'system/(:any)'         => 'system/$1',
    ':accounttype/login'    => 'member/login',
    ':accounttype/logout'   => 'member/logout',
    'sponsor/(:any)'        => 'sponsor/$1',
    'agency/(:any)'         => 'sponsor/$1',
    'media/(:any)'          => 'media/$1',
    'rep/(:any)'            => 'media/$1',
    ':accounttype'          => 'member',
];
