<?php

return [
    'api_key' => env('TRELLO_API_KEY', null),
    'api_token' => env('TRELLO_API_TOKEN', null),
    'list_ids' => [
        'blog' => env('TRELLO_BLOG_LIST_ID', null),
        'extension-feature' => env('TRELLO_EXTENSION_FEATURE_LIST_ID', null),
        'new-extension' => env('TRELLO_NEW_EXTENSION_LIST_ID', null),
        'showcase' => env('TRELLO_SHOWCASE_LIST_ID', null),
        'news' => env('TRELLO_NEWS_LIST_ID', null),
        'other' => env('TRELLO_OTHER_LIST_ID', null),
    ]
];
