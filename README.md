# lubed-mvc-demo

1.下载代码到本地

```
git clone https://github.com/rustysun-qq/lubed-mvc-demo lubed-mvc-demo
```

2. Composer更新依赖组件

```
cd lubed-mvc-demo
composer update
```

3.执行PHP命令 启动一个HTTP SERVER

```php
php -S localhost:8080 -t public
```

4. 在浏览器 访问地址

```
http://localhost:8080/hello
```

会在浏览器中看到

```
Hello World
```