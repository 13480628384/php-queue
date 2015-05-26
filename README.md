# php-queue
PHP开发的磁盘存储消息队列服务，基于leveldb和swoole，在4核机器上处理能力可以达到2.5W/s

* leveldb: <https://github.com/google/leveldb>
* php-leveldb: <https://github.com/reeze/php-leveldb>
* swoole: <https://github.com/swoole/swoole-src>

安装
----
安装swoole和leveldb扩展，并下载源码

```shell
pecl install swoole 
pecl install leveldb
```

> 程序使用了客户端EOF分包，需要swoole-1.7.17以上版本

运行
----
```shell
php server.php
```

测试
----
```shell
php client.php
run.sh
```

