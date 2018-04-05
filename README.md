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

* 言語:php
* フレームワーク:Cakephp
* データベース:MySQL


## 全体の設計・構成についての説明


| エンドポイント         | 機能・解説                                                                                                    |
|--------------|----------------------------------------------------------------------------------------------------------------|
| /tasks・/tasks/index           | Todoの一覧を表示する                            |
| /tasks/create         | Todoを作成する                                                          |
| /tasks/edit         | Todoの編集画面を表示する                                                          |
| /tasks/update | Todoを編集する　|
| /tasks/search        | Todoの検索結果一覧を表示する                                                            |
| /tasks/delete       |  Todoを削除する                                                               |
| /tasks/finish | Todoの「完了」「未完了」を切り替える　|


## 開発環境のセットアップ手順

1. DBを作成
1. SQLダンプをインポート
1. ソースコードをcloneする 
1. /todo_managementer/app/Config/database.phpを以下のように変更する