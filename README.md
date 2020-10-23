# swoole-framework-profiler


## Steps

> prerequisite 

-[ ] pinpoint-c-agent module installed
-[ ] collect-agent works fine

### 1. Download plugins from pinpoint-c-agent

### 2. Make it works

#### 2.1 apps/http-server

1. copy `Plugins` into root
2. composer update
3. cp `Plugins/Framework/SwooleApp/setting.ini` into root
4. php run_server.php

### 2.2 apps/easyswoole-admin

1. easyswoole-admin installed 
2. copy `Plugins` into root
3. Replace composer.json with`Plugins/Framework/EasySwoole/composer.json` and `composer update` 
4. cp `Plugins/Framework/EasySwoole/setting.ini` into root
5. Update easyswoole as mentioned in `Plugins/Framework/EasySwoole/readme.md`
6. php easyswoole start dev

