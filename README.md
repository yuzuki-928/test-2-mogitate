# お問い合わせフォーム
## 環境構築
Dockerビルド  
　1.mkdirにて2_laravel-testディレクトリを作成  
　2.下層にdocker,nginx,php,data,srcディレクトリとmysql,my.cnf,default.conf,Dockerfile,php.ini,docker-compose.yml,ファイルを作成  
　3.作成したファイルを記述  
　4.docker-compose up -d --build  
  
Laravel環境構築  
　1.docker-compose exec php bash  
　2.composer install  
　3.composer create-project "laravel/laravel=8.*" . --prefer-dist  
　4...env.exampleファイルから.envを作成し、環境変数を変更  
　5.views,cssフォルダ内にblade.phpとcssを作成  

## 使用技術(実行環境)
・PHP 7.4  
・Laravel 8.8  
・MySPL 8.0

## ER図
![Image](https://github.com/user-attachments/assets/acae35bf-58ad-4de9-b8d3-c1a586ce9aa1)
