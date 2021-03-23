# laravelアプリとインフラ構成について　　(随時更新中です)

<p align="center">
    <a href="http://ec2-35-72-191-104.ap-northeast-1.compute.amazonaws.com/" target="blank">
    <img src="https://github.com/Tatsumi-I/laravel_app/blob/master/SS_pf_top.png" width="400"></a>
</p>


## 概要

- このサイトはlaravelでのCRUD機能及びMVC理解を目的に作成しました。
- 同時に、簡易的ではありますが、その他成果物へリンクできるポートフォリオとしました。

各画像よりその他の成果物をご覧になれます。

## laravelでのCRUD機能紹介

- 基本的なデータの新規作成、詳細、更新、削除ができます。
- DBはユーザーテーブルと投稿内容のテーブルがあります。

**今後DBや機能を追加していく予定です**

## 基盤構成

- 目的とゴール


awsの基本的な使用方法と設計の概念を理解するためにawsを使用しています

## アーキテクチャ図
<p align="center">
<img src="https://github.com/Tatsumi-I/laravel_app/blob/master/aws%E6%A7%8B%E6%88%90%E5%9B%B3.jpg" width="400"> 
</p>

**設計概要：**

### セキュリティ
- インスタンス（compute）を publicサブネット と privateサブネットに設置
- DBはセキュリティ上、インターネットと直接通信ができない

### 疎通
- ⭕️ リモート -> publicサブネット内のインスタンス　-> privateサブネット内のインスタンス
- ⭕️ リモート -> publicサブネット内のインスタンス
- ❌ リモート -> privateサブネット内のインスタンス
- ssh接続はpublicサブネット内のインスタンスを踏み台にして接続する


### NW
- WebサーバーとNATゲートウェイはEIP（固定IP）とする
- publicサブネット内のインスタンス　default route : internet gw
- privateサブネット内のインスタンス　 default route : NAT gw
- NATゲートウェイを使用して、privateサブネット内のインスタンス（MariaDB）のインストールやアップデートを実施する
- 

### Git
- git Deploykeyを設定
- aws -> github へpush出来る状態

## 最後に
**お忙しい中、最後まで読んでいただきありがとうございます。**
その他のアプリについても、ぜひご覧ください。

[portfolio](http://ec2-35-72-191-104.ap-northeast-1.compute.amazonaws.com)
