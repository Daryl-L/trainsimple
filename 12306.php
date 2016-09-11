<?php
    require __DIR__.'/autoload.php';

    $station = require(__DIR__.'/station.php');

    $client = new GuzzleHttp\Client();
    $opts = getopt("d:f:t:");
    if (!isset($opts['d']) || !isset($opts['f']) || !isset($opts['t'])) {
        echo "-d 日期\n-f 出发站\n-t 目的站";
    }
    $response = $client->get('https://kyfw.12306.cn/otn/lcxxcx/query', [
        'verify' => false,
        'query' => [
            'purpose_codes' => 'ADULT',
            'queryDate' => $opts['d'],
            'from_station' => $station[$opts['f']],
            'to_station' => $station[$opts['t']],
        ]
    ]);
    $res = json_decode($response->getBody());

    $header = [
        '车次',
        '出发站',
        '到达站',
        '出发时间',
        '到达时间',
        '历时',
        '商务座',
        '特等座',
        '一等座',
        '二等座',
        '高级软卧',
        '软卧',
        '硬卧',
        '软座',
        '硬座',
        '无座',
    ];
$body = [
    [
        '1',
        '1',
        '1',
        '1',
        '1',
        '1',
        '1',
        '1',
        '1',
        '1',
        '1',
        '1',
        '1',
        '1',
        '1',
        '1',
    ],
];

$table = new jc21\CliTable;

