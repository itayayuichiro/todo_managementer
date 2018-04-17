# Todoリストアプリケーション

## 概要

Todoの管理ができるWebアプリケーション

具体的な機能

* Todoの表示
* Todoの作成
* Todoの編集
* Todoの検索
* Todoの削除(追加機能)
* Todoの完了・未完了の変更

## 使用した技術要素

* 言語:php(7.1.7)
* フレームワーク:Cakephp(2.10.4)
* データベース:MySQL(5.7.21)


## 全体の設計・構成についての説明


| エンドポイント         | 機能解説                                                                                                    |
|--------------|----------------------------------------------------------------------------------------------------------------|
| /tasks・/tasks/index           | Todoの一覧を表示する(期限切れ or 期限が今日のタスクは色が違う)                           |
| /tasks/create         | Todoを作成する                                                          |
| /tasks/edit         | Todoの編集画面を表示する                                                          |
| /tasks/update | Todoを編集する　|
| /tasks/search        | Todoの検索結果一覧を表示する(期限切れ or 期限が今日のタスクは色が違う)                     |
| /tasks/delete       |  Todoを削除する                                                               |
| /tasks/finish | Todoの「完了」「未完了」を切り替える　|


## 開発環境のセットアップ手順

1. DBを作成
1. SQLダンプをインポート(/todo_managementer/app/ddl/todo_2018-04-05.sql)
1. ソースコードをcloneする 
1. /todo_managementer/app/Config/database.phpの69行目以降(host/login/password/database)の値を、以下のように変更する

```
public $default = array(
	'datasource' => 'Database/Mysql',
	'persistent' => false,
	'host' => '自身のMYSQLホスト名',
	'login' => 'ユーザー名',
	'password' => 'パスワード',
	'database' => 'DB名',
	'prefix' => '',
	'timezone' => 'Asia/Tokyo',
	'encoding' => 'utf8',
);

```

1. cd /todo_managementerでtodo_managementerディレクトリに移動
1. 以下のようにドキュメントルートを指定して実行
```
php -S localhost:8080 -t app/webroot
```


## 動作確認できるURI

http://ity-y.sakura.ne.jp/todo_managementer/
