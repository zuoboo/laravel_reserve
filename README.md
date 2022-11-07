＃予約管理システム

## ダウンロード方法
git clone
git clone https://github.com/zuoboo/laravel_reserve
git clone ブランチを指定してダウンロードする場合
git clone -b ブランチ名 https://github.com/zuoboo/laravel_reserve

もしくはzipファイルをダウンロードしてください。

.envファイルを作成。
.envファイルの中の下記をご利用の環境に合わせて変更してください。

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_ureserve
DB_USERNAME=ureserve
DB_PASSWORD=password123

XAMPP/MAMPまたは他の開発環境でDBを起動した後に、
php artisan migrate:fresh --seed
と実行してください。（データベーステーブルとダミーデータが追加されればOK）

最後に
php artisan key:generate
と入力してキーを生成後、
php artisan serve で簡易サーバーを立ち上げ、表示確認してください。
