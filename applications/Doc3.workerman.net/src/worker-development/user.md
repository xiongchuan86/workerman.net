# user

## 说明:
```php
string Worker::$user
```

设置此实例使用哪个用户运行。此属性只有当前用户为root用户时才能生效。不设置时默认以当前用户运行。

建议```$user```设置权限较低的用户，例如www-data、apache、nobody等。


## 范例

```php
use WorkerMan\Worker;
$worker = new Worker('websocket://0.0.0.0:8484');
// 设置实例的运行用户
$worker->user = 'www-data';
$worker->onWorkerStart = function($worker)
{
    echo "Worker starting...\n";
};
```