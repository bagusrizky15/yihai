<?php
return [
    '_role-superuser' => [
        'type' => 1,
        'description' => 'Have access to all menu in system.',
        'children' => [
            '_menu-/system/settings',
            '_menu-/system/reports',
            '_menu-/system/users-system',
            '_menu-/system/users',
            '_menu-/system/activity-log',
            '_menu-/system/roles',
            '_menu-/system/reports/build',
            '_menu-/cat/references/material-level',
            '_menu-/cat/references/material',
            '_menu-/cat/system/questions',
            '_menu-/cat/system/exam',
            '_menu-/cat/system/exam-material',
            '_menu-/cat/system/exam-period',
            '_menu-/cat/system/participant',
            '_menu-/cat/system/exam-participant',
        ],
    ],
    '_user-system' => [
        'type' => 1,
        'description' => 'User group "system".',
    ],
    '_menu-/system/settings' => [
        'type' => 2,
        'description' => 'Main CRUD',
        'children' => [
            '_menu-/system/settings/index',
            '_menu-/system/settings/create',
            '_menu-/system/settings/update',
            '_menu-/system/settings/delete',
            '_menu-/system/settings/view',
            '_menu-/system/settings/import',
            '_menu-/system/settings/module-system',
            '_menu-/system/settings/module-cat',
        ],
    ],
    '_menu-/system/settings/index' => [
        'type' => 2,
    ],
    '_menu-/system/settings/create' => [
        'type' => 2,
    ],
    '_menu-/system/settings/update' => [
        'type' => 2,
    ],
    '_menu-/system/settings/delete' => [
        'type' => 2,
    ],
    '_menu-/system/settings/view' => [
        'type' => 2,
    ],
    '_menu-/system/settings/import' => [
        'type' => 2,
    ],
    '_menu-/system/reports' => [
        'type' => 2,
        'description' => 'Main CRUD',
        'children' => [
            '_menu-/system/reports/index',
            '_menu-/system/reports/create',
            '_menu-/system/reports/update',
            '_menu-/system/reports/delete',
            '_menu-/system/reports/view',
            '_menu-/system/reports/import',
            '_menu-/system/reports/duplicate',
            '_menu-/system/reports/template',
        ],
    ],
    '_menu-/system/reports/index' => [
        'type' => 2,
    ],
    '_menu-/system/reports/create' => [
        'type' => 2,
    ],
    '_menu-/system/reports/update' => [
        'type' => 2,
    ],
    '_menu-/system/reports/delete' => [
        'type' => 2,
    ],
    '_menu-/system/reports/view' => [
        'type' => 2,
    ],
    '_menu-/system/reports/import' => [
        'type' => 2,
    ],
    '_menu-/system/reports/duplicate' => [
        'type' => 2,
    ],
    '_menu-/system/reports/template' => [
        'type' => 2,
    ],
    '_menu-/system/users-system' => [
        'type' => 2,
        'description' => 'Main CRUD',
        'children' => [
            '_menu-/system/users-system/index',
            '_menu-/system/users-system/create',
            '_menu-/system/users-system/update',
            '_menu-/system/users-system/delete',
            '_menu-/system/users-system/view',
            '_menu-/system/users-system/import',
        ],
    ],
    '_menu-/system/users-system/index' => [
        'type' => 2,
    ],
    '_menu-/system/users-system/create' => [
        'type' => 2,
    ],
    '_menu-/system/users-system/update' => [
        'type' => 2,
    ],
    '_menu-/system/users-system/delete' => [
        'type' => 2,
    ],
    '_menu-/system/users-system/view' => [
        'type' => 2,
    ],
    '_menu-/system/users-system/import' => [
        'type' => 2,
    ],
    '_menu-/system/users' => [
        'type' => 2,
        'description' => 'Main CRUD',
        'children' => [
            '_menu-/system/users/index',
            '_menu-/system/users/create',
            '_menu-/system/users/update',
            '_menu-/system/users/delete',
            '_menu-/system/users/view',
            '_menu-/system/users/import',
            '_menu-/system/users/password',
        ],
    ],
    '_menu-/system/users/index' => [
        'type' => 2,
    ],
    '_menu-/system/users/create' => [
        'type' => 2,
    ],
    '_menu-/system/users/update' => [
        'type' => 2,
    ],
    '_menu-/system/users/delete' => [
        'type' => 2,
    ],
    '_menu-/system/users/view' => [
        'type' => 2,
    ],
    '_menu-/system/users/import' => [
        'type' => 2,
    ],
    '_menu-/system/users/password' => [
        'type' => 2,
    ],
    '_menu-/system/activity-log' => [
        'type' => 2,
        'description' => 'Main CRUD',
        'children' => [
            '_menu-/system/activity-log/index',
            '_menu-/system/activity-log/view',
        ],
    ],
    '_menu-/system/activity-log/index' => [
        'type' => 2,
    ],
    '_menu-/system/activity-log/view' => [
        'type' => 2,
    ],
    '_menu-/system/roles' => [
        'type' => 2,
        'description' => 'Main CRUD',
        'children' => [
            '_menu-/system/roles/roles',
            '_menu-/system/roles/permissions',
            '_menu-/system/roles/assign',
            '_menu-/system/roles/add-role',
            '_menu-/system/roles/detail-role',
            '_menu-/system/roles/users',
        ],
    ],
    '_menu-/system/roles/roles' => [
        'type' => 2,
    ],
    '_menu-/system/roles/permissions' => [
        'type' => 2,
    ],
    '_menu-/system/roles/assign' => [
        'type' => 2,
    ],
    '_menu-/system/roles/add-role' => [
        'type' => 2,
    ],
    '_menu-/system/roles/detail-role' => [
        'type' => 2,
    ],
    '_menu-/system/roles/users' => [
        'type' => 2,
    ],
    '_menu-/system/settings/module-system' => [
        'type' => 2,
    ],
    '_menu-/system/reports/build' => [
        'type' => 2,
        'description' => 'Main CRUD',
        'children' => [
            '_menu-/system/reports/build/exam-period-pass',
            '_menu-/system/reports/build/questions-report',
            '_menu-/system/reports/build/participant-id',
        ],
    ],
    '_menu-/system/reports/build/exam-period-pass' => [
        'type' => 2,
    ],
    '_menu-/system/reports/build/questions-report' => [
        'type' => 2,
    ],
    '_menu-/system/reports/build/participant-id' => [
        'type' => 2,
    ],
    '_user-cat_participant' => [
        'type' => 1,
        'description' => 'User group "cat_participant".',
    ],
    '_role-module-cat' => [
        'type' => 1,
        'description' => 'Have access to all menu in module: "cat"',
        'children' => [
            '_menu-/cat/references/material-level',
            '_menu-/cat/references/material',
            '_menu-/cat/system/questions',
            '_menu-/cat/system/exam',
            '_menu-/cat/system/exam-material',
            '_menu-/cat/system/exam-period',
            '_menu-/cat/system/participant',
            '_menu-/cat/system/exam-participant',
        ],
    ],
    '_menu-/cat/references/material-level' => [
        'type' => 2,
        'description' => 'Main CRUD',
        'children' => [
            '_menu-/cat/references/material-level/index',
            '_menu-/cat/references/material-level/create',
            '_menu-/cat/references/material-level/update',
            '_menu-/cat/references/material-level/delete',
            '_menu-/cat/references/material-level/view',
            '_menu-/cat/references/material-level/import',
        ],
    ],
    '_menu-/cat/references/material-level/index' => [
        'type' => 2,
    ],
    '_menu-/cat/references/material-level/create' => [
        'type' => 2,
    ],
    '_menu-/cat/references/material-level/update' => [
        'type' => 2,
    ],
    '_menu-/cat/references/material-level/delete' => [
        'type' => 2,
    ],
    '_menu-/cat/references/material-level/view' => [
        'type' => 2,
    ],
    '_menu-/cat/references/material-level/import' => [
        'type' => 2,
    ],
    '_menu-/cat/references/material' => [
        'type' => 2,
        'description' => 'Main CRUD',
        'children' => [
            '_menu-/cat/references/material/index',
            '_menu-/cat/references/material/create',
            '_menu-/cat/references/material/update',
            '_menu-/cat/references/material/delete',
            '_menu-/cat/references/material/view',
            '_menu-/cat/references/material/import',
        ],
    ],
    '_menu-/cat/references/material/index' => [
        'type' => 2,
    ],
    '_menu-/cat/references/material/create' => [
        'type' => 2,
    ],
    '_menu-/cat/references/material/update' => [
        'type' => 2,
    ],
    '_menu-/cat/references/material/delete' => [
        'type' => 2,
    ],
    '_menu-/cat/references/material/view' => [
        'type' => 2,
    ],
    '_menu-/cat/references/material/import' => [
        'type' => 2,
    ],
    '_menu-/cat/system/questions' => [
        'type' => 2,
        'description' => 'Main CRUD',
        'children' => [
            '_menu-/cat/system/questions/index',
            '_menu-/cat/system/questions/create',
            '_menu-/cat/system/questions/update',
            '_menu-/cat/system/questions/delete',
            '_menu-/cat/system/questions/view',
            '_menu-/cat/system/questions/import',
        ],
    ],
    '_menu-/cat/system/questions/index' => [
        'type' => 2,
    ],
    '_menu-/cat/system/questions/create' => [
        'type' => 2,
    ],
    '_menu-/cat/system/questions/update' => [
        'type' => 2,
    ],
    '_menu-/cat/system/questions/delete' => [
        'type' => 2,
    ],
    '_menu-/cat/system/questions/view' => [
        'type' => 2,
    ],
    '_menu-/cat/system/questions/import' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam' => [
        'type' => 2,
        'description' => 'Main CRUD',
        'children' => [
            '_menu-/cat/system/exam/index',
            '_menu-/cat/system/exam/create',
            '_menu-/cat/system/exam/update',
            '_menu-/cat/system/exam/delete',
            '_menu-/cat/system/exam/view',
            '_menu-/cat/system/exam/import',
        ],
    ],
    '_menu-/cat/system/exam/index' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam/create' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam/update' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam/delete' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam/view' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam/import' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-material' => [
        'type' => 2,
        'description' => 'Main CRUD',
        'children' => [
            '_menu-/cat/system/exam-material/index',
            '_menu-/cat/system/exam-material/create',
            '_menu-/cat/system/exam-material/update',
            '_menu-/cat/system/exam-material/delete',
            '_menu-/cat/system/exam-material/view',
            '_menu-/cat/system/exam-material/import',
        ],
    ],
    '_menu-/cat/system/exam-material/index' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-material/create' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-material/update' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-material/delete' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-material/view' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-material/import' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-period' => [
        'type' => 2,
        'description' => 'Main CRUD',
        'children' => [
            '_menu-/cat/system/exam-period/index',
            '_menu-/cat/system/exam-period/create',
            '_menu-/cat/system/exam-period/update',
            '_menu-/cat/system/exam-period/delete',
            '_menu-/cat/system/exam-period/view',
            '_menu-/cat/system/exam-period/import',
            '_menu-/cat/system/exam-period/download-seb',
            '_menu-/cat/system/exam-period/live',
        ],
    ],
    '_menu-/cat/system/exam-period/index' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-period/create' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-period/update' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-period/delete' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-period/view' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-period/import' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-period/download-seb' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-period/live' => [
        'type' => 2,
    ],
    '_menu-/cat/system/participant' => [
        'type' => 2,
        'description' => 'Main CRUD',
        'children' => [
            '_menu-/cat/system/participant/index',
            '_menu-/cat/system/participant/create',
            '_menu-/cat/system/participant/update',
            '_menu-/cat/system/participant/delete',
            '_menu-/cat/system/participant/view',
            '_menu-/cat/system/participant/import',
        ],
    ],
    '_menu-/cat/system/participant/index' => [
        'type' => 2,
    ],
    '_menu-/cat/system/participant/create' => [
        'type' => 2,
    ],
    '_menu-/cat/system/participant/update' => [
        'type' => 2,
    ],
    '_menu-/cat/system/participant/delete' => [
        'type' => 2,
    ],
    '_menu-/cat/system/participant/view' => [
        'type' => 2,
    ],
    '_menu-/cat/system/participant/import' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-participant' => [
        'type' => 2,
        'description' => 'Main CRUD',
        'children' => [
            '_menu-/cat/system/exam-participant/index',
            '_menu-/cat/system/exam-participant/create',
            '_menu-/cat/system/exam-participant/update',
            '_menu-/cat/system/exam-participant/delete',
            '_menu-/cat/system/exam-participant/view',
            '_menu-/cat/system/exam-participant/import',
        ],
    ],
    '_menu-/cat/system/exam-participant/index' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-participant/create' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-participant/update' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-participant/delete' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-participant/view' => [
        'type' => 2,
    ],
    '_menu-/cat/system/exam-participant/import' => [
        'type' => 2,
    ],
    '_menu-/system/settings/module-cat' => [
        'type' => 2,
    ],
];
