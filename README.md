# PHPバージョンアップツール

## 使用パッケージ
- [Composer](https://getcomposer.org/)
    - パッケージ管理ツールのため必須

- [Rector](https://getrector.com/documentation)
    - 自動ソースコード書き換え
    - 参考( [https://zenn.dev/fagai/articles/c4dcfa0665d782](https://zenn.dev/fagai/articles/c4dcfa0665d782) )

- [PHPStan](https://phpstan.org/user-guide/getting-started)
    - 静的解析
    - Rectorで内部的に依存

## 使用方法

使用WPテーマ直下、もしくはアプリケーションの直下でエディタを開いてください。
ターミナルを開き、下記コマンドを入力。

```sh
# リポジトリのクローン
git clone https://github.com/allmanage-co-ltd/php-upgrade.git

# ツールのディレクトリに移動
cd php-upgrade

# 移動したか確認
pwd
/home/~~/~~/themes/my_theme/php-upgrade # ← ケツがphp-upgradeならOK

# 依存関係をインストール
composer install

# 一旦どれくらいの書き換えが発生するかログで確認
# php-upgrade/rector/rector-dry-run.logにログがでます。
composer rector-d

# 書き換え問題なさそうであれば実行
composer rector
```
