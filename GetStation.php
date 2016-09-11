<?php
    require __DIR__.'/vendor/autoload.php';

    $client = new GuzzleHttp\Client();
    $response = $client->get('https://kyfw.12306.cn/otn/resources/js/framework/station_name.js?station_version=1.8964', ['verify' => false]);
    preg_match_all("/@.*?\|.*?\|(?<code>.*?)\|(?<name>.*?)\|.*?\|[0-9]+?/", $response->getBody(), $arr);
    $name = $arr['name'];
    $code = $arr['code'];
    $res = 'return [';
    foreach ($name as $key => $value) {
        $res .= "\n'{$value}' => '{$code[$key]}',";
    }
    $res .= "\n];";
    echo $res;
    file_put_contents("station.php", $res);