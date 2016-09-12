# trainsimple

**火车余票查询**

用够了12306官方的余票查询了么，程序员专属余票查询来辣~~

### 使用指南

#### 安装

`composer install`

#### 依赖的扩展

* `"guzzlehttp/guzzle": "^6.2"`
* `"lijinma/php-cli-color": "^1.0"`
* `"pear/console_table": "^1.3"`

#### 使用

`php 12306.php -d 日期 -f 出发站全拼 -t 到达站全拼`

###### 例

查询2016年9月12日从杭州到贵阳的车次。

`php 12306.php -d 2016-09-12 -f hangzhou -t guiyang`

查询结果如图所示

![](https://o90cnn3g2.qnssl.com/QQ20160912-0@2x.png)


