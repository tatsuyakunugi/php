<?php
$status_codes = [
    [
        'code' => '102',
        'meaning' => 'Processing',
        'description' => '処理中である'
    ],
    [
        'code' => '200',
        'meaning' => 'OK',
        'description' => 'リクエストが正常に成功できた'
    ],
    [
        'code' => '301',
        'meaning' => 'Moved Permanently',
        'description' => 'リクエストしたリソースが恒久的に移動されている'
    ],
    [
        'code' => '304',
        'meaning' => 'Not Modifired',
        'description' => 'リクエストしたリソースは更新されていない'
    ],
    [
        'code' => '400',
        'meaning' => 'Bad Request',
        'description' => 'クライアントのリクエストに異常がある'
    ],
    [
        'code' => '401',
        'meaning' => 'Unauthorized',
        'description' => 'アクセストークンが無効の時や、認証がされていない'
    ],
    [
        'code' => '403',
        'meaning' => 'Forbidden',
        'description' => '閲覧権限が無いファイルやフォルダがある'
    ],
    [
        'code' => '404',
        'meaning' => 'Not Found',
        'description' => 'Webページが見つからない'
    ],
    [
        'code' => '500',
        'meaning' => 'Internal Server Error',
        'description' => '何らかのサーバー内で問題が起きた'
    ],
    [
        'code' => '502',
        'meaning' => 'Bad Getway',
        'description' => 'サーバーがリクエストに満たすのに必要な機能をサポートしていない'
    ],
    
    [
        'code' => '503',
        'meaning' => 'Server Unavailable',
        'description' => '一時的にサーバーにアクセスできない'
    ]
];
