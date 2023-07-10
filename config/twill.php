<?php

return [
    'enabled' => [
        'users-management' => true,
        'media-library' => true,
        'file-library' => true,
        'block-editor' => true,
        'buckets' => true,
        'users-image' => true,
        'settings' => true,
        'dashboard' => true,
        'search' => true,
        'users-description' => false,
        'activitylog' => true,
        'users-2fa' => false,
        'users-oauth' => false,
        'permissions-management' => true,
    ],
    'permissions' => [
        'level' => \A17\Twill\Enums\PermissionLevel::LEVEL_ROLE_GROUP_ITEM,
    ],
];
