# 部署说明
----
### 环境需求
<https://laravel.com/docs/5.5>  

 `PHP >= 7.1.3`  
 `PDO PHP Extension`  
 `OpenSSL PHP Extension`  
 `Mbstring PHP Extension`  
 `Tokenizer PHP Extension`  
 `XML PHP Extension`
 ### 部署
 运行命令 `composer install`  
 运行命令 `yarn|npm install`  
 
 新建数据库与数据库用户  
 复制 .env.example 到 .env  
 修改 .env 中的配置项  
 
 运行命令 `php artisan key:generate`  
 运行命令 `php artisan migrate`  
 运行命令 `php artisan storage:link`