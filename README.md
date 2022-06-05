# selfNavi
##概要

##環境構築手順
#1. Laravelプロジェクトを作成
>composer create-project --prefer-dist laravel/laravel ci
#2. サーバ起動
>cd ci
>php artisan serve
#3. install laravel/ui
>composer require laravel/ui
#4. install laravel/ui vue
>php artisan ui vue
#5. install npm 
>npm install
#6. install vue router
>npm install --save vue-router
※ERROR
#7. build
>npm run dev


##チュートリアル
Step1. Vueフロントエンド実装
https://qiita.com/minato-naka/items/9241d9c7a7433985056d
Step2. LaravelAPI実装
https://qiita.com/minato-naka/items/0e709cb0e6628c82c1c5
Step3. VueとAPI結合
https://qiita.com/minato-naka/items/9362ea5af5f823c95b0b